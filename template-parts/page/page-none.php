<?php 
/**
 * @author: MadSparrow
 * @version: 1.0
 */

// Do not allow directly accessing this file.
if ( ! defined( 'ABSPATH' ) ) { exit( 'Direct script access denied.' ); } ?>

<section class="ms-page-header">
    <div class="ms-sp--header">
        <h1 class="ms-sp--title"><?php esc_html_e( 'No matches found', 'most' ); ?></h1>
    </div>
</section>

<div class="container no-result">

    <div class="row">

        <div class="ms-posts--default no-result col">
            <div class="grid-item post-content">
                <p><?php esc_html_e('It seems we can&rsquo;t find what you&rsquo;re looking for. Your search for "', 'most') ?><strong><?php printf( get_search_query() ); ?>"</strong> <?php esc_html_e('didnt return any results.', 'most') ?></p>
                <div class="search-again-block">
                    <p><?php esc_html_e( 'Try a new search:', 'most' ); ?></p>
                    <?php get_search_form(); ?>
                </div>
            </div>
        </div>

        <?php if ( is_active_sidebar( 'blog_sidebar' ) ) : ?>
            <div class="pl-lg-5 col-lg-4">
                <div class="ms-sidebar">
                    <?php get_sidebar(); ?>
                </div>
            </div>
        <?php endif; ?>

    </div>
    
</div>