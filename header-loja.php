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
		<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
				<?php
				$wrap= '<ul id="%1$s" class="%2$s">%3$s</ul><a class= "inline-block link-carrinho" href="#"><img src="'.get_template_directory_uri().'/images/carrinho-menu.png"></a>';
				 wp_nav_menu( array( 
					'theme_location' => 'loja',
					'menu'            => '',
					'container'       => 'div',
					'container_class' => 'container collapse navbar-collapse inline-block ',
					'container_id'    => 'container-menu-loja',
					'menu_class'      => 'menu nav navbar-nav ',
					'menu_id'         => '',
					'echo'            => true,
					'fallback_cb'     => 'wp_page_menu',
					'before'          => '',
					'after'           => '',
					'link_before'     => '',
					'link_after'      => '',
					'items_wrap'      => $wrap,
					'depth'           => 0,
					'walker'          => ''
					 ) ); ?>
		</nav>
		<div id="main-antes" class="sem-margem col-md-1 antes"></div>
	<div id="main-loja" class="site-main sem-margem col-md-9">
		
