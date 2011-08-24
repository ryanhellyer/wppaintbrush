<?php
/**
 * @package WordPress
 * @subpackage PixoPoint Template Framework
 *
 * Loads CSS Tidy
 * Bulk of code is copied from SafeCSS by Automattic
 */


/**
 * Initiate SafeCSS
 * @since 0.9
 */
function pixopoint_initiate_safecss() {
	safecss_class();
}
add_action( 'init', 'pixopoint_initiate_safecss', 9 ); // Loaded at higher priority to ensure it's loaded before AJAX requests

/**
 * CSS validation
 * Much of this code is courtesy of SafeCSS by Automattic and CSSTidy
 * @since 0.1
 */
if ( !function_exists( 'pixopoint_validate_css' ) ) :
function pixopoint_validate_css( $css ) {

	// SafeCSS / CSSTidy stuff
	require_once( 'csstidy.php' ); // CSS sanitising gizmo
	$csstidy = new csstidy();
	$csstidy->optimise = new safecss( $csstidy );
	$csstidy->set_cfg( 'remove_bslash', false );
	$csstidy->set_cfg( 'compress_colors', false );
	$csstidy->set_cfg( 'compress_font-weight', false );
	$csstidy->set_cfg( 'discard_invalid_properties', true );
	$csstidy->set_cfg( 'merge_selectors', false );
	$csstidy->set_cfg( 'preserve_css', true ); // Outputs code comments

	// $csstidy->set_cfg( 'lowercase_s', false );
	// $csstidy->set_cfg( 'optimise_shorthands', 1 );
	// $csstidy->set_cfg( 'remove_last_;', false );
	// $csstidy->set_cfg( 'case_properties', 1 );
	// $csstidy->set_cfg( 'sort_properties', false );
	// $csstidy->set_cfg( 'sort_selectors', false );

	// Santisation stuff copied from SafeCSS by Automattic
	$css = stripslashes( $css );
	$css = preg_replace( '/\\\\([0-9a-fA-F]{4})/', '\\\\\\\\$1', $prev = $css );
	$css = str_replace( '<=', '&lt;=', $css ); // Some people put weird stuff in their CSS, KSES tends to be greedy
	$css = wp_kses_split( $prev = $css, array(), array() ); // Why KSES instead of strip_tags?  Who knows?
	$css = str_replace( '&gt;', '>', $css ); // kses replaces lone '>' with &gt;
	$css = strip_tags( $css ); // Why both KSES and strip_tags?  Because we just added some '>'.

	// Parse with CSS tidy
	$csstidy->parse( $css ); // Parse with CSS Tidy
	$css = $csstidy->print->plain(); // Grab CSS output

	// Make CSS look pretty
	$css = pixopoint_pretty_css( $css );

	return $css;
}
endif;

/**
 * The main SafeCSS class
 * Much of this code is courtesy of SafeCSS by Automattic and CSSTidy
 * @since 0.1
 */
if ( !function_exists( 'safecss_class' ) ) :
function safecss_class() { // Wrapped so we don't need the parent class just to load the plugin

	// Load CSS Tidy itself
	require_once( 'csstidy/class.csstidy.php' );

	// Main class for parsing CSS
	class safecss extends csstidy_optimise {
		var $tales = array();
		var $props_w_urls = array(
			'background',
			'background-image',
			'list-style',
			'list-style-image'
		);
		var $allowed_protocols = array( 'http' );

		function safecss( &$css ) {
			return $this->csstidy_optimise( $css );
		}

		function postparse() {
			if ( !empty( $this->parser->import ) )
				$this->parser->import = array();
			if ( !empty( $this->parser->charset ) )
				$this->parser->charset = array();
			return parent::postparse();
		}

		function subvalue() {
			$this->sub_value = trim( $this->sub_value );

			// Send any urls through our filter
			if ( preg_match( '!^\\s*url\\s*(?:\\(|\\\\0028)(.*)(?:\\)|\\\\0029).*$!Dis', $this->sub_value, $matches ) )
				$this->sub_value = $this->safe_clean_url( $matches[1] );

			// Strip any expressions
			if ( preg_match( '!^\\s*expression!Dis', $this->sub_value ) )
				$this->sub_value = '';

			return parent::subvalue();
		}

		function safe_clean_url( $url ) {
			// Clean up the string
			$url = trim( $url, "' \" \r \n" );

			// Check against whitelist for properties allowed to have URL values
			if ( ! in_array( $this->property, $this->props_w_urls ) )
				return '';

			$url = wp_kses_bad_protocol_once( $url, $this->allowed_protocols );

			if ( empty( $url ) )
				return '';

			return "url('$url')";
		}
	}
}
endif;

/**
 * Make the CSS pretty
 * This code is quite crude, but it works fine and it's not hideously inefficient so we'll do for the mean time :)
 * @since 0.9
 */
if ( !function_exists( 'pixopoint_pretty_css' ) ) :
function pixopoint_pretty_css( $css ) {
	// Beautifying the CSS - This is ugly code, but it works :P
	$css = preg_replace( '/\n/', '', $css ); // Stripping carriage returns
	$css = str_replace( ';', ';
	', $css ); // Add carriage return after ";"
	$css = str_replace( '!important;', ' !important;', $css ); // Adding space back in before !important declaration
	//$css = str_replace( '#suckerfishnav', '.pixopoint', $css ); // Legacy support for CSS generator and older PixoPoint plugins
	$css = str_replace( '
	}', '
}
', $css ); // Remove tab before and carriage return after "}"
	$css = str_replace( '{', '{
	', $css ); // Add carriage return and tab after "{"
	$css = str_replace( '*/', '*/
', $css ); // Add carriage return after code comment
	$css = str_replace( '/*', '
/*', $css ); // Add two carriage returns before code comment

	// Code Comments
	$css = str_replace( "}/*", "}\n/*", $css ); // Prevents comments showing up immediately after { symbol

	// Nested brace correction
	$css = str_replace( "}
}", "	}\n}", $css ); // Indents first brace

	$css = explode( '{', $css ); // The following is hideous code - but it works so will probably remain here until some kind sole offers to rewrite it
	/*
	$css[0] = str_replace( ',', ',
', $css[0] ); // Adds carriage returns after commas for initial line
	*/
	foreach( $css as $piece=>$chunk ) {
		if ( !isset( $count ) )
			$count = '';
		if ( $count == 0 ) {
			$chunk = explode( '}', $chunk );
			if ( !isset( $chunk[1] ) )
				$chunk[1] = '';
			$chunk[1] = str_replace( ',', ',
', $chunk[1] ); // Adds carriage return after comma - doesn't work with first line
			$chunk[0] = str_replace( ':', ': ', $chunk[0] ); // Add spaces after colons - needs to be here to avoid messing up pseudo-classes
			//$chunk[0] = str_replace( ',', ',', $chunk[0] ); // Add space after comma - mainly for font-family declarations - doesn't work
			$chunk = implode( '}', $chunk );
			$count = -1;
		}
		$css[$piece] = $chunk;
		$count ++;
	}
	$css = implode( '{', $css );
	$css = str_replace( '}{', '{', $css ); // Nasty hack to fix "{}" code bug
	$css = substr( $css, 0, -1 ); // Nasty hack to remove final "}"
	
	return $css;
}
endif;

