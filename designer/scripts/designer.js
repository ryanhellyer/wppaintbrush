jQuery(function($){
function ptc_updatecolours() {


$('#pagination li').css('border',$('.pagination_border_colour').val());
$('header #search input[type=text]').css('background-color',$('.header_searchbox_text_background_colour').val());
$('header #search input[type=submit]').css('background-color',$('.header_searchsubmit_text_background_colour').val());
$('header #search').css('background-color',$('.header_searchbox_background_colour').val());
$('header .header').css('background-color',$('.header_background_colour').val());
$('header').css('background-color',$('.header_fullwidth_background_colour').val());
$('#content').css('background-color',$('.maincontent_background_colour').val());
$('nav#nav ul').css('background-color',$('.menu1_background_colour').val());
$('nav#nav').css('background-color',$('.menu1_fullwidth_background_colour').val());
$('nav#nav li').css('background-color',$('.menu1_items_background_colour').val());
$('aside#aside-2').css('background-color',$('.sidebar_background_colour').val());
$('footer').css('background-color',$('.footer_background_colour').val());
$('#pagination li').css('background-color',$('.pagination_background_colour').val());
$('body').css('background-color',$('.background_colour').val());
$('.wrapper h1').css('background-color',$('.heading1_background_colour').val());
$('.wrapper h2').css('background-color',$('.heading2_background_colour').val());
$('.wrapper h3').css('background-color',$('.heading3_background_colour').val());
$('.wrapper h4').css('background-color',$('.heading4_background_colour').val());
$('.wrapper h5').css('background-color',$('.heading5_background_colour').val());
$('.wrapper h6').css('background-color',$('.heading6_background_colour').val());
$('.wrapper p').css('background-color',$('.paragraph_background_colour').val());
$('.wrapper li').css('background-color',$('.listitem_background_colour').val());
$('aside h3').css('background-color',$('.sidebar_heading_background_colour').val());
$('aside li').css('background-color',$('.sidebar_list_background_colour').val());
$('aside p').css('background-color',$('.sidebar_paragraph_background_colour').val());
$('.post-info').css('background-color',$('.postinfo_background_colour').val());
$('footer').css('background-color',$('.footer_fullwidth_background_colour').val());
$('header #search input[type=submit]').css('color',$('.searchsubmit_textcolour').val());
$('header #search input[type=text]').css('color',$('.searchtext_textcolour').val());
$('#pagination li a').css('color',$('.pagination_textcolour').val());
$('.wrapper a').css('color',$('.links_textcolour').val());
$('header h1 a').css('color',$('.header_heading_textcolour').val());
$('header #description').css('color',$('.header_description_textcolour').val());
$('.wrapper h1').css('color',$('.heading1_textcolour').val());
$('.wrapper h2').css('color',$('.heading2_textcolour').val());
$('.wrapper h3').css('color',$('.heading3_textcolour').val());
$('.wrapper h4').css('color',$('.heading4_textcolour').val());
$('.wrapper h5').css('color',$('.heading5_textcolour').val());
$('.wrapper h6').css('color',$('.heading6_textcolour').val());
$('.wrapper p').css('color',$('.paragraph_textcolour').val());
$('.wrapper li').css('color',$('.listitem_textcolour').val());
$('aside h3').css('color',$('.sidebar_heading_textcolour').val());
$('aside li').css('color',$('.sidebar_list_textcolour').val());
$('aside p').css('color',$('.sidebar_paragraph_textcolour').val());
$('footer nav li a').css('color',$('.footer_menu_textcolour').val());
$('footer p').css('color',$('.footer_copyright_textcolour').val());
$('.post-info').css('color',$('.postinfo_textcolour').val());
$('nav#nav li a').css('color',$('.menu1_textcolour').val());
$('.wrapper h1').css('border-top',$('.heading1_bordertop_colour').val());
$('.wrapper h2').css('border-top',$('.heading2_bordertop_colour').val());
$('.wrapper h3').css('border-top',$('.heading3_bordertop_colour').val());
$('.wrapper h4').css('border-top',$('.heading4_bordertop_colour').val());
$('.wrapper h5').css('border-top',$('.heading5_bordertop_colour').val());
$('.wrapper h6').css('border-top',$('.heading6_bordertop_colour').val());
$('.wrapper p').css('border-top',$('.paragraph_bordertop_colour').val());
$('.wrapper li').css('border-top',$('.listitem_bordertop_colour').val());
$('aside h3').css('border-top',$('.sidebar_heading_bordertop_colour').val());
$('aside li').css('border-top',$('.sidebar_list_bordertop_colour').val());
$('aside p').css('border-top',$('.sidebar_paragraph_bordertop_colour').val());
$('.post-info').css('border-top',$('.postinfo_bordertop_colour').val());
$('nav#nav').css('border-top',$('.menu1_bordertop_colour').val());
$('.wrapper h1').css('border-bottom',$('.heading1_borderbottom_colour').val());
$('.wrapper h2').css('border-bottom',$('.heading2_borderbottom_colour').val());
$('.wrapper h3').css('border-bottom',$('.heading3_borderbottom_colour').val());
$('.wrapper h4').css('border-bottom',$('.heading4_borderbottom_colour').val());
$('.wrapper h5').css('border-bottom',$('.heading5_borderbottom_colour').val());
$('.wrapper h6').css('border-bottom',$('.heading6_borderbottom_colour').val());
$('.wrapper p').css('border-bottom',$('.paragraph_borderbottom_colour').val());
$('.wrapper li').css('border-bottom',$('.listitem_borderbottom_colour').val());
$('aside h3').css('border-bottom',$('.sidebar_heading_borderbottom_colour').val());
$('aside li').css('border-bottom',$('.sidebar_list_borderbottom_colour').val());
$('aside p').css('border-bottom',$('.sidebar_paragraph_borderbottom_colour').val());
$('.post-info').css('border-bottom',$('.postinfo_borderbottom_colour').val());
$('nav#nav').css('border-bottom',$('.menu1_borderbottom_colour').val());
}

// $Id: farbtastic.js,v 1.2 2007/01/08 22:53:01 unconed Exp $
// Farbtastic 1.2

jQuery.fn.farbtastic = function (callback) {
	$.farbtastic(this, callback);
	return this;
};

jQuery.farbtastic = function (container, callback) {
	var container = $(container).get(0);
	return container.farbtastic || (container.farbtastic = new jQuery._farbtastic(container, callback));
}

jQuery._farbtastic = function (container, callback) {

	// Store farbtastic object
	var fb = this;

	// Insert markup
	$(container).html('<div class="farbtastic_pixopoint"><div class="farbtastic"><div class="color"></div><div class="wheel"></div><div class="overlay"></div><div class="h-marker marker"></div><div class="sl-marker marker"></div></div></div>');
	var e = $('.farbtastic', container);
	fb.wheel = $('.wheel', container).get(0);
	// Dimensions
	fb.radius = 84;
	fb.square = 100;
	fb.width = 194;

	// Fix background PNGs in IE6
	if (navigator.appVersion.match(/MSIE [0-6]\./)) {
	$('*', e).each(function () {
		if (this.currentStyle.backgroundImage != 'none') {
			var image = this.currentStyle.backgroundImage;
			image = this.currentStyle.backgroundImage.substring(5, image.length - 2);
			$(this).css({
			'backgroundImage': 'none',
			'filter': "progid:DXImageTransform.Microsoft.AlphaImageLoader(enabled=true, sizingMethod=crop, src='" + image + "')"
			});
		}
	});
	}

	/**
	 * Link to the given element(s) or callback.
	 */
	fb.linkTo = function (callback) {
	// Unbind previous nodes
	if (typeof fb.callback == 'object') {
		$(fb.callback).unbind('keyup', fb.updateValue);
	}

	// Reset color
	fb.color = null;

	// Bind callback or elements
	if (typeof callback == 'function') {
		fb.callback = callback;
	}
	else if (typeof callback == 'object' || typeof callback == 'string') {
		fb.callback = $(callback);
		fb.callback.bind('keyup', fb.updateValue);
		if (fb.callback.get(0).value) {
			fb.setColor(fb.callback.get(0).value);
		}
	}
	return this;
	}
	fb.updateValue = function (event) {
	if (this.value && this.value != fb.color) {
		fb.setColor(this.value);
	}
	}

	/**
	 * Change color with HTML syntax #123456
	 */
	fb.setColor = function (color) {
	var unpack = fb.unpack(color);
	if (fb.color != color && unpack) {
		fb.color = color;
		fb.rgb = unpack;
		fb.hsl = fb.RGBToHSL(fb.rgb);
		fb.updateDisplay();
	}
	return this;
	}

	/**
	 * Change color with HSL triplet [0..1, 0..1, 0..1]
	 */
	fb.setHSL = function (hsl) {
	fb.hsl = hsl;
	fb.rgb = fb.HSLToRGB(hsl);
	fb.color = fb.pack(fb.rgb);
	fb.updateDisplay();
	return this;
	}

	/////////////////////////////////////////////////////

	/**
	 * Retrieve the coordinates of the given event relative to the center
	 * of the widget.
	 */
	fb.widgetCoords = function (event) {
	// Update colour CSS
	ptc_updatecolours();

	var x, y;
	var el = event.target || event.srcElement;
	var reference = fb.wheel;

	if (typeof event.offsetX != 'undefined') {
		// Use offset coordinates and find common offsetParent
		var pos = { x: event.offsetX, y: event.offsetY };

		// Send the coordinates upwards through the offsetParent chain.
		var e = el;
		while (e) {
			e.mouseX = pos.x;
			e.mouseY = pos.y;
			pos.x += e.offsetLeft;
			pos.y += e.offsetTop;
			e = e.offsetParent;
		}

		// Look for the coordinates starting from the wheel widget.
		var e = reference;
		var offset = { x: 0, y: 0 }
		while (e) {
			if (typeof e.mouseX != 'undefined') {
			x = e.mouseX - offset.x;
			y = e.mouseY - offset.y;
			break;
			}
			offset.x += e.offsetLeft;
			offset.y += e.offsetTop;
			e = e.offsetParent;
		}

		// Reset stored coordinates
		e = el;
		while (e) {
			e.mouseX = undefined;
			e.mouseY = undefined;
			e = e.offsetParent;
		}
	}
	else {
		// Use absolute coordinates
		var pos = fb.absolutePosition(reference);
		x = (event.pageX || 0*(event.clientX + $('html').get(0).scrollLeft)) - pos.x;
		y = (event.pageY || 0*(event.clientY + $('html').get(0).scrollTop)) - pos.y;
	}
	// Subtract distance to middle
	return { x: x - fb.width / 2, y: y - fb.width / 2 };
	}

	/**
	 * Mousedown handler
	 */
	fb.mousedown = function (event) {
	// Capture mouse
	if (!document.dragging) {
		$(document).bind('mousemove', fb.mousemove).bind('mouseup', fb.mouseup);
		document.dragging = true;
	}

	// Check which area is being dragged
	var pos = fb.widgetCoords(event);
	fb.circleDrag = Math.max(Math.abs(pos.x), Math.abs(pos.y)) * 2 > fb.square;

	// Process
	fb.mousemove(event);
	return false;
	}

	/**
	 * Mousemove handler
	 */
	fb.mousemove = function (event) {
	// Get coordinates relative to color picker center
	var pos = fb.widgetCoords(event);

	// Set new HSL parameters
	if (fb.circleDrag) {
		var hue = Math.atan2(pos.x, -pos.y) / 6.28;
		if (hue < 0) hue += 1;
		fb.setHSL([hue, fb.hsl[1], fb.hsl[2]]);
	}
	else {
		var sat = Math.max(0, Math.min(1, -(pos.x / fb.square) + .5));
		var lum = Math.max(0, Math.min(1, -(pos.y / fb.square) + .5));
		fb.setHSL([fb.hsl[0], sat, lum]);
	}

	return false;
	}

	/**
	 * Mouseup handler
	 */
	fb.mouseup = function () {
	// Uncapture mouse
	$(document).unbind('mousemove', fb.mousemove);
	$(document).unbind('mouseup', fb.mouseup);
	document.dragging = false;
	}

	/**
	 * Update the markers and styles
	 */
	fb.updateDisplay = function () {
	// Markers
	var angle = fb.hsl[0] * 6.28;
	$('.h-marker', e).css({
		left: Math.round(Math.sin(angle) * fb.radius + fb.width / 2) + 'px',
		top: Math.round(-Math.cos(angle) * fb.radius + fb.width / 2) + 'px'
	});

	$('.sl-marker', e).css({
		left: Math.round(fb.square * (.5 - fb.hsl[1]) + fb.width / 2) + 'px',
		top: Math.round(fb.square * (.5 - fb.hsl[2]) + fb.width / 2) + 'px'
	});

	// Saturation/Luminance gradient
	$('.color', e).css('backgroundColor', fb.pack(fb.HSLToRGB([fb.hsl[0], 1, 0.5])));

	// Linked elements or callback
	if (typeof fb.callback == 'object') {
		// Set background/foreground color
		$(fb.callback).css({
			backgroundColor: fb.color,
			color: fb.hsl[2] > 0.5 ? '#000' : '#fff'
		});

		// Change linked value
		$(fb.callback).each(function() {
			if (this.value && this.value != fb.color) {
			this.value = fb.color;
			}
		});
	}
	else if (typeof fb.callback == 'function') {
		fb.callback.call(fb, fb.color);
	}
	}

	/**
	 * Get absolute position of element
	 */
	fb.absolutePosition = function (el) {
	var r = { x: el.offsetLeft, y: el.offsetTop };
	// Resolve relative to offsetParent
	if (el.offsetParent) {
		var tmp = fb.absolutePosition(el.offsetParent);
		r.x += tmp.x;
		r.y += tmp.y;
	}
	return r;
	};

	/* Various color utility functions */
	fb.pack = function (rgb) {
	var r = Math.round(rgb[0] * 255);
	var g = Math.round(rgb[1] * 255);
	var b = Math.round(rgb[2] * 255);
	return '#' + (r < 16 ? '0' : '') + r.toString(16) +
			 (g < 16 ? '0' : '') + g.toString(16) +
			 (b < 16 ? '0' : '') + b.toString(16);
	}

	fb.unpack = function (color) {
	if (color.length == 7) {
		return [parseInt('0x' + color.substring(1, 3)) / 255,
			parseInt('0x' + color.substring(3, 5)) / 255,
			parseInt('0x' + color.substring(5, 7)) / 255];
	}
	else if (color.length == 4) {
		return [parseInt('0x' + color.substring(1, 2)) / 15,
			parseInt('0x' + color.substring(2, 3)) / 15,
			parseInt('0x' + color.substring(3, 4)) / 15];
	}
	}

	fb.HSLToRGB = function (hsl) {
	var m1, m2, r, g, b;
	var h = hsl[0], s = hsl[1], l = hsl[2];
	m2 = (l <= 0.5) ? l * (s + 1) : l + s - l*s;
	m1 = l * 2 - m2;
	return [this.hueToRGB(m1, m2, h+0.33333),
			this.hueToRGB(m1, m2, h),
			this.hueToRGB(m1, m2, h-0.33333)];
	}

	fb.hueToRGB = function (m1, m2, h) {
	h = (h < 0) ? h + 1 : ((h > 1) ? h - 1 : h);
	if (h * 6 < 1) return m1 + (m2 - m1) * h * 6;
	if (h * 2 < 1) return m2;
	if (h * 3 < 2) return m1 + (m2 - m1) * (0.66666 - h) * 6;
	return m1;
	}

	fb.RGBToHSL = function (rgb) {
	var min, max, delta, h, s, l;
	var r = rgb[0], g = rgb[1], b = rgb[2];
	min = Math.min(r, Math.min(g, b));
	max = Math.max(r, Math.max(g, b));
	delta = max - min;
	l = (min + max) / 2;
	s = 0;
	if (l > 0 && l < 1) {
		s = delta / (l < 0.5 ? (2 * l) : (2 - 2 * l));
	}
	h = 0;
	if (delta > 0) {
		if (max == r && max != g) h += (g - b) / delta;
		if (max == g && max != b) h += (2 + (b - r) / delta);
		if (max == b && max != r) h += (4 + (r - g) / delta);
		h /= 6;
	}
	return [h, s, l];
	}

	// Install mousedown handler (the others are set on the document on-demand)
	$('*', e).mousedown(fb.mousedown);

	// Init color
	fb.setColor('#000000');

	// Set linked elements/callback
	if (callback) {
	fb.linkTo(callback);
	}
}

// Farbtastic colour picker 
var farbtastic = $.farbtastic('#farbtastic', '')
var picker = $('#farbtastic').dialog({width: 220,height: 260,autoOpen: false,modal: false});
$('.palettebutton').click(function(){
	var $this = $(this);
	farbtastic.linkTo($this.siblings('input[type="text"]'));
	picker.dialog('open');
});



// Image picker
var $button,
$ele = $('#ptc-image-picker').dialog({
	width: 530,
	minWidth: 530,
	maxWidth: 530,
	maxHeight: 800,
	title: 'Image picker',
	modal: false,
	autoOpen: false,
	open : function(event, ui){
		$('img',ui.dialog).each(function(){
			var image = $(this);
			image.click(function(){
				$button.parent().find('.image-picker').val(image.attr('alt'));
				$button.removeClass('ICopen').val('pick');

	$('.wrapper').css({'background-image': 'url('+storage_folder+'/'+$('.sidebar_background_image').val()+')'});
	$('footer div.footer').css({'background-image': 'url('+storage_folder+'/'+$('.footer_background_image').val()+')'});
	$('body').css({'background-image': 'url('+storage_folder+'/'+$('.background_image').val()+')'});
	$('.wrapper #content').css({'background-image': 'url('+storage_folder+'/'+$('.maincontent_background_image').val()+')'});
	$('header div.header').css({'background-image': 'url('+storage_folder+'/'+$('.header_background_image').val()+')'});
	$('header').css({'background-image': 'url('+storage_folder+'/'+$('.header_fullwidth_background_image').val()+')'});
	$('header #search').css({'background-image': 'url('+storage_folder+'/'+$('.header_searchbox_background_image').val()+')'});
	$('header #logo').css({'background-image': 'url('+storage_folder+'/'+$('.header_logo_background_image').val()+')'});
	$('#banner div.banner-image').css({'background-image': 'url('+storage_folder+'/'+$('.banner_image').val()+')'});
	$('nav#nav li:hover a').css({'background-image': 'url('+storage_folder+'/'+$('.menu1_hover_background_image').val()+')'});
	$('nav#nav ul').css({'background-image': 'url('+storage_folder+'/'+$('.menu1_background_image').val()+')'});
	$('nav#nav').css({'background-image': 'url('+storage_folder+'/'+$('.menu1_fullwidth_background_image').val()+')'});
	$('nav#nav li').css({'background-image': 'url('+storage_folder+'/'+$('.menu1_items_background_image').val()+')'});
	$('header #search input[type=text]').css({'background-image': 'url('+storage_folder+'/'+$('.header_searchbox_text_background_image').val()+')'});
	$('header #search input[type=submit]').css({'background-image': 'url('+storage_folder+'/'+$('.header_searchsubmit_text_background_image').val()+')'});
	$('footer').css({'background-image': 'url('+storage_folder+'/'+$('.footer_fullwidth_background_image').val()+')'});				$ele.dialog('close');
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
	$( "#layout-editor-dialog" ).dialog({width: 565,minWidth: 565,maxWidth: 565,maxHeight: 750,title: 'Layout editor',modal: false,autoOpen: false,});
	$( "#layout-editor-opener" ).click(function() {$( "#layout-editor-dialog" ).dialog( "open" );return false;});
});

// Auto CSS changing stuff
var number = parseInt($(".wrapper").css('max-width'));
$(".maincontent_maximum_width").text(number);
$(".slidermaincontent_maximum_width").slider({
	value: number,
	min: 0,
	max: 1600,
	step: 1,
	slide: function(event, ui) {
		$(".wrapper").css("max-width", ui.value + "px");
		$(".maincontent_maximum_width").attr("value", ui.value);
	}
});$('input.maincontent_maximum_width').change(function() {
	var random = $('input.maincontent_maximum_width').val();
	$('.wrapper').css('max-width',random+'px');
	$(".slidermaincontent_maximum_width").slider({
		value: random,
		min: 0,
		max: 1600,
		step: 1,
	});
});
var number = parseInt($(".wrapper").css('min-width'));
$(".maincontent_minimum_width").text(number);
$(".slidermaincontent_minimum_width").slider({
	value: number,
	min: 0,
	max: 1600,
	step: 1,
	slide: function(event, ui) {
		$(".wrapper").css("min-width", ui.value + "px");
		$(".maincontent_minimum_width").attr("value", ui.value);
	}
});$('input.maincontent_minimum_width').change(function() {
	var random = $('input.maincontent_minimum_width').val();
	$('.wrapper').css('min-width',random+'px');
	$(".slidermaincontent_minimum_width").slider({
		value: random,
		min: 0,
		max: 1600,
		step: 1,
	});
});
$('.maincontent_background_image').change(function() {
	var image = $('.maincontent_background_image').val();
	jQuery('.wrapper #content').css('background-image','http://localhost/wp/template-editor/wp-content/plugins/pixopoint-theme-creator/images/'+image);
});
$('select.maincontent_background_image_tiling').change(function() {
	var random = $('select.maincontent_background_image_tiling').val();
	jQuery('.wrapper #content').css('background-repeat',random);
});
$('select.background_image_tiling').change(function() {
	var random = $('select.background_image_tiling').val();
	jQuery('body').css('background-repeat',random);
});

$('select.background_display').change(function() {
	var random = $('select.background_display').val();
	var colour = $('.background_colour').val();
	var image = $('.background_image').val();
	if (random == 'none') { $('body').css('background-color','transparent');$('body').css('background-image','none');}
	if (random == 'block') { $('body').css('background-color',colour);$('body').css('background-image',image);}
});var number = parseInt($("#maincontent .article-wrapper").css('margin-top'));
$(".content_margin_top").text(number);
$(".slidercontent_margin_top").slider({
	value: number,
	min: 0,
	max: 100,
	step: 1,
	slide: function(event, ui) {
		$("#maincontent .article-wrapper").css("margin-top", ui.value + "px");
		$(".content_margin_top").attr("value", ui.value);
	}
});$('input.content_margin_top').change(function() {
	var random = $('input.content_margin_top').val();
	$('#maincontent .article-wrapper').css('margin-top',random+'px');
	$(".slidercontent_margin_top").slider({
		value: random,
		min: 0,
		max: 100,
		step: 1,
	});
});
var number = parseInt($("#maincontent .article-wrapper").css('margin-right'));
$(".content_margin_right").text(number);
$(".slidercontent_margin_right").slider({
	value: number,
	min: 0,
	max: 100,
	step: 1,
	slide: function(event, ui) {
		$("#maincontent .article-wrapper").css("margin-right", ui.value + "px");
		$(".content_margin_right").attr("value", ui.value);
	}
});$('input.content_margin_right').change(function() {
	var random = $('input.content_margin_right').val();
	$('#maincontent .article-wrapper').css('margin-right',random+'px');
	$(".slidercontent_margin_right").slider({
		value: random,
		min: 0,
		max: 100,
		step: 1,
	});
});
var number = parseInt($("#maincontent .article-wrapper").css('margin-bottom'));
$(".content_margin_bottom").text(number);
$(".slidercontent_margin_bottom").slider({
	value: number,
	min: 0,
	max: 100,
	step: 1,
	slide: function(event, ui) {
		$("#maincontent .article-wrapper").css("margin-bottom", ui.value + "px");
		$(".content_margin_bottom").attr("value", ui.value);
	}
});$('input.content_margin_bottom').change(function() {
	var random = $('input.content_margin_bottom').val();
	$('#maincontent .article-wrapper').css('margin-bottom',random+'px');
	$(".slidercontent_margin_bottom").slider({
		value: random,
		min: 0,
		max: 100,
		step: 1,
	});
});
var number = parseInt($("#maincontent .article-wrapper").css('margin-left'));
$(".content_margin_left").text(number);
$(".slidercontent_margin_left").slider({
	value: number,
	min: 0,
	max: 100,
	step: 1,
	slide: function(event, ui) {
		$("#maincontent .article-wrapper").css("margin-left", ui.value + "px");
		$(".content_margin_left").attr("value", ui.value);
	}
});$('input.content_margin_left').change(function() {
	var random = $('input.content_margin_left').val();
	$('#maincontent .article-wrapper').css('margin-left',random+'px');
	$(".slidercontent_margin_left").slider({
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