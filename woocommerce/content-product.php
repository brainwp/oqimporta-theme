<?php
/**
 * The template for displaying product content within loops.
 *
 * Override this template by copying it to yourtheme/woocommerce/content-product.php
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */
echo $woocommerce_loop;
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

global $product, $woocommerce_loop;

// Store loop count we're currently on
if ( empty( $woocommerce_loop['loop'] ) )
	$woocommerce_loop['loop'] = 0;

// Store column count for displaying the grid
if ( empty( $woocommerce_loop['columns'] ) )
	$woocommerce_loop['columns'] = apply_filters( 'loop_shop_columns', 4 );

// Ensure visibility
if ( ! $product || ! $product->is_visible() )
	return;

// Increase loop count
$woocommerce_loop['loop']++;

// Extra post classes
$classes = array();
if ( 0 == ( $woocommerce_loop['loop'] - 1 ) % $woocommerce_loop['columns'] || 1 == $woocommerce_loop['columns'] )
	$classes[] = 'first';
if ( 0 == $woocommerce_loop['loop'] % $woocommerce_loop['columns'] )
	$classes[] = 'last';
?>
<?php 
	if($woocommerce_loop['loop'] == 5):?>
	<?php endif;
?>
<li <?php 
	if($woocommerce_loop['loop'] == 5):
		array_push($classes, "duplo","col-sm-8 ", "sem-margem");
	else:
		array_push($classes, "col-sm-4 ", "sem-margem");
	
	endif;
	post_class( $classes ); ?>>

	<?php do_action( 'woocommerce_before_shop_loop_item' ); ?>
	<a href="<?php the_permalink(); ?>">
		<div class="<?php 
			if($woocommerce_loop['loop'] == 3 || $woocommerce_loop['loop'] == 5 || $woocommerce_loop['loop'] == 8 || $woocommerce_loop['loop'] == 11):
				echo "sem-margem"; endif;?> enrolador-produto">
		<?php
			/**
			 * woocommerce_before_shop_loop_item_title hook
			 *
			 * @hooked woocommerce_show_product_loop_sale_flash - 10
			 * @hooked woocommerce_template_loop_product_thumbnail - 10
			 */
			if($woocommerce_loop['loop'] == 5):
			    remove_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_thumbnail', 10 );
				$attachment_ids = $product->get_gallery_attachment_ids();
				$attachment_id = $attachment_ids[0];
				$image       = wp_get_attachment_image( $attachment_id, 'duplo' );
				echo $image;
			
			else:
			    add_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_thumbnail', 10 );
			
			do_action( 'woocommerce_before_shop_loop_item_title' );
		endif;
		?>
			<div class="h5-produto" ><h5 class="	<?php if($woocommerce_loop['loop'] == 5):
							echo "destaque-produto"; endif;?>"><?php the_title(); ?></h5></div>

		<?php
			/**
			 * woocommerce_after_shop_loop_item_title hook
			 *
			 * @hooked woocommerce_template_loop_rating - 5
			 * @hooked woocommerce_template_loop_price - 10
			 */
			do_action( 'woocommerce_after_shop_loop_item_title' );
		?>
		</div><!--enrolador-produto-->
	</a>

	<?php do_action( 'woocommerce_after_shop_loop_item' ); ?>

</li>