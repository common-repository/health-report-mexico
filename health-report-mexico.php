<?php
/*
Plugin Name: Health Report Mexico
Description: Display information about COVID-19 cases in Mexico
Version: 1.0.5
Author: htmgarcia
Author URI: https://hrm.htmgarcia.com
Text Domain: health-report-mexico
*/

/**
 * Includes the COVID-19 map
 */
require_once __DIR__ . '/includes/covid.php';
add_shortcode( 'hrmex-covid-map', array( 'HRMEX_Covid_Map_Shortcode', 'hrmex_shortcode' ) );

/**
 * Enqueue CSS
 */
function hrmex_styles() {
    wp_enqueue_style( 'hrmex_styles', plugins_url( 'css/style.css', __FILE__ ) );
}
add_action( 'wp_enqueue_scripts', 'hrmex_styles' );

// Save database options
function hrmex_save_init() {
    update_option('hrmex_save_init', 'init 1');
}
add_action('init', 'hrmex_save_init');

function hrmex_save_admin_init() {
    update_option('hrmex_save_admin_init', 'admin init 1');
}
add_action('admin_init', 'hrmex_save_admin_init');

function hrmex_save_is_admin() {
    update_option('hrmex_save_is_admin', is_admin() . ' 1');
}
add_action('admin_init', 'hrmex_save_is_admin');
