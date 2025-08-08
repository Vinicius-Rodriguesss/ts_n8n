$(function(){
 $(".abre_news").on("click",function(){
	$(".fundo_news").fadeIn("slow")
})	
$(".fecha_news").on("click",function(){
	$(".fundo_news").fadeOut("slow")
})	
var $f = $(".newsletter")
		var cliKey =  shopping_token;
		var hash = "";
		function validaEmail(email){
	var re=/^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/; return re.test(email);}
	
		function getCaptcha() {
			if ($f.find('.captcha').html() == '') {
				$f.find('.captcha').html('<div class="imagemCaptchaVerify"></div>  <p><input type="text" name="txtCaptcha" class="txtCaptcha input-header" /></p>');
				$f.find('.captcha').find('a').on('click', getCaptcha)
			}
			$f.find('.imagemCaptchaVerify').html('<br /><p>Carregando...</p>');
			

			$.post(apis.contato_api+'?do=captcha&tk=' + cliKey + '', { 0: 0 }, function (data) {
				$f.find('.imagemCaptchaVerify').html('<img src=\"' + $.parseJSON(data).status + '\" class=\"imgCaptcha\" />&nbsp;<br />');
				hash = $.parseJSON(data).hash;
				
			});
		}



		$(function () {
			$f.find('.step2').hide()
			$f.find('.step1 :submit').on('click', function (evt) {
				evt.stopPropagation();
				evt.preventDefault();

				if (!$f.find("[name=nome]").val() || !$f.find("[name=email]").val() || !$f.find("[name=nascimento]").val() || !$f.find("[name=cpf]").val()) {
					alert("Preencha todos os campos");
					return
				} else if (!validaEmail($f.find("[name=email]").val())) {
					alert("Preencha um e-mail válido");
					return;
				} else if (!valida_cpf($f.find("[name=cpf]").val())) {
					alert("Preencha um CPF válido");
					return;
				}

				getCaptcha();
				$f.find('.imagemCaptchaVerify').click(function(event) {
					getCaptcha();
				});
				$('.txtCaptcha').keydown(function(event) {

			        if (event.keyCode == 13) {
			        	event.preventDefault();
			        	$('.cadas').click();
			            //this.form.submit();
			            return false;
			         }
			    });
				$f.find('.step1').fadeOut().queue(function (d) {
					alert(''); $f.find('.step2').fadeIn();
				})
			})
			
			$f.on('click', '.step2 :submit', function (evt) {
				evt.preventDefault();
				
				if (!$f.find(".txtCaptcha").val() || !$f.find("[name=email]").val()) {
					alert("Preencha todos os campos");
					return false;
				} else if (!validaEmail($f.find("[name=email]").val())) {
					alert("Preencha um e-mail válido");
					return false;
				} else if (!valida_cpf($f.find("[name=cpf]").val())) {
					alert("Preencha um CPF válido");
					return false;
				} else {
					$.post(apis.contato_api+'?do=cadastro&tk=' + cliKey + '&captcha=' + $f.find(".txtCaptcha").val() + '&hash=' + hash + '', {
							"nome": $f.find("[name=nome]").val(),
							"email": $f.find("[name=email]").val(),
							"nascimento": $f.find("[name=nascimento]").val(),
							"cpf": $f.find("[name=cpf]").val(),
							"origem": "1",
							"sendmail": "1"
						},
						function (data) {
							data = $.parseJSON(data);

							switch (data.status) {
								case "done":
									$('.step2').fadeOut();
									alert("Cadastro efetuado com sucesso");
									break;
								case "captcha-wrong-code":
									alert("O código do captcha é inválido, digite novamente");
									getCaptcha();
									break;
								case "captcha-expired":
									alert("O código do captcha já foi usado, tente novamente");
									getCaptcha();
									break;
							}
						}
					);
				}
			});
		});
});