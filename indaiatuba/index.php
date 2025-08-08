<?php include 'inc/header.php'; ?>
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
            	<li class="alimentacao">
					<a href="alimentacao.php"><img src="https://upload.madnezz.com.br/ad5abe6127b41154d0a009525224adb1"></a>
                    <div class="desc_alimentacao">
                        <h2>Alimentação</h2>
                        <!--<h3>São mais de XX opções</h3>-->
                    </div>
                </li>
                <li class="loja">
					<a href="loja.php"><img src="https://upload.madnezz.com.br/b2e2b3ee3e0397ba60ea1edb48bd4720"></a>
                    <div class="desc_loja">
                        <h2>Lojas</h2>
                        <!--<h3>São mais de 30 opções em nossa gastronomia</h3>-->
                    </div>
                </li>                
                <li class="servico">
					<a href="servico.php"><img src="https://upload.madnezz.com.br/7e7fc772a764af144da1d047fd7633b6"></a>
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
			<div class="banner_loja">
				<a href="https://www.shoppingjaragua.com.br/indaiatuba/shopping.php"><img class="banner_lojista" src="https://upload.madnezz.com.br/e1117ee69f874cf6d8e86b86aaa96a25" style="margin-top:1.3%;"></a>
				<!-- <img class="banner_lojista" src="https://upload.madnezz.com.br/04d80b155c15fc531a257d4d90e51a9d" style="margin-top:1.3%;"></a> -->
			</div>
		</div>
    </div>
    
    
    
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
	<div class="swiper-container">	
		<ul class="swiper-wrapper">
		</ul>
	</div>  
</div>

<a href="https://www.instagram.com/shopjaraguaindaiatuba/" target="_blank"><img src="https://upload.madnezz.com.br/0cc96373e4a0c44c95e845a413bb14b2" style="padding-top:3%;width:100%;display:block;"/></a>

<!-- <div class="titulo pt50">
	
	<h1>Instagram</h1>
</div>
<div class="galeria instagram instagram_mobile">
	<div class="container_galeria">
		<div class="last_post"></div>
		<div class="swiper-container">                
			<ul class="swiper-wrapper"></ul>
		</div>
	
	</div>
</div> -->
<script type="text/javascript">
    //INSTAGRAM HOME        
    $(function(){
        var name = "shopjaraguaindaiatuba";
        $.get("https://images"+~~(Math.random()*3333)+"-focus-opensocial.googleusercontent.com/gadgets/proxy?container=none&url=https://www.instagram.com/" + name + "/", function(html) {
            if (html) {
                var regex = /_sharedData = ({.*);<\/script>/m,
                    json = JSON.parse(regex.exec(html)[1]),
                    edges = json.entry_data.ProfilePage[0].graphql.user.edge_owner_to_timeline_media.edges;

                if($(window).width() >= 1024){
                    $.each(edges,function(n,edge){
                        var node = edge.node;
                        $(".instagram .swiper-wrapper").append('<li class="swiper-slide" style="background-image:url('+node.thumbnail_src+');"><a href="https://www.instagram.com/p/'+node.shortcode+'" target="_blank"></a><div class="info"><h2>@shopjaraguaindaiatuba</h2></div></li>');
                    });
                } else {
                    $.each(edges,function(n,edge){
                        var node = edge.node;
                        if(n==0){
                            $(".last_post").html('<a href="https://www.instagram.com/p/'+node.shortcode+'" target="_blank"><img src="'+ node.thumbnail_src +'" /></a>');
                        }
                    });

                    $.each(edges,function(n,edge){
                        var node = edge.node;
                        if(n>0){
                            $(".instagram .swiper-wrapper").append('<li class="swiper-slide" style="background-image:url('+ node.thumbnail_src +');"><a href="https://www.instagram.com/p/'+node.shortcode+'" target="_blank"></a><div class="info"><h2>@shopjaraguaindaiatuba</h2></div></li>');
                        }
                    });
                }
            }
        });
    }); 
</script>
<script>	
		//TROCA BANNER LOJISTA
		/*$(function(){
		  var $lojista = $('.banner_lojista');
		  var index = 0;
		  var sources = [
			'https://upload.madnezz.com.br/89c50bd86548f72cfc030d7206f0a024',
			'https://upload.madnezz.com.br/7e6e5c54ec7232df32e8f48bb6f1ab29',
		  ];
		
		  setInterval(function () {
			index ^= 1;
			$lojista.attr('src', sources[index]);
		  }, 6000);
		});*/
	
	</script>

<style>
	.desc_alimentacao, .desc_loja, .desc_servico {width:100%;height:100%;position:absolute;top:50%;margin-top:-50px; opacity:0.3;pointer-events:none;}
	.desc_alimentacao h2, .desc_loja h2, .desc_servico h2 {font-size:32px;text-align:center;font-family: 'din_black', sans-serif;}
	.desc_alimentacao h3, .desc_loja h3, .desc_servico h3 {font-size:11px;letter-spacing:1px;text-align:center;padding-top:10px;font-family: 'din_light', sans-serif;}
	
	.desc_insta {width:100%;height:100%;position:absolute;top:50%;margin-top:-50px;opacity:0;pointer-events:none;}
	.desc_insta h2 {color:#fff;font-size:32px;text-align:center;font-family: 'din_light', sans-serif;}
	
	.home_cinema>ul>li>img {width:165%;position:absolute;left:-30%;filter:brightness(0.5);}
	.home_cinema h2 {pointer-events:none;}
	
	li.alimentacao:hover .desc_alimentacao, li.loja:hover .desc_loja, li.servico:hover .desc_servico
	{opacity: 1;}
	li.alimentacao:hover .desc_alimentacao h2, li.loja:hover .desc_loja h2, li.servico:hover .desc_servico h2
	{color: white !important;}
</style>



 
<?php
	include 'slider/cinema_home.php';
	include 'slider/instagram.php';
	include 'inc/footer.php';
?>