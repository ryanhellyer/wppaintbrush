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
	return '<?php the_ID(); ?>';
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

	return '<?php echo get_post_meta( get_the_id(), "' . sanitize_title_with_dashes( $name ) . '", true ); ?>';
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
	$link_before = wp_kses( $link_before, '' );
	$link_after = wp_kses( $link_after, '' );

	return "<?php wp_page_menu( 'include=" . $include . "&exclude=" . $exclude . "&show_home=" . $show_home . "&link_before=" . $link_before . "&link_after=" . $link_after . "' ); ?>";
}
add_shortcode( 'page_menu', 'pixopoint_page_menu_shortcode' );

/**
 * [the_permalink] shortcode
 * @since 0.1
 */
function pixopoint_the_permalink_shortcode( $atts ) {
	return '<?php the_permalink(); ?>';
}
add_shortcode( 'the_permalink', 'pixopoint_the_permalink_shortcode' );

/**
 * [the_title] shortcode
 * @since 0.1
 */
function pixopoint_the_title_shortcode( $atts ) {
	return '<?php the_title(); ?>';
}
add_shortcode( 'the_title', 'pixopoint_the_title_shortcode' );

/**
 * [the_content] shortcode
 * @since 0.1
 */
function pixopoint_the_content_shortcode( $atts ) {
	return '<?php the_content(); ?>';
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

	// Strip nasties from readmore
	$readmore = wp_kses( $readmore, '', '' );

	// Link read more
	if ( 'yes' == $link )
		$readmore = '<a href="<?php the_permalink(); ?>">' . $readmore . '</a>';

	// Excerpt with word limit
	if ( is_numeric( $words ) )
		$excerpt = '<?php if ( !function_exists( "pixopoint_the_excerpt_words" ) ) { function pixopoint_the_excerpt_words( $words ) {return ' . intval( $words ) . ';} } add_filter( "excerpt_length", "pixopoint_the_excerpt_words" ); the_excerpt(); ?>';
	// Excerpt with character limit
	elseif ( is_numeric( $characters ) ) 
		$excerpt = '<?php $excerpt = substr( get_the_excerpt(), 0, ' . intval( $characters ) . ' ); if ( strlen( $excerpt ) < strlen( get_the_excerpt() ) ) $excerpt = $excerpt . "[...]"; echo "<p>" . $excerpt . "</p>"; ?>';
	// Or revert to regular excerpt
	else
		$excerpt = '<?php $excerpt = \'<p>\' . get_the_excerpt() . \'</p>\'; $excerpt = str_replace( \'[...]\', \'' . $readmore . '\', $excerpt ); echo $excerpt; ?>';

	return $excerpt;
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

	// Strip tags
	if ( 'yes' == $strip_tags )
		$output = '$excerpt = strip_tags( $excerpt ); ';

	// Limit number of characters (if integer value)
	if ( is_numeric( $number_characters ) )
		$output = $output . '$excerpt = substr( $excerpt, 0, ' . $number_characters . ' ); ';

	return '<?php $excerpt = get_the_content(); ' . $output . 'echo $excerpt; ?>';
}
add_shortcode( 'the_content_limit', 'pixopoint_the_content_limit_shortcode' );

/**
 * [the_author_posts_link] shortcode
 * @since 0.1
 */
function pixopoint_the_author_posts_link_shortcode( $atts ) {
	return '<?php the_author_posts_link(); ?>';
}
add_shortcode( 'the_author_posts_link', 'pixopoint_the_author_posts_link_shortcode' );

/**
 * [return] shortcode
 * @since 0.1
 */
function pixopoint_return_shortcode( $atts ) {
	return '<?php return(); ?>';
}
add_shortcode( 'return', 'pixopoint_return_shortcode' );

/**
 * [comments_number] shortcode
 * @since 0.1
 */
function pixopoint_comments_number_shortcode( $atts ) {
	return "<?php comments_number(
		sprintf( __( 'No Responses to %s', 'pixopoint_theme_editor' ), '<em>' . get_the_title() . '</em>' ),
		sprintf( __( 'One Response to %s', 'pixopoint_theme_editor' ), '<em>' . get_the_title() . '</em>' ),
		sprintf( __( '%% Responses to %s', 'pixopoint_theme_editor' ), '<em>' . get_the_title() . '</em>' )
		); ?>";
}
add_shortcode( 'comments_number', 'pixopoint_comments_number_shortcode' );

/**
 * [comment_form] shortcode
 * @since 0.1
 */
function pixopoint_comment_form_shortcode( $atts ) {
	return "<?php comment_form(); ?>";
}
add_shortcode( 'comment_form', 'pixopoint_comment_form_shortcode' );

/**
 * [onfocus] shortcode
 * @since 1.0
 */
function pixopoint_onfocus_shortcode( $atts, $content ) {
	$content = wp_kses( $content, '', '' );
	return 'onFocus="this.value=\'' . $content . '\'"';
}
add_shortcode( 'onfocus', 'pixopoint_onfocus_shortcode' );

/**
 * [comment_navigation] shortcode
 * @since 0.1
 */
function pixopoint_comment_navigation_shortcode( $atts ) {
	return  "<?php if ( get_comment_pages_count() > 1 ) : // are there comments to navigate through ?>
	<div class='navigation'>
		<div class='nav-previous'>
			<?php previous_comments_link( __( '&larr; Older Comments', 'pixopoint_theme_editor' ) ); ?>
		</div>
		<div class='nav-next'>
			<?php next_comments_link( __( 'Newer Comments &rarr;', 'pixopoint_theme_editor' ) ); ?>
		</div>
	</div><?php endif; ?>";
}
add_shortcode( 'comment_navigation', 'pixopoint_comment_navigation_shortcode' );

/**
 * [loginout] shortcode
 * @since 0.1
 */
function pixopoint_loginout_shortcode( $atts ) {
	return '<?php wp_loginout(); ?>';
}
add_shortcode( 'loginout', 'pixopoint_loginout_shortcode' );

/**
 * [post_class] shortcode
 * @since 0.1
 */
function pixopoint_post_class_shortcode( $atts ) {
	return '<?php foreach ( get_post_class() as $class ) {echo $class . " ";} ?>';
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

	return "<?php get_avatar( get_the_author_meta( 'user_email' ), '" . $size . "' ); ?>";
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

	$separator = wp_kses( $separator, '' );

	return "<?php echo get_the_tag_list( '', '" . $separator . "', '' ); ?>";
}
add_shortcode( 'the_tags', 'pixopoint_the_tags_shortcode' );

/**
 * [the_category] shortcode
 * @since 0.1
 */
function pixopoint_the_category_shortcode( $atts ) {
	// Grabbing parameters and setting default values
	extract(
		shortcode_atts(
			array(
				'separator' => ', ' 
			),
			$atts
		)
	);

	$separator = wp_kses( $separator, '' );

	return "<?php echo the_category( '" . $separator . "' ); ?>";
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

	return "<?php category_description( get_category_by_slug ( '" . $slug . "' ) -> term_id ); ?>";
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
	switch ( $type ){
		case 'yearly': break;
		case 'monthly': break;
		case 'daily': break;
		case 'weekly': break;
		case 'postbypost ': break;
		case 'alpha': break;
		default: $type = 'monthly'; break;
	}
	$args = $args . '&type=' . $type;

	return "<?php wp_get_archives( '" . $args . "' ); ?>";
}
add_shortcode( 'get_archives', 'pixopoint_get_archives_shortcode' );

/**
 * [comments_template] shortcodes
 * @since 0.1
 */
function pixopoint_comments_template_shortcode( $atts ) {
	return '<?php comments_template(); ?>';
}
add_shortcode( 'comments_template', 'pixopoint_comments_template_shortcode' );

/**
 * [list_comments] shortcodes
 * @since 0.1
 */
function pixopoint_list_comments_shortcode( $atts ) {
	return '<?php wp_list_comments(); ?>';
}
add_shortcode( 'list_comments', 'pixopoint_list_comments_shortcode' );

/**
 * [next_posts_link] shortcode
 * @since 0.1
 */
function pixopoint_next_posts_link_shortcode( $atts ) {
	return '<?php next_posts_link(); ?>';
}
add_shortcode( 'next_posts_link', 'pixopoint_next_posts_link_shortcode' );

/**
 * [get_template_directory_uri] shortcode
 * @since 0.1
 */
function pixopoint_get_template_directory_uri_shortcode( $atts ) {
	return '<?php get_template_directory_uri(); ?>';
}
add_shortcode( 'get_template_directory_uri', 'pixopoint_get_template_directory_uri_shortcode' );

/**
 * [previous_posts_link] shortcode
 * @since 0.1
 */
function pixopoint_previous_posts_link_shortcode( $atts ) {
	return '<?php previous_posts_link(); ?>';
}
add_shortcode( 'previous_posts_link', 'pixopoint_previous_posts_link_shortcode' );

/**
 * [the_time] shortcode
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
	$format = preg_replace( '/[^a-z_0-9-_A-Z-_ ]/', ',' , $format ); // Blitz everything but alpha numerics, _'s or -'s

	return "<?php the_time( '" . $format . "'); ?>";
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

	return "<?php wp_nav_menu( array( 'theme_location' => '" . $theme_location . "', 'container' => 'div', 'menu_class' => 'menu', ) ); ?>";
}
add_shortcode( 'nav_menu', 'pixopoint_nav_menu_shortcode' );

/**
 * [widget] shortcode
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

	return "<?php if ( !dynamic_sidebar( 'widgetarea" . $number . "' ) ) { ?>" . do_shortcode( $content ) . "<?php } ?>";
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
				'type' => ""  
			),
			$atts
		)
	);

	/* Check all possibilities and set to "name" if set incorrectly */
	switch ( $type ){
		case 'name': break;
		case 'description': break;
		case 'admin_email': break;
		case 'url': break;
		case 'wpurl': break;
		case 'atom_url': break;
		case 'rss2_url': break;
		case 'rss_url': break;
		case 'pingback_url': break;
		case 'rdf_url': break;
		case 'comments_atom_url': break;
		case 'comments_rss2_url': break;
		default: $type = 'name'; break;
	}

	/* Return required PHP code */
	return "<?php bloginfo( '" . $type . "' ); ?>";
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
		return 'Post thumbnails not activated';

	// Sanitise name
	$name = strip_tags( wp_kses( $name, '', '' ) );

	// Outputting the thumbnail
	return "<?php if ( has_post_thumbnail() ) { the_post_thumbnail( '" . $name . "' ); } ?>";
}
add_shortcode( 'post_thumbnail', 'pixopoint_post_thumbnail_shortcode' );

/**
 * [admin_note] shortcode
 * @since 0.1
 */
function pixopoint_note_shortcode( $atts, $content = null ) {
	 if ( current_user_can( 'publish_posts' ) )
		return '<div class="note">' . $content . '</div>';
	return '';
}
add_shortcode( 'admin_note', 'pixopoint_note_shortcode' );

/**
 * [loop] shortcode
 * @since 0.1
 */
function pixopoint_loop_shortcode( $atts, $content = null ) {

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

	// Add PHP string, or blitz query entirely if not needed
	if ( !isset( $query ) )
		$query = '';
	if ( '' != $query ) {
		$query = "query_posts( '" . $query;
		$query = substr_replace( $query , '', -1 ); // Remove last &
		$query = "<?php " . $query . "' ); ?>";
	}
	else
		$query = '';

	// Create PHP
	$query = $query . "<?php if ( is_404() ) query_posts( 'post_type=page&name=404-error' ); if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>" . $content . "<?php endwhile; ?><?php endif; ?>";
	/* echo str_replace( '<?php', '', $query ); */

	// Return filtered output
	return do_shortcode( $query );
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
	$slug = sanitize_title_with_dashes( $slug );

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

	return do_shortcode( "<?php if ( " . $condition . "(" . $slug . ") ) { ?>" . $content . "<?php } ?>" );
}
add_shortcode( 'if', 'pixopoint_if_shortcode' );

/**
 * [pixopoint_menu] shortcode
 * This is not mentioned in the help tab as it may be removed in future versions. Use at your own peril!
 * @since 0.1
 */
function pixopoint_pixopoint_menu_shortcode( $atts ) {
	return '<?php pixopoint_menu(); ?>';
}
add_shortcode( 'pixopoint_menu', 'pixopoint_pixopoint_menu_shortcode' );

/**
 * [get_header] shortcode
 * @since 0.1
 * Specific to PixoPoint Template Editor
 */
function pixopoint_get_header_shortcode( $atts ) {
	return '<?php get_header(); ?>';
}
add_shortcode( 'get_header', 'pixopoint_get_header_shortcode' );

/**
 * [get_footer] shortcode
 * @since 0.1
 * Specific to PixoPoint Template Editor
 */
function pixopoint_get_footer_shortcode( $atts ) {
	return '<?php get_footer(); ?>';
}
add_shortcode( 'get_footer', 'pixopoint_get_footer_shortcode' );

/**
 * [copyright] shortcode
 * Attempts to load specified copyright, otherwise loads default one
 * @since 0.1
 */
function pixopoint_copyright_shortcode( $atts ) {
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
function pixopoint_dropdown_categories_shortcode( $atts ) {
	return '<form action="<?php echo home_url(); ?>/" method="get"> <?php $select = wp_dropdown_categories( "show_option_none=Select category&show_count=1&orderby=name&echo=0" ); $select = preg_replace("#<select([^>]*)>#", "<select$1 onchange="return this.form.submit()">", $select); echo $select; ?><noscript><input type="submit" value="View" /></noscript></form>';
}
add_shortcode( 'dropdown_categories', 'pixopoint_dropdown_categories_shortcode' );

/**
 * [dropdown_pages] shortcode
 * @since 0.1
 */
function pixopoint_dropdown_pages_shortcode( $atts ) {
	return "<form action='<?php echo home_url(); ?>' method='get'><?php wp_dropdown_pages(); ?><input type='submit' name='submit' value='view' /></form>";
}
add_shortcode( 'dropdown_pages', 'pixopoint_dropdown_pages_shortcode' );

/**
 * [dropdown_users] shortcode
 * @since 0.1
 */
function pixopoint_dropdown_users_shortcode( $atts ) {
	return '<form action="<?php echo home_url(); ?>" method="get"><?php wp_dropdown_users( array( "name" => "author" ) ); ?><input type="submit" name="submit" value="view" /></form>';
}
add_shortcode( 'dropdown_users', 'pixopoint_dropdown_users_shortcode' );

/**
 * [list_authors] shortcode
 * @since 0.1
 */
function pixopoint_list_authors_shortcode( $atts ) {
	return "<?php wp_list_authors( 'show_fullname=1&optioncount=1' ); ?>";
}
add_shortcode( 'list_authors', 'pixopoint_list_authors_shortcode' );

/**
 * [list_bookmarks] shortcode
 * @since 0.1
 */
function pixopoint_list_bookmarks_shortcode( $atts ) {
	return "<?php wp_list_bookmarks( 'title_li&categorize=0' ); ?>";
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

	return "<?php wp_list_categories( 'title_li=&include=" . $include . "&exclude=" . $exclude . "&orderby=" . $orderby . "&hierarchical" . $hierarchical . "&number=" . $number . "&depth=" . $depth . "&child_of=" . $child_of . "' ); ?>";
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
		case 'post_title': break;
		case 'menu_order': break;
		case 'post_date': break;
		case 'ID': break;
		case 'post_author': break;
		case 'post_name': break;
		default: $orderby = 'post_title'; break;
	}

	// Sort order
	if ( 'DESC' != $sort_order AND 'ASC' != $sort_order )
		$order = 'ASC';

	// Yay or nay options
	switch ( $hide_empty ){
		case 'yes': $hide_empty = 1; break;
		case 'no': $hide_empty = 0; break;
		case '': $hide_empty = 1; break;
		default: $hide_empty = 1; break;
	}

	// Integers
	if ( !is_int( $number ) )
		$number = 20;
	if ( !is_int( $depth ) )
		$number = 0;
	if ( !is_int( $child_of ) )
		$child_of = '';

	return "<?php wp_list_pages( 'title_li=&include=" . $include . "&exclude=" . $exclude . "&sort_column=" . $sort_column . "&number=" . $number . "&depth=" . $depth . "&child_of=" . $child_of . "' ); ?>";
}
add_shortcode( 'list_pages', 'pixopoint_list_pages_shortcode' );

/**
 * [login_form] shortcode
 * @since 0.1
 */
function pixopoint_login_form_shortcode( $atts ) {
	return '<?php wp_login_form(); ?>';
}
add_shortcode( 'login_form', 'pixopoint_login_form_shortcode' );

/**
 * [login_url] shortcode
 * @since 0.1
 */
function pixopoint_login_url_shortcode( $atts ) {
	return '<?php echo wp_login_url(); ?>';
}
add_shortcode( 'login_url', 'pixopoint_login_url_shortcode' );

/**
 * [lostpassword_url] shortcode
 * @since 0.1
 */
function pixopoint_lostpassword_url_shortcode( $atts ) {
	return '<?php wp_lostpassword_url(); ?>';
}
add_shortcode( 'lostpassword_url', 'pixopoint_lostpassword_url_shortcode' );

/**
 * [logout_url] shortcode
 * @since 0.1
 */
function pixopoint_logout_url_shortcode( $atts ) {
	return '<?php echo wp_logout_url(); ?>';
}
add_shortcode( 'logout_url', 'pixopoint_logout_url_shortcode' );

/**
 * [single_post_title] shortcode
 * @since 0.1
 */
function pixopoint_single_post_title_shortcode( $atts ) {
	return '<?php single_post_title(); ?>';
}
add_shortcode( 'single_post_title', 'pixopoint_single_post_title_shortcode' );

/**
 * [the_shortlink] shortcode
 * @since 0.1
 */
function pixopoint_the_shortlink_shortcode( $atts ) {
	return "<?php echo wp_get_shortlink(); ?> ";
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
		case 'name': break;
		case 'count': break;
		default: $orderby = 'name'; break;
	}
	switch ( $order ){
		case 'ASC': break;
		case 'DESC': break;
		case 'RAND': break;
		default: $order = 'ASC'; break;
	}

	return "<?php wp_tag_cloud( 'smallest=" . $smallest . "&largest=" . $largest . "&number=" . $number . "&orderby=" . $orderby . "&order=" . $order . "' ); ?>";
}
add_shortcode( 'tag_cloud', 'pixopoint_tag_cloud_shortcode' );

/**
 * [tag_description] shortcode
 * @since 0.1
 */
function pixopoint_tag_description_shortcode( $atts ) {
	return '<?php echo tag_description(); ?> ';
}
add_shortcode( 'tag_description', 'pixopoint_tag_description_shortcode' );

/**
 * [the_author] shortcode
 * @since 0.1
 */
function pixopoint_the_author_shortcode( $atts ) {
	return '<?php the_author(); ?> ';
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

	return "<?php the_author_meta( '" . $field . "', '" . $userID . "' ); ?>";
}
add_shortcode( 'the_author_meta', 'pixopoint_the_author_meta_shortcode' );

/**
 * [the_author_posts] shortcode
 * @since 0.1
*/
function pixopoint_the_author_posts_shortcode( $atts ) {
	return '<?php the_author_posts(); ?>';
}
add_shortcode( 'the_author_posts', 'pixopoint_the_author_posts_shortcode' );

/**
 * [breadcrumbs] shortcode
 * @since 0.1
*/
function pixopoint_breadcrumbs_shortcode( $atts ) {
	return '
<?php
if ( class_exists( \'breadcrumb_navigation_xt\' ) ) {
	echo \'Browse > \';
	$mybreadcrumb = new breadcrumb_navigation_xt;
	$mybreadcrumb->opt[\'title_blog\'] = \'Home\';
	$mybreadcrumb->opt[\'separator\'] = ' / ';
	$mybreadcrumb->opt[\'singleblogpost_category_display\'] = true;
	$mybreadcrumb->display();
}
?>
';

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
	if ( 'no' != $show_option_all AND '' != $show_option_all )
		$show_option_all = '';
	if ( 'yes' != $show_option_none )
		$show_option_none = 1;
	if ('no' != $show_option_none AND '' != $show_option_none )
		$show_option_none = '';

	// Check all possibilities and set to 'display_name' if incorrect
	switch ( orderby ){
		case 'ID': break;
		case 'user_nicename': break;
		case 'display_name': break;
		case '': break;
		case '': break;
		case '': break;
		default: $orderby = 'display_name'; break;
	}

	// Sanitise order
	if ( 'ASC' != $order AND 'DESC' != $order )
		$order = 'ASC';

	// Sanitise as comma delimited list of numbers
	$include = pixopoint_validate_comma_numeric( $include );
	$exclude = pixopoint_validate_comma_numeric( $exclude );

	return "<?php wp_dropdown_users( array( 'show_option_all' => " . $show_option_all . ", show_option_none' => " . $show_option_none . "',  'orderby' => '" . $orderby . "', 'order' => '" . $order . "', 'include' => '" . $include . "', 'exclude' => '" . exclude . "' ) ); ?>";
}
add_shortcode( 'wp_dropdown_users', 'pixopoint_wp_dropdown_users_shortcode' );

/**
 * [get_calendar] shortcode
 * @since 0.1
*/
function pixopoint_get_calendar_shortcode( $atts ) {
	return '<?php get_calendar(); ?> ';
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
	// $format = sanitize_title( $format ); // Alternative sanitization method that could be used

	return "<?php the_date( '" . $format . "', '', '' ); ?> ";
}
add_shortcode( 'the_date', 'pixopoint_the_date_shortcode' ); 

/**
 * [get_shortlink] shortcode
 * @since 0.1
*/
function pixopoint_get_shortlink_shortcode( $atts ) {
	return '<?php echo wp_get_shortlink(); ?>';
}
add_shortcode( 'get_shortlink', 'pixopoint_get_shortlink_shortcode' );

/**
 * [edit_tag_link] shortcode
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

	return "<?php edit_tag_link( '" . $text . "' ); ?>";
}
add_shortcode( 'edit_tag_link', 'pixopoint_edit_tag_link_shortcode' ); 

/**
 * [edit_post_link] shortcode
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

	return "<?php edit_post_link( '" . $text . "' ); ?>";
}
add_shortcode( 'edit_post_link', 'pixopoint_edit_post_link_shortcode' );

/**
 * [edit_comment_link] shortcode
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

	return "<?php edit_comment_link( '" . $text . "' ); ?>";
}
add_shortcode( 'edit_comment_link', 'pixopoint_edit_comment_link_shortcode' );

/**
 * [single_cat_title] shortcode
 * @since 0.1
 */
function pixopoint_single_cat_title_shortcode( $atts ) {
	return "<?php single_cat_title(); ?> ";
}
add_shortcode( 'single_cat_title', 'pixopoint_single_cat_title_shortcode' );

/**
 * [single_month_title] shortcode
 * @since 0.1
 */
function pixopoint_single_month_title_shortcode( $atts ) {
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

	return "<?php single_month_title( '" . $text . "' ); ?>";
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

	return "<?php single_tag_title( '" . $text . "' ); ?>";
}
add_shortcode( 'single_tag_title', 'pixopoint_single_tag_title_shortcode' );

/**
 * [the_search_query] shortcode
 * @since 0.1
 */
function pixopoint_the_search_query_shortcode( $atts ) {
	return "<?php the_search_query(); ?>";
}
add_shortcode( 'the_search_query', 'pixopoint_the_search_query_shortcode' );

/**
 * [home_url] shortcode
 * @since 0.1
 */
function pixopoint_home_url_shortcode( $atts ) {
	return "<?php echo home_url(); ?>";
}
add_shortcode( 'home_url', 'pixopoint_home_url_shortcode' );

/**
 * [counter] shortcode
 * @since 1.0
 */
function pixopoint_counter_shortcode( $atts ) {

	return '<?php $counter++; echo $counter; ?>';
}
add_shortcode( 'counter', 'pixopoint_counter_shortcode' );

/*
 * [numeric_pagination] shortcode
 * @since 0.1
 */
function pixopoint_numeric_pagination_shortcode( $pages = '', $range = 2 ) {
	$numeric_pagination = '
<?php
	// Beginning of numeric pagination - code developed from the excellent Genesis theme by StudioPress (http://studiopress.com/)

	if( !is_singular() ) : // do nothing

	global $wp_query;

	// Stop execution if there\'s only 1 page
	if( $wp_query->max_num_pages <= 1 ) return;

	$paged = get_query_var(\'paged\') ? absint( get_query_var(\'paged\') ) : 1;
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
		printf( \'<li>%s</li>\' . "\n", get_previous_posts_link( __( \'&laquo; Previous\', \'genesis\') ) );

	//	Link to first Page, plus ellipeses, if necessary
	if ( !in_array( 1, $links ) ) {
		if ( $paged == 1 ) $current = \' class="active"\'; else $current = null;
		printf( \'<li %s><a href="%s">%s</a></li>\' . "\n", $current, get_pagenum_link(1), \'1\' );

		if ( !in_array( 2, $links ) )
			echo \'<li>&hellip;</li>\';
	}

	//	Link to Current page, plus 2 pages in either direction (if necessary).
	sort( $links );
	foreach( (array)$links as $link ) {
		$current = ( $paged == $link ) ? \'class="active"\' : \'\';
		printf( \'<li %s><a href="%s">%s</a></li>\' . "\n", $current, get_pagenum_link($link), $link );
	}

	//	Link to last Page, plus ellipses, if necessary
	if ( !in_array( $max, $links ) ) {
		if ( !in_array( $max - 1, $links ) )
			echo \'<li>&hellip;</li>\' . "\n";
		
		$current = ( $paged == $max ) ? \'class="active"\' : \'\';
		printf( \'<li %s><a href="%s">%s</a></li>\' . "\n", $current, get_pagenum_link($max), $max );
	}

	//	Next Post Link
	if ( get_next_posts_link() )
		printf( \'<li>%s</li>\' . "\n", get_next_posts_link( __( \'Next &raquo;\', \'genesis\' ) ) );
	endif;
?>
';
	return $numeric_pagination;
}
add_shortcode( 'numeric_pagination', 'pixopoint_numeric_pagination_shortcode' );

/*
<div class="navigation"><ul> 
<li class="active"><a href="http://demo.studiopress.com/mocha/">1</a></li> 
<li ><a href="http://demo.studiopress.com/mocha/page/2">2</a></li> 
<li ><a href="http://demo.studiopress.com/mocha/page/3">3</a></li> 
<li><a href="http://demo.studiopress.com/mocha/page/2" >Next &raquo;</a></li> 
</ul></div>
*/

// wp_list_authors() was rushed so is missing options
