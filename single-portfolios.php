<?php 
/**
 * @author: MadSparrow
 * @version: 1.0
 */

get_header();

$id = get_the_ID();
$default = 'next';
get_template_part( 'template-parts/header/header');

?>
<main class="ms-main">

    <div class="ms-content--portfolio">
        <?php while ( have_posts() ) : the_post();
            the_content();
        endwhile; ?>
    </div>

    <?php if( get_theme_mod( 'portfolio_pagination', $default ) && get_theme_mod( 'portfolio_pagination', $default ) == '1' ) : ?>
        <div class="ms-spn--wrap container">
            <div class="ms-spn--content row">
                <?php echo most_portfolio_nav(); ?>
            </div>
        </div>
    <?php endif; ?>
    
</main>

<?php get_footer(); ?>
