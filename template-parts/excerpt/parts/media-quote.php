<?php
/**
 * @author: MadSparrow
 * @version: 1.0
 */
?>

<?php if (get_field( 'post_quote_text' )) : ?>

	<a href="<?php the_permalink(); ?>" class="ms-post-quote">

		<div class="post-content">

			<h2><?php echo get_field( 'post_quote_text' ); ?></h2>

			<?php if ( get_field( 'post_quote_author' ) ) : ?>

				<div class="post-footer">
					<?php echo get_field( 'post_quote_author' ); ?>
				</div>

			<?php endif; ?>

		</div>

	</a>

<?php else: ?>

	<?php  if( is_single()) {
		// empty
	} else {
		get_template_part( 'template-parts/excerpt/excerpt', 'content' );
	} ?>

<?php endif; ?>