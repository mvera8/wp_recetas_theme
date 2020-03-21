<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Recetas_Theme
 */

get_header(); ?>

<?php if ( have_posts() ) : ?>
	<section class="home-search site-block">
		<div class="container">
			<div class="row align-items-center home-search__container justify-content-center">
				<h1 class="site-block__title"><?php the_title() ?></h1>
			</div>
		</div>
	</section>
	<section id="primary" class="py-5">
		<div class="container">
			<?php while ( have_posts() ) : the_post(); ?>
				<article id="post-<?php the_ID() ?>" class="<?php post_class() ?>">
					<?php the_content() ?>
				</article>
			<?php endwhile; ?>
		</div>
	</section>
<?php endif;

get_footer();
