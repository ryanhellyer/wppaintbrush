<?php
/**
 * @package WordPress
 * @subpackage WP Paintbrush
 * @since WP Paintbrush 0.1
 *
 * CSS specific functions used in WP Paintbrush designer tool
 */


/**
 * Do not continue processing since file was called directly
 * @since 0.1
 */
if ( !defined( 'ABSPATH' ) )
	die( 'Eh! What you doin in here?' );

/* Add external CSS
 * Connects to external API to process CSS
 * @since 1.0
 */
function wppb_add_external_css( $css ) {

	// Write styles
	$args = array(
		'body' => $_POST,
		'user-agent' => 'WP Paintbrush theme'
	);

	// Send data to external server
	$style = wp_remote_post( WPPB_CSS_GENERATOR, $args );

	if ( empty( $css ) )
		$css = '';
	$css .= $style['body'];

	if ( 200 != $style['response']['code'] )
		return 'Bugger! Couldn\'t connect to the server! End-users should never see this error, so if you are reading it whilst using WP Paintbrush, please let us know :) http://wppaintbrush.com/contact/'; // Serve error
	else
	    return $css;
}
add_filter( 'wppb_add_css', 'wppb_add_external_css' );

/* Load dynamically generated stylesheet
 * @since 0.1
 */
function wppb_load_styles() {

	// If designer pane is not being loaded, then bail out
	if ( 'on' != get_option( 'wppb_designer_pane' ) || !current_user_can( 'manage_options' ) || is_admin() )
		return;

	// Grab from original designer settings from database
	$wppb_designer_settings = get_option( WPPB_DESIGNER_SETTINGS );

	// Grab and sanitize inputs
	if ( isset( $_POST['positions'] ) )
		$wppb_design_settings = wppb_sanitize_inputs( $_POST ); // Grab submitted data
	else
		$wppb_design_settings = $wppb_designer_settings;

	// Insert CSS in (so that the current page can be quickly styled without dragging CSS from external server)
	$wppb_design_settings['css'] = $wppb_designer_settings['css'];
	$css = $wppb_design_settings['css'];
	$css = wppb_convert_css_on_load( $css ); // Fixing image urls
	$css = str_replace( "	", '', $css ); // Stripping tabs out
	$css = str_replace( "\n", '', $css ); // Stripping carriage returns out
	$css = str_replace( ': ', ':', $css ); // Stripping spaces after colons out

	// Display CSS
	echo '<style id="wppb-css" type="text/css">';
	echo $css; // Adding CSS
	//do_action( 'wppb_load_css' ); // Hook for allowing plugins to append CSS - should be a filter
	echo '</style>';
}
add_action( 'wp_print_styles', 'wppb_load_styles' );

/* Disable standard stylesheet
 * Load editor stylesheet
 * @since 0.1
 */
function wppb_handle_stylesheets() {

	// If designer pane is not being loaded, then bail out
	if ( 'on' != get_option( 'wppb_designer_pane' ) || !current_user_can( 'manage_options' ) ) {
		wp_enqueue_style( 'wppb_openme', WPPB_URL . 'openme.css', false, '', 'screen' );
		return;
	}

	wp_enqueue_style( 'wppbcss', WPPB_URL . 'style.css', false, '', 'screen' );
	wp_deregister_style( 'wppb-core' ); 
}
add_action( 'wp_print_styles', 'wppb_handle_stylesheets' );

/* Convert URLs in CSS
 *
 * Needed because images are stored as relative URLs but need to be as absolute URLs when used inline on page
 * Also need to used absolute URLs when used in CSS file as images can be used for various folders such as uploads, child theme or internal theme folders
 * @since 1.0
 */
function wppb_convert_css_on_load( $css ) {

	// Fixing space gap in http:// in URL
	$css = str_replace( 'http: //', 'http://', $css );

	// Convert image URLs for those in uploads folder
 	$css = str_replace( "url('stored/", "url('" . WPPB_STORAGE_IMAGES_FOLDER . '/', $css ); // Fixing CSS URLs
 	$css = str_replace( "url('wppb_child_theme/", "url('" . get_stylesheet_directory_uri() . '/images/', $css ); // Fixing CSS URLs

	return $css;
}

/* Convert URLs in CSS
 *
 * Needed because images are stored as relative URLs but need to be as absolute URLs when used inline on page
 * Also need to used absolute URLs when used in CSS file as images can be used for various folders such as uploads, child theme or internal theme folders
 * @since 1.0
 */
function wppb_convert_urls_in_css( $css ) {

	// Iterate available themes to convert their image URLs (since images used in those themes aren't stored in the uploads folder)
	foreach( wppb_available_themes() as $count=>$theme ) {
		if ( 'Internal' == $theme['Type'] )
		 	$css = str_replace( "url('" . $theme['Folder'], "url('" . get_template_directory_uri() . '/designs/' . $theme['Folder'] . '/images/', $css ); // Fixing CSS URLs
		elseif ( 'Child' == $theme['Type'] )
		 	$css = str_replace( "url('" . $theme['Folder'], "url('" . get_theme_root_uri() . '/' . $theme['Folder'] . '/images/', $css ); // Fixing CSS URLs
	}

	return $css;
}

/* Convert URLs in CSS
 *
 * Needed because images are stored as relative URLs but need to be as absolute URLs when used inline on page
 * Also need to used absolute URLs when used in CSS file as images can be used for various folders such as uploads, child theme or internal theme folders
 * @since 1.0
 */
function wppb_convert_published_urls( $css ) {
	$css = wppb_convert_css_on_load( $css );
	return $css;
}
add_filter( 'pixopoint_css_filter', 'wppb_convert_published_urls' );

/* Create CSS from editor submit data
 * @since 0.1
 */
function wppb_load_processed_css( $css ) {

	// Check that nonce is valid
	if ( !wp_verify_nonce( $_POST['wppb_nonce'], 'wppb_nonce' ) )
		exit( 'Error: Nonce not verified!' );

	// Filter for adding CSS
	$css = apply_filters ( 'wppb_add_css' , $css );

	// Confirming that CSS is indeed valid by checking that string added to end of CSS exists
	if ( ( $pos = strpos( $css, '/* CSS provided by WP Paintbrush CSS generator */' ) ) === FALSE )
		exit( "Error: Couldn't connect to server" );

	// Sanitizing CSS
	$css = pixopoint_validate_css( $css );

	// Add random number to help with debugging
	$css = "/* " . rand() . " */\n\n\n" . $css;

	// Serve CSS
	return $css;
}

