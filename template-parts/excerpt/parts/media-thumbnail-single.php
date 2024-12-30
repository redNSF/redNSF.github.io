<?php
/**
 * @author: MadSparrow
 * @version: 1.0
 */
?>

<?php if ( has_post_thumbnail() ) : ?>

    <div class="ms-single-post--img default">
        <figure class="media-wrapper media-wrapper--21:9">
            <?php the_post_thumbnail('most-default-post-thumb', array( 'alt' => get_the_title())); ?>
        </figure>
    </div>
    
<?php endif; ?>