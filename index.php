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
$wppb_template = ''; // Setting string
$wppb_template = apply_filters ( 'wppb_template_filter' , $wppb_template ); // Filter for adding templates
$wppb_template = do_shortcode( $wppb_template ); // Creating content of shortcodes
$wppb_template = do_shortcode( $wppb_template ); // Creating content of shortcodes within initial shortcodes
$wppb_template = do_shortcode( $wppb_template ); // Creating content of shortcodes within initial shortcodes
echo $wppb_template;

/**
 * Load footer
 * @since 0.1
 */
get_footer();

