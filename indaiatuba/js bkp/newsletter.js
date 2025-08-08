
$(function () {
	function validaEmail(email) {
		var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
		return re.test(email);
	}
	
		$('.step2').hide();
	
		$(" #ok1").click(function (evt) {
			evt.stopPropagation();
			evt.preventDefault();
			var newsName = $("#nome").val().trim();
			var newsEmail = $("#email").val().trim();

			if (!newsName) {
				alert("Preencha o nome");
				return;
			} else if (!newsEmail) {
				alert("Preencha o e-mail");
				return;
			}
			else if (!validaEmail(newsEmail)) {
				alert("Favor digitar um e-mail válido");
				return;
			}
	
			$('.step1').fadeOut().queue(function (d) {
				$('.step2').fadeIn();
			});
		});
	

		$(' #ok2').on('click', function (evt) {
			evt.stopPropagation();
			evt.preventDefault();
	
			var recaptcha = grecaptcha.getResponse();
			if (!recaptcha) {
				alert("Valide o recaptcha");
				return false;
			}
	
			$.post(apis.newsletter + '?token=LnkHUOnCkjck7_nf_F3ksfdik@7', {
				"shopping_id": 5,
				"nome": $("#nome").val().trim(),
				"email": $("[name=email]").val().trim(),
				"celular": "",
				"origin": 1,
				"sendmail": 1,
			}, function (data) {
				//data = $.parseJSON(data);
	
				switch (data.status) {
					case "done":
						alert("Cadastro efetuado com sucesso");
						$('.step2').fadeOut();
						$("[name=nome]").val('');
						$("[name=email]").val('');
						$('.step1').css('display', 'block');
						break;
	
					default:
						alert("Erro ao enviar mensagem, por favor tente novamente");
						$("#contatoForm .btnBranco").attr("disabled", false);
						break;
				}
			});
		});
	});
	