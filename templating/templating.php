<?php
/**
 * @package WordPress
 * @subpackage PixoPoint Template Framework
 *
 * Templating filter
 */


/**
 * Do not continue processing since file was called directly
 * @since 0.1
 */
if ( !defined( 'ABSPATH' ) )
	die( 'Eh! What you doin in here?' );

/**
 * Allowed HTML
 * @since 0.1
 */
if ( !function_exists( 'pixopoint_allowed_html' ) ) :
function pixopoint_allowed_html() {
	$allowed_html = array(
		'a'       => array(
			'href'      => array(),
			'title'     => array(),
			'style'      => array(),
			'class'      => array(),
			'id'         => array()
		),
		'div'     => array(
			'style'      => array(),
			'class'      => array(),
			'id'         => array()
		),
		'form'     => array(
			'role'       => array(),
			'method'     => array(),
			'action'     => array(),
			'style'      => array(),
			'class'      => array(),
			'id'         => array()
		),
		'input'     => array(
			'placeholder'=> array(),
			'type'       => array(),
			'value'      => array(),
			'name'       => array(),
			'style'      => array(),
			'class'      => array(),
			'id'         => array()
		),
		'span'     => array(
			'style'      => array(),
			'class'      => array(),
			'id'         => array()
		),
		'p'     => array(
			'style'      => array(),
			'class'      => array(),
			'id'         => array()
		),
		'h1'     => array(
			'style'      => array(),
			'class'      => array(),
			'id'         => array()
		),
		'h2'     => array(
			'style'      => array(),
			'class'      => array(),
			'id'         => array()
		),
		'h3'     => array(
			'style'      => array(),
			'class'      => array(),
			'id'         => array()
		),
		'h4'     => array(
			'style'      => array(),
			'class'      => array(),
			'id'         => array()
		),
		'h5'     => array(
			'style'      => array(),
			'class'      => array(),
			'id'         => array()
		),
		'h6'     => array(
			'style'      => array(),
			'class'      => array(),
			'id'         => array()
		),
		'table'      => array(
			'style'      => array(),
			'class'      => array(),
			'id'         => array()
		),
		'blockquote'      => array(
			'style'      => array(),
			'class'      => array(),
			'id'         => array()
		),
		'small'      => array(
			'style'      => array(),
			'class'      => array(),
			'id'         => array()
		),
		'code'      => array(
			'style'      => array(),
			'class'      => array(),
			'id'         => array()
		),
		'pre'      => array(
			'style'      => array(),
			'class'      => array(),
			'id'         => array()
		),
		'tr'     => array(
			'style'      => array(),
			'class'      => array(),
			'id'         => array()
		),
			'td'     => array(
			'style'      => array(),
			'class'      => array(),
			'id'         => array()
		),
		'th'     => array(
			'style'      => array(),
			'class'      => array(),
			'id'         => array()
		),
		'thead'     => array(
			'style'      => array(),
			'class'      => array(),
			'id'         => array()
		),
		'tfoot'     => array(
			'style'      => array(),
			'class'      => array(),
			'id'         => array()
		),
		'style'     => array(
			'type'       => array(),
			'id'         => array(),
			'rel'        => array(),
			'media'      => array(),
			'href'       => array()
		),
		'ul'     => array(
			'style'      => array(),
			'class'      => array(),
			'id'         => array()
		),
		'li'     => array(
			'style'      => array(),
			'class'      => array(),
			'id'         => array()
		),
		'ol'     => array(
			'style'      => array(),
			'class'      => array(),
			'id'         => array()
		),
		'img'     => array(
			'src'        => array(),
			'style'      => array(),
			'class'      => array(),
			'id'         => array()
		),
		'article'     => array(
			'style'      => array(),
			'class'      => array(),
			'id'         => array()
		),
		'aside'     => array(
			'style'      => array(),
			'class'      => array(),
			'id'         => array()
		),
		'header'     => array(
			'style'      => array(),
			'class'      => array(),
			'id'         => array()
		),
		'nav'     => array(
			'style'      => array(),
			'class'      => array(),
			'id'         => array()
		),
		'footer'     => array(
			'style'      => array(),
			'class'      => array(),
			'id'         => array()
		),
		'section'    => array(
			'style'      => array(),
			'class'      => array(),
			'id'         => array()
		),
		'br'     => array(),
		'em'     => array(),
		'i'      => array(),
		'strong' => array(),
		'b'      => array(),
		'u'      => array(),
		'font'   => array()
	);
	return $allowed_html;
}
endif;

/**
 * Limited HTML
 * Used for sanitization where only limited HTML is needed
 * @since 0.1
 */
if ( !function_exists( 'pixopoint_limited_html' ) ) :
function pixopoint_limited_html() {
	$allowed_html = array(
		'a'       => array(
			'href'      => array(),
			'title'     => array(),
			'style'      => array(),
			'class'      => array(),
			'id'         => array()
		),
		'em'     => array(),
		'strong' => array(),
	);
	return $allowed_html;
}
endif;

/**
 * Load CSS from database if file doesn't exist
 * This would only be used if the server didn't support writing to the uploads folder (to store the CSS file)
 * @since 0.1
 */
if ( !function_exists( 'pixopoint_fallback_css' ) ) :
function pixopoint_fallback_css( $name, $file_name ) {

	// Bail out if not needing to be loaded
	if ( !isset( $_GET[$name] ) )
		$_GET[$name] = '';

	if ( 'css' != $_GET[$name] )
		return;

	$options = get_option( $name ); // Get data
	header( 'Content-Type: text/css; charset=' . get_option( 'blog_charset' ) . ''); // Loading correct MIME type
	$css = $options['css'];

	// Filter for modifying CSS
	$css = apply_filters ( 'pixopoint_css_filter' , $css );

	echo $css; // Validate data and display CSS
	exit; // Kill execution now since no point in loading rest of WP
}
endif;

/**
 * Declare CSS in HEAD
 * @since 0.1
 */
if ( !function_exists( 'pixopoint_css' ) ) :
function pixopoint_css( $file_name ) {

	/* THIS SECTION HAS BEEN TEMPORARILY REMOVED - MINOR SECURITY ISSUES WERE PRESENT IN THIS IMPLEMENTATION - FUTURE ITERATIONS WILL USED A SLIGHTLY DIFFERENT APPROACH AND BE MORE PLUGGABLE
	// Check for static file first
	if ( file_exists( $uploads_folder['basedir'] . '/' . $file_name . '.css' ) ) {
		if ( !is_multisite() )
			wp_enqueue_style( $file_name, wppb_storage_folder() . '/' . $file_name . '.css', false, '', 'screen' ); // The main file which displays the users CSS - DIDN'T WORK WHEN PUSHED ONTO LIVE SERVER - SOMETHING TO DO WITH VERSIO NNUMBER MAKING CHROME NOT RECONISE IT AS A CSS FILE OR SOMETHING LIKE THAT 
		else
			echo "<link rel='stylesheet' id='" . $file_name . "'  href='" . wppb_storage_folder() . "/" . $file_name . ".css' type='text/css' media='screen' />"; // WP Multi-site is doing something weird with Mime types and hence causing issues so this is a dirty hack to get around this - may not be fullly working properly
	}
	else
	*/
	wp_enqueue_style( $file_name, home_url() . '/?' . $file_name . '=css', false, '', 'screen' ); // Fallback for when file doesn't exist
}
endif;

/**
 * Comma delimited list of numbers
 * @since 0.1
 * Used for [wp_page_menu] shortcode
 */
if ( !function_exists( 'pixopoint_validate_comma_numeric' ) ) :
function pixopoint_validate_comma_numeric( $str ) {
	$str = preg_replace( '/[^0-9-]/', ',', $str ); // Blitz everything but numbers and commas
	return $str;
}
endif;

/**
 * Sanitize names 
 * Blitz everything but alpha numerics, _'s or -'s or spaces
 * @since 1.0
 */
function pixopoint_sanitize_names( $string ) {
	$string = preg_replace( '/[^a-z_0-9-_A-Z-_ ]/', ',' , $string );
	return $string;
}

/**
 * Set thumbmail array
 * @since 0.1
 */
if ( !function_exists( 'pixopoint_thumbnail_array' ) ) :
function pixopoint_thumbnail_array() {
	return array(1,2,3,4);
}
endif;

/**
 * Load thumbnails
 * @since 0.1
 */
if ( !function_exists( 'pixopoint_thumbnail_load' ) ) :
function pixopoint_thumbnail_load( $options, $list_thumbnails ) {
	if ( '' == $list_thumbnails )
		$list_thumbnails = pixopoint_thumbnail_array();

	// Setting thumbnail size
	foreach ( $list_thumbnails as $number ) {
		add_image_size(
			$options['support_name_postthumbnails_' . $number], // name
			$options['support_width_postthumbnails_' . $number], // width
			$options['support_height_postthumbnails_' . $number], // height
			$options['support_hardcrop_postthumbnails_' . $number] // hard crop?
		);
	}
}
endif;

