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
 * Outputting stored templates
 * Parsed through do_shortcode() to convert shortcodes into required text
 * @since 1.0
 */
$wppb_template = '';
$wppb_template = apply_filters ( 'wppb_template_filter' , $wppb_template );
echo do_shortcode( $wppb_template );
//do_action( 'wppb_pre_theme' ); // Action hook for loading content

/**
 * Load footer
 * @since 0.1
 */
get_footer();

