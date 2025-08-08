<?php include 'inc/header.php'; ?>



<?php if (req("alerta")<>"") { ?>
	<script type="text/javascript">window.alert('<?php echo req("alerta")?>');</script>
<?php }

// Protocolo (HTTP ou HTTPS)
$protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http';

// URL completa (incluindo domínio)
$baseUrl = $protocol . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['SCRIPT_NAME']; // Base URL sem parâmetros

// Parâmetros da URL (se houver)
$queryParams = $_SERVER['QUERY_STRING']; // Ex: ?param1=value1&param2=value2

// Se houver parâmetros, adicionar à URL
$fullUrl = '';
if ($queryParams) {
    $fullUrl = $baseUrl . '?' . $queryParams;
} else {
    $fullUrl = $baseUrl; // Se não houver parâmetros, usar apenas a base URL
}

?>
<div class="banner" style="background-image:url(https://upload.madnezz.com.br/15e2d3428a2adefb07b9c4a38a1beb63)"></div>

<div id="oportunidade" class="conteudo secundaria">
    <div class="bg_cinza">
        <p class="center pb50">Deixe seu currículo com a gente!<br>Suas informações ficarão arquivadas para consulta dos lojistas e administração do shopping.</p>
    	<div class="titulo">
			<h1>Envie seu currículo</h1>
		</div>            
   	
        <form action="" method="post" class="form border" id="oportunidade_form"  enctype="multipart/form-data">
        	<input type="hidden" name="tk" value="<?php echo $shopping_token?>"/>
			<input type="hidden" name="tp" value="2"/>
			<input type="hidden" name="origem" value="<?php echo $fullUrl?>"/>
            <div class="mform">				
                <table>
                    <tr>
                        <td colspan="2">
                        	<select name="area" id="area" class="select-default fr wd100">
                                <option value="0" selected disabled>Escolha uma área de interesse</option>                                
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
                        	<label id="lblAnexo" for="anexo">Envie seu currículo</label>
                            <input type="file" class="input-default fl wd95" name="anexo" id="anexo">
                            <button class="bt_anexo">Procurar</button>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <div class="check_politica" style="display: flex;padding-left: 25px;">
                                <input type="checkbox" name="politica" id="politica" style="margin: 0;">
                                <label for="politica" style="width: auto;height: auto;background-color: #0000;padding: 0 0 0 10px;">
                                    Li e Concordo com a <a href="<?php echo $link_lgpd; ?>" class="pb-0 desta" target="_blank" style="text-decoration: underline;">Política de privacidade</a> do <?php echo $shopping_nome; ?>
                                </label>
                            </div>
                        </td>
                        <td style="text-align: -webkit-right;">
                            <script src='https://www.google.com/recaptcha/api.js'></script>
                            <div class="g-recaptcha" data-sitekey="<?php echo $recaptcha; ?>"></div>
                        </td>
                    </tr>
                </table>
            </div>

            
            <br/>

            



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
        <ul class="vagas_lista"></ul>
    </div> 
    <div style="clear:both"></div>
</div>	


<script>
	//TESTE $("#area option[value='1']").remove();	
</script>


<?php include 'inc/footer.php'; ?>