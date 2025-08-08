<?php include 'inc/header.php'; ?>

<div class="banner" style="background-image:url(https://upload.madnezz.com.br/480e4696845471e9a98a9f601a229248)"></div>

<div id="shopping" class="conteudo">
	<div class="bg_cinza">
    	<div class="col">        
        	<div class="titulo">
				<h1>POLÍTICA DE PRIVACIDADE E PROTEÇÃO DE DADOS PESSOAIS</h1>
			</div>            
        	<p class="justify">            
            <?php echo $politica_lgpd?> 
         </p>            

         
               
                 
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