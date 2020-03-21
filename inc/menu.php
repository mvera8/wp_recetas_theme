<?php
/**
 * Theme Menu
 *
 * @package WP_Recetas_Theme
 */

// This theme uses wp_nav_menu() in header.
register_nav_menus(
	array(
		'primary' => __( 'Primary', 'wp_recetas_theme' ),
	)
);

// This theme uses wp_nav_menu() in footer.
register_nav_menus(
	array(
		'secondary' => __( 'Secondary', 'wp_recetas_theme' ),
	)
);
