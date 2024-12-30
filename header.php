<?php 
/**
 * @author: MadSparrow
 * @version: 1.0
 */

// Do not allow directly accessing this file.
if ( ! defined( 'ABSPATH' ) ) { exit( 'Direct script access denied.' ); } ?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>
 data-theme="<?php echo esc_attr(most_theme_mode()); ?>"
 data-menu="<?php echo esc_attr(most_header_type()); ?>"
 data-footer-effect="<?php echo esc_attr(most_footer_effect()); ?>"
 data-footer-corners="<?php echo esc_attr(most_footer_corners()); ?>">
    <?php wp_body_open();
    echo most_page_transition(); ?>