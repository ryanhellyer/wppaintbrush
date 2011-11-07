<?php
/**
 * @package WordPress
 * @subpackage WP Paintbrush
 * @since WP Paintbrush 0.1
 *
 * JavaScript related functions used in WP Paintbrush designer tool
 */


/**
 * Do not continue processing since file was called directly
 * @since 0.1
 */
if ( !defined( 'ABSPATH' ) )
	die( 'Eh! What you doin in here?' );

/* Load inline scripts
 * todo Change this to use localize function
 * @since 0.1
 */
function wppb_inline_scripts() {

	$wppb_design_settings = get_option( WPPB_DESIGNER_SETTINGS );

	// Setting potentially empty variable	
	if ( empty( $wppb_design_settings['design'] ) )
		$wppb_design_settings['design'] = ''; 
	else
		$wppb_design_settings['design'] = sanitize_title( $wppb_design_settings['design'] ); // Bug fix for existing poorly labelled designs
	?>
<script type="text/javascript">
<?php do_action( 'wppb_inline_scripts_hook' ); ?>

// Setting WP Paintbrush JS variables
var storage_folder = '<?php echo wppb_storage_folder( 'images', 'url' ); ?>';
var design_folder = '<?php echo get_template_directory_uri(); ?>/designs/<?php echo $wppb_design_settings['design']; ?>/images/';
var design_name = '<?php echo $wppb_design_settings['design']; ?>';
var nonce_link = '<?php	echo wp_nonce_url( home_url(), 'wppb_editor' ); ?>';
var admin_url = '<?php echo home_url(); ?>/wp-admin/';
var home_url = '<?php echo home_url(); ?>';

jQuery(function($){
	// AJAX form submission
	function change_design(button) {
		$.ajax({
			type: 'POST',
			url: home_url+'/?change_theme='+button,
			data: {
				'wppb_nonce' : $("#wppb_nonce").val(),
			},
			success: function(data, textStatus) {
				$( "#wppb-page-reload" ).dialog({width:250,minWidth:250,maxWidth:250,modal:true,autoOpen:true,});
				$(location).attr('href',home_url);
			},
			error: function(jqXHR, textStatus, errorThrown) {
				$( "#wppb-external-connection-failure" ).dialog({width:250,minWidth:250,maxWidth:250,modal:true,autoOpen:true,});
			},
			dataType: 'html'
		});

	}<?php

	// Output list of available designs
	foreach( wppb_available_themes() as $count=>$design ) {
		echo "$('#myform" . $design['Folder'] . "').click(function() {change_design( '" . $design['Folder'] . "' );});\n";
	}

?>
	// AJAX form submission
	function option_get(button) {
		$("#wppb-css2").html('<div style="text-indent:0;"><img style="" src="'+admin_url+'images/wpspin_light.gif" /></div>');
		$.ajax({
			type: 'POST',
			url: home_url+'/?generator-css='+button,
			data: {
				'wppb_nonce':$("#wppb_nonce").val(),<?php
				// Set all AJAX options
				foreach( wppb_ajax_option_get() as $option ) {
					echo '\'' . $option . '\':$("#' . $option . '").val(),' . "\n";
				}
				?>
			},
			success: function(data, textStatus) {
				switch(data) {
					case "Error: Couldn't connect to server":
					$( "#wppb-external-connection-failure" ).dialog({width:250,minWidth:250,maxWidth:250,modal:true,autoOpen:true,});
					$('#wppb-css3').html("Error: Couldn't connect to server");
					break;
					default:
					$('#wppb-css').html(data);
					$('#wppb-css3').html(data);
					break;
				}
				$('#wppb-css2').html('');
			},
			error: function(jqXHR, textStatus, errorThrown) {
				$( "#wppb-external-connection-failure" ).dialog({width:250,minWidth:250,maxWidth:250,modal:true,autoOpen:true,});
			},
			dataType: 'html'
		});
	}
	$('#myformButton').click(function() {option_get( 'process' );});
	$('.myformSaver').click(function() {option_get( 'save' );});
	$('#myformPublish').click(function() {option_get( 'publish' );});
	$('#myformExport').click(function() {option_get( 'export' );});
	$('#ChangeHomeLayoutMagazine').click(function() {option_get( 'Magazine' );});
	$('#ChangeHomeLayoutNormal').click(function() {option_get( 'Normal' );});

	$("#sidebar-layout-sortable, #sidebar-blocks-sortable").sortable({
		connectWith: ".sidebar-sortable-connect",
		update: function(){
			var pos = [];
			$('#sidebar-layout-sortable > li').each(function(i){
				pos[i] = $(this).attr('id');
			});
			$('#sidebar_positions').val(pos.toString());
			option_get( 'process' );
		}
	});

	// Image picker
	var $button,
	$ele = $('#wppb-image-uploads').dialog({
		width: 530,
		minWidth: 530,
		maxWidth: 530,
		title: 'Image picker',
		modal: false,
		autoOpen: false,
		open : function(event, ui){
			$('img.uploaded-image',ui.dialog).each(function(){
				var image = $(this);
				image.click(function(){
					$button.parent().find('.image-picker').val(image.attr('alt'));
					$button.removeClass('ICopen').val('pick');
<?php
	$images = array(	
		'sidebar_background_image'                  => '.wrapper',
		'footer_background_image'                   => 'footer div.footer',
		'background_image'                          => 'body',
		'maincontent_background_image'              => '.wrapper #content',
		'header_background_image'                   => 'header div.header',
		'header_fullwidth_background_image'         => 'header',
		'header_searchbox_background_image'         => 'header #search',
		'header_logo_background_image'              => 'header #logo',
		'banner_image'                              => '#banner div.banner-image',
		'menu1_hover_background_image'              => 'nav#nav li:hover a',
		'menu1_background_image'                    => 'nav#nav ul',
		'menu1_fullwidth_background_image'          => 'nav#nav',
		'menu1_items_background_image'              => 'nav#nav li',
		'header_searchbox_text_background_image'    => 'header #search input[type=text]',
		'header_searchsubmit_text_background_image' => 'header #search input[type=submit]',
		'footer_fullwidth_background_image'         => 'footer',
	);
	foreach( $images as $theid=>$selector ) {
		echo "
					var filename=$('#" . $theid , "').val().split('/');
					if('stored'==filename[0]){
						$('" . $selector . "').css({'background-image':'url('+storage_folder+'/'+filename[1]+')'});
					}
					if(design_name==filename[0]){
						$('" . $selector . "').css({'background-image':'url('+design_folder+'/'+filename[1]+')'});
					}";
	}
?>
					$ele.dialog('close');
				});
			});
		},
		beforeClose: function(event,ui){
			$('img',ui.dialog).unbind();
		}
	});
	$('.imagepickerbutton').click(function(){$button = $(this);$ele.dialog('open');});
});
</script><?php
}

/* Load scripts
 * @since 0.1
 */
function wppb_load_scripts() {

	// If designer pane is not being loaded, then bail out
	if ( 'on' != get_option( 'wppb_designer_pane' ) || !current_user_can( 'manage_options' ) )
		return;

	wp_enqueue_script( 'jquery' );
	wp_deregister_script( 'jquery-ui-core' );
	wp_register_script(
		'jquery-ui-core', 
		WPPB_URL . 'scripts/jquery-ui-1.8.15.custom.min.js',
		array( 'jquery' ),
		'1.8.10',
		true
	);
	wp_enqueue_script( 'jquery-ui-core' );
	wp_register_script(
		'wppb-designer',
		WPPB_URL . 'scripts/designer.js',
		array( 'farbtastic' ),
		'1.0',
		true
	);
	wp_enqueue_script( 'wppb-designer', 11 );
	wp_register_script(
		'farbtastic',
		WPPB_URL . 'scripts/farbtastic.js',
		array( 'jquery-ui-core' ),
		'1.0',
		true
	);
	wp_enqueue_script( 'farbtastic' );
	wp_register_script(
		'wppb-content',
		WPPB_URL . 'scripts/tab-content.js',
		array( 'jquery-ui-core' ),
		'1.0',
		true
	);
	wp_enqueue_script( 'wppb-content' );
}
if ( !is_admin() )
	add_action( 'wp_print_scripts', 'wppb_load_scripts' );

/* Add colour updater script
 * Added to footer
 * @since 1.0
 */
function wppb_updatecolours() {
	echo "<script type='text/javascript'>
function updatecolours() {\n";

	$border = array(
		// border colour
		'pagination_border_colour' => '#pagination li',
	);
/*
	foreach( wppb_block_wrapper() as $next=>$type ) {
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
		'links_textcolour' => '.wrapper p a',
		'links_textcolour' => '.wrapper li a',
		//'links_hover_textcolour' => '',
		'header_heading_textcolour' => 'header h1 a',
		'header_description_textcolour' => 'header #description',
		'heading1_textcolour' => '.wrapper h1',
		'heading2_textcolour' => '.wrapper h2',
		'heading3_textcolour' => '.wrapper h3',
		'heading4_textcolour' => '.wrapper h4',
		'heading5_textcolour' => '.wrapper h5',
		'heading6_textcolour' => '.wrapper h6',
		'heading1_textcolour' => '.wrapper h1 a',
		'heading2_textcolour' => '.wrapper h2 a',
		'heading3_textcolour' => '.wrapper h3 a',
		'heading4_textcolour' => '.wrapper h4 a',
		'heading5_textcolour' => '.wrapper h5 a',
		'heading6_textcolour' => '.wrapper h6 a',
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
jQuery('" . $property . "').css('border',jQuery('#" . $name . "').val());";
	}

	foreach ( $backgroundcolour as $name => $property ) {
		echo "
jQuery('" . $property . "').css('background-color',jQuery('#" . $name . "').val());";
	}

	foreach ( $textcolour as $name => $property ) {
		echo "
jQuery('" . $property . "').css('color',jQuery('#" . $name . "').val());";
	}

	foreach ( $bordertop as $name => $property ) {
		echo "
jQuery('" . $property . "').css('border-top',jQuery('#" . $name . "').val());";
	}

	foreach ( $borderbottom as $name => $property ) {
		echo "
jQuery('" . $property . "').css('border-bottom',jQuery('#" . $name . "').val());";
	}

echo "
}
</script>";
}
