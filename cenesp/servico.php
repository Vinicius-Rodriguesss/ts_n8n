<?php include "inc/header.php"?>

<style>
	.box-servicos {width:21%;height:300px;background-color:#eee;float:left;padding:2%;text-align:center;position:relative;transition:0.5s;cursor:pointer;}
	.box-servicos:hover {opacity:0.5;}
	.box-content {position:absolute;top:50%;margin-top:-90px;width:84%;text-align:center;}
	.box-servicos img {width:100px;}
	.box-servicos:nth-child(2) {background-color:#fff}
	.box-servicos:nth-child(4) {background-color:#fff}
	.box-servicos:nth-child(5) {background-color:#fff}
	.box-servicos:nth-child(7) {background-color:#fff}
	.box-servicos:nth-child(10) {background-color:#fff}
	.box-servicos:nth-child(12) {background-color:#fff}

	@media screen and (max-width: 1400px){
		.box-servicos {height:250px;}
		.box-servicos img {width:70px;}
		.box-servicos h2 {font-size:18px;}
	}

	@media screen and (max-width: 995px){
		.box-servicos {width:46%;}
		.box-content {width:92%;}
		.box-servicos:nth-child(1) {background-color:#eee;}
		.box-servicos:nth-child(2) {background-color:#fff;}
		.box-servicos:nth-child(3) {background-color:#fff;}
		.box-servicos:nth-child(4) {background-color:#eee;}
		.box-servicos:nth-child(5) {background-color:#eee;}
		.box-servicos:nth-child(6) {background-color:#fff;}
		.box-servicos:nth-child(7) {background-color:#fff;}
		.box-servicos:nth-child(8) {background-color:#eee;}
		.box-servicos:nth-child(9) {background-color:#eee;}
		.box-servicos:nth-child(10) {background-color:#fff;}
		.box-servicos:nth-child(11) {background-color:#fff;}
		.box-servicos:nth-child(12) {background-color:#eee;}
	}
</style>


<div class="banner" style="background-image:url(https://upload.madnezz.com.br/73b5b174de8e2b27bb51f31b9151cc87)"></div>

<div id="servico" class="conteudo bg_branco">

	<div class="box-servicos achados">
		<div class="box-content">
			<img src="https://upload.madnezz.com.br/04d4f1d174e0e66d4c221b7e8d4eccda" class="servicos-icon">
			<h2>Academia</h2>
		</div>
	</div>

	<!--
		<div class="box-servicos achados">
			<div class="box-content">
				<img src="https://upload.madnezz.com.br/6758e922680f50343c29a420ef4f9b56" class="servicos-icon">
				<h2>Achados e Perdidos</h2>
			</div>
		</div>
	-->

	<div class="box-servicos agencia">
		<div class="box-content">
			<img src="https://upload.madnezz.com.br/c60b168f55b297b894b5101ebdd75c60" class="servicos-icon">
			<h2>Bancos</h2>
		</div>
	</div>

	<div class="box-servicos cadeiras">
		<div class="box-content">
			<img src="https://upload.madnezz.com.br/36b359ac5fbcc98ea7d88259f5c8f1a3" class="servicos-icon">
			<h2>Cadeiras de Rodas</h2>
		</div>
	</div>

	<!--
		<div class="box-servicos agencia">
			<div class="box-content">
				<img src="https://upload.madnezz.com.br/928ce754de283bbdb9378ab5cfa457e5" class="servicos-icon">
				<h2>Correios</h2>
			</div>
		</div>
	-->

	<div class="box-servicos estacionamento">
		<div class="box-content">
			<img src="https://upload.madnezz.com.br/651dcc2828293d8f0d178d2541ce0c09" class="servicos-icon">
			<h2>Estacionamento</h2>
		</div>
	</div>

	<div class="box-servicos fraldario">
		<div class="box-content">
			<img src="https://upload.madnezz.com.br/c3b705b4e4bdf123e1780dc1ee587c2d" class="servicos-icon">
			<h2>Farmácia</h2>
		</div>
	</div>

	<div class="box-servicos fraldario">
		<div class="box-content">
			<img src="https://upload.madnezz.com.br/7ed4973be8d813d565db4fd7b8eb59f4" class="servicos-icon">
			<h2>Fraldário</h2>
		</div>
	</div>

	<div class="box-servicos fraldario">
		<div class="box-content">
			<img src="https://upload.madnezz.com.br/4f0a0ce6e000558567d32fdd1e54514d" class="servicos-icon">
			<h2>Lotérica</h2>
		</div>
	</div>

	<div style="clear:both;padding-top:5%;"></div>
</div>

<?php include "inc/footer.php"?>