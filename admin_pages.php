<?php
/**
 * @package WordPress
 * @subpackage WP Paintbrush theme
 * @since WP Paintbrush 0.1
 *
 * Admin pages
 */

//delete_option( 'WPPB_SETTINGS' );delete_option( 'WPPB_DESIGNER_SETTINGS' );

/**
 * Do not continue processing since file was called directly
 * @since 0.1
 */
if ( !defined( 'ABSPATH' ) )
	die( 'Eh! What you doin in here?' );

/**
 * Add dashboard widgets
 * @since 0.8.6
 */
function wppb_admin_add_dashboard_widgets() {
	
	// Add custom WP Paintbrush feed
	wp_add_dashboard_widget(
		'wpbp_dashboard_custom_feed',
		'Latest Posts from WP Paintbrush',
		'wppb_dashboard_custom_feed_output'
	);
}
add_action( 'wp_dashboard_setup', 'wppb_admin_add_dashboard_widgets' );

/**
 * New dashboard widget
 * Creates the custom dashboard feed RSS box
 * @since 0.8.6
 */
function wppb_dashboard_custom_feed_output() {
	
	echo '<div class="rss-widget" id="wppb-rss-widget">';
	wp_widget_rss_output(
		array(
			'url'           => 'http://wppaintbrush.com/feed/',
			'title'         => 'News from WP Paintbrush',
			'items'         => 3,
			'show_summary'  => 1,
			'show_author'   => 0,
			'show_date'     => 1
		)
	);
	echo '</div>';
}

/**
 * Grabs a design
 * Used when importing templates
 * @since 0.1
 */
function wppb_grab_design( $design ) {

	// Starting importation process
	$folder = get_template_directory() . '/designs/' . $design . '/';
	$file = $folder . 'data.tpl';
	if ( !file_exists( $file ) )
		return get_option( WPPB_SETTINGS ); // If file doesn't exist, just load existing template

	// Shoving file contents into string
	$data = file_get_contents( $file );

	// Processing data ready for database
	$data = explode( WPPB_BLOCK_SPLITTER, $data ); // Splitting data
	$counter = 0;
	$options = array();
	while ( $counter <= 100 ) {
		if ( !isset( $data[$counter+1] ) )
			$data[$counter+1] = '';
		$split = explode( WPPB_NAME_SPLIT_START, $data[$counter+1] ); // Splitting data
		if ( !isset( $split[1] ) )
			$split[1] = '';
		$split = explode( WPPB_NAME_SPLIT_END, $split[1] ); // Splitting data
		//$split[0] . '<br />' . $split[1]; // Echo'ing data
		$name = $split[0];

		if ( !isset( $split[1] ) )
			$split[1] = '';
		$options[$name] = $split[1];
		$counter++;
	}

	// Copy images over to the uploads folder
	wppb_copy_images( $folder . 'images/', wppb_storage_folder( 'images' ) . '/' );

	// Return array
	return $options;
}

/**
 * Copying images folder
 * @description Copies images from one folder to another
 * @since 0.8.1
 */
function wppb_copy_images( $from, $to ) {

	// If there is no image folder to copy, then bail out now
	if ( !is_dir( $from ) )
		return;

	// Create main storage folder
	if ( !is_dir( wppb_storage_folder() ) )
		mkdir( wppb_storage_folder(), 0777 );

	// Create images folder
	if ( !is_dir( wppb_storage_folder( 'images' ) ) )
		mkdir( wppb_storage_folder( 'images' ), 0777 );

	// Plow through images folder and check for correct files to copy
	$dir = opendir( $from );
	while( false != ( $file = readdir( $dir ) ) ) {
		if (
			$file != '.' AND // ignore .
			$file != '..' AND // ignore ..
			(
				'.gif'  == substr( $file, -4 ) OR // .gif files wanted
				'.jpg'  == substr( $file, -4 ) OR // .jpg files wanted 
				'.jpeg' == substr( $file, -4 ) OR // .jpeg files wanted 
				'.png'  == substr( $file, -4 )    // .png files wanted
			) ) {
			// Copy each file over individually
			copy(
				$from . $file, // Copying from
				$to . $file // Copying to
			);
		}
	}
}

/**
 * Delete a file, or a folder and its contents (recursive algorithm)
 *
 * Modified for use with WP Paintbrush WordPress theme
 *
 * @author      Aidan Lister <aidan@php.net>
 * @version     1.0.3
 * @link        http://aidanlister.com/2004/04/recursively-deleting-a-folder-in-php/
 * @param       string   $dirname    Directory to delete
 * @return      bool     Returns TRUE on success, FALSE on failure
 */
function wppb_delete_directory( $dirname ) {
	
	// Sanity check
	if ( !file_exists( $dirname ) )
		return false;
	
	// Simple delete for a file
	if ( is_file( $dirname ) OR is_link( $dirname ) )
		return unlink( $dirname );
	
    // Loop through the folder
    $dir = dir( $dirname );
    while ( false !== $entry = $dir->read() ) {
		// Skip pointers
		if ( $entry == '.' OR $entry == '..' )
			continue;
	
		// Recurse
		wppb_delete_directory( $dirname . '/' . $entry );
	}
	
	// Clean up
	$dir->close();
	return rmdir( $dirname );
}

/**
 * Setup for new site activation
 * @since 0.8.6
 * REMOVED TEMPORARILY AS UNNEEDED ANYMORE DUE TO LACK OF STATIC FILE CACHING ANYMORE
function wppb_site_activation() {

	// Create main storage folder
	mkdir( wppb_storage_folder(), 0777 );

	// Create images folder
	mkdir( wppb_storage_folder( 'images' ), 0777 );

}
add_action( 'activate_blog ', 'wppb_site_activation' );
if ( !file_exists( wppb_storage_folder() ) )
	add_action( 'admin_init', 'wppb_site_activation' );

function blop() {
$bla = get_option( WPPB_SETTINGS );
echo 'BLOP';
echo '<textarea style="width:100%;">';var_dump( $bla );echo '</textarea>';
//die;
}
add_action( 'init', 'blop', 1 );

function blop2() {
	echo 'DEAD';
	die;
}
add_action( 'init', 'blop2', 20 );
 */

/**
 * Init options to white list our options
 * Store initial settings in DB
 * 
 * @since 0.1
 */
function wppb_options_init() {

	// Register settings
	register_setting( 'wppb_settings_import', 'wppb_settings_theme_import', 'wppb_settings_import_validate' );

	$wppb_design = wppb_grab_design( 'coraline' ); // Grab Coraline design

	// Adding initial settings
	add_option( WPPB_SETTINGS, $wppb_design );
	add_option( 'wppb_designer_pane', 'on' );

	$wppb_templates = $wppb_design; // Set Paintbrush template options
	$wppb_templates['paintbrush_designer'] = ''; // Remove 'paintbrush_designer' since needs to be stored separately


	$wppb_designer_settings = explode( '}', $wppb_design['paintbrush_designer'] );
	foreach( $wppb_designer_settings as $tmp=>$setting ) {
		$setting = explode( '|', $setting );
		$name = $setting[0];
		if ( !isset( $setting[1] ) )
			$setting[1] = '';
		$option = $setting[1];
		$wppb_designer_array[$name] = $option;
	}
	$wppb_designer_array = ptc_sanitize_inputs( $wppb_designer_array );
	$wppb_designer_array['css'] = $wppb_templates['css']; // Storing CSS in designer array so that can be used on page load (otherwise need to make server call on initial page load)
	add_option( WPPB_DESIGNER_SETTINGS, $wppb_designer_array );
}
add_action( 'admin_init', 'wppb_options_init' );

/**
 * Load up the menu pages
 * @since 0.1
 */
function wppb_add_admin_page() {

	// Import/export template admin page
	$page = add_theme_page(
		__( 'Import/export' ),
		__( 'Import/export' ),
		'edit_theme_options',
		'import_template',
		'import_template_do_page'
	);

}
add_action( 'admin_menu', 'wppb_add_admin_page' ); // Creat admin page
