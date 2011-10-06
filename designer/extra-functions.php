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
	die( wppb_create_template() );
}

/* Create template
 * @since 0.1
 */
function wppb_create_template() {

	// Grab and sanitize inputs
	if ( isset( $_POST['positions'] ) )
		$wppb_design_settings = wppb_sanitize_inputs( $_POST ); // Grab submitted data
	else
		$wppb_design_settings = wppb_sanitize_inputs( get_option( WPPB_DESIGNER_SETTINGS ) ); // Grab from database

	// Setting processed template variable
	$processed_template = '';

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

			if ( !isset( $wppb_design_settings['changehome_homelayout_display'] ) )
				$wppb_design_settings['changehome_homelayout_display'] = '';

			// Replacing [wppb_content] with appropriate page specific template
			if ( is_front_page()  && 'Magazine' == $wppb_design_settings['changehome_homelayout_display'] )
				$shortcode = str_replace( 'wppb_content', 'wppb_content_front', $shortcode );
			elseif ( is_home() || is_archive() || is_search() )
				$shortcode = str_replace( 'wppb_content', 'wppb_content_home', $shortcode );
			elseif ( is_single() )
				$shortcode = str_replace( 'wppb_content', 'wppb_content_single', $shortcode );
			elseif ( is_page() )
				$shortcode = str_replace( 'wppb_content', 'wppb_content_page', $shortcode );

			// Shortcodifying template
			if ( $bit == $id )
				$template = do_shortcode( $shortcode );
		}

		// Execute template
		$processed_template .= do_shortcode( $template );
	}

	return $processed_template;
}

/* Process editor submits
 * Handles saves, publishes, exports etc.
 * @since 0.1
 */
function wppb_load_stuff() {
	global $options, $css;

	// Grab and sanitize data
	$options = wppb_sanitize_inputs();

	// Processing CSS on an external server
	$css = wppb_load_processed_css();

	// Grabbing raw CSS before addition of URLs (urls are needed for internal CSS file, but cause problems when exporting themes etc. as they need to be removed)
	$options['css'] = $css;

	// Add URLs (needed since CSS won't reference images correctly otherwise - not needed for storage though as can dynamically add it later)
	$css = wppb_convert_urls_in_css( $css );

	// Serve CSS
	echo $css;

	// Hook for extra functionality at this point
	do_action( 'wppb_load_stuff_hook' );

	exit;
}

/* Publish, save or export
 * Used in wppb_load_stuff()
 * @since 1.0
 */
function wppb_publish_save_export() {
	global $options, $css;

	// Save options
	if ( 'save' == $_GET['generator-css'] || 'export' == $_GET['generator-css'] || 'publish' == $_GET['generator-css'] )
		update_option( WPPB_DESIGNER_SETTINGS, $options );

	// Publishing and Export options
	if ( 'publish' == $_GET['generator-css'] || 'export' == $_GET['generator-css'] )
		wppb_publish_options( $options, $css );

	// Export zip file (creates redirect to serve zip file - required for loading zip via AJAX)
	if ( 'export' == $_GET['generator-css'] ) {
		echo '</style><meta http-equiv="refresh" content="0;url=' . home_url() . '/?generator-export=' . esc_attr( $_POST['wppb_nonce'] ) . '"><style type="text/css">';
		die;
	}
}
add_action( 'wppb_load_stuff_hook', 'wppb_publish_save_export' );

/* Get options ready for storing
 * This processes the designer settings into a format suitable for publishing
 * Returns unfiltered/sanitized options (no need to sanitize since done during publishing process) 
 * @since 0.1
 */
function wppb_get_options_for_storing( $wppb_design_settings, $css='' ) {

	// Setting CSS	
	$options['css'] = $css;

	// Add support for sidebars
	$sidebar_positions = str_replace( 'layout-', '', $wppb_design_settings['sidebar_positions'] ) ;
	$sidebar_positions = explode( ',', $sidebar_positions );
	foreach( $sidebar_positions as $block ) {
		$count = 0;
		while( $count < 2 ) {
			$count++;
			$options['show_widget' . $count] = '';
			$options['name_widget' . $count] = '';
			$options['before_widget' . $count] = '';
			$options['after_widget' . $count] = '';
			$options['before_title' . $count] = '';
			$options['after_title' . $count] = '';
			if ( 'sidebar' . $count == $block ) {
				$options['show_widget' . $count] = 'on';
				$options['name_widget' . $count] = 'Sidebar ' . $count;
				$options['before_widget' . $count] = '<div class="widget">';
				$options['after_widget' . $count] = '</div>';
				$options['before_title' . $count] = '<h3>';
				$options['after_title' . $count] = '</h3>';
			}
		}
	}

	// Set header and footer templates
	$positions = explode( ',', $wppb_design_settings['positions'] );
	$section = 'header'; // Load header first
	$options['header'] = ''; // Resetting header
	$options['footer'] = ''; // Resetting footer
	foreach( $positions as $pos ) {
		foreach( wppb_page_chunks() as $chunk=>$test ) {
			$chunk = strtolower( $chunk ); // Convert to lowercase
			$chunk = str_replace( ' ', '', $chunk ); // Strip spaces
			if ( ( 'layout-' . $chunk ) == $pos ) {
				$chunk = '[wppb_' . strtolower( $chunk ) . ']'; // Convert to lowercase
				if ( 'footer' == $section )
					$options['footer'] .= do_shortcode( $chunk );
				if ( '[wppb_content]' == $chunk )
					$section = 'footer';
				if ( 'header' == $section )
					$options['header'] .= do_shortcode( $chunk );
			}
		}
	}

	// Add support for menus
	$positions = explode( ',', $wppb_design_settings['positions'] );
	foreach( $positions as $pos ) {
		foreach( wppb_page_chunks() as $chunk=>$test ) {
			$chunk = strtolower( $chunk ); // Convert to lowercase
			$chunk = str_replace( ' ', '', $chunk ); // Strip spaces
			if ( ( 'layout-' . $chunk ) == $pos ) {
				if ( 'menu' == $chunk )
					$options['support_primarymenu'] = 'on';
			}
		}
	}

	// Set main templates
	$options['front_page'] = '';
	$options['home'] = "[get_header]\n\n" . do_shortcode( '[wppb_content_home]' ) . "\n\n[get_footer]";
	$options['archive'] = "[get_header]\n\n" . do_shortcode( '[wppb_content_home]' ) . "\n\n[get_footer]";
	$options['index'] = "[get_header]\n\n" . do_shortcode( '[wppb_content_home]' ) . "\n\n[get_footer]";
	$options['page'] = "[get_header]\n\n" . do_shortcode( '[wppb_content_page]' ) . "\n\n[get_footer]";
	$options['single'] = "[get_header]\n\n" . do_shortcode( '[wppb_content_single]' ) . "\n\n[get_footer]";

	// Correct URLs
	$options['css'] = str_replace( 'http: //', 'http://', $options['css'] );

	return $options; 
}

/* Array of page chunks
 * @since 0.1
 */
function wppb_page_chunks() {

	global $chunks; // Need global for passing data via action hook

	do_action( 'wppb_add_chunk' ); // Creating action hook for additional chunks to be added via plugins

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

/* On button for editor
 * @since 1.0
 */
function wppb_open_editor() {
	?>
<a id="wppb-openme" <?php
	if ( 'on' == get_option( 'wppb_designer_pane' ) )
		echo 'style="display:none;"';
	else {
		// Creating link
		$link = home_url() . '/?wppb_designer_pane=on';
		$link = wp_nonce_url( $link, 'wppb_editor' );
		echo 'href="' . $link . '"';
	}
?>>Open Editor</a><?php
}
add_action( 'wp_footer', 'wppb_open_editor' );

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
add_action( 'init', 'wppb_load_files', 9 );

/* Initialize theme
 * Preferentially loads either designer template, stored template, or AJAX request for content
 * @since 0.9
 */
function wppb_designer_init() {

	if ( !isset( $_GET['generator-css'] ) )
		$_GET['generator-css'] = '';

	// Load editor, if set to "on" and user is logged in and not attempting to load AJAX content
	if ( !isset( $_GET['generator-content'] ) )
		$_GET['generator-content'] = '';
	if ( 'on' == get_option( 'wppb_designer_pane' ) && current_user_can( 'manage_options' ) && 'load' != $_GET['generator-content'] && '' == $_GET['generator-css'] ) {
		remove_action( 'wppb_pre_theme', 'wppb_template_load' ); // Unhooks existing template editor template
		remove_action( 'wp_print_styles', 'wppb_settings_css' ); // Disabling current themes stylesheet
		add_action( 'wp_footer', 'wppb_load_template', 9 );
	}
	// Else load AJAX content
	else
		add_action( 'wppb_pre_header', 'wppb_ajax_content', 1 ); // Need at high priority to make sure theme is loaded before random junk is loaded
}
add_action( 'init', 'wppb_designer_init' );
