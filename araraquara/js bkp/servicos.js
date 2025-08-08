$(function () {
	var urlx = apis.loja + "?tipo=1,2,3,4,5,6,7,8&shopping_id=" + shopping_id + "&full=true&jsoncallback=?";
	$.ajax({ url: urlx, dataType: "json" }).done(function (data) {
		$.each(data.loja, function (i, loja) {

			let imagem;
			if (loja.loja_logo_url) {
				imagem = loja.loja_logo_url;
			} else {
				imagem = apis.upload_site_loja + loja.loja_logo;
			}

			if (loja.loja_atividade == 3)
				$('.lista_servico').append(
					`
					<div class="servico_item">
						<div class="box-hidded box-`+ loja.id + `">
							<div class="texto-servico">`+ loja.loja_texto + `</div>
						</div>

						<div class="box-servicos" data-box="`+ loja.id + `">
							<div class="box-content">
								<img src="`+ imagem + `" class="servicos-icon">
								<h2>`+ loja.loja_nome + `</h2>
							</div>
						</div>
					</div>			
					`);
		});
	});

	//Faz o FadeIn, ou seja, mostra na tela com o atributo data-box, usando o evento de click, os elementos do DOCUMENTO html e faz o tracking do click para o google
	$(document).on('click', '[data-box]', function () {
		$('.box-' + $(this).data("box")).fadeIn('slow');
		_gaq.push(["_trackPageview", "Serviços - " + ($(this).find('h2').text())]);
	});

	//Faz o FadeOut, ou seja, esconde na tela com o atributo box-hidded, usando o evento de click, os elementos do DOCUMENTO html
	$(document).on('click', '.box-hidded', function () {
		$('.box-hidded').fadeOut('fast');
	});
})

