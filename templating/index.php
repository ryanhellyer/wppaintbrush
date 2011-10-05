<?php
/*

	PixoPoint Templating Framework
	Version: 0.1
	A templating framework for use with WordPress

	Copyright (c) 2009 PixoPoint Web Development
	http://pixopoint.com/

	This program is free software; you can redistribute it and/or modify
	it under the terms of the GNU General Public License as
	published by the Free Software Foundation.

	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.

*/


/**
 * Loading templating framework
 * @since 0.1
 */
require( 'shortcodes.php' ); // Loading template shortcodes
require( 'templating.php' );
require( 'csstidy.php' ); // Loading CSS Tidy functions
if ( is_admin() )
	require( 'admin_framework.php' ); // Admin specific code
