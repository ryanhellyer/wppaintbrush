<?php
/**
 * @package WordPress
 * @subpackage WP Paintbrush
 * @since WP Paintbrush 0.1
 *
 * Theme related functions used in WP Paintbrush designer tool
 */


/**
 * Do not continue processing since file was called directly
 * @since 0.1
 */
if ( !defined( 'ABSPATH' ) )
	die( 'Eh! What you doin in here?' );

/* Array of available designs
 * todo: Internal designs should automatically scan folder and insert directly rather than needing to be specified individually
 * @since 1.0
 */
function wppb_available_themes() {

	// Including administration files needed for grabbing list of child themes
	require_once( ABSPATH . 'wp-admin/includes/ms.php' ); // Needed for accessing child themes in multisite networks
	require_once( ABSPATH . 'wp-admin/includes/theme.php' );

	// Output list of available child themes
	$themes = get_allowed_themes(); // Grabbing list of all available themes
	$wppaintbrushdesigns = array(); // List of allowed WP Paintbrush designs
	$count = 0;
	foreach( $themes as $theme ) {
		if( $theme['Template'] == 'wppaintbrush' && $theme['Stylesheet'] != 'wppaintbrush' ) {
			$wppaintbrushdesigns[$count]['Type'] = 'Child';
			$wppaintbrushdesigns[$count]['Folder'] = $theme['Stylesheet'];
			$wppaintbrushdesigns[$count]['Name'] = $theme['Name'];
			$count++;
		}
	}

	// Add internal designs
	$count++;
	$wppaintbrushdesigns[$count]['Type'] = 'Internal'; 
	$wppaintbrushdesigns[$count]['Folder'] = 'coraline'; 
	$wppaintbrushdesigns[$count]['Name'] = 'Coraline'; 
	$count++;
	$wppaintbrushdesigns[$count]['Type'] = 'Internal'; 
	$wppaintbrushdesigns[$count]['Folder'] = '2011'; 
	$wppaintbrushdesigns[$count]['Name'] = '2011'; 
	$count++;
	$wppaintbrushdesigns[$count]['Type'] = 'Internal'; 
	$wppaintbrushdesigns[$count]['Folder'] = 'enterprize'; 
	$wppaintbrushdesigns[$count]['Name'] = 'Enterprize';

	return $wppaintbrushdesigns; 
}

/* Change design
 * @since 0.9
 */
function wppb_change_design() {

	// Bail out if not logged in and nonce not legit
	if ( !current_user_can( 'manage_options' ) && !wp_verify_nonce( $_POST['ptc_nonce'], 'ptc_nonce' ) )
		exit( 'Error: Nonce not verified!' );

	// Set new design 
	$wppb_design = wppb_grab_design( $_GET['change_theme'] ); // Grab design
	$wppb_designer_settings = explode( '}', $wppb_design['paintbrush_designer'] );
	foreach( $wppb_designer_settings as $tmp=>$setting ) {
		$setting = explode( '|', $setting );
		if ( !isset( $setting[0] ) )
			$setting[1] = '';
		$name = $setting[0];
		if ( !isset( $setting[1] ) )
			$setting[1] = '';
		$option = $setting[1];
		$wppb_designer_array[$name] = $option;
	}

	$wppb_designer_array['css'] = $wppb_design['css']; // Storing CSS in designer array so that can be used on page load (otherwise need to make server call on initial page load)
	update_option( WPPB_DESIGNER_SETTINGS, $wppb_designer_array ); // Saving new design

	die;
}

/**
 * Grabs a design
 * Used when importing templates
 * @since 0.1
 */
function wppb_grab_design( $design ) {

	// Determine the path to the theme based on the theme type chosen
	foreach( wppb_available_themes() as $count=>$theme ) {
		if ( $design == $theme['Folder'] ) {
			if ( 'Internal' == $theme['Type'] )
				$designpath = get_template_directory() . '/designs';
			elseif ( 'Child' == $theme['Type'] )
				$designpath = get_theme_root();
		}
	}

	// Starting importation process
	$folder = $designpath . '/' . $design . '/';
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

	// Return array
	return $options;
}

/* Publish template
 * @since 0.1
 */
function ptc_publish_options( $content_layout, $css ) {

	// Get options ready for publishing
	$input = ptc_get_options_for_storing( $content_layout, $css );

	// Update database with sanitized data
	update_option( WPPB_SETTINGS, wppb_settings_options_validate( $input ) );
}