<?php
/**
 * @package WordPress
 * @since Most 1.0
 */
?>

<div class="<?php echo most_header_class(); ?>" <?php echo esc_attr(most_header_blur()); ?>>

	<div class="main-header__layout">
		<div class="main-header__inner">
			<div class="main-header__logo">
				<div class="logo-dark">
					<?php if (get_theme_mod( 'logo_dark' )): ?>
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
							<img src="<?php echo esc_url( get_theme_mod( 'logo_dark' ) ); ?>" alt="<?php echo esc_attr( bloginfo( 'name' ) ); ?>">
						</a>
					<?php else: ?>
						<div class="ms-logo__default">
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
								<h3><?php bloginfo( 'name' ); ?></h3>
							</a>
						</div>
					<?php endif; ?>
				</div>
				<div class="logo-light">
					<?php if (get_theme_mod( 'logo_light' )): ?>
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
							<img src="<?php echo esc_url( get_theme_mod( 'logo_light' ) ); ?>" alt="<?php echo esc_attr( bloginfo( 'name' ) ); ?>">
						</a>
					<?php else: ?>
					<div class="ms-logo__default">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
							<h3><?php bloginfo( 'name' ); ?></h3>
						</a>
					</div>
					<?php endif; ?>
				</div>
			</div>

			<?php most_menu_type(); ?>

			<div class="main-header--widgets">
						
				<?php if ( MOST_WOOCOMMERCE ) {
						if ( is_woocommerce() || is_cart() ) { most_menu_widgets(); }
					}

					most_mode_switcher();
					most_search_widgets();
					
				?>

			</div>

			<button class="main-header__nav-trigger js-main-header__nav-trigger menu-default" aria-label="Toggle menu" aria-expanded="false" aria-controls="main-header-nav">
				<span><?php esc_html_e('Menu', 'most'); ?></span>
				<i class="main-header__nav-trigger-icon" aria-hidden="true"></i>
			</button>

		</div>
	</div>
	
</div>