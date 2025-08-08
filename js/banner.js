$(function(){
	if ($('#index').length) {
		//Banner
		var banner_interval;
		var banner_atual=0;
		var banner_total=0;
		var banner_left=function(){
			window.clearInterval(banner_interval);
			banner_interval=setInterval(banner_right,6000);
			$(".banner_home li").stop().fadeOut('slow',function(){
				$(this).hide();
			});
			$(".banner_home ul").prepend($(".banner_home li").eq(-1));
			$(".banner_home li").eq(0).stop().fadeIn('slow');
			banner_atual=banner_atual==1?banner_total-1:banner_atual-1;
			$(".banner_nav li").removeClass("active");
			$(".banner_nav li").eq(banner_atual).addClass("active"); 
		};
		var banner_right=function(){
			window.clearInterval(banner_interval);
			banner_interval=setInterval(banner_right,6000);
			$(".banner_home li").eq(0).stop().fadeOut('slow',function(){
				banner_atual=banner_atual==banner_total-1?0:banner_atual+1;
				$(this).hide();
				$(".banner_nav li").removeClass("active");
				$(".banner_nav li").eq(banner_atual).addClass("active");
			});
			$(".banner_home ul").append($(".banner_home li").eq(0));
			$(".banner_home li").eq(0).stop().fadeIn('slow');
		};
		$.ajax({url:apis.banner+"?shopping_id="+shopping_id+"&jsoncallback=?",dataType:"json"}).done(function(data){
			$.each(data,function(i,banner){
				target=banner.banner_link.indexOf("http")>=0?"target='new'":"";

					let bannerPrincipal = banner.banner_imagem_url ? banner.banner_imagem_url : apis.upload_site_v3+banner.banner_imagem;
				
				$(".banner_home ul").append('<li eq="'+i+'" style="display:none;"><a href="'+banner.banner_link+'" style="background-image:url('+bannerPrincipal+');" '+target+'></a></li>');
				banner_total++;
				$(".banner_nav").append("<li></li>"); 
				banner_total = 1;
				$(".banner_nav li").eq(0).addClass("active");
			});
			$(".banner_home li").eq(0).fadeIn('slow');
			if(data.length>1){
				$(".banner_arrow_left,.banner_arrow_right").fadeIn('slow');
				$(".banner_left").click(banner_left);
				$(".banner_right").click(banner_right);
				banner_interval=setInterval(banner_right,7000);
			}
			$(".banner_nav li").click(function(){
				$(".banner_nav li").removeClass("active");
				$(this).addClass("active");
				window.clearInterval(banner_interval);
				banner_atual=$(".banner_nav li").index($(this));
				$(".banner_home li").eq(0).stop().fadeOut('slow',function(){
					$(this).hide();
				});
				$(".banner_home ul").prepend($(".banner_home li[eq="+$(".banner_nav li").index($(this))+"]"));
				$(".banner_home li").eq(0).stop().fadeIn('slow');
			});
			$('.banner_home ul').fadeIn('slow');
			$('.banner_arrow_right').click(function(event) { banner_right(); });
			$('.banner_arrow_left').click(function(event) { banner_left(); });
		});
	};
})