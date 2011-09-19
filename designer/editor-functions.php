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
function ptc_text_margins( $option, $content_layout ) {
	?>
<div class="section-layout chunk">
	<h2><?php _e( 'Margins', 'wppb_lang' ); ?></h2>
	<?php ptc_number_selector( $option . '_margin_top', $content_layout, __( 'Top', 'wppb_lang' ), 'block coordinates' ); ?>
	<?php ptc_number_selector( $option . '_margin_right', $content_layout, __( 'Right', 'wppb_lang' ), 'block coordinates' ); ?>
	<?php ptc_number_selector( $option . '_margin_bottom', $content_layout, __( 'Bottom', 'wppb_lang' ), 'block coordinates' ); ?>
	<?php ptc_number_selector( $option . '_margin_left',  $content_layout, __( 'Left', 'wppb_lang' ), 'block coordinates' ); ?>
</div>
	<?php
}

/* Text padding display
 * @since 0.1
 */
function ptc_text_padding( $option, $content_layout ) {
	?>
<div class="section-layout chunk">
	<h2><?php _e( 'Paddings', 'wppb_lang' ); ?></h2>
	<?php ptc_number_selector( $option . '_padding_top', $content_layout, __( 'Top', 'wppb_lang' ), 'block coordinates' ); ?>
	<?php ptc_number_selector( $option . '_padding_right', $content_layout, __( 'Right', 'wppb_lang' ), 'block coordinates' ); ?>
	<?php ptc_number_selector( $option . '_padding_bottom', $content_layout, __( 'Bottom', 'wppb_lang' ), 'block coordinates' ); ?>
	<?php ptc_number_selector( $option . '_padding_left', $content_layout, __( 'Left', 'wppb_lang' ), 'block coordinates' ); ?>
</div>
	<?php
}

/* Text background display
 * @since 0.1
 */
function ptc_text_background( $option, $content_layout ) {
	?>
<div class="chunk section-layout">
	<h2><?php _e( 'Background', 'wppb_lang' ); ?></h2>
	<?php ptc_colour_selector( $option . '_background_colour', $content_layout, __( 'Colour', 'wppb_lang' ), 'block colour' ); ?>
	<?php ptc_background_image_selector( $option . '_background_image', $content_layout, __( 'Image', 'wppb_lang' ) ); ?>
</div>
	<?php
}

/* Borders vertical display
 * @since 0.1
 */
function ptc_text_borders_vertical( $option, $content_layout ) {
	?>
<div class="chunk">
	<h3><?php _e( 'Left border', 'wppb_lang' ); ?></h3>
	<?php ptc_number_selector( $option . '_borderleft_width', $content_layout, __( 'Width', 'wppb_lang' ), 'block coordinates' ); ?>
	<?php ptc_bordertype_selector( $option . '_borderleft_type', $content_layout, __( 'Type', 'wppb_lang' ), 'block bordertype' ); ?>
	<?php ptc_colour_selector( $option . '_borderleft_colour', $content_layout, __( 'Colour', 'wppb_lang' ), 'block colour' ); ?>
	<h3><?php _e( 'Right border', 'wppb_lang' ); ?></h3>
	<?php ptc_number_selector( $option . '_borderright_width', $content_layout, __( 'Width', 'wppb_lang' ), 'block coordinates' ); ?>
	<?php ptc_bordertype_selector( $option . '_borderright_type', $content_layout, __( 'Type', 'wppb_lang' ), 'block bordertype' ); ?>
	<?php ptc_colour_selector( $option . '_borderright_colour', $content_layout, __( 'Colour', 'wppb_lang' ), 'block colour' ); ?>
</div>
	<?php
}

/* Borders horizontal display
 * @since 0.1
 */
function ptc_text_borders_horizontal( $option, $content_layout ) {
	?>
<div class="chunk section-layout">
	<h2><?php _e( 'Borders', 'wppb_lang' ); ?></h2>
	<h3><?php _e( 'Top border', 'wppb_lang' ); ?></h3>
	<?php ptc_number_selector( $option . '_bordertop_width', $content_layout, __( 'Width', 'wppb_lang' ), 'block coordinates' ); ?>
	<?php ptc_bordertype_selector( $option . '_bordertop_type', $content_layout, __( 'Type', 'wppb_lang' ), 'block bordertype' ); ?>
	<?php ptc_colour_selector( $option . '_bordertop_colour', $content_layout, __( 'Colour', 'wppb_lang' ), 'block colour' ); ?>
	<h3><?php _e( 'Bottom border', 'wppb_lang' ); ?></h3>
	<?php ptc_number_selector( $option . '_borderbottom_width', $content_layout, __( 'Width', 'wppb_lang' ), 'block coordinates' ); ?>
	<?php ptc_bordertype_selector( $option . '_borderbottom_type', $content_layout, __( 'Type', 'wppb_lang' ), 'block bordertype' ); ?>
	<?php ptc_colour_selector( $option . '_borderbottom_colour', $content_layout, __( 'Colour', 'wppb_lang' ), 'block colour' ); ?>
</div>
	<?php
}

/* Text display
 * @since 0.1
 */
function ptc_text_display( $option, $content_layout, $title, $minimum='' ) {

	if ( 'yes' != $minimum )
		echo '<div class="section-layout">';

	// Only display title if one is set
	if ( '' != $title )
		echo '<h2>' . $title . '</h2>';

	ptc_fontfamily_selector( $option . '_fontfamily', $content_layout, __( 'Font', 'wppb_lang' ), 'block fontfamily' );
	ptc_number_selector( $option . '_fontsize', $content_layout, __( 'Size', 'wppb_lang' ), 'block fontsize' );
	ptc_colour_selector( $option . '_textcolour', $content_layout, __( 'Colour', 'wppb_lang' ), 'block colour' );
	ptc_fontweight_selector( $option . '_font_weight', $content_layout, __( 'Weight', 'wppb_lang' ), 'block fontweight' );
	ptc_fontstyle_selector( $option . '_font_style', $content_layout, __( 'Style', 'wppb_lang' ), 'block fontstyle' );
	ptc_number_selector( $option . '_line_height', $content_layout, __( 'Line height', 'wppb_lang' ), 'block lineheight' );
	ptc_textdecoration_selector( $option . '_textdecoration', $content_layout, __( 'Decoration', 'wppb_lang' ), 'block decoration' );
	ptc_texttranform_selector( $option . '_text_transform', $content_layout, __( 'Transform', 'wppb_lang' ), 'block transform' );
	ptc_smallcaps_selector( $option . '_small_caps', $content_layout, __( 'Small caps', 'wppb_lang' ), 'block smallcaps' );

	// Split textshadow into separate chunk
	if ( 'yes' != $minimum )
		echo "</div>\n	<div class='section-layout'>\n<div class='chunk textshadow'>\n	<h2>Text shadow</h2>";
	else
		echo "\n<h3>Text shadow</h3>\n";

	// Text shadow section
	echo '
		';
		ptc_number_selector( $option . '_shadow_x_coordinate', $content_layout, __( 'x-coord', 'wppb_lang' ), 'block coordinates' );
		ptc_number_selector( $option . '_shadow_y_coordinate', $content_layout, __( 'y-coord', 'wppb_lang' ), 'block coordinates' );
		ptc_number_selector( $option . '_shadow_blur_radius', $content_layout, __( 'Blur radius', 'wppb_lang' ), 'block coordinates' );
		ptc_colour_selector( $option . '_shadow_colour', $content_layout, __( 'Colour', 'wppb_lang' ), 'block colour' );
		//ptc_number_selector( $option . '_shadow_opacity', $content_layout, __( 'Opacity', 'wppb_lang' ) );

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
function ptc_input_check( $option, $content_layout, $title, $class='block checkbox' ) {

	// Ensuring array is set
	if ( !isset( $content_layout[$option] ) )
		$content_layout[$option] = '';

	// Display HTML
	echo '
<div class="' . $class . '"><p><label>' . $title . '</label><select id="' . $option . '" name="' . $option . '">';

	if ( $content_layout[$option] == 'Yes' )
		echo '<option>Yes</option><option>No</option>';
	else
		echo '<option>No</option><option>Yes</option>';

	echo "</select></p></div>\n";

}

/**
 * Background image tiling selector
 * @since 0.1
 */
function ptc_imagetiling_selector( $option, $content_layout, $title, $class='block' ) {

	// Ensuring array is set
	if ( !isset( $content_layout[$option] ) )
		$content_layout[$option] = '';

	// Display HTML
	echo '
<div class="image-tiling ' . $class . '"><p><label>' . $title . '</label><select id="' . $option . '" name="' . $option . '">';

	$later = ''; // Setting variable

	foreach ( ptc_imagetiling_variations() as $variation=>$text ) {
		if ( $variation == $content_layout[$option] ) {
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
function ptc_leftright_selector( $option, $content_layout, $title, $class='block' ) {

	// Ensuring array is set
	if ( !isset( $content_layout[$option] ) )
		$content_layout[$option] = '';

	// Display HTML
	echo '
<div class="' . $class . '"><p><label>' . $title . '</label><select id="' . $option . '" name="' . $option . '">';

	if ( $content_layout[$option] == 'left' )
		echo '<option value="left">Left</option><option value="right">Right</option>';
	else
		echo '<option value="right">Right</option><option value="left">Left</option>';

	echo "</select></p></div>\n";
}

/**
 * Alignment selector
 * @since 0.1
 */
function ptc_alignment_selector( $option, $content_layout, $title, $class='block alignment' ) {

	echo '<div class="' . $class . '"><p><label>' . $title . '</label><select id="' . $option . '" class="' . $class . '" name="' . $option . '">' . "\n";

	$later = ''; // Setting variable

	foreach ( ptc_alignment_variations() as $opt=>$label ) {
		if ( $label == $content_layout[$option] ) {
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
function ptc_display_selector( $option, $content_layout, $title, $class='block' ) {

	$options = array(
		'none'  => 'off',
		'block' => 'on',
	);

	echo '<div class="' . $class . '"><p><label>' . $title . '</label><select id="' . $option . '" name="' . $option . '">';

	$later = ''; // Setting variable

	foreach ( $options as $opt=>$label ) {
		if ( $opt == $content_layout[$option] ) {
			$initial = '<option value="' . $opt . '">' . $label . '</option>';
		}
		else {
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
function ptc_fontfamily_selector( $option, $content_layout, $title, $class='block fontfamily' ) {
	echo '
<div class="' . $class . '"><p><label>' . $title . '</label><select id="' . $option . '" name="' . $option . '">' . "\n";

	$later = ''; // Setting variable

	foreach ( ptc_font_family() as $opt=>$font ) {
		if ( $font == $content_layout[$option] ) {
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
function ptc_colour_selector( $option, $content_layout, $title, $class='block colour' ) {
	echo "\n" . '<div class="' . $class . '"><p><label>' . $title . '</label><input style="background: '  . $content_layout[$option] . '; color: #' . wppb_invert_colour( $content_layout[$option] ) . '" type="text" class="colourinput" id="' . $option . '" name="' . $option . '" value="'  . $content_layout[$option] . '" /></p></div>' . "\n";
}

/**
 * Displaying text decoration
 * @since 0.1
 */
function ptc_textdecoration_selector( $option, $content_layout, $title, $class='block textdecoration', $inherit='' ) {

	// Grab array of possible variations	
	$ptc_textdecoration_variations = ptc_textdecoration_variations();

	// Add "inherit" as a variation if it is available
	if ( 'inherit' == $inherit )
		array_push( $ptc_textdecoration_variations, $inherit );

	// Create HTML to display select box 
	echo '
<div class="' . $class . '"><p><label>' . $title . '</label><select id="' . $option . '" name="' . $option . '">';

	$later = ''; // Setting variable

	foreach ( $ptc_textdecoration_variations as $opt=>$textdecoration ) {
		if ( $textdecoration == $content_layout[$option] ) {
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
function ptc_bordertype_selector( $option, $content_layout, $title, $class='block bordertype' ) {

	// Create HTML to display select box 
	echo '
<div class="' . $class . '"><p><label>' . $title . '</label><select id="' . $option . '" name="' . $option . '">';

	$later = ''; // Setting variable

	foreach ( ptc_bordertype_variations() as $opt=>$type ) {
		if ( $type == $content_layout[$option] ) {
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
function ptc_number_selector( $option, $content_layout, $title, $class='block coordinates' ) {

	// Ensuring array is set
	if ( !isset( $content_layout[$option] ) )
		$content_layout[$option] = '';

	// Displaying HTML
	echo '
<div class="' . $class . '"><p><label>' . $title . '</label><input type="text" id="' . $option . '" name="' . $option . '" value="'  . $content_layout[$option] . '" /><div id="slider' . $option . '"></div></p></div>
';

}

/**
 * Displaying background image selector
 * @since 0.1
 */
function ptc_background_image_selector( $option, $content_layout, $title, $class='block' ) {

	// Ensuring array is set
	if ( !isset( $content_layout[$option] ) )
		$content_layout[$option] = '';

	// Displaying HTML
	echo '
<div class="' . $class . '"><p><label>' . $title . '</label><input type="text" class="image-picker" id="' . $option . '" name="' . $option . '" value="'  . $content_layout[$option] . '" /><input type="button" class="imagepickerbutton" value="pick" /></p></div>
';

}

/**
 * Displaying font weight
 * @since 0.1
 */
function ptc_fontweight_selector( $option, $content_layout, $title, $class='block fontweight', $inherit='' ) {

	// Grab array of possible variations	
	$ptc_fontweight_variations = array(
		'bold',
		'normal'
	);

	// Add "inherit" as a variation if it is available
	if ( 'inherit' == $inherit )
		array_push( $ptc_fontweight_variations, $inherit );

	// Create HTML to display select box 
	echo '<div class="' . $class . '"><p><label>' . $title . '</label><select id="' . $option . '" name="' . $option . '">' . "\n";

	$later = ''; // Setting variable

	foreach ( $ptc_fontweight_variations as $opt=>$fontweight ) {
		if ( $fontweight == $content_layout[$option] ) {
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
function ptc_fontstyle_selector( $option, $content_layout, $title, $class='block', $inherit='' ) {

	// Grab array of possible variations	
	$ptc_fontstyle_variations = array(
		'italic',
		'normal'
	);

	// Add "inherit" as a variation if it is available
	if ( 'inherit' == $inherit )
		array_push( $ptc_fontstyle_variations, $inherit );

	// Create HTML to display select box 
	echo '
	<div class="' . $class . '"><p><label>' . $title . '</label><select id="' . $option . '" name="' . $option . '">' . "\n";
			foreach ( $ptc_fontstyle_variations as $opt=>$fontstyle ) {
				if ( $fontstyle == $content_layout[$option] )
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
function ptc_texttranform_selector( $option, $content_layout, $title, $class='block texttransform' ) {

	echo '<div class="' . $class . '"><p><label>' . $title . '</label><select id="' . $option . '" name="' . $option . '">' . "\n";

	$later = ''; // Setting variable

	foreach ( ptc_texttransform_variations() as $opt=>$type ) {
		if ( $type == $content_layout[$option] ) {
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
function ptc_smallcaps_selector( $option, $content_layout, $title, $class='block smallcaps' ) {

	// Ensuring array is set
	if ( !isset( $content_layout[$option] ) )
		$content_layout[$option] = '';

	// Display HTML
	echo '
	<div class="' . $class . '"><p><label>' . $title . '</label><select id="' . $option . '" name="' . $option . '">';
			foreach( ptc_smallcaps_variations() as $variation=>$text ) {
				echo '<option ';
				if ( $variation == $content_layout[$option] )
					echo 'SELECTED '; 
				echo 'value="' . $variation . '">' . $text . '</option>';
			}
	echo '</select></p></div>';
}

/**
 * Wrapper function for adding borders around large blocks
 * @since 1.0
 */
function ptc_wrapper_block( $chunk, $content_layout, $heading='h2' ) {

	if ( 'h2' == $heading )
		echo '<div class="section-layout"><h2>Border</h2>';
	?>
	<h3><?php _e( 'Border top', 'wppb_lang' ); ?></h3>
	<?php ptc_number_selector( $chunk . '_border_top_width', $content_layout, __( 'Width', 'wppb_lang' ), 'block coordinates' ); ?>
	<?php ptc_bordertype_selector( $chunk . '_border_top_type', $content_layout, __( 'Type', 'wppb_lang' ), 'block bordertype' ); ?>
	<?php ptc_colour_selector( $chunk . '_border_top_colour', $content_layout, __( 'Colour', 'wppb_lang' ), 'block colour' ); ?>
	<h3><?php _e( 'Border right', 'wppb_lang' ); ?></h3>
	<?php ptc_number_selector( $chunk . '_border_right_width', $content_layout, __( 'Width', 'wppb_lang' ), 'block coordinates' ); ?>
	<?php ptc_bordertype_selector( $chunk . '_border_right_type', $content_layout, __( 'Type', 'wppb_lang' ), 'block bordertype' ); ?>
	<?php ptc_colour_selector( $chunk . '_border_right_colour', $content_layout, __( 'Colour', 'wppb_lang' ), 'block colour' ); ?>
	<h3><?php _e( 'Border bottom', 'wppb_lang' ); ?></h3>
	<?php ptc_number_selector( $chunk . '_border_bottom_width', $content_layout, __( 'Width', 'wppb_lang' ), 'block coordinates' ); ?>
	<?php ptc_bordertype_selector( $chunk . '_border_bottom_type', $content_layout, __( 'Type', 'wppb_lang' ), 'block bordertype' ); ?>
	<?php ptc_colour_selector( $chunk . '_border_bottom_colour', $content_layout, __( 'Colour', 'wppb_lang' ), 'block colour' ); ?>
	<h3><?php _e( 'Border left', 'wppb_lang' ); ?></h3>
	<?php ptc_number_selector( $chunk . '_border_left_width', $content_layout, __( 'Width', 'wppb_lang' ), 'block coordinates' ); ?>
	<?php ptc_bordertype_selector( $chunk . '_border_left_type', $content_layout, __( 'Type', 'wppb_lang' ), 'block bordertype' ); ?>
	<?php ptc_colour_selector( $chunk . '_border_left_colour', $content_layout, __( 'Colour', 'wppb_lang' ), 'block colour' ); ?>
	<?php
	if ( 'h2' == $heading )
		echo '</div><div class="section-layout">';
	?>
	<<?php echo $heading; ?>><?php _e( 'Margins', 'wppb_lang' ); ?></<?php echo $heading; ?>>
	<?php ptc_number_selector( $chunk . '_top_margin', $content_layout, __( 'Top margin', 'wppb_lang' ), 'block coordinates' ); ?>
	<?php ptc_number_selector( $chunk . '_bottom_margin', $content_layout, __( 'Bottom margin', 'wppb_lang' ), 'block coordinates' ); ?>
	<?php
	if ( 'h2' == $heading )
		echo '</div>';
}

/**
 * Wrapper function for adding borders around large blocks
 * @since 1.0
 */
function ptc_background( $name, $content_layout ) {
	ptc_display_selector( $name . '_display', $content_layout, __( 'Display?', 'wppb_lang' ) );
	ptc_colour_selector( $name . '_colour', $content_layout, __( 'Colour', 'wppb_lang' ) );
	ptc_background_image_selector( $name . '_image', $content_layout, __( 'Image', 'wppb_lang' ) );
	ptc_imagetiling_selector( $name . '_image_tiling', $content_layout, __( 'Image tiling', 'wppb_lang' ) );
}
