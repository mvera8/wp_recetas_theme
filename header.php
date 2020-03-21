<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Recetas_Theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<?php do_action( 'after_head_open_tag' ); ?>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="manifest" href="/manifest.json">
		<?php wp_head(); ?>
		<?php do_action( 'before_head_close_tag' ); ?>
		<?php
		$logo_desktop_width = get_theme_mod( 'wp_recetas_theme_logo_desktop_width' );
		$logo_mobile_width  = get_theme_mod( 'wp_recetas_theme_logo_mobile_width' );
		if ($logo_desktop_width || $logo_mobile_width) {
			echo '<style>';
			if ($logo_desktop_width) {
				echo '.header__navbar .custom-logo { width: ' . esc_html( $logo_desktop_width ) . '; }';
			}
			if ($logo_mobile_width) {
				echo '@media screen and (max-width:768px){ .header__navbar .custom-logo { width: ' . esc_html( $logo_mobile_width ) . '; } }';
			}
			echo '</style>';
		}
		?>
	</head>
	<body <?php body_class(); ?> >
		<?php do_action( 'after_body_open_tag' ); ?>
		<header id="masthead" class="header shadow-sm" role="banner">
			<nav class="navbar header__navbar navbar-expand-lg" role="navigation">
				<div class="container">
					<?php
					if ( get_theme_mod( 'wp_recetas_theme_logo' ) ) {
						echo '<a href="' . esc_url( home_url( '/' ) ) . '" class="custom-logo-link" rel="home" itemprop="url"><img class="custom-logo" src="' . esc_attr( get_theme_mod( 'wp_recetas_theme_logo' ) ) . '" alt=""></a>';
					} else {
						the_custom_logo();
					}
					?>
					<button class="header__navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#header-menu" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
						<i class="fas fa-bars"></i>
					</button>
					<div id="header-menu" class="header__menu collapse navbar-collapse justify-content-end">
						<div class="header__mobile-home d-md-block d-lg-none">
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
							<button class="header__close navbar-toggler" type="button" data-toggle="collapse" data-target="#header-menu" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
								<i class="fas fa-times"></i>
							</button>
						</div>
					<?php
						wp_nav_menu(
							array(
								'theme_location'  => 'primary',
								'depth'           => 2,
								'container'       => 'div',
								'container_class' => '',
								'container_id'    => 'main-menu',
								'menu_class'      => 'nav navbar-nav',
								'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
								'walker'          => new WP_Bootstrap_Navwalker(),
							)
						);
						?>
					</div>
				</div>
			</nav>
		</header><!-- #masthead -->
