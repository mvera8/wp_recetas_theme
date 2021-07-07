<?php
/**
 * Template part for displaying posts content
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Recetas_Theme
 */

?> 
<div class="entry-content">
	<?php
	the_content(
		sprintf(
			wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'WP_Carmela_Theme' ), array( 'span' => array( 'class' => array() ) ) ),
			the_title( '<span class="screen-reader-text">"', '"</span>', false )
		)
	);
	?>
</div><!-- .entry-content -->
