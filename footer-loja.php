<?php
/**
 * The template for displaying the footer of the page loja.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package oqimporta
 */
?>

	</div><!-- #main -->
	</div><!-- container -->
	
	<div class="clearfix"></div>
	<footer id="" class="footer-loja site-footer" role="contentinfo">
		<div class="site-info-loja">
			 <?php wp_nav_menu( array(
		            'theme_location' => 'footer_loja',
					'container' => false,	
 		            'menu_class' => 'nav navbar-nav',)); ?>
			<div id="social">
				<!-- <?php dynamic_sidebar( 'rodape_sociais_wid' ); ?> -->
			
				<img src="<?php echo get_template_directory_uri()?>/images/social.png">
			</div>
		</div><!-- .site-info -->
		<div id="mais-info">Whatmatters - Lifestyle Channel - 2016</div>
		<div class="logo-brasa"><a href="http://www.brasa.art.br" target="_blank"><img title="Brasa Design" src="<?php echo get_stylesheet_directory_uri().'/images/brasa.png'; ?>"></a></div>
	</footer><!-- #colophon -->
</div><!-- #page -->
<?php wp_footer(); ?>
</body>
</html>