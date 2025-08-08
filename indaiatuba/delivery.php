<?php
include 'inc/header.php';
?>

<style>
	body.responsivo .banner {
		background-position: right !important;
	}

	.icon {
		display: inline-block;
		vertical-align: middle;
		width: 25px !important;
	}

	ul.loja_lista {
		max-height: none !important;
	}

	h2.ls2 {
		margin: 0;
		position: relative !important;
		margin-top: 20px;
		bottom: 0 !important;
	}

	.info-lojas {
		position: relative;
		height: auto;
		max-height: none;
	}
</style>

<!-- <div class="banner" style="background-image:url(https://upload.madnezz.com.br/db745c0079c4e04629e6aadeaca2a6d9)"></div> -->

<div id="delivery" class="conteudo">
	<div class="p80 pr bg_branco">
		<div class="lojas tac">
			<ul class="loja_lista"></ul>
		</div>
	</div>
</div>

<script>
	function monta_loja(data) {
		$.each(data, function (i, loja) {



			let texto = '';

			if (typeof loja.loja_texto === 'string') {
				texto = loja.loja_texto
					.replace(/WhatsApp: (.*)(\n)?/gi, "<br /><a href='http://api.whatsapp.com/send?phone=55$1' target='_blank'><img src='https://upload.madnezz.com.br/dbbf3af0ff92158c862aa6c7acb52570' alt='WhatsApp' class='icon' /> $1</a>")
					.replace(/iFood/g, "<br /><img src='https://upload.madnezz.com.br/740e80f6af6edf95477fe89545bec762' alt='iFood' class='icon' /> iFood")
					.replace(/Rappi/g, "<br /><img src='https://upload.madnezz.com.br/413ea750982ebff78e3f3c64260403f1' alt='Rappi' class='icon' /> Rappi")
					.replace(/Telefone:/g, "<br /><img src='https://upload.madnezz.com.br/1758c5195b3b1d06cc887af30ceb65c7' alt='Telefone' class='icon' />")
					.replace(/Tel:/g, "<br /><img src='https://upload.madnezz.com.br/1758c5195b3b1d06cc887af30ceb65c7' alt='Telefone' class='icon' />")
					.replace(/Delivery: (.*)(\n)?/gi, "<br /><a href='$1' target='_blank'><img src='https://upload.madnezz.com.br/948b6201aff1d16ce5f5885b41803205' alt='Delivery' class='icon' /></a>")
					.replace(/Atendimento a domicílio:/gi, "<span>Atendimento a domicílio:</span><br />");
			}

			loja.forEach(lojas => {
				let imagem;
				if (lojas.loja_imagem_1_url) {
					imagem = lojas.loja_imagem_1_url;
				} else {
					imagem = lojas.loja_imagem_1 ? apis.upload_site_loja + lojas.loja_imagem_1 : 'https://upload.madnezz.com.br/a1264d7455fdb8634790fe26faf7da32';
				}

				$('.loja_lista').append('<li class="pr loja_' + lojas.id + ' " value="' + lojas.id + '">' +
					'<img src="' + imagem + '"  />' +
					'<h2 class="ls2" >' + lojas.loja_nome + '</h2><br><br>' +
					'<div class="info-lojas">' +
					'<p><span>Segmento:</span> ' + lojas.ramo_nome.replace("DELIVERY", "") + '</p>' +
					(lojas.loja_texto ? '<br /><p>' + texto + '</p>' : '') +
					'</div>' +
					'</li>');
			});

		});
	}

	$(function () {
		$.ajax({ url: apis.loja + "?tipo=1,2&shopping_id=203&filtro_ramo=12287&full=true&jsoncallback=", dataType: "json" }).done(function (data) {
			monta_loja(data);
		});
	});
</script>

<?php
include 'inc/footer.php';
?>