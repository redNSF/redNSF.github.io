<?php
/**
 * @author: MadSparrow
 * @version: 1.0
 */

$post_video_data = get_field( 'post_video_link' );
if ( ! is_single() ) {
    $ratio = '16:9';
} else {
    $ratio = '21:9';
}
?>

<?php if ( $post_video_data ) : ?>

	<div class="ms-post-media__video media-wrapper media-wrapper--<?php echo esc_html($ratio); ?>">

		<?php

		switch ( $post_video_data[0] ) {

			case 'youtube':
				echo '<div class="ms-player" data-plyr-provider="youtube" data-plyr-embed-id="' . esc_attr( $post_video_data[1] ) . '"></div>';
			break;

			case 'vimeo':
				echo '<div class="ms-player" data-plyr-provider="vimeo" data-plyr-embed-id="' . esc_attr( $post_video_data[1] ) . '"></div>';
			break;

			default:
				echo '<video class="ms-video-player" playsinline controls data-poster="' . get_the_post_thumbnail_url( get_the_ID(), 'full' ) . '">';
				echo '<source src="' . esc_url( $post_video_data ) . '" type="video/mp4" />';
				echo '</video>';
			break;

		}

		?>

	</div>

<?php else: ?>

    <?php get_template_part( 'template-parts/excerpt/excerpt', 'image' ); ?>

<?php endif; ?>