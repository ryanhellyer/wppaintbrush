<?php
/**
 * @package WordPress
 * @subpackage WP Paintbrush
 * @since WP Paintbrush 1.0
 *
 * Sanitization specific to text
 */


/**
 * Text type suffixes
 * @since 0.1
 */
function wppb_text_options() {

	// Add text options
	$wppb_options = array(
		'_fontfamily',
		'_textcolour',
		'_font_weight',
		'_font_style',
		'_text_transform',
		'_small_caps',
		'_textdecoration',
		'_shadow_colour',
		'_bordertop_colour',
		'_borderbottom_colour',
		'_bordertop_type',
		'_borderbottom_type',
		'_background_colour',
		'_background_image',
	);

	foreach( wppb_slider_options() as $option=>$opt ) {
		array_push( $wppb_options, $opt );
	}

	return $wppb_options;
}

/**
 * Text type prefixes
 * Added to wppb_text_options() for "slider" options
 * @since 0.1
 */
function wppb_slider_options() {

	// Add text options
	$wppb_options = array(
		'_fontsize',
		'_line_height',
		'_shadow_x_coordinate',
		'_shadow_y_coordinate',
		'_shadow_blur_radius',
		'_shadow_opacity',
		'_bordertop_width',
		'_borderbottom_width',
		'_margin_top',
		'_margin_right',
		'_margin_bottom',
		'_margin_left',
		'_padding_top',
		'_padding_right',
		'_padding_bottom',
		'_padding_left',
	);
	return $wppb_options;
}

/**
 * Text type prefixes
 * Text types are a specific set which use a standardized list of text specific options
 * @since 0.9
 */
function wppb_text_type_options() {
	global $wppb_texttype;

	$wppb_texttype = array();

	// text type hook
	do_action( 'wppb_hook_text_type_options' );

	// Hook for plugins to filter the value
	$wppb_texttype = apply_filters ( 'wppb_text_type_filter' , $wppb_texttype );

	return $wppb_texttype;
}

/* Add colours to be sanitized, to the global array
 * @since 1.0
 */
function wppb_colour_filter( $wppb_colour_options ) {

	// Colour options
	foreach( wppb_text_type_options() as $stuff=>$type ) {
		array_push( $wppb_colour_options, $type . '_textcolour' ); // Text colour
		array_push( $wppb_colour_options, $type . '_shadow_colour' ); // Shadow colour
		array_push( $wppb_colour_options, $type . '_bordertop_colour' ); // Border top colour
		array_push( $wppb_colour_options, $type . '_borderbottom_colour' ); // Border bottom colour
		array_push( $wppb_colour_options, $type . '_background_colour' ); // Background colour
	}	

	return $wppb_colour_options;
}
add_filter( 'wppb_colour_filter', 'wppb_colour_filter' );


/* Setting variables for font weight sanitization
 * @since 1.0
 */
function wppb_add_fontweight_filter( $wppb_fontweight_options ) {

	// Bold options
	foreach( wppb_text_type_options() as $stuff=>$type ) {
		array_push( $wppb_fontweight_options, $type . '_font_weight' ); // Font weight
	}

	return $wppb_fontweight_options;
}
add_action( 'wppb_fontweight_filter', 'wppb_add_fontweight_filter' );

/**
 * Font style options
 * Array of options which need sanitizised as font style
 * @since 1.0
 */
function wppb_add_fontstyle_filter( $wppb_fontstyle_options ) {

	// Setting variable
	if ( !isset( $wppb_fontstyle_options ) )
		$wppb_fontstyle_options = '';

	// Style options
	foreach( wppb_text_type_options() as $stuff=>$type ) {
		array_push( $wppb_fontstyle_options, $type . '_font_style' ); // Font style
	}

	return $wppb_fontstyle_options;
}
add_action( 'wppb_fontstyle_filter', 'wppb_add_fontstyle_filter' );

/**
 * Setting variables for Font size sanitization
 * @since 1.0
 */
function wppb_add_fontsize_filter( $wppb_fontsize_options ) {

	// Font size options
	foreach( wppb_text_type_options() as $next=>$type ) {
		array_push( $wppb_fontsize_options, $type . '_line_height' );
		array_push( $wppb_fontsize_options, $type . '_fontsize' );
	}

	return $wppb_fontsize_options;
}
add_action( 'wppb_fontsize_filter', 'wppb_add_fontsize_filter' );

/**
 * Setting array for image options sanitization
 * @since 1.0
 */
function wppb_add_image_filter( $wppb_image_options ) {

	// Image options
	foreach( wppb_text_type_options() as $stuff=>$type ) {
		array_push( $wppb_image_options, $type . '_background_image' ); // Background image
	}

	return $wppb_image_options;
}
add_action( 'wppb_image_filter', 'wppb_add_image_filter' );

/**
 * Border type options
 * Array of options which need sanitizised as border type
 * @since 1.0
 */
function wppb_add_bordertype_filter( $wppb_bordertype_options ) {

	// Border type options
	foreach( wppb_text_type_options() as $stuff=>$type ) {
		array_push( $wppb_bordertype_options, $type . '_bordertop_type' ); // Border top type 
		array_push( $wppb_bordertype_options, $type . '_borderbottom_type' ); // Border bottom type  
	}

	return $wppb_bordertype_options;
}
add_action( 'wppb_bordertype_filter', 'wppb_add_bordertype_filter' );

/**
 * Text Transform options
 * Array of options which need sanitizised as text transform
 * @since 1.0
 */
function wppb_add_texttransform_filter( $wppb_texttransform_options ) {

	// Text transform options
	foreach( wppb_text_type_options() as $stuff=>$type ) {
		array_push( $wppb_texttransform_options, $type . '_text_transform' ); // Text transform 
	}

	return $wppb_texttransform_options;
}
add_action( 'wppb_texttransform_filter', 'wppb_add_texttransform_filter' );

/**
 * Small-caps options
 * Array of options which need sanitizised as small-caps
 * @since 1.0
 */
function wppb_add_smallcaps_filter( $wppb_smallcaps_options ) {

	// Small-caps options
	foreach( wppb_text_type_options() as $stuff=>$type ) {
		array_push( $wppb_smallcaps_options, $type . '_small_caps' ); // Small caps 
	}

	return $wppb_smallcaps_options;
}
add_action( 'wppb_smallcaps_filter', 'wppb_add_smallcaps_filter' );

/**
 * Little numbers options
 * Array of options which need sanitizised as little numbers
 * @since 1.0
 */
function wppb_add_littlenumbers_filter( $wppb_littlenumbers_options ) {

	// Little numbers options
	foreach( wppb_text_type_options() as $stuff=>$type ) {
		array_push( $wppb_littlenumbers_options, $type . '_bordertop_width' ); // Border top width  
		array_push( $wppb_littlenumbers_options, $type . '_borderbottom_width' ); // Border bottom width 
		array_push( $wppb_littlenumbers_options, $type . '_margin_top' ); // Margin top   
		array_push( $wppb_littlenumbers_options, $type . '_margin_right' ); // Margin right   
		array_push( $wppb_littlenumbers_options, $type . '_margin_bottom' ); // Margin bottom   
		array_push( $wppb_littlenumbers_options, $type . '_margin_left' ); // Margin left   
		array_push( $wppb_littlenumbers_options, $type . '_padding_top' ); // Padding top   
		array_push( $wppb_littlenumbers_options, $type . '_padding_right' ); // Padding right   
		array_push( $wppb_littlenumbers_options, $type . '_padding_bottom' ); // Padding bottom   
		array_push( $wppb_littlenumbers_options, $type . '_padding_left' ); // Padding left   
	}

	return $wppb_littlenumbers_options;
}
add_action( 'wppb_littlenumbers_filter', 'wppb_add_littlenumbers_filter' );

/**
 * Shadow coordinates options
 * Array of options which need sanitizised as shadow coordinates
 * @since 1.0
 */
function wppb_add_shadow_coordinates_filter( $wppb_shadow_coordinates_options ) {

	// Shadow coordinate options
	foreach( wppb_text_type_options() as $stuff=>$type ) {
		array_push( $wppb_shadow_coordinates_options, $type . '_shadow_x_coordinate' ); // Shadow X coordinate 
		array_push( $wppb_shadow_coordinates_options, $type . '_shadow_y_coordinate' ); // Shadow Y coordinate 
		array_push( $wppb_shadow_coordinates_options, $type . '_shadow_blur_radius' ); // Shadow blur radius 
	}
	return $wppb_shadow_coordinates_options;
}
add_action( 'wppb_shadow_coordinates_filter', 'wppb_add_shadow_coordinates_filter' );

/**
 * Font Family options
 * Array of options which need sanitizised as font family
 * @since 1.0
 */
function wppb_add_fontfamily_filter( $wppb_fontfamily_options ) {

	// Font family options
	foreach( wppb_text_type_options() as $stuff=>$type ) {
		array_push( $wppb_fontfamily_options, $type . '_fontfamily' ); // Font family
	}

	return $wppb_fontfamily_options;
}
add_action( 'wppb_fontfamily_filter', 'wppb_add_fontfamily_filter' );

/**
 * Text decoration options
 * Array of options which need sanitizised as text decoration
 * @since 1.0
 */
function wppb_add_textdecoration_filter( $wppb_textdecoration_options ) {

	// Text decoration options
	foreach( wppb_text_type_options() as $stuff=>$type ) {
		array_push( $wppb_textdecoration_options, $type . '_textdecoration' ); // Text decoration
	}

	return $wppb_textdecoration_options;
}
add_action( 'wppb_textdecoration_filter', 'wppb_add_textdecoration_filter' );

