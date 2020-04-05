<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Recetas_Theme
 */

?>
<section class="home-intro site-block py-5">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-12 col-md-6">
				<div class="site-block__intro">
					<h2 class="site-block__title">Descubre Nuestras <br />Delicias Caseras!</h2>
					<?php
					while ( have_posts() ) :
						the_post();
						get_template_part( 'template-parts/page-content', get_post_format() );
					endwhile; // End of the loop.
					?>
				</div>
			</div>
			<div class="col-12 col-md-6">
				<div class="row">
					<div class="col-md-6">
						<div class="home-intro__image square"></div>
					</div>
					<div class="col-md-6">
						<div class="home-intro__image home-intro__image--two square"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
