<?php
/**
 * @author: MadSparrow
 * @version: 1.0
 */

$thumb_size = 'most-default-post-thumb';
$post_gallery_images = get_field( 'post_gallery_images' );

if ( has_post_thumbnail() ) {
	$images[] = get_post_thumbnail_id( get_the_ID() );
}

if ( $post_gallery_images ) {

	foreach( $post_gallery_images as $image ) {
		$images[] = $image[ 'ID' ];
	}

} ?>

<?php if ( $post_gallery_images ) : ?>

	<?php if ( has_post_thumbnail() || $post_gallery_images ) : ?>
        
		<?php if ( ! is_single() ) : ?>

			<?php if ( is_sticky() ) : ?>
				<div class="ms-sticky">
					<span class="ms-sticky--icon">
						<svg version="1.1" viewBox="0 0 460 460" style="enable-background:new 0 0 460 460;" xml:space="preserve">
							<path d="M421.5,2.9c-3.5-3.5-9-3.9-12.9-1l-303,220c-3.5,2.5-5,7.1-3.6,11.2c1.3,4.1,5.2,6.9,9.5,6.9h72.8L37.4,444.2 c-2.9,4-2.4,9.5,1.1,12.9c1.9,1.9,4.5,2.9,7.1,2.9c2,0,4.1-0.6,5.9-1.9l303-220c3.5-2.5,5-7.1,3.6-11.2c-1.3-4.1-5.2-6.9-9.5-6.9 h-72.8L422.6,15.8C425.4,11.9,425,6.4,421.5,2.9z"/>
						</svg>
					</span>
				</div>
			<?php endif;?>
			
			<div class="post-category__list top">
				<?php the_category(); ?>
			</div>
		
		<?php endif;?>

	<?php else: ?>
	
		<div class="post-top">
	
			<?php if ( is_sticky() ) : ?>
				<div class="ms-sticky no-thumbnail">
					<span class="ms-sticky--icon">
						<svg version="1.1" viewBox="0 0 460 460" style="enable-background:new 0 0 460 460;" xml:space="preserve">
							<path d="M421.5,2.9c-3.5-3.5-9-3.9-12.9-1l-303,220c-3.5,2.5-5,7.1-3.6,11.2c1.3,4.1,5.2,6.9,9.5,6.9h72.8L37.4,444.2 c-2.9,4-2.4,9.5,1.1,12.9c1.9,1.9,4.5,2.9,7.1,2.9c2,0,4.1-0.6,5.9-1.9l303-220c3.5-2.5,5-7.1,3.6-11.2c-1.3-4.1-5.2-6.9-9.5-6.9 h-72.8L422.6,15.8C425.4,11.9,425,6.4,421.5,2.9z"/>
						</svg>
					</span>
				</div>
			<?php endif;?>
	
			<div class="post-category__list">
				<?php the_category(); ?>
			</div>
	
		</div>
			
	<?php endif; ?>

	<div class="ms-post-media__gallery swiper-container">

		<div class="swiper-wrapper">

			<?php

				if ( $images ) :

					foreach( $images as $image ) :
						
						echo '<div class="swiper-slide">';
						if ( ! is_single() ) :
							echo '<a href="' . get_permalink() . '">';
						endif;
						echo wp_get_attachment_image( $image, $size = $thumb_size, false, array( 'loading' => 'lazy' ) );
						if ( ! is_single() ) :
							echo '</a>';
						endif;
						echo '</div>';

					endforeach;

				endif;

			?>

		</div>
		<div class="ms-sp-btn__prev">
			<svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
				<polyline points="3.41 16.34 12.1 7.66 20.59 16.14"/>
			</svg>
		</div>
		<div class="ms-sp-btn__next">
			<svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
				<polyline points="3.41 16.34 12.1 7.66 20.59 16.14"/>
			</svg>
		</div>

	</div>

<?php else:
	if ( ! is_single() ) :
		get_template_part( 'template-parts/excerpt/excerpt', 'image' );
	else:
		if ( has_post_thumbnail() ) : ?>
				<figure class="media-wrapper media-wrapper--21:9">
					<img src="<?php the_post_thumbnail_url($size = $thumb_size); ?>" alt="<?php the_title_attribute (); ?>">
				</figure>			
		<?php endif; ?>
	<?php endif;

endif; ?>