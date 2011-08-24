<?php
/**
 * @package WordPress
 * @subpackage WP Paintbrush
 * @since WP Paintbrush 1.0
 *
 * Extra functions potentially used by plugins
 * This file is not loaded directly by the theme
 */


/**
 * Do not continue processing since file was called directly
 * @since 0.1
 */
if ( !defined( 'ABSPATH' ) )
	die( 'Eh! What you doin in here?' );


/* Create script for dynamic number CSS
 * @since 0.1
 */
function ptc_dynamic_css_number( $name, $element, $property, $min, $max, $step ) {

	// Dynamically change CSS and input field via slider
?>
var number = parseInt($("<?php echo $element; ?>").css('<?php echo $property; ?>'));
$(".<?php echo $name; ?>").text(number);
$(".slider<?php echo $name; ?>").slider({
	value: number,
	min: <?php echo $min; ?>,
	max: <?php echo $max; ?>,
	step: <?php echo $step; ?>,
	slide: function(event, ui) {
		$("<?php echo $element; ?>").css("<?php echo $property; ?>", ui.value + "px");
		$(".<?php echo $name; ?>").attr("value", ui.value);
	}
});<?php

// Dynamically change CSS and slider via input field
?>
$('input.<?php echo $name; ?>').change(function() {
	var random = $('input.<?php echo $name; ?>').val();
	$('<?php echo $element; ?>').css('<?php echo $property; ?>',random+'px');
	$(".slider<?php echo $name; ?>").slider({
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

	if ( 'none' == $content_layout[$name . '_display'] )
		return;

	if ( '' != $content_layout[$name . '_colour'] || '' != $content_layout[$name . '_image'] )
		$background .= "background: ";

	if ( '' != $content_layout[$name . '_colour'] )
		$background .= $content_layout[$name . '_colour'];

	$extension = explode( '.', $content_layout[$name . '_image'] );
	if ( 'png' == $extension[1] || 'jpg' == $extension[1] || 'jpg' == $extension[1] || 'gif' == $extension[1] ) {
		$background .= " url('" . $content_layout[$name . '_image'] . "')" . $content_layout[$name . '_image_tiling'] . $content_layout[$name . '_positioning'];

		// Add random extras on the end (such as "top center" etc.)
		if ( '' != $extras )
			$background .= ' ' . $extras;
	}

	$background .= ';';

	return $background;
}
