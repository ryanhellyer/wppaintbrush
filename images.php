<?php
/**
 * @package WordPress
 * @subpackage WP Paintbrush
 * @since WP Paintbrush 0.6
 *
 * Image uploads administration
 */


/**
 * Create image upload form
 * @since 0.1
 */
function wppb_image_upload_form_fields() {
	?>
	<p class="ptc-upload-form-fields">
		<div class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only ui-state-hover" role="button" aria-disabled="false">
			&nbsp;&nbsp;&nbsp;<input name="upload_file" type="file" />
		</div>
		<input type="hidden" name="wppb_settings[upload_file]" value="" />
		<div style="clear:both" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only ui-state-hover" role="button" aria-disabled="false">
			<input type="submit" class="button-primary" value="<?php _e( 'Upload image', 'wppb_lang' ); ?>" />
		</div>
	</p>
	<?php
}

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
 * Security checks for image upload form
 * @since 0.1
 */
function wppb_image_upload_form_check() {
	// Check nonce - security protection to prevent creation and deletion of files by untrusted users
	if ( !empty( $_POST ) AND check_admin_referer( 'wppb_upload_image','image' ) ) {

		// Upload file
		$data = $_FILES['upload_file'];
		if ( '' != $data['name'] ) {
			$ext = substr( strrchr( $data['name'], '.' ), 1 ); // Grab extension
			$ext = strtolower( $ext ); // Convert extension to lower case
			// Spit an error out when not an image - would be better to send admin notice instead
			if ( $ext!= 'jpeg' AND $ext!= 'jpg' AND $ext != 'gif' AND $ext != 'png' ) {
				die( 'Only jpg, gif or png files are allowed to be uploaded!' ); // Kill execution so they get to see the error
			}

			// Save file to disk
			add_filter( 'upload_dir', 'wppb_image_uploads_folder' );
			$overrides = array('test_form' => false); 
			$file = wp_handle_upload( $data, $overrides );
			remove_filter( 'upload_dir', 'wppb_image_uploads_folder' );
		}

		// Delete file
		if ( isset( $_POST['delete_file'] ) )
			unlink( wppb_storage_folder( 'images' ) . '/' . $_POST['delete_file'] );

	}
}

/*
 * Returns an array containing an alphabetical list of files in the specified directory ($path)
 * @since 0.1
 */
function wppb_list_files( $path ){
	$list = array(); // Initialise a variable
	if ( !file_exists( $path ) )
		return false;
	$dir_handle = @opendir( $path ) or die( "Unable to open $path" ); // Attempt to open path
	while( $file = readdir( $dir_handle ) ) { // Loop through all the files in the path
		if ( $file == '.' || $file == '..' )
			continue;// Ignore these
		$filename = explode( '.', $file ); // Separate filename from extension
		$cnt = count( $filename );
		$cnt--;
		$ext = $filename[$cnt]; // As above
		array_push( $list, $file ); // Stick it onto the end of the list array
	}
	// ... if matches were found ...
	if ( $list[0] )
		return $list; //...return the array
	else
		return false;
}
