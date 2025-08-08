<?php
include 'inc/header.php';
?>

<div id="shopping" class="fundo_footer">

<div class="banner" style="background-image:url(img/banner_indaiatuba3.jpg)"></div>

	<div class="conteudo">
               
        <div class="esquerda">
            <div class="titulo_texto"><h2>Uma história com você</h2></div>
            <p>
            	O Shopping Jaraguá Indaiatuba foi inaugurado no dia 27 de setembro de 1993. O empreendimento do Grupo Sol Panamby conta com 77 operações, entre lojas satélites e quiosques, 260 vagas de estacionamento e 50 vagas para motos, e oferece uma completa infra-estrutura para os seus clientes, com praça de alimentação, 4 salas de cinema, sendo uma 3D, fraldário , caixas eletrônicos, entre outros serviços.<br><br><br>
            </p>
            
            <h3 class="grey">Superintendente:<br>Ricardo Soares</h3><br><br>
            
            <a href="https://www.shoppingjaragua.com.br/indaiatuba/" target="_new"><h3 class="blue externo">Acesse o site</h3></a>
        </div>
        
        <div class="direita">
            <div class="titulo_texto"><h2>Ficha Técnica</h2></div>
           
           	<div class="table">
            	<div class="cols1" style="background-image:url(img/icon/abl.png);"></div>
                <div class="cols2"><p>7.434,21 m² de ABL</p></div>
                
                <div class="cols1" style="background-image:url(img/icon/alimentacao.png);"></div>
                <div class="cols2"><p>Praça de Alimentação completa</p></div>
                
                <div class="cols1" style="background-image:url(img/icon/lojas.png);"></div>
                <div class="cols2"><p>Mix diversificado de lojas</p></div>
                
                <div class="cols1" style="background-image:url(img/icon/carro.png);"></div>
                <div class="cols2"><p>260 vagas de estacionamento</p></div>
                
                <div class="cols1" style="background-image:url(img/icon/local.png);"></div>
                <div class="cols2"><p>Localização privilegiada no centro da cidade</p></div>   
                
                <div class="cols1" style="background-image:url(img/icon/cinema.png);"></div>
                <div class="cols2"><p>Cinema com 04 salas modernas, com sistema 3D</p></div>               
                
                <div style="clear:both;"></div>   
            </div>
        </div>
           
        <div style="clear:both;"></div> 
    </div>
    
    <div class="galeria">
    	<h1 class="blue">Galeria de Fotos</h1>
        <h2 class="green">Shopping Jaraguá Indaiatuba</h2><br>
        
        <ul class="fotos">
        	<li><a href="img/galeria/indaiatuba/foto1.jpg" rel="lightbox[galeria]"><img src="img/galeria/indaiatuba/foto1.jpg"></a></li>
            <li><a href="img/galeria/indaiatuba/foto2.jpg" rel="lightbox[galeria]"><img src="img/galeria/indaiatuba/foto2.jpg"></a></li>
            <li><a href="img/galeria/indaiatuba/foto3.jpg" rel="lightbox[galeria]"><img src="img/galeria/indaiatuba/foto3.jpg"></a></li>
            <li><a href="img/galeria/indaiatuba/foto4.jpg" rel="lightbox[galeria]"><img src="img/galeria/indaiatuba/foto4.jpg"></a></li>
            <li><a href="img/galeria/indaiatuba/foto5.jpg" rel="lightbox[galeria]"><img src="img/galeria/indaiatuba/foto5.jpg"></a></li>
            <li><a href="img/galeria/indaiatuba/foto6.jpg" rel="lightbox[galeria]"><img src="img/galeria/indaiatuba/foto6.jpg"></a></li>
      	</ul>
 
	    <h3 class="blue">Horários de Funcionamento</h3>
        
        <div class="horarios">
        	<div class="esquerda">
	        	<h4 class="grey">Segunda a Sábado</h4><br>
                <p>
                	Lojas: Das 10h às 22h<br>
                    Alimentação e Lazer: Das 11h às 22h<br>	
                    Farmácia: Das 8h às 22h<br>
                    Cinemas: Conforme programação das salas
                </p>                 
            </div>
            
            <div class="direita">
	        	<h4 class="grey">Domingos e Feriados</h4><br>
                <p>
                	Lojas: Das 12h às 18h<br>
					Alimentação e Lazer: das 11h às 22h<br>
                    Cinemas: Conforme Programação das Salas
                </p><br><br><br>
            </div>
            <div style="clear:both;"></div>
        </div>
        
        <h3 class="green">Tel: (19) 3875-8933</h3>
    
    
    </div>
    
    <div class="news">
    	<div class="esquerda">
        	<h3 class="green">Fique por dentro das novidades</h3>
            <form class="newsletter form"> <br>
                <div class="step1">               
                    <input type="text" id="nome" name="nome" value="<?php echo req("cadastro_enome")?>" placeholder="Nome:">
                    <input type="text" id="email" name="email" value="<?php echo req("cadastro_email")?>" placeholder="E-mail:">
                    <input type="submit" value="" name="signup"  class="cadas" />
                </div>
                <div class="step2 fr" style="display: none; margin:0 auto; float:none; overflow:hidden;">
                <div class="captcha"></div>
                	<input type="submit" value="Cadastrar" name="signup" class="cadas" />
				</div>      
            	<h4 class="_alerta green"></h4>
            </form>            
        </div>
        <div class="direita">
        	<h3 class="grey">Conheça nossas redes sociais</h3>
            <a href="https://www.facebook.com/ShoppingJaraguaIndaiatuba" target="_new"><img src="img/facebook_footer.png"></a>
            <a href="https://www.instagram.com/shopjaraguaindaiatuba/" target="_new"><img src="img/instagram_footer.png"></a>
        </div>    
        <div style="clear:both;"></div> 
    </div>
        
    <div style="clear:both;"></div>
        
    <div class="logo_footer">
    	<img src="img/logo.png">
    </div>
    
    
</div>

<script type="text/javascript">

//GALERIA DE FOTOS
		
	$(function(){
		setInterval(function(){
			$(".fotos").animate({'margin-left':-$(".galeria li").eq(0).width()},function(){				
				$(".fotos").append($(".galeria li").eq(0));
				$(".fotos").css({'margin-left':'0'});				
			});
		},3000);
	});	

</script>

<?php
include 'inc/footer.php';
?>