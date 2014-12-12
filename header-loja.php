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

<body  <?php body_class(); ?>>

	<?php if ( is_page( 'shopping' ) ) : ?>
		<div class="bg-header-loja"></div><!-- bg-header-loja -->		
	<?php elseif( is_post_type( 'product' ) || is_tax( 'product_cat' ) ) : ?>
		<div class="bg-header-single-loja"></div><!-- bg-header-single-loja -->
	<?php endif; ?>

    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
	    <!-- Brand and toggle get grouped for better mobile display -->
	    <div class="navbar-header">
	        <button type="button" class="navbar-toggle glyphicon glyphicon-plus" data-toggle="collapse" data-target=".navbar-ex1-collapse">
	            
	        </button>
	    </div>

	    <!-- Collect the nav links, forms, and other content for toggling -->
	    <div id="container-menu-loja" class="collapse navbar-collapse navbar-ex1-collapse">
	        <?php
			$endereco = get_permalink( wc_get_page_id( 'cart' ) ) ;
			$wrap= '<ul id="%1$s" class="%2$s">%3$s</ul><a class= "inline-block link-carrinho" href="'.$endereco.'"><img src="'.get_template_directory_uri().'/images/carrinho-menu.png"></a>';
			
	        wp_nav_menu( array(
	            'theme_location' => 'loja',
	            'depth' => 2,
	            'container' => false,	
	            'menu_class' => 'nav navbar-nav',
	            'fallback_cb' => 'wp_page_menu',
				'items_wrap'      => $wrap,
	
	            //Process nav menu using our custom nav walker
	            'walker' => new wp_bootstrap_navwalker())
	        );
	        ?>
	    </div><!-- /.navbar-collapse --> 
	</nav>
	
<div id="page-loja" class="hfeed site  sem-margem">
	<?php do_action( 'before' ); ?>

	<div class="container">
		
	<div id="main-loja" class="site-main sem-margem">
		
