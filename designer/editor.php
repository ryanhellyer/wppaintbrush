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
	<input type="hidden" name="copyright" value='<?php echo $content_layout['copyright']; ?>' />
	<?php wp_nonce_field( 'wppb_upload_image','image'); ?>
	<?php wp_nonce_field( 'ptc_nonce','ptc_nonce'); ?>
	<div id="tabs" class="maintabber">
		<div id="tabs-navigation-wrapper">
			<ul>
				<li id="pixopoint_content_options"><a href="#content_options">Design</a></li>  
				<?php
					// Hook for adding new link
					do_action( 'wppb_add_editor_links' );
				?>
				<li id="pixopoint_css_options"><a href="#css_options">Publish</a></li> 
			</ul>
		</div>
		<div class="tab-block" id="content_options">
			<div id="blocks_options" class="wide">
				<div class="section-layout">
					<h2>Choose design</h2>
					<p>You can select a default design to start from. We will be adding more designs to this area over time.</p>
					<br />
					<div class="floating-spacer-block"> </div>
					<div id="ptc-ajax"></div><?php  

					foreach( wppb_available_themes() as $count=>$design ) { 
					?>
					<div class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only ui-state-hover" role="button" aria-disabled="false">
						<input id="myform<?php echo $design['Folder']; ?>" type="button" name="button" value="<?php echo $design['Name']; ?>" />
					</div><?php
					}
					?>		
					<br /><br /><br />
				</div>
				<div class="section-layout">
					<h2>Layout</h2>
					<p>You can modify your layout by dragging content boxes around.</p>

					<div id="layout-editor-opener">Open layout editor</div>					
					<div id="layout-editor-dialog">
						<p>
							<strong>Drag content across</strong> and arrange it on your template <img src="<?php echo PTC_URL; ?>/images/arrow.png" alt="" />
						</p>
						<div class="layout-editor-background">
							<div class="current-blocks layout-blocks">
								<ul id="layout-sortable" class="blocks-sortable-connect">
									<?php
									// Generating string which loads the content box in the layout editor
									$content = '<li id="layout-content" class="ui-state-default"><ul id="sidebar-layout-sortable" class="sidebar-sortable-connect">';
									$sidebar_positions = explode( ',', $content_layout['sidebar_positions'] );
									foreach( $sidebar_positions as $block ) {
										if ( 'layout-sidebar1' == $block )
											$name = 'S1';
										elseif ( 'layout-sidebar2' == $block )
											$name = 'S2';
										elseif ( 'layout-maincontent' == $block )
											$name = 'Content';
										$content .= '<li id="' . $block . '" class="ui-state-default">' . $name . '</li>';
									}
									$content .= '</ul></li>';
										
									// Processor for loading chunks into layout editor
									$positions = explode( ',', $content_layout['positions'] );
									foreach( $positions as $pos ) {
										foreach( ptc_page_chunks() as $chunk=>$test ) {
											$id = strtolower( $chunk ); // Convert to lowercase
											$id = str_replace( ' ', '', $id ); // Strip spaces
											$id = 'layout-' . $id; // Prepend ID prefix
											if ( 'layout-content' == $id && 'layout-content' == $pos )
												echo $content;
											elseif ( $pos == $id )
												echo '<li id="' . $id . '" class="ui-state-default">' . $chunk . '</li>';
										}
									}
									?>
								</ul>
								<input type="hidden" name="positions" class="positions" id="positions" value="<?php echo $content_layout['positions']; ?>" />
								<input type="hidden" name="sidebar_positions" class="sidebar_positions" id="sidebar_positions" value="<?php echo $content_layout['sidebar_positions']; ?>" />
							</div>


							<div class="section-layout section-available">
								<h2>Content blocks</h2>
								<div class="layout-blocks">
									<ul id="blocks-sortable" class="blocks-sortable blocks-sortable-connect">
										<?php
										// Processor for loading chunks into available content
										foreach( ptc_page_chunks() as $chunk=>$test ) {
											$id = strtolower( $chunk ); // Convert to lowercase
											$id = str_replace( ' ', '', $id ); // Strip spaces
											$id = 'layout-' . $id; // Prepend ID prefix
											foreach( $positions as $pos ) {
												if ( $pos == $id )
													$exists = 'yes';
											}
											if ( 'yes' != $exists && 'layout-content' == $id )
												echo $content;
											elseif ( 'yes' != $exists )
												echo '<li id="' . $id . '" class="ui-state-default">' . $chunk . '</li>';
											$exists = '';
										}
										?>
									</ul>
								</div>
								<h2>Sidebar blocks</h2>
								<div class="layout-blocks">
									<ul id="sidebar-blocks-sortable" class="blocks-sortable sidebar-sortable-connect">
									<?php
										// Unused sidebar chunks
										$sidebar_remainging = ptc_sidebar_chunks();
										foreach( ptc_sidebar_chunks() as $name=>$block ) {
											foreach( $sidebar_positions as $current ) {
												if ( $block == $current )
													$sidebar_remainging[$name] = '';
											}
										}
										foreach( $sidebar_remainging as $name=>$block ) {
											if ( '' != $sidebar_remainging[$name] )
												echo '<li id="' . $block . '" class="ui-state-default">' . $name . '</li>';
										}
									?>
									</ul>
								</div>
							</div>


						</div>
					</div>					
				</div>
			</div>
		</div>

		<?php
			// Hook for adding new tabs
			do_action( 'wppb_add_editor_tabs' );
		?>

		<div id="css_options" class="tab-block wide">
			<div class="section-layout">
				<h2>Publishing</h2>
				<br />
				<div class="floating-spacer-block"> </div>
				<div style="display:none;" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only ui-state-hover" role="button" aria-disabled="false">
					<input id="myformButton" type="button" name="button" value="Process" />
				</div>
				<div class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only ui-state-hover" role="button" aria-disabled="false">
					<input class="myformSaver" type="button" name="button" value="Save" />
				</div>
				<div class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only ui-state-hover" role="button" aria-disabled="false">
					<input id="myformPublish" type="button" name="button" value="Publish" />
				</div>
				<div<?php if ( !function_exists( 'wppb_export_zip' ) ) {echo ' style="display:none;"';} ?> class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only ui-state-hover" role="button" aria-disabled="false">
					<input id="myformExport" type="button" name="button" value="Export" />
				</div>
				<div id="ptc-css2">000</div>
				<br /><br /><br />
				<p style="display:none;" >
					"Process" updates the site in front of you.
				</p>
				<p>
					"Save" stores your design for later editing without updating your live site.
				</p>
				<p>
					"Publish" updates the live site to match the new design.
				</p>
				<p<?php if ( !function_exists( 'wppb_export_zip' ) ) {echo ' style="display:none;"';} ?>>
					"Export" updates the live site and exports the design as a zip file.
				</p>
			</div>
			<div class="section-layout">
				<h2>Add custom CSS</h2>
				<p>Any CSS added here will be appended to the CSS generated by WP Paintbrush</p>
				<div id="add_custom_css">
					<textarea class="add_custom_css" name="add_custom_css"><?php echo $content_layout['add_custom_css']; ?></textarea>
				</div>
				<div class="floating-spacer-block"> </div>
				<div class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only ui-state-hover" role="button" aria-disabled="false">
					<input class="myformSaver" type="button" name="button" value="Save custom CSS" />
				</div>
				<br /><br />
			</div>
		</div>
	</div>
</form>

<!-- Farbtastic colour picker -->
<div id="farbtastic" title="Colour picker">Colour picker</div>

<!-- Image picker -->
<div id="ptc-image-picker">
	<table>
	<?php
	$file_list = wppb_settings_list_files( wppb_storage_folder( 'images' ) );
	if ( is_array( $file_list ) ) {
		$col = 0;
		$first = '';
		foreach ( $file_list as $file ) {
			$col ++;
			if ( $col == 1 )
				echo '<tr>';
			if ( $col == 1 && $first != 'no' ) {
				echo '<td><img src="' . PTC_URL . '/images/no-image.jpg" class="uploaded-image" alt="" /><br />No image</td>';
				$first == 'no';
			}
			echo '<td><img src="' . wppb_storage_folder( 'images', 'url' ) . '/' . $file . '" class="uploaded-image" alt="' . $file . '" /><br />' . $file . '</td>';
			if ( $col == 6 ) {
				echo '</tr>';
				$col = 0;
			}
		}
	}
	?>
	</table>
	<div class="section-layout">
		<h2>Image uploads</h2>
		<p>
			Note: We will eventually be adding support for removing images as well as adding them.
		</p>
		<p style="display:none;">
			Note: This section is for adding images used in your theme only. For image uploads in your posts/pages please visit the 
			<a href="<?php echo admin_url(); ?>upload.php"><?php _e( 'Media uploader', 'pixopoint_theme_editor' ); ?></a>.
			To manage and delete images, please visit the
			<a href="<?php echo admin_url(); ?>themes.php?page=upload_images">Image management page</a>.
		</p>
		<div class="floating-spacer-block"> </div>
		<div class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only ui-state-hover" role="button" aria-disabled="false">
			<input type="hidden" class="image-picker" name="temp" value="" /><!-- dumbie field for image picker -->
			<input type="button" class="imagepickerbutton" style="margin: 10px 0;width: auto;height:auto;display:inline;text-indent: 0;float: none;position:static;" value="Current images" />
		</div>
		<div class="ptc-image-uploads">
			<?php wppb_image_upload_form_fields(); ?>
		</div>
		<br />
		<div<?php if ( !function_exists( 'ptc_create_scripts' ) ) {echo ' style="display:none;"';} ?>>
			<h3>CSS</h3>
			<textarea id="ptc-css3"></textarea>
		</div>
	</div>
</div>

</div>
</div>

<?php
}
