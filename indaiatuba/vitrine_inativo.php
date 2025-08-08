<?php include "inc/header.php"?>
<style type="text/css">
	.banner {height:auto;padding-bottom:0!important;}
	.banner img {width:100%;display:block;}
	.vitrine_filtro label {background: transparent;}
	.vitrine_menu p {font-size: 32px;line-height: 40px;  font-weight: 100;text-transform: uppercase;color: #333;font-family: 'din_black', sans-serif; }
	.vitrine_menu select, .vitrine_menu input {border: 1px solid #eeeeee;line-height: 48px;height: 55px; vertical-align: middle; margin-left: 10px;} 
	.vitrine_produto_loja,.vitrine_produto_nome{font-weight: 100;text-transform: uppercase;color: #333;font-family: 'din_black', sans-serif;}
	.vitrine_produto_loja {margin-top: 5px;font-size: 17px;line-height: 26px;letter-spacing: 0px;opacity: 0.7;}
</style>
<div class="banner">
	<img src="https://upload.madnezz.com.br/999a288b2def6b0909b18abd190ee7d1" />
</div>

<div id="promocao"  class="conteudo">	
    <div class="bg_cinza">
		<div class="vitrine_container"></div>
		<p style="text-align:center; font-size:11px; line-height:16px;max-width:80%;margin:0 auto;">As lojas presentes na "Loja Virtual" do Shopping Jaraguá são responsáveis pelos preços e disponibilidade de estoque de cada produto anunciado, estando sujeitos a alteração sem aviso prévio. As fotos são meramente ilustrativas. Em caso de dúvidas ou sugestões, entre em contato diretamente com as lojas através do WhatsApp que consta no link de cada produto.</p>
	</div>
</div>
<script>
	$(function(){
		$(".vitrine_container").html("Carregando...");
		$.ajax({
			url:apis.vitrine+"?shopping_id="+shopping_id,
			method:"GET"
		}).done(function(html){
			$(".vitrine_container").html(html);			
		});
	});
</script> 
<?php include "inc/footer.php"?>