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
				<li id="pixopoint_menudesign_options"><a href="#menudesign_options">Content</a></li> 
				<li id="pixopoint_content_options"><a href="#content_options">Design</a></li> 
				<li id="pixopoint_header_options"><a href="#header_options">Header</a></li> 
				<li id="pixopoint_sidebars_options"><a href="#sidebars_options">Sidebars</a></li> 
				<li id="pixopoint_extras_options"><a href="#extras_options">Extras</a></li> 
				<li id="pixopoint_footer_options"><a href="#footer_options">Footer</a></li> 
				<?php
					// Hook for adding new link
					do_action( 'wppb_add_editor_links' );
				?>
				<li id="pixopoint_css_options"><a href="#css_options">Publish</a></li> 
			</ul>
		</div>
		<div id="menudesign_options">
			<div id="tabs-text" class="inner-tabber">
				<ul>
					<li id="ptc_overall_options"><a href="#overall_options" title="Overall">Overall</a></li>
					<li id="ptc_maincontent_options"><a href="#maincontent_options" title="Main content">Main <br />content</a></li>
					<li id="ptc_postinfo_options"><a href="#postinfo_options" title="Post info.">Post info</a></li>
					<li id="ptc_pagination_options"><a href="#pagination_options" title="Pagination">Pagination</a></li>
					<li id="ptc_h1_options"><a href="#h1_options" title="Heading 1">H1</a></li>
					<li id="ptc_h2_options"><a href="#h2_options" title="Heading 2">H2</a></li>
					<li id="ptc_h3_options"><a href="#h3_options" title="Heading 3">H3</a></li>
					<li id="ptc_h4_options"><a href="#h4_options" title="Heading 4">H4</a></li>
					<li id="ptc_h5_options"><a href="#h5_options" title="Heading 5">H5</a></li>
					<li id="ptc_h6_options"><a href="#h6_options" title="Heading 6">H6</a></li>
					<li id="ptc_p_options"><a href="#p_options" title="Paragraph">P</a></li>
					<li id="ptc_li_options"><a href="#li_options" title="List item">LI</a></li>
					<li id="ptc_a_options"><a href="#a_options" title="Links">A</a></li>
				</ul>
				<div class="inner-tab-block" id="overall_options">
					<div class="section-layout">
						<h2>Background</h2>
						<?php ptc_background( 'background', $content_layout ); ?>
						<?php /*
						ptc_colour_selector( 'background_colour', $content_layout, 'Colour' ); ?>
						<?php ptc_background_image_selector( 'background_image', $content_layout, 'Image' ); ?>
						<?php ptc_imagetiling_selector( 'background_image_tiling', $content_layout, 'Image tiling' ); 
						*/
						?>
					</div>
				</div>
				<div class="inner-tab-block" id="maincontent_options">
					<?php ptc_text_margins( 'content', $content_layout ); ?>
					<div class="section-layout">
						<h2>Background</h2>
						<?php ptc_colour_selector( 'maincontent_background_colour', $content_layout, 'Colour' ); ?>
						<?php ptc_background_image_selector( 'maincontent_background_image', $content_layout, 'Image' ); ?>
						<?php ptc_imagetiling_selector( 'maincontent_background_image_tiling', $content_layout, 'Image tiling' ); ?>
					</div>
					<div class="section-layout">
						<h2>Width</h2>
						<?php ptc_number_selector( 'maincontent_maximum_width', $content_layout, 'Max width' ); ?>
						<?php ptc_number_selector( 'maincontent_minimum_width', $content_layout, 'Min width' ); ?>
					</div>
				</div>
				<div class="inner-tab-block" id="postinfo_options">
					<div class="section-layout">
						<h2>Post info</h2>
						<?php ptc_display_selector	( 'postinfo_display', $content_layout, 'Display' ); ?>
					</div>
					<?php ptc_text_display( 'postinfo', $content_layout, 'Text' ); ?>
					<?php
						ptc_text_margins( 'postinfo', $content_layout );
						ptc_text_padding( 'postinfo', $content_layout );
						ptc_text_background( 'postinfo', $content_layout );
						ptc_text_borders_horizontal( 'postinfo', $content_layout );
					?>
				</div>
				<div class="inner-tab-block" id="pagination_options">
					<div class="section-layout">
						<h2>Pagination</h2>
						<?php
							ptc_display_selector( 'pagination_display', $content_layout, 'Display' );
							ptc_fontfamily_selector( 'pagination_fontfamily', $content_layout, 'Font', 'block fontfamily' );
							ptc_number_selector( 'pagination_fontsize', $content_layout, 'Size', 'block fontsize' );
							ptc_colour_selector( 'pagination_textcolour', $content_layout, 'Colour', 'block colour' );
							ptc_colour_selector( 'pagination_texthovercolour', $content_layout, 'Colour on hover', 'block colour' );
							ptc_fontweight_selector( 'pagination_font_weight', $content_layout, 'Weight', 'block fontweight' );
							ptc_fontstyle_selector( 'pagination_font_style', $content_layout, 'Style', 'block fontstyle' );
							ptc_textdecoration_selector( 'pagination_textdecoration', $content_layout, 'Decoration', 'block decoratoin' );
							ptc_texttranform_selector( 'pagination_text_transform', $content_layout, 'Transform', 'block texttransform' );
							ptc_smallcaps_selector( 'pagination_small_caps', $content_layout, 'Small caps', 'block smallcaps' );
						?>
					</div>
					<div class="section-layout">
					<h2>Text shadow</h3>
						<?php
							ptc_number_selector( 'pagination_shadow_x_coordinate', $content_layout, 'x-coordinate', 'block coordinates' );
							ptc_number_selector( 'pagination_shadow_y_coordinate', $content_layout, 'y-coordinate', 'block coordinates' );
							ptc_number_selector( 'pagination_shadow_blur_radius', $content_layout, 'Blur radius', 'block coordinates' );
							ptc_colour_selector( 'pagination_shadow_colour', $content_layout, 'Colour', 'block colour' );
							//ptc_number_selector( 'pagination_shadow_opacity', $content_layout, 'Opacity' );
						?>
					</div>
					<div class="section-layout">
						<h2>Margin</h2>
						<?php ptc_number_selector( 'pagination_vertical_margin', $content_layout, 'Vertical margin', 'block coordinates' ); ?>
						<?php ptc_number_selector( 'pagination_horizontal_margin', $content_layout, 'Horizontal margin', 'block coordinates' ); ?>
					</div>
					<div class="section-layout">
						<h2>Padding</h2>
						<?php ptc_number_selector( 'pagination_padding', $content_layout, 'Padding', 'block coordinates' ); ?>
					</div>
					<div class="section-layout">
						<h2>Background</h2>
						<?php ptc_colour_selector( 'pagination_background_colour', $content_layout, 'Colour', 'block colour' ); ?>
						<?php ptc_colour_selector( 'pagination_background_hovercolour', $content_layout, 'Colour on hover', 'block colour' ); ?>
					</div>
					<div class="section-layout">
						<h2>Border</h2>
						<?php ptc_number_selector( 'pagination_border_width', $content_layout, 'Width', 'block coordinates' ); ?>
						<?php ptc_bordertype_selector( 'pagination_border_type', $content_layout, 'Type', 'block bordertype' ); ?>
						<?php ptc_colour_selector( 'pagination_border_colour', $content_layout, 'Colour', 'block colour' ); ?>
					</div>
				</div>
				<?php
				$count = 1;
				while( $count < 7 ) : ?>
				<div id="h<?php echo $count; ?>_options">
					<?php
						ptc_text_display( 'heading' . $count, $content_layout, 'Heading ' . $count );
						ptc_text_margins( 'heading' . $count, $content_layout, 'block coordinates' );
						ptc_text_padding( 'heading' . $count, $content_layout, 'block coordinates' );
						ptc_text_background( 'heading' . $count, $content_layout );
						ptc_text_borders_horizontal( 'heading' . $count, $content_layout );
						$count++;
					?>
				</div>
				<?php endwhile; ?>
				<div id="p_options">
					<?php
						ptc_text_display( 'paragraph', $content_layout, 'Paragraph' );
						ptc_text_margins( 'paragraph', $content_layout, 'block coordinates' );
						ptc_text_padding( 'paragraph', $content_layout, 'block coordinates' );
						ptc_text_background( 'paragraph', $content_layout );
						ptc_text_borders_horizontal( 'paragraph', $content_layout );
					?>
				</div>
				<div id="li_options">
					<?php
						ptc_text_display( 'listitem', $content_layout, 'List items' );
						ptc_text_margins( 'listitem', $content_layout );
						ptc_text_padding( 'listitem', $content_layout );
						ptc_text_background( 'listitem', $content_layout );
						ptc_text_borders_horizontal( 'listitem', $content_layout );
					?>
				</div>
				<div class="inner-tab-block" id="a_options">
					<div class="section-layout">
						<h2>Links</h2>
						<?php 
							ptc_colour_selector( 'links_textcolour', $content_layout, 'Colour' );
							ptc_fontweight_selector( 'links_font_weight', $content_layout, 'Font weight', 'block fontweight', 'inherit' );
							ptc_fontstyle_selector( 'links_font_style', $content_layout, 'Font style', 'block', 'inherit' );
							ptc_textdecoration_selector( 'links_textdecoration', $content_layout, 'Text decoration', 'block textdecoration', 'inherit' );
						?>
					</div>
					<div class="section-layout">
						<h2>Links on hover</h2>
						<?php
							ptc_colour_selector( 'links_hover_textcolour', $content_layout, 'Colour' );
							ptc_fontweight_selector( 'links_hover_font_weight', $content_layout, 'Font weight', 'block fontweight', 'inherit' );
							ptc_fontstyle_selector( 'links_hover_font_style', $content_layout, 'Font style', 'block', 'inherit' );
							ptc_textdecoration_selector( 'links_hover_textdecoration', $content_layout, 'Text decoration', 'block textdecoration', 'inherit' ); 
						?>
					</div>
				</div>
			</div>
		</div>
		<div class="tab-block" id="header_options">
			<div id="tabs-header" class="inner-tabber">
				<ul>
					<li id="ptc_headeroverall_options"><a href="#headeroverall_options" title="Overall">Overall</a></li>
					<li id="ptc_headerheading_options"><a href="#headerheading_options" title="Heading">Heading</a></li>
					<li id="ptc_headerdescription_options"><a href="#headerdescription_options" title="Description">Description</a></li>
					<li id="ptc_headerlogo_options"><a href="#headerlogo_options" title="Logo">Logo</a></li>
					<li id="ptc_headersearch_options"><a href="#headersearch_options" title="Search">Search</a></li>
				</ul>
				<div class="inner-tab-block" id="headeroverall_options">
					<div class="section-layout">
						<h2>Overall</h2>
						<?php ptc_number_selector( 'header_max_width', $content_layout, 'Max width' ); ?>
						<?php ptc_number_selector( 'header_min_width', $content_layout, 'Min width' ); ?>
						<?php ptc_number_selector( 'header_height', $content_layout, 'Height' ); ?>
					</div>
					<div class="section-layout">
						<h2>Background</h2>
						<?php ptc_colour_selector( 'header_background_colour', $content_layout, 'Colour' ); ?>
						<?php ptc_background_image_selector( 'header_background_image', $content_layout, 'Image' ); ?>
					</div>
					<div class="section-layout">
						<h2>Full width background</h2>
						<p>Background displayed across the full width of the site - leave blank to use the standard page background.</p>
						<?php ptc_display_selector( 'header_fullwidth_background_display', $content_layout, 'Display' ); ?>
						<?php ptc_colour_selector( 'header_fullwidth_background_colour', $content_layout, 'Colour' ); ?>
						<?php ptc_background_image_selector( 'header_fullwidth_background_image', $content_layout, 'Image' ); ?>
					</div>
					<?php ptc_wrapper_block( 'header', $content_layout ); ?>
				</div>
				<div class="inner-tab-block" id="headerheading_options">
					<div class="section-layout">
						<h2>Heading</h2>
						<?php
							ptc_display_selector( 'header_heading_display', $content_layout, 'Display' );
							ptc_number_selector( 'header_heading_position_x', $content_layout, 'x-coord' );
							ptc_number_selector( 'header_heading_position_y', $content_layout, 'y-coord' );
							ptc_alignment_selector( 'header_heading_position_centered', $content_layout, 'Alignment' );
						?>
					</div>
					<?php ptc_text_display( 'header_heading', $content_layout, 'Text' ); ?>
				</div>
				<div class="inner-tab-block" id="headerdescription_options">
					<div class="section-layout">
						<h2>Description</h2>
						<?php 
							ptc_display_selector( 'header_description_display', $content_layout, 'Display' );
							ptc_number_selector( 'header_description_position_x', $content_layout, 'x-coord' );
							ptc_number_selector( 'header_description_position_y', $content_layout, 'y-coord' );
							ptc_alignment_selector( 'header_description_position_centered', $content_layout, 'Alignment' );
						?>
					</div>
					<?php ptc_text_display( 'header_description', $content_layout, 'Text' ); ?>
				</div>
				<div class="inner-tab-block" id="headerlogo_options">
					<div class="section-layout">
						<h2>Logo</h2>
						<?php ptc_display_selector( 'header_logo_display', $content_layout, 'Display' ); ?>
						<?php ptc_number_selector( 'header_logo_width', $content_layout, 'Width' ); ?>
						<?php ptc_number_selector( 'header_logo_height', $content_layout, 'Height' ); ?>
						<?php ptc_number_selector( 'header_logo_position_x', $content_layout, 'x-coord' ); ?>
						<?php ptc_number_selector( 'header_logo_position_y', $content_layout, 'y-coord' ); ?>
						<?php ptc_background_image_selector( 'header_logo_background_image', $content_layout, 'Image' ); ?>
					</div>
				</div>
				<div class="inner-tab-block" id="headersearch_options">
					<div class="section-layout">
						<h2>Search box</h2>
						<?php ptc_display_selector( 'header_searchbox_display', $content_layout, 'Display' ); ?>
						<?php ptc_number_selector( 'header_searchbox_width', $content_layout, 'Width' ); ?>
						<?php ptc_number_selector( 'header_searchbox_height', $content_layout, 'Height' ); ?>
						<?php ptc_number_selector( 'header_searchbox_position_x', $content_layout, 'x-coord' ); ?>
						<?php ptc_number_selector( 'header_searchbox_position_y', $content_layout, 'y-coord' ); ?>
						<h3>Background</h3>
						<?php ptc_colour_selector( 'header_searchbox_background_colour', $content_layout, 'Colour' ); ?>
						<?php ptc_background_image_selector( 'header_searchbox_background_image', $content_layout, 'Image' ); ?>
					</div>
					<div class="section-layout">
						<h2>Search text</h2>
						<?php ptc_text_display( 'searchtext', $content_layout, '', 'yes' ); ?>
						<h3>Dimensions</h3>
						<?php ptc_number_selector( 'header_searchbox_text_width', $content_layout, 'Width' ); ?>
						<?php ptc_number_selector( 'header_searchbox_text_height', $content_layout, 'Height' ); ?>
						<?php ptc_number_selector( 'header_searchbox_text_position_x', $content_layout, 'x-coord' ); ?>
						<?php ptc_number_selector( 'header_searchbox_text_position_y', $content_layout, 'y-coord' ); ?>
						<h3>Background</h3>
						<?php ptc_colour_selector( 'header_searchbox_text_background_colour', $content_layout, 'Colour' ); ?>
						<?php ptc_background_image_selector( 'header_searchbox_text_background_image', $content_layout, 'Image' ); ?>
					</div>
					<div class="section-layout">
						<h2>Search submit</h2>
						<?php ptc_display_selector( 'header_searchsubmit_text_display', $content_layout, 'Display text' ); ?>
						<?php ptc_text_display( 'searchsubmit', $content_layout, '', 'yes' ); ?>
						<h3>Dimensions</h3>
						<?php ptc_number_selector( 'header_searchsubmit_text_width', $content_layout, 'Width' ); ?>
						<?php ptc_number_selector( 'header_searchsubmit_text_height', $content_layout, 'Height' ); ?>
						<?php ptc_number_selector( 'header_searchsubmit_text_position_x', $content_layout, 'x-coord' ); ?>
						<?php ptc_number_selector( 'header_searchsubmit_text_position_y', $content_layout, 'y-coord' ); ?>
						<h3>Background</h3>
						<?php ptc_colour_selector( 'header_searchsubmit_text_background_colour', $content_layout, 'Colour' ); ?>
						<?php ptc_background_image_selector( 'header_searchsubmit_text_background_image', $content_layout, 'Image' ); ?>
					</div>
				</div>
			</div>
		</div>
		<div class="tab-block" id="content_options">
			<div id="blocks_options" class="wide">
				<div class="section-layout">
					<h2>Choose design</h2>
					<p>You can select a default design to start from. We will be adding more designs to this area over time.</p>
					<br />
					<div class="floating-spacer-block"> </div>
					<div class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only ui-state-hover" role="button" aria-disabled="false">
						<input id="myformCoraline" type="button" name="button" value="Coraline" />
						<div id="ptc-ajax"></div>
					</div>
					<div class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only ui-state-hover" role="button" aria-disabled="false">
						<input id="myform2011" type="button" name="button" value="2011" />
					</div>
					<div class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only ui-state-hover" role="button" aria-disabled="false">
						<input id="myformEnterprize" type="button" name="button" value="Enterprize" />
					</div>
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
		<div class="tab-block" id="extras_options">
			
			<div id="tabs-extras" class="inner-tabber">
				<ul>
					<li id="ptc_overall_options"><a href="#overall_options" title="Overall">Banner</a></li>
				</ul>
				<div class="inner-tab-block" id="overall_options">
					<div class="chunk">
						<div class="section-layout">
							<h2>Header image</h2>
							<?php
								ptc_number_selector( 'banner_max_width', $content_layout, 'Maximum width' );
								ptc_number_selector( 'banner_min_width', $content_layout, 'Minimum width' );
								ptc_number_selector( 'banner_height', $content_layout, 'Height' );
								ptc_background_image_selector( 'banner_image', $content_layout, 'Image' );
							?>
						</div>
						<?php ptc_wrapper_block( 'banner', $content_layout ); ?>
					</div>
				</div>
			</div>

		</div>
		<div class="tab-block" id="sidebars_options">
			<div id="tabs-sidebars" class="inner-tabber">
				<ul>
					<li id="ptc_sidebaroverall_options"><a href="#sidebaroverall_options" title="Overall">Overall</a></li>
					<li id="ptc_sidebarheading_options"><a href="#sidebarheading" title="Heading">Heading</a></li>
					<li id="ptc_sidebarparagraph_options"><a href="#sidebarparagraph_options" title="Paragraph">Paragraph</a></li>
					<li id="ptc_sidebarlistitem_options"><a href="#sidebarlistitem_options" title="List items">List items</a></li>
				</ul>
				<div class="inner-tab-block" id="sidebaroverall_options">
					<div class="section-layout">
						<h2>Background</h2>
						<?php ptc_colour_selector( 'sidebar_background_colour', $content_layout, 'Colour' ); ?>
						<?php ptc_background_image_selector( 'sidebar_background_image', $content_layout, 'Image' ); ?>
						<?php ptc_imagetiling_selector( 'sidebar_background_image_tiling', $content_layout, 'Tiling' ); ?>
					</div>
					<div class="section-layout">
						<h2>Widths</h2>
						<?php ptc_number_selector( 'aside_1_width', $content_layout, 'Sidebar 1', 'block coordinates' ); ?>
						<?php ptc_number_selector( 'aside_2_width', $content_layout, 'Sidebar 2', 'block coordinates' ); ?>
					</div>
					<?php ptc_text_padding( 'aside', $content_layout, 'block coordinates' ); ?>
				</div>
				<div class="inner-tab-block" id="sidebarheading">
					<?php 
						ptc_text_display( 'sidebar_heading', $content_layout, 'Heading' ); 
						ptc_text_margins( 'sidebar_heading', $content_layout );
						ptc_text_padding( 'sidebar_heading', $content_layout );
						ptc_text_background( 'sidebar_heading', $content_layout );
						ptc_text_borders_horizontal( 'sidebar_heading', $content_layout );
					?>
				</div>
				<div class="inner-tab-block" id="sidebarparagraph_options">
					<?php
						ptc_text_display( 'sidebar_paragraph', $content_layout, 'Paragraph' ); 
						ptc_text_margins( 'sidebar_paragraph', $content_layout, 'block coordinates' );
						ptc_text_padding( 'sidebar_paragraph', $content_layout, 'block coordinates' );
						ptc_text_background( 'sidebar_paragraph', $content_layout );
						ptc_text_borders_horizontal( 'sidebar_paragraph', $content_layout );
					?>
				</div>
				<div class="inner-tab-block" id="sidebarlistitem_options">
					<?php 
						ptc_text_display( 'sidebar_list', $content_layout, 'List text' ); 
						ptc_text_margins( 'sidebar_list', $content_layout, 'block coordinates' );
						ptc_text_padding( 'sidebar_list', $content_layout, 'block coordinates' );
						ptc_text_background( 'sidebar_list', $content_layout, 'block coordinates' );
						ptc_text_borders_horizontal( 'sidebar_list', $content_layout );
					?>
				</div>
			</div>

		</div>
		<div class="tab-block" id="footer_options">
			<div id="tabs-footer" class="inner-tabber">
				<ul>
					<li id="ptc_footeroverall_options"><a href="#footeroverall_options" title="Overall">Overall</a></li>
					<li id="ptc_footermenu_options"><a href="#footermenu_options" title="Menu">Menu</a></li>
					<li id="ptc_footercopyright_options"><a href="#footercopyright_options" title="Copyright">Copyright</a></li>
				</ul>
				<div class="inner-tab-block" id="footeroverall_options">
					<div class="section-layout">
						<h2>Footer</h2>
						<?php 
							ptc_number_selector( 'footer_max_width', $content_layout, 'Max width' );
							ptc_number_selector( 'footer_min_width', $content_layout, 'Min width' );
							ptc_number_selector( 'footer_height', $content_layout, 'height' );
						?>
					</div>
					<div class="section-layout">
					<h2>Background</h3>
						<?php
							ptc_colour_selector( 'footer_background_colour', $content_layout, 'Colour' );
							ptc_background_image_selector( 'footer_background_image', $content_layout, 'Image' );
							ptc_imagetiling_selector( 'footer_background_image_tiling', $content_layout, 'Image tiling' );
						?>
					</div>
					<div class="section-layout">
						<h2>Full width background</h2>
						<p>Background displayed across the full width of the site - leave blank to use the standard page background.</p>
						<?php ptc_display_selector( 'footer_fullwidth_background_display', $content_layout, 'Display' ); ?>
						<?php ptc_colour_selector( 'footer_fullwidth_background_colour', $content_layout, 'Colour' ); ?>
						<?php ptc_background_image_selector( 'footer_fullwidth_background_image', $content_layout, 'Image' ); ?>
					</div>
					<?php ptc_wrapper_block( 'footer', $content_layout ); ?>
				</div>
				<div class="inner-tab-block" id="footermenu_options">
					<div class="section-layout">
						<h2>Menu</h2>
						<?php ptc_display_selector( 'footer_menu_display', $content_layout, 'Display' ); ?>
						<?php ptc_alignment_selector( 'footer_menu_alignment', $content_layout, 'Alignment' ); ?>
						<?php ptc_number_selector( 'footer_menu_horizontalposition', $content_layout, 'x-coord' ); ?>
						<?php ptc_number_selector( 'footer_menu_verticalposition', $content_layout, 'y-coord' ); ?>
						<?php ptc_number_selector( 'footer_menu_gap', $content_layout, 'Gap' ); ?>
					</div>
					<?php ptc_text_display( 'footer_menu', $content_layout, 'Text' ); ?>
				</div>
				<div class="inner-tab-block" id="footercopyright_options">
					<div class="section-layout">
						<h2>Copyright</h2>
						<?php
							ptc_display_selector( 'footer_copyright_display', $content_layout, 'Display' );
							ptc_number_selector( 'footer_copyright_horizontalposition', $content_layout, 'x-coord' );
							ptc_number_selector( 'footer_copyright_verticalposition', $content_layout, 'y-coord' );
							ptc_alignment_selector( 'footer_copyright_position_centered', $content_layout, 'Centered' );
						?>
					</div>
					<?php ptc_text_display( 'footer_copyright', $content_layout, 'Text' ); ?>
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
</div>

</div>
</div>

<?php
}
