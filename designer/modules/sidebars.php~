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
add_action( 'wppb_add_editor_links', 'wppb_sidebars_editor_link' );

/* Add new "Sidebars" tab to main editing panel tabber
 * @since 1.0
 */
function wppb_sidebars_editor_tab() {
	$content_layout = get_option( WPPB_DESIGNER_SETTINGS );

	// Add HTML
	?>
<div class="tab-block" id="sidebars_options">
	<div id="tabs-sidebars" class="inner-tabber">
		<ul>
			<li id="ptc_sidebaroverall_options"><a href="#sidebaroverall_options" title="Overall">Overall</a></li>
			<li id="ptc_sidebarheading_options"><a href="#sidebarheading" title="Heading">Heading</a></li>
			<li id="ptc_sidebarparagraph_options"><a href="#sidebarparagraph_options" title="Paragraph">Paragraph</a></li>
			<li id="ptc_sidebarlistitem_options"><a href="#sidebarlistitem_options" title="List items">List items</a></li>
		</ul>
		<div class="inner-tab-block" id="sidebaroverall_options">
			<div class="section-layout">
				<h2>Background</h2>
				<?php ptc_colour_selector( 'sidebar_background_colour', $content_layout, 'Colour' ); ?>
				<?php ptc_background_image_selector( 'sidebar_background_image', $content_layout, 'Image' ); ?>
				<?php ptc_imagetiling_selector( 'sidebar_background_image_tiling', $content_layout, 'Tiling' ); ?>
			</div>
			<div class="section-layout">
				<h2>Widths</h2>
				<?php ptc_number_selector( 'aside_1_width', $content_layout, 'Sidebar 1', 'block coordinates' ); ?>
				<?php ptc_number_selector( 'aside_2_width', $content_layout, 'Sidebar 2', 'block coordinates' ); ?>
			</div>
			<?php ptc_text_padding( 'aside', $content_layout, 'block coordinates' ); ?>
		</div>
		<div class="inner-tab-block" id="sidebarheading">
			<?php 
				ptc_text_display( 'sidebar_heading', $content_layout, 'Heading' ); 
				ptc_text_margins( 'sidebar_heading', $content_layout );
				ptc_text_padding( 'sidebar_heading', $content_layout );
				ptc_text_background( 'sidebar_heading', $content_layout );
				ptc_text_borders_horizontal( 'sidebar_heading', $content_layout );
			?>
		</div>
		<div class="inner-tab-block" id="sidebarparagraph_options">
			<?php
				ptc_text_display( 'sidebar_paragraph', $content_layout, 'Paragraph' ); 
				ptc_text_margins( 'sidebar_paragraph', $content_layout, 'block coordinates' );
				ptc_text_padding( 'sidebar_paragraph', $content_layout, 'block coordinates' );
				ptc_text_background( 'sidebar_paragraph', $content_layout );
				ptc_text_borders_horizontal( 'sidebar_paragraph', $content_layout );
			?>
		</div>
		<div class="inner-tab-block" id="sidebarlistitem_options">
			<?php 
				ptc_text_display( 'sidebar_list', $content_layout, 'List text' ); 
				ptc_text_margins( 'sidebar_list', $content_layout, 'block coordinates' );
				ptc_text_padding( 'sidebar_list', $content_layout, 'block coordinates' );
				ptc_text_background( 'sidebar_list', $content_layout, 'block coordinates' );
				ptc_text_borders_horizontal( 'sidebar_list', $content_layout );
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
function ptc_addsidebars_text_type_options() {
	global $texttype;

	// Other text options
	array_push( $texttype, 'sidebar_heading' );
	array_push( $texttype, 'sidebar_list' );
	array_push( $texttype, 'sidebar_paragraph' );

	return $texttype;
}
add_action( 'ptc_hook_text_type_options', 'ptc_addsidebars_text_type_options' );

/*
 * Add colours to be sanitized to the global array
 * @since 1.0
 */
function ptc_addsidebars_colour_options() {
	global $ptc_colour_options;

	// Colour options
	array_push( $ptc_colour_options, 'sidebar_background_colour' );

	return $ptc_colour_options;
}
add_action( 'ptc_hook_colour_options', 'ptc_addsidebars_colour_options' );

/**
 * Add image options to be sanitized to the global array
 * @since 1.0
 */
function ptc_addsidebars_image_options() {
	global $ptc_image_options;

	// Image options
	array_push( $ptc_image_options, 'sidebar_background_image' );

	return $ptc_image_options;
}
add_action( 'ptc_hook_image_options', 'ptc_addsidebars_image_options' );

/**
 * Add little numbers to be sanitized, to the global array
 * @since 1.0
 */
function ptc_addsidebars_littlenumbers_options() {
	global $ptc_littlenumbers_options;

	// Little numbers options
	array_push( $ptc_littlenumbers_options, 'aside_padding_top' );
	array_push( $ptc_littlenumbers_options, 'aside_padding_right' );
	array_push( $ptc_littlenumbers_options, 'aside_padding_bottom' );
	array_push( $ptc_littlenumbers_options, 'aside_padding_left' );

	return $ptc_littlenumbers_options;
}
add_action( 'ptc_hook_littlenumbers_options', 'ptc_addsidebars_littlenumbers_options' );

/**
 * Add big numbers to be sanitized, to the global array
 * @since 1.0
 */
function ptc_addsidebars_bignumbers_options() {
	global $ptc_bignumbers_options;

	// Big numbers options
	array_push( $ptc_bignumbers_options, 'aside_1_width' );
	array_push( $ptc_bignumbers_options, 'aside_2_width' );

	return $ptc_bignumbers_options;
}
add_action( 'ptc_hook_bignumbers_options', 'ptc_addsidebars_bignumbers_options' );

/**
 * Add image tiling options to be sanitized, to the global array
 * @since 1.0
 */
function ptc_addsidebars_imagetiling_options() {
	global $ptc_imagetiling_options;

	// Image tiling options
	array_push( $ptc_imagetiling_options, 'sidebar_background_image_tiling' );

	return $ptc_imagetiling_options;
}
add_action( 'ptc_hook_imagetiling_options', 'ptc_addsidebars_imagetiling_options' );
