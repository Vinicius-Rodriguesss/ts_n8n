<style>
	.box {
		width: 100%;
		text-align: center;
		text-transform: uppercase;
	}

	h1,
	h2 {
		margin-top: 30px;
	}

	.footer .step2 .captcha {
		float: none;
		margin: 0 auto;
		display: inline-block;
		vertical-align: middle;
	}

	.footer .step2 .captcha input[type=text] {
		width: 100%;
		text-indent: 0px;
	}

	.footer .step2 input[type=submit] {
		position: relative !important;
		top: 0 !important;
		right: 0 !important;
		margin: 0 auto !important;
		bottom: 0 !important;
		float: none !important;
		/* margin-left: 26px !important; */
		clear: initial !important;
		display: inline-block;
		vertical-align: middle;
	}

	body.responsivo .footer .step1,
	body.responsivo .footer .step2 {
		float: none !important;
	}

	.footer .horario-esquerda {
		margin-left: 27%;
		text-align: center;
	}
</style>

<div class="footer">
	<div class="footer-header">
		<img src="https://upload.madnezz.com.br/9785c10719edfbbef695dac544b93a83" />
		<img src="https://upload.madnezz.com.br/89703d1bb11715ca0bd20950c125ea18" />
		<img src="https://upload.madnezz.com.br/6b95a16679769638856ba026da0c4545" />
		<img src="https://upload.madnezz.com.br/89703d1bb11715ca0bd20950c125ea18" />
		<a href="http://www.we9.com.br" target="_new"><img
				src="https://upload.madnezz.com.br/bca48dab12c83f88c6b28842c26d8627"
				style="width:200px!important;"></a><br>
	</div>
	<div class="default font2" style="overflow:initial;">
		<div class="box tar footer-rg rig">
			<h2 class="ls2 blue" style="padding-bottom: 11px;">Endereço</h2>
			<p class="ttn">Avenida Maria Coelho Aguiar, nº 215 - Jardim São Luiz, São Paulo/SP - CEP: 05805-000</p>
			<br />
			<h2 class="ls2 blue" style="padding-bottom: 11px;">Horários de Funcionamento</h2>
			<ul>
				<li class="horario-esquerda">
					<h3 class="green">Segunda à Sexta</h3><br />
					Lojas: das 09:00 às 19:00<br />
					Cafeterias/Conveniências: 07:00 às 19:00<br />
				</li>
				<!--
						<li style="text-align:left;">
							<h3 class="green">Domingos e Feriados</h3><br />
							Lojas: das xx às xx<br />
							Alimentação: das xx às xx<br />
						</li>
					-->
			</ul>
			<h1 class="blue" style="margin-top:-10px;">Tel (11) 3741-4252</h1>

			<h1 class="blue" style="line-height:30px;">GESTÃO E COMERCIALIZAÇÃO</h1><br />
			<p style="text-transform:none;">
				<a href="http://www.we9.com.br" target="_new"><img
						src="https://upload.madnezz.com.br/4a56906bd16688ce3b66290a13a7438c"
						style="width:200px!important;"></a><br>
				Telefone/WhatsApp: <a href="tel:5511955899588">(11) 95589-9588</a> - E-mail: <a
					href="mailto:comercial@we9.com.br">comercial@we9.com.br</a>
			</p>
		</div>
	</div>
	<div class="default">
		<div class="box">
			<form class="newsletter"> <br>
				<div class="step1">
					<h2 class="ls2 blue novidades">Fique por dentro das novidades</h2>
					<input type="text" id="nome" name="nome" value="<?php echo req("cadastro_nome") ?>"
						placeholder="Nome">
					<input type="text" id="email" name="email" value="<?php echo req("cadastro_email") ?>"
						placeholder="E-mail">
					<input type="submit" value="Enviar" id="ok1" class="button" name="ok">
				</div>
				<div class="step2 fr"
					style="display: none; margin:0 auto; float:none; overflow:hidden; display: flex; flex-direction: column; align-items: center;">
					<div id="captcha">
						<script src='https://www.google.com/recaptcha/api.js'></script>
						<div class="g-recaptcha" style="margin-bottom: 30px;"
							data-sitekey="6Le4UeQqAAAAABXll8sLUanYPyqtPSHbA_TveIMe"></div>
					</div>
					<input type="submit" value="Cadastrar" id="ok2" name="signup" class="cadas" /> <br>

				</div>
				<h2 class="_alerta" style="font-size:16px; width: 100%; text-align:center; margin:15px 0px;"></h2>
			</form>
		</div>

		<p class="madnezz">TODOS OS DIREITOS RESERVADOS - JARAGUÁ CENESP - 2018 - <a href="//madnezz.com.br"
				target="_new" style="color: inherit;"> BY MADNEZZ</a> </p><br />

	</div>

</div><!-- GERAL-->
</body>