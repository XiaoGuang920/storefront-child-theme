<?php
/**
 * Storefront engine room
 *
 * @package storefront-child
 */

add_action('after_setup_theme', 'storefront_child_load_textdomain');

function storefront_child_load_textdomain() {
	load_child_theme_textdomain(
		'storefront-child', 
		get_stylesheet_directory() . '/languages'
	);
}

add_action('wp_enqueue_scripts', 'storefront_child_enqueue_styles');

function storefront_child_enqueue_styles() {
    $parent_style = 'storefront-style';

    wp_enqueue_style(
		$parent_style, 
		get_template_directory_uri() . '/style.css'
	);

    wp_enqueue_style( 
		'child-style',
        get_stylesheet_directory_uri() . '/assets/css/one-page-checkout.css',
        array($parent_style),
        wp_get_theme()->get('Version')
    );
}

add_action('wp_enqueue_scripts', 'load_custom_scripts');

function load_custom_scripts() {
    wp_enqueue_script(
		'child-script', 
		get_stylesheet_directory_uri() . '/assets/js/one-page-checkout.js', 
		array('jquery'), 
		'1.0', 
		true
	);
}

add_action('wp_enqueue_scripts', 'one_page_checkout_scripts');

function one_page_checkout_scripts() {
    if (is_page_template('templates/one-page-checkout.php')) {
        wp_enqueue_script( 'wc-checkout' );
    }
}

add_filter('woocommerce_countries', 'custom_specific_country', 10, 1);

function custom_specific_country($countries) {
	$reserve_code_list = [
		'TW' => true,
		'JP' => true,
	];

   	foreach ($countries as $code => $country) {
		if (isset($reserve_code_list[$code])) continue;
		unset($countries[$code]);
   	}
   	return $countries; 
}

add_filter('woocommerce_checkout_fields', 'custom_override_checkout_fields');

function custom_override_checkout_fields($fields) {
	$fields['billing']['billing_city']['type'] = 'select';
	$fields['billing']['billing_city']['placeholder'] = 'Choose your city';

	$options = [
		'taipei'     => 'Taipei',
		'new_taipei' => 'New Taipei',
		'taoyuan'    => 'Taoyuan',
		'hsinchu'    => 'Hsinchu',
		'miaoli'     => 'Miaoli',
		'taichung'   => 'Taichung',
		'changhua'   => 'Changhua',
		'nantou'     => 'Nantou',
		'yunlin'     => 'Yunlin',
		'chiayi'     => 'Chiayi',
		'tainan'     => 'Tainan',
		'kaohsiung'  => 'Kaohsiung',
		'pingtung'   => 'Pingtung',
		'taitung'    => 'Taitung',
		'hua'        => 'Hualien',
		'yilan'      => 'Yilan',
		'penghu'     => 'Penghu',
		'keelung'    => 'Keelung',
		'jinmen'     => 'Jinmen',
		'lienchiang' => 'Lienchiang'
	];

    $fields['billing']['billing_city']['options'] = $options;
    return $fields;
}

add_filter('woocommerce_is_checkout', 'one_page_checkout_is_checkout');

function one_page_checkout_is_checkout($is_checkout) {
    if (is_page_template('templates/one-page-checkout.php')) {
        $is_checkout = true;
    }

    return $is_checkout;
}
