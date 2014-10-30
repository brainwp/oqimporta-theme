<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package oqimporta
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link href='http://fonts.googleapis.com/css?family=Quicksand:400,300' rel='stylesheet' type='text/css'>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>


    
<div id="page-loja" class="hfeed site col-md-12 sem-margem">
	<?php do_action( 'before' ); ?>
	<header id="faixa" role="banner">
				<nav id="site-navigation" class=" inline-block navigation-loja" role="navigation">
					<h1 class="menu-toggle"><?php _e( 'Menu', 'oqimporta' ); ?></h1>
					<?php wp_nav_menu( array( 'theme_location' => 'loja' ) ); ?>
				</nav><!-- #site-navigation -->		
	</header><!-- #masthead -->

	<div id="main" class="site-main">
