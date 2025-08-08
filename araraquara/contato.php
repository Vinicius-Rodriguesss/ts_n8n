<?php include 'inc/header.php';?>

<div class="banner" style="background-image:url(https://upload.madnezz.com.br/fe179b5c09a5165c70d7ff1ed77148be); background-size:100%;"></div>

<div id="contato" class="conteudo secundaria">
    <div class="col bg_cinza">
        <!--<p class="center pb50">Envie sua mensagem com dúvidas ou sugestões.<br>Sua opinião é muito importante para nós</p>-->
    	<div class="titulo">
			<h1>Fale Conosco</h1>
		</div>            
   	
    	<form action="" method="post" class="form border" id="contato_form">
            <input type="hidden" name="contato_tk" value="<?php echo $shopping_token?>"/>
            <div class="mform">				
                <table>
                    <tr>
                        <td><input type="text" class="input-default fl wd95" name="contato_nome"   id="contato_nome" placeholder="Nome"/></td>
                        <td><input type="text" class="input-default fr wd95" name="contato_email" id="contato_email" placeholder="E-mail"/></td>
                    </tr>
                    <tr>
                        <td><input type="text" class="input-default fl wd95" name="contato_telefone"  id="contato_telefone" placeholder="Telefone" /></td>
                        <td>
                            <select name="contato_assunto" class="select-default fr wd98" id="contato_assunto">
                                <option selected disabled>Selecione</option>
                                <option value="Cinema">Cinema</option>
                                <option value="Dúvidas">Dúvidas</option>
                                <option value="Lojas">Lojas</option>
                                <option value="Outros">Outros</option>
                                <option value="Reclamações">Reclamações</option>
                                <option value="Sugestões">Sugestões</option>
                                <option value="Elogios">Elogios</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td><input type="text" class="input-default fl wd95" name="contato_cpf"   id="contato_cpf" placeholder="CPF"/></td>
                        <td><input type="text" class="input-default fr wd95" name="contato_cidade" id="contato_cidade" placeholder="Cidade"/></td>
                    </tr>
                </table>
            </div>
            <textarea name="contato_mensagem" class="textarea-default" id="contato_mensagem" placeholder="Mensagem"> </textarea> <br><br>
            <table>
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
            <h2 class="contato_alerta text cverde"  style="text-align: right;margin: 20px 0;"></h2>



            <div class=" " > 
                <input type="submit" name="submit" id="submit" class="bt_contato" value=""/>
            </div>
            
		</form>
    </div>
    <div style="clear:both"></div> 
</div>

<?php include 'inc/footer.php';?>