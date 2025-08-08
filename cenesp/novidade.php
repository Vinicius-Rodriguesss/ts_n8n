<?php include "inc/header.php"?>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.11';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<style>
	.fb_iframe_widget {position:absolute;padding-bottom:50px!important;bottom:-3px;}
	.fb_iframe_widget span:after {content:' ';position:absolute;width:100%;height:100%;background-image:url(https://upload.madnezz.com.br/2206b0232df8dd80db4d3e79432a0c82);background-size:80%;background-repeat:no-repeat;pointer-events:none;}
	.whatsapp {display:none;}
	body.responsivo .whatsapp {content:' ';position:absolute;width:35px;height:35px;background-image:url(https://upload.madnezz.com.br/e05beb4db5e31d0053e6e8cc209ed530);background-size:80%;background-repeat:no-repeat; bottom: 12px;left:12%;display:block;}
	.active .whatsapp {bottom:25px !important;left:16% !important;}
	.fb_iframe_widget span:hover{opacity:0.5;cursor:pointer;}
	.fb_iframe_widget span {width:35px !important;height:30px !important;}
	.fb_iframe_widget iframe {opacity:0;}
	#novidade .novidade_lista li.active .fb_iframe_widget {padding-bottom:0!important;bottom:30px;}
	.img-noticia {background-size:cover;background-repeat:no-repeat;background-position:center;}
  .novidade_lista li { cursor: pointer; height: auto !important; } 
  .novidade_lista li:nth-child(3n+1) { clear: both; }
  .novidade_lista li:hover { opacity: 0.8; }
  .novidade_lista li.active:hover { opacity: 1; }
  .novidade_lista li.active { cursor: initial; } 
  #novidade .info-novidade {
    width: 90%;
    padding: 5% ;
    height: auto !important;
    padding-bottom: 40px !important;
}
</style>

<?php
	// Obtém o mês da requisição, ou o mês atual caso não seja fornecido
	$mes = isset($_REQUEST['mes']) ? $_REQUEST['mes'] : date("m");

	// Obtém o ano da requisição, ou o ano atual caso não seja fornecido
	$ano = isset($_REQUEST['ano']) ? $_REQUEST['ano'] : date("Y");
?>
<div class="banner" style="background-image:url(https://upload.madnezz.com.br/d4a0e9d5130aa1470825b1c18924e4f6)"></div>

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
                                    <option selected>Selecione o Mês</option>
                                    <option value="1">Janeiro</option>
                                    <option value="2">Fevereiro</option>
                                    <option value="3">Março</option>
                                    <option value="4">Abril</option>
                                    <option value="5">Maio</option>
                                    <option value="6">Junho</option>
                                    <option value="7">Julho</option>
                                    <option value="8">Agosto</option>
                                    <option value="9">Setembro</option>
                                    <option value="10">Outubro</option>
                                    <option value="11">Novembro</option>
                                    <option value="12">Dezembro</option>
                            </select>
                            <button class="bt_drop"></button>
                       	</td>
                        <td width="4%"></td>
                        <td>
							<select class="ano" name="ano">
								<option selected>Selecione o ano</option>
								<?php
								// Loop de 2016 até o ano atual
								for ($i = 2016; $i <= date("Y"); $i++) {
									echo '<option value="' . $i . '">' . $i . '</option>';
								}
								?>
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
	</div>	
</div>
<?php include "inc/footer.php"?>