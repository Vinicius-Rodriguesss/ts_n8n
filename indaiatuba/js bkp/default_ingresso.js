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
		$.ajax({ url: apis.novidade_v3 + "?shopping_id=" + shopping_id + "&jsoncallback=?", dataType: "json" }).done(function (data) {
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

		//CINEMA HOME
		var cinemas;
		li = $('.home_cinema>ul').html();
		div = $('.home_cinema>div').html();
		load_filme = function (eq, play) {
			fundo_trailer = $('.home_cinema li[data-i=' + eq + ']').attr('trailer');
			if (play == 1) {
				//fundo_trailer = fundo_trailer.replace(/autoplay=0/g,'autoplay=1');
			}
			titulo = $('.home_cinema li[data-i=' + eq + ']').find('h3').text();
			link = 'cinema.php?cinema_id=' + $('.home_cinema li[data-i=' + eq + ']').attr('data-i');

			//cinema=cinemas[$(this).attr('data-i')];
			//$('.home_cinema>div').html(fundo_trailer+'<h2>'+titulo+'</h2>'/*'<a href="cinema.php?cinema_id='+cinema.id+'"><img src="img/icon/home_play.png" width="80"/></a -->') */);
			$('.home_cinema>div').html('').append('<div class="home_trailer"><iframe src="' + fundo_trailer + '" frameborder="0" allowfullscreen ></iframe></div><img src="img/icon/home_play.png" class="play_home" width="80"/><h2>' + titulo + '</h2><a class="to_int" href="' + link + '"></a>');
			//if (play ==1) { $('.play_home').hide(); } else { $('.play_home').show(); } 
		}


		$('.home_cinema>ul').html('');
		$.ajax({ url: apis.cinema_ingressocom + "?shopping_id=" + shopping_id + "&tipo=2&jsoncallback=?", dataType: "json" }).done(function (data) {
			$.each(data, function (i, cinema) {
				//cinema=cinema.filme;
				var iframe = '';
				//trailer='trailer="//www.youtube.com/embed/'+cinema.trailer+'?color=white&iv_load_policy=3&rel=0&showinfo=0&modestbranding=1&autohide=1&autoplay=0" frameborder="0" allowfullscreen';
				trailer = 'trailer="' + cinema.trailer + '" frameborder="0" allowfullscreen';
				$('.home_cinema>ul').prepend(li.replace(/url_trailer/g, trailer).replace(/#filme_url/g, cinema.id).replace(/#i/g, i).replace(/#fundo/g, cinema.fundo).replace(/#titulo/g, cinema.titulo).replace(/#genero/g, cinema.genero).replace(/#censura/g, cinema.censura).replace(/#horario/g, cinema.horario));
			});
			load_filme($('.home_cinema li').eq(0).attr('data-i'), 0);
		});
		$('.home_cinema').on('click', 'li', function () {
			//load_filme($(this).attr('data-i'),1);
		});

		$('.home_cinema').on('click', '.play_home', function () {
			src = $(this).parent().find('iframe').attr('src');
			$(this).parent().find('iframe').attr('src', src.replace(/autoplay=0/g, 'autoplay=1'));
			$(this).hide();
		});

		$('.cinema_down').click(function () {
			if ($('.responsivo').length) {
				$('.home_cinema>ul').append($('.home_cinema li').eq(0)).append($('.home_cinema li').eq(0));
			} else {
				$('.home_cinema>ul').stop().animate({ 'margin-top': '-16%' }, function () {
					$('.home_cinema>ul').append($('.home_cinema li').eq(0)).append($('.home_cinema li').eq(0));
					$('.home_cinema>ul').css({ 'margin-top': '0' });
				});
			}
		});
		$('.cinema_up').click(function () {
			if ($('.responsivo').length) {
				$('.home_cinema>ul').prepend($('.home_cinema li').eq(-2)).prepend($('.home_cinema li').eq(-1));
			} else {
				$('.home_cinema>ul').prepend($('.home_cinema li').eq(-2)).prepend($('.home_cinema li').eq(-1));
				$('.home_cinema>ul').css({ 'margin-top': '-16%' });
				$('.home_cinema>ul').stop().animate({ 'margin-top': '0' });
			}
		});

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

					$('.loja_lista').append('<li class="pr loja_' + loja.id + ' " value="' + loja.id + '">' +
						'<img src="' + imagem + '"  />' +
						'<h2 class="ls2" >' + loja.loja_nome + '</h2><br><br><br>' +
						'<div class="info-lojas">' +

						'<p><span>Segmento:</span> ' + loja.ramo_nome + '</p>' +
						(loja.loja_telefone ? '<p><span>Telefone:</span> ' + loja.loja_telefone + '</p>' : '') +
						(loja.loja_site ? '<p><span>Site:</span> ' + loja.loja_site + '</p>' : '') +
						(loja.loja_texto ? '<p><span>Descrição:</span> ' + loja.loja_texto + '</p>' : '') +
						'</div>' +
						'</li>');
				});
			} else {
				$('.loja_qtd').html('Nenhuma loja encontrada');
			}

		}



		if ($("#loja").length) {
			tipo = "1,2";
		} else if ($("#alimentacao").length) {
			tipo = "";
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


	} else if ($("#cinema").length) {
		//Monta filme clicado
		if (cinema_id) {
			$.ajax({ url: apis.cinema + "?shopping_id=" + shopping_id + "&jsoncallback=?", dataType: "json" }).done(function (data) {
				var iframe;
				$.each(data, function (i, cinema) {
					if (cinema.id == cinema_id) {
						iframe = '<iframe src="' + this.trailer + '?color=white&iv_load_policy=3&rel=0&showinfo=0&modestbranding=1&autohide=1&autoplay=1" frameborder="0" allowfullscreen></iframe>';
						$('.cinema_lista').css({ "width": "100%", "margin": "50px 0" });
						$('.cinema_lista li').css({ "width": "100%" });
						$('.cinema_lista').append('<li eq="' + i + '" >' +
							'<h2 class="big green2">' + this.titulo + '</h2><br><br>' +
							'<div class="iframe" style="background-image:url(' + this.fundo + ');">' +
							'	<div class="play"></div>' +
							'</div>' +
							'</tbody></table><br>' +
							'<div class="indicacao justify info-filme">' +
							'<h3 class="green2">Sinopse: </h3><p>' + this.sinopse + '</p><br><br>' +
							'<!--h3 class="green2">Horário: </h3><p>' + this.horario + '</p><br-->' +
							'<h3 class="green2">Duração: </h3><p>' + this.duracao + '</p>' +
							'<h3 class="green2">Gênero: </h3><p>' + this.genero + '</p>' +
							'<h3 class="green2">Faixa: </h3><p>' + this.censura + '</p>' +
							'</div></li>'

							//'<div class="genero">'+
							//'<span>'+this.genero+' - </span>'+
							//'<span>'+this.duracao+' - </span>'+
							//'<span>'+this.censura+'</span>'+
							//'</div>'
						);
						$('.cinema_lista li').css({ "width": "100%", "background-color": "transparent" });
					}
				});

				//Ação do trailer play
				$('.iframe div').click(function () {
					$('.iframe').append(iframe);
					$('.play').hide();
				});
			});

			//Monta lista de cinemas
		} else {
			$.ajax({ url: apis.cinema + "?shopping_id=" + shopping_id + "&jsoncallback=?", dataType: "json" }).done(function (data) {
				$.each(data, function (i, cinema) {
					$('.cinema_lista').append('<li>' +
						'	<a href="?cinema_id=' + cinema.id + '"><img src="' + cinema.cartaz + '" alt="' + cinema.titulo + '" /></a>' +
						'	<div class="info-cinema">' +
						'	<h2 class="green2">' + cinema.titulo.toUpperCase() + '</h2><br>' +
						'	<p>' + cinema.genero + '</p>' +
						'	<p>' + cinema.duracao + '</p>' +
						'	<p>' + cinema.censura + '</p>' +
						' 	</div>' +
						'	<div class="horarios"><a href="?cinema_id=' + cinema.id + '">+ Veja os horários</a></div>' +
						'</li>');
				});
			});
			$('[name=busca]').keyup(function () {
				$('.cinema_lista li').hide();
				$('.cinema_lista .green2:contains("' + $('[name=busca]').val().toUpperCase() + '")').parents('li').show();
			});


			$.ajax({ url: apis.cinema + "?shopping_id=" + shopping_id + "&jsoncallback=?", dataType: "json" }).done(function (data) {
				$.each(data, function (i, cinema) {
					$('.lista_filmes').append('<option>' + cinema.titulo + '</option>');
				});
			});

			$('[name=lista_filmes]').change(function () {
				$('.cinema_lista li').hide();
				$('.cinema_lista .green2:contains("' + $('[name=lista_filmes]').val().toUpperCase() + '")').parents('li').show();
			});

		}

	} else if ($("#novidade").length) {
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
						conteudo = 't1=' + titulo + '&t2=' + txt + '&i=' + apis.upload_site_novidade + novidade.novidade_imagem_1;
					}

					let share_img;
					if (novidade.novidade_imagem_1_url) {
						share_img = novidade.novidade_imagem_1_url;
					} else {
						share_img = apis.upload_site_novidade + novidade.novidade_imagem_1;
					}

					let imagem;
					if (novidade.novidade.imagem_url) {
						imagem = novidade.imagem_url;
					} else {
						imagem = novidade.imagem ? apis.upload_site_novidade + novidade.imagem : 'img/loja_padrao.jpg';
					}
					$('.novidade_lista').append('<li class="pr" data-id="' + novidade.novidade_id + '" ">' +
						'<div class="img-close"><img src="' + apis.upload_site_novidade + novidade.novidade_imagem_home + '"  /></div>' +
						'<div class="img-open"><img src="' + apis.upload_site_novidade + novidade.novidade_imagem_1 + '"  /></div>' +
						'<div class="info-novidade">' +
						'<h3 class="green2 mt0">' + novidade.novidade_nome + '</h3><br>' +
						'<p class="texto_resumido">' + (novidade.novidade_texto.length > 200 ? novidade.novidade_texto.substr(0, novidade.novidade_texto.indexOf(' ', 200)) + '...' : novidade.novidade_texto).replace(/<br><br>/g, '').replace(/<br \/><br \/>/g, '<br>') + '<br /><span class="leia_mais green2">(Leia Mais)</span></p><br>' +
						'<div class="fb-share-button" data-href="' + monta_sharer(novidade.novidade_id, conteudo, share_img) + '" data-layout="button" data-size="large" data-mobile-iframe="false"><a class="fb-xfbml-parse-ignore" target="_blank" href="//www.facebook.com/sharer/sharer.php?u=' + monta_sharer(novidade.novidade_id, conteudo, share_img) + '"></a></div>' +
						'<a href="whatsapp://send?text=' + novidade.novidade_nome + ': //shoppingjaragua.com.br/indaiatuba/novo/novidade.php?novidade_id=' + novidade.novidade_id + '" class="whatsapp"></a>' +
						'<p class="texto_completo">' + novidade.novidade_texto + '<br><br><span class="voltar"><a href="novidade.php?v=0">> Voltar</a></span></p>' +
						'</div>' +
						'</li>');
					//if(i==2) return false; //para mostrar so 3
				});

				if (novidade_id) {
					$('[data-id=' + novidade_id + '] .leia_mais').click();
					novidade_id = 0;
				}
			} else {
				$('.novidade_qtd').html('Nenhuma notícia encontrada');
			}
		}
		$('body').on('click', '.open_fp', function (event) {
			event.preventDefault();
			window.open($(this).find('a').attr('href'), 'newwindow', 'width=500', 'height=600');
		});
		$.ajax({ url: apis.novidade_v3 + "?shopping_id=" + shopping_id + "&jsoncallback=?", dataType: "json" }).done(function (data) {
			monta_novidade(data);
		});

		//Eventos da busca por data
		$("[name=mes],[name=ano]").change(function () {
			$.ajax({ url: apis.novidade_v3 + "?shopping_id=" + shopping_id + "&mes=" + $('[name=mes]').val() + "&ano=" + $('[name=ano]').val() + "&jsoncallback=?", dataType: "json" }).done(function (data) {
				$('.bg_branco').removeClass('active');
				monta_novidade(data);
			});
		});

		//Eventos da busca por data
		$(".novidade_lista").on('click', 'li', function () {
			if (!$(this).hasClass('active')) {
				$('.novidade_qtd').hide();
				$('.novidade_lista li').hide();
				$('.bg_branco').addClass('active');
				$(this).show().addClass('active');
				$("html,body").animate({ scrollTop: $('.content').offset().top - 130 });
			}
		});
	} else if ($("#contato").length) {
		$.mask.definitions["t"] = "[0-9-]";
		$("#contato_telefone").mask("(99) tttttttt?ttt", {
			placeholder: "_"
		});
		$(".form").submit(function () {
			if (!$("#txtCaptcha").val() || !$("#contato_nome").val() || !$("#contato_email").val() || !$("#contato_assunto").val() || !$("#contato_mensagem").val() || !$("#contato_telefone").val()) {
				alert("Preencha todos os campos");
				return false;
			} else if (!validaEmail($("#contato_email").val())) {
				alert("Preencha um e-mail válido");
				return false;
			} else {
				$(".form_submit").prop("disabled", true);
				$.ajax(apis.contato_api + '?do=contato&tk=' + cliKey + '&captcha=' + $("#txtCaptcha").val() + '&hash=' + hash, {
					data: {
						"nome": $("#contato_nome").val(),
						"telefone": $("#contato_telefone").val(),
						"email": $("#contato_email").val(),
						"endereco": $("#contato_endereco").val(),
						"assunto": $("#contato_assunto").val(),
						"mensagem": $("#contato_mensagem").val(),
						"sendmail": 1
					},
					type: 'POST',
					dataType: 'json'
				}).then(function (data) {
					switch (data.status) {
						case "done":
							alert("Mensagem enviada com sucesso");
							$(".form input[type=text], .form select, textarea").val("");
							break;
						case "captcha-wrong-code":
							alert("O código do captcha é inválido,digite novamente");
							getCaptcha();
							break;
						case "captcha-expired":
							alert("O código do captcha já foi usado,tente novamente");
							getCaptcha();
							break;
					}
					$(".form_submit").prop("disabled", false);
				});
				return false;
			}
			return false;
		});
		getCaptcha();
	} else if ($("#oportunidade").length) {
		$.getJSON(apis.trabalhe_conosco + "?tk=" + shopping_token + "&tp=0", null, function (data) {
			$.each(data, function () {
				$("#area").append("<option value='" + this.id + "'>" + this.area + "</option>");
			});
		});
		$.getJSON(apis.trabalhe_conosco + "?tk=V36HkOVTeeZm71r1H8o4iGAL1wEeLfpx&tp=1", null, function (data) {
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

		$('#oportunidade_form').submit(function (event) {

			if (!$("#oportunidade_form input[name=nome] ").val() || !$("#oportunidade_form input[name=email] ").val() || !$("#oportunidade_form input[name=cpf] ").val() || !$("#oportunidade_form input[name=anexo] ").val() || !$("#oportunidade_form select").val()) {
				alert('Favor preencher todos os campos');
				return false;
			}
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