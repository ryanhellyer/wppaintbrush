<?php
/**
 * @package WordPress
 * @subpackage WP Paintbrush theme
 * @since WP Paintbrush 0.3
 *
 * Import and export scripts
 * This file needs a bit of tidying - kinda messy in it's current guise
 */


/**
 * Processing import/export page
 * Used to import templates
 * Used to export templates
 * @since 0.1
 */
function wppb_settings_import_validate( $input ) {
	// Zipper
	if ( 'Export zip' == $_POST['zip'] && function_exists( 'wppb_export_zip' ) )
		wppb_export_zip();
	// Unzipper
	else
		wppb_import_zip();
	return;
}

/**
 * Import/export page
 * @since 0.1
 */
function import_template_do_page() {
	/* Page updated */
	if ( ! isset( $_REQUEST['updated'] ) )
		$_REQUEST['updated'] = false;

	?>
	<div class="wrap">
		<?php
			// Create screen icon by heading
			screen_icon( 'wppb-icon' );
			echo '<h2>' . get_current_theme() . __( ' Import/exporter', 'pixopoint_theme_editor' ) . '</h2>';

			// "Options Saved" message as displayed at top of page on clicking "Save"
			if ( isset( $_GET['updated'] ) )
				echo '<div class="updated fade"><p><strong>' . __( 'Options saved' ) . '</strong></p></div>';
		?>
		<form method="post" action="options.php" enctype="multipart/form-data">
			<?php settings_fields( 'wppb_settings_import' ); ?>
			<input type="hidden" name="MAX_FILE_SIZE" value="3000000" />

			<h3><?php _e( 'Import', 'pixopoint_theme_editor' ); ?></h3>
			<p>
				<?php _e( 'Upload a previously exported .zip file.', 'pixopoint_theme_editor' ); ?>
			</p>
			<p>
				<label><?php _e( 'File', 'pixopoint_theme_editor' ); ?></label>
				<input name="import_file" type="file" />
				<input type="submit" class="button-primary" value="<?php _e( 'Import theme', 'pixopoint_theme_editor' ); ?>" />
			</p>
			<p>
				<em><?php _e( 'Note: only themes previously exported from WP Paintbrush can be imported. Themes from other sites will not work.', 'pixopoint_theme_editor' ); ?></em>
			</p>
			<p>&nbsp;</p>
			<?php

			// Export Zip file
			if ( function_exists( 'wppb_export_zip' ) ) : ?>
			<h3><?php _e( 'Exporter', 'pixopoint_theme_editor' ); ?></h3>
			<p><?php _e( 'Export a WordPress theme zip file', 'pixopoint_theme_editor' ); ?></p>
			<p>
				<input type="submit" class="button-primary" name="zip" value="<?php _e( 'Export zip', 'pixopoint_theme_editor' ); ?>" />
			</p>
			<?php endif; ?>

		</form>
	</div>

	<?php
}

/**
 * wppb_import_zip()
 * @description Unzips a theme and installs components into WP Paintbrush
 * @since 0.8.1
 */
function wppb_import_zip() {

	//require( ABSPATH . 'wp-admin/includes/file.php' ); // Not needed here since loaded after this file has been included - simply left here to jog my memory in case I wonder why the code isn't working elsewhere!
	WP_Filesystem(); // Loads zip library
	function __return_direct() { return 'direct'; }
	add_filter( 'filesystem_method', '__return_direct' );
	WP_Filesystem(); // Loads zip library
	remove_filter( 'filesystem_method', '__return_direct' );

	// Random string for tmp folder - needed for security so end users don't know where PHP files are stored temporarily
	$rand = rand ( 100000000, 99999999999 );

	// Starting importation process
	$data = $_FILES['import_file']; // Grabbing the FILE array

	// Make storage folder if it doesn't exist
	if ( !is_dir( wppb_storage_folder( 'tmp' ) . $rand ) )
		mkdir( wppb_storage_folder( 'tmp' ) . $rand );

	unzip_file( $data['tmp_name'], wppb_storage_folder( 'tmp' ) . $rand ); // Unzip to temporary folder
	$folder_contents = scandir( wppb_storage_folder( 'tmp' ) . $rand, 1 ); // Grab folder contents (key of 0 is the theme folder)
//echo '<a href="' . wppb_storage_folder( 'tmp', 'url' ) . $rand . '/' . $folder_contents[0] . '/data.tpl">LINK</a>';die();

	// Copying images folder
	$from =  wppb_storage_folder( 'tmp' ) . $rand . '/' . $folder_contents[0] . '/images/';
	$to = wppb_storage_folder( 'images' ) . '/';
	wppb_copy_images( $from, $to );

	// Grabbing contents of data file
	$data = file_get_contents( wppb_storage_folder( 'tmp' ) . $rand . '/' . $folder_contents[0] . '/data.tpl' ); // Shoving file contents into string
	// If no data.tpl file detected (or file is empty), then bail out to error message page
	if ( '' == $data ) {
		wp_redirect( home_url() . '/wp-admin/themes.php?page=import_template&error=no_data_file' );
		exit;
	}

	// Delete temporary folder (where zip contents were stashed)
	wppb_delete_directory( wppb_storage_folder( 'tmp' ) . $rand );

	// Processing data ready for database
	$data = explode( WPPB_BLOCK_SPLITTER, $data ); // Splitting data
	$counter = 0;
	$options = array();
	while ( $counter <= 100 ) {
		$split = explode( WPPB_NAME_SPLIT_START, $data[$counter+1] ); // Splitting data
		$split = explode( WPPB_NAME_SPLIT_END, $split[1] ); // Splitting data
		//$split[0] . '<br />' . $split[1]; // Echo'ing data
		$name = $split[0];
		$options[$name] = $split[1];
		$counter++;
	}

	// Shoving data into database after validating it
	update_option( WPPB_SETTINGS, wppb_settings_options_validate( $options ) );
	pixopoint_validate_css( get_wppb_option( 'css' ), 'style' );

	// Since it was a success - redirect back to page (with success message)
	wp_redirect( home_url() . '/wp-admin/themes.php?page=import_template&updated=yay' );
	exit;
}

/**
 * wppb_error_no_data_file()
 * @description Displays an error message when no data.tpl file is detected in an imported theme
 * @since       0.8.1
 */
function wppb_error_no_data_file() {
	echo '
		<div id="message" class="error fade" style="opacity:1;">
			<p>
				<strong>Sorry, but there appears to be no data.tpl file in that theme.</strong>
			</p>
			<p>
				Note: You can only upload themes which have been previously exported from WP Paintbrush. Themes from other sites will not work.
			</p>
		</div>';
}
if ( isset( $_GET['error'] ) ) {
	if ( 'no_data_file' == $_GET['error'] )
		add_action( 'admin_notices', 'wppb_error_no_data_file' );
}

/**
 * wppb_update_theme_imported()
 * @description Displays an update message when a theme is imported
 * @since 0.8.1
 */
function wppb_update_theme_imported() {
	echo '
		<div id="message" class="updated fade" style="opacity:1;">
			<p>
				<strong>Yay! Your theme has been successfully imported :)</strong>
			</p>
		</div>';
}
if ( isset( $_GET['updated'] ) ) {
	if ( 'yay' == $_GET['updated'] )
		add_action( 'admin_notices', 'wppb_update_theme_imported' );
}

