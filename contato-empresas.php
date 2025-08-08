<?php
include 'inc/header.php';
?>

<div class="banner" style="background-image:url(img/banner_grupo3.jpg)"></div>

<div id="contato-empresas" class="fundo_footer">

	<div class="conteudo">
    
    	<h3 class="tac">Grupo Solpanamby</h3>
    	<p class="tac">
        	Avenida Maria Coelho Aguiar, 215 - Jardim São Luís São Paulo - SP 05804-900<br>
            Telefone: +55 (11) 2122-8100<br>
            E-mail: contato@solpanamby.com.br        
        </p>
    
        <form action="" method="post" class="form border" id="contato_form">		
        	<select name="contato_shopping" id="contato_shopping">
            	<option value="">Selecione o Shopping</option>
                <option value="1">Jaraguá Araraquara</option>
                <option value="2">Jaraguá Cenesp</option>
                <!-- <option value="3">Jaraguá Conceição</option> -->
                <option value="4">Jaraguá Indaiatuba</option>
            </select>	
			<input type="text" name="contato_nome"   id="contato_nome" placeholder="Nome"/>
            <input type="text" name="contato_email" id="contato_email" placeholder="E-mail"/>
			<input type="text" name="contato_telefone"  id="contato_telefone" placeholder="Telefone" />
            <select name="contato_assunto" id="contato_assunto">
            	<option selected>Assunto</option>
                <option value="Cinema">Cinema</option>
                <option value="Dúvidas">Dúvidas</option>
                <option value="Lojas">Lojas</option>
                <option value="Outros">Outros</option>
                <option value="Reclamações">Reclamações</option>
                <option value="Sugestões">Sugestões</option>
                <option value="Elogios">Elogios</option>
            </select>            
            <textarea name="contato_mensagem" id="contato_mensagem" placeholder="Mensagem"> </textarea>
                            
            <div id="captcha"></div>
            <div class="contato_alerta"></div><br>
            <input type="submit" name="submit" id="submit" value="Enviar" class="enviar_form"/>
            
		</form>
        
        <div style="clear:both;"></div>
	</div>
    
    <div class="logo_footer">
	    <img src="img/logo.png">
    </div>
    
    
</div>


<?php
include 'inc/footer.php';
?>