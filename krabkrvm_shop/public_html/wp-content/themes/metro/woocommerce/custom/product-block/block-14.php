<?php
/**
 * @author  RadiusTheme
 * @since   1.0
 * @version 1.0
 */

namespace radiustheme\Metro;

$id  = $product->get_id();
$cat = $block_data['cat_display'] ? WC_Functions::get_top_category_name() : false;
?>
<div class="rt-product-block rt-product-block-14">

	<div class="rtin-thumb-wrapper">
		<div class="rtin-thumb">
			<?php
			if ( $block_data['gallery'] ) {
				echo WC_Functions::get_product_thumbnail_gallery( $product, $block_data['thumb_size'] );
			}
			else {
				echo WC_Functions::get_product_thumbnail_link( $product, $block_data['thumb_size'] );
			}

			?>
			<?php woocommerce_show_product_loop_sale_flash();?>
   			
   			<div class="cart-btn"><?php WC_Functions::print_add_to_cart_icon( true, true );?></div>

			<ul class="action-btn rtin-buttons">
			    <li><?php if ( $block_data['wishlist'] ) WC_Functions::print_add_to_wishlist_icon(); ?></li>
			    <li><?php if ( $block_data['compare'] ) WC_Functions::print_compare_icon(); ?></li>
			    <li><?php if ( $block_data['quickview'] ) WC_Functions::print_quickview_icon(); ?></li>
			</ul>

		</div>
		
		<div class="item-content">
			<div class="color-list"><?php if ( $block_data['v_swatch'] ) WC_Functions::run_variation_swatch();?></div>

			<div class="rtin-title-area">	
				<?php if ( WC_Functions::is_product_archive() ) do_action( 'woocommerce_before_shop_loop_item_title' );?>
				<h3 class="rtin-title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
				<?php if ( WC_Functions::is_product_archive() ) do_action( 'woocommerce_after_shop_loop_item_title' );?>
			</div>
			<?php
			if ( $block_data['rating_display'] ) {
				wc_get_template( 'loop/rating.php' );
			}
			?>
			<?php if ( $price_html = $product->get_price_html() ) : ?>
				<div class="rtin-price price"><?php echo wp_kses_post( $price_html ); ?></div>
			<?php endif; ?>

		</div>
	</div>

</div>