<?php
/** Template Name: Loja */

get_header('loja'); ?>
		
	<div id="antes" class="sem-margem col-sm-1 antes"></div>
	<div id="meio" class="site-main sem-margem col-sm-9">
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
				<ul>
					<li><a href="#">Acessórios</a></li>
					<li><a href="#">Brincos</a></li>
					<li><a href="#">Colares</a></li>
					<li><a href="#">Outlet</a></li>
				</ul>
			</div>
			<div class="clearfix"></div>
		</div><!--slider row-->
	</div><!--meio-->	
	<div id="depois" class="sem-margem col-sm-2 depois"></div>
	<div class="clearfix"></div>
	<div id="content-antes" class="col-sm-1 sem-margem"></div>
	<div id="content" class="sem-margem site-content col-sm-9" role="main">
	
			<ul class="products">
				<?php
					$args = array(
						'post_type' => 'product',
						'posts_per_page' => 10
						);
					$loop = new WP_Query( $args );
					if ( $loop->have_posts() ) {
						while ( $loop->have_posts() ) : $loop->the_post();
							woocommerce_get_template_part( 'content', 'product' );
						endwhile;
					} else {
						echo __( 'No products found' );
					}
					wp_reset_postdata();
				?>
			</ul><!--/.products-->

		</div><!-- #content -->
		<div id="content-depois" class="col-sm-2 sem-margem"></div>
		
		
<?php get_footer('loja'); ?>