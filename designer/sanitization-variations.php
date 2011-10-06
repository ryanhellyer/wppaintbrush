<?php
/**
 * @package WordPress
 * @subpackage WP Paintbrush
 * @since WP Paintbrush 1.0
 *
 * Sets the possible options for various settings
 * Used for data sanitization to confirm that only valid values are used
 */


/* Array of possible border type variations
 * @since 0.1
 */
function wppb_bordertype_variations() {
	// Default border type options
	$possible = array(
		'solid',
		'dotted',
		'dashed',
	);
	return $possible;
}

/* Array of possible font family variations
 * @since 0.1
 */
function wppb_font_family() {
	// Default font options
	$possible = array(
		'Georgia, serif',
		'Courier, monospace',
		'Zapf-chancery, cursive',
		'Western, fantasy',
		'Verdana, sans-serif',
		'Helvetica Neue, Arial',
		'Times, serif',
	);

	// Adding options from WP Paintbrush Fonts plugin
	if ( function_exists( 'wppb_embeddable_fonts' ) ) {
		foreach ( wppb_embeddable_fonts() as $font => $details ) {
			if ( 'on' == get_wppb_font_option( 'fontembed_' . $font ) )
				array_push( $possible, "'" . $font . "', sans-serif" );
		}
	}

	return $possible;
}

/* Array of possible text decoration variations
 * @since 0.1
 */
function wppb_textdecoration_variations() {
	$possible = array(
		'none',
		'overline',
		'line-through',
		'underline',
	);
	return $possible;
}

/* Array of possible alignment variations
 * @since 0.1
 */
function wppb_alignment_variations() {
	$possible = array(
		'Left'   => 'Left',
		'Center' => 'Center',
		'Right'  => 'Right',
	);
	return $possible;
}

/* Array of possible text transform variations
 * @since 0.1
 */
function wppb_texttransform_variations() {
	$possible = array(
		'uppercase',
		'lowercase',
		'capitalize',
		'none',
	);
	return $possible;
}

/* Array of possible image tiling variations
 * @since 0.1
 */
function wppb_imagetiling_variations() {
	$possible = array(
		'no-repeat' => 'No repeat',
		'repeat-x'  => 'Repeat Horizontally',
		'repeat'    => 'Repeat',
		'repeat-y'  => 'Repeat vertically',
	);
	return $possible;
}

/* Array of possible Small caps variations
 * @since 0.1
 */
function wppb_smallcaps_variations() {
	$possible = array(
		'small-caps'  => 'Small caps',
		'normal'      => 'Normal',
	);
	return $possible;
}

