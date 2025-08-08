<?php
include 'inc/header.php';
?>
<link rel="stylesheet" type="text/css" href="cinema/css/cinema.css?v=1">
<link rel="stylesheet" type="text/css" href="cinema/font/font.css">
<style type="text/css">	
	.menu_cinema { width: 100%; overflow: hidden;}
		.menu_cinema img { width: 100%; }
		.menu_cinema a { width: 50%; float: left; }
		#cinema2 .cinema_container { padding-top: 0px; }
		.cinema_titulo span { display: inline-block; vertical-align: super; font-size: 21px; line-height: 21px; letter-spacing: initial; padding-left: 30px; margin-left: 30px; border-left: 1px solid; }
		#cinema2 .ttu { text-transform: uppercase; }
		#cinema2 .cinema_data li { width: initial; }
	body.responsivo .banner {background-position:right!important;}
</style>
<!-- <div class="banner" style="background-image:url(https://upload.madnezz.com.br/36664d51d2c0182ff9e667442158b521)"></div> -->


<div id="cinema2" > 
<div id="cinema" class="conteudo">
	
    <div class="cinema_container">
		<ul class="cinema_data"></ul>
		<div class="cinema_col">
			<div class="cinema_col1 filtros">
				<p class="bloco_titulo">Filtros</p> 
				<input type="checkbox" video="2d" id="filtro_2d">  <label for="filtro_2d">2D</label> <br> 
				<input type="checkbox" video="3d" id="filtro_3d">  <label for="filtro_3d">3D</label> <br>
				<input type="checkbox" audio="dub" id="filtro_dub"> <label for="filtro_dub">Dublado</label> <br>
				<input type="checkbox" audio="leg" id="filtro_leg"> <label for="filtro_leg">Legendado</label> <br>
				<input type="checkbox" audio="nac" id="filtro_nac"> <label for="filtro_nac">Nacional</label> <br>				
			</div>
			<div class="cinema_col2">
				<ul class="cinema_filmes"></ul>
			</div>
		</div>
	</div>
</div>
<div class="trailer_container"><div class="trailer_iframe"></div></div> 
    
</div>

<script type="text/javascript">
	$(function(){
		scrollTo = function(el) {  if (el){ $("html,body").stop().animate({scrollTop: el.offset().top-180},500); } };
		var audio = '<?php echo req("filtro_audio")?>',	video = '<?php echo req("filtro_video")?>';
		var filtro_dia = '<?php echo req("d")?>';
		var filtro_filme = '<?php echo req("filme")?>';
		/*TROCA DIA*/
		troca_dia = function(dia){
			$('.cinema_filmes li').hide();
			$('.cinema_data li').removeClass('active');
			$('.cinema_filmes li[dia='+dia+']').stop().fadeIn('slow');
			$('.cinema_data li[dia='+dia+']').addClass('active');	
		};
		monta_cinema = function(){
			$('.cinema_filmes').hide();
			$.ajax({url:apis.cinema_velox+"?shopping_id="+shopping_id+"&audio="+audio+"&video="+video+"&jsoncallback=?",dataType:"json"}).done(function(data){
				$('.cinema_filmes, .cinema_data').html('');
				if (data.length){
					$.each(data, function(i, cinema){
						/*DIAS SEMANA*/
						$('.cinema_data').append('<li dia="'+cinema.semana+cinema.data.replace(/\//g,'-')+'" ><h2>'+cinema.semana+'</h2><span>'+cinema.data+'</span></li>');

						/*MONTA FILMES*/
						$.each(cinema.filmes, function(i, filme){
							/*MONTA SALA E HORARIOS*/
							sala_lista='';
							$.each(filme.programacao, function(i, sala){
								horario_lista='';
								$.each(sala.horario, function(i, horario){
									horario_lista += '<a href="'+horario[1]+'" target="new"><span>Comprar</span><span>'+horario[0]+'</span></a>'; 
								});
								sala_lista += '<p class="filme_lang"><b>'+sala.sala+'</b> <span>'+sala.audio+'</span><span>'+sala.video+'</span></p><p class="fhorario_btn">'+horario_lista+'</p>';
							});
							$('.cinema_filmes').append(
								'<li dia="'+cinema.semana+cinema.data.replace(/\//g,'-')+'" filme_nome="'+filme.titulo.replace(/ /g,'-').replace(/,/g,'').replace(/:/g,'')+'">'+
									'<img src="'+filme.cartaz+'"  />'+
									'<div>'+
										'<div class="filme_head">'+
											'<div class="filme_titulo">'+
												'<p class="cor1 ttu"><b>'+filme.titulo+'</b></p>'+
												'<span class="filme_censura cens'+filme.censura+'">'+filme.censura.replace(/ anos/g, '')+'</span> | <span class="filme_duracao">'+filme.duracao+' min.</span><span> | '+filme.genero+'</span>'+ 
											'</div>'+
											'<div class="filme_btn cor1">'+
												(filme.trailer?'<p trailer="'+filme.trailer+'" class="filme_trailer"><img src="cinemahttps://upload.madnezz.com.br/420c2d4de30c6177a02ae9bcbafe6b8b"><br> Trailer</p>':'')+
												'<p style="display:none"><img src="cinemaimg/money.png"><br>Preços</p>'+
											'</div>'+
										'</div>'+
										'<div class="filme_horarios">'+sala_lista+'</div>'+
									'</div>'+
								'</li>'	
							);
							
							
						});
					});
				} else {
					$('.cinema_filmes').append('<h1 class="cor1">Nada encontrado</h1>');
				}
				if (filtro_dia&&filtro_filme){
					$('.cinema_data li[dia='+filtro_dia+']').click(); 
					setTimeout(function(){
						scrollTo($('.cinema_filmes li[dia='+filtro_dia+'][filme_nome='+filtro_filme+']'));
						console.log($('.cinema_filmes li[dia='+filtro_dia+'][filme_nome='+filtro_filme+']'));
					},500);
					
				} else {
					$('.cinema_data li').eq(0).addClass('active');
					troca_dia($('.cinema_data li.active').attr('dia'));
				}
				$('.cinema_filmes').fadeIn('slow');
			});
		};
		monta_cinema();

		/*FILTRO DATA*/
		$('.cinema_data').on('click','li', function(event) {
			dia = $(this).attr('dia');
			troca_dia(dia);
		});

		/*FILTRO*/
		$('.filtros input[type=checkbox]').change(function(event){
			if($(this).attr('audio') && $(this).is(':checked')){
				$('.filtros input[audio]').prop('checked', false);
				$(this).prop('checked', true);
			} 
			if($(this).attr('video') && $(this).is(':checked')){
				$('.filtros input[video]').prop('checked', false);
				$(this).prop('checked', true);
			} 
			($('.filtros input[audio]:checked').length?audio= $('.filtros input[audio]:checked').attr('audio').toUpperCase():audio='');
			($('.filtros input[video]:checked').length?video= $('.filtros input[video]:checked').attr('video').toUpperCase():video='');
			monta_cinema();
		});

		/*TRAILER*/
		get_trailer = function(trailer){
			$('.trailer_container .trailer_iframe').html('<img class="close_trailer" src="cinemahttps://upload.madnezz.com.br/6a91ccbf6fd93cb9696c96b870b1fad1" /><iframe src="'+trailer+'?color=white&iv_load_policy=3&rel=0&showinfo=0&modestbranding=1&autohide=1" frameborder="0" allowfullscreen></iframe>');
			$('.trailer_container').fadeIn('slow');
		};
		$('.cinema_filmes').on('click', '.filme_trailer', function(){
			get_trailer($(this).attr('trailer'));
		});
		$('.trailer_container').on('click', '.close_trailer', function(){
			$('.trailer_container').fadeOut('fast', function() {
				$('.trailer_container .trailer_iframe').html('');
			});
		});
	});
</script>

<?php
include 'inc/footer.php';
?>