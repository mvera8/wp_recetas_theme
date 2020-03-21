<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Recetas_Theme
 */

?>
<section class="home-search">
	<div class="container">
		<div class="row align-items-center home-search__container">
			<div class="col-12 col-md-7">
				<h1 class="home-search__title">Aprende algo nuevo!</h1>
				<p>Busca en nuestras recetas algo que te guste</p>
				<form role="search" method="get" id="searchform" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
					<div class="searchform__block">
				    	<input type="hidden" name="post_type" value="recetas" />
						<input type="text" value="<?php echo get_search_query(); ?>" class="form-control searchform__control" name="s" id="s" placeholder="Buscar" />
						<button type="submit" class="btn searchform__btn"></button>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>
