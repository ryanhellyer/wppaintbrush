<?php
/**
 * @package WordPress
 * @subpackage WP Paintbrush
 * @since WP Paintbrush 0.1
 *
 * WP Paintbrush designer tool
 *
 * This is the main file loaded by the theme to 
 * load and process the designer tool
 */


/**
 * Do not continue processing since file was called directly
 * @since 0.1
 */
if ( !defined( 'ABSPATH' ) )
	die( 'Eh! What you doin in here?' );

/**
 * Include required files
 * @since 0.9
 */
require( 'extra-functions.php' ); // Load functions
require( 'editor-functions.php' ); // Load editor functions
require( 'editor.php' ); // Load core functions
require( 'modules/index.php' ); // Load built in modules
require( 'sanitization.php' ); // Load sanitization functions
require( 'sanitization-text.php' ); // Load sanitization functions
require( 'sanitization-variations.php' ); // Load sanitization functions
require( 'sanitization-options.php' ); // Load sanitization functions

/* Load required files
 * @since 0.1
 */
function ptc_load_files() {

	// Bail out if in admin panel
	if ( is_admin() )
		return;

	// Make sure both sidebars are set - UGLY IF STATEMENT IS A HACK TO PREVENT MUCK UPS WHEN NO SETTINGS ARE PRESENT YET - IE: WHEN INSTALLING THE THEME
	if ( get_option( WPPB_SETTINGS ) ) {
		$wppb_options = get_option( WPPB_SETTINGS );
		$wppb_options['show_widget1'] = 'on';
		$wppb_options['show_widget2'] = 'on';
		$wppb_options['name_widget1'] = 'Sidebar 1';
		$wppb_options['before_widget1'] = '<div class="widget">';
		$wppb_options['after_widget1'] = '</div>';
		$wppb_options['before_title1'] = '<h3>';
		$wppb_options['after_title1'] = '</h3>';
		$wppb_options['name_widget2'] = 'Sidebar 2';
		$wppb_options['before_widget2'] = '<div class="widget">';
		$wppb_options['after_widget2'] = '</div>';
		$wppb_options['before_title2'] = '<h3>';
		$wppb_options['after_title2'] = '</h3>';
		update_option( WPPB_SETTINGS, $wppb_options );
	}

	// Security check for image uploads
	if ( $_FILES ) {
		require_once( ABSPATH . 'wp-admin/includes/file.php' ); // Load file necessary for processing image file on front-end
		require_once( ABSPATH . 'wp-includes/pluggable.php' ); // Load file necessary for processing image file on front-end
		wppb_image_upload_form_check();
	}

}
add_action( 'init', 'ptc_load_files', 9 );

/* Load AJAX content
 * @since 0.1
 */
if ( isset( $_GET['generator-css'] ) ) {
	if ( '' != $_GET['generator-css'] )
		add_action( 'init', 'ptc_load_stuff' );
}
if ( isset( $_GET['change_theme'] ) ) {
	if ( '' != $_GET['change_theme'] )
		add_action( 'init', 'ptc_change_design' );
}
if ( isset( $_GET['generator-content'] ) ) {
	if ( '' != $_GET['generator-content'] )
		add_action( 'template_redirect', 'ptc_ajax_content' );
}
if ( isset( $_GET['generator-export'] ) ) {
	if( '' != $_GET['generator-export'] )
		add_action( 'init', 'wppb_export_zip' );
}
