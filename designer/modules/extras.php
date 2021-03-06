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
add_action( 'wppb_add_editor_links', 'wppb_extras_editor_link', 60 );

/* Add new "Extras" editor tab to editing panel
 * @since 1.0
 */
function wppb_extras_editor_tab() {
	$wppb_design_settings = get_option( WPPB_DESIGNER_SETTINGS );

	// Add HTML
	?>
<div class="tab-block" id="extras_options">
	<div id="tabs-extras" class="inner-tabber">
		<ul>
			<li id="wppb_overall_options"><a href="#overall_options" title="<?php _e( 'Overall', 'wppb_lang' ); ?>"><?php _e( 'Banner', 'wppb_lang' ); ?></a></li>
		</ul>
		<div class="inner-tab-block" id="overall_options">
			<div class="chunk">
				<div class="section-layout">
					<h2><?php _e( 'Header image', 'wppb_lang' ); ?></h2>
					<?php
						wppb_number_selector( 'banner_max_width', $wppb_design_settings, __( 'Maximum width', 'wppb_lang' ) );
						wppb_number_selector( 'banner_min_width', $wppb_design_settings, __( 'Minimum width', 'wppb_lang' ) );
						wppb_number_selector( 'banner_height', $wppb_design_settings, __( 'Height', 'wppb_lang' ) );
						wppb_background_image_selector( 'banner_image', $wppb_design_settings, __( 'Image', 'wppb_lang' ) );
					?>
				</div>
				<?php wppb_wrapper_block( 'banner', $wppb_design_settings ); ?>
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
function wppb_extras_block( $chunks ) {

	// The extra block to be added
	$chunks['Header image'] = '[wppb_headerimage]';

	return $chunks;
}
add_filter( 'wppb_add_chunk_filter', 'wppb_extras_block' );

/*
 * Adds the shortcode for creating the banner in the template
 * [wppb_headerimage] shortcode
 * @since 0.1
 */
function wppb_headerimage_shortcode() {
	$functions = '
<div id="banner">
	<div class="banner-image">
	</div>
</div>
';
	return $functions;
}
add_shortcode( 'wppb_headerimage', 'wppb_headerimage_shortcode' );

/*
 * Add colours to be sanitized, to the global array
 * @since 1.0
 */
function wppb_addbanner_colour_options() {
	global $wppb_colour_options;

	// Colour options
	array_push( $wppb_colour_options, 'banner_border_top_colour' );
	array_push( $wppb_colour_options, 'banner_border_right_colour' );
	array_push( $wppb_colour_options, 'banner_border_bottom_colour' );
	array_push( $wppb_colour_options, 'banner_border_left_colour' );

	return $wppb_colour_options;
}
add_action( 'wppb_hook_colour_options', 'wppb_addbanner_colour_options' );

/**
 * Add image options to be sanitized, to the global array
 * @since 1.0
 */
function wppb_addbanner_image_options() {
	global $wppb_image_options;

	// Image options
	array_push( $wppb_image_options, 'banner_image' );

	return $wppb_image_options;
}
add_action( 'wppb_hook_image_options', 'wppb_addbanner_image_options' );

/**
 * Add border types to be sanitized, to the global array
 * @since 1.0
 */
function wppb_addbanner_bordertype_options() {
	global $wppb_bordertype_options;

	// Border type options
	array_push( $wppb_bordertype_options, 'banner_border_top_type' );
	array_push( $wppb_bordertype_options, 'banner_border_right_type' );
	array_push( $wppb_bordertype_options, 'banner_border_bottom_type' );
	array_push( $wppb_bordertype_options, 'banner_border_left_type' );

	return $wppb_bordertype_options;
}
add_action( 'wppb_hook_bordertype_options', 'wppb_addbanner_bordertype_options' );

/**
 * Add little numbers to be sanitized, to the global array
 * @since 1.0
 */
function wppb_addbanner_littlenumbers_options() {
	global $wppb_littlenumbers_options;

	// Little numbers options
	array_push( $wppb_littlenumbers_options, 'banner_border_top_width' );
	array_push( $wppb_littlenumbers_options, 'banner_border_right_width' );
	array_push( $wppb_littlenumbers_options, 'banner_border_bottom_width' );
	array_push( $wppb_littlenumbers_options, 'banner_border_left_width' );
	array_push( $wppb_littlenumbers_options, 'banner_top_margin' );
	array_push( $wppb_littlenumbers_options, 'banner_bottom_margin' );

	return $wppb_littlenumbers_options;
}
add_action( 'wppb_hook_littlenumbers_options', 'wppb_addbanner_littlenumbers_options' );

/**
 * Add big numbers to be sanitized, to the global array
 * @since 1.0
 */
function wppb_addbanner_bignumbers_options() {
	global $wppb_bignumbers_options;

	// Big numbers options
	array_push( $wppb_bignumbers_options, 'banner_max_width' );
	array_push( $wppb_bignumbers_options, 'banner_min_width' );
	array_push( $wppb_bignumbers_options, 'banner_height' );

	return $wppb_bignumbers_options;
}
add_action( 'wppb_hook_bignumbers_options', 'wppb_addbanner_bignumbers_options' );

