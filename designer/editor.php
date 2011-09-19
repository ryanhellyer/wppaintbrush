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


?>
<?php
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
	<input type="hidden" class="copyright" name="copyright" value='<?php echo $content_layout['copyright']; ?>' />
	<input type="hidden" class="design" name="design" value='<?php echo $content_layout['design']; ?>' />
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

		$wppb_image_url = wppb_storage_folder( 'images', 'url' );
		$wppb_image_dir = wppb_storage_folder( 'images' );

		$file_list = wppb_list_files( $wppb_image_dir );
		if ( is_array( $file_list ) ) {
			$col = 0;
			$first = '';
			foreach ( $file_list as $file ) {
				$col ++;
				if ( $col == 1 )
					echo '<tr>';
				if ( $col == 1 && $first != 'no' ) {
					echo '<td>' . __( 'No image', 'wppb_lang' ) . '<br /><img src="' . PTC_URL . '/images/no-image.jpg" class="uploaded-image" alt="" /></td>';
					$first = 'no';
					$col ++;
				}
				echo '<td>' . $file . '<br /><img src="' . $wppb_image_url . '/' . $file . '" class="uploaded-image" alt="stored/' . $file . '" /></td>';
				if ( $col == 4 ) {
					echo '</tr>';
					$col = 0;
				}
			}
		}


	echo '<br><br><br>';
	foreach( wppb_available_themes() as $count=>$theme ) {
		echo $content_layout['design'];
		if ( $theme['Name'] == $content_layout['design'] )
			echo $theme['Name'] . "<br>";
	}

/*
		if ( 'Internal' == $theme['Type'] ) {
		}
		elseif ( 'Child' == $theme['Type'] ) }
		}
		else {
		}
*/

		?>
		</table>
	</div>
	<h2><?php _e( 'Image uploads', 'wppb_lang' ); ?></h2>
	<div class="ptc-image-uploads"><?php wppb_image_upload_form_fields(); ?></div>
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
