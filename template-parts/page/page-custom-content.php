<?php
/**
 * @author: MadSparrow
 * @version: 1.0
 */

// Do not allow directly accessing this file.
if ( ! defined( 'ABSPATH' ) ) { exit( 'Direct script access denied.' ); } ?>

<section id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <div class="ms-custom-page">

        <?php the_content(); ?>
        
    </div>

</section>