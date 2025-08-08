var responsivo;
if (navigator.userAgent.search("Safari") >= 0 && navigator.userAgent.search("Chrome") < 0) {  $("body").addClass("safari"); };
$(function(){
	/*RESPONSIVO*/
	responsivo = function() {
		larg_monitor = $(window).width();
		if (larg_monitor< 1100) {
		$('.parallax').removeClass('parallax');	
	  	$("body, .header, .footer").addClass("responsivo");
	  	$('.header').css({'width':'100%!important'});
	  	$(".header .menu").css({"height": "0"}); 
		  } else {
		  	$("body, .header, .footer").removeClass("responsivo");
		  	$(".header .menu").css({"height": "auto"}); 
		 }
	}
	responsivo();
	$(window).on('resize', function(){  
	 	responsivo(); 
	});
});




