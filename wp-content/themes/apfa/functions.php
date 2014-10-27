<?php
/**
 * Theme functions and definitions
 *
 */

$text_domain = 'apfa';

function apfa_scripts() {
	wp_enqueue_script( 'scripts', get_stylesheet_directory_uri().'/js/scripts.js', array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'apfa_scripts' );

add_filter( 'woocommerce_product_tabs', 'sb_woo_remove_reviews_tab', 98);
function sb_woo_remove_reviews_tab($tabs) {
	unset($tabs['reviews']);
	return $tabs;
}
$args = array(
	'id'            => 'homeWidgets',
	'name'          => __( 'Home Widgets', $text_domain ),
	'description'   => __('test', $text_domain)
	);
register_sidebar( $args );

add_filter( 'loop_shop_per_page', create_function( '$cols', 'return 8;' ), 20 );

/* POA TEXT */
add_filter( 'woocommerce_get_price_html', 'hide_free_price_notice', 1, 2 );
//add_filter( 'woocommerce_get_price', 'hide_free_price_notice', 1, 2 );
function hide_free_price_notice( $price, $product ){
	if ( $product->price > 0 ) {
		return '$'.$product->price;
	} else {
		return 'POA';
	}
}
add_filter( 'wc_price', 'hide_free_price_notice_cart', 100, 2 );
function hide_free_price_notice_cart( $price, $args ){
	$price = trim(strip_tags($price));
	if ($price == '&#36;0.00') {
		return 'POA';
	} else {
		return $price;
	}	
}

