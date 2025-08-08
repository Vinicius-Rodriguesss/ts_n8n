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

	function TestaCPF(strCPF) { var Soma; var Resto; Soma = 0; if (strCPF == "00000000000") return false; for (i = 1; i <= 9; i++) Soma = Soma + parseInt(strCPF.substring(i - 1, i)) * (11 - i); Resto = (Soma * 10) % 11; if ((Resto == 10) || (Resto == 11)) Resto = 0; if (Resto != parseInt(strCPF.substring(9, 10))) return false; Soma = 0; for (i = 1; i <= 10; i++) Soma = Soma + parseInt(strCPF.substring(i - 1, i)) * (12 - i); Resto = (Soma * 10) % 11; if ((Resto == 10) || (Resto == 11)) Resto = 0; if (Resto != parseInt(strCPF.substring(10, 11))) return false; return true; }

	if ($("#index").length) {
		//NOVIDADE HOME
		$.ajax({ url: apis.novidade + "?shopping_id=" + shopping_id + "&jsoncallback=?", dataType: "json" }).done(function (data) {
			$.each(data, function (i, novidade) {

				let imagem;
				if (novidade.imagem_url) {
					imagem = novidade.imagem_url
				} else {
					imagem = novidade.imagem ? apis.upload_site_novidade + novidade.imagem : 'https://upload.madnezz.com.br/178bb77ef606f034b225aa12ab3b41ff';
				}

				let imagemHome;
				if (novidade.novidade_imagem_home) {
					imagemHome = novidade.novidade_imagem_home;
				} else {
					imagemHome = apis.upload_site_novidade + novidade.novidade_imagem_home;
				}

				$('.novidade_lista').append('<li class="pr novidade_' + novidade.novidade_id + ' ">' +
					'<div><a href="novidade.php?novidade_id=' + novidade.novidade_id + '"><img src="' + imagemHome + '" width="100%"></a></div>' +
					'<div class="info-novidade">' +
					'<a href="novidade.php?novidade_id=' + novidade.novidade_id + '"><h2 class="green2 mt0" style="margin-bottom:10px;">' + novidade.novidade_nome + '</h2></a>' +
					'<p class="texto_resumido justify">' + (novidade.novidade_texto.length > 200 ? novidade.novidade_texto.substr(0, novidade.novidade_texto.indexOf(' ', 200)) + '...' : novidade.novidade_texto).replace(/http:/g, '') + '<br /><span class="leia_mais green2"><a href="novidade.php?novidade_id=' + novidade.novidade_id + '">(Leia Mais)</a></span></p>' +
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
			fundo_trailer = $('.home_cinema li[data-i=' + eq + ']').find('.home_trailer iframe').attr('src');
			if (play == 1) {
				fundo_trailer = fundo_trailer.replace(/autoplay=0/g, 'autoplay=1');
			}
			titulo = $('.home_cinema li[data-i=' + eq + ']').find('h3').text();
			link = 'cinema_moviecom.php?cinema_id=' + $('.home_cinema li[data-i=' + eq + ']').attr('data-i');

			//cinema=cinemas[$(this).attr('data-i')];
			//$('.home_cinema>div').html(fundo_trailer+'<h2>'+titulo+'</h2>'/*'<a href="cinema.php?cinema_id='+cinema.id+'"><img src="https://upload.madnezz.com.br/f6120c1deb0d3cc7a67ee991fa08b362" width="80"/></a -->') */);
			$('.home_cinema>div').html('').append('<div class="home_trailer"><iframe src="' + fundo_trailer + '" frameborder="0" allowfullscreen ></iframe></div><img src="https://upload.madnezz.com.br/f6120c1deb0d3cc7a67ee991fa08b362" class="play_home" width="80"/><h2>' + titulo + '</h2><a class="to_int" href="' + link + '"></a>');
			//if (play ==1) { $('.play_home').hide(); } else { $('.play_home').show(); } 
		}


		$('.home_cinema>ul').html('');
		//$.ajax({url:apis.cinema+"?shopping_id="+shopping_id+"&jsoncallback=?",dataType:"json"}).done(function(data){
		//$.ajax({url:apis.cinema_moviecom+"?shopping_id="+shopping_id+"&jsoncallback=?",dataType:"json"}).done(function(data){
		$.ajax({ url: apis.cinema_moviecom + "?shopping_id=" + shopping_id + "&tipo=2&jsoncallback=?", dataType: "json" }).done(function (data) {
			console.table(data);
			$.each(data, function (i, cinema) {
				iframe = 'src="' + cinema.trailer.replace('watch?v=', 'embed/') + '?color=white&iv_load_policy=3&rel=0&showinfo=0&modestbranding=1&autohide=1&autoplay=0" frameborder="0" allowfullscreen';
				$('.home_cinema>ul').prepend(li.replace(/url_trailer/g, iframe).replace(/#filme_url/g, cinema.id).replace(/#i/g, i).replace(/#fundo/g, cinema.cartaz).replace(/#titulo/g, cinema.titulo).replace(/#genero/g, cinema.genero).replace(/#censura/g, cinema.censura).replace(/#horario/g, cinema.horario));
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


					let imagem
					if ($("#loja").length) {
						if (loja.loja_imagem_1_url) {
							imagem = loja.loja_imagem_1_url
						} else {
							imagem = loja.loja_imagem_1 ? apis.upload_site_loja + loja.loja_imagem_1 : 'https://upload.madnezz.com.br/178bb77ef606f034b225aa12ab3b41ff';
						}
					}

					if ($("#alimentacao").length) {
						if (loja.loja_imagem_1_url) {
							imagem = loja.loja_imagem_1_url
						} else {
							imagem = loja.loja_imagem_1 ? apis.upload_site_loja + loja.loja_imagem_1 : 'https://upload.madnezz.com.br/89440859b3ef2dddd90cb7f4dfdeb345';
						}
					}

					if ($("#servico").length) {
						if (loja.loja_imagem_1_url) {
							imagem = loja.loja_imagem_1_url
						} else {
							imagem = loja.loja_imagem_1 ? apis.upload_site_loja + loja.loja_imagem_1 : 'https://upload.madnezz.com.br/cb029873a4d415f5de5ebd9f8ea64dd4';
						}
					}
					var texto = loja.loja_texto
						.replace(/WhatsApp: (.*)(\n)?/gi, "<br /><a href='http://api.whatsapp.com/send?phone=55 $1' class='link_whatsapp' target='_blank'><img src='https://upload.madnezz.com.br/eb04616109ebbbad46a297ae603dbf30' alt='WhatsApp' class='icon' /> $1</a>")
						.replace(/Delivery: (.*)(\n)?/gi, "<br /><a href='$1' target='_blank'><img src='https://upload.madnezz.com.br/62e2b0b517d5481189d3638b1388b417' alt='Delivery' class='icon' /></a>")
						.replace(/iFood/g, "<br /><img src='https://upload.madnezz.com.br/d12300e0696acd224d39b45c717ff559' alt='iFood' class='icon' /> iFood")
						.replace(/Rappi/g, "<br /><img src='https://upload.madnezz.com.br/15ce8a089ad28abc48ed6aea28a7a20c' alt='Rappi' class='icon' /> Rappi")
						.replace(/Telefone:/g, "<br /><img src='https://upload.madnezz.com.br/5b5ee82d0f2345c121fbd85d67425472' alt='Telefone' class='icon' />")
						.replace(/Tel:/g, "<br /><img src='https://upload.madnezz.com.br/5b5ee82d0f2345c121fbd85d67425472' alt='Telefone' class='icon' />")
						.replace(/Atendimento a domicílio:/gi, "<span>Atendimento a domicílio:</span><br />");

					if (loja.instagram) {
						texto += "<br /><a href='" + loja.instagram + "' target='_blank'><img src='https://upload.madnezz.com.br/8b97fdba8c4029802f86253010fdf44d' alt='Instagram' class='icon' /> Instagram</a>";
					}

					$('.loja_lista').append('<li class="pr loja_' + loja.id + ' " value="' + loja.id + '">' +
						'<img src="' + imagem + '"  />' +
						'<h2 class="ls2" >' + loja.loja_nome + '</h2><br><br><br>' +
						'<div class="info-lojas">' +

						'<p><span>Segmento:</span> ' + loja.ramo_nome + '</p>' +
						(loja.loja_telefone ? '<p><span>Telefone:</span> ' + loja.loja_telefone + '</p>' : '') +
						(loja.loja_site ? '<p><span>Site:</span> ' + loja.loja_site + '</p>' : '') +
						(loja.loja_texto ? '<br><p> ' + texto + '</p>' : '') +
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
			tipo = "2";
		} else if ($("#servico").length) {
			tipo = "3";
		}

		//Inicio
		$("[name=filtro_ramo]").append("<option value=''>Categorias</option>");
		$.ajax({ url: apis.loja + "?tipo=" + tipo + "&shopping_id=" + shopping_id + "&full=true&jsoncallback=?", dataType: "json" }).done(function (data) {
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


	} else if ($("#novidade").length) {
		scrollTo = function (el) { if (el) { $("html,body").stop().animate({ scrollTop: el.offset().top - 168 }, 300); } };
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
					conteudo_whatsapp = 't1=- ' + titulo;

					let whatsapp_img;
					if (novidade.novidade_imagem_1_url) {
						whatsapp_img = novidade.novidade_imagem_1_url;
					} else {
						whatsapp_img = novidade.novidade_imagem_1;
					}

					let imagem
					if (novidade.imagem_url) {
						imagem = novidade.imagem_url
					} else {
						imagem = novidade.imagem ? apis.upload_site_novidade + novidade.imagem : 'https://upload.madnezz.com.br/178bb77ef606f034b225aa12ab3b41ff';
					}

					let imagemHome;
					if(novidade.novidade_imagem_home_url){
						imagemHome = novidade.novidade_imagem_home_url
					}else{
						imagemHome = apis.upload_site_novidade + novidade.novidade_imagem_home ;
					}

					let imagem1;
					if(novidade.novidade_imagem_1_url){
						imagem1 = novidade.novidade_imagem_1_url
					}else{
						imagem1 = apis.upload_site_novidade + novidade.novidade_imagem_1 ;
					}


					$('.novidade_lista').append('<li class="pr" data-id="' + novidade.novidade_id + '" ">' +
						'<div class="img-close"><img src="' + imagemHome + '"  /></div>' +
						'<div class="img-open"><img src="' + imagem1 + '"  /></div>' +
						'<div class="info-novidade">' +
						'<h3 class="green2 mt0">' + novidade.novidade_nome + '</h3><br>' +
						'<p class="texto_resumido">' + (novidade.novidade_texto.length > 200 ? novidade.novidade_texto.substr(0, novidade.novidade_texto.indexOf(' ', 200)) + '...' : novidade.novidade_texto).replace(/<br><br>/g, '').replace(/<br \/><br \/>/g, '<br>') + '<br /><span class="leia_mais green2">(Leia Mais)</span></p><br>' +
						//'<div class="fb-share-button" data-href="https://shoppingjaragua.com.br/araraquara/novidade.php?novidade_id='+novidade.novidade_id+'" data-layout="button_count"></div>'+
						//'<a  href="'+encodeURIComponent(monta_sharer(novidade.novidade_id,conteudo,share_img))+'"></a>'+
						//'<a href="whatsapp://send?text='+encodeURIComponent(monta_whatsapp(novidade.novidade_id,conteudo_whatsapp,whatsapp_img))+'" class="whatsapp"></a>'+
						'<p class="texto_completo">' + novidade.novidade_texto + '<br><br><span class="voltar"><a href="novidade.php">> Voltar</a></span></p>' +
						'</div>' +
						'</li>');
					//if(i==2) return false; //para mostrar so 3
				});
			} else {
				$('.novidade_qtd').html('Nenhuma notícia encontrada');
			}

			if ($('.bg_branco.active').find('.info-novidade').has('.text-center').length > 0) {
				$('.info-novidade').addClass('text-center');
			}

		}

		if (novidade_id) {
			$(window).load(function () {
				setTimeout(function () {
					$('[data-id=' + novidade_id + '] .leia_mais').click();
					novidade_id = 0;
					scrollTo(0, 568);
				}, 2000);
			});
		}

		$('body').on('click', '.open_fp', function (event) {
			event.preventDefault();
			window.open($(this).find('a').attr('href'), 'newwindow', 'width=500', 'height=600');
		});
		$.ajax({ url: apis.novidade + "?shopping_id=" + shopping_id + "&jsoncallback=?", dataType: "json" }).done(function (data) {
			monta_novidade(data);
		});

		//Eventos da busca por data
		$("[name=mes],[name=ano]").change(function () {
			$.ajax({ url: apis.novidade + "?shopping_id=" + shopping_id + "&mes=" + $('[name=mes]').val() + "&ano=" + $('[name=ano]').val() + "&jsoncallback=?", dataType: "json" }).done(function (data) {
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

			if ($('.bg_branco.active').find('li.active .info-novidade').has('.text-center').length > 0) {
				$('.info-novidade').addClass('text-center');
			}
		});
	} else if ($("#contato").length) {
		$.mask.definitions["t"] = "[0-9-]";
		$("#contato_telefone").mask("(99) tttttttt?ttt", {
			placeholder: "_"
		});
		$("#contato_cpf").mask("999.999.999-99", {
			placeholder: "_"
		});
		$(".form").submit(function (event) {
			event.preventDefault();

			var tk = $('[name=contato_tk]').val();

			var nome = $("[name=contato_nome]").val().trim();
			var email = $("[name=contato_email]").val().trim();
			var telefone = $("[name=contato_telefone]").val();
			var assunto = $("[name=contato_assunto]").val();
			var cpf = $('[name=contato_cpf]').val().trim();
			var cidade = $('[name=contato_cidade]').val().trim();

			var mensagem = $("[name=contato_mensagem]").val().trim();
			var politica = $("[name=politica]").prop("checked");

			var recaptcha_contato;
			var recaptchaResponse = grecaptcha.getResponse(recaptcha_contato);

			if (!recaptchaResponse) {
				alert("Preencha o reCaptcha");
				return false;

			} else if (!politica) {
				alert("Concorde com os Termos de Uso");
				return false;

			} else if (!nome) {
				alert("Preencha o nome");
				return false;

			} else if (!email) {
				alert("Preencha o email");
				return false;

			} else if (!validaEmail(email)) {
				alert("Preencha um e-mail válido");
				return false;

			} else if (!telefone) {
				alert("Preencha o telefone");
				return false;

			} else if (!assunto) {
				alert("Selecione o Assunto");
				return false;

			} else if (!cpf) {
				alert("Preencha o CPF");
				return false;

			} else if (!TestaCPF($(this).find('[name=contato_cpf]').val().replace(/\./g, '').replace(/-/g, ''))) {
				alert("Preencha um CPF válido");
				return false;

			} else if (!cidade) {
				alert("Preencha a Cidade");
				return false;

			} else if (!mensagem) {
				alert("Preencha a mensagem");
				return false;

			} else {
				$("#contato_form").prop("disabled", true);

				$.ajax(apis.contato + '?api_token=' + shopping_token, {
					data: {
						"tk": shopping_token,
						"cpf": cpf,
						"telefone": telefone,
						"celular": "",
						"cep": cidade,
						"email": email,
						"nome": nome,
						"assunto": assunto,
						"mensagem": mensagem,
						"sendmail": 1,
						"reply": 1,
					},
					type: 'POST',
					dataType: 'json'
				}).then(function (data) {
					switch (data.status) {
						case "done":

							$("[name=contato_nome]").val("");
							$("[name=contato_email]").val("");
							$("[name=contato_telefone]").val("");
							$("[name=contato_assunto]").prop("selectedIndex", 0);
							$('[name=contato_cpf]').val("");
							$('[name=contato_cidade]').val("");

							$("[name=contato_mensagem]").val("");
							$("[name=politica]").prop("checked", false);

							alert("Mensagem enviada com sucesso");
							$("#contato_form").attr("disabled", false);
							break;

						default:

							alert("Não foi possível enviar mensagem, tente novamente mais tarde.");
							console.log(data.error);
							console.log(data.message);
							console.log(data.errors);
							$("#contato_form").attr("disabled", false);
							break;
					}
					$(".form_submit").prop("disabled", false);
				});
				return false;
			}
			return false;
		});

	} else if ($("#oportunidade").length) {
		$.getJSON(apis.oportunidade + "?tk=" + shopping_token + "&tp=0&shopping_id=" + shopping_id, null, function (data) {
			$.each(data, function () {
				if (this.id != 2 && this.id != 3 && this.id != 5 && this.id != 6 && this.id != 9) {
					$("#area").append("<option value='" + this.id + "'>" + this.area + "</option>");
				}
			});
		});
		//$.getJSON(apis.oportunidade+"?tk="+shopping_token+"&tp=1",null,function(data){
		$.getJSON(apis.oportunidade + "?tk=V36HkOVTeeZm71r1H8o4iGAL1wEeLfpx&tp=1", null, function (data) {
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



		// Coleta o nome do arquivo anexado
		$('input[type="file"]').on('change', function (event, files, label) {
			if (this.value.indexOf(".doc") < 0 && this.value.indexOf(".pdf") < 0 && this.value.indexOf(".jp") < 0) {
				window.alert("Formato de arquivo não é permitido.")
			} else {
				var file_name = this.value.replace(/\\/g, '/').replace(/.*\//, '')
				$('#lblAnexo').html(file_name);
			}
		});


		$('#oportunidade_form').submit(function (event) {
			event.preventDefault();

			var tk = $('[name=tk]').val();
			var tp = $('[name=tp]').val();

			var area = $('[name=area]').val();
			var nome = $('[name=nome]').val().trim();
			var email = $('[name=email]').val().trim();
			var cpf = $('[name=cpf]').val().trim();

			var anexo = $('[name=anexo]')[0].files[0];
			var politica = $("[name=politica]").is(':checked');

			var recaptcha_trabalhe;
			var recaptchaResponse = grecaptcha.getResponse(recaptcha_trabalhe);


			if (!recaptchaResponse) {
				alert("Preencha o reCaptcha");
				return false;

			} else if (!politica) {
				alert("Concorde com a Política de Privacidade");
				return false;

			} else if (!area) {
				alert("Selecione uma área");
				return false;

			} else if (!nome) {
				alert("Preencha o nome");
				return false;

			} else if (!email) {
				alert("Preencha o email");
				return false;

			} else if (!cpf) {
				alert("Preencha o CPF");
				return false;

			} else if (!TestaCPF($(this).find('[name=cpf]').val().replace(/\./g, '').replace(/-/g, ''))) {
				alert("Preencha um CPF válido");
				return false;

			} else if (!anexo) {
				alert("Escolha o seu currículo");
				return false;

			} else if (anexo.type !== 'application/msword' && anexo.type !== 'application/vnd.openxmlformats-officedocument.wordprocessingml.document' && anexo.type !== 'image/jpeg' && anexo.type !== 'application/pdf') {
				alert('O currículo deve ser um arquivo do tipo .doc, .docx, .jpg ou .pdf');
				return false;

			} else if (anexo.size < 5120 || anexo.size > 2097152) {
				alert('O currículo deve ter um tamanho entre 5KB e 2MB');
				return false;

			} else {
				$("#oportunidade_form").prop("disabled", true);

				const formVar = new FormData();
				formVar.append('tk', tk);
				formVar.append('cliente', '');
				formVar.append('tp', tp);
				formVar.append('nome', nome);
				formVar.append('email', email);
				formVar.append('cpf', cpf);
				formVar.append('nascimento', '');
				formVar.append('sexo', '');
				formVar.append('escolaridade', '');
				formVar.append('cidade', '');
				formVar.append('estado', '');
				formVar.append('telefone1', '');
				formVar.append('telefone2', '');
				formVar.append('cargo', '');
				formVar.append('observacao', '');
				formVar.append('anexo', $('[name=anexo]')[0].files[0]);
				formVar.append('area', area);
				formVar.append('vaga', '');

				const settings = {
					data: formVar,
					async: true,
					crossDomain: true,
					url: apis.trabalhe_conosco + '?api_token=' + shopping_id,
					method: 'POST',
					headers: {
						Accept: 'application/json'
					},
					processData: false,
					contentType: false,
					mimeType: 'multipart/form-data'
				};

				$.ajax(settings).done(function (response) {

					$('[name=area]').prop("selectedIndex", 0);
					$('[name=nome]').val("");
					$('[name=email]').val("");
					$('[name=cpf]').val("");
					$('[name=anexo]').prop('value', '');
					$('#lblAnexo').html("Envie seu currículo");
					$("[name=politica]").prop("checked", false);


					$("#oportunidade_form").prop("disabled", false);
					alert('Currículo cadastrado com sucesso!');
					return true;

				}).fail(function (xhr, status, error) {

					$("#oportunidade_form").prop("disabled", false);
					alert("Erro ao enviar a mensagem, por favor tente mais tarde.");
					console.log("Erro ao enviar solicitação: " + error);
					return false;

				});
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