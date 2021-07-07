<?php
/**
 * Template Name: Home Template
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Recetas_Theme
 */

get_header(); ?>

<?php get_template_part( 'template-parts/home-search' ); ?>
<?php get_template_part( 'template-parts/home-intro' ); ?>
<?php get_template_part( 'template-parts/home-slider' ); ?>
<?php get_template_part( 'template-parts/home-somos' ); ?>
<?php get_template_part( 'template-parts/home-blog' ); ?>

<?php get_footer();
