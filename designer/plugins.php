<?php
/**
 * @package WordPress
 * @subpackage WP Paintbrush
 * @since WP Paintbrush 1.0
 *
 * Extra functions potentially used by plugins
 * This file is not loaded directly by the theme
 *
 * Note: There is no ABSPATH check in this file due to it potentially being used by external programs
 */


/* Create script for dynamic number CSS
 * @since 0.1
 */
function wppb_dynamic_css_number( $name, $element, $property, $min, $max, $step ) {

	// Dynamically change CSS and input field via slider
?>
var number = parseInt($("<?php echo $element; ?>").css('<?php echo $property; ?>'));
$("#<?php echo $name; ?>").text(number);
$("#slider<?php echo $name; ?>").slider({
	value: number,
	min: <?php echo $min; ?>,
	max: <?php echo $max; ?>,
	step: <?php echo $step; ?>,
	slide: function(event, ui) {
		$("<?php echo $element; ?>").css("<?php echo $property; ?>", ui.value + "px");
		$("#<?php echo $name; ?>").attr("value", ui.value);
	}
});<?php

// Dynamically change CSS and slider via input field
?>
$('input#<?php echo $name; ?>').change(function() {
	var random = $('input#<?php echo $name; ?>').val();
	$('<?php echo $element; ?>').css('<?php echo $property; ?>',random+'px');
	$("#slider<?php echo $name; ?>").slider({
		value: random,
		min: <?php echo $min; ?>,
		max: <?php echo $max; ?>,
		step: <?php echo $step; ?>,
	});
});
<?php
}

/* Create CSS for background attribute
 * @since 1.0
 */
function wppb_backgroundimage_creator( $wppb_design_settings, $name, $extras='' ) {
	// Setting variables
	$background = '';
	if ( empty( $wppb_design_settings[$name . '_display'] ) )
		$wppb_design_settings[$name . '_display'] = '';
	if ( empty( $wppb_design_settings[$name . '_colour'] ) )
		$wppb_design_settings[$name . '_colour'] = '';
	if ( empty( $wppb_design_settings[$name . '_image'] ) )
		$wppb_design_settings[$name . '_image'] = '';
	if ( empty( $wppb_design_settings[$name . '_image_tiling'] ) )
		$wppb_design_settings[$name . '_image_tiling'] = '';
	if ( empty( $wppb_design_settings[$name . '_positioning'] ) )
		$wppb_design_settings[$name . '_positioning'] = '';

	// Bail out now if set not to display a background
	if ( 'none' == $wppb_design_settings[$name . '_display'] )
		return;

	// Add initial background property
	if ( '' != $wppb_design_settings[$name . '_colour'] || '' != $wppb_design_settings[$name . '_image'] )
		$background .= "background: ";

	// Add colour value
	if ( '' != $wppb_design_settings[$name . '_colour'] )
		$background .= $wppb_design_settings[$name . '_colour'];

	// Add image value
	$extension = explode( '.', $wppb_design_settings[$name . '_image'] );
	if ( isset( $extension[1] ) ) {
		if ( 'png' == $extension[1] || 'jpg' == $extension[1] || 'jpg' == $extension[1] || 'gif' == $extension[1] ) {
			$background .= " url('" . $wppb_design_settings[$name . '_image'] . "')" . $wppb_design_settings[$name . '_image_tiling'] . $wppb_design_settings[$name . '_positioning'];

			// Add random extras on the end (such as "top center" etc.)
			if ( '' != $extras )
				$background .= ' ' . $extras;
		}
	}

	// Close property
	$background .= ';';

	return $background;
}
