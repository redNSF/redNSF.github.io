<?php
/**
 * @author: MadSparrow
 * @version: 1.0
 */

get_header();

$a_id = $post->post_author;
$prev = get_previous_post();
$next = get_next_post();
$related_cats_post = most_related_posts(); 
$format = get_post_format();

get_template_part( 'template-parts/header/header');

?>

<main class="ms-main ms-single-post">

	<?php if( class_exists('ACF') ) : ?>

		<?php if ( $format == '' ) : ?>

			<?php get_template_part( 'template-parts/excerpt/parts/media', 'thumbnail-single' ); ?>

		<?php else: ?>

		<div class="ms-single-post--img">
			<?php if ( $format !== 'gallery' && $format !== 'video' && $format !== 'quote' ) : ?>
				<?php get_template_part( 'template-parts/excerpt/parts/media', 'thumbnail-single' ); ?>
			<?php endif; ?>
			<?php get_template_part( 'template-parts/excerpt/parts/media', $format ); ?>
			
		</div>
		<?php endif; ?>

	<?php else: ?>

		<?php get_template_part( 'template-parts/excerpt/parts/media', 'thumbnail-single' ); ?>

	<?php endif; ?>

	<header class="ms-sp--header">
		<div class="post-category__list">
			<?php the_category(); ?>
		</div>
		<?php the_title( '<h1 class="ms-sp--title">', '</h1>' ); ?>
		<div class="post-meta-date meta-date-sp">
			<span class="post-author__name"><?php the_author_meta( 'display_name', $a_id ); ?></span>
			<span><?php echo get_the_date(); ?></span>
		</div>
	</header>

	<article class="ms-sp--article">
		<div class="entry-content">
			<?php while ( have_posts() ) : the_post();
				the_content( sprintf( __( 'Continue reading %s', 'most' ), the_title( '<span class="screen-reader-text">', '</span>', false ) ) );
				most_link_pages();
			endwhile; ?>
		</div>
	</article>

	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer default-max-width">
			<?php edit_post_link(
				sprintf( '<span class="meta-icon"><svg class="svg-icon" aria-hidden="true" role="img" focusable="false" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18"><path fill="" d="M14.7272727,11.1763636 C14.7272727,10.7244943 15.0935852,10.3581818 15.5454545,10.3581818 C15.9973239,10.3581818 16.3636364,10.7244943 16.3636364,11.1763636 L16.3636364,15.5454545 C16.3636364,16.9010626 15.2646989,18 13.9090909,18 L2.45454545,18 C1.09893743,18 0,16.9010626 0,15.5454545 L0,4.09090909 C0,2.73530107 1.09893743,1.63636364 2.45454545,1.63636364 L6.82363636,1.63636364 C7.2755057,1.63636364 7.64181818,2.00267611 7.64181818,2.45454545 C7.64181818,2.9064148 7.2755057,3.27272727 6.82363636,3.27272727 L2.45454545,3.27272727 C2.00267611,3.27272727 1.63636364,3.63903975 1.63636364,4.09090909 L1.63636364,15.5454545 C1.63636364,15.9973239 2.00267611,16.3636364 2.45454545,16.3636364 L13.9090909,16.3636364 C14.3609602,16.3636364 14.7272727,15.9973239 14.7272727,15.5454545 L14.7272727,11.1763636 Z M6.54545455,9.33890201 L6.54545455,11.4545455 L8.66109799,11.4545455 L16.0247344,4.09090909 L13.9090909,1.97526564 L6.54545455,9.33890201 Z M14.4876328,0.239639906 L17.7603601,3.51236718 C18.07988,3.83188705 18.07988,4.34993113 17.7603601,4.669451 L9.57854191,12.8512692 C9.42510306,13.004708 9.21699531,13.0909091 9,13.0909091 L5.72727273,13.0909091 C5.27540339,13.0909091 4.90909091,12.7245966 4.90909091,12.2727273 L4.90909091,9 C4.90909091,8.78300469 4.99529196,8.57489694 5.14873082,8.42145809 L13.330549,0.239639906 C13.6500689,-0.0798799688 14.1681129,-0.0798799688 14.4876328,0.239639906 Z"></path></svg>' . esc_html__( 'Edit %s', 'most' ) . '</span>',
					'<span class="screen-reader-text">' . get_the_title() . '</span>'
				), '<span class="edit-link">', '</span>'
			); ?>
		</footer>
	<?php endif; ?>

	<div class="single-post__tags"><?php the_tags( '', '', '' ); ?></div>

	<?php if (!empty($prev) OR !empty($next)) : ?>

		<nav class="navigation post-navigation">
			<div class="nav-links">
				<div class="nav-previous">
					<?php if (!empty($prev)) : ?>
						<a href="<?php echo get_permalink($prev->ID); ?>" rel="prev">
							<div class="prev-post">
								<div class="ms-spp">
									<span class="nav-label" aria-hidden="true"><?php esc_html_e('Previous Article', 'most'); ?></span>
									<h3 class="post-title"><?php echo esc_html($prev->post_title); ?></h3>
								</div>
							</div>
						</a>
					<?php endif ?>
				</div>
				<div class="nav-next">
					<?php if (!empty($next)) : ?>
						<a href="<?php echo get_permalink($next->ID); ?>" rel="next">
							<div class="next-post">
								<div class="ms-spn">
									<span class="nav-label" aria-hidden="true"><?php esc_html_e('Next Article', 'most'); ?></span>
									<h3 class="post-title"><?php echo esc_html($next->post_title); ?></h3>
								</div>
							</div>
						</a>
					<?php endif ?>
				</div>
			</div>
		</nav>

	<?php endif; ?>

	<?php if($related_cats_post->have_posts()): ?>
		<section class="ms-related-posts">
			<div class="alignwide">
				<h2 class="ms-rp--title"><?php esc_html_e('Related Posts', 'most'); ?></h2>
				<?php while($related_cats_post->have_posts()): $related_cats_post->the_post(); ?>
					<article class="ms-rp--block">

						<div class="ms-rp--top">
							<img src="<?php echo get_avatar_url( get_the_author_meta('email'), array("size"=>28)); ?>" alt="<?php echo get_the_author(); ?>">
							<span class="post-meta__author"><?php echo get_the_author(); ?></span>
							<span class="ms-rp__date"><?php echo get_the_date(); ?></span>
						</div>

						<div class="ms-rp--inner">

							<div class="rp-inner__left">
								<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute (); ?>">
									<div class="ms-rp--cont">
										<div class="ms-rp--text">
											<h3 class="ms-rp__title"><?php the_title(); ?></h3>
											<div><?php echo most_get_excerpt(get_the_ID(),'140');?></div>
										</div>
									</div>
								</a>
							</div>

							<div class="rp-inner__right">
								<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute (); ?>">
									<?php if( has_post_thumbnail() ):?>
										<figure class="ms-rp--thumb">
											<?php the_post_thumbnail('most-card-post-thumb', array( 'alt' => get_the_title())); ?>
										</figure>
									<?php endif; ?>
								</a>
							</div>

						</div>

						<div class="rp-inner__footer">
							<div class="rp-post-category"><?php the_category(); ?></div>
							<span class="ms-rp--ttr"><?php echo most_reading_time(get_the_ID()); ?></span>
						</div>
						
					</article>
				<?php endwhile; wp_reset_postdata(); ?>
			</div>
		</section>
	<?php endif; ?>

	<?php if ( comments_open() || get_comments_number() ) : ?>
		<?php comments_template(); ?>
	<?php endif; ?>
	
</main>

<?php get_footer(); ?>
