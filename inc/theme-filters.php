<?php
if ( ! function_exists( 'most_excerpt_length' ) ) {
    function most_excerpt_length( $length ) {
        $new_ecxerpt = '200';
        if( $new_ecxerpt != '' ) {
            return $length = intval( $new_ecxerpt );
        } else {
            return $length;
        }
    }
}
add_filter( 'excerpt_length', 'most_excerpt_length', 999 );

function most_custom_fonts( $standard_fonts ){
    $my_custom_fonts = array();
    $my_custom_fonts['Plus Jakarta Sans'] = array(
    'label' => 'Plus Jakarta Sans',
    'variants' => array('regular'),
    'stack' => 'Plus Jakarta Sans, sans-serif',
    );
    $my_custom_fonts['font2'] = array(
    'label' => 'Plus Jakarta Sans',
    'variants' => array('200', '300', '300', '400', '500', '600', '700','700italic', '800'),
    'stack' => 'Plus Jakarta Sans, sans-serif',
    );
    return array_merge_recursive( $my_custom_fonts, $standard_fonts );
    }
add_filter( 'kirki/fonts/standard_fonts', 'most_custom_fonts', 20 );

// Woocommerce

// Remove the category count for WooCommerce categories
add_filter( 'woocommerce_subcategory_count_html', '__return_null' );

add_filter( 'woocommerce_add_to_cart_fragments', 'wc_refresh_mini_cart_count');

function wc_refresh_mini_cart_count( $fragments ) {
    ob_start();
    $cart_count = WC()->cart->get_cart_contents_count(); ?>
        <div id="mini-cart-count" class="header__cart-count">
            <span><?php echo wp_kses_post( $cart_count ); ?></span>
        </div>
    <?php $fragments['#mini-cart-count'] = ob_get_clean();
    return $fragments;
}