<?php
/**
 * @package WordPress
 * @subpackage WP Paintbrush
 * @since WP Paintbrush 0.1
 *
 * Extra functions used in WP Paintbrush designer tool
 */


/**
 * Do not continue processing since file was called directly
 * @since 0.1
 */
if ( !defined( 'ABSPATH' ) )
	die( 'Eh! What you doin in here?' );


/**
 * Add link to admin bar
 * @since 1.0
 */
function wppb_admin_bar_link() {
	global $wp_admin_bar;
	
	if ( !is_admin_bar_showing() || !current_user_can( 'manage_options' ) )
		return;

	if ( 'on' == get_option( 'wppb_designer_pane' ) )
		$opt = 'off';
	else
		$opt = 'on';

	// Creating link
	$link = home_url() . '/?wppb_designer_pane=' . $opt;
	$link = wp_nonce_url( $link, 'wppb_editor' );

	// Adding menu item
	$wp_admin_bar->add_menu(
		array(
			'parent' => 'appearance',
			'id'     => 'wppb_designer_pane',
			'title'  => __( 'Editor ' . $opt ),
			'href'   => $link
		)
  	 );
}
add_action( 'wp_before_admin_bar_render', 'wppb_admin_bar_link' );

/* Load content via AJAX
 * @since 0.8
 */
function wppb_ajax_content() {
	$wppb_template = wppb_create_template(); // Creating template
	$wppb_template = do_shortcode( $wppb_template ); // Create shortcodes
	$wppb_template = do_shortcode( $wppb_template ); // Create inner shortcodes
	die( $wppb_template ); // Spit out template and kill execution immediately since only loading this for AJAX purposes
}

/* Create template
 * @since 0.1
 */
function wppb_create_template( $wppb_template='' ) {
	global $wppb_design_settings;

	// Set variable in case it doesn't exist already
	if ( !isset( $wppb_template ) )
	    $wppb_template = '';

	// Grab and sanitize inputs
	if ( isset( $_POST['positions'] ) )
		$wppb_design_settings = wppb_sanitize_inputs( $_POST ); // Grab submitted data
	else
		$wppb_design_settings = get_option( WPPB_DESIGNER_SETTINGS );

	// Hook for plugins to filter the value of $wppb_design_settings;
	$wppb_design_settings = apply_filters ( 'wppb_template_creation_filter' , $wppb_design_settings );

	// Work out block positions	
	$positions = explode( ',', $wppb_design_settings['positions'] ); // Splitting positions into an array
	$sidebar_positions = explode( ',', $wppb_design_settings['sidebar_positions'] ); // Splitting positions into an array

	// Pass through each block position and add appropriate block to template string
	foreach( $positions as $bit ) {
		// Process template chunks
		foreach( wppb_page_chunks() as $chunk=>$shortcode ) {
			$id = strtolower( $chunk ); // Convert to lowercase
			$id = str_replace( ' ', '', $id ); // Strip spaces
			$id = 'layout-' . $id; // Prepend ID prefix

			// Replacing [wppb_content] with appropriate page specific template
			if ( is_front_page() )
				$shortcode = str_replace( 'wppb_content', 'wppb_content_front', $shortcode );
			elseif ( is_home() || is_archive() || is_search() )
				$shortcode = str_replace( 'wppb_content', 'wppb_content_home', $shortcode );
			elseif ( is_single() )
				$shortcode = str_replace( 'wppb_content', 'wppb_content_single', $shortcode );
			elseif ( is_page() )
				$shortcode = str_replace( 'wppb_content', 'wppb_content_page', $shortcode );

			// Shortcodifying template
			if ( $bit == $id )
				$template = $shortcode;
		}

		// Execute template
		$wppb_template .= $template;
	}

	return $wppb_template;
}

/* Process editor submits
 * Handles saves, publishes, exports etc.
 * @since 0.1
 */
function wppb_load_stuff() {
	global $wppb_options, $css;

	// Grab and sanitize data
	$wppb_options = wppb_sanitize_inputs();

	// Grabbing raw CSS before addition of URLs (urls are needed for internal CSS file, but cause problems when exporting themes etc. as they need to be removed)
	//$wppb_options['css'] = $css;

	// Processing CSS on an external server
	$css = wppb_load_processed_css( $css );
	$wppb_options['css'] = $css;

	// Serve CSS
	$css = wppb_convert_css_on_load( $css );

	// Hook for extra functionality at this point
	do_action( 'wppb_load_stuff_hook' );

	echo $css;
	exit;
}

/* Publish, save or export
 * Used in wppb_load_stuff()
 * @since 1.0
 */
function wppb_publish_save_export() {
	global $wppb_options, $css;

	// Save options
	if ( 'save' == $_GET['generator-css'] || 'export' == $_GET['generator-css'] || 'publish' == $_GET['generator-css'] )
		update_option( WPPB_DESIGNER_SETTINGS, $wppb_options );

	// Publishing and Export options
	if ( 'publish' == $_GET['generator-css'] || 'export' == $_GET['generator-css'] )
		wppb_publish_options( $wppb_options, $wppb_options['css'] );

	// Export zip file (creates redirect to serve zip file - required for loading zip via AJAX)
	if ( 'export' == $_GET['generator-css'] )
		echo '</style><meta http-equiv="refresh" content="0;url=' . home_url() . '/?generator-export=' . esc_attr( $_POST['wppb_nonce'] ) . '"><style type="text/css">';
}
add_action( 'wppb_load_stuff_hook', 'wppb_publish_save_export' );

/* Get options ready for storing
 * This processes the designer settings into a format suitable for publishing
 * Returns unfiltered/sanitized options (no need to sanitize since done during publishing process) 
 * @since 0.1
 */
function wppb_get_options_for_storing( $wppb_options, $css='' ) {

	// Setting CSS	
	$wppb_options['css'] = $css;

	// Add support for sidebars
	if ( !isset( $wppb_options['sidebar_positions'] ) )
		$wppb_options['sidebar_positions'] = '';
	$sidebar_positions = str_replace( 'layout-', '', $wppb_options['sidebar_positions'] ) ;
	$sidebar_positions = explode( ',', $sidebar_positions );
	foreach( $sidebar_positions as $block ) {
		$count = 0;
		while( $count < 2 ) {
			$count++;
			$wppb_options['show_widget' . $count] = '';
			$wppb_options['name_widget' . $count] = '';
			$wppb_options['before_widget' . $count] = '';
			$wppb_options['after_widget' . $count] = '';
			$wppb_options['before_title' . $count] = '';
			$wppb_options['after_title' . $count] = '';
			if ( 'sidebar' . $count == $block ) {
				$wppb_options['show_widget' . $count] = 'on';
				$wppb_options['name_widget' . $count] = 'Sidebar ' . $count;
				$wppb_options['before_widget' . $count] = '<div id="%1$s" class="widget %2$s">';
				$wppb_options['after_widget' . $count] = '</div>';
				$wppb_options['before_title' . $count] = '<h3>';
				$wppb_options['after_title' . $count] = '</h3>';
			}
		}
	}

	// This section only used when saving
	if ( isset( $wppb_options['positions'] ) ) {
	 	// Set header and footer templates
		$positions = explode( ',', $wppb_options['positions'] );
		$section = 'header'; // Load header first
		$wppb_options['header'] = ''; // Resetting header
		$wppb_options['footer'] = ''; // Resetting footer
		foreach( $positions as $pos ) {
			foreach( wppb_page_chunks() as $chunk=>$test ) {
				$chunk = strtolower( $chunk ); // Convert to lowercase
				$chunk = str_replace( ' ', '', $chunk ); // Strip spaces
				if ( ( 'layout-' . $chunk ) == $pos ) {
					$chunk = '[wppb_' . strtolower( $chunk ) . ']'; // Convert to lowercase
					if ( 'footer' == $section )
						$wppb_options['footer'] .= do_shortcode( $chunk );
					if ( '[wppb_content]' == $chunk )
						$section = 'footer';
					if ( 'header' == $section )
						$wppb_options['header'] .= do_shortcode( $chunk );
				}
			}
		}
	}

	// Add support for menus
	$positions = explode( ',', $wppb_options['positions'] );
	foreach( $positions as $pos ) {
		foreach( wppb_page_chunks() as $chunk=>$test ) {
			$chunk = strtolower( $chunk ); // Convert to lowercase
			$chunk = str_replace( ' ', '', $chunk ); // Strip spaces
			if ( ( 'layout-' . $chunk ) == $pos ) {
				if ( 'menu' == $chunk )
					$wppb_options['support_primarymenu'] = 'on';
			}
		}
	}

	// Set main templates
	//$wppb_options['front_page'] = '';
	$wppb_options['front_page'] = "[get_header]\n\n" . do_shortcode( '[wppb_content_front]' ) . "\n\n[get_footer]";
	$wppb_options['home']       = "[get_header]\n\n" . do_shortcode( '[wppb_content_home]' ) . "\n\n[get_footer]";
	$wppb_options['archive']    = "[get_header]\n\n" . do_shortcode( '[wppb_content_home]' ) . "\n\n[get_footer]";
	$wppb_options['index']      = "[get_header]\n\n" . do_shortcode( '[wppb_content_home]' ) . "\n\n[get_footer]";
	$wppb_options['page']       = "[get_header]\n\n" . do_shortcode( '[wppb_content_page]' ) . "\n\n[get_footer]";
	$wppb_options['single']     = "[get_header]\n\n" . do_shortcode( '[wppb_content_single]' ) . "\n\n[get_footer]";

	// Correct URLs
	$wppb_options['css'] = str_replace( 'http: //', 'http://', $wppb_options['css'] );

	// Filter for plugins to modify data before storage
	$wppb_options = apply_filters ( 'wppb_storage_options_filter' , $wppb_options );

	return $wppb_options; 
}

/* Array of page chunks
 * @since 0.1
 */
function wppb_page_chunks( $chunks='' ) {

	if ( !isset( $chunks ) )
		$chunks = '';

	$chunks = apply_filters ( 'wppb_add_chunk_filter' , $chunks );

	return $chunks;
}

/* Array of sidebar chunks
 * @since 0.1
 */
function wppb_sidebar_chunks() {
	$chunks = array(
		'S1'       => 'layout-sidebar1',
		'S2'       => 'layout-sidebar2',
		'Content'  => 'layout-maincontent',
	);
	return $chunks;
}

/* Init
 *
 * Handling image uploading
 * Setting options to ensure that widgets are shown
 *
 * @since 0.1
 */
function wppb_load_files() {

	// Bail out if in admin panel
	if ( is_admin() )
		return;
 
	// Make sure both sidebars are set - UGLY IF STATEMENT IS A HACK TO PREVENT MUCK UPS WHEN NO SETTINGS ARE PRESENT YET - IE: WHEN INSTALLING THE THEME
	if ( get_option( WPPB_SETTINGS ) ) {
		$wppb_options = get_option( WPPB_SETTINGS );
		$wppb_options['show_widget1'] = 'on';
		$wppb_options['show_widget2'] = 'on';
		$wppb_options['name_widget1'] = 'Sidebar 1';
		$wppb_options['before_widget1'] = '<div id="%1$s" class="widget %2$s">';
		$wppb_options['after_widget1'] = '</div>';
		$wppb_options['before_title1'] = '<h3>';
		$wppb_options['after_title1'] = '</h3>';
		$wppb_options['name_widget2'] = 'Sidebar 2';
		$wppb_options['before_widget2'] = '<div id="%1$s" class="widget %2$s">';
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
add_action( 'init', 'wppb_load_files', 9 );

/* Initialize theme
 * Preferentially loads either designer template, stored template, or AJAX request for content
 * @since 0.9
 */
function wppb_designer_init() {

	// Setting variables in case they don't exist
	if ( !isset( $_GET['generator-css'] ) )
		$_GET['generator-css'] = '';
	if ( !isset( $_GET['generator-content'] ) )
		$_GET['generator-content'] = '';

	// Load editor, if set to "on" and user is logged in and not attempting to load AJAX content
	if ( 'on' == get_option( 'wppb_designer_pane' ) && current_user_can( 'manage_options' ) && 'load' != $_GET['generator-content'] && '' == $_GET['generator-css'] ) {
		remove_action( 'wp_print_styles', 'wppb_settings_css' ); // Disabling current themes stylesheet
		add_filter( 'wppb_template_filter', 'wppb_load_template' ); // Loads front-end editor + template
		remove_filter( 'wppb_template_filter', 'wppb_template_load' ); // Stops published template from loading
	}
	// Else load AJAX content
	else
		add_action( 'wppb_pre_header', 'wppb_ajax_content', 1 ); // Need at high priority to make sure theme is loaded before random junk is loaded
}
add_action( 'init', 'wppb_designer_init' );
