<?php
/**
 * @package WordPress
 * @subpackage PixoPoint Template Framework
 *
 * Shortcodes
 */


/**
 * Do not continue processing since file was called directly
 * @since 0.1
 */
if ( !defined( 'ABSPATH' ) )
	return;

/**
 * [the_id] shortcode
 * @since 0.1
 */
function pixopoint_the_id_shortcode( $atts ) {
	return get_the_ID();
}
add_shortcode( 'the_id', 'pixopoint_the_id_shortcode' );

/**
 * [custom_field] shortcode
 * @since 0.1
 */
function pixopoint_custom_field_shortcode( $atts ) {
	// Grabbing parameters and setting default values
	extract(
		shortcode_atts(
			array(
				'name'     => 'custom field text goes here', 
			),
			$atts
		)
	);

	return get_post_meta(
		get_the_id(),
		sanitize_title_with_dashes( $name ),
		true
	);
}
add_shortcode( 'custom_field', 'pixopoint_custom_field_shortcode' );

/**
 * [page_menu] shortcode
 * @since 0.1
 */
function pixopoint_page_menu_shortcode( $atts ) {
	// Grabbing parameters and setting default values
	extract(
		shortcode_atts(
			array(
				'include'     => '', 
				'exclude'     => '', 
				'show_home'   => 'true', 
				'link_before' => '', 
				'link_after'  => '', 
			),
			$atts
		)
	);

	// Sanitise as comma delimited list of numbers
	$include = pixopoint_validate_comma_numeric( $include );
	$exclude = pixopoint_validate_comma_numeric( $exclude );

	// True or false settings
	if ( 'false' == $show_home )
		$show_home = 0;
	else
		$show_home = 1;

	// Sanitise HTML
	$link_before = sanitize_title( $link_before, '' );
	$link_after = sanitize_title( $link_after, '' );

	return wp_page_menu( 'echo=false&include=' . $include . '&exclude=' . $exclude . '&show_home=' . $show_home . '&link_before=' . $link_before . '&link_after=' . $link_after );
}
add_shortcode( 'page_menu', 'pixopoint_page_menu_shortcode' );

/**
 * [the_permalink] shortcode
 * @since 0.1
 */
function pixopoint_the_permalink_shortcode() {
	return apply_filters( 'the_permalink', get_permalink() );
}
add_shortcode( 'the_permalink', 'pixopoint_the_permalink_shortcode' );

/**
 * [the_title] shortcode
 * @since 0.1
 */
function pixopoint_the_title_shortcode() {
	return the_title(
		'', // before
		'', // after
		false // echo
	);
}
add_shortcode( 'the_title', 'pixopoint_the_title_shortcode' );

/**
 * [the_content] shortcode
 * @since 0.1
 */
function pixopoint_the_content_shortcode() {
	$content = get_the_content( '', '' );
	$content = apply_filters( 'the_content', $content );
	$content = str_replace( ']]>', ']]&gt;', $content );
	return $content;
}
add_shortcode( 'the_content', 'pixopoint_the_content_shortcode' );

/**
 * [the_excerpt] shortcode
 * @since 0.1
 */
function pixopoint_the_excerpt_shortcode( $atts ) {
	// Grabbing parameters and setting default values
	extract(
		shortcode_atts(
			array(
				'words'     => '',
				'characters'=> '',
				'readmore'  => '[...]',
				'link'      => 'no'
			),
			$atts
		)
	);

	// Strip nasties from readmore (probably not necessary since wp_kses() already parses content before entering DB)
	$readmore = esc_html( $readmore );

	// Link read more
	if ( 'yes' == $link )
		$readmore = '<a href="' . get_permalink() . '">' . $readmore . '</a>';


	// Excerpt with word limit
	if ( is_numeric( $words ) ) {
		if ( !function_exists( 'pixopoint_the_excerpt_words' ) ) {
			function pixopoint_the_excerpt_words( $words ) {
				return intval( $words );
			}
		}
		add_filter( 'excerpt_length', 'pixopoint_the_excerpt_words' );
		return apply_filters( 'the_excerpt', get_the_excerpt() );
	}

	// Excerpt with character limit
	elseif ( is_numeric( $characters ) ) {
		$excerpt = substr( get_the_excerpt(), 0, intval( $characters ) );
		if ( strlen( $excerpt ) < strlen( get_the_excerpt() ) ) {
			$excerpt = $excerpt . '[...]';
			return '<p>' . $excerpt . '</p>';
		}
	}

	// Or revert to regular excerpt
	else {
		$excerpt = '<p>' . get_the_excerpt() . '</p>'; 
		$excerpt = str_replace( '[...]', $readmore, $excerpt );
		return $excerpt;
	}

}
add_shortcode( 'the_excerpt', 'pixopoint_the_excerpt_shortcode' );

/**
 * [the_content_limit] shortcode
 * @since 0.1
 */
function pixopoint_the_content_limit_shortcode( $atts ) {
	// Grabbing parameters and setting default values
	extract(
		shortcode_atts(
			array(
				'number_characters'     => '',
				'strip_tags'            => 'yes'
			),
			$atts
		)
	);

	// Stick the content into a string
	$excerpt = get_the_content();

	// Strip tags
	if ( 'yes' == $strip_tags )
		$excerpt = strip_tags( $excerpt );

	// Limit number of characters (if integer value)
	if ( is_numeric( $number_characters ) )
		$excerpt = substr( $excerpt, 0, $number_characters );

	// Finally, spit out the excerpt
	return $excerpt;
}
add_shortcode( 'the_content_limit', 'pixopoint_the_content_limit_shortcode' );

/**
 * [the_author_posts_link] shortcode
 * @since 0.1
 */
function pixopoint_the_author_posts_link_shortcode() {
	ob_start();
	the_author_posts_link();
	$author = ob_get_contents();
	ob_end_clean();
	return $author;
}
add_shortcode( 'the_author_posts_link', 'pixopoint_the_author_posts_link_shortcode' );

/**
 * [return] shortcode
 * @since 0.1
 */
function pixopoint_return_shortcode() {
	return;
}
add_shortcode( 'return', 'pixopoint_return_shortcode' );

/**
 * [comments_number] shortcode
 * Uses output buffering to avoid rewriting a bunch of code in comments_number() which can only be echo'd
 * @since 0.1
 */
function pixopoint_comments_number_shortcode() {
	ob_start();
	comments_number(
		sprintf( __( 'No Responses to %s', 'pixopoint_theme_editor' ), '<em>' . get_the_title() . '</em>' ),
		sprintf( __( 'One Response to %s', 'pixopoint_theme_editor' ), '<em>' . get_the_title() . '</em>' ),
		sprintf( __( '%% Responses to %s', 'pixopoint_theme_editor' ), '<em>' . get_the_title() . '</em>' )
	);
	$comments = ob_get_contents();
	ob_end_clean();
	return $comments;
}
add_shortcode( 'comments_number', 'pixopoint_comments_number_shortcode' );

/**
 * [comment_form] shortcode
 * Uses output buffering to avoid rewriting a bunch of code in comments_form() which can only be echo'd
 * @since 0.1
 */
function pixopoint_comment_form_shortcode() {
	ob_start();
	comment_form();
	$comments = ob_get_contents();
	ob_end_clean();
	return $comments;
}
add_shortcode( 'comment_form', 'pixopoint_comment_form_shortcode' );

/**
 * [onfocus] shortcode
 * @since 1.0
 */
function pixopoint_onfocus_shortcode( $atts, $content ) {
	$content = pixopoint_sanitize_names( $content ); // Blitz everything but alpha numerics, _'s or -'s and spaces

	return 'onFocus="this.value=\'' . $content . '\'"';
}
add_shortcode( 'onfocus', 'pixopoint_onfocus_shortcode' );

/**
 * [comment_navigation] shortcode
 * @since 0.1
 */
function pixopoint_comment_navigation_shortcode() {

	if ( get_comment_pages_count() > 1 ) { // are there comments to navigate through
	$comment_navigation = "<div class='navigation'>
		<div class='nav-previous'>
			" . get_previous_comments_link( __( '&larr; Older Comments', 'wppb_lang' ) ) . "
		</div>
		<div class='nav-next'>
			" . get_next_comments_link( __( 'Newer Comments &rarr;', 'wppb_lang' ) ) . "
		</div>
	</div>";
	}
	return $comment_navigation;
}
add_shortcode( 'comment_navigation', 'pixopoint_comment_navigation_shortcode' );

/**
 * [loginout] shortcode
 * @since 0.1
 */
function pixopoint_loginout_shortcode() {
	return wp_loginout( '', false );
}
add_shortcode( 'loginout', 'pixopoint_loginout_shortcode' );

/**
 * [post_class] shortcode
 * @since 0.1
 */
function pixopoint_post_class_shortcode( $atts ) {
	$post_class = '';
	foreach ( get_post_class() as $class ) {
		$post_class .= $class . ' ';
	}
	return $post_class;
}
add_shortcode( 'post_class', 'pixopoint_post_class_shortcode' );

/**
 * [get_avatar] shortcode
 * @since 0.1
 */
function pixopoint_get_avatar_shortcode( $atts ) {
	// Grabbing parameters and setting default values
	extract(
		shortcode_atts(
			array(
				'size' => '80' 
			),
			$atts
		)
	);

	// Strip out unnecessary stuff
	if ( !is_int( $size ) )
		$size = 80;

	return get_avatar( get_the_author_meta( 'user_email' ), $size );
}
add_shortcode( 'get_avatar', 'pixopoint_get_avatar_shortcode' );

/**
 * [the_tags] shortcode
 * @since 0.1
 */
function pixopoint_the_tags_shortcode( $atts ) {
	// Grabbing parameters and setting default values
	extract(
		shortcode_atts(
			array(
				'separator' => ', ' 
			),
			$atts
		)
	);

	$separator = esc_html( $separator );

	return get_the_tag_list( '', $separator, '' );
}
add_shortcode( 'the_tags', 'pixopoint_the_tags_shortcode' );

/**
 * [the_category] shortcode
 * Uses output buffering to avoid rewriting a bunch of code in comments_number() which can only be echo'd
 * @since 0.1
 */
function pixopoint_the_category_shortcode( $atts ) {

 	ob_start();

	// Grabbing parameters and setting default values
	extract(
		shortcode_atts(
			array(
				'separator' => ', ' 
			),
			$atts
		)
	);

	$separator = esc_html( $separator );

	the_category( $separator );

	$the_category = ob_get_contents();
	ob_end_clean();
	return $the_category;
}
add_shortcode( 'the_category', 'pixopoint_the_category_shortcode' );

/**
 * [category_description] shortcode
 * @since 0.1
 */
function pixopoint_category_description_shortcode( $atts, $content = null ) {
	// Grabbing parameters and setting default values
	extract(
		shortcode_atts(
			array(
				'slug' => '' 
			),
			$atts
		)
	);

	// Sanitise slugs
	$slug = sanitize_title_with_dashes( $slug );

	return category_description( get_category_by_slug ( $slug ) -> term_id );
}
add_shortcode( 'category_description', 'pixopoint_category_description_shortcode' );

/**
 * [get_archives] shortcode
 *
 * @link http://codex.wordpress.org/Template_Tags/wp_get_archives
 * @since 0.1
 */
function pixopoint_get_archives_shortcode( $atts ) {
	// Grabbing parameters and setting default values
	extract(
		shortcode_atts(
			array(
				'type'            => 'monthly', 
				'limit'           => '', 
				'show_post_count' => 0, 
			),
			$atts
		)
	);

	// Check for numerical values
	if ( !is_int( $limit ) )
		$limit = '';
	$args = 'limit=' . $limit;

	// Confirm if 0 or 1
	if ( 0 == $show_post_count OR 1 == $show_post_count ) {
		$show_post_count = '0';
		$args = $args . '&show_post_count=' . $show_post_count;
	}

	/* Check all possibilities and set to "monthly" if set incorrectly */
	switch ( $type ) {
		case    'yearly':           break;
		case    'monthly':          break;
		case    'daily':            break;
		case    'weekly':           break;
		case    'postbypost ':      break;
		case    'alpha':            break;
		default: $type = 'monthly'; break;
	}
	$args = $args . '&type=' . $type;

	// Return value instead of echo'ing
	$args = $args . '&echo=0';

	return wp_get_archives( $args );
}
add_shortcode( 'get_archives', 'pixopoint_get_archives_shortcode' );

/**
 * [comments_template] shortcodes
 * Uses output buffering to avoid rewriting a bunch of code in comments_number() which can only be echo'd
 * @since 0.1
 */
function pixopoint_comments_template_shortcode() {
	ob_start();
	comments_template();
	$comments_template = ob_get_contents();
	ob_end_clean();
	return $comments_template;
}
add_shortcode( 'comments_template', 'pixopoint_comments_template_shortcode' );

/**
 * [list_comments] shortcodes
 * Uses output buffering to avoid rewriting a bunch of code in comments_number() which can only be echo'd
 * @since 0.1
 */
function pixopoint_list_comments_shortcode() {
	ob_start();
	wp_list_comments();
	$wp_list_comments = ob_get_contents();
	ob_end_clean();
	return $wp_list_comments;
}
add_shortcode( 'list_comments', 'pixopoint_list_comments_shortcode' );

/**
 * [next_posts_link] shortcode
 * @since 0.1
 */
function pixopoint_next_posts_link_shortcode() {
	return get_next_posts_link( null, 0 );
}
add_shortcode( 'next_posts_link', 'pixopoint_next_posts_link_shortcode' );

/**
 * [get_template_directory_uri] shortcode
 * @since 0.1
 */
function pixopoint_get_template_directory_uri_shortcode() {
	return get_template_directory_uri();
}
add_shortcode( 'get_template_directory_uri', 'pixopoint_get_template_directory_uri_shortcode' );

/**
 * [previous_posts_link] shortcode
 * @since 0.1
 */
function pixopoint_previous_posts_link_shortcode() {
	return get_previous_posts_link( null, 0 );
}
add_shortcode( 'previous_posts_link', 'pixopoint_previous_posts_link_shortcode' );

/**
 * [the_time] shortcode
 * Uses output buffering to avoid rewriting a bunch of code in comments_number() which can only be echo'd
 * @since 0.1
 */
function pixopoint_the_time_shortcode( $atts, $content = null ) {
	// Grabbing parameters and setting default values
	extract(
		shortcode_atts(
			array(
				'format' => '' 
			),
			$atts
		)
	);

	// Strip out unnecessary stuff
	$format = pixopoint_sanitize_names( $format ); // Blitz everything but alpha numerics, _'s or -'s and spaces

	ob_start();
	the_time( $format );
	$the_time = ob_get_contents();
	ob_end_clean();
	return $the_time;
}
add_shortcode( 'the_time', 'pixopoint_the_time_shortcode' );

/**
 * [nav_menu] shortcodes
 * @since 0.1
 */
function pixopoint_nav_menu_shortcode( $atts, $content = null ) {
	// Grabbing parameters and setting default values
	extract(
		shortcode_atts(
			array(
				'theme_location' => '' 
			),
			$atts
		)
	);

	if ( 'primary-menu' != $theme_location && 'secondary-menu' != $theme_location )
		$return;

	return wp_nav_menu(
		array(
			'theme_location' => $theme_location,
			'container'      => 'div',
			'menu_class'     => 'menu',
			'echo'           => false,
		)
	);
}
add_shortcode( 'nav_menu', 'pixopoint_nav_menu_shortcode' );

/**
 * [widget] shortcode
 * Uses output buffering to avoid rewriting a bunch of code in dynamic_sidebar() which can only be echo'd
 * @since 0.1
 */
function pixopoint_widget_shortcode( $atts, $content = null ) {
	// Grabbing parameters and setting default values
	extract(
		shortcode_atts(
			array(
				'number' => '' 
			),
			$atts
		)
	);

	if ( !is_int( $number ) )
		$return;

	ob_start();
	if ( !dynamic_sidebar( 'widgetarea' . $number ) )
		return do_shortcode( $content );
	$widgets = ob_get_contents();
	ob_end_clean();
	return $widgets;
}
add_shortcode( 'widget', 'pixopoint_widget_shortcode' );

/**
 * [siteinfo] shortcode
 * @since 0.1
 */
function pixopoint_siteinfo_shortcode( $atts ) {
	// Grabbing parameters and setting default values
	extract(
		shortcode_atts(
			array(
				'type' => ''
			),
			$atts
		)
	);

	// Check all possibilities and set to "name" if set incorrectly
	switch ( $type ){
		case    'name':              break;
		case    'description':       break;
		case    'admin_email':       break;
		case    'url':               break;
		case    'wpurl':             break;
		case    'atom_url':          break;
		case    'rss2_url':          break;
		case    'rss_url':           break;
		case    'pingback_url':      break;
		case    'rdf_url':           break;
		case    'comments_atom_url': break;
		case    'comments_rss2_url': break;
		default: $type = 'name';     break;
	}

	// Return required PHP code 
	return get_bloginfo( $type, 'display' );
}
add_shortcode( 'siteinfo', 'pixopoint_siteinfo_shortcode' );

/**
 * [post_thumbnail] shortcode
 * @since 0.1
 */
function pixopoint_post_thumbnail_shortcode( $atts ) {
	// Grabbing parameters and setting default values
	extract(
		shortcode_atts(
			array(
				'name'  => ''
			),
			$atts
		)
	);

	// Error message if thumbnails not turned on
	if ( !function_exists( 'has_post_thumbnail' ) )
		echo 'Post thumbnails not activated';

	// Sanitise name
	$name = esc_html( $name );

	// Outputting the thumbnail
	if ( function_exists( 'has_post_thumbnail' ) ) { // need function check in case they haven't set a thumbnail up at all
		if ( has_post_thumbnail() )
			return get_the_post_thumbnail( null, $name, '' );
	}
}
add_shortcode( 'post_thumbnail', 'pixopoint_post_thumbnail_shortcode' );

/**
 * [admin_note] shortcode
 * @since 0.1
 */
function pixopoint_note_shortcode( $atts, $content = null ) {
	 if ( current_user_can( 'publish_posts' ) )
		return '<div class="note">' . $content . '</div>';
}
add_shortcode( 'admin_note', 'pixopoint_note_shortcode' );

/**
 * [loop] shortcode
 * todo: Output buffering may not be necessary here. May be able to return string directly
 * @since 0.1
 */
function pixopoint_loop_shortcode( $atts, $content = null ) {
	ob_start();

	// Grabbing parameters and setting default values
	extract(
		shortcode_atts(
			array(
				'category_name'  => '',
				'tag'            => '',
				'author_name'    => '',
				'name'           => '',
				'pagename'       => '',
				'post_type'      => '',
				'posts_per_page' => '',
				'offset'         => '',
				'orderby'        => '',
				'order'          => ''
			),
			$atts
		)
	);

	// Santise/validate numeric data
	if ( is_int( $posts_per_page ) )
		$query = $query . 'posts_per_page=' . $posts_per_page . '&';
	if ( is_int( $offset ) )
		$query = $query . 'offset=' . $offset . '&';

	// Sanitise slugs
	if ( '' != $category_name )
		$query = $query . 'category_name=' . sanitize_title_with_dashes( $category_name ) . '&';
	if ( '' != $tag )
		$query = $query . 'tag=' . sanitize_title_with_dashes( $tag ) . '&';
	if ( '' != $author_name )
		$query = $query . 'author_name=' . sanitize_title_with_dashes( $author_name ) . '&';
	if ( '' != $name )
		$query = $query . 'name=' . sanitize_title_with_dashes( $name ) . '&';
	if ( '' != $pagename )
		$query = $query . 'pagename=' . sanitize_title_with_dashes( $pagename ) . '&';

	// Sanitise post type
	if ( 'page' == $post_type OR 'post' == $post_type OR 'slider_gallery' == $post_type )
		$query = $query . 'post_type=' . $post_type . '&';

	// Sanitise order
	if ( 'ASC' == $order AND 'DESC' == $order )
		$query = $query . 'order=' . $order . '&';

	// Sanitise post type
	switch ( $orderby ) {
		case 'author':           $query = $query . 'orderby=' . $orderby . '&'; break;
		case 'date':             $query = $query . 'orderby=' . $orderby . '&'; break;
		case 'title':            $query = $query . 'orderby=' . $orderby . '&'; break;
		case 'modified':         $query = $query . 'orderby=' . $orderby . '&'; break;
		case 'menu_order':       $query = $query . 'orderby=' . $orderby . '&'; break;
		case 'parent':           $query = $query . 'orderby=' . $orderby . '&'; break;
		case 'ID':               $query = $query . 'orderby=' . $orderby . '&'; break;
		case 'rand':             $query = $query . 'orderby=' . $orderby . '&'; break;
		case 'none':             $query = $query . 'orderby=' . $orderby . '&'; break;
		case 'comment_count':    $query = $query . 'orderby=' . $orderby . '&'; break;
		default: break;
	}

	if ( !isset( $query ) )
		$query = '';

	// Remove last &
	$query = substr_replace( $query , '', -1 );

	// Add PHP string, or blitz query entirely if not needed
	if ( '' != $query )
		query_posts( $query );
	else
		$query = '';

	// Create PHP
	if ( is_404() )
		query_posts( 'post_type=page&name=404-error' );
	if ( have_posts() ) : while ( have_posts() ) : the_post();
		// Return filtered output
		echo do_shortcode( $content );
	endwhile; endif;

	$loop = ob_get_contents();
	ob_end_clean();
	return $loop;
}
add_shortcode( 'loop', 'pixopoint_loop_shortcode' );

/**
 * [if] shortcode
 * @since 0.1
 */
function pixopoint_if_shortcode( $atts, $content = null ) {
	// Grabbing parameters and setting default values
	extract(
		shortcode_atts(
			array(
				'condition' => '', 
				'slug' => '', 
			),
			$atts
		)
	);

	// Sanitise slugs
	$slug = sanitize_title( $slug );

	// Check all possibilities and set to "name" if set incorrectly
	switch ( $type ){
		case 'is_page':                $slug = " '" . $slug . "' "; break;
		case '!is_page':               $slug = " '" . $slug . "' "; break;
		case 'is_category':            $slug = " '" . $slug . "' "; break;
		case '!is_category':           $slug = " '" . $slug . "' "; break;
		case 'is_single':              $slug = " '" . $slug . "' "; break;
		case '!is_single':             $slug = " '" . $slug . "' "; break;
		case 'is_tag':                 $slug = " '" . $slug . "' "; break;
		case '!is_tag':                $slug = " '" . $slug . "' "; break;
		case 'is_author':              $slug = " '" . $slug . "' "; break;
		case '!is_author':             $slug = " '" . $slug . "' "; break;
		case 'in_category':            $slug = " '" . $slug . "' "; break;
		case '!in_category':           $slug = " '" . $slug . "' "; break;
		case 'is_sticky':              break;
		case '!is_sticky':             break;
		case 'is_date':                break;
		case '!is_date':               break;
		case 'is_year':                break;
		case '!is_year':               break;
		case 'is_month':               break;
		case '!is_month':              break;
		case 'is_day':                 break;
		case '!is_day':                break;
		case 'is_time':                break;
		case '!is_time':               break;
		case 'is_archive':             break;
		case '!is_archive':            break;
		case 'is_search':              break;
		case '!is_search':             break;
		case 'is_404':                 break;
		case '!is_404':                break;
		case 'is_user_logged_in':      break;
		case '!is_user_logged_in':     break;
		case 'is_paged':               break;
		case '!is_paged':              break;
		case 'is_attachment':          break;
		case '!is_attachment':         break;
		case 'is_singular':            break;
		case '!is_singular':           break;
		case 'comments_open':          break;
		case '!comments_open':         break;
		case 'has_tag':                break;
		case '!has_tag':               break;
		case 'is_page_template':       break;
		case '!is_page_template':      break;
		case 'is_preview':             break;
		case '!is_preview':            break;
		case 'pings_open':             break;
		case '!pings_open':            break;
		case 'is_trackback':           break;
		case '!is_trackback':          break;
		case 'post_password_required': break;
		case '!post_password_required':break;
		case 'have_comments':          break;
		case '!have_comments':         break;
		default: $condition = 'is_page';    break;
	}

	// If condtion is set, then display content
	if ( $condition( $slug ) )
		return do_shortcode( $content );
}
add_shortcode( 'if', 'pixopoint_if_shortcode' );

/**
 * [get_header] shortcode
 * @since 0.1
 * Specific to PixoPoint Template Editor
 */
function pixopoint_get_header_shortcode() {
	get_header();
}
add_shortcode( 'get_header', 'pixopoint_get_header_shortcode' );

/**
 * [get_footer] shortcode
 * @since 0.1
 * Specific to PixoPoint Template Editor
 */
function pixopoint_get_footer_shortcode() {
	get_footer();
}
add_shortcode( 'get_footer', 'pixopoint_get_footer_shortcode' );

/**
 * [copyright] shortcode
 * Attempts to load specified copyright, otherwise loads default one
 * @since 0.1
 */
function pixopoint_copyright_shortcode() {
	$opt = get_option( WPPB_DESIGNER_SETTINGS );
	if ( '' != $opt['copyright'] )
		return $opt['copyright'];
	else
		return PIXOPOINT_SETTINGS_COPYRIGHT; 
}
add_shortcode( 'copyright', 'pixopoint_copyright_shortcode' );

/**
 * [dropdown_categories] shortcode
 * @since 0.1
 */
function pixopoint_dropdown_categories_shortcode() {
	$cats = '<form action="' . home_url() . '/" method="get">';

	$select = wp_dropdown_categories( "show_option_none=Select category&show_count=1&orderby=name&echo=0" );
	$select = preg_replace( "#<select([^>]*)>#", "<select$1 onchange=\"return this.form.submit()\">", $select );

	return $cats . $select . '<noscript><input type="submit" value="View" /></noscript></form>';
}
add_shortcode( 'dropdown_categories', 'pixopoint_dropdown_categories_shortcode' );

/**
 * [dropdown_pages] shortcode
 * @since 0.1
 */
function pixopoint_dropdown_pages_shortcode() {
	return "<form action='" . home_url() . "' method='get'>" . wp_dropdown_pages( 'echo=0' ) . "<input type='submit' name='submit' value='view' /></form>";
}
add_shortcode( 'dropdown_pages', 'pixopoint_dropdown_pages_shortcode' );

/**
 * [dropdown_users] shortcode
 * @since 0.1
 */
function pixopoint_dropdown_users_shortcode() {
	return '<form action="' . home_url() . '" method="get">' . wp_dropdown_users(
		array(
			'name' => 'author',
			'echo' => false,
		)
	) . '<input type="submit" name="submit" value="view" /></form>';
}
add_shortcode( 'dropdown_users', 'pixopoint_dropdown_users_shortcode' );

/**
 * [list_authors] shortcode
 * @since 0.1
 */
function pixopoint_list_authors_shortcode() {
	return wp_list_authors( 'show_fullname=1&optioncount=1&echo=false' );
}
add_shortcode( 'list_authors', 'pixopoint_list_authors_shortcode' );

/**
 * [list_bookmarks] shortcode
 * @since 0.1
 */
function pixopoint_list_bookmarks_shortcode() {
	return wp_list_bookmarks( 'title_li&categorize=0&echo=0' );
}
add_shortcode( 'list_bookmarks', 'pixopoint_list_bookmarks_shortcode' );

/**
 * [list_categories] shortcode
 *
 * @link http://codex.wordpress.org/Template_Tags/wp_list_categories
 * @since 0.1
 */
function pixopoint_list_categories_shortcode( $atts ) {
	// Grabbing parameters and setting default values
	extract(
		shortcode_atts(
			array(
				'include '        => '',
				'exclude'         => '',
				'orderby'         => 'name',
				'order'           => 'ASC',
				'hide_empty'      => 'yes',
				'child_of'         => '',
				'hierarchical'    => '1',
				'number'          => 20,
				'depth'           => 0,
				
			),
			$atts
		)
	);

	// Comma delimited numerical lists
	$include = pixopoint_validate_comma_numeric( $include );
	$exclude = pixopoint_validate_comma_numeric( $exclude );

	// Check all possibilities and set to 'name' if incorrect
	switch ( $orderby ){
		case 'ID': break;
		case 'name': break;
		case 'slug': break;
		case 'count': break;
		default: $orderby = 'name'; break;
	}

	// Order
	if ( 'DESC' != $order AND 'ASC' != $order )
		$order = 'ASC';

	// Yay or nay options
	switch ( $hide_empty ){
		case 'yes': $hide_empty = 1; break;
		case 'no': $hide_empty = 0; break;
		case '': $hide_empty = 1; break;
		default: $hide_empty = 1; break;
	}
	switch ( $hierarchical ){
		case 'yes': $hierarchical = 1; break;
		case 'no': $hierarchical = 0; break;
		case '': $hierarchical = 1; break;
		default: $hierarchical = 1; break;
	}

	// Integers
	if ( !is_int( $number ) )
		$number = 20;
	if ( !is_int( $depth ) )
		$number = 0;
	if ( !is_int( $child_of ) )
		$child_of = '';

	return wp_list_categories( 'echo=0&title_li=&include=' . $include . '&exclude=' . $exclude . '&orderby=' . $orderby . '&hierarchical' . $hierarchical . '&number=' . $number . '&depth=' . $depth . '&child_of=' . $child_of );
}
add_shortcode( 'list_categories', 'pixopoint_list_categories_shortcode' );

/**
 * [list_pages] shortcode
 *
 * @link http://codex.wordpress.org/Template_Tags/wp_list_categories
 * @since 0.1
 */
function pixopoint_list_pages_shortcode( $atts ) {
	// Grabbing parameters and setting default values
	extract(
		shortcode_atts(
			array(
				'include '       => '',
				'exclude'        => '',
				'sort_column'    => 'post_title',
				'sort_order'     => 'ASC',
				'number'         => 20,
				'depth'          => 0,
				'child_of'       => '',
			),
			$atts
		)
	);

	// Comma delimited numerical lists
	$include = pixopoint_validate_comma_numeric( $include );
	$exclude = pixopoint_validate_comma_numeric( $exclude );

	// Check all possibilities and set to 'name' if incorrect
	switch ( $sort_column ){
		case     'post_title':            break;
		case     'menu_order':            break;
		case     'post_date':             break;
		case     'ID':                    break;
		case     'post_author':           break;
		case     'post_name':             break;
		default: $orderby = 'post_title'; break;
	}

	// Sort order
	if ( 'DESC' != $sort_order && 'ASC' != $sort_order )
		$order = 'ASC';

	// Yay or nay options
	switch ( $hide_empty ){
		case     'yes': $hide_empty = 1; break;
		case     'no':  $hide_empty = 0; break;
		case     '':    $hide_empty = 1; break;
		default:        $hide_empty = 1; break;
	}

	// Integers
	if ( !is_int( $number ) )
		$number = 20;
	if ( !is_int( $depth ) )
		$number = 0;
	if ( !is_int( $child_of ) )
		$child_of = '';

	return wp_list_pages( 'echo=0&title_li=&include=' . $include . '&exclude=' . $exclude . '&sort_column=' . $sort_column . '&number=' . $number . '&depth=' . $depth . '&child_of=' . $child_of );
}
add_shortcode( 'list_pages', 'pixopoint_list_pages_shortcode' );

/**
 * [login_form] shortcode
 * @since 0.1
 */
function pixopoint_login_form_shortcode() {
	wp_login_form( 'echo=false' );
}
add_shortcode( 'login_form', 'pixopoint_login_form_shortcode' );

/**
 * [login_url] shortcode
 * @since 0.1
 */
function pixopoint_login_url_shortcode() {
	return wp_login_url();
}
add_shortcode( 'login_url', 'pixopoint_login_url_shortcode' );

/**
 * [lostpassword_url] shortcode
 * Uses output buffering to avoid rewriting a bunch of code in comments_number() which can only be echo'd
 * @since 0.1
 */
function pixopoint_lostpassword_url_shortcode() {
	ob_start();
	wp_lostpassword_url();
	$lostpassword_url = ob_get_contents();
	ob_end_clean();
	return $lostpassword_url;
}
add_shortcode( 'lostpassword_url', 'pixopoint_lostpassword_url_shortcode' );

/**
 * [logout_url] shortcode
 * @since 0.1
 */
function pixopoint_logout_url_shortcode() {
	return wp_logout_url();
}
add_shortcode( 'logout_url', 'pixopoint_logout_url_shortcode' );

/**
 * [single_post_title] shortcode
 * Uses output buffering to avoid rewriting a bunch of code in comments_number() which can only be echo'd
 * @since 0.1
 */
function pixopoint_single_post_title_shortcode() {
	ob_start();
	single_post_title();
	$title = ob_get_contents();
	ob_end_clean();
	return $title;
}
add_shortcode( 'single_post_title', 'pixopoint_single_post_title_shortcode' );

/**
 * [the_shortlink] shortcode
 * @since 0.1
 */
function pixopoint_the_shortlink_shortcode() {
	return wp_get_shortlink();
}
add_shortcode( 'the_shortlink', 'pixopoint_the_shortlink_shortcode' );

/**
 * [tag_cloud] shortcode
 * @since 0.1
 */
function pixopoint_tag_cloud_shortcode( $atts ) {
	// Grabbing parameters and setting default values
	extract(
		shortcode_atts(
			array(
				'smallest' => 8,
				'largest'  => 22,
				'number'   => 45,
				'orderby'  => 'name',
				'order'    => 'ASC'
			),
			$atts
		)
	);

	// Check integers
	if ( !is_int( $smallest ) )
		$smallest = 8;
	if ( !is_int( $largest ) )
		$largest = 22;
	if ( !is_int( $number ) )
		$number = 45;

	// Check all possibilities and set to 'name' if incorrect
	switch ( $orderby ){
		case                'name':  break;
		case                'count': break;
		default: $orderby = 'name';  break;
	}
	switch ( $order ) {
		case                'ASC':  break;
		case                'DESC': break;
		case                'RAND': break;
		default: $order =   'ASC';  break;
	}

	return wp_tag_cloud( 'echo=false&smallest=' . $smallest . '&largest=' . $largest . '&number=' . $number . '&orderby=' . $orderby . '&order=' . $order );
}
add_shortcode( 'tag_cloud', 'pixopoint_tag_cloud_shortcode' );

/**
 * [tag_description] shortcode
 * @since 0.1
 */
function pixopoint_tag_description_shortcode() {
	return tag_description();
}
add_shortcode( 'tag_description', 'pixopoint_tag_description_shortcode' );

/**
 * [the_author] shortcode
 * @since 0.1
 */
function pixopoint_the_author_shortcode() {
	return get_the_author();
}
add_shortcode( 'the_author', 'pixopoint_the_author_shortcode' );

/**
 * [the_author_meta] shortcode
 * @since 0.1
 */
function pixopoint_the_author_meta_shortcode( $atts ) {
	// Grabbing parameters and setting default values
	extract(
		shortcode_atts(
			array(
				'field' => 'nickname',
				'userID'  => ''
			),
			$atts
		)
	);

	if ( !is_int( $userID ) )
		$userID = '';

	// Check all possibilities and set to 'nickname' if incorrect
	switch ( $field ){
		case 'user_nicename': break;
		case 'user_url': break;
		case 'display_name': break;
		case 'nickname': break;
		case 'first_name': break;
		case 'last_name': break;
		case 'description': break;
		case 'jabber': break;
		case 'aim': break;
		case 'yim': break;
		case 'description': break;
		default: $field = 'nickname'; break;
	}

	return apply_filters(
		'the_author_' . $field, 
		get_the_author_meta(
			$field,
			$userID
		),
		$userID
	);
}
add_shortcode( 'the_author_meta', 'pixopoint_the_author_meta_shortcode' );

/**
 * [the_author_posts] shortcode
 * @since 0.1
*/
function pixopoint_the_author_posts_shortcode() {
	return get_the_author_posts();
}
add_shortcode( 'the_author_posts', 'pixopoint_the_author_posts_shortcode' );

/**
 * [breadcrumbs] shortcode
 * Uses output buffering to avoid rewriting a bunch of code in comments_number() which can only be echo'd
 * @since 0.1
*/
function pixopoint_breadcrumbs_shortcode( $atts ) {

	ob_start();	
	if ( class_exists( 'breadcrumb_navigation_xt' ) ) {
		echo 'Browse > ';
		$mybreadcrumb = new breadcrumb_navigation_xt;
		$mybreadcrumb->opt['title_blog'] = 'Home';
		$mybreadcrumb->opt['separator'] = ' / ';
		$mybreadcrumb->opt['singleblogpost_category_display'] = true;
		$mybreadcrumb->display();
	}
	$breadcrumbs = ob_get_content();
	ob_end_clean();
	return $breadcrumbs;
}
add_shortcode( 'breadcrumbs', 'pixopoint_breadcrumbs_shortcode' ); 

/**
 * [wp_dropdown_users] shortcode
 * @since 0.1
 */
function pixopoint_wp_dropdown_users_shortcode( $atts ) {
	// Grabbing parameters and setting default values
	extract(
		shortcode_atts(
			array(
				'show_option_all'  => '',
				'show_option_none' => '',
				'orderby'          => 'display_name',
				'order'            => 'nickname',
				'include'          => 'nickname',
				'exclude'          => 'nickname'
			),
			$atts
		)
	);

	// Check yes's and no's
	if ( 'yes' != $show_option_all )
		$show_option_all = 1;
	if ( 'no' != $show_option_all && '' != $show_option_all )
		$show_option_all = '';
	if ( 'yes' != $show_option_none )
		$show_option_none = 1;
	if ('no' != $show_option_none && '' != $show_option_none )
		$show_option_none = '';

	// Check all possibilities and set to 'display_name' if incorrect
	switch ( orderby ){
		case                'ID':            break;
		case                'user_nicename': break;
		case                'display_name':  break;
		case                '':              break;
		case                '':              break;
		case                '':              break;
		default: $orderby = 'display_name';  break;
	}

	// Sanitise order
	if ( 'ASC' != $order AND 'DESC' != $order )
		$order = 'ASC';

	// Sanitise as comma delimited list of numbers
	$include = pixopoint_validate_comma_numeric( $include );
	$exclude = pixopoint_validate_comma_numeric( $exclude );

	wp_dropdown_users(
		array(
			'show_option_all'  => $show_option_all,
			'show_option_none' => $show_option_none,
			'orderby'          => $orderby,
			'order'            => $order,
			'include'          => $include,
			'exclude'          => 'exclude',
			'echo'             => 0,
		)
	);
}
add_shortcode( 'wp_dropdown_users', 'pixopoint_wp_dropdown_users_shortcode' );

/**
 * [get_calendar] shortcode
 * @since 0.1
*/
function pixopoint_get_calendar_shortcode() {
	return get_calendar( true, false );
}
add_shortcode( 'get_calendar', 'pixopoint_get_calendar_shortcode' ); 

/**
 * [the_date] shortcode
 * @since 0.1
*/
function pixopoint_the_date_shortcode( $atts ) {
	// Grabbing parameters and setting default values
	extract(
		shortcode_atts(
			array(
				'format'  => 'Y-m-d'
			),
			$atts
		)
	);

	// Strip out unnecessary stuff
	$format = preg_replace( '/[^a-z_0-9-_A-Z-_ ]/', ',' , $format ); // Blitz everything but alpha numerics, _'s or -'s

	return the_date( $format, '', '', false );
}
add_shortcode( 'the_date', 'pixopoint_the_date_shortcode' ); 

/**
 * [get_shortlink] shortcode
 * @since 0.1
*/
function pixopoint_get_shortlink_shortcode() {
	return wp_get_shortlink();
}
add_shortcode( 'get_shortlink', 'pixopoint_get_shortlink_shortcode' );

/**
 * [edit_tag_link] shortcode
 * Uses output buffering to avoid rewriting a bunch of code in comments_number() which can only be echo'd
 * @since 0.1
*/
function pixopoint_edit_tag_link_shortcode( $atts ) {
	// Grabbing parameters and setting default values
	extract(
		shortcode_atts(
			array(
				'text'  => 'Edit post'
			),
			$atts
		)
	);

	// Sanitization of edit text
	$text = sanitize_title( $text );

	ob_start();
	edit_tag_link( $text );
	$edit_tag = ob_get_contents();
	ob_end_clean();
	return $edit_tag;
}
add_shortcode( 'edit_tag_link', 'pixopoint_edit_tag_link_shortcode' ); 

/**
 * [edit_post_link] shortcode
 * Uses output buffering to avoid rewriting a bunch of code in comments_number() which can only be echo'd
 * @since 0.1
 */
function pixopoint_edit_post_link_shortcode( $atts ) {
	// Grabbing parameters and setting default values
	extract(
		shortcode_atts(
			array(
				'text'  => 'Edit post'
			),
			$atts
		)
	);

	// Sanitization of edit text
	$text = sanitize_title( $text );

	ob_start();
	edit_post_link( $text );
	$edit_link = ob_get_contents();
	ob_end_clean();
	return $edit_link;
}
add_shortcode( 'edit_post_link', 'pixopoint_edit_post_link_shortcode' );

/**
 * [edit_comment_link] shortcode
 * Uses output buffering to avoid rewriting a bunch of code in comments_number() which can only be echo'd
 * @since 0.1
 */
function pixopoint_edit_comment_link_shortcode( $atts ) {
	// Grabbing parameters and setting default values
	extract(
		shortcode_atts(
			array(
				'text'  => 'Edit tag'
			),
			$atts
		)
	);

	// Sanitization of edit text
	$text = sanitize_title( $text );

	ob_start();
	edit_comment_link( $text, '', '' );
	$edit_link = ob_get_contents();
	ob_end_clean();
	return $edit_link;
}
add_shortcode( 'edit_comment_link', 'pixopoint_edit_comment_link_shortcode' );

/**
 * [single_cat_title] shortcode
 * @since 0.1
 */
function pixopoint_single_cat_title_shortcode() {
	return single_cat_title();
}
add_shortcode( 'single_cat_title', 'pixopoint_single_cat_title_shortcode' );

/**
 * [single_month_title] shortcode
 * @since 0.1
 */
function pixopoint_single_month_title_shortcode() {
	// Grabbing parameters and setting default values
	extract(
		shortcode_atts(
			array(
				'text'  => 'Edit tag'
			),
			$atts
		)
	);

	// Sanitization of edit text
	$text = sanitize_title( $text );

	return single_month_title( $text, false );
}
add_shortcode( 'single_month_title', 'pixopoint_single_month_title_shortcode' );

/**
 * [single_tag_title] shortcode
 * @since 0.1
 */
function pixopoint_single_tag_title_shortcode( $atts ) {
	// Grabbing parameters and setting default values
	extract(
		shortcode_atts(
			array(
				'text'  => 'Edit tag'
			),
			$atts
		)
	);

	// Sanitization of edit text
	$text = sanitize_title( $text );

	return single_tag_title( $text );
}
add_shortcode( 'single_tag_title', 'pixopoint_single_tag_title_shortcode' );

/**
 * [the_search_query] shortcode
 * @since 0.1
 */
function pixopoint_the_search_query_shortcode() {
	return esc_attr( apply_filters( 'the_search_query', get_search_query( false ) ) );
}
add_shortcode( 'the_search_query', 'pixopoint_the_search_query_shortcode' );

/**
 * [home_url] shortcode
 * @since 0.1
 */
function pixopoint_home_url_shortcode() {
	return home_url();
}
add_shortcode( 'home_url', 'pixopoint_home_url_shortcode' );

/**
 * [counter] shortcode
 * @since 1.0
 */
function pixopoint_counter_shortcode() {

	$counter++;
	return $counter;
}
add_shortcode( 'counter', 'pixopoint_counter_shortcode' );

/*
 * [numeric_pagination] shortcode
 * Uses output buffering to save rewriting a bunch of code to prevent it from echo'ing HTML
 * @since 0.1
 */
function pixopoint_numeric_pagination_shortcode( $pages = '', $range = 2 ) {
	ob_start();

	// Beginning of numeric pagination - code developed from the excellent Genesis theme by StudioPress (http://studiopress.com/)

	if( !is_singular() ) : // do nothing

	global $wp_query;

	// Stop execution if there\'s only 1 page
	if( $wp_query->max_num_pages <= 1 ) return;

	$paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged') ) : 1;
	$max = intval( $wp_query->max_num_pages );

	//	add current page to the array
	if ( $paged >= 1 )
		$links[] = $paged;
	
	//	add the pages around the current page to the array
	if ( $paged >= 3 ) {
		$links[] = $paged - 1; $links[] = $paged - 2;
	}
	if ( ($paged + 2) <= $max ) { 
		$links[] = $paged + 2; $links[] = $paged + 1;
	}

	//	Previous Post Link
	if ( get_previous_posts_link() )
		printf( '<li>%s</li>' . "\n", get_previous_posts_link( __( '&laquo; Previous', 'wppb_lang') ) );

	//	Link to first Page, plus ellipeses, if necessary
	if ( !in_array( 1, $links ) ) {
		if ( $paged == 1 )
			$current = ' class="active"';
		else
			$current = null;
		printf(
			'<li %s><a href="%s">%s</a></li>' . "\n",
			$current,
			get_pagenum_link(1),
			'1'
		);

		if ( !in_array( 2, $links ) )
			echo '<li>&hellip;</li>';
	}

	//	Link to Current page, plus 2 pages in either direction (if necessary).
	sort( $links );
	foreach( (array)$links as $link ) {
		$current = ( $paged == $link ) ? 'class="active"' : '';
		printf(
			'<li %s><a href="%s">%s</a></li>' . "\n",
			$current,
			get_pagenum_link( $link ),
			$link
		);
	}

	//	Link to last Page, plus ellipses, if necessary
	if ( !in_array( $max, $links ) ) {
		if ( !in_array( $max - 1, $links ) )
			echo '<li>&hellip;</li>' . "\n";
		
		$current = ( $paged == $max ) ? 'class="active"' : '';
		printf(
			'<li %s><a href="%s">%s</a></li>' . "\n",
			$current,
			get_pagenum_link( $max ),
			$max
		);
	}

	//	Next Post Link
	if ( get_next_posts_link() )
		printf(
			'<li>%s</li>' . "\n",
			get_next_posts_link( __( 'Next &raquo;', 'wppb_lang' ) ) );
	endif;

	$pagination = ob_get_contents();
	ob_end_clean();
	return $pagination;
}
add_shortcode( 'numeric_pagination', 'pixopoint_numeric_pagination_shortcode' );
