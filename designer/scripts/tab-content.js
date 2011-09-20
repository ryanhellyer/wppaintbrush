jQuery(function($){var number = parseInt($("nav#nav ul").css('max-width'));
$("#menu1_max_width").text(number);
$("#slidermenu1_max_width").slider({
	value: number,
	min: 0,
	max: 1600,
	step: 1,
	slide: function(event, ui) {
		$("nav#nav ul").css("max-width", ui.value + "px");
		$("#menu1_max_width").attr("value", ui.value);
	}
});$('input#menu1_max_width').change(function() {
	var random = $('input#menu1_max_width').val();
	$('nav#nav ul').css('max-width',random+'px');
	$("#slidermenu1_max_width").slider({
		value: random,
		min: 0,
		max: 1600,
		step: 1,
	});
});
var number = parseInt($("nav#nav ul").css('min-width'));
$("#menu1_min_width").text(number);
$("#slidermenu1_min_width").slider({
	value: number,
	min: 0,
	max: 1600,
	step: 1,
	slide: function(event, ui) {
		$("nav#nav ul").css("min-width", ui.value + "px");
		$("#menu1_min_width").attr("value", ui.value);
	}
});$('input#menu1_min_width').change(function() {
	var random = $('input#menu1_min_width').val();
	$('nav#nav ul').css('min-width',random+'px');
	$("#slidermenu1_min_width").slider({
		value: random,
		min: 0,
		max: 1600,
		step: 1,
	});
});
var number = parseInt($("nav#nav ul").css('border-top-width'));
$("#menu1_border_top_width").text(number);
$("#slidermenu1_border_top_width").slider({
	value: number,
	min: 0,
	max: 20,
	step: 1,
	slide: function(event, ui) {
		$("nav#nav ul").css("border-top-width", ui.value + "px");
		$("#menu1_border_top_width").attr("value", ui.value);
	}
});$('input#menu1_border_top_width').change(function() {
	var random = $('input#menu1_border_top_width').val();
	$('nav#nav ul').css('border-top-width',random+'px');
	$("#slidermenu1_border_top_width").slider({
		value: random,
		min: 0,
		max: 20,
		step: 1,
	});
});
var number = parseInt($("nav#nav ul").css('border-right-width'));
$("#menu1_border_right_width").text(number);
$("#slidermenu1_border_right_width").slider({
	value: number,
	min: 0,
	max: 20,
	step: 1,
	slide: function(event, ui) {
		$("nav#nav ul").css("border-right-width", ui.value + "px");
		$("#menu1_border_right_width").attr("value", ui.value);
	}
});$('input#menu1_border_right_width').change(function() {
	var random = $('input#menu1_border_right_width').val();
	$('nav#nav ul').css('border-right-width',random+'px');
	$("#slidermenu1_border_right_width").slider({
		value: random,
		min: 0,
		max: 20,
		step: 1,
	});
});
var number = parseInt($("nav#nav ul").css('border-bottom-width'));
$("#menu1_border_bottom_width").text(number);
$("#slidermenu1_border_bottom_width").slider({
	value: number,
	min: 0,
	max: 20,
	step: 1,
	slide: function(event, ui) {
		$("nav#nav ul").css("border-bottom-width", ui.value + "px");
		$("#menu1_border_bottom_width").attr("value", ui.value);
	}
});$('input#menu1_border_bottom_width').change(function() {
	var random = $('input#menu1_border_bottom_width').val();
	$('nav#nav ul').css('border-bottom-width',random+'px');
	$("#slidermenu1_border_bottom_width").slider({
		value: random,
		min: 0,
		max: 20,
		step: 1,
	});
});
var number = parseInt($("nav#nav ul").css('border-left-width'));
$("#menu1_border_left_width").text(number);
$("#slidermenu1_border_left_width").slider({
	value: number,
	min: 0,
	max: 20,
	step: 1,
	slide: function(event, ui) {
		$("nav#nav ul").css("border-left-width", ui.value + "px");
		$("#menu1_border_left_width").attr("value", ui.value);
	}
});$('input#menu1_border_left_width').change(function() {
	var random = $('input#menu1_border_left_width').val();
	$('nav#nav ul').css('border-left-width',random+'px');
	$("#slidermenu1_border_left_width").slider({
		value: random,
		min: 0,
		max: 20,
		step: 1,
	});
});
var number = parseInt($("nav#nav ul").css('margin-top'));
$("#menu1_top_margin").text(number);
$("#slidermenu1_top_margin").slider({
	value: number,
	min: 0,
	max: 20,
	step: 1,
	slide: function(event, ui) {
		$("nav#nav ul").css("margin-top", ui.value + "px");
		$("#menu1_top_margin").attr("value", ui.value);
	}
});$('input#menu1_top_margin').change(function() {
	var random = $('input#menu1_top_margin').val();
	$('nav#nav ul').css('margin-top',random+'px');
	$("#slidermenu1_top_margin").slider({
		value: random,
		min: 0,
		max: 20,
		step: 1,
	});
});
var number = parseInt($("nav#nav ul").css('margin-bottom'));
$("#menu1_bottom_margin").text(number);
$("#slidermenu1_bottom_margin").slider({
	value: number,
	min: 0,
	max: 20,
	step: 1,
	slide: function(event, ui) {
		$("nav#nav ul").css("margin-bottom", ui.value + "px");
		$("#menu1_bottom_margin").attr("value", ui.value);
	}
});$('input#menu1_bottom_margin').change(function() {
	var random = $('input#menu1_bottom_margin').val();
	$('nav#nav ul').css('margin-bottom',random+'px');
	$("#slidermenu1_bottom_margin").slider({
		value: random,
		min: 0,
		max: 20,
		step: 1,
	});
});
$('select#menu1_border_top_type').change(function() {
	var random = $('select.menu1_border_top_type').val();
	jQuery('nav#nav ul').css('border-top-style',random);
});
$('select#menu1_border_right_type').change(function() {
	var random = $('select.menu1_border_right_type').val();
	jQuery('nav#nav ul').css('border-right-style',random);
});
$('select#menu1_border_bottom_type').change(function() {
	var random = $('select.menu1_border_bottom_type').val();
	jQuery('nav#nav ul').css('border-bottom-style',random);
});
$('select#menu1_border_left_type').change(function() {
	var random = $('select.menu1_border_left_type').val();
	jQuery('nav#nav ul').css('border-left-style',random);
});
$('#menu1_border_top_colour').change(function() {
	var colour = $('#menu1_border_top_colour').val();
	jQuery('nav#nav ul').css('color',colour);
});
$('#menu1_border_right_colour').change(function() {
	var colour = $('#menu1_border_right_colour').val();
	jQuery('nav#nav ul').css('color',colour);
});
$('#menu1_border_bottom_colour').change(function() {
	var colour = $('#menu1_border_bottom_colour').val();
	jQuery('nav#nav ul').css('color',colour);
});
$('#menu1_border_left_colour').change(function() {
	var colour = $('#menu1_border_left_colour').val();
	jQuery('nav#nav ul').css('color',colour);
});
var number = parseInt($("nav#nav li:first-child").css('margin-left'));
$("#menu1_indent").text(number);
$("#slidermenu1_indent").slider({
	value: number,
	min: 0,
	max: 200,
	step: 1,
	slide: function(event, ui) {
		$("nav#nav li:first-child").css("margin-left", ui.value + "px");
		$("#menu1_indent").attr("value", ui.value);
	}
});$('input#menu1_indent').change(function() {
	var random = $('input#menu1_indent').val();
	$('nav#nav li:first-child').css('margin-left',random+'px');
	$("#slidermenu1_indent").slider({
		value: random,
		min: 0,
		max: 200,
		step: 1,
	});
});
$('select#menu1_display').change(function() {
	var random = $('select.menu1_display').val();
	jQuery('nav#nav').css('display',random);
});
var number = parseInt($("nav#nav li").css('font-size'));
$("#menu1_fontsize").text(number);
$("#slidermenu1_fontsize").slider({
	value: number,
	min: 6,
	max: 80,
	step: 1,
	slide: function(event, ui) {
		$("nav#nav li").css("font-size", ui.value + "px");
		$("#menu1_fontsize").attr("value", ui.value);
	}
});$('input#menu1_fontsize').change(function() {
	var random = $('input#menu1_fontsize').val();
	$('nav#nav li').css('font-size',random+'px');
	$("#slidermenu1_fontsize").slider({
		value: random,
		min: 6,
		max: 80,
		step: 1,
	});
});
$('#menu1_textcolour').change(function() {
	var colour = $('#menu1_textcolour').val();
	jQuery('nav#nav li a').css('color',colour);
});
colour = $('.menu1_shadow_colour').val();
xcoord = $('.menu1_shadow_x_coordinate').val();
ycoord = $('.menu1_shadow_y_coordinate').val();
blur = $('.menu1_shadow_blur_radius').val();
$("#slidermenu1_shadow_blur_radius").slider({
	value: blur, //Sets the slider handle to start at the current value
	min: 0,
	max: 50,

	step: 1,
	slide: function(event, ui) { //This is where we can perform actions based on the slide
		$("#menu1_shadow_blur_radius").attr("value", ui.value); //This adds that value into the span in the tabs below, so you can see the actual value
		colour = $('.menu1_shadow_colour').val();
		xcoord = $('.menu1_shadow_x_coordinate').val();
		ycoord = $('.menu1_shadow_y_coordinate').val();
		jQuery('nav#nav li').css('textShadow',colour+' '+xcoord+'px '+ycoord+'px '+ui.value+'px');
	}
});
$("#slidermenu1_shadow_x_coordinate").slider({
	value: xcoord, //Sets the slider handle to start at the current value
	min: -10,
	max: 10,
	step: 1,
	slide: function(event, ui) { //This is where we can perform actions based on the slide
		$("#menu1_shadow_x_coordinate").attr("value", ui.value); //This adds that value into the span in the tabs below, so you can see the actual value
		colour = $('#menu1_shadow_colour').val();
		ycoord = $('#menu1_shadow_y_coordinate').val();
		blur = $('#menu1_shadow_blur_radius').val();
		jQuery('nav#nav li').css('textShadow',colour+' '+ui.value+'px '+ycoord+'px '+blur+'px');
	}
});
$("#slidermenu1_shadow_y_coordinate").slider({
	value: ycoord, //Sets the slider handle to start at the current value
	min: -10,
	max: 10,
	step: 1,
	slide: function(event, ui) { //This is where we can perform actions based on the slide
		$("#menu1_shadow_y_coordinate").attr("value", ui.value); //This adds that value into the span in the tabs below, so you can see the actual value
		colour = $('#menu1_shadow_colour').val();
		xcoord = $('#menu1_shadow_x_coordinate').val();
		blur = $('#menu1_shadow_blur_radius').val();
		jQuery('nav#nav li').css('textShadow',colour+' '+xcoord+'px '+ui.value+'px '+blur+'px');
	}
});
$('#menu1_shadow_colour').change(function() {
	colour = $('#menu1_shadow_colour').val();
	xcoord = $('#menu1_shadow_x_coordinate').val();
	ycoord = $('#menu1_shadow_y_coordinate').val();
	blur = $('#menu1_shadow_blur_radius').val();
	jQuery('nav#nav li').css('textShadow',colour+' '+xcoord+'px '+ycoord+'px '+blur+'px');
});
var number = parseInt($("nav#nav li").css('border-top-width'));
$("#menu1_bordertop_width").text(number);
$("#slidermenu1_bordertop_width").slider({
	value: number,
	min: 0,
	max: 10,
	step: 1,
	slide: function(event, ui) {
		$("nav#nav li").css("border-top-width", ui.value + "px");
		$("#menu1_bordertop_width").attr("value", ui.value);
	}
});$('input#menu1_bordertop_width').change(function() {
	var random = $('input#menu1_bordertop_width').val();
	$('nav#nav li').css('border-top-width',random+'px');
	$("#slidermenu1_bordertop_width").slider({
		value: random,
		min: 0,
		max: 10,
		step: 1,
	});
});
var number = parseInt($("nav#nav li").css('border-bottom-width'));
$("#menu1_borderbottom_width").text(number);
$("#slidermenu1_borderbottom_width").slider({
	value: number,
	min: 0,
	max: 10,
	step: 1,
	slide: function(event, ui) {
		$("nav#nav li").css("border-bottom-width", ui.value + "px");
		$("#menu1_borderbottom_width").attr("value", ui.value);
	}
});$('input#menu1_borderbottom_width').change(function() {
	var random = $('input#menu1_borderbottom_width').val();
	$('nav#nav li').css('border-bottom-width',random+'px');
	$("#slidermenu1_borderbottom_width").slider({
		value: random,
		min: 0,
		max: 10,
		step: 1,
	});
});
var number = parseInt($("nav#nav li").css('border-left-width'));
$("#menu1_borderleft_width").text(number);
$("#slidermenu1_borderleft_width").slider({
	value: number,
	min: 0,
	max: 10,
	step: 1,
	slide: function(event, ui) {
		$("nav#nav li").css("border-left-width", ui.value + "px");
		$("#menu1_borderleft_width").attr("value", ui.value);
	}
});$('input#menu1_borderleft_width').change(function() {
	var random = $('input#menu1_borderleft_width').val();
	$('nav#nav li').css('border-left-width',random+'px');
	$("#slidermenu1_borderleft_width").slider({
		value: random,
		min: 0,
		max: 10,
		step: 1,
	});
});
var number = parseInt($("nav#nav li").css('border-right-width'));
$("#menu1_borderright_width").text(number);
$("#slidermenu1_borderright_width").slider({
	value: number,
	min: 0,
	max: 10,
	step: 1,
	slide: function(event, ui) {
		$("nav#nav li").css("border-right-width", ui.value + "px");
		$("#menu1_borderright_width").attr("value", ui.value);
	}
});$('input#menu1_borderright_width').change(function() {
	var random = $('input#menu1_borderright_width').val();
	$('nav#nav li').css('border-right-width',random+'px');
	$("#slidermenu1_borderright_width").slider({
		value: random,
		min: 0,
		max: 10,
		step: 1,
	});
});
$('select#menu1_fontfamily').change(function() {
	var random = $('select.menu1_fontfamily').val();
	jQuery('nav#nav li').css('font-family',random);
});
$('select#menu1_font_weight').change(function() {
	var random = $('select.menu1_font_weight').val();
	jQuery('nav#nav li').css('font-weight',random);
});
$('select#menu1_font_style').change(function() {
	var random = $('select.menu1_font_style').val();
	jQuery('nav#nav li').css('font-style',random);
});
$('select#menu1_textdecoration').change(function() {
	var random = $('select.menu1_textdecoration').val();
	jQuery('nav#nav li a').css('text-decoration',random);
});
$('select#menu1_text_transform').change(function() {
	var random = $('select.menu1_text_transform').val();
	jQuery('nav#nav li').css('text-transform',random);
});
$('select#menu1_small_caps').change(function() {
	var random = $('select.menu1_small_caps').val();
	jQuery('nav#nav li').css('font-variant',random);
});
$('select#menu1_bordertop_type').change(function() {
	var random = $('select.menu1_bordertop_type').val();
	jQuery('nav#nav li').css('border-top-style',random);
});
$('select#menu1_borderbottom_type').change(function() {
	var random = $('select.menu1_borderbottom_type').val();
	jQuery('nav#nav li').css('border-bottom-style',random);
});
var number = parseInt($("nav#nav li").css('margin-right'));
$("#menu1_margin_right").text(number);
$("#slidermenu1_margin_right").slider({
	value: number,
	min: 0,
	max: 50,
	step: 1,
	slide: function(event, ui) {
		$("nav#nav li").css("margin-right", ui.value + "px");
		$("#menu1_margin_right").attr("value", ui.value);
	}
});$('input#menu1_margin_right').change(function() {
	var random = $('input#menu1_margin_right').val();
	$('nav#nav li').css('margin-right',random+'px');
	$("#slidermenu1_margin_right").slider({
		value: random,
		min: 0,
		max: 50,
		step: 1,
	});
});
var number = parseInt($("nav#nav li").css('margin-left'));
$("#menu1_margin_left").text(number);
$("#slidermenu1_margin_left").slider({
	value: number,
	min: 0,
	max: 50,
	step: 1,
	slide: function(event, ui) {
		$("nav#nav li").css("margin-left", ui.value + "px");
		$("#menu1_margin_left").attr("value", ui.value);
	}
});$('input#menu1_margin_left').change(function() {
	var random = $('input#menu1_margin_left').val();
	$('nav#nav li').css('margin-left',random+'px');
	$("#slidermenu1_margin_left").slider({
		value: random,
		min: 0,
		max: 50,
		step: 1,
	});
});
var number = parseInt($("nav#nav li a").css('padding-right'));
$("#menu1_padding_right").text(number);
$("#slidermenu1_padding_right").slider({
	value: number,
	min: 0,
	max: 50,
	step: 1,
	slide: function(event, ui) {
		$("nav#nav li a").css("padding-right", ui.value + "px");
		$("#menu1_padding_right").attr("value", ui.value);
	}
});$('input#menu1_padding_right').change(function() {
	var random = $('input#menu1_padding_right').val();
	$('nav#nav li a').css('padding-right',random+'px');
	$("#slidermenu1_padding_right").slider({
		value: random,
		min: 0,
		max: 50,
		step: 1,
	});
});
var number = parseInt($("nav#nav li a").css('padding-left'));
$("#menu1_padding_left").text(number);
$("#slidermenu1_padding_left").slider({
	value: number,
	min: 0,
	max: 50,
	step: 1,
	slide: function(event, ui) {
		$("nav#nav li a").css("padding-left", ui.value + "px");
		$("#menu1_padding_left").attr("value", ui.value);
	}
});$('input#menu1_padding_left').change(function() {
	var random = $('input#menu1_padding_left').val();
	$('nav#nav li a').css('padding-left',random+'px');
	$("#slidermenu1_padding_left").slider({
		value: random,
		min: 0,
		max: 50,
		step: 1,
	});
});

$('select#menu1_fullwidth_background_display').change(function() {
	var random = $('select#menu1_fullwidth_background_display').val();
	var colour = $('#menu1_fullwidth_background_colour').val();
	var image = $('#menu1_fullwidth_background_image').val();
	if (random == 'none') { $('nav#nav').css('background-color','transparent');$('nav#nav').css('background-image','none');}
	if (random == 'block') { $('nav#nav').css('background-color',colour);$('nav#nav').css('background-image',image);}
});
var paddingtop = parseInt($("nav#nav li a").css('padding-top'));
var paddingbottom = parseInt($("nav#nav li a").css('padding-bottom'));
var lineheight = parseInt($("nav#nav li").css('line-height'));
var margintop = parseInt($("nav#nav li").css('margin-top'));
var marginbottom = parseInt($("nav#nav li").css(' margin-bottom'));
$(".menu1_line_height").text(paddingtop);
$("#slidermenu1_line_height").slider({
	value: lineheight, //Sets the slider handle to start at the current value
	min: 0,
	max: 50,
	step: 1,
	slide: function(event, ui) { //This is where we can perform actions based on the slide
		$(".menu1_line_height").attr("value", ui.value); //This adds that value into the span in the tabs below, so you can see the actual value
		var paddingtop = parseInt($("nav#nav li a").css('padding-top'));
		var paddingbottom = parseInt($("nav#nav li a").css('padding-bottom'));
		var lineheight = parseInt($("nav#nav li").css('line-height'));
		var margintop = parseInt($("nav#nav li").css('margin-top'));
		var marginbottom = parseInt($("nav#nav li").css(' margin-bottom'));
		$("nav#nav li").css("line-height", ui.value + "px"); // Changing bottom padding on link
		$("nav#nav ul").css("height", margintop + paddingbottom + ui.value + lineheight + "px"); // Changing menu item height
		$("nav#nav li").css("height", paddingbottom + ui.value + lineheight + "px"); // Changing menu item height
	}
});
$("#menu1_padding_top").text(paddingtop);
$("#slidermenu1_padding_top").slider({
	value: paddingtop, //Sets the slider handle to start at the current value
	min: 0,
	max: 50,
	step: 1,
	slide: function(event, ui) { //This is where we can perform actions based on the slide
		$("#menu1_padding_top").attr("value", ui.value); //This adds that value into the span in the tabs below, so you can see the actual value
		var paddingtop = parseInt($("nav#nav li a").css('padding-top'));
		var paddingbottom = parseInt($("nav#nav li a").css('padding-bottom'));
		var lineheight = parseInt($("nav#nav li").css('line-height'));
		var margintop = parseInt($("nav#nav li").css('margin-top'));
		var marginbottom = parseInt($("nav#nav li").css(' margin-bottom'));
		$("nav#nav li a").css("padding-top", ui.value + "px"); // Changing bottom padding on link
		$("nav#nav li").css("line-height", lineheight + "px"); // Changing bottom padding on link
		$("nav#nav ul").css("height", margintop + paddingbottom + ui.value + lineheight + "px"); // Changing menu item height
		$("nav#nav li").css("height", paddingbottom + ui.value + lineheight + "px"); // Changing menu item height
	}
});
$("#menu1_margin_top").text(margintop);
$("#slidermenu1_margin_top").slider({
	value: margintop, //Sets the slider handle to start at the current value
	min: 0,
	max: 50,
	step: 1,
	slide: function(event, ui) { //This is where we can perform actions based on the slide
		$("#menu1_margin_top").attr("value", ui.value); //This adds that value into the span in the tabs below, so you can see the actual value
		var paddingtop = parseInt($("nav#nav li a").css('padding-top'));
		var paddingbottom = parseInt($("nav#nav li a").css('padding-bottom'));
		var lineheight = parseInt($("nav#nav li").css('line-height'));
		var margintop = parseInt($("nav#nav li").css('margin-top'));
		var marginbottom = parseInt($("nav#nav li").css(' margin-bottom'));
		$("nav#nav li").css("margin-top", ui.value + "px"); // Changing top margin on link
		$("nav#nav li").css("line-height", lineheight + "px"); // Changing bottom padding on link
		$("nav#nav ul").css("height", margintop + paddingbottom + ui.value + lineheight + "px"); // Changing menu item height
		$("nav#nav li").css("height", paddingbottom + ui.value + lineheight + "px"); // Changing menu item height
	}
});
$("#menu1_padding_bottom").text(paddingbottom);
$("#slidermenu1_padding_bottom").slider({
	value: paddingbottom, //Sets the slider handle to start at the current value
	min: 0,
	max: 50,
	step: 1,
	slide: function(event, ui) { //This is where we can perform actions based on the slide
		$("#menu1_padding_bottom").attr("value", ui.value); //This adds that value into the span in the tabs below, so you can see the actual value
		var paddingtop = parseInt($("nav#nav li a").css('padding-top'));
		var paddingbottom = parseInt($("nav#nav li a").css('padding-bottom'));
		var lineheight = parseInt($("nav#nav li").css('line-height'));
		var margintop = parseInt($("nav#nav li").css('margin-top'));
		var marginbottom = parseInt($("nav#nav li").css(' margin-bottom'));
		$("nav#nav li a").css("padding-bottom", ui.value + "px"); // Changing bottom padding
		$("nav#nav li").css("line-height", lineheight + "px"); // Changing bottom padding on link
		$("nav#nav ul").css("height", margintop + paddingbottom + ui.value + lineheight + "px"); // Changing menu item height
		$("nav#nav li").css("height", paddingbottom + ui.value + lineheight + "px"); // Changing menu item height
	}
});
$("#menu1_margin_bottom").text(margintop);
$("#slidermenu1_margin_bottom").slider({
	value: marginbottom, //Sets the slider handle to start at the current value
	min: 0,
	max: 50,
	step: 1,
	slide: function(event, ui) { //This is where we can perform actions based on the slide
		$("#menu1_margin_bottom").attr("value", ui.value); //This adds that value into the span in the tabs below, so you can see the actual value
		var paddingtop = parseInt($("nav#nav li a").css('padding-top'));
		var paddingbottom = parseInt($("nav#nav li a").css('padding-bottom'));
		var lineheight = parseInt($("nav#nav li").css('line-height'));
		var margintop = parseInt($("nav#nav li").css('margin-top'));
		var marginbottom = parseInt($("nav#nav li").css(' margin-bottom'));
		$("nav#nav li").css("margin-bottom", ui.value + "px"); // Changing bottom margin
		$("nav#nav li").css("line-height", lineheight + "px"); // Changing bottom padding on link
		$("nav#nav ul").css("height", margintop + paddingbottom + ui.value + lineheight + "px"); // Changing menu item height
		$("nav#nav li").css("height", paddingbottom + ui.value + lineheight + "px"); // Changing menu item height
	}
});
var number = parseInt($("#banner div.banner-image").css('max-width'));
$("#banner_max_width").text(number);
$("#sliderbanner_max_width").slider({
	value: number,
	min: 0,
	max: 1600,
	step: 1,
	slide: function(event, ui) {
		$("#banner div.banner-image").css("max-width", ui.value + "px");
		$("#banner_max_width").attr("value", ui.value);
	}
});$('input#banner_max_width').change(function() {
	var random = $('input#banner_max_width').val();
	$('#banner div.banner-image').css('max-width',random+'px');
	$("#sliderbanner_max_width").slider({
		value: random,
		min: 0,
		max: 1600,
		step: 1,
	});
});
var number = parseInt($("#banner div.banner-image").css('min-width'));
$("#banner_min_width").text(number);
$("#sliderbanner_min_width").slider({
	value: number,
	min: 0,
	max: 1600,
	step: 1,
	slide: function(event, ui) {
		$("#banner div.banner-image").css("min-width", ui.value + "px");
		$("#banner_min_width").attr("value", ui.value);
	}
});$('input#banner_min_width').change(function() {
	var random = $('input#banner_min_width').val();
	$('#banner div.banner-image').css('min-width',random+'px');
	$("#sliderbanner_min_width").slider({
		value: random,
		min: 0,
		max: 1600,
		step: 1,
	});
});
var number = parseInt($("#banner div.banner-image").css('height'));
$("#banner_height").text(number);
$("#sliderbanner_height").slider({
	value: number,
	min: 0,
	max: 600,
	step: 1,
	slide: function(event, ui) {
		$("#banner div.banner-image").css("height", ui.value + "px");
		$("#banner_height").attr("value", ui.value);
	}
});$('input#banner_height').change(function() {
	var random = $('input#banner_height').val();
	$('#banner div.banner-image').css('height',random+'px');
	$("#sliderbanner_height").slider({
		value: random,
		min: 0,
		max: 600,
		step: 1,
	});
});
var number = parseInt($("#banner div.banner-image").css('border-top-width'));
$("#banner_border_top_width").text(number);
$("#sliderbanner_border_top_width").slider({
	value: number,
	min: 0,
	max: 20,
	step: 1,
	slide: function(event, ui) {
		$("#banner div.banner-image").css("border-top-width", ui.value + "px");
		$("#banner_border_top_width").attr("value", ui.value);
	}
});$('input#banner_border_top_width').change(function() {
	var random = $('input#banner_border_top_width').val();
	$('#banner div.banner-image').css('border-top-width',random+'px');
	$("#sliderbanner_border_top_width").slider({
		value: random,
		min: 0,
		max: 20,
		step: 1,
	});
});
var number = parseInt($("#banner div.banner-image").css('border-right-width'));
$("#banner_border_right_width").text(number);
$("#sliderbanner_border_right_width").slider({
	value: number,
	min: 0,
	max: 20,
	step: 1,
	slide: function(event, ui) {
		$("#banner div.banner-image").css("border-right-width", ui.value + "px");
		$("#banner_border_right_width").attr("value", ui.value);
	}
});$('input#banner_border_right_width').change(function() {
	var random = $('input#banner_border_right_width').val();
	$('#banner div.banner-image').css('border-right-width',random+'px');
	$("#sliderbanner_border_right_width").slider({
		value: random,
		min: 0,
		max: 20,
		step: 1,
	});
});
var number = parseInt($("#banner div.banner-image").css('border-bottom-width'));
$("#banner_border_bottom_width").text(number);
$("#sliderbanner_border_bottom_width").slider({
	value: number,
	min: 0,
	max: 20,
	step: 1,
	slide: function(event, ui) {
		$("#banner div.banner-image").css("border-bottom-width", ui.value + "px");
		$("#banner_border_bottom_width").attr("value", ui.value);
	}
});$('input#banner_border_bottom_width').change(function() {
	var random = $('input#banner_border_bottom_width').val();
	$('#banner div.banner-image').css('border-bottom-width',random+'px');
	$("#sliderbanner_border_bottom_width").slider({
		value: random,
		min: 0,
		max: 20,
		step: 1,
	});
});
var number = parseInt($("#banner div.banner-image").css('border-left-width'));
$("#banner_border_left_width").text(number);
$("#sliderbanner_border_left_width").slider({
	value: number,
	min: 0,
	max: 20,
	step: 1,
	slide: function(event, ui) {
		$("#banner div.banner-image").css("border-left-width", ui.value + "px");
		$("#banner_border_left_width").attr("value", ui.value);
	}
});$('input#banner_border_left_width').change(function() {
	var random = $('input#banner_border_left_width').val();
	$('#banner div.banner-image').css('border-left-width',random+'px');
	$("#sliderbanner_border_left_width").slider({
		value: random,
		min: 0,
		max: 20,
		step: 1,
	});
});
var number = parseInt($("#banner div.banner-image").css('margin-top'));
$("#banner_top_margin").text(number);
$("#sliderbanner_top_margin").slider({
	value: number,
	min: 0,
	max: 20,
	step: 1,
	slide: function(event, ui) {
		$("#banner div.banner-image").css("margin-top", ui.value + "px");
		$("#banner_top_margin").attr("value", ui.value);
	}
});$('input#banner_top_margin').change(function() {
	var random = $('input#banner_top_margin').val();
	$('#banner div.banner-image').css('margin-top',random+'px');
	$("#sliderbanner_top_margin").slider({
		value: random,
		min: 0,
		max: 20,
		step: 1,
	});
});
var number = parseInt($("#banner div.banner-image").css('margin-bottom'));
$("#banner_bottom_margin").text(number);
$("#sliderbanner_bottom_margin").slider({
	value: number,
	min: 0,
	max: 20,
	step: 1,
	slide: function(event, ui) {
		$("#banner div.banner-image").css("margin-bottom", ui.value + "px");
		$("#banner_bottom_margin").attr("value", ui.value);
	}
});$('input#banner_bottom_margin').change(function() {
	var random = $('input#banner_bottom_margin').val();
	$('#banner div.banner-image').css('margin-bottom',random+'px');
	$("#sliderbanner_bottom_margin").slider({
		value: random,
		min: 0,
		max: 20,
		step: 1,
	});
});
$('select#banner_border_top_type').change(function() {
	var random = $('select.banner_border_top_type').val();
	jQuery('#banner div.banner-image').css('border-top-style',random);
});
$('select#banner_border_right_type').change(function() {
	var random = $('select.banner_border_right_type').val();
	jQuery('#banner div.banner-image').css('border-right-style',random);
});
$('select#banner_border_bottom_type').change(function() {
	var random = $('select.banner_border_bottom_type').val();
	jQuery('#banner div.banner-image').css('border-bottom-style',random);
});
$('select#banner_border_left_type').change(function() {
	var random = $('select.banner_border_left_type').val();
	jQuery('#banner div.banner-image').css('border-left-style',random);
});
$('#banner_border_top_colour').change(function() {
	var colour = $('#banner_border_top_colour').val();
	jQuery('#banner div.banner-image').css('color',colour);
});
$('#banner_border_right_colour').change(function() {
	var colour = $('#banner_border_right_colour').val();
	jQuery('#banner div.banner-image').css('color',colour);
});
$('#banner_border_bottom_colour').change(function() {
	var colour = $('#banner_border_bottom_colour').val();
	jQuery('#banner div.banner-image').css('color',colour);
});
$('#banner_border_left_colour').change(function() {
	var colour = $('#banner_border_left_colour').val();
	jQuery('#banner div.banner-image').css('color',colour);
});
var number = parseInt($("footer div.footer").css('width'));
$("#footer_max_width").text(number);
$("#sliderfooter_max_width").slider({
	value: number,
	min: 0,
	max: 1600,
	step: 1,
	slide: function(event, ui) {
		$("footer div.footer").css("width", ui.value + "px");
		$("#footer_max_width").attr("value", ui.value);
	}
});$('input#footer_max_width').change(function() {
	var random = $('input#footer_max_width').val();
	$('footer div.footer').css('width',random+'px');
	$("#sliderfooter_max_width").slider({
		value: random,
		min: 0,
		max: 1600,
		step: 1,
	});
});
var number = parseInt($("footer div.footer").css('min-width'));
$("#footer_min_width").text(number);
$("#sliderfooter_min_width").slider({
	value: number,
	min: 0,
	max: 1600,
	step: 1,
	slide: function(event, ui) {
		$("footer div.footer").css("min-width", ui.value + "px");
		$("#footer_min_width").attr("value", ui.value);
	}
});$('input#footer_min_width').change(function() {
	var random = $('input#footer_min_width').val();
	$('footer div.footer').css('min-width',random+'px');
	$("#sliderfooter_min_width").slider({
		value: random,
		min: 0,
		max: 1600,
		step: 1,
	});
});
var number = parseInt($("footer div.footer").css('height'));
$("#footer_height").text(number);
$("#sliderfooter_height").slider({
	value: number,
	min: 0,
	max: 800,
	step: 1,
	slide: function(event, ui) {
		$("footer div.footer").css("height", ui.value + "px");
		$("#footer_height").attr("value", ui.value);
	}
});$('input#footer_height').change(function() {
	var random = $('input#footer_height').val();
	$('footer div.footer').css('height',random+'px');
	$("#sliderfooter_height").slider({
		value: random,
		min: 0,
		max: 800,
		step: 1,
	});
});
var number = parseInt($("footer div.footer").css('border-top-width'));
$("#footer_border_top_width").text(number);
$("#sliderfooter_border_top_width").slider({
	value: number,
	min: 0,
	max: 20,
	step: 1,
	slide: function(event, ui) {
		$("footer div.footer").css("border-top-width", ui.value + "px");
		$("#footer_border_top_width").attr("value", ui.value);
	}
});$('input#footer_border_top_width').change(function() {
	var random = $('input#footer_border_top_width').val();
	$('footer div.footer').css('border-top-width',random+'px');
	$("#sliderfooter_border_top_width").slider({
		value: random,
		min: 0,
		max: 20,
		step: 1,
	});
});
var number = parseInt($("footer div.footer").css('border-right-width'));
$("#footer_border_right_width").text(number);
$("#sliderfooter_border_right_width").slider({
	value: number,
	min: 0,
	max: 20,
	step: 1,
	slide: function(event, ui) {
		$("footer div.footer").css("border-right-width", ui.value + "px");
		$("#footer_border_right_width").attr("value", ui.value);
	}
});$('input#footer_border_right_width').change(function() {
	var random = $('input#footer_border_right_width').val();
	$('footer div.footer').css('border-right-width',random+'px');
	$("#sliderfooter_border_right_width").slider({
		value: random,
		min: 0,
		max: 20,
		step: 1,
	});
});
var number = parseInt($("footer div.footer").css('border-bottom-width'));
$("#footer_border_bottom_width").text(number);
$("#sliderfooter_border_bottom_width").slider({
	value: number,
	min: 0,
	max: 20,
	step: 1,
	slide: function(event, ui) {
		$("footer div.footer").css("border-bottom-width", ui.value + "px");
		$("#footer_border_bottom_width").attr("value", ui.value);
	}
});$('input#footer_border_bottom_width').change(function() {
	var random = $('input#footer_border_bottom_width').val();
	$('footer div.footer').css('border-bottom-width',random+'px');
	$("#sliderfooter_border_bottom_width").slider({
		value: random,
		min: 0,
		max: 20,
		step: 1,
	});
});
var number = parseInt($("footer div.footer").css('border-left-width'));
$("#footer_border_left_width").text(number);
$("#sliderfooter_border_left_width").slider({
	value: number,
	min: 0,
	max: 20,
	step: 1,
	slide: function(event, ui) {
		$("footer div.footer").css("border-left-width", ui.value + "px");
		$("#footer_border_left_width").attr("value", ui.value);
	}
});$('input#footer_border_left_width').change(function() {
	var random = $('input#footer_border_left_width').val();
	$('footer div.footer').css('border-left-width',random+'px');
	$("#sliderfooter_border_left_width").slider({
		value: random,
		min: 0,
		max: 20,
		step: 1,
	});
});
var number = parseInt($("footer div.footer").css('margin-top'));
$("#footer_top_margin").text(number);
$("#sliderfooter_top_margin").slider({
	value: number,
	min: 0,
	max: 20,
	step: 1,
	slide: function(event, ui) {
		$("footer div.footer").css("margin-top", ui.value + "px");
		$("#footer_top_margin").attr("value", ui.value);
	}
});$('input#footer_top_margin').change(function() {
	var random = $('input#footer_top_margin').val();
	$('footer div.footer').css('margin-top',random+'px');
	$("#sliderfooter_top_margin").slider({
		value: random,
		min: 0,
		max: 20,
		step: 1,
	});
});
var number = parseInt($("footer div.footer").css('margin-bottom'));
$("#footer_bottom_margin").text(number);
$("#sliderfooter_bottom_margin").slider({
	value: number,
	min: 0,
	max: 20,
	step: 1,
	slide: function(event, ui) {
		$("footer div.footer").css("margin-bottom", ui.value + "px");
		$("#footer_bottom_margin").attr("value", ui.value);
	}
});$('input#footer_bottom_margin').change(function() {
	var random = $('input#footer_bottom_margin').val();
	$('footer div.footer').css('margin-bottom',random+'px');
	$("#sliderfooter_bottom_margin").slider({
		value: random,
		min: 0,
		max: 20,
		step: 1,
	});
});
$('select#footer_border_top_type').change(function() {
	var random = $('select.footer_border_top_type').val();
	jQuery('footer div.footer').css('border-top-style',random);
});
$('select#footer_border_right_type').change(function() {
	var random = $('select.footer_border_right_type').val();
	jQuery('footer div.footer').css('border-right-style',random);
});
$('select#footer_border_bottom_type').change(function() {
	var random = $('select.footer_border_bottom_type').val();
	jQuery('footer div.footer').css('border-bottom-style',random);
});
$('select#footer_border_left_type').change(function() {
	var random = $('select.footer_border_left_type').val();
	jQuery('footer div.footer').css('border-left-style',random);
});
$('#footer_border_top_colour').change(function() {
	var colour = $('#footer_border_top_colour').val();
	jQuery('footer div.footer').css('color',colour);
});
$('#footer_border_right_colour').change(function() {
	var colour = $('#footer_border_right_colour').val();
	jQuery('footer div.footer').css('color',colour);
});
$('#footer_border_bottom_colour').change(function() {
	var colour = $('#footer_border_bottom_colour').val();
	jQuery('footer div.footer').css('color',colour);
});
$('#footer_border_left_colour').change(function() {
	var colour = $('#footer_border_left_colour').val();
	jQuery('footer div.footer').css('color',colour);
});

$('select#footer_fullwidth_background_display').change(function() {
	var random = $('select#footer_fullwidth_background_display').val();
	var colour = $('#footer_fullwidth_background_colour').val();
	var image = $('#footer_fullwidth_background_image').val();
	if (random == 'none') { $('footer').css('background-color','transparent');$('footer').css('background-image','none');}
	if (random == 'block') { $('footer').css('background-color',colour);$('footer').css('background-image',image);}
});var margin = parseInt($("footer nav ul 		 	").css('margin-left')); //Sets the slider handle to start at the current value
$("#footer_menu_horizontalposition").text(margin);
$("#sliderfooter_menu_horizontalposition").slider({
	value: margin, //Sets the slider handle to start at the current value
	min:0,
	max:1200,
	step:1,
	slide:function(event,ui) {
		$("footer nav ul 		 	").css("margin-left",ui.value+"px");
		$("#footer_menu_horizontalposition").attr("value",ui.value);
		var footer_menu_alignment=$('[name=footer_menu_alignment]').val();
		if(footer_menu_alignment=='left') {jQuery('footer nav ul 		 	').css('margin-left',ui.value);}
		else if(footer_menu_alignment=='right') {
			jQuery('footer nav ul 		 	').css('margin-right',ui.value);
			jQuery('footer nav ul 		 	').css('margin-left',0);
		}
		else if(footer_menu_alignment=='center') {
			jQuery('footer nav ul 		 	').css('margin-right',0);
			jQuery('footer nav ul 		 	').css('margin-left',0);
			jQuery('footer nav ul 		 	').css('text-align','center');
		}
	}
});
var number = parseInt($("footer nav").css('margin-top'));
$("#footer_menu_verticalposition").text(number);
$("#sliderfooter_menu_verticalposition").slider({
	value: number,
	min: 0,
	max: 400,
	step: 1,
	slide: function(event, ui) {
		$("footer nav").css("margin-top", ui.value + "px");
		$("#footer_menu_verticalposition").attr("value", ui.value);
	}
});$('input#footer_menu_verticalposition').change(function() {
	var random = $('input#footer_menu_verticalposition').val();
	$('footer nav').css('margin-top',random+'px');
	$("#sliderfooter_menu_verticalposition").slider({
		value: random,
		min: 0,
		max: 400,
		step: 1,
	});
});
$('select#footer_menu_display').change(function() {
	var random = $('select.footer_menu_display').val();
	jQuery('footer nav').css('display',random);
});
var number = parseInt($("footer nav li a").css('font-size'));
$("#footer_menu_fontsize").text(number);
$("#sliderfooter_menu_fontsize").slider({
	value: number,
	min: 6,
	max: 80,
	step: 1,
	slide: function(event, ui) {
		$("footer nav li a").css("font-size", ui.value + "px");
		$("#footer_menu_fontsize").attr("value", ui.value);
	}
});$('input#footer_menu_fontsize').change(function() {
	var random = $('input#footer_menu_fontsize').val();
	$('footer nav li a').css('font-size',random+'px');
	$("#sliderfooter_menu_fontsize").slider({
		value: random,
		min: 6,
		max: 80,
		step: 1,
	});
});
var number = parseInt($("footer nav li a").css('line-height'));
$("#footer_menu_line_height").text(number);
$("#sliderfooter_menu_line_height").slider({
	value: number,
	min: 6,
	max: 80,
	step: 1,
	slide: function(event, ui) {
		$("footer nav li a").css("line-height", ui.value + "px");
		$("#footer_menu_line_height").attr("value", ui.value);
	}
});$('input#footer_menu_line_height').change(function() {
	var random = $('input#footer_menu_line_height').val();
	$('footer nav li a').css('line-height',random+'px');
	$("#sliderfooter_menu_line_height").slider({
		value: random,
		min: 6,
		max: 80,
		step: 1,
	});
});
$('#footer_menu_textcolour').change(function() {
	var colour = $('#footer_menu_textcolour').val();
	jQuery('footer nav li a').css('color',colour);
});
colour = $('.footer_menu_shadow_colour').val();
xcoord = $('.footer_menu_shadow_x_coordinate').val();
ycoord = $('.footer_menu_shadow_y_coordinate').val();
blur = $('.footer_menu_shadow_blur_radius').val();
$("#sliderfooter_menu_shadow_blur_radius").slider({
	value: blur, //Sets the slider handle to start at the current value
	min: 0,
	max: 50,

	step: 1,
	slide: function(event, ui) { //This is where we can perform actions based on the slide
		$("#footer_menu_shadow_blur_radius").attr("value", ui.value); //This adds that value into the span in the tabs below, so you can see the actual value
		colour = $('.footer_menu_shadow_colour').val();
		xcoord = $('.footer_menu_shadow_x_coordinate').val();
		ycoord = $('.footer_menu_shadow_y_coordinate').val();
		jQuery('footer nav li a').css('textShadow',colour+' '+xcoord+'px '+ycoord+'px '+ui.value+'px');
	}
});
$("#sliderfooter_menu_shadow_x_coordinate").slider({
	value: xcoord, //Sets the slider handle to start at the current value
	min: -10,
	max: 10,
	step: 1,
	slide: function(event, ui) { //This is where we can perform actions based on the slide
		$("#footer_menu_shadow_x_coordinate").attr("value", ui.value); //This adds that value into the span in the tabs below, so you can see the actual value
		colour = $('#footer_menu_shadow_colour').val();
		ycoord = $('#footer_menu_shadow_y_coordinate').val();
		blur = $('#footer_menu_shadow_blur_radius').val();
		jQuery('footer nav li a').css('textShadow',colour+' '+ui.value+'px '+ycoord+'px '+blur+'px');
	}
});
$("#sliderfooter_menu_shadow_y_coordinate").slider({
	value: ycoord, //Sets the slider handle to start at the current value
	min: -10,
	max: 10,
	step: 1,
	slide: function(event, ui) { //This is where we can perform actions based on the slide
		$("#footer_menu_shadow_y_coordinate").attr("value", ui.value); //This adds that value into the span in the tabs below, so you can see the actual value
		colour = $('#footer_menu_shadow_colour').val();
		xcoord = $('#footer_menu_shadow_x_coordinate').val();
		blur = $('#footer_menu_shadow_blur_radius').val();
		jQuery('footer nav li a').css('textShadow',colour+' '+xcoord+'px '+ui.value+'px '+blur+'px');
	}
});
$('#footer_menu_shadow_colour').change(function() {
	colour = $('#footer_menu_shadow_colour').val();
	xcoord = $('#footer_menu_shadow_x_coordinate').val();
	ycoord = $('#footer_menu_shadow_y_coordinate').val();
	blur = $('#footer_menu_shadow_blur_radius').val();
	jQuery('footer nav li a').css('textShadow',colour+' '+xcoord+'px '+ycoord+'px '+blur+'px');
});

var number = parseInt($("footer nav li a").css('border-top-width'));
$("#footer_menu_bordertop_width").text(number);
$("#sliderfooter_menu_bordertop_width").slider({
	value: number,
	min: 0,
	max: 10,
	step: 1,
	slide: function(event, ui) {
		$("footer nav li a").css("border-top-width", ui.value + "px");
		$("#footer_menu_bordertop_width").attr("value", ui.value);
	}
});$('input#footer_menu_bordertop_width').change(function() {
	var random = $('input#footer_menu_bordertop_width').val();
	$('footer nav li a').css('border-top-width',random+'px');
	$("#sliderfooter_menu_bordertop_width").slider({
		value: random,
		min: 0,
		max: 10,
		step: 1,
	});
});
var number = parseInt($("footer nav li a").css('border-bottom-width'));
$("#footer_menu_borderbottom_width").text(number);
$("#sliderfooter_menu_borderbottom_width").slider({
	value: number,
	min: 0,
	max: 10,
	step: 1,
	slide: function(event, ui) {
		$("footer nav li a").css("border-bottom-width", ui.value + "px");
		$("#footer_menu_borderbottom_width").attr("value", ui.value);
	}
});$('input#footer_menu_borderbottom_width').change(function() {
	var random = $('input#footer_menu_borderbottom_width').val();
	$('footer nav li a').css('border-bottom-width',random+'px');
	$("#sliderfooter_menu_borderbottom_width").slider({
		value: random,
		min: 0,
		max: 10,
		step: 1,
	});
});

var number = parseInt($("footer nav li a").css('margin-top'));
$("#footer_menu_margin_top").text(number);
$("#sliderfooter_menu_margin_top").slider({
	value: number,
	min: 0,
	max: 50,
	step: 1,
	slide: function(event, ui) {
		$("footer nav li a").css("margin-top", ui.value + "px");
		$("#footer_menu_margin_top").attr("value", ui.value);
	}
});$('input#footer_menu_margin_top').change(function() {
	var random = $('input#footer_menu_margin_top').val();
	$('footer nav li a').css('margin-top',random+'px');
	$("#sliderfooter_menu_margin_top").slider({
		value: random,
		min: 0,
		max: 50,
		step: 1,
	});
});
var number = parseInt($("footer nav li a").css('margin-right'));
$("#footer_menu_margin_right").text(number);
$("#sliderfooter_menu_margin_right").slider({
	value: number,
	min: 0,
	max: 50,
	step: 1,
	slide: function(event, ui) {
		$("footer nav li a").css("margin-right", ui.value + "px");
		$("#footer_menu_margin_right").attr("value", ui.value);
	}
});$('input#footer_menu_margin_right').change(function() {
	var random = $('input#footer_menu_margin_right').val();
	$('footer nav li a').css('margin-right',random+'px');
	$("#sliderfooter_menu_margin_right").slider({
		value: random,
		min: 0,
		max: 50,
		step: 1,
	});
});
var number = parseInt($("footer nav li a").css('margin-bottom'));
$("#footer_menu_margin_bottom").text(number);
$("#sliderfooter_menu_margin_bottom").slider({
	value: number,
	min: 0,
	max: 50,
	step: 1,
	slide: function(event, ui) {
		$("footer nav li a").css("margin-bottom", ui.value + "px");
		$("#footer_menu_margin_bottom").attr("value", ui.value);
	}
});$('input#footer_menu_margin_bottom').change(function() {
	var random = $('input#footer_menu_margin_bottom').val();
	$('footer nav li a').css('margin-bottom',random+'px');
	$("#sliderfooter_menu_margin_bottom").slider({
		value: random,
		min: 0,
		max: 50,
		step: 1,
	});
});
var number = parseInt($("footer nav li a").css('margin-left'));
$("#footer_menu_margin_left").text(number);
$("#sliderfooter_menu_margin_left").slider({
	value: number,
	min: 0,
	max: 50,
	step: 1,
	slide: function(event, ui) {
		$("footer nav li a").css("margin-left", ui.value + "px");
		$("#footer_menu_margin_left").attr("value", ui.value);
	}
});$('input#footer_menu_margin_left').change(function() {
	var random = $('input#footer_menu_margin_left').val();
	$('footer nav li a').css('margin-left',random+'px');
	$("#sliderfooter_menu_margin_left").slider({
		value: random,
		min: 0,
		max: 50,
		step: 1,
	});
});

var number = parseInt($("footer nav li a").css('padding-top'));
$("#footer_menu_padding_top").text(number);
$("#sliderfooter_menu_padding_top").slider({
	value: number,
	min: 0,
	max: 50,
	step: 1,
	slide: function(event, ui) {
		$("footer nav li a").css("padding-top", ui.value + "px");
		$("#footer_menu_padding_top").attr("value", ui.value);
	}
});$('input#footer_menu_padding_top').change(function() {
	var random = $('input#footer_menu_padding_top').val();
	$('footer nav li a').css('padding-top',random+'px');
	$("#sliderfooter_menu_padding_top").slider({
		value: random,
		min: 0,
		max: 50,
		step: 1,
	});
});
var number = parseInt($("footer nav li a").css('padding-right'));
$("#footer_menu_padding_right").text(number);
$("#sliderfooter_menu_padding_right").slider({
	value: number,
	min: 0,
	max: 50,
	step: 1,
	slide: function(event, ui) {
		$("footer nav li a").css("padding-right", ui.value + "px");
		$("#footer_menu_padding_right").attr("value", ui.value);
	}
});$('input#footer_menu_padding_right').change(function() {
	var random = $('input#footer_menu_padding_right').val();
	$('footer nav li a').css('padding-right',random+'px');
	$("#sliderfooter_menu_padding_right").slider({
		value: random,
		min: 0,
		max: 50,
		step: 1,
	});
});
var number = parseInt($("footer nav li a").css('padding-bottom'));
$("#footer_menu_padding_bottom").text(number);
$("#sliderfooter_menu_padding_bottom").slider({
	value: number,
	min: 0,
	max: 50,
	step: 1,
	slide: function(event, ui) {
		$("footer nav li a").css("padding-bottom", ui.value + "px");
		$("#footer_menu_padding_bottom").attr("value", ui.value);
	}
});$('input#footer_menu_padding_bottom').change(function() {
	var random = $('input#footer_menu_padding_bottom').val();
	$('footer nav li a').css('padding-bottom',random+'px');
	$("#sliderfooter_menu_padding_bottom").slider({
		value: random,
		min: 0,
		max: 50,
		step: 1,
	});
});
var number = parseInt($("footer nav li a").css('padding-left'));
$("#footer_menu_padding_left").text(number);
$("#sliderfooter_menu_padding_left").slider({
	value: number,
	min: 0,
	max: 50,
	step: 1,
	slide: function(event, ui) {
		$("footer nav li a").css("padding-left", ui.value + "px");
		$("#footer_menu_padding_left").attr("value", ui.value);
	}
});$('input#footer_menu_padding_left').change(function() {
	var random = $('input#footer_menu_padding_left').val();
	$('footer nav li a').css('padding-left',random+'px');
	$("#sliderfooter_menu_padding_left").slider({
		value: random,
		min: 0,
		max: 50,
		step: 1,
	});
});

$('select#footer_menu_fontfamily').change(function() {
	var random = $('select.footer_menu_fontfamily').val();
	jQuery('footer nav li a').css('font-family',random);
});
$('select#footer_menu_font_weight').change(function() {
	var random = $('select.footer_menu_font_weight').val();
	jQuery('footer nav li a').css('font-weight',random);
});
$('select#footer_menu_font_style').change(function() {
	var random = $('select.footer_menu_font_style').val();
	jQuery('footer nav li a').css('font-style',random);
});
$('select#footer_menu_textdecoration').change(function() {
	var random = $('select.footer_menu_textdecoration').val();
	jQuery('footer nav li a').css('text-decoration',random);
});
$('select#footer_menu_text_transform').change(function() {
	var random = $('select.footer_menu_text_transform').val();
	jQuery('footer nav li a').css('text-transform',random);
});
$('select#footer_menu_small_caps').change(function() {
	var random = $('select.footer_menu_small_caps').val();
	jQuery('footer nav li a').css('font-variant',random);
});
$('select#footer_menu_bordertop_type').change(function() {
	var random = $('select.footer_menu_bordertop_type').val();
	jQuery('footer nav li a').css('border-top-style',random);
});
$('select#footer_menu_borderbottom_type').change(function() {
	var random = $('select.footer_menu_borderbottom_type').val();
	jQuery('footer nav li a').css('border-bottom-style',random);
});

var margin = parseInt($("footer nav ul li").css('margin-left')); //Sets the slider handle to start at the current value
$("#footer_menu_gap").text(margin);
$("#sliderfooter_menu_gap").slider({
	value: margin, //Sets the slider handle to start at the current value
	min: 0,
	max: 100,
	step: 1,
	slide: function(event, ui) { //This is where we can perform actions based on the slide
		$("footer nav ul li").css("margin-left", ui.value + "px"); //ui.value is the current value of the slider
		$("#footer_menu_gap").attr("value", ui.value); //This adds that value into the span in the tabs below, so you can see the actual value
		jQuery('footer nav ul li').css('margin-right',ui.value);
	}
});
var margin = parseInt($("footer p").css('margin-left')); //Sets the slider handle to start at the current value
$("#footer_copyright_horizontalposition").text(margin);
$("#sliderfooter_copyright_horizontalposition").slider({
	value: margin, //Sets the slider handle to start at the current value
	min:0,
	max:1200,
	step:1,
	slide:function(event,ui) {
		$("footer p").css("margin-left",ui.value+"px");
		$("#footer_copyright_horizontalposition").attr("value",ui.value);
		var footer_menu_alignment=$('[name=footer_menu_alignment]').val();
		if(footer_menu_alignment=='left') {jQuery('footer p').css('margin-left',ui.value);}
		else if(footer_menu_alignment=='right') {
			jQuery('footer p').css('margin-right',ui.value);
			jQuery('footer p').css('margin-left',0);
		}
		else if(footer_menu_alignment=='center') {
			jQuery('footer p').css('margin-right',0);
			jQuery('footer p').css('margin-left',0);
			jQuery('footer p').css('text-align','center');
		}
	}
});
var number = parseInt($("footer p").css('margin-top'));
$("#footer_copyright_verticalposition").text(number);
$("#sliderfooter_copyright_verticalposition").slider({
	value: number,
	min: 0,
	max: 400,
	step: 1,
	slide: function(event, ui) {
		$("footer p").css("margin-top", ui.value + "px");
		$("#footer_copyright_verticalposition").attr("value", ui.value);
	}
});$('input#footer_copyright_verticalposition').change(function() {
	var random = $('input#footer_copyright_verticalposition').val();
	$('footer p').css('margin-top',random+'px');
	$("#sliderfooter_copyright_verticalposition").slider({
		value: random,
		min: 0,
		max: 400,
		step: 1,
	});
});
$('select#footer_copyright_display').change(function() {
	var random = $('select.footer_copyright_display').val();
	jQuery('footer p').css('display',random);
});
$('select#footer_copyright_position_centered').change(function() {
	var alignment = $('select#footer_copyright_position_centered').val();
	jQuery('footer p').css('text-align',alignment);
	jQuery('footer p').css('width','100%');
});
var number = parseInt($("footer p").css('font-size'));
$("#footer_copyright_fontsize").text(number);
$("#sliderfooter_copyright_fontsize").slider({
	value: number,
	min: 6,
	max: 80,
	step: 1,
	slide: function(event, ui) {
		$("footer p").css("font-size", ui.value + "px");
		$("#footer_copyright_fontsize").attr("value", ui.value);
	}
});$('input#footer_copyright_fontsize').change(function() {
	var random = $('input#footer_copyright_fontsize').val();
	$('footer p').css('font-size',random+'px');
	$("#sliderfooter_copyright_fontsize").slider({
		value: random,
		min: 6,
		max: 80,
		step: 1,
	});
});
var number = parseInt($("footer p").css('line-height'));
$("#footer_copyright_line_height").text(number);
$("#sliderfooter_copyright_line_height").slider({
	value: number,
	min: 6,
	max: 80,
	step: 1,
	slide: function(event, ui) {
		$("footer p").css("line-height", ui.value + "px");
		$("#footer_copyright_line_height").attr("value", ui.value);
	}
});$('input#footer_copyright_line_height').change(function() {
	var random = $('input#footer_copyright_line_height').val();
	$('footer p').css('line-height',random+'px');
	$("#sliderfooter_copyright_line_height").slider({
		value: random,
		min: 6,
		max: 80,
		step: 1,
	});
});
$('#footer_copyright_textcolour').change(function() {
	var colour = $('#footer_copyright_textcolour').val();
	jQuery('footer p').css('color',colour);
});
colour = $('.footer_copyright_shadow_colour').val();
xcoord = $('.footer_copyright_shadow_x_coordinate').val();
ycoord = $('.footer_copyright_shadow_y_coordinate').val();
blur = $('.footer_copyright_shadow_blur_radius').val();
$("#sliderfooter_copyright_shadow_blur_radius").slider({
	value: blur, //Sets the slider handle to start at the current value
	min: 0,
	max: 50,

	step: 1,
	slide: function(event, ui) { //This is where we can perform actions based on the slide
		$("#footer_copyright_shadow_blur_radius").attr("value", ui.value); //This adds that value into the span in the tabs below, so you can see the actual value
		colour = $('.footer_copyright_shadow_colour').val();
		xcoord = $('.footer_copyright_shadow_x_coordinate').val();
		ycoord = $('.footer_copyright_shadow_y_coordinate').val();
		jQuery('footer p').css('textShadow',colour+' '+xcoord+'px '+ycoord+'px '+ui.value+'px');
	}
});
$("#sliderfooter_copyright_shadow_x_coordinate").slider({
	value: xcoord, //Sets the slider handle to start at the current value
	min: -10,
	max: 10,
	step: 1,
	slide: function(event, ui) { //This is where we can perform actions based on the slide
		$("#footer_copyright_shadow_x_coordinate").attr("value", ui.value); //This adds that value into the span in the tabs below, so you can see the actual value
		colour = $('#footer_copyright_shadow_colour').val();
		ycoord = $('#footer_copyright_shadow_y_coordinate').val();
		blur = $('#footer_copyright_shadow_blur_radius').val();
		jQuery('footer p').css('textShadow',colour+' '+ui.value+'px '+ycoord+'px '+blur+'px');
	}
});
$("#sliderfooter_copyright_shadow_y_coordinate").slider({
	value: ycoord, //Sets the slider handle to start at the current value
	min: -10,
	max: 10,
	step: 1,
	slide: function(event, ui) { //This is where we can perform actions based on the slide
		$("#footer_copyright_shadow_y_coordinate").attr("value", ui.value); //This adds that value into the span in the tabs below, so you can see the actual value
		colour = $('#footer_copyright_shadow_colour').val();
		xcoord = $('#footer_copyright_shadow_x_coordinate').val();
		blur = $('#footer_copyright_shadow_blur_radius').val();
		jQuery('footer p').css('textShadow',colour+' '+xcoord+'px '+ui.value+'px '+blur+'px');
	}
});
$('#footer_copyright_shadow_colour').change(function() {
	colour = $('#footer_copyright_shadow_colour').val();
	xcoord = $('#footer_copyright_shadow_x_coordinate').val();
	ycoord = $('#footer_copyright_shadow_y_coordinate').val();
	blur = $('#footer_copyright_shadow_blur_radius').val();
	jQuery('footer p').css('textShadow',colour+' '+xcoord+'px '+ycoord+'px '+blur+'px');
});

var number = parseInt($("footer p").css('border-top-width'));
$("#footer_copyright_bordertop_width").text(number);
$("#sliderfooter_copyright_bordertop_width").slider({
	value: number,
	min: 0,
	max: 10,
	step: 1,
	slide: function(event, ui) {
		$("footer p").css("border-top-width", ui.value + "px");
		$("#footer_copyright_bordertop_width").attr("value", ui.value);
	}
});$('input#footer_copyright_bordertop_width').change(function() {
	var random = $('input#footer_copyright_bordertop_width').val();
	$('footer p').css('border-top-width',random+'px');
	$("#sliderfooter_copyright_bordertop_width").slider({
		value: random,
		min: 0,
		max: 10,
		step: 1,
	});
});
var number = parseInt($("footer p").css('border-bottom-width'));
$("#footer_copyright_borderbottom_width").text(number);
$("#sliderfooter_copyright_borderbottom_width").slider({
	value: number,
	min: 0,
	max: 10,
	step: 1,
	slide: function(event, ui) {
		$("footer p").css("border-bottom-width", ui.value + "px");
		$("#footer_copyright_borderbottom_width").attr("value", ui.value);
	}
});$('input#footer_copyright_borderbottom_width').change(function() {
	var random = $('input#footer_copyright_borderbottom_width').val();
	$('footer p').css('border-bottom-width',random+'px');
	$("#sliderfooter_copyright_borderbottom_width").slider({
		value: random,
		min: 0,
		max: 10,
		step: 1,
	});
});

var number = parseInt($("footer p").css('margin-top'));
$("#footer_copyright_margin_top").text(number);
$("#sliderfooter_copyright_margin_top").slider({
	value: number,
	min: 0,
	max: 50,
	step: 1,
	slide: function(event, ui) {
		$("footer p").css("margin-top", ui.value + "px");
		$("#footer_copyright_margin_top").attr("value", ui.value);
	}
});$('input#footer_copyright_margin_top').change(function() {
	var random = $('input#footer_copyright_margin_top').val();
	$('footer p').css('margin-top',random+'px');
	$("#sliderfooter_copyright_margin_top").slider({
		value: random,
		min: 0,
		max: 50,
		step: 1,
	});
});
var number = parseInt($("footer p").css('margin-right'));
$("#footer_copyright_margin_right").text(number);
$("#sliderfooter_copyright_margin_right").slider({
	value: number,
	min: 0,
	max: 50,
	step: 1,
	slide: function(event, ui) {
		$("footer p").css("margin-right", ui.value + "px");
		$("#footer_copyright_margin_right").attr("value", ui.value);
	}
});$('input#footer_copyright_margin_right').change(function() {
	var random = $('input#footer_copyright_margin_right').val();
	$('footer p').css('margin-right',random+'px');
	$("#sliderfooter_copyright_margin_right").slider({
		value: random,
		min: 0,
		max: 50,
		step: 1,
	});
});
var number = parseInt($("footer p").css('margin-bottom'));
$("#footer_copyright_margin_bottom").text(number);
$("#sliderfooter_copyright_margin_bottom").slider({
	value: number,
	min: 0,
	max: 50,
	step: 1,
	slide: function(event, ui) {
		$("footer p").css("margin-bottom", ui.value + "px");
		$("#footer_copyright_margin_bottom").attr("value", ui.value);
	}
});$('input#footer_copyright_margin_bottom').change(function() {
	var random = $('input#footer_copyright_margin_bottom').val();
	$('footer p').css('margin-bottom',random+'px');
	$("#sliderfooter_copyright_margin_bottom").slider({
		value: random,
		min: 0,
		max: 50,
		step: 1,
	});
});
var number = parseInt($("footer p").css('margin-left'));
$("#footer_copyright_margin_left").text(number);
$("#sliderfooter_copyright_margin_left").slider({
	value: number,
	min: 0,
	max: 50,
	step: 1,
	slide: function(event, ui) {
		$("footer p").css("margin-left", ui.value + "px");
		$("#footer_copyright_margin_left").attr("value", ui.value);
	}
});$('input#footer_copyright_margin_left').change(function() {
	var random = $('input#footer_copyright_margin_left').val();
	$('footer p').css('margin-left',random+'px');
	$("#sliderfooter_copyright_margin_left").slider({
		value: random,
		min: 0,
		max: 50,
		step: 1,
	});
});

var number = parseInt($("footer p").css('padding-top'));
$("#footer_copyright_padding_top").text(number);
$("#sliderfooter_copyright_padding_top").slider({
	value: number,
	min: 0,
	max: 50,
	step: 1,
	slide: function(event, ui) {
		$("footer p").css("padding-top", ui.value + "px");
		$("#footer_copyright_padding_top").attr("value", ui.value);
	}
});$('input#footer_copyright_padding_top').change(function() {
	var random = $('input#footer_copyright_padding_top').val();
	$('footer p').css('padding-top',random+'px');
	$("#sliderfooter_copyright_padding_top").slider({
		value: random,
		min: 0,
		max: 50,
		step: 1,
	});
});
var number = parseInt($("footer p").css('padding-right'));
$("#footer_copyright_padding_right").text(number);
$("#sliderfooter_copyright_padding_right").slider({
	value: number,
	min: 0,
	max: 50,
	step: 1,
	slide: function(event, ui) {
		$("footer p").css("padding-right", ui.value + "px");
		$("#footer_copyright_padding_right").attr("value", ui.value);
	}
});$('input#footer_copyright_padding_right').change(function() {
	var random = $('input#footer_copyright_padding_right').val();
	$('footer p').css('padding-right',random+'px');
	$("#sliderfooter_copyright_padding_right").slider({
		value: random,
		min: 0,
		max: 50,
		step: 1,
	});
});
var number = parseInt($("footer p").css('padding-bottom'));
$("#footer_copyright_padding_bottom").text(number);
$("#sliderfooter_copyright_padding_bottom").slider({
	value: number,
	min: 0,
	max: 50,
	step: 1,
	slide: function(event, ui) {
		$("footer p").css("padding-bottom", ui.value + "px");
		$("#footer_copyright_padding_bottom").attr("value", ui.value);
	}
});$('input#footer_copyright_padding_bottom').change(function() {
	var random = $('input#footer_copyright_padding_bottom').val();
	$('footer p').css('padding-bottom',random+'px');
	$("#sliderfooter_copyright_padding_bottom").slider({
		value: random,
		min: 0,
		max: 50,
		step: 1,
	});
});
var number = parseInt($("footer p").css('padding-left'));
$("#footer_copyright_padding_left").text(number);
$("#sliderfooter_copyright_padding_left").slider({
	value: number,
	min: 0,
	max: 50,
	step: 1,
	slide: function(event, ui) {
		$("footer p").css("padding-left", ui.value + "px");
		$("#footer_copyright_padding_left").attr("value", ui.value);
	}
});$('input#footer_copyright_padding_left').change(function() {
	var random = $('input#footer_copyright_padding_left').val();
	$('footer p').css('padding-left',random+'px');
	$("#sliderfooter_copyright_padding_left").slider({
		value: random,
		min: 0,
		max: 50,
		step: 1,
	});
});

$('select#footer_copyright_fontfamily').change(function() {
	var random = $('select.footer_copyright_fontfamily').val();
	jQuery('footer p').css('font-family',random);
});
$('select#footer_copyright_font_weight').change(function() {
	var random = $('select.footer_copyright_font_weight').val();
	jQuery('footer p').css('font-weight',random);
});
$('select#footer_copyright_font_style').change(function() {
	var random = $('select.footer_copyright_font_style').val();
	jQuery('footer p').css('font-style',random);
});
$('select#footer_copyright_textdecoration').change(function() {
	var random = $('select.footer_copyright_textdecoration').val();
	jQuery('footer p').css('text-decoration',random);
});
$('select#footer_copyright_text_transform').change(function() {
	var random = $('select.footer_copyright_text_transform').val();
	jQuery('footer p').css('text-transform',random);
});
$('select#footer_copyright_small_caps').change(function() {
	var random = $('select.footer_copyright_small_caps').val();
	jQuery('footer p').css('font-variant',random);
});
$('select#footer_copyright_bordertop_type').change(function() {
	var random = $('select.footer_copyright_bordertop_type').val();
	jQuery('footer p').css('border-top-style',random);
});
$('select#footer_copyright_borderbottom_type').change(function() {
	var random = $('select.footer_copyright_borderbottom_type').val();
	jQuery('footer p').css('border-bottom-style',random);
});

var number = parseInt($(".wrapper aside h3").css('font-size'));
$("#sidebar_heading_fontsize").text(number);
$("#slidersidebar_heading_fontsize").slider({
	value: number,
	min: 6,
	max: 80,
	step: 1,
	slide: function(event, ui) {
		$(".wrapper aside h3").css("font-size", ui.value + "px");
		$("#sidebar_heading_fontsize").attr("value", ui.value);
	}
});$('input#sidebar_heading_fontsize').change(function() {
	var random = $('input#sidebar_heading_fontsize').val();
	$('.wrapper aside h3').css('font-size',random+'px');
	$("#slidersidebar_heading_fontsize").slider({
		value: random,
		min: 6,
		max: 80,
		step: 1,
	});
});
var number = parseInt($(".wrapper aside h3").css('line-height'));
$("#sidebar_heading_line_height").text(number);
$("#slidersidebar_heading_line_height").slider({
	value: number,
	min: 6,
	max: 80,
	step: 1,
	slide: function(event, ui) {
		$(".wrapper aside h3").css("line-height", ui.value + "px");
		$("#sidebar_heading_line_height").attr("value", ui.value);
	}
});$('input#sidebar_heading_line_height').change(function() {
	var random = $('input#sidebar_heading_line_height').val();
	$('.wrapper aside h3').css('line-height',random+'px');
	$("#slidersidebar_heading_line_height").slider({
		value: random,
		min: 6,
		max: 80,
		step: 1,
	});
});
$('#sidebar_heading_textcolour').change(function() {
	var colour = $('#sidebar_heading_textcolour').val();
	jQuery('.wrapper aside h3').css('color',colour);
});
colour = $('.sidebar_heading_shadow_colour').val();
xcoord = $('.sidebar_heading_shadow_x_coordinate').val();
ycoord = $('.sidebar_heading_shadow_y_coordinate').val();
blur = $('.sidebar_heading_shadow_blur_radius').val();
$("#slidersidebar_heading_shadow_blur_radius").slider({
	value: blur, //Sets the slider handle to start at the current value
	min: 0,
	max: 50,

	step: 1,
	slide: function(event, ui) { //This is where we can perform actions based on the slide
		$("#sidebar_heading_shadow_blur_radius").attr("value", ui.value); //This adds that value into the span in the tabs below, so you can see the actual value
		colour = $('.sidebar_heading_shadow_colour').val();
		xcoord = $('.sidebar_heading_shadow_x_coordinate').val();
		ycoord = $('.sidebar_heading_shadow_y_coordinate').val();
		jQuery('.wrapper aside h3').css('textShadow',colour+' '+xcoord+'px '+ycoord+'px '+ui.value+'px');
	}
});
$("#slidersidebar_heading_shadow_x_coordinate").slider({
	value: xcoord, //Sets the slider handle to start at the current value
	min: -10,
	max: 10,
	step: 1,
	slide: function(event, ui) { //This is where we can perform actions based on the slide
		$("#sidebar_heading_shadow_x_coordinate").attr("value", ui.value); //This adds that value into the span in the tabs below, so you can see the actual value
		colour = $('#sidebar_heading_shadow_colour').val();
		ycoord = $('#sidebar_heading_shadow_y_coordinate').val();
		blur = $('#sidebar_heading_shadow_blur_radius').val();
		jQuery('.wrapper aside h3').css('textShadow',colour+' '+ui.value+'px '+ycoord+'px '+blur+'px');
	}
});
$("#slidersidebar_heading_shadow_y_coordinate").slider({
	value: ycoord, //Sets the slider handle to start at the current value
	min: -10,
	max: 10,
	step: 1,
	slide: function(event, ui) { //This is where we can perform actions based on the slide
		$("#sidebar_heading_shadow_y_coordinate").attr("value", ui.value); //This adds that value into the span in the tabs below, so you can see the actual value
		colour = $('#sidebar_heading_shadow_colour').val();
		xcoord = $('#sidebar_heading_shadow_x_coordinate').val();
		blur = $('#sidebar_heading_shadow_blur_radius').val();
		jQuery('.wrapper aside h3').css('textShadow',colour+' '+xcoord+'px '+ui.value+'px '+blur+'px');
	}
});
$('#sidebar_heading_shadow_colour').change(function() {
	colour = $('#sidebar_heading_shadow_colour').val();
	xcoord = $('#sidebar_heading_shadow_x_coordinate').val();
	ycoord = $('#sidebar_heading_shadow_y_coordinate').val();
	blur = $('#sidebar_heading_shadow_blur_radius').val();
	jQuery('.wrapper aside h3').css('textShadow',colour+' '+xcoord+'px '+ycoord+'px '+blur+'px');
});

var number = parseInt($(".wrapper aside h3").css('border-top-width'));
$("#sidebar_heading_bordertop_width").text(number);
$("#slidersidebar_heading_bordertop_width").slider({
	value: number,
	min: 0,
	max: 10,
	step: 1,
	slide: function(event, ui) {
		$(".wrapper aside h3").css("border-top-width", ui.value + "px");
		$("#sidebar_heading_bordertop_width").attr("value", ui.value);
	}
});$('input#sidebar_heading_bordertop_width').change(function() {
	var random = $('input#sidebar_heading_bordertop_width').val();
	$('.wrapper aside h3').css('border-top-width',random+'px');
	$("#slidersidebar_heading_bordertop_width").slider({
		value: random,
		min: 0,
		max: 10,
		step: 1,
	});
});
var number = parseInt($(".wrapper aside h3").css('border-bottom-width'));
$("#sidebar_heading_borderbottom_width").text(number);
$("#slidersidebar_heading_borderbottom_width").slider({
	value: number,
	min: 0,
	max: 10,
	step: 1,
	slide: function(event, ui) {
		$(".wrapper aside h3").css("border-bottom-width", ui.value + "px");
		$("#sidebar_heading_borderbottom_width").attr("value", ui.value);
	}
});$('input#sidebar_heading_borderbottom_width').change(function() {
	var random = $('input#sidebar_heading_borderbottom_width').val();
	$('.wrapper aside h3').css('border-bottom-width',random+'px');
	$("#slidersidebar_heading_borderbottom_width").slider({
		value: random,
		min: 0,
		max: 10,
		step: 1,
	});
});

var number = parseInt($(".wrapper aside h3").css('margin-top'));
$("#sidebar_heading_margin_top").text(number);
$("#slidersidebar_heading_margin_top").slider({
	value: number,
	min: 0,
	max: 50,
	step: 1,
	slide: function(event, ui) {
		$(".wrapper aside h3").css("margin-top", ui.value + "px");
		$("#sidebar_heading_margin_top").attr("value", ui.value);
	}
});$('input#sidebar_heading_margin_top').change(function() {
	var random = $('input#sidebar_heading_margin_top').val();
	$('.wrapper aside h3').css('margin-top',random+'px');
	$("#slidersidebar_heading_margin_top").slider({
		value: random,
		min: 0,
		max: 50,
		step: 1,
	});
});
var number = parseInt($(".wrapper aside h3").css('margin-right'));
$("#sidebar_heading_margin_right").text(number);
$("#slidersidebar_heading_margin_right").slider({
	value: number,
	min: 0,
	max: 50,
	step: 1,
	slide: function(event, ui) {
		$(".wrapper aside h3").css("margin-right", ui.value + "px");
		$("#sidebar_heading_margin_right").attr("value", ui.value);
	}
});$('input#sidebar_heading_margin_right').change(function() {
	var random = $('input#sidebar_heading_margin_right').val();
	$('.wrapper aside h3').css('margin-right',random+'px');
	$("#slidersidebar_heading_margin_right").slider({
		value: random,
		min: 0,
		max: 50,
		step: 1,
	});
});
var number = parseInt($(".wrapper aside h3").css('margin-bottom'));
$("#sidebar_heading_margin_bottom").text(number);
$("#slidersidebar_heading_margin_bottom").slider({
	value: number,
	min: 0,
	max: 50,
	step: 1,
	slide: function(event, ui) {
		$(".wrapper aside h3").css("margin-bottom", ui.value + "px");
		$("#sidebar_heading_margin_bottom").attr("value", ui.value);
	}
});$('input#sidebar_heading_margin_bottom').change(function() {
	var random = $('input#sidebar_heading_margin_bottom').val();
	$('.wrapper aside h3').css('margin-bottom',random+'px');
	$("#slidersidebar_heading_margin_bottom").slider({
		value: random,
		min: 0,
		max: 50,
		step: 1,
	});
});
var number = parseInt($(".wrapper aside h3").css('margin-left'));
$("#sidebar_heading_margin_left").text(number);
$("#slidersidebar_heading_margin_left").slider({
	value: number,
	min: 0,
	max: 50,
	step: 1,
	slide: function(event, ui) {
		$(".wrapper aside h3").css("margin-left", ui.value + "px");
		$("#sidebar_heading_margin_left").attr("value", ui.value);
	}
});$('input#sidebar_heading_margin_left').change(function() {
	var random = $('input#sidebar_heading_margin_left').val();
	$('.wrapper aside h3').css('margin-left',random+'px');
	$("#slidersidebar_heading_margin_left").slider({
		value: random,
		min: 0,
		max: 50,
		step: 1,
	});
});

var number = parseInt($(".wrapper aside h3").css('padding-top'));
$("#sidebar_heading_padding_top").text(number);
$("#slidersidebar_heading_padding_top").slider({
	value: number,
	min: 0,
	max: 50,
	step: 1,
	slide: function(event, ui) {
		$(".wrapper aside h3").css("padding-top", ui.value + "px");
		$("#sidebar_heading_padding_top").attr("value", ui.value);
	}
});$('input#sidebar_heading_padding_top').change(function() {
	var random = $('input#sidebar_heading_padding_top').val();
	$('.wrapper aside h3').css('padding-top',random+'px');
	$("#slidersidebar_heading_padding_top").slider({
		value: random,
		min: 0,
		max: 50,
		step: 1,
	});
});
var number = parseInt($(".wrapper aside h3").css('padding-right'));
$("#sidebar_heading_padding_right").text(number);
$("#slidersidebar_heading_padding_right").slider({
	value: number,
	min: 0,
	max: 50,
	step: 1,
	slide: function(event, ui) {
		$(".wrapper aside h3").css("padding-right", ui.value + "px");
		$("#sidebar_heading_padding_right").attr("value", ui.value);
	}
});$('input#sidebar_heading_padding_right').change(function() {
	var random = $('input#sidebar_heading_padding_right').val();
	$('.wrapper aside h3').css('padding-right',random+'px');
	$("#slidersidebar_heading_padding_right").slider({
		value: random,
		min: 0,
		max: 50,
		step: 1,
	});
});
var number = parseInt($(".wrapper aside h3").css('padding-bottom'));
$("#sidebar_heading_padding_bottom").text(number);
$("#slidersidebar_heading_padding_bottom").slider({
	value: number,
	min: 0,
	max: 50,
	step: 1,
	slide: function(event, ui) {
		$(".wrapper aside h3").css("padding-bottom", ui.value + "px");
		$("#sidebar_heading_padding_bottom").attr("value", ui.value);
	}
});$('input#sidebar_heading_padding_bottom').change(function() {
	var random = $('input#sidebar_heading_padding_bottom').val();
	$('.wrapper aside h3').css('padding-bottom',random+'px');
	$("#slidersidebar_heading_padding_bottom").slider({
		value: random,
		min: 0,
		max: 50,
		step: 1,
	});
});
var number = parseInt($(".wrapper aside h3").css('padding-left'));
$("#sidebar_heading_padding_left").text(number);
$("#slidersidebar_heading_padding_left").slider({
	value: number,
	min: 0,
	max: 50,
	step: 1,
	slide: function(event, ui) {
		$(".wrapper aside h3").css("padding-left", ui.value + "px");
		$("#sidebar_heading_padding_left").attr("value", ui.value);
	}
});$('input#sidebar_heading_padding_left').change(function() {
	var random = $('input#sidebar_heading_padding_left').val();
	$('.wrapper aside h3').css('padding-left',random+'px');
	$("#slidersidebar_heading_padding_left").slider({
		value: random,
		min: 0,
		max: 50,
		step: 1,
	});
});

$('select#sidebar_heading_fontfamily').change(function() {
	var random = $('select.sidebar_heading_fontfamily').val();
	jQuery('.wrapper aside h3').css('font-family',random);
});
$('select#sidebar_heading_font_weight').change(function() {
	var random = $('select.sidebar_heading_font_weight').val();
	jQuery('.wrapper aside h3').css('font-weight',random);
});
$('select#sidebar_heading_font_style').change(function() {
	var random = $('select.sidebar_heading_font_style').val();
	jQuery('.wrapper aside h3').css('font-style',random);
});
$('select#sidebar_heading_textdecoration').change(function() {
	var random = $('select.sidebar_heading_textdecoration').val();
	jQuery('.wrapper aside h3').css('text-decoration',random);
});
$('select#sidebar_heading_text_transform').change(function() {
	var random = $('select.sidebar_heading_text_transform').val();
	jQuery('.wrapper aside h3').css('text-transform',random);
});
$('select#sidebar_heading_small_caps').change(function() {
	var random = $('select.sidebar_heading_small_caps').val();
	jQuery('.wrapper aside h3').css('font-variant',random);
});
$('select#sidebar_heading_bordertop_type').change(function() {
	var random = $('select.sidebar_heading_bordertop_type').val();
	jQuery('.wrapper aside h3').css('border-top-style',random);
});
$('select#sidebar_heading_borderbottom_type').change(function() {
	var random = $('select.sidebar_heading_borderbottom_type').val();
	jQuery('.wrapper aside h3').css('border-bottom-style',random);
});

var number = parseInt($(".wrapper aside li").css('font-size'));
$("#sidebar_list_fontsize").text(number);
$("#slidersidebar_list_fontsize").slider({
	value: number,
	min: 6,
	max: 80,
	step: 1,
	slide: function(event, ui) {
		$(".wrapper aside li").css("font-size", ui.value + "px");
		$("#sidebar_list_fontsize").attr("value", ui.value);
	}
});$('input#sidebar_list_fontsize').change(function() {
	var random = $('input#sidebar_list_fontsize').val();
	$('.wrapper aside li').css('font-size',random+'px');
	$("#slidersidebar_list_fontsize").slider({
		value: random,
		min: 6,
		max: 80,
		step: 1,
	});
});
var number = parseInt($(".wrapper aside li").css('line-height'));
$("#sidebar_list_line_height").text(number);
$("#slidersidebar_list_line_height").slider({
	value: number,
	min: 6,
	max: 80,
	step: 1,
	slide: function(event, ui) {
		$(".wrapper aside li").css("line-height", ui.value + "px");
		$("#sidebar_list_line_height").attr("value", ui.value);
	}
});$('input#sidebar_list_line_height').change(function() {
	var random = $('input#sidebar_list_line_height').val();
	$('.wrapper aside li').css('line-height',random+'px');
	$("#slidersidebar_list_line_height").slider({
		value: random,
		min: 6,
		max: 80,
		step: 1,
	});
});
$('#sidebar_list_textcolour').change(function() {
	var colour = $('#sidebar_list_textcolour').val();
	jQuery('.wrapper aside li').css('color',colour);
});
colour = $('.sidebar_list_shadow_colour').val();
xcoord = $('.sidebar_list_shadow_x_coordinate').val();
ycoord = $('.sidebar_list_shadow_y_coordinate').val();
blur = $('.sidebar_list_shadow_blur_radius').val();
$("#slidersidebar_list_shadow_blur_radius").slider({
	value: blur, //Sets the slider handle to start at the current value
	min: 0,
	max: 50,

	step: 1,
	slide: function(event, ui) { //This is where we can perform actions based on the slide
		$("#sidebar_list_shadow_blur_radius").attr("value", ui.value); //This adds that value into the span in the tabs below, so you can see the actual value
		colour = $('.sidebar_list_shadow_colour').val();
		xcoord = $('.sidebar_list_shadow_x_coordinate').val();
		ycoord = $('.sidebar_list_shadow_y_coordinate').val();
		jQuery('.wrapper aside li').css('textShadow',colour+' '+xcoord+'px '+ycoord+'px '+ui.value+'px');
	}
});
$("#slidersidebar_list_shadow_x_coordinate").slider({
	value: xcoord, //Sets the slider handle to start at the current value
	min: -10,
	max: 10,
	step: 1,
	slide: function(event, ui) { //This is where we can perform actions based on the slide
		$("#sidebar_list_shadow_x_coordinate").attr("value", ui.value); //This adds that value into the span in the tabs below, so you can see the actual value
		colour = $('#sidebar_list_shadow_colour').val();
		ycoord = $('#sidebar_list_shadow_y_coordinate').val();
		blur = $('#sidebar_list_shadow_blur_radius').val();
		jQuery('.wrapper aside li').css('textShadow',colour+' '+ui.value+'px '+ycoord+'px '+blur+'px');
	}
});
$("#slidersidebar_list_shadow_y_coordinate").slider({
	value: ycoord, //Sets the slider handle to start at the current value
	min: -10,
	max: 10,
	step: 1,
	slide: function(event, ui) { //This is where we can perform actions based on the slide
		$("#sidebar_list_shadow_y_coordinate").attr("value", ui.value); //This adds that value into the span in the tabs below, so you can see the actual value
		colour = $('#sidebar_list_shadow_colour').val();
		xcoord = $('#sidebar_list_shadow_x_coordinate').val();
		blur = $('#sidebar_list_shadow_blur_radius').val();
		jQuery('.wrapper aside li').css('textShadow',colour+' '+xcoord+'px '+ui.value+'px '+blur+'px');
	}
});
$('#sidebar_list_shadow_colour').change(function() {
	colour = $('#sidebar_list_shadow_colour').val();
	xcoord = $('#sidebar_list_shadow_x_coordinate').val();
	ycoord = $('#sidebar_list_shadow_y_coordinate').val();
	blur = $('#sidebar_list_shadow_blur_radius').val();
	jQuery('.wrapper aside li').css('textShadow',colour+' '+xcoord+'px '+ycoord+'px '+blur+'px');
});

var number = parseInt($(".wrapper aside li").css('border-top-width'));
$("#sidebar_list_bordertop_width").text(number);
$("#slidersidebar_list_bordertop_width").slider({
	value: number,
	min: 0,
	max: 10,
	step: 1,
	slide: function(event, ui) {
		$(".wrapper aside li").css("border-top-width", ui.value + "px");
		$("#sidebar_list_bordertop_width").attr("value", ui.value);
	}
});$('input#sidebar_list_bordertop_width').change(function() {
	var random = $('input#sidebar_list_bordertop_width').val();
	$('.wrapper aside li').css('border-top-width',random+'px');
	$("#slidersidebar_list_bordertop_width").slider({
		value: random,
		min: 0,
		max: 10,
		step: 1,
	});
});
var number = parseInt($(".wrapper aside li").css('border-bottom-width'));
$("#sidebar_list_borderbottom_width").text(number);
$("#slidersidebar_list_borderbottom_width").slider({
	value: number,
	min: 0,
	max: 10,
	step: 1,
	slide: function(event, ui) {
		$(".wrapper aside li").css("border-bottom-width", ui.value + "px");
		$("#sidebar_list_borderbottom_width").attr("value", ui.value);
	}
});$('input#sidebar_list_borderbottom_width').change(function() {
	var random = $('input#sidebar_list_borderbottom_width').val();
	$('.wrapper aside li').css('border-bottom-width',random+'px');
	$("#slidersidebar_list_borderbottom_width").slider({
		value: random,
		min: 0,
		max: 10,
		step: 1,
	});
});

var number = parseInt($(".wrapper aside li").css('margin-top'));
$("#sidebar_list_margin_top").text(number);
$("#slidersidebar_list_margin_top").slider({
	value: number,
	min: 0,
	max: 50,
	step: 1,
	slide: function(event, ui) {
		$(".wrapper aside li").css("margin-top", ui.value + "px");
		$("#sidebar_list_margin_top").attr("value", ui.value);
	}
});$('input#sidebar_list_margin_top').change(function() {
	var random = $('input#sidebar_list_margin_top').val();
	$('.wrapper aside li').css('margin-top',random+'px');
	$("#slidersidebar_list_margin_top").slider({
		value: random,
		min: 0,
		max: 50,
		step: 1,
	});
});
var number = parseInt($(".wrapper aside li").css('margin-right'));
$("#sidebar_list_margin_right").text(number);
$("#slidersidebar_list_margin_right").slider({
	value: number,
	min: 0,
	max: 50,
	step: 1,
	slide: function(event, ui) {
		$(".wrapper aside li").css("margin-right", ui.value + "px");
		$("#sidebar_list_margin_right").attr("value", ui.value);
	}
});$('input#sidebar_list_margin_right').change(function() {
	var random = $('input#sidebar_list_margin_right').val();
	$('.wrapper aside li').css('margin-right',random+'px');
	$("#slidersidebar_list_margin_right").slider({
		value: random,
		min: 0,
		max: 50,
		step: 1,
	});
});
var number = parseInt($(".wrapper aside li").css('margin-bottom'));
$("#sidebar_list_margin_bottom").text(number);
$("#slidersidebar_list_margin_bottom").slider({
	value: number,
	min: 0,
	max: 50,
	step: 1,
	slide: function(event, ui) {
		$(".wrapper aside li").css("margin-bottom", ui.value + "px");
		$("#sidebar_list_margin_bottom").attr("value", ui.value);
	}
});$('input#sidebar_list_margin_bottom').change(function() {
	var random = $('input#sidebar_list_margin_bottom').val();
	$('.wrapper aside li').css('margin-bottom',random+'px');
	$("#slidersidebar_list_margin_bottom").slider({
		value: random,
		min: 0,
		max: 50,
		step: 1,
	});
});
var number = parseInt($(".wrapper aside li").css('margin-left'));
$("#sidebar_list_margin_left").text(number);
$("#slidersidebar_list_margin_left").slider({
	value: number,
	min: 0,
	max: 50,
	step: 1,
	slide: function(event, ui) {
		$(".wrapper aside li").css("margin-left", ui.value + "px");
		$("#sidebar_list_margin_left").attr("value", ui.value);
	}
});$('input#sidebar_list_margin_left').change(function() {
	var random = $('input#sidebar_list_margin_left').val();
	$('.wrapper aside li').css('margin-left',random+'px');
	$("#slidersidebar_list_margin_left").slider({
		value: random,
		min: 0,
		max: 50,
		step: 1,
	});
});

var number = parseInt($(".wrapper aside li").css('padding-top'));
$("#sidebar_list_padding_top").text(number);
$("#slidersidebar_list_padding_top").slider({
	value: number,
	min: 0,
	max: 50,
	step: 1,
	slide: function(event, ui) {
		$(".wrapper aside li").css("padding-top", ui.value + "px");
		$("#sidebar_list_padding_top").attr("value", ui.value);
	}
});$('input#sidebar_list_padding_top').change(function() {
	var random = $('input#sidebar_list_padding_top').val();
	$('.wrapper aside li').css('padding-top',random+'px');
	$("#slidersidebar_list_padding_top").slider({
		value: random,
		min: 0,
		max: 50,
		step: 1,
	});
});
var number = parseInt($(".wrapper aside li").css('padding-right'));
$("#sidebar_list_padding_right").text(number);
$("#slidersidebar_list_padding_right").slider({
	value: number,
	min: 0,
	max: 50,
	step: 1,
	slide: function(event, ui) {
		$(".wrapper aside li").css("padding-right", ui.value + "px");
		$("#sidebar_list_padding_right").attr("value", ui.value);
	}
});$('input#sidebar_list_padding_right').change(function() {
	var random = $('input#sidebar_list_padding_right').val();
	$('.wrapper aside li').css('padding-right',random+'px');
	$("#slidersidebar_list_padding_right").slider({
		value: random,
		min: 0,
		max: 50,
		step: 1,
	});
});
var number = parseInt($(".wrapper aside li").css('padding-bottom'));
$("#sidebar_list_padding_bottom").text(number);
$("#slidersidebar_list_padding_bottom").slider({
	value: number,
	min: 0,
	max: 50,
	step: 1,
	slide: function(event, ui) {
		$(".wrapper aside li").css("padding-bottom", ui.value + "px");
		$("#sidebar_list_padding_bottom").attr("value", ui.value);
	}
});$('input#sidebar_list_padding_bottom').change(function() {
	var random = $('input#sidebar_list_padding_bottom').val();
	$('.wrapper aside li').css('padding-bottom',random+'px');
	$("#slidersidebar_list_padding_bottom").slider({
		value: random,
		min: 0,
		max: 50,
		step: 1,
	});
});
var number = parseInt($(".wrapper aside li").css('padding-left'));
$("#sidebar_list_padding_left").text(number);
$("#slidersidebar_list_padding_left").slider({
	value: number,
	min: 0,
	max: 50,
	step: 1,
	slide: function(event, ui) {
		$(".wrapper aside li").css("padding-left", ui.value + "px");
		$("#sidebar_list_padding_left").attr("value", ui.value);
	}
});$('input#sidebar_list_padding_left').change(function() {
	var random = $('input#sidebar_list_padding_left').val();
	$('.wrapper aside li').css('padding-left',random+'px');
	$("#slidersidebar_list_padding_left").slider({
		value: random,
		min: 0,
		max: 50,
		step: 1,
	});
});

$('select#sidebar_list_fontfamily').change(function() {
	var random = $('select.sidebar_list_fontfamily').val();
	jQuery('.wrapper aside li').css('font-family',random);
});
$('select#sidebar_list_font_weight').change(function() {
	var random = $('select.sidebar_list_font_weight').val();
	jQuery('.wrapper aside li').css('font-weight',random);
});
$('select#sidebar_list_font_style').change(function() {
	var random = $('select.sidebar_list_font_style').val();
	jQuery('.wrapper aside li').css('font-style',random);
});
$('select#sidebar_list_textdecoration').change(function() {
	var random = $('select.sidebar_list_textdecoration').val();
	jQuery('.wrapper aside li').css('text-decoration',random);
});
$('select#sidebar_list_text_transform').change(function() {
	var random = $('select.sidebar_list_text_transform').val();
	jQuery('.wrapper aside li').css('text-transform',random);
});
$('select#sidebar_list_small_caps').change(function() {
	var random = $('select.sidebar_list_small_caps').val();
	jQuery('.wrapper aside li').css('font-variant',random);
});
$('select#sidebar_list_bordertop_type').change(function() {
	var random = $('select.sidebar_list_bordertop_type').val();
	jQuery('.wrapper aside li').css('border-top-style',random);
});
$('select#sidebar_list_borderbottom_type').change(function() {
	var random = $('select.sidebar_list_borderbottom_type').val();
	jQuery('.wrapper aside li').css('border-bottom-style',random);
});

var number = parseInt($(".wrapper aside p").css('font-size'));
$("#sidebar_paragraph_fontsize").text(number);
$("#slidersidebar_paragraph_fontsize").slider({
	value: number,
	min: 6,
	max: 80,
	step: 1,
	slide: function(event, ui) {
		$(".wrapper aside p").css("font-size", ui.value + "px");
		$("#sidebar_paragraph_fontsize").attr("value", ui.value);
	}
});$('input#sidebar_paragraph_fontsize').change(function() {
	var random = $('input#sidebar_paragraph_fontsize').val();
	$('.wrapper aside p').css('font-size',random+'px');
	$("#slidersidebar_paragraph_fontsize").slider({
		value: random,
		min: 6,
		max: 80,
		step: 1,
	});
});
var number = parseInt($(".wrapper aside p").css('line-height'));
$("#sidebar_paragraph_line_height").text(number);
$("#slidersidebar_paragraph_line_height").slider({
	value: number,
	min: 6,
	max: 80,
	step: 1,
	slide: function(event, ui) {
		$(".wrapper aside p").css("line-height", ui.value + "px");
		$("#sidebar_paragraph_line_height").attr("value", ui.value);
	}
});$('input#sidebar_paragraph_line_height').change(function() {
	var random = $('input#sidebar_paragraph_line_height').val();
	$('.wrapper aside p').css('line-height',random+'px');
	$("#slidersidebar_paragraph_line_height").slider({
		value: random,
		min: 6,
		max: 80,
		step: 1,
	});
});
$('#sidebar_paragraph_textcolour').change(function() {
	var colour = $('#sidebar_paragraph_textcolour').val();
	jQuery('.wrapper aside p').css('color',colour);
});
colour = $('.sidebar_paragraph_shadow_colour').val();
xcoord = $('.sidebar_paragraph_shadow_x_coordinate').val();
ycoord = $('.sidebar_paragraph_shadow_y_coordinate').val();
blur = $('.sidebar_paragraph_shadow_blur_radius').val();
$("#slidersidebar_paragraph_shadow_blur_radius").slider({
	value: blur, //Sets the slider handle to start at the current value
	min: 0,
	max: 50,

	step: 1,
	slide: function(event, ui) { //This is where we can perform actions based on the slide
		$("#sidebar_paragraph_shadow_blur_radius").attr("value", ui.value); //This adds that value into the span in the tabs below, so you can see the actual value
		colour = $('.sidebar_paragraph_shadow_colour').val();
		xcoord = $('.sidebar_paragraph_shadow_x_coordinate').val();
		ycoord = $('.sidebar_paragraph_shadow_y_coordinate').val();
		jQuery('.wrapper aside p').css('textShadow',colour+' '+xcoord+'px '+ycoord+'px '+ui.value+'px');
	}
});
$("#slidersidebar_paragraph_shadow_x_coordinate").slider({
	value: xcoord, //Sets the slider handle to start at the current value
	min: -10,
	max: 10,
	step: 1,
	slide: function(event, ui) { //This is where we can perform actions based on the slide
		$("#sidebar_paragraph_shadow_x_coordinate").attr("value", ui.value); //This adds that value into the span in the tabs below, so you can see the actual value
		colour = $('#sidebar_paragraph_shadow_colour').val();
		ycoord = $('#sidebar_paragraph_shadow_y_coordinate').val();
		blur = $('#sidebar_paragraph_shadow_blur_radius').val();
		jQuery('.wrapper aside p').css('textShadow',colour+' '+ui.value+'px '+ycoord+'px '+blur+'px');
	}
});
$("#slidersidebar_paragraph_shadow_y_coordinate").slider({
	value: ycoord, //Sets the slider handle to start at the current value
	min: -10,
	max: 10,
	step: 1,
	slide: function(event, ui) { //This is where we can perform actions based on the slide
		$("#sidebar_paragraph_shadow_y_coordinate").attr("value", ui.value); //This adds that value into the span in the tabs below, so you can see the actual value
		colour = $('#sidebar_paragraph_shadow_colour').val();
		xcoord = $('#sidebar_paragraph_shadow_x_coordinate').val();
		blur = $('#sidebar_paragraph_shadow_blur_radius').val();
		jQuery('.wrapper aside p').css('textShadow',colour+' '+xcoord+'px '+ui.value+'px '+blur+'px');
	}
});
$('#sidebar_paragraph_shadow_colour').change(function() {
	colour = $('#sidebar_paragraph_shadow_colour').val();
	xcoord = $('#sidebar_paragraph_shadow_x_coordinate').val();
	ycoord = $('#sidebar_paragraph_shadow_y_coordinate').val();
	blur = $('#sidebar_paragraph_shadow_blur_radius').val();
	jQuery('.wrapper aside p').css('textShadow',colour+' '+xcoord+'px '+ycoord+'px '+blur+'px');
});

var number = parseInt($(".wrapper aside p").css('border-top-width'));
$("#sidebar_paragraph_bordertop_width").text(number);
$("#slidersidebar_paragraph_bordertop_width").slider({
	value: number,
	min: 0,
	max: 10,
	step: 1,
	slide: function(event, ui) {
		$(".wrapper aside p").css("border-top-width", ui.value + "px");
		$("#sidebar_paragraph_bordertop_width").attr("value", ui.value);
	}
});$('input#sidebar_paragraph_bordertop_width').change(function() {
	var random = $('input#sidebar_paragraph_bordertop_width').val();
	$('.wrapper aside p').css('border-top-width',random+'px');
	$("#slidersidebar_paragraph_bordertop_width").slider({
		value: random,
		min: 0,
		max: 10,
		step: 1,
	});
});
var number = parseInt($(".wrapper aside p").css('border-bottom-width'));
$("#sidebar_paragraph_borderbottom_width").text(number);
$("#slidersidebar_paragraph_borderbottom_width").slider({
	value: number,
	min: 0,
	max: 10,
	step: 1,
	slide: function(event, ui) {
		$(".wrapper aside p").css("border-bottom-width", ui.value + "px");
		$("#sidebar_paragraph_borderbottom_width").attr("value", ui.value);
	}
});$('input#sidebar_paragraph_borderbottom_width').change(function() {
	var random = $('input#sidebar_paragraph_borderbottom_width').val();
	$('.wrapper aside p').css('border-bottom-width',random+'px');
	$("#slidersidebar_paragraph_borderbottom_width").slider({
		value: random,
		min: 0,
		max: 10,
		step: 1,
	});
});

var number = parseInt($(".wrapper aside p").css('margin-top'));
$("#sidebar_paragraph_margin_top").text(number);
$("#slidersidebar_paragraph_margin_top").slider({
	value: number,
	min: 0,
	max: 50,
	step: 1,
	slide: function(event, ui) {
		$(".wrapper aside p").css("margin-top", ui.value + "px");
		$("#sidebar_paragraph_margin_top").attr("value", ui.value);
	}
});$('input#sidebar_paragraph_margin_top').change(function() {
	var random = $('input#sidebar_paragraph_margin_top').val();
	$('.wrapper aside p').css('margin-top',random+'px');
	$("#slidersidebar_paragraph_margin_top").slider({
		value: random,
		min: 0,
		max: 50,
		step: 1,
	});
});
var number = parseInt($(".wrapper aside p").css('margin-right'));
$("#sidebar_paragraph_margin_right").text(number);
$("#slidersidebar_paragraph_margin_right").slider({
	value: number,
	min: 0,
	max: 50,
	step: 1,
	slide: function(event, ui) {
		$(".wrapper aside p").css("margin-right", ui.value + "px");
		$("#sidebar_paragraph_margin_right").attr("value", ui.value);
	}
});$('input#sidebar_paragraph_margin_right').change(function() {
	var random = $('input#sidebar_paragraph_margin_right').val();
	$('.wrapper aside p').css('margin-right',random+'px');
	$("#slidersidebar_paragraph_margin_right").slider({
		value: random,
		min: 0,
		max: 50,
		step: 1,
	});
});
var number = parseInt($(".wrapper aside p").css('margin-bottom'));
$("#sidebar_paragraph_margin_bottom").text(number);
$("#slidersidebar_paragraph_margin_bottom").slider({
	value: number,
	min: 0,
	max: 50,
	step: 1,
	slide: function(event, ui) {
		$(".wrapper aside p").css("margin-bottom", ui.value + "px");
		$("#sidebar_paragraph_margin_bottom").attr("value", ui.value);
	}
});$('input#sidebar_paragraph_margin_bottom').change(function() {
	var random = $('input#sidebar_paragraph_margin_bottom').val();
	$('.wrapper aside p').css('margin-bottom',random+'px');
	$("#slidersidebar_paragraph_margin_bottom").slider({
		value: random,
		min: 0,
		max: 50,
		step: 1,
	});
});
var number = parseInt($(".wrapper aside p").css('margin-left'));
$("#sidebar_paragraph_margin_left").text(number);
$("#slidersidebar_paragraph_margin_left").slider({
	value: number,
	min: 0,
	max: 50,
	step: 1,
	slide: function(event, ui) {
		$(".wrapper aside p").css("margin-left", ui.value + "px");
		$("#sidebar_paragraph_margin_left").attr("value", ui.value);
	}
});$('input#sidebar_paragraph_margin_left').change(function() {
	var random = $('input#sidebar_paragraph_margin_left').val();
	$('.wrapper aside p').css('margin-left',random+'px');
	$("#slidersidebar_paragraph_margin_left").slider({
		value: random,
		min: 0,
		max: 50,
		step: 1,
	});
});

var number = parseInt($(".wrapper aside p").css('padding-top'));
$("#sidebar_paragraph_padding_top").text(number);
$("#slidersidebar_paragraph_padding_top").slider({
	value: number,
	min: 0,
	max: 50,
	step: 1,
	slide: function(event, ui) {
		$(".wrapper aside p").css("padding-top", ui.value + "px");
		$("#sidebar_paragraph_padding_top").attr("value", ui.value);
	}
});$('input#sidebar_paragraph_padding_top').change(function() {
	var random = $('input#sidebar_paragraph_padding_top').val();
	$('.wrapper aside p').css('padding-top',random+'px');
	$("#slidersidebar_paragraph_padding_top").slider({
		value: random,
		min: 0,
		max: 50,
		step: 1,
	});
});
var number = parseInt($(".wrapper aside p").css('padding-right'));
$("#sidebar_paragraph_padding_right").text(number);
$("#slidersidebar_paragraph_padding_right").slider({
	value: number,
	min: 0,
	max: 50,
	step: 1,
	slide: function(event, ui) {
		$(".wrapper aside p").css("padding-right", ui.value + "px");
		$("#sidebar_paragraph_padding_right").attr("value", ui.value);
	}
});$('input#sidebar_paragraph_padding_right').change(function() {
	var random = $('input#sidebar_paragraph_padding_right').val();
	$('.wrapper aside p').css('padding-right',random+'px');
	$("#slidersidebar_paragraph_padding_right").slider({
		value: random,
		min: 0,
		max: 50,
		step: 1,
	});
});
var number = parseInt($(".wrapper aside p").css('padding-bottom'));
$("#sidebar_paragraph_padding_bottom").text(number);
$("#slidersidebar_paragraph_padding_bottom").slider({
	value: number,
	min: 0,
	max: 50,
	step: 1,
	slide: function(event, ui) {
		$(".wrapper aside p").css("padding-bottom", ui.value + "px");
		$("#sidebar_paragraph_padding_bottom").attr("value", ui.value);
	}
});$('input#sidebar_paragraph_padding_bottom').change(function() {
	var random = $('input#sidebar_paragraph_padding_bottom').val();
	$('.wrapper aside p').css('padding-bottom',random+'px');
	$("#slidersidebar_paragraph_padding_bottom").slider({
		value: random,
		min: 0,
		max: 50,
		step: 1,
	});
});
var number = parseInt($(".wrapper aside p").css('padding-left'));
$("#sidebar_paragraph_padding_left").text(number);
$("#slidersidebar_paragraph_padding_left").slider({
	value: number,
	min: 0,
	max: 50,
	step: 1,
	slide: function(event, ui) {
		$(".wrapper aside p").css("padding-left", ui.value + "px");
		$("#sidebar_paragraph_padding_left").attr("value", ui.value);
	}
});$('input#sidebar_paragraph_padding_left').change(function() {
	var random = $('input#sidebar_paragraph_padding_left').val();
	$('.wrapper aside p').css('padding-left',random+'px');
	$("#slidersidebar_paragraph_padding_left").slider({
		value: random,
		min: 0,
		max: 50,
		step: 1,
	});
});

$('select#sidebar_paragraph_fontfamily').change(function() {
	var random = $('select.sidebar_paragraph_fontfamily').val();
	jQuery('.wrapper aside p').css('font-family',random);
});
$('select#sidebar_paragraph_font_weight').change(function() {
	var random = $('select.sidebar_paragraph_font_weight').val();
	jQuery('.wrapper aside p').css('font-weight',random);
});
$('select#sidebar_paragraph_font_style').change(function() {
	var random = $('select.sidebar_paragraph_font_style').val();
	jQuery('.wrapper aside p').css('font-style',random);
});
$('select#sidebar_paragraph_textdecoration').change(function() {
	var random = $('select.sidebar_paragraph_textdecoration').val();
	jQuery('.wrapper aside p').css('text-decoration',random);
});
$('select#sidebar_paragraph_text_transform').change(function() {
	var random = $('select.sidebar_paragraph_text_transform').val();
	jQuery('.wrapper aside p').css('text-transform',random);
});
$('select#sidebar_paragraph_small_caps').change(function() {
	var random = $('select.sidebar_paragraph_small_caps').val();
	jQuery('.wrapper aside p').css('font-variant',random);
});
$('select#sidebar_paragraph_bordertop_type').change(function() {
	var random = $('select.sidebar_paragraph_bordertop_type').val();
	jQuery('.wrapper aside p').css('border-top-style',random);
});
$('select#sidebar_paragraph_borderbottom_type').change(function() {
	var random = $('select.sidebar_paragraph_borderbottom_type').val();
	jQuery('.wrapper aside p').css('border-bottom-style',random);
});

var number = parseInt($(".wrapper aside").css('font-size'));
$("#sidebar_paragraph_fontsize").text(number);
$("#slidersidebar_paragraph_fontsize").slider({
	value: number,
	min: 6,
	max: 80,
	step: 1,
	slide: function(event, ui) {
		$(".wrapper aside").css("font-size", ui.value + "px");
		$("#sidebar_paragraph_fontsize").attr("value", ui.value);
	}
});$('input#sidebar_paragraph_fontsize').change(function() {
	var random = $('input#sidebar_paragraph_fontsize').val();
	$('.wrapper aside').css('font-size',random+'px');
	$("#slidersidebar_paragraph_fontsize").slider({
		value: random,
		min: 6,
		max: 80,
		step: 1,
	});
});
var number = parseInt($(".wrapper aside").css('line-height'));
$("#sidebar_paragraph_line_height").text(number);
$("#slidersidebar_paragraph_line_height").slider({
	value: number,
	min: 6,
	max: 80,
	step: 1,
	slide: function(event, ui) {
		$(".wrapper aside").css("line-height", ui.value + "px");
		$("#sidebar_paragraph_line_height").attr("value", ui.value);
	}
});$('input#sidebar_paragraph_line_height').change(function() {
	var random = $('input#sidebar_paragraph_line_height').val();
	$('.wrapper aside').css('line-height',random+'px');
	$("#slidersidebar_paragraph_line_height").slider({
		value: random,
		min: 6,
		max: 80,
		step: 1,
	});
});
$('#sidebar_paragraph_textcolour').change(function() {
	var colour = $('#sidebar_paragraph_textcolour').val();
	jQuery('.wrapper aside').css('color',colour);
});
colour = $('.sidebar_paragraph_shadow_colour').val();
xcoord = $('.sidebar_paragraph_shadow_x_coordinate').val();
ycoord = $('.sidebar_paragraph_shadow_y_coordinate').val();
blur = $('.sidebar_paragraph_shadow_blur_radius').val();
$("#slidersidebar_paragraph_shadow_blur_radius").slider({
	value: blur, //Sets the slider handle to start at the current value
	min: 0,
	max: 50,

	step: 1,
	slide: function(event, ui) { //This is where we can perform actions based on the slide
		$("#sidebar_paragraph_shadow_blur_radius").attr("value", ui.value); //This adds that value into the span in the tabs below, so you can see the actual value
		colour = $('.sidebar_paragraph_shadow_colour').val();
		xcoord = $('.sidebar_paragraph_shadow_x_coordinate').val();
		ycoord = $('.sidebar_paragraph_shadow_y_coordinate').val();
		jQuery('.wrapper aside').css('textShadow',colour+' '+xcoord+'px '+ycoord+'px '+ui.value+'px');
	}
});
$("#slidersidebar_paragraph_shadow_x_coordinate").slider({
	value: xcoord, //Sets the slider handle to start at the current value
	min: -10,
	max: 10,
	step: 1,
	slide: function(event, ui) { //This is where we can perform actions based on the slide
		$("#sidebar_paragraph_shadow_x_coordinate").attr("value", ui.value); //This adds that value into the span in the tabs below, so you can see the actual value
		colour = $('#sidebar_paragraph_shadow_colour').val();
		ycoord = $('#sidebar_paragraph_shadow_y_coordinate').val();
		blur = $('#sidebar_paragraph_shadow_blur_radius').val();
		jQuery('.wrapper aside').css('textShadow',colour+' '+ui.value+'px '+ycoord+'px '+blur+'px');
	}
});
$("#slidersidebar_paragraph_shadow_y_coordinate").slider({
	value: ycoord, //Sets the slider handle to start at the current value
	min: -10,
	max: 10,
	step: 1,
	slide: function(event, ui) { //This is where we can perform actions based on the slide
		$("#sidebar_paragraph_shadow_y_coordinate").attr("value", ui.value); //This adds that value into the span in the tabs below, so you can see the actual value
		colour = $('#sidebar_paragraph_shadow_colour').val();
		xcoord = $('#sidebar_paragraph_shadow_x_coordinate').val();
		blur = $('#sidebar_paragraph_shadow_blur_radius').val();
		jQuery('.wrapper aside').css('textShadow',colour+' '+xcoord+'px '+ui.value+'px '+blur+'px');
	}
});
$('#sidebar_paragraph_shadow_colour').change(function() {
	colour = $('#sidebar_paragraph_shadow_colour').val();
	xcoord = $('#sidebar_paragraph_shadow_x_coordinate').val();
	ycoord = $('#sidebar_paragraph_shadow_y_coordinate').val();
	blur = $('#sidebar_paragraph_shadow_blur_radius').val();
	jQuery('.wrapper aside').css('textShadow',colour+' '+xcoord+'px '+ycoord+'px '+blur+'px');
});

var number = parseInt($(".wrapper aside").css('border-top-width'));
$("#sidebar_paragraph_bordertop_width").text(number);
$("#slidersidebar_paragraph_bordertop_width").slider({
	value: number,
	min: 0,
	max: 10,
	step: 1,
	slide: function(event, ui) {
		$(".wrapper aside").css("border-top-width", ui.value + "px");
		$("#sidebar_paragraph_bordertop_width").attr("value", ui.value);
	}
});$('input#sidebar_paragraph_bordertop_width').change(function() {
	var random = $('input#sidebar_paragraph_bordertop_width').val();
	$('.wrapper aside').css('border-top-width',random+'px');
	$("#slidersidebar_paragraph_bordertop_width").slider({
		value: random,
		min: 0,
		max: 10,
		step: 1,
	});
});
var number = parseInt($(".wrapper aside").css('border-bottom-width'));
$("#sidebar_paragraph_borderbottom_width").text(number);
$("#slidersidebar_paragraph_borderbottom_width").slider({
	value: number,
	min: 0,
	max: 10,
	step: 1,
	slide: function(event, ui) {
		$(".wrapper aside").css("border-bottom-width", ui.value + "px");
		$("#sidebar_paragraph_borderbottom_width").attr("value", ui.value);
	}
});$('input#sidebar_paragraph_borderbottom_width').change(function() {
	var random = $('input#sidebar_paragraph_borderbottom_width').val();
	$('.wrapper aside').css('border-bottom-width',random+'px');
	$("#slidersidebar_paragraph_borderbottom_width").slider({
		value: random,
		min: 0,
		max: 10,
		step: 1,
	});
});

var number = parseInt($(".wrapper aside").css('margin-top'));
$("#sidebar_paragraph_margin_top").text(number);
$("#slidersidebar_paragraph_margin_top").slider({
	value: number,
	min: 0,
	max: 50,
	step: 1,
	slide: function(event, ui) {
		$(".wrapper aside").css("margin-top", ui.value + "px");
		$("#sidebar_paragraph_margin_top").attr("value", ui.value);
	}
});$('input#sidebar_paragraph_margin_top').change(function() {
	var random = $('input#sidebar_paragraph_margin_top').val();
	$('.wrapper aside').css('margin-top',random+'px');
	$("#slidersidebar_paragraph_margin_top").slider({
		value: random,
		min: 0,
		max: 50,
		step: 1,
	});
});
var number = parseInt($(".wrapper aside").css('margin-right'));
$("#sidebar_paragraph_margin_right").text(number);
$("#slidersidebar_paragraph_margin_right").slider({
	value: number,
	min: 0,
	max: 50,
	step: 1,
	slide: function(event, ui) {
		$(".wrapper aside").css("margin-right", ui.value + "px");
		$("#sidebar_paragraph_margin_right").attr("value", ui.value);
	}
});$('input#sidebar_paragraph_margin_right').change(function() {
	var random = $('input#sidebar_paragraph_margin_right').val();
	$('.wrapper aside').css('margin-right',random+'px');
	$("#slidersidebar_paragraph_margin_right").slider({
		value: random,
		min: 0,
		max: 50,
		step: 1,
	});
});
var number = parseInt($(".wrapper aside").css('margin-bottom'));
$("#sidebar_paragraph_margin_bottom").text(number);
$("#slidersidebar_paragraph_margin_bottom").slider({
	value: number,
	min: 0,
	max: 50,
	step: 1,
	slide: function(event, ui) {
		$(".wrapper aside").css("margin-bottom", ui.value + "px");
		$("#sidebar_paragraph_margin_bottom").attr("value", ui.value);
	}
});$('input#sidebar_paragraph_margin_bottom').change(function() {
	var random = $('input#sidebar_paragraph_margin_bottom').val();
	$('.wrapper aside').css('margin-bottom',random+'px');
	$("#slidersidebar_paragraph_margin_bottom").slider({
		value: random,
		min: 0,
		max: 50,
		step: 1,
	});
});
var number = parseInt($(".wrapper aside").css('margin-left'));
$("#sidebar_paragraph_margin_left").text(number);
$("#slidersidebar_paragraph_margin_left").slider({
	value: number,
	min: 0,
	max: 50,
	step: 1,
	slide: function(event, ui) {
		$(".wrapper aside").css("margin-left", ui.value + "px");
		$("#sidebar_paragraph_margin_left").attr("value", ui.value);
	}
});$('input#sidebar_paragraph_margin_left').change(function() {
	var random = $('input#sidebar_paragraph_margin_left').val();
	$('.wrapper aside').css('margin-left',random+'px');
	$("#slidersidebar_paragraph_margin_left").slider({
		value: random,
		min: 0,
		max: 50,
		step: 1,
	});
});

var number = parseInt($(".wrapper aside").css('padding-top'));
$("#sidebar_paragraph_padding_top").text(number);
$("#slidersidebar_paragraph_padding_top").slider({
	value: number,
	min: 0,
	max: 50,
	step: 1,
	slide: function(event, ui) {
		$(".wrapper aside").css("padding-top", ui.value + "px");
		$("#sidebar_paragraph_padding_top").attr("value", ui.value);
	}
});$('input#sidebar_paragraph_padding_top').change(function() {
	var random = $('input#sidebar_paragraph_padding_top').val();
	$('.wrapper aside').css('padding-top',random+'px');
	$("#slidersidebar_paragraph_padding_top").slider({
		value: random,
		min: 0,
		max: 50,
		step: 1,
	});
});
var number = parseInt($(".wrapper aside").css('padding-right'));
$("#sidebar_paragraph_padding_right").text(number);
$("#slidersidebar_paragraph_padding_right").slider({
	value: number,
	min: 0,
	max: 50,
	step: 1,
	slide: function(event, ui) {
		$(".wrapper aside").css("padding-right", ui.value + "px");
		$("#sidebar_paragraph_padding_right").attr("value", ui.value);
	}
});$('input#sidebar_paragraph_padding_right').change(function() {
	var random = $('input#sidebar_paragraph_padding_right').val();
	$('.wrapper aside').css('padding-right',random+'px');
	$("#slidersidebar_paragraph_padding_right").slider({
		value: random,
		min: 0,
		max: 50,
		step: 1,
	});
});
var number = parseInt($(".wrapper aside").css('padding-bottom'));
$("#sidebar_paragraph_padding_bottom").text(number);
$("#slidersidebar_paragraph_padding_bottom").slider({
	value: number,
	min: 0,
	max: 50,
	step: 1,
	slide: function(event, ui) {
		$(".wrapper aside").css("padding-bottom", ui.value + "px");
		$("#sidebar_paragraph_padding_bottom").attr("value", ui.value);
	}
});$('input#sidebar_paragraph_padding_bottom').change(function() {
	var random = $('input#sidebar_paragraph_padding_bottom').val();
	$('.wrapper aside').css('padding-bottom',random+'px');
	$("#slidersidebar_paragraph_padding_bottom").slider({
		value: random,
		min: 0,
		max: 50,
		step: 1,
	});
});
var number = parseInt($(".wrapper aside").css('padding-left'));
$("#sidebar_paragraph_padding_left").text(number);
$("#slidersidebar_paragraph_padding_left").slider({
	value: number,
	min: 0,
	max: 50,
	step: 1,
	slide: function(event, ui) {
		$(".wrapper aside").css("padding-left", ui.value + "px");
		$("#sidebar_paragraph_padding_left").attr("value", ui.value);
	}
});$('input#sidebar_paragraph_padding_left').change(function() {
	var random = $('input#sidebar_paragraph_padding_left').val();
	$('.wrapper aside').css('padding-left',random+'px');
	$("#slidersidebar_paragraph_padding_left").slider({
		value: random,
		min: 0,
		max: 50,
		step: 1,
	});
});

$('select#sidebar_paragraph_fontfamily').change(function() {
	var random = $('select.sidebar_paragraph_fontfamily').val();
	jQuery('.wrapper aside').css('font-family',random);
});
$('select#sidebar_paragraph_font_weight').change(function() {
	var random = $('select.sidebar_paragraph_font_weight').val();
	jQuery('.wrapper aside').css('font-weight',random);
});
$('select#sidebar_paragraph_font_style').change(function() {
	var random = $('select.sidebar_paragraph_font_style').val();
	jQuery('.wrapper aside').css('font-style',random);
});
$('select#sidebar_paragraph_textdecoration').change(function() {
	var random = $('select.sidebar_paragraph_textdecoration').val();
	jQuery('.wrapper aside').css('text-decoration',random);
});
$('select#sidebar_paragraph_text_transform').change(function() {
	var random = $('select.sidebar_paragraph_text_transform').val();
	jQuery('.wrapper aside').css('text-transform',random);
});
$('select#sidebar_paragraph_small_caps').change(function() {
	var random = $('select.sidebar_paragraph_small_caps').val();
	jQuery('.wrapper aside').css('font-variant',random);
});
$('select#sidebar_paragraph_bordertop_type').change(function() {
	var random = $('select.sidebar_paragraph_bordertop_type').val();
	jQuery('.wrapper aside').css('border-top-style',random);
});
$('select#sidebar_paragraph_borderbottom_type').change(function() {
	var random = $('select.sidebar_paragraph_borderbottom_type').val();
	jQuery('.wrapper aside').css('border-bottom-style',random);
});

var number = parseInt($("aside div.sidebar").css('margin-top'));
$("#aside_padding_top").text(number);
$("#slideraside_padding_top").slider({
	value: number,
	min: 0,
	max: 50,
	step: 1,
	slide: function(event, ui) {
		$("aside div.sidebar").css("margin-top", ui.value + "px");
		$("#aside_padding_top").attr("value", ui.value);
	}
});$('input#aside_padding_top').change(function() {
	var random = $('input#aside_padding_top').val();
	$('aside div.sidebar').css('margin-top',random+'px');
	$("#slideraside_padding_top").slider({
		value: random,
		min: 0,
		max: 50,
		step: 1,
	});
});
var number = parseInt($("aside div.widget").css('margin-bottom'));
$("#aside_padding_bottom").text(number);
$("#slideraside_padding_bottom").slider({
	value: number,
	min: 0,
	max: 50,
	step: 1,
	slide: function(event, ui) {
		$("aside div.widget").css("margin-bottom", ui.value + "px");
		$("#aside_padding_bottom").attr("value", ui.value);
	}
});$('input#aside_padding_bottom').change(function() {
	var random = $('input#aside_padding_bottom').val();
	$('aside div.widget').css('margin-bottom',random+'px');
	$("#slideraside_padding_bottom").slider({
		value: random,
		min: 0,
		max: 50,
		step: 1,
	});
});
var number = parseInt($("aside div.sidebar").css('margin-left'));
$("#aside_padding_left").text(number);
$("#slideraside_padding_left").slider({
	value: number,
	min: 0,
	max: 50,
	step: 1,
	slide: function(event, ui) {
		$("aside div.sidebar").css("margin-left", ui.value + "px");
		$("#aside_padding_left").attr("value", ui.value);
	}
});$('input#aside_padding_left').change(function() {
	var random = $('input#aside_padding_left').val();
	$('aside div.sidebar').css('margin-left',random+'px');
	$("#slideraside_padding_left").slider({
		value: random,
		min: 0,
		max: 50,
		step: 1,
	});
});
var number = parseInt($("aside div.sidebar").css('margin-right'));
$("#aside_padding_right").text(number);
$("#slideraside_padding_right").slider({
	value: number,
	min: 0,
	max: 50,
	step: 1,
	slide: function(event, ui) {
		$("aside div.sidebar").css("margin-right", ui.value + "px");
		$("#aside_padding_right").attr("value", ui.value);
	}
});$('input#aside_padding_right').change(function() {
	var random = $('input#aside_padding_right').val();
	$('aside div.sidebar').css('margin-right',random+'px');
	$("#slideraside_padding_right").slider({
		value: random,
		min: 0,
		max: 50,
		step: 1,
	});
});
var sidebar1width = parseInt($("#aside-1").css('width')); //Sets the slider handle to start at the current value
$("#aside_1_width").text(sidebar1width);
$("#slideraside_1_width").slider({
	value: sidebar1width, //Sets the slider handle to start at the current value
	min: 100,
	max: 400,
	step: 1,
	slide: function(event, ui) { //This is where we can perform actions based on the slide
		var sidebar1width = ui.value;
		var sidebar2width = parseInt($("#aside-2").css('width')); //Sets the slider handle to start at the current value
		$(".aside_1_width").attr("value", sidebar1width); //This adds that value into the span in the tabs below, so you can see the actual value
		jQuery('#aside-1').css('width',sidebar1width);
		// Getting the current sidebar setup
var aside_padding_left = parseInt($("aside").css('padding-left'));
var aside_padding_right = parseInt($("aside").css('padding-right'));
var aside_1_display = $("#aside-1").css('display');
var aside_2_display = $("#aside-2").css('display');
var aside_1_float = $("#aside-1").css('float');
var aside_2_float = $("#aside-2").css('float');
var aside_1_width = parseInt($("#aside-1").css('width'));
var aside_2_width = parseInt($("#aside-1").css('width'));
var aside_1_margin_left = parseInt($("#aside-1").css('margin-left'));
var aside_1_margin_right = parseInt($("#aside-1").css('margin-right'));
var aside_2_margin_left = parseInt($("#aside-2").css('margin-left'));
var aside_2_margin_right = parseInt($("#aside-2").css('margin-right'));
var inner_margin_left = parseInt($("#inner").css('margin-left'));
var inner_margin_right = parseInt($("#inner").css('margin-right'));

if ( aside_1_display == 'block' && aside_2_display == 'none' ) {
	if ( aside_1_float == 'right' ) {var asides = 'content-sidebar1';}
	else if ( aside_1_float == 'left' ) {var asides = 'sidebar1-content';}
}
else if ( aside_1_display == 'none' && aside_2_display == 'block' ) {
	if ( aside_2_float == 'right' ) {var asides = 'content-sidebar2';	}
	else if ( aside_2_float == 'left' ) {var asides = 'sidebar2-content';}
}
else if ( aside_1_display == 'block' && aside_2_display == 'block' ) {
	if ( aside_1_float == 'left' && aside_2_float == 'right' ) {var asides = 'sidebar1-content-sidebar2';}
	else if ( aside_1_float == 'right' && aside_2_float == 'left' ) {var asides = 'sidebar2-content-sidebar1';}
	else if ( aside_1_float == 'right' && aside_2_float == 'right' ) {
		if ( -aside_1_margin_right == inner_margin_right ) {var asides = 'content-sidebar2-sidebar1';}
		else {var asides = 'content-sidebar1-sidebar2';}
	}
	else if ( aside_1_float == 'left' && aside_2_float == 'left' ) {
		if ( -aside_1_margin_left == inner_margin_left ) {var asides = 'sidebar1-sidebar2-content';}
		else {var asides = 'sidebar2-sidebar1-content';}
	}
}
else if ( aside_1_display == 'none' && aside_2_display == 'none' ) {var asides = 'content';}

// var asides = $('[name=asides]').val(); DOESN'T WORK ANYMORE DUE TO REMOVING SELECT BOX AND MOVING TO AJAX APPROACH
if (asides == 'content-sidebar1-sidebar2') {
	jQuery('#aside-1').css('display','block');
	jQuery('#aside-1').css('float','right');
	jQuery('#aside-1').css('margin-left',0);
	jQuery('#aside-1').css('margin-right',0-sidebar1width-aside_padding_left-aside_padding_right);
	jQuery('#aside-2').css('display','block');
	jQuery('#aside-2').css('float','right');
	jQuery('#aside-2').css('margin-left',0);
	jQuery('#aside-2').css('margin-right',0-sidebar1width-sidebar2width-aside_padding_left-aside_padding_right-aside_padding_left-aside_padding_right);
	jQuery('#inner').css('margin-left',0);
	jQuery('#inner').css('margin-right',sidebar1width+sidebar2width+aside_padding_left+aside_padding_right+aside_padding_left+aside_padding_right);
}
if (asides == 'content-sidebar2-sidebar1') {
	jQuery('#aside-1').css('display','block');
	jQuery('#aside-1').css('float','right');
	jQuery('#aside-1').css('margin-left',0);
	jQuery('#aside-1').css('margin-right',0-sidebar1width-sidebar2width-aside_padding_left-aside_padding_right-aside_padding_left-aside_padding_right);
	jQuery('#aside-2').css('display','block');
	jQuery('#aside-2').css('float','right');
	jQuery('#aside-2').css('margin-left',0);
	jQuery('#aside-2').css('margin-right',0-sidebar2width-aside_padding_left-aside_padding_right);
	jQuery('#inner').css('margin-left',0);
	jQuery('#inner').css('margin-right',sidebar1width+sidebar2width+aside_padding_left+aside_padding_right+aside_padding_left+aside_padding_right);
}
if (asides == 'sidebar1-content-sidebar2') {
	jQuery('#aside-1').css('display','block');
	jQuery('#aside-1').css('float','left');
	jQuery('#aside-1').css('margin-left',0-sidebar1width-aside_padding_left-aside_padding_right);
	jQuery('#aside-1').css('margin-right',0);
	jQuery('#aside-2').css('display','block');
	jQuery('#aside-2').css('float','right');
	jQuery('#aside-2').css('margin-left',0);
	jQuery('#aside-2').css('margin-right',0-sidebar2width-aside_padding_left-aside_padding_right);
	jQuery('#inner').css('margin-left',sidebar1width-aside_padding_left-aside_padding_right);
	jQuery('#inner').css('margin-right',sidebar2width-aside_padding_left-aside_padding_right);
}
if (asides == 'sidebar2-content-sidebar1') {
	jQuery('#aside-1').css('display','block');
	jQuery('#aside-1').css('float','right');
	jQuery('#aside-1').css('margin-left',0);
	jQuery('#aside-1').css('margin-right',0-sidebar1width-aside_padding_left-aside_padding_right);
	jQuery('#aside-2').css('display','block');
	jQuery('#aside-2').css('float','left');
	jQuery('#aside-2').css('margin-left',0-sidebar2width-aside_padding_left-aside_padding_right);
	jQuery('#aside-2').css('margin-right',0);
	jQuery('#inner').css('margin-left',sidebar2width+aside_padding_left+aside_padding_right);
	jQuery('#inner').css('margin-right',sidebar1width+aside_padding_left+aside_padding_right);
}
if (asides == 'sidebar1-sidebar2-content') {
	jQuery('#aside-1').css('display','block');
	jQuery('#aside-1').css('float','left');
	jQuery('#aside-1').css('margin-left',0-sidebar1width-sidebar2width-aside_padding_left-aside_padding_right-aside_padding_left-aside_padding_right);
	jQuery('#aside-1').css('margin-right',0);
	jQuery('#aside-2').css('display','block');
	jQuery('#aside-2').css('float','left');
	jQuery('#aside-2').css('margin-left',0-sidebar2width-aside_padding_left-aside_padding_right);
	jQuery('#aside-2').css('margin-right',0);
	jQuery('#inner').css('margin-left',sidebar1width+sidebar2width+aside_padding_left+aside_padding_right+aside_padding_left+aside_padding_right);
	jQuery('#inner').css('margin-right',0);
}
if (asides == 'sidebar2-sidebar1-content') {
	jQuery('#aside-1').css('display','block');
	jQuery('#aside-1').css('float','left');
	jQuery('#aside-1').css('margin-left',0-sidebar1width-aside_padding_left-aside_padding_right);
	jQuery('#aside-1').css('margin-right',0);
	jQuery('#aside-2').css('display','block');
	jQuery('#aside-2').css('float','left');
	jQuery('#aside-2').css('margin-left',0-sidebar1width-sidebar2width-aside_padding_left-aside_padding_right-aside_padding_left-aside_padding_right);
	jQuery('#aside-2').css('margin-right',0);
	jQuery('#inner').css('margin-left',sidebar1width+sidebar2width+aside_padding_left+aside_padding_right+aside_padding_left+aside_padding_right);
	jQuery('#inner').css('margin-right',0);
}
if (asides == 'sidebar1-content') {
	jQuery('#aside-1').css('display','block');
	jQuery('#aside-1').css('float','left');
	jQuery('#aside-1').css('margin-left',0-sidebar1width-aside_padding_left-aside_padding_right);
	jQuery('#aside-1').css('margin-right',0);
	jQuery('#aside-2').css('display','none');
	jQuery('#inner').css('margin-left',sidebar1width+aside_padding_left+aside_padding_right);
	jQuery('#inner').css('margin-right',0);
}
if (asides == 'sidebar2-content') {
	jQuery('#aside-1').css('display','none');
	jQuery('#aside-2').css('display','block');
	jQuery('#aside-2').css('float','left');
	jQuery('#aside-2').css('margin-left',0-sidebar2width-aside_padding_left-aside_padding_right);
	jQuery('#aside-2').css('margin-right',0);
	jQuery('#inner').css('margin-left',sidebar2width+aside_padding_left+aside_padding_right);
	jQuery('#inner').css('margin-right',0);
}
if (asides == 'content-sidebar1') {
	jQuery('#aside-1').css('display','block');
	jQuery('#aside-1').css('float','right');
	jQuery('#aside-1').css('margin-right',0-sidebar1width-aside_padding_left-aside_padding_right);
	jQuery('#aside-1').css('margin-left',0);
	jQuery('#aside-2').css('display','none');
	jQuery('#inner').css('margin-left',0);
	jQuery('#inner').css('margin-right',sidebar1width+aside_padding_left+aside_padding_right);
}
if (asides == 'content-sidebar2') {
	jQuery('#aside-1').css('display','none');
	jQuery('#aside-2').css('display','block');
	jQuery('#aside-2').css('float','right');
	jQuery('#aside-2').css('margin-left',0);
	jQuery('#aside-2').css('margin-right',0-sidebar2width-aside_padding_left-aside_padding_right);
	jQuery('#inner').css('margin-left',0);
	jQuery('#inner').css('margin-right',sidebar2width+aside_padding_left+aside_padding_right);
}	}
});
var sidebar2width = parseInt($("#aside-2").css('width')); //Sets the slider handle to start at the current value
$("#aside_2_width").text(sidebar1width);
$("#slideraside_2_width").slider({
	value: sidebar2width, //Sets the slider handle to start at the current value
	min: 100,
	max: 400,
	step: 1,
	slide: function(event, ui) { //This is where we can perform actions based on the slide
		var sidebar2width = ui.value;
		var sidebar1width = parseInt($("#aside-1").css('width')); //Sets the slider handle to start at the current value
		$(".aside_2_width").attr("value", sidebar2width); //This adds that value into the span in the tabs below, so you can see the actual value
		jQuery('#aside-2').css('width',sidebar2width);
		// Getting the current sidebar setup
var aside_padding_left = parseInt($("aside").css('padding-left'));
var aside_padding_right = parseInt($("aside").css('padding-right'));
var aside_1_display = $("#aside-1").css('display');
var aside_2_display = $("#aside-2").css('display');
var aside_1_float = $("#aside-1").css('float');
var aside_2_float = $("#aside-2").css('float');
var aside_1_width = parseInt($("#aside-1").css('width'));
var aside_2_width = parseInt($("#aside-1").css('width'));
var aside_1_margin_left = parseInt($("#aside-1").css('margin-left'));
var aside_1_margin_right = parseInt($("#aside-1").css('margin-right'));
var aside_2_margin_left = parseInt($("#aside-2").css('margin-left'));
var aside_2_margin_right = parseInt($("#aside-2").css('margin-right'));
var inner_margin_left = parseInt($("#inner").css('margin-left'));
var inner_margin_right = parseInt($("#inner").css('margin-right'));

if ( aside_1_display == 'block' && aside_2_display == 'none' ) {
	if ( aside_1_float == 'right' ) {var asides = 'content-sidebar1';}
	else if ( aside_1_float == 'left' ) {var asides = 'sidebar1-content';}
}
else if ( aside_1_display == 'none' && aside_2_display == 'block' ) {
	if ( aside_2_float == 'right' ) {var asides = 'content-sidebar2';	}
	else if ( aside_2_float == 'left' ) {var asides = 'sidebar2-content';}
}
else if ( aside_1_display == 'block' && aside_2_display == 'block' ) {
	if ( aside_1_float == 'left' && aside_2_float == 'right' ) {var asides = 'sidebar1-content-sidebar2';}
	else if ( aside_1_float == 'right' && aside_2_float == 'left' ) {var asides = 'sidebar2-content-sidebar1';}
	else if ( aside_1_float == 'right' && aside_2_float == 'right' ) {
		if ( -aside_1_margin_right == inner_margin_right ) {var asides = 'content-sidebar2-sidebar1';}
		else {var asides = 'content-sidebar1-sidebar2';}
	}
	else if ( aside_1_float == 'left' && aside_2_float == 'left' ) {
		if ( -aside_1_margin_left == inner_margin_left ) {var asides = 'sidebar1-sidebar2-content';}
		else {var asides = 'sidebar2-sidebar1-content';}
	}
}
else if ( aside_1_display == 'none' && aside_2_display == 'none' ) {var asides = 'content';}

// var asides = $('[name=asides]').val(); DOESN'T WORK ANYMORE DUE TO REMOVING SELECT BOX AND MOVING TO AJAX APPROACH
if (asides == 'content-sidebar1-sidebar2') {
	jQuery('#aside-1').css('display','block');
	jQuery('#aside-1').css('float','right');
	jQuery('#aside-1').css('margin-left',0);
	jQuery('#aside-1').css('margin-right',0-sidebar1width-aside_padding_left-aside_padding_right);
	jQuery('#aside-2').css('display','block');
	jQuery('#aside-2').css('float','right');
	jQuery('#aside-2').css('margin-left',0);
	jQuery('#aside-2').css('margin-right',0-sidebar1width-sidebar2width-aside_padding_left-aside_padding_right-aside_padding_left-aside_padding_right);
	jQuery('#inner').css('margin-left',0);
	jQuery('#inner').css('margin-right',sidebar1width+sidebar2width+aside_padding_left+aside_padding_right+aside_padding_left+aside_padding_right);
}
if (asides == 'content-sidebar2-sidebar1') {
	jQuery('#aside-1').css('display','block');
	jQuery('#aside-1').css('float','right');
	jQuery('#aside-1').css('margin-left',0);
	jQuery('#aside-1').css('margin-right',0-sidebar1width-sidebar2width-aside_padding_left-aside_padding_right-aside_padding_left-aside_padding_right);
	jQuery('#aside-2').css('display','block');
	jQuery('#aside-2').css('float','right');
	jQuery('#aside-2').css('margin-left',0);
	jQuery('#aside-2').css('margin-right',0-sidebar2width-aside_padding_left-aside_padding_right);
	jQuery('#inner').css('margin-left',0);
	jQuery('#inner').css('margin-right',sidebar1width+sidebar2width+aside_padding_left+aside_padding_right+aside_padding_left+aside_padding_right);
}
if (asides == 'sidebar1-content-sidebar2') {
	jQuery('#aside-1').css('display','block');
	jQuery('#aside-1').css('float','left');
	jQuery('#aside-1').css('margin-left',0-sidebar1width-aside_padding_left-aside_padding_right);
	jQuery('#aside-1').css('margin-right',0);
	jQuery('#aside-2').css('display','block');
	jQuery('#aside-2').css('float','right');
	jQuery('#aside-2').css('margin-left',0);
	jQuery('#aside-2').css('margin-right',0-sidebar2width-aside_padding_left-aside_padding_right);
	jQuery('#inner').css('margin-left',sidebar1width-aside_padding_left-aside_padding_right);
	jQuery('#inner').css('margin-right',sidebar2width-aside_padding_left-aside_padding_right);
}
if (asides == 'sidebar2-content-sidebar1') {
	jQuery('#aside-1').css('display','block');
	jQuery('#aside-1').css('float','right');
	jQuery('#aside-1').css('margin-left',0);
	jQuery('#aside-1').css('margin-right',0-sidebar1width-aside_padding_left-aside_padding_right);
	jQuery('#aside-2').css('display','block');
	jQuery('#aside-2').css('float','left');
	jQuery('#aside-2').css('margin-left',0-sidebar2width-aside_padding_left-aside_padding_right);
	jQuery('#aside-2').css('margin-right',0);
	jQuery('#inner').css('margin-left',sidebar2width+aside_padding_left+aside_padding_right);
	jQuery('#inner').css('margin-right',sidebar1width+aside_padding_left+aside_padding_right);
}
if (asides == 'sidebar1-sidebar2-content') {
	jQuery('#aside-1').css('display','block');
	jQuery('#aside-1').css('float','left');
	jQuery('#aside-1').css('margin-left',0-sidebar1width-sidebar2width-aside_padding_left-aside_padding_right-aside_padding_left-aside_padding_right);
	jQuery('#aside-1').css('margin-right',0);
	jQuery('#aside-2').css('display','block');
	jQuery('#aside-2').css('float','left');
	jQuery('#aside-2').css('margin-left',0-sidebar2width-aside_padding_left-aside_padding_right);
	jQuery('#aside-2').css('margin-right',0);
	jQuery('#inner').css('margin-left',sidebar1width+sidebar2width+aside_padding_left+aside_padding_right+aside_padding_left+aside_padding_right);
	jQuery('#inner').css('margin-right',0);
}
if (asides == 'sidebar2-sidebar1-content') {
	jQuery('#aside-1').css('display','block');
	jQuery('#aside-1').css('float','left');
	jQuery('#aside-1').css('margin-left',0-sidebar1width-aside_padding_left-aside_padding_right);
	jQuery('#aside-1').css('margin-right',0);
	jQuery('#aside-2').css('display','block');
	jQuery('#aside-2').css('float','left');
	jQuery('#aside-2').css('margin-left',0-sidebar1width-sidebar2width-aside_padding_left-aside_padding_right-aside_padding_left-aside_padding_right);
	jQuery('#aside-2').css('margin-right',0);
	jQuery('#inner').css('margin-left',sidebar1width+sidebar2width+aside_padding_left+aside_padding_right+aside_padding_left+aside_padding_right);
	jQuery('#inner').css('margin-right',0);
}
if (asides == 'sidebar1-content') {
	jQuery('#aside-1').css('display','block');
	jQuery('#aside-1').css('float','left');
	jQuery('#aside-1').css('margin-left',0-sidebar1width-aside_padding_left-aside_padding_right);
	jQuery('#aside-1').css('margin-right',0);
	jQuery('#aside-2').css('display','none');
	jQuery('#inner').css('margin-left',sidebar1width+aside_padding_left+aside_padding_right);
	jQuery('#inner').css('margin-right',0);
}
if (asides == 'sidebar2-content') {
	jQuery('#aside-1').css('display','none');
	jQuery('#aside-2').css('display','block');
	jQuery('#aside-2').css('float','left');
	jQuery('#aside-2').css('margin-left',0-sidebar2width-aside_padding_left-aside_padding_right);
	jQuery('#aside-2').css('margin-right',0);
	jQuery('#inner').css('margin-left',sidebar2width+aside_padding_left+aside_padding_right);
	jQuery('#inner').css('margin-right',0);
}
if (asides == 'content-sidebar1') {
	jQuery('#aside-1').css('display','block');
	jQuery('#aside-1').css('float','right');
	jQuery('#aside-1').css('margin-right',0-sidebar1width-aside_padding_left-aside_padding_right);
	jQuery('#aside-1').css('margin-left',0);
	jQuery('#aside-2').css('display','none');
	jQuery('#inner').css('margin-left',0);
	jQuery('#inner').css('margin-right',sidebar1width+aside_padding_left+aside_padding_right);
}
if (asides == 'content-sidebar2') {
	jQuery('#aside-1').css('display','none');
	jQuery('#aside-2').css('display','block');
	jQuery('#aside-2').css('float','right');
	jQuery('#aside-2').css('margin-left',0);
	jQuery('#aside-2').css('margin-right',0-sidebar2width-aside_padding_left-aside_padding_right);
	jQuery('#inner').css('margin-left',0);
	jQuery('#inner').css('margin-right',sidebar2width+aside_padding_left+aside_padding_right);
}	}
});
$("select.asides").change(function() {
	// Getting the current sidebar setup
var aside_padding_left = parseInt($("aside").css('padding-left'));
var aside_padding_right = parseInt($("aside").css('padding-right'));
var aside_1_display = $("#aside-1").css('display');
var aside_2_display = $("#aside-2").css('display');
var aside_1_float = $("#aside-1").css('float');
var aside_2_float = $("#aside-2").css('float');
var aside_1_width = parseInt($("#aside-1").css('width'));
var aside_2_width = parseInt($("#aside-1").css('width'));
var aside_1_margin_left = parseInt($("#aside-1").css('margin-left'));
var aside_1_margin_right = parseInt($("#aside-1").css('margin-right'));
var aside_2_margin_left = parseInt($("#aside-2").css('margin-left'));
var aside_2_margin_right = parseInt($("#aside-2").css('margin-right'));
var inner_margin_left = parseInt($("#inner").css('margin-left'));
var inner_margin_right = parseInt($("#inner").css('margin-right'));

if ( aside_1_display == 'block' && aside_2_display == 'none' ) {
	if ( aside_1_float == 'right' ) {var asides = 'content-sidebar1';}
	else if ( aside_1_float == 'left' ) {var asides = 'sidebar1-content';}
}
else if ( aside_1_display == 'none' && aside_2_display == 'block' ) {
	if ( aside_2_float == 'right' ) {var asides = 'content-sidebar2';	}
	else if ( aside_2_float == 'left' ) {var asides = 'sidebar2-content';}
}
else if ( aside_1_display == 'block' && aside_2_display == 'block' ) {
	if ( aside_1_float == 'left' && aside_2_float == 'right' ) {var asides = 'sidebar1-content-sidebar2';}
	else if ( aside_1_float == 'right' && aside_2_float == 'left' ) {var asides = 'sidebar2-content-sidebar1';}
	else if ( aside_1_float == 'right' && aside_2_float == 'right' ) {
		if ( -aside_1_margin_right == inner_margin_right ) {var asides = 'content-sidebar2-sidebar1';}
		else {var asides = 'content-sidebar1-sidebar2';}
	}
	else if ( aside_1_float == 'left' && aside_2_float == 'left' ) {
		if ( -aside_1_margin_left == inner_margin_left ) {var asides = 'sidebar1-sidebar2-content';}
		else {var asides = 'sidebar2-sidebar1-content';}
	}
}
else if ( aside_1_display == 'none' && aside_2_display == 'none' ) {var asides = 'content';}

// var asides = $('[name=asides]').val(); DOESN'T WORK ANYMORE DUE TO REMOVING SELECT BOX AND MOVING TO AJAX APPROACH
if (asides == 'content-sidebar1-sidebar2') {
	jQuery('#aside-1').css('display','block');
	jQuery('#aside-1').css('float','right');
	jQuery('#aside-1').css('margin-left',0);
	jQuery('#aside-1').css('margin-right',0-sidebar1width-aside_padding_left-aside_padding_right);
	jQuery('#aside-2').css('display','block');
	jQuery('#aside-2').css('float','right');
	jQuery('#aside-2').css('margin-left',0);
	jQuery('#aside-2').css('margin-right',0-sidebar1width-sidebar2width-aside_padding_left-aside_padding_right-aside_padding_left-aside_padding_right);
	jQuery('#inner').css('margin-left',0);
	jQuery('#inner').css('margin-right',sidebar1width+sidebar2width+aside_padding_left+aside_padding_right+aside_padding_left+aside_padding_right);
}
if (asides == 'content-sidebar2-sidebar1') {
	jQuery('#aside-1').css('display','block');
	jQuery('#aside-1').css('float','right');
	jQuery('#aside-1').css('margin-left',0);
	jQuery('#aside-1').css('margin-right',0-sidebar1width-sidebar2width-aside_padding_left-aside_padding_right-aside_padding_left-aside_padding_right);
	jQuery('#aside-2').css('display','block');
	jQuery('#aside-2').css('float','right');
	jQuery('#aside-2').css('margin-left',0);
	jQuery('#aside-2').css('margin-right',0-sidebar2width-aside_padding_left-aside_padding_right);
	jQuery('#inner').css('margin-left',0);
	jQuery('#inner').css('margin-right',sidebar1width+sidebar2width+aside_padding_left+aside_padding_right+aside_padding_left+aside_padding_right);
}
if (asides == 'sidebar1-content-sidebar2') {
	jQuery('#aside-1').css('display','block');
	jQuery('#aside-1').css('float','left');
	jQuery('#aside-1').css('margin-left',0-sidebar1width-aside_padding_left-aside_padding_right);
	jQuery('#aside-1').css('margin-right',0);
	jQuery('#aside-2').css('display','block');
	jQuery('#aside-2').css('float','right');
	jQuery('#aside-2').css('margin-left',0);
	jQuery('#aside-2').css('margin-right',0-sidebar2width-aside_padding_left-aside_padding_right);
	jQuery('#inner').css('margin-left',sidebar1width-aside_padding_left-aside_padding_right);
	jQuery('#inner').css('margin-right',sidebar2width-aside_padding_left-aside_padding_right);
}
if (asides == 'sidebar2-content-sidebar1') {
	jQuery('#aside-1').css('display','block');
	jQuery('#aside-1').css('float','right');
	jQuery('#aside-1').css('margin-left',0);
	jQuery('#aside-1').css('margin-right',0-sidebar1width-aside_padding_left-aside_padding_right);
	jQuery('#aside-2').css('display','block');
	jQuery('#aside-2').css('float','left');
	jQuery('#aside-2').css('margin-left',0-sidebar2width-aside_padding_left-aside_padding_right);
	jQuery('#aside-2').css('margin-right',0);
	jQuery('#inner').css('margin-left',sidebar2width+aside_padding_left+aside_padding_right);
	jQuery('#inner').css('margin-right',sidebar1width+aside_padding_left+aside_padding_right);
}
if (asides == 'sidebar1-sidebar2-content') {
	jQuery('#aside-1').css('display','block');
	jQuery('#aside-1').css('float','left');
	jQuery('#aside-1').css('margin-left',0-sidebar1width-sidebar2width-aside_padding_left-aside_padding_right-aside_padding_left-aside_padding_right);
	jQuery('#aside-1').css('margin-right',0);
	jQuery('#aside-2').css('display','block');
	jQuery('#aside-2').css('float','left');
	jQuery('#aside-2').css('margin-left',0-sidebar2width-aside_padding_left-aside_padding_right);
	jQuery('#aside-2').css('margin-right',0);
	jQuery('#inner').css('margin-left',sidebar1width+sidebar2width+aside_padding_left+aside_padding_right+aside_padding_left+aside_padding_right);
	jQuery('#inner').css('margin-right',0);
}
if (asides == 'sidebar2-sidebar1-content') {
	jQuery('#aside-1').css('display','block');
	jQuery('#aside-1').css('float','left');
	jQuery('#aside-1').css('margin-left',0-sidebar1width-aside_padding_left-aside_padding_right);
	jQuery('#aside-1').css('margin-right',0);
	jQuery('#aside-2').css('display','block');
	jQuery('#aside-2').css('float','left');
	jQuery('#aside-2').css('margin-left',0-sidebar1width-sidebar2width-aside_padding_left-aside_padding_right-aside_padding_left-aside_padding_right);
	jQuery('#aside-2').css('margin-right',0);
	jQuery('#inner').css('margin-left',sidebar1width+sidebar2width+aside_padding_left+aside_padding_right+aside_padding_left+aside_padding_right);
	jQuery('#inner').css('margin-right',0);
}
if (asides == 'sidebar1-content') {
	jQuery('#aside-1').css('display','block');
	jQuery('#aside-1').css('float','left');
	jQuery('#aside-1').css('margin-left',0-sidebar1width-aside_padding_left-aside_padding_right);
	jQuery('#aside-1').css('margin-right',0);
	jQuery('#aside-2').css('display','none');
	jQuery('#inner').css('margin-left',sidebar1width+aside_padding_left+aside_padding_right);
	jQuery('#inner').css('margin-right',0);
}
if (asides == 'sidebar2-content') {
	jQuery('#aside-1').css('display','none');
	jQuery('#aside-2').css('display','block');
	jQuery('#aside-2').css('float','left');
	jQuery('#aside-2').css('margin-left',0-sidebar2width-aside_padding_left-aside_padding_right);
	jQuery('#aside-2').css('margin-right',0);
	jQuery('#inner').css('margin-left',sidebar2width+aside_padding_left+aside_padding_right);
	jQuery('#inner').css('margin-right',0);
}
if (asides == 'content-sidebar1') {
	jQuery('#aside-1').css('display','block');
	jQuery('#aside-1').css('float','right');
	jQuery('#aside-1').css('margin-right',0-sidebar1width-aside_padding_left-aside_padding_right);
	jQuery('#aside-1').css('margin-left',0);
	jQuery('#aside-2').css('display','none');
	jQuery('#inner').css('margin-left',0);
	jQuery('#inner').css('margin-right',sidebar1width+aside_padding_left+aside_padding_right);
}
if (asides == 'content-sidebar2') {
	jQuery('#aside-1').css('display','none');
	jQuery('#aside-2').css('display','block');
	jQuery('#aside-2').css('float','right');
	jQuery('#aside-2').css('margin-left',0);
	jQuery('#aside-2').css('margin-right',0-sidebar2width-aside_padding_left-aside_padding_right);
	jQuery('#inner').css('margin-left',0);
	jQuery('#inner').css('margin-right',sidebar2width+aside_padding_left+aside_padding_right);
}});
var number = parseInt($("header div.header").css('max-width'));
$("#header_max_width").text(number);
$("#sliderheader_max_width").slider({
	value: number,
	min: 0,
	max: 1600,
	step: 1,
	slide: function(event, ui) {
		$("header div.header").css("max-width", ui.value + "px");
		$("#header_max_width").attr("value", ui.value);
	}
});$('input#header_max_width').change(function() {
	var random = $('input#header_max_width').val();
	$('header div.header').css('max-width',random+'px');
	$("#sliderheader_max_width").slider({
		value: random,
		min: 0,
		max: 1600,
		step: 1,
	});
});
var number = parseInt($("header div.header").css('min-width'));
$("#header_min_width").text(number);
$("#sliderheader_min_width").slider({
	value: number,
	min: 0,
	max: 1600,
	step: 1,
	slide: function(event, ui) {
		$("header div.header").css("min-width", ui.value + "px");
		$("#header_min_width").attr("value", ui.value);
	}
});$('input#header_min_width').change(function() {
	var random = $('input#header_min_width').val();
	$('header div.header').css('min-width',random+'px');
	$("#sliderheader_min_width").slider({
		value: random,
		min: 0,
		max: 1600,
		step: 1,
	});
});
var number = parseInt($("header div.header").css('height'));
$("#header_height").text(number);
$("#sliderheader_height").slider({
	value: number,
	min: 0,
	max: 800,
	step: 1,
	slide: function(event, ui) {
		$("header div.header").css("height", ui.value + "px");
		$("#header_height").attr("value", ui.value);
	}
});$('input#header_height').change(function() {
	var random = $('input#header_height').val();
	$('header div.header').css('height',random+'px');
	$("#sliderheader_height").slider({
		value: random,
		min: 0,
		max: 800,
		step: 1,
	});
});
var number = parseInt($("header div.header").css('border-top-width'));
$("#header_border_top_width").text(number);
$("#sliderheader_border_top_width").slider({
	value: number,
	min: 0,
	max: 20,
	step: 1,
	slide: function(event, ui) {
		$("header div.header").css("border-top-width", ui.value + "px");
		$("#header_border_top_width").attr("value", ui.value);
	}
});$('input#header_border_top_width').change(function() {
	var random = $('input#header_border_top_width').val();
	$('header div.header').css('border-top-width',random+'px');
	$("#sliderheader_border_top_width").slider({
		value: random,
		min: 0,
		max: 20,
		step: 1,
	});
});
var number = parseInt($("header div.header").css('border-right-width'));
$("#header_border_right_width").text(number);
$("#sliderheader_border_right_width").slider({
	value: number,
	min: 0,
	max: 20,
	step: 1,
	slide: function(event, ui) {
		$("header div.header").css("border-right-width", ui.value + "px");
		$("#header_border_right_width").attr("value", ui.value);
	}
});$('input#header_border_right_width').change(function() {
	var random = $('input#header_border_right_width').val();
	$('header div.header').css('border-right-width',random+'px');
	$("#sliderheader_border_right_width").slider({
		value: random,
		min: 0,
		max: 20,
		step: 1,
	});
});
var number = parseInt($("header div.header").css('border-bottom-width'));
$("#header_border_bottom_width").text(number);
$("#sliderheader_border_bottom_width").slider({
	value: number,
	min: 0,
	max: 20,
	step: 1,
	slide: function(event, ui) {
		$("header div.header").css("border-bottom-width", ui.value + "px");
		$("#header_border_bottom_width").attr("value", ui.value);
	}
});$('input#header_border_bottom_width').change(function() {
	var random = $('input#header_border_bottom_width').val();
	$('header div.header').css('border-bottom-width',random+'px');
	$("#sliderheader_border_bottom_width").slider({
		value: random,
		min: 0,
		max: 20,
		step: 1,
	});
});
var number = parseInt($("header div.header").css('border-left-width'));
$("#header_border_left_width").text(number);
$("#sliderheader_border_left_width").slider({
	value: number,
	min: 0,
	max: 20,
	step: 1,
	slide: function(event, ui) {
		$("header div.header").css("border-left-width", ui.value + "px");
		$("#header_border_left_width").attr("value", ui.value);
	}
});$('input#header_border_left_width').change(function() {
	var random = $('input#header_border_left_width').val();
	$('header div.header').css('border-left-width',random+'px');
	$("#sliderheader_border_left_width").slider({
		value: random,
		min: 0,
		max: 20,
		step: 1,
	});
});
var number = parseInt($("header div.header").css('margin-top'));
$("#header_top_margin").text(number);
$("#sliderheader_top_margin").slider({
	value: number,
	min: 0,
	max: 20,
	step: 1,
	slide: function(event, ui) {
		$("header div.header").css("margin-top", ui.value + "px");
		$("#header_top_margin").attr("value", ui.value);
	}
});$('input#header_top_margin').change(function() {
	var random = $('input#header_top_margin').val();
	$('header div.header').css('margin-top',random+'px');
	$("#sliderheader_top_margin").slider({
		value: random,
		min: 0,
		max: 20,
		step: 1,
	});
});
var number = parseInt($("header div.header").css('margin-bottom'));
$("#header_bottom_margin").text(number);
$("#sliderheader_bottom_margin").slider({
	value: number,
	min: 0,
	max: 20,
	step: 1,
	slide: function(event, ui) {
		$("header div.header").css("margin-bottom", ui.value + "px");
		$("#header_bottom_margin").attr("value", ui.value);
	}
});$('input#header_bottom_margin').change(function() {
	var random = $('input#header_bottom_margin').val();
	$('header div.header').css('margin-bottom',random+'px');
	$("#sliderheader_bottom_margin").slider({
		value: random,
		min: 0,
		max: 20,
		step: 1,
	});
});
$('select#header_border_top_type').change(function() {
	var random = $('select.header_border_top_type').val();
	jQuery('header div.header').css('border-top-style',random);
});
$('select#header_border_right_type').change(function() {
	var random = $('select.header_border_right_type').val();
	jQuery('header div.header').css('border-right-style',random);
});
$('select#header_border_bottom_type').change(function() {
	var random = $('select.header_border_bottom_type').val();
	jQuery('header div.header').css('border-bottom-style',random);
});
$('select#header_border_left_type').change(function() {
	var random = $('select.header_border_left_type').val();
	jQuery('header div.header').css('border-left-style',random);
});
$('#header_border_top_colour').change(function() {
	var colour = $('#header_border_top_colour').val();
	jQuery('header div.header').css('color',colour);
});
$('#header_border_right_colour').change(function() {
	var colour = $('#header_border_right_colour').val();
	jQuery('header div.header').css('color',colour);
});
$('#header_border_bottom_colour').change(function() {
	var colour = $('#header_border_bottom_colour').val();
	jQuery('header div.header').css('color',colour);
});
$('#header_border_left_colour').change(function() {
	var colour = $('#header_border_left_colour').val();
	jQuery('header div.header').css('color',colour);
});

$('select#header_fullwidth_background_display').change(function() {
	var random = $('select#header_fullwidth_background_display').val();
	var colour = $('#header_fullwidth_background_colour').val();
	var image = $('#header_fullwidth_background_image').val();
	if (random == 'none') { $('header').css('background-color','transparent');$('header').css('background-image','none');}
	if (random == 'block') { $('header').css('background-color',colour);$('header').css('background-image',image);}
});var number = parseInt($("header h1").css('margin-left'));
$("#header_heading_position_x").text(number);
$("#sliderheader_heading_position_x").slider({
	value: number,
	min: 0,
	max: 1200,
	step: 1,
	slide: function(event, ui) {
		$("header h1").css("margin-left", ui.value + "px");
		$("#header_heading_position_x").attr("value", ui.value);
	}
});$('input#header_heading_position_x').change(function() {
	var random = $('input#header_heading_position_x').val();
	$('header h1').css('margin-left',random+'px');
	$("#sliderheader_heading_position_x").slider({
		value: random,
		min: 0,
		max: 1200,
		step: 1,
	});
});
var number = parseInt($("header h1").css('margin-top'));
$("#header_heading_position_y").text(number);
$("#sliderheader_heading_position_y").slider({
	value: number,
	min: 0,
	max: 1200,
	step: 1,
	slide: function(event, ui) {
		$("header h1").css("margin-top", ui.value + "px");
		$("#header_heading_position_y").attr("value", ui.value);
	}
});$('input#header_heading_position_y').change(function() {
	var random = $('input#header_heading_position_y').val();
	$('header h1').css('margin-top',random+'px');
	$("#sliderheader_heading_position_y").slider({
		value: random,
		min: 0,
		max: 1200,
		step: 1,
	});
});
$('select#header_heading_position_centered').change(function() {
	var alignment = $('select#header_heading_position_centered').val();
	jQuery('header h1').css('text-align',alignment);
	jQuery('header h1').css('width','100%');
});
$('select#header_heading_display').change(function() {
	var random = $('select.header_heading_display').val();
	jQuery('header div.header h1').css('display',random);
});
var number = parseInt($("header h1").css('font-size'));
$("#header_heading_fontsize").text(number);
$("#sliderheader_heading_fontsize").slider({
	value: number,
	min: 6,
	max: 80,
	step: 1,
	slide: function(event, ui) {
		$("header h1").css("font-size", ui.value + "px");
		$("#header_heading_fontsize").attr("value", ui.value);
	}
});$('input#header_heading_fontsize').change(function() {
	var random = $('input#header_heading_fontsize').val();
	$('header h1').css('font-size',random+'px');
	$("#sliderheader_heading_fontsize").slider({
		value: random,
		min: 6,
		max: 80,
		step: 1,
	});
});
var number = parseInt($("header h1").css('line-height'));
$("#header_heading_line_height").text(number);
$("#sliderheader_heading_line_height").slider({
	value: number,
	min: 6,
	max: 80,
	step: 1,
	slide: function(event, ui) {
		$("header h1").css("line-height", ui.value + "px");
		$("#header_heading_line_height").attr("value", ui.value);
	}
});$('input#header_heading_line_height').change(function() {
	var random = $('input#header_heading_line_height').val();
	$('header h1').css('line-height',random+'px');
	$("#sliderheader_heading_line_height").slider({
		value: random,
		min: 6,
		max: 80,
		step: 1,
	});
});
$('#header_heading_textcolour').change(function() {
	var colour = $('#header_heading_textcolour').val();
	jQuery('header h1').css('color',colour);
});
colour = $('.header_heading_shadow_colour').val();
xcoord = $('.header_heading_shadow_x_coordinate').val();
ycoord = $('.header_heading_shadow_y_coordinate').val();
blur = $('.header_heading_shadow_blur_radius').val();
$("#sliderheader_heading_shadow_blur_radius").slider({
	value: blur, //Sets the slider handle to start at the current value
	min: 0,
	max: 50,

	step: 1,
	slide: function(event, ui) { //This is where we can perform actions based on the slide
		$("#header_heading_shadow_blur_radius").attr("value", ui.value); //This adds that value into the span in the tabs below, so you can see the actual value
		colour = $('.header_heading_shadow_colour').val();
		xcoord = $('.header_heading_shadow_x_coordinate').val();
		ycoord = $('.header_heading_shadow_y_coordinate').val();
		jQuery('header h1').css('textShadow',colour+' '+xcoord+'px '+ycoord+'px '+ui.value+'px');
	}
});
$("#sliderheader_heading_shadow_x_coordinate").slider({
	value: xcoord, //Sets the slider handle to start at the current value
	min: -10,
	max: 10,
	step: 1,
	slide: function(event, ui) { //This is where we can perform actions based on the slide
		$("#header_heading_shadow_x_coordinate").attr("value", ui.value); //This adds that value into the span in the tabs below, so you can see the actual value
		colour = $('#header_heading_shadow_colour').val();
		ycoord = $('#header_heading_shadow_y_coordinate').val();
		blur = $('#header_heading_shadow_blur_radius').val();
		jQuery('header h1').css('textShadow',colour+' '+ui.value+'px '+ycoord+'px '+blur+'px');
	}
});
$("#sliderheader_heading_shadow_y_coordinate").slider({
	value: ycoord, //Sets the slider handle to start at the current value
	min: -10,
	max: 10,
	step: 1,
	slide: function(event, ui) { //This is where we can perform actions based on the slide
		$("#header_heading_shadow_y_coordinate").attr("value", ui.value); //This adds that value into the span in the tabs below, so you can see the actual value
		colour = $('#header_heading_shadow_colour').val();
		xcoord = $('#header_heading_shadow_x_coordinate').val();
		blur = $('#header_heading_shadow_blur_radius').val();
		jQuery('header h1').css('textShadow',colour+' '+xcoord+'px '+ui.value+'px '+blur+'px');
	}
});
$('#header_heading_shadow_colour').change(function() {
	colour = $('#header_heading_shadow_colour').val();
	xcoord = $('#header_heading_shadow_x_coordinate').val();
	ycoord = $('#header_heading_shadow_y_coordinate').val();
	blur = $('#header_heading_shadow_blur_radius').val();
	jQuery('header h1').css('textShadow',colour+' '+xcoord+'px '+ycoord+'px '+blur+'px');
});

var number = parseInt($("header h1").css('border-top-width'));
$("#header_heading_bordertop_width").text(number);
$("#sliderheader_heading_bordertop_width").slider({
	value: number,
	min: 0,
	max: 10,
	step: 1,
	slide: function(event, ui) {
		$("header h1").css("border-top-width", ui.value + "px");
		$("#header_heading_bordertop_width").attr("value", ui.value);
	}
});$('input#header_heading_bordertop_width').change(function() {
	var random = $('input#header_heading_bordertop_width').val();
	$('header h1').css('border-top-width',random+'px');
	$("#sliderheader_heading_bordertop_width").slider({
		value: random,
		min: 0,
		max: 10,
		step: 1,
	});
});
var number = parseInt($("header h1").css('border-bottom-width'));
$("#header_heading_borderbottom_width").text(number);
$("#sliderheader_heading_borderbottom_width").slider({
	value: number,
	min: 0,
	max: 10,
	step: 1,
	slide: function(event, ui) {
		$("header h1").css("border-bottom-width", ui.value + "px");
		$("#header_heading_borderbottom_width").attr("value", ui.value);
	}
});$('input#header_heading_borderbottom_width').change(function() {
	var random = $('input#header_heading_borderbottom_width').val();
	$('header h1').css('border-bottom-width',random+'px');
	$("#sliderheader_heading_borderbottom_width").slider({
		value: random,
		min: 0,
		max: 10,
		step: 1,
	});
});

var number = parseInt($("header h1").css('margin-top'));
$("#header_heading_margin_top").text(number);
$("#sliderheader_heading_margin_top").slider({
	value: number,
	min: 0,
	max: 50,
	step: 1,
	slide: function(event, ui) {
		$("header h1").css("margin-top", ui.value + "px");
		$("#header_heading_margin_top").attr("value", ui.value);
	}
});$('input#header_heading_margin_top').change(function() {
	var random = $('input#header_heading_margin_top').val();
	$('header h1').css('margin-top',random+'px');
	$("#sliderheader_heading_margin_top").slider({
		value: random,
		min: 0,
		max: 50,
		step: 1,
	});
});
var number = parseInt($("header h1").css('margin-right'));
$("#header_heading_margin_right").text(number);
$("#sliderheader_heading_margin_right").slider({
	value: number,
	min: 0,
	max: 50,
	step: 1,
	slide: function(event, ui) {
		$("header h1").css("margin-right", ui.value + "px");
		$("#header_heading_margin_right").attr("value", ui.value);
	}
});$('input#header_heading_margin_right').change(function() {
	var random = $('input#header_heading_margin_right').val();
	$('header h1').css('margin-right',random+'px');
	$("#sliderheader_heading_margin_right").slider({
		value: random,
		min: 0,
		max: 50,
		step: 1,
	});
});
var number = parseInt($("header h1").css('margin-bottom'));
$("#header_heading_margin_bottom").text(number);
$("#sliderheader_heading_margin_bottom").slider({
	value: number,
	min: 0,
	max: 50,
	step: 1,
	slide: function(event, ui) {
		$("header h1").css("margin-bottom", ui.value + "px");
		$("#header_heading_margin_bottom").attr("value", ui.value);
	}
});$('input#header_heading_margin_bottom').change(function() {
	var random = $('input#header_heading_margin_bottom').val();
	$('header h1').css('margin-bottom',random+'px');
	$("#sliderheader_heading_margin_bottom").slider({
		value: random,
		min: 0,
		max: 50,
		step: 1,
	});
});
var number = parseInt($("header h1").css('margin-left'));
$("#header_heading_margin_left").text(number);
$("#sliderheader_heading_margin_left").slider({
	value: number,
	min: 0,
	max: 50,
	step: 1,
	slide: function(event, ui) {
		$("header h1").css("margin-left", ui.value + "px");
		$("#header_heading_margin_left").attr("value", ui.value);
	}
});$('input#header_heading_margin_left').change(function() {
	var random = $('input#header_heading_margin_left').val();
	$('header h1').css('margin-left',random+'px');
	$("#sliderheader_heading_margin_left").slider({
		value: random,
		min: 0,
		max: 50,
		step: 1,
	});
});

var number = parseInt($("header h1").css('padding-top'));
$("#header_heading_padding_top").text(number);
$("#sliderheader_heading_padding_top").slider({
	value: number,
	min: 0,
	max: 50,
	step: 1,
	slide: function(event, ui) {
		$("header h1").css("padding-top", ui.value + "px");
		$("#header_heading_padding_top").attr("value", ui.value);
	}
});$('input#header_heading_padding_top').change(function() {
	var random = $('input#header_heading_padding_top').val();
	$('header h1').css('padding-top',random+'px');
	$("#sliderheader_heading_padding_top").slider({
		value: random,
		min: 0,
		max: 50,
		step: 1,
	});
});
var number = parseInt($("header h1").css('padding-right'));
$("#header_heading_padding_right").text(number);
$("#sliderheader_heading_padding_right").slider({
	value: number,
	min: 0,
	max: 50,
	step: 1,
	slide: function(event, ui) {
		$("header h1").css("padding-right", ui.value + "px");
		$("#header_heading_padding_right").attr("value", ui.value);
	}
});$('input#header_heading_padding_right').change(function() {
	var random = $('input#header_heading_padding_right').val();
	$('header h1').css('padding-right',random+'px');
	$("#sliderheader_heading_padding_right").slider({
		value: random,
		min: 0,
		max: 50,
		step: 1,
	});
});
var number = parseInt($("header h1").css('padding-bottom'));
$("#header_heading_padding_bottom").text(number);
$("#sliderheader_heading_padding_bottom").slider({
	value: number,
	min: 0,
	max: 50,
	step: 1,
	slide: function(event, ui) {
		$("header h1").css("padding-bottom", ui.value + "px");
		$("#header_heading_padding_bottom").attr("value", ui.value);
	}
});$('input#header_heading_padding_bottom').change(function() {
	var random = $('input#header_heading_padding_bottom').val();
	$('header h1').css('padding-bottom',random+'px');
	$("#sliderheader_heading_padding_bottom").slider({
		value: random,
		min: 0,
		max: 50,
		step: 1,
	});
});
var number = parseInt($("header h1").css('padding-left'));
$("#header_heading_padding_left").text(number);
$("#sliderheader_heading_padding_left").slider({
	value: number,
	min: 0,
	max: 50,
	step: 1,
	slide: function(event, ui) {
		$("header h1").css("padding-left", ui.value + "px");
		$("#header_heading_padding_left").attr("value", ui.value);
	}
});$('input#header_heading_padding_left').change(function() {
	var random = $('input#header_heading_padding_left').val();
	$('header h1').css('padding-left',random+'px');
	$("#sliderheader_heading_padding_left").slider({
		value: random,
		min: 0,
		max: 50,
		step: 1,
	});
});

$('select#header_heading_fontfamily').change(function() {
	var random = $('select.header_heading_fontfamily').val();
	jQuery('header h1').css('font-family',random);
});
$('select#header_heading_font_weight').change(function() {
	var random = $('select.header_heading_font_weight').val();
	jQuery('header h1').css('font-weight',random);
});
$('select#header_heading_font_style').change(function() {
	var random = $('select.header_heading_font_style').val();
	jQuery('header h1').css('font-style',random);
});
$('select#header_heading_textdecoration').change(function() {
	var random = $('select.header_heading_textdecoration').val();
	jQuery('header h1').css('text-decoration',random);
});
$('select#header_heading_text_transform').change(function() {
	var random = $('select.header_heading_text_transform').val();
	jQuery('header h1').css('text-transform',random);
});
$('select#header_heading_small_caps').change(function() {
	var random = $('select.header_heading_small_caps').val();
	jQuery('header h1').css('font-variant',random);
});
$('select#header_heading_bordertop_type').change(function() {
	var random = $('select.header_heading_bordertop_type').val();
	jQuery('header h1').css('border-top-style',random);
});
$('select#header_heading_borderbottom_type').change(function() {
	var random = $('select.header_heading_borderbottom_type').val();
	jQuery('header h1').css('border-bottom-style',random);
});

var number = parseInt($("header #description").css('margin-left'));
$("#header_description_position_x").text(number);
$("#sliderheader_description_position_x").slider({
	value: number,
	min: 0,
	max: 1200,
	step: 1,
	slide: function(event, ui) {
		$("header #description").css("margin-left", ui.value + "px");
		$("#header_description_position_x").attr("value", ui.value);
	}
});$('input#header_description_position_x').change(function() {
	var random = $('input#header_description_position_x').val();
	$('header #description').css('margin-left',random+'px');
	$("#sliderheader_description_position_x").slider({
		value: random,
		min: 0,
		max: 1200,
		step: 1,
	});
});
var number = parseInt($("header #description").css('margin-top'));
$("#header_description_position_y").text(number);
$("#sliderheader_description_position_y").slider({
	value: number,
	min: 0,
	max: 1200,
	step: 1,
	slide: function(event, ui) {
		$("header #description").css("margin-top", ui.value + "px");
		$("#header_description_position_y").attr("value", ui.value);
	}
});$('input#header_description_position_y').change(function() {
	var random = $('input#header_description_position_y').val();
	$('header #description').css('margin-top',random+'px');
	$("#sliderheader_description_position_y").slider({
		value: random,
		min: 0,
		max: 1200,
		step: 1,
	});
});
$('select#header_description_display').change(function() {
	var random = $('select.header_description_display').val();
	jQuery('header #description').css('display',random);
});
var number = parseInt($("header #description").css('font-size'));
$("#header_description_fontsize").text(number);
$("#sliderheader_description_fontsize").slider({
	value: number,
	min: 6,
	max: 80,
	step: 1,
	slide: function(event, ui) {
		$("header #description").css("font-size", ui.value + "px");
		$("#header_description_fontsize").attr("value", ui.value);
	}
});$('input#header_description_fontsize').change(function() {
	var random = $('input#header_description_fontsize').val();
	$('header #description').css('font-size',random+'px');
	$("#sliderheader_description_fontsize").slider({
		value: random,
		min: 6,
		max: 80,
		step: 1,
	});
});
var number = parseInt($("header #description").css('line-height'));
$("#header_description_line_height").text(number);
$("#sliderheader_description_line_height").slider({
	value: number,
	min: 6,
	max: 80,
	step: 1,
	slide: function(event, ui) {
		$("header #description").css("line-height", ui.value + "px");
		$("#header_description_line_height").attr("value", ui.value);
	}
});$('input#header_description_line_height').change(function() {
	var random = $('input#header_description_line_height').val();
	$('header #description').css('line-height',random+'px');
	$("#sliderheader_description_line_height").slider({
		value: random,
		min: 6,
		max: 80,
		step: 1,
	});
});
$('#header_description_textcolour').change(function() {
	var colour = $('#header_description_textcolour').val();
	jQuery('header #description').css('color',colour);
});
colour = $('.header_description_shadow_colour').val();
xcoord = $('.header_description_shadow_x_coordinate').val();
ycoord = $('.header_description_shadow_y_coordinate').val();
blur = $('.header_description_shadow_blur_radius').val();
$("#sliderheader_description_shadow_blur_radius").slider({
	value: blur, //Sets the slider handle to start at the current value
	min: 0,
	max: 50,

	step: 1,
	slide: function(event, ui) { //This is where we can perform actions based on the slide
		$("#header_description_shadow_blur_radius").attr("value", ui.value); //This adds that value into the span in the tabs below, so you can see the actual value
		colour = $('.header_description_shadow_colour').val();
		xcoord = $('.header_description_shadow_x_coordinate').val();
		ycoord = $('.header_description_shadow_y_coordinate').val();
		jQuery('header #description').css('textShadow',colour+' '+xcoord+'px '+ycoord+'px '+ui.value+'px');
	}
});
$("#sliderheader_description_shadow_x_coordinate").slider({
	value: xcoord, //Sets the slider handle to start at the current value
	min: -10,
	max: 10,
	step: 1,
	slide: function(event, ui) { //This is where we can perform actions based on the slide
		$("#header_description_shadow_x_coordinate").attr("value", ui.value); //This adds that value into the span in the tabs below, so you can see the actual value
		colour = $('#header_description_shadow_colour').val();
		ycoord = $('#header_description_shadow_y_coordinate').val();
		blur = $('#header_description_shadow_blur_radius').val();
		jQuery('header #description').css('textShadow',colour+' '+ui.value+'px '+ycoord+'px '+blur+'px');
	}
});
$("#sliderheader_description_shadow_y_coordinate").slider({
	value: ycoord, //Sets the slider handle to start at the current value
	min: -10,
	max: 10,
	step: 1,
	slide: function(event, ui) { //This is where we can perform actions based on the slide
		$("#header_description_shadow_y_coordinate").attr("value", ui.value); //This adds that value into the span in the tabs below, so you can see the actual value
		colour = $('#header_description_shadow_colour').val();
		xcoord = $('#header_description_shadow_x_coordinate').val();
		blur = $('#header_description_shadow_blur_radius').val();
		jQuery('header #description').css('textShadow',colour+' '+xcoord+'px '+ui.value+'px '+blur+'px');
	}
});
$('#header_description_shadow_colour').change(function() {
	colour = $('#header_description_shadow_colour').val();
	xcoord = $('#header_description_shadow_x_coordinate').val();
	ycoord = $('#header_description_shadow_y_coordinate').val();
	blur = $('#header_description_shadow_blur_radius').val();
	jQuery('header #description').css('textShadow',colour+' '+xcoord+'px '+ycoord+'px '+blur+'px');
});

var number = parseInt($("header #description").css('border-top-width'));
$("#header_description_bordertop_width").text(number);
$("#sliderheader_description_bordertop_width").slider({
	value: number,
	min: 0,
	max: 10,
	step: 1,
	slide: function(event, ui) {
		$("header #description").css("border-top-width", ui.value + "px");
		$("#header_description_bordertop_width").attr("value", ui.value);
	}
});$('input#header_description_bordertop_width').change(function() {
	var random = $('input#header_description_bordertop_width').val();
	$('header #description').css('border-top-width',random+'px');
	$("#sliderheader_description_bordertop_width").slider({
		value: random,
		min: 0,
		max: 10,
		step: 1,
	});
});
var number = parseInt($("header #description").css('border-bottom-width'));
$("#header_description_borderbottom_width").text(number);
$("#sliderheader_description_borderbottom_width").slider({
	value: number,
	min: 0,
	max: 10,
	step: 1,
	slide: function(event, ui) {
		$("header #description").css("border-bottom-width", ui.value + "px");
		$("#header_description_borderbottom_width").attr("value", ui.value);
	}
});$('input#header_description_borderbottom_width').change(function() {
	var random = $('input#header_description_borderbottom_width').val();
	$('header #description').css('border-bottom-width',random+'px');
	$("#sliderheader_description_borderbottom_width").slider({
		value: random,
		min: 0,
		max: 10,
		step: 1,
	});
});

var number = parseInt($("header #description").css('margin-top'));
$("#header_description_margin_top").text(number);
$("#sliderheader_description_margin_top").slider({
	value: number,
	min: 0,
	max: 50,
	step: 1,
	slide: function(event, ui) {
		$("header #description").css("margin-top", ui.value + "px");
		$("#header_description_margin_top").attr("value", ui.value);
	}
});$('input#header_description_margin_top').change(function() {
	var random = $('input#header_description_margin_top').val();
	$('header #description').css('margin-top',random+'px');
	$("#sliderheader_description_margin_top").slider({
		value: random,
		min: 0,
		max: 50,
		step: 1,
	});
});
var number = parseInt($("header #description").css('margin-right'));
$("#header_description_margin_right").text(number);
$("#sliderheader_description_margin_right").slider({
	value: number,
	min: 0,
	max: 50,
	step: 1,
	slide: function(event, ui) {
		$("header #description").css("margin-right", ui.value + "px");
		$("#header_description_margin_right").attr("value", ui.value);
	}
});$('input#header_description_margin_right').change(function() {
	var random = $('input#header_description_margin_right').val();
	$('header #description').css('margin-right',random+'px');
	$("#sliderheader_description_margin_right").slider({
		value: random,
		min: 0,
		max: 50,
		step: 1,
	});
});
var number = parseInt($("header #description").css('margin-bottom'));
$("#header_description_margin_bottom").text(number);
$("#sliderheader_description_margin_bottom").slider({
	value: number,
	min: 0,
	max: 50,
	step: 1,
	slide: function(event, ui) {
		$("header #description").css("margin-bottom", ui.value + "px");
		$("#header_description_margin_bottom").attr("value", ui.value);
	}
});$('input#header_description_margin_bottom').change(function() {
	var random = $('input#header_description_margin_bottom').val();
	$('header #description').css('margin-bottom',random+'px');
	$("#sliderheader_description_margin_bottom").slider({
		value: random,
		min: 0,
		max: 50,
		step: 1,
	});
});
var number = parseInt($("header #description").css('margin-left'));
$("#header_description_margin_left").text(number);
$("#sliderheader_description_margin_left").slider({
	value: number,
	min: 0,
	max: 50,
	step: 1,
	slide: function(event, ui) {
		$("header #description").css("margin-left", ui.value + "px");
		$("#header_description_margin_left").attr("value", ui.value);
	}
});$('input#header_description_margin_left').change(function() {
	var random = $('input#header_description_margin_left').val();
	$('header #description').css('margin-left',random+'px');
	$("#sliderheader_description_margin_left").slider({
		value: random,
		min: 0,
		max: 50,
		step: 1,
	});
});

var number = parseInt($("header #description").css('padding-top'));
$("#header_description_padding_top").text(number);
$("#sliderheader_description_padding_top").slider({
	value: number,
	min: 0,
	max: 50,
	step: 1,
	slide: function(event, ui) {
		$("header #description").css("padding-top", ui.value + "px");
		$("#header_description_padding_top").attr("value", ui.value);
	}
});$('input#header_description_padding_top').change(function() {
	var random = $('input#header_description_padding_top').val();
	$('header #description').css('padding-top',random+'px');
	$("#sliderheader_description_padding_top").slider({
		value: random,
		min: 0,
		max: 50,
		step: 1,
	});
});
var number = parseInt($("header #description").css('padding-right'));
$("#header_description_padding_right").text(number);
$("#sliderheader_description_padding_right").slider({
	value: number,
	min: 0,
	max: 50,
	step: 1,
	slide: function(event, ui) {
		$("header #description").css("padding-right", ui.value + "px");
		$("#header_description_padding_right").attr("value", ui.value);
	}
});$('input#header_description_padding_right').change(function() {
	var random = $('input#header_description_padding_right').val();
	$('header #description').css('padding-right',random+'px');
	$("#sliderheader_description_padding_right").slider({
		value: random,
		min: 0,
		max: 50,
		step: 1,
	});
});
var number = parseInt($("header #description").css('padding-bottom'));
$("#header_description_padding_bottom").text(number);
$("#sliderheader_description_padding_bottom").slider({
	value: number,
	min: 0,
	max: 50,
	step: 1,
	slide: function(event, ui) {
		$("header #description").css("padding-bottom", ui.value + "px");
		$("#header_description_padding_bottom").attr("value", ui.value);
	}
});$('input#header_description_padding_bottom').change(function() {
	var random = $('input#header_description_padding_bottom').val();
	$('header #description').css('padding-bottom',random+'px');
	$("#sliderheader_description_padding_bottom").slider({
		value: random,
		min: 0,
		max: 50,
		step: 1,
	});
});
var number = parseInt($("header #description").css('padding-left'));
$("#header_description_padding_left").text(number);
$("#sliderheader_description_padding_left").slider({
	value: number,
	min: 0,
	max: 50,
	step: 1,
	slide: function(event, ui) {
		$("header #description").css("padding-left", ui.value + "px");
		$("#header_description_padding_left").attr("value", ui.value);
	}
});$('input#header_description_padding_left').change(function() {
	var random = $('input#header_description_padding_left').val();
	$('header #description').css('padding-left',random+'px');
	$("#sliderheader_description_padding_left").slider({
		value: random,
		min: 0,
		max: 50,
		step: 1,
	});
});

$('select#header_description_fontfamily').change(function() {
	var random = $('select.header_description_fontfamily').val();
	jQuery('header #description').css('font-family',random);
});
$('select#header_description_font_weight').change(function() {
	var random = $('select.header_description_font_weight').val();
	jQuery('header #description').css('font-weight',random);
});
$('select#header_description_font_style').change(function() {
	var random = $('select.header_description_font_style').val();
	jQuery('header #description').css('font-style',random);
});
$('select#header_description_textdecoration').change(function() {
	var random = $('select.header_description_textdecoration').val();
	jQuery('header #description').css('text-decoration',random);
});
$('select#header_description_text_transform').change(function() {
	var random = $('select.header_description_text_transform').val();
	jQuery('header #description').css('text-transform',random);
});
$('select#header_description_small_caps').change(function() {
	var random = $('select.header_description_small_caps').val();
	jQuery('header #description').css('font-variant',random);
});
$('select#header_description_bordertop_type').change(function() {
	var random = $('select.header_description_bordertop_type').val();
	jQuery('header #description').css('border-top-style',random);
});
$('select#header_description_borderbottom_type').change(function() {
	var random = $('select.header_description_borderbottom_type').val();
	jQuery('header #description').css('border-bottom-style',random);
});

$('select#header_description_position_centered').change(function() {
	var alignment = $('select#header_description_position_centered').val();
	jQuery('header #description').css('text-align',alignment);
	jQuery('header #description').css('width','100%');
});
$('select#header_logo_display').change(function() {
	var random = $('select.header_logo_display').val();
	jQuery('header #logo').css('display',random);
});
var number = parseInt($("header #logo").css('width'));
$("#header_logo_width").text(number);
$("#sliderheader_logo_width").slider({
	value: number,
	min: 0,
	max: 800,
	step: 1,
	slide: function(event, ui) {
		$("header #logo").css("width", ui.value + "px");
		$("#header_logo_width").attr("value", ui.value);
	}
});$('input#header_logo_width').change(function() {
	var random = $('input#header_logo_width').val();
	$('header #logo').css('width',random+'px');
	$("#sliderheader_logo_width").slider({
		value: random,
		min: 0,
		max: 800,
		step: 1,
	});
});
var number = parseInt($("header #logo").css('height'));
$("#header_logo_height").text(number);
$("#sliderheader_logo_height").slider({
	value: number,
	min: 0,
	max: 800,
	step: 1,
	slide: function(event, ui) {
		$("header #logo").css("height", ui.value + "px");
		$("#header_logo_height").attr("value", ui.value);
	}
});$('input#header_logo_height').change(function() {
	var random = $('input#header_logo_height').val();
	$('header #logo').css('height',random+'px');
	$("#sliderheader_logo_height").slider({
		value: random,
		min: 0,
		max: 800,
		step: 1,
	});
});
var number = parseInt($("header #logo").css('margin-left'));
$("#header_logo_position_x").text(number);
$("#sliderheader_logo_position_x").slider({
	value: number,
	min: 0,
	max: 800,
	step: 1,
	slide: function(event, ui) {
		$("header #logo").css("margin-left", ui.value + "px");
		$("#header_logo_position_x").attr("value", ui.value);
	}
});$('input#header_logo_position_x').change(function() {
	var random = $('input#header_logo_position_x').val();
	$('header #logo').css('margin-left',random+'px');
	$("#sliderheader_logo_position_x").slider({
		value: random,
		min: 0,
		max: 800,
		step: 1,
	});
});
var number = parseInt($("header #logo").css('margin-top'));
$("#header_logo_position_y").text(number);
$("#sliderheader_logo_position_y").slider({
	value: number,
	min: 0,
	max: 800,
	step: 1,
	slide: function(event, ui) {
		$("header #logo").css("margin-top", ui.value + "px");
		$("#header_logo_position_y").attr("value", ui.value);
	}
});$('input#header_logo_position_y').change(function() {
	var random = $('input#header_logo_position_y').val();
	$('header #logo').css('margin-top',random+'px');
	$("#sliderheader_logo_position_y").slider({
		value: random,
		min: 0,
		max: 800,
		step: 1,
	});
});
$('select#header_searchbox_display').change(function() {
	var random = $('select.header_searchbox_display').val();
	jQuery('header #search').css('display',random);
});
var number = parseInt($("header #search").css('width'));
$("#header_searchbox_width").text(number);
$("#sliderheader_searchbox_width").slider({
	value: number,
	min: 0,
	max: 800,
	step: 1,
	slide: function(event, ui) {
		$("header #search").css("width", ui.value + "px");
		$("#header_searchbox_width").attr("value", ui.value);
	}
});$('input#header_searchbox_width').change(function() {
	var random = $('input#header_searchbox_width').val();
	$('header #search').css('width',random+'px');
	$("#sliderheader_searchbox_width").slider({
		value: random,
		min: 0,
		max: 800,
		step: 1,
	});
});
var number = parseInt($("header #search").css('height'));
$("#header_searchbox_height").text(number);
$("#sliderheader_searchbox_height").slider({
	value: number,
	min: 0,
	max: 800,
	step: 1,
	slide: function(event, ui) {
		$("header #search").css("height", ui.value + "px");
		$("#header_searchbox_height").attr("value", ui.value);
	}
});$('input#header_searchbox_height').change(function() {
	var random = $('input#header_searchbox_height').val();
	$('header #search').css('height',random+'px');
	$("#sliderheader_searchbox_height").slider({
		value: random,
		min: 0,
		max: 800,
		step: 1,
	});
});
var number = parseInt($("header #search").css('margin-left'));
$("#header_searchbox_position_x").text(number);
$("#sliderheader_searchbox_position_x").slider({
	value: number,
	min: 0,
	max: 800,
	step: 1,
	slide: function(event, ui) {
		$("header #search").css("margin-left", ui.value + "px");
		$("#header_searchbox_position_x").attr("value", ui.value);
	}
});$('input#header_searchbox_position_x').change(function() {
	var random = $('input#header_searchbox_position_x').val();
	$('header #search').css('margin-left',random+'px');
	$("#sliderheader_searchbox_position_x").slider({
		value: random,
		min: 0,
		max: 800,
		step: 1,
	});
});
var number = parseInt($("header #search").css('margin-top'));
$("#header_searchbox_position_y").text(number);
$("#sliderheader_searchbox_position_y").slider({
	value: number,
	min: 0,
	max: 800,
	step: 1,
	slide: function(event, ui) {
		$("header #search").css("margin-top", ui.value + "px");
		$("#header_searchbox_position_y").attr("value", ui.value);
	}
});$('input#header_searchbox_position_y').change(function() {
	var random = $('input#header_searchbox_position_y').val();
	$('header #search').css('margin-top',random+'px');
	$("#sliderheader_searchbox_position_y").slider({
		value: random,
		min: 0,
		max: 800,
		step: 1,
	});
});
var number = parseInt($("#search input[type=text]").css('font-size'));
$("#searchtext_fontsize").text(number);
$("#slidersearchtext_fontsize").slider({
	value: number,
	min: 6,
	max: 80,
	step: 1,
	slide: function(event, ui) {
		$("#search input[type=text]").css("font-size", ui.value + "px");
		$("#searchtext_fontsize").attr("value", ui.value);
	}
});$('input#searchtext_fontsize').change(function() {
	var random = $('input#searchtext_fontsize').val();
	$('#search input[type=text]').css('font-size',random+'px');
	$("#slidersearchtext_fontsize").slider({
		value: random,
		min: 6,
		max: 80,
		step: 1,
	});
});
var number = parseInt($("#search input[type=text]").css('line-height'));
$("#searchtext_line_height").text(number);
$("#slidersearchtext_line_height").slider({
	value: number,
	min: 6,
	max: 80,
	step: 1,
	slide: function(event, ui) {
		$("#search input[type=text]").css("line-height", ui.value + "px");
		$("#searchtext_line_height").attr("value", ui.value);
	}
});$('input#searchtext_line_height').change(function() {
	var random = $('input#searchtext_line_height').val();
	$('#search input[type=text]').css('line-height',random+'px');
	$("#slidersearchtext_line_height").slider({
		value: random,
		min: 6,
		max: 80,
		step: 1,
	});
});
$('#searchtext_textcolour').change(function() {
	var colour = $('#searchtext_textcolour').val();
	jQuery('#search input[type=text]').css('color',colour);
});
colour = $('.searchtext_shadow_colour').val();
xcoord = $('.searchtext_shadow_x_coordinate').val();
ycoord = $('.searchtext_shadow_y_coordinate').val();
blur = $('.searchtext_shadow_blur_radius').val();
$("#slidersearchtext_shadow_blur_radius").slider({
	value: blur, //Sets the slider handle to start at the current value
	min: 0,
	max: 50,

	step: 1,
	slide: function(event, ui) { //This is where we can perform actions based on the slide
		$("#searchtext_shadow_blur_radius").attr("value", ui.value); //This adds that value into the span in the tabs below, so you can see the actual value
		colour = $('.searchtext_shadow_colour').val();
		xcoord = $('.searchtext_shadow_x_coordinate').val();
		ycoord = $('.searchtext_shadow_y_coordinate').val();
		jQuery('#search input[type=text]').css('textShadow',colour+' '+xcoord+'px '+ycoord+'px '+ui.value+'px');
	}
});
$("#slidersearchtext_shadow_x_coordinate").slider({
	value: xcoord, //Sets the slider handle to start at the current value
	min: -10,
	max: 10,
	step: 1,
	slide: function(event, ui) { //This is where we can perform actions based on the slide
		$("#searchtext_shadow_x_coordinate").attr("value", ui.value); //This adds that value into the span in the tabs below, so you can see the actual value
		colour = $('#searchtext_shadow_colour').val();
		ycoord = $('#searchtext_shadow_y_coordinate').val();
		blur = $('#searchtext_shadow_blur_radius').val();
		jQuery('#search input[type=text]').css('textShadow',colour+' '+ui.value+'px '+ycoord+'px '+blur+'px');
	}
});
$("#slidersearchtext_shadow_y_coordinate").slider({
	value: ycoord, //Sets the slider handle to start at the current value
	min: -10,
	max: 10,
	step: 1,
	slide: function(event, ui) { //This is where we can perform actions based on the slide
		$("#searchtext_shadow_y_coordinate").attr("value", ui.value); //This adds that value into the span in the tabs below, so you can see the actual value
		colour = $('#searchtext_shadow_colour').val();
		xcoord = $('#searchtext_shadow_x_coordinate').val();
		blur = $('#searchtext_shadow_blur_radius').val();
		jQuery('#search input[type=text]').css('textShadow',colour+' '+xcoord+'px '+ui.value+'px '+blur+'px');
	}
});
$('#searchtext_shadow_colour').change(function() {
	colour = $('#searchtext_shadow_colour').val();
	xcoord = $('#searchtext_shadow_x_coordinate').val();
	ycoord = $('#searchtext_shadow_y_coordinate').val();
	blur = $('#searchtext_shadow_blur_radius').val();
	jQuery('#search input[type=text]').css('textShadow',colour+' '+xcoord+'px '+ycoord+'px '+blur+'px');
});

var number = parseInt($("#search input[type=text]").css('border-top-width'));
$("#searchtext_bordertop_width").text(number);
$("#slidersearchtext_bordertop_width").slider({
	value: number,
	min: 0,
	max: 10,
	step: 1,
	slide: function(event, ui) {
		$("#search input[type=text]").css("border-top-width", ui.value + "px");
		$("#searchtext_bordertop_width").attr("value", ui.value);
	}
});$('input#searchtext_bordertop_width').change(function() {
	var random = $('input#searchtext_bordertop_width').val();
	$('#search input[type=text]').css('border-top-width',random+'px');
	$("#slidersearchtext_bordertop_width").slider({
		value: random,
		min: 0,
		max: 10,
		step: 1,
	});
});
var number = parseInt($("#search input[type=text]").css('border-bottom-width'));
$("#searchtext_borderbottom_width").text(number);
$("#slidersearchtext_borderbottom_width").slider({
	value: number,
	min: 0,
	max: 10,
	step: 1,
	slide: function(event, ui) {
		$("#search input[type=text]").css("border-bottom-width", ui.value + "px");
		$("#searchtext_borderbottom_width").attr("value", ui.value);
	}
});$('input#searchtext_borderbottom_width').change(function() {
	var random = $('input#searchtext_borderbottom_width').val();
	$('#search input[type=text]').css('border-bottom-width',random+'px');
	$("#slidersearchtext_borderbottom_width").slider({
		value: random,
		min: 0,
		max: 10,
		step: 1,
	});
});

var number = parseInt($("#search input[type=text]").css('margin-top'));
$("#searchtext_margin_top").text(number);
$("#slidersearchtext_margin_top").slider({
	value: number,
	min: 0,
	max: 50,
	step: 1,
	slide: function(event, ui) {
		$("#search input[type=text]").css("margin-top", ui.value + "px");
		$("#searchtext_margin_top").attr("value", ui.value);
	}
});$('input#searchtext_margin_top').change(function() {
	var random = $('input#searchtext_margin_top').val();
	$('#search input[type=text]').css('margin-top',random+'px');
	$("#slidersearchtext_margin_top").slider({
		value: random,
		min: 0,
		max: 50,
		step: 1,
	});
});
var number = parseInt($("#search input[type=text]").css('margin-right'));
$("#searchtext_margin_right").text(number);
$("#slidersearchtext_margin_right").slider({
	value: number,
	min: 0,
	max: 50,
	step: 1,
	slide: function(event, ui) {
		$("#search input[type=text]").css("margin-right", ui.value + "px");
		$("#searchtext_margin_right").attr("value", ui.value);
	}
});$('input#searchtext_margin_right').change(function() {
	var random = $('input#searchtext_margin_right').val();
	$('#search input[type=text]').css('margin-right',random+'px');
	$("#slidersearchtext_margin_right").slider({
		value: random,
		min: 0,
		max: 50,
		step: 1,
	});
});
var number = parseInt($("#search input[type=text]").css('margin-bottom'));
$("#searchtext_margin_bottom").text(number);
$("#slidersearchtext_margin_bottom").slider({
	value: number,
	min: 0,
	max: 50,
	step: 1,
	slide: function(event, ui) {
		$("#search input[type=text]").css("margin-bottom", ui.value + "px");
		$("#searchtext_margin_bottom").attr("value", ui.value);
	}
});$('input#searchtext_margin_bottom').change(function() {
	var random = $('input#searchtext_margin_bottom').val();
	$('#search input[type=text]').css('margin-bottom',random+'px');
	$("#slidersearchtext_margin_bottom").slider({
		value: random,
		min: 0,
		max: 50,
		step: 1,
	});
});
var number = parseInt($("#search input[type=text]").css('margin-left'));
$("#searchtext_margin_left").text(number);
$("#slidersearchtext_margin_left").slider({
	value: number,
	min: 0,
	max: 50,
	step: 1,
	slide: function(event, ui) {
		$("#search input[type=text]").css("margin-left", ui.value + "px");
		$("#searchtext_margin_left").attr("value", ui.value);
	}
});$('input#searchtext_margin_left').change(function() {
	var random = $('input#searchtext_margin_left').val();
	$('#search input[type=text]').css('margin-left',random+'px');
	$("#slidersearchtext_margin_left").slider({
		value: random,
		min: 0,
		max: 50,
		step: 1,
	});
});

var number = parseInt($("#search input[type=text]").css('padding-top'));
$("#searchtext_padding_top").text(number);
$("#slidersearchtext_padding_top").slider({
	value: number,
	min: 0,
	max: 50,
	step: 1,
	slide: function(event, ui) {
		$("#search input[type=text]").css("padding-top", ui.value + "px");
		$("#searchtext_padding_top").attr("value", ui.value);
	}
});$('input#searchtext_padding_top').change(function() {
	var random = $('input#searchtext_padding_top').val();
	$('#search input[type=text]').css('padding-top',random+'px');
	$("#slidersearchtext_padding_top").slider({
		value: random,
		min: 0,
		max: 50,
		step: 1,
	});
});
var number = parseInt($("#search input[type=text]").css('padding-right'));
$("#searchtext_padding_right").text(number);
$("#slidersearchtext_padding_right").slider({
	value: number,
	min: 0,
	max: 50,
	step: 1,
	slide: function(event, ui) {
		$("#search input[type=text]").css("padding-right", ui.value + "px");
		$("#searchtext_padding_right").attr("value", ui.value);
	}
});$('input#searchtext_padding_right').change(function() {
	var random = $('input#searchtext_padding_right').val();
	$('#search input[type=text]').css('padding-right',random+'px');
	$("#slidersearchtext_padding_right").slider({
		value: random,
		min: 0,
		max: 50,
		step: 1,
	});
});
var number = parseInt($("#search input[type=text]").css('padding-bottom'));
$("#searchtext_padding_bottom").text(number);
$("#slidersearchtext_padding_bottom").slider({
	value: number,
	min: 0,
	max: 50,
	step: 1,
	slide: function(event, ui) {
		$("#search input[type=text]").css("padding-bottom", ui.value + "px");
		$("#searchtext_padding_bottom").attr("value", ui.value);
	}
});$('input#searchtext_padding_bottom').change(function() {
	var random = $('input#searchtext_padding_bottom').val();
	$('#search input[type=text]').css('padding-bottom',random+'px');
	$("#slidersearchtext_padding_bottom").slider({
		value: random,
		min: 0,
		max: 50,
		step: 1,
	});
});
var number = parseInt($("#search input[type=text]").css('padding-left'));
$("#searchtext_padding_left").text(number);
$("#slidersearchtext_padding_left").slider({
	value: number,
	min: 0,
	max: 50,
	step: 1,
	slide: function(event, ui) {
		$("#search input[type=text]").css("padding-left", ui.value + "px");
		$("#searchtext_padding_left").attr("value", ui.value);
	}
});$('input#searchtext_padding_left').change(function() {
	var random = $('input#searchtext_padding_left').val();
	$('#search input[type=text]').css('padding-left',random+'px');
	$("#slidersearchtext_padding_left").slider({
		value: random,
		min: 0,
		max: 50,
		step: 1,
	});
});

$('select#searchtext_fontfamily').change(function() {
	var random = $('select.searchtext_fontfamily').val();
	jQuery('#search input[type=text]').css('font-family',random);
});
$('select#searchtext_font_weight').change(function() {
	var random = $('select.searchtext_font_weight').val();
	jQuery('#search input[type=text]').css('font-weight',random);
});
$('select#searchtext_font_style').change(function() {
	var random = $('select.searchtext_font_style').val();
	jQuery('#search input[type=text]').css('font-style',random);
});
$('select#searchtext_textdecoration').change(function() {
	var random = $('select.searchtext_textdecoration').val();
	jQuery('#search input[type=text]').css('text-decoration',random);
});
$('select#searchtext_text_transform').change(function() {
	var random = $('select.searchtext_text_transform').val();
	jQuery('#search input[type=text]').css('text-transform',random);
});
$('select#searchtext_small_caps').change(function() {
	var random = $('select.searchtext_small_caps').val();
	jQuery('#search input[type=text]').css('font-variant',random);
});
$('select#searchtext_bordertop_type').change(function() {
	var random = $('select.searchtext_bordertop_type').val();
	jQuery('#search input[type=text]').css('border-top-style',random);
});
$('select#searchtext_borderbottom_type').change(function() {
	var random = $('select.searchtext_borderbottom_type').val();
	jQuery('#search input[type=text]').css('border-bottom-style',random);
});

var number = parseInt($("header #search input[type=text]").css('width'));
$("#header_searchbox_text_width").text(number);
$("#sliderheader_searchbox_text_width").slider({
	value: number,
	min: 0,
	max: 400,
	step: 1,
	slide: function(event, ui) {
		$("header #search input[type=text]").css("width", ui.value + "px");
		$("#header_searchbox_text_width").attr("value", ui.value);
	}
});$('input#header_searchbox_text_width').change(function() {
	var random = $('input#header_searchbox_text_width').val();
	$('header #search input[type=text]').css('width',random+'px');
	$("#sliderheader_searchbox_text_width").slider({
		value: random,
		min: 0,
		max: 400,
		step: 1,
	});
});
var number = parseInt($("header #search input[type=text]").css('height'));
$("#header_searchbox_text_height").text(number);
$("#sliderheader_searchbox_text_height").slider({
	value: number,
	min: 0,
	max: 400,
	step: 1,
	slide: function(event, ui) {
		$("header #search input[type=text]").css("height", ui.value + "px");
		$("#header_searchbox_text_height").attr("value", ui.value);
	}
});$('input#header_searchbox_text_height').change(function() {
	var random = $('input#header_searchbox_text_height').val();
	$('header #search input[type=text]').css('height',random+'px');
	$("#sliderheader_searchbox_text_height").slider({
		value: random,
		min: 0,
		max: 400,
		step: 1,
	});
});
var number = parseInt($("header #search input[type=text]").css('left'));
$("#header_searchbox_text_position_x").text(number);
$("#sliderheader_searchbox_text_position_x").slider({
	value: number,
	min: 0,
	max: 400,
	step: 1,
	slide: function(event, ui) {
		$("header #search input[type=text]").css("left", ui.value + "px");
		$("#header_searchbox_text_position_x").attr("value", ui.value);
	}
});$('input#header_searchbox_text_position_x').change(function() {
	var random = $('input#header_searchbox_text_position_x').val();
	$('header #search input[type=text]').css('left',random+'px');
	$("#sliderheader_searchbox_text_position_x").slider({
		value: random,
		min: 0,
		max: 400,
		step: 1,
	});
});
var number = parseInt($("header #search input[type=text]").css('top'));
$("#header_searchbox_text_position_y").text(number);
$("#sliderheader_searchbox_text_position_y").slider({
	value: number,
	min: 0,
	max: 400,
	step: 1,
	slide: function(event, ui) {
		$("header #search input[type=text]").css("top", ui.value + "px");
		$("#header_searchbox_text_position_y").attr("value", ui.value);
	}
});$('input#header_searchbox_text_position_y').change(function() {
	var random = $('input#header_searchbox_text_position_y').val();
	$('header #search input[type=text]').css('top',random+'px');
	$("#sliderheader_searchbox_text_position_y").slider({
		value: random,
		min: 0,
		max: 400,
		step: 1,
	});
});
var number = parseInt($("#search input[type=submit]").css('font-size'));
$("#searchsubmit_fontsize").text(number);
$("#slidersearchsubmit_fontsize").slider({
	value: number,
	min: 6,
	max: 80,
	step: 1,
	slide: function(event, ui) {
		$("#search input[type=submit]").css("font-size", ui.value + "px");
		$("#searchsubmit_fontsize").attr("value", ui.value);
	}
});$('input#searchsubmit_fontsize').change(function() {
	var random = $('input#searchsubmit_fontsize').val();
	$('#search input[type=submit]').css('font-size',random+'px');
	$("#slidersearchsubmit_fontsize").slider({
		value: random,
		min: 6,
		max: 80,
		step: 1,
	});
});
var number = parseInt($("#search input[type=submit]").css('line-height'));
$("#searchsubmit_line_height").text(number);
$("#slidersearchsubmit_line_height").slider({
	value: number,
	min: 6,
	max: 80,
	step: 1,
	slide: function(event, ui) {
		$("#search input[type=submit]").css("line-height", ui.value + "px");
		$("#searchsubmit_line_height").attr("value", ui.value);
	}
});$('input#searchsubmit_line_height').change(function() {
	var random = $('input#searchsubmit_line_height').val();
	$('#search input[type=submit]').css('line-height',random+'px');
	$("#slidersearchsubmit_line_height").slider({
		value: random,
		min: 6,
		max: 80,
		step: 1,
	});
});
$('#searchsubmit_textcolour').change(function() {
	var colour = $('#searchsubmit_textcolour').val();
	jQuery('#search input[type=submit]').css('color',colour);
});
colour = $('.searchsubmit_shadow_colour').val();
xcoord = $('.searchsubmit_shadow_x_coordinate').val();
ycoord = $('.searchsubmit_shadow_y_coordinate').val();
blur = $('.searchsubmit_shadow_blur_radius').val();
$("#slidersearchsubmit_shadow_blur_radius").slider({
	value: blur, //Sets the slider handle to start at the current value
	min: 0,
	max: 50,

	step: 1,
	slide: function(event, ui) { //This is where we can perform actions based on the slide
		$("#searchsubmit_shadow_blur_radius").attr("value", ui.value); //This adds that value into the span in the tabs below, so you can see the actual value
		colour = $('.searchsubmit_shadow_colour').val();
		xcoord = $('.searchsubmit_shadow_x_coordinate').val();
		ycoord = $('.searchsubmit_shadow_y_coordinate').val();
		jQuery('#search input[type=submit]').css('textShadow',colour+' '+xcoord+'px '+ycoord+'px '+ui.value+'px');
	}
});
$("#slidersearchsubmit_shadow_x_coordinate").slider({
	value: xcoord, //Sets the slider handle to start at the current value
	min: -10,
	max: 10,
	step: 1,
	slide: function(event, ui) { //This is where we can perform actions based on the slide
		$("#searchsubmit_shadow_x_coordinate").attr("value", ui.value); //This adds that value into the span in the tabs below, so you can see the actual value
		colour = $('#searchsubmit_shadow_colour').val();
		ycoord = $('#searchsubmit_shadow_y_coordinate').val();
		blur = $('#searchsubmit_shadow_blur_radius').val();
		jQuery('#search input[type=submit]').css('textShadow',colour+' '+ui.value+'px '+ycoord+'px '+blur+'px');
	}
});
$("#slidersearchsubmit_shadow_y_coordinate").slider({
	value: ycoord, //Sets the slider handle to start at the current value
	min: -10,
	max: 10,
	step: 1,
	slide: function(event, ui) { //This is where we can perform actions based on the slide
		$("#searchsubmit_shadow_y_coordinate").attr("value", ui.value); //This adds that value into the span in the tabs below, so you can see the actual value
		colour = $('#searchsubmit_shadow_colour').val();
		xcoord = $('#searchsubmit_shadow_x_coordinate').val();
		blur = $('#searchsubmit_shadow_blur_radius').val();
		jQuery('#search input[type=submit]').css('textShadow',colour+' '+xcoord+'px '+ui.value+'px '+blur+'px');
	}
});
$('#searchsubmit_shadow_colour').change(function() {
	colour = $('#searchsubmit_shadow_colour').val();
	xcoord = $('#searchsubmit_shadow_x_coordinate').val();
	ycoord = $('#searchsubmit_shadow_y_coordinate').val();
	blur = $('#searchsubmit_shadow_blur_radius').val();
	jQuery('#search input[type=submit]').css('textShadow',colour+' '+xcoord+'px '+ycoord+'px '+blur+'px');
});

var number = parseInt($("#search input[type=submit]").css('border-top-width'));
$("#searchsubmit_bordertop_width").text(number);
$("#slidersearchsubmit_bordertop_width").slider({
	value: number,
	min: 0,
	max: 10,
	step: 1,
	slide: function(event, ui) {
		$("#search input[type=submit]").css("border-top-width", ui.value + "px");
		$("#searchsubmit_bordertop_width").attr("value", ui.value);
	}
});$('input#searchsubmit_bordertop_width').change(function() {
	var random = $('input#searchsubmit_bordertop_width').val();
	$('#search input[type=submit]').css('border-top-width',random+'px');
	$("#slidersearchsubmit_bordertop_width").slider({
		value: random,
		min: 0,
		max: 10,
		step: 1,
	});
});
var number = parseInt($("#search input[type=submit]").css('border-bottom-width'));
$("#searchsubmit_borderbottom_width").text(number);
$("#slidersearchsubmit_borderbottom_width").slider({
	value: number,
	min: 0,
	max: 10,
	step: 1,
	slide: function(event, ui) {
		$("#search input[type=submit]").css("border-bottom-width", ui.value + "px");
		$("#searchsubmit_borderbottom_width").attr("value", ui.value);
	}
});$('input#searchsubmit_borderbottom_width').change(function() {
	var random = $('input#searchsubmit_borderbottom_width').val();
	$('#search input[type=submit]').css('border-bottom-width',random+'px');
	$("#slidersearchsubmit_borderbottom_width").slider({
		value: random,
		min: 0,
		max: 10,
		step: 1,
	});
});

var number = parseInt($("#search input[type=submit]").css('margin-top'));
$("#searchsubmit_margin_top").text(number);
$("#slidersearchsubmit_margin_top").slider({
	value: number,
	min: 0,
	max: 50,
	step: 1,
	slide: function(event, ui) {
		$("#search input[type=submit]").css("margin-top", ui.value + "px");
		$("#searchsubmit_margin_top").attr("value", ui.value);
	}
});$('input#searchsubmit_margin_top').change(function() {
	var random = $('input#searchsubmit_margin_top').val();
	$('#search input[type=submit]').css('margin-top',random+'px');
	$("#slidersearchsubmit_margin_top").slider({
		value: random,
		min: 0,
		max: 50,
		step: 1,
	});
});
var number = parseInt($("#search input[type=submit]").css('margin-right'));
$("#searchsubmit_margin_right").text(number);
$("#slidersearchsubmit_margin_right").slider({
	value: number,
	min: 0,
	max: 50,
	step: 1,
	slide: function(event, ui) {
		$("#search input[type=submit]").css("margin-right", ui.value + "px");
		$("#searchsubmit_margin_right").attr("value", ui.value);
	}
});$('input#searchsubmit_margin_right').change(function() {
	var random = $('input#searchsubmit_margin_right').val();
	$('#search input[type=submit]').css('margin-right',random+'px');
	$("#slidersearchsubmit_margin_right").slider({
		value: random,
		min: 0,
		max: 50,
		step: 1,
	});
});
var number = parseInt($("#search input[type=submit]").css('margin-bottom'));
$("#searchsubmit_margin_bottom").text(number);
$("#slidersearchsubmit_margin_bottom").slider({
	value: number,
	min: 0,
	max: 50,
	step: 1,
	slide: function(event, ui) {
		$("#search input[type=submit]").css("margin-bottom", ui.value + "px");
		$("#searchsubmit_margin_bottom").attr("value", ui.value);
	}
});$('input#searchsubmit_margin_bottom').change(function() {
	var random = $('input#searchsubmit_margin_bottom').val();
	$('#search input[type=submit]').css('margin-bottom',random+'px');
	$("#slidersearchsubmit_margin_bottom").slider({
		value: random,
		min: 0,
		max: 50,
		step: 1,
	});
});
var number = parseInt($("#search input[type=submit]").css('margin-left'));
$("#searchsubmit_margin_left").text(number);
$("#slidersearchsubmit_margin_left").slider({
	value: number,
	min: 0,
	max: 50,
	step: 1,
	slide: function(event, ui) {
		$("#search input[type=submit]").css("margin-left", ui.value + "px");
		$("#searchsubmit_margin_left").attr("value", ui.value);
	}
});$('input#searchsubmit_margin_left').change(function() {
	var random = $('input#searchsubmit_margin_left').val();
	$('#search input[type=submit]').css('margin-left',random+'px');
	$("#slidersearchsubmit_margin_left").slider({
		value: random,
		min: 0,
		max: 50,
		step: 1,
	});
});

var number = parseInt($("#search input[type=submit]").css('padding-top'));
$("#searchsubmit_padding_top").text(number);
$("#slidersearchsubmit_padding_top").slider({
	value: number,
	min: 0,
	max: 50,
	step: 1,
	slide: function(event, ui) {
		$("#search input[type=submit]").css("padding-top", ui.value + "px");
		$("#searchsubmit_padding_top").attr("value", ui.value);
	}
});$('input#searchsubmit_padding_top').change(function() {
	var random = $('input#searchsubmit_padding_top').val();
	$('#search input[type=submit]').css('padding-top',random+'px');
	$("#slidersearchsubmit_padding_top").slider({
		value: random,
		min: 0,
		max: 50,
		step: 1,
	});
});
var number = parseInt($("#search input[type=submit]").css('padding-right'));
$("#searchsubmit_padding_right").text(number);
$("#slidersearchsubmit_padding_right").slider({
	value: number,
	min: 0,
	max: 50,
	step: 1,
	slide: function(event, ui) {
		$("#search input[type=submit]").css("padding-right", ui.value + "px");
		$("#searchsubmit_padding_right").attr("value", ui.value);
	}
});$('input#searchsubmit_padding_right').change(function() {
	var random = $('input#searchsubmit_padding_right').val();
	$('#search input[type=submit]').css('padding-right',random+'px');
	$("#slidersearchsubmit_padding_right").slider({
		value: random,
		min: 0,
		max: 50,
		step: 1,
	});
});
var number = parseInt($("#search input[type=submit]").css('padding-bottom'));
$("#searchsubmit_padding_bottom").text(number);
$("#slidersearchsubmit_padding_bottom").slider({
	value: number,
	min: 0,
	max: 50,
	step: 1,
	slide: function(event, ui) {
		$("#search input[type=submit]").css("padding-bottom", ui.value + "px");
		$("#searchsubmit_padding_bottom").attr("value", ui.value);
	}
});$('input#searchsubmit_padding_bottom').change(function() {
	var random = $('input#searchsubmit_padding_bottom').val();
	$('#search input[type=submit]').css('padding-bottom',random+'px');
	$("#slidersearchsubmit_padding_bottom").slider({
		value: random,
		min: 0,
		max: 50,
		step: 1,
	});
});
var number = parseInt($("#search input[type=submit]").css('padding-left'));
$("#searchsubmit_padding_left").text(number);
$("#slidersearchsubmit_padding_left").slider({
	value: number,
	min: 0,
	max: 50,
	step: 1,
	slide: function(event, ui) {
		$("#search input[type=submit]").css("padding-left", ui.value + "px");
		$("#searchsubmit_padding_left").attr("value", ui.value);
	}
});$('input#searchsubmit_padding_left').change(function() {
	var random = $('input#searchsubmit_padding_left').val();
	$('#search input[type=submit]').css('padding-left',random+'px');
	$("#slidersearchsubmit_padding_left").slider({
		value: random,
		min: 0,
		max: 50,
		step: 1,
	});
});

$('select#searchsubmit_fontfamily').change(function() {
	var random = $('select.searchsubmit_fontfamily').val();
	jQuery('#search input[type=submit]').css('font-family',random);
});
$('select#searchsubmit_font_weight').change(function() {
	var random = $('select.searchsubmit_font_weight').val();
	jQuery('#search input[type=submit]').css('font-weight',random);
});
$('select#searchsubmit_font_style').change(function() {
	var random = $('select.searchsubmit_font_style').val();
	jQuery('#search input[type=submit]').css('font-style',random);
});
$('select#searchsubmit_textdecoration').change(function() {
	var random = $('select.searchsubmit_textdecoration').val();
	jQuery('#search input[type=submit]').css('text-decoration',random);
});
$('select#searchsubmit_text_transform').change(function() {
	var random = $('select.searchsubmit_text_transform').val();
	jQuery('#search input[type=submit]').css('text-transform',random);
});
$('select#searchsubmit_small_caps').change(function() {
	var random = $('select.searchsubmit_small_caps').val();
	jQuery('#search input[type=submit]').css('font-variant',random);
});
$('select#searchsubmit_bordertop_type').change(function() {
	var random = $('select.searchsubmit_bordertop_type').val();
	jQuery('#search input[type=submit]').css('border-top-style',random);
});
$('select#searchsubmit_borderbottom_type').change(function() {
	var random = $('select.searchsubmit_borderbottom_type').val();
	jQuery('#search input[type=submit]').css('border-bottom-style',random);
});

var number = parseInt($("header #search input[type=submit]").css('width'));
$("#header_searchsubmit_text_width").text(number);
$("#sliderheader_searchsubmit_text_width").slider({
	value: number,
	min: 0,
	max: 400,
	step: 1,
	slide: function(event, ui) {
		$("header #search input[type=submit]").css("width", ui.value + "px");
		$("#header_searchsubmit_text_width").attr("value", ui.value);
	}
});$('input#header_searchsubmit_text_width').change(function() {
	var random = $('input#header_searchsubmit_text_width').val();
	$('header #search input[type=submit]').css('width',random+'px');
	$("#sliderheader_searchsubmit_text_width").slider({
		value: random,
		min: 0,
		max: 400,
		step: 1,
	});
});
var number = parseInt($("header #search input[type=submit]").css('height'));
$("#header_searchsubmit_text_height").text(number);
$("#sliderheader_searchsubmit_text_height").slider({
	value: number,
	min: 0,
	max: 400,
	step: 1,
	slide: function(event, ui) {
		$("header #search input[type=submit]").css("height", ui.value + "px");
		$("#header_searchsubmit_text_height").attr("value", ui.value);
	}
});$('input#header_searchsubmit_text_height').change(function() {
	var random = $('input#header_searchsubmit_text_height').val();
	$('header #search input[type=submit]').css('height',random+'px');
	$("#sliderheader_searchsubmit_text_height").slider({
		value: random,
		min: 0,
		max: 400,
		step: 1,
	});
});
var number = parseInt($("header #search input[type=submit]").css('left'));
$("#header_searchsubmit_text_position_x").text(number);
$("#sliderheader_searchsubmit_text_position_x").slider({
	value: number,
	min: 0,
	max: 400,
	step: 1,
	slide: function(event, ui) {
		$("header #search input[type=submit]").css("left", ui.value + "px");
		$("#header_searchsubmit_text_position_x").attr("value", ui.value);
	}
});$('input#header_searchsubmit_text_position_x').change(function() {
	var random = $('input#header_searchsubmit_text_position_x').val();
	$('header #search input[type=submit]').css('left',random+'px');
	$("#sliderheader_searchsubmit_text_position_x").slider({
		value: random,
		min: 0,
		max: 400,
		step: 1,
	});
});
var number = parseInt($("header #search input[type=submit]").css('top'));
$("#header_searchsubmit_text_position_y").text(number);
$("#sliderheader_searchsubmit_text_position_y").slider({
	value: number,
	min: 0,
	max: 400,
	step: 1,
	slide: function(event, ui) {
		$("header #search input[type=submit]").css("top", ui.value + "px");
		$("#header_searchsubmit_text_position_y").attr("value", ui.value);
	}
});$('input#header_searchsubmit_text_position_y').change(function() {
	var random = $('input#header_searchsubmit_text_position_y').val();
	$('header #search input[type=submit]').css('top',random+'px');
	$("#sliderheader_searchsubmit_text_position_y").slider({
		value: random,
		min: 0,
		max: 400,
		step: 1,
	});
});
$('select#header_searchsubmit_text_display').change(function() {
	var indent = $('select#header_searchsubmit_text_display').val();
	if ( indent == 'none' ) {jQuery('header #search input[type=submit]').css('text-indent','-999em');}
	else {jQuery('header #search input[type=submit]').css('text-indent','0');}
});
var number = parseInt($(".wrapper article p").css('font-size'));
$("#paragraph_fontsize").text(number);
$("#sliderparagraph_fontsize").slider({
	value: number,
	min: 6,
	max: 80,
	step: 1,
	slide: function(event, ui) {
		$(".wrapper article p").css("font-size", ui.value + "px");
		$("#paragraph_fontsize").attr("value", ui.value);
	}
});$('input#paragraph_fontsize').change(function() {
	var random = $('input#paragraph_fontsize').val();
	$('.wrapper article p').css('font-size',random+'px');
	$("#sliderparagraph_fontsize").slider({
		value: random,
		min: 6,
		max: 80,
		step: 1,
	});
});
var number = parseInt($(".wrapper article p").css('line-height'));
$("#paragraph_line_height").text(number);
$("#sliderparagraph_line_height").slider({
	value: number,
	min: 6,
	max: 80,
	step: 1,
	slide: function(event, ui) {
		$(".wrapper article p").css("line-height", ui.value + "px");
		$("#paragraph_line_height").attr("value", ui.value);
	}
});$('input#paragraph_line_height').change(function() {
	var random = $('input#paragraph_line_height').val();
	$('.wrapper article p').css('line-height',random+'px');
	$("#sliderparagraph_line_height").slider({
		value: random,
		min: 6,
		max: 80,
		step: 1,
	});
});
$('#paragraph_textcolour').change(function() {
	var colour = $('#paragraph_textcolour').val();
	jQuery('.wrapper article p').css('color',colour);
});
colour = $('.paragraph_shadow_colour').val();
xcoord = $('.paragraph_shadow_x_coordinate').val();
ycoord = $('.paragraph_shadow_y_coordinate').val();
blur = $('.paragraph_shadow_blur_radius').val();
$("#sliderparagraph_shadow_blur_radius").slider({
	value: blur, //Sets the slider handle to start at the current value
	min: 0,
	max: 50,

	step: 1,
	slide: function(event, ui) { //This is where we can perform actions based on the slide
		$("#paragraph_shadow_blur_radius").attr("value", ui.value); //This adds that value into the span in the tabs below, so you can see the actual value
		colour = $('.paragraph_shadow_colour').val();
		xcoord = $('.paragraph_shadow_x_coordinate').val();
		ycoord = $('.paragraph_shadow_y_coordinate').val();
		jQuery('.wrapper article p').css('textShadow',colour+' '+xcoord+'px '+ycoord+'px '+ui.value+'px');
	}
});
$("#sliderparagraph_shadow_x_coordinate").slider({
	value: xcoord, //Sets the slider handle to start at the current value
	min: -10,
	max: 10,
	step: 1,
	slide: function(event, ui) { //This is where we can perform actions based on the slide
		$("#paragraph_shadow_x_coordinate").attr("value", ui.value); //This adds that value into the span in the tabs below, so you can see the actual value
		colour = $('#paragraph_shadow_colour').val();
		ycoord = $('#paragraph_shadow_y_coordinate').val();
		blur = $('#paragraph_shadow_blur_radius').val();
		jQuery('.wrapper article p').css('textShadow',colour+' '+ui.value+'px '+ycoord+'px '+blur+'px');
	}
});
$("#sliderparagraph_shadow_y_coordinate").slider({
	value: ycoord, //Sets the slider handle to start at the current value
	min: -10,
	max: 10,
	step: 1,
	slide: function(event, ui) { //This is where we can perform actions based on the slide
		$("#paragraph_shadow_y_coordinate").attr("value", ui.value); //This adds that value into the span in the tabs below, so you can see the actual value
		colour = $('#paragraph_shadow_colour').val();
		xcoord = $('#paragraph_shadow_x_coordinate').val();
		blur = $('#paragraph_shadow_blur_radius').val();
		jQuery('.wrapper article p').css('textShadow',colour+' '+xcoord+'px '+ui.value+'px '+blur+'px');
	}
});
$('#paragraph_shadow_colour').change(function() {
	colour = $('#paragraph_shadow_colour').val();
	xcoord = $('#paragraph_shadow_x_coordinate').val();
	ycoord = $('#paragraph_shadow_y_coordinate').val();
	blur = $('#paragraph_shadow_blur_radius').val();
	jQuery('.wrapper article p').css('textShadow',colour+' '+xcoord+'px '+ycoord+'px '+blur+'px');
});

var number = parseInt($(".wrapper article p").css('border-top-width'));
$("#paragraph_bordertop_width").text(number);
$("#sliderparagraph_bordertop_width").slider({
	value: number,
	min: 0,
	max: 10,
	step: 1,
	slide: function(event, ui) {
		$(".wrapper article p").css("border-top-width", ui.value + "px");
		$("#paragraph_bordertop_width").attr("value", ui.value);
	}
});$('input#paragraph_bordertop_width').change(function() {
	var random = $('input#paragraph_bordertop_width').val();
	$('.wrapper article p').css('border-top-width',random+'px');
	$("#sliderparagraph_bordertop_width").slider({
		value: random,
		min: 0,
		max: 10,
		step: 1,
	});
});
var number = parseInt($(".wrapper article p").css('border-bottom-width'));
$("#paragraph_borderbottom_width").text(number);
$("#sliderparagraph_borderbottom_width").slider({
	value: number,
	min: 0,
	max: 10,
	step: 1,
	slide: function(event, ui) {
		$(".wrapper article p").css("border-bottom-width", ui.value + "px");
		$("#paragraph_borderbottom_width").attr("value", ui.value);
	}
});$('input#paragraph_borderbottom_width').change(function() {
	var random = $('input#paragraph_borderbottom_width').val();
	$('.wrapper article p').css('border-bottom-width',random+'px');
	$("#sliderparagraph_borderbottom_width").slider({
		value: random,
		min: 0,
		max: 10,
		step: 1,
	});
});

var number = parseInt($(".wrapper article p").css('margin-top'));
$("#paragraph_margin_top").text(number);
$("#sliderparagraph_margin_top").slider({
	value: number,
	min: 0,
	max: 50,
	step: 1,
	slide: function(event, ui) {
		$(".wrapper article p").css("margin-top", ui.value + "px");
		$("#paragraph_margin_top").attr("value", ui.value);
	}
});$('input#paragraph_margin_top').change(function() {
	var random = $('input#paragraph_margin_top').val();
	$('.wrapper article p').css('margin-top',random+'px');
	$("#sliderparagraph_margin_top").slider({
		value: random,
		min: 0,
		max: 50,
		step: 1,
	});
});
var number = parseInt($(".wrapper article p").css('margin-right'));
$("#paragraph_margin_right").text(number);
$("#sliderparagraph_margin_right").slider({
	value: number,
	min: 0,
	max: 50,
	step: 1,
	slide: function(event, ui) {
		$(".wrapper article p").css("margin-right", ui.value + "px");
		$("#paragraph_margin_right").attr("value", ui.value);
	}
});$('input#paragraph_margin_right').change(function() {
	var random = $('input#paragraph_margin_right').val();
	$('.wrapper article p').css('margin-right',random+'px');
	$("#sliderparagraph_margin_right").slider({
		value: random,
		min: 0,
		max: 50,
		step: 1,
	});
});
var number = parseInt($(".wrapper article p").css('margin-bottom'));
$("#paragraph_margin_bottom").text(number);
$("#sliderparagraph_margin_bottom").slider({
	value: number,
	min: 0,
	max: 50,
	step: 1,
	slide: function(event, ui) {
		$(".wrapper article p").css("margin-bottom", ui.value + "px");
		$("#paragraph_margin_bottom").attr("value", ui.value);
	}
});$('input#paragraph_margin_bottom').change(function() {
	var random = $('input#paragraph_margin_bottom').val();
	$('.wrapper article p').css('margin-bottom',random+'px');
	$("#sliderparagraph_margin_bottom").slider({
		value: random,
		min: 0,
		max: 50,
		step: 1,
	});
});
var number = parseInt($(".wrapper article p").css('margin-left'));
$("#paragraph_margin_left").text(number);
$("#sliderparagraph_margin_left").slider({
	value: number,
	min: 0,
	max: 50,
	step: 1,
	slide: function(event, ui) {
		$(".wrapper article p").css("margin-left", ui.value + "px");
		$("#paragraph_margin_left").attr("value", ui.value);
	}
});$('input#paragraph_margin_left').change(function() {
	var random = $('input#paragraph_margin_left').val();
	$('.wrapper article p').css('margin-left',random+'px');
	$("#sliderparagraph_margin_left").slider({
		value: random,
		min: 0,
		max: 50,
		step: 1,
	});
});

var number = parseInt($(".wrapper article p").css('padding-top'));
$("#paragraph_padding_top").text(number);
$("#sliderparagraph_padding_top").slider({
	value: number,
	min: 0,
	max: 50,
	step: 1,
	slide: function(event, ui) {
		$(".wrapper article p").css("padding-top", ui.value + "px");
		$("#paragraph_padding_top").attr("value", ui.value);
	}
});$('input#paragraph_padding_top').change(function() {
	var random = $('input#paragraph_padding_top').val();
	$('.wrapper article p').css('padding-top',random+'px');
	$("#sliderparagraph_padding_top").slider({
		value: random,
		min: 0,
		max: 50,
		step: 1,
	});
});
var number = parseInt($(".wrapper article p").css('padding-right'));
$("#paragraph_padding_right").text(number);
$("#sliderparagraph_padding_right").slider({
	value: number,
	min: 0,
	max: 50,
	step: 1,
	slide: function(event, ui) {
		$(".wrapper article p").css("padding-right", ui.value + "px");
		$("#paragraph_padding_right").attr("value", ui.value);
	}
});$('input#paragraph_padding_right').change(function() {
	var random = $('input#paragraph_padding_right').val();
	$('.wrapper article p').css('padding-right',random+'px');
	$("#sliderparagraph_padding_right").slider({
		value: random,
		min: 0,
		max: 50,
		step: 1,
	});
});
var number = parseInt($(".wrapper article p").css('padding-bottom'));
$("#paragraph_padding_bottom").text(number);
$("#sliderparagraph_padding_bottom").slider({
	value: number,
	min: 0,
	max: 50,
	step: 1,
	slide: function(event, ui) {
		$(".wrapper article p").css("padding-bottom", ui.value + "px");
		$("#paragraph_padding_bottom").attr("value", ui.value);
	}
});$('input#paragraph_padding_bottom').change(function() {
	var random = $('input#paragraph_padding_bottom').val();
	$('.wrapper article p').css('padding-bottom',random+'px');
	$("#sliderparagraph_padding_bottom").slider({
		value: random,
		min: 0,
		max: 50,
		step: 1,
	});
});
var number = parseInt($(".wrapper article p").css('padding-left'));
$("#paragraph_padding_left").text(number);
$("#sliderparagraph_padding_left").slider({
	value: number,
	min: 0,
	max: 50,
	step: 1,
	slide: function(event, ui) {
		$(".wrapper article p").css("padding-left", ui.value + "px");
		$("#paragraph_padding_left").attr("value", ui.value);
	}
});$('input#paragraph_padding_left').change(function() {
	var random = $('input#paragraph_padding_left').val();
	$('.wrapper article p').css('padding-left',random+'px');
	$("#sliderparagraph_padding_left").slider({
		value: random,
		min: 0,
		max: 50,
		step: 1,
	});
});

$('select#paragraph_fontfamily').change(function() {
	var random = $('select.paragraph_fontfamily').val();
	jQuery('.wrapper article p').css('font-family',random);
});
$('select#paragraph_font_weight').change(function() {
	var random = $('select.paragraph_font_weight').val();
	jQuery('.wrapper article p').css('font-weight',random);
});
$('select#paragraph_font_style').change(function() {
	var random = $('select.paragraph_font_style').val();
	jQuery('.wrapper article p').css('font-style',random);
});
$('select#paragraph_textdecoration').change(function() {
	var random = $('select.paragraph_textdecoration').val();
	jQuery('.wrapper article p').css('text-decoration',random);
});
$('select#paragraph_text_transform').change(function() {
	var random = $('select.paragraph_text_transform').val();
	jQuery('.wrapper article p').css('text-transform',random);
});
$('select#paragraph_small_caps').change(function() {
	var random = $('select.paragraph_small_caps').val();
	jQuery('.wrapper article p').css('font-variant',random);
});
$('select#paragraph_bordertop_type').change(function() {
	var random = $('select.paragraph_bordertop_type').val();
	jQuery('.wrapper article p').css('border-top-style',random);
});
$('select#paragraph_borderbottom_type').change(function() {
	var random = $('select.paragraph_borderbottom_type').val();
	jQuery('.wrapper article p').css('border-bottom-style',random);
});

var number = parseInt($(".wrapper article li").css('font-size'));
$("#listitem_fontsize").text(number);
$("#sliderlistitem_fontsize").slider({
	value: number,
	min: 6,
	max: 80,
	step: 1,
	slide: function(event, ui) {
		$(".wrapper article li").css("font-size", ui.value + "px");
		$("#listitem_fontsize").attr("value", ui.value);
	}
});$('input#listitem_fontsize').change(function() {
	var random = $('input#listitem_fontsize').val();
	$('.wrapper article li').css('font-size',random+'px');
	$("#sliderlistitem_fontsize").slider({
		value: random,
		min: 6,
		max: 80,
		step: 1,
	});
});
var number = parseInt($(".wrapper article li").css('line-height'));
$("#listitem_line_height").text(number);
$("#sliderlistitem_line_height").slider({
	value: number,
	min: 6,
	max: 80,
	step: 1,
	slide: function(event, ui) {
		$(".wrapper article li").css("line-height", ui.value + "px");
		$("#listitem_line_height").attr("value", ui.value);
	}
});$('input#listitem_line_height').change(function() {
	var random = $('input#listitem_line_height').val();
	$('.wrapper article li').css('line-height',random+'px');
	$("#sliderlistitem_line_height").slider({
		value: random,
		min: 6,
		max: 80,
		step: 1,
	});
});
$('#listitem_textcolour').change(function() {
	var colour = $('#listitem_textcolour').val();
	jQuery('.wrapper article li').css('color',colour);
});
colour = $('.listitem_shadow_colour').val();
xcoord = $('.listitem_shadow_x_coordinate').val();
ycoord = $('.listitem_shadow_y_coordinate').val();
blur = $('.listitem_shadow_blur_radius').val();
$("#sliderlistitem_shadow_blur_radius").slider({
	value: blur, //Sets the slider handle to start at the current value
	min: 0,
	max: 50,

	step: 1,
	slide: function(event, ui) { //This is where we can perform actions based on the slide
		$("#listitem_shadow_blur_radius").attr("value", ui.value); //This adds that value into the span in the tabs below, so you can see the actual value
		colour = $('.listitem_shadow_colour').val();
		xcoord = $('.listitem_shadow_x_coordinate').val();
		ycoord = $('.listitem_shadow_y_coordinate').val();
		jQuery('.wrapper article li').css('textShadow',colour+' '+xcoord+'px '+ycoord+'px '+ui.value+'px');
	}
});
$("#sliderlistitem_shadow_x_coordinate").slider({
	value: xcoord, //Sets the slider handle to start at the current value
	min: -10,
	max: 10,
	step: 1,
	slide: function(event, ui) { //This is where we can perform actions based on the slide
		$("#listitem_shadow_x_coordinate").attr("value", ui.value); //This adds that value into the span in the tabs below, so you can see the actual value
		colour = $('#listitem_shadow_colour').val();
		ycoord = $('#listitem_shadow_y_coordinate').val();
		blur = $('#listitem_shadow_blur_radius').val();
		jQuery('.wrapper article li').css('textShadow',colour+' '+ui.value+'px '+ycoord+'px '+blur+'px');
	}
});
$("#sliderlistitem_shadow_y_coordinate").slider({
	value: ycoord, //Sets the slider handle to start at the current value
	min: -10,
	max: 10,
	step: 1,
	slide: function(event, ui) { //This is where we can perform actions based on the slide
		$("#listitem_shadow_y_coordinate").attr("value", ui.value); //This adds that value into the span in the tabs below, so you can see the actual value
		colour = $('#listitem_shadow_colour').val();
		xcoord = $('#listitem_shadow_x_coordinate').val();
		blur = $('#listitem_shadow_blur_radius').val();
		jQuery('.wrapper article li').css('textShadow',colour+' '+xcoord+'px '+ui.value+'px '+blur+'px');
	}
});
$('#listitem_shadow_colour').change(function() {
	colour = $('#listitem_shadow_colour').val();
	xcoord = $('#listitem_shadow_x_coordinate').val();
	ycoord = $('#listitem_shadow_y_coordinate').val();
	blur = $('#listitem_shadow_blur_radius').val();
	jQuery('.wrapper article li').css('textShadow',colour+' '+xcoord+'px '+ycoord+'px '+blur+'px');
});

var number = parseInt($(".wrapper article li").css('border-top-width'));
$("#listitem_bordertop_width").text(number);
$("#sliderlistitem_bordertop_width").slider({
	value: number,
	min: 0,
	max: 10,
	step: 1,
	slide: function(event, ui) {
		$(".wrapper article li").css("border-top-width", ui.value + "px");
		$("#listitem_bordertop_width").attr("value", ui.value);
	}
});$('input#listitem_bordertop_width').change(function() {
	var random = $('input#listitem_bordertop_width').val();
	$('.wrapper article li').css('border-top-width',random+'px');
	$("#sliderlistitem_bordertop_width").slider({
		value: random,
		min: 0,
		max: 10,
		step: 1,
	});
});
var number = parseInt($(".wrapper article li").css('border-bottom-width'));
$("#listitem_borderbottom_width").text(number);
$("#sliderlistitem_borderbottom_width").slider({
	value: number,
	min: 0,
	max: 10,
	step: 1,
	slide: function(event, ui) {
		$(".wrapper article li").css("border-bottom-width", ui.value + "px");
		$("#listitem_borderbottom_width").attr("value", ui.value);
	}
});$('input#listitem_borderbottom_width').change(function() {
	var random = $('input#listitem_borderbottom_width').val();
	$('.wrapper article li').css('border-bottom-width',random+'px');
	$("#sliderlistitem_borderbottom_width").slider({
		value: random,
		min: 0,
		max: 10,
		step: 1,
	});
});

var number = parseInt($(".wrapper article li").css('margin-top'));
$("#listitem_margin_top").text(number);
$("#sliderlistitem_margin_top").slider({
	value: number,
	min: 0,
	max: 50,
	step: 1,
	slide: function(event, ui) {
		$(".wrapper article li").css("margin-top", ui.value + "px");
		$("#listitem_margin_top").attr("value", ui.value);
	}
});$('input#listitem_margin_top').change(function() {
	var random = $('input#listitem_margin_top').val();
	$('.wrapper article li').css('margin-top',random+'px');
	$("#sliderlistitem_margin_top").slider({
		value: random,
		min: 0,
		max: 50,
		step: 1,
	});
});
var number = parseInt($(".wrapper article li").css('margin-right'));
$("#listitem_margin_right").text(number);
$("#sliderlistitem_margin_right").slider({
	value: number,
	min: 0,
	max: 50,
	step: 1,
	slide: function(event, ui) {
		$(".wrapper article li").css("margin-right", ui.value + "px");
		$("#listitem_margin_right").attr("value", ui.value);
	}
});$('input#listitem_margin_right').change(function() {
	var random = $('input#listitem_margin_right').val();
	$('.wrapper article li').css('margin-right',random+'px');
	$("#sliderlistitem_margin_right").slider({
		value: random,
		min: 0,
		max: 50,
		step: 1,
	});
});
var number = parseInt($(".wrapper article li").css('margin-bottom'));
$("#listitem_margin_bottom").text(number);
$("#sliderlistitem_margin_bottom").slider({
	value: number,
	min: 0,
	max: 50,
	step: 1,
	slide: function(event, ui) {
		$(".wrapper article li").css("margin-bottom", ui.value + "px");
		$("#listitem_margin_bottom").attr("value", ui.value);
	}
});$('input#listitem_margin_bottom').change(function() {
	var random = $('input#listitem_margin_bottom').val();
	$('.wrapper article li').css('margin-bottom',random+'px');
	$("#sliderlistitem_margin_bottom").slider({
		value: random,
		min: 0,
		max: 50,
		step: 1,
	});
});
var number = parseInt($(".wrapper article li").css('margin-left'));
$("#listitem_margin_left").text(number);
$("#sliderlistitem_margin_left").slider({
	value: number,
	min: 0,
	max: 50,
	step: 1,
	slide: function(event, ui) {
		$(".wrapper article li").css("margin-left", ui.value + "px");
		$("#listitem_margin_left").attr("value", ui.value);
	}
});$('input#listitem_margin_left').change(function() {
	var random = $('input#listitem_margin_left').val();
	$('.wrapper article li').css('margin-left',random+'px');
	$("#sliderlistitem_margin_left").slider({
		value: random,
		min: 0,
		max: 50,
		step: 1,
	});
});

var number = parseInt($(".wrapper article li").css('padding-top'));
$("#listitem_padding_top").text(number);
$("#sliderlistitem_padding_top").slider({
	value: number,
	min: 0,
	max: 50,
	step: 1,
	slide: function(event, ui) {
		$(".wrapper article li").css("padding-top", ui.value + "px");
		$("#listitem_padding_top").attr("value", ui.value);
	}
});$('input#listitem_padding_top').change(function() {
	var random = $('input#listitem_padding_top').val();
	$('.wrapper article li').css('padding-top',random+'px');
	$("#sliderlistitem_padding_top").slider({
		value: random,
		min: 0,
		max: 50,
		step: 1,
	});
});
var number = parseInt($(".wrapper article li").css('padding-right'));
$("#listitem_padding_right").text(number);
$("#sliderlistitem_padding_right").slider({
	value: number,
	min: 0,
	max: 50,
	step: 1,
	slide: function(event, ui) {
		$(".wrapper article li").css("padding-right", ui.value + "px");
		$("#listitem_padding_right").attr("value", ui.value);
	}
});$('input#listitem_padding_right').change(function() {
	var random = $('input#listitem_padding_right').val();
	$('.wrapper article li').css('padding-right',random+'px');
	$("#sliderlistitem_padding_right").slider({
		value: random,
		min: 0,
		max: 50,
		step: 1,
	});
});
var number = parseInt($(".wrapper article li").css('padding-bottom'));
$("#listitem_padding_bottom").text(number);
$("#sliderlistitem_padding_bottom").slider({
	value: number,
	min: 0,
	max: 50,
	step: 1,
	slide: function(event, ui) {
		$(".wrapper article li").css("padding-bottom", ui.value + "px");
		$("#listitem_padding_bottom").attr("value", ui.value);
	}
});$('input#listitem_padding_bottom').change(function() {
	var random = $('input#listitem_padding_bottom').val();
	$('.wrapper article li').css('padding-bottom',random+'px');
	$("#sliderlistitem_padding_bottom").slider({
		value: random,
		min: 0,
		max: 50,
		step: 1,
	});
});
var number = parseInt($(".wrapper article li").css('padding-left'));
$("#listitem_padding_left").text(number);
$("#sliderlistitem_padding_left").slider({
	value: number,
	min: 0,
	max: 50,
	step: 1,
	slide: function(event, ui) {
		$(".wrapper article li").css("padding-left", ui.value + "px");
		$("#listitem_padding_left").attr("value", ui.value);
	}
});$('input#listitem_padding_left').change(function() {
	var random = $('input#listitem_padding_left').val();
	$('.wrapper article li').css('padding-left',random+'px');
	$("#sliderlistitem_padding_left").slider({
		value: random,
		min: 0,
		max: 50,
		step: 1,
	});
});

$('select#listitem_fontfamily').change(function() {
	var random = $('select.listitem_fontfamily').val();
	jQuery('.wrapper article li').css('font-family',random);
});
$('select#listitem_font_weight').change(function() {
	var random = $('select.listitem_font_weight').val();
	jQuery('.wrapper article li').css('font-weight',random);
});
$('select#listitem_font_style').change(function() {
	var random = $('select.listitem_font_style').val();
	jQuery('.wrapper article li').css('font-style',random);
});
$('select#listitem_textdecoration').change(function() {
	var random = $('select.listitem_textdecoration').val();
	jQuery('.wrapper article li').css('text-decoration',random);
});
$('select#listitem_text_transform').change(function() {
	var random = $('select.listitem_text_transform').val();
	jQuery('.wrapper article li').css('text-transform',random);
});
$('select#listitem_small_caps').change(function() {
	var random = $('select.listitem_small_caps').val();
	jQuery('.wrapper article li').css('font-variant',random);
});
$('select#listitem_bordertop_type').change(function() {
	var random = $('select.listitem_bordertop_type').val();
	jQuery('.wrapper article li').css('border-top-style',random);
});
$('select#listitem_borderbottom_type').change(function() {
	var random = $('select.listitem_borderbottom_type').val();
	jQuery('.wrapper article li').css('border-bottom-style',random);
});

var number = parseInt($(".wrapper p.post-info").css('font-size'));
$("#postinfo_fontsize").text(number);
$("#sliderpostinfo_fontsize").slider({
	value: number,
	min: 6,
	max: 80,
	step: 1,
	slide: function(event, ui) {
		$(".wrapper p.post-info").css("font-size", ui.value + "px");
		$("#postinfo_fontsize").attr("value", ui.value);
	}
});$('input#postinfo_fontsize').change(function() {
	var random = $('input#postinfo_fontsize').val();
	$('.wrapper p.post-info').css('font-size',random+'px');
	$("#sliderpostinfo_fontsize").slider({
		value: random,
		min: 6,
		max: 80,
		step: 1,
	});
});
var number = parseInt($(".wrapper p.post-info").css('line-height'));
$("#postinfo_line_height").text(number);
$("#sliderpostinfo_line_height").slider({
	value: number,
	min: 6,
	max: 80,
	step: 1,
	slide: function(event, ui) {
		$(".wrapper p.post-info").css("line-height", ui.value + "px");
		$("#postinfo_line_height").attr("value", ui.value);
	}
});$('input#postinfo_line_height').change(function() {
	var random = $('input#postinfo_line_height').val();
	$('.wrapper p.post-info').css('line-height',random+'px');
	$("#sliderpostinfo_line_height").slider({
		value: random,
		min: 6,
		max: 80,
		step: 1,
	});
});
$('#postinfo_textcolour').change(function() {
	var colour = $('#postinfo_textcolour').val();
	jQuery('.wrapper p.post-info').css('color',colour);
});
colour = $('.postinfo_shadow_colour').val();
xcoord = $('.postinfo_shadow_x_coordinate').val();
ycoord = $('.postinfo_shadow_y_coordinate').val();
blur = $('.postinfo_shadow_blur_radius').val();
$("#sliderpostinfo_shadow_blur_radius").slider({
	value: blur, //Sets the slider handle to start at the current value
	min: 0,
	max: 50,

	step: 1,
	slide: function(event, ui) { //This is where we can perform actions based on the slide
		$("#postinfo_shadow_blur_radius").attr("value", ui.value); //This adds that value into the span in the tabs below, so you can see the actual value
		colour = $('.postinfo_shadow_colour').val();
		xcoord = $('.postinfo_shadow_x_coordinate').val();
		ycoord = $('.postinfo_shadow_y_coordinate').val();
		jQuery('.wrapper p.post-info').css('textShadow',colour+' '+xcoord+'px '+ycoord+'px '+ui.value+'px');
	}
});
$("#sliderpostinfo_shadow_x_coordinate").slider({
	value: xcoord, //Sets the slider handle to start at the current value
	min: -10,
	max: 10,
	step: 1,
	slide: function(event, ui) { //This is where we can perform actions based on the slide
		$("#postinfo_shadow_x_coordinate").attr("value", ui.value); //This adds that value into the span in the tabs below, so you can see the actual value
		colour = $('#postinfo_shadow_colour').val();
		ycoord = $('#postinfo_shadow_y_coordinate').val();
		blur = $('#postinfo_shadow_blur_radius').val();
		jQuery('.wrapper p.post-info').css('textShadow',colour+' '+ui.value+'px '+ycoord+'px '+blur+'px');
	}
});
$("#sliderpostinfo_shadow_y_coordinate").slider({
	value: ycoord, //Sets the slider handle to start at the current value
	min: -10,
	max: 10,
	step: 1,
	slide: function(event, ui) { //This is where we can perform actions based on the slide
		$("#postinfo_shadow_y_coordinate").attr("value", ui.value); //This adds that value into the span in the tabs below, so you can see the actual value
		colour = $('#postinfo_shadow_colour').val();
		xcoord = $('#postinfo_shadow_x_coordinate').val();
		blur = $('#postinfo_shadow_blur_radius').val();
		jQuery('.wrapper p.post-info').css('textShadow',colour+' '+xcoord+'px '+ui.value+'px '+blur+'px');
	}
});
$('#postinfo_shadow_colour').change(function() {
	colour = $('#postinfo_shadow_colour').val();
	xcoord = $('#postinfo_shadow_x_coordinate').val();
	ycoord = $('#postinfo_shadow_y_coordinate').val();
	blur = $('#postinfo_shadow_blur_radius').val();
	jQuery('.wrapper p.post-info').css('textShadow',colour+' '+xcoord+'px '+ycoord+'px '+blur+'px');
});

var number = parseInt($(".wrapper p.post-info").css('border-top-width'));
$("#postinfo_bordertop_width").text(number);
$("#sliderpostinfo_bordertop_width").slider({
	value: number,
	min: 0,
	max: 10,
	step: 1,
	slide: function(event, ui) {
		$(".wrapper p.post-info").css("border-top-width", ui.value + "px");
		$("#postinfo_bordertop_width").attr("value", ui.value);
	}
});$('input#postinfo_bordertop_width').change(function() {
	var random = $('input#postinfo_bordertop_width').val();
	$('.wrapper p.post-info').css('border-top-width',random+'px');
	$("#sliderpostinfo_bordertop_width").slider({
		value: random,
		min: 0,
		max: 10,
		step: 1,
	});
});
var number = parseInt($(".wrapper p.post-info").css('border-bottom-width'));
$("#postinfo_borderbottom_width").text(number);
$("#sliderpostinfo_borderbottom_width").slider({
	value: number,
	min: 0,
	max: 10,
	step: 1,
	slide: function(event, ui) {
		$(".wrapper p.post-info").css("border-bottom-width", ui.value + "px");
		$("#postinfo_borderbottom_width").attr("value", ui.value);
	}
});$('input#postinfo_borderbottom_width').change(function() {
	var random = $('input#postinfo_borderbottom_width').val();
	$('.wrapper p.post-info').css('border-bottom-width',random+'px');
	$("#sliderpostinfo_borderbottom_width").slider({
		value: random,
		min: 0,
		max: 10,
		step: 1,
	});
});

var number = parseInt($(".wrapper p.post-info").css('margin-top'));
$("#postinfo_margin_top").text(number);
$("#sliderpostinfo_margin_top").slider({
	value: number,
	min: 0,
	max: 50,
	step: 1,
	slide: function(event, ui) {
		$(".wrapper p.post-info").css("margin-top", ui.value + "px");
		$("#postinfo_margin_top").attr("value", ui.value);
	}
});$('input#postinfo_margin_top').change(function() {
	var random = $('input#postinfo_margin_top').val();
	$('.wrapper p.post-info').css('margin-top',random+'px');
	$("#sliderpostinfo_margin_top").slider({
		value: random,
		min: 0,
		max: 50,
		step: 1,
	});
});
var number = parseInt($(".wrapper p.post-info").css('margin-right'));
$("#postinfo_margin_right").text(number);
$("#sliderpostinfo_margin_right").slider({
	value: number,
	min: 0,
	max: 50,
	step: 1,
	slide: function(event, ui) {
		$(".wrapper p.post-info").css("margin-right", ui.value + "px");
		$("#postinfo_margin_right").attr("value", ui.value);
	}
});$('input#postinfo_margin_right').change(function() {
	var random = $('input#postinfo_margin_right').val();
	$('.wrapper p.post-info').css('margin-right',random+'px');
	$("#sliderpostinfo_margin_right").slider({
		value: random,
		min: 0,
		max: 50,
		step: 1,
	});
});
var number = parseInt($(".wrapper p.post-info").css('margin-bottom'));
$("#postinfo_margin_bottom").text(number);
$("#sliderpostinfo_margin_bottom").slider({
	value: number,
	min: 0,
	max: 50,
	step: 1,
	slide: function(event, ui) {
		$(".wrapper p.post-info").css("margin-bottom", ui.value + "px");
		$("#postinfo_margin_bottom").attr("value", ui.value);
	}
});$('input#postinfo_margin_bottom').change(function() {
	var random = $('input#postinfo_margin_bottom').val();
	$('.wrapper p.post-info').css('margin-bottom',random+'px');
	$("#sliderpostinfo_margin_bottom").slider({
		value: random,
		min: 0,
		max: 50,
		step: 1,
	});
});
var number = parseInt($(".wrapper p.post-info").css('margin-left'));
$("#postinfo_margin_left").text(number);
$("#sliderpostinfo_margin_left").slider({
	value: number,
	min: 0,
	max: 50,
	step: 1,
	slide: function(event, ui) {
		$(".wrapper p.post-info").css("margin-left", ui.value + "px");
		$("#postinfo_margin_left").attr("value", ui.value);
	}
});$('input#postinfo_margin_left').change(function() {
	var random = $('input#postinfo_margin_left').val();
	$('.wrapper p.post-info').css('margin-left',random+'px');
	$("#sliderpostinfo_margin_left").slider({
		value: random,
		min: 0,
		max: 50,
		step: 1,
	});
});

var number = parseInt($(".wrapper p.post-info").css('padding-top'));
$("#postinfo_padding_top").text(number);
$("#sliderpostinfo_padding_top").slider({
	value: number,
	min: 0,
	max: 50,
	step: 1,
	slide: function(event, ui) {
		$(".wrapper p.post-info").css("padding-top", ui.value + "px");
		$("#postinfo_padding_top").attr("value", ui.value);
	}
});$('input#postinfo_padding_top').change(function() {
	var random = $('input#postinfo_padding_top').val();
	$('.wrapper p.post-info').css('padding-top',random+'px');
	$("#sliderpostinfo_padding_top").slider({
		value: random,
		min: 0,
		max: 50,
		step: 1,
	});
});
var number = parseInt($(".wrapper p.post-info").css('padding-right'));
$("#postinfo_padding_right").text(number);
$("#sliderpostinfo_padding_right").slider({
	value: number,
	min: 0,
	max: 50,
	step: 1,
	slide: function(event, ui) {
		$(".wrapper p.post-info").css("padding-right", ui.value + "px");
		$("#postinfo_padding_right").attr("value", ui.value);
	}
});$('input#postinfo_padding_right').change(function() {
	var random = $('input#postinfo_padding_right').val();
	$('.wrapper p.post-info').css('padding-right',random+'px');
	$("#sliderpostinfo_padding_right").slider({
		value: random,
		min: 0,
		max: 50,
		step: 1,
	});
});
var number = parseInt($(".wrapper p.post-info").css('padding-bottom'));
$("#postinfo_padding_bottom").text(number);
$("#sliderpostinfo_padding_bottom").slider({
	value: number,
	min: 0,
	max: 50,
	step: 1,
	slide: function(event, ui) {
		$(".wrapper p.post-info").css("padding-bottom", ui.value + "px");
		$("#postinfo_padding_bottom").attr("value", ui.value);
	}
});$('input#postinfo_padding_bottom').change(function() {
	var random = $('input#postinfo_padding_bottom').val();
	$('.wrapper p.post-info').css('padding-bottom',random+'px');
	$("#sliderpostinfo_padding_bottom").slider({
		value: random,
		min: 0,
		max: 50,
		step: 1,
	});
});
var number = parseInt($(".wrapper p.post-info").css('padding-left'));
$("#postinfo_padding_left").text(number);
$("#sliderpostinfo_padding_left").slider({
	value: number,
	min: 0,
	max: 50,
	step: 1,
	slide: function(event, ui) {
		$(".wrapper p.post-info").css("padding-left", ui.value + "px");
		$("#postinfo_padding_left").attr("value", ui.value);
	}
});$('input#postinfo_padding_left').change(function() {
	var random = $('input#postinfo_padding_left').val();
	$('.wrapper p.post-info').css('padding-left',random+'px');
	$("#sliderpostinfo_padding_left").slider({
		value: random,
		min: 0,
		max: 50,
		step: 1,
	});
});

$('select#postinfo_fontfamily').change(function() {
	var random = $('select.postinfo_fontfamily').val();
	jQuery('.wrapper p.post-info').css('font-family',random);
});
$('select#postinfo_font_weight').change(function() {
	var random = $('select.postinfo_font_weight').val();
	jQuery('.wrapper p.post-info').css('font-weight',random);
});
$('select#postinfo_font_style').change(function() {
	var random = $('select.postinfo_font_style').val();
	jQuery('.wrapper p.post-info').css('font-style',random);
});
$('select#postinfo_textdecoration').change(function() {
	var random = $('select.postinfo_textdecoration').val();
	jQuery('.wrapper p.post-info').css('text-decoration',random);
});
$('select#postinfo_text_transform').change(function() {
	var random = $('select.postinfo_text_transform').val();
	jQuery('.wrapper p.post-info').css('text-transform',random);
});
$('select#postinfo_small_caps').change(function() {
	var random = $('select.postinfo_small_caps').val();
	jQuery('.wrapper p.post-info').css('font-variant',random);
});
$('select#postinfo_bordertop_type').change(function() {
	var random = $('select.postinfo_bordertop_type').val();
	jQuery('.wrapper p.post-info').css('border-top-style',random);
});
$('select#postinfo_borderbottom_type').change(function() {
	var random = $('select.postinfo_borderbottom_type').val();
	jQuery('.wrapper p.post-info').css('border-bottom-style',random);
});

$('select#postinfo_display').change(function() {
	var random = $('select.postinfo_display').val();
	jQuery('.wrapper p.post-info').css('display',random);
});
var number = parseInt($(".wrapper h1").css('font-size'));
$("#heading1_fontsize").text(number);
$("#sliderheading1_fontsize").slider({
	value: number,
	min: 6,
	max: 80,
	step: 1,
	slide: function(event, ui) {
		$(".wrapper h1").css("font-size", ui.value + "px");
		$("#heading1_fontsize").attr("value", ui.value);
	}
});$('input#heading1_fontsize').change(function() {
	var random = $('input#heading1_fontsize').val();
	$('.wrapper h1').css('font-size',random+'px');
	$("#sliderheading1_fontsize").slider({
		value: random,
		min: 6,
		max: 80,
		step: 1,
	});
});
var number = parseInt($(".wrapper h1").css('line-height'));
$("#heading1_line_height").text(number);
$("#sliderheading1_line_height").slider({
	value: number,
	min: 6,
	max: 80,
	step: 1,
	slide: function(event, ui) {
		$(".wrapper h1").css("line-height", ui.value + "px");
		$("#heading1_line_height").attr("value", ui.value);
	}
});$('input#heading1_line_height').change(function() {
	var random = $('input#heading1_line_height').val();
	$('.wrapper h1').css('line-height',random+'px');
	$("#sliderheading1_line_height").slider({
		value: random,
		min: 6,
		max: 80,
		step: 1,
	});
});
$('#heading1_textcolour').change(function() {
	var colour = $('#heading1_textcolour').val();
	jQuery('.wrapper h1').css('color',colour);
});
colour = $('.heading1_shadow_colour').val();
xcoord = $('.heading1_shadow_x_coordinate').val();
ycoord = $('.heading1_shadow_y_coordinate').val();
blur = $('.heading1_shadow_blur_radius').val();
$("#sliderheading1_shadow_blur_radius").slider({
	value: blur, //Sets the slider handle to start at the current value
	min: 0,
	max: 50,

	step: 1,
	slide: function(event, ui) { //This is where we can perform actions based on the slide
		$("#heading1_shadow_blur_radius").attr("value", ui.value); //This adds that value into the span in the tabs below, so you can see the actual value
		colour = $('.heading1_shadow_colour').val();
		xcoord = $('.heading1_shadow_x_coordinate').val();
		ycoord = $('.heading1_shadow_y_coordinate').val();
		jQuery('.wrapper h1').css('textShadow',colour+' '+xcoord+'px '+ycoord+'px '+ui.value+'px');
	}
});
$("#sliderheading1_shadow_x_coordinate").slider({
	value: xcoord, //Sets the slider handle to start at the current value
	min: -10,
	max: 10,
	step: 1,
	slide: function(event, ui) { //This is where we can perform actions based on the slide
		$("#heading1_shadow_x_coordinate").attr("value", ui.value); //This adds that value into the span in the tabs below, so you can see the actual value
		colour = $('#heading1_shadow_colour').val();
		ycoord = $('#heading1_shadow_y_coordinate').val();
		blur = $('#heading1_shadow_blur_radius').val();
		jQuery('.wrapper h1').css('textShadow',colour+' '+ui.value+'px '+ycoord+'px '+blur+'px');
	}
});
$("#sliderheading1_shadow_y_coordinate").slider({
	value: ycoord, //Sets the slider handle to start at the current value
	min: -10,
	max: 10,
	step: 1,
	slide: function(event, ui) { //This is where we can perform actions based on the slide
		$("#heading1_shadow_y_coordinate").attr("value", ui.value); //This adds that value into the span in the tabs below, so you can see the actual value
		colour = $('#heading1_shadow_colour').val();
		xcoord = $('#heading1_shadow_x_coordinate').val();
		blur = $('#heading1_shadow_blur_radius').val();
		jQuery('.wrapper h1').css('textShadow',colour+' '+xcoord+'px '+ui.value+'px '+blur+'px');
	}
});
$('#heading1_shadow_colour').change(function() {
	colour = $('#heading1_shadow_colour').val();
	xcoord = $('#heading1_shadow_x_coordinate').val();
	ycoord = $('#heading1_shadow_y_coordinate').val();
	blur = $('#heading1_shadow_blur_radius').val();
	jQuery('.wrapper h1').css('textShadow',colour+' '+xcoord+'px '+ycoord+'px '+blur+'px');
});

var number = parseInt($(".wrapper h1").css('border-top-width'));
$("#heading1_bordertop_width").text(number);
$("#sliderheading1_bordertop_width").slider({
	value: number,
	min: 0,
	max: 10,
	step: 1,
	slide: function(event, ui) {
		$(".wrapper h1").css("border-top-width", ui.value + "px");
		$("#heading1_bordertop_width").attr("value", ui.value);
	}
});$('input#heading1_bordertop_width').change(function() {
	var random = $('input#heading1_bordertop_width').val();
	$('.wrapper h1').css('border-top-width',random+'px');
	$("#sliderheading1_bordertop_width").slider({
		value: random,
		min: 0,
		max: 10,
		step: 1,
	});
});
var number = parseInt($(".wrapper h1").css('border-bottom-width'));
$("#heading1_borderbottom_width").text(number);
$("#sliderheading1_borderbottom_width").slider({
	value: number,
	min: 0,
	max: 10,
	step: 1,
	slide: function(event, ui) {
		$(".wrapper h1").css("border-bottom-width", ui.value + "px");
		$("#heading1_borderbottom_width").attr("value", ui.value);
	}
});$('input#heading1_borderbottom_width').change(function() {
	var random = $('input#heading1_borderbottom_width').val();
	$('.wrapper h1').css('border-bottom-width',random+'px');
	$("#sliderheading1_borderbottom_width").slider({
		value: random,
		min: 0,
		max: 10,
		step: 1,
	});
});

var number = parseInt($(".wrapper h1").css('margin-top'));
$("#heading1_margin_top").text(number);
$("#sliderheading1_margin_top").slider({
	value: number,
	min: 0,
	max: 50,
	step: 1,
	slide: function(event, ui) {
		$(".wrapper h1").css("margin-top", ui.value + "px");
		$("#heading1_margin_top").attr("value", ui.value);
	}
});$('input#heading1_margin_top').change(function() {
	var random = $('input#heading1_margin_top').val();
	$('.wrapper h1').css('margin-top',random+'px');
	$("#sliderheading1_margin_top").slider({
		value: random,
		min: 0,
		max: 50,
		step: 1,
	});
});
var number = parseInt($(".wrapper h1").css('margin-right'));
$("#heading1_margin_right").text(number);
$("#sliderheading1_margin_right").slider({
	value: number,
	min: 0,
	max: 50,
	step: 1,
	slide: function(event, ui) {
		$(".wrapper h1").css("margin-right", ui.value + "px");
		$("#heading1_margin_right").attr("value", ui.value);
	}
});$('input#heading1_margin_right').change(function() {
	var random = $('input#heading1_margin_right').val();
	$('.wrapper h1').css('margin-right',random+'px');
	$("#sliderheading1_margin_right").slider({
		value: random,
		min: 0,
		max: 50,
		step: 1,
	});
});
var number = parseInt($(".wrapper h1").css('margin-bottom'));
$("#heading1_margin_bottom").text(number);
$("#sliderheading1_margin_bottom").slider({
	value: number,
	min: 0,
	max: 50,
	step: 1,
	slide: function(event, ui) {
		$(".wrapper h1").css("margin-bottom", ui.value + "px");
		$("#heading1_margin_bottom").attr("value", ui.value);
	}
});$('input#heading1_margin_bottom').change(function() {
	var random = $('input#heading1_margin_bottom').val();
	$('.wrapper h1').css('margin-bottom',random+'px');
	$("#sliderheading1_margin_bottom").slider({
		value: random,
		min: 0,
		max: 50,
		step: 1,
	});
});
var number = parseInt($(".wrapper h1").css('margin-left'));
$("#heading1_margin_left").text(number);
$("#sliderheading1_margin_left").slider({
	value: number,
	min: 0,
	max: 50,
	step: 1,
	slide: function(event, ui) {
		$(".wrapper h1").css("margin-left", ui.value + "px");
		$("#heading1_margin_left").attr("value", ui.value);
	}
});$('input#heading1_margin_left').change(function() {
	var random = $('input#heading1_margin_left').val();
	$('.wrapper h1').css('margin-left',random+'px');
	$("#sliderheading1_margin_left").slider({
		value: random,
		min: 0,
		max: 50,
		step: 1,
	});
});

var number = parseInt($(".wrapper h1").css('padding-top'));
$("#heading1_padding_top").text(number);
$("#sliderheading1_padding_top").slider({
	value: number,
	min: 0,
	max: 50,
	step: 1,
	slide: function(event, ui) {
		$(".wrapper h1").css("padding-top", ui.value + "px");
		$("#heading1_padding_top").attr("value", ui.value);
	}
});$('input#heading1_padding_top').change(function() {
	var random = $('input#heading1_padding_top').val();
	$('.wrapper h1').css('padding-top',random+'px');
	$("#sliderheading1_padding_top").slider({
		value: random,
		min: 0,
		max: 50,
		step: 1,
	});
});
var number = parseInt($(".wrapper h1").css('padding-right'));
$("#heading1_padding_right").text(number);
$("#sliderheading1_padding_right").slider({
	value: number,
	min: 0,
	max: 50,
	step: 1,
	slide: function(event, ui) {
		$(".wrapper h1").css("padding-right", ui.value + "px");
		$("#heading1_padding_right").attr("value", ui.value);
	}
});$('input#heading1_padding_right').change(function() {
	var random = $('input#heading1_padding_right').val();
	$('.wrapper h1').css('padding-right',random+'px');
	$("#sliderheading1_padding_right").slider({
		value: random,
		min: 0,
		max: 50,
		step: 1,
	});
});
var number = parseInt($(".wrapper h1").css('padding-bottom'));
$("#heading1_padding_bottom").text(number);
$("#sliderheading1_padding_bottom").slider({
	value: number,
	min: 0,
	max: 50,
	step: 1,
	slide: function(event, ui) {
		$(".wrapper h1").css("padding-bottom", ui.value + "px");
		$("#heading1_padding_bottom").attr("value", ui.value);
	}
});$('input#heading1_padding_bottom').change(function() {
	var random = $('input#heading1_padding_bottom').val();
	$('.wrapper h1').css('padding-bottom',random+'px');
	$("#sliderheading1_padding_bottom").slider({
		value: random,
		min: 0,
		max: 50,
		step: 1,
	});
});
var number = parseInt($(".wrapper h1").css('padding-left'));
$("#heading1_padding_left").text(number);
$("#sliderheading1_padding_left").slider({
	value: number,
	min: 0,
	max: 50,
	step: 1,
	slide: function(event, ui) {
		$(".wrapper h1").css("padding-left", ui.value + "px");
		$("#heading1_padding_left").attr("value", ui.value);
	}
});$('input#heading1_padding_left').change(function() {
	var random = $('input#heading1_padding_left').val();
	$('.wrapper h1').css('padding-left',random+'px');
	$("#sliderheading1_padding_left").slider({
		value: random,
		min: 0,
		max: 50,
		step: 1,
	});
});

$('select#heading1_fontfamily').change(function() {
	var random = $('select.heading1_fontfamily').val();
	jQuery('.wrapper h1').css('font-family',random);
});
$('select#heading1_font_weight').change(function() {
	var random = $('select.heading1_font_weight').val();
	jQuery('.wrapper h1').css('font-weight',random);
});
$('select#heading1_font_style').change(function() {
	var random = $('select.heading1_font_style').val();
	jQuery('.wrapper h1').css('font-style',random);
});
$('select#heading1_textdecoration').change(function() {
	var random = $('select.heading1_textdecoration').val();
	jQuery('.wrapper h1').css('text-decoration',random);
});
$('select#heading1_text_transform').change(function() {
	var random = $('select.heading1_text_transform').val();
	jQuery('.wrapper h1').css('text-transform',random);
});
$('select#heading1_small_caps').change(function() {
	var random = $('select.heading1_small_caps').val();
	jQuery('.wrapper h1').css('font-variant',random);
});
$('select#heading1_bordertop_type').change(function() {
	var random = $('select.heading1_bordertop_type').val();
	jQuery('.wrapper h1').css('border-top-style',random);
});
$('select#heading1_borderbottom_type').change(function() {
	var random = $('select.heading1_borderbottom_type').val();
	jQuery('.wrapper h1').css('border-bottom-style',random);
});

var number = parseInt($(".wrapper h2").css('font-size'));
$("#heading2_fontsize").text(number);
$("#sliderheading2_fontsize").slider({
	value: number,
	min: 6,
	max: 80,
	step: 1,
	slide: function(event, ui) {
		$(".wrapper h2").css("font-size", ui.value + "px");
		$("#heading2_fontsize").attr("value", ui.value);
	}
});$('input#heading2_fontsize').change(function() {
	var random = $('input#heading2_fontsize').val();
	$('.wrapper h2').css('font-size',random+'px');
	$("#sliderheading2_fontsize").slider({
		value: random,
		min: 6,
		max: 80,
		step: 1,
	});
});
var number = parseInt($(".wrapper h2").css('line-height'));
$("#heading2_line_height").text(number);
$("#sliderheading2_line_height").slider({
	value: number,
	min: 6,
	max: 80,
	step: 1,
	slide: function(event, ui) {
		$(".wrapper h2").css("line-height", ui.value + "px");
		$("#heading2_line_height").attr("value", ui.value);
	}
});$('input#heading2_line_height').change(function() {
	var random = $('input#heading2_line_height').val();
	$('.wrapper h2').css('line-height',random+'px');
	$("#sliderheading2_line_height").slider({
		value: random,
		min: 6,
		max: 80,
		step: 1,
	});
});
$('#heading2_textcolour').change(function() {
	var colour = $('#heading2_textcolour').val();
	jQuery('.wrapper h2').css('color',colour);
});
colour = $('.heading2_shadow_colour').val();
xcoord = $('.heading2_shadow_x_coordinate').val();
ycoord = $('.heading2_shadow_y_coordinate').val();
blur = $('.heading2_shadow_blur_radius').val();
$("#sliderheading2_shadow_blur_radius").slider({
	value: blur, //Sets the slider handle to start at the current value
	min: 0,
	max: 50,

	step: 1,
	slide: function(event, ui) { //This is where we can perform actions based on the slide
		$("#heading2_shadow_blur_radius").attr("value", ui.value); //This adds that value into the span in the tabs below, so you can see the actual value
		colour = $('.heading2_shadow_colour').val();
		xcoord = $('.heading2_shadow_x_coordinate').val();
		ycoord = $('.heading2_shadow_y_coordinate').val();
		jQuery('.wrapper h2').css('textShadow',colour+' '+xcoord+'px '+ycoord+'px '+ui.value+'px');
	}
});
$("#sliderheading2_shadow_x_coordinate").slider({
	value: xcoord, //Sets the slider handle to start at the current value
	min: -10,
	max: 10,
	step: 1,
	slide: function(event, ui) { //This is where we can perform actions based on the slide
		$("#heading2_shadow_x_coordinate").attr("value", ui.value); //This adds that value into the span in the tabs below, so you can see the actual value
		colour = $('#heading2_shadow_colour').val();
		ycoord = $('#heading2_shadow_y_coordinate').val();
		blur = $('#heading2_shadow_blur_radius').val();
		jQuery('.wrapper h2').css('textShadow',colour+' '+ui.value+'px '+ycoord+'px '+blur+'px');
	}
});
$("#sliderheading2_shadow_y_coordinate").slider({
	value: ycoord, //Sets the slider handle to start at the current value
	min: -10,
	max: 10,
	step: 1,
	slide: function(event, ui) { //This is where we can perform actions based on the slide
		$("#heading2_shadow_y_coordinate").attr("value", ui.value); //This adds that value into the span in the tabs below, so you can see the actual value
		colour = $('#heading2_shadow_colour').val();
		xcoord = $('#heading2_shadow_x_coordinate').val();
		blur = $('#heading2_shadow_blur_radius').val();
		jQuery('.wrapper h2').css('textShadow',colour+' '+xcoord+'px '+ui.value+'px '+blur+'px');
	}
});
$('#heading2_shadow_colour').change(function() {
	colour = $('#heading2_shadow_colour').val();
	xcoord = $('#heading2_shadow_x_coordinate').val();
	ycoord = $('#heading2_shadow_y_coordinate').val();
	blur = $('#heading2_shadow_blur_radius').val();
	jQuery('.wrapper h2').css('textShadow',colour+' '+xcoord+'px '+ycoord+'px '+blur+'px');
});

var number = parseInt($(".wrapper h2").css('border-top-width'));
$("#heading2_bordertop_width").text(number);
$("#sliderheading2_bordertop_width").slider({
	value: number,
	min: 0,
	max: 10,
	step: 1,
	slide: function(event, ui) {
		$(".wrapper h2").css("border-top-width", ui.value + "px");
		$("#heading2_bordertop_width").attr("value", ui.value);
	}
});$('input#heading2_bordertop_width').change(function() {
	var random = $('input#heading2_bordertop_width').val();
	$('.wrapper h2').css('border-top-width',random+'px');
	$("#sliderheading2_bordertop_width").slider({
		value: random,
		min: 0,
		max: 10,
		step: 1,
	});
});
var number = parseInt($(".wrapper h2").css('border-bottom-width'));
$("#heading2_borderbottom_width").text(number);
$("#sliderheading2_borderbottom_width").slider({
	value: number,
	min: 0,
	max: 10,
	step: 1,
	slide: function(event, ui) {
		$(".wrapper h2").css("border-bottom-width", ui.value + "px");
		$("#heading2_borderbottom_width").attr("value", ui.value);
	}
});$('input#heading2_borderbottom_width').change(function() {
	var random = $('input#heading2_borderbottom_width').val();
	$('.wrapper h2').css('border-bottom-width',random+'px');
	$("#sliderheading2_borderbottom_width").slider({
		value: random,
		min: 0,
		max: 10,
		step: 1,
	});
});

var number = parseInt($(".wrapper h2").css('margin-top'));
$("#heading2_margin_top").text(number);
$("#sliderheading2_margin_top").slider({
	value: number,
	min: 0,
	max: 50,
	step: 1,
	slide: function(event, ui) {
		$(".wrapper h2").css("margin-top", ui.value + "px");
		$("#heading2_margin_top").attr("value", ui.value);
	}
});$('input#heading2_margin_top').change(function() {
	var random = $('input#heading2_margin_top').val();
	$('.wrapper h2').css('margin-top',random+'px');
	$("#sliderheading2_margin_top").slider({
		value: random,
		min: 0,
		max: 50,
		step: 1,
	});
});
var number = parseInt($(".wrapper h2").css('margin-right'));
$("#heading2_margin_right").text(number);
$("#sliderheading2_margin_right").slider({
	value: number,
	min: 0,
	max: 50,
	step: 1,
	slide: function(event, ui) {
		$(".wrapper h2").css("margin-right", ui.value + "px");
		$("#heading2_margin_right").attr("value", ui.value);
	}
});$('input#heading2_margin_right').change(function() {
	var random = $('input#heading2_margin_right').val();
	$('.wrapper h2').css('margin-right',random+'px');
	$("#sliderheading2_margin_right").slider({
		value: random,
		min: 0,
		max: 50,
		step: 1,
	});
});
var number = parseInt($(".wrapper h2").css('margin-bottom'));
$("#heading2_margin_bottom").text(number);
$("#sliderheading2_margin_bottom").slider({
	value: number,
	min: 0,
	max: 50,
	step: 1,
	slide: function(event, ui) {
		$(".wrapper h2").css("margin-bottom", ui.value + "px");
		$("#heading2_margin_bottom").attr("value", ui.value);
	}
});$('input#heading2_margin_bottom').change(function() {
	var random = $('input#heading2_margin_bottom').val();
	$('.wrapper h2').css('margin-bottom',random+'px');
	$("#sliderheading2_margin_bottom").slider({
		value: random,
		min: 0,
		max: 50,
		step: 1,
	});
});
var number = parseInt($(".wrapper h2").css('margin-left'));
$("#heading2_margin_left").text(number);
$("#sliderheading2_margin_left").slider({
	value: number,
	min: 0,
	max: 50,
	step: 1,
	slide: function(event, ui) {
		$(".wrapper h2").css("margin-left", ui.value + "px");
		$("#heading2_margin_left").attr("value", ui.value);
	}
});$('input#heading2_margin_left').change(function() {
	var random = $('input#heading2_margin_left').val();
	$('.wrapper h2').css('margin-left',random+'px');
	$("#sliderheading2_margin_left").slider({
		value: random,
		min: 0,
		max: 50,
		step: 1,
	});
});

var number = parseInt($(".wrapper h2").css('padding-top'));
$("#heading2_padding_top").text(number);
$("#sliderheading2_padding_top").slider({
	value: number,
	min: 0,
	max: 50,
	step: 1,
	slide: function(event, ui) {
		$(".wrapper h2").css("padding-top", ui.value + "px");
		$("#heading2_padding_top").attr("value", ui.value);
	}
});$('input#heading2_padding_top').change(function() {
	var random = $('input#heading2_padding_top').val();
	$('.wrapper h2').css('padding-top',random+'px');
	$("#sliderheading2_padding_top").slider({
		value: random,
		min: 0,
		max: 50,
		step: 1,
	});
});
var number = parseInt($(".wrapper h2").css('padding-right'));
$("#heading2_padding_right").text(number);
$("#sliderheading2_padding_right").slider({
	value: number,
	min: 0,
	max: 50,
	step: 1,
	slide: function(event, ui) {
		$(".wrapper h2").css("padding-right", ui.value + "px");
		$("#heading2_padding_right").attr("value", ui.value);
	}
});$('input#heading2_padding_right').change(function() {
	var random = $('input#heading2_padding_right').val();
	$('.wrapper h2').css('padding-right',random+'px');
	$("#sliderheading2_padding_right").slider({
		value: random,
		min: 0,
		max: 50,
		step: 1,
	});
});
var number = parseInt($(".wrapper h2").css('padding-bottom'));
$("#heading2_padding_bottom").text(number);
$("#sliderheading2_padding_bottom").slider({
	value: number,
	min: 0,
	max: 50,
	step: 1,
	slide: function(event, ui) {
		$(".wrapper h2").css("padding-bottom", ui.value + "px");
		$("#heading2_padding_bottom").attr("value", ui.value);
	}
});$('input#heading2_padding_bottom').change(function() {
	var random = $('input#heading2_padding_bottom').val();
	$('.wrapper h2').css('padding-bottom',random+'px');
	$("#sliderheading2_padding_bottom").slider({
		value: random,
		min: 0,
		max: 50,
		step: 1,
	});
});
var number = parseInt($(".wrapper h2").css('padding-left'));
$("#heading2_padding_left").text(number);
$("#sliderheading2_padding_left").slider({
	value: number,
	min: 0,
	max: 50,
	step: 1,
	slide: function(event, ui) {
		$(".wrapper h2").css("padding-left", ui.value + "px");
		$("#heading2_padding_left").attr("value", ui.value);
	}
});$('input#heading2_padding_left').change(function() {
	var random = $('input#heading2_padding_left').val();
	$('.wrapper h2').css('padding-left',random+'px');
	$("#sliderheading2_padding_left").slider({
		value: random,
		min: 0,
		max: 50,
		step: 1,
	});
});

$('select#heading2_fontfamily').change(function() {
	var random = $('select.heading2_fontfamily').val();
	jQuery('.wrapper h2').css('font-family',random);
});
$('select#heading2_font_weight').change(function() {
	var random = $('select.heading2_font_weight').val();
	jQuery('.wrapper h2').css('font-weight',random);
});
$('select#heading2_font_style').change(function() {
	var random = $('select.heading2_font_style').val();
	jQuery('.wrapper h2').css('font-style',random);
});
$('select#heading2_textdecoration').change(function() {
	var random = $('select.heading2_textdecoration').val();
	jQuery('.wrapper h2').css('text-decoration',random);
});
$('select#heading2_text_transform').change(function() {
	var random = $('select.heading2_text_transform').val();
	jQuery('.wrapper h2').css('text-transform',random);
});
$('select#heading2_small_caps').change(function() {
	var random = $('select.heading2_small_caps').val();
	jQuery('.wrapper h2').css('font-variant',random);
});
$('select#heading2_bordertop_type').change(function() {
	var random = $('select.heading2_bordertop_type').val();
	jQuery('.wrapper h2').css('border-top-style',random);
});
$('select#heading2_borderbottom_type').change(function() {
	var random = $('select.heading2_borderbottom_type').val();
	jQuery('.wrapper h2').css('border-bottom-style',random);
});

var number = parseInt($(".wrapper h3").css('font-size'));
$("#heading3_fontsize").text(number);
$("#sliderheading3_fontsize").slider({
	value: number,
	min: 6,
	max: 80,
	step: 1,
	slide: function(event, ui) {
		$(".wrapper h3").css("font-size", ui.value + "px");
		$("#heading3_fontsize").attr("value", ui.value);
	}
});$('input#heading3_fontsize').change(function() {
	var random = $('input#heading3_fontsize').val();
	$('.wrapper h3').css('font-size',random+'px');
	$("#sliderheading3_fontsize").slider({
		value: random,
		min: 6,
		max: 80,
		step: 1,
	});
});
var number = parseInt($(".wrapper h3").css('line-height'));
$("#heading3_line_height").text(number);
$("#sliderheading3_line_height").slider({
	value: number,
	min: 6,
	max: 80,
	step: 1,
	slide: function(event, ui) {
		$(".wrapper h3").css("line-height", ui.value + "px");
		$("#heading3_line_height").attr("value", ui.value);
	}
});$('input#heading3_line_height').change(function() {
	var random = $('input#heading3_line_height').val();
	$('.wrapper h3').css('line-height',random+'px');
	$("#sliderheading3_line_height").slider({
		value: random,
		min: 6,
		max: 80,
		step: 1,
	});
});
$('#heading3_textcolour').change(function() {
	var colour = $('#heading3_textcolour').val();
	jQuery('.wrapper h3').css('color',colour);
});
colour = $('.heading3_shadow_colour').val();
xcoord = $('.heading3_shadow_x_coordinate').val();
ycoord = $('.heading3_shadow_y_coordinate').val();
blur = $('.heading3_shadow_blur_radius').val();
$("#sliderheading3_shadow_blur_radius").slider({
	value: blur, //Sets the slider handle to start at the current value
	min: 0,
	max: 50,

	step: 1,
	slide: function(event, ui) { //This is where we can perform actions based on the slide
		$("#heading3_shadow_blur_radius").attr("value", ui.value); //This adds that value into the span in the tabs below, so you can see the actual value
		colour = $('.heading3_shadow_colour').val();
		xcoord = $('.heading3_shadow_x_coordinate').val();
		ycoord = $('.heading3_shadow_y_coordinate').val();
		jQuery('.wrapper h3').css('textShadow',colour+' '+xcoord+'px '+ycoord+'px '+ui.value+'px');
	}
});
$("#sliderheading3_shadow_x_coordinate").slider({
	value: xcoord, //Sets the slider handle to start at the current value
	min: -10,
	max: 10,
	step: 1,
	slide: function(event, ui) { //This is where we can perform actions based on the slide
		$("#heading3_shadow_x_coordinate").attr("value", ui.value); //This adds that value into the span in the tabs below, so you can see the actual value
		colour = $('#heading3_shadow_colour').val();
		ycoord = $('#heading3_shadow_y_coordinate').val();
		blur = $('#heading3_shadow_blur_radius').val();
		jQuery('.wrapper h3').css('textShadow',colour+' '+ui.value+'px '+ycoord+'px '+blur+'px');
	}
});
$("#sliderheading3_shadow_y_coordinate").slider({
	value: ycoord, //Sets the slider handle to start at the current value
	min: -10,
	max: 10,
	step: 1,
	slide: function(event, ui) { //This is where we can perform actions based on the slide
		$("#heading3_shadow_y_coordinate").attr("value", ui.value); //This adds that value into the span in the tabs below, so you can see the actual value
		colour = $('#heading3_shadow_colour').val();
		xcoord = $('#heading3_shadow_x_coordinate').val();
		blur = $('#heading3_shadow_blur_radius').val();
		jQuery('.wrapper h3').css('textShadow',colour+' '+xcoord+'px '+ui.value+'px '+blur+'px');
	}
});
$('#heading3_shadow_colour').change(function() {
	colour = $('#heading3_shadow_colour').val();
	xcoord = $('#heading3_shadow_x_coordinate').val();
	ycoord = $('#heading3_shadow_y_coordinate').val();
	blur = $('#heading3_shadow_blur_radius').val();
	jQuery('.wrapper h3').css('textShadow',colour+' '+xcoord+'px '+ycoord+'px '+blur+'px');
});

var number = parseInt($(".wrapper h3").css('border-top-width'));
$("#heading3_bordertop_width").text(number);
$("#sliderheading3_bordertop_width").slider({
	value: number,
	min: 0,
	max: 10,
	step: 1,
	slide: function(event, ui) {
		$(".wrapper h3").css("border-top-width", ui.value + "px");
		$("#heading3_bordertop_width").attr("value", ui.value);
	}
});$('input#heading3_bordertop_width').change(function() {
	var random = $('input#heading3_bordertop_width').val();
	$('.wrapper h3').css('border-top-width',random+'px');
	$("#sliderheading3_bordertop_width").slider({
		value: random,
		min: 0,
		max: 10,
		step: 1,
	});
});
var number = parseInt($(".wrapper h3").css('border-bottom-width'));
$("#heading3_borderbottom_width").text(number);
$("#sliderheading3_borderbottom_width").slider({
	value: number,
	min: 0,
	max: 10,
	step: 1,
	slide: function(event, ui) {
		$(".wrapper h3").css("border-bottom-width", ui.value + "px");
		$("#heading3_borderbottom_width").attr("value", ui.value);
	}
});$('input#heading3_borderbottom_width').change(function() {
	var random = $('input#heading3_borderbottom_width').val();
	$('.wrapper h3').css('border-bottom-width',random+'px');
	$("#sliderheading3_borderbottom_width").slider({
		value: random,
		min: 0,
		max: 10,
		step: 1,
	});
});

var number = parseInt($(".wrapper h3").css('margin-top'));
$("#heading3_margin_top").text(number);
$("#sliderheading3_margin_top").slider({
	value: number,
	min: 0,
	max: 50,
	step: 1,
	slide: function(event, ui) {
		$(".wrapper h3").css("margin-top", ui.value + "px");
		$("#heading3_margin_top").attr("value", ui.value);
	}
});$('input#heading3_margin_top').change(function() {
	var random = $('input#heading3_margin_top').val();
	$('.wrapper h3').css('margin-top',random+'px');
	$("#sliderheading3_margin_top").slider({
		value: random,
		min: 0,
		max: 50,
		step: 1,
	});
});
var number = parseInt($(".wrapper h3").css('margin-right'));
$("#heading3_margin_right").text(number);
$("#sliderheading3_margin_right").slider({
	value: number,
	min: 0,
	max: 50,
	step: 1,
	slide: function(event, ui) {
		$(".wrapper h3").css("margin-right", ui.value + "px");
		$("#heading3_margin_right").attr("value", ui.value);
	}
});$('input#heading3_margin_right').change(function() {
	var random = $('input#heading3_margin_right').val();
	$('.wrapper h3').css('margin-right',random+'px');
	$("#sliderheading3_margin_right").slider({
		value: random,
		min: 0,
		max: 50,
		step: 1,
	});
});
var number = parseInt($(".wrapper h3").css('margin-bottom'));
$("#heading3_margin_bottom").text(number);
$("#sliderheading3_margin_bottom").slider({
	value: number,
	min: 0,
	max: 50,
	step: 1,
	slide: function(event, ui) {
		$(".wrapper h3").css("margin-bottom", ui.value + "px");
		$("#heading3_margin_bottom").attr("value", ui.value);
	}
});$('input#heading3_margin_bottom').change(function() {
	var random = $('input#heading3_margin_bottom').val();
	$('.wrapper h3').css('margin-bottom',random+'px');
	$("#sliderheading3_margin_bottom").slider({
		value: random,
		min: 0,
		max: 50,
		step: 1,
	});
});
var number = parseInt($(".wrapper h3").css('margin-left'));
$("#heading3_margin_left").text(number);
$("#sliderheading3_margin_left").slider({
	value: number,
	min: 0,
	max: 50,
	step: 1,
	slide: function(event, ui) {
		$(".wrapper h3").css("margin-left", ui.value + "px");
		$("#heading3_margin_left").attr("value", ui.value);
	}
});$('input#heading3_margin_left').change(function() {
	var random = $('input#heading3_margin_left').val();
	$('.wrapper h3').css('margin-left',random+'px');
	$("#sliderheading3_margin_left").slider({
		value: random,
		min: 0,
		max: 50,
		step: 1,
	});
});

var number = parseInt($(".wrapper h3").css('padding-top'));
$("#heading3_padding_top").text(number);
$("#sliderheading3_padding_top").slider({
	value: number,
	min: 0,
	max: 50,
	step: 1,
	slide: function(event, ui) {
		$(".wrapper h3").css("padding-top", ui.value + "px");
		$("#heading3_padding_top").attr("value", ui.value);
	}
});$('input#heading3_padding_top').change(function() {
	var random = $('input#heading3_padding_top').val();
	$('.wrapper h3').css('padding-top',random+'px');
	$("#sliderheading3_padding_top").slider({
		value: random,
		min: 0,
		max: 50,
		step: 1,
	});
});
var number = parseInt($(".wrapper h3").css('padding-right'));
$("#heading3_padding_right").text(number);
$("#sliderheading3_padding_right").slider({
	value: number,
	min: 0,
	max: 50,
	step: 1,
	slide: function(event, ui) {
		$(".wrapper h3").css("padding-right", ui.value + "px");
		$("#heading3_padding_right").attr("value", ui.value);
	}
});$('input#heading3_padding_right').change(function() {
	var random = $('input#heading3_padding_right').val();
	$('.wrapper h3').css('padding-right',random+'px');
	$("#sliderheading3_padding_right").slider({
		value: random,
		min: 0,
		max: 50,
		step: 1,
	});
});
var number = parseInt($(".wrapper h3").css('padding-bottom'));
$("#heading3_padding_bottom").text(number);
$("#sliderheading3_padding_bottom").slider({
	value: number,
	min: 0,
	max: 50,
	step: 1,
	slide: function(event, ui) {
		$(".wrapper h3").css("padding-bottom", ui.value + "px");
		$("#heading3_padding_bottom").attr("value", ui.value);
	}
});$('input#heading3_padding_bottom').change(function() {
	var random = $('input#heading3_padding_bottom').val();
	$('.wrapper h3').css('padding-bottom',random+'px');
	$("#sliderheading3_padding_bottom").slider({
		value: random,
		min: 0,
		max: 50,
		step: 1,
	});
});
var number = parseInt($(".wrapper h3").css('padding-left'));
$("#heading3_padding_left").text(number);
$("#sliderheading3_padding_left").slider({
	value: number,
	min: 0,
	max: 50,
	step: 1,
	slide: function(event, ui) {
		$(".wrapper h3").css("padding-left", ui.value + "px");
		$("#heading3_padding_left").attr("value", ui.value);
	}
});$('input#heading3_padding_left').change(function() {
	var random = $('input#heading3_padding_left').val();
	$('.wrapper h3').css('padding-left',random+'px');
	$("#sliderheading3_padding_left").slider({
		value: random,
		min: 0,
		max: 50,
		step: 1,
	});
});

$('select#heading3_fontfamily').change(function() {
	var random = $('select.heading3_fontfamily').val();
	jQuery('.wrapper h3').css('font-family',random);
});
$('select#heading3_font_weight').change(function() {
	var random = $('select.heading3_font_weight').val();
	jQuery('.wrapper h3').css('font-weight',random);
});
$('select#heading3_font_style').change(function() {
	var random = $('select.heading3_font_style').val();
	jQuery('.wrapper h3').css('font-style',random);
});
$('select#heading3_textdecoration').change(function() {
	var random = $('select.heading3_textdecoration').val();
	jQuery('.wrapper h3').css('text-decoration',random);
});
$('select#heading3_text_transform').change(function() {
	var random = $('select.heading3_text_transform').val();
	jQuery('.wrapper h3').css('text-transform',random);
});
$('select#heading3_small_caps').change(function() {
	var random = $('select.heading3_small_caps').val();
	jQuery('.wrapper h3').css('font-variant',random);
});
$('select#heading3_bordertop_type').change(function() {
	var random = $('select.heading3_bordertop_type').val();
	jQuery('.wrapper h3').css('border-top-style',random);
});
$('select#heading3_borderbottom_type').change(function() {
	var random = $('select.heading3_borderbottom_type').val();
	jQuery('.wrapper h3').css('border-bottom-style',random);
});

var number = parseInt($(".wrapper h4").css('font-size'));
$("#heading4_fontsize").text(number);
$("#sliderheading4_fontsize").slider({
	value: number,
	min: 6,
	max: 80,
	step: 1,
	slide: function(event, ui) {
		$(".wrapper h4").css("font-size", ui.value + "px");
		$("#heading4_fontsize").attr("value", ui.value);
	}
});$('input#heading4_fontsize').change(function() {
	var random = $('input#heading4_fontsize').val();
	$('.wrapper h4').css('font-size',random+'px');
	$("#sliderheading4_fontsize").slider({
		value: random,
		min: 6,
		max: 80,
		step: 1,
	});
});
var number = parseInt($(".wrapper h4").css('line-height'));
$("#heading4_line_height").text(number);
$("#sliderheading4_line_height").slider({
	value: number,
	min: 6,
	max: 80,
	step: 1,
	slide: function(event, ui) {
		$(".wrapper h4").css("line-height", ui.value + "px");
		$("#heading4_line_height").attr("value", ui.value);
	}
});$('input#heading4_line_height').change(function() {
	var random = $('input#heading4_line_height').val();
	$('.wrapper h4').css('line-height',random+'px');
	$("#sliderheading4_line_height").slider({
		value: random,
		min: 6,
		max: 80,
		step: 1,
	});
});
$('#heading4_textcolour').change(function() {
	var colour = $('#heading4_textcolour').val();
	jQuery('.wrapper h4').css('color',colour);
});
colour = $('.heading4_shadow_colour').val();
xcoord = $('.heading4_shadow_x_coordinate').val();
ycoord = $('.heading4_shadow_y_coordinate').val();
blur = $('.heading4_shadow_blur_radius').val();
$("#sliderheading4_shadow_blur_radius").slider({
	value: blur, //Sets the slider handle to start at the current value
	min: 0,
	max: 50,

	step: 1,
	slide: function(event, ui) { //This is where we can perform actions based on the slide
		$("#heading4_shadow_blur_radius").attr("value", ui.value); //This adds that value into the span in the tabs below, so you can see the actual value
		colour = $('.heading4_shadow_colour').val();
		xcoord = $('.heading4_shadow_x_coordinate').val();
		ycoord = $('.heading4_shadow_y_coordinate').val();
		jQuery('.wrapper h4').css('textShadow',colour+' '+xcoord+'px '+ycoord+'px '+ui.value+'px');
	}
});
$("#sliderheading4_shadow_x_coordinate").slider({
	value: xcoord, //Sets the slider handle to start at the current value
	min: -10,
	max: 10,
	step: 1,
	slide: function(event, ui) { //This is where we can perform actions based on the slide
		$("#heading4_shadow_x_coordinate").attr("value", ui.value); //This adds that value into the span in the tabs below, so you can see the actual value
		colour = $('#heading4_shadow_colour').val();
		ycoord = $('#heading4_shadow_y_coordinate').val();
		blur = $('#heading4_shadow_blur_radius').val();
		jQuery('.wrapper h4').css('textShadow',colour+' '+ui.value+'px '+ycoord+'px '+blur+'px');
	}
});
$("#sliderheading4_shadow_y_coordinate").slider({
	value: ycoord, //Sets the slider handle to start at the current value
	min: -10,
	max: 10,
	step: 1,
	slide: function(event, ui) { //This is where we can perform actions based on the slide
		$("#heading4_shadow_y_coordinate").attr("value", ui.value); //This adds that value into the span in the tabs below, so you can see the actual value
		colour = $('#heading4_shadow_colour').val();
		xcoord = $('#heading4_shadow_x_coordinate').val();
		blur = $('#heading4_shadow_blur_radius').val();
		jQuery('.wrapper h4').css('textShadow',colour+' '+xcoord+'px '+ui.value+'px '+blur+'px');
	}
});
$('#heading4_shadow_colour').change(function() {
	colour = $('#heading4_shadow_colour').val();
	xcoord = $('#heading4_shadow_x_coordinate').val();
	ycoord = $('#heading4_shadow_y_coordinate').val();
	blur = $('#heading4_shadow_blur_radius').val();
	jQuery('.wrapper h4').css('textShadow',colour+' '+xcoord+'px '+ycoord+'px '+blur+'px');
});

var number = parseInt($(".wrapper h4").css('border-top-width'));
$("#heading4_bordertop_width").text(number);
$("#sliderheading4_bordertop_width").slider({
	value: number,
	min: 0,
	max: 10,
	step: 1,
	slide: function(event, ui) {
		$(".wrapper h4").css("border-top-width", ui.value + "px");
		$("#heading4_bordertop_width").attr("value", ui.value);
	}
});$('input#heading4_bordertop_width').change(function() {
	var random = $('input#heading4_bordertop_width').val();
	$('.wrapper h4').css('border-top-width',random+'px');
	$("#sliderheading4_bordertop_width").slider({
		value: random,
		min: 0,
		max: 10,
		step: 1,
	});
});
var number = parseInt($(".wrapper h4").css('border-bottom-width'));
$("#heading4_borderbottom_width").text(number);
$("#sliderheading4_borderbottom_width").slider({
	value: number,
	min: 0,
	max: 10,
	step: 1,
	slide: function(event, ui) {
		$(".wrapper h4").css("border-bottom-width", ui.value + "px");
		$("#heading4_borderbottom_width").attr("value", ui.value);
	}
});$('input#heading4_borderbottom_width').change(function() {
	var random = $('input#heading4_borderbottom_width').val();
	$('.wrapper h4').css('border-bottom-width',random+'px');
	$("#sliderheading4_borderbottom_width").slider({
		value: random,
		min: 0,
		max: 10,
		step: 1,
	});
});

var number = parseInt($(".wrapper h4").css('margin-top'));
$("#heading4_margin_top").text(number);
$("#sliderheading4_margin_top").slider({
	value: number,
	min: 0,
	max: 50,
	step: 1,
	slide: function(event, ui) {
		$(".wrapper h4").css("margin-top", ui.value + "px");
		$("#heading4_margin_top").attr("value", ui.value);
	}
});$('input#heading4_margin_top').change(function() {
	var random = $('input#heading4_margin_top').val();
	$('.wrapper h4').css('margin-top',random+'px');
	$("#sliderheading4_margin_top").slider({
		value: random,
		min: 0,
		max: 50,
		step: 1,
	});
});
var number = parseInt($(".wrapper h4").css('margin-right'));
$("#heading4_margin_right").text(number);
$("#sliderheading4_margin_right").slider({
	value: number,
	min: 0,
	max: 50,
	step: 1,
	slide: function(event, ui) {
		$(".wrapper h4").css("margin-right", ui.value + "px");
		$("#heading4_margin_right").attr("value", ui.value);
	}
});$('input#heading4_margin_right').change(function() {
	var random = $('input#heading4_margin_right').val();
	$('.wrapper h4').css('margin-right',random+'px');
	$("#sliderheading4_margin_right").slider({
		value: random,
		min: 0,
		max: 50,
		step: 1,
	});
});
var number = parseInt($(".wrapper h4").css('margin-bottom'));
$("#heading4_margin_bottom").text(number);
$("#sliderheading4_margin_bottom").slider({
	value: number,
	min: 0,
	max: 50,
	step: 1,
	slide: function(event, ui) {
		$(".wrapper h4").css("margin-bottom", ui.value + "px");
		$("#heading4_margin_bottom").attr("value", ui.value);
	}
});$('input#heading4_margin_bottom').change(function() {
	var random = $('input#heading4_margin_bottom').val();
	$('.wrapper h4').css('margin-bottom',random+'px');
	$("#sliderheading4_margin_bottom").slider({
		value: random,
		min: 0,
		max: 50,
		step: 1,
	});
});
var number = parseInt($(".wrapper h4").css('margin-left'));
$("#heading4_margin_left").text(number);
$("#sliderheading4_margin_left").slider({
	value: number,
	min: 0,
	max: 50,
	step: 1,
	slide: function(event, ui) {
		$(".wrapper h4").css("margin-left", ui.value + "px");
		$("#heading4_margin_left").attr("value", ui.value);
	}
});$('input#heading4_margin_left').change(function() {
	var random = $('input#heading4_margin_left').val();
	$('.wrapper h4').css('margin-left',random+'px');
	$("#sliderheading4_margin_left").slider({
		value: random,
		min: 0,
		max: 50,
		step: 1,
	});
});

var number = parseInt($(".wrapper h4").css('padding-top'));
$("#heading4_padding_top").text(number);
$("#sliderheading4_padding_top").slider({
	value: number,
	min: 0,
	max: 50,
	step: 1,
	slide: function(event, ui) {
		$(".wrapper h4").css("padding-top", ui.value + "px");
		$("#heading4_padding_top").attr("value", ui.value);
	}
});$('input#heading4_padding_top').change(function() {
	var random = $('input#heading4_padding_top').val();
	$('.wrapper h4').css('padding-top',random+'px');
	$("#sliderheading4_padding_top").slider({
		value: random,
		min: 0,
		max: 50,
		step: 1,
	});
});
var number = parseInt($(".wrapper h4").css('padding-right'));
$("#heading4_padding_right").text(number);
$("#sliderheading4_padding_right").slider({
	value: number,
	min: 0,
	max: 50,
	step: 1,
	slide: function(event, ui) {
		$(".wrapper h4").css("padding-right", ui.value + "px");
		$("#heading4_padding_right").attr("value", ui.value);
	}
});$('input#heading4_padding_right').change(function() {
	var random = $('input#heading4_padding_right').val();
	$('.wrapper h4').css('padding-right',random+'px');
	$("#sliderheading4_padding_right").slider({
		value: random,
		min: 0,
		max: 50,
		step: 1,
	});
});
var number = parseInt($(".wrapper h4").css('padding-bottom'));
$("#heading4_padding_bottom").text(number);
$("#sliderheading4_padding_bottom").slider({
	value: number,
	min: 0,
	max: 50,
	step: 1,
	slide: function(event, ui) {
		$(".wrapper h4").css("padding-bottom", ui.value + "px");
		$("#heading4_padding_bottom").attr("value", ui.value);
	}
});$('input#heading4_padding_bottom').change(function() {
	var random = $('input#heading4_padding_bottom').val();
	$('.wrapper h4').css('padding-bottom',random+'px');
	$("#sliderheading4_padding_bottom").slider({
		value: random,
		min: 0,
		max: 50,
		step: 1,
	});
});
var number = parseInt($(".wrapper h4").css('padding-left'));
$("#heading4_padding_left").text(number);
$("#sliderheading4_padding_left").slider({
	value: number,
	min: 0,
	max: 50,
	step: 1,
	slide: function(event, ui) {
		$(".wrapper h4").css("padding-left", ui.value + "px");
		$("#heading4_padding_left").attr("value", ui.value);
	}
});$('input#heading4_padding_left').change(function() {
	var random = $('input#heading4_padding_left').val();
	$('.wrapper h4').css('padding-left',random+'px');
	$("#sliderheading4_padding_left").slider({
		value: random,
		min: 0,
		max: 50,
		step: 1,
	});
});

$('select#heading4_fontfamily').change(function() {
	var random = $('select.heading4_fontfamily').val();
	jQuery('.wrapper h4').css('font-family',random);
});
$('select#heading4_font_weight').change(function() {
	var random = $('select.heading4_font_weight').val();
	jQuery('.wrapper h4').css('font-weight',random);
});
$('select#heading4_font_style').change(function() {
	var random = $('select.heading4_font_style').val();
	jQuery('.wrapper h4').css('font-style',random);
});
$('select#heading4_textdecoration').change(function() {
	var random = $('select.heading4_textdecoration').val();
	jQuery('.wrapper h4').css('text-decoration',random);
});
$('select#heading4_text_transform').change(function() {
	var random = $('select.heading4_text_transform').val();
	jQuery('.wrapper h4').css('text-transform',random);
});
$('select#heading4_small_caps').change(function() {
	var random = $('select.heading4_small_caps').val();
	jQuery('.wrapper h4').css('font-variant',random);
});
$('select#heading4_bordertop_type').change(function() {
	var random = $('select.heading4_bordertop_type').val();
	jQuery('.wrapper h4').css('border-top-style',random);
});
$('select#heading4_borderbottom_type').change(function() {
	var random = $('select.heading4_borderbottom_type').val();
	jQuery('.wrapper h4').css('border-bottom-style',random);
});

var number = parseInt($(".wrapper h5").css('font-size'));
$("#heading5_fontsize").text(number);
$("#sliderheading5_fontsize").slider({
	value: number,
	min: 6,
	max: 80,
	step: 1,
	slide: function(event, ui) {
		$(".wrapper h5").css("font-size", ui.value + "px");
		$("#heading5_fontsize").attr("value", ui.value);
	}
});$('input#heading5_fontsize').change(function() {
	var random = $('input#heading5_fontsize').val();
	$('.wrapper h5').css('font-size',random+'px');
	$("#sliderheading5_fontsize").slider({
		value: random,
		min: 6,
		max: 80,
		step: 1,
	});
});
var number = parseInt($(".wrapper h5").css('line-height'));
$("#heading5_line_height").text(number);
$("#sliderheading5_line_height").slider({
	value: number,
	min: 6,
	max: 80,
	step: 1,
	slide: function(event, ui) {
		$(".wrapper h5").css("line-height", ui.value + "px");
		$("#heading5_line_height").attr("value", ui.value);
	}
});$('input#heading5_line_height').change(function() {
	var random = $('input#heading5_line_height').val();
	$('.wrapper h5').css('line-height',random+'px');
	$("#sliderheading5_line_height").slider({
		value: random,
		min: 6,
		max: 80,
		step: 1,
	});
});
$('#heading5_textcolour').change(function() {
	var colour = $('#heading5_textcolour').val();
	jQuery('.wrapper h5').css('color',colour);
});
colour = $('.heading5_shadow_colour').val();
xcoord = $('.heading5_shadow_x_coordinate').val();
ycoord = $('.heading5_shadow_y_coordinate').val();
blur = $('.heading5_shadow_blur_radius').val();
$("#sliderheading5_shadow_blur_radius").slider({
	value: blur, //Sets the slider handle to start at the current value
	min: 0,
	max: 50,

	step: 1,
	slide: function(event, ui) { //This is where we can perform actions based on the slide
		$("#heading5_shadow_blur_radius").attr("value", ui.value); //This adds that value into the span in the tabs below, so you can see the actual value
		colour = $('.heading5_shadow_colour').val();
		xcoord = $('.heading5_shadow_x_coordinate').val();
		ycoord = $('.heading5_shadow_y_coordinate').val();
		jQuery('.wrapper h5').css('textShadow',colour+' '+xcoord+'px '+ycoord+'px '+ui.value+'px');
	}
});
$("#sliderheading5_shadow_x_coordinate").slider({
	value: xcoord, //Sets the slider handle to start at the current value
	min: -10,
	max: 10,
	step: 1,
	slide: function(event, ui) { //This is where we can perform actions based on the slide
		$("#heading5_shadow_x_coordinate").attr("value", ui.value); //This adds that value into the span in the tabs below, so you can see the actual value
		colour = $('#heading5_shadow_colour').val();
		ycoord = $('#heading5_shadow_y_coordinate').val();
		blur = $('#heading5_shadow_blur_radius').val();
		jQuery('.wrapper h5').css('textShadow',colour+' '+ui.value+'px '+ycoord+'px '+blur+'px');
	}
});
$("#sliderheading5_shadow_y_coordinate").slider({
	value: ycoord, //Sets the slider handle to start at the current value
	min: -10,
	max: 10,
	step: 1,
	slide: function(event, ui) { //This is where we can perform actions based on the slide
		$("#heading5_shadow_y_coordinate").attr("value", ui.value); //This adds that value into the span in the tabs below, so you can see the actual value
		colour = $('#heading5_shadow_colour').val();
		xcoord = $('#heading5_shadow_x_coordinate').val();
		blur = $('#heading5_shadow_blur_radius').val();
		jQuery('.wrapper h5').css('textShadow',colour+' '+xcoord+'px '+ui.value+'px '+blur+'px');
	}
});
$('#heading5_shadow_colour').change(function() {
	colour = $('#heading5_shadow_colour').val();
	xcoord = $('#heading5_shadow_x_coordinate').val();
	ycoord = $('#heading5_shadow_y_coordinate').val();
	blur = $('#heading5_shadow_blur_radius').val();
	jQuery('.wrapper h5').css('textShadow',colour+' '+xcoord+'px '+ycoord+'px '+blur+'px');
});

var number = parseInt($(".wrapper h5").css('border-top-width'));
$("#heading5_bordertop_width").text(number);
$("#sliderheading5_bordertop_width").slider({
	value: number,
	min: 0,
	max: 10,
	step: 1,
	slide: function(event, ui) {
		$(".wrapper h5").css("border-top-width", ui.value + "px");
		$("#heading5_bordertop_width").attr("value", ui.value);
	}
});$('input#heading5_bordertop_width').change(function() {
	var random = $('input#heading5_bordertop_width').val();
	$('.wrapper h5').css('border-top-width',random+'px');
	$("#sliderheading5_bordertop_width").slider({
		value: random,
		min: 0,
		max: 10,
		step: 1,
	});
});
var number = parseInt($(".wrapper h5").css('border-bottom-width'));
$("#heading5_borderbottom_width").text(number);
$("#sliderheading5_borderbottom_width").slider({
	value: number,
	min: 0,
	max: 10,
	step: 1,
	slide: function(event, ui) {
		$(".wrapper h5").css("border-bottom-width", ui.value + "px");
		$("#heading5_borderbottom_width").attr("value", ui.value);
	}
});$('input#heading5_borderbottom_width').change(function() {
	var random = $('input#heading5_borderbottom_width').val();
	$('.wrapper h5').css('border-bottom-width',random+'px');
	$("#sliderheading5_borderbottom_width").slider({
		value: random,
		min: 0,
		max: 10,
		step: 1,
	});
});

var number = parseInt($(".wrapper h5").css('margin-top'));
$("#heading5_margin_top").text(number);
$("#sliderheading5_margin_top").slider({
	value: number,
	min: 0,
	max: 50,
	step: 1,
	slide: function(event, ui) {
		$(".wrapper h5").css("margin-top", ui.value + "px");
		$("#heading5_margin_top").attr("value", ui.value);
	}
});$('input#heading5_margin_top').change(function() {
	var random = $('input#heading5_margin_top').val();
	$('.wrapper h5').css('margin-top',random+'px');
	$("#sliderheading5_margin_top").slider({
		value: random,
		min: 0,
		max: 50,
		step: 1,
	});
});
var number = parseInt($(".wrapper h5").css('margin-right'));
$("#heading5_margin_right").text(number);
$("#sliderheading5_margin_right").slider({
	value: number,
	min: 0,
	max: 50,
	step: 1,
	slide: function(event, ui) {
		$(".wrapper h5").css("margin-right", ui.value + "px");
		$("#heading5_margin_right").attr("value", ui.value);
	}
});$('input#heading5_margin_right').change(function() {
	var random = $('input#heading5_margin_right').val();
	$('.wrapper h5').css('margin-right',random+'px');
	$("#sliderheading5_margin_right").slider({
		value: random,
		min: 0,
		max: 50,
		step: 1,
	});
});
var number = parseInt($(".wrapper h5").css('margin-bottom'));
$("#heading5_margin_bottom").text(number);
$("#sliderheading5_margin_bottom").slider({
	value: number,
	min: 0,
	max: 50,
	step: 1,
	slide: function(event, ui) {
		$(".wrapper h5").css("margin-bottom", ui.value + "px");
		$("#heading5_margin_bottom").attr("value", ui.value);
	}
});$('input#heading5_margin_bottom').change(function() {
	var random = $('input#heading5_margin_bottom').val();
	$('.wrapper h5').css('margin-bottom',random+'px');
	$("#sliderheading5_margin_bottom").slider({
		value: random,
		min: 0,
		max: 50,
		step: 1,
	});
});
var number = parseInt($(".wrapper h5").css('margin-left'));
$("#heading5_margin_left").text(number);
$("#sliderheading5_margin_left").slider({
	value: number,
	min: 0,
	max: 50,
	step: 1,
	slide: function(event, ui) {
		$(".wrapper h5").css("margin-left", ui.value + "px");
		$("#heading5_margin_left").attr("value", ui.value);
	}
});$('input#heading5_margin_left').change(function() {
	var random = $('input#heading5_margin_left').val();
	$('.wrapper h5').css('margin-left',random+'px');
	$("#sliderheading5_margin_left").slider({
		value: random,
		min: 0,
		max: 50,
		step: 1,
	});
});

var number = parseInt($(".wrapper h5").css('padding-top'));
$("#heading5_padding_top").text(number);
$("#sliderheading5_padding_top").slider({
	value: number,
	min: 0,
	max: 50,
	step: 1,
	slide: function(event, ui) {
		$(".wrapper h5").css("padding-top", ui.value + "px");
		$("#heading5_padding_top").attr("value", ui.value);
	}
});$('input#heading5_padding_top').change(function() {
	var random = $('input#heading5_padding_top').val();
	$('.wrapper h5').css('padding-top',random+'px');
	$("#sliderheading5_padding_top").slider({
		value: random,
		min: 0,
		max: 50,
		step: 1,
	});
});
var number = parseInt($(".wrapper h5").css('padding-right'));
$("#heading5_padding_right").text(number);
$("#sliderheading5_padding_right").slider({
	value: number,
	min: 0,
	max: 50,
	step: 1,
	slide: function(event, ui) {
		$(".wrapper h5").css("padding-right", ui.value + "px");
		$("#heading5_padding_right").attr("value", ui.value);
	}
});$('input#heading5_padding_right').change(function() {
	var random = $('input#heading5_padding_right').val();
	$('.wrapper h5').css('padding-right',random+'px');
	$("#sliderheading5_padding_right").slider({
		value: random,
		min: 0,
		max: 50,
		step: 1,
	});
});
var number = parseInt($(".wrapper h5").css('padding-bottom'));
$("#heading5_padding_bottom").text(number);
$("#sliderheading5_padding_bottom").slider({
	value: number,
	min: 0,
	max: 50,
	step: 1,
	slide: function(event, ui) {
		$(".wrapper h5").css("padding-bottom", ui.value + "px");
		$("#heading5_padding_bottom").attr("value", ui.value);
	}
});$('input#heading5_padding_bottom').change(function() {
	var random = $('input#heading5_padding_bottom').val();
	$('.wrapper h5').css('padding-bottom',random+'px');
	$("#sliderheading5_padding_bottom").slider({
		value: random,
		min: 0,
		max: 50,
		step: 1,
	});
});
var number = parseInt($(".wrapper h5").css('padding-left'));
$("#heading5_padding_left").text(number);
$("#sliderheading5_padding_left").slider({
	value: number,
	min: 0,
	max: 50,
	step: 1,
	slide: function(event, ui) {
		$(".wrapper h5").css("padding-left", ui.value + "px");
		$("#heading5_padding_left").attr("value", ui.value);
	}
});$('input#heading5_padding_left').change(function() {
	var random = $('input#heading5_padding_left').val();
	$('.wrapper h5').css('padding-left',random+'px');
	$("#sliderheading5_padding_left").slider({
		value: random,
		min: 0,
		max: 50,
		step: 1,
	});
});

$('select#heading5_fontfamily').change(function() {
	var random = $('select.heading5_fontfamily').val();
	jQuery('.wrapper h5').css('font-family',random);
});
$('select#heading5_font_weight').change(function() {
	var random = $('select.heading5_font_weight').val();
	jQuery('.wrapper h5').css('font-weight',random);
});
$('select#heading5_font_style').change(function() {
	var random = $('select.heading5_font_style').val();
	jQuery('.wrapper h5').css('font-style',random);
});
$('select#heading5_textdecoration').change(function() {
	var random = $('select.heading5_textdecoration').val();
	jQuery('.wrapper h5').css('text-decoration',random);
});
$('select#heading5_text_transform').change(function() {
	var random = $('select.heading5_text_transform').val();
	jQuery('.wrapper h5').css('text-transform',random);
});
$('select#heading5_small_caps').change(function() {
	var random = $('select.heading5_small_caps').val();
	jQuery('.wrapper h5').css('font-variant',random);
});
$('select#heading5_bordertop_type').change(function() {
	var random = $('select.heading5_bordertop_type').val();
	jQuery('.wrapper h5').css('border-top-style',random);
});
$('select#heading5_borderbottom_type').change(function() {
	var random = $('select.heading5_borderbottom_type').val();
	jQuery('.wrapper h5').css('border-bottom-style',random);
});

var number = parseInt($(".wrapper h6").css('font-size'));
$("#heading6_fontsize").text(number);
$("#sliderheading6_fontsize").slider({
	value: number,
	min: 6,
	max: 80,
	step: 1,
	slide: function(event, ui) {
		$(".wrapper h6").css("font-size", ui.value + "px");
		$("#heading6_fontsize").attr("value", ui.value);
	}
});$('input#heading6_fontsize').change(function() {
	var random = $('input#heading6_fontsize').val();
	$('.wrapper h6').css('font-size',random+'px');
	$("#sliderheading6_fontsize").slider({
		value: random,
		min: 6,
		max: 80,
		step: 1,
	});
});
var number = parseInt($(".wrapper h6").css('line-height'));
$("#heading6_line_height").text(number);
$("#sliderheading6_line_height").slider({
	value: number,
	min: 6,
	max: 80,
	step: 1,
	slide: function(event, ui) {
		$(".wrapper h6").css("line-height", ui.value + "px");
		$("#heading6_line_height").attr("value", ui.value);
	}
});$('input#heading6_line_height').change(function() {
	var random = $('input#heading6_line_height').val();
	$('.wrapper h6').css('line-height',random+'px');
	$("#sliderheading6_line_height").slider({
		value: random,
		min: 6,
		max: 80,
		step: 1,
	});
});
$('#heading6_textcolour').change(function() {
	var colour = $('#heading6_textcolour').val();
	jQuery('.wrapper h6').css('color',colour);
});
colour = $('.heading6_shadow_colour').val();
xcoord = $('.heading6_shadow_x_coordinate').val();
ycoord = $('.heading6_shadow_y_coordinate').val();
blur = $('.heading6_shadow_blur_radius').val();
$("#sliderheading6_shadow_blur_radius").slider({
	value: blur, //Sets the slider handle to start at the current value
	min: 0,
	max: 50,

	step: 1,
	slide: function(event, ui) { //This is where we can perform actions based on the slide
		$("#heading6_shadow_blur_radius").attr("value", ui.value); //This adds that value into the span in the tabs below, so you can see the actual value
		colour = $('.heading6_shadow_colour').val();
		xcoord = $('.heading6_shadow_x_coordinate').val();
		ycoord = $('.heading6_shadow_y_coordinate').val();
		jQuery('.wrapper h6').css('textShadow',colour+' '+xcoord+'px '+ycoord+'px '+ui.value+'px');
	}
});
$("#sliderheading6_shadow_x_coordinate").slider({
	value: xcoord, //Sets the slider handle to start at the current value
	min: -10,
	max: 10,
	step: 1,
	slide: function(event, ui) { //This is where we can perform actions based on the slide
		$("#heading6_shadow_x_coordinate").attr("value", ui.value); //This adds that value into the span in the tabs below, so you can see the actual value
		colour = $('#heading6_shadow_colour').val();
		ycoord = $('#heading6_shadow_y_coordinate').val();
		blur = $('#heading6_shadow_blur_radius').val();
		jQuery('.wrapper h6').css('textShadow',colour+' '+ui.value+'px '+ycoord+'px '+blur+'px');
	}
});
$("#sliderheading6_shadow_y_coordinate").slider({
	value: ycoord, //Sets the slider handle to start at the current value
	min: -10,
	max: 10,
	step: 1,
	slide: function(event, ui) { //This is where we can perform actions based on the slide
		$("#heading6_shadow_y_coordinate").attr("value", ui.value); //This adds that value into the span in the tabs below, so you can see the actual value
		colour = $('#heading6_shadow_colour').val();
		xcoord = $('#heading6_shadow_x_coordinate').val();
		blur = $('#heading6_shadow_blur_radius').val();
		jQuery('.wrapper h6').css('textShadow',colour+' '+xcoord+'px '+ui.value+'px '+blur+'px');
	}
});
$('#heading6_shadow_colour').change(function() {
	colour = $('#heading6_shadow_colour').val();
	xcoord = $('#heading6_shadow_x_coordinate').val();
	ycoord = $('#heading6_shadow_y_coordinate').val();
	blur = $('#heading6_shadow_blur_radius').val();
	jQuery('.wrapper h6').css('textShadow',colour+' '+xcoord+'px '+ycoord+'px '+blur+'px');
});

var number = parseInt($(".wrapper h6").css('border-top-width'));
$("#heading6_bordertop_width").text(number);
$("#sliderheading6_bordertop_width").slider({
	value: number,
	min: 0,
	max: 10,
	step: 1,
	slide: function(event, ui) {
		$(".wrapper h6").css("border-top-width", ui.value + "px");
		$("#heading6_bordertop_width").attr("value", ui.value);
	}
});$('input#heading6_bordertop_width').change(function() {
	var random = $('input#heading6_bordertop_width').val();
	$('.wrapper h6').css('border-top-width',random+'px');
	$("#sliderheading6_bordertop_width").slider({
		value: random,
		min: 0,
		max: 10,
		step: 1,
	});
});
var number = parseInt($(".wrapper h6").css('border-bottom-width'));
$("#heading6_borderbottom_width").text(number);
$("#sliderheading6_borderbottom_width").slider({
	value: number,
	min: 0,
	max: 10,
	step: 1,
	slide: function(event, ui) {
		$(".wrapper h6").css("border-bottom-width", ui.value + "px");
		$("#heading6_borderbottom_width").attr("value", ui.value);
	}
});$('input#heading6_borderbottom_width').change(function() {
	var random = $('input#heading6_borderbottom_width').val();
	$('.wrapper h6').css('border-bottom-width',random+'px');
	$("#sliderheading6_borderbottom_width").slider({
		value: random,
		min: 0,
		max: 10,
		step: 1,
	});
});

var number = parseInt($(".wrapper h6").css('margin-top'));
$("#heading6_margin_top").text(number);
$("#sliderheading6_margin_top").slider({
	value: number,
	min: 0,
	max: 50,
	step: 1,
	slide: function(event, ui) {
		$(".wrapper h6").css("margin-top", ui.value + "px");
		$("#heading6_margin_top").attr("value", ui.value);
	}
});$('input#heading6_margin_top').change(function() {
	var random = $('input#heading6_margin_top').val();
	$('.wrapper h6').css('margin-top',random+'px');
	$("#sliderheading6_margin_top").slider({
		value: random,
		min: 0,
		max: 50,
		step: 1,
	});
});
var number = parseInt($(".wrapper h6").css('margin-right'));
$("#heading6_margin_right").text(number);
$("#sliderheading6_margin_right").slider({
	value: number,
	min: 0,
	max: 50,
	step: 1,
	slide: function(event, ui) {
		$(".wrapper h6").css("margin-right", ui.value + "px");
		$("#heading6_margin_right").attr("value", ui.value);
	}
});$('input#heading6_margin_right').change(function() {
	var random = $('input#heading6_margin_right').val();
	$('.wrapper h6').css('margin-right',random+'px');
	$("#sliderheading6_margin_right").slider({
		value: random,
		min: 0,
		max: 50,
		step: 1,
	});
});
var number = parseInt($(".wrapper h6").css('margin-bottom'));
$("#heading6_margin_bottom").text(number);
$("#sliderheading6_margin_bottom").slider({
	value: number,
	min: 0,
	max: 50,
	step: 1,
	slide: function(event, ui) {
		$(".wrapper h6").css("margin-bottom", ui.value + "px");
		$("#heading6_margin_bottom").attr("value", ui.value);
	}
});$('input#heading6_margin_bottom').change(function() {
	var random = $('input#heading6_margin_bottom').val();
	$('.wrapper h6').css('margin-bottom',random+'px');
	$("#sliderheading6_margin_bottom").slider({
		value: random,
		min: 0,
		max: 50,
		step: 1,
	});
});
var number = parseInt($(".wrapper h6").css('margin-left'));
$("#heading6_margin_left").text(number);
$("#sliderheading6_margin_left").slider({
	value: number,
	min: 0,
	max: 50,
	step: 1,
	slide: function(event, ui) {
		$(".wrapper h6").css("margin-left", ui.value + "px");
		$("#heading6_margin_left").attr("value", ui.value);
	}
});$('input#heading6_margin_left').change(function() {
	var random = $('input#heading6_margin_left').val();
	$('.wrapper h6').css('margin-left',random+'px');
	$("#sliderheading6_margin_left").slider({
		value: random,
		min: 0,
		max: 50,
		step: 1,
	});
});

var number = parseInt($(".wrapper h6").css('padding-top'));
$("#heading6_padding_top").text(number);
$("#sliderheading6_padding_top").slider({
	value: number,
	min: 0,
	max: 50,
	step: 1,
	slide: function(event, ui) {
		$(".wrapper h6").css("padding-top", ui.value + "px");
		$("#heading6_padding_top").attr("value", ui.value);
	}
});$('input#heading6_padding_top').change(function() {
	var random = $('input#heading6_padding_top').val();
	$('.wrapper h6').css('padding-top',random+'px');
	$("#sliderheading6_padding_top").slider({
		value: random,
		min: 0,
		max: 50,
		step: 1,
	});
});
var number = parseInt($(".wrapper h6").css('padding-right'));
$("#heading6_padding_right").text(number);
$("#sliderheading6_padding_right").slider({
	value: number,
	min: 0,
	max: 50,
	step: 1,
	slide: function(event, ui) {
		$(".wrapper h6").css("padding-right", ui.value + "px");
		$("#heading6_padding_right").attr("value", ui.value);
	}
});$('input#heading6_padding_right').change(function() {
	var random = $('input#heading6_padding_right').val();
	$('.wrapper h6').css('padding-right',random+'px');
	$("#sliderheading6_padding_right").slider({
		value: random,
		min: 0,
		max: 50,
		step: 1,
	});
});
var number = parseInt($(".wrapper h6").css('padding-bottom'));
$("#heading6_padding_bottom").text(number);
$("#sliderheading6_padding_bottom").slider({
	value: number,
	min: 0,
	max: 50,
	step: 1,
	slide: function(event, ui) {
		$(".wrapper h6").css("padding-bottom", ui.value + "px");
		$("#heading6_padding_bottom").attr("value", ui.value);
	}
});$('input#heading6_padding_bottom').change(function() {
	var random = $('input#heading6_padding_bottom').val();
	$('.wrapper h6').css('padding-bottom',random+'px');
	$("#sliderheading6_padding_bottom").slider({
		value: random,
		min: 0,
		max: 50,
		step: 1,
	});
});
var number = parseInt($(".wrapper h6").css('padding-left'));
$("#heading6_padding_left").text(number);
$("#sliderheading6_padding_left").slider({
	value: number,
	min: 0,
	max: 50,
	step: 1,
	slide: function(event, ui) {
		$(".wrapper h6").css("padding-left", ui.value + "px");
		$("#heading6_padding_left").attr("value", ui.value);
	}
});$('input#heading6_padding_left').change(function() {
	var random = $('input#heading6_padding_left').val();
	$('.wrapper h6').css('padding-left',random+'px');
	$("#sliderheading6_padding_left").slider({
		value: random,
		min: 0,
		max: 50,
		step: 1,
	});
});

$('select#heading6_fontfamily').change(function() {
	var random = $('select.heading6_fontfamily').val();
	jQuery('.wrapper h6').css('font-family',random);
});
$('select#heading6_font_weight').change(function() {
	var random = $('select.heading6_font_weight').val();
	jQuery('.wrapper h6').css('font-weight',random);
});
$('select#heading6_font_style').change(function() {
	var random = $('select.heading6_font_style').val();
	jQuery('.wrapper h6').css('font-style',random);
});
$('select#heading6_textdecoration').change(function() {
	var random = $('select.heading6_textdecoration').val();
	jQuery('.wrapper h6').css('text-decoration',random);
});
$('select#heading6_text_transform').change(function() {
	var random = $('select.heading6_text_transform').val();
	jQuery('.wrapper h6').css('text-transform',random);
});
$('select#heading6_small_caps').change(function() {
	var random = $('select.heading6_small_caps').val();
	jQuery('.wrapper h6').css('font-variant',random);
});
$('select#heading6_bordertop_type').change(function() {
	var random = $('select.heading6_bordertop_type').val();
	jQuery('.wrapper h6').css('border-top-style',random);
});
$('select#heading6_borderbottom_type').change(function() {
	var random = $('select.heading6_borderbottom_type').val();
	jQuery('.wrapper h6').css('border-bottom-style',random);
});


var number=parseInt($(".wrapper h2 a").css('font-size'));
$("#heading2_fontsize").text(number);
$("#sliderheading2_fontsize").slider({
	value:number,
	min:6,
	max:80,
	step:1,
	slide:function(event,ui){
		$(".wrapper h2 a").css("font-size",ui.value+"px");
		$("#heading2_fontsize").attr("value",ui.value);
	}}
);

var number = parseInt($("ul#numeric_pagination li").css('font-size')); //Sets the slider handle to start at the current value
$("#pagination_fontsize").text(number);
$("#sliderpagination_fontsize").slider({
	value: number, //Sets the slider handle to start at the current value
	min: 6,
	max: 80,
	step: 1,
	slide: function(event, ui) { //This is where we can perform actions based on the slide
		$("ul#numeric_pagination li").css("font-size", ui.value + "px"); //ui.value is the current value of the slider
		$("#pagination_fontsize").attr("value", ui.value); //This adds that value into the span in the tabs below, so you can see the actual value
		jQuery('ul#numeric_pagination li a').css('height',ui.value + "px");
		jQuery('ul#numeric_pagination li a').css('line-height',ui.value + "px");
	}
});
$('#pagination_textcolour').change(function() {
	var colour = $('#pagination_textcolour').val();
	jQuery('ul#numeric_pagination li a').css('color',colour);
});
$('#pagination_texthovercolour').change(function() {
	var colour = $('#pagination_texthovercolour').val();
	jQuery('ul#numeric_pagination li a:hover').css('color',colour);
});
colour = $('.pagination_shadow_colour').val();
xcoord = $('.pagination_shadow_x_coordinate').val();
ycoord = $('.pagination_shadow_y_coordinate').val();
blur = $('.pagination_shadow_blur_radius').val();
$("#sliderpagination_shadow_blur_radius").slider({
	value: blur, //Sets the slider handle to start at the current value
	min: 0,
	max: 50,

	step: 1,
	slide: function(event, ui) { //This is where we can perform actions based on the slide
		$("#pagination_shadow_blur_radius").attr("value", ui.value); //This adds that value into the span in the tabs below, so you can see the actual value
		colour = $('.pagination_shadow_colour').val();
		xcoord = $('.pagination_shadow_x_coordinate').val();
		ycoord = $('.pagination_shadow_y_coordinate').val();
		jQuery('').css('textShadow',colour+' '+xcoord+'px '+ycoord+'px '+ui.value+'px');
	}
});
$("#sliderpagination_shadow_x_coordinate").slider({
	value: xcoord, //Sets the slider handle to start at the current value
	min: -10,
	max: 10,
	step: 1,
	slide: function(event, ui) { //This is where we can perform actions based on the slide
		$("#pagination_shadow_x_coordinate").attr("value", ui.value); //This adds that value into the span in the tabs below, so you can see the actual value
		colour = $('#pagination_shadow_colour').val();
		ycoord = $('#pagination_shadow_y_coordinate').val();
		blur = $('#pagination_shadow_blur_radius').val();
		jQuery('').css('textShadow',colour+' '+ui.value+'px '+ycoord+'px '+blur+'px');
	}
});
$("#sliderpagination_shadow_y_coordinate").slider({
	value: ycoord, //Sets the slider handle to start at the current value
	min: -10,
	max: 10,
	step: 1,
	slide: function(event, ui) { //This is where we can perform actions based on the slide
		$("#pagination_shadow_y_coordinate").attr("value", ui.value); //This adds that value into the span in the tabs below, so you can see the actual value
		colour = $('#pagination_shadow_colour').val();
		xcoord = $('#pagination_shadow_x_coordinate').val();
		blur = $('#pagination_shadow_blur_radius').val();
		jQuery('').css('textShadow',colour+' '+xcoord+'px '+ui.value+'px '+blur+'px');
	}
});
$('#pagination_shadow_colour').change(function() {
	colour = $('#pagination_shadow_colour').val();
	xcoord = $('#pagination_shadow_x_coordinate').val();
	ycoord = $('#pagination_shadow_y_coordinate').val();
	blur = $('#pagination_shadow_blur_radius').val();
	jQuery('').css('textShadow',colour+' '+xcoord+'px '+ycoord+'px '+blur+'px');
});
$('select#pagination_border_type').change(function() {
	var random = $('select.pagination_border_type').val();
	jQuery('ul#numeric_pagination li').css('border-style',random);
});
var number = parseInt($("ul#numeric_pagination li a").css('border-top-width'));
$("#pagination_border_width").text(number);
$("#sliderpagination_border_width").slider({
	value: number,
	min: 0,
	max: 10,
	step: 1,
	slide: function(event, ui) {
		$("ul#numeric_pagination li a").css("border-top-width", ui.value + "px");
		$("#pagination_border_width").attr("value", ui.value);
	}
});$('input#pagination_border_width').change(function() {
	var random = $('input#pagination_border_width').val();
	$('ul#numeric_pagination li a').css('border-top-width',random+'px');
	$("#sliderpagination_border_width").slider({
		value: random,
		min: 0,
		max: 10,
		step: 1,
	});
});
$('#pagination_border_colour').change(function() {
	var colour = $('#pagination_border_colour').val();
	jQuery('ul#numeric_pagination li a').css('color',colour);
});
var margin = parseInt($("ul#numeric_pagination").css('margin-top')); //Sets the slider handle to start at the current value
$("#pagination_vertical_margin").text(margin);
$("#sliderpagination_vertical_margin").slider({
	value: margin, //Sets the slider handle to start at the current value
	min: 0,
	max: 50,
	step: 1,
	slide: function(event, ui) { //This is where we can perform actions based on the slide
		$("ul#numeric_pagination").css("padding-top", ui.value + "px"); //ui.value is the current value of the slider
		$("#pagination_vertical_margin").attr("value", ui.value); //This adds that value into the span in the tabs below, so you can see the actual value
		jQuery('ul#numeric_pagination').css('margin-bottom',ui.value);
	}
});
var margin = parseInt($("ul#numeric_pagination li a").css('margin-left')); //Sets the slider handle to start at the current value
$("#pagination_horizontal_margin").text(margin);
$("#sliderpagination_horizontal_margin").slider({
	value: margin, //Sets the slider handle to start at the current value
	min: 0,
	max: 50,
	step: 1,
	slide: function(event, ui) { //This is where we can perform actions based on the slide
		$("ul#numeric_pagination li a").css("margin-left", ui.value + "px"); //ui.value is the current value of the slider
		$("#pagination_horizontal_margin").attr("value", ui.value); //This adds that value into the span in the tabs below, so you can see the actual value
		jQuery('ul#numeric_pagination li a').css('margin-right',ui.value);
	}
});
var margin = parseInt($("ul#numeric_pagination li a").css('padding-left')); //Sets the slider handle to start at the current value
$("#pagination_padding").text(margin);
$("#sliderpagination_padding").slider({
	value: margin, //Sets the slider handle to start at the current value
	min: 0,
	max: 50,
	step: 1,
	slide: function(event, ui) { //This is where we can perform actions based on the slide
		$("ul#numeric_pagination li a").css("padding-left", ui.value + "px"); //ui.value is the current value of the slider
		$("#pagination_padding").attr("value", ui.value); //This adds that value into the span in the tabs below, so you can see the actual value
		jQuery('ul#numeric_pagination li a').css('padding-top',ui.value + "px");
		jQuery('ul#numeric_pagination li a').css('padding-right',ui.value + "px");
		jQuery('ul#numeric_pagination li a').css('padding-bottom',ui.value + "px");
	}
});
$('select#pagination_fontfamily').change(function() {
	var random = $('select.pagination_fontfamily').val();
	jQuery('ul#numeric_pagination li a').css('font-family',random);
});
$('select#pagination_font_weight').change(function() {
	var random = $('select.pagination_font_weight').val();
	jQuery('ul#numeric_pagination li a').css('font-weight',random);
});
$('select#pagination_font_style').change(function() {
	var random = $('select.pagination_font_style').val();
	jQuery('ul#numeric_pagination li a').css('font-style',random);
});
$('select#pagination_textdecoration').change(function() {
	var random = $('select.pagination_textdecoration').val();
	jQuery('ul#numeric_pagination li a').css('text-decoration',random);
});
$('select#pagination_text_transform').change(function() {
	var random = $('select.pagination_text_transform').val();
	jQuery('ul#numeric_pagination li a').css('text-transform',random);
});
$('select#pagination_small_caps').change(function() {
	var random = $('select.pagination_small_caps').val();
	jQuery('ul#numeric_pagination li a').css('font-variant',random);
});
$('#pagination_background_colour').change(function() {
	var colour = $('#pagination_background_colour').val();
	jQuery('ul#numeric_pagination li a').css('color',colour);
});
$('#pagination_background_hovercolour').change(function() {
	var colour = $('#pagination_background_hovercolour').val();
	jQuery('ul#numeric_pagination li a:hover').css('color',colour);
});
$('select#pagination_display').change(function() {
	var random = $('select.pagination_display').val();
	jQuery('ul#numeric_pagination').css('display',random);
});
$('#links_textcolour').change(function() {
	var colour = $('#links_textcolour').val();
	jQuery('.wrapper a').css('color',colour);
});
$('select#links_font_weight').change(function() {
	var random = $('select.links_font_weight').val();
	jQuery('.wrapper a').css('font-weight',random);
});
$('select#links_font_style').change(function() {
	var random = $('select.links_font_style').val();
	jQuery('.wrapper a').css('font-style',random);
});
$('select#links_textdecoration').change(function() {
	var random = $('select.links_textdecoration').val();
	jQuery('.wrapper a').css('text-decoration',random);
});
$('#links_hover_textcolour').change(function() {
	var colour = $('#links_hover_textcolour').val();
	jQuery('.wrapper a:hover').css('color',colour);
});
$('select#links_hover_font_weight').change(function() {
	var random = $('select.links_hover_font_weight').val();
	jQuery('.wrapper a:hover').css('font-weight',random);
});
$('select#links_hover_font_style').change(function() {
	var random = $('select.links_hover_font_style').val();
	jQuery('.wrapper a:hover').css('font-style',random);
});
$('select#links_hover_textdecoration').change(function() {
	var random = $('select.links_hover_textdecoration').val();
	jQuery('.wrapper a:hover').css('text-decoration',random);
});
});