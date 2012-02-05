<?php
/**
 * @package WordPress
 * @subpackage WP Paintbrush
 * @since WP Paintbrush 0.1
 *
 * WP Paintbrush designer tool
 *
 * This is the main file loaded by the theme to 
 * load and process the designer tool
 */


/**
 * Do not continue processing since file was called directly
 * @since 0.1
 */
if ( !defined( 'ABSPATH' ) )
	die( 'Eh! What you doin in here?' );

/* Set Constants
 * @since 0.8.2
 */
define( 'WPPB_DIR', get_template_directory() . '/designer/' ); // Designer framework directory
define( 'WPPB_URL', get_template_directory_uri() . '/designer/' ); // Designer framework folder URL
define( 'WPPB_CSS_GENERATOR', 'http://wppaintbrush.com/wp-content/plugins/wppaintbrush-css-generator/index.php?wppb_css_generator=process' ); // Designer framework folder URL

/**
 * Include required files
 * @since 0.9
 */
require( 'modules/index.php' ); // Load built in modules
require( 'extra-functions.php' ); // Load functions
require( 'designs.php' ); // Load theme specific functions
require( 'js.php' ); // Load JS related functions
require( 'css.php' ); // Load CSS specific functions
require( 'editor-functions.php' ); // Load editor functions
require( 'editor.php' ); // Load core functions
require( 'sanitization.php' ); // Load sanitization functions
require( 'sanitization-text.php' ); // Load sanitization functions
require( 'sanitization-variations.php' ); // Load sanitization functions
require( 'sanitization-options.php' ); // Load sanitization functions

/* If designer pane is to be being loaded, then add appropriate action hooks
 * @since 1.0
 */
if ( 'on' == get_option( 'wppb_designer_pane' ) && current_user_can( 'manage_options' ) ) {
	add_action( 'wp_footer', 'wppb_updatecolours' );
	add_action( 'wp_head', 'wppb_inline_scripts' );
}
elseif ( current_user_can( 'manage_options' ) )
	add_action( 'wp_footer', 'wppb_open_editor' );

/* Load AJAX content
 * @since 0.1
 */
if ( isset( $_GET['generator-css'] ) )
	add_action( 'init', 'wppb_load_stuff' );
if ( isset( $_GET['generator-content'] ) )
	add_action( 'template_redirect', 'wppb_ajax_content' );
if ( isset( $_GET['generator-export'] ) )
	add_action( 'init', 'wppb_export_zip' );

