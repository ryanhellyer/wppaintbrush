<?php
/**
 * @package WordPress
 * @subpackage WP Paintbrush
 * @since WP Paintbrush 1.0
 *
 * Adds the "Sidebars" section to the WP Paintbrush theme
 */


/*
 * Add new "Sidebars" link to main tabber in editing panel
 * @since 1.0
 */
function wppb_sidebars_editor_link() {
	echo '<li id="pixopoint_sidebars_options"><a href="#sidebars_options">Sidebars</a></li>';
} 
add_action( 'wppb_add_editor_links', 'wppb_sidebars_editor_link', 40 );

/* Add new "Sidebars" tab to main editing panel tabber
 * @since 1.0
 */
function wppb_sidebars_editor_tab() {
	$wppb_design_settings = get_option( WPPB_DESIGNER_SETTINGS );

	// Add HTML
	?>
<div class="tab-block" id="sidebars_options">
	<div id="tabs-sidebars" class="inner-tabber">
		<ul>
			<li id="wppb_sidebaroverall_options"><a href="#sidebaroverall_options" title="<?php _e( 'Overall', 'wppb_lang' ); ?>"><?php _e( 'Overall', 'wppb_lang' ); ?></a></li>
			<li id="wppb_sidebarheading_options"><a href="#sidebarheading" title="<?php _e( 'Heading', 'wppb_lang' ); ?>"><?php _e( 'Heading', 'wppb_lang' ); ?></a></li>
			<li id="wppb_sidebarparagraph_options"><a href="#sidebarparagraph_options" title="<?php _e( 'Paragraph', 'wppb_lang' ); ?>"><?php _e( 'Paragraph', 'wppb_lang' ); ?></a></li>
			<li id="wppb_sidebarlistitem_options"><a href="#sidebarlistitem_options" title="<?php _e( 'List items', 'wppb_lang' ); ?>"><?php _e( 'List items', 'wppb_lang' ); ?></a></li>
		</ul>
		<div class="inner-tab-block" id="sidebaroverall_options">
			<div class="section-layout">
				<h2><?php _e( 'Background', 'wppb_lang' ); ?></h2>
				<?php wppb_colour_selector( 'sidebar_background_colour', $wppb_design_settings, __( 'Colour', 'wppb_lang' ) ); ?>
				<?php wppb_background_image_selector( 'sidebar_background_image', $wppb_design_settings, __( 'Image', 'wppb_lang' ) ); ?>
				<?php wppb_imagetiling_selector( 'sidebar_background_image_tiling', $wppb_design_settings, __( 'Tiling', 'wppb_lang' ) ); ?>
			</div>
			<div class="section-layout">
				<h2><?php _e( 'Widths', 'wppb_lang' ); ?></h2>
				<?php wppb_number_selector( 'aside_1_width', $wppb_design_settings, __( 'Sidebar 1', 'wppb_lang' ), 'block coordinates' ); ?>
				<?php wppb_number_selector( 'aside_2_width', $wppb_design_settings, __( 'Sidebar 2', 'wppb_lang' ), 'block coordinates' ); ?>
			</div>
			<?php wppb_text_padding( 'aside', $wppb_design_settings, 'block coordinates' ); ?>
		</div>
		<div class="inner-tab-block" id="sidebarheading">
			<?php 
				wppb_text_display( 'sidebar_heading', $wppb_design_settings, __( 'Heading', 'wppb_lang' ) ); 
				wppb_text_margins( 'sidebar_heading', $wppb_design_settings );
				wppb_text_padding( 'sidebar_heading', $wppb_design_settings );
				wppb_text_background( 'sidebar_heading', $wppb_design_settings );
				wppb_text_borders_horizontal( 'sidebar_heading', $wppb_design_settings );
			?>
		</div>
		<div class="inner-tab-block" id="sidebarparagraph_options">
			<?php
				wppb_text_display( 'sidebar_paragraph', $wppb_design_settings, __( 'Paragraph', 'wppb_lang' ) ); 
				wppb_text_margins( 'sidebar_paragraph', $wppb_design_settings, 'block coordinates' );
				wppb_text_padding( 'sidebar_paragraph', $wppb_design_settings, 'block coordinates' );
				wppb_text_background( 'sidebar_paragraph', $wppb_design_settings );
				wppb_text_borders_horizontal( 'sidebar_paragraph', $wppb_design_settings );
			?>
		</div>
		<div class="inner-tab-block" id="sidebarlistitem_options">
			<?php 
				wppb_text_display( 'sidebar_list', $wppb_design_settings, __( 'List text', 'wppb_lang' ) ); 
				wppb_text_margins( 'sidebar_list', $wppb_design_settings, 'block coordinates' );
				wppb_text_padding( 'sidebar_list', $wppb_design_settings, 'block coordinates' );
				wppb_text_background( 'sidebar_list', $wppb_design_settings, 'block coordinates' );
				wppb_text_borders_horizontal( 'sidebar_list', $wppb_design_settings );
			?>
		</div>
	</div>
</div>
<?php
}
add_action( 'wppb_add_editor_tabs', 'wppb_sidebars_editor_tab' );

/*
 * Add text types to be sanitized to the global array
 * @since 1.0
 */
function wppb_addsidebars_text_type_options() {
	global $wppb_texttype;

	// Other text options
	array_push( $wppb_texttype, 'sidebar_heading' );
	array_push( $wppb_texttype, 'sidebar_list' );
	array_push( $wppb_texttype, 'sidebar_paragraph' );

	return $wppb_texttype;
}
add_action( 'wppb_hook_text_type_options', 'wppb_addsidebars_text_type_options' );

/*
 * Add colours to be sanitized to the global array
 * @since 1.0
 */
function wppb_addsidebars_colour_options() {
	global $wppb_colour_options;

	// Colour options
	array_push( $wppb_colour_options, 'sidebar_background_colour' );

	return $wppb_colour_options;
}
add_action( 'wppb_hook_colour_options', 'wppb_addsidebars_colour_options' );

/**
 * Add image options to be sanitized to the global array
 * @since 1.0
 */
function wppb_addsidebars_image_options() {
	global $wppb_image_options;

	// Image options
	array_push( $wppb_image_options, 'sidebar_background_image' );

	return $wppb_image_options;
}
add_action( 'wppb_hook_image_options', 'wppb_addsidebars_image_options' );

/**
 * Add little numbers to be sanitized, to the global array
 * @since 1.0
 */
function wppb_addsidebars_littlenumbers_options() {
	global $wppb_littlenumbers_options;

	// Little numbers options
	array_push( $wppb_littlenumbers_options, 'aside_padding_top' );
	array_push( $wppb_littlenumbers_options, 'aside_padding_right' );
	array_push( $wppb_littlenumbers_options, 'aside_padding_bottom' );
	array_push( $wppb_littlenumbers_options, 'aside_padding_left' );

	return $wppb_littlenumbers_options;
}
add_action( 'wppb_hook_littlenumbers_options', 'wppb_addsidebars_littlenumbers_options' );

/**
 * Add big numbers to be sanitized, to the global array
 * @since 1.0
 */
function wppb_addsidebars_bignumbers_options() {
	global $wppb_bignumbers_options;

	// Big numbers options
	array_push( $wppb_bignumbers_options, 'aside_1_width' );
	array_push( $wppb_bignumbers_options, 'aside_2_width' );

	return $wppb_bignumbers_options;
}
add_action( 'wppb_hook_bignumbers_options', 'wppb_addsidebars_bignumbers_options' );

/**
 * Add image tiling options to be sanitized, to the global array
 * @since 1.0
 */
function wppb_addsidebars_imagetiling_options() {
	global $wppb_imagetiling_options;

	// Image tiling options
	array_push( $wppb_imagetiling_options, 'sidebar_background_image_tiling' );

	return $wppb_imagetiling_options;
}
add_action( 'wppb_hook_imagetiling_options', 'wppb_addsidebars_imagetiling_options' );
