<?php
/** Portable category queries and native sticky-post selection. @package Echo_Paix_News */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/** Find the latest published sticky post, falling back to the latest published post. */
function echo_paix_lead_post_id() {
	static $lead_id = null;
	if ( null !== $lead_id ) {
		return $lead_id;
	}
	$args = array(
		'post_type'           => 'post',
		'post_status'         => 'publish',
		'posts_per_page'      => 1,
		'orderby'            => 'date',
		'order'              => 'DESC',
		'fields'             => 'ids',
		'ignore_sticky_posts' => true,
		'no_found_rows'       => true,
	);
	$sticky = array_filter( array_map( 'absint', (array) get_option( 'sticky_posts', array() ) ) );
	$posts  = array();
	if ( $sticky ) {
		$posts = get_posts( array_merge( $args, array( 'post__in' => $sticky ) ) );
	}
	if ( ! $posts ) {
		$posts = get_posts( $args );
	}
	$lead_id = $posts ? (int) $posts[0] : 0;
	return $lead_id;
}

/** Resolve portable theme defaults while respecting native category edits. */
function echo_paix_query_vars( $query, $block ) {
	$settings = isset( $block->context['query'] ) ? $block->context['query'] : array();
	if ( empty( $settings['echoNews'] ) ) {
		return $query;
	}
	$query['post_status']         = 'publish';
	$query['ignore_sticky_posts'] = true;

	// Once a native taxQuery is saved in the Site Editor, its selection takes priority.
	if ( ! array_key_exists( 'taxQuery', $settings ) ) {
		$slugs = array();
		if ( ! empty( $settings['echoCategory'] ) ) {
			$slugs = array( $settings['echoCategory'] );
		} elseif ( ! empty( $settings['echoCategories'] ) && is_array( $settings['echoCategories'] ) ) {
			$slugs = $settings['echoCategories'];
		}
		if ( $slugs ) {
			$ids = array();
			foreach ( $slugs as $slug ) {
				$term = get_category_by_slug( sanitize_title( $slug ) );
				if ( $term ) {
					$ids[] = (int) $term->term_id;
				}
			}
			if ( $ids ) {
				$query['category__in'] = $ids;
			} else {
				$query['post__in'] = array( 0 );
			}
		}
	}
	if ( ! empty( $settings['echoLead'] ) ) {
		$query['post__in'] = array( echo_paix_lead_post_id() );
		$query['offset']   = 0;
	}
	if ( ! empty( $settings['echoExcludeLead'] ) ) {
		$query['post__not_in'] = array_merge( isset( $query['post__not_in'] ) ? $query['post__not_in'] : array(), array( echo_paix_lead_post_id() ) );
	}
	if ( ! empty( $settings['echoRelated'] ) && is_singular( 'post' ) ) {
		$query['category__in'] = wp_get_post_categories( get_queried_object_id() );
		$query['post__not_in'] = array( get_queried_object_id() );
		if ( ! $query['category__in'] ) {
			$query['post__in'] = array( 0 );
		}
	}
	return $query;
}
add_filter( 'query_loop_block_query_vars', 'echo_paix_query_vars', 10, 2 );
