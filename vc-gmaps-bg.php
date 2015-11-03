<?php
/*
  Plugin Name: VC GMaps Background Section
  Plugin URI: http://www.visceralconcepts.com
  Description: A shortcode to add the Google Map of the company's location  to the bacground of any section.
  Version: 1.0
  Author: Visceral Concepts
  Author URI: http://www.visceralconcepts.com
  License: GPLv3 or Later
 */
 
// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/*
  Before the plugin does anything, we check for updates.
*/

require_once( 'inc/vc-plugin-updater.php' );
if ( is_admin() ) {
    new VC_Plugin_Updater( __FILE__, 'mmcnew', 'vc-gmaps-bg-plugin' );
}


//Load CSS & Scripts

add_action( 'wp_enqueue_scripts', 'gmaps_scripts', 16 );
function gmaps_scripts() {

	wp_register_style( 'gmaps-css', get_plugin_uri() . '/css/gmaps-style.css' );
	wp_register_script( 'gmaps-script', get_plugin_uri() . '/js/gmaps.js' );
	wp_register_script( 'gmaps-api', 'http://maps.googleapis.com/maps/api/js?sensor=false' );
	wp_enqueue_style( 'gmaps-css' );
	wp_enqueue_script( 'gmaps-api' );
	wp_enqueue_script( 'gmaps-script' );

}




















?>