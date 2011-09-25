<?php
/**
 * @package WordPress
 * @subpackage WP Paintbrush
 * @since WP Paintbrush 1.0
 *
 * Adds Extras section to WP Paintbrush theme
 */



/* Add new "Extras" link to tabber in editing panel
 * @since 1.0
 */
function wppb_extras_editor_link() {
	echo '<li id="pixopoint_extras_options"><a href="#extras_options">Extras</a></li>';
} 
add_action( 'wppb_add_editor_links', 'wppb_extras_editor_link' );

/* Add new "Extras" editor tab to editing panel
 * @since 1.0
 */
function wppb_extras_editor_tab() {
	$content_layout = get_option( WPPB_DESIGNER_SETTINGS );

	// Add HTML
	?>
<div class="tab-block" id="extras_options">
	<div id="tabs-extras" class="inner-tabber">
		<ul>
			<li id="ptc_overall_options"><a href="#overall_options" title="<?php _e( 'Overall', 'wppb_lang' ); ?>"><?php _e( 'Banner', 'wppb_lang' ); ?></a></li>
		</ul>
		<div class="inner-tab-block" id="overall_options">
			<div class="chunk">
				<div class="section-layout">
					<h2><?php _e( 'Header image', 'wppb_lang' ); ?></h2>
					<?php
						ptc_number_selector( 'banner_max_width', $content_layout, __( 'Maximum width', 'wppb_lang' ) );
						ptc_number_selector( 'banner_min_width', $content_layout, __( 'Minimum width', 'wppb_lang' ) );
						ptc_number_selector( 'banner_height', $content_layout, __( 'Height', 'wppb_lang' ) );
						ptc_background_image_selector( 'banner_image', $content_layout, __( 'Image', 'wppb_lang' ) );
					?>
				</div>
				<?php ptc_wrapper_block( 'banner', $content_layout ); ?>
			</div>
		</div>
	</div>
</div>
<?php
}
add_action( 'wppb_add_editor_tabs', 'wppb_extras_editor_tab' );

/* Add extra block to "Layout editor"
 * @since 1.0
 */
function wppb_extras_block() {
	global $chunks;

	// The extra block to be added
	$chunks['Header image'] = '[ptc_headerimage]';

}
add_action( 'wppb_add_chunk', 'wppb_extras_block' );

/*
 * Adds the shortcode for creating the banner in the template
 * [ptc_headerimage] shortcode
 * @since 0.1
 */
function ptc_headerimage_shortcode() {
	$functions = '
<div id="banner">
	<div class="banner-image">
	</div>
</div>
';
	return $functions;
}
add_shortcode( 'ptc_headerimage', 'ptc_headerimage_shortcode' );

/*
 * Add colours to be sanitized, to the global array
 * @since 1.0
 */
function ptc_addbanner_colour_options() {
	global $ptc_colour_options;

	// Colour options
	array_push( $ptc_colour_options, 'banner_border_top_colour' );
	array_push( $ptc_colour_options, 'banner_border_right_colour' );
	array_push( $ptc_colour_options, 'banner_border_bottom_colour' );
	array_push( $ptc_colour_options, 'banner_border_left_colour' );

	return $ptc_colour_options;
}
add_action( 'ptc_hook_colour_options', 'ptc_addbanner_colour_options' );

/**
 * Add image options to be sanitized, to the global array
 * @since 1.0
 */
function ptc_addbanner_image_options() {
	global $ptc_image_options;

	// Image options
	array_push( $ptc_image_options, 'banner_image' );

	return $ptc_image_options;
}
add_action( 'ptc_hook_image_options', 'ptc_addbanner_image_options' );

/**
 * Add border types to be sanitized, to the global array
 * @since 1.0
 */
function ptc_addbanner_bordertype_options() {
	global $ptc_bordertype_options;

	// Border type options
	array_push( $ptc_bordertype_options, 'banner_border_top_type' );
	array_push( $ptc_bordertype_options, 'banner_border_right_type' );
	array_push( $ptc_bordertype_options, 'banner_border_bottom_type' );
	array_push( $ptc_bordertype_options, 'banner_border_left_type' );

	return $ptc_bordertype_options;
}
add_action( 'ptc_hook_bordertype_options', 'ptc_addbanner_bordertype_options' );

/**
 * Add little numbers to be sanitized, to the global array
 * @since 1.0
 */
function ptc_addbanner_littlenumbers_options() {
	global $ptc_littlenumbers_options;

	// Little numbers options
	array_push( $ptc_littlenumbers_options, 'banner_border_top_width' );
	array_push( $ptc_littlenumbers_options, 'banner_border_right_width' );
	array_push( $ptc_littlenumbers_options, 'banner_border_bottom_width' );
	array_push( $ptc_littlenumbers_options, 'banner_border_left_width' );
	array_push( $ptc_littlenumbers_options, 'banner_top_margin' );
	array_push( $ptc_littlenumbers_options, 'banner_bottom_margin' );

	return $ptc_littlenumbers_options;
}
add_action( 'ptc_hook_littlenumbers_options', 'ptc_addbanner_littlenumbers_options' );

/**
 * Add big numbers to be sanitized, to the global array
 * @since 1.0
 */
function ptc_addbanner_bignumbers_options() {
	global $ptc_bignumbers_options;

	// Big numbers options
	array_push( $ptc_bignumbers_options, 'banner_max_width' );
	array_push( $ptc_bignumbers_options, 'banner_min_width' );
	array_push( $ptc_bignumbers_options, 'banner_height' );

	return $ptc_bignumbers_options;
}
add_action( 'ptc_hook_bignumbers_options', 'ptc_addbanner_bignumbers_options' );

