<?php
include 'inc/header.php';
?>

<style>
	body.responsivo .banner {background-position:right!important;}
	.icon{display:inline-block; vertical-align:middle; width:25px !important;}
	ul.loja_lista{max-height:none !important;}
	h2.ls2{margin:0; position:relative !important; margin-top:20px; bottom:0 !important;}
	.info-lojas{position:relative; height:auto; max-height:none;}
</style>

<div class="banner" style="background-image:url(https://upload.madnezz.com.br/4ac4b4a7a430999d793388aebff8423a)"></div>

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
			var imagem=loja.loja_imagem_1?apis.upload_site_loja+loja.loja_imagem_1:'https://upload.madnezz.com.br/a1264d7455fdb8634790fe26faf7da32';
			var texto=loja.delivery
				.replace(/WhatsApp: (.*)(\n)?/gi,"<br /><a href='http://api.whatsapp.com/send?phone=55 $1' target='_blank'><img src='https://upload.madnezz.com.br/dbbf3af0ff92158c862aa6c7acb52570' alt='WhatsApp' class='icon' /> $1</a>")
				.replace(/Ifood/g,"<br /><img src='https://upload.madnezz.com.br/740e80f6af6edf95477fe89545bec762' alt='iFood' class='icon' /> iFood")
				.replace(/Rappi/g,"<br /><img src='https://upload.madnezz.com.br/413ea750982ebff78e3f3c64260403f1' alt='Rappi' class='icon' /> Rappi")
				.replace(/Ubereats/g,"<br /><img src='https://upload.madnezz.com.br/b5d32b52ffea2ecf0df91e8fdb3163e4' alt='UberEats' class='icon' /> UberEats")
				.replace(/Telefone:/g,"<br /><img src='https://upload.madnezz.com.br/1758c5195b3b1d06cc887af30ceb65c7' alt='Telefone' class='icon' />")
				.replace(/Site:/g,"<br /><img src='https://upload.madnezz.com.br/717b786e3ba711abf159cd69dc93e67c' alt='Site' class='icon' />")
				.replace(/Tel:/g,"<br /><img src='https://upload.madnezz.com.br/1758c5195b3b1d06cc887af30ceb65c7' alt='Telefone' class='icon' />")
				.replace(/Atendimento a domicílio:/gi,"<span>Atendimento a domicílio:</span><br />");

			$('.loja_lista').append('<li class="pr loja_'+loja.id+' " value="'+loja.id+'">'+
										'<img src="'+imagem+'"  />'+
										'<h2 class="ls2" >'+loja.loja_nome+'</h2><br><br>'+
										'<div class="info-lojas">'+
											'<p><span>Segmento:</span> '+loja.ramo_nome+'</p>'+
											(texto?'<br /><p>'+texto+'</p>':'')+
										'</div>'+
									'</li>');
		});
	}

	$(function(){
		 $.ajax({url:apis.loja+"?tipo=1,2,3&shopping_id="+shopping_id+"&filtro_ramo=12430&full=true&jsoncallback=?",dataType:"json"}).done(function(data){
			monta_loja(data);
		});
	});
</script>

<?php
include 'inc/footer.php';
?>