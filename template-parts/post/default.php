<?php 
/**
 * @author: MadSparrow
 * @version: 1.0
 */
// Do not allow directly accessing this file.
if ( ! defined( 'ABSPATH' ) ) { exit( 'Direct script access denied.' ); }

$format = get_post_format();

if ( false == $format ) {
    $format = 'standard';
}

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('grid-item col-12'); ?>>

    <?php if( class_exists('ACF') ) :
       
        get_template_part( 'template-parts/excerpt/excerpt', $format );

    else:

        get_template_part( 'template-parts/excerpt/excerpt', 'image' );

    endif; ?>

    
    <?php if( class_exists('ACF') ) :

        if ( $format !== 'link' && $format !== 'quote') :
            get_template_part( 'template-parts/excerpt/excerpt', 'content' );
        endif;

    else:

        get_template_part( 'template-parts/excerpt/excerpt', 'content' );        

    endif; ?>

</article>