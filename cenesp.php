<?php
include 'inc/header.php';
?>

<div id="shopping" class="fundo_footer">

<div class="banner" style="background-image:url(img/banner_cenesp4.jpg)"></div>

	<div class="conteudo">
               
        <div class="esquerda">
            <div class="titulo_texto"><h2>Uma história com você</h2></div>
            <p>
            	Inaugurado em 15 de abril de 1977, o Shopping Jaraguá CENESP, empreendimento do Grupo Sol Panamby, está localizado dentro do maior complexo empresarial da América Latina, o Centro Empresarial de São Paulo (Cenesp). <br>
                O Shopping Jaraguá CENESP está localizado próximo da Marginal Pinheiros e Avenida Santo Amaro, principais vias públicas da região. Além de estar próximo do Terminal João Dias, que é de fácil acesso para o Metrô e ônibus. <br>
                Com um fluxo diário de 15.000 pessoas, este centro de compras possui 107 estabelecimentos, sendo 40 lojas de alimentação (restaurantes e lanchonetes), 54 lojas de vestuário e serviços, 9 agências bancárias e 4 consultórios médicos/odontológicos. <br>
                Nosso cliente pode contar ainda com a ampla estrutura do complexo, além de uma área verde de 185 mil m², posto de combustíveis e heliponto. 
                O Shopping Jaraguá CENESP é um local completo e prático para o dia-a-dia dos nossos clientes. <br><br><br>
            </p>
            
            <h3 class="grey">Superintendente:<br>Ricardo Soares</h3><br><br>
            
            <a href="https://www.shoppingjaragua.com.br/cenesp/" target="_new"><h3 class="blue externo">Acesse o site</h3></a>
        </div>
        
        <div class="direita">
            <div class="titulo_texto"><h2>Ficha Técnica</h2></div>
           
           	<div class="table">
            	<div class="cols1" style="background-image:url(img/icon/abl.png);"></div>
                <div class="cols2"><p>11.611,52 m² de ABL</p></div>
                
                <div class="cols1" style="background-image:url(img/icon/lojas.png);"></div>
                <div class="cols2"><p>Mix qualificado de lojas, com marcas de renome no mercado nacional;</p></div>
                
                <div class="cols1" style="background-image:url(img/icon/eventos.png);"></div>
                <div class="cols2"><p>100m² de praça de eventos com estrutura para acomodar atrações de médio porte</p></div>
                
                <div class="cols1" style="background-image:url(img/icon/carro.png);"></div>
                <div class="cols2"><p>Grande oferta de serviços e conveniência com marcas alinhadas ao perfil do público</p></div>                
                
                <div style="clear:both;"></div>   
            </div>
        </div>
           
        <div style="clear:both;"></div> 
    </div>
    
    <div class="galeria">
    	<h1 class="blue">Galeria de Fotos</h1>
        <h2 class="green">Shopping Jaraguá Cenesp</h2><br>
        
        <ul class="fotos">
        	<li><a href="img/galeria/cenesp/foto1.jpg" rel="lightbox[galeria]"><img src="img/galeria/cenesp/foto1.jpg"></a></li>
            <li><a href="img/galeria/cenesp/foto2.jpg" rel="lightbox[galeria]"><img src="img/galeria/cenesp/foto2.jpg"></a></li>
            <li><a href="img/galeria/cenesp/foto3.jpg" rel="lightbox[galeria]"><img src="img/galeria/cenesp/foto3.jpg"></a></li>
            <li><a href="img/galeria/cenesp/foto4.jpg" rel="lightbox[galeria]"><img src="img/galeria/cenesp/foto4.jpg"></a></li>
            <li><a href="img/galeria/cenesp/foto5.jpg" rel="lightbox[galeria]"><img src="img/galeria/cenesp/foto5.jpg"></a></li>
            <li><a href="img/galeria/cenesp/foto6.jpg" rel="lightbox[galeria]"><img src="img/galeria/cenesp/foto6.jpg"></a></li>
            <li><a href="img/galeria/cenesp/foto7.jpg" rel="lightbox[galeria]"><img src="img/galeria/cenesp/foto7.jpg"></a></li>
            <li><a href="img/galeria/cenesp/foto8.jpg" rel="lightbox[galeria]"><img src="img/galeria/cenesp/foto8.jpg"></a></li>
            <li><a href="img/galeria/cenesp/foto9.jpg" rel="lightbox[galeria]"><img src="img/galeria/cenesp/foto9.jpg"></a></li>
      	</ul>
 
	    <h3 class="blue">Horários de Funcionamento</h3>
        
        <div class="horarios">
        	<div class="esquerda">
	        	<h4 class="grey">Segunda a Sábado</h4><br>
                <p>
                	Lojas: Das 9h às 19h<br>
                    Cafeteria/Conveniências: Das 7h às 19h<br>
                </p>                 
            </div>
            
            <div class="direita">
	        	<h4 class="grey">Domingos e Feriados</h4><br>
                <p>
                	Lojas: Das 13h30 às 19h30<br>
                    Cafeteria/Conveniências: Das 11h às 22h<br>
                </p><br> <br>               
            </div>
            <div style="clear:both;"></div>
        </div>
        
        <h3 class="green">Tel: (11) 3741-4252</h3>
    
    
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
                	<input type="submit" value="Cadastrar" name="signup"   class="cadas" />
				</div>      
            	<h4 class="_alerta green"></h4>
            </form>            
        </div>
        <div class="direita">
        	<h3 class="grey">Conheça nossas redes sociais</h3>
            <a href="https://www.facebook.com/shoppingjaraguacenesp/" target="_new"><img src="img/facebook_footer.png"></a>
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