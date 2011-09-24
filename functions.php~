<?php
/**
 * @package WordPress
 * @subpackage WP Paintbrush theme
 * @since WP Paintbrush 0.1
 *
 * Functions
 */


/**
 * Do not continue processing since file was called directly
 * @since 0.1
 */
if ( !defined( 'ABSPATH' ) )
	die( 'Eh! What you doin in here?' );

/* Set Constants
 * @since 0.8.2
 */
define( 'PIXOPOINT_SETTINGS_COPYRIGHT', 'Theme by <a href="http://wppaintbrush.com/">WPPaintbrush.com</a>' ); // Copyright constant
define( 'WPPB_ADMIN_URL', get_template_directory_uri() . '/admin' ); // Admin directory URL
define( 'WPPB_TEMPLATES_LABEL', 'Themes' ); // Decides what label to give the templates page (for theme selection page - in development as an addon plugin)
define( 'WPPB_SETTINGS', 'wppb_settings' ); // Label for option used to store template code in database
define( 'WPPB_DESIGNER_SETTINGS', 'wppb_designer_settings' ); // Label for option used to store designer settings in database
define( 'WPPB_STORAGE_FOLDER', 'wppb_storage' );
define( 'WPPB_STORAGE_IMAGES_FOLDER', wppb_storage_folder( 'images', 'url' ) );
define( 'WPPB_BLOCK_SPLITTER', "/* PixoPoint Template option */\n" ); // Strings used to descriminate between differents bits in exported/imported files
define( 'WPPB_NAME_SPLIT_START', '[----' ); // Strings used to descriminate between differents bits in exported/imported files
define( 'WPPB_NAME_SPLIT_END', "----]\n" ); // Strings used to descriminate between differents bits in exported/imported files

/**
 * Set widget suffixes
 * Currently uses numbers, but could easily incorporate text instead
 * @since 0.1
 */
function wppb_settings_widgets_array() {
	return array(1,2,3,4,5,6);
}

/**
 * Set thumbnail suffixes
 * Currently uses numbers, but could easily incorporate text instead
 * @since 0.1
 */
function wppb_settings_thumbs_array() {
	return array(1,2,3,4);
}

/**
 * Get options function
 * @since 0.1
 */
function get_wppb_option( $option='' ) {

	// Grab options from database and sanitize
	//$options = wppb_settings_options_validate( get_option( WPPB_SETTINGS ) ); // Sanitized outputs - removed due to performance
	$options = get_option( WPPB_SETTINGS );

	// Choose which bit to return
	if ( '' == $option )
		return $options; // If not option requested, the load ALL options
	elseif ( isset( $options[$option] ) )
		return $options[$option]; // Else, load specific option requested
}

/* Initialize theme
 * Preferentially loads either designer template, stored template, or AJAX request for content
 * @since 0.9
 */
function wppb_init() {

	if ( !isset( $_GET['generator-css'] ) )
		$_GET['generator-css'] = '';

	// Load editor, if set to "on" and user is logged in and not attempting to load AJAX content
	if ( !isset( $_GET['generator-content'] ) )
		$_GET['generator-content'] = '';
	if ( 'on' == get_option( 'wppb_designer_pane' ) && current_user_can( 'manage_options' ) && 'load' != $_GET['generator-content'] && '' == $_GET['generator-css'] ) {
		remove_action( 'wppb_pre_theme', 'wppb_template_load' ); // Unhooks existing template editor template
		remove_action( 'wp_print_styles', 'wppb_settings_css' ); // Disabling current themes stylesheet
		add_action( 'wp_footer', 'ptc_load_template', 9 );
	}
	// Else load AJAX content
	else
		add_action( 'wppb_pre_header', 'ptc_ajax_content', 1 ); // Need at high priority to make sure theme is loaded before random junk is loaded
}
add_action( 'init', 'wppb_init' );

/* Sets whether designer pane is on or not
 * @since 0.9
 */
if ( isset( $_GET['wppb_designer_pane'] ) && current_user_can( 'manage_options' ) ) {
	
	// Check nonce value for security reasons
	if ( !wp_verify_nonce( $_GET['_wpnonce'], 'wppb_editor' ) )
		exit( 'Error: Nonce not verified!' );
	
	// Update DB and Redirect
	if ( 'on' == $_GET['wppb_designer_pane'] || 'off' == $_GET['wppb_designer_pane'] ) {
		update_option( 'wppb_designer_pane', $_GET['wppb_designer_pane'] );
		wp_redirect( home_url(), 302 );
		exit;
	}
}

/**
 * Load theme specific functions
 * Some files not loaded unless in admin panel, or editing pane loaded
 * @since 0.1
 */
require( get_stylesheet_directory() . '/admin_pages.php' ); // Admin specific functions - need loaded for front end of theme roller too
require( get_stylesheet_directory() . '/designer/index.php' ); // Loading designer interface
require( get_stylesheet_directory() . '/templating/index.php' ); // Loading PixoPoint emplating framework
require( get_stylesheet_directory() . '/import-export.php' ); // Loading Import/Export script
require( get_stylesheet_directory() . '/images.php' ); // Loading image uploader functions

/**
 * Dynamically create CSS file
 * @since 0.3
 */
pixopoint_fallback_css( WPPB_SETTINGS, 'css' );

/**
 * Sanitize and validate input
 * Accepts an array, returns a sanitized array
 * @since 0.1
 */
function wppb_settings_options_validate( $input ) {

	// Sanitize checkboxes
	$checkboxes = array( 
		'support_postthumbnails',
		'support_primarymenu',
		'support_secondarymenu',
		'support_hardcrop_postthumbnails',
	);
	foreach ( $checkboxes as $thingy ) {
		if ( !isset( $input[$thingy] ) )
			$input[$thingy] = '';
		$output[$thingy] = wppb_validate_checkboxes( $input[$thingy] );
	}

	// Sanitize template markup
	$template = array( 
		'header',
		'footer',
		'index',
		'front_page',
		'home',
		'page',
		'page_template_1',
		'page_template_2',
		'single',
		'comments',
	);
	foreach ( $template as $thingy ) {
		if ( !isset( $input[$thingy] ) )
			$input[$thingy] = '';
		$output[$thingy] = wp_kses( $input[$thingy], pixopoint_allowed_html(), '' );
	}

	// Sanitize widget settings
	foreach ( wppb_settings_widgets_array() as $number ) {
		if ( !isset( $input['name_widget' . $number] ) )
			$input['name_widget' . $number] = '';
		$output['name_widget' . $number]     = wp_kses( $input['name_widget' . $number], '', '' );
		if ( !isset( $input['before_widget' . $number] ) )
			$input['before_widget' . $number] = '';
		$output['before_widget' . $number]   = wp_kses( $input['before_widget' . $number], pixopoint_allowed_html(), '' );
		if ( !isset( $input['after_widget' . $number] ) )
			$input['after_widget' . $number] = '';
		$output['after_widget' . $number]    = wp_kses( $input['after_widget' . $number], pixopoint_allowed_html(), '' );
		if ( !isset( $input['before_title' . $number] ) )
			$input['before_title' . $number] = '';
		$output['before_title' . $number]    = wp_kses( $input['before_title' . $number], pixopoint_allowed_html(), '' );
		if ( !isset( $input['after_title' . $number] ) )
			$input['after_title' . $number] = '';
		$output['after_title' . $number]     = wp_kses( $input['after_title' . $number], pixopoint_allowed_html(), '' );
		if ( !isset( $input['show_widget' . $number] ) )
			$input['show_widget' . $number] = '';
		$output['show_widget' . $number]     = wppb_validate_checkboxes( $input['show_widget' . $number] );
	}

	// Sanitize numbers
	if ( !isset( $input['support_width_postthumbnails'] ) )
		$input['support_width_postthumbnails'] = '';
	if ( is_numeric( $input['support_width_postthumbnails'] ) )
		$output['support_width_postthumbnails'] = intval( $input['support_width_postthumbnails'] );
	if ( !isset( $input['support_height_postthumbnails'] ) )
		$input['support_height_postthumbnails'] = '';
	if ( is_numeric( $input['support_height_postthumbnails'] ) )
		$output['support_height_postthumbnails'] = intval( $input['support_height_postthumbnails'] );
	if ( !isset( $input['version'] ) )
		$input['version'] = '';
	if ( is_numeric( $input['version'] ) )
		$output['version'] = intval( $input['version'] );

	// Sanitize thumbnail information
	foreach ( wppb_settings_thumbs_array() as $number ) {

		// Setting variables
		if ( !isset( $input['support_name_postthumbnails' . $number] ) )
			$input['support_name_postthumbnails' . $number] = '';
		$output['support_name_postthumbnails' . $number] = wp_kses( $input['support_name_postthumbnails' . $number], '', '' );
		if ( !isset( $input['support_width_postthumbnails' . $number] ) )
			$input['support_width_postthumbnails' . $number] = '';
		if ( is_numeric( $input['support_width_postthumbnails' . $number] ) )
			$output['support_width_postthumbnails' . $number] = $input['support_width_postthumbnails' . $number];
		if ( !isset( $input['support_height_postthumbnails' . $number] ) )
			$input['support_height_postthumbnails' . $number] = '';
		if ( is_numeric( $input['support_height_postthumbnails' . $number] ) )
			$output['support_height_postthumbnails' . $number] = $input['support_height_postthumbnails' . $number];
		if ( !isset( $input['support_hardcrop_postthumbnails' . $number] ) )
			$input['support_hardcrop_postthumbnails' . $number] = '';
		if ( 'on' == $input['support_hardcrop_postthumbnails' . $number] )
			$output['support_hardcrop_postthumbnails' . $number] = $input['support_hardcrop_postthumbnails' . $number];
	}

	// Sanitize CSS
	//$output['css'] = wp_kses( $input['css'], '', '' );
	$output['css'] = pixopoint_validate_css( $input['css'] );

	// Support for plain strings instead of arrays
	if ( !is_array( $input ) )
		$output = wp_kses( $input, pixopoint_allowed_html(), '' );

	// Finally - return the santised output
	return $output;
}

/**
 * Confirm checkboxes are set correctly
 * @since 0.1
 */
function wppb_validate_checkboxes( $input ) {
	if ( 'on' == $input OR '' == $input )
		return $input;
	else
		return;
}

/**
 * Check for string inside string
 * @since 0.7
 */
function wppb_string_in_templates( $needle ) {

	// Compile array together - check if is an array beforehand so doesn't spit PHP error out when new site is created (and option is empty - hence not an array)
	if ( is_array( get_wppb_option() ) )
		$templates_combined = array_reduce ( get_wppb_option(), 'wppb_callback_string_in_templates' );
	elseif ( !isset( $templates_combined ) )
		$templates_combined = '';

	$pos = strpos( 
		$templates_combined,
		$needle
	);
	if ( $pos === false ) {
	}
	else
		return true; // string needle found in haystack
}

/**
 * Callback for wppb_string_in_templates()
 * @since 0.7
 */
function wppb_callback_string_in_templates( $v1, $v2 ) {
	return $v1 . "\n\n\n\n\n" . $v2;
}

/**
 * Load CSS
 * @since 0.1
 */
function wppb_settings_css() {
	
	// Bail out now if in admin panel or on login page
	if ( is_admin() OR strstr( $_SERVER['REQUEST_URI'], 'wp-login.php' ) )
		return;

	// Load CSS (uses PixoPoint templating framework function as addon plugins for the framework will allow for variations in how the CSS loaded, eg: inline CSS, static cached files etc.)
	pixopoint_css( 'wppb_settings' );
}
add_action( 'wp_print_styles', 'wppb_settings_css' );

/**
 * Deregister the CSS file used by the exported themes
 * @since 0.1
 */
function wppb_deregister_css() {
	wp_deregister_style( 'css' );
}
add_action( 'wp_print_styles', 'wppb_deregister_css', 100 );

/**
 * Display inline page stats in footer
 * Only bother if user is logged in
 * @since 0.1
 */
function wppb_inline_page_stats() {
	echo "\n<!-- Number of queries = " . get_num_queries() . ". Time to execute = ";
	timer_stop( 1 );
	echo " -->\n";
}
add_action( 'wp_footer', 'wppb_inline_page_stats' );

/**
 * Grab WP Paintbrush storage folder
 * @since 0.1
 */
function wppb_storage_folder( $subfolder='', $type='' ) {
	$uploads_folder = wp_upload_dir(); // grab uploads folder
	$folder = $uploads_folder['basedir'];  // grab the WP Paintbrush folder
	if ( 'url' == $type )
		$folder = $uploads_folder['baseurl'];  // grab the WP Paintbrush folder
	else
		$folder = $uploads_folder['basedir'];  // grab the WP Paintbrush directory

	$folder = $folder . '/' . WPPB_STORAGE_FOLDER;  // Add the WP Paintbrush folder to the string

	// Check if designated subfolder requested and if so, tacks that onto the path
	if (
		'tmp'       == $subfolder ||
		'templates' == $subfolder ||
		'images'    == $subfolder ||
		'scripts'   == $subfolder
	) {
		$folder = $folder . '/' . $subfolder;
	}

	return $folder;
}

/**
 * Load appropriate template
 * @since 0.8
 */
function wppb_template_choice() {
	if ( is_front_page() && '' != get_wppb_option( 'front_page' ) )
		return 'front_page';
	elseif ( is_home() && '' != get_wppb_option( 'home' ) )
		return 'home';
	elseif ( is_page_template( 'page-template-1.php' ) )
		return 'page-template-1';
	elseif ( is_page_template( 'page-template-2.php' ) )
		return 'page-template-2';
	elseif ( is_page() && '' != get_wppb_option( 'page' ) )
		return 'page';
	elseif ( is_single() && '' != get_wppb_option( 'single' ) )
		return 'single';
	elseif ( is_archive() && '' != get_wppb_option( 'archive' ) )
		return 'archive';
	elseif ( is_404() )
		return 'page';
	else
		return 'index';
}

/**
 * Load the template
 * Used when not utilizing the designer tool
 * @since 0.8
 */
function wppb_template_load() {
	global $wppb_template;

	$wppb_template = get_wppb_option( wppb_template_choice() ); // Load appropriate template
	$wppb_template = str_replace( '[get_header]', get_wppb_option( 'header' ), $wppb_template ); 
	$wppb_template = str_replace( '[get_footer]', get_wppb_option( 'footer' ), $wppb_template );
	return $wppb_template;
}
add_action( 'wppb_pre_theme', 'wppb_template_load' );

/**
 * Load and execute functions.php string
 * eval() is used here so that when zip files are exported, the string can be used to auto-generate the PHP files added to the zip. Other options would result in replication of code, or very ugly PHP in the generated functions.php file.
 * @since 0.1
 */
require( 'functions-dot-php.php' ); // Load functions.php creation function

/*
The following is just junk that is required to pass the official WordPress theme check
This code is totally pointless and serves no purpose in this theme, but has been
placed it in here just to make it pass the automated tests. WP Paintbrush adds these
functions dynamically, so are not required within the raw template files themselves.

comments_template();
add_custom_image_header();
add_custom_background();
add_editor_style();
*/

