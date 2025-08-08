<?php
include 'inc/header.php';
?>
<script type="text/javascript">

	//GRUPO SOL PANAMBY
	$(function(){
		$.ajax({url:apis.busca+"?shopping_id=201&busca=<?php echo req("busca")?>",dataType:"json",
		success: function(data) {
			$('.conteudo ol.soldopanamby').append('<h3>Grupo SolPanamby</h3>');
			$.each(data,function(i,busca){
				$(".conteudo ol.soldopanamby").append('<li><p><a href="http://shoppingjaragua.com.br/araraquara/'+busca.link+'" target="_new">'+busca.nome+'</a></p></li>');
			  });
		  },
		  error: function() {
			$(".conteudo ol.soldopanamby").append('<h3>Grupo SolPanamby</h3><p>Nada encontrado.</p>');
		  }
		})
	});

	//JARAGUÁ ARARAQUARA
	$(function(){
		$.ajax({url:apis.busca+"?shopping_id=204&busca=<?php echo req("busca")?>",dataType:"json",
		success: function(data) {
			$('.conteudo ol.araraquara').append('<h3>Shopping Jaraguá Araraquara</h3>');
			$.each(data,function(i,busca){
				$(".conteudo ol.araraquara").append('<li><p><a href="http://shoppingjaragua.com.br/araraquara/'+busca.link+'" target="_new">'+busca.nome+'</a></p></li>');
			   });
		  },
		  error: function() {
			$(".conteudo ol.araraquara").append('<h3>Shopping Jaraguá Araraquara</h3><p>Nada encontrado.</p>');
		  }
		})
	});
	
	//JARAGUÁ CENESP
	$(function(){
		$.ajax({url:apis.busca+"?shopping_id=221&busca=<?php echo req("busca")?>",dataType:"json",
		success: function(data) {
			$('.conteudo ol.cenesp').append('<h3>Shopping Jaraguá Cenesp</h3>');
			$.each(data,function(i,busca){
				$(".conteudo ol.cenesp").append('<li><p><a href="http://shoppingjaragua.com.br/cenesp/'+busca.link+'" target="_new">'+busca.nome+'</a></p></li>');
			   });
		  },
		  error: function() {
			$(".conteudo ol.cenesp").append('<h3>Shopping Jaraguá Cenesp</h3><p>Nada encontrado.</p>');
		  }
		})
	});
	
	//JARAGUÁ INDAIATUBA
	$(function(){
		$.ajax({url:apis.busca+"?shopping_id=203&busca=<?php echo req("busca")?>",dataType:"json",
		success: function(data) {
			$('.conteudo ol.indaiatuba').append('<h3>Shopping Jaraguá Indaiatuba</h3>');
			$.each(data,function(i,busca){
				$(".conteudo ol.indaiatuba").append('<li><p><a href="http://shoppingjaragua.com.br/indaiatuba/'+busca.link+'" target="_new">'+busca.nome+'</a></p></li>');
			   });
		  },
		  error: function() {
			$(".conteudo ol.indaiatuba").append('<h3>Shopping Jaraguá Indaiatuba</h3><p>Nada encontrado.</p>');
		  }
		})
	});
	
	//JARAGUÁ CONCEIÇÃO
	$(function(){
		$.ajax({url:apis.busca+"?shopping_id=202&busca=<?php echo req("busca")?>",dataType:"json",
		success: function(data) {
			$('.conteudo ol.conceicao').append('<h3>Shopping Jaraguá Conceição</h3>');
			$.each(data,function(i,busca){
				$(".conteudo ol.conceicao").append('<li><p><a href="http://shoppingjaragua.com.br/conceicao/'+busca.link+'" target="_new">'+busca.nome+'</a></p></li>');
			   });
		  },
		  error: function() {
			$(".conteudo ol.conceicao").append('<h3>Shopping Jaraguá Conceição</h3><p>Nada encontrado.</p>');
		  }
		})
	});
</script>

<div id="busca" class="fundo_footer">

<div class="banner" style="background-image:url(img/banner_busca2.jpg)"></div>

	<div class="conteudo">  
    
    <div class="galeria">
        <h1 class="blue">Busca</h1>
         
    </div>
    
    <ol class="soldopanamby"></ol>
    <ol class="araraquara"></ol>
    <ol class="cenesp"></ol>
    <ol class="conceicao"></ol>
    <ol class="indaiatuba"></ol>
            
       
    </div>
    
    
    <div style="clear:both;"></div>
        
    <div class="logo_footer">
    	<img src="img/logo.png">
    </div>
    
    
</div>

<?php
include 'inc/footer.php';
?>