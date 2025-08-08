	<style>	
		.box {width:100%;text-align:center;text-transform:uppercase;}		
		h1, h2 {margin-top:30px;}	
		.footer .step2 .captcha {float: none; margin: 0 auto; display: inline-block; vertical-align: middle; }	
		.footer .step2 .captcha  input[type=text] {width: 100%; text-indent: 0px;}
		.footer .step2 input[type=submit] {position: relative !important; top: 0 !important; right: 0 !important; margin: 0 auto !important; bottom: 0 !important; float: none !important; margin-left: 26px !important; clear: initial !important; display: inline-block; vertical-align: middle;} 

		body.responsivo .footer .step1, body.responsivo .footer .step2 { float: none !important; }	
	</style>
    
    <div class="footer">
    	<div class="footer-header">
            <img src="https://upload.madnezz.com.br/bbad0c179a2444058ca8ac734bf6b5c3" />
			<img src="https://upload.madnezz.com.br/5bfedb4954875fcf2d94f8a6251f2272" />
        	<img src="https://qa-uploads.madnezz.com.br/3fe247e31802ff07f5034608df7e125d" />
			<img src="https://upload.madnezz.com.br/5bfedb4954875fcf2d94f8a6251f2272" />
			<a href="http://www.we9.com.br" target="_new"><img src="https://upload.madnezz.com.br/108316c3e137fad3b9053ada1e2c7bd4"></a>
            <img src="https://upload.madnezz.com.br/5bfedb4954875fcf2d94f8a6251f2272" />
        	<img src="https://upload.madnezz.com.br/ffb489e0e467278d107353b082cfedeb" />
        </div>
		<div class="default" style="overflow:initial;">
			<div class="box tar footer-rg rig">
				<h2 class="ls2 blue" style="padding-bottom: 11px;">Endereço</h2>
				<p class="ttn">Av. Alberto Benassi, nº 2270 - Jardim dos Manacas, Araraquara/SP - CEP: 14.804-300</p>
				<br/>	
                <h2 class="ls2 blue" style="padding-bottom: 11px;">Horários de Funcionamento</h2>
				<ul>
                	<li style="text-align:center;width:100%;">    
                        <span><b>Lojas</b></span><br>
                        <p>Segunda a sabado das 10h às 22h<br>
						Domingo e feriado das 14h às 20h</p><br>

						<span><b>Alimentação</b></span><br>
                        <p>Todos os dias das 11h às 22h</p><br>
						
                        <!-- <span><b>Clínica de Vacinas</b></span><br>
                        <p>Segunda a Sábado das 10h às 18h<br>
						Domingo Fechado</p><br> -->
    
                        <span><b>Cobasi</b></span><br>
                        <p>Segunda a sábado das 09h às 21h45<br>
						Domingo e feriado das 09h às 19h45</p><br>

						<span><b>Semi-novos Unidas</b></span><br>
                        <p>Segunda a sexta das 08h às 18h<br>
						Sábado das 08h às 12h<br>
						Domingo: fechado</p><br>

						<span><b>Inova Academia</b></span><br>
                        <p>Segunda a sexta das 05h às 23h59<br>
						Sábado das 08h às 18h<br>
						Domingo e feriado das 09h às 15h</p><br>
                
                <!-- *Cinemas: conforme programação das salas<br /><br /> -->
                <h1 class="blue" style="margin-top:-10px;">Tel (16) 3335-7286</h1>
                
                <h1 class="blue" style="line-height:30px;">Comercialização</h1><br />
                <p style="text-transform:none;">
                	Telefone/WhatsApp: (11) 95589-9588 | E-mail: comercial@we9.com.br <br />
				</p><br>
				<a href="http://www.we9.com.br" target="_new"><img src="https://upload.madnezz.com.br/108316c3e137fad3b9053ada1e2c7bd4"><br></a>
                
                <h1 class="blue" style="line-height:30px;">Assessoria de Imprensa</h1><br />
                <p style="text-transform:none;">
                	Contato: assessoria@aktus.com.br<br />
					<!-- Telefone: (16) 98107-9585 - (19) 3836-3583  -->
                </p>
			</div>	
		</div>
		<div class="default">
			<div class="box">
				<form class="newsletter form"> <br>
                	<div class="step1">
                        <h2 class="ls2 blue novidades">Fique por dentro das novidades</h2>  
                        <input type="text" id="nome" name="newsletter_nome" value="<?php echo req("cadastro_nome")?>" placeholder="Nome" >
                        <input type="text" id="email" name="newsletter_email" value="<?php echo req("cadastro_email")?>" placeholder="E-mail"> <br />  
                        <input type="text" id="nascimento" name="newsletter_nascimento" value="<?php echo req("cadastro_nascimento")?>" placeholder="Data de Nascimento">
                        <input type="text" id="cpf" name="newsletter_cpf" value="<?php echo req("cadastro_cpf")?>" placeholder="CPF"  >
                        <input type="submit" value="Enviar" class="button" name="ok" > 
					</div>
					<div class="step2 fr" style="display: none; margin:0 auto; float:none; overflow:hidden; display: flex;flex-direction: column;align-items: center;">
						<h2 class="ls2 blue novidades">Fique por dentro das novidades</h2>  
						
						<div class="check_politica" style="display: flex;padding-left: 25px;margin: 20px 0;">
                            <input type="checkbox" name="newsletter_politica" id="newsletter_politica" style="margin: 0;">
                            <label for="newsletter_politica" style="width: auto;height: auto;background-color: #0000;padding: 0 0 0 10px; position: inherit;margin-left: 0;">
                                Li e Concordo com a <a href="<?php echo $link_lgpd; ?>" class="pb-0 desta" target="_blank" style="text-decoration: underline;">Política de privacidade</a> do <?php echo $shopping_nome; ?>
                            </label>
                        </div>

						<td style="text-align: -webkit-right;">
							<script src='https://www.google.com/recaptcha/api.js'></script>
							<div id="recaptcha_newsletter" class="g-recaptcha" data-sitekey="<?php echo $recaptcha; ?>"></div>
						</td>


						<input type="submit" value="Cadastrar" name="signup"  class="cadas" style="margin: 30px auto 0 !important;"/> <br />
					</div>    
					<h2 class="_alerta" style="font-size:16px; width: 100%; text-align:center; margin:15px 0 30px 0;"></h2>
				</form>
			</div>            
            <p class="madnezz">TODOS OS DIREITOS RESERVADOS - JARAGUÁ ARARAQUARA - 2018 - <a href="//madnezz.com.br" target="_new" style="color: inherit;"> BY MADNEZZ</a> </p><br />
            <!--<center><a href='whatsapp://send?text=Fique por dentro das novidades: https://shoppingjaragua.com.br/araraquara/novo/novidade.php'>Teste whatsapp</a></center>-->

	</div>

	</div><!-- GERAL-->
    
    <script>
		
		$.mask.definitions["t"]="[0-9-]";
			$("#cpf").mask("999.999.999-99",{
				placeholder:"_"
			}); 
			$("#nascimento").mask("99/99/9999",{
				placeholder:"_"
		}); 
	
	</script>
	<!-- Init code Huggy.chat //-->
	<!-- <script>
		var $_Huggy = { defaultCountry: '+55', widget_id: '29593' , company: '320742' };
		(function(i,s,o,g,r,a,m){
			i[r]={context:{id:'14873959f261eceb3c08d0d37beec438'}};
			a=o;o=s.createElement(o);
			o.async=1;
			o.src=g;
			m=s.getElementsByTagName(a)[0];
			m.parentNode.insertBefore(o,m); 
		})
		(window,document,'script','https://js.huggy.chat/widget.min.js','pwz');
	</script> -->
	<!-- End code Huggy.chat //-->

    
</body>	