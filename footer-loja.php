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
		<div id="mais-info">O Q Importa | Consultoria de Imagem e Estilo | Todos os Direitos Reservados 2014</div><div class="logo-brasa"><img src="<?php echo get_stylesheet_directory_uri().'/images/brasa.png'?>">
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->
<?php wp_footer(); ?>
<script>
	var id;
	var altura;
	var largura;
		jQuery( ".enrolador-produto" ).hover(
			  	function() {
					var altura = jQuery( this ).children('img').css('height');
					var largura = jQuery( this ).children('img').css('width');
					jQuery( this ).children('.enrolador-capa').css({ "width": largura, "height": altura});
								id = jQuery( this ).children('.enrolador-capa').attr('id');
					
					var top = parseFloat(altura)/2;
					var left = parseFloat(largura)/4;
					jQuery( this ).children('.enrolador-capa').children('.lupa').css({ "left": left, "top": top});
					jQuery( this ).children('.enrolador-capa').children('.comprar').css({ "right": left, "top": top});
					
					
					});
					
	jQuery('.comprar').click(function() {
			
			jQuery(this).addClass('suma');
			add = '#adicionado-'+ id;
			console.log(add)
			jQuery(add).addClass('visible');
			
						
		});
	
	jQuery('a.home').attr('href','../../shopping');
	
</script>
</body>
</html>