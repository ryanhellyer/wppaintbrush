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
function wppb_bordertype_options() {
	global $wppb_bordertype_options;

	$wppb_bordertype_options = array();
	do_action( 'wppb_hook_bordertype_options' );

	return $wppb_bordertype_options;
}

/**
 * Text Transform options
 * Array of options which need sanitizised as text transform
 * @since 0.9
 */
function wppb_texttransform_options() {
	global $wppb_texttransform_options;

	$wppb_texttransform_options = array();
	do_action( 'wppb_hook_texttransform_options' );

	return $wppb_texttransform_options;
}

/**
 * Small-caps options
 * Array of options which need sanitizised as small-caps
 * @since 0.9
 */
function wppb_smallcaps_options() {
	global $wppb_smallcaps_options;

	$wppb_smallcaps_options = array();
	do_action( 'wppb_hook_smallcaps_options' );

	return $wppb_smallcaps_options;
}

/**
 * Font size options
 * Array of options which need sanitizised as font size
 * @since 0.9
 */
function wppb_fontsize_options() {
	global $wppb_fontsize_options;

	$wppb_fontsize_options = array();
	do_action( 'wppb_hook_fontsize_options' );

	return $wppb_fontsize_options;
}

/**
 * Opacity options
 * Array of options which need sanitizised as opacity
 * @since 0.9
 */
function wppb_opacity_options() {
	global $wppb_opacity_options;

	$wppb_opacity_options = array();
	do_action( 'wppb_hook_opacity_options' );

	return $wppb_opacity_options;
}

/**
 * Text decoration options
 * Array of options which need sanitizised as text decoration
 * @since 0.9
 */
function wppb_textdecoration_options() {
	global $wppb_textdecoration_options;

	$wppb_textdecoration_options = array();
	do_action( 'wppb_hook_textdecoration_options' );

	return $wppb_textdecoration_options;
}

/**
 * Font family options
 * Array of options which need sanitizised as font family
 * @since 0.9
 */
function wppb_fontfamily_options() {
	global $wppb_fontfamily_options;

	$wppb_fontfamily_options = array();
	do_action( 'wppb_hook_fontfamily_options' );

	return $wppb_fontfamily_options;
}

/**
 * Font style options
 * Array of options which need sanitizised as font style
 * @since 0.9
 */
function wppb_fontstyle_options() {
	global $wppb_fontstyle_options;

	$wppb_fontstyle_options = array();
	do_action( 'wppb_hook_fontstyle_options' );

	return $wppb_fontstyle_options;
}

/**
 * Font weight options
 * Array of options which need sanitizised as font weight
 * @since 0.9
 */
function wppb_fontweight_options() {
	global $wppb_fontweight_options;

	$wppb_fontweight_options = array();
	do_action( 'wppb_hook_fontweight_options' );

	return $wppb_fontweight_options;
}

/**
 * Image options
 * Array of options which need sanitizised as images
 * @since 0.9
 */
function wppb_image_options() {
	global $wppb_image_options;

	$wppb_image_options = array();
	do_action( 'wppb_hook_image_options' );

	return $wppb_image_options;
}

/**
 * Colour options
 * Array of options which need sanitizised as hex colour
 * @since 0.9
 */
function wppb_colour_options() {
	global $wppb_colour_options;

	$wppb_colour_options = array();
	do_action( 'wppb_hook_colour_options' );

	return $wppb_colour_options;
}

/**
 * Alignment options
 * Array of options which need sanitizised as alignment options
 * @since 0.9
 */
function wppb_alignment_options() {
	global $wppb_alignment_options;

	$wppb_alignment_options = array();
	do_action( 'wppb_hook_alignment_options' );

	return $wppb_alignment_options;
}

/**
 * Centered options
 * Array of options which need sanitizised as 'centered'
 * @since 0.9
 */
function wppb_centered_options() {
	global $wppb_centered_options;

	// Centered options
	$wppb_centered_options = array();
	do_action( 'wppb_hook_centered_options' );

	return $wppb_centered_options;
}

/**
 * Display options
 * Array of options which need sanitizised as 'display'
 * @since 0.9
 */
function wppb_display_options() {
	global $wppb_display_options;

	// Centered options
	$wppb_display_options = array();
	do_action( 'wppb_hook_display_options' );

	return $wppb_display_options;
}

/**
 * Little numbers options
 * Array of options which need sanitizised as little numbers
 * @since 0.9
 */
function wppb_littlenumbers_options() {
	global $wppb_littlenumbers_options;

	// Centered options
	$wppb_littlenumbers_options = array();
	do_action( 'wppb_hook_littlenumbers_options' );

	return $wppb_littlenumbers_options;
}

/**
 * Big numbers options
 * Array of options which need sanitizised as big numbers
 * @since 0.9
 */
function wppb_bignumbers_options() {
	global $wppb_bignumbers_options;

	// Big numbers options
	$wppb_bignumbers_options = array();
	do_action( 'wppb_hook_bignumbers_options' );

	return $wppb_bignumbers_options;
}

/**
 * Shadow coordinates options
 * Array of options which need sanitizised as shadow coordinates
 * @since 0.9
 */
function wppb_shadow_coordinates_options() {
	global $wppb_shadow_coordinates_options;

	// Shadow coordinate options
	$wppb_shadow_coordinates_options = array();
	do_action( 'wppb_hook_shadow_coordinates_options' );

	return $wppb_shadow_coordinates_options;
}

/**
 * Image tiling options
 * Array of options which need sanitizised as image tiling
 * @since 0.9
 */
function wppb_imagetiling_options() {
	global $wppb_imagetiling_options;

	// Shadow coordinate options
	$wppb_imagetiling_options = array();
	do_action( 'wppb_hook_imagetiling_options' );

	return $wppb_imagetiling_options;
}

/**
 * Text options
 * Array of options which need sanitizised as text
 * @since 1.0
 */
function wppb_rawtext_options() {
	global $wppb_rawtext_options;

	// Raw text options
	$wppb_rawtext_options = array();
	do_action( 'wppb_hook_rawtext_options' );

	return $wppb_rawtext_options;
}

