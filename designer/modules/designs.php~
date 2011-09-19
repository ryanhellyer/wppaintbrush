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
function wppb_designs_editor_link() {
	echo '<li id="pixopoint_content_options"><a href="#content_options">' . __( 'Design', 'wppb_lang' ) . '</a></li>';
} 
add_action( 'wppb_add_editor_links', 'wppb_designs_editor_link' );

/* Add new "Content" editor tab
 * @since 1.0
 */
function wppb_designs_editor_tab() {
	$content_layout = get_option( WPPB_DESIGNER_SETTINGS );

	// Add HTML
	?>
<div class="tab-block" id="content_options">
	<div id="blocks_options" class="wide">
		<div class="section-layout">
			<h2><?php _e( 'Choose design', 'wppb_lang' ); ?></h2>
			<p><?php _e( 'You can select a default design to start from. We will be adding more designs to this area over time.', 'wppb_lang' ); ?></p>
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
			<h2><?php _e( 'Layout', 'wppb_lang' ); ?></h2>
			<p><?php _e( 'You can modify your layout by dragging content boxes around.', 'wppb_lang' ); ?></p>
			<div id="layout-editor-opener"><?php _e( 'Open layout editor', 'wppb_lang' ); ?></div>					
			<div id="layout-editor-dialog">
				<p>
					<strong><?php _e( 'Drag content across</strong> and arrange it on your template', 'wppb_lang' ); ?> <img src="<?php echo PTC_URL; ?>/images/arrow.png" alt="" />
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
						<h2><?php _e( 'Content blocks', 'wppb_lang' ); ?></h2>
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
						<h2><?php _e( 'Sidebar blocks', 'wppb_lang' ); ?></h2>
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
}
add_action( 'wppb_add_editor_tabs', 'wppb_designs_editor_tab' );

