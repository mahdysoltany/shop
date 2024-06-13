<?php
/*
 * Template Name: Custom Checkout
 * Template Post Type: page
 */

get_header(); ?>

<div class="custom-checkout-page">
    <h1><?php the_title(); ?></h1>
    <?php echo do_shortcode('[woocommerce_checkout]'); ?>
</div>

<?php get_footer(); ?>
