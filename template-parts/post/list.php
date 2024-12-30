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

<article id="post-<?php the_ID(); ?>" <?php post_class('grid-item row'); ?>>

    <?php if( class_exists('ACF') ) : ?>
       
        <?php if ( has_post_thumbnail() ) : ?>
            
            <div class="col-lg-6 col-sm-12 pb-lg-0 pb-4 grid-item__thumb">
                
        <?php endif; ?>

        <?php get_template_part( 'template-parts/excerpt/excerpt', $format ); ?>

        <?php if ( has_post_thumbnail() ) : ?></div><?php endif; ?>

        <?php else : ?>
            
            <?php if ( has_post_thumbnail() ) : ?>

                <div class="col-lg-6 col-sm-12 pb-lg-0 pb-3 grid-item__thumb">

            <?php else:?>

                <div class="col col-sm-12 pb-lg-0 pb-3 grid-item__thumb">

            <?php endif; ?>

                <?php get_template_part( 'template-parts/excerpt/excerpt', 'image' ); ?>

            <?php if ( has_post_thumbnail() ) : ?></div><?php endif; ?>
        
    <?php endif; ?>



    <?php if( class_exists('ACF') ) :

        if ( $format !== 'link' && $format !== 'quote' ) : ?>
        
            <div class="col grid-item__content">
                <?php get_template_part( 'template-parts/excerpt/excerpt', 'content' ); ?>
            </div>
            
        <?php endif; ?>

    <?php else: ?>

    <div class="col grid-item__content">
        
        <?php get_template_part( 'template-parts/excerpt/excerpt', 'content' ); ?>
        
    </div>

<?php endif; ?>

</article>