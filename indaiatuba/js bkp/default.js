$(function () {
	/*ARROWS*/
	jQuery.fn.scrolly = function (elem, speed) {
		$(this).animate({
			scrollTop: $(this).scrollTop() - $(this).offset().top + $(elem).offset().top
		}, speed == undefined ? 700 : speed);
		return this;
	};
	arrow_v = function (parent, eq) { parent.scrolly(eq); }
	arrow_x = function (parent, eq) { parent.scrollToX(eq); }
	if (!$("#index").length) {
		$('span.page_name').text($('.titulo h1').text());
	}
	$('.faixa input').focusin(function (event) {
		$(this).parent().find('label').fadeOut('fast');
	}).focusout(function (event) {
		$(this).parent().find('label').fadeIn('fast');
	});;
	if ($("#index").length) {
		//NOVIDADE HOME
		$.ajax({ url: apis.novidade_v3 + "?shopping_id=" + shopping_id + "&jsoncallback=", dataType: "json" }).done(function (data) {
			$.each(data, function (i, novidade) {


				let imagem;
				if (novidade.imagem_url) {
					imagem = novidade.imagem_url;
				} else {
					imagem = novidade.imagem ? apis.upload_site_novidade + novidade.imagem : 'img/loja_padrao.jpg';
				}



				let imagemHome;
				if (novidade.novidade_imagem_home_url) {
					imagemHome = novidade.novidade_imagem_home_url;
				} else {
					imagemHome = apis.upload_site_novidade + novidade.novidade_imagem_home;
				}

				$('.novidade_lista').append('<li class="pr novidade_' + novidade.novidade_id + ' ">' +
					'<div><a href="novidade.php?novidade_id=' + novidade.novidade_id + '"><img src="' + imagemHome + '" width="100%"></a></div>' +
					'<div class="info-novidade">' +
					'<h2 class="green2 mt0" style="margin-bottom:10px;">' + novidade.novidade_nome + '</h2>' +
					'<p class="texto_resumido justify">' + (novidade.novidade_texto.length > 200 ? novidade.novidade_texto.substr(0, novidade.novidade_texto.indexOf(' ', 200)) + '...' : novidade.novidade_texto) + '<br /><span class="leia_mais green2"><a href="novidade.php?novidade_id=' + novidade.novidade_id + '">(Leia Mais)</a></span></p>' +
					'</div>' +
					'</li>');
				if (i == 2) return false; //para mostrar so 3
			});
		});

		//var cinema_tipo = 1; /*GERENCIADOR*/
		//var cinema_tipo = 2; /*INGRESSO.COM*/
		var cinema_tipo = 3; /*VELOX*/

		if (cinema_tipo == 3) {
			//CINEMA HOME
			$.ajax({ url: apis.cinema_velox + "?shopping_id=" + shopping_id + "&tipo=2&jsoncallback=?", dataType: "json" }).done(function (data) {
				$.each(data, function (i, cinema) {
					$('.home_cinema ul').append(
						'<li class="filme swiper-slide" style="background-image:url(' + cinema.cartaz + '); background-repeat:no-repeat; background-size:cover; background-position:center; height:60vh">' +
						'<a href="cinema.php">' +
						'<div class="opacidade">' +
						'<img src="img/icon/cinema.png" class="icon-cinema">' +
						'<h3>' + cinema.titulo + '</h3>' +
						'<h4>' + cinema.genero + ' - ' + cinema.censura + '</h4>' +
						'</div>' +
						'</a>' +
						'</li>'

					);
				});
			});
		}

	} else if ($("#loja").length || $("#alimentacao").length || $("#servico").length) {



		function monta_loja(data) {

			$('.loja_lista').html('');
			if (data.length) {
				$('.loja_qtd').html('Foram encontradas ' + data.length + ' ocorrências em sua pesquisa');
				$.each(data, function (i, loja) {

					let imagem;
					if ($("#loja").length) {
						if (loja.loja_imagem_1_url) {
							imagem = loja.loja_imagem_1_url;
						} else {
							imagem = loja.loja_imagem_1 ? apis.upload_site_loja + loja.loja_imagem_1 : 'img/loja_padrao.jpg';
						}
					}

					if ($("#alimentacao").length) {
						if (loja.loja_imagem_1_url) {
							imagem = loja.loja_imagem_1_url;
						} else {
							imagem = loja.loja_imagem_1 ? apis.upload_site_loja + loja.loja_imagem_1 : 'img/alimentacao_padrao.jpg';
						}
					}

					if ($("#servico").length) {
						if (loja.loja_imagem_1_url) {
							imagem = loja.loja_imagem_1_url;
						} else {
							imagem = loja.loja_imagem_1 ? apis.upload_site_loja + loja.loja_imagem_1 : 'img/servico_padrao.jpg';
						}
					}
					var texto = loja.loja_texto
						.replace(/WhatsApp: (.*)(\n)?/gi, "<br /><a href='http://api.whatsapp.com/send?phone=55 $1' class='link_whatsapp' target='_blank'><img src='https://qa-uploads.madnezz.com.br/0ae5db30b5ebac496d6bcb14e5027548' alt='WhatsApp' class='icon' /> $1</a>")
						.replace(/Delivery: (.*)(\n)?/gi, "<br /><a href='$1' target='_blank'><img src='img/icon_delivery.png' alt='Delivery' class='icon' /></a>")
						.replace(/iFood/g, "<br /><img src='https://qa-uploads.madnezz.com.br/7565068dce0ea2eb042c6654335782cd' alt='iFood' class='icon' /> iFood")
						.replace(/Rappi/g, "<br /><img src='img/icon_rappi.png' alt='Rappi' class='icon' /> Rappi")
						.replace(/Telefone:/g, "<br /><img src='img/icon_telefone.png' alt='Telefone' class='icon' />")
						.replace(/Tel:/g, "<br /><img src='img/icon_telefone.png' alt='Telefone' class='icon' />")
						.replace(/Atendimento a domicílio:/gi, "<span>Atendimento a domicílio:</span><br />");

					if (loja.instagram) {
						texto += "<br /><a href='" + loja.instagram + "' target='_blank'><img src='img/icon_instagram.png' alt='Instagram' class='icon' /> Instagram</a>";
					}

					$('.loja_lista').append('<li class="pr loja_' + loja.id + ' " value="' + loja.id + '">' +
						'<img src="' + imagem + '"  />' +
						'<h2 class="ls2" >' + loja.loja_nome + '</h2><br><br><br>' +
						'<div class="info-lojas">' +

						'<p><span>Segmento:</span> ' + loja.ramo_nome + '</p>' +
						(loja.loja_telefone ? '<p><span>Telefone:</span> ' + loja.loja_telefone + '</p>' : '') +
						(loja.loja_site ? '<p><span>Site:</span> <a href="//' + loja.loja_site + '" target="_blank" >' + loja.loja_site + '</a></p>' : '') +
						(loja.loja_texto ? '<br /><p>' + texto + '</p>' : '') +

						'</div>' +
						'</li>');


				});
				$('a.link_whatsapp').each(function (i) {
					lst_href = $(this).attr('href');
					if (lst_href) {
						lst_href = lst_href
							.replace("</a>", '')
							.replace(/[()-]/g, '')
							.replace(/ /g, "");
						$(this).attr('href', lst_href);
					}
				});

			} else {
				$('.loja_qtd').html('Nenhuma loja encontrada');
			}

		}



		if ($("#loja").length) {
			tipo = "1,2";
		} else if ($("#alimentacao").length) {
			tipo = "2,7";
		} else if ($("#servico").length) {
			tipo = "";
		}

		//Inicio
		$("[name=filtro_ramo]").append("<option value=''>Categorias</option>");
		$.ajax({ url: apis.loja + "?tipo=" + tipo + "&shopping_id=" + shopping_id + "&full=true&jsoncallback=", dataType: "json" }).done(function (data) {
			//Monta os ramos
			$.each(data.ramo, function (i, ramo) {
				$("[name=filtro_ramo]").append("<option value='" + ramo.ramo_id + "'>" + ramo.ramo_nome + "</option>");
			});
			monta_loja(data.loja);
		});

		//Eventos da busca por ramo
		$("[name=filtro_ramo]").change(function () {
			_gaq.push(["_trackPageview", "loja.php?filtro_ramo=" + $(this).val()]);
			$(".filtro_nome").val("");
			$.ajax({ url: apis.loja + "?tipo=" + tipo + "&shopping_id=" + shopping_id + "&filtro_ramo=" + $(this).val() + "&full=true&jsoncallback=?", dataType: "json" }).done(function (data) {
				monta_loja(data);
			});
		});

		//Eventos da busca por nome

		$(document).keypress(function (e) {
			if (e.which == 13) $('.bt_busca').click();
		});

		$(".bt_busca").click(function () {
			if ($(".filtro_nome").val()) {
				_gaq.push(["_trackPageview", "loja.php?filtro_nome=" + $(".filtro_nome").val()]);
				$("[name=filtro_ramo]").val("");
				$.ajax({ url: apis.loja + "?tipo=" + tipo + "&shopping_id=" + shopping_id + "&filtro_nome=" + $(".filtro_nome").val() + "&full=true&jsoncallback=?", dataType: "json" }).done(function (data) {
					monta_loja(data);
				});
			}



		});

		//Eventos da busca por letra
		$('.alfabeto li').click(function () {
			$('.alfabeto li').removeClass('active');
			$(this).addClass('active');
			$.ajax({ url: apis.loja + "?tipo=" + tipo + "&shopping_id=" + shopping_id + "&filtro_letra=" + $(this).html() + "&full=true&jsoncallback=?", dataType: "json" }).done(function (data) {
				monta_loja(data);
			});
		});

		//Eventos de mais loja
		$('.mais_loja').click(function () {
			$('.loja_lista').animate({ 'max-height': 100000 }, 1500);
			$(this).hide();
		});

	} else if ($("#contato").length) {
		$.mask.definitions["t"] = "[0-9-]";
		$("#contato_telefone").mask("(99) tttttttt?ttt", {
			placeholder: "_"
		});



	} else if ($("#oportunidade").length) {

		$('input[type="file"]').on('change', function (event, files, label) {
			var file_name = this.value.replace(/\\/g, '/').replace(/.*\//, '')
			$('label').html(file_name);
		});

		$.getJSON(apis.trabalhe_conosco + "?tk=" + shopping_token + "&tp=0", null, function (data) {
			$.each(data, function () {
				$("#area").append("<option value='" + this.id + "'>" + this.area + "</option>");
			});
		});
		$.getJSON(apis.trabalhe_conosco + "?tk=" + shopping_token + "&tp=1", null, function (data) {
			if (data.length) {
				$(".vagas_quantidade").html('Vagas Disponíveis');
				$.each(data, function (i) {
					loja = this.loja == "Shopping" ? "Shopping" : this.loja.substr(0, this.loja.indexOf("(") - 1);

					$('.vagas_lista').append('<li class="vagas">' +
						'<h2 class="green2">' + loja + '</h2>' +
						'<h3>Vaga: ' + this.cargo + '</h3>' +
						'<p>' + this.descricao.replace(/\n/g, '<br />') + '</p>' +
						'</li>');
				});
			} else {
				$(".vagas_quantidade").html('Nenhuma Vaga Disponível');
			}
		});

		$.mask.definitions["t"] = "[0-9-]";
		$("#oportunidade_form input[name=cpf]").mask("ttt.ttt.ttt-tt?", {
			placeholder: "_"
		});


	} else if ($('#comercial').length) {
		$('.comercial_lista li h3').click(function () {
			$('.comercial_lista li>div').hide();
			$(this).parent().stop().find('div').fadeIn('fast');
		})
	} else if ($('#busca').length) {
		$.ajax({ url: apis.busca + "?shopping_id=" + shopping_id + "&busca=" + busca, dataType: "json" }).done(function (data) {
			$.each(data, function (i, busca) {
				$(".busca_lista ol").append('<li><h3 class="cmarrom"><a  href="' + busca.link + '">' + busca.nome + '</a></h3></li><br>');
			});
			$('.busca_lista ol').prepend('<br><br><h2 class="cmarrom">"' + busca + '"</h2><br><br>');
		}).fail(function () {
			$('.busca_lista ol').html('<h2 class="cmarrom">"' + busca + '" - Nada Encontrado, tente novamente.</h2>');
		});
	};//end if
	setTimeout(function () {
		$('.geral').fadeIn(800);/*
		$("body").niceScroll({scrollspeed:60});
		$("body").getNiceScroll().hide();*/
		// $fn.scrollSpeed(step, speed, easing); 

		if (!$('.loja_lista').length && larg_monitor > 800) {
			//jQuery.scrollSpeed(100, 800);
		}
	}, 500);

})