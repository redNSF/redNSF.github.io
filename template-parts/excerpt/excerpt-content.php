<?php
/**
 * Show the appropriate content.
 *
 * @package WordPress
 * @since Most 1.0
 */

?>

<div class="post-content">

	<div class="post-header">

		<?php if ( !has_post_thumbnail() ) : ?>

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

			</div>

		<?php endif; ?>

		<div class="post-category__list"><?php the_category(); ?></div>
		
	</div>

	<a href="<?php the_permalink(); ?>">
		<h2><?php the_title(); ?></h2>
	</a>

	<?php if ( isset( $show_excerpt_list)  ) {
		if ( $show_excerpt_list == 'on' ) {
			echo most_get_excerpt(get_the_ID(), $excerpt_length);
		}
	} else {
		echo most_get_excerpt(get_the_ID(),'240');
	} ?>

	<div class="post-footer">

		<div class="post-meta-footer">
			<a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>">
				<img src="<?php echo get_avatar_url( get_the_author_meta('email'), array("size"=>45)); ?>" alt="<?php echo get_the_author(); ?>">
			</a>
			<div class="post-meta__info">
			<span class="post-meta__author">
				<a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>">
					<?php echo get_the_author(); ?>
				</a>
			</span>
			<div class="card__footer">
				<span class="post-meta__date"><?php echo get_the_date(); ?></span>
				<span class="ms-p--ttr"><?php echo most_reading_time(get_the_ID()); ?></span>
			</div>
			</div>
		</div>

		<span class="post-footer--link">
			<a href="<?php the_permalink(); ?>"><?php esc_html_e('Read More', 'most'); ?></a>
		</span>

	</div>

</div>