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
add_action( 'wppb_add_editor_links', 'wppb_content_editor_link' );

/* Add new "Content" editor tab
 * @since 1.0
 */
function wppb_content_editor_tab() {
	$content_layout = get_option( WPPB_DESIGNER_SETTINGS );

	// Add HTML
	?>
<div id="menudesign_options">
	<div id="tabs-text" class="inner-tabber">
		<ul>
			<li id="ptc_overall_options"><a href="#overall_options" title="<?php _e( 'Overall', 'wppb_lang' ); ?>"><?php _e( 'Overall', 'wppb_lang' ); ?></a></li>
			<li id="ptc_maincontent_options"><a href="#maincontent_options" title="<?php _e( 'Main content', 'wppb_lang' ); ?>"><?php _e( 'Main <br />content', 'wppb_lang' ); ?></a></li>
			<li id="ptc_postinfo_options"><a href="#postinfo_options" title="<?php _e( 'Post info.', 'wppb_lang' ); ?>"><?php _e( 'Post info', 'wppb_lang' ); ?></a></li>
			<li id="ptc_pagination_options"><a href="#pagination_options" title="<?php _e( 'Pagination', 'wppb_lang' ); ?>"><?php _e( 'Pagination', 'wppb_lang' ); ?></a></li>
			<li id="ptc_h1_options"><a href="#h1_options" title="<?php _e( 'Heading 1', 'wppb_lang' ); ?>"><?php _e( 'H1', 'wppb_lang' ); ?></a></li>
			<li id="ptc_h2_options"><a href="#h2_options" title="<?php _e( 'Heading 2', 'wppb_lang' ); ?>"><?php _e( 'H2', 'wppb_lang' ); ?></a></li>
			<li id="ptc_h3_options"><a href="#h3_options" title="<?php _e( 'Heading 3', 'wppb_lang' ); ?>"><?php _e( 'H3', 'wppb_lang' ); ?></a></li>
			<li id="ptc_h4_options"><a href="#h4_options" title="<?php _e( 'Heading 4', 'wppb_lang' ); ?>"><?php _e( 'H4', 'wppb_lang' ); ?></a></li>
			<li id="ptc_h5_options"><a href="#h5_options" title="<?php _e( 'Heading 5', 'wppb_lang' ); ?>"><?php _e( 'H5', 'wppb_lang' ); ?></a></li>
			<li id="ptc_h6_options"><a href="#h6_options" title="<?php _e( 'Heading 6', 'wppb_lang' ); ?>"><?php _e( 'H6', 'wppb_lang' ); ?></a></li>
			<li id="ptc_p_options"><a href="#p_options" title="<?php _e( 'Paragraph', 'wppb_lang' ); ?>"><?php _e( 'P', 'wppb_lang' ); ?></a></li>
			<li id="ptc_li_options"><a href="#li_options" title="<?php _e( 'List item', 'wppb_lang' ); ?>"><?php _e( 'LI', 'wppb_lang' ); ?></a></li>
			<li id="ptc_a_options"><a href="#a_options" title="<?php _e( 'Links', 'wppb_lang' ); ?>"><?php _e( 'A', 'wppb_lang' ); ?></a></li>
		</ul>
		<div class="inner-tab-block" id="overall_options">
			<div class="section-layout">
				<h2><?php _e( 'Background', 'wppb_lang' ); ?></h2>
				<?php ptc_background( 'background', $content_layout ); ?>
			</div>
		</div>
		<div class="inner-tab-block" id="maincontent_options">
			<?php ptc_text_margins( 'content', $content_layout ); ?>
			<div class="section-layout">
				<h2><?php _e( 'Background', 'wppb_lang' ); ?></h2>
				<?php ptc_colour_selector( 'maincontent_background_colour', $content_layout, __( 'Colour', 'wppb_lang' ) ); ?>
				<?php ptc_background_image_selector( 'maincontent_background_image', $content_layout, __( 'Image', 'wppb_lang' ) ); ?>
				<?php ptc_imagetiling_selector( 'maincontent_background_image_tiling', $content_layout, __( 'Image tiling', 'wppb_lang' ) ); ?>
			</div>
			<div class="section-layout">
				<h2><?php _e( 'Width', 'wppb_lang' ); ?></h2>
				<?php ptc_number_selector( 'maincontent_maximum_width', $content_layout, __( 'Max width', 'wppb_lang' ) ); ?>
				<?php ptc_number_selector( 'maincontent_minimum_width', $content_layout, __( 'Min width', 'wppb_lang' ) ); ?>
			</div>
		</div>
		<div class="inner-tab-block" id="postinfo_options">
			<div class="section-layout">
				<h2><?php _e( 'Post info', 'wppb_lang' ); ?></h2>
				<?php ptc_display_selector( 'postinfo_display', $content_layout, __( 'Display', 'wppb_lang' ) ); ?>
			</div>
			<?php
				ptc_text_display( 'postinfo', $content_layout, __( 'Text', 'wppb_lang' ) );
				ptc_text_margins( 'postinfo', $content_layout );
				ptc_text_padding( 'postinfo', $content_layout );
				ptc_text_background( 'postinfo', $content_layout );
				ptc_text_borders_horizontal( 'postinfo', $content_layout );
			?>
		</div>
		<div class="inner-tab-block" id="pagination_options">
			<div class="section-layout">
				<h2><?php _e( 'Pagination', 'wppb_lang' ); ?></h2>
				<?php
					ptc_display_selector( 'pagination_display', $content_layout, __( 'Display', 'wppb_lang' ) );
					ptc_fontfamily_selector( 'pagination_fontfamily', $content_layout, __( 'Font', 'wppb_lang' ), 'block fontfamily' );
					ptc_number_selector( 'pagination_fontsize', $content_layout, __( 'Size', 'wppb_lang' ), 'block fontsize' );
					ptc_colour_selector( 'pagination_textcolour', $content_layout, __( 'Colour', 'wppb_lang' ), 'block colour' );
					ptc_colour_selector( 'pagination_texthovercolour', $content_layout, __( 'Colour on hover', 'wppb_lang' ), 'block colour' );
					ptc_fontweight_selector( 'pagination_font_weight', $content_layout, __( 'Weight', 'wppb_lang' ), 'block fontweight' );
					ptc_fontstyle_selector( 'pagination_font_style', $content_layout, __( 'Style', 'wppb_lang' ), 'block fontstyle' );
					ptc_textdecoration_selector( 'pagination_textdecoration', $content_layout, __( 'Decoration', 'wppb_lang' ), 'block decoratoin' );
					ptc_texttranform_selector( 'pagination_text_transform', $content_layout, __( 'Transform', 'wppb_lang' ), 'block texttransform' );
					ptc_smallcaps_selector( 'pagination_small_caps', $content_layout, __( 'Small caps', 'wppb_lang' ), 'block smallcaps' );
				?>
			</div>
			<div class="section-layout">
			<h2><?php _e( 'Text shadow', 'wppb_lang' ); ?></h3>
				<?php
					ptc_number_selector( 'pagination_shadow_x_coordinate', $content_layout, __( 'x-coordinate', 'wppb_lang' ), 'block coordinates' );
					ptc_number_selector( 'pagination_shadow_y_coordinate', $content_layout, __( 'y-coordinate', 'wppb_lang' ), 'block coordinates' );
					ptc_number_selector( 'pagination_shadow_blur_radius', $content_layout, __( 'Blur radius', 'wppb_lang' ), 'block coordinates' );
					ptc_colour_selector( 'pagination_shadow_colour', $content_layout, __( 'Colour', 'wppb_lang' ), 'block colour' );
				?>
			</div>
			<div class="section-layout">
				<h2><?php _e( 'Margin', 'wppb_lang' ); ?></h2>
				<?php ptc_number_selector( 'pagination_vertical_margin', $content_layout, __( 'Vertical margin', 'wppb_lang' ), 'block coordinates' ); ?>
				<?php ptc_number_selector( 'pagination_horizontal_margin', $content_layout, __( 'Horizontal margin', 'wppb_lang' ), 'block coordinates' ); ?>
			</div>
			<div class="section-layout">
				<h2><?php _e( 'Padding', 'wppb_lang' ); ?></h2>
				<?php ptc_number_selector( 'pagination_padding', $content_layout, __( 'Padding', 'wppb_lang' ), 'block coordinates' ); ?>
			</div>
			<div class="section-layout">
				<h2><?php _e( 'Background', 'wppb_lang' ); ?></h2>
				<?php ptc_colour_selector( 'pagination_background_colour', $content_layout, __( 'Colour', 'wppb_lang' ), 'block colour' ); ?>
				<?php ptc_colour_selector( 'pagination_background_hovercolour', $content_layout, __( 'Colour on hover', 'wppb_lang' ), 'block colour' ); ?>
			</div>
			<div class="section-layout">
				<h2><?php _e( 'Border', 'wppb_lang' ); ?></h2>
				<?php ptc_number_selector( 'pagination_border_width', $content_layout, __( 'Width', 'wppb_lang' ), 'block coordinates' ); ?>
				<?php ptc_bordertype_selector( 'pagination_border_type', $content_layout, __( 'Type', 'wppb_lang' ), 'block bordertype' ); ?>
				<?php ptc_colour_selector( 'pagination_border_colour', $content_layout, __( 'Colour', 'wppb_lang' ), 'block colour' ); ?>
			</div>
		</div>
		<?php
		$count = 1;
		while( $count < 7 ) : ?>
		<div id="h<?php echo $count; ?>_options">
			<?php
				ptc_text_display( 'heading' . $count, $content_layout, __( 'Heading ' . $count, 'wppb_lang' ) );
				ptc_text_margins( 'heading' . $count, $content_layout, 'block coordinates' );
				ptc_text_padding( 'heading' . $count, $content_layout, 'block coordinates' );
				ptc_text_background( 'heading' . $count, $content_layout );
				ptc_text_borders_horizontal( 'heading' . $count, $content_layout );
				$count++;
			?>
		</div>
		<?php endwhile; ?>
		<div id="p_options">
			<?php
				ptc_text_display( 'paragraph', $content_layout, __( 'Paragraph', 'wppb_lang' ) );
				ptc_text_margins( 'paragraph', $content_layout, 'block coordinates' );
				ptc_text_padding( 'paragraph', $content_layout, 'block coordinates' );
				ptc_text_background( 'paragraph', $content_layout );
				ptc_text_borders_horizontal( 'paragraph', $content_layout );
			?>
		</div>
		<div id="li_options">
			<?php
				ptc_text_display( 'listitem', $content_layout, __( 'List items', 'wppb_lang' ) );
				ptc_text_margins( 'listitem', $content_layout );
				ptc_text_padding( 'listitem', $content_layout );
				ptc_text_background( 'listitem', $content_layout );
				ptc_text_borders_horizontal( 'listitem', $content_layout );
			?>
		</div>
		<div class="inner-tab-block" id="a_options">
			<div class="section-layout">
				<h2><?php _e( 'Links', 'wppb_lang' ); ?></h2>
				<?php 
					ptc_colour_selector( 'links_textcolour', $content_layout, __( 'Colour', 'wppb_lang' ) );
					ptc_fontweight_selector( 'links_font_weight', $content_layout, __( 'Font weight', 'wppb_lang' ), 'block fontweight', 'inherit' );
					ptc_fontstyle_selector( 'links_font_style', $content_layout, __( 'Font style', 'wppb_lang' ), 'block', 'inherit' );
					ptc_textdecoration_selector( 'links_textdecoration', $content_layout, __( 'Text decoration', 'wppb_lang' ), 'block textdecoration', 'inherit' );
				?>
			</div>
			<div class="section-layout">
				<h2><?php _e( 'Links on hover', 'wppb_lang' ); ?></h2>
				<?php
					ptc_colour_selector( 'links_hover_textcolour', $content_layout, __( 'Colour', 'wppb_lang' ) );
					ptc_fontweight_selector( 'links_hover_font_weight', $content_layout, __( 'Font weight', 'wppb_lang' ), 'block fontweight', 'inherit' );
					ptc_fontstyle_selector( 'links_hover_font_style', $content_layout, __( 'Font style', 'wppb_lang' ), 'block', 'inherit' );
					ptc_textdecoration_selector( 'links_hover_textdecoration', $content_layout, __( 'Text decoration', 'wppb_lang' ), 'block textdecoration', 'inherit' ); 
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
 * [ptc_content] shortcode
 * @since 0.1
 */
function ptc_content_shortcode() {
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
					<article>
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
add_shortcode( 'ptc_content', 'ptc_content_shortcode' );

/**
 * Adds the home page shortcode for creating the content section in the templates
 * [ptc_content_home] shortcode
 * @since 0.1
 */
function ptc_content_home_shortcode() {
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
					<article>
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
add_shortcode( 'ptc_content_home', 'ptc_content_home_shortcode' );

/**
 * Adds the single post shortcode for creating the content section in the templates
 * [ptc_content_single] shortcode
 * @since 0.9
 */
function ptc_content_single_shortcode() {
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
					<article>
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
add_shortcode( 'ptc_content_single', 'ptc_content_single_shortcode' );

/**
 * Adds the static page shortcode for creating the content section in the templates
 * [ptc_content_page] shortcode
 * @since 0.9
 */
function ptc_content_page_shortcode() {
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
					<article>
						<h1>[the_title]</h1>
						<p class="post-info">[edit_post_link text=" Edit"]</p>
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
add_shortcode( 'ptc_content_page', 'ptc_content_page_shortcode' );

/* Add extra block to "Layout editor"
 * @since 1.0
 */
function wppb_content_block() {
	global $chunks;

	// The extra block to be added
	$chunks['Content'] = '[ptc_content]';
}
add_action( 'wppb_add_chunk', 'wppb_content_block' );

/*
 * Add text type options to be sanitized, to the global array
 * @since 1.0
 */
function ptc_addcontent_text_type_options() {
	global $texttype;

	// Other text options
	array_push( $texttype, 'heading1' );
	array_push( $texttype, 'heading2' );
	array_push( $texttype, 'heading3' );
	array_push( $texttype, 'heading4' );
	array_push( $texttype, 'heading5' );
	array_push( $texttype, 'heading6' );
	array_push( $texttype, 'paragraph' );
	array_push( $texttype, 'listitem' );
	array_push( $texttype, 'blockquote' );
	array_push( $texttype, 'postinfo' );

	return $texttype;
}
add_action( 'ptc_hook_text_type_options', 'ptc_addcontent_text_type_options' );

/*
 * Add colours to be sanitized, to the global array
 * @since 1.0
 */
function ptc_addcontent_colour_options() {
	global $ptc_colour_options;

	// Colour options
	array_push( $ptc_colour_options, 'pagination_textcolour' );
	array_push( $ptc_colour_options, 'pagination_texthovercolour' );
	array_push( $ptc_colour_options, 'pagination_shadow_colour' );
	array_push( $ptc_colour_options, 'pagination_background_colour' );
	array_push( $ptc_colour_options, 'pagination_border_colour' );
	array_push( $ptc_colour_options, 'pagination_background_hovercolour' );
	array_push( $ptc_colour_options, 'background_colour' );
	array_push( $ptc_colour_options, 'maincontent_background_colour' );
	array_push( $ptc_colour_options, 'links_textcolour' );
	array_push( $ptc_colour_options, 'links_hover_textcolour' );

	return $ptc_colour_options;
}
add_action( 'ptc_hook_colour_options', 'ptc_addcontent_colour_options' );

/*
 * Add font weight options to be sanitized, to the global array
 * @since 1.0
 */
function ptc_addcontent_fontweight_options() {
	global $ptc_fontweight_options;

	// Bold options
	array_push( $ptc_fontweight_options, 'pagination_font_weight' );
	array_push( $ptc_fontweight_options, 'links_font_weight' );
	array_push( $ptc_fontweight_options, 'links_hover_font_weight' );

	return $ptc_fontweight_options;
}
add_action( 'ptc_hook_fontweight_options', 'ptc_addcontent_fontweight_options' );

/**
 * Add font style options to be sanitized, to the global array
 * @since 1.0
 */
function ptc_addcontent_fontstyle_options() {
	global $ptc_fontstyle_options;

	// Style options
	array_push( $ptc_fontstyle_options, 'pagination_font_style' );
	array_push( $ptc_fontstyle_options, 'links_font_style' );
	array_push( $ptc_fontstyle_options, 'links_hover_font_style' );

	return $ptc_fontstyle_options;
}
add_action( 'ptc_hook_fontstyle_options', 'ptc_addcontent_fontstyle_options' );

/**
 * Add font size options to be sanitized, to the global array
 * @since 1.0
 */
function ptc_addcontent_fontsize_options() {
	global $ptc_fontsize_options;

	// Font size options
	array_push( $ptc_fontsize_options, 'pagination_fontsize' );

	return $ptc_fontsize_options;
}
add_action( 'ptc_hook_fontsize_options', 'ptc_addcontent_fontsize_options' );

/**
 * Add opacity to be sanitized, to the global array
 * @since 1.0
 */
function ptc_addcontent_opacity_options() {
	global $ptc_opacity_options;

	// Opacity options
	array_push( $ptc_opacity_options, 'pagination_shadow_opacity' );

	return $ptc_opacity_options;
}
add_action( 'ptc_hook_opacity_options', 'ptc_addcontent_opacity_options' );

/**
 * Add image options to be sanitized, to the global array
 * @since 1.0
 */
function ptc_addcontent_image_options() {
	global $ptc_image_options;

	// Image options
	array_push( $ptc_image_options, 'background_image' );
	array_push( $ptc_image_options, 'maincontent_background_image' );

	return $ptc_image_options;
}
add_action( 'ptc_hook_image_options', 'ptc_addcontent_image_options' );

/**
 * Add border type options to be sanitized, to the global array
 * @since 1.0
 */
function ptc_addcontent_bordertype_options() {
	global $ptc_bordertype_options;

	// Border type options
	array_push( $ptc_bordertype_options, 'pagination_border_type' );

	return $ptc_bordertype_options;
}
add_action( 'ptc_hook_bordertype_options', 'ptc_addcontent_bordertype_options' );

/**
 * Add text transform options to be sanitized, to the global array
 * @since 1.0
 */
function ptc_addcontent_texttransform_options() {
	global $ptc_texttransform_options;

	// Text transform options
	array_push( $ptc_texttransform_options, 'pagination_text_transform' );

	return $ptc_texttransform_options;
}
add_action( 'ptc_hook_texttransform_options', 'ptc_addcontent_texttransform_options' );

/**
 * Add small caps options to be sanitized, to the global array
 * @since 1.0
 */
function ptc_addcontent_smallcaps_options() {
	global $ptc_smallcaps_options;

	// Small-caps options
	array_push( $ptc_smallcaps_options, 'pagination_small_caps' );

	return $ptc_smallcaps_options;
}
add_action( 'ptc_hook_smallcaps_options', 'ptc_addcontent_smallcaps_options' );

/**
 * Add display options to be sanitized, to the global array
 * @since 1.0
 */
function ptc_addcontent_display_options() {
	global $ptc_display_options;

	// Display options
	array_push( $ptc_display_options, 'postinfo_display' );
	array_push( $ptc_display_options, 'pagination_display' );
	array_push( $ptc_display_options, 'background_display' );

	return $ptc_display_options;
}
add_action( 'ptc_hook_display_options', 'ptc_addcontent_display_options' );

/**
 * Add little numbers options to be sanitized, to the global array
 * @since 1.0
 */
function ptc_addcontent_littlenumbers_options() {
	global $ptc_littlenumbers_options;

	// Little numbers options
	array_push( $ptc_littlenumbers_options, 'pagination_vertical_margin' );
	array_push( $ptc_littlenumbers_options, 'pagination_horizontal_margin' );
	array_push( $ptc_littlenumbers_options, 'pagination_padding' );
	array_push( $ptc_littlenumbers_options, 'pagination_border_width' );
	array_push( $ptc_littlenumbers_options, 'content_margin_top' );
	array_push( $ptc_littlenumbers_options, 'content_margin_right' );
	array_push( $ptc_littlenumbers_options, 'content_margin_bottom' );
	array_push( $ptc_littlenumbers_options, 'content_margin_left' );

	return $ptc_littlenumbers_options;
}
add_action( 'ptc_hook_littlenumbers_options', 'ptc_addcontent_littlenumbers_options' );

/**
 * Add big numbers to be sanitized, to the global array
 * @since 1.0
 */
function ptc_addcontent_bignumbers_options() {
	global $ptc_bignumbers_options;

	// Big numbers options
	array_push( $ptc_bignumbers_options, 'maincontent_minimum_width' );
	array_push( $ptc_bignumbers_options, 'maincontent_maximum_width' );

	return $ptc_bignumbers_options;
}
add_action( 'ptc_hook_bignumbers_options', 'ptc_addcontent_bignumbers_options' );

/**
 * Add shadow coordinates to be sanitized, to the global array
 * @since 1.0
 */
function ptc_addcontent_shadow_coordinates_options() {
	global $ptc_shadow_coordinates_options;

	// Shadow coordinate options
	array_push( $ptc_shadow_coordinates_options, 'pagination' );

	return $ptc_shadow_coordinates_options;
}
add_action( 'ptc_hook_shadow_coordinates_options', 'ptc_addcontent_shadow_coordinates_options' );

/**
 * Add image tiling options to be sanitized, to the global array
 * @since 1.0
 */
function ptc_addcontent_imagetiling_options() {
	global $ptc_imagetiling_options;

	// Image tiling options
	array_push( $ptc_imagetiling_options, 'background_image_tiling' );
	array_push( $ptc_imagetiling_options, 'maincontent_background_image_tiling' );
	array_push( $ptc_imagetiling_options, 'background_image_tiling' );

	return $ptc_imagetiling_options;
}
add_action( 'ptc_hook_imagetiling_options', 'ptc_addcontent_imagetiling_options' );

/**
 * Add font family options to be sanitized, to the global array
 * @since 1.0
 */
function ptc_addcontent_fontfamily_options() {
	global $ptc_fontfamily_options;

	// Font family options
	array_push( $ptc_fontfamily_options, 'pagination_fontfamily' );

	return $ptc_fontfamily_options;
}
add_action( 'ptc_hook_fontfamily_options', 'ptc_addcontent_fontfamily_options' );

/**
 * Add text decoration options to be sanitized, to the global array
 * @since 1.0
 */
function ptc_addcontent_textdecoration_options() {
	global $ptc_textdecoration_options;

	// Text decoration options
	array_push( $ptc_textdecoration_options, 'pagination_fontfamily' );
	array_push( $ptc_textdecoration_options, 'pagination_textdecoration' );
	array_push( $ptc_textdecoration_options, 'links_textdecoration' );
	array_push( $ptc_textdecoration_options, 'links_hover_textdecoration' );

	return $ptc_textdecoration_options;
}
add_action( 'ptc_hook_textdecoration_options', 'ptc_addcontent_textdecoration_options' );

/**
 * Add raw text options for global sanitization array
 * @since 1.0
 */
function ptc_addcontent_rawtext_options() {
	global $ptc_rawtext_options;

	// Raw text options
	array_push( $ptc_rawtext_options, 'positions' );
	array_push( $ptc_rawtext_options, 'sidebar_positions' );

	return $ptc_rawtext_options;
}
add_action( 'ptc_hook_rawtext_options', 'ptc_addcontent_rawtext_options' );
