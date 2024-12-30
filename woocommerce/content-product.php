<?php
/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 7.0.1
 */

defined( 'ABSPATH' ) || exit;

global $product;

// Ensure visibility.
if ( empty( $product ) || ! $product->is_visible() ) {
	return;
}

remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_product_link_close', 5 );
remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10 );
remove_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_rating', 5 );

add_action( 'most_woocommerce_template_loop_product_link_close', 'woocommerce_template_loop_product_link_close', 5 );
add_action( 'most_woocommerce_template_loop_add_to_cart', 'woocommerce_template_loop_add_to_cart', 10 );

switch ( wc_get_loop_prop( 'columns' ) ) {
	case 1:
		$grid_class = 'col-12';
		break;
	case 2:
		$grid_class = 'col-sm-6';
		break;
	default:
		$grid_class = 'col-md-4 col-sm-6';
		break;
	case 4:
		$grid_class = 'col-md-3 col-sm-6';
		break;
}

echo '<div class="' . most_sanitize_class( $grid_class ) . '">';

?>
<article <?php wc_product_class( 'ms-product', $product ); ?>>

	<?php if ( has_post_thumbnail() ) : ?>

		<div class="ms-product-media">

			<?php
			
			/**
			 * Hook: woocommerce_before_shop_loop_item.
			 *
			 * @hooked woocommerce_template_loop_product_link_open - 10
			 */
			do_action( 'woocommerce_before_shop_loop_item' );

			/**
			 * Hook: woocommerce_before_shop_loop_item_title.
			 *
			 * @hooked woocommerce_show_product_loop_sale_flash - 10
			 * @hooked woocommerce_template_loop_product_thumbnail - 10
			 */
			do_action( 'woocommerce_before_shop_loop_item_title' );

			/**
			 * Hook: woocommerce_after_shop_loop_item.
			 *
			 * @hooked woocommerce_template_loop_product_link_close - 5
			 * @hooked woocommerce_template_loop_add_to_cart - 10
			 */
			do_action( 'woocommerce_after_shop_loop_item' );

			?>

		</div>

	<?php endif; ?>

	<div class="ms-product-content">

		<div class="ms-product-cat"><?php echo wc_get_product_category_list( get_the_id()); ?></div>

		<h5 class="ms-product-title">
			
			<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>

		</h5>

		<div class="ms-product-footer">
			<div class="ms-product-price">

				<?php

					/**
					* Hook: woocommerce_after_shop_loop_item_title.
					*
					* @hooked woocommerce_template_loop_rating - 5
					* @hooked woocommerce_template_loop_price - 10
					*/
					do_action( 'woocommerce_after_shop_loop_item_title' );

				?>

			</div>

			<div class="ms-product-link">
				<?php do_action( 'most_woocommerce_template_loop_add_to_cart' ); ?>
			</div>
		
		</div>

	</div>

</article>

<?php echo '</div>';