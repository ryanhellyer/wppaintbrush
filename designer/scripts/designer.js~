jQuery(function($){
	// Adds a palette button
	$('.colour p').append('<input type="button" class="palettebutton" value="pick" />');
 
	// Adds a clear palette button (not currently working)
	$('.colour p').append('<input type="button" class="clearpalette" value="clear" />');
 
	// Updates colours in square boxes at top
	// Dialog box
	var farbtastic = $.farbtastic('#farbtastic', '')
	var picker = $('#farbtastic').dialog({
		width: 220,
		height: 260,
		autoOpen: false,
		modal: false
	});

	// Updates input field with value from colour picker
	$('.palettebutton').click(function(){
		var $this = $(this);
		farbtastic.linkTo($this.siblings('input[type="text"]'));
		//updatecolours();
		picker.dialog('open');
	});

	// Updates colours with value from input field
	$('.colourvalue').change(function(){
		updatecolours()
	});
 
	$('.clearpalette').click(function(){
		var $this = $(this);
		$this.siblings('input[type="text"]').val('transparent').css("background-color","transparent");
		updatecolours();
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

				var filename=$('#sidebar_background_image').val().split('/');
				if('stored'==filename[0]){
					$('.wrapper').css({'background-image': 'url('+storage_folder+'/'+filename[1]+')'});
				}
				if('internal'==filename[0]){
					$('.wrapper').css({'background-image': 'url('+design_folder+'/'+filename[1]+')'});
				}
				var filename=$('#footer_background_image').val().split('/');
				if('stored'==filename[0]){
					$('footer div.footer').css({'background-image': 'url('+storage_folder+'/'+filename[1]+')'});
				}
				if('internal'==filename[0]){
					$('footer div.footer').css({'background-image': 'url('+design_folder+'/'+filename[1]+')'});
				}
				var filename=$('#background_image').val().split('/');
				if('stored'==filename[0]){
					$('body').css({'background-image': 'url('+storage_folder+'/'+filename[1]+')'});
				}
				if('internal'==filename[0]){
					$('body').css({'background-image': 'url('+design_folder+'/'+filename[1]+')'});
				}
				var filename=$('#maincontent_background_image').val().split('/');
				if('stored'==filename[0]){
					$('.wrapper #content').css({'background-image': 'url('+storage_folder+'/'+filename[1]+')'});
				}
				if('internal'==filename[0]){
					$('.wrapper #content').css({'background-image': 'url('+design_folder+'/'+filename[1]+')'});
				}
				var filename=$('#header_background_image').val().split('/');
				if('stored'==filename[0]){
					$('header div.header').css({'background-image': 'url('+storage_folder+'/'+filename[1]+')'});
				}
				if('internal'==filename[0]){
					$('header div.header').css({'background-image': 'url('+design_folder+'/'+filename[1]+')'});
				}
				var filename=$('#header_fullwidth_background_image').val().split('/');
				if('stored'==filename[0]){
					$('header').css({'background-image': 'url('+storage_folder+'/'+filename[1]+')'});
				}
				if('internal'==filename[0]){
					$('header').css({'background-image': 'url('+design_folder+'/'+filename[1]+')'});
				}
				var filename=$('#header_searchbox_background_image').val().split('/');
				if('stored'==filename[0]){
					$('header #search').css({'background-image': 'url('+storage_folder+'/'+filename[1]+')'});
				}
				if('internal'==filename[0]){
					$('header #search').css({'background-image': 'url('+design_folder+'/'+filename[1]+')'});
				}
				var filename=$('#header_logo_background_image').val().split('/');
				if('stored'==filename[0]){
					$('header #logo').css({'background-image': 'url('+storage_folder+'/'+filename[1]+')'});
				}
				if('internal'==filename[0]){
					$('header #logo').css({'background-image': 'url('+design_folder+'/'+filename[1]+')'});
				}
				var filename=$('#banner_image').val().split('/');
				if('stored'==filename[0]){
					$('#banner div.banner-image').css({'background-image': 'url('+storage_folder+'/'+filename[1]+')'});
				}
				if('internal'==filename[0]){
					$('#banner div.banner-image').css({'background-image': 'url('+design_folder+'/'+filename[1]+')'});
				}
				var filename=$('#menu1_hover_background_image').val().split('/');
				if('stored'==filename[0]){
					$('nav#nav li:hover a').css({'background-image': 'url('+storage_folder+'/'+filename[1]+')'});
				}
				if('internal'==filename[0]){
					$('nav#nav li:hover a').css({'background-image': 'url('+design_folder+'/'+filename[1]+')'});
				}
				var filename=$('#menu1_background_image').val().split('/');
				if('stored'==filename[0]){
					$('nav#nav ul').css({'background-image': 'url('+storage_folder+'/'+filename[1]+')'});
				}
				if('internal'==filename[0]){
					$('nav#nav ul').css({'background-image': 'url('+design_folder+'/'+filename[1]+')'});
				}
				var filename=$('#menu1_fullwidth_background_image').val().split('/');
				if('stored'==filename[0]){
					$('nav#nav').css({'background-image': 'url('+storage_folder+'/'+filename[1]+')'});
				}
				if('internal'==filename[0]){
					$('nav#nav').css({'background-image': 'url('+design_folder+'/'+filename[1]+')'});
				}
				var filename=$('#menu1_items_background_image').val().split('/');
				if('stored'==filename[0]){
					$('nav#nav li').css({'background-image': 'url('+storage_folder+'/'+filename[1]+')'});
				}
				if('internal'==filename[0]){
					$('nav#nav li').css({'background-image': 'url('+design_folder+'/'+filename[1]+')'});
				}
				var filename=$('#header_searchbox_text_background_image').val().split('/');
				if('stored'==filename[0]){
					$('header #search input[type=text]').css({'background-image': 'url('+storage_folder+'/'+filename[1]+')'});
				}
				if('internal'==filename[0]){
					$('header #search input[type=text]').css({'background-image': 'url('+design_folder+'/'+filename[1]+')'});
				}
				var filename=$('#header_searchsubmit_text_background_image').val().split('/');
				if('stored'==filename[0]){
					$('header #search input[type=submit]').css({'background-image': 'url('+storage_folder+'/'+filename[1]+')'});
				}
				if('internal'==filename[0]){
					$('header #search input[type=submit]').css({'background-image': 'url('+design_folder+'/'+filename[1]+')'});
				}
				var filename=$('#footer_fullwidth_background_image').val().split('/');
				if('stored'==filename[0]){
					$('footer').css({'background-image': 'url('+storage_folder+'/'+filename[1]+')'});
				}
				if('internal'==filename[0]){
					$('footer').css({'background-image': 'url('+design_folder+'/'+filename[1]+')'});
				}				$ele.dialog('close');
			});
		});
	},
	beforeClose: function(event,ui){
		$('img',ui.dialog).unbind();
	}
});
$('.imagepickerbutton').click(function(){$button = $(this);$ele.dialog('open');});

// Layout editor dialog box
$(function() {
	$( "#layout-editor-dialog" ).dialog({
		width: 565,
		minWidth: 565,
		maxWidth: 565,
		maxHeight: 750,
		title: 'Layout editor',
		modal: false,
		autoOpen: false,
	});
	$( "#layout-editor-opener" ).click(function() {
		$( "#layout-editor-dialog" ).dialog( "open" );
		return false;
	});
});

// Auto CSS changing stuff
var number = parseInt($(".wrapper").css('max-width'));
$("#maincontent_maximum_width").text(number);
$("#slidermaincontent_maximum_width").slider({
	value: number,
	min: 0,
	max: 1600,
	step: 1,
	slide: function(event, ui) {
		$(".wrapper").css("max-width", ui.value + "px");
		$("#maincontent_maximum_width").attr("value", ui.value);
	}
});$('input#maincontent_maximum_width').change(function() {
	var random = $('input#maincontent_maximum_width').val();
	$('.wrapper').css('max-width',random+'px');
	$("#slidermaincontent_maximum_width").slider({
		value: random,
		min: 0,
		max: 1600,
		step: 1,
	});
});
var number = parseInt($(".wrapper").css('min-width'));
$("#maincontent_minimum_width").text(number);
$("#slidermaincontent_minimum_width").slider({
	value: number,
	min: 0,
	max: 1600,
	step: 1,
	slide: function(event, ui) {
		$(".wrapper").css("min-width", ui.value + "px");
		$("#maincontent_minimum_width").attr("value", ui.value);
	}
});$('input#maincontent_minimum_width').change(function() {
	var random = $('input#maincontent_minimum_width').val();
	$('.wrapper').css('min-width',random+'px');
	$("#slidermaincontent_minimum_width").slider({
		value: random,
		min: 0,
		max: 1600,
		step: 1,
	});
});
$('#maincontent_background_image').change(function() {
	var image = $('#maincontent_background_image').val();
	jQuery('.wrapper #content').css('background-image','http://localhost/wp/template-editor/wp-content/plugins/pixopoint-theme-creator/images/'+image);
});
$('select#maincontent_background_image_tiling').change(function() {
	var random = $('select.maincontent_background_image_tiling').val();
	jQuery('.wrapper #content').css('background-repeat',random);
});
$('select#background_image_tiling').change(function() {
	var random = $('select.background_image_tiling').val();
	jQuery('body').css('background-repeat',random);
});

$('select#background_display').change(function() {
	var random = $('select#background_display').val();
	var colour = $('#background_colour').val();
	var image = $('#background_image').val();
	if (random == 'none') { $('body').css('background-color','transparent');$('body').css('background-image','none');}
	if (random == 'block') { $('body').css('background-color',colour);$('body').css('background-image',image);}
});var number = parseInt($("#maincontent .article-wrapper").css('margin-top'));
$("#content_margin_top").text(number);
$("#slidercontent_margin_top").slider({
	value: number,
	min: 0,
	max: 100,
	step: 1,
	slide: function(event, ui) {
		$("#maincontent .article-wrapper").css("margin-top", ui.value + "px");
		$("#content_margin_top").attr("value", ui.value);
	}
});$('input#content_margin_top').change(function() {
	var random = $('input#content_margin_top').val();
	$('#maincontent .article-wrapper').css('margin-top',random+'px');
	$("#slidercontent_margin_top").slider({
		value: random,
		min: 0,
		max: 100,
		step: 1,
	});
});
var number = parseInt($("#maincontent .article-wrapper").css('margin-right'));
$("#content_margin_right").text(number);
$("#slidercontent_margin_right").slider({
	value: number,
	min: 0,
	max: 100,
	step: 1,
	slide: function(event, ui) {
		$("#maincontent .article-wrapper").css("margin-right", ui.value + "px");
		$("#content_margin_right").attr("value", ui.value);
	}
});$('input#content_margin_right').change(function() {
	var random = $('input#content_margin_right').val();
	$('#maincontent .article-wrapper').css('margin-right',random+'px');
	$("#slidercontent_margin_right").slider({
		value: random,
		min: 0,
		max: 100,
		step: 1,
	});
});
var number = parseInt($("#maincontent .article-wrapper").css('margin-bottom'));
$("#content_margin_bottom").text(number);
$("#slidercontent_margin_bottom").slider({
	value: number,
	min: 0,
	max: 100,
	step: 1,
	slide: function(event, ui) {
		$("#maincontent .article-wrapper").css("margin-bottom", ui.value + "px");
		$("#content_margin_bottom").attr("value", ui.value);
	}
});$('input#content_margin_bottom').change(function() {
	var random = $('input#content_margin_bottom').val();
	$('#maincontent .article-wrapper').css('margin-bottom',random+'px');
	$("#slidercontent_margin_bottom").slider({
		value: random,
		min: 0,
		max: 100,
		step: 1,
	});
});
var number = parseInt($("#maincontent .article-wrapper").css('margin-left'));
$("#content_margin_left").text(number);
$("#slidercontent_margin_left").slider({
	value: number,
	min: 0,
	max: 100,
	step: 1,
	slide: function(event, ui) {
		$("#maincontent .article-wrapper").css("margin-left", ui.value + "px");
		$("#content_margin_left").attr("value", ui.value);
	}
});$('input#content_margin_left').change(function() {
	var random = $('input#content_margin_left').val();
	$('#maincontent .article-wrapper').css('margin-left',random+'px');
	$("#slidercontent_margin_left").slider({
		value: random,
		min: 0,
		max: 100,
		step: 1,
	});
});

// Tabbers
$("#tabs").tabs({});
$("#tabs-text").tabs({});
$("#tabs-sidebars").tabs({});
$("#tabs-footer").tabs({});
$("#tabs-menus").tabs({});
$("#tabs-header").tabs({});
$("#tabs-content").tabs({});
$("#tabs-extras").tabs({});

// Dialog box
$("#dialog").dialog({ 
	width: 300,
	maxWidth: 300,
	minWidth: 300,
	height: 550,
	title: '<a href="'+nonce_link+'" id="ptc-close-button">Close</a>WP Paintbrush',
	autoOpen: true, //Change this to true to open dialog on page load
	dialogClass: 'ptc-main-dialog',
	position: ['right','top'],
	buttons: [{text: "",click: function() { $(this).dialog("close"); }}]
});
$("div.ui-dialog-buttonset").html("Copyright © 2011 <a href='http://wppaintbrush.com/'>WP PaintBrush</a>");


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

// Get content
function content_get(button) {
	$.post(
		home_url+'/?generator-content='+button,
		{'positions' : $(".positions").val(),},
		function(data, textStatus) {
			$('#ptc-css2').html(data);
			$('#ptc-page-content').html(data);
		},
		'text'
	);
}

// Sortable layout
$("#layout-sortable, #blocks-sortable").sortable({
	connectWith: ".blocks-sortable-connect",
	update: function(){
		var pos = [];
		$('#layout-sortable > li').each(function(i){
			pos[i] = $(this).attr('id');
		});
		$('#positions').val(pos.toString());
		content_get( 'load' );
	}
});

});