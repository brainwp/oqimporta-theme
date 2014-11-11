<?php 
$count = 0;
$args = array( 'post_type' => 'product', 'meta_key' => '_featured',  
'meta_value' => 'yes', 'posts_per_page' => 4 );
$loop = new WP_Query( $args );
$numero = $loop->post_count;
?>
<div id="myCarousel" class="carousel slide inline-block col-sm-8 sem-margem" data-ride="carousel">
    <!-- Carousel indicators -->
    <!-- <ol  class="carousel-indicators">
            <?php 
    			for ($i = 1; $i <= $numero; $i++) {?>
    				<li data-target="#myCarousel" data-slide-to="<?php echo $i-1?>" <?php if ($i == 1):echo 'class="active"';endif ?>></li>
    			<?php
    			}
    		?>
        </ol>    -->

	<div id="lista-slider" class="carousel-inner">
		<?php
			while ( $loop->have_posts() ) : $loop->the_post();
		?>
				<div class="item <?php if ($count == 0){echo 'active';}?>">
					<div id="imagem-destaque" class="img-carousel col-md-6">
						<?php
							$attachment_ids = $product->get_gallery_attachment_ids();
							$attachment_id = $attachment_ids[0];
							$image = wp_get_attachment_image( $attachment_id, 'duplo' );
						?>
						<a href="<?php the_permalink();?>"><?php echo $image;?></a>

					</div>
					<div id="titulo-destaque" class="carousel-caption">
		            	<a href="<?php the_permalink();?>"><h3><?php the_title();?></h3></a>
					</div>
		 	    </div>
		    
				
			<?php $count++;endwhile;
			wp_reset_postdata();
			?>
	</div>
    <!-- Carousel items -->


    <!-- Carousel nav -->
    <a class="carousel-control left" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
    </a>
    <a class="carousel-control right" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
    </a>
</div><!--carousel-inner-->