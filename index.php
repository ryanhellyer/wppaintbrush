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
ob_start();
do_action( 'wppb_pre_theme' ); // Action hook for loading content
$contents = ob_get_contents();
ob_end_clean();

/**
 * Executing PHP
 * Processing short codes via do_shortcode()
 * @since 0.1
 */
eval( '?>' . do_shortcode( $contents ) . '<?php ' );

/**
 * Load footer
 * @since 0.1
 */
get_footer();
