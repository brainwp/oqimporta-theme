<?php
/** Template Name: Loja */

get_header('loja'); ?>
		<div class="clearfix"></div>
		<div class=" shopping-title">
			<img src="<?php echo get_template_directory_uri();?>/images/shopping.png">
		</div><!--slider row-->
		<div class=" slider">
			<div id="slider" class="inline-block col-p-8 sem-margem">
				<?php get_template_part('loop','slider')?>
				<ul class="sem-margem">
					<li class="" >
						<div id="imagem-destaque"><img style="width:100%;" src="<?php echo get_template_directory_uri();?>/images/imagem-slider.jpg"></div>
						<div id="titulo-destaque"><h3>Nome do destaque da home</h3></div>
					</li>
				</ul>
			</div>
			<div id="menu-categoria" class="inline-block col-p-4 sem-margem">
				<ul>
					<li><a href="#">Acessórios</a></li>
					<li><a href="#">Brincos</a></li>
					<li><a href="#">Colares</a></li>
					<li><a href="#">Outlet</a></li>
				</ul>
			</div>
			<div class="clearfix"></div>
		</div><!--slider row-->
		<div id="content" class="site-content " role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'loja' ); ?>

			<?php endwhile; // end of the loop. ?> 

		</div><!-- #content -->
		
<?php get_footer('loja'); ?>