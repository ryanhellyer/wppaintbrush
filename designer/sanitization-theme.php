<?php
/**
 * @package WordPress
 * @subpackage WP Paintbrush
 * @since WP Paintbrush 1.0
 *
 * Sanitization specific to WP Paintbrush theme
 * Same techniques used here can be used for sanitization of data entered via plugins
 */



/**
 * Block wrapper options
 * Array of options used for wrapping around blocks - stuff like borders and margins
 * Used by other functions to create more options
 * @since 1.0
 */
function ptc_block_wrapper() {
	$options = array(
		'header',
		'banner',
		'menu1',
		'footer',
	);
	return $options;
}

/*
 * Text type sanitization
 * @since 0.1
 */
function ptc_add_text_type_options() {
	global $texttype;

	// Other text options
	array_push( $texttype, 'header_heading' );
	array_push( $texttype, 'header_description' );
	array_push( $texttype, 'heading1' );
	array_push( $texttype, 'heading2' );
	array_push( $texttype, 'heading3' );
	array_push( $texttype, 'heading4' );
	array_push( $texttype, 'heading5' );
	array_push( $texttype, 'heading6' );
	array_push( $texttype, 'paragraph' );
	array_push( $texttype, 'listitem' );
	array_push( $texttype, 'blockquote' );
	array_push( $texttype, 'sidebar_heading' );
	array_push( $texttype, 'sidebar_list' );
	array_push( $texttype, 'sidebar_paragraph' );
	array_push( $texttype, 'footer_menu' );
	array_push( $texttype, 'footer_copyright' );
	array_push( $texttype, 'postinfo' );
	array_push( $texttype, 'searchtext' );
	array_push( $texttype, 'searchsubmit' );

	return $texttype;
}
add_action( 'ptc_hook_text_type_options', 'ptc_add_text_type_options' );

/*
 * @since 1.0
 */
function ptc_add_colour_options() {
	global $ptc_colour_options;

	// Loop through text types adding options to arrays
	foreach( ptc_text_type_options() as $stuff=>$type ) {
		array_push( $ptc_colour_options, $type . '_textcolour' ); // Text colour
		array_push( $ptc_colour_options, $type . '_shadow_colour' ); // Shadow colour
		array_push( $ptc_colour_options, $type . '_bordertop_colour' ); // Border top colour
		array_push( $ptc_colour_options, $type . '_borderbottom_colour' ); // Border bottom colour
		array_push( $ptc_colour_options, $type . '_background_colour' ); // Background colour
	}

	// Colour options
	array_push( $ptc_colour_options, 'menu1_shadow_colour' );
	array_push( $ptc_colour_options, 'sidebar_background_colour' );
	array_push( $ptc_colour_options, 'pagination_textcolour' );
	array_push( $ptc_colour_options, 'pagination_texthovercolour' );
	array_push( $ptc_colour_options, 'pagination_shadow_colour' );
	array_push( $ptc_colour_options, 'pagination_background_colour' );
	array_push( $ptc_colour_options, 'pagination_border_colour' );
	array_push( $ptc_colour_options, 'pagination_background_hovercolour' );
	array_push( $ptc_colour_options, 'footer_background_colour' );
	array_push( $ptc_colour_options, 'background_colour' );
	array_push( $ptc_colour_options, 'maincontent_background_colour' );
	array_push( $ptc_colour_options, 'header_background_colour' );
	array_push( $ptc_colour_options, 'header_searchbox_background_colour' );
	array_push( $ptc_colour_options, 'links_textcolour' );
	array_push( $ptc_colour_options, 'links_hover_textcolour' );
	array_push( $ptc_colour_options, 'header_searchsubmit_text_background_colour' );
	array_push( $ptc_colour_options, 'header_searchbox_text_background_colour' );
	array_push( $ptc_colour_options, 'header_fullwidth_background_colour' );
	array_push( $ptc_colour_options, 'footer_fullwidth_background_colour' );

	// Adding options for block wrappers
	foreach( ptc_block_wrapper() as $next=>$type ) {
		array_push( $ptc_colour_options, $type . '_border_top_colour' );
		array_push( $ptc_colour_options, $type . '_border_right_colour' );
		array_push( $ptc_colour_options, $type . '_border_bottom_colour' );
		array_push( $ptc_colour_options, $type . '_border_left_colour' );
	}

	return $ptc_colour_options;
}
add_action( 'ptc_hook_colour_options', 'ptc_add_colour_options' );

/* Setting variables for font weight sanitization
 * @since 1.0
 */
function ptc_add_fontweight_options() {
	global $ptc_fontweight_options;

	// Loop through text types adding options to arrays
	foreach( ptc_text_type_options() as $stuff=>$type ) {
		array_push( $ptc_fontweight_options, $type . '_font_weight' ); // Font weight
	}

	// Bold options
	array_push( $ptc_fontweight_options, 'pagination_font_weight' );
	array_push( $ptc_fontweight_options, 'links_font_weight' );
	array_push( $ptc_fontweight_options, 'links_hover_font_weight' );

	return $ptc_fontweight_options;
}
add_action( 'ptc_hook_fontweight_options', 'ptc_add_fontweight_options' );

/**
 * Font style options
 * Array of options which need sanitizised as font style
 * @since 1.0
 */
function ptc_add_fontstyle_options() {
	global $ptc_fontstyle_options;

	// Loop through text types adding options to arrays
	foreach( ptc_text_type_options() as $stuff=>$type ) {
		array_push( $ptc_fontstyle_options, $type . '_font_style' ); // Font style
	}

	// Style options
	array_push( $ptc_fontstyle_options, 'pagination_font_style' );
	array_push( $ptc_fontstyle_options, 'links_font_style' );
	array_push( $ptc_fontstyle_options, 'links_hover_font_style' );

	return $ptc_fontstyle_options;
}
add_action( 'ptc_hook_fontstyle_options', 'ptc_add_fontstyle_options' );

/**
 * Setting variables for Font size sanitization
 * @since 1.0
 */
function ptc_add_fontsize_options() {
	global $ptc_fontsize_options;

	// Loop through text types adding options to arrays
	foreach( ptc_text_type_options() as $next=>$type ) {
		array_push( $ptc_fontsize_options, $type . '_line_height' );
		array_push( $ptc_fontsize_options, $type . '_fontsize' );
	}

	// Font size options
	array_push( $ptc_fontsize_options, 'pagination_fontsize' );

	return $ptc_fontstyle_options;
}
add_action( 'ptc_hook_fontsize_options', 'ptc_add_fontsize_options' );

/**
 * Setting variable for opacity sanitization
 * @since 1.0
 */
function ptc_add_opacity_options() {
	global $ptc_opacity_options;

	// Opacity options
	array_push( $ptc_opacity_options, 'pagination_shadow_opacity' );

	return $ptc_opacity_options;
}
add_action( 'ptc_hook_opacity_options', 'ptc_add_opacity_options' );

/**
 * Setting array for image options sanitization
 * @since 1.0
 */
function ptc_add_image_options() {
	global $ptc_image_options;

	// Loop through text types adding options to arrays
	foreach( ptc_text_type_options() as $stuff=>$type ) {
		array_push( $ptc_image_options, $type . '_background_image' ); // Background image
	}

	// Image options
	array_push( $ptc_image_options, 'footer_background_image' );
	array_push( $ptc_image_options, 'sidebar_background_image' );
	array_push( $ptc_image_options, 'background_image' );
	array_push( $ptc_image_options, 'maincontent_background_image' );
	array_push( $ptc_image_options, 'header_searchbox_background_image' );
	array_push( $ptc_image_options, 'header_logo_background_image' );
	array_push( $ptc_image_options, 'banner_image' );
	array_push( $ptc_image_options, 'header_background_image' );
	array_push( $ptc_image_options, 'header_searchsubmit_text_background_image' );
	array_push( $ptc_image_options, 'header_searchbox_text_background_image' );
	array_push( $ptc_image_options, 'header_fullwidth_background_image' );
	array_push( $ptc_image_options, 'footer_fullwidth_background_image' );

	return $ptc_image_options;
}
add_action( 'ptc_hook_image_options', 'ptc_add_image_options' );

/**
 * Border type options
 * Array of options which need sanitizised as border type
 * @since 1.0
 */
function ptc_add_bordertype_options() {
	global $ptc_bordertype_options;

	// Loop through text types adding options to arrays
	foreach( ptc_text_type_options() as $stuff=>$type ) {
		array_push( $ptc_bordertype_options, $type . '_bordertop_type' ); // Border top type 
		array_push( $ptc_bordertype_options, $type . '_borderbottom_type' ); // Border bottom type  
	}

	// Border type options
	array_push( $ptc_bordertype_options, 'pagination_border_type' );

	// Adding options for block wrappers
	foreach( ptc_block_wrapper() as $next=>$type ) {
		array_push( $ptc_bordertype_options, $type . '_border_top_type' );
		array_push( $ptc_bordertype_options, $type . '_border_right_type' );
		array_push( $ptc_bordertype_options, $type . '_border_bottom_type' );
		array_push( $ptc_bordertype_options, $type . '_border_left_type' );
	}

	return $ptc_bordertype_options;
}
add_action( 'ptc_hook_bordertype_options', 'ptc_add_bordertype_options' );

/**
 * Text Transform options
 * Array of options which need sanitizised as text transform
 * @since 1.0
 */
function ptc_add_texttransform_options() {
	global $ptc_texttransform_options;

	// Loop through text types adding options to arrays
	foreach( ptc_text_type_options() as $stuff=>$type ) {
		array_push( $ptc_texttransform_options, $type . '_text_transform' ); // Text transform 
	}

	// Text transform options
	array_push( $ptc_texttransform_options, 'pagination_text_transform' );

	return $ptc_texttransform_options;
}
add_action( 'ptc_hook_texttransform_options', 'ptc_add_texttransform_options' );

/**
 * Small-caps options
 * Array of options which need sanitizised as small-caps
 * @since 1.0
 */
function ptc_add_smallcaps_options() {
	global $ptc_smallcaps_options;

	// Loop through text types adding options to arrays
	foreach( ptc_text_type_options() as $stuff=>$type ) {
		array_push( $ptc_smallcaps_options, $type . '_small_caps' ); // Small caps 
	}

	// Small-caps options
	array_push( $ptc_smallcaps_options, 'pagination_small_caps' );

	return $ptc_smallcaps_options;
}
add_action( 'ptc_hook_smallcaps_options', 'ptc_add_smallcaps_options' );

/**
 * Alignment options
 * Array of options which need sanitizised as alignment options
 * May have extra options added during the sanitization process, ie: from "text types"
 * @since 1.0
 */
function ptc_add_alignment_options() {
	global $ptc_alignment_options;

	// Alignment options
	array_push( $ptc_alignment_options, 'footer_menu_alignment' );

	return $ptc_alignment_options;
}
add_action( 'ptc_hook_alignment_options', 'ptc_add_alignment_options' );

/**
 * Centered options
 * Array of options which need sanitizised as 'centered'
 * @since 1.0
 */
function ptc_add_centered_options() {
	global $ptc_centered_options;

	// Centered options
	array_push( $ptc_centered_options, 'footer_copyright_position_centered' );
	array_push( $ptc_centered_options, 'header_heading_position_centered' );
	array_push( $ptc_centered_options, 'header_description_position_centered' );

	return $ptc_centered_options;
}
add_action( 'ptc_hook_centered_options', 'ptc_add_centered_options' );

/**
 * Display options
 * Array of options which need sanitizised as 'display'
 * @since 1.0
 */
function ptc_add_display_options() {
	global $ptc_display_options;

	// Display options
	array_push( $ptc_display_options, 'postinfo_display' );
	array_push( $ptc_display_options, 'pagination_display' );
	array_push( $ptc_display_options, 'header_searchbox_display' );
	array_push( $ptc_display_options, 'header_logo_display' );
	array_push( $ptc_display_options, 'footer_menu_display' );
	array_push( $ptc_display_options, 'footer_copyright_display' );
	array_push( $ptc_display_options, 'header_description_display' );
	array_push( $ptc_display_options, 'header_heading_display' );
	array_push( $ptc_display_options, 'header_searchsubmit_text_display' );
	array_push( $ptc_display_options, 'header_fullwidth_background_display' );
	array_push( $ptc_display_options, 'footer_fullwidth_background_display' );
	array_push( $ptc_display_options, 'background_display' );

	return $ptc_display_options;
}
add_action( 'ptc_hook_display_options', 'ptc_add_display_options' );

/**
 * Little numbers options
 * Array of options which need sanitizised as little numbers
 * @since 1.0
 */
function ptc_add_littlenumbers_options() {
	global $ptc_littlenumbers_options;

	// Loop through text types adding options to arrays
	foreach( ptc_text_type_options() as $stuff=>$type ) {
		array_push( $ptc_littlenumbers_options, $type . '_bordertop_width' ); // Border top width  
		array_push( $ptc_littlenumbers_options, $type . '_borderbottom_width' ); // Border bottom width 
		array_push( $ptc_littlenumbers_options, $type . '_margin_top' ); // Margin top   
		array_push( $ptc_littlenumbers_options, $type . '_margin_right' ); // Margin right   
		array_push( $ptc_littlenumbers_options, $type . '_margin_bottom' ); // Margin bottom   
		array_push( $ptc_littlenumbers_options, $type . '_margin_left' ); // Margin left   
		array_push( $ptc_littlenumbers_options, $type . '_padding_top' ); // Padding top   
		array_push( $ptc_littlenumbers_options, $type . '_padding_right' ); // Padding right   
		array_push( $ptc_littlenumbers_options, $type . '_padding_bottom' ); // Padding bottom   
		array_push( $ptc_littlenumbers_options, $type . '_padding_left' ); // Padding left   
	}

	// Little numbers options
	array_push( $ptc_littlenumbers_options, 'pagination_vertical_margin' );
	array_push( $ptc_littlenumbers_options, 'pagination_horizontal_margin' );
	array_push( $ptc_littlenumbers_options, 'pagination_padding' );
	array_push( $ptc_littlenumbers_options, 'pagination_border_width' );
	array_push( $ptc_littlenumbers_options, 'content_margin_top' );
	array_push( $ptc_littlenumbers_options, 'content_margin_right' );
	array_push( $ptc_littlenumbers_options, 'content_margin_bottom' );
	array_push( $ptc_littlenumbers_options, 'content_margin_left' );
	array_push( $ptc_littlenumbers_options, 'aside_padding_top' );
	array_push( $ptc_littlenumbers_options, 'aside_padding_right' );
	array_push( $ptc_littlenumbers_options, 'aside_padding_bottom' );
	array_push( $ptc_littlenumbers_options, 'aside_padding_left' );
	array_push( $ptc_littlenumbers_options, 'header_searchsubmit_text_position_y' );
	array_push( $ptc_littlenumbers_options, 'header_searchbox_text_position_x' );
	array_push( $ptc_littlenumbers_options, 'header_searchbox_text_position_y' );
	array_push( $ptc_littlenumbers_options, 'footer_verticalpadding' );
	array_push( $ptc_littlenumbers_options, 'footer_menu_gap' );

	// Adding options for block wrappers
	foreach( ptc_block_wrapper() as $next=>$type ) {
		array_push( $ptc_littlenumbers_options, $type . '_border_top_width' );
		array_push( $ptc_littlenumbers_options, $type . '_border_right_width' );
		array_push( $ptc_littlenumbers_options, $type . '_border_bottom_width' );
		array_push( $ptc_littlenumbers_options, $type . '_border_left_width' );
		array_push( $ptc_littlenumbers_options, $type . '_top_margin' );
		array_push( $ptc_littlenumbers_options, $type . '_bottom_margin' );
	}

	return $ptc_littlenumbers_options;
}
add_action( 'ptc_hook_littlenumbers_options', 'ptc_add_littlenumbers_options' );

/**
 * Big numbers options
 * Array of options which need sanitizised as big numbers
 * @since 1.0
 */
function ptc_add_bignumbers_options() {
	global $ptc_bignumbers_options;

	// Big numbers options
	array_push( $ptc_bignumbers_options, 'footer_copyright_horizontalposition' );
	array_push( $ptc_bignumbers_options, 'footer_copyright_verticalposition' );
	array_push( $ptc_bignumbers_options, 'footer_menu_horizontalposition' );
	array_push( $ptc_bignumbers_options, 'footer_menu_verticalposition' );
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
	array_push( $ptc_bignumbers_options, 'aside_1_width' );
	array_push( $ptc_bignumbers_options, 'aside_2_width' );
	array_push( $ptc_bignumbers_options, 'maincontent_minimum_width' );
	array_push( $ptc_bignumbers_options, 'maincontent_maximum_width' );
	array_push( $ptc_bignumbers_options, 'footer_max_width' );
	array_push( $ptc_bignumbers_options, 'footer_max_width' );
	array_push( $ptc_bignumbers_options, 'footer_min_width' );
	array_push( $ptc_bignumbers_options, 'footer_height' );
	array_push( $ptc_bignumbers_options, 'header_min_width' );
	array_push( $ptc_bignumbers_options, 'header_max_width' );
	array_push( $ptc_bignumbers_options, 'header_height' );
	array_push( $ptc_bignumbers_options, 'banner_max_width' );
	array_push( $ptc_bignumbers_options, 'banner_min_width' );
	array_push( $ptc_bignumbers_options, 'banner_height' );
	array_push( $ptc_bignumbers_options, 'header_searchsubmit_text_width' );
	array_push( $ptc_bignumbers_options, 'header_searchsubmit_text_height' );
	array_push( $ptc_bignumbers_options, 'header_searchbox_text_width' );
	array_push( $ptc_bignumbers_options, 'header_searchbox_text_height' );
	array_push( $ptc_bignumbers_options, 'header_searchsubmit_text_position_x' );

	return $ptc_bignumbers_options;
}
add_action( 'ptc_hook_bignumbers_options', 'ptc_add_bignumbers_options' );

/**
 * Shadow coordinates options
 * Array of options which need sanitizised as shadow coordinates
 * @since 1.0
 */
function ptc_add_shadow_coordinates_options() {
	global $ptc_shadow_coordinates_options;

	// Loop through text types adding options to arrays
	foreach( ptc_text_type_options() as $stuff=>$type ) {
		array_push( $ptc_shadow_coordinates_options, $type . '_shadow_x_coordinate' ); // Shadow X coordinate 
		array_push( $ptc_shadow_coordinates_options, $type . '_shadow_y_coordinate' ); // Shadow Y coordinate 
		array_push( $ptc_shadow_coordinates_options, $type . '_shadow_blur_radius' ); // Shadow blur radius 
	}

	// Shadow coordinate options
	array_push( $ptc_shadow_coordinates_options, 'pagination' );

	return $ptc_shadow_coordinates_options;
}
add_action( 'ptc_hook_shadow_coordinates_options', 'ptc_add_shadow_coordinates_options' );

/**
 * Image tiling options
 * Array of options which need sanitizised as image tiling
 * @since 1.0
 */
function ptc_add_imagetiling_options() {
	global $ptc_imagetiling_options;

	// Image tiling options
	array_push( $ptc_imagetiling_options, 'sidebar_background_image_tiling' );
	array_push( $ptc_imagetiling_options, 'footer_background_image_tiling' );
	array_push( $ptc_imagetiling_options, 'background_image_tiling' );
	array_push( $ptc_imagetiling_options, 'maincontent_background_image_tiling' );
	array_push( $ptc_imagetiling_options, 'background_image_tiling' );

	return $ptc_imagetiling_options;
}
add_action( 'ptc_hook_imagetiling_options', 'ptc_add_imagetiling_options' );

/**
 * Font Family options
 * Array of options which need sanitizised as font family
 * @since 1.0
 */
function ptc_add_fontfamily_options() {
	global $ptc_fontfamily_options;

	// Loop through text types adding options to arrays
	foreach( ptc_text_type_options() as $stuff=>$type ) {
		array_push( $ptc_fontfamily_options, $type . '_fontfamily' ); // Font family
	}

	// Font family options
	array_push( $ptc_fontfamily_options, 'pagination_fontfamily' );

	return $ptc_fontfamily_options;
}
add_action( 'ptc_hook_fontfamily_options', 'ptc_add_fontfamily_options' );

/**
 * Text decoration options
 * Array of options which need sanitizised as text decoration
 * @since 1.0
 */
function ptc_add_textdecoration_options() {
	global $ptc_textdecoration_options;

	// Loop through text types adding options to arrays
	foreach( ptc_text_type_options() as $stuff=>$type ) {
		array_push( $ptc_textdecoration_options, $type . '_textdecoration' ); // Text decoration
	}

	// Text decoration options
	array_push( $ptc_textdecoration_options, 'pagination_fontfamily' );
	array_push( $ptc_textdecoration_options, 'pagination_textdecoration' );
	array_push( $ptc_textdecoration_options, 'links_textdecoration' );
	array_push( $ptc_textdecoration_options, 'links_hover_textdecoration' );

	return $ptc_textdecoration_options;
}
add_action( 'ptc_hook_textdecoration_options', 'ptc_add_textdecoration_options' );

