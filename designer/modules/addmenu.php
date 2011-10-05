<?php
/**
 * @package WordPress
 * @subpackage WP Paintbrush
 * @since WP Paintbrush 1.0
 *
 * Adds the "Menu" section to the WP Paintbrush theme
 */



/* Adds new "Menu" editor link to the main tabber in the editing panel
 * @since 0.1
 */
function wppb_addmenu_editor_link() {
	echo '<li id="pixopoint_menus_options"><a href="#menus_options">' . __( 'Menus', 'wppb_lang' ) . '</a></li>';
} 
add_action( 'wppb_add_editor_links', 'wppb_addmenu_editor_link' );

/* Hooks wppb_addmenu_editor_link() into editing panel. 
 * The wppb_addmenu_editor_tab() function isn't hooked directly so that new plugins can easily add new menus via the same block of code
 * @since 0.1
 */
function wppb_addmenu_load_editor_tab() {
	wppb_addmenu_editor_tab( '1' );
}
add_action( 'wppb_add_editor_tabs', 'wppb_addmenu_load_editor_tab' );

/*
 * Add new "Menu" link to main tabber in editing panel
 * @since 1.0
 */
function wppb_addmenu_editor_tab( $number ) {
	$content_layout = get_option( WPPB_DESIGNER_SETTINGS );
	
	// Calculating value to use for ID
	if ( 1 == $number )
		$id = '';
	else $id = $number;

	// Add HTML
	?>
<div class="tab-block" id="menus<?php echo $id; ?>_options">
	<div id="tabs-menus<?php echo $id; ?>" class="inner-tabber">
		<ul>
			<li id="ptc_menu<?php echo $id; ?>overall_options"><a href="#menu<?php echo $id; ?>overall_options" title="<?php _e( 'Overall', 'wppb_lang' ); ?>"><?php _e( 'Overall', 'wppb_lang' ); ?></a></li>
			<li id="ptc_menu<?php echo $id; ?>text_options"><a href="#menu<?php echo $id; ?>text_options" title="<?php _e( 'Menu ' . $id . ' items', 'wppb_lang' ); ?>"><?php _e( 'Menu items', 'wppb_lang' ); ?></a></li>
		</ul>
		<div class="inner-tab-block" id="menu<?php echo $id; ?>overall_options">
			<div class="section-layout">
				<h2><?php _e( 'Menu', 'wppb_lang' ); ?></h2>
				<?php
					ptc_number_selector( 'menu' . $number . '_max_width', $content_layout, __( 'Maximum width', 'wppb_lang' ) );
					ptc_number_selector( 'menu' . $number . '_min_width', $content_layout, __( 'Minimum width', 'wppb_lang' ) );
				?>
			</div>
			<div class="section-layout">
				<h2><?php _e( 'Background', 'wppb_lang' ); ?></h2>
				<?php
					ptc_colour_selector( 'menu' . $number . '_background_colour', $content_layout, __( 'Colour', 'wppb_lang' ) );
					ptc_background_image_selector( 'menu' . $number . '_background_image', $content_layout, __( 'Image', 'wppb_lang' ) );
				?>
			</div>
			<div class="section-layout">
				<h2><?php _e( 'Full width background', 'wppb_lang' ); ?></h2>
				<p><?php _e( 'Background displayed across the full width of the site - leave blank to use the standard page background.', 'wppb_lang' ); ?></p>
				<?php ptc_display_selector( 'menu' . $number . '_fullwidth_background_display', $content_layout, __( 'Display', 'wppb_lang' ) ); ?>
				<?php ptc_colour_selector( 'menu' . $number . '_fullwidth_background_colour', $content_layout, __( 'Colour', 'wppb_lang' ) ); ?>
				<?php ptc_background_image_selector( 'menu' . $number . '_fullwidth_background_image', $content_layout, __( 'Image', 'wppb_lang' ) ); ?>
			</div>
			<?php ptc_wrapper_block( 'menu' . $number . '', $content_layout ); ?>
		</div>
		<div class="inner-tab-block" id="menu<?php echo $id; ?>text_options">
			<div class="section-layout">
				<h2><?php _e( 'Menu items', 'wppb_lang' ); ?></h2>
				<?php ptc_number_selector( 'menu' . $number . '_indent', $content_layout, __( 'Indent items', 'wppb_lang' ) ); ?>
				<?php ptc_text_display( 'menu' . $number . '', $content_layout, '', 'yes' ); ?>
			</div>
			<?php ptc_text_background( 'menu' . $number . '_items', $content_layout ); ?>
			<div class="section-layout">
				<h2><?php _e( 'Margins', 'wppb_lang' ); ?></h2>
				<?php
					ptc_number_selector( 'menu' . $number . '_margin_top', $content_layout, __( 'Top', 'wppb_lang' ) );
					ptc_number_selector( 'menu' . $number . '_margin_bottom', $content_layout, __( 'Bottom', 'wppb_lang' ) );
					ptc_number_selector( 'menu' . $number . '_margin_left', $content_layout, __( 'Left', 'wppb_lang' ) );
					ptc_number_selector( 'menu' . $number . '_margin_right', $content_layout, __( 'Right', 'wppb_lang' ) );
				?>
			</div>
			<div class="section-layout">
				<h2><?php _e( 'Padding', 'wppb_lang' ); ?></h2>
				<?php
					ptc_number_selector( 'menu' . $number . '_padding_top', $content_layout, __( 'Top', 'wppb_lang' ) );
					ptc_number_selector( 'menu' . $number . '_padding_right', $content_layout, __( 'Right', 'wppb_lang' ) );
					ptc_number_selector( 'menu' . $number . '_padding_bottom', $content_layout, __( 'Bottom', 'wppb_lang' ) );
					ptc_number_selector( 'menu' . $number . '_padding_left', $content_layout, __( 'Left', 'wppb_lang' ) );
				?>
			</div>
			<div class="section-layout">
				<h2><?php _e( 'Hover effects', 'wppb_lang' ); ?></h2>
				<?php
					ptc_colour_selector( 'menu' . $number . '_hover_textcolour', $content_layout, __( 'Colour', 'wppb_lang' ) );
					ptc_fontweight_selector( 'menu' . $number . '_hover_font_weight', $content_layout, __( 'Font weight', 'wppb_lang' ) );
					ptc_fontstyle_selector( 'menu' . $number . '_hover_font_style', $content_layout, __( 'Font style', 'wppb_lang' ) );
					ptc_textdecoration_selector( 'menu' . $number . '_hover_textdecoration', $content_layout, __( 'Text decoration', 'wppb_lang' ) ); 
				?>
				<h3><?php _e( 'Background', 'wppb_lang' ); ?></h3>
				<?php
					ptc_colour_selector('menu' . $number . '_hover_background_colour', $content_layout, __( 'Colour', 'wppb_lang' ), 'block colour' );
					ptc_background_image_selector( 'menu' . $number . '_hover_background_image', $content_layout, __( 'Image', 'wppb_lang' ) );
				?>
			</div>
		</div>
	</div>
</div><?php
}

/* Add extra block to the "Layout editor" in the editing panel.
 * @since 0.1
 */
function wppb_addmenu_block() {
	global $chunks;

	// The extra block to be added
	$chunks['Menu'] = '[ptc_menu]';
}
add_action( 'wppb_add_chunk', 'wppb_addmenu_block' );


/**
 * Adds the menu shortcode as used within the template editor
 * [ptc_menu] shortcode
 * @since 0.1
 */
function ptc_menu_shortcode() {
	$functions = '
<nav id="nav">
	<ul>
		[nav_menu]
	</ul>
</nav>
';
	return $functions;
}
add_shortcode( 'ptc_menu', 'ptc_menu_shortcode' );

/* Add colours to be sanitized, to the global array
 * @since 1.0
 */
function ptc_addmenu_colour_options_hook() {
	global $ptc_colour_options;

	array_push( $ptc_colour_options, 'menu1_hover_background_colour' );
	array_push( $ptc_colour_options, 'menu1_background_colour' );
	array_push( $ptc_colour_options, 'menu1_hover_textcolour' );
	array_push( $ptc_colour_options, 'menu1_items_background_colour' );
	array_push( $ptc_colour_options, 'menu1_fullwidth_background_colour' );

	array_push( $ptc_colour_options, 'menu1_border_top_colour' );
	array_push( $ptc_colour_options, 'menu1_border_right_colour' );
	array_push( $ptc_colour_options, 'menu1_border_bottom_colour' );
	array_push( $ptc_colour_options, 'menu1_border_left_colour' );

	return $ptc_colour_options;
}
add_action( 'ptc_hook_colour_options', 'ptc_addmenu_colour_options_hook' );

/* Add border type options to be sanitized, to the global array
 * @since 1.0
 */
function ptc_addmenu_bordertype_options() {
	global $ptc_bordertype_options;

	array_push( $ptc_bordertype_options, 'menu1_border_top_type' );
	array_push( $ptc_bordertype_options, 'menu1_border_right_type' );
	array_push( $ptc_bordertype_options, 'menu1_border_bottom_type' );
	array_push( $ptc_bordertype_options, 'menu1_border_left_type' );

	return $ptc_bordertype_options;
}
add_action( 'ptc_hook_bordertype_options', 'ptc_addmenu_bordertype_options' );

/* Add little numbers to be sanitized, to the global array
 * @since 1.0
 */
function ptc_addmenu_littlenumbers_options_hook() {
	global $ptc_littlenumbers_options;

	array_push( $ptc_littlenumbers_options, 'menu1_shadow_x_coordinate' );
	array_push( $ptc_littlenumbers_options, 'menu1_shadow_y_coordinate' );
	array_push( $ptc_littlenumbers_options, 'menu1_shadow_blur_radius' );

	array_push( $ptc_littlenumbers_options, 'menu1_border_top_width' );
	array_push( $ptc_littlenumbers_options, 'menu1_border_right_width' );
	array_push( $ptc_littlenumbers_options, 'menu1_border_bottom_width' );
	array_push( $ptc_littlenumbers_options, 'menu1_border_left_width' );
	array_push( $ptc_littlenumbers_options, 'menu1_top_margin' );
	array_push( $ptc_littlenumbers_options, 'menu1_bottom_margin' );

	return $ptc_littlenumbers_options;
}
add_action( 'ptc_hook_littlenumbers_options', 'ptc_addmenu_littlenumbers_options_hook' );

/* Add big numbers to be sanitized, to the global array
 * @since 1.0
 */
function ptc_addmenu_bignumbers_options_hook() {
	global $ptc_bignumbers_options;

	array_push( $ptc_bignumbers_options, 'menu1_max_width' );
	array_push( $ptc_bignumbers_options, 'menu1_min_width' );
	array_push( $ptc_bignumbers_options, 'menu1_indent' );

	return $ptc_bignumbers_options;
}
add_action( 'ptc_hook_bignumbers_options', 'ptc_addmenu_bignumbers_options_hook' );

/* Add display options to be sanitized, to the global array
 * @since 1.0
 */
function ptc_addmenu_display_options() {
	global $ptc_display_options;

	// Display options
	array_push( $ptc_display_options, 'menu1_fullwidth_background_display' );

	return $ptc_display_options;
}
add_action( 'ptc_hook_display_options', 'ptc_addmenu_display_options' );

/* Add image tiling options to be sanitized, to the global array
 * @since 1.0
 */
function ptc_addmenu_image_options_hook() {
	global $ptc_image_options;

	array_push( $ptc_image_options, 'menu1_background_image' );
	array_push( $ptc_image_options, 'menu1_items_background_image' );
	array_push( $ptc_image_options, 'menu1_hover_background_image' );
	array_push( $ptc_image_options, 'menu1_fullwidth_background_image' );

	return $ptc_image_options;
}
add_action( 'ptc_hook_image_options', 'ptc_addmenu_image_options_hook' );

/*  * Add font weight options to be sanitized, to the global array
 * @since 1.0
 */
function ptc_addmenu_fontweight_options() {
	global $ptc_fontweight_options;

	// Bold options
	array_push( $ptc_fontweight_options, 'menu1_hover_font_weight' );

	return $ptc_fontweight_options;
}
add_action( 'ptc_hook_fontweight_options', 'ptc_addmenu_fontweight_options' );

/*  * Add font style options to be sanitized, to the global array
 * @since 1.0
 */
function ptc_addmenu_fontstyle_options() {
	global $ptc_fontstyle_options;

	// Style options
	array_push( $ptc_fontstyle_options, 'menu1_hover_font_style' );

	return $ptc_fontstyle_options;
}
add_action( 'ptc_hook_fontstyle_options', 'ptc_addmenu_fontstyle_options' );

/**
 * Add text decoration options to be sanitized, to the global array
 * @since 1.0
 */
function ptc_addmenu_textdecoration_options() {
	global $ptc_textdecoration_options;

	// Text decoration options
	array_push( $ptc_textdecoration_options, 'menu1_hover_textdecoration' );

	return $ptc_textdecoration_options;
}
add_action( 'ptc_hook_textdecoration_options', 'ptc_addmenu_textdecoration_options' );

/*
 * Add text type options to be sanitized, to the global array
 * @since 1.0
 */
function ptc_addmenu_text_type_options_hook() {
	global $texttype;

	// Other text options
	array_push( $texttype, 'menu1' );

	return $texttype;
}
add_action( 'ptc_hook_text_type_options', 'ptc_addmenu_text_type_options_hook' );

