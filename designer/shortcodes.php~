<?php
/**
 * @package WordPress
 * @subpackage WP Paintbrush
 * @since WP Paintbrush 0.1
 *
 * Extra shortcodes used within the designer tool
 *
 * These shortcodes generate each chunk of code which is
 * used to generate the individual templates created by
 * the WP Paintbrush designer tool.
 */


/**
 * Adding support for the various default blocks
 * Same method can be used to add blocks via plugins
 * @since 1.0
 */
function wppb_default_chunks() {
	global $chunks;

	// Add default blocks
	$extra_chunks = array(
		//'Menu 2'          => '[ptc_menu2]',
		'Header image'    => '[ptc_headerimage]',
		'Header'          => '[ptc_header]',
		'Menu'            => '[ptc_menu]',
		'Content'         => '[ptc_content]',
		'Footer'          => '[ptc_footer]',
	);

	// Add each individual chunk to the global
	foreach( $extra_chunks as $name => $shortcode ) {
		$chunks[$name] = $shortcode;
	}
}
add_action( 'wppb_add_chunk', 'wppb_default_chunks' );

/**
 * [ptc_header] shortcode
 * @since 0.1
 */
function ptc_header_shortcode() {
	$functions = '
<header>
	<div class="header">
		<h1><a href="[siteinfo type="url"]">[siteinfo type="name"]</a></h1>
		<a id="logo" href="[siteinfo type="url"]">[siteinfo type="name"]</a>
		<div id="description">[siteinfo type="description"]</div>
		<div id="search">
			<form method="get" id="searchform" action="[siteinfo type="url"]">
				<input type="text" class="field" name="s" id="s" value="Search" [onfocus][/onfocus]>
				<input type="submit" class="submit" name="submit" id="searchsubmit" value="Search">
			</form>
		</div>
	</div>
</header>
';
	return $functions;
}
add_shortcode( 'ptc_header', 'ptc_header_shortcode' );

/**
 * [ptc_headerimage] shortcode
 * @since 0.1
 */
function ptc_headerimage_shortcode() {
	$functions = '
<div id="banner">
	<div class="banner-image">
	</div>
</div>
';
	return $functions;
}
add_shortcode( 'ptc_headerimage', 'ptc_headerimage_shortcode' );

/**
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
						<p class="post-info">
							<span class="tags">Posted in [the_category separator=", "]</span>
							<br />
							<span class="tags">Tags: [the_tags]</span>
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
						<h1>[the_title]</h1>
						<p class="post-info">
							Posted on <span class="date time published">[the_date format="l, F j, Y"]</span>
							by
							<span class="author vcard">[the_author_posts_link]</span>
							[edit_post_link text=" Edit"]
						</p>
						[the_content]
						<p class="post-info">
							<span class="tags">Posted in [the_category separator=", "]</span>
							<br />
							<span class="tags">Tags: [the_tags]</span>
						</p>
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
add_shortcode( 'ptc_content_single', 'ptc_content_single_shortcode' );

/**
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

/**
 * [ptc_footer] shortcode
 * @since 0.1
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
