<?php
/**
 * Plugin Name: Transparent Header
 * Plugin URI: https://beaverlodgehq.com
 * Description: The easiest way to add a transparent header to the Beaver Builder theme.
 * Author: Pippin Williamson and Company
 * Author URI: https://beaverlodgehq.com
 * Version: 1.0.0
 */

function bb_transp_scripts() {

	wp_enqueue_script( 'jquery' );	
	wp_enqueue_script( 'bb-theme-transparent', plugins_url( '/bb-theme-transparent.js' , __FILE__ ), array( 'scriptaculous' ) );	
	wp_enqueue_style( 'bb-theme-transparent', plugins_url( '/bb-theme-transparent.css' , __FILE__ ) );

}
add_action( 'wp_enqueue_scripts', 'bb_transp_scripts' );
