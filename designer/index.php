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
define( 'PTC_DIR', get_stylesheet_directory() . '/designer/' ); // Designer framework directory
define( 'PTC_URL', get_stylesheet_directory_uri() . '/designer/' ); // Designer framework folder URL
define( 'WPPB_CSS_GENERATOR', 'http://pressabl.com/wp-content/plugins/pressabl-css-generator/index.php?wppb_css_generator=process' ); // Designer framework folder URL

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

/* Load AJAX content
 * @since 0.1
 */
if ( isset( $_GET['generator-css'] ) )
	add_action( 'init', 'ptc_load_stuff' );
if ( isset( $_GET['change_theme'] ) )
	add_action( 'init', 'ptc_change_design' );
if ( isset( $_GET['generator-content'] ) )
	add_action( 'template_redirect', 'ptc_ajax_content' );
if ( isset( $_GET['generator-export'] ) )
	add_action( 'init', 'wppb_export_zip' );
