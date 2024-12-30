<?php if ( has_nav_menu( 'primary-menu' ) ) : ?>

    <div class="ms-fs-wrapper">
        <div class="container-menu">
            <div class="action-menu">
                <div class="close-event"></div>
                <div class="open-event">
                    <div class="text">
                        <span><?php esc_html_e('Menu', 'most'); ?></span>
                        <span><?php esc_html_e('Close', 'most'); ?></span>
                    </div>
                    <div class="burger">
                        <svg viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon-close" data-v-649bbaab="">
                            <line x1="13.788" y1="1.28816" x2="1.06011" y2="14.0161" stroke="currentColor" stroke-width="1.2"></line>
                            <line x1="1.06049" y1="1.43963" x2="13.7884" y2="14.1675" stroke="currentColor" stroke-width="1.2"></line>
                        </svg>
                        <svg viewBox="0 0 18 12" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon-burger" data-v-649bbaab="">
                            <line x1="18" y1="0.6" y2="0.6" stroke="currentColor" stroke-width="1.2" data-v-649bbaab=""></line>
                            <line x1="18" y1="5.7167" y2="5.7167" stroke="currentColor" stroke-width="1.2" data-v-649bbaab=""></line>
                            <line x1="18" y1="10.8334" y2="10.8334" stroke="currentColor" stroke-width="1.2" data-v-649bbaab=""></line>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
        <div class="ms-fs-menu">
            <div class="ms-fs-container row">

                <div class="ms-fs--nav col-12 col-md-6">
                    <?php if ( has_nav_menu( 'primary-menu' ) ) {  most_primary_menu(); } ?>
                </div>
            
                <div class="ms-fs--contacts col-12 col-md-6">
                    <?php if (get_theme_mod( 'menu_contacts')) :?>
                        <?php $menu_contacts = get_theme_mod( 'menu_contacts'); ?>
                        <?php echo ms_render_elementor_template( $menu_contacts ); ?>
                    <?php endif; ?>
                </div>

            </div>
        </div>
    </div>

<?php endif; ?>