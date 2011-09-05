<?php
/**
 * @package WordPress
 * @subpackage WP Paintbrush
 * @since WP Paintbrush 1.0
 *
 * Allows users to add a Footer to their WP Paintbrush theme
 */


/* Add new "Footer" editor link to main tabber in editing panel
 * @since 1.0
 */
function wppb_footer_editor_link() {
	echo '<li id="pixopoint_footer_options"><a href="#footer_options">Footer</a></li> ';
} 
add_action( 'wppb_add_editor_links', 'wppb_footer_editor_link' );

/* Add new editor tab to editing panel
 * @since 1.0
 */
function wppb_footer_editor_tab() {
	$content_layout = get_option( WPPB_DESIGNER_SETTINGS );

	// Add HTML
	?>
<div class="tab-block" id="footer_options">
	<div id="tabs-footer" class="inner-tabber">
		<ul>
			<li id="ptc_footeroverall_options"><a href="#footeroverall_options" title="Overall">Overall</a></li>
			<li id="ptc_footermenu_options"><a href="#footermenu_options" title="Menu">Menu</a></li>
			<li id="ptc_footercopyright_options"><a href="#footercopyright_options" title="Copyright">Copyright</a></li>
		</ul>
		<div class="inner-tab-block" id="footeroverall_options">
			<div class="section-layout">
				<h2>Footer</h2>
				<?php 
					ptc_number_selector( 'footer_max_width', $content_layout, 'Max width' );
					ptc_number_selector( 'footer_min_width', $content_layout, 'Min width' );
					ptc_number_selector( 'footer_height', $content_layout, 'height' );
				?>
			</div>
			<div class="section-layout">
			<h2>Background</h3>
				<?php
					ptc_colour_selector( 'footer_background_colour', $content_layout, 'Colour' );
					ptc_background_image_selector( 'footer_background_image', $content_layout, 'Image' );
					ptc_imagetiling_selector( 'footer_background_image_tiling', $content_layout, 'Image tiling' );
				?>
			</div>
			<div class="section-layout">
				<h2>Full width background</h2>
				<p>Background displayed across the full width of the site - leave blank to use the standard page background.</p>
				<?php ptc_display_selector( 'footer_fullwidth_background_display', $content_layout, 'Display' ); ?>
				<?php ptc_colour_selector( 'footer_fullwidth_background_colour', $content_layout, 'Colour' ); ?>
				<?php ptc_background_image_selector( 'footer_fullwidth_background_image', $content_layout, 'Image' ); ?>
			</div>
			<?php ptc_wrapper_block( 'footer', $content_layout ); ?>
		</div>
		<div class="inner-tab-block" id="footermenu_options">
			<div class="section-layout">
				<h2>Menu</h2>
				<?php ptc_display_selector( 'footer_menu_display', $content_layout, 'Display' ); ?>
				<?php ptc_alignment_selector( 'footer_menu_alignment', $content_layout, 'Alignment' ); ?>
				<?php ptc_number_selector( 'footer_menu_horizontalposition', $content_layout, 'x-coord' ); ?>
				<?php ptc_number_selector( 'footer_menu_verticalposition', $content_layout, 'y-coord' ); ?>
				<?php ptc_number_selector( 'footer_menu_gap', $content_layout, 'Gap' ); ?>
			</div>
			<?php ptc_text_display( 'footer_menu', $content_layout, 'Text' ); ?>
		</div>
		<div class="inner-tab-block" id="footercopyright_options">
			<div class="section-layout">
				<h2>Copyright</h2>
				<?php
					ptc_display_selector( 'footer_copyright_display', $content_layout, 'Display' );
					ptc_number_selector( 'footer_copyright_horizontalposition', $content_layout, 'x-coord' );
					ptc_number_selector( 'footer_copyright_verticalposition', $content_layout, 'y-coord' );
					ptc_alignment_selector( 'footer_copyright_position_centered', $content_layout, 'Centered' );
				?>
			</div>
			<?php ptc_text_display( 'footer_copyright', $content_layout, 'Text' ); ?>
		</div>
	</div>
</div>
<?php
}
add_action( 'wppb_add_editor_tabs', 'wppb_footer_editor_tab' );

/* Add extra block to "Layout editor"
 * @since 1.0
 */
function wppb_footer_block() {
	global $chunks;

	// The extra block to be added
	$chunks['Footer'] = '[ptc_footer]';
}
add_action( 'wppb_add_chunk', 'wppb_footer_block' );

/**
 * Add shortcode used within template
 * [ptc_footer] shortcode
 * @since 1.0
 */
function ptc_footer_shortcode() {
	$functions = '
<footer>
	<div class="footer">
		<nav>
			<ul id="footer">
				[nav_menu theme_location=footer]
			</ul>
		</nav>
		<p>
			[copyright]
		</p>
	</div>
</footer>
';
	return $functions;
}
add_shortcode( 'ptc_footer', 'ptc_footer_shortcode' );


/*
 * Add Text type sanitization for global sanitization array
 * @since 0.1
 */
function ptc_addfooter_text_type_options() {
	global $texttype;

	// Other text options
	array_push( $texttype, 'footer_menu' );
	array_push( $texttype, 'footer_copyright' );

	return $texttype;
}
add_action( 'ptc_hook_text_type_options', 'ptc_addfooter_text_type_options' );

/*
 * Add colour sanitization  for global sanitization array
 * @since 1.0
 */
function ptc_addfooter_colour_options() {
	global $ptc_colour_options;

	// Colour options
	array_push( $ptc_colour_options, 'footer_background_colour' );

	array_push( $ptc_colour_options, 'footer_border_top_colour' );
	array_push( $ptc_colour_options, 'footer_border_right_colour' );
	array_push( $ptc_colour_options, 'footer_border_bottom_colour' );
	array_push( $ptc_colour_options, 'footer_border_left_colour' );

	return $ptc_colour_options;
}
add_action( 'ptc_hook_colour_options', 'ptc_addfooter_colour_options' );

/**
 * Add image options sanitization for global sanitization array
 * @since 1.0
 */
function ptc_addfooter_image_options() {
	global $ptc_image_options;

	// Image options
	array_push( $ptc_image_options, 'footer_background_image' );
	array_push( $ptc_image_options, 'footer_fullwidth_background_image' );

	return $ptc_image_options;
}
add_action( 'ptc_hook_image_options', 'ptc_addfooter_image_options' );

/**
 * Add Border type options for global sanitization array
 * @since 1.0
 */
function ptc_addfooter_bordertype_options() {
	global $ptc_bordertype_options;

	// Border type options
	array_push( $ptc_bordertype_options, 'footer_border_top_type' );
	array_push( $ptc_bordertype_options, 'footer_border_right_type' );
	array_push( $ptc_bordertype_options, 'footer_border_bottom_type' );
	array_push( $ptc_bordertype_options, 'footer_border_left_type' );

	return $ptc_bordertype_options;
}
add_action( 'ptc_hook_bordertype_options', 'ptc_addfooter_bordertype_options' );

/**
 * Add Alignment options for global sanitization array
 * @since 1.0
 */
function ptc_addfooter_alignment_options() {
	global $ptc_alignment_options;

	// Alignment options
	array_push( $ptc_alignment_options, 'footer_menu_alignment' );

	return $ptc_alignment_options;
}
add_action( 'ptc_hook_alignment_options', 'ptc_addfooter_alignment_options' );

/**
 * Add Centered options for global sanitization array
 * @since 1.0
 */
function ptc_addfooter_centered_options() {
	global $ptc_centered_options;

	// Centered options
	array_push( $ptc_centered_options, 'footer_copyright_position_centered' );

	return $ptc_centered_options;
}
add_action( 'ptc_hook_centered_options', 'ptc_addfooter_centered_options' );

/**
 * Add Display options for global sanitization array
 * @since 1.0
 */
function ptc_addfooter_display_options() {
	global $ptc_display_options;

	// Display options
	array_push( $ptc_display_options, 'footer_menu_display' );
	array_push( $ptc_display_options, 'footer_copyright_display' );
	array_push( $ptc_display_options, 'footer_fullwidth_background_display' );

	return $ptc_display_options;
}
add_action( 'ptc_hook_display_options', 'ptc_addfooter_display_options' );

/**
 * Add Little numbers options for global sanitization array
 * @since 1.0
 */
function ptc_addfooter_littlenumbers_options() {
	global $ptc_littlenumbers_options;

	// Little numbers options
	array_push( $ptc_littlenumbers_options, 'footer_verticalpadding' );
	array_push( $ptc_littlenumbers_options, 'footer_menu_gap' );

	array_push( $ptc_littlenumbers_options, 'footer_border_top_width' );
	array_push( $ptc_littlenumbers_options, 'footer_border_right_width' );
	array_push( $ptc_littlenumbers_options, 'footer_border_bottom_width' );
	array_push( $ptc_littlenumbers_options, 'footer_border_left_width' );
	array_push( $ptc_littlenumbers_options, 'footer_top_margin' );
	array_push( $ptc_littlenumbers_options, 'footer_bottom_margin' );

	return $ptc_littlenumbers_options;
}
add_action( 'ptc_hook_littlenumbers_options', 'ptc_addfooter_littlenumbers_options' );

/**
 * Add Big numbers options for global sanitization array
 * @since 1.0
 */
function ptc_addfooter_bignumbers_options() {
	global $ptc_bignumbers_options;

	// Big numbers options
	array_push( $ptc_bignumbers_options, 'footer_copyright_horizontalposition' );
	array_push( $ptc_bignumbers_options, 'footer_copyright_verticalposition' );
	array_push( $ptc_bignumbers_options, 'footer_menu_horizontalposition' );
	array_push( $ptc_bignumbers_options, 'footer_menu_verticalposition' );
	array_push( $ptc_bignumbers_options, 'footer_max_width' );
	array_push( $ptc_bignumbers_options, 'footer_max_width' );
	array_push( $ptc_bignumbers_options, 'footer_min_width' );
	array_push( $ptc_bignumbers_options, 'footer_height' );

	return $ptc_bignumbers_options;
}
add_action( 'ptc_hook_bignumbers_options', 'ptc_addfooter_bignumbers_options' );

/**
 * Add Image tiling options for global sanitization array
 * @since 1.0
 */
function ptc_addfooter_imagetiling_options() {
	global $ptc_imagetiling_options;

	// Image tiling options
	array_push( $ptc_imagetiling_options, 'footer_background_image_tiling' );

	return $ptc_imagetiling_options;
}
add_action( 'ptc_hook_imagetiling_options', 'ptc_addfooter_imagetiling_options' );

