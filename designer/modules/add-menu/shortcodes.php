<?php
/**
 * @package WordPress
 * @subpackage WP Paintbrush
 * @subpackage WP Paintbrush Extra Widgets
 * @since WP Paintbrush Extra Widgets 0.1
 *
 * Shortcodes for WP Paintbrush Extra Widgets plugin
 */


/**
 * [ptc_menu] shortcode
 * @since 0.1
 */
function ptc_menu_shortcode() {
	$functions = '
<nav id="nav">
	<ul>
		[nav_menu]
	</ul>
</nav>
';
	return $functions;
}
add_shortcode( 'ptc_menu', 'ptc_menu_shortcode' );

