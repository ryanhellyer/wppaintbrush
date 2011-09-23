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
		__( 'Latest Posts from WP Paintbrush', 'wppb_lang' ),
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
			'title'         => __( 'News from WP Paintbrush', 'wppb_lang' ),
			'items'         => 3,
			'show_summary'  => 1,
			'show_author'   => 0,
			'show_date'     => 1
		)
	);
	echo '</div>';
}

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
		__( 'Import/export', 'wppb_lang' ),
		__( 'Import/export', 'wppb_lang' ),
		'edit_theme_options',
		'import_template',
		'import_template_do_page'
	);

}
add_action( 'admin_menu', 'wppb_add_admin_page' ); // Creat admin page


/**
 * Display list of uploaded images
 * @since 0.1
 */
function wppb_display_images() {
	$file_list = wppb_list_files( wppb_storage_folder( 'images' ) );
	if ( is_array( $file_list ) ) {
		foreach ( $file_list as $file ) {
			echo '<li>
				<a href="' . wppb_storage_folder( 'images', 'url' ) . '/' . $file . '">' . $file . '</a>
				<input class="delete_file" type="submit" name="delete_file" value="' . $file . '" />
				<br />
				<a href="' . wppb_storage_folder( 'images', 'url' ) . '/' . $file . '">
					<img src="' . wppb_storage_folder( 'images', 'url' ) . '/' . $file . '" class="uploaded-image" alt="" />
				</a>
			</li>';
		}
	}
}
