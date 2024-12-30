<?php 
/**
 * @author: MadSparrow
 * @version: 1.0
 */
// Do not allow directly accessing this file.
if ( ! defined( 'ABSPATH' ) ) { exit( 'Direct script access denied.' ); }

get_header();

get_template_part( 'template-parts/header/header');

?>

<main class="ms-main">

<section class="ms-page-header">
    <div class="ms-sp--header">
        <?php the_archive_title( '<h1 class="ms-sp--title">', '</h1>' ); ?>
    </div>
</section>

<div class="container">
	<div class="row">
		<div class="ms-posts--default col">
			<div class="grid-sizer"></div>
            <?php while ( have_posts() ) : the_post(); ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class('grid-item col-12@sm'); ?>>

                    <div class="post-category__list">
		                <?php the_category(); ?>
	                </div>

                    <div class="post-content">

                        <a href="<?php the_permalink(); ?>">
                            <h2><?php the_title(); ?></h2>
                        </a>

                        <?php echo most_get_excerpt(get_the_ID(),'240'); ?>

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

                </article>
            <?php endwhile;
            wp_reset_postdata(); ?>

            <?php if (the_posts_pagination()) : ?>
                <div class="grid-item ms-pagination col">
                    <?php echo the_posts_pagination(); ?>
                </div>
            <?php endif; ?>
            
        </div>
        <?php if ( is_active_sidebar( 'blog_sidebar' ) ) : ?>
            <div class="pl-lg-5 col-lg-4 ms-sidebar">
                <?php get_sidebar(); ?>
            </div>
        <?php endif; ?>
    </div>
</div>

</main>

<?php get_footer(); ?>