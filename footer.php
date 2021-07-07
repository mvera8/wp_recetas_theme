<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Recetas_Theme
 */

?>
	<footer class="footer">
		<div class="pb-5">
			<?php
			$themeOption = get_option('my_theme_option');
			if($themeOption['Facebook']){
				echo '<div><a href="'.$themeOption['Facebook'].'" target="_blank">Facebook</a></div>';
			}
			?>	
		</div>
		<div class="footer__copyright text-center">
			<p><?php echo esc_html( '© ' . get_bloginfo( 'name' ) . ' ' . gmdate( 'Y' ) . '- Todos los derechos reservados.' ); ?></p>
		</div>
		<?php do_action( 'before_footer_close_tag' ); ?>
	</footer>
	<?php wp_footer(); ?>
	<?php do_action( 'before_body_close_tag' ); ?>
</body>
</html>
