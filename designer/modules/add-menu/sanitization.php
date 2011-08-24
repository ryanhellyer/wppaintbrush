<?php
/**
 * @package WordPress
 * @subpackage WP Paintbrush
 * @subpackage WP Paintbrush Extra Widgets
 * @since WP Paintbrush Extra Widgets 0.1
 *
 * Sanitization options for WP Paintbrush Extra Widgets plugin
 */


/* Setting variables for colour sanitization
 * @since 0.1
 */
function ptc_addmenu_colour_options_hook() {
	global $ptc_colour_options;

	array_push( $ptc_colour_options, 'menu1_hover_background_colour' );
	array_push( $ptc_colour_options, 'menu1_background_colour' );
	array_push( $ptc_colour_options, 'menu1_hover_textcolour' );
	array_push( $ptc_colour_options, 'menu1_items_background_colour' );
	array_push( $ptc_colour_options, 'menu1_fullwidth_background_colour' );

	return $ptc_colour_options;
}
add_action( 'ptc_hook_colour_options', 'ptc_addmenu_colour_options_hook' );

/* Setting variables for little number sanitization
 * @since 0.1
 */
function ptc_addmenu_littlenumbers_options_hook() {
	global $ptc_littlenumbers_options;

	array_push( $ptc_littlenumbers_options, 'menu1_shadow_x_coordinate' );
	array_push( $ptc_littlenumbers_options, 'menu1_shadow_y_coordinate' );
	array_push( $ptc_littlenumbers_options, 'menu1_shadow_blur_radius' );

	return $ptc_littlenumbers_options;
}
add_action( 'ptc_hook_littlenumbers_options', 'ptc_addmenu_littlenumbers_options_hook' );

/* Setting variables for big number sanitization
 * @since 0.1
 */
function ptc_addmenu_bignumbers_options_hook() {
	global $ptc_bignumbers_options;

	array_push( $ptc_bignumbers_options, 'menu1_max_width' );
	array_push( $ptc_bignumbers_options, 'menu1_min_width' );
	array_push( $ptc_bignumbers_options, 'menu1_indent' );

	return $ptc_littlenumbers_options;
}
add_action( 'ptc_hook_bignumbers_options', 'ptc_addmenu_bignumbers_options_hook' );

/* Setting variables for display sanitization
 * @since 1.0
 */
function ptc_addmenu_display_options() {
	global $ptc_display_options;

	// Display options
	array_push( $ptc_display_options, 'menu1_fullwidth_background_display' );

	return $ptc_display_options;
}
add_action( 'ptc_hook_display_options', 'ptc_addmenu_display_options' );

/* Setting variables for image tiling sanitization
 * @since 0.1
 */
function ptc_addmenu_image_options_hook() {
	global $ptc_image_options;

	array_push( $ptc_image_options, 'menu1_background_image' );
	array_push( $ptc_image_options, 'menu1_items_background_image' );
	array_push( $ptc_image_options, 'menu1_hover_background_image' );
	array_push( $ptc_image_options, 'menu1_fullwidth_background_image' );

	return $ptc_image_options;
}
add_action( 'ptc_hook_image_options', 'ptc_addmenu_image_options_hook' );

/* Setting variables for font weight sanitization
 * @since 1.0
 */
function ptc_addmenu_fontweight_options() {
	global $ptc_fontweight_options;

	// Bold options
	array_push( $ptc_fontweight_options, 'menu1_hover_font_weight' );

	return $ptc_fontweight_options;
}
add_action( 'ptc_hook_fontweight_options', 'ptc_addmenu_fontweight_options' );

/* Setting variables for font style sanitization
 * @since 1.0
 */
function ptc_addmenu_fontstyle_options() {
	global $ptc_fontstyle_options;

	// Style options
	array_push( $ptc_fontstyle_options, 'menu1_hover_font_style' );

	return $ptc_fontstyle_options;
}
add_action( 'ptc_hook_fontstyle_options', 'ptc_addmenu_fontstyle_options' );

/**
/* Setting variables for text decoration sanitization
 * @since 1.0
 */
function ptc_addmenu_textdecoration_options() {
	global $ptc_textdecoration_options;

	// Text decoration options
	array_push( $ptc_textdecoration_options, 'menu1_hover_textdecoration' );

	return $ptc_textdecoration_options;
}
add_action( 'ptc_hook_textdecoration_options', 'ptc_addmenu_textdecoration_options' );

/*
 * Text type sanitization
 * @since 0.1
 */
function ptc_addmenu_text_type_options_hook() {
	global $texttype;

	// Other text options
	array_push( $texttype, 'menu1' );

	return $texttype;
}
add_action( 'ptc_hook_text_type_options', 'ptc_addmenu_text_type_options_hook' );

