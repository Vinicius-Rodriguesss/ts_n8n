<?php include "inc/header.php"?>


<?php if (req("alerta")<>"") { ?>
	<script type="text/javascript">window.alert('<?php echo req("alerta")?>');</script>
<?php } ?>

<div class="banner" style="background-image:url(https://upload.madnezz.com.br/e0eb3d4555616c3f75c9f428b2627899)"></div>

<div id="oportunidade" class="conteudo secundaria">
    <div class="bg_cinza font2">
        <p class="center pb50">Deixe seu currículo com a gente!<br>Suas informações ficarão arquivadas para consulta dos lojistas e administração do shopping.</p>
    	<div class="titulo">
			<h1>Envie seu currículo</h1>
		</div>            
   	
        <form  class="border" id="oportunidade_form">
        	<input type="hidden" name="tk" value="<?php echo $shopping_token?>"/>
			<input type="hidden" name="tp" value="2"/>
            <input type="hidden" name="vaga" value=""/>
            <input type="hidden" name="vaga_id" value=""/>
            <input type="hidden" name="origem" value="https://shoppingjaragua.com.br/cenesp/trabalheconosco.php?s=1" />
            <div class="mform">				
                <table>
                    <tr>
                        <td colspan="2">
                        	<select name="area" id="area" class="select-default fr wd100">
                                <option selected disabled>Escolha uma área de interesse</option>                                
                            </select>
                            <button class="bt_drop2"></button>
                        </td>
                    </tr>
                    <tr>
                        <td><input type="text" class="input-default fl wd95" name="nome" placeholder="Nome"/></td>
                        <td><input type="text" class="input-default fr wd95" name="email" placeholder="E-mail"/></td>
                    </tr>
                    <tr>
                        <td><input type="text" class="input-default fl wd95" name="cpf"  id="cpf" placeholder="CPF" /></td>
                        <td>
                        	<label class="anexo" for="anexo"><span>Envie seu currículo</span></label>
                            <input type="file" class="input-default fl wd95" name="anexo" id="anexo">
                            <button class="bt_anexo">Procurar</button>
                        </td>
                    </tr>
                </table>
            </div>

              <div id="captcha">
                <script src='https://www.google.com/recaptcha/api.js'></script>
                <div class="g-recaptcha" data-sitekey="6Le4UeQqAAAAABXll8sLUanYPyqtPSHbA_TveIMe"></div>
            </div>
            <div class=" "> 
                <input type="submit" name="submit" />
            </div>
        </form>
        <div style="clear:both"></div>
	</div>
</div>
    
<div class="bg_branco">
    <div class="titulo">
        <h1 class="vagas_quantidade"></h1>
        <ul class="vagas_lista"><div style="clear:both"></div></ul>
    </div>     
</div>	

<?php include "inc/footer.php"?>
<script type="text/javascript" src="js/oportunidade.js"></script>