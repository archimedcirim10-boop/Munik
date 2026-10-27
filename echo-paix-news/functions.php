<?php
/**
 * ECHO DE LA PAIX MEDIA theme integration.
 *
 * @package Echo_Paix_News
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/** Register native WordPress theme capabilities. */
function echo_paix_setup() {
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'editor-styles' );
	add_editor_style( 'assets/editorial.css' );
	load_theme_textdomain( 'echo-paix-news', get_template_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'echo_paix_setup' );

/** Load the same visual system on the public site and in the editor. */
function echo_paix_enqueue_styles() {
	wp_enqueue_style( 'echo-paix-editorial', get_theme_file_uri( 'assets/editorial.css' ), array(), wp_get_theme()->get( 'Version' ) );
}
add_action( 'wp_enqueue_scripts', 'echo_paix_enqueue_styles' );

require get_theme_file_path( 'inc/queries.php' );
require get_theme_file_path( 'inc/blocks.php' );
require get_theme_file_path( 'inc/links.php' );
