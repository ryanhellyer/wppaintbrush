<?php
/**
 * @package WordPress
 * @subpackage WP Paintbrush theme
 * @since WP Paintbrush 0.1
 *
 * Admin pages
 */


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
 * CSS for front-end uploader
 * @since 1.0
 */
function wppb_upload_css() {
	wp_register_style( 'wppb_uploader_css', PTC_URL . 'uploader.css' );
	wp_enqueue_style( 'wppb_uploader_css' );
}
if ( 'css' == $_GET['wppb_frontenduploader'] )
	add_action( "admin_print_styles-media-new.php", 'wppb_upload_css' );   

/* Change uploads folder
 * Only changes it if a specific form field was present - whic is dynamically added via WP Paintbrush when using the media uploader on the front-end
 * @since 1.0
 */
function wppb_change_uploads_folder() {
	if ( 'wppb' == $_POST['wppb'] )
		add_filter( 'upload_dir', 'wppb_image_uploads_folder' );
}
add_action( 'admin_init', 'wppb_change_uploads_folder', 9 );

/**
 * Setting the folder for storing images
 * Used for filtering in wppb_image_upload_form_check() 
 * @since 0.9
 */
function wppb_image_uploads_folder( $upload ) {
	$upload['path'] = $upload['basedir'] . '/' . WPPB_STORAGE_FOLDER . '/images';
	$upload['url'] = $upload['baseurl'] . '/' . WPPB_STORAGE_FOLDER . '/images';
	return $upload;
}

/**
 * Adding paramater to plup uploader
 * Required for submitting extra field to indicate when using alternate storage folder
 * @since 1.0
 */
function wppb_plup_post_parameters( $post_params ) {
	$post_params['wppb'] = 'wppb';
	return $post_params;
}
if ( 'css' == $_GET['wppb_frontenduploader'] )
	add_filter( 'upload_post_params', 'wppb_plup_post_parameters' );

/**
 * Add extra input field to pluploader
 * @since 1.0
 */
function wppb_plup_add_input() {
	echo "\n	<input id='wppb' type='hidden' value='wppb' name='wppb' />\n";
}
add_action( 'pre-upload-ui', 'wppb_plup_add_input' );

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
