<?php
/**
 * @package WordPress
 * @subpackage WP Paintbrush
 * @subpackage WP Paintbrush Add Menu
 * @since WP Paintbrush Add Menu 0.1
 *
 * Editor changes for WP Paintbrush Add Menu plugin
 */


/* Add new editor tab
 * Designed to be used by plugins as well as internally by this module
 * @since 0.1
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
			<li id="ptc_menu<?php echo $id; ?>overall_options"><a href="#menu<?php echo $id; ?>overall_options" title="Overall">Overall</a></li>
			<li id="ptc_menu<?php echo $id; ?>text_options"><a href="#menu<?php echo $id; ?>text_options" title="Menu <?php echo $id; ?> items">Menu items</a></li>
		</ul>
		<div class="inner-tab-block" id="menu<?php echo $id; ?>overall_options">
			<div class="section-layout">
				<h2>Menu</h2>
				<?php
					ptc_number_selector( 'menu' . $number . '_max_width', $content_layout, 'Maximum width' );
					ptc_number_selector( 'menu' . $number . '_min_width', $content_layout, 'Minimum width' );
				?>
			</div>
			<div class="section-layout">
				<h2>Background</h2>
				<?php
					ptc_colour_selector( 'menu' . $number . '_background_colour', $content_layout, 'Colour' );
					ptc_background_image_selector( 'menu' . $number . '_background_image', $content_layout, 'Image' );
				?>
			</div>
			<div class="section-layout">
				<h2>Full width background</h2>
				<p>Background displayed across the full width of the site - leave blank to use the standard page background.</p>
				<?php ptc_display_selector( 'menu' . $number . '_fullwidth_background_display', $content_layout, 'Display' ); ?>
				<?php ptc_colour_selector( 'menu' . $number . '_fullwidth_background_colour', $content_layout, 'Colour' ); ?>
				<?php ptc_background_image_selector( 'menu' . $number . '_fullwidth_background_image', $content_layout, 'Image' ); ?>
			</div>
			<?php ptc_wrapper_block( 'menu' . $number . '', $content_layout ); ?>
		</div>
		<div class="inner-tab-block" id="menu<?php echo $id; ?>text_options">
			<div class="section-layout">
				<h2>Menu items</h2>
				<?php ptc_number_selector( 'menu' . $number . '_indent', $content_layout, 'Indent items' ); ?>
				<?php ptc_text_display( 'menu' . $number . '', $content_layout, '', 'yes' ); ?>
			</div>
			<?php ptc_text_background( 'menu' . $number . '_items', $content_layout ); ?>
			<div class="section-layout">
				<h2>Margins</h2>
				<?php
					ptc_number_selector( 'menu' . $number . '_margin_top', $content_layout, 'Top' );
					ptc_number_selector( 'menu' . $number . '_margin_bottom', $content_layout, 'Bottom' );
					ptc_number_selector( 'menu' . $number . '_margin_left', $content_layout, 'Left' );
					ptc_number_selector( 'menu' . $number . '_margin_right', $content_layout, 'Right' );
				?>
			</div>
			<div class="section-layout">
				<h2>Padding</h2>
				<?php
					ptc_number_selector( 'menu' . $number . '_padding_top', $content_layout, 'Top' );
					ptc_number_selector( 'menu' . $number . '_padding_right', $content_layout, 'Right' );
					ptc_number_selector( 'menu' . $number . '_padding_bottom', $content_layout, 'Bottom' );
					ptc_number_selector( 'menu' . $number . '_padding_left', $content_layout, 'Left' );
				?>
			</div>
			<div class="section-layout">
				<h2>Hover effects</h2>
				<?php
					ptc_colour_selector( 'menu' . $number . '_hover_textcolour', $content_layout, 'Colour' );
					ptc_fontweight_selector( 'menu' . $number . '_hover_font_weight', $content_layout, 'Font weight' );
					ptc_fontstyle_selector( 'menu' . $number . '_hover_font_style', $content_layout, 'Font style' );
					ptc_textdecoration_selector( 'menu' . $number . '_hover_textdecoration', $content_layout, 'Text decoration' ); 
				?>
				<h3>Background</h3>
				<?php
					ptc_colour_selector('menu' . $number . '_hover_background_colour', $content_layout, 'Colour', 'block colour' );
					ptc_background_image_selector( 'menu' . $number . '_hover_background_image', $content_layout, 'Image' );
				?>
			</div>
		</div>
	</div>
</div><?php
}

/* Adds editor code to hook
 * The wppb_addmenu_editor_tab() function isn't hooked directly so that new plugins can easily add new menus via the same code above 
 * @since 0.1
 */
function wppb_addmenu_load_editor_tab() {
	wppb_addmenu_editor_tab( '1' );
}
add_action( 'wppb_add_editor_tabs', 'wppb_addmenu_load_editor_tab' );

/* Add script for tabber
 * @since 0.1
 */
function wppb_addmenu_scripts() {

	// If designer pane is not being loaded, then bail out
	if ( is_admin() || 'on' != get_option( 'wppb_designer_pane' ) || !current_user_can( 'manage_options' ) )
		return;

	wp_register_script(
		'wppb-addmenu',
		WPPB_ADDMENU_URL . 'addmenu.js',
		array( 'jquery-ui-core' ),
		'1.0',
		true
	);
	wp_enqueue_script( 'wppb-addmenu' );
}
add_action( 'wp_print_scripts', 'wppb_addmenu_scripts' );

/* Add new editor link
 * @since 0.1
 */
function wppb_addmenu_editor_link() {
	echo '<li id="pixopoint_menus_options"><a href="#menus_options">Menus</a></li>';
} 
add_action( 'wppb_add_editor_links', 'wppb_addmenu_editor_link' );
