<?php
/**
 * Enqueue scripts & styles for theme here
 *
 * @package WP_Recetas_Theme
 */

/**
 * Assets Enqueue.
 *
 * @return void
 */
function wp_recetas_theme_scripts() {
	// include the css file.
	$css_file_path = glob( get_template_directory() . '/dist/css/bundle.*.css' );
	wp_enqueue_style( 'wp_recetas_theme-style', get_template_directory_uri() . '/dist/css/' . basename( $css_file_path[0] ), array(), 'false' );

	$js_file_path = glob( get_template_directory() . '/dist/js/bundle.*.js' );
	wp_enqueue_script( 'wp_recetas_theme-script', get_template_directory_uri() . '/dist/js/' . basename( $js_file_path[0] ), array(), 'false', true );
}
add_action( 'wp_enqueue_scripts', 'wp_recetas_theme_scripts' );
