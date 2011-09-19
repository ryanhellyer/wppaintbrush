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
function ptc_sanitize_inputs( $input='' ) {

	// Grab from POST
	if ( '' == $input )
		$input = $_POST;

	// If no data loaded, then grab from database (presumably because on initial page load instead of loading via AJAX)
	if ( '' == $input )
		$input = get_option( WPPB_DESIGNER_SETTINGS );

	// Processing entire POST to array with errors (replaced later with correct values - used for debugging purposes)
	foreach( ptc_ajax_option_get() as $option ) {
		if ( isset( $input[$option] ) ) {
			$content_layout[$option] = 'Sanitization error!';
		}
	}

	// Sanitizing CSS
	if ( isset( $input['add_custom_css'] ) )
		$content_layout['add_custom_css'] = pixopoint_validate_css( $input['add_custom_css'] ); // Sanitizing CSS

	// Setting arrays of options
	$ptc_fontfamily_options = ptc_fontfamily_options(); // Font family
	$ptc_colour_options = ptc_colour_options(); // Text colour
	$ptc_fontweight_options = ptc_fontweight_options(); // Font weight
	$ptc_smallcaps_options = ptc_smallcaps_options(); // Small caps
	$ptc_textdecoration_options = ptc_textdecoration_options(); // Text decoration
	$ptc_texttransform_options = ptc_texttransform_options(); // Text transform
	$ptc_image_options = ptc_image_options(); // Images
	$ptc_imagetiling_options = ptc_imagetiling_options(); // Image tiling
	$ptc_bignumbers_options = ptc_bignumbers_options(); // Big numbers
	$ptc_littlenumbers_options = ptc_littlenumbers_options(); // Little numbers
	$ptc_opacity_options = ptc_opacity_options(); // Opacity
	$ptc_display_options = ptc_display_options(); // Display
	$ptc_centered_options = ptc_centered_options(); // Centered?
	$ptc_alignment_options = ptc_alignment_options(); // Alignment
	$ptc_bordertype_options = ptc_bordertype_options(); // Border type
	$ptc_fontstyle_options = ptc_fontstyle_options(); // Font style
	$ptc_fontsize_options = ptc_fontsize_options(); // Font size - also line heights
	$ptc_shadow_coordinates_options = ptc_shadow_coordinates_options(); // Shadow coordinates
	$ptc_rawtext_options = ptc_rawtext_options(); // Text

	// Sanitizing the added custom CSS (only one option for this so need for accessing from array)
	if ( empty( $content_layout['add_custom_css'] ) )
		$content_layout['add_custom_css'] = '';
	$content_layout['add_custom_css'] = pixopoint_validate_css( $input['add_custom_css'] );

	// Sanitizing font size options
	foreach( $ptc_fontsize_options as $stuff=>$opt ) {
		if ( !isset( $input[$opt] ) )
			$input[$opt] = '';
		if ( is_numeric( $input[$opt] ) ) {
				if ( $input[$opt] > 4 AND $input[$opt] < 120 )
					$content_layout[$opt] = $input[$opt];
				else
					$content_layout[$opt] = '12';
		}
	}

	// Sanitizing Font family options
	foreach( $ptc_fontfamily_options as $stuff=>$opt ) {
		// Loop through all variations 
		foreach( ptc_font_family() as $variation ) {
			if ( !isset( $input[$opt] ) )
				$input[$opt] = '';
			// Correcting escaped characters
			$input[$opt] = str_replace( "\'", "'", $input[$opt] );

			// Setting option if matches possible variation			
			if ( $input[$opt] == $variation )
				$content_layout[$opt] = $input[$opt];
		}
		// If no variation selected, then default to helvetica
		if ( '' == $input[$opt] )
			$content_layout[$opt] = "'Helvetica Neue', Arial, Helvetica, 'Nimbus Sans L', sans-serif";
	}

	// Sanitizing colour options
	foreach( $ptc_colour_options as $stuff=>$opt ) {
		if ( !isset( $input[$opt] ) )
			$input[$opt] = '';
		$content_layout[$opt] = ptc_sanitize_hex_colour( $input[$opt] );
	}

	// Sanitizing image options
	foreach( $ptc_image_options as $stuff=>$opt ) {
		if ( !isset( $input[$opt] ) )
			$input[$opt] = '';
		$content_layout[$opt] = sanitize_file_name( $input[$opt] );
	}

	// Sanitizing image tiling options
	foreach( $ptc_imagetiling_options as $stuff=>$opt ) {
		if ( !isset( $input[$opt] ) )
			$input[$opt] = '';
		// Loop through all variations 
		foreach( ptc_imagetiling_variations() as $variation=>$text ) {
			if ( $input[$opt] == $variation )
				$content_layout[$opt] = $input[$opt];		
		}
		// If no variation selected, then default to "repeat"
		if ( !isset( $content_layout[$opt] ) )
			$content_layout[$opt] = '';
		if ( '' == $content_layout[$opt] )
			$content_layout[$opt] = 'repeat';
	}
	
	// Sanitizing Small-caps options
	foreach( $ptc_smallcaps_options as $stuff=>$opt ) {
		if ( !isset( $input[$opt] ) )
			$input[$opt] = '';
		// Loop through all variations 
		foreach( ptc_smallcaps_variations() as $variation=>$text ) {
			if ( $input[$opt] == $variation )
				$content_layout[$opt] = $input[$opt];		
		}
		if ( !isset( $content_layout[$opt] ) )
			$content_layout[$opt] = '';
		// If no variation selected, then default to "repeat"
		if ( '' == $content_layout[$opt] )
			$content_layout[$opt] = 'normal';
	}

	// Sanitizing font weight options
	foreach( $ptc_fontweight_options as $stuff=>$opt ) {
		if ( !isset( $input[$opt] ) )
			$input[$opt] = '';
		if ( 'bold' == $input[$opt] )
			$content_layout[$opt] = 'bold';
		elseif ( 'inherit' == $input[$opt] )
			$content_layout[$opt] = 'inherit';
		else
			$content_layout[$opt] = 'normal';
	}

	// Sanitizing text decoration options
	foreach( $ptc_textdecoration_options as $stuff=>$opt ) {
		// Loop through all variations 
		foreach( ptc_textdecoration_variations() as $variation ) {
			if ( !isset( $input[$opt] ) )
				$input[$opt] = '';
			if ( $input[$opt] == $variation )
				$content_layout[$opt] = $input[$opt];		
		}

		// Inherit variation is only present for some options
		if ( $input[$opt] == 'inherit' )
			$content_layout[$opt] = $input[$opt];		

		// If no variation selected, then default to "repeat"
		if ( !isset( $content_layout[$opt] ) )
			$content_layout[$opt] = '';
		if ( '' == $content_layout[$opt] )
			$content_layout[$opt] = 'none';
	}
	
	// Sanitizing big numbers options
	foreach( $ptc_bignumbers_options as $stuff=>$opt ) {
		if ( !isset( $input[$opt] ) )
			$input[$opt] = '';
		if ( is_numeric( $input[$opt] ) ) {
				if ( $input[$opt] > -0.001 AND $input[$opt] < 1600 )
					$content_layout[$opt] = $input[$opt];
				else
					$content_layout[$opt] = '600';
		}
	}

	// Sanitizing little numbers options
	foreach( $ptc_littlenumbers_options as $stuff=>$opt ) {
		if ( !isset( $input[$opt] ) )
			$input[$opt] = '';
		if ( is_numeric( $input[$opt] ) ) {
				if ( $input[$opt] > 0 AND $input[$opt] < 100 )
					$content_layout[$opt] = $input[$opt];
				else
					$content_layout[$opt] = '0';
		}
	}
	
	// Sanitizing shadow coordinate options
	foreach( $ptc_shadow_coordinates_options as $stuff=>$opt ) {
		if ( !isset( $input[$opt] ) )
			$input[$opt] = '';
		if ( is_numeric( $input[$opt] ) ) {
				if ( $input[$opt] > -0.001 AND $input[$opt] < 40 )
					$content_layout[$opt] = $input[$opt];
				else
					$content_layout[$opt] = '0';
		}
	}

	// Sanitizing opacity options
	foreach( $ptc_opacity_options as $stuff=>$opt ) {
		if ( !isset( $input[$opt] ) )
			$input[$opt] = '';
		if ( is_numeric( $input[$opt] ) ) {
				if ( $input[$opt] > 0 AND $input[$opt] < 1.00001 )
					$content_layout[$opt] = $input[$opt];
				else
					$content_layout[$opt] = '1';
		}
	}

	// Sanitizing display options
	foreach( $ptc_display_options as $stuff=>$opt ) {
		if ( !isset( $input[$opt] ) )
			$input[$opt] = 'none';
		if ( $input[$opt] == 'on' || $input[$opt] == 'block' )
			$content_layout[$opt] = 'block';
		else
			$content_layout[$opt] = 'none';
	}

	// Sanitizing centered options
	foreach( $ptc_centered_options as $stuff=>$opt ) {
		if ( !isset( $input[$opt] ) )
			$input[$opt] = '';
		// Loop through all variations 
		foreach( ptc_alignment_variations() as $variation ) {
			if ( $input[$opt] == $variation )
				$content_layout[$opt] = $input[$opt];		
		}
		// If no variation selected, then default to "repeat"
		if ( !isset( $content_layout[$opt] ) )
			$content_layout[$opt] = '';
		if ( '' == $content_layout[$opt] )
			$content_layout[$opt] = 'none';
	}
	
	// Sanitizing alignment options
	foreach( $ptc_alignment_options as $stuff=>$opt ) {
		if ( !isset( $input[$opt] ) )
			$input[$opt] = '';
		// Loop through all variations 
		foreach( ptc_alignment_variations() as $variation ) {
			if ( $input[$opt] == $variation )
				$content_layout[$opt] = $input[$opt];		
		}
		// If no variation selected, then default to "none"
		if ( !isset( $content_layout[$opt] ) )
			$content_layout[$opt] = '';
		if ( '' == $content_layout[$opt] )
			$content_layout[$opt] = 'none';
	}

	// Sanitizing Text transform options
	foreach( $ptc_texttransform_options as $stuff=>$opt ) {
		if ( !isset( $input[$opt] ) )
			$input[$opt] = '';
		// Loop through all variations 
		foreach( ptc_texttransform_variations() as $variation ) {
			if ( $input[$opt] == $variation )
				$content_layout[$opt] = $input[$opt];		
		}
		// If no variation selected, then default to "none"
		if ( !isset( $content_layout[$opt] ) )
			$content_layout[$opt] = '';
		if ( '' == $content_layout[$opt] )
			$content_layout[$opt] = 'none';
	}

	// Sanitizing border type options
	foreach( $ptc_bordertype_options as $stuff=>$opt ) {
		if ( !isset( $input[$opt] ) )
			$input[$opt] = '';
		// Loop through all variations 
		foreach( ptc_bordertype_variations() as $variation ) {
			if ( $input[$opt] == $variation )
				$content_layout[$opt] = $input[$opt];		
		}
		// If no variation selected, then default to "solid"
		if ( !isset( $content_layout[$opt] ) )
			$content_layout[$opt] = '';
		if ( '' == $content_layout[$opt] )
			$content_layout[$opt] = 'solid';
	}
	
	// Sanitizing font style options
	foreach( $ptc_fontstyle_options as $stuff=>$opt ) {
		if ( !isset( $input[$opt] ) )
			$input[$opt] = '';
		if( 'normal' == $input[$opt] || 'italic' == $input[$opt] || 'inherit' == $input[$opt] )
			$content_layout[$opt] = $input[$opt];
		else
			$content_layout[$opt] = 'normal';
	}

	// Sanitizing raw text options
	foreach( $ptc_rawtext_options as $stuff=>$opt ) {
		if ( !isset( $input[$opt] ) )
			$input[$opt] = '';

		// Allows some HTML, and converts quote marks to ensure they don't screw up quote marks in input fields
		$content_layout[$opt] = str_replace( "'", '"', wp_kses( $input[$opt], pixopoint_limited_html(), '' ) );
	}

	return $content_layout;
}

/* Main list of options modified via AJAX
 * Used to ensure that end-user isn't submitting data that wasn't expected
 * Pulls data from various arrays which are used elsewhere in WPPB designer
 * @since 0.1
 */
function ptc_ajax_option_get() {

	$options = array(
		'add_custom_css',
	);

	// Adding font style options
	foreach( ptc_fontstyle_options() as $stuff=>$opt ) {
		array_push( $options, $opt );
	}

	// Adding colour options
	foreach( ptc_colour_options() as $stuff=>$opt ) {
		array_push( $options, $opt );
	}

	// Adding image options
	foreach( ptc_image_options() as $stuff=>$opt ) {
		array_push( $options, $opt );
	}

	// Adding image tiling options
	foreach( ptc_imagetiling_options() as $stuff=>$opt ) {
		array_push( $options, $opt );
	}
	
	// Adding font weight options
	foreach( ptc_fontweight_options() as $stuff=>$opt ) {
		array_push( $options, $opt );
	}

	// Adding text decoration options
	foreach( ptc_textdecoration_options() as $stuff=>$opt ) {
		array_push( $options, $opt );
	}
	
	// Adding big numbers options
	foreach( ptc_bignumbers_options() as $stuff=>$opt ) {
		array_push( $options, $opt );
	}

	// Adding little numbers options
	foreach( ptc_littlenumbers_options() as $stuff=>$opt ) {
		array_push( $options, $opt );
	}
	// Adding display options
	foreach( ptc_display_options() as $stuff=>$opt ) {
		array_push( $options, $opt );
	}

	// Adding centered options
	foreach( ptc_centered_options() as $stuff=>$opt ) {
		array_push( $options, $opt );
	}
	
	// Adding opacity options
	foreach( ptc_opacity_options() as $stuff=>$opt ) {
		array_push( $options, $opt );
	}

	// Adding font size options
	foreach( ptc_fontsize_options() as $stuff=>$opt ) {
		array_push( $options, $opt );
	}

	// Adding alignment options
	foreach( ptc_alignment_options() as $stuff=>$opt ) {
		array_push( $options, $opt );
	}

	// Adding Text transform options
	foreach( ptc_texttransform_options() as $stuff=>$opt ) {
		array_push( $options, $opt );
	}

	// Adding Small-caps options
	foreach( ptc_smallcaps_options() as $stuff=>$opt ) {
		array_push( $options, $opt );
	}

	// Adding Font family options
	foreach( ptc_fontfamily_options() as $stuff=>$opt ) {
		array_push( $options, $opt );
	}

	// Adding border type options
	foreach( ptc_bordertype_options() as $stuff=>$opt ) {
		array_push( $options, $opt );
	}

	// Adding raw text options
	foreach( ptc_rawtext_options() as $stuff=>$opt ) {
		array_push( $options, $opt );
	}

	return $options;
}

/**
 * Sanitize hex colour codes
 * @since 1.0
 */
function ptc_sanitize_hex_colour( $colour ) {
	
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
function ptc_adddefault_rawtext_options() {
	global $ptc_rawtext_options;

	// Raw text options
	array_push( $ptc_rawtext_options, 'copyright' );

	return $ptc_rawtext_options;
}
add_action( 'ptc_hook_rawtext_options', 'ptc_adddefault_rawtext_options' );

