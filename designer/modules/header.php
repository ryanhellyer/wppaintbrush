<?php
/**
 * @package WordPress
 * @subpackage WP Paintbrush
 * @since WP Paintbrush 1.0
 *
 * Allows users to add a header to their WP Paintbrush theme
 */


/* Add new "Header" link to main tabber in editing panel
 * @since 1.0
 */
function wppb_header_editor_link() {
	echo '<li id="pixopoint_header_options"><a href="#header_options">Header</a></li>';
} 
add_action( 'wppb_add_editor_links', 'wppb_header_editor_link' );

/* Add new "Header" tab to main editing panel tabber
 * @since 1.0
 */
function wppb_header_editor_tab() {
	$content_layout = get_option( WPPB_DESIGNER_SETTINGS );
	
	// Add HTML
	?>
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
<?php
}
add_action( 'wppb_add_editor_tabs', 'wppb_header_editor_tab' );

/* Add extra block to the "Layout editor" in the editing panel.
 * @since 0.1
 */
function wppb_header_block() {
	global $chunks;

	// The extra block to be added
	$chunks['Header'] = '[ptc_header]';
}
add_action( 'wppb_add_chunk', 'wppb_header_block' );


/**
 * Adds the header shortcode as used within the template editor
 * [ptc_header] shortcode
 * @since 0.1
 */
function ptc_header_shortcode() {
	$functions = '
<header>
	<div class="header">
		<h1><a href="[siteinfo type="url"]">[siteinfo type="name"]</a></h1>
		<a id="logo" href="[siteinfo type="url"]">[siteinfo type="name"]</a>
		<div id="description">[siteinfo type="description"]</div>
		<div id="search">
			<form method="get" id="searchform" action="[siteinfo type="url"]">
				<input type="text" class="field" name="s" id="s" value="Search" [onfocus][/onfocus]>
				<input type="submit" class="submit" name="submit" id="searchsubmit" value="Search">
			</form>
		</div>
	</div>
</header>
';
	return $functions;
}
add_shortcode( 'ptc_header', 'ptc_header_shortcode' );

/**
 * Add text type options to be sanitized to the global array
 * @since 1.0
 */
function ptc_addheader_text_type_options() {
	global $texttype;

	// Other text options
	array_push( $texttype, 'header_heading' );
	array_push( $texttype, 'header_description' );
	array_push( $texttype, 'searchtext' );
	array_push( $texttype, 'searchsubmit' );

	return $texttype;
}
add_action( 'ptc_hook_text_type_options', 'ptc_addheader_text_type_options' );

/**
 * Add colours to be sanitized to the global array
 * @since 1.0
 */
function ptc_addheader_colour_options() {
	global $ptc_colour_options;

	array_push( $ptc_colour_options, 'header_background_colour' );
	array_push( $ptc_colour_options, 'header_searchbox_background_colour' );
	array_push( $ptc_colour_options, 'header_searchsubmit_text_background_colour' );
	array_push( $ptc_colour_options, 'header_searchbox_text_background_colour' );
	array_push( $ptc_colour_options, 'header_fullwidth_background_colour' );

	array_push( $ptc_colour_options, 'header_border_top_colour' );
	array_push( $ptc_colour_options, 'header_border_right_colour' );
	array_push( $ptc_colour_options, 'header_border_bottom_colour' );
	array_push( $ptc_colour_options, 'header_border_left_colour' );

	return $ptc_colour_options;
}
add_action( 'ptc_hook_colour_options', 'ptc_addheader_colour_options' );


/**
 * Add image options to be sanitized to the global array
 * @since 1.0
 */
function ptc_addheader_image_options() {
	global $ptc_image_options;

	// Image options
	array_push( $ptc_image_options, 'header_searchbox_background_image' );
	array_push( $ptc_image_options, 'header_logo_background_image' );
	array_push( $ptc_image_options, 'header_background_image' );
	array_push( $ptc_image_options, 'header_searchsubmit_text_background_image' );
	array_push( $ptc_image_options, 'header_searchbox_text_background_image' );
	array_push( $ptc_image_options, 'header_fullwidth_background_image' );

	return $ptc_image_options;
}
add_action( 'ptc_hook_image_options', 'ptc_addheader_image_options' );

/**
 * Add border type options to be sanitized to the global array
 * @since 1.0
 */
function ptc_addheader_bordertype_options() {
	global $ptc_bordertype_options;

	// Adding options for block wrappers
	array_push( $ptc_bordertype_options, 'header_border_top_type' );
	array_push( $ptc_bordertype_options, 'header_border_right_type' );
	array_push( $ptc_bordertype_options, 'header_border_bottom_type' );
	array_push( $ptc_bordertype_options, 'header_border_left_type' );

	return $ptc_bordertype_options;
}
add_action( 'ptc_hook_bordertype_options', 'ptc_addheader_bordertype_options' );

/**
 * Add centered options to be sanitized to the global array
 * @since 1.0
 */
function ptc_addheader_centered_options() {
	global $ptc_centered_options;

	// Centered options
	array_push( $ptc_centered_options, 'header_heading_position_centered' );
	array_push( $ptc_centered_options, 'header_description_position_centered' );

	return $ptc_centered_options;
}
add_action( 'ptc_hook_centered_options', 'ptc_addheader_centered_options' );

/**
 * Add display options to be sanitized to the global array
 * @since 1.0
 */
function ptc_addheader_display_options() {
	global $ptc_display_options;

	// Display options
	array_push( $ptc_display_options, 'header_searchbox_display' );
	array_push( $ptc_display_options, 'header_logo_display' );
	array_push( $ptc_display_options, 'header_description_display' );
	array_push( $ptc_display_options, 'header_heading_display' );
	array_push( $ptc_display_options, 'header_searchsubmit_text_display' );
	array_push( $ptc_display_options, 'header_fullwidth_background_display' );

	return $ptc_display_options;
}
add_action( 'ptc_hook_display_options', 'ptc_addheader_display_options' );

/**
 * Add little numbers to be sanitized to the global array
 * @since 1.0
 */
function ptc_addheader_littlenumbers_options() {
	global $ptc_littlenumbers_options;

	// Little numbers options
	array_push( $ptc_littlenumbers_options, 'header_searchsubmit_text_position_y' );
	array_push( $ptc_littlenumbers_options, 'header_searchbox_text_position_x' );
	array_push( $ptc_littlenumbers_options, 'header_searchbox_text_position_y' );

	array_push( $ptc_littlenumbers_options, 'header_border_top_width' );
	array_push( $ptc_littlenumbers_options, 'header_border_right_width' );
	array_push( $ptc_littlenumbers_options, 'header_border_bottom_width' );
	array_push( $ptc_littlenumbers_options, 'header_border_left_width' );
	array_push( $ptc_littlenumbers_options, 'header_top_margin' );
	array_push( $ptc_littlenumbers_options, 'header_bottom_margin' );

	return $ptc_littlenumbers_options;
}
add_action( 'ptc_hook_littlenumbers_options', 'ptc_addheader_littlenumbers_options' );

/**
 * Add big numbers to be sanitized to the global array
 * @since 1.0
 */
function ptc_addheader_bignumbers_options() {
	global $ptc_bignumbers_options;

	// Big numbers options
	array_push( $ptc_bignumbers_options, 'header_heading_position_x' );
	array_push( $ptc_bignumbers_options, 'header_heading_position_y' );
	array_push( $ptc_bignumbers_options, 'header_logo_position_x' );
	array_push( $ptc_bignumbers_options, 'header_logo_position_y' );
	array_push( $ptc_bignumbers_options, 'header_description_position_x' );
	array_push( $ptc_bignumbers_options, 'header_description_position_y' );
	array_push( $ptc_bignumbers_options, 'header_searchbox_width' );
	array_push( $ptc_bignumbers_options, 'header_searchbox_height' );
	array_push( $ptc_bignumbers_options, 'header_searchbox_position_x' );
	array_push( $ptc_bignumbers_options, 'header_searchbox_position_y' );
	array_push( $ptc_bignumbers_options, 'header_logo_width' );
	array_push( $ptc_bignumbers_options, 'header_logo_height' );
	array_push( $ptc_bignumbers_options, 'header_min_width' );
	array_push( $ptc_bignumbers_options, 'header_max_width' );
	array_push( $ptc_bignumbers_options, 'header_height' );
	array_push( $ptc_bignumbers_options, 'header_searchsubmit_text_width' );
	array_push( $ptc_bignumbers_options, 'header_searchsubmit_text_height' );
	array_push( $ptc_bignumbers_options, 'header_searchbox_text_width' );
	array_push( $ptc_bignumbers_options, 'header_searchbox_text_height' );
	array_push( $ptc_bignumbers_options, 'header_searchsubmit_text_position_x' );

	return $ptc_bignumbers_options;
}
add_action( 'ptc_hook_bignumbers_options', 'ptc_addheader_bignumbers_options' );

