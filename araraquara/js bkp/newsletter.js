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
			var re=/^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/; return re.test(email);
		}
	


		$(function () {
			$f.find('.step2').hide()
			$f.find('.step1 :submit').on('click', function (evt) {
				evt.stopPropagation();
				evt.preventDefault();

				if (!$f.find("[name=newsletter_nome]").val() || !$f.find("[name=newsletter_email]").val() || !$f.find("[name=newsletter_nascimento]").val() || !$f.find("[name=newsletter_cpf]").val()) {
					alert("Preencha todos os campos");
					return
				} else if (!validaEmail($f.find("[name=newsletter_email]").val())) {
					alert("Preencha um e-mail válido");
					return;
				} else if (!valida_cpf($f.find("[name=newsletter_cpf]").val())) {
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
				
				var recaptcha_newsletter;
				var recaptchaResponse = grecaptcha.getResponse(recaptcha_newsletter);

				if (!$f.find("[name=newsletter_email]").val()) {
					alert("Preencha todos os campos");
					return false;
				} else if (!validaEmail($f.find("[name=newsletter_email]").val())) {
					alert("Preencha um e-mail válido");
					return false;
				} else if (!valida_cpf($f.find("[name=newsletter_cpf]").val())) {
					alert("Preencha um CPF válido");
					return false;
				} else if (!$f.find("[name=newsletter_politica]").prop("checked")) {
					alert("Concorde com os Termos de Uso");
					return false;
				} else if( !recaptchaResponse ){
					alert("Preencha o reCaptcha");
					return false;					
				} else {
					$.post(apis.newsletter+'?api_token=' + shopping_token, {

						"token": shopping_token,
						"shopping_id": shopping_id,
						"nome": $f.find("[name=newsletter_nome]").val(),
						"email": $f.find("[name=newsletter_email]").val(),

						"nascimento": $f.find("[name=newsletter_nascimento]").val(),
						"cpf": $f.find("[name=newsletter_cpf]").val()

					},
						function (data) {
							switch (data.status) {
								case "done":
									$('.step2').fadeOut();
									alert("Cadastro efetuado com sucesso");
									break;
							}
						}
					);
				}
			});
		});
});