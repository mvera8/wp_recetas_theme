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
	'post_type'              => 'post',
	'order'                  => 'DESC',
	'posts_per_page'         => '2',
);
$query = new WP_Query( $args );
if ( $query->have_posts() ) {
	?>
	<section class="home-blog site-block py-5">
		<div class="container">
			<div class="row">
			<?php
			while ( $query->have_posts() ) {
				$query->the_post();
				?>
				<div class="col-12 col-md-4">
					<a href="<?php the_permalink(); ?>">
					<div class="home-blog__image">
						<div class="home-blog__image__inner">
							<h4 class="site-block__subtitle"><?php the_title() ?></h4>
						</div>
						<?php the_post_thumbnail('post-detail', array('class' => 'img--block')); ?>
					</div>
					</a>
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
