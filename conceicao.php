<?php
include 'inc/header.php';
?>

<div id="shopping" class="fundo_footer">

<div class="banner" style="background-image:url(img/banner_conceicao4.jpg)"></div>

	<div class="conteudo">
               
        <div class="esquerda">
            <div class="titulo_texto"><h2>Uma história com você</h2></div>
            <p>
            	O Shopping Jaraguá Conceição foi inaugurado em dezembro de 1996, em Campinas, interior de São Paulo. Hoje, recebe um fluxo diário de 6.500 pessoas. O empreendimento do Grupo Sol Panamby com 37 operações de lojas satélites e 460 vagas de estacionamento, o Shopping Jaraguá oferece uma completa infra-estrutura para os seus clientes, contando com Praça de Alimentação com várias opções gastronômicas, Salão de Cabeleireiro, Agência Banco Bradesco, Papelaria, Lotérica, Caixas Eletrônicos e Casas de Câmbio, entre outros. <br><br><br>
            </p>
            
            <h3 class="grey">Superintendente:<br>Ricardo Soares</h3><br><br>
            
            <a href="https://www.shoppingjaragua.com.br/conceicao/" target="_new"><h3 class="blue externo">Acesse o site</h3></a>
        </div>
        
        <div class="direita">
            <div class="titulo_texto"><h2>Ficha Técnica</h2></div>
           
           	<div class="table">
            	<div class="cols1" style="background-image:url(img/icon/abl.png);"></div>
                <div class="cols2"><p>1.875,60 m² de ABL</p></div>
                
                <div class="cols1" style="background-image:url(img/icon/lojas.png);"></div>
                <div class="cols2"><p>Mix de lojas</p></div>
                
                <div class="cols1" style="background-image:url(img/icon/alimentacao.png);"></div>
                <div class="cols2"><p>Praça de Alimentação completa</p></div>
                
                <div class="cols1" style="background-image:url(img/icon/carro.png);"></div>
                <div class="cols2"><p>460 vagas de estacionamento</p></div>
                
                <div class="cols1" style="background-image:url(img/icon/local.png);"></div>
                <div class="cols2"><p>Localização privilegiada no centro da cidade</p></div>                
                
                <div style="clear:both;"></div>   
            </div>
        </div>
           
        <div style="clear:both;"></div> 
    </div>
    
    <div class="galeria">
    	<h1 class="blue">Galeria de Fotos</h1>
        <h2 class="green">Shopping Jaraguá Conceição</h2><br>
        
        <ul class="fotos">
        	<li><a href="img/galeria/conceicao/foto1.jpg" rel="lightbox[galeria]"><img src="img/galeria/conceicao/foto1.jpg"></a></li>
            <li><a href="img/galeria/conceicao/foto2.jpg" rel="lightbox[galeria]"><img src="img/galeria/conceicao/foto2.jpg"></a></li>
            <li><a href="img/galeria/conceicao/foto3.jpg" rel="lightbox[galeria]"><img src="img/galeria/conceicao/foto3.jpg"></a></li>
            <li><a href="img/galeria/conceicao/foto4.jpg" rel="lightbox[galeria]"><img src="img/galeria/conceicao/foto4.jpg"></a></li>
            <li><a href="img/galeria/conceicao/foto5.jpg" rel="lightbox[galeria]"><img src="img/galeria/conceicao/foto5.jpg"></a></li>
            <li><a href="img/galeria/conceicao/foto6.jpg" rel="lightbox[galeria]"><img src="img/galeria/conceicao/foto6.jpg"></a></li>

      	</ul>
 
	    <h3 class="blue">Horários de Funcionamento</h3>
        
        <div class="horarios">
        	<div class="esquerda">
	        	<h4 class="grey">Segunda a Sábado</h4><br>
                <p>
                	Lojas: Das 9h às 19h<br>
                    Alimentação: Das 11h às 16h<br>
                </p>                 
            </div>
            
            <div class="direita">
	        	<h4 class="grey">Domingos e Feriados</h4><br>
                <p>
                	Fechado
                </p><br><br><br>              
            </div>
            <div style="clear:both;"></div>
        </div>
        
        <h3 class="green">Tel: (19) 3512-8999<br>Centro Empresarial Conceição: (19) 3512-8000</h3>
    
    
    </div>
    
    <div class="news">
    	<div class="esquerda">
        	<h3 class="green">Fique por dentro das novidades</h3>
            <form class="newsletter form"> <br>
                <div class="step1">               
                    <input type="text" id="nome" name="nome" value="<?php echo req("cadastro_enome")?>" placeholder="Nome:">
                    <input type="text" id="email" name="email" value="<?php echo req("cadastro_email")?>" placeholder="E-mail:">
                    <input type="submit" value="" name="signup"   class="cadas" />
                </div>
                <div class="step2 fr" style="display: none; margin:0 auto; float:none; overflow:hidden;">
                <div class="captcha"></div>
                	<input type="submit" value="Cadastrar" name="signup"  class="cadas" />
				</div>      
            	<h4 class="_alerta green"></h4>
            </form>            
        </div>
        <div class="direita">
        	<h3 class="grey">Conheça nossas redes sociais</h3>
            <a href="https://www.facebook.com/shoppingjaraguaconceicao?fref=ts" target="_new"><img src="img/facebook_footer.png"></a>
            <a href="https://www.instagram.com/jaraguaconceicao/" target="_new"><img src="img/instagram_footer.png"></a>
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