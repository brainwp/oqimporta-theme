<?php
/** Template Name: Loja */

get_header('loja'); ?>
	<div id="container-header" >	
		<div id="meio" class="site-main col-sm-10">
		<div class="clearfix"></div>
		<div class=" shopping-title">
			<a href="<?php echo home_url('/shopping'); ?>"><img src="<?php echo get_template_directory_uri();?>/images/shopping.png"></a>
		</div><!-- shopping-title-->
		<div class=" slider">
			<div id="slider" class="inline-block col-sm-8 sem-margem">
				<?php include('slider-loja.php'); ?>
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
						'posts_per_page' => 8,
						'paged' => $paged
					    
						);
					$loop = new WP_Query( $args );
					if ( $loop->have_posts() ) {
						while ( $loop->have_posts() ) : $loop->the_post();
							woocommerce_get_template_part( 'content', 'product' );
							if($woocommerce_loop['loop'] == 3 || $woocommerce_loop['loop'] == 5 || $woocommerce_loop['loop'] == 8 || $woocommerce_loop['loop'] == 11):
 									echo "<div class='clearfix'></div>"; endif;
						endwhile;?>
						
						<?php if ($loop->max_num_pages > 1) { // check if the max number of pages is greater than 1  ?>
						<dic class="clearfix"></div>  
							<!-- pagination here -->
							    <?php
							      if (function_exists(custom_pagination)) {
							        custom_pagination($loop->max_num_pages,"",$paged);
							      }
							    ?>
						<?php } ?>
						
					<?php 						
					} else {
						echo __( 'No products found' );
					}
					wp_reset_postdata();
				?>
			</ul><!--/.products-->

		</div><!-- #content -->
		
		
<?php get_footer('loja'); ?>