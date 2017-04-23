<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Jax_and_Mark
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link href="https://fonts.googleapis.com/css?family=Libre+Baskerville|Open+Sans:300" rel="stylesheet">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', '_jax' ); ?></a>
	
	<button id="menu-switch" class="menu-switch" aria-controls="primary-menu" aria-expanded="false">
		<svg fill="#404040" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
		    <path d="M0 0h24v24H0z" fill="none"/>
		    <path d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z"/>
		</svg>
	</button>
	<nav id="mobile-site-navigation" class="mobile-main-navigation" role="navigation">
		<div class="menu-slide-out">
			<div class="mobile-nav-name-container">	
				<h1 class="nav-names">
					<a href="<?php echo home_url(); ?>"><?php bloginfo( 'name' ); ?></a>
				</h1>

				<!-- <h2 class="hero-subtext"> <?php the_field('hero_subtext'); ?> </h2> -->
			</div>
			<?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'primary-menu' ) ); ?>
		</div>
	</nav><!-- #site-navigation -->

	<header id="masthead" class="site-header" role="banner">
			<div class="nav-name-container">	
				<h1 class="nav-names">
					<a href="<?php echo home_url(); ?>"><?php bloginfo( 'name' ); ?></a>
				</h1>

				<!-- <h2 class="hero-subtext"> <?php the_field('hero_subtext'); ?> </h2> -->
			</div>
			<nav id="site-navigation" class="main-navigation" role="navigation">
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', '_jax' ); ?></button>
				<?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'primary-menu' ) ); ?>
			</nav><!-- #site-navigation -->

	</header><!-- #masthead -->
	