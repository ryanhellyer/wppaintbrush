var $ = jQuery;
function suckerfishmenu(){
	$('.sf-menu li').hover(function(){
		$(this).find('ul:first').css({visibility:'visible',display:'none'}).slideDown(300);
	},
	function(){
		$(this).find('ul:first').css({visibility:'hidden'});
	});
}
$(document).ready(function(){
	suckerfishmenu();
});
var $ = jQuery;


function sfHoverEvents(sfEls) {
  var len = sfEls.length;
  for (var i=0; i<len; i++) {
    sfEls[i].onmouseover=function() {
      this.className+=" sfhover";
    }
    sfEls[i].onmouseout=function() {
      this.className=this.className.replace(" sfhover", "");
    }
  }
}
function sfHover() {
var ULs = document.getElementsByTagName("UL");
var len = ULs.length;
  for(var i=0;i<len;i++) {
    if(ULs[i].className.indexOf("sf-menu") != -1)
      sfHoverEvents(ULs[i].getElementsByTagName("LI"));
  }
}
if (window.attachEvent) window.attachEvent("onload", sfHover);
