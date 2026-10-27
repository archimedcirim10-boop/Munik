<?php
/** Resolve theme navigation against the actual installation. @package Echo_Paix_News */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/** Obtain a native category link, including with plain permalinks. */
function echo_paix_category_url( $slug ) {
	$slug = sanitize_title( $slug );
	$term = get_category_by_slug( $slug );
	return $term ? get_category_link( $term ) : home_url( '/?category_name=' . rawurlencode( $slug ) );
}

/** Adapt only theme navigation and its editorial links. */
function echo_paix_resolve_links( $block ) {
	if ( 'core/navigation-link' === $block['blockName'] && ! empty( $block['attrs']['url'] ) && 0 === strpos( $block['attrs']['url'], '/category/' ) ) {
		$block['attrs']['url'] = echo_paix_category_url( trim( substr( $block['attrs']['url'], 10 ), '/' ) );
	}
	if ( 'core/paragraph' !== $block['blockName'] || empty( $block['innerHTML'] ) ) {
		return $block;
	}
	if ( false !== strpos( $block['innerHTML'], 'href="/category/' ) ) {
		$block['innerHTML'] = preg_replace_callback( '#href="/category/([a-z0-9-]+)/"#', function ( $matches ) {
			return 'href="' . esc_url( echo_paix_category_url( $matches[1] ) ) . '"';
		}, $block['innerHTML'] );
		$block['innerContent'] = array( $block['innerHTML'] );
	}
	if ( isset( $block['attrs']['className'] ) && 'echo-wordmark' === $block['attrs']['className'] ) {
		$block['innerHTML']    = str_replace( 'href="/"', 'href="' . esc_url( home_url( '/' ) ) . '"', $block['innerHTML'] );
		$block['innerContent'] = array( $block['innerHTML'] );
	}
	return $block;
}
add_filter( 'render_block_data', 'echo_paix_resolve_links' );
