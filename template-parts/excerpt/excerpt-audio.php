<?php
/**
 * Show the appropriate content for the Audio post format.
 *
 * @package WordPress
 * @since Most 1.0
 */

$thumb_size = 'most-default-post-thumb'; ?>

<?php get_template_part( 'template-parts/excerpt/parts/media', 'badge' ); ?>

<?php if ( has_post_thumbnail() ) : ?>

	<a class="post-thumbnail" href="<?php the_permalink(); ?>">
		<figure class="media-wrapper media-wrapper--16:9">
			<img src="<?php the_post_thumbnail_url($size = $thumb_size); ?>" alt="<?php the_title_attribute (); ?>">
		</figure>	
	</a>

<?php endif; ?>	

<?php get_template_part( 'template-parts/excerpt/parts/media', 'audio' ); ?>