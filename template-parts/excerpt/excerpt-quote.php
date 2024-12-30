<?php
/**
 * Show the appropriate content for the Quote post format.
 *
 * @package WordPress
 * @since Most 1.0
 */

?>

<?php if( class_exists('ACF') ) : ?>

	<?php get_template_part( 'template-parts/excerpt/parts/media', 'quote' ); ?>

<?php else: ?>

	<?php get_template_part( 'template-parts/excerpt/excerpt', 'image' ); ?>

<?php endif; ?>