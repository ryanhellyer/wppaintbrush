<?php
/**
 * @package WordPress
 * @subpackage WP Paintbrush
 * @since WP Paintbrush 1.0
 *
 * Sanitization specific to text
 * todo: Some code from sanitization-theme.php could be moved into this file
 */


/**
 * Text type suffixes
 * @since 0.1
 */
function ptc_text_options() {

	// Add text options
	$options = array(
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

	foreach( ptc_slider_options() as $option=>$opt ) {
		array_push( $options, $opt );
	}

	return $options;
}

/**
 * Text type prefixes
 * Added to ptc_text_options() for "slider" options
 * @since 0.1
 */
function ptc_slider_options() {

	// Add text options
	$options = array(
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
	return $options;
}

/**
 * Text type prefixes
 * Text types are a specific set which use a standardized list of text specific options
 * @since 0.9
 */
function ptc_text_type_options() {
	global $texttype;

	$texttype = array();

	// text type hook
	do_action( 'ptc_hook_text_type_options' );

	return $texttype;
}
