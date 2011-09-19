<?php
/**
 * @package WordPress
 * @subpackage WP Paintbrush
 * @since WP Paintbrush 1.0
 *
 * Loads built-in modules
 * todo: Add modules for ALL blocks, including header, footer etc.
 *
 * Not all modules are currently added as the "module" system was only developed later in the 
 * development of version 1.0 as a means of making the internal system match that of external plugins
 */


require( 'content.php' );
require( 'designs.php' );
require( 'header.php' );
require( 'sidebars.php' );
require( 'addmenu.php' );
require( 'extras.php' );
require( 'footer.php' );
require( 'publish.php' );
