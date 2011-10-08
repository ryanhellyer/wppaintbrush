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
add_action( 'wppb_add_editor_links', 'wppb_header_editor_link', 30 );

/* Add new "Header" tab to main editing panel tabber
 * @since 1.0
 */
function wppb_header_editor_tab() {
	$wppb_design_settings = get_option( WPPB_DESIGNER_SETTINGS );
	
	// Add HTML
?>
<div class="tab-block" id="header_options">
	<div id="tabs-header" class="inner-tabber">
		<ul>
			<li id="wppb_headeroverall_options"><a href="#headeroverall_options" title="<?php _e( 'Overall', 'wppb_lang' ); ?>"><?php _e( 'Overall', 'wppb_lang' ); ?></a></li>
			<li id="wppb_headerheading_options"><a href="#headerheading_options" title="<?php _e( 'Heading', 'wppb_lang' ); ?>"><?php _e( 'Heading', 'wppb_lang' ); ?></a></li>
			<li id="wppb_headerdescription_options"><a href="#headerdescription_options" title="<?php _e( 'Description', 'wppb_lang' ); ?>"><?php _e( 'Description', 'wppb_lang' ); ?></a></li>
			<li id="wppb_headerlogo_options"><a href="#headerlogo_options" title="<?php _e( 'Logo', 'wppb_lang' ); ?>"><?php _e( 'Logo', 'wppb_lang' ); ?></a></li>
			<li id="wppb_headersearch_options"><a href="#headersearch_options" title="<?php _e( 'Search', 'wppb_lang' ); ?>"><?php _e( 'Search', 'wppb_lang' ); ?></a></li>
		</ul>
		<div class="inner-tab-block" id="headeroverall_options">
			<div class="section-layout">
				<h2><?php _e( 'Overall', 'wppb_lang' ); ?></h2>
				<?php wppb_number_selector( 'header_max_width', $wppb_design_settings, __( 'Max width', 'wppb_lang' ) ); ?>
				<?php wppb_number_selector( 'header_min_width', $wppb_design_settings, __( 'Min width', 'wppb_lang' ) ); ?>
				<?php wppb_number_selector( 'header_height', $wppb_design_settings, __( 'Height', 'wppb_lang' ) ); ?>
			</div>
			<div class="section-layout">
				<h2><?php _e( 'Background', 'wppb_lang' ); ?></h2>
				<?php wppb_colour_selector( 'header_background_colour', $wppb_design_settings, __( 'Colour', 'wppb_lang' ) ); ?>
				<?php wppb_background_image_selector( 'header_background_image', $wppb_design_settings, __( 'Image', 'wppb_lang' ) ); ?>
			</div>
			<div class="section-layout">
				<h2><?php _e( 'Full width background', 'wppb_lang' ); ?></h2>
				<p><?php _e( 'Background displayed across the full width of the site - leave blank to use the standard page background.', 'wppb_lang' ); ?></p>
				<?php wppb_display_selector( 'header_fullwidth_background_display', $wppb_design_settings, __( 'Display', 'wppb_lang' ) ); ?>
				<?php wppb_colour_selector( 'header_fullwidth_background_colour', $wppb_design_settings, __( 'Colour', 'wppb_lang' ) ); ?>
				<?php wppb_background_image_selector( 'header_fullwidth_background_image', $wppb_design_settings, __( 'Image', 'wppb_lang' ) ); ?>
			</div>
			<?php wppb_wrapper_block( 'header', $wppb_design_settings ); ?>
		</div>
		<div class="inner-tab-block" id="headerheading_options">
			<div class="section-layout">
				<h2><?php _e( 'Heading', 'wppb_lang' ); ?></h2>
				<?php
					wppb_display_selector( 'header_heading_display', $wppb_design_settings, __( 'Display', 'wppb_lang' ) );
					wppb_number_selector( 'header_heading_position_x', $wppb_design_settings, __( 'x-coord', 'wppb_lang' ) );
					wppb_number_selector( 'header_heading_position_y', $wppb_design_settings, __( 'y-coord', 'wppb_lang' ) );
					wppb_alignment_selector( 'header_heading_position_centered', $wppb_design_settings, __( 'Alignment', 'wppb_lang' ) );
				?>
			</div>
			<?php wppb_text_display( 'header_heading', $wppb_design_settings, __( 'Text', 'wppb_lang' ) ); ?>
		</div>
		<div class="inner-tab-block" id="headerdescription_options">
			<div class="section-layout">
				<h2><?php _e( 'Description', 'wppb_lang' ); ?></h2>
				<?php 
					wppb_display_selector( 'header_description_display', $wppb_design_settings, __( 'Display', 'wppb_lang' ) );
					wppb_number_selector( 'header_description_position_x', $wppb_design_settings, __( 'x-coord', 'wppb_lang' ) );
					wppb_number_selector( 'header_description_position_y', $wppb_design_settings, __( 'y-coord', 'wppb_lang' ) );
					wppb_alignment_selector( 'header_description_position_centered', $wppb_design_settings, __( 'Alignment', 'wppb_lang' ) );
				?>
			</div>
			<?php wppb_text_display( 'header_description', $wppb_design_settings, __( 'Text', 'wppb_lang' ) ); ?>
		</div>
		<div class="inner-tab-block" id="headerlogo_options">
			<div class="section-layout">
				<h2><?php _e( 'Logo', 'wppb_lang' ); ?></h2>
				<?php wppb_display_selector( 'header_logo_display', $wppb_design_settings, __( 'Display', 'wppb_lang' ) ); ?>
				<?php wppb_number_selector( 'header_logo_width', $wppb_design_settings, __( 'Width', 'wppb_lang' ) ); ?>
				<?php wppb_number_selector( 'header_logo_height', $wppb_design_settings, __( 'Height', 'wppb_lang' ) ); ?>
				<?php wppb_number_selector( 'header_logo_position_x', $wppb_design_settings, __( 'x-coord', 'wppb_lang' ) ); ?>
				<?php wppb_number_selector( 'header_logo_position_y', $wppb_design_settings, __( 'y-coord', 'wppb_lang' ) ); ?>
				<?php wppb_background_image_selector( 'header_logo_background_image', $wppb_design_settings, __( 'Image', 'wppb_lang' ) ); ?>
			</div>
		</div>
		<div class="inner-tab-block" id="headersearch_options">
			<div class="section-layout">
				<h2><?php _e( 'Search box', 'wppb_lang' ); ?></h2>
				<?php wppb_display_selector( 'header_searchbox_display', $wppb_design_settings, __( 'Display', 'wppb_lang' ) ); ?>
				<?php wppb_number_selector( 'header_searchbox_width', $wppb_design_settings, __( 'Width', 'wppb_lang' ) ); ?>
				<?php wppb_number_selector( 'header_searchbox_height', $wppb_design_settings, __( 'Height', 'wppb_lang' ) ); ?>
				<?php wppb_number_selector( 'header_searchbox_position_x', $wppb_design_settings, __( 'x-coord', 'wppb_lang' ) ); ?>
				<?php wppb_number_selector( 'header_searchbox_position_y', $wppb_design_settings, __( 'y-coord', 'wppb_lang' ) ); ?>
				<h3><?php _e( 'Background', 'wppb_lang' ); ?></h3>
				<?php wppb_colour_selector( 'header_searchbox_background_colour', $wppb_design_settings, __( 'Colour', 'wppb_lang' ) ); ?>
				<?php wppb_background_image_selector( 'header_searchbox_background_image', $wppb_design_settings, __( 'Image', 'wppb_lang' ) ); ?>
			</div>
			<div class="section-layout">
				<h2><?php _e( 'Search text', 'wppb_lang' ); ?></h2>
				<?php wppb_text_display( 'searchtext', $wppb_design_settings, '', 'yes' ); ?>
				<h3><?php _e( 'Dimensions', 'wppb_lang' ); ?></h3>
				<?php wppb_number_selector( 'header_searchbox_text_width', $wppb_design_settings, __( 'Width', 'wppb_lang' ) ); ?>
				<?php wppb_number_selector( 'header_searchbox_text_height', $wppb_design_settings, __( 'Height', 'wppb_lang' ) ); ?>
				<?php wppb_number_selector( 'header_searchbox_text_position_x', $wppb_design_settings, __( 'x-coord', 'wppb_lang' ) ); ?>
				<?php wppb_number_selector( 'header_searchbox_text_position_y', $wppb_design_settings, __( 'y-coord', 'wppb_lang' ) ); ?>
				<h3><?php _e( 'Background', 'wppb_lang' ); ?></h3>
				<?php wppb_colour_selector( 'header_searchbox_text_background_colour', $wppb_design_settings, __( 'Colour', 'wppb_lang' ) ); ?>
				<?php wppb_background_image_selector( 'header_searchbox_text_background_image', $wppb_design_settings, __( 'Image', 'wppb_lang' ) ); ?>
			</div>
			<div class="section-layout">
				<h2><?php _e( 'Search submit', 'wppb_lang' ); ?></h2>
				<?php wppb_display_selector( 'header_searchsubmit_text_display', $wppb_design_settings, __( 'Display text', 'wppb_lang' ) ); ?>
				<?php wppb_text_display( 'searchsubmit', $wppb_design_settings, '', 'yes' ); ?>
				<h3><?php _e( 'Dimensions', 'wppb_lang' ); ?></h3>
				<?php wppb_number_selector( 'header_searchsubmit_text_width', $wppb_design_settings, __( 'Width', 'wppb_lang' ) ); ?>
				<?php wppb_number_selector( 'header_searchsubmit_text_height', $wppb_design_settings, __( 'Height', 'wppb_lang' ) ); ?>
				<?php wppb_number_selector( 'header_searchsubmit_text_position_x', $wppb_design_settings, __( 'x-coord', 'wppb_lang' ) ); ?>
				<?php wppb_number_selector( 'header_searchsubmit_text_position_y', $wppb_design_settings, __( 'y-coord', 'wppb_lang' ) ); ?>
				<h3><?php _e( 'Background', 'wppb_lang' ); ?></h3>
				<?php wppb_colour_selector( 'header_searchsubmit_text_background_colour', $wppb_design_settings, __( 'Colour', 'wppb_lang' ) ); ?>
				<?php wppb_background_image_selector( 'header_searchsubmit_text_background_image', $wppb_design_settings, __( 'Image', 'wppb_lang' ) ); ?>
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
	$chunks['Header'] = '[wppb_header]';
}
add_action( 'wppb_add_chunk', 'wppb_header_block' );


/**
 * Adds the header shortcode as used within the template editor
 * [wppb_header] shortcode
 * @since 0.1
 */
function wppb_header_shortcode() {
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
add_shortcode( 'wppb_header', 'wppb_header_shortcode' );

/**
 * Add text type options to be sanitized to the global array
 * @since 1.0
 */
function wppb_addheader_text_type_options() {
	global $texttype;

	// Other text options
	array_push( $texttype, 'header_heading' );
	array_push( $texttype, 'header_description' );
	array_push( $texttype, 'searchtext' );
	array_push( $texttype, 'searchsubmit' );

	return $texttype;
}
add_action( 'wppb_hook_text_type_options', 'wppb_addheader_text_type_options' );

/**
 * Add colours to be sanitized to the global array
 * @since 1.0
 */
function wppb_addheader_colour_options() {
	global $wppb_colour_options;

	array_push( $wppb_colour_options, 'header_background_colour' );
	array_push( $wppb_colour_options, 'header_searchbox_background_colour' );
	array_push( $wppb_colour_options, 'header_searchsubmit_text_background_colour' );
	array_push( $wppb_colour_options, 'header_searchbox_text_background_colour' );
	array_push( $wppb_colour_options, 'header_fullwidth_background_colour' );

	array_push( $wppb_colour_options, 'header_border_top_colour' );
	array_push( $wppb_colour_options, 'header_border_right_colour' );
	array_push( $wppb_colour_options, 'header_border_bottom_colour' );
	array_push( $wppb_colour_options, 'header_border_left_colour' );

	return $wppb_colour_options;
}
add_action( 'wppb_hook_colour_options', 'wppb_addheader_colour_options' );


/**
 * Add image options to be sanitized to the global array
 * @since 1.0
 */
function wppb_addheader_image_options() {
	global $wppb_image_options;

	// Image options
	array_push( $wppb_image_options, 'header_searchbox_background_image' );
	array_push( $wppb_image_options, 'header_logo_background_image' );
	array_push( $wppb_image_options, 'header_background_image' );
	array_push( $wppb_image_options, 'header_searchsubmit_text_background_image' );
	array_push( $wppb_image_options, 'header_searchbox_text_background_image' );
	array_push( $wppb_image_options, 'header_fullwidth_background_image' );

	return $wppb_image_options;
}
add_action( 'wppb_hook_image_options', 'wppb_addheader_image_options' );

/**
 * Add border type options to be sanitized to the global array
 * @since 1.0
 */
function wppb_addheader_bordertype_options() {
	global $wppb_bordertype_options;

	// Adding options for block wrappers
	array_push( $wppb_bordertype_options, 'header_border_top_type' );
	array_push( $wppb_bordertype_options, 'header_border_right_type' );
	array_push( $wppb_bordertype_options, 'header_border_bottom_type' );
	array_push( $wppb_bordertype_options, 'header_border_left_type' );

	return $wppb_bordertype_options;
}
add_action( 'wppb_hook_bordertype_options', 'wppb_addheader_bordertype_options' );

/**
 * Add centered options to be sanitized to the global array
 * @since 1.0
 */
function wppb_addheader_centered_options() {
	global $wppb_centered_options;

	// Centered options
	array_push( $wppb_centered_options, 'header_heading_position_centered' );
	array_push( $wppb_centered_options, 'header_description_position_centered' );

	return $wppb_centered_options;
}
add_action( 'wppb_hook_centered_options', 'wppb_addheader_centered_options' );

/**
 * Add display options to be sanitized to the global array
 * @since 1.0
 */
function wppb_addheader_display_options() {
	global $wppb_display_options;

	// Display options
	array_push( $wppb_display_options, 'header_searchbox_display' );
	array_push( $wppb_display_options, 'header_logo_display' );
	array_push( $wppb_display_options, 'header_description_display' );
	array_push( $wppb_display_options, 'header_heading_display' );
	array_push( $wppb_display_options, 'header_searchsubmit_text_display' );
	array_push( $wppb_display_options, 'header_fullwidth_background_display' );

	return $wppb_display_options;
}
add_action( 'wppb_hook_display_options', 'wppb_addheader_display_options' );

/**
 * Add little numbers to be sanitized to the global array
 * @since 1.0
 */
function wppb_addheader_littlenumbers_options() {
	global $wppb_littlenumbers_options;

	// Little numbers options
	array_push( $wppb_littlenumbers_options, 'header_searchsubmit_text_position_y' );
	array_push( $wppb_littlenumbers_options, 'header_searchbox_text_position_x' );
	array_push( $wppb_littlenumbers_options, 'header_searchbox_text_position_y' );

	array_push( $wppb_littlenumbers_options, 'header_border_top_width' );
	array_push( $wppb_littlenumbers_options, 'header_border_right_width' );
	array_push( $wppb_littlenumbers_options, 'header_border_bottom_width' );
	array_push( $wppb_littlenumbers_options, 'header_border_left_width' );
	array_push( $wppb_littlenumbers_options, 'header_top_margin' );
	array_push( $wppb_littlenumbers_options, 'header_bottom_margin' );

	return $wppb_littlenumbers_options;
}
add_action( 'wppb_hook_littlenumbers_options', 'wppb_addheader_littlenumbers_options' );

/**
 * Add big numbers to be sanitized to the global array
 * @since 1.0
 */
function wppb_addheader_bignumbers_options() {
	global $wppb_bignumbers_options;

	// Big numbers options
	array_push( $wppb_bignumbers_options, 'header_heading_position_x' );
	array_push( $wppb_bignumbers_options, 'header_heading_position_y' );
	array_push( $wppb_bignumbers_options, 'header_logo_position_x' );
	array_push( $wppb_bignumbers_options, 'header_logo_position_y' );
	array_push( $wppb_bignumbers_options, 'header_description_position_x' );
	array_push( $wppb_bignumbers_options, 'header_description_position_y' );
	array_push( $wppb_bignumbers_options, 'header_searchbox_width' );
	array_push( $wppb_bignumbers_options, 'header_searchbox_height' );
	array_push( $wppb_bignumbers_options, 'header_searchbox_position_x' );
	array_push( $wppb_bignumbers_options, 'header_searchbox_position_y' );
	array_push( $wppb_bignumbers_options, 'header_logo_width' );
	array_push( $wppb_bignumbers_options, 'header_logo_height' );
	array_push( $wppb_bignumbers_options, 'header_min_width' );
	array_push( $wppb_bignumbers_options, 'header_max_width' );
	array_push( $wppb_bignumbers_options, 'header_height' );
	array_push( $wppb_bignumbers_options, 'header_searchsubmit_text_width' );
	array_push( $wppb_bignumbers_options, 'header_searchsubmit_text_height' );
	array_push( $wppb_bignumbers_options, 'header_searchbox_text_width' );
	array_push( $wppb_bignumbers_options, 'header_searchbox_text_height' );
	array_push( $wppb_bignumbers_options, 'header_searchsubmit_text_position_x' );

	return $wppb_bignumbers_options;
}
add_action( 'wppb_hook_bignumbers_options', 'wppb_addheader_bignumbers_options' );

