<?php
/* 
Template Name: One Page Checkout 
*/

defined( 'ABSPATH' ) || exit;

get_header('shop'); ?>

<div class="container one-page-checkout">
    <div class="woocommerce">
        <div class="one-page-checkout-cart">
            <h2><?php _e('Your Cart', 'your-text-domain'); ?></h2>
            <?php wc_get_template_part('cart/cart'); ?>
        </div>

        <div class="one-page-checkout-form">
            <h2><?php _e('Checkout', 'your-text-domain'); ?></h2>
            <?php wc_get_template_part('checkout/form-checkout'); ?>
        </div>
    </div>
</div>

<?php get_footer('shop'); ?>
