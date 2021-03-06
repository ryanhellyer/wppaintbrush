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
add_action( 'wppb_add_editor_links', 'wppb_addmenu_editor_link', 50 );

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
function wppb_addmenu_editor_tab( $wppb_menu_number ) {
	$wppb_designer_settings = get_option( WPPB_DESIGNER_SETTINGS );
	global $wppb_menu_id, $number; // Uses globals to ensure that same action hook route is used as for other blocks, but needed since menu is unique in that it is replicated more than once (via different ID's) - not an optimal solution, but at least makes sure that the code is consistent with the rest of WP Paintbrush rather than doing it via a filter which would be different from every other module
	$number = $wppb_menu_number;

	// Calculating value to use for ID
	if ( 1 == $number )
		$wppb_menu_id = '';
	else $wppb_menu_id = $number;

	// Add HTML
	?>
<div class="tab-block" id="menus<?php echo $wppb_menu_id; ?>_options">
	<div id="tabs-menus<?php echo $wppb_menu_id; ?>" class="inner-tabber">
		<ul>
			<?php
				// Hook for adding new link
				do_action( 'wppb_add_menueditor_sublinks' );
			?> 
		</ul>
		<?php do_action( 'wppb_add_menu_editor_content' ); ?>
	</div>
</div><?php
}

/* Add sublinks to menu section
 * @since 1.0
 */
function wppb_menu_editor_sublinks() {
	global $wppb_menu_id, $number;
	?>
	<li id="wppb_menu<?php echo $wppb_menu_id; ?>overall_options"><a href="#menu<?php echo $wppb_menu_id; ?>overall_options" title="<?php _e( 'Overall', 'wppb_lang' ); ?>"><?php _e( 'Overall', 'wppb_lang' ); ?></a></li>
	<li id="wppb_menu<?php echo $wppb_menu_id; ?>text_options"><a href="#menu<?php echo $wppb_menu_id; ?>text_options" title="<?php _e( 'Menu ' . $wppb_menu_id . ' items', 'wppb_lang' ); ?>"><?php _e( 'Menu items', 'wppb_lang' ); ?></a></li><?php
}
add_action( 'wppb_add_menueditor_sublinks', 'wppb_menu_editor_sublinks' );

/* Add menu sections editor content
 * @since 1.0
 */
function wppb_add_menu_editor_content() {
	global $wppb_menu_id, $number;
	$wppb_designer_settings = get_option( WPPB_DESIGNER_SETTINGS );
	?>
<div class="inner-tab-block" id="menu<?php echo $wppb_menu_id; ?>overall_options">
	<div class="section-layout">
		<h2><?php _e( 'Menu', 'wppb_lang' ); ?></h2>
		<?php
			wppb_number_selector( 'menu' . $number . '_max_width', $wppb_designer_settings, __( 'Maximum width', 'wppb_lang' ) );
			wppb_number_selector( 'menu' . $number . '_min_width', $wppb_designer_settings, __( 'Minimum width', 'wppb_lang' ) );
		?>
	</div>
	<div class="section-layout">
		<h2><?php _e( 'Background', 'wppb_lang' ); ?></h2>
		<?php
			wppb_colour_selector( 'menu' . $number . '_background_colour', $wppb_designer_settings, __( 'Colour', 'wppb_lang' ) );
			wppb_background_image_selector( 'menu' . $number . '_background_image', $wppb_designer_settings, __( 'Image', 'wppb_lang' ) );
		?>
	</div>
	<div class="section-layout">
		<h2><?php _e( 'Full width background', 'wppb_lang' ); ?></h2>
		<p><?php _e( 'Background displayed across the full width of the site - leave blank to use the standard page background.', 'wppb_lang' ); ?></p>
		<?php wppb_display_selector( 'menu' . $number . '_fullwidth_background_display', $wppb_designer_settings, __( 'Display', 'wppb_lang' ) ); ?>
		<?php wppb_colour_selector( 'menu' . $number . '_fullwidth_background_colour', $wppb_designer_settings, __( 'Colour', 'wppb_lang' ) ); ?>
		<?php wppb_background_image_selector( 'menu' . $number . '_fullwidth_background_image', $wppb_designer_settings, __( 'Image', 'wppb_lang' ) ); ?>
	</div>
	<?php wppb_wrapper_block( 'menu' . $number . '', $wppb_designer_settings ); ?>
</div>
<div class="inner-tab-block" id="menu<?php echo $wppb_menu_id; ?>text_options">
	<div class="section-layout">
		<h2><?php _e( 'Menu items', 'wppb_lang' ); ?></h2>
		<?php wppb_number_selector( 'menu' . $number . '_indent', $wppb_designer_settings, __( 'Indent items', 'wppb_lang' ) ); ?>
		<?php wppb_text_display( 'menu' . $number . '', $wppb_designer_settings, '', 'yes' ); ?>
	</div>
	<?php wppb_text_background( 'menu' . $number . '_items', $wppb_designer_settings ); ?>
	<div class="section-layout">
		<h2><?php _e( 'Margins', 'wppb_lang' ); ?></h2>
		<?php
			wppb_number_selector( 'menu' . $number . '_margin_top', $wppb_designer_settings, __( 'Top', 'wppb_lang' ) );
			wppb_number_selector( 'menu' . $number . '_margin_bottom', $wppb_designer_settings, __( 'Bottom', 'wppb_lang' ) );
			wppb_number_selector( 'menu' . $number . '_margin_left', $wppb_designer_settings, __( 'Left', 'wppb_lang' ) );
			wppb_number_selector( 'menu' . $number . '_margin_right', $wppb_designer_settings, __( 'Right', 'wppb_lang' ) );
		?>
	</div>
	<div class="section-layout">
		<h2><?php _e( 'Padding', 'wppb_lang' ); ?></h2>
		<?php
			wppb_number_selector( 'menu' . $number . '_padding_top', $wppb_designer_settings, __( 'Top', 'wppb_lang' ) );
			wppb_number_selector( 'menu' . $number . '_padding_right', $wppb_designer_settings, __( 'Right', 'wppb_lang' ) );
			wppb_number_selector( 'menu' . $number . '_padding_bottom', $wppb_designer_settings, __( 'Bottom', 'wppb_lang' ) );
			wppb_number_selector( 'menu' . $number . '_padding_left', $wppb_designer_settings, __( 'Left', 'wppb_lang' ) );
		?>
	</div>
	<div class="section-layout">
		<h2><?php _e( 'Hover effects', 'wppb_lang' ); ?></h2>
		<?php
			wppb_colour_selector( 'menu' . $number . '_hover_textcolour', $wppb_designer_settings, __( 'Colour', 'wppb_lang' ) );
			wppb_fontweight_selector( 'menu' . $number . '_hover_font_weight', $wppb_designer_settings, __( 'Font weight', 'wppb_lang' ) );
			wppb_fontstyle_selector( 'menu' . $number . '_hover_font_style', $wppb_designer_settings, __( 'Font style', 'wppb_lang' ) );
			wppb_textdecoration_selector( 'menu' . $number . '_hover_textdecoration', $wppb_designer_settings, __( 'Text decoration', 'wppb_lang' ) ); 
		?>
		<h3><?php _e( 'Background', 'wppb_lang' ); ?></h3>
		<?php
			wppb_colour_selector('menu' . $number . '_hover_background_colour', $wppb_designer_settings, __( 'Colour', 'wppb_lang' ), 'block colour' );
			wppb_background_image_selector( 'menu' . $number . '_hover_background_image', $wppb_designer_settings, __( 'Image', 'wppb_lang' ) );
		?>
	</div>
</div><?php
}
add_action( 'wppb_add_menu_editor_content', 'wppb_add_menu_editor_content' );

/* Add extra block to the "Layout editor" in the editing panel.
 * @since 0.1
 */
function wppb_addmenu_block( $chunks ) {

	// The extra block to be added
	$chunks['Menu'] = '[wppb_menu]';

	return $chunks;
}
add_filter( 'wppb_add_chunk_filter', 'wppb_addmenu_block' );

/**
 * Adds the menu shortcode as used within the template editor
 * [wppb_menu] shortcode
 * @since 0.1
 */
function wppb_menu_shortcode() {
	$functions = '
<nav id="nav">
	<ul>
		[nav_menu]
';

	// Filter initial menu block - userful for adding extra features
	$functions = apply_filters ( 'wppb_menu_shortcode_content_filter' , $functions );

	$functions .= '
	</ul>
</nav>
';
	return $functions;
}
add_shortcode( 'wppb_menu', 'wppb_menu_shortcode' );

/* Add colours to be sanitized, to the global array
 * @since 1.0
 */
function wppb_addmenu_colour_filter( $wppb_colour_options ) {

	array_push( $wppb_colour_options, 'menu1_hover_background_colour' );
	array_push( $wppb_colour_options, 'menu1_background_colour' );
	array_push( $wppb_colour_options, 'menu1_hover_textcolour' );
	array_push( $wppb_colour_options, 'menu1_items_background_colour' );
	array_push( $wppb_colour_options, 'menu1_fullwidth_background_colour' );

	array_push( $wppb_colour_options, 'menu1_border_top_colour' );
	array_push( $wppb_colour_options, 'menu1_border_right_colour' );
	array_push( $wppb_colour_options, 'menu1_border_bottom_colour' );
	array_push( $wppb_colour_options, 'menu1_border_left_colour' );

	return $wppb_colour_options;
}
add_filter( 'wppb_colour_filter', 'wppb_addmenu_colour_filter' );

/* Add border type options to be sanitized, to the global array
 * @since 1.0
 */
function wppb_addmenu_bordertype_filter( $wppb_bordertype_options ) {

	array_push( $wppb_bordertype_options, 'menu1_border_top_type' );
	array_push( $wppb_bordertype_options, 'menu1_border_right_type' );
	array_push( $wppb_bordertype_options, 'menu1_border_bottom_type' );
	array_push( $wppb_bordertype_options, 'menu1_border_left_type' );

	return $wppb_bordertype_options;
}
add_filter( 'wppb_bordertype_filter', 'wppb_addmenu_bordertype_filter' );

/* Add little numbers to be sanitized, to the global array
 * @since 1.0
 */
function wppb_addmenu_littlenumbers_filter( $wppb_littlenumbers_options ) {

	array_push( $wppb_littlenumbers_options, 'menu1_shadow_x_coordinate' );
	array_push( $wppb_littlenumbers_options, 'menu1_shadow_y_coordinate' );
	array_push( $wppb_littlenumbers_options, 'menu1_shadow_blur_radius' );
	array_push( $wppb_littlenumbers_options, 'menu1_border_top_width' );
	array_push( $wppb_littlenumbers_options, 'menu1_border_right_width' );
	array_push( $wppb_littlenumbers_options, 'menu1_border_bottom_width' );
	array_push( $wppb_littlenumbers_options, 'menu1_border_left_width' );
	array_push( $wppb_littlenumbers_options, 'menu1_top_margin' );
	array_push( $wppb_littlenumbers_options, 'menu1_bottom_margin' );

	return $wppb_littlenumbers_options;
}
add_filter( 'wppb_littlenumbers_filter', 'wppb_addmenu_littlenumbers_filter' );

/* Add big numbers to be sanitized, to the global array
 * @since 1.0
 */
function wppb_addmenu_bignumbers_filter( $wppb_bignumbers_options ) {

	array_push( $wppb_bignumbers_options, 'menu1_max_width' );
	array_push( $wppb_bignumbers_options, 'menu1_min_width' );
	array_push( $wppb_bignumbers_options, 'menu1_indent' );

	return $wppb_bignumbers_options;
}
add_filter( 'wppb_bignumbers_filter', 'wppb_addmenu_bignumbers_filter' );

/* Add display options to be sanitized, to the global array
 * @since 1.0
 */
function wppb_addmenu_display_filter( $wppb_display_options ) {

	// Display options
	array_push( $wppb_display_options, 'menu1_fullwidth_background_display' );

	return $wppb_display_options;
}
add_filter( 'wppb_display_filter', 'wppb_addmenu_display_filter' );

/* Add image tiling options to be sanitized, to the global array
 * @since 1.0
 */
function wppb_addmenu_image_filter( $wppb_image_options ) {

	array_push( $wppb_image_options, 'menu1_background_image' );
	array_push( $wppb_image_options, 'menu1_items_background_image' );
	array_push( $wppb_image_options, 'menu1_hover_background_image' );
	array_push( $wppb_image_options, 'menu1_fullwidth_background_image' );

	return $wppb_image_options;
}
add_filter( 'wppb_image_filter', 'wppb_addmenu_image_filter' );

/*  * Add font weight options to be sanitized, to the global array
 * @since 1.0
 */
function wppb_addmenu_fontweight_filter( $wppb_fontweight_options ) {

	// Bold options
	array_push( $wppb_fontweight_options, 'menu1_hover_font_weight' );

	return $wppb_fontweight_options;
}
add_filter( 'wppb_fontweight_filter', 'wppb_addmenu_fontweight_filter' );

/*  * Add font style options to be sanitized, to the global array
 * @since 1.0
 */
function wppb_addmenu_fontstyle_filter( $wppb_fontstyle_options ) {

	// Style options
	array_push( $wppb_fontstyle_options, 'menu1_hover_font_style' );

	return $wppb_fontstyle_options;
}
add_filter( 'wppb_fontstyle_filter', 'wppb_addmenu_fontstyle_filter' );

/**
 * Add text decoration options to be sanitized, to the global array
 * @since 1.0
 */
function wppb_addmenu_textdecoration_filter( $wppb_textdecoration_options ) {

	// Text decoration options
	array_push( $wppb_textdecoration_options, 'menu1_hover_textdecoration' );

	return $wppb_textdecoration_options;
}
add_filter( 'wppb_textdecoration_filter', 'wppb_addmenu_textdecoration_filter' );

/*
 * Add text type options to be sanitized, to the global array
 * @since 1.0
 */
function wppb_addmenu_text_type_filter( $wppb_texttype ) {

	// Other text options
	array_push( $wppb_texttype, 'menu1' );

	return $wppb_texttype;
}
add_filter( 'wppb_text_type_filter', 'wppb_addmenu_text_type_filter' );
