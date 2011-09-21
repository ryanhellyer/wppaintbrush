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
global $wppb_template;
do_action( 'wppb_pre_theme' ); // Action hook for loading content

/**
 * Executing PHP
 * Processing short codes via do_shortcode()
 * @since 0.1
 */
echo $wppb_template;
//do_shortcode( $wppb_template );

/**
 * Load footer
 * @since 0.1
 */
get_footer();

