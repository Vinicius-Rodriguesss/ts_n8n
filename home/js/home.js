$(function(){
	if ($(window).width()<=900) {$('body').addClass('responsivo')};
	$('img.load').on('load',function(){
		$('.loading').fadeOut('slow');
		$('.geral').fadeIn(1200,function(){
			$('.rotate').removeClass('rotate');
			setTimeout(function(){
				$('.hide').removeClass('hide');
				var windowWidth = $(window).width();
				var windowheight = $(window).height();
				setTimeout(function(){
					$('.logos .logo').addClass('no-delay');
				},1000)
				$('.geral').mousemove(function(event){
				  var moveX =  event.pageX ;
				  var moveY =  event.pageY ;  
				  if (moveX>windowWidth/2){ 
				  	$('.centro').css('-webkit-transform','rotateY(3deg)');
				  } else {
				  	$('.centro').css('-webkit-transform','rotateY(-3deg)');
				  } 
				});
			},1200)
		});
		
	});
});