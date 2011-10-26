<?php
/**
 * @package WordPress
 * @subpackage WP Paintbrush
 * @since WP Paintbrush 1.0
 *
 * Adds the  WP Paintbrush Content module
 */



/* Add new "Content" link to main tabber in editing panel
 * @since 1.0
 */
function wppb_content_editor_link() {
	echo '<li id="pixopoint_menudesign_options"><a href="#menudesign_options">Content</a></li>';
} 
add_action( 'wppb_add_editor_links', 'wppb_content_editor_link', 10 );

/* Add new "Content" editor tab
 * @since 1.0
 */
function wppb_content_editor_tab() {
	$wppb_design_settings = get_option( WPPB_DESIGNER_SETTINGS );

	// Add HTML
	?>
<div id="menudesign_options">
	<div id="tabs-text" class="inner-tabber">
		<ul>
			<li id="wppb_overall_options"><a href="#overall_options" title="<?php _e( 'Overall', 'wppb_lang' ); ?>"><?php _e( 'Overall', 'wppb_lang' ); ?></a></li>
			<li id="wppb_maincontent_options"><a href="#maincontent_options" title="<?php _e( 'Main content', 'wppb_lang' ); ?>"><?php _e( 'Main <br />content', 'wppb_lang' ); ?></a></li>
			<li id="wppb_postinfo_options"><a href="#postinfo_options" title="<?php _e( 'Post info.', 'wppb_lang' ); ?>"><?php _e( 'Post info', 'wppb_lang' ); ?></a></li>
			<li id="wppb_pagination_options"><a href="#pagination_options" title="<?php _e( 'Pagination', 'wppb_lang' ); ?>"><?php _e( 'Pagination', 'wppb_lang' ); ?></a></li>
			<li id="wppb_h1_options"><a href="#h1_options" title="<?php _e( 'Heading 1', 'wppb_lang' ); ?>"><?php _e( 'H1', 'wppb_lang' ); ?></a></li>
			<li id="wppb_h2_options"><a href="#h2_options" title="<?php _e( 'Heading 2', 'wppb_lang' ); ?>"><?php _e( 'H2', 'wppb_lang' ); ?></a></li>
			<li id="wppb_h3_options"><a href="#h3_options" title="<?php _e( 'Heading 3', 'wppb_lang' ); ?>"><?php _e( 'H3', 'wppb_lang' ); ?></a></li>
			<li id="wppb_h4_options"><a href="#h4_options" title="<?php _e( 'Heading 4', 'wppb_lang' ); ?>"><?php _e( 'H4', 'wppb_lang' ); ?></a></li>
			<li id="wppb_h5_options"><a href="#h5_options" title="<?php _e( 'Heading 5', 'wppb_lang' ); ?>"><?php _e( 'H5', 'wppb_lang' ); ?></a></li>
			<li id="wppb_h6_options"><a href="#h6_options" title="<?php _e( 'Heading 6', 'wppb_lang' ); ?>"><?php _e( 'H6', 'wppb_lang' ); ?></a></li>
			<li id="wppb_p_options"><a href="#p_options" title="<?php _e( 'Paragraph', 'wppb_lang' ); ?>"><?php _e( 'P', 'wppb_lang' ); ?></a></li>
			<li id="wppb_li_options"><a href="#li_options" title="<?php _e( 'List item', 'wppb_lang' ); ?>"><?php _e( 'LI', 'wppb_lang' ); ?></a></li>
			<li id="wppb_a_options"><a href="#a_options" title="<?php _e( 'Links', 'wppb_lang' ); ?>"><?php _e( 'A', 'wppb_lang' ); ?></a></li>
		</ul>
		<div class="inner-tab-block" id="overall_options">
			<div class="section-layout">
				<h2><?php _e( 'Background', 'wppb_lang' ); ?></h2>
				<?php wppb_background( 'background', $wppb_design_settings ); ?>
			</div>
		</div>
		<div class="inner-tab-block" id="maincontent_options">
			<?php wppb_text_margins( 'content', $wppb_design_settings ); ?>
			<div class="section-layout">
				<h2><?php _e( 'Background', 'wppb_lang' ); ?></h2>
				<?php wppb_colour_selector( 'maincontent_background_colour', $wppb_design_settings, __( 'Colour', 'wppb_lang' ) ); ?>
				<?php wppb_background_image_selector( 'maincontent_background_image', $wppb_design_settings, __( 'Image', 'wppb_lang' ) ); ?>
				<?php wppb_imagetiling_selector( 'maincontent_background_image_tiling', $wppb_design_settings, __( 'Image tiling', 'wppb_lang' ) ); ?>
			</div>
			<div class="section-layout">
				<h2><?php _e( 'Width', 'wppb_lang' ); ?></h2>
				<?php wppb_number_selector( 'maincontent_maximum_width', $wppb_design_settings, __( 'Max width', 'wppb_lang' ) ); ?>
				<?php wppb_number_selector( 'maincontent_minimum_width', $wppb_design_settings, __( 'Min width', 'wppb_lang' ) ); ?>
			</div>
		</div>
		<div class="inner-tab-block" id="postinfo_options">
			<div class="section-layout">
				<h2><?php _e( 'Post info', 'wppb_lang' ); ?></h2>
				<?php wppb_display_selector( 'postinfo_display', $wppb_design_settings, __( 'Display', 'wppb_lang' ) ); ?>
			</div>
			<?php
				wppb_text_display( 'postinfo', $wppb_design_settings, __( 'Text', 'wppb_lang' ) );
				wppb_text_margins( 'postinfo', $wppb_design_settings );
				wppb_text_padding( 'postinfo', $wppb_design_settings );
				wppb_text_background( 'postinfo', $wppb_design_settings );
				wppb_text_borders_horizontal( 'postinfo', $wppb_design_settings );
			?>
		</div>
		<div class="inner-tab-block" id="pagination_options">
			<div class="section-layout">
				<h2><?php _e( 'Pagination', 'wppb_lang' ); ?></h2>
				<?php
					wppb_display_selector( 'pagination_display', $wppb_design_settings, __( 'Display', 'wppb_lang' ) );
					wppb_fontfamily_selector( 'pagination_fontfamily', $wppb_design_settings, __( 'Font', 'wppb_lang' ), 'block fontfamily' );
					wppb_number_selector( 'pagination_fontsize', $wppb_design_settings, __( 'Size', 'wppb_lang' ), 'block fontsize' );
					wppb_colour_selector( 'pagination_textcolour', $wppb_design_settings, __( 'Colour', 'wppb_lang' ), 'block colour' );
					wppb_colour_selector( 'pagination_texthovercolour', $wppb_design_settings, __( 'Colour on hover', 'wppb_lang' ), 'block colour' );
					wppb_fontweight_selector( 'pagination_font_weight', $wppb_design_settings, __( 'Weight', 'wppb_lang' ), 'block fontweight' );
					wppb_fontstyle_selector( 'pagination_font_style', $wppb_design_settings, __( 'Style', 'wppb_lang' ), 'block fontstyle' );
					wppb_textdecoration_selector( 'pagination_textdecoration', $wppb_design_settings, __( 'Decoration', 'wppb_lang' ), 'block decoratoin' );
					wppb_texttranform_selector( 'pagination_text_transform', $wppb_design_settings, __( 'Transform', 'wppb_lang' ), 'block texttransform' );
					wppb_smallcaps_selector( 'pagination_small_caps', $wppb_design_settings, __( 'Small caps', 'wppb_lang' ), 'block smallcaps' );
				?>
			</div>
			<div class="section-layout">
			<h2><?php _e( 'Text shadow', 'wppb_lang' ); ?></h3>
				<?php
					wppb_number_selector( 'pagination_shadow_x_coordinate', $wppb_design_settings, __( 'x-coordinate', 'wppb_lang' ), 'block coordinates' );
					wppb_number_selector( 'pagination_shadow_y_coordinate', $wppb_design_settings, __( 'y-coordinate', 'wppb_lang' ), 'block coordinates' );
					wppb_number_selector( 'pagination_shadow_blur_radius', $wppb_design_settings, __( 'Blur radius', 'wppb_lang' ), 'block coordinates' );
					wppb_colour_selector( 'pagination_shadow_colour', $wppb_design_settings, __( 'Colour', 'wppb_lang' ), 'block colour' );
				?>
			</div>
			<div class="section-layout">
				<h2><?php _e( 'Margin', 'wppb_lang' ); ?></h2>
				<?php wppb_number_selector( 'pagination_vertical_margin', $wppb_design_settings, __( 'Vertical margin', 'wppb_lang' ), 'block coordinates' ); ?>
				<?php wppb_number_selector( 'pagination_horizontal_margin', $wppb_design_settings, __( 'Horizontal margin', 'wppb_lang' ), 'block coordinates' ); ?>
			</div>
			<div class="section-layout">
				<h2><?php _e( 'Padding', 'wppb_lang' ); ?></h2>
				<?php wppb_number_selector( 'pagination_padding', $wppb_design_settings, __( 'Padding', 'wppb_lang' ), 'block coordinates' ); ?>
			</div>
			<div class="section-layout">
				<h2><?php _e( 'Background', 'wppb_lang' ); ?></h2>
				<?php wppb_colour_selector( 'pagination_background_colour', $wppb_design_settings, __( 'Colour', 'wppb_lang' ), 'block colour' ); ?>
				<?php wppb_colour_selector( 'pagination_background_hovercolour', $wppb_design_settings, __( 'Colour on hover', 'wppb_lang' ), 'block colour' ); ?>
			</div>
			<div class="section-layout">
				<h2><?php _e( 'Border', 'wppb_lang' ); ?></h2>
				<?php wppb_number_selector( 'pagination_border_width', $wppb_design_settings, __( 'Width', 'wppb_lang' ), 'block coordinates' ); ?>
				<?php wppb_bordertype_selector( 'pagination_border_type', $wppb_design_settings, __( 'Type', 'wppb_lang' ), 'block bordertype' ); ?>
				<?php wppb_colour_selector( 'pagination_border_colour', $wppb_design_settings, __( 'Colour', 'wppb_lang' ), 'block colour' ); ?>
			</div>
		</div>
		<?php
		$count = 1;
		while( $count < 7 ) : ?>
		<div id="h<?php echo $count; ?>_options">
			<?php
				wppb_text_display( 'heading' . $count, $wppb_design_settings, __( 'Heading ' . $count, 'wppb_lang' ) );
				wppb_text_margins( 'heading' . $count, $wppb_design_settings, 'block coordinates' );
				wppb_text_padding( 'heading' . $count, $wppb_design_settings, 'block coordinates' );
				wppb_text_background( 'heading' . $count, $wppb_design_settings );
				wppb_text_borders_horizontal( 'heading' . $count, $wppb_design_settings );
				$count++;
			?>
		</div>
		<?php endwhile; ?>
		<div id="p_options">
			<?php
				wppb_text_display( 'paragraph', $wppb_design_settings, __( 'Paragraph', 'wppb_lang' ) );
				wppb_text_margins( 'paragraph', $wppb_design_settings, 'block coordinates' );
				wppb_text_padding( 'paragraph', $wppb_design_settings, 'block coordinates' );
				wppb_text_background( 'paragraph', $wppb_design_settings );
				wppb_text_borders_horizontal( 'paragraph', $wppb_design_settings );
			?>
		</div>
		<div id="li_options">
			<?php
				wppb_text_display( 'listitem', $wppb_design_settings, __( 'List items', 'wppb_lang' ) );
				wppb_text_margins( 'listitem', $wppb_design_settings );
				wppb_text_padding( 'listitem', $wppb_design_settings );
				wppb_text_background( 'listitem', $wppb_design_settings );
				wppb_text_borders_horizontal( 'listitem', $wppb_design_settings );
			?>
		</div>
		<div class="inner-tab-block" id="a_options">
			<div class="section-layout">
				<h2><?php _e( 'Links', 'wppb_lang' ); ?></h2>
				<?php 
					wppb_colour_selector( 'links_textcolour', $wppb_design_settings, __( 'Colour', 'wppb_lang' ) );
					wppb_fontweight_selector( 'links_font_weight', $wppb_design_settings, __( 'Font weight', 'wppb_lang' ), 'block fontweight', 'inherit' );
					wppb_fontstyle_selector( 'links_font_style', $wppb_design_settings, __( 'Font style', 'wppb_lang' ), 'block', 'inherit' );
					wppb_textdecoration_selector( 'links_textdecoration', $wppb_design_settings, __( 'Text decoration', 'wppb_lang' ), 'block textdecoration', 'inherit' );
				?>
			</div>
			<div class="section-layout">
				<h2><?php _e( 'Links on hover', 'wppb_lang' ); ?></h2>
				<?php
					wppb_colour_selector( 'links_hover_textcolour', $wppb_design_settings, __( 'Colour', 'wppb_lang' ) );
					wppb_fontweight_selector( 'links_hover_font_weight', $wppb_design_settings, __( 'Font weight', 'wppb_lang' ), 'block fontweight', 'inherit' );
					wppb_fontstyle_selector( 'links_hover_font_style', $wppb_design_settings, __( 'Font style', 'wppb_lang' ), 'block', 'inherit' );
					wppb_textdecoration_selector( 'links_hover_textdecoration', $wppb_design_settings, __( 'Text decoration', 'wppb_lang' ), 'block textdecoration', 'inherit' ); 
				?>
			</div>
		</div>
	</div>
</div>
<?php
}
add_action( 'wppb_add_editor_tabs', 'wppb_content_editor_tab' );

/**
 * Adds the main shortcode for creating the content section in the templates
 * [wppb_content] shortcode
 * @since 0.1
 */
function wppb_content_shortcode() {
	$functions = '
<div class="wrapper">
	<div id="content">
		<div id="inner">
			<aside id="aside-1">
				<div class="sidebar">
					[widget number=1]
					<div class="widget">
						<h3>Tags</h3>
						[tag_cloud]
						<p>You are able to alter the content in this sidebar via the widgets interface in the WordPress admin panel.</p>
					</div>
					[/widget]
				</div>
			</aside>
			<aside id="aside-2">
				<div class="sidebar">
					[widget number=2]
					<div class="widget">
						<h3>Calendar</h3>
						[get_calendar]
						<p>You are able to alter the content in this sidebar via the widgets interface in the WordPress admin panel.</p>
					</div>
					[/widget]
				</div>
			</aside>
			<div id="maincontent">
				<div class="article-wrapper">
					[loop]
					<article class="[post_class]">
						<h1>[the_title]</h1>
						[the_content]
						[link_pages]
						[comment_form]
					</article>
					[/loop]
				</div>
			</div>
		</div>
	</div>
</div>
';
	return $functions;
}
add_shortcode( 'wppb_content', 'wppb_content_shortcode' );

/**
 * Adds the home page shortcode for creating the content section in the templates
 * [wppb_content_home] shortcode
 * @since 0.1
 */
function wppb_content_home_shortcode() {
	$functions = '
<div class="wrapper">
	<div id="content">
		<div id="inner">
			<aside id="aside-1">
				<div class="sidebar">
					[widget number=1]
					<div class="widget">
						<h3>Tags</h3>
						[tag_cloud]
						<p>You are able to alter the content in this sidebar via the widgets interface in the WordPress admin panel.</p>
					</div>
					[/widget]
				</div>
			</aside>
			<aside id="aside-2">
				<div class="sidebar">
					[widget number=2]
					<div class="widget">
						<h3>Calendar</h3>
						[get_calendar]
						<p>You are able to alter the content in this sidebar via the widgets interface in the WordPress admin panel.</p>
					</div>
					[/widget]
				</div>
			</aside>
			<div id="maincontent">
				<div class="article-wrapper">
					[loop]
					<article class="[post_class]">
						<h2><a href="[the_permalink]">[the_title]</a></h2>
						<p class="post-info">
							Posted on <span class="date time published">[the_date format="l, F j, Y"]</span>
							by
							<span class="author vcard">[the_author_posts_link]</span>
							[edit_post_link text=" Edit"]
						</p>
						[the_content]
						[link_pages]
						<p class="post-info">
							<span class="tags">Posted in [the_category separator=", "]</span>
							<br />
							<span class="tags">[the_tags]</span>
						</p>
					</article>
					[/loop]
					<ul id="numeric_pagination">
						[numeric_pagination]
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
';
	return $functions;
}
add_shortcode( 'wppb_content_home', 'wppb_content_home_shortcode' );
add_shortcode( 'wppb_content_front', 'wppb_content_home_shortcode' );

/**
 * Adds the single post shortcode for creating the content section in the templates
 * [wppb_content_single] shortcode
 * @since 0.9
 */
function wppb_content_single_shortcode() {
	$functions = '
<div class="wrapper">
	<div id="content">
		<div id="inner">
			<aside id="aside-1">
				<div class="sidebar">
					[widget number=1]
					<div class="widget">
						<h3>Tags</h3>
						[tag_cloud]
						<p>You are able to alter the content in this sidebar via the widgets interface in the WordPress admin panel.</p>
					</div>
					[/widget]
				</div>
			</aside>
			<aside id="aside-2">
				<div class="sidebar">
					[widget number=2]
					<div class="widget">
						<h3>Calendar</h3>
						[get_calendar]
						<p>You are able to alter the content in this sidebar via the widgets interface in the WordPress admin panel.</p>
					</div>
					[/widget]
				</div>
			</aside>
			<div id="maincontent">
				<div class="article-wrapper">
					[loop]
					<article class="[post_class]">
						<div id="nav-above" class="navigation">
							<div class="nav-previous">[previous_post_link]</div>
							<div class="nav-next">[next_post_link]</div>
						</div>
						<h1>[the_title]</h1>
						<p class="post-info">
							Posted on <span class="date time published">[the_date format="l, F j, Y"]</span>
							by
							<span class="author vcard">[the_author_posts_link]</span>
							[edit_post_link text=" Edit"]
						</p>
						<div class="content">
							[the_content]
						</div>
						[link_pages]
						<p class="post-info">
							<span class="tags">Posted in [the_category separator=", "]</span>
							<br />
							<span class="tags">[the_tags]</span>
							<br />
							<a href="[the_permalink]">Bookmark the permalink</a>
						</p>
						[comments_template]
					</article>
					[/loop]
				</div>
			</div>
		</div>
	</div>
</div>
';
	return $functions;
}
add_shortcode( 'wppb_content_single', 'wppb_content_single_shortcode' );

/**
 * Adds the static page shortcode for creating the content section in the templates
 * [wppb_content_page] shortcode
 * @since 0.9
 */
function wppb_content_page_shortcode() {
	$functions = '
<div class="wrapper">
	<div id="content">
		<div id="inner">
			<aside id="aside-1">
				<div class="sidebar">
					[widget number=1]
					<div class="widget">
						<h3>Tags</h3>
						[tag_cloud]
						<p>You are able to alter the content in this sidebar via the widgets interface in the WordPress admin panel.</p>
					</div>
					[/widget]
				</div>
			</aside>
			<aside id="aside-2">
				<div class="sidebar">
						[widget number=2]
				<div class="widget">
						<h3>Calendar</h3>
						[get_calendar]
						<p>You are able to alter the content in this sidebar via the widgets interface in the WordPress admin panel.</p>
					</div>
					[/widget]
				</div>
			</aside>
			<div id="maincontent">
				<div class="article-wrapper">
					[loop]
					<article class="[post_class]">
						<h1>[the_title]</h1>
						<p class="post-info">[edit_post_link text=" Edit"]</p>
						[the_content]
						[link_pages]
						[comments_template]
					</article>
					[/loop]
				</div>
			</div>
		</div>
	</div>
</div>
';
	return $functions;
}
add_shortcode( 'wppb_content_page', 'wppb_content_page_shortcode' );

/* Add extra block to "Layout editor"
 * @since 1.0
 */
function wppb_content_block() {
	global $chunks;

	// The extra block to be added
	$chunks['Content'] = '[wppb_content]';
}
add_action( 'wppb_add_chunk', 'wppb_content_block' );

/*
 * Add text type options to be sanitized, to the global array
 * @since 1.0
 */
function wppb_addcontent_text_type_options() {
	global $wppb_texttype;

	// Other text options
	array_push( $wppb_texttype, 'heading1' );
	array_push( $wppb_texttype, 'heading2' );
	array_push( $wppb_texttype, 'heading3' );
	array_push( $wppb_texttype, 'heading4' );
	array_push( $wppb_texttype, 'heading5' );
	array_push( $wppb_texttype, 'heading6' );
	array_push( $wppb_texttype, 'paragraph' );
	array_push( $wppb_texttype, 'listitem' );
	array_push( $wppb_texttype, 'blockquote' );
	array_push( $wppb_texttype, 'postinfo' );

	return $wppb_texttype;
}
add_action( 'wppb_hook_text_type_options', 'wppb_addcontent_text_type_options' );

/*
 * Add colours to be sanitized, to the global array
 * @since 1.0
 */
function wppb_addcontent_colour_options() {
	global $wppb_colour_options;

	// Colour options
	array_push( $wppb_colour_options, 'pagination_textcolour' );
	array_push( $wppb_colour_options, 'pagination_texthovercolour' );
	array_push( $wppb_colour_options, 'pagination_shadow_colour' );
	array_push( $wppb_colour_options, 'pagination_background_colour' );
	array_push( $wppb_colour_options, 'pagination_border_colour' );
	array_push( $wppb_colour_options, 'pagination_background_hovercolour' );
	array_push( $wppb_colour_options, 'background_colour' );
	array_push( $wppb_colour_options, 'maincontent_background_colour' );
	array_push( $wppb_colour_options, 'links_textcolour' );
	array_push( $wppb_colour_options, 'links_hover_textcolour' );

	return $wppb_colour_options;
}
add_action( 'wppb_hook_colour_options', 'wppb_addcontent_colour_options' );

/*
 * Add font weight options to be sanitized, to the global array
 * @since 1.0
 */
function wppb_addcontent_fontweight_options() {
	global $wppb_fontweight_options;

	// Bold options
	array_push( $wppb_fontweight_options, 'pagination_font_weight' );
	array_push( $wppb_fontweight_options, 'links_font_weight' );
	array_push( $wppb_fontweight_options, 'links_hover_font_weight' );

	return $wppb_fontweight_options;
}
add_action( 'wppb_hook_fontweight_options', 'wppb_addcontent_fontweight_options' );

/**
 * Add font style options to be sanitized, to the global array
 * @since 1.0
 */
function wppb_addcontent_fontstyle_options() {
	global $wppb_fontstyle_options;

	// Style options
	array_push( $wppb_fontstyle_options, 'pagination_font_style' );
	array_push( $wppb_fontstyle_options, 'links_font_style' );
	array_push( $wppb_fontstyle_options, 'links_hover_font_style' );

	return $wppb_fontstyle_options;
}
add_action( 'wppb_hook_fontstyle_options', 'wppb_addcontent_fontstyle_options' );

/**
 * Add font size options to be sanitized, to the global array
 * @since 1.0
 */
function wppb_addcontent_fontsize_options() {
	global $wppb_fontsize_options;

	// Font size options
	array_push( $wppb_fontsize_options, 'pagination_fontsize' );

	return $wppb_fontsize_options;
}
add_action( 'wppb_hook_fontsize_options', 'wppb_addcontent_fontsize_options' );

/**
 * Add opacity to be sanitized, to the global array
 * @since 1.0
 */
function wppb_addcontent_opacity_options() {
	global $wppb_opacity_options;

	// Opacity options
	array_push( $wppb_opacity_options, 'pagination_shadow_opacity' );

	return $wppb_opacity_options;
}
add_action( 'wppb_hook_opacity_options', 'wppb_addcontent_opacity_options' );

/**
 * Add image options to be sanitized, to the global array
 * @since 1.0
 */
function wppb_addcontent_image_options() {
	global $wppb_image_options;

	// Image options
	array_push( $wppb_image_options, 'background_image' );
	array_push( $wppb_image_options, 'maincontent_background_image' );

	return $wppb_image_options;
}
add_action( 'wppb_hook_image_options', 'wppb_addcontent_image_options' );

/**
 * Add border type options to be sanitized, to the global array
 * @since 1.0
 */
function wppb_addcontent_bordertype_options() {
	global $wppb_bordertype_options;

	// Border type options
	array_push( $wppb_bordertype_options, 'pagination_border_type' );

	return $wppb_bordertype_options;
}
add_action( 'wppb_hook_bordertype_options', 'wppb_addcontent_bordertype_options' );

/**
 * Add text transform options to be sanitized, to the global array
 * @since 1.0
 */
function wppb_addcontent_texttransform_options() {
	global $wppb_texttransform_options;

	// Text transform options
	array_push( $wppb_texttransform_options, 'pagination_text_transform' );

	return $wppb_texttransform_options;
}
add_action( 'wppb_hook_texttransform_options', 'wppb_addcontent_texttransform_options' );

/**
 * Add small caps options to be sanitized, to the global array
 * @since 1.0
 */
function wppb_addcontent_smallcaps_options() {
	global $wppb_smallcaps_options;

	// Small-caps options
	array_push( $wppb_smallcaps_options, 'pagination_small_caps' );

	return $wppb_smallcaps_options;
}
add_action( 'wppb_hook_smallcaps_options', 'wppb_addcontent_smallcaps_options' );

/**
 * Add display options to be sanitized, to the global array
 * @since 1.0
 */
function wppb_addcontent_display_options() {
	global $wppb_display_options;

	// Display options
	array_push( $wppb_display_options, 'postinfo_display' );
	array_push( $wppb_display_options, 'pagination_display' );
	array_push( $wppb_display_options, 'background_display' );

	return $wppb_display_options;
}
add_action( 'wppb_hook_display_options', 'wppb_addcontent_display_options' );

/**
 * Add little numbers options to be sanitized, to the global array
 * @since 1.0
 */
function wppb_addcontent_littlenumbers_options() {
	global $wppb_littlenumbers_options;

	// Little numbers options
	array_push( $wppb_littlenumbers_options, 'pagination_vertical_margin' );
	array_push( $wppb_littlenumbers_options, 'pagination_horizontal_margin' );
	array_push( $wppb_littlenumbers_options, 'pagination_padding' );
	array_push( $wppb_littlenumbers_options, 'pagination_border_width' );
	array_push( $wppb_littlenumbers_options, 'content_margin_top' );
	array_push( $wppb_littlenumbers_options, 'content_margin_right' );
	array_push( $wppb_littlenumbers_options, 'content_margin_bottom' );
	array_push( $wppb_littlenumbers_options, 'content_margin_left' );

	return $wppb_littlenumbers_options;
}
add_action( 'wppb_hook_littlenumbers_options', 'wppb_addcontent_littlenumbers_options' );

/**
 * Add big numbers to be sanitized, to the global array
 * @since 1.0
 */
function wppb_addcontent_bignumbers_options() {
	global $wppb_bignumbers_options;

	// Big numbers options
	array_push( $wppb_bignumbers_options, 'maincontent_minimum_width' );
	array_push( $wppb_bignumbers_options, 'maincontent_maximum_width' );

	return $wppb_bignumbers_options;
}
add_action( 'wppb_hook_bignumbers_options', 'wppb_addcontent_bignumbers_options' );

/**
 * Add shadow coordinates to be sanitized, to the global array
 * @since 1.0
 */
function wppb_addcontent_shadow_coordinates_options() {
	global $wppb_shadow_coordinates_options;

	// Shadow coordinate options
	array_push( $wppb_shadow_coordinates_options, 'pagination' );

	return $wppb_shadow_coordinates_options;
}
add_action( 'wppb_hook_shadow_coordinates_options', 'wppb_addcontent_shadow_coordinates_options' );

/**
 * Add image tiling options to be sanitized, to the global array
 * @since 1.0
 */
function wppb_addcontent_imagetiling_options() {
	global $wppb_imagetiling_options;

	// Image tiling options
	array_push( $wppb_imagetiling_options, 'background_image_tiling' );
	array_push( $wppb_imagetiling_options, 'maincontent_background_image_tiling' );
	array_push( $wppb_imagetiling_options, 'background_image_tiling' );

	return $wppb_imagetiling_options;
}
add_action( 'wppb_hook_imagetiling_options', 'wppb_addcontent_imagetiling_options' );

/**
 * Add font family options to be sanitized, to the global array
 * @since 1.0
 */
function wppb_addcontent_fontfamily_options() {
	global $wppb_fontfamily_options;

	// Font family options
	array_push( $wppb_fontfamily_options, 'pagination_fontfamily' );

	return $wppb_fontfamily_options;
}
add_action( 'wppb_hook_fontfamily_options', 'wppb_addcontent_fontfamily_options' );

/**
 * Add text decoration options to be sanitized, to the global array
 * @since 1.0
 */
function wppb_addcontent_textdecoration_options() {
	global $wppb_textdecoration_options;

	// Text decoration options
	array_push( $wppb_textdecoration_options, 'pagination_fontfamily' );
	array_push( $wppb_textdecoration_options, 'pagination_textdecoration' );
	array_push( $wppb_textdecoration_options, 'links_textdecoration' );
	array_push( $wppb_textdecoration_options, 'links_hover_textdecoration' );

	return $wppb_textdecoration_options;
}
add_action( 'wppb_hook_textdecoration_options', 'wppb_addcontent_textdecoration_options' );

/**
 * Add raw text options for global sanitization array
 * @since 1.0
 */
function wppb_addcontent_rawtext_options() {
	global $wppb_rawtext_options;

	// Raw text options
	array_push( $wppb_rawtext_options, 'positions' );
	array_push( $wppb_rawtext_options, 'sidebar_positions' );

	return $wppb_rawtext_options;
}
add_action( 'wppb_hook_rawtext_options', 'wppb_addcontent_rawtext_options' );
