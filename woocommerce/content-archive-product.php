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
$classes[] = 'sem-margem col-md-4';

?>
<li <?php post_class( $classes ); ?>>

	<?php do_action( 'woocommerce_before_shop_loop_item' ); ?>
	
		<div class="sem-margem enrolador-produto">
				<div class="item-capa" id="<?php echo($post->post_name) ?>">
					<a  class="lupa" href="<?php echo get_permalink(  ); ?>"></a>
					<a href="/oque2/shopping/?add-to-cart=<?php echo($post->ID) ?>" rel="nofollow" data-product_id="<?php echo($post->ID) ?>" data-product_sku="" data-quantity="1" class="comprar button add_to_cart_button product_type_simple">Comprar</a> 
				</div>
				
				<div class="adicionado" id="adicionado-<?php echo($post->post_name) ?>">Adicionado ao Carrinho</div>
		<?php
			/**
			 * woocommerce_before_shop_loop_item_title hook
			 *
			 * @hooked woocommerce_show_product_loop_sale_flash - 10
			 * @hooked woocommerce_template_loop_product_thumbnail - 10
			 */
			if($woocommerce_loop['loop'] == 5 && !is_archive() ):
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
			<div class="h5-produto" >
				<a  href="<?php echo get_permalink(); ?>">
					<h5 class="	<?php if( $woocommerce_loop['loop'] == 5 && !is_archive() ) : echo "destaque-produto"; endif; ?>">
						<?php the_title(); ?>
					</h5>
				</a>
			</div><!-- h5-produto -->

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

	<!-- <?php do_action( 'woocommerce_after_shop_loop_item' ); ?> -->

</li>