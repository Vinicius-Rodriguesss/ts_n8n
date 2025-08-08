
console.log('acoes.js');

$(function () {
	function monta_novidade(data) {
		$('.novidade_qtd').show();
		$('.novidade_lista li').show().removeClass('active');
		$('.img-noticia').css({ 'display': 'none !important' });

		$('.novidade_lista').html('');
		if (data.length) {
			$('.novidade_qtd').html('Foram encontradas ' + data.length + ' ocorrências em sua pesquisa');
			$.each(data, function (i, novidade) {
				titulo = novidade.novidade_nome;
				txt = (novidade.novidade_texto ? novidade.novidade_texto : '-');
				txt = txt.replace(/<br>/g, '').replace(/<br >/g, '').replace(/<br \/>/g, '').replace(/“/g, '').replace(/”/g, '');
				txt = (txt.length > 200 ? txt.substr(0, txt.indexOf(' ', 100)) + '...' : txt);

				let conteudo;
				if (novidade.novidade_imagem_1_url) {
					conteudo = 't1=' + titulo + '&t2=' + txt + '&i=' + novidade.novidade_imagem_1_url;
				} else {
					conteudo = 't1=' + titulo + '&t2=' + txt + '&i=' + apis.upload_site + 'evento/' + novidade.novidade_imagem_1;
				}

				let share_img;
				if (novidade.novidade_imagem_1_url) {
					share_img = novidade.novidade_imagem_1_url;
				} else {
					share_img = apis.upload_site + 'evento/' + novidade.novidade_imagem_1;
				}

				conteudo_whatsapp = 't1=- ' + titulo;

				let whatsapp_img;
				if (novidade.novidade_imagem_1_url) {
					whatsapp_img = novidade.novidade_imagem_1_url;
				} else {
					whatsapp_img = novidade.novidade_imagem_1;
				}

				let imagenUrl;
				if(novidade.novidade_imagem_1_url){
					imagenUrl = novidade.novidade_imagem_1_url;
				}else{
					imagenUrl = apis.upload_site + 'publicidade/' + novidade.novidade_imagem_1;
				}

				$('.novidade_lista').append(
					'<li class="col">' +
					'<div class="left">' +
					'<div class="titulo">' +
					'<h1>' + novidade.novidade_nome + '</h1>' +
					'</div>' +
					'<p class="justify">' + novidade.novidade_texto + '</p>' +
					'</div>' +
					'<div class="right">' +
					'<img src="' + imagenUrl + '">' +
					'</div>' +
					'<div style="clear:both;"></div>' +
					'</li>'
				);
				//if(i==2) return false; //para mostrar so 3
			});
		} else {
			$('.novidade_qtd').html('Nenhuma notícia encontrada');
		}
	}
	$('body').on('click', '.open_fp', function (event) {
		event.preventDefault();
		window.open($(this).find('a').attr('href'), 'newwindow', 'width=500', 'height=600');
	});
	$.ajax({ url: apis.novidade + "?tp=3&shopping_id=" + shopping_id + "&jsoncallback=", dataType: "json" }).done(function (data) {
		monta_novidade(data);
	});

	//Eventos da busca por data
	$("[name=mes],[name=ano]").change(function () {
		$.ajax({ url: apis.novidade + "?tp=3&shopping_id=" + shopping_id + "&mes=" + $('[name=mes]').val() + "&ano=" + $('[name=ano]').val() + "&jsoncallback=", dataType: "json" }).done(function (data) {
			$('.bg_branco').removeClass('active');
			monta_novidade(data);
		});
	});

})