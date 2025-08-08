<?php include 'inc/header.php'; ?>

<div id="index">

<div class="banner home">
	<ul>
   		<!-- <li eq="0"><a href="#" style="background-image:url(https://upload.madnezz.com.br/833f2c342b60cdbfc8a71d511da3ae48);"></a></li> -->
      <!-- <li eq="1"><a href="novidade.php?novidade_id=14269" style="background-image:url(upload/banner/castelo_encantando.jpg);"></a></li> -->
       <!-- <li eq="1"><a href="#" style="background-image:url(https://upload.madnezz.com.br/4880c75fca376ad0ad58a55203bd1c43);"></a></li> -->
    </ul>
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
                <li class="alimentacao"><a href="alimentacao.php"><img src="https://upload.madnezz.com.br/d531d729697984dff1dd0a22d40bdd33"></a>
                    <div class="desc_alimentacao">
                        <h2>Alimentação</h2>
                        <!--<h3>São mais de 30 opções em nossa gastronomia</h3>-->
                    </div>
                </li>
                <li class="loja"><a href="loja.php"><img src="https://upload.madnezz.com.br/d14826203e779107479b0df44f5a8e3e"></a>
                    <div class="desc_loja">
                        <h2>Lojas</h2>
                        <!--<h3>São mais de XX opções</h3>-->
                    </div>
                </li>
                <li class="servico"><a href="servico.php"><img src="https://upload.madnezz.com.br/1e888a7ebd0240059208d5e6771e84bd"></a>
                    <div class="desc_servico">
                        <h2>Serviços</h2>
                        <!--<h3>São mais de XX opções</h3>-->
                    </div>
                </li>
           	</ul> 
		</div>
    </div>

	<?php 
	// Verifica se a data atual está entre 2019-06-05 e 2020-03-08
	if (time() > strtotime("2019-06-05 00:00:00") && time() < strtotime("2020-03-08 23:59:59")){ 
	?>
		<div class="lojista-home">
			<!--BANNER PADRÃO-->
			<div class="banner_loja">
				<img src="https://upload.madnezz.com.br/12f6f188fefab15486c863de31a69d27" style="margin-top:1.4%;">
			</div>

			<!--BANNER AGENDADO-->
			<?php if (time() > strtotime("2019-06-05 00:00:00") && time() < strtotime("2019-06-12 23:59:59")){ ?>
				<script>
					$('.banner_loja').html('<a href="https://clubemorenarosa.com.br/" target="_blank"><img src="https://upload.madnezz.com.br/6add5011091e99f6e8ecb30fc41a7211" style="margin-top:1.4%;"></a>');
				</script>
			<?php } ?>
		</div>
	<?php } ?>


    <div class="novidades-home">
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

<div class="home_cinema">    	
	<div></div>
   	<ul>
    	<li data-i="#i">
           	<img src="#fundo" alt="#titulo" />
           	<div class="home_trailer">
           		<iframe  url_trailer ></iframe>
           	</div>
            <div>
             	<img src="https://upload.madnezz.com.br/ecc14bb22d25af415982dd48ad3e7bd8" class="icon-cinema"/>
               	<h3>#titulo</h3>
                <h4>#genero - #censura</h4>
                <p>#horario</p>
            </div>
            <a href="cinema_moviecom.php?cinema_id=#filme_url"></a>
		</li>
  	</ul>
    <span class="cinema_up"></span>
    <span class="cinema_down"></span>
</div>

 
<div class="bg_branco" style="padding:50px 0 0 0; width:100%; overflow:hidden;">    	
	<div class="titulo">
		<h1>Instagram</h1>
	</div>    
	<a href="https://www.instagram.com/shoppingjaraguaararaquara/" target="_blank">
    	<img src="https://upload.madnezz.com.br/e734a93161377c2a20e272b3fd65f209" style="width:100%;display:block;">
</a>
</div>

<script type="text/javascript" src="js/instagram.php"></script>

<script type="text/javascript">

//INSTAGRAM HOME
		
	$(function(){
		/*$.each(insta_media,function(i,data){
			$(".insta_slide").append('<li><a href="https://www.instagram.com/p/'+data.node.shortcode+'" target="new"><img src="'+ data.node.display_url +'" /></a><div class="desc_insta"><h2>Insta</h2></div></li>');
		});
		setInterval(function(){
			$(".insta_slide").animate({'margin-left':-$(".insta_slide li").eq(0).width()},function(){
				$(".insta_slide").append($(".insta_slide li").eq(0));
				$(".insta_slide").css({'margin-left':'0'});
			});
		},3000);*/
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


<?php include 'inc/footer.php'; ?>