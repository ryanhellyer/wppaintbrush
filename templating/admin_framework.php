<?php
/**
 * @package WordPress
 * @subpackage PixoPoint Template Framework
 *
 * Standard admin page code
 */


/**
 * Do not continue processing since file was called directly
 * @since 0.1
 */
if ( !defined( 'ABSPATH' ) )
	die( 'Eh! What you doin in here?' );

/**
 * Create checkboxes
 * @since 0.1
 */
if ( !function_exists( 'pixopoint_checkboxes' ) ) :
function pixopoint_checkboxes( $opt, $options, $name ) {
	if ( 'on' == $options[$opt] )
		$checked = 'checked="yes" ';
	echo '<input type="checkbox" name="' . $name . '[' . $opt . ']" ' . $checked . '/>';
}
endif;

/**
 * Serve error if running PHP older than version 5.2
 * @since 0.5
 */
if ( !function_exists( 'pixopoint_php5_2_error_message' ) ) :
function pixopoint_php5_2_error_message() {
	echo '
		<div id="message" class="updated fade" style="opacity:1;">
			<p>
				Sorry, but this theme only supports php 5.2 or above. Some features may or may not work as expected.
			</p>
		</div>';
}
endif;
if ( version_compare( phpversion(), '5.2', '<' ) )
	add_action( 'admin_notices', 'pixopoint_php5_2_error_message' ); // Serve error to < PHP5.3
