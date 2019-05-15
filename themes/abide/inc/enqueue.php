<?php
/**
 * Abide enqueue scripts
 *
 * @package abide
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

if ( ! function_exists( 'abide_scripts' ) ) {
	/**
	 * Load theme's JavaScript and CSS sources.
	 */
	function abide_scripts() {
		// Get the theme data.
		$the_theme     = wp_get_theme();
		$theme_version = $the_theme->get( 'Version' );

		$css_version = $theme_version . '.' . filemtime( get_template_directory() . '/css/theme.min.css' );
		wp_enqueue_style( 'abide-styles', get_template_directory_uri() . '/css/theme.min.css', array(), $css_version );

		wp_enqueue_script( 'jquery' );

		$js_version = $theme_version . '.' . filemtime( get_template_directory() . '/js/theme.min.js' );
		wp_enqueue_script( 'abide-scripts', get_template_directory_uri() . '/js/theme.min.js', array(), $js_version, true );
	}
} // endif function_exists( 'abide_scripts' ).

add_action( 'wp_enqueue_scripts', 'abide_scripts' );
