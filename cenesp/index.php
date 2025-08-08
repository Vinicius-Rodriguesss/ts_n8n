<?php include "inc/header.php"?>
<div id="index">

<div class="banner home">
	<ul></ul>
    <div class="banner_nav"></div>    
</div>
        
<div id="index" class="conteudo">
	<div class="lojas-home">
    	<div class="col">
			<div class="titulo">
				<h1>Conheça nossas lojas</h1>
				<p class="mini_font" style="letter-spacing:10px;">Sempre com grandes opções para você</p>
          	</div>
            <ul>
                <li class="alimentacao"><a href="alimentacao.php"><img src="https://upload.madnezz.com.br/2e1a081b711c7c15a2b8db989989b6c0"></a>
                    <div class="desc_alimentacao">
                        <h2>Alimentação</h2>
                        <!--<h3>São mais de 30 opções em nossa gastronomia</h3>-->
                    </div>
                </li>
                <li class="loja"><a href="loja.php"><img src="https://upload.madnezz.com.br/d90d6386bca988559112d9a398a85428"></a>
                    <div class="desc_loja">
                        <h2>Lojas</h2>
                        <!--<h3>São mais de XX opções</h3>-->
                    </div>
                </li>
                <li class="servico"><a href="servico.php"><img src="https://upload.madnezz.com.br/248d75ef2169d13a0db8fc36befb9e93"></a>
                    <div class="desc_servico">
                        <h2>Serviços</h2>
                        <!--<h3>São mais de XX opções</h3>-->
                    </div>
                </li>
           	</ul> 
		</div>
    </div>

	<div class="lojista-home">
    	<div class="col">
			<!--<div class="titulo">
				<h1>Espaço Lojista</h1>
				<p class="mini_font" style="letter-spacing:9px;">Novidades para você sempre acompanhar</p>
			</div>-->
            <div class="banner_loja">
                <a href="novidade.php"><img src="https://upload.madnezz.com.br/ca1bc2be72194d71b4414b5d16b63eb7"></a>
          	</div>                
		</div>
    </div>
    
    <div class="novidades-home font2">
    	<div class="bg_cinza">
			<div class="titulo">
				<h1>Novidades</h1>
				<p class="mini_font" style="letter-spacing:6px;">Fique por dentro dos eventos e promoções</p>
                <ul class="novidade_lista"></ul>
			</div>
		</div>
        <div style="clear:both;"></div>
	</div>
</div>   
 
<!--<div class="home_cinema">    	
	<div></div>
   	<ul>
    	<li data-i="#i">
           	<img src="#fundo" alt="#titulo" />
           	<div class="home_trailer">
           		<iframe  url_trailer ></iframe>
           	</div>
            <div>
             	<img src="https://upload.madnezz.com.br/90765f156ec9ada86107f7f98f0482c9" class="icon-cinema"/>
               	<h3>#titulo</h3>
                <h4>#genero - #censura</h4>
            </div>
            <a href="cinema_moviecom.php?cinema_id=#filme_url"></a>
		</li>
  	</ul>
    <span class="cinema_up"></span>
    <span class="cinema_down"></span>
</div>-->
 
<!--<div class="bg_branco" style="padding:50px 0 0 0; width:100%; overflow:hidden;">    	
	<div class="titulo">
		<h1>Instagram</h1>
	</div>    
    <ul class="insta_slide"></ul>
</div>-->

<script type="text/javascript" src="js/instagram.php"></script>

<script type="text/javascript">

//INSTAGRAM HOME
		
	$(function(){
		$.each(insta_media,function(i,data){
			$(".insta_slide").append('<li><a href="https://www.instagram.com/p/'+data.node.shortcode+'" target="new"><img src="'+ data.node.display_url +'" /></a><div class="desc_insta"><h2>Insta</h2></div></li>');
		});
		setInterval(function(){
			$(".insta_slide").animate({'margin-left':-$(".insta_slide li").eq(0).width()},function(){
				$(".insta_slide").append($(".insta_slide li").eq(0));
				$(".insta_slide").css({'margin-left':'0'});
			});
		},3000);
	});	

</script>

<script type="text/javascript">

	$('.alimentacao').mouseover(function(){$('.desc_alimentacao').animate({"opacity":"1"});});	
	$('.alimentacao').mouseout(function(){$('.desc_alimentacao').stop().animate({"opacity":"0"},100);});
	
	$('.loja').mouseover(function(){$('.desc_loja').animate({"opacity":"1"});});	
	$('.loja').mouseout(function(){$('.desc_loja').stop().animate({"opacity":"0"},100);});
	
	$('.servico').mouseover(function(){$('.desc_servico').animate({"opacity":"1"});});	
	$('.servico').mouseout(function(){$('.desc_servico').stop().animate({"opacity":"0"},100);});
	
	$('.insta_slide img').mouseover(function(){$('.desc_insta').animate({"opacity":"1"});});	
	$('.insta_slide img').mouseout(function(){$('.desc_insta').stop().animate({"opacity":"0"},100);});
	

</script>

<style>

	.desc_alimentacao, .desc_loja, .desc_servico {width:100%;height:100%;position:absolute;top:50%;margin-top:-50px;opacity:0;pointer-events:none;}
	.desc_alimentacao h2, .desc_loja h2, .desc_servico h2 {color:#fff;font-size:32px;text-align:center;font-family: 'din_black', sans-serif;}
	.desc_alimentacao h3, .desc_loja h3, .desc_servico h3 {color:#fff;font-size:11px;letter-spacing:1px;text-align:center;padding-top:10px;font-family: 'din_light', sans-serif;}
	
	.desc_insta {width:100%;height:100%;position:absolute;top:50%;margin-top:-50px;opacity:0;pointer-events:none;}
	.desc_insta h2 {color:#fff;font-size:32px;text-align:center;font-family: 'din_light', sans-serif;}

</style>




<?php include "inc/footer.php"?>