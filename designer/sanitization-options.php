<?php
/**
 * @package WordPress
 * @subpackage WP Paintbrush
 * @since WP Paintbrush 1.0
 *
 * Loads the arrays containing the various options avaialble
 * Designed to be hooked into via plugins
 * Standard options are added via the sanitization-theme.php file
 */


/**
 * Border type options
 * Array of options which need sanitizised as border type
 * @since 0.9
 */
function ptc_bordertype_options() {
	global $ptc_bordertype_options;

	$ptc_bordertype_options = array();
	do_action( 'ptc_hook_bordertype_options' );

	return $ptc_bordertype_options;
}

/**
 * Text Transform options
 * Array of options which need sanitizised as text transform
 * @since 0.9
 */
function ptc_texttransform_options() {
	global $ptc_texttransform_options;

	$ptc_texttransform_options = array();
	do_action( 'ptc_hook_texttransform_options' );

	return $ptc_texttransform_options;
}

/**
 * Small-caps options
 * Array of options which need sanitizised as small-caps
 * @since 0.9
 */
function ptc_smallcaps_options() {
	global $ptc_smallcaps_options;

	$ptc_smallcaps_options = array();
	do_action( 'ptc_hook_smallcaps_options' );

	return $ptc_smallcaps_options;
}

/**
 * Font size options
 * Array of options which need sanitizised as font size
 * @since 0.9
 */
function ptc_fontsize_options() {
	global $ptc_fontsize_options;

	$ptc_fontsize_options = array();
	do_action( 'ptc_hook_fontsize_options' );

	return $ptc_fontsize_options;
}

/**
 * Opacity options
 * Array of options which need sanitizised as opacity
 * @since 0.9
 */
function ptc_opacity_options() {
	global $ptc_opacity_options;

	$ptc_opacity_options = array();
	do_action( 'ptc_hook_opacity_options' );

	return $ptc_opacity_options;
}

/**
 * Text decoration options
 * Array of options which need sanitizised as text decoration
 * @since 0.9
 */
function ptc_textdecoration_options() {
	global $ptc_textdecoration_options;

	$ptc_textdecoration_options = array();
	do_action( 'ptc_hook_textdecoration_options' );

	return $ptc_textdecoration_options;
}

/**
 * Font family options
 * Array of options which need sanitizised as font family
 * @since 0.9
 */
function ptc_fontfamily_options() {
	global $ptc_fontfamily_options;

	$ptc_fontfamily_options = array();
	do_action( 'ptc_hook_fontfamily_options' );

	return $ptc_fontfamily_options;
}

/**
 * Font style options
 * Array of options which need sanitizised as font style
 * @since 0.9
 */
function ptc_fontstyle_options() {
	global $ptc_fontstyle_options;

	$ptc_fontstyle_options = array();
	do_action( 'ptc_hook_fontstyle_options' );

	return $ptc_fontstyle_options;
}

/**
 * Font weight options
 * Array of options which need sanitizised as font weight
 * @since 0.9
 */
function ptc_fontweight_options() {
	global $ptc_fontweight_options;

	$ptc_fontweight_options = array();
	do_action( 'ptc_hook_fontweight_options' );

	return $ptc_fontweight_options;
}

/**
 * Image options
 * Array of options which need sanitizised as images
 * @since 0.9
 */
function ptc_image_options() {
	global $ptc_image_options;

	$ptc_image_options = array();
	do_action( 'ptc_hook_image_options' );

	return $ptc_image_options;
}

/**
 * Colour options
 * Array of options which need sanitizised as hex colour
 * @since 0.9
 */
function ptc_colour_options() {
	global $ptc_colour_options;

	$ptc_colour_options = array();
	do_action( 'ptc_hook_colour_options' );

	return $ptc_colour_options;
}

/**
 * Alignment options
 * Array of options which need sanitizised as alignment options
 * @since 0.9
 */
function ptc_alignment_options() {
	global $ptc_alignment_options;

	$ptc_alignment_options = array();
	do_action( 'ptc_hook_alignment_options' );

	return $ptc_alignment_options;
}

/**
 * Centered options
 * Array of options which need sanitizised as 'centered'
 * @since 0.9
 */
function ptc_centered_options() {
	global $ptc_centered_options;

	// Centered options
	$ptc_centered_options = array();
	do_action( 'ptc_hook_centered_options' );

	return $ptc_centered_options;
}

/**
 * Display options
 * Array of options which need sanitizised as 'display'
 * @since 0.9
 */
function ptc_display_options() {
	global $ptc_display_options;

	// Centered options
	$ptc_display_options = array();
	do_action( 'ptc_hook_display_options' );

	return $ptc_display_options;
}

/**
 * Little numbers options
 * Array of options which need sanitizised as little numbers
 * @since 0.9
 */
function ptc_littlenumbers_options() {
	global $ptc_littlenumbers_options;

	// Centered options
	$ptc_littlenumbers_options = array();
	do_action( 'ptc_hook_littlenumbers_options' );

	return $ptc_littlenumbers_options;
}

/**
 * Big numbers options
 * Array of options which need sanitizised as big numbers
 * @since 0.9
 */
function ptc_bignumbers_options() {
	global $ptc_bignumbers_options;

	// Big numbers options
	$ptc_bignumbers_options = array();
	do_action( 'ptc_hook_bignumbers_options' );

	return $ptc_bignumbers_options;
}

/**
 * Shadow coordinates options
 * Array of options which need sanitizised as shadow coordinates
 * @since 0.9
 */
function ptc_shadow_coordinates_options() {
	global $ptc_shadow_coordinates_options;

	// Shadow coordinate options
	$ptc_shadow_coordinates_options = array();
	do_action( 'ptc_hook_shadow_coordinates_options' );

	return $ptc_shadow_coordinates_options;
}

/**
 * Image tiling options
 * Array of options which need sanitizised as image tiling
 * @since 0.9
 */
function ptc_imagetiling_options() {
	global $ptc_imagetiling_options;

	// Shadow coordinate options
	$ptc_imagetiling_options = array();
	do_action( 'ptc_hook_imagetiling_options' );

	return $ptc_imagetiling_options;
}

/**
 * Text options
 * Array of options which need sanitizised as text
 * @since 1.0
 */
function ptc_rawtext_options() {
	global $ptc_rawtext_options;

	// Raw text options
	$ptc_rawtext_options = array();
	do_action( 'ptc_hook_rawtext_options' );

	return $ptc_rawtext_options;
}
