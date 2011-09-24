<?php
/**
 * @package WordPress
 * @subpackage WP Paintbrush
 * @since WP Paintbrush 0.1
 *
 * Editor dialog box
 * Uses many functions from editor-functions.php
 */


/**
 * Do not continue processing since file was called directly
 * @since 0.1
 */
if ( !defined( 'ABSPATH' ) )
	die( 'Eh! What you doin in here?' );

global $positions;

/* Load template
 * @since 0.1
 */
function ptc_load_template() {
	global $positions;

	if ( isset( $_POST['content_layout'] ) )
		$content_layout = ptc_sanitize_inputs( $_POST['content_layout'] );
	else
		$content_layout = get_option( WPPB_DESIGNER_SETTINGS ); // Setting defaults for "content_layout"


	// Setting potentially empty variable
	if ( empty( $content_layout['copyright'] ) )
		$content_layout['copyright'] = '';
	if ( empty( $content_layout['design'] ) )
		$content_layout['design'] = '';

	// Hook for adding AJAXed scripts
	do_action( 'wppb_add_ajax_content' );
?>
<div id="ptc-page-content">
	<?php echo ptc_create_template(); ?>
</div>

<div id="dialog" title="Theme Creator">
	<div id="loading-text">
		<img style="" src="<?php echo PTC_URL; ?>images/load.gif" alt="Loading" />
		<br />
		<h3>One moment please. The WP Paintbrush editor is loading.</h3>
	</div>
<div id="tab_wrapper">
<form id="ptc-editor-form" method="post" action="" enctype="multipart/form-data">
	<input type="hidden" name="MAX_FILE_SIZE" value="3000000" />
	<input type="hidden" id="copyright" name="copyright" value='<?php echo $content_layout['copyright']; ?>' />
	<input type="hidden" id="design" name="design" value='<?php echo $content_layout['design']; ?>' />
	<?php wp_nonce_field( 'wppb_upload_image','image'); ?>
	<?php wp_nonce_field( 'ptc_nonce','ptc_nonce'); ?>
	<div id="tabs" class="maintabber">
		<div id="tabs-navigation-wrapper">
			<ul>
				<?php
					// Hook for adding new link
					do_action( 'wppb_add_editor_links' );
				?> 
			</ul>
		</div>

		<?php
			// Hook for adding new tabs
			do_action( 'wppb_add_editor_tabs' );
		?>
	</div>

<!-- Farbtastic colour picker -->
<div id="farbtastic" title="Colour picker"><?php _e( 'Colour picker', 'wppb_lang' ); ?></div>

<!-- Image picker -->
<div id="wppb-image-uploads">
	<div id="wppb-images">
		<table>
		<?php
		wppb_list_images(
			wppb_storage_folder( 'images' ), // Folder directory
			wppb_storage_folder( 'images', 'url' ), // Folder URL
			'display', // Display no image link
			'stored' // Folder name
		);

		echo '<tr><td><h2 style="margin:20px 0 6px 0;">' . __( ' Design images', 'wppb_lang' ) . '</h2></td></tr>';
		foreach( wppb_available_themes() as $count=>$theme ) {
			if ( $theme['Folder'] == $content_layout['design'] ) {
				if ( 'Internal' == $theme['Type'] ) {
					wppb_list_images(
						get_template_directory() . '/designs/' . $theme['Folder'] . '/images/', // Folder directory
						get_template_directory_uri() . '/designs/' . $theme['Folder'] . '/images/', // Folder URL
						'', // Display no image link
						$theme['Folder'] // Folder name
					);
				}
			}
		}
		?>
		</table>
	</div>
	<h2><?php _e( 'Image uploads', 'wppb_lang' ); ?></h2>
	<!--
	--><?php

	// If using WP 3.3 then make use of plup uploader (note use of query var to force major CSS changes in iframe)
	global $wp_version;
	if ( $wp_version >= 3.4 )
		echo '<iframe src="' . admin_url() . '/media-new.php?wppb_frontenduploader=css" width="525" height="215"></iframe>';
	else
		echo '<p>' . __( 'Visit the <a href="http://localhost/wp/testing/wp-admin/themes.php?page=upload_images">image uploads page</a> to upload new images.', 'wppb_lang' ) . '</p>';

	?>
</div>

</form>

<!-- Connection failure dialog -->
<div id="wppb-external-connection-failure" title="<?php _e( 'Dangit, we got an error!', 'wppb_lang' ); ?>">
	<p><?php _e( 'Sorry, the server is having difficulties connecting to the CSS generator. Please try again.', 'wppb_lang' ); ?></p>
</div>

<div id="wppb-page-reload" title="Page reloading!">
	<p><?php _e( 'We need to reload the page to show the changes you just selected. One moment please ...', 'wppb_lang' ); ?></p>
</div>

</div>
</div>

<?php
}
