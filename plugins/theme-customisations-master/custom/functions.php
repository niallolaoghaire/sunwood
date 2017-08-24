<?php
/**
 * Functions.php
 *
 * @package  Theme_Customisations
 * @author   WooThemes
 * @since    1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * functions.php
 * Add PHP snippets here
 */
//remove breadcrumbs
add_filter( 'woocommerce_get_breadcrumb', 'jk_remove_breadcrumb');
  function jk_remove_breadcrumb() {
    return false;
}

function sf_change_homepage_title( $args ) {
    if(is_front_page()) {
        remove_action( 'storefront_page', 'storefront_page_header', 10 );
    }
}
add_action( 'wp', 'sf_change_homepage_title' );
