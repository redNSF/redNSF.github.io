<?php
/**
 * @author: MadSparrow
 * @version: 1.0
 */
?>

<?php if ( has_post_thumbnail() ) : ?>
		
    <?php if ( is_sticky() ) : ?>
        <div class="ms-sticky">
            <span class="ms-sticky--icon">
                <svg version="1.1" viewBox="0 0 460 460" style="enable-background:new 0 0 460 460;" xml:space="preserve">
                    <path d="M421.5,2.9c-3.5-3.5-9-3.9-12.9-1l-303,220c-3.5,2.5-5,7.1-3.6,11.2c1.3,4.1,5.2,6.9,9.5,6.9h72.8L37.4,444.2 c-2.9,4-2.4,9.5,1.1,12.9c1.9,1.9,4.5,2.9,7.1,2.9c2,0,4.1-0.6,5.9-1.9l303-220c3.5-2.5,5-7.1,3.6-11.2c-1.3-4.1-5.2-6.9-9.5-6.9 h-72.8L422.6,15.8C425.4,11.9,425,6.4,421.5,2.9z"/>
                </svg>
            </span>
        </div>
    <?php endif;?>

<?php endif; ?>