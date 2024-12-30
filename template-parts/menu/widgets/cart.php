<?php
$items_count = WC()->cart->get_cart_contents_count();

?>
<a href="<?php echo esc_url( wc_get_cart_url() ); ?>" class="main-header__cart">
    <div class="header__cart-icon">
        <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path d="M5.53,5,5,3H1.25a1,1,0,0,0,0,2H3.47L6.7,18H20V16H8.26l-.33-1.34L21,12.17V5ZM19,10.52,7.45,12.71,6,7H19ZM7,19a1.5,1.5,0,1,0,1.5,1.5A1.5,1.5,0,0,0,7,19Zm12,0a1.5,1.5,0,1,0,1.5,1.5A1.5,1.5,0,0,0,19,19Z"/>
        </svg>
    </div>
    <div id="mini-cart-count" class="header__cart-count"><?php echo most_cart_count(); ?></div>
</a>