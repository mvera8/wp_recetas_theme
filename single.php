<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WP_Recetas_Theme
 */

get_header(); ?>
<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<div class="container">
			<header class="page-header bread-crumbs">
				<?php breadcrumbs(); ?>
			</header><!-- .page-header -->
			<?php
			while ( have_posts() ) :
				the_post();
				get_template_part( 'template-parts/content', get_post_format() );
			endwhile; // End of the loop.
			?>
		</div>
	</main><!-- #main -->
</div><!-- #primary -->
<?php
get_sidebar();
get_footer();
