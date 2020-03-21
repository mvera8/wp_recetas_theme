<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Recetas_Theme
 */

?>
<?php 
$args = array (
	'post_type'              => 'recetas',
	'order'                  => 'DESC',
	'posts_per_page'         => '6',
	'meta_query' => array(
		array(
			'key' => 'destacado',
			'compare' => '==',
			'value' => '1'
		)
	)
);
$query = new WP_Query( $args );
if ( $query->have_posts() ) {
	?>
	<section class="home-slider site-block py-5">
		<div class="container">
			<div class="site-block__intro text-center">
				<h2 class="site-block__title">Menú <span>popular</span></h2>
				<?php if(get_field('slider_texto')) {
					echo '<p>' . get_field('slider_texto') . '</p>';
				}
				?>
			</div>
			<div class="row">
			<?php
			while ( $query->have_posts() ) {
				$query->the_post();
				$recetaTitle = get_the_title();
				?>
				<div class="col-12 col-md-3">
					<div class="home-slider__item text-center">
						<div class="home-slider__image">
							<div class="home-slider__plato">
								<a href="<?php the_permalink(); ?>"><img class="img--block" src="<?php echo get_field('plato'); ?>" alt="<?php echo $recetaTitle; ?>" /></a>
							</div>
						</div>
						<div class="home-slider__text">
							<h3 class="site-block__subtitle"><a href="<?php the_permalink(); ?>"><?php echo $recetaTitle; ?></a></h3>
							<?php the_excerpt(); ?>
						</div>
					</div>
				</div>
				<?php
			}
			?>
			</div>
		</div>
	</section>
	<?php
}
wp_reset_postdata(); ?>		
