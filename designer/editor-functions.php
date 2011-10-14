<?php
/**
 * @package WordPress
 * @subpackage WP Paintbrush
 * @since WP Paintbrush 0.1
 *
 * Functions used in editor dialog box
 * These functions are used heavily in editor.php
 */


/* Text margin display
 * @since 0.1
 */
function wppb_text_margins( $option, $wppb_design_settings ) {
	?>
<div class="section-layout chunk">
	<h2><?php _e( 'Margins', 'wppb_lang' ); ?></h2>
	<?php wppb_number_selector( $option . '_margin_top', $wppb_design_settings, __( 'Top', 'wppb_lang' ), 'block coordinates' ); ?>
	<?php wppb_number_selector( $option . '_margin_right', $wppb_design_settings, __( 'Right', 'wppb_lang' ), 'block coordinates' ); ?>
	<?php wppb_number_selector( $option . '_margin_bottom', $wppb_design_settings, __( 'Bottom', 'wppb_lang' ), 'block coordinates' ); ?>
	<?php wppb_number_selector( $option . '_margin_left',  $wppb_design_settings, __( 'Left', 'wppb_lang' ), 'block coordinates' ); ?>
</div>
	<?php
}

/* Text padding display
 * @since 0.1
 */
function wppb_text_padding( $option, $wppb_design_settings ) {
	?>
<div class="section-layout chunk">
	<h2><?php _e( 'Paddings', 'wppb_lang' ); ?></h2>
	<?php wppb_number_selector( $option . '_padding_top', $wppb_design_settings, __( 'Top', 'wppb_lang' ), 'block coordinates' ); ?>
	<?php wppb_number_selector( $option . '_padding_right', $wppb_design_settings, __( 'Right', 'wppb_lang' ), 'block coordinates' ); ?>
	<?php wppb_number_selector( $option . '_padding_bottom', $wppb_design_settings, __( 'Bottom', 'wppb_lang' ), 'block coordinates' ); ?>
	<?php wppb_number_selector( $option . '_padding_left', $wppb_design_settings, __( 'Left', 'wppb_lang' ), 'block coordinates' ); ?>
</div>
	<?php
}

/* Text background display
 * @since 0.1
 */
function wppb_text_background( $option, $wppb_design_settings ) {
	?>
<div class="chunk section-layout">
	<h2><?php _e( 'Background', 'wppb_lang' ); ?></h2>
	<?php wppb_colour_selector( $option . '_background_colour', $wppb_design_settings, __( 'Colour', 'wppb_lang' ), 'block colour' ); ?>
	<?php wppb_background_image_selector( $option . '_background_image', $wppb_design_settings, __( 'Image', 'wppb_lang' ) ); ?>
</div>
	<?php
}

/* Borders vertical display
 * @since 0.1
 */
function wppb_text_borders_vertical( $option, $wppb_design_settings ) {
	?>
<div class="chunk">
	<h3><?php _e( 'Left border', 'wppb_lang' ); ?></h3>
	<?php wppb_number_selector( $option . '_borderleft_width', $wppb_design_settings, __( 'Width', 'wppb_lang' ), 'block coordinates' ); ?>
	<?php wppb_bordertype_selector( $option . '_borderleft_type', $wppb_design_settings, __( 'Type', 'wppb_lang' ), 'block bordertype' ); ?>
	<?php wppb_colour_selector( $option . '_borderleft_colour', $wppb_design_settings, __( 'Colour', 'wppb_lang' ), 'block colour' ); ?>
	<h3><?php _e( 'Right border', 'wppb_lang' ); ?></h3>
	<?php wppb_number_selector( $option . '_borderright_width', $wppb_design_settings, __( 'Width', 'wppb_lang' ), 'block coordinates' ); ?>
	<?php wppb_bordertype_selector( $option . '_borderright_type', $wppb_design_settings, __( 'Type', 'wppb_lang' ), 'block bordertype' ); ?>
	<?php wppb_colour_selector( $option . '_borderright_colour', $wppb_design_settings, __( 'Colour', 'wppb_lang' ), 'block colour' ); ?>
</div>
	<?php
}

/* Borders horizontal display
 * @since 0.1
 */
function wppb_text_borders_horizontal( $option, $wppb_design_settings ) {
	?>
<div class="chunk section-layout">
	<h2><?php _e( 'Borders', 'wppb_lang' ); ?></h2>
	<h3><?php _e( 'Top border', 'wppb_lang' ); ?></h3>
	<?php wppb_number_selector( $option . '_bordertop_width', $wppb_design_settings, __( 'Width', 'wppb_lang' ), 'block coordinates' ); ?>
	<?php wppb_bordertype_selector( $option . '_bordertop_type', $wppb_design_settings, __( 'Type', 'wppb_lang' ), 'block bordertype' ); ?>
	<?php wppb_colour_selector( $option . '_bordertop_colour', $wppb_design_settings, __( 'Colour', 'wppb_lang' ), 'block colour' ); ?>
	<h3><?php _e( 'Bottom border', 'wppb_lang' ); ?></h3>
	<?php wppb_number_selector( $option . '_borderbottom_width', $wppb_design_settings, __( 'Width', 'wppb_lang' ), 'block coordinates' ); ?>
	<?php wppb_bordertype_selector( $option . '_borderbottom_type', $wppb_design_settings, __( 'Type', 'wppb_lang' ), 'block bordertype' ); ?>
	<?php wppb_colour_selector( $option . '_borderbottom_colour', $wppb_design_settings, __( 'Colour', 'wppb_lang' ), 'block colour' ); ?>
</div>
	<?php
}

/* Text display
 * @since 0.1
 */
function wppb_text_display( $option, $wppb_design_settings, $title, $minimum='' ) {

	if ( 'yes' != $minimum )
		echo '<div class="section-layout">';

	// Only display title if one is set
	if ( '' != $title )
		echo '<h2>' . $title . '</h2>';

	wppb_fontfamily_selector( $option . '_fontfamily', $wppb_design_settings, __( 'Font', 'wppb_lang' ), 'block fontfamily' );
	wppb_number_selector( $option . '_fontsize', $wppb_design_settings, __( 'Size', 'wppb_lang' ), 'block fontsize' );
	wppb_colour_selector( $option . '_textcolour', $wppb_design_settings, __( 'Colour', 'wppb_lang' ), 'block colour' );
	wppb_fontweight_selector( $option . '_font_weight', $wppb_design_settings, __( 'Weight', 'wppb_lang' ), 'block fontweight' );
	wppb_fontstyle_selector( $option . '_font_style', $wppb_design_settings, __( 'Style', 'wppb_lang' ), 'block fontstyle' );
	wppb_number_selector( $option . '_line_height', $wppb_design_settings, __( 'Line height', 'wppb_lang' ), 'block lineheight' );
	wppb_textdecoration_selector( $option . '_textdecoration', $wppb_design_settings, __( 'Decoration', 'wppb_lang' ), 'block decoration' );
	wppb_texttranform_selector( $option . '_text_transform', $wppb_design_settings, __( 'Transform', 'wppb_lang' ), 'block transform' );
	wppb_smallcaps_selector( $option . '_small_caps', $wppb_design_settings, __( 'Small caps', 'wppb_lang' ), 'block smallcaps' );

	// Split textshadow into separate chunk
	if ( 'yes' != $minimum )
		echo "</div>\n	<div class='section-layout'>\n<div class='chunk textshadow'>\n	<h2>Text shadow</h2>";
	else
		echo "\n<h3>Text shadow</h3>\n";

	// Text shadow section
	echo '
		';
		wppb_number_selector( $option . '_shadow_x_coordinate', $wppb_design_settings, __( 'x-coord', 'wppb_lang' ), 'block coordinates' );
		wppb_number_selector( $option . '_shadow_y_coordinate', $wppb_design_settings, __( 'y-coord', 'wppb_lang' ), 'block coordinates' );
		wppb_number_selector( $option . '_shadow_blur_radius', $wppb_design_settings, __( 'Blur radius', 'wppb_lang' ), 'block coordinates' );
		wppb_colour_selector( $option . '_shadow_colour', $wppb_design_settings, __( 'Colour', 'wppb_lang' ), 'block colour' );
		//wppb_number_selector( $option . '_shadow_opacity', $wppb_design_settings, __( 'Opacity', 'wppb_lang' ) );

	// Split textshadow into separate chunk
	if ( 'yes' != $minimum )
		echo "	</div>\n";

	if ( 'yes' != $minimum )
		echo "</div>\n";
}

/**
 * Displaying checkbox inputs
 * NOTE: Currently using select box as checkbox won't work with AJAX
 * @since 0.1
 */
function wppb_input_check( $option, $wppb_design_settings, $title, $class='block checkbox' ) {

	// Ensuring array is set
	if ( !isset( $wppb_design_settings[$option] ) )
		$wppb_design_settings[$option] = '';

	// Display HTML
	echo '
<div class="' . $class . '"><p><label>' . $title . '</label><select id="' . $option . '" name="' . $option . '">';

	if ( $wppb_design_settings[$option] == 'Yes' )
		echo '<option>Yes</option><option>No</option>';
	else
		echo '<option>No</option><option>Yes</option>';

	echo "</select></p></div>\n";

}

/**
 * Background image tiling selector
 * @since 0.1
 */
function wppb_imagetiling_selector( $option, $wppb_design_settings, $title, $class='block' ) {

	// Ensuring array is set
	if ( !isset( $wppb_design_settings[$option] ) )
		$wppb_design_settings[$option] = '';

	// Display HTML
	echo '
<div class="image-tiling ' . $class . '"><p><label>' . $title . '</label><select id="' . $option . '" name="' . $option . '">';

	$later = ''; // Setting variable

	foreach ( wppb_imagetiling_variations() as $variation=>$text ) {
		if ( $variation == $wppb_design_settings[$option] ) {
			$initial = '<option value="' . $variation . '">' . $text . "</option>";
		}
		else {
			$later .= '<option value="' . $variation . '">' . $text . "</option>";
		}
	}
	echo $initial . $later;

	echo "</select></p></div>\n";
}

/**
 * Left / right direction selector
 * @since 0.1
 */
function wppb_leftright_selector( $option, $wppb_design_settings, $title, $class='block' ) {

	// Ensuring array is set
	if ( !isset( $wppb_design_settings[$option] ) )
		$wppb_design_settings[$option] = '';

	// Display HTML
	echo '
<div class="' . $class . '"><p><label>' . $title . '</label><select id="' . $option . '" name="' . $option . '">';

	if ( $wppb_design_settings[$option] == 'left' )
		echo '<option value="left">Left</option><option value="right">Right</option>';
	else
		echo '<option value="right">Right</option><option value="left">Left</option>';

	echo "</select></p></div>\n";
}

/**
 * Alignment selector
 * @since 0.1
 */
function wppb_alignment_selector( $option, $wppb_design_settings, $title, $class='block alignment' ) {

	echo '<div class="' . $class . '"><p><label>' . $title . '</label><select id="' . $option . '" class="' . $class . '" name="' . $option . '">' . "\n";

	$later = ''; // Setting variable

	foreach ( wppb_alignment_variations() as $opt=>$label ) {
		if ( $label == $wppb_design_settings[$option] ) {
			$initial = '<option value="' . $label . '">' . $label . "</option>";
		}
		else {
			$later .= '<option value="' . $label . '">' . $label . "</option>";
		}
	}
	echo $initial . $later;

	echo "</select></p></div>\n";

}

/**
 * Display selector
 * @since 0.1
 */
function wppb_display_selector( $option, $wppb_design_settings, $title, $class='block' ) {

	$wppb_options = array(
		'none'  => 'off',
		'block' => 'on',
	);

	echo '<div class="' . $class . '"><p><label>' . $title . '</label><select id="' . $option . '" name="' . $option . '">';

	$initial = ''; // Setting variable
	$later = ''; // Setting variable
	foreach ( $wppb_options as $opt=>$label ) {
		if ( isset( $wppb_design_settings[$option] ) ) {
			if ( $opt == $wppb_design_settings[$option] )
			$initial = '<option value="' . $opt . '">' . $label . '</option>';
			else
				$later .= '<option value="' . $opt . '">' . $label . '</option>';
		}
	}
	echo $initial . $later;

	echo "</select></p></div>\n";
}

/**
 * Displaying font families
 * @since 0.1
 */
function wppb_fontfamily_selector( $option, $wppb_design_settings, $title, $class='block fontfamily' ) {
	echo '
<div class="' . $class . '"><p><label>' . $title . '</label><select id="' . $option . '" name="' . $option . '">' . "\n";

	$later = ''; // Setting variable

	foreach ( wppb_font_family() as $opt=>$font ) {
		if ( $font == $wppb_design_settings[$option] ) {
			$initial = '<option style="font-family:' . $font . '" value="' . $font . '">' . $font . "</option>";
		}
		else {
			$later .= '<option style="font-family:' . $font . '" value="' . $font . '">' . $font . "</option>";
		}
	}
	echo $initial . $later;

	echo "</select></p></div>\n";
}

/**
 * Get oppposite hex colour
 * Code based on work by "Axe" ... http://www.ozzu.com/digital-art-forum/how-determine-the-opposite-hex-color-values-t53983.html
 * @since 1.0
 */
function wppb_invert_colour( $start ) {
	$red = hexdec( substr( $start, 1, 2 ) );
	$green = hexdec( substr( $start, 3, 2 ) );
	$blue = hexdec( substr( $start, 5, 2) );
	$new_red = dechex( 255 - $red );
	$new_green = dechex (255  - $green );
	$new_blue = dechex( 255 - $blue );
	if ( strlen( $new_red ) == 1 )
		$new_red .= '0';
	if ( strlen( $new_green ) == 1 )
		$new_green .= '0';
	if ( strlen( $new_blue ) == 1 )
		$new_blue .= '0';
	$new = $new_red . $new_green . $new_blue;
	return $new;
}

/**
 * Displaying font families
 * @since 0.1
 */
function wppb_colour_selector( $option, $wppb_design_settings, $title, $class='block colour' ) {
	// Setting variable
	if ( !isset( $wppb_design_settings[$option] ) )
		$wppb_design_settings[$option] = 'none';

	// Display HTML for font family	selection
	echo "\n" . '<div class="' . $class . '"><p><label>' . $title . '</label><input style="background: '  . $wppb_design_settings[$option] . '; color: #' . wppb_invert_colour( $wppb_design_settings[$option] ) . '" type="text" class="colourinput" id="' . $option . '" name="' . $option . '" value="'  . $wppb_design_settings[$option] . '" /></p></div>' . "\n";
}

/**
 * Displaying text decoration
 * @since 0.1
 */
function wppb_textdecoration_selector( $option, $wppb_design_settings, $title, $class='block textdecoration', $inherit='' ) {

	// Grab array of possible variations	
	$wppb_textdecoration_variations = wppb_textdecoration_variations();

	// Add "inherit" as a variation if it is available
	if ( 'inherit' == $inherit )
		array_push( $wppb_textdecoration_variations, $inherit );

	// Create HTML to display select box 
	echo '
<div class="' . $class . '"><p><label>' . $title . '</label><select id="' . $option . '" name="' . $option . '">';

	$later = ''; // Setting variable

	foreach ( $wppb_textdecoration_variations as $opt=>$textdecoration ) {
		if ( $textdecoration == $wppb_design_settings[$option] ) {
			$initial = '<option value="' . $textdecoration . '">' . ucfirst( $textdecoration ) . "</option>";
		}
		else {
			$later .= '<option value="' . $textdecoration . '">' . ucfirst( $textdecoration ) . "</option>";
		}
	}
	echo $initial . $later;

	echo "</select></p></div>\n";
}

/* Border type display
 * @since 0.1
 */
function wppb_bordertype_selector( $option, $wppb_design_settings, $title, $class='block bordertype' ) {

	// Create HTML to display select box 
	echo '
<div class="' . $class . '"><p><label>' . $title . '</label><select id="' . $option . '" name="' . $option . '">';

	$later = ''; // Setting variable

	foreach ( wppb_bordertype_variations() as $opt=>$type ) {
		if ( $type == $wppb_design_settings[$option] ) {
			$initial = '<option value="' . $type . '">' . $type . "</option>";
		}
		else {
			$later .= '<option value="' . $type . '">' . $type . "</option>";
		}
	}
	echo $initial . $later;

	echo "</select></p></div>\n";
}

/**
 * Displaying number selection slider
 * @since 0.1
 */
function wppb_number_selector( $option, $wppb_design_settings, $title, $class='block coordinates' ) {

	// Ensuring array is set
	if ( !isset( $wppb_design_settings[$option] ) )
		$wppb_design_settings[$option] = '';

	// Displaying HTML
	echo '
<div class="' . $class . '"><p><label>' . $title . '</label><input type="text" id="' . $option . '" name="' . $option . '" value="'  . $wppb_design_settings[$option] . '" /><div id="slider' . $option . '"></div></p></div>
';

}

/**
 * Displaying background image selector
 * @since 0.1
 */
function wppb_background_image_selector( $option, $wppb_design_settings, $title, $class='block' ) {

	// Ensuring array is set
	if ( !isset( $wppb_design_settings[$option] ) )
		$wppb_design_settings[$option] = '';

	// Displaying HTML
	echo '
<div class="' . $class . '"><p><label>' . $title . '</label><input type="text" class="image-picker" id="' . $option . '" name="' . $option . '" value="'  . $wppb_design_settings[$option] . '" /><input type="button" class="imagepickerbutton" value="pick" /></p></div>
';

}

/**
 * Displaying font weight
 * @since 0.1
 */
function wppb_fontweight_selector( $option, $wppb_design_settings, $title, $class='block fontweight', $inherit='' ) {

	// Grab array of possible variations	
	$wppb_fontweight_variations = array(
		'bold',
		'normal'
	);

	// Add "inherit" as a variation if it is available
	if ( 'inherit' == $inherit )
		array_push( $wppb_fontweight_variations, $inherit );

	// Create HTML to display select box 
	echo '<div class="' . $class . '"><p><label>' . $title . '</label><select id="' . $option . '" name="' . $option . '">' . "\n";

	$later = ''; // Setting variable

	foreach ( $wppb_fontweight_variations as $opt=>$fontweight ) {
		if ( $fontweight == $wppb_design_settings[$option] ) {
			$initial = '<option value="' . $fontweight . '">' . ucfirst( $fontweight ) . "</option>\n";
		}
		else {
			$later .= '<option value="' . $fontweight . '">' . ucfirst( $fontweight ) . "</option>\n";
		}
	}
	echo $initial . $later;

	echo "</select></p></div>\n";
}

/**
 * Displaying font style
 * @since 0.1
 */
function wppb_fontstyle_selector( $option, $wppb_design_settings, $title, $class='block', $inherit='' ) {

	// Grab array of possible variations	
	$wppb_fontstyle_variations = array(
		'italic',
		'normal'
	);

	// Add "inherit" as a variation if it is available
	if ( 'inherit' == $inherit )
		array_push( $wppb_fontstyle_variations, $inherit );

	// Create HTML to display select box 
	echo '
	<div class="' . $class . '"><p><label>' . $title . '</label><select id="' . $option . '" name="' . $option . '">' . "\n";
			foreach ( $wppb_fontstyle_variations as $opt=>$fontstyle ) {
				if ( $fontstyle == $wppb_design_settings[$option] )
					$selected = 'SELECTED ';
				else
					$selected = '';
				echo '<option ' . $selected . ' value="' . $fontstyle . '">' . ucfirst( $fontstyle ) . "</option>\n";
			}

	echo '</select></p></div>';
}

/**
 * Displaying text transform
 * @since 0.1
 */
function wppb_texttranform_selector( $option, $wppb_design_settings, $title, $class='block texttransform' ) {

	echo '<div class="' . $class . '"><p><label>' . $title . '</label><select id="' . $option . '" name="' . $option . '">' . "\n";

	$later = ''; // Setting variable

	foreach ( wppb_texttransform_variations() as $opt=>$type ) {
		if ( $type == $wppb_design_settings[$option] ) {
			$initial = '<option value="' . $type . '">' . $type . "</option>";
		}
		else {
			$later .= '<option value="' . $type . '">' . $type . "</option>";
		}
	}
	echo $initial . $later;

	echo "</select></p></div>\n";
}

/**
 * Displaying small caps
 * @since 0.1
 */
function wppb_smallcaps_selector( $option, $wppb_design_settings, $title, $class='block smallcaps' ) {

	// Ensuring array is set
	if ( !isset( $wppb_design_settings[$option] ) )
		$wppb_design_settings[$option] = '';

	// Display HTML
	echo '
	<div class="' . $class . '"><p><label>' . $title . '</label><select id="' . $option . '" name="' . $option . '">';
			foreach( wppb_smallcaps_variations() as $variation=>$text ) {
				echo '<option ';
				if ( $variation == $wppb_design_settings[$option] )
					echo 'SELECTED '; 
				echo 'value="' . $variation . '">' . $text . '</option>';
			}
	echo '</select></p></div>';
}

/**
 * Wrapper function for adding borders around large blocks
 * @since 1.0
 */
function wppb_wrapper_block( $chunk, $wppb_design_settings, $heading='h2' ) {

	if ( 'h2' == $heading )
		echo '<div class="section-layout"><h2>Border</h2>';
	?>
	<h3><?php _e( 'Border top', 'wppb_lang' ); ?></h3>
	<?php wppb_number_selector( $chunk . '_border_top_width', $wppb_design_settings, __( 'Width', 'wppb_lang' ), 'block coordinates' ); ?>
	<?php wppb_bordertype_selector( $chunk . '_border_top_type', $wppb_design_settings, __( 'Type', 'wppb_lang' ), 'block bordertype' ); ?>
	<?php wppb_colour_selector( $chunk . '_border_top_colour', $wppb_design_settings, __( 'Colour', 'wppb_lang' ), 'block colour' ); ?>
	<h3><?php _e( 'Border right', 'wppb_lang' ); ?></h3>
	<?php wppb_number_selector( $chunk . '_border_right_width', $wppb_design_settings, __( 'Width', 'wppb_lang' ), 'block coordinates' ); ?>
	<?php wppb_bordertype_selector( $chunk . '_border_right_type', $wppb_design_settings, __( 'Type', 'wppb_lang' ), 'block bordertype' ); ?>
	<?php wppb_colour_selector( $chunk . '_border_right_colour', $wppb_design_settings, __( 'Colour', 'wppb_lang' ), 'block colour' ); ?>
	<h3><?php _e( 'Border bottom', 'wppb_lang' ); ?></h3>
	<?php wppb_number_selector( $chunk . '_border_bottom_width', $wppb_design_settings, __( 'Width', 'wppb_lang' ), 'block coordinates' ); ?>
	<?php wppb_bordertype_selector( $chunk . '_border_bottom_type', $wppb_design_settings, __( 'Type', 'wppb_lang' ), 'block bordertype' ); ?>
	<?php wppb_colour_selector( $chunk . '_border_bottom_colour', $wppb_design_settings, __( 'Colour', 'wppb_lang' ), 'block colour' ); ?>
	<h3><?php _e( 'Border left', 'wppb_lang' ); ?></h3>
	<?php wppb_number_selector( $chunk . '_border_left_width', $wppb_design_settings, __( 'Width', 'wppb_lang' ), 'block coordinates' ); ?>
	<?php wppb_bordertype_selector( $chunk . '_border_left_type', $wppb_design_settings, __( 'Type', 'wppb_lang' ), 'block bordertype' ); ?>
	<?php wppb_colour_selector( $chunk . '_border_left_colour', $wppb_design_settings, __( 'Colour', 'wppb_lang' ), 'block colour' ); ?>
	<?php
	if ( 'h2' == $heading )
		echo '</div><div class="section-layout">';
	?>
	<<?php echo $heading; ?>><?php _e( 'Margins', 'wppb_lang' ); ?></<?php echo $heading; ?>>
	<?php wppb_number_selector( $chunk . '_top_margin', $wppb_design_settings, __( 'Top margin', 'wppb_lang' ), 'block coordinates' ); ?>
	<?php wppb_number_selector( $chunk . '_bottom_margin', $wppb_design_settings, __( 'Bottom margin', 'wppb_lang' ), 'block coordinates' ); ?>
	<?php
	if ( 'h2' == $heading )
		echo '</div>';
}

/**
 * Wrapper function for adding borders around large blocks
 * @since 1.0
 */
function wppb_background( $name, $wppb_design_settings ) {
	wppb_display_selector( $name . '_display', $wppb_design_settings, __( 'Display?', 'wppb_lang' ) );
	wppb_colour_selector( $name . '_colour', $wppb_design_settings, __( 'Colour', 'wppb_lang' ) );
	wppb_background_image_selector( $name . '_image', $wppb_design_settings, __( 'Image', 'wppb_lang' ) );
	wppb_imagetiling_selector( $name . '_image_tiling', $wppb_design_settings, __( 'Image tiling', 'wppb_lang' ) );
}

/**
 * List images in specified folder
 * Used within image picker
 * @since 1.0
 */
function wppb_list_images( $wppb_image_dir, $wppb_image_url, $no_image, $folder ) {

	// Setting folder variable in case it's empty
	if ( empty( $folder ) )
		$folder = '';

	$file_list = wppb_list_files( $wppb_image_dir );
	if ( is_array( $file_list ) ) {
		$col = 0;
		$first = '';
		foreach ( $file_list as $file ) {
			$col ++;
			if ( $col == 1 )
				echo '<tr>';
			if ( $col == 1 && $first != 'no' && 'display' == $no_image ) {
				echo '<td>' . __( 'No image', 'wppb_lang' ) . '<br /><img src="' . WPPB_URL . '/images/no-image.jpg" class="uploaded-image" alt="" /></td>';
				$first = 'no';
				$col ++;
			}
			echo '<td>' . $file . '<br /><img src="' . $wppb_image_url . '/' . $file . '" class="uploaded-image" alt="' . $folder . '/' . $file . '" /></td>';
			if ( $col == 4 ) {
				echo '</tr>';
				$col = 0;
			}
		}
	}
}
