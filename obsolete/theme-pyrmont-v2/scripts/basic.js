jQuery(document).ready(function(){
	jQuery(":text,textarea").focus(function(){
		jQuery(this).parent().addClass("currentFocus");
		jQuery(".currentFocus .desc").css({"color" : "#ff5a00"});
		jQuery(".currentFocus .message_input, .currentFocus #author, .currentFocus #email, .currentFocus #url, .currentFocus #capcha").css({"border-color" : "#ff5a00", "color" : "#000"});
	});

	jQuery(":text,textarea").blur(function(){
		jQuery(this).parent().removeClass("currentFocus");
		jQuery(".message_input, .desc, #author, #email, #url, #capcha").removeAttr("style");
	});
	
});