<?php
/** Small dynamic editorial blocks. @package Echo_Paix_News */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/** Register presentation-only blocks; no content is created or published. */
function echo_paix_register_blocks() {
	register_block_pattern_category( 'echo-paix', array( 'label' => __( 'Écho de la Paix', 'echo-paix-news' ) ) );
	wp_register_script( 'echo-paix-editor', get_theme_file_uri( 'assets/editorial.js' ), array( 'wp-blocks', 'wp-element', 'wp-block-editor', 'wp-components', 'wp-hooks', 'wp-compose', 'wp-data', 'wp-core-data' ), wp_get_theme()->get( 'Version' ), true );
	$blocks = array(
		'sharing'       => 'echo_paix_render_sharing',
		'edition'       => 'echo_paix_render_edition',
		'image-caption' => 'echo_paix_render_caption',
	);
	foreach ( $blocks as $name => $callback ) {
		register_block_type( 'echo-paix/' . $name, array( 'api_version' => 3, 'editor_script' => 'echo-paix-editor', 'render_callback' => $callback ) );
	}
}
add_action( 'init', 'echo_paix_register_blocks' );

/** French edition date using the timezone set in WordPress. */
function echo_paix_render_edition() {
	$now    = current_datetime();
	$days   = array( 'dimanche', 'lundi', 'mardi', 'mercredi', 'jeudi', 'vendredi', 'samedi' );
	$months = array( '', 'janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'août', 'septembre', 'octobre', 'novembre', 'décembre' );
	$label  = $days[ (int) $now->format( 'w' ) ] . ' ' . $now->format( 'j' ) . ' ' . $months[ (int) $now->format( 'n' ) ] . ' ' . $now->format( 'Y' );
	return '<p class="echo-edition-date"><time datetime="' . esc_attr( $now->format( 'Y-m-d' ) ) . '">' . esc_html( $label ) . '</time></p>';
}

/** Preserve the actual media-library caption and any photographer credit it contains. */
function echo_paix_render_caption() {
	if ( ! is_singular( 'post' ) ) {
		return '';
	}
	$caption = wp_get_attachment_caption( get_post_thumbnail_id( get_queried_object_id() ) );
	return $caption ? '<div class="echo-image-caption">' . wp_kses_post( wpautop( $caption ) ) . '</div>' : '';
}

/** Share only when a reader chooses an outgoing link. */
function echo_paix_render_sharing() {
	if ( ! is_singular( 'post' ) ) {
		return '';
	}
	$post_id = get_queried_object_id();
	$url     = get_permalink( $post_id );
	$title   = get_the_title( $post_id );
	$links   = array(
		'Facebook' => 'https://www.facebook.com/sharer/sharer.php?u=' . rawurlencode( $url ),
		'WhatsApp' => 'https://wa.me/?text=' . rawurlencode( $title . ' ' . $url ),
		'Courriel' => 'mailto:?subject=' . rawurlencode( $title ) . '&body=' . rawurlencode( $url ),
	);
	$html = '<nav class="echo-sharing" aria-label="' . esc_attr__( 'Partager cet article', 'echo-paix-news' ) . '"><span>' . esc_html__( 'Partager cet article', 'echo-paix-news' ) . '</span>';
	foreach ( $links as $label => $link ) {
		$html .= '<a href="' . esc_url( $link ) . '">' . esc_html( $label ) . '</a>';
	}
	return $html . '</nav>';
}

/** Supply a quiet typographic fallback, never a fabricated reporting photograph. */
function echo_paix_featured_image_fallback( $content, $block, $instance ) {
	if ( '' !== trim( $content ) || empty( $block['attrs']['className'] ) || false === strpos( $block['attrs']['className'], 'echo-story-image' ) ) {
		return $content;
	}
	$post_id = isset( $instance->context['postId'] ) ? (int) $instance->context['postId'] : 0;
	if ( ! $post_id ) {
		return $content;
	}
	return '<figure class="wp-block-post-featured-image echo-story-image echo-image-fallback"><a href="' . esc_url( get_permalink( $post_id ) ) . '" aria-label="' . esc_attr( get_the_title( $post_id ) ) . '"><span aria-hidden="true">ECHO<br>DE LA PAIX</span></a></figure>';
}
add_filter( 'render_block_core/post-featured-image', 'echo_paix_featured_image_fallback', 10, 3 );

/** Display unconfigured footer icons without inventing profile URLs. */
function echo_paix_social_placeholders( $content, $block ) {
	$classes = isset( $block['attrs']['className'] ) ? explode( ' ', $block['attrs']['className'] ) : array();
	if ( '' !== trim( $content ) || ! in_array( 'echo-social-slot', $classes, true ) ) {
		return $content;
	}
	$services = array( 'facebook' => 'Facebook', 'instagram' => 'Instagram', 'x' => 'X', 'youtube' => 'YouTube', 'linkedin' => 'LinkedIn' );
	$service  = isset( $block['attrs']['service'] ) ? $block['attrs']['service'] : '';
	if ( ! isset( $services[ $service ] ) || ! function_exists( 'block_core_social_link_get_icon' ) ) {
		return $content;
	}
	return '<li class="wp-social-link wp-social-link-' . esc_attr( $service ) . ' wp-block-social-link echo-social-slot echo-social-unlinked"><span class="wp-block-social-link-anchor" role="img" aria-label="' . esc_attr( $services[ $service ] ) . '">' . block_core_social_link_get_icon( $service ) . '</span></li>';
}
add_filter( 'render_block_core/social-link', 'echo_paix_social_placeholders', 10, 2 );

/** A donation button stays disabled until an editor supplies its destination. */
function echo_paix_prepare_donate_button( $content, $block ) {
	$classes = isset( $block['attrs']['className'] ) ? explode( ' ', $block['attrs']['className'] ) : array();
	if ( ! in_array( 'echo-donate', $classes, true ) ) {
		return $content;
	}
	$processor = new WP_HTML_Tag_Processor( $content );
	if ( ! $processor->next_tag( 'a' ) || $processor->get_attribute( 'href' ) ) {
		return $content;
	}
	$content = preg_replace( '/<a\b/', '<button type="button" disabled aria-disabled="true"', $content, 1 );
	return preg_replace( '#</a>#', '</button>', $content, 1 );
}
add_filter( 'render_block_core/button', 'echo_paix_prepare_donate_button', 10, 2 );
