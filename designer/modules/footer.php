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
add_action( 'wppb_add_editor_links', 'wppb_footer_editor_link', 70 );

/* Add new editor tab to editing panel
 * @since 1.0
 */
function wppb_footer_editor_tab() {
	$wppb_design_settings = get_option( WPPB_DESIGNER_SETTINGS );

	// Add HTML
	?>
<div class="tab-block" id="footer_options">
	<div id="tabs-footer" class="inner-tabber">
		<ul>
			<?php
				// Hook for adding new link
				do_action( 'wppb_add_footereditor_sublinks' );
			?> 
		</ul>
		<?php do_action( 'wppb_add_footer_editor_content' ); ?>
	</div>
</div>
<?php
}
add_action( 'wppb_add_editor_tabs', 'wppb_footer_editor_tab' );

/* Add sublinks to footer section
 * @since 1.0
 */
function wppb_footer_editor_sublinks() { ?>
	<li id="wppb_footeroverall_options"><a href="#footeroverall_options" title="<?php _e( 'Overall', 'wppb_lang' ); ?>"><?php _e( 'Overall', 'wppb_lang' ); ?></a></li>
	<li id="wppb_footermenu_options"><a href="#footermenu_options" title="<?php _e( 'Menu', 'wppb_lang' ); ?>"><?php _e( 'Menu', 'wppb_lang' ); ?></a></li>
	<li id="wppb_footercopyright_options"><a href="#footercopyright_options" title="<?php _e( 'Copyright', 'wppb_lang' ); ?>"><?php _e( 'Copyright', 'wppb_lang' ); ?></a></li><?php
}
add_action( 'wppb_add_footereditor_sublinks', 'wppb_footer_editor_sublinks' );

/* Add footer sections editor content
 * @since 1.0
 */
function wppb_add_footer_editor_content() {
	$wppb_design_settings = get_option( WPPB_DESIGNER_SETTINGS ); ?>
<div class="inner-tab-block" id="footeroverall_options">
	<div class="section-layout">
		<h2><?php _e( 'Footer', 'wppb_lang' ); ?></h2>
		<?php 
			wppb_number_selector( 'footer_max_width', $wppb_design_settings, __( 'Max width', 'wppb_lang' ) );
			wppb_number_selector( 'footer_min_width', $wppb_design_settings, __( 'Min width', 'wppb_lang' ) );
			wppb_number_selector( 'footer_height', $wppb_design_settings, __( 'height', 'wppb_lang' ) );
		?>
	</div>
	<div class="section-layout">
	<h2><?php _e( 'Background', 'wppb_lang' ); ?></h3>
		<?php
			wppb_colour_selector( 'footer_background_colour', $wppb_design_settings, __( 'Colour', 'wppb_lang' ) );
			wppb_background_image_selector( 'footer_background_image', $wppb_design_settings, __( 'Image', 'wppb_lang' ) );
			wppb_imagetiling_selector( 'footer_background_image_tiling', $wppb_design_settings, __( 'Image tiling', 'wppb_lang' ) );
		?>
	</div>
	<div class="section-layout">
		<h2><?php _e( 'Full width background', 'wppb_lang' ); ?></h2>
		<p><?php _e( 'Background displayed across the full width of the site - leave blank to use the standard page background.', 'wppb_lang' ); ?></p>
		<?php wppb_display_selector( 'footer_fullwidth_background_display', $wppb_design_settings, __( 'Display', 'wppb_lang' ) ); ?>
		<?php wppb_colour_selector( 'footer_fullwidth_background_colour', $wppb_design_settings, __( 'Colour', 'wppb_lang' ) ); ?>
		<?php wppb_background_image_selector( 'footer_fullwidth_background_image', $wppb_design_settings, __( 'Image', 'wppb_lang' ) ); ?>
	</div>
	<?php wppb_wrapper_block( 'footer', $wppb_design_settings ); ?>
</div>
<div class="inner-tab-block" id="footermenu_options">
	<div class="section-layout">
		<h2><?php _e( 'Menu', 'wppb_lang' ); ?></h2>
		<?php wppb_display_selector( 'footer_menu_display', $wppb_design_settings, __( 'Display', 'wppb_lang' ) ); ?>
		<?php wppb_alignment_selector( 'footer_menu_alignment', $wppb_design_settings, __( 'Alignment', 'wppb_lang' ) ); ?>
		<?php wppb_number_selector( 'footer_menu_horizontalposition', $wppb_design_settings, __( 'x-coord', 'wppb_lang' ) ); ?>
		<?php wppb_number_selector( 'footer_menu_verticalposition', $wppb_design_settings, __( 'y-coord', 'wppb_lang' ) ); ?>
		<?php wppb_number_selector( 'footer_menu_gap', $wppb_design_settings, __( 'Gap', 'wppb_lang' ) ); ?>
	</div>
	<?php wppb_text_display( 'footer_menu', $wppb_design_settings, __( 'Text', 'wppb_lang' ) ); ?>
</div>
<div class="inner-tab-block" id="footercopyright_options">
	<div class="section-layout">
		<h2><?php _e( 'Copyright', 'wppb_lang' ); ?></h2>
		<?php
			wppb_display_selector( 'footer_copyright_display', $wppb_design_settings, __( 'Display', 'wppb_lang' ) );
			wppb_number_selector( 'footer_copyright_horizontalposition', $wppb_design_settings, __( 'x-coord', 'wppb_lang' ) );
			wppb_number_selector( 'footer_copyright_verticalposition', $wppb_design_settings, __( 'y-coord', 'wppb_lang' ) );
			wppb_alignment_selector( 'footer_copyright_position_centered', $wppb_design_settings, __( 'Centered', 'wppb_lang' ) );
		?>
	</div>
	<?php wppb_text_display( 'footer_copyright', $wppb_design_settings, __( 'Text', 'wppb_lang' ) ); ?>
</div><?php
}
add_action( 'wppb_add_footer_editor_content', 'wppb_add_footer_editor_content' );

/* Add extra block to "Layout editor"
 * @since 1.0
 */
function wppb_footer_block( $chunks ) {

	// The extra block to be added
	$chunks['Footer'] = '[wppb_footer]';

	return $chunks;
}
add_filter( 'wppb_add_chunk_filter', 'wppb_footer_block' );

/**
 * Add shortcode used within template
 * [wppb_footer] shortcode
 * @since 1.0
 */
function wppb_footer_shortcode() {
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
';

	// Filter initial header block - userful for adding extra features
	$functions = apply_filters ( 'wppb_footer_shortcode_content_filter' , $functions );

	$functions .= '	</div>
</footer>
';
	return $functions;
}
add_shortcode( 'wppb_footer', 'wppb_footer_shortcode' );

/*
 * Add Text type sanitization for global sanitization array
 * @since 0.1
 */
function wppb_addfooter_text_type_options() {
	global $wppb_texttype;

	// Other text options
	array_push( $wppb_texttype, 'footer_menu' );
	array_push( $wppb_texttype, 'footer_copyright' );

	return $wppb_texttype;
}
add_action( 'wppb_hook_text_type_options', 'wppb_addfooter_text_type_options' );

/*
 * Add colour sanitization  for global sanitization array
 * @since 1.0
 */
function wppb_addfooter_colour_options() {
	global $wppb_colour_options;

	// Colour options
	array_push( $wppb_colour_options, 'footer_background_colour' );
	array_push( $wppb_colour_options, 'footer_fullwidth_background_colour' );

	array_push( $wppb_colour_options, 'footer_border_top_colour' );
	array_push( $wppb_colour_options, 'footer_border_right_colour' );
	array_push( $wppb_colour_options, 'footer_border_bottom_colour' );
	array_push( $wppb_colour_options, 'footer_border_left_colour' );

	return $wppb_colour_options;
}
add_action( 'wppb_hook_colour_options', 'wppb_addfooter_colour_options' );

/**
 * Add image options sanitization for global sanitization array
 * @since 1.0
 */
function wppb_addfooter_image_options() {
	global $wppb_image_options;

	// Image options
	array_push( $wppb_image_options, 'footer_background_image' );
	array_push( $wppb_image_options, 'footer_fullwidth_background_image' );

	return $wppb_image_options;
}
add_action( 'wppb_hook_image_options', 'wppb_addfooter_image_options' );

/**
 * Add Border type options for global sanitization array
 * @since 1.0
 */
function wppb_addfooter_bordertype_options() {
	global $wppb_bordertype_options;

	// Border type options
	array_push( $wppb_bordertype_options, 'footer_border_top_type' );
	array_push( $wppb_bordertype_options, 'footer_border_right_type' );
	array_push( $wppb_bordertype_options, 'footer_border_bottom_type' );
	array_push( $wppb_bordertype_options, 'footer_border_left_type' );

	return $wppb_bordertype_options;
}
add_action( 'wppb_hook_bordertype_options', 'wppb_addfooter_bordertype_options' );

/**
 * Add Alignment options for global sanitization array
 * @since 1.0
 */
function wppb_addfooter_alignment_options() {
	global $wppb_alignment_options;

	// Alignment options
	array_push( $wppb_alignment_options, 'footer_menu_alignment' );

	return $wppb_alignment_options;
}
add_action( 'wppb_hook_alignment_options', 'wppb_addfooter_alignment_options' );

/**
 * Add Centered options for global sanitization array
 * @since 1.0
 */
function wppb_addfooter_centered_options() {
	global $wppb_centered_options;

	// Centered options
	array_push( $wppb_centered_options, 'footer_copyright_position_centered' );

	return $wppb_centered_options;
}
add_action( 'wppb_hook_centered_options', 'wppb_addfooter_centered_options' );

/**
 * Add Display options for global sanitization array
 * @since 1.0
 */
function wppb_addfooter_display_options() {
	global $wppb_display_options;

	// Display options
	array_push( $wppb_display_options, 'footer_menu_display' );
	array_push( $wppb_display_options, 'footer_copyright_display' );
	array_push( $wppb_display_options, 'footer_fullwidth_background_display' );

	return $wppb_display_options;
}
add_action( 'wppb_hook_display_options', 'wppb_addfooter_display_options' );

/**
 * Add Little numbers options for global sanitization array
 * @since 1.0
 */
function wppb_addfooter_littlenumbers_options() {
	global $wppb_littlenumbers_options;

	// Little numbers options
	array_push( $wppb_littlenumbers_options, 'footer_verticalpadding' );
	array_push( $wppb_littlenumbers_options, 'footer_menu_gap' );

	array_push( $wppb_littlenumbers_options, 'footer_border_top_width' );
	array_push( $wppb_littlenumbers_options, 'footer_border_right_width' );
	array_push( $wppb_littlenumbers_options, 'footer_border_bottom_width' );
	array_push( $wppb_littlenumbers_options, 'footer_border_left_width' );
	array_push( $wppb_littlenumbers_options, 'footer_top_margin' );
	array_push( $wppb_littlenumbers_options, 'footer_bottom_margin' );

	return $wppb_littlenumbers_options;
}
add_action( 'wppb_hook_littlenumbers_options', 'wppb_addfooter_littlenumbers_options' );

/**
 * Add Big numbers options for global sanitization array
 * @since 1.0
 */
function wppb_addfooter_bignumbers_options() {
	global $wppb_bignumbers_options;

	// Big numbers options
	array_push( $wppb_bignumbers_options, 'footer_copyright_horizontalposition' );
	array_push( $wppb_bignumbers_options, 'footer_copyright_verticalposition' );
	array_push( $wppb_bignumbers_options, 'footer_menu_horizontalposition' );
	array_push( $wppb_bignumbers_options, 'footer_menu_verticalposition' );
	array_push( $wppb_bignumbers_options, 'footer_max_width' );
	array_push( $wppb_bignumbers_options, 'footer_max_width' );
	array_push( $wppb_bignumbers_options, 'footer_min_width' );
	array_push( $wppb_bignumbers_options, 'footer_height' );

	return $wppb_bignumbers_options;
}
add_action( 'wppb_hook_bignumbers_options', 'wppb_addfooter_bignumbers_options' );

/**
 * Add Image tiling options for global sanitization array
 * @since 1.0
 */
function wppb_addfooter_imagetiling_options() {
	global $wppb_imagetiling_options;

	// Image tiling options
	array_push( $wppb_imagetiling_options, 'footer_background_image_tiling' );

	return $wppb_imagetiling_options;
}
add_action( 'wppb_hook_imagetiling_options', 'wppb_addfooter_imagetiling_options' );

/**
 * Add raw text options for global sanitization array
 * @since 1.0
 */
function wppb_addfooter_rawtext_options() {
	global $wppb_rawtext_options;

	// Raw text options
	array_push( $wppb_rawtext_options, 'copyright' );

	return $wppb_rawtext_options;
}
add_action( 'wppb_hook_rawtext_options', 'wppb_addfooter_rawtext_options' );

