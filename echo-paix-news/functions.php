<?php
/** Theme integration; editorial permissions stay entirely with WordPress. */
if ( ! defined( 'ABSPATH' ) ) { exit; }
add_action( 'after_setup_theme', function () {
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'responsive-embeds' );
    add_theme_support( 'editor-styles' );
    add_editor_style( 'assets/editorial.css' );
    load_theme_textdomain( 'echo-paix-news', get_template_directory() . '/languages' );
} );
add_action( 'wp_enqueue_scripts', function () {
    wp_enqueue_style( 'echo-paix-editorial', get_theme_file_uri( 'assets/editorial.css' ), array(), wp_get_theme()->get( 'Version' ) );
} );
add_action( 'init', function () {
    register_block_pattern_category( 'echo-paix', array( 'label' => __( 'Écho de la Paix', 'echo-paix-news' ) ) );
    register_block_style( 'core/group', array( 'name' => 'echo-card', 'label' => __( 'Carte éditoriale', 'echo-paix-news' ) ) );
    wp_register_script( 'echo-paix-sharing-editor', get_theme_file_uri( 'assets/sharing.js' ), array( 'wp-blocks', 'wp-element', 'wp-block-editor' ), wp_get_theme()->get( 'Version' ), true );
    register_block_type( 'echo-paix/sharing', array( 'api_version' => 3, 'editor_script' => 'echo-paix-sharing-editor', 'render_callback' => function () {
        if ( ! is_singular( 'post' ) ) { return ''; }
        $url = get_permalink();
        $links = array(
            'Facebook' => 'https://www.facebook.com/sharer/sharer.php?u=' . rawurlencode( $url ),
            'WhatsApp' => 'https://wa.me/?text=' . rawurlencode( get_the_title() . ' ' . $url ),
            'Courriel' => 'mailto:?subject=' . rawurlencode( get_the_title() ) . '&body=' . rawurlencode( $url ),
        );
        $html = '<nav class="echo-sharing" aria-label="' . esc_attr__( 'Partager cet article', 'echo-paix-news' ) . '"><span>' . esc_html__( 'Partager cet article', 'echo-paix-news' ) . '</span>';
        foreach ( $links as $label => $link ) {
            $html .= '<a href="' . esc_url( $link ) . '">' . esc_html( $label ) . '</a>';
        }
        return $html . '</nav>';
    } ) );
} );
// Resolve category slugs at runtime: category IDs vary between installations.
add_filter( 'query_loop_block_query_vars', function ( $query, $block ) {
    $settings = isset( $block->context['query'] ) ? $block->context['query'] : array();
    if ( ! empty( $settings['echoCategory'] ) ) {
        $term = get_category_by_slug( sanitize_title( $settings['echoCategory'] ) );
        if ( $term ) { $query['category__in'] = array( $term->term_id ); }
        else { $query['post__in'] = array( 0 ); }
    }
    if ( ! empty( $settings['echoRelated'] ) && is_singular( 'post' ) ) {
        $query['category__in'] = wp_get_post_categories( get_queried_object_id() );
        $query['post__not_in'] = array( get_queried_object_id() );
        if ( empty( $query['category__in'] ) ) { $query['post__in'] = array( 0 ); }
    }
    // Theme news lists expose only published articles, including in previews.
    if ( ! empty( $settings['echoNews'] ) ) { $query['post_status'] = 'publish'; }
    return $query;
}, 10, 2 );

add_filter( 'render_block_data', function ( $block ) {
    if ( 'core/navigation-link' === $block['blockName'] && ! empty( $block['attrs']['url'] ) && 0 === strpos( $block['attrs']['url'], '/category/' ) ) {
        $slug = trim( substr( $block['attrs']['url'], 10 ), '/' );
        $term = get_category_by_slug( $slug );
        $block['attrs']['url'] = $term ? get_category_link( $term ) : home_url( '/?category_name=' . rawurlencode( $slug ) );
    }
    if ( 'core/paragraph' === $block['blockName'] && isset( $block['attrs']['className'] ) && 'echo-wordmark' === $block['attrs']['className'] ) {
        $block['innerHTML'] = str_replace( 'href="/"', 'href="' . esc_url( home_url( '/' ) ) . '"', $block['innerHTML'] );
        $block['innerContent'] = array( $block['innerHTML'] );
    }
    return $block;
} );
