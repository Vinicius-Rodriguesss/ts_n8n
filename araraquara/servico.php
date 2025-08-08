<?php include 'inc/header.php'; ?>

<style>
	:root {
  		--colorone: rgb(255, 255, 255);
  		--colortwo: rgb(238, 238, 238); /* Grey - Cinza*/
	}
	.box-servicos {width:21%;height:300px;background-color:var(--colortwo);float:left;padding:2%;text-align:center;position:relative;transition:0.5s;cursor:pointer;}
	.box-servicos:hover {opacity:0.5;}
	.box-content {position:absolute;top:50%;margin-top:-90px;width:84%;text-align:center;}
	.box-servicos img {width:100px;}

	.servico_item:first-child .box-servicos {background-color:var(--colorone)}
	.servico_item:nth-child(3) .box-servicos {background-color:var(--colorone)}
	.servico_item:nth-child(6) .box-servicos {background-color:var(--colorone)}
	.servico_item:nth-child(8) .box-servicos {background-color:var(--colorone)}
	.servico_item:nth-child(9) .box-servicos {background-color:var(--colorone)}
	.servico_item:nth-child(11) .box-servicos {background-color:var(--colorone)}
	.servico_item:nth-child(14) .box-servicos {background-color:var(--colorone)}
	.servico_item:nth-child(16) .box-servicos {background-color:var(--colorone)}


	@media screen and (max-width: 1400px){
		.box-servicos {height:250px;}
		.box-servicos img {width:70px;}
		.box-servicos h2 {font-size:18px;}
	}

	@media screen and (max-width: 995px){
		.box-servicos {width:46%; background-color:var(--colorone);}
		.box-content {width:92%;}
		.servico_item:first-child .box-servicos {background-color:var(--colortwo)}
		.servico_item:nth-child(4) .box-servicos{background-color:var(--colortwo);}
		.servico_item:nth-child(5) .box-servicos{background-color:var(--colortwo);}
		.servico_item:nth-child(8) .box-servicos{background-color:var(--colortwo);}
		.servico_item:nth-child(9) .box-servicos{background-color:var(--colortwo);}
		.servico_item:nth-child(11) .box-servicos{background-color:var(--colortwo);}
		.servico_item:nth-child(14) .box-servicos{background-color:var(--colortwo);}
		.servico_item:nth-child(16) .box-servicos{background-color:var(--colortwo);}
		
	}

	/*Modal Serviços*/
	.box-hidded {width: 100vw;height: 100vh;background-color: rgba(0, 0, 0, 0.61);position: fixed;z-index: 99999999999999999999;display:none;top:0; left:0;}
	img.objeto2 {width: 61%;position: absolute;margin: 40px auto;left: 0;margin-left: 20%;margin-top: 10%;background-color:#fff;display: none;}
	.responsivo img.objeto2 {width: 100%;position: absolute;margin: 40px auto;left: 0;/* margin-left: 20%; */margin-top: 0;display: none;}
	.texto-servico{margin-left:auto;margin-right:auto;width:40%;height:auto;padding:50px;background-color:#fff;margin-top:10%;font-size:14px;line-height:18px;font-family:'Open Sans', sans-serif;}
	.texto-servico h2 {margin-top:0;}
	body.responsivo .texto-servico{max-height:70%;overflow-y:auto;} 
	body.responsivo li.servicos {margin-left:10px;}

</style>

<div class="banner" style="background-image:url(https://upload.madnezz.com.br/256807b56410ffdfcefd794dfd7aedc9)"></div>

<div id="servico" class="conteudo bg_branco">

	<!-- Será inserido a lista de lojas cadastradas como serviço -->
	<div class="lista_servico"></div>
	<!-- Fim da Inserção -->

	<div style="clear:both;padding-top:5%;"></div>

</div>

<?php include 'inc/footer.php'; ?>