<?php
/**
 * @author: MadSparrow
 * @version: 1.0
 */

get_header();

get_template_part( 'template-parts/header/header');

// Do not allow directly accessing this file.
if ( ! defined( 'ABSPATH' ) ) { exit( 'Direct script access denied.' ); } ?>

<section class="ms-page-content ms-404-page">
  <div class="ms-404--content">
    <h2><?php esc_html_e('Whoops, that page is gone.', 'most') ?></h2>
    <p><?php esc_html_e('The page you are looking for does not exist. How you got here is a mystery. Go back to the', 'most') ?>
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e('homepage.', 'most') ?></a>
  </p>
  </div>
  <div class="ms-404--bg">
    <h1><?php echo esc_attr('404', 'most')?></h1>
  </div>
</section>

<?php wp_footer(); ?>