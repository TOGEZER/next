<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Libre
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">







		<link rel="stylesheet" href="wp-content/themes/libre/css-menu/main-menu.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="wp-content/themes/libre/css-menu/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="wp-content/themes/libre/css-menu/ie8.css" /><![endif]-->


        
        
        
            

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>




<header id="masthead" class="site-header" role="banner">
		<div class="site-branding">
			<?php if ( function_exists( 'jetpack_the_site_logo' ) ) : ?>
				<?php jetpack_the_site_logo(); ?>
			<?php endif; ?>
			<?php if ( is_front_page() && is_home() ) : ?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php else : ?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php //bloginfo( 'name' ); ?><img src="http://next.myterra.fr/wp-content/uploads/2017/03/terra-peru-1.png" style=""></a></p>
			<?php endif;
				$description = get_bloginfo( 'description', 'display' );
				if ( $description || is_customize_preview() ) : ?>
					<p class="site-description"><?php //echo $description; ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Menu', 'libre' ); ?></button>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
		</nav><!-- #site-navigation -->

	</header><!-- #masthead -->




<div id="wrapper">
<div id="main-menu" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'libre' ); ?></a>
	<?php if ( get_header_image() ) : ?>
	<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
		<img src="<?php header_image(); ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>" alt="" class="custom-header">
	</a>
	<?php endif; // End header image check. ?>
	

	<div id="content" class="site-content">
