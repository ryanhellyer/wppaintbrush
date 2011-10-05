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
function ptc_dynamic_css_number( $name, $element, $property, $min, $max, $step ) {

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
function ptc_backgroundimage_creator( $content_layout, $name, $extras='' ) {
	// Setting variables
	$background = '';
	if ( empty( $content_layout[$name . '_display'] ) )
		$content_layout[$name . '_display'] = '';
	if ( empty( $content_layout[$name . '_colour'] ) )
		$content_layout[$name . '_colour'] = '';
	if ( empty( $content_layout[$name . '_image'] ) )
		$content_layout[$name . '_image'] = '';
	if ( empty( $content_layout[$name . '_image_tiling'] ) )
		$content_layout[$name . '_image_tiling'] = '';
	if ( empty( $content_layout[$name . '_positioning'] ) )
		$content_layout[$name . '_positioning'] = '';

	// Bail out now if set not to display a background
	if ( 'none' == $content_layout[$name . '_display'] )
		return;

	// Add initial background property
	if ( '' != $content_layout[$name . '_colour'] || '' != $content_layout[$name . '_image'] )
		$background .= "background: ";

	// Add colour value
	if ( '' != $content_layout[$name . '_colour'] )
		$background .= $content_layout[$name . '_colour'];

	// Add image value
	$extension = explode( '.', $content_layout[$name . '_image'] );
	if ( isset( $extension[1] ) ) {
		if ( 'png' == $extension[1] || 'jpg' == $extension[1] || 'jpg' == $extension[1] || 'gif' == $extension[1] ) {
			$background .= " url('" . $content_layout[$name . '_image'] . "')" . $content_layout[$name . '_image_tiling'] . $content_layout[$name . '_positioning'];

			// Add random extras on the end (such as "top center" etc.)
			if ( '' != $extras )
				$background .= ' ' . $extras;
		}
	}

	// Close property
	$background .= ';';

	return $background;
}
