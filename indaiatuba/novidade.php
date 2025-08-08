<?php include 'inc/header.php'; ?>
<?php
	// Obtém o mês da requisição, ou o mês atual caso não seja fornecido
	$mes = isset($_REQUEST['mes']) ? $_REQUEST['mes'] : date("m");

	// Obtém o ano da requisição, ou o ano atual caso não seja fornecido
	$ano = isset($_REQUEST['ano']) ? $_REQUEST['ano'] : date("Y");
?><div id="fb-root">
	<script>
		/*(function(d,s,id){
			var js,fjs=d.getElementsByTagName(s)[0];
			if(d.getElementById(id)) return;
			js=d.createElement(s);
			js.id=id;
			js.src='https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.11';
			fjs.parentNode.insertBefore(js,fjs);
		}(document,'script','facebook-jssdk'));*/
	</script>
</div>

<style>
	.fb_iframe_widget{position:absolute;padding-bottom:50px!important;bottom:-3px;}
	.fb_iframe_widget span:after{content:' ';position:absolute;width:100%;height:100%;background-image:url(https://upload.madnezz.com.br/e222b51105b4cec303b1cd203fef8778);background-size:80%;background-repeat:no-repeat;pointer-events:none;}
	.whatsapp {display:none;}
	body.responsivo .whatsapp {content:' ';position:absolute;width:35px;height:35px;background-image:url(https://upload.madnezz.com.br/d05a01dbac7f9413d7de400ed37376bd);background-size:80%;background-repeat:no-repeat; bottom: 12px;left:12%;display:block;}
	.active .whatsapp {bottom:25px !important;left:16% !important;}
	.fb_iframe_widget span:hover{opacity:0.5;cursor:pointer;}
	.fb_iframe_widget span {width:35px !important;height:30px !important;}
	.fb_iframe_widget iframe { opacity: 0.03; z-index: 999;}
	#novidade .novidade_lista li.active .fb_iframe_widget {padding-bottom:0!important;bottom:30px;}
	.img-noticia {background-size:cover;background-repeat:no-repeat;background-position:center;}
	.novidade_lista li { cursor: pointer; height: auto !important; } 
	.novidade_lista li:nth-child(3n+1) { clear: both; }
	.novidade_lista li:hover { opacity: 0.8; }
	.novidade_lista li.active:hover { opacity: 1; }
	.novidade_lista li.active { cursor: initial; } 
	#novidade .info-novidade {width:90%; padding:5%; height:auto !important; padding-bottom:40px !important; background-color: #eee;}
</style>
 

<!-- <div class="banner" style="background-image:url(https://upload.madnezz.com.br/c862be0aa813d34f449600ef0065714e)"></div> -->

<div id="novidade" class=" conteudo secundaria">
	<div class="bg_cinza">
		<div class="defaultcol3 busca_novidade"> 			 
			<div class="col">
        <!--<p class="center pb50">Fique por dentro de tudo o que acontece aqui no Shopping</p>-->
				<div class="titulo">
					<h1>Acompanhe todos os destaques do Shopping</h1>
				</div> 
			</div>
            <div class="col">
            	<table>
                	<tr>
					<td width="48%">
						<select class="mes" name="mes">
							<?php
							$mes_atual = isset($_GET['mes']) ? (int)$_GET['mes'] : ""; // Obtém o mês da requisição, se existir
							$meses = [
								1 => "Janeiro", 2 => "Fevereiro", 3 => "Março", 4 => "Abril",
								5 => "Maio", 6 => "Junho", 7 => "Julho", 8 => "Agosto",
								9 => "Setembro", 10 => "Outubro", 11 => "Novembro", 12 => "Dezembro"
							];
							
							foreach ($meses as $num => $nome) {
								$selected = ($mes_atual == $num) ? 'selected' : '';
								echo "<option value=\"$num\" $selected>$nome</option>";
							}
							?>
							<option value="" disabled selected>Selecione o mês</option>
						</select>
						<button class="bt_drop"></button>
					</td>
					<td width="4%"></td>
					<td>
						<select class="ano" name="ano">
							<?php
							$ano_atual = isset($_GET['ano']) ? (int)$_GET['ano'] : "";
							$ano_inicio = 2016;
							$ano_fim = date("Y"); // Ano atual

							for ($i = $ano_inicio; $i <= $ano_fim; $i++) {
								$selected = ($ano_atual == $i) ? 'selected' : '';
								echo "<option value=\"$i\" $selected>$i</option>";
							}
							?>
							<option value="" disabled selected>Selecione o ano</option>
						</select>
						<button class="bt_drop2"></button>
					</td>

                  	</tr>
               	</table>
			</div>
		</div>
    </div>
	<div class="bg_branco">
    	<h2 class="big green2 tac novidade_qtd"></h2>
		<div class="default content wd100">
			<ul class="novidade_lista"></ul>
		</div>
		<div class="novidade_info"></div>
	</div>
</div>
<script type="text/javascript" src="js/novidade.js"></script>
<?php include 'inc/footer.php'; ?>