<?php
/*
 * Template Name: Custom Cart
 * Template Post Type: page
 */

get_header(); ?>

<div class="custom-cart-page">
    <h1><?php the_title(); ?></h1>
    <?php echo do_shortcode('[woocommerce_cart]'); ?>
</div>

<?php get_footer(); ?>
