<?php include 'inc/header.php'; ?>


<style>
	body.responsivo .banner {background-position:right!important;}
	.icon{display:inline-block; vertical-align:middle; width:25px !important;}
	ul.loja_lista{max-height:none !important;}
	h2.ls2{margin:0; position:relative !important; margin-top:20px; bottom:0 !important;}
	.info-lojas{position:relative; height:auto; max-height:none;}
</style>

<div class="banner" style="background-image:url(https://upload.madnezz.com.br/2fb8f2cef7859a59cab8cae569396328)"></div>

<div id="delivery" class="conteudo">
	<div class="titulo">
		<br /><br />
		<h1>Drive-Thru</h1>
	</div>
	<div class="p80 pr bg_branco">
		<div class="lojas tac">
			<ul class="loja_lista"></ul>
		</div>
	</div>
</div>

<script>
	function monta_loja(data){
		$.each(data,function(i,loja){
			var imagem=loja.loja_imagem_2?apis.upload_site_loja+loja.loja_imagem_2:(loja.loja_imagem_1?apis.upload_site_loja+loja.loja_imagem_1:'https://upload.madnezz.com.br/178bb77ef606f034b225aa12ab3b41ff');
			var texto=loja.delivery
				.replace(/WhatsApp: (.*)(\n)?/gi,"<br /><a href='http://api.whatsapp.com/send?phone=55 $1' target='_blank'><img src='https://upload.madnezz.com.br/eb04616109ebbbad46a297ae603dbf30' alt='WhatsApp' class='icon' /> $1</a>")
				.replace(/iFood/g,"<br /><img src='https://upload.madnezz.com.br/d12300e0696acd224d39b45c717ff559' alt='iFood' class='icon' /> iFood")
				.replace(/Rappi/g,"<br /><img src='https://upload.madnezz.com.br/15ce8a089ad28abc48ed6aea28a7a20c' alt='Rappi' class='icon' /> Rappi")
				.replace(/Telefone:/g,"<br /><img src='https://upload.madnezz.com.br/5b5ee82d0f2345c121fbd85d67425472' alt='Telefone' class='icon' />")
				.replace(/Tel:/g,"<br /><img src='https://upload.madnezz.com.br/5b5ee82d0f2345c121fbd85d67425472' alt='Telefone' class='icon' />")
				.replace(/Atendimento a domicílio:/gi,"<span>Atendimento a domicílio:</span><br />");

			$('.loja_lista').append('<li class="pr loja_'+loja.id+' " value="'+loja.id+'">'+
										'<img src="'+imagem+'"  />'+
										'<h2 class="ls2" >'+loja.loja_nome+'</h2><br><br>'+
										'<div class="info-lojas">'+
											'<p><span>Segmento:</span> '+loja.ramo_nome.replace(", DELIVERY","").replace("DELIVERY","")+'</p>'+
											(texto?'<br /><p>'+texto+'</p>':'')+
										'</div>'+
									'</li>');
		});
	}

	$(function(){
		 $.ajax({url:apis.loja+"?tipo=1,2,3&shopping_id=204&filtro_ramo=12424&full=true&jsoncallback=?",dataType:"json"}).done(function(data){
			monta_loja(data);
		});
	});
</script>

<?php include 'inc/footer.php'; ?>
