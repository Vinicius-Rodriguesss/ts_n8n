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
	.play {cursor:pointer; position:absolute; top:36%; left:48%; width:84px; height:84px; background-image:url(https://upload.madnezz.com.br/420c2d4de30c6177a02ae9bcbafe6b8b);}
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
		
	
</style>
<script type="text/javascript">	
	$(function(){
		if(cinema_id){
			$.ajax({url:apis.cinema_moviecom+"?shopping_id="+shopping_id+"&jsoncallback=?",dataType:"json"}).done(function(data){
				var iframe;
				cinema=data[cinema_id].filme;
				iframe='<iframe src="//www.youtube.com/embed/'+cinema.trailer+'?color=white&iv_load_policy=3&rel=0&showinfo=0&modestbranding=1&autohide=1&autoplay=0" frameborder="0" allowfullscreen></iframe>';
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
							'<li><h3 class="green2">Faixa: </h3><br><p>'+cinema.censura+'</p></li>'+
						'</ul>'+
						'<ul style="display:block;">'+
							'<h3 class="green2">Horários: </h3><br><p><a href="'+cinema.ticket_filme+'" target="_new">Confira aqui a programação</a></p><br>'+
						'</ul>'+
						'<div class="mostrar-todos"><a href="cinema_moviecom.php"> Todos os filmes</a></div>'+
					'</div></li>' 
				);
				$('.cinema_lista li').css({"width":"100%","background-color":"transparent"});
				$('.iframe').append(iframe);
			});
			
		//Monta lista de cinemas
		} else {
			$.ajax({url:apis.cinema_moviecom+"?shopping_id="+shopping_id+"&jsoncallback=?",dataType:"json"}).done(function(data){
				$.each(data,function(i,cinema){
					cinema=cinema.filme;
					$('.cinema_lista').append('<li>'+
						'	<a href="?cinema_id='+i+'"><img src="'+cinema.cartaz+'" alt="'+cinema.titulo+'" /></a>'+
						 '	<div class="info-cinema">'+
							'	<h2 class="green2">'+cinema.titulo.toUpperCase()+'</h2><br>'+
							'	<p>'+cinema.genero+'</p>'+
							'	<p>'+cinema.duracao+' minutos</p>'+
							'	<p>'+cinema.censura+'</p>'+
						' 	</div>'+	 										
						'	<div class="horarios"><a href="?cinema_id='+i+'">+ Informações</a></div>'+
						'</li>');
				});
			});
			$('[name=busca]').keyup(function(){
				$('.cinema_lista li').hide();
				$('.cinema_lista .green2:contains("'+$('[name=busca]').val().toUpperCase()+'")').parents('li').show();
			});
			
			$.ajax({url:apis.cinema_moviecom+"?shopping_id="+shopping_id+"&jsoncallback=?",dataType:"json"}).done(function(data){	
				$.each(data,function(i,cinema){
					cinema=cinema.filme;
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
<div class="banner" style="background-image:url(https://upload.madnezz.com.br/aa515ff0a372a2f1f305f159d8694f94)"></div>
<div id="cinema_moviecom" class="conteudo">
	<div class="bg_cinza">	
		<div class="col">
			<p class="center ttn">
            	Confira a programação de cinema dessa semana!<br>
            	*Programação sujeita a alteração.<br>
				A programação de cinema divulgada neste espaço é de responsabilidade exclusiva da operadora. <br>O Shopping Jaraguá Araraquara não se responsabiliza pela eventual alteração das informações.
            </p>
			<?php if (req("cinema_id")=="") { ?>
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
			<?php }?>
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

<?php
include 'inc/footer.php';
?>