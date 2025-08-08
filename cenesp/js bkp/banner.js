//Banner
$(function(){
		var banner_interval;
		var banner_atual=0;
		var banner_total=0;
		var banner_left=function(){
			window.clearInterval(banner_interval);
			banner_interval=setInterval(banner_right,7000);
			$(".banner li").eq(0).stop().fadeTo(750,0,function(){
				$(this).hide();
			});
			$(".banner ul").append($(".banner li").eq(0));
			$(".banner li").eq(-2).stop().fadeTo(750,1);
			banner_atual=banner_atual==0?banner_total-1:banner_atual-1;
			$(".banner_nav li").removeClass("active");
			$(".banner_nav li").eq(banner_atual).addClass("active");
		};
		var banner_right=function(){
			window.clearInterval(banner_interval);
			banner_interval=setInterval(banner_right,7000);
			$(".banner li").eq(0).stop().fadeTo(750,0,function(){
				banner_atual=banner_atual==banner_total-1?0:banner_atual+1;
				$(this).hide();
				$(".banner_nav li").removeClass("active");
				$(".banner_nav li").eq(banner_atual).addClass("active");
			});
			$(".banner ul").append($(".banner li").eq(0));
			$(".banner li").eq(0).stop().fadeTo(750,1);
		};
		$.ajax({url:apis.banner+"?empreendimento_id="+shopping_id,dataType:"json"}).done(function(data){
			$.each(data,function(i,banner){
				target=banner.banner_link.indexOf("http")>=0?"target='new'":"";

				let imagem;
				if(banner.banner_imagem_url){
					imagem=banner.banner_imagem_url;
				}else{
					imagem= apis.upload_site_banner+banner.banner_imagem;
				}
				
				$(".banner ul").append('<li eq="'+i+'" style="opacity:0; display:none;"><a href="'+banner.banner_link+'#nNo" style="background-image:url('+imagem+');" '+target+'></a></li>');
				banner_total++;
				nav = i+1;
				//$(".banner .banner_nav").html('<li nav="0"><p>1</p><span></span></li>');
				//$(".banner .banner_nav").append('<li nav="1"><p>2</p><span></span></li>');
				//$(".banner .banner_nav").append('<li nav="2"><p>3</p><span></span></li>');
				$(".banner .banner_nav").append('<li nav="'+i+'"><p>'+nav+'</p><span></span></li>');
				$(".banner_nav li").eq(0).addClass("active");
			});
			
			
			
			$(".banner li").eq(0).fadeTo(750,1);
			if(data.length>1){
				$(".banner_left,.banner_right").fadeTo(750,1);
				$(".banner_left").click(banner_left);
				$(".banner_right").click(banner_right);
				banner_interval=setInterval(banner_right,7000);
			}
			
			$(".banner_nav li").click(function(){
				$(".banner_nav li").removeClass("active");
				$(this).addClass("active");
				window.clearInterval(banner_interval);
				banner_atual=$(".banner_nav li").index($(this));
				$(".banner li").eq(0).stop().fadeTo(750,0,function(){
					$(this).hide();
				});
				$(".banner ul").prepend($(".banner li[eq="+$(".banner_nav li").index($(this))+"]"));
				$(".banner li").eq(0).stop().fadeTo(750,1);
			});
			$(".banner ul").fadeTo(1000, 1);
		});
})
