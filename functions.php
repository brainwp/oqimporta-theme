<?php
/**
 * oqimporta functions and definitions
 *
 * @package oqimporta
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) )
	$content_width = 640; /* pixels */

/*
 * Load Jetpack compatibility file.
 */
require( get_template_directory() . '/inc/jetpack.php' );

if ( ! function_exists( 'oqimporta_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 */
function oqimporta_setup() {

	/**
	 * Custom template tags for this theme.
	 */
	require( get_template_directory() . '/inc/template-tags.php' );

	/**
	 * Custom functions that act independently of the theme templates
	 */
	require( get_template_directory() . '/inc/extras.php' );

	/**
	 * Customizer additions
	 */
	require( get_template_directory() . '/inc/customizer.php' );

	/**
	 * Make theme available for translation
	 * Translations can be filed in the /languages/ directory
	 * If you're building a theme based on oqimporta, use a find and replace
	 * to change 'oqimporta' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'oqimporta', get_template_directory() . '/languages' );

	/**
	 * Add default posts and comments RSS feed links to head
	 */
	add_theme_support( 'automatic-feed-links' );

	/**
	 * Enable support for Post Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );

	/**
	 * This theme uses wp_nav_menu() in one location.
	 */
	register_nav_menus( array(
		'primary' => __( 'Menu Blog', 'oqimporta' ),
		'loja'=>__( 'Menu Loja', 'oqimporta' ),
		'loja_categorias'=>__( 'Menu Categorias da Loja', 'oqimporta' ),
		'secundary' => __( 'Menu Site', 'oqimporta' ),
		'footer_loja' => __('Menu footer', 'oqimport')
		
		)
	);
		
	register_nav_menus( array(
		)
	);

	/**
	 * Enable support for Post Formats
	 */
	add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'quote', 'link' ) );
}
endif; // oqimporta_setup
add_action( 'after_setup_theme', 'oqimporta_setup' );

/**
 * Setup the WordPress core custom background feature.
 *
 * Use add_theme_support to register support for WordPress 3.4+
 * as well as provide backward compatibility for WordPress 3.3
 * using feature detection of wp_get_theme() which was introduced
 * in WordPress 3.4.
 *
 * @todo Remove the 3.3 support when WordPress 3.6 is released.
 *
 * Hooks into the after_setup_theme action.
 */
function oqimporta_register_custom_background() {
	$args = array(
		'default-color' => 'ffffff',
		'default-image' => '',
	);

	$args = apply_filters( 'oqimporta_custom_background_args', $args );

	if ( function_exists( 'wp_get_theme' ) ) {
		add_theme_support( 'custom-background', $args );
	} else {
		define( 'BACKGROUND_COLOR', $args['default-color'] );
		if ( ! empty( $args['default-image'] ) )
			define( 'BACKGROUND_IMAGE', $args['default-image'] );
		add_custom_background();
	}
}
add_action( 'after_setup_theme', 'oqimporta_register_custom_background' );

/**
 * Register widgetized area and update sidebar with default widgets
 */
function oqimporta_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'oqimporta' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'oqimporta_widgets_init' );

/**
 * Enqueue scripts and styles
 */
function oqimporta_scripts() {
	/////////bootstrap/////////
	wp_register_script( 'bootstrap-js', get_template_directory_uri() . '/bootstrap/js/bootstrap.min.js', array( 'jquery' ), '3.0.1', true );

	wp_register_script( 'image-product-hover-js', get_template_directory_uri() . '/js/image-product-hover.js', array( 'jquery' ), '3.0.1', true );
	wp_register_script( 'thumbnail-hover-js', get_template_directory_uri() . '/js/thumbnail-hover.js', array( 'jquery' ), '3.0.1', true );
	wp_enqueue_script( 'menu-scroll-js', get_template_directory_uri() . '/js/menu-scroll.js' );

	wp_register_style( 'bootstrap-css', get_template_directory_uri() . '/bootstrap/css/bootstrap.min.css', array(), '3.0.1', 'all' );

	wp_enqueue_script( 'bootstrap-js' );

	wp_enqueue_style( 'bootstrap-css' );
	/////////bootstrap/////////
	
	/////////slider produtos/////////
	/////////	/////////	/////////	/////////	/////////	/////////	
	wp_register_script( 'slick-js', get_template_directory_uri() . '/slick/slick.min.js', array( 'jquery' ), '3.0.1', true );
	wp_register_style( 'slick-css', get_template_directory_uri() . '/slick/slick.css', array(), '3.0.1', 'all' );

if ( function_exists('is_product') && is_product() ) {
	wp_enqueue_script( 'slick-js' );
	wp_enqueue_style( 'slick-css' );
}
	/////////slider produtos/////////
		/////////	/////////	/////////	/////////	/////////
	
	
	wp_enqueue_style( 'style', get_stylesheet_uri() );

	wp_enqueue_script( 'image-product-hover-js' );
	wp_enqueue_script( 'thumbnail-hover-js' );

	wp_enqueue_script( 'navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	if ( is_singular() && wp_attachment_is_image() ) {
		wp_enqueue_script( 'keyboard-image-navigation', get_template_directory_uri() . '/js/keyboard-image-navigation.js', array( 'jquery' ), '20120202' );
	}
}
add_action( 'wp_enqueue_scripts', 'oqimporta_scripts' );


/**
 * Custom logo login.
 */
add_action('login_head', 'custom_logo_login');
function custom_logo_login()
{
    echo '
	<style type="text/css">
		body.login div#login {
			padding: 5% 0 0;
		}
		body.login div#login h1 {
			text-align: center;
			margin: 0 auto;
		}
		body.login div#login h1, body.login div#login h1 a {
			width: 230px;
			height: 75px;
		}
		body.login div#login h1 a {
			background-image: url( ' . get_template_directory_uri() . '/images/logo-admin-oqimporta.png) !important;
			padding: 0;
			background-size: 275px;
		}
	</style>
	';
}

/**
 * Implement the Custom Header feature
 */
//require( get_template_directory() . '/inc/custom-header.php' );

/**
* Adiciona tamanhos de imagens
*
*/
if ( function_exists( 'add_image_size' ) ) { 
    add_image_size( 'pre', 240, 999999  );
}

function filter_oqimporta( $content ) {
	$string = array(' oQimporta ');
	$content = str_ireplace( $string, '<span style=color:#e6462a;"> oQimporta </span>', $content );
	return $content;
}

add_filter( 'the_content', 'filter_oqimporta' );
///////////////////////////////////////////////////////////////////
//////////livrando o style de uma linha muito comprida para editar ele melhor
/**
 * Proper way to enqueue scripts and styles
 */
function estilos() {
	wp_enqueue_style( 'linha', get_template_directory_uri().'/linha.css' );
	wp_enqueue_style( 'loja', get_template_directory_uri().'/loja.css' );
	
}

add_action( 'wp_enqueue_scripts', 'estilos' );

///////////////////////////////////////////////////////////////////
// Google Fonts
///////////////////////////////////////////////////////////////////

function load_fonts() {
    wp_register_style('googleFonts', 'http://fonts.googleapis.com/css?family=Open+Sans:400,300|Source+Sans+Pro:200,300,400');
    wp_enqueue_style( 'googleFonts');
}
    
    add_action('wp_print_styles', 'load_fonts');

///////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////
	// Register Custom Navigation Walker
	require_once('bootstrap/wp_bootstrap_navwalker.php');
 ///////////////////////////////////////////////////////////////////
 //////////////////////adiciona tamanho para op quinto produto///////////////////////////////////	
  add_image_size('duplo', 629, 345, TRUE);
 ///////////////////////////////////////////////////////////////////
 //////////////////widget area do footer///////////////////////////////////

function rodape_sociais() {

	register_sidebar( array(
		'name' => 'Redes sociais do rodapé',
		'id' => 'rodape_sociais_wid',
		'before_widget' => '<div>',
		'after_widget' => '</div>',
		'before_title' => '',
		'after_title' => '',
	) );
}
add_action( 'widgets_init', 'rodape_sociais' );
///////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////
/**
 * WooCommerce Extra Feature
 * --------------------------
 *
 * Change number of related products on product page
 * Set your own value for 'posts_per_page'
 *
 */ 
function woo_related_products_limit() {
  global $product;
	
	$args['posts_per_page'] = 4;
	return $args;
}
add_filter( 'woocommerce_output_related_products_args', 'jk_related_products_args' );
  function jk_related_products_args( $args ) {
 
	$args['posts_per_page'] = 4; // 4 related products
	$args['columns'] = 4; // arranged in 2 columns
	return $args;
}
///////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////
function custom_pagination($numpages = '', $pagerange = '', $paged='') {
 
  if (empty($pagerange)) {
    $pagerange = 2;
  }
 
  /**
   * This first part of our function is a fallback
   * for custom pagination inside a regular loop that
   * uses the global $paged and global $wp_query variables.
   * 
   * It's good because we can now override default pagination
   * in our theme, and use this function in default quries
   * and custom queries.
   */
  global $paged;
  if (empty($paged)) {
    $paged = 1;
  }
  if ($numpages == '') {
    global $wp_query;
    $numpages = $wp_query->max_num_pages;
    if(!$numpages) {
        $numpages = 1;
    }
  }
 
  /** 
   * We construct the pagination arguments to enter into our paginate_links
   * function. 
   */
  $pagination_args = array(
    'base'            => get_pagenum_link(1) . '%_%',
    'format'          => 'page/%#%',
    'total'           => $numpages,
    'current'         => $paged,
    'show_all'        => False,
    'end_size'        => 1,
    'mid_size'        => $pagerange,
    'prev_next'       => True,
    'prev_text'       => __('&laquo;'),
    'next_text'       => __('&raquo;'),
    'type'            => 'plain',
    'add_args'        => false,
    'add_fragment'    => ''
  );

  $paginate_links = paginate_links($pagination_args);
  
  if ($paginate_links) {
    echo "<nav class='custom-pagination'>";
      // echo "<span class='page-numbers page-num'>". $paged . " / " . $numpages . "</span> ";
      echo $paginate_links;
    echo "</nav>";
  }
 
}
////////////////////////////////////////////////////////////////////////////////////////////////
	add_filter('show_admin_bar', '__return_false');

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////