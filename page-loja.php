<?php
/** Template Name: Loja */

get_header('loja'); ?>
	<div id="container-header" >	
		<div id="meio" class="site-main col-sm-10">
		<div class="clearfix"></div>
		<div class=" shopping-title">
			<img src="<?php echo get_template_directory_uri();?>/images/shopping.png">
		</div><!-- shopping-title-->
		<div class=" slider">
			<div id="slider" class="inline-block col-sm-8 sem-margem">
				<?php get_template_part('loop','slider')?>
				<ul id="lista-slider"class="sem-margem">
					<li class="" >
						<div id="imagem-destaque"><img  src="<?php echo get_template_directory_uri();?>/images/imagem-slider.jpg"></div>
						<div id="titulo-destaque"><h3>Nome do destaque do slider na Home</h3></div>
					</li>
				</ul>
			</div>
			<div id="menu-categoria" class="inline-block col-sm-3 sem-margem">
			
				<?php
				wp_nav_menu( array(
		            'theme_location' => 'loja_categorias',
		            'container' => false,	
		            'menu_class' => 'nav navbar-nav',
		        ));
				?>
				</div><!---#menu-categoria-->
			<div class="clearfix"></div>
		</div><!--slider row-->
	</div><!--meio-->	
	</div><!--container header-->
	<div class="clearfix"></div>
	<div id="content" class="sem-margem site-content col-sm-10" role="main">
	
			<ul class="products">
				<?php
					$args = array(
						'post_type' => 'product',
						'posts_per_page' => 8
						);
					$loop = new WP_Query( $args );
					if ( $loop->have_posts() ) {
						while ( $loop->have_posts() ) : $loop->the_post();
							woocommerce_get_template_part( 'content', 'product' );
							if($woocommerce_loop['loop'] == 3 || $woocommerce_loop['loop'] == 5 || $woocommerce_loop['loop'] == 8 || $woocommerce_loop['loop'] == 11):
 									echo "<div class='clearfix'></div>"; endif;
						endwhile;
					} else {
						echo __( 'No products found' );
					}
					wp_reset_postdata();
				?>
			</ul><!--/.products-->

		</div><!-- #content -->
		
		
<?php get_footer('loja'); ?>