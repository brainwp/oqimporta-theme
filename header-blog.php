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
<link href='http://fonts.googleapis.com/css?family=Quicksand:400,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->

<?php wp_head(); ?>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-41834680-1', 'oqimporta.com.br');
  ga('send', 'pageview');

</script>

</head>

<body <?php body_class(); ?>>

    <div id="bg-menu-blog">
    </div><!-- #bg-menu-blog -->
    
<div id="page" class="hfeed site">
	<?php do_action( 'before' ); ?>
            
    <div id="ilustra-blog">
    </div><!-- #ilustra-blog -->
            
	<header id="masthead" class="site-header" role="banner">
		<hgroup>
			<div id="logo-blog">
            	<a class="a-logo-blog" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" href="<?php bloginfo( 'home' ); ?>/blog"></a>
            </div><!-- #logo-blog -->

			<h2 class="blog-description"><?php bloginfo( 'description' ); ?></h2>
		</hgroup>

		<nav id="site-navigation" class="navigation-main" role="navigation">
			<h1 class="menu-toggle"><?php _e( 'Menu', 'oqimporta' ); ?></h1>

			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'items_wrap' => '<ul><li class="final"></li>%3$s</ul>' ) ); ?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="main" class="site-main">