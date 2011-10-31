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

	$wppb_design = wppb_grab_design( 'wppaintbrush' ); // Grab default design

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
	$wppb_designer_array = wppb_sanitize_inputs( $wppb_designer_array );
	$wppb_designer_array['css'] = $wppb_templates['css']; // Storing CSS in designer array so that can be used on page load (otherwise need to make server call on initial page load)
	add_option( WPPB_DESIGNER_SETTINGS, $wppb_designer_array );
}
add_action( 'admin_init', 'wppb_options_init' );

/**
 * CSS for front-end uploader
 * @since 1.0
 */
function wppb_upload_css() {
	wp_register_style( 'wppb_uploader_css', WPPB_URL . 'uploader.css' );
	wp_enqueue_style( 'wppb_uploader_css' );
}
if ( isset( $_GET['wppb_frontenduploader'] ) ) {
	if ( 'css' == $_GET['wppb_frontenduploader'] )
		add_action( "admin_print_styles-media-new.php", 'wppb_upload_css' );
}

/* Change uploads folder
 * Only changes it if a specific form field was present - which is dynamically added via WP Paintbrush when using the media uploader on the front-end
 * @since 1.0
 */
function wppb_change_uploads_folder() {
	if ( isset( $_POST['wppb'] ) ) {
		if ( 'wppb' == $_POST['wppb'] )
			add_filter( 'upload_dir', 'wppb_image_uploads_folder' );
	}
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
if ( isset( $_GET['wppb_frontenduploader'] ) ) {
	if ( 'css' == $_GET['wppb_frontenduploader'] )
		add_filter( 'upload_post_params', 'wppb_plup_post_parameters' );
}

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

/**
 * Create the options page
 * @since 0.1
 */
function upload_images_do_page() {

	// Security checks
	wppb_image_upload_form_check();

?>
<div class="wrap">
	<?php
		// Create screen icon by heading
		screen_icon( 'wppb-icon' ); echo '<h2>' . __( 'Upload images' ) . '</h2>';

		// "Options Saved" message as displayed at top of page on clicking "Save"
		if ( isset( $_REQUEST['updated'] ) )
			echo '<div class="updated fade"><p><strong>' . __( 'Options saved' ) . '</strong></p></div>';
	?>
	<h3><?php _e( 'Upload images here', 'wppb_lang' ); ?></h3>

	<form method="post" action="" enctype="multipart/form-data">
		<input type="hidden" name="MAX_FILE_SIZE" value="3000000" />
		<?php wp_nonce_field( 'wppb_upload_image','image'); ?>
		<p>
			<?php _e( 'Note: This section is for adding and deleting images used in your theme only. For image uploads in your posts/pages please visit the ', 'wppb_lang' ); ?>
			<a href="<?php echo admin_url(); ?>upload.php"><?php _e( 'Media uploader', 'wppb_lang' ); ?></a>
		</p>
		<?php wppb_image_upload_form_fields(); ?>
		<ol>
			<?php wppb_display_images(); ?>
		</ol>
	</form>
</div>

<?php
}

/**
 * Load up the menu pages
 * @since 0.1
 */
function wppb_settings_options_add_page() {

	// Upload images admin page
	$page = add_theme_page(
		__( 'Images', 'wppb_lang' ),
		__( 'Images', 'wppb_lang' ),
		'edit_theme_options',
		'upload_images',
		'upload_images_do_page'
	);
	add_action( 'admin_print_styles-' . $page, 'wppb_settings_admin_styles' ); // Add styles (only for this admin page)

	// Add reset theme admin page
	$page = add_theme_page(
		__( 'Reset', 'wppb_lang' ),
		__( 'Reset', 'wppb_lang' ),
		'administrator',
		'wppb_reset_page',
		'wppb_reset_pagecontent'
	);
	add_action( 'admin_print_styles-' . $page, 'wppb_settings_admin_styles' ); // Add styles (only for this admin page)
}
add_action( 'admin_menu', 'wppb_settings_options_add_page' ); // Creat admin page

/**
 * Add stylesheet
 * @since 0.1
 */
function wppb_settings_admin_styles() {
	wp_enqueue_style( 'wppb-admin-css', get_template_directory_uri() . '/admin.css', false, '', 'screen' );
}

/**
 * Add more information link to theme page
 * @since 1.0.6
 */
function wppb_theme_demo_link( $actions, $theme ) {
	if ( 'wppaintbrush' == $theme['Stylesheet'] )
		$actions[] = '<a href="http://wppaintbrush.com/">More information</a>';
	return $actions;
}
add_filter( 'theme_action_links', 'wppb_theme_demo_link', 10, 2 );

/**
 * Redirects after resetting theme
 * @since 1.0.6
 */
function wppb_reset_pagecontent() {
?>
<div class="wrap">
	<?php
	// Reset theme
	if ( isset( $_GET['wppb_reset_theme'] ) ) {
		echo '<div class="updated fade"><p><strong>';
		// Security check
		if ( !wp_verify_nonce( $_REQUEST['_wpnonce'], 'wppb_reset_theme') )
			 _e( 'Error: Incorrect nonce value. Theme was not reset!', 'wppb_lang' );
		else {
			delete_option( WPPB_SETTINGS );
			delete_option( WPPB_DESIGNER_SETTINGS );
			wppb_theme_setup( 'autoload' );
			_e( 'Your theme has been reset', 'wppb_lang' );
		}
		echo '</strong></p></div>';
	}

	// Create screen icon by heading
	screen_icon( 'wppb-icon' ); echo '<h2>' . __( 'Reset your theme', 'wppb_lang' ) . '</h2>';
	?>
	<p><strong><?php _e( 'Warning', 'wppb_lang' ); ?>:</strong> <?php _e( 'Only use this option if you want to wipe your changes to your theme and start over from scratch!', 'wppb_lang' ); ?></p>
	<p class="submit"><a id="submit" class="button-primary" href="<?php
		echo wp_nonce_url(
			admin_url() . 'themes.php?page=wppb_reset_page&wppb_reset_theme=yes',
			'wppb_reset_theme'
		);
	?>">Reset theme</a></p>
</div>

<?php
}

