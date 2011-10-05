<?php
/**
 * @package WordPress
 * @subpackage WP Paintbrush
 * @since WP Paintbrush 1.0
 *
 * Adds the  WP Paintbrush Designs module
 */



/* Add new "Content" link to main tabber in editing panel
 * @since 1.0
 */
function wppb_publish_editor_link() {
	echo '<li id="pixopoint_css_options"><a href="#css_options">' . __( 'Publish', 'wppb_lang' ) . '</a></li>';
} 
add_action( 'wppb_add_editor_links', 'wppb_publish_editor_link' );

/* Add new "Content" editor tab
 * @since 1.0
 */
function wppb_publish_editor_tab() {
	$content_layout = get_option( WPPB_DESIGNER_SETTINGS );

	// Add HTML
	?>
<div id="css_options" class="tab-block wide">
	<div class="section-layout">
		<h2><?php _e( 'Publishing', 'wppb_lang' ); ?></h2>
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
		<div<?php if ( !function_exists( 'wppaintbrush_css_generator' ) ) {echo ' style="display:none;"';} ?>>
		<h3><?php _e( 'CSS', 'wppb_lang' ); ?></h3>
		<textarea id="ptc-css3"></textarea>
	</div>
		<p style="display:none;" ><?php _e( '"Process" updates the site in front of you.', 'wppb_lang' ); ?></p>
		<p><?php _e( '"Save" stores your design for later editing without updating your live site.', 'wppb_lang' ); ?></p>
		<p><?php _e( '"Publish" updates the live site to match the new design.', 'wppb_lang' ); ?></p>
		<p<?php if ( !function_exists( 'wppb_export_zip' ) ) {echo ' style="display:none;"';} ?>><?php _e( '"Export" updates the live site and exports the design as a zip file.', 'wppb_lang' ); ?></p>
	</div>
	<div class="section-layout">
		<h2><?php _e( 'Add custom CSS', 'wppb_lang' ); ?></h2>
		<p><?php _e( 'Any CSS added here will be appended to the CSS generated by WP Paintbrush', 'wppb_lang' ); ?></p>
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
<?php
}
add_action( 'wppb_add_editor_tabs', 'wppb_publish_editor_tab' );

