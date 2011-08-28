<?php
/**
 * @package WordPress
 * @subpackage WP Paintbrush
 * @since WP Paintbrush 0.1
 *
 * Extra functions used in WP Paintbrush designer tool
 */


/**
 * Do not continue processing since file was called directly
 * @since 0.1
 */
if ( !defined( 'ABSPATH' ) )
	die( 'Eh! What you doin in here?' );

/**
 * Add link to admin bar
 * @since 1.0
 */
function wppb_admin_bar_link() {
	global $wp_admin_bar;
	
	if ( !is_admin_bar_showing() || !current_user_can( 'manage_options' ) )
		return;

	if ( 'on' == get_option( 'wppb_designer_pane' ) )
		$opt = 'off';
	else
		$opt = 'on';
	
	// Creating link
	$link = home_url() . '/?wppb_designer_pane=' . $opt;
	$link = wp_nonce_url( $link, 'wppb_editor' );
	
	// Adding menu item
	$wp_admin_bar->add_menu(
		array(
			'parent' => 'appearance',
			'id'     => 'wppb_designer_pane',
			'title'  => __( 'Editor ' . $opt ),
			'href'   => $link
		)
  	 );
}
add_action( 'wp_before_admin_bar_render', 'wppb_admin_bar_link' );

/* Load content via AJAX
 * @since 0.8
 */
function ptc_ajax_content() {
	die( ptc_create_template() );
}

/* Create template
 * @since 0.1
 */
function ptc_create_template() {


	// Grab and sanitize inputs
	if ( isset( $_POST['positions'] ) )
		$content_layout = ptc_sanitize_inputs( $_POST ); // Grab submitted data
	else
		$content_layout = ptc_sanitize_inputs( get_option( WPPB_DESIGNER_SETTINGS ) ); // Grab from database

	// Work out block positions	
	$positions = explode( ',', $content_layout['positions'] ); // Splitting positions into an array
	$sidebar_positions = explode( ',', $content_layout['sidebar_positions'] ); // Splitting positions into an array

	// Pass through each block position and add appropriate block to template string
	foreach( $positions as $bit ) {
		// Process template chunks
		foreach( ptc_page_chunks() as $chunk=>$shortcode ) {
			$id = strtolower( $chunk ); // Convert to lowercase
			$id = str_replace( ' ', '', $id ); // Strip spaces
			$id = 'layout-' . $id; // Prepend ID prefix

			// Replacing [ptc_content] with appropriate page specific template
			if ( is_front_page()  && 'Magazine' == $content_layout['changehome_homelayout_display'] )
				$shortcode = str_replace( 'ptc_content', 'ptc_content_front', $shortcode );
			elseif ( is_home() || is_archive() || is_search() )
				$shortcode = str_replace( 'ptc_content', 'ptc_content_home', $shortcode );
			elseif ( is_single() )
				$shortcode = str_replace( 'ptc_content', 'ptc_content_single', $shortcode );
			elseif ( is_page() )
				$shortcode = str_replace( 'ptc_content', 'ptc_content_page', $shortcode );

			// Shortcodifying template
			if ( $bit == $id )
				$template = do_shortcode( $shortcode );
		}

		// Execute string of PHP
		ob_start();
		eval( ' ?>' . do_shortcode( $template ) . '<?php ' );
		$processed_template .= ob_get_contents();
		ob_end_clean();
	}

	return $processed_template;
}

/* Load stylesheet from external server
 * @since 0.1
 */
function ptc_get_load_styles( $content_layout ) {
	global $stylesheet;

	// Write styles
	$args = array(
		'body' => $content_layout,
		'user-agent' => 'WP Paintbrush theme'
	);

	// If using local plugin - (todo: convert to using function call instead of loading raw file)
	if ( 'http://localhost/wp' == home_url() ) {
		$_POST = $content_layout;
		require( WP_PLUGIN_DIR . '/pressabl-css-generator/processor.php' );
		if ( !isset( $stylesheet ) )
			$stylesheet = '';
		$stylesheet .= $style;
	}
	// Else, use external server
	else {
		$style = wp_remote_post( PTC_GET_CSS_URL, $args );
		if ( !isset( $stylesheet ) )
			$stylesheet = '';
		$stylesheet .= $style['body'];
		if ( 200 != $style['response']['code'] )
			return '</style>Bugger! Couldn\'t connect to the server!'; // Serve error
	}

	// Action hook for providing additional CSS via plugins
	do_action( 'wppb_add_css' );

	return $stylesheet; // Spit the styles out - use return for when saving
}

/* Load dynamically generated stylesheet
 * @since 0.1
 */
function ptc_load_styles() {

	// If designer pane is not being loaded, then bail out
	if ( 'on' != get_option( 'wppb_designer_pane' ) || !current_user_can( 'manage_options' ) || is_admin() )
		return;

	// Grab from original designer settings from database
	$wppb_designer_settings = get_option( WPPB_DESIGNER_SETTINGS );

	// Grab and sanitize inputs
	if ( isset( $_POST['positions'] ) )
		$content_layout = ptc_sanitize_inputs( $_POST ); // Grab submitted data
	else
		$content_layout = $wppb_designer_settings;

	// Insert CSS in (so that the current page can be quickly styled without dragging CSS from external server)
	$content_layout['css'] = $wppb_designer_settings['css'];

	$css = str_replace( "url('", "url('" . WPPB_STORAGE_IMAGES_FOLDER . '/', $content_layout['css'] ); // Fixing CSS URLs
	$css = str_replace( "	", '', $css ); // Stripping tabs out
	$css = str_replace( "\n", '', $css ); // Stripping carriage returns out
	$css = str_replace( ': ', ':', $css ); // Stripping spaces after colons out

	// Display CSS
	echo '<style id="ptc-css" type="text/css">';
	echo $css; // Adding CSS
	do_action( 'wppb_load_css' ); // Hook for allowing plugins to append CSS
	echo '</style>';
}
add_action( 'wp_print_styles', 'ptc_load_styles' );

/* Disable standard stylesheet
 * Load editor stylesheet
 * @since 0.1
 */
function ptc_handle_stylesheets() {

	// If designer pane is not being loaded, then bail out
	if ( 'on' != get_option( 'wppb_designer_pane' ) || !current_user_can( 'manage_options' ) ) {
		wp_enqueue_style( 'ptc_openme', PTC_URL . 'openme.css', false, '', 'screen' );
		return;
	}

	wp_enqueue_style( 'ptccss', PTC_URL . 'style.css', false, '', 'screen' );
	wp_deregister_style( 'wppb-core' ); 
}
add_action( 'wp_print_styles', 'ptc_handle_stylesheets' );

/* Load inline scripts
 * todo Change this to use localize function
 * @since 0.1
 */
function ptc_inline_scripts() {

	// If designer pane is not being loaded, then bail out
	if ( 'on' != get_option( 'wppb_designer_pane' ) || !current_user_can( 'manage_options' ) )
		return;
	?>
<script type="text/javascript">
// Setting WP Paintbrush JS variables
var storage_folder = '<?php echo wppb_storage_folder( 'images', 'url' ); ?>';
var nonce_link = '<?php echo home_url(); ?>/?wppb_designer_pane=off&amp;_wpnonce=<?php	$link = home_url() . '/?wppb_designer_pane=' . $opt; $link = wp_nonce_url( $link, 'wppb_editor' ); echo $link; ?>';
var admin_url = '<?php echo home_url(); ?>/wp-admin/';
var home_url = '<?php echo home_url(); ?>';
<?php do_action( 'ptc_inline_scripts_hook' ); ?>

jQuery(function($){
		// AJAX form submission
		function change_design(button) {
			$.post(
				home_url+'/?change_theme='+button,
				{'ptc_nonce' : $("#ptc_nonce").val(),},
				function(data, textStatus) { $('#ptc-ajax').html(data);},
				'text'
			);
		}
		$('#myformCoraline').click(function() {change_design( 'coraline' );});
		$('#myformEnterprize').click(function() {change_design( 'enterprize' );});
		$('#myform2011').click(function() {change_design( '2011' );});

	// AJAX form submission
	function option_get(button) {
		$("#ptc-css2").html('<div style="text-indent:0;"><img style="" src="'+admin_url+'images/wpspin_light.gif" /></div>');
		$.post(
			home_url+'/?generator-css='+button,
			{
				'ptc_nonce' : $("#ptc_nonce").val(),<?php
				// Set all AJAX options
				foreach( ptc_ajax_option_get() as $option ) {
					echo '\'' . $option . '\' : $(".' . $option . '").val(),' . "\n";
				}
				?>
			},
			function(data, textStatus) {
				$('#ptc-css').html(data);
				$('#ptc-css2').html(data);
				$('#ptc-css3').html(data);
			},
			'text'
		);
	}
	$('#myformButton').click(function() {option_get( 'process' );});
	$('.myformSaver').click(function() {option_get( 'save' );});
	$('#myformPublish').click(function() {option_get( 'publish' );});
	$('#myformExport').click(function() {option_get( 'export' );});
	$('#ChangeHomeLayoutMagazine').click(function() {option_get( 'Magazine' );});
	$('#ChangeHomeLayoutNormal').click(function() {option_get( 'Normal' );});
});
</script><?php
}
add_action( 'wp_head', 'ptc_inline_scripts' );

/* Load scripts
 * @since 0.1
 */
function ptc_load_scripts() {

	// If designer pane is not being loaded, then bail out
	if ( 'on' != get_option( 'wppb_designer_pane' ) || !current_user_can( 'manage_options' ) )
		return;

	wp_enqueue_script( 'jquery' );
	wp_deregister_script( 'jquery-ui-core' );
	wp_register_script(
		'jquery-ui-core', 
		PTC_URL . 'scripts/jquery-ui-1.8.15.custom.min.js',
		array( 'jquery' ),
		'1.8.10',
		true
	);
	wp_enqueue_script( 'jquery-ui-core' );
	wp_register_script(
		'ptc-designer',
		PTC_URL . 'scripts/designer.js',
		array( 'farbtastic' ),
		'1.0',
		true
	);
	wp_enqueue_script( 'ptc-designer', 11 );
	wp_register_script(
		'farbtastic',
		PTC_URL . 'scripts/farbtastic.js',
		array( 'jquery-ui-core' ),
		'1.0',
		true
	);
	wp_enqueue_script( 'farbtastic' );
	wp_register_script(
		'ptc-content',
		PTC_URL . 'scripts/tab-content.js',
		array( 'jquery-ui-core' ),
		'1.0',
		true
	);
	wp_enqueue_script( 'ptc-content' );
}
if ( !is_admin() )
	add_action( 'wp_print_scripts', 'ptc_load_scripts' );

/* Create CSS from editor submit data
 * @since 0.1
 */
function ptc_load_css() {

	// Check that nonce is valid
	if ( !wp_verify_nonce( $_POST['ptc_nonce'], 'ptc_nonce' ) )
		exit( 'Error: Nonce not verified!' );

	// Processing CSS on external server
	$css = ptc_get_load_styles( $_POST );

	// Confirming that CSS is indeed valid by checking that string added to end of CSS exists
	if ( ( $pos = strpos( $css, '/* CSS provided by WP Paintbrush CSS generator */' ) ) === FALSE )
		exit( "Error: Couldn't connect to server" );

	// Sanitizing CSS
	$css = pixopoint_validate_css( $css );

	$css = "/* " . $_GET['generator-css'] . rand() . " */\n\n\n" . $css;

	// Serve CSS
	return $css;
}

/* Process editor submits
 * Handles saves, publishes, exports etc.
 * @since 0.1
 */
function ptc_load_stuff() {
	global $options;

	// Grab and sanitize data
	$options = ptc_sanitize_inputs();

	// Processing CSS on an external server
	$css = ptc_load_css();

	// Grabbing raw CSS before addition of URLs (urls are needed for internal CSS file, but cause problems when exporting themes etc. as they need to be removed)
	$options['css'] = $css;

	// Add URLs (needed since CSS won't reference images correctly otherwise - not needed for storage though as can dynamically add it later)
 	$css = str_replace( "url('", "url('" . WPPB_STORAGE_IMAGES_FOLDER . '/', $css ); // Fixing CSS URLs

	// Serve CSS
	echo $css;

	// Hook for extra functionality at this point
	do_action( 'ptc_load_stuff_hook' );

	exit;
}

/* Publish, save or export
 * Used in ptc_load_stuff()
 * @since 1.0
 */
function ptc_publish_save_export() {
	global $options;

	// Save options
	if ( 'save' == $_GET['generator-css'] || 'export' == $_GET['generator-css'] || 'publish' == $_GET['generator-css'] )
		update_option( WPPB_DESIGNER_SETTINGS, $options );

	// Publishing and Export options
	if ( 'publish' == $_GET['generator-css'] || 'export' == $_GET['generator-css'] )
		ptc_publish_options( $options, $css );

	// Export zip file (creates redirect to serve zip file - required for loading zip via AJAX)
	if ( 'export' == $_GET['generator-css'] ) {
		echo '</style><meta http-equiv="refresh" content="0;url=' . home_url() . '/?generator-export=' . esc_attr( $_POST['ptc_nonce'] ) . '"><style type="text/css">';
		die;
	}
}
add_action( 'ptc_load_stuff_hook', 'ptc_publish_save_export' );

/* Change design
 * @since 0.9
 */
function ptc_change_design() {

	// Bail out if not logged in and nonce not legit
	if ( !current_user_can( 'manage_options' ) && !wp_verify_nonce( $_POST['ptc_nonce'], 'ptc_nonce' ) )
		exit( 'Error: Nonce not verified!' );

	// Set new design 
	$wppb_design = wppb_grab_design( $_GET['change_theme'] ); // Grab design
	$wppb_designer_settings = explode( '}', $wppb_design['paintbrush_designer'] );
	foreach( $wppb_designer_settings as $tmp=>$setting ) {
		$setting = explode( '|', $setting );
		if ( !isset( $setting[0] ) )
			$setting[1] = '';
		$name = $setting[0];
		if ( !isset( $setting[1] ) )
			$setting[1] = '';
		$option = $setting[1];
		$wppb_designer_array[$name] = $option;
	}

	$wppb_designer_array['css'] = $wppb_design['css']; // Storing CSS in designer array so that can be used on page load (otherwise need to make server call on initial page load)
	update_option( WPPB_DESIGNER_SETTINGS, $wppb_designer_array ); // Saving new design

	// Redirecting to refresh page, and hence refresh entire design
	echo '</div><meta http-equiv="refresh" content="0;url=' . home_url() . '/"><div>';
	die;
}

/* Publish template
 * @since 0.1
 */
function ptc_publish_options( $content_layout, $css ) {

	// Get options ready for publishing
	$input = ptc_get_options_for_storing( $content_layout, $css );

	// Update database with sanitized data
	update_option( WPPB_SETTINGS, wppb_settings_options_validate( $input ) );
}

/* Get options ready for storing
 * This processes the designer settings into a format suitable for publishing
 * Returns unfiltered/sanitized options (no need to sanitize since done during publishing process) 
 * @since 0.1
 */
function ptc_get_options_for_storing( $content_layout, $css='' ) {

	// Setting CSS	
	$options['css'] = $css;

	// Add support for sidebars
	$sidebar_positions = str_replace( 'layout-', '', $content_layout['sidebar_positions'] ) ;
	$sidebar_positions = explode( ',', $sidebar_positions );
	foreach( $sidebar_positions as $block ) {
		$count = 0;
		while( $count < 2 ) {
			$count++;
			$options['show_widget' . $count] = '';
			$options['name_widget' . $count] = '';
			$options['before_widget' . $count] = '';
			$options['after_widget' . $count] = '';
			$options['before_title' . $count] = '';
			$options['after_title' . $count] = '';
			if ( 'sidebar' . $count == $block ) {
				$options['show_widget' . $count] = 'on';
				$options['name_widget' . $count] = 'Sidebar ' . $count;
				$options['before_widget' . $count] = '<div class="widget">';
				$options['after_widget' . $count] = '</div>';
				$options['before_title' . $count] = '<h3>';
				$options['after_title' . $count] = '</h3>';
			}
		}
	}

	// Set header and footer templates
	$positions = explode( ',', $content_layout['positions'] );
	$section = 'header'; // Load header first
	$options['header'] = ''; // Resetting header
	$options['footer'] = ''; // Resetting footer
	foreach( $positions as $pos ) {
		foreach( ptc_page_chunks() as $chunk=>$test ) {
			$chunk = strtolower( $chunk ); // Convert to lowercase
			$chunk = str_replace( ' ', '', $chunk ); // Strip spaces
			if ( ( 'layout-' . $chunk ) == $pos ) {
				$chunk = '[ptc_' . strtolower( $chunk ) . ']'; // Convert to lowercase
				if ( 'footer' == $section )
					$options['footer'] .= do_shortcode( $chunk );
				if ( '[ptc_content]' == $chunk )
					$section = 'footer';
				if ( 'header' == $section )
					$options['header'] .= do_shortcode( $chunk );
			}
		}
	}

	// Add support for menus
	$positions = explode( ',', $content_layout['positions'] );
	foreach( $positions as $pos ) {
		foreach( ptc_page_chunks() as $chunk=>$test ) {
			$chunk = strtolower( $chunk ); // Convert to lowercase
			$chunk = str_replace( ' ', '', $chunk ); // Strip spaces
			if ( ( 'layout-' . $chunk ) == $pos ) {
				if ( 'menu' == $chunk )
					$options['support_primarymenu'] = 'on';
			}
		}
	}

	// Set main templates
	$options['front_page'] = '';
	$options['home'] = "[get_header]\n\n" . do_shortcode( '[ptc_content_home]' ) . "\n\n[get_footer]";
	$options['archive'] = "[get_header]\n\n" . do_shortcode( '[ptc_content_home]' ) . "\n\n[get_footer]";
	$options['index'] = "[get_header]\n\n" . do_shortcode( '[ptc_content_home]' ) . "\n\n[get_footer]";
	$options['page'] = "[get_header]\n\n" . do_shortcode( '[ptc_content_page]' ) . "\n\n[get_footer]";
	$options['single'] = "[get_header]\n\n" . do_shortcode( '[ptc_content_single]' ) . "\n\n[get_footer]";

	// Correct URLs
	$options['css'] = str_replace( 'http: //', 'http://', $options['css'] );

	return $options; 
}

/* Calculate current URL
 * Used for loading current URL via AJAX
 * @since 0.1
 */
function ptc_current_url() {
	if ( !isset( $_SERVER['REQUEST_URI'] ) )
		$serverrequri = $_SERVER['PHP_SELF'];
	else
		$serverrequri =    $_SERVER['REQUEST_URI'];
	$s = empty( $_SERVER["HTTPS"] ) ? '' : ( $_SERVER['HTTPS'] == 'on' ) ? 's' : '';
	$protocol = strleft( strtolower( $_SERVER['SERVER_PROTOCOL'] ), '/' ) . $s;
	$port = ( $_SERVER['SERVER_PORT'] == '80' ) ? '' : (':' . $_SERVER['SERVER_PORT'] );
	$url = $protocol . '://' . $_SERVER['SERVER_NAME'] . $port . $serverrequri;   
	$url = esc_url( $url ); // Sanitizing URL
	return $url;
}
function strleft($s1, $s2) {
	return substr($s1, 0, strpos($s1, $s2));
}

/* Array of page chunks
 * @since 0.1
 */
function ptc_page_chunks() {

	global $chunks; // Need global for passing data via action hook

	do_action( 'wppb_add_chunk' ); // Creating action hook for additional chunks to be added via plugins

	return $chunks;
}

/* Array of sidebar chunks
 * @since 0.1
 */
function ptc_sidebar_chunks() {
	$chunks = array(
		'S1'       => 'layout-sidebar1',
		'S2'       => 'layout-sidebar2',
		'Content'  => 'layout-maincontent',
	);
	return $chunks;
}

/* On button for editor
 * @since 1.0
 */
function ptc_open_editor() {
	?>
<a id="ptc-openme" <?php
	if ( 'on' == get_option( 'wppb_designer_pane' ) )
		echo 'style="display:none;"';
	else {
		// Creating link
		$link = home_url() . '/?wppb_designer_pane=on';
		$link = wp_nonce_url( $link, 'wppb_editor' );
		echo 'href="' . $link . '"';
	}
?>>Open Editor</a><?php
}
add_action( 'wp_footer', 'ptc_open_editor' );


/* Add colour updater script
 * Added to footer
 * @since 1.0
 */
function ptc_updatecolours() {
	echo "<script type='text/javascript'>
function updatecolours() {\n";

	$border = array(
		// border colour
		'pagination_border_colour' => '#pagination li',
	);
/*
	foreach( ptc_block_wrapper() as $next=>$type ) {
		array_push( $border, $type . '_border_top_colour' );
		array_push( $border, $type . '_border_right_colour' );
		array_push( $border, $type . '_border_bottom_colour' );
		array_push( $border, $type . '_border_left_colour' );
	}
*/
	
	$backgroundcolour = array(
		// background colour
		'header_searchbox_text_background_colour' => 'header #search input[type=text]',
		'header_searchsubmit_text_background_colour' => 'header #search input[type=submit]',
		'header_searchbox_background_colour' => 'header #search',

		'header_background_colour' => 'header .header',
		'header_fullwidth_background_colour' => 'header',

		'maincontent_background_colour' => '#content',
		'menu1_background_colour' => 'nav#nav ul',
		'menu1_fullwidth_background_colour' => 'nav#nav',
		'menu1_items_background_colour' => 'nav#nav li',
		'sidebar_background_colour' => 'aside#aside-1',
		'sidebar_background_colour' => 'aside#aside-2',
		'footer_background_colour' => 'footer',
		'pagination_background_colour' => '#pagination li',
		//'pagination_background_hovercolour' => '',
		'background_colour' => 'body',
		//'menu1_hover_background_colour' => '',
		'heading1_background_colour' => '.wrapper h1',
		'heading2_background_colour' => '.wrapper h2',
		'heading3_background_colour' => '.wrapper h3',
		'heading4_background_colour' => '.wrapper h4',
		'heading5_background_colour' => '.wrapper h5',
		'heading6_background_colour' => '.wrapper h6',
		'paragraph_background_colour' => '.wrapper p',
		'listitem_background_colour' => '.wrapper li',
		'sidebar_heading_background_colour' => 'aside h3',
		'sidebar_list_background_colour' => 'aside li',
		'sidebar_paragraph_background_colour' => 'aside p',
		'postinfo_background_colour' => '.post-info',
		'footer_fullwidth_background_colour' => 'footer',
	);

	$textcolour = array(
		// text colour
		'searchsubmit_textcolour' => 'header #search input[type=submit]',
		'searchtext_textcolour' => 'header #search input[type=text]',

		'pagination_textcolour' => '#pagination li a',
		//'pagination_texthovercolour' => '',
		//'menu1_hover_textcolour' => '',
		'links_textcolour' => '.wrapper a',
		//'links_hover_textcolour' => '',
		'header_heading_textcolour' => 'header h1 a',
		'header_description_textcolour' => 'header #description',
		'heading1_textcolour' => '.wrapper h1',
		'heading2_textcolour' => '.wrapper h2',
		'heading3_textcolour' => '.wrapper h3',
		'heading4_textcolour' => '.wrapper h4',
		'heading5_textcolour' => '.wrapper h5',
		'heading6_textcolour' => '.wrapper h6',
		'paragraph_textcolour' => '.wrapper p',
		'listitem_textcolour' => '.wrapper li',
		'sidebar_heading_textcolour' => 'aside h3',
		'sidebar_list_textcolour' => 'aside li',
		'sidebar_paragraph_textcolour' => 'aside p',
		'footer_menu_textcolour' => 'footer nav li a',
		'footer_copyright_textcolour' => 'footer p',
		'postinfo_textcolour' => '.post-info',
		'menu1_textcolour' => 'nav#nav li a',
	);

	/*
		'header_heading_shadow_colour' => '',
		'header_description_shadow_colour' => '',
		'heading1_shadow_colour' => '',
		'heading2_shadow_colour' => '',
		'heading3_shadow_colour' => '',
		'heading4_shadow_colour' => '',
		'heading5_shadow_colour' => '',
		'heading6_shadow_colour' => '',
		'paragraph_shadow_colour' => '',
		'listitem_shadow_colour' => '',
		'sidebar_heading_shadow_colour' => '',
		'sidebar_list_shadow_colour' => '',
		'sidebar_paragraph_shadow_colour' => '',
		'footer_menu_shadow_colour' => '',
		'footer_copyright_shadow_colour' => '',
		'postinfo_shadow_colour' => '',
		'menu1_shadow_colour' => '',
		*/

	$bordertop = array(
		// Border top
		'heading1_bordertop_colour' => '.wrapper h1',
		'heading2_bordertop_colour' => '.wrapper h2',
		'heading3_bordertop_colour' => '.wrapper h3',
		'heading4_bordertop_colour' => '.wrapper h4',
		'heading5_bordertop_colour' => '.wrapper h5',
		'heading6_bordertop_colour' => '.wrapper h6',
		'paragraph_bordertop_colour' => '.wrapper p',
		'listitem_bordertop_colour' => '.wrapper li',
		'sidebar_heading_bordertop_colour' => 'aside h3',
		'sidebar_list_bordertop_colour' => 'aside li',
		'sidebar_paragraph_bordertop_colour' => 'aside p',
		'postinfo_bordertop_colour' => '.post-info',
		'menu1_bordertop_colour' => 'nav#nav',
	);

	$borderbottom = array(
		// Border bottom
		'heading1_borderbottom_colour' => '.wrapper h1',
		'heading2_borderbottom_colour' => '.wrapper h2',
		'heading3_borderbottom_colour' => '.wrapper h3',
		'heading4_borderbottom_colour' => '.wrapper h4',
		'heading5_borderbottom_colour' => '.wrapper h5',
		'heading6_borderbottom_colour' => '.wrapper h6',
		'paragraph_borderbottom_colour' => '.wrapper p',
		'listitem_borderbottom_colour' => '.wrapper li',
		'sidebar_heading_borderbottom_colour' => 'aside h3',
		'sidebar_list_borderbottom_colour' => 'aside li',
		'sidebar_paragraph_borderbottom_colour' => 'aside p',
		'postinfo_borderbottom_colour' => '.post-info',
		'menu1_borderbottom_colour' => 'nav#nav',

	);

	foreach ( $border as $name => $property ) {
		echo "
jQuery('" . $property . "').css('border',jQuery('." . $name . "').val());";
	}

	foreach ( $backgroundcolour as $name => $property ) {
		echo "
jQuery('" . $property . "').css('background-color',jQuery('." . $name . "').val());";
	}

	foreach ( $textcolour as $name => $property ) {
		echo "
jQuery('" . $property . "').css('color',jQuery('." . $name . "').val());";
	}

	foreach ( $bordertop as $name => $property ) {
		echo "
jQuery('" . $property . "').css('border-top',jQuery('." . $name . "').val());";
	}

	foreach ( $borderbottom as $name => $property ) {
		echo "
jQuery('" . $property . "').css('border-bottom',jQuery('." . $name . "').val());";
	}

echo "
}
</script>";
}
add_action( 'wp_footer', 'ptc_updatecolours' );
