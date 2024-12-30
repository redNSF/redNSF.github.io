<?php

/**
 * Register Sidebar.
 */
function most_register_sidebar() {

	// posts sidebar
	register_sidebar( 
		array(
			'name'          => esc_html__( 'Blog Sidebar', 'most' ),
			'id'            => 'blog_sidebar',
			'description' => esc_html__( 'Blog Widget Area', 'most' ),
			'before_widget' => '<aside id="%1$s" class="%2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<div class="text-divider"><h5>',
			'after_title'   => '</h5></div>'
		)
	);

	// shop sidebar
	if ( MOST_WOOCOMMERCE ) {
		register_sidebar( array(
			'name' => esc_html__( 'Shop Sidebar', 'most' ),
			'id' => 'shop_sidebar',
			'description' => esc_html__( 'Shop Widget Area', 'most' ),
			'before_widget' => '<aside id="%1$s" class="%2$s">',
			'after_widget' => '</aside>',
			'before_title' => '<div class="text-divider"><h5>',
			'after_title' => '</h5></div>'
		) );
	}

}
add_action( 'widgets_init', 'most_register_sidebar' );

if ( ! function_exists( 'wp_body_open' ) ) {
        function wp_body_open() {
                do_action( 'wp_body_open' );
        }
}

// WooCommerce