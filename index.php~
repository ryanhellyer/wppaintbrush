<?php
/**
 * @package WordPress
 * @subpackage Pressabl theme
 * @since WP Paintbrush 0.1
 *
 * Index template
 */



/**
 * Load header
 * @since 0.1
 */
get_header();

/**
 * Output buffering template
 * @since 0.8
 */
do_action( 'wppb_pre_theme' ); // Action hook for loading content

/**
 * Outputting stored templates
 * Parsed through do_shortcode() to convert shortcodes into required text
 * @since 0.1
 */
if ( isset( $wppb_template ) )
	echo do_shortcode( $wppb_template );

/**
 * Load footer
 * @since 0.1
 */
get_footer();

