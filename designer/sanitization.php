<?php
/**
 * @package WordPress
 * @subpackage WP Paintbrush
 * @since WP Paintbrush 0.9
 *
 * Functions used for sanitization of designer inputs
 *
 * Many functions are used to generate an array which contains every possible option
 * All options in this array are given a value with an error message.
 *
 * Individual functions are used to determine which sanitization method to used for specific options
 * Error messages are removed from each option during this sanitization process.
 *
 * Errors are served, followed by removal of errors during sanitization to allow for easier debugging.
 */


/**
 * Do not continue processing since file was called directly
 * @since 0.1
 */
if ( !defined( 'ABSPATH' ) )
	die( 'Eh! What you doin in here?' );

/* Main function used for sanitization of data inputs
 * @since 0.1
 */
function wppb_sanitize_inputs( $input='' ) {

	// Grab from POST
	if ( '' == $input )
		$input = $_POST;

	// If no data loaded, then grab from database (presumably because on initial page load instead of loading via AJAX)
	if ( '' == $input )
		$input = get_option( WPPB_DESIGNER_SETTINGS );

	// Processing entire POST to array with errors (replaced later with correct values - used for debugging purposes)
	foreach( wppb_ajax_option_get() as $option ) {
		if ( isset( $input[$option] ) ) {
			$wppb_design_settings[$option] = 'Sanitization error!';
		}
	}

	// Sanitizing CSS
	if ( isset( $input['add_custom_css'] ) )
		$wppb_design_settings['add_custom_css'] = pixopoint_validate_css( $input['add_custom_css'] ); // Sanitizing CSS

	// Setting arrays of options
	$wppb_fontfamily_options = wppb_fontfamily_options(); // Font family
	$wppb_colour_options = wppb_colour_options(); // Text colour
	$wppb_fontweight_options = wppb_fontweight_options(); // Font weight
	$wppb_smallcaps_options = wppb_smallcaps_options(); // Small caps
	$wppb_textdecoration_options = wppb_textdecoration_options(); // Text decoration
	$wppb_texttransform_options = wppb_texttransform_options(); // Text transform
	$wppb_image_options = wppb_image_options(); // Images
	$wppb_imagetiling_options = wppb_imagetiling_options(); // Image tiling
	$wppb_bignumbers_options = wppb_bignumbers_options(); // Big numbers
	$wppb_littlenumbers_options = wppb_littlenumbers_options(); // Little numbers
	$wppb_opacity_options = wppb_opacity_options(); // Opacity
	$wppb_display_options = wppb_display_options(); // Display
	$wppb_centered_options = wppb_centered_options(); // Centered?
	$wppb_alignment_options = wppb_alignment_options(); // Alignment
	$wppb_bordertype_options = wppb_bordertype_options(); // Border type
	$wppb_fontstyle_options = wppb_fontstyle_options(); // Font style
	$wppb_fontsize_options = wppb_fontsize_options(); // Font size - also line heights
	$wppb_shadow_coordinates_options = wppb_shadow_coordinates_options(); // Shadow coordinates
	$wppb_rawtext_options = wppb_rawtext_options(); // Text

	// Sanitizing the added custom CSS (only one option for this so need for accessing from array)
	if ( empty( $wppb_design_settings['add_custom_css'] ) )
		$wppb_design_settings['add_custom_css'] = '';
	$wppb_design_settings['add_custom_css'] = pixopoint_validate_css( $input['add_custom_css'] );

	// Sanitizing font size options
	foreach( $wppb_fontsize_options as $stuff=>$opt ) {
		if ( !isset( $input[$opt] ) )
			$input[$opt] = '';
		if ( is_numeric( $input[$opt] ) ) {
				if ( $input[$opt] > 4 AND $input[$opt] < 120 )
					$wppb_design_settings[$opt] = $input[$opt];
				else
					$wppb_design_settings[$opt] = '12';
		}
	}

	// Sanitizing Font family options
	foreach( $wppb_fontfamily_options as $stuff=>$opt ) {
		// Loop through all variations 
		foreach( wppb_font_family() as $variation ) {
			if ( !isset( $input[$opt] ) )
				$input[$opt] = '';
			// Correcting escaped characters
			$input[$opt] = str_replace( "\'", "'", $input[$opt] );

			// Setting option if matches possible variation			
			if ( $input[$opt] == $variation )
				$wppb_design_settings[$opt] = $input[$opt];
		}
		// If no variation selected, then default to helvetica
		if ( '' == $input[$opt] )
			$wppb_design_settings[$opt] = "'Helvetica Neue', Arial, Helvetica, 'Nimbus Sans L', sans-serif";
	}

	// Sanitizing colour options
	foreach( $wppb_colour_options as $stuff=>$opt ) {
		if ( !isset( $input[$opt] ) )
			$input[$opt] = '';
		$wppb_design_settings[$opt] = wppb_sanitize_hex_colour( $input[$opt] );
	}

	// Sanitizing image options
	foreach( $wppb_image_options as $stuff=>$opt ) {
		if ( !isset( $input[$opt] ) )
			$input[$opt] = '';
		$wppb_design_settings[$opt] = sanitize_file_name( $input[$opt] );
	}

	// Sanitizing image tiling options
	foreach( $wppb_imagetiling_options as $stuff=>$opt ) {
		if ( !isset( $input[$opt] ) )
			$input[$opt] = '';
		// Loop through all variations 
		foreach( wppb_imagetiling_variations() as $variation=>$text ) {
			if ( $input[$opt] == $variation )
				$wppb_design_settings[$opt] = $input[$opt];		
		}
		// If no variation selected, then default to "repeat"
		if ( !isset( $wppb_design_settings[$opt] ) )
			$wppb_design_settings[$opt] = '';
		if ( '' == $wppb_design_settings[$opt] )
			$wppb_design_settings[$opt] = 'repeat';
	}
	
	// Sanitizing Small-caps options
	foreach( $wppb_smallcaps_options as $stuff=>$opt ) {
		if ( !isset( $input[$opt] ) )
			$input[$opt] = '';
		// Loop through all variations 
		foreach( wppb_smallcaps_variations() as $variation=>$text ) {
			if ( $input[$opt] == $variation )
				$wppb_design_settings[$opt] = $input[$opt];		
		}
		if ( !isset( $wppb_design_settings[$opt] ) )
			$wppb_design_settings[$opt] = '';
		// If no variation selected, then default to "repeat"
		if ( '' == $wppb_design_settings[$opt] )
			$wppb_design_settings[$opt] = 'normal';
	}

	// Sanitizing font weight options
	foreach( $wppb_fontweight_options as $stuff=>$opt ) {
		if ( !isset( $input[$opt] ) )
			$input[$opt] = '';
		if ( 'bold' == $input[$opt] )
			$wppb_design_settings[$opt] = 'bold';
		elseif ( 'inherit' == $input[$opt] )
			$wppb_design_settings[$opt] = 'inherit';
		else
			$wppb_design_settings[$opt] = 'normal';
	}

	// Sanitizing text decoration options
	foreach( $wppb_textdecoration_options as $stuff=>$opt ) {
		// Loop through all variations 
		foreach( wppb_textdecoration_variations() as $variation ) {
			if ( !isset( $input[$opt] ) )
				$input[$opt] = '';
			if ( $input[$opt] == $variation )
				$wppb_design_settings[$opt] = $input[$opt];		
		}

		// Inherit variation is only present for some options
		if ( $input[$opt] == 'inherit' )
			$wppb_design_settings[$opt] = $input[$opt];		

		// If no variation selected, then default to "repeat"
		if ( !isset( $wppb_design_settings[$opt] ) )
			$wppb_design_settings[$opt] = '';
		if ( '' == $wppb_design_settings[$opt] )
			$wppb_design_settings[$opt] = 'none';
	}
	
	// Sanitizing big numbers options
	foreach( $wppb_bignumbers_options as $stuff=>$opt ) {
		if ( !isset( $input[$opt] ) )
			$input[$opt] = '';
		if ( is_numeric( $input[$opt] ) ) {
				if ( $input[$opt] > -0.001 AND $input[$opt] < 1600 )
					$wppb_design_settings[$opt] = $input[$opt];
				else
					$wppb_design_settings[$opt] = '600';
		}
	}

	// Sanitizing little numbers options
	foreach( $wppb_littlenumbers_options as $stuff=>$opt ) {
		if ( !isset( $input[$opt] ) )
			$input[$opt] = '';
		if ( is_numeric( $input[$opt] ) ) {
				if ( $input[$opt] > 0 AND $input[$opt] < 100 )
					$wppb_design_settings[$opt] = $input[$opt];
				else
					$wppb_design_settings[$opt] = '0';
		}
	}
	
	// Sanitizing shadow coordinate options
	foreach( $wppb_shadow_coordinates_options as $stuff=>$opt ) {
		if ( !isset( $input[$opt] ) )
			$input[$opt] = '';
		if ( is_numeric( $input[$opt] ) ) {
				if ( $input[$opt] > -0.001 AND $input[$opt] < 40 )
					$wppb_design_settings[$opt] = $input[$opt];
				else
					$wppb_design_settings[$opt] = '0';
		}
	}

	// Sanitizing opacity options
	foreach( $wppb_opacity_options as $stuff=>$opt ) {
		if ( !isset( $input[$opt] ) )
			$input[$opt] = '';
		if ( is_numeric( $input[$opt] ) ) {
				if ( $input[$opt] > 0 AND $input[$opt] < 1.00001 )
					$wppb_design_settings[$opt] = $input[$opt];
				else
					$wppb_design_settings[$opt] = '1';
		}
	}

	// Sanitizing display options
	foreach( $wppb_display_options as $stuff=>$opt ) {
		if ( !isset( $input[$opt] ) )
			$input[$opt] = 'none';
		if ( $input[$opt] == 'on' || $input[$opt] == 'block' )
			$wppb_design_settings[$opt] = 'block';
		else
			$wppb_design_settings[$opt] = 'none';
	}

	// Sanitizing centered options
	foreach( $wppb_centered_options as $stuff=>$opt ) {
		if ( !isset( $input[$opt] ) )
			$input[$opt] = '';
		// Loop through all variations 
		foreach( wppb_alignment_variations() as $variation ) {
			if ( $input[$opt] == $variation )
				$wppb_design_settings[$opt] = $input[$opt];		
		}
		// If no variation selected, then default to "repeat"
		if ( !isset( $wppb_design_settings[$opt] ) )
			$wppb_design_settings[$opt] = '';
		if ( '' == $wppb_design_settings[$opt] )
			$wppb_design_settings[$opt] = 'none';
	}
	
	// Sanitizing alignment options
	foreach( $wppb_alignment_options as $stuff=>$opt ) {
		if ( !isset( $input[$opt] ) )
			$input[$opt] = '';
		// Loop through all variations 
		foreach( wppb_alignment_variations() as $variation ) {
			if ( $input[$opt] == $variation )
				$wppb_design_settings[$opt] = $input[$opt];		
		}
		// If no variation selected, then default to "none"
		if ( !isset( $wppb_design_settings[$opt] ) )
			$wppb_design_settings[$opt] = '';
		if ( '' == $wppb_design_settings[$opt] )
			$wppb_design_settings[$opt] = 'none';
	}

	// Sanitizing Text transform options
	foreach( $wppb_texttransform_options as $stuff=>$opt ) {
		if ( !isset( $input[$opt] ) )
			$input[$opt] = '';
		// Loop through all variations 
		foreach( wppb_texttransform_variations() as $variation ) {
			if ( $input[$opt] == $variation )
				$wppb_design_settings[$opt] = $input[$opt];		
		}
		// If no variation selected, then default to "none"
		if ( !isset( $wppb_design_settings[$opt] ) )
			$wppb_design_settings[$opt] = '';
		if ( '' == $wppb_design_settings[$opt] )
			$wppb_design_settings[$opt] = 'none';
	}

	// Sanitizing border type options
	foreach( $wppb_bordertype_options as $stuff=>$opt ) {
		if ( !isset( $input[$opt] ) )
			$input[$opt] = '';
		// Loop through all variations 
		foreach( wppb_bordertype_variations() as $variation ) {
			if ( $input[$opt] == $variation )
				$wppb_design_settings[$opt] = $input[$opt];		
		}
		// If no variation selected, then default to "solid"
		if ( !isset( $wppb_design_settings[$opt] ) )
			$wppb_design_settings[$opt] = '';
		if ( '' == $wppb_design_settings[$opt] )
			$wppb_design_settings[$opt] = 'solid';
	}
	
	// Sanitizing font style options
	foreach( $wppb_fontstyle_options as $stuff=>$opt ) {
		if ( !isset( $input[$opt] ) )
			$input[$opt] = '';
		if( 'normal' == $input[$opt] || 'italic' == $input[$opt] || 'inherit' == $input[$opt] )
			$wppb_design_settings[$opt] = $input[$opt];
		else
			$wppb_design_settings[$opt] = 'normal';
	}

	// Sanitizing raw text options
	foreach( $wppb_rawtext_options as $stuff=>$opt ) {
		if ( !isset( $input[$opt] ) )
			$input[$opt] = '';

		// Allows some HTML, and converts quote marks to ensure they don't screw up quote marks in input fields
		$wppb_design_settings[$opt] = str_replace( "'", '"', wp_kses( $input[$opt], pixopoint_limited_html(), '' ) );
	}

	return $wppb_design_settings;
}

/* Main list of options modified via AJAX
 * Used to ensure that end-user isn't submitting data that wasn't expected
 * Pulls data from various arrays which are used elsewhere in WPPB designer
 * @since 0.1
 */
function wppb_ajax_option_get() {

	$options = array(
		'add_custom_css',
	);

	// Adding font style options
	foreach( wppb_fontstyle_options() as $stuff=>$opt ) {
		array_push( $options, $opt );
	}

	// Adding colour options
	foreach( wppb_colour_options() as $stuff=>$opt ) {
		array_push( $options, $opt );
	}

	// Adding image options
	foreach( wppb_image_options() as $stuff=>$opt ) {
		array_push( $options, $opt );
	}

	// Adding image tiling options
	foreach( wppb_imagetiling_options() as $stuff=>$opt ) {
		array_push( $options, $opt );
	}
	
	// Adding font weight options
	foreach( wppb_fontweight_options() as $stuff=>$opt ) {
		array_push( $options, $opt );
	}

	// Adding text decoration options
	foreach( wppb_textdecoration_options() as $stuff=>$opt ) {
		array_push( $options, $opt );
	}
	
	// Adding big numbers options
	foreach( wppb_bignumbers_options() as $stuff=>$opt ) {
		array_push( $options, $opt );
	}

	// Adding little numbers options
	foreach( wppb_littlenumbers_options() as $stuff=>$opt ) {
		array_push( $options, $opt );
	}
	// Adding display options
	foreach( wppb_display_options() as $stuff=>$opt ) {
		array_push( $options, $opt );
	}

	// Adding centered options
	foreach( wppb_centered_options() as $stuff=>$opt ) {
		array_push( $options, $opt );
	}
	
	// Adding opacity options
	foreach( wppb_opacity_options() as $stuff=>$opt ) {
		array_push( $options, $opt );
	}

	// Adding font size options
	foreach( wppb_fontsize_options() as $stuff=>$opt ) {
		array_push( $options, $opt );
	}

	// Adding alignment options
	foreach( wppb_alignment_options() as $stuff=>$opt ) {
		array_push( $options, $opt );
	}

	// Adding Text transform options
	foreach( wppb_texttransform_options() as $stuff=>$opt ) {
		array_push( $options, $opt );
	}

	// Adding Small-caps options
	foreach( wppb_smallcaps_options() as $stuff=>$opt ) {
		array_push( $options, $opt );
	}

	// Adding Font family options
	foreach( wppb_fontfamily_options() as $stuff=>$opt ) {
		array_push( $options, $opt );
	}

	// Adding border type options
	foreach( wppb_bordertype_options() as $stuff=>$opt ) {
		array_push( $options, $opt );
	}

	// Adding raw text options
	foreach( wppb_rawtext_options() as $stuff=>$opt ) {
		array_push( $options, $opt );
	}

	return $options;
}

/**
 * Sanitize hex colour codes
 * @since 1.0
 */
function wppb_sanitize_hex_colour( $colour ) {
	
	// If transparent, then spit value straight back out
	if ( 'transparent' == $colour || '' == $colour )
		return 'transparent';

	// Check to confirm hex colour code
	$colour = explode( '#', $colour );
	$colour = $colour[1];
	$default = '#FEFEFE';

	// Check string isn't too short
	if ( strlen ( $colour ) < 3 )
		$colour = $default;

	// Check string isn't too long
	if ( strlen ( $colour ) > 6 )
		$colour = $default;

	// Check string ONLY contains correct characters
	if ( preg_match( '/[^a-zA-Z0-9\.]/', $colour ) )
		return;

	return '#' . $colour;
}

/**
 * Add raw text options for global sanitization array
 * @since 1.0
 */
function wppb_adddefault_rawtext_options() {
	global $wppb_rawtext_options;

	// Raw text options
	array_push( $wppb_rawtext_options, 'copyright' );
	array_push( $wppb_rawtext_options, 'design' );

	return $wppb_rawtext_options;
}
add_action( 'wppb_hook_rawtext_options', 'wppb_adddefault_rawtext_options' );

