<?php include 'inc/header.php'; ?>

<div class="banner" style="background-image:url(https://upload.madnezz.com.br/2ba79ba3262f1ff3cf171a349cb9e239?v=1.1);background-position:left;"></div>

<div id="shopping" class="conteudo">
	<div class="bg_cinza">
    	<div class="col">        
        	<div class="titulo">
				<h1>Lorem ipsum</h1>
			</div>            
        	<p class="justify">            
            	Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<br><br>
                
Ao longo desses anos, o Shopping Jaraguá Araraquara se mostrou uma aposta acertada para os empreendedores e uma das principais opções de compras, lazer e entretenimento para a população de Araraquara e região inaugurando sua terceira ampliação em 2015.<br><br>

Localizado em uma região considerada, hoje, polo técnico e de inovação, com mais de um milhão de habitantes e intensos investimentos, o Shopping Jaraguá Araraquara acompanha o próspero crescimento e desenvolvimento do centro paulista retribuindo a confiabilidade do público de Araraquara e região em seus consagrados 15 anos de constante crescimento e inovação.<br><br><br          
            </p>            
       	</div>
  	</div>   
    
   
</div>

<script type="text/javascript">

//INSTAGRAM HOME
		
	$(function(){
		setInterval(function(){
			$(".galeria").animate({'margin-left':-$(".galeria li").eq(0).width()},function(){				
				$(".galeria").append($(".galeria li").eq(0));
				$(".galeria").css({'margin-left':'0'});				
			});
		},3000);
	});	

</script>

<?php include 'inc/footer.php'; ?>