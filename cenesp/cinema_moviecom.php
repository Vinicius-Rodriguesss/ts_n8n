<?php
include 'inc/header.php';
?>
<style type="text/css">
	#cinema_moviecom .faixa {background-color:#f4f4f4;position:relative;}
	#cinema_moviecom .indicacao * { display: inline-block; vertical-align: baseline;  }
	#cinema_moviecom .indicacao p { margin-right: 25px;}
	#cinema_moviecom .cinema_lista h2 { margin-top:0; font-size:32px; }
	#cinema_moviecom .cinema_lista h3 { font-size:24px;margin-right:5px;margin-bottom:10px; }
	#cinema_moviecom .cinema_lista { width:80%;margin:50px 10% 100px; }
	#cinema_moviecom .cinema_lista li { width:22%;float:left;margin-right:4%;background-color:#eee;margin-bottom:50px;}
	#cinema_moviecom .info-cinema {padding:8%;min-height:171px;}
	#cinema_moviecom .info-cinema h2 {font-size:24px;}
	#cinema_moviecom .info-filme {width:80%;padding:0 10%;margin-top:20px;text-align:justify;}
	#cinema_moviecom .info-filme p {font-family:'Open Sans', sans-serif !important;font-size:12px !important;}
	#cinema_moviecom .horarios {background-color:#999;color:#fff;text-transform:uppercase;padding:10px 20px;font-family:'din_black';text-align:center;font-size:18px;}
	#cinema_moviecom .horarios a {color:#fff;}
	#cinema_moviecom .cinema_lista p {font-family:'din_black', sans-serif;color:#666;font-size:14px !important;}
	#cinema_moviecom .cinema_lista li:nth-child(4n) { margin-right:0; }
	#cinema_moviecom .cinema_lista img { width:100%;max-height:480px;}
	#cinema_moviecom .iframe { width: 100%;  padding-bottom: 30%; margin-bottom: 20px;  background-color: #000; position: relative; height: 0px; background-position:center; background-size:cover;}
	#cinema_moviecom .iframe iframe { position: absolute; left: 0; top: 0; width: 100%; height: 100%;   }
	#cinema_moviecom select {float:none;width:40%;}
	#cinema_moviecom .bt_drop {right:34%;}
	input[type=text] {width:40%;}
	#cinema_moviecom .bt_busca {width:113px;height:40px;right:28%;top:0;}
	#cinema_moviecom .bg_branco {width:100%; padding:0; }
	.play {cursor:pointer; position:absolute; top:36%; left:48%; width:84px; height:84px; background-image:url(https://upload.madnezz.com.br/dc3a6bdf5a4a6db7183ff5be4b33c7ae);}
	#cinema_moviecom .cinema_lista img:nth-child(even) {filter:brightness(0.5);}
	#cinema_moviecom .mostrar-todos {padding:15px 20px;background-color:#5eab46;color:#fff;margin-top:50px;font-size:22px;font-family:'din_black', sans-serif;float:right;}
	#cinema_moviecom .mostrar-todos a {color:#fff !important;}
	#cinema_moviecom .indicacao>ul {display:flex;width:35%;max-height:70px;}
	#cinema_moviecom .indicacao li {margin-bottom:20px !important;}
	body.responsivo #cinema_moviecom .info-filme {text-align:center;}
	body.responsivo #cinema_moviecom .indicacao p {margin-right:0;}
	body.responsivo #cinema_moviecom .indicacao>ul {display:block;width:100%;text-align:center;}
	body.responsivo #cinema_moviecom .mostrar-todos {margin-top:100px;margin-left:auto;margin-right:auto;float:none;}
	
	@media only screen and (max-width:1800px){
		#cinema_moviecom .cinema_lista img {max-height:420px;}
	}

	@media only screen and (max-width:1700px){
		#cinema_moviecom .cinema_lista img {max-height:380px;}
	}

	@media only screen and (max-width:1500px){
		#cinema_moviecom .cinema_lista img	{max-height:320px;}
	}
	
	@media only screen and (max-width:700px){
		#cinema_moviecom .cinema_lista img	{max-height:270px;}
	}
		
	.fundo {background-color:rgba(0,0,0,0.5);position:fixed;top:0;left:0;width:100%;height:100%;z-index:9999;display:none;}	
	.popup {width:60%;height:80%;background-color:#fff;left:20%;top:10%;position:absolute;display:none;}
	.popup-logo {width:100%;background-color:#334690;margin-top:2%;text-align:center;}
	.popup-logo img {width:25%;padding:2% 0;}
	.popup-texto {width:80%;max-height:55%;padding:5%;margin:5%;overflow:auto;color:#1f497d;}
	.fechar {font-size:40px;color:#fff;position:absolute;right:17%;top:10%;font-weight:bold;cursor:pointer;}
	.bt_projeto {cursor:pointer;padding:5px 10px;background-color:#5eab46;font-family:'Din';font-size:20px;color:#fff;}
	.bt_projeto:hover {opacity:0.7;}
	
	body.responsivo .popup {width:80%;height:70%;left:10%;top:15%;}
	body.responsivo .popup-logo img {width:50%;}
	body.responsivo .popup-texto {max-height:70%;font-size:24px;line-height:30px;word-break:break-word;}
	body.responsivo .fechar {right:10%;}
		
	
</style>

	



<script type="text/javascript">	
	$(function(){
		if(cinema_id){
			$.ajax({url:apis.cinema_moviecom+"?tipo=2&shopping_id="+shopping_id+"&jsoncallback=?",dataType:"json"}).done(function(data){
				$.each(data,function(i,cinema){
					if(cinema_id == cinema.id){
						let iframe='<iframe src="'+cinema.trailer.replace('watch?v=','embed/')+'?color=white&iv_load_policy=3&rel=0&showinfo=0&modestbranding=1&autohide=1&autoplay=0" frameborder="0" allowfullscreen></iframe>';
						$('.cinema_lista').css({"width":"100%","margin":"50px 0"});
						$('.cinema_lista li').css({"width":"100%"});
						$('.cinema_lista').append('<li>'+
							'<h2 class="big green2">'+cinema.titulo+'</h2><br><br>'+
							'<div class="iframe" style="background-image:url('+cinema.fundo+');">'+
							'	<div class="play"></div>'+
							'</div>'+
							'</tbody></table><br>'+
							'<div class="indicacao info-filme">'+						
								'<h3 class="green2 tac">Sinopse: </h3><p class="justify">'+cinema.sinopse+'</p><br><br>'+
								'<ul>'+
									'<li><h3 class="green2">Duração: </h3><br><p>'+cinema.duracao+' minutos</p></li>'+
									'<li><h3 class="green2">Gênero: </h3><br><p>'+cinema.genero+'</p></li>'+
									'<li><h3 class="green2">Faixa: </h3><br><p>'+cinema.censura+' anos</p></li>'+
								'</ul>'+
								'<ul style="display:block;">'+
									'<h3 class="green2">Horários: </h3><br><p><a href="https://moviecom.com.br/cinema/araraquara-jaragua/venda/" target="_new">Confira aqui a programação</a></p><br>'+
								'</ul>'+
								'<div class="mostrar-todos"><a href="cinema_moviecom.php"> Todos os filmes</a></div>'+
							'</div></li>' 
						);
						$('.cinema_lista li').css({"width":"100%","background-color":"transparent"});
						$('.iframe').append(iframe);
					}
				});
			});
		} else {
			$.ajax({url:apis.cinema_moviecom+"?tipo=2&shopping_id="+shopping_id+"&jsoncallback=?",dataType:"json"}).done(function(data){
				$.each(data,function(i,cinema){
					$('.cinema_lista').append('<li>'+
						'	<a href="?cinema_id='+cinema.id+'"><img src="'+cinema.cartaz+'" alt="'+cinema.titulo+'" /></a>'+
						 '	<div class="info-cinema">'+
							'	<h2 class="green2">'+cinema.titulo.toUpperCase()+'</h2><br>'+
							'	<p>'+cinema.genero+'</p>'+
							'	<p>'+cinema.duracao+' minutos</p>'+
							'	<p>'+cinema.censura+' anos</p>'+
						' 	</div>'+	 										
						'	<div class="horarios"><a href="?cinema_id='+cinema.id+'">+ Informações</a></div>'+
						'</li>');
				});
			});
			$('[name=busca]').keyup(function(){
				$('.cinema_lista li').hide();
				$('.cinema_lista .green2:contains("'+$('[name=busca]').val().toUpperCase()+'")').parents('li').show();
			});
			
			$.ajax({url:apis.cinema_moviecom+"?tipo=2&shopping_id="+shopping_id+"&jsoncallback=?",dataType:"json"}).done(function(data){	
				$.each(data,function(i,cinema){
					$('.lista_filmes').append('<option>'+cinema.titulo+'</option>');
				});
			});
			
			$('[name=lista_filmes]').change(function(){
				$('.cinema_lista li').hide();
				$('.cinema_lista .green2:contains("'+$('[name=lista_filmes]').val().toUpperCase()+'")').parents('li').show();
			});
						
		}
	});	
</script>

	<div class="fundo">
    	<div class="fechar" onClick="fecharPopup()">X</div>
    	<div class="popup">
        	<div class="popup-logo"><img src="img/logo_moviecom.jpg"></div>
            <div class="popup-texto">
            	<b>REGRAS DO PROJETO ESCOLA – 2º SEMESTRE DE 2017</b><br><br>
                
                O Projeto Escola tem o intuito de aproximar os alunos do Ensino Fundamental e Ensino Médio ao cinema, proporcionando a disseminação cultural e o aprendizado fora da sala de aula.<br>
                Trabalhamos com filmes exclusivamente da grade de programação da semana que ocorrerá o projeto. Consulte a programação no nosso site <b><a href="http://www.moviecom.com.br" target="_blank">www.moviecom.com.br</a></b><br><br>
                
                
                <b>VALORES</b><br><br>
                
                <b>APENAS INGRESSO</b><br><br>
                
                <b>FILME 2D:</b> R$6,50<br>
                <b>FILME 3D:</b> R$8,50<br><br>
                
                <b>INGRESSO + COMBOS</b><br><br>
                
                <b>FILME 2D + Pipoca + Refrigerante de 180 ml: </b>R$ 15,50<br>
                (ingresso 6,50 + pipoca 5,00 + refrigerante 4,00)<br>
                <b>FILME 3D + Pipoca + Refrigerante 180 ml: </b>R$ 17,50<br>
                (ingresso 8,50 + pipoca 5,00 + refrigerante 4,00)<br><br>
                
                <b>DISPOSIÇÕES GERAIS</b><br><br>
                • A cada 30 ingressos, 1 (uma) cortesia é disponibilizada aos coordenadores/ professores.<br>
                • Sessões matinais. Fora desses horários, o departamento de programação avaliará junto ao gerente do cinema a possibilidade de outros horários.<br>
                • Sessões fora da cinema-semana do filme em cartaz, só com consulta prévia ao departamento de programação.<br>
                • Reservas com 3 de antecedência, no mínimo.<br>
                • Mínimo de 70 alunos.<br>
                • Maiores informações pelo email: projetoescola@moviecom.com.br
            </div>
        </div>    
    </div>

<div class="banner" style="background-image:url(https://upload.madnezz.com.br/1e7e8b3e9b322af9656d16eadc66e1e8)"></div>
<div id="cinema_moviecom" class="conteudo">
	<div class="bg_cinza">	
		<div class="col">
			<p class="center ttn">
            	Confira a programação de cinema dessa semana!<br>
            	*Programação sujeita a alteração.<br>
				A programação de cinema divulgada neste espaço é de responsabilidade exclusiva da operadora. <br>O Shopping Jaraguá Araraquara não se responsabiliza pela eventual alteração das informações.<br><br>
                
                <!-- <font class="bt_projeto" onClick="abrirPopup()">Projeto Escola</font> -->
                
            </p><br>
            
            
            
			<?php if (req("cinema_id")=="") {?>
				<div class="titulo pt50">
					<h1>Nova Pesquisa</h1>
				</div>    
				<div class="center">
					<table>
						<tr>
							<!--<td>
                                <input type="text" name="busca" placeholder="Qual filme você procura?">
                                <button class="bt_busca"></button>
							</td>-->
                            <select class="lista_filmes" name="lista_filmes">
                            	<option value="">Qual filme você procura?</option>  
                                <option></option>                              
                            </select>
                            <button class="bt_drop"></button>                            
						</tr>
					</table>        
				</div>
			<?php } ?>
		</div>
	</div>

	<div class="bg_branco pt10 pb50">
		<?php
		// Verifica se o parâmetro 'cinema_id' está vazio
		if (empty($_REQUEST["cinema_id"])) {

			// Obtém o dia da semana (0 = Domingo, 1 = Segunda, ..., 6 = Sábado)
			$dia_semana = date("w");

			// Calcula a data de entrada com base no dia da semana
			if ($dia_semana == 5) {
				$data_entrada = date("Y-m-d H:i:s"); // Data e hora atuais
			} elseif ($dia_semana == 6) {
				$data_entrada = date("Y-m-d H:i:s", strtotime("-1 day")); // Data de ontem
			} else {
				$data_entrada = date("Y-m-d H:i:s", strtotime("-" . ($dia_semana + 2) . " days")); // Subtrai o número de dias necessários
			}

			// Calcula a data de saída (6 dias após a data de entrada)
			$data_saida = date("Y-m-d H:i:s", strtotime("+6 days", strtotime($data_entrada)));

			// Exibe a programação no formato de dia/mês
			echo '<h2 class="big green2 tac">Programação de ' . str_pad(date("d", strtotime($data_entrada)), 2, "0", STR_PAD_LEFT) . '/' . str_pad(date("m", strtotime($data_entrada)), 2, "0", STR_PAD_LEFT) . ' a ' . str_pad(date("d", strtotime($data_saida)), 2, "0", STR_PAD_LEFT) . '/' . str_pad(date("m", strtotime($data_saida)), 2, "0", STR_PAD_LEFT) . '</h2>';
		}
		?>


		<ul class="cinema_lista tac"></ul>
        <div style="clear:both"></div>
	</div>
</div>

	<script>
		function abrirPopup(){			
			$('.fundo').fadeIn(500);	
			$('.popup').delay(500).slideDown(300);
		}
	
		function fecharPopup(){
			$('.popup').slideUp(300);
			$('.fundo').delay(300).fadeOut(500);	
		}
	
	</script>

<?php
include 'inc/footer.php';
?>