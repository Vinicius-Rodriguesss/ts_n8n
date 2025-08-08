<?php
include 'inc/header.php';
?>


<div class="banner" style="background-image:url(img/banner_grupo2.jpg)"></div>

<div id="contato-empresas" class="fundo_footer">

	<div class="conteudo">
    
    	<h3 class="tac">Grupo Solpanamby</h3>
    	<p class="tac">
        	Quer abrir uma loja, um quiosque ou divulgar em um de nossos Shoppings?<br>
            Preencha o formulário abaixo.  
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
                <option value="Locação de Lojas">Locação de Lojas</option>
                <option value="Locação de Quiosques">Locação de Quiosques</option>
                <option value="Divulgar">Divulgar</option>
                <option value="Outros">Outros</option>
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
