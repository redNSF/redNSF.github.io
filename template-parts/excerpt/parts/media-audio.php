<?php
/**
 * @author: MadSparrow
 * @version: 1.0
 */

$post_audio_link = get_field( 'post_audio_link' );
?>

<?php if ( ! empty( $post_audio_link ) ) : ?>

    <div class="ms-post-media__audio">

        <audio class="ms-player" controls>

            <source src="<?php echo esc_url( $post_audio_link ); ?>" type="audio/mp3">
            
        </audio>

    </div>

<?php else: ?>

    <?php get_template_part( 'template-parts/post/excerpt/excerpt', 'image' ); ?>

<?php endif; ?>