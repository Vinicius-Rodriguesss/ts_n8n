

$(function () {
 function valida_cpf(cpf) {
  var strCPF = cpf.replace(/[\.-]/g, '');
  var Soma = 0;
  var Resto;
  if (strCPF == "00000000000" || strCPF == "11111111111" || strCPF == "22222222222" || strCPF == "33333333333" || strCPF == "44444444444" || strCPF == "55555555555" || strCPF == "66666666666" || strCPF == "77777777777" || strCPF == "88888888888" || strCPF == "99999999999") return false;
  for (i = 1; i <= 9; i++) Soma += parseInt(strCPF.substring(i - 1, i)) * (11 - i);
  Resto = (Soma * 10) % 11;
  if ((Resto == 10) || (Resto == 11)) Resto = 0;
  if (Resto != parseInt(strCPF.substring(9, 10))) return false;
  Soma = 0;
  for (i = 1; i <= 10; i++) Soma += parseInt(strCPF.substring(i - 1, i)) * (12 - i);
  Resto = (Soma * 10) % 11;
  if ((Resto == 10) || (Resto == 11)) Resto = 0;
  if (Resto != parseInt(strCPF.substring(10, 11))) return false;
  return true;
 }

 $("#contato_email").focusout(function () {
  if (!validaEmail($(this).val())) {
   alert("Favor digitar um e-mail válido");
  }
 });

 function validarEmail(email) {
  var regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  return regex.test(email);
 }

 $('#telefone').mask('(99) 99999-9999');

 $("#contato_form").submit(function (event) {
  event.stopPropagation();
  event.preventDefault();


  var nome = $('[name=contato_nome]').val().trim();
  var email = $('[name=contato_email]').val().trim();
  var telefone = $('[name=contato_telefone]').val().trim();
  var assunto = $('#contato_assunto').val()
  var mensagem = $('[name=contato_mensagem]').val().trim();

  //var politica		= $("[name=politica]").is(':checked');

  var recaptcha_contato;
  var recaptchaResponse = grecaptcha.getResponse();

  if (!recaptchaResponse) {
   alert("Por favor, confirme que você não é um robô.");
   return false;
  } else if (!nome) {
   alert("Informe seu nome.");
   return false;
  } else if (!assunto) {
   alert("Selecione um assunto.");
   return false;
  } else if (!telefone) {
   alert("Informe seu número de telefone.");
   return false;
  } else if (!email) {
   alert("Informe seu e-mail.");
   return false;
  } else if (!validarEmail(email)) {
   alert("Informe um e-mail válido.");
   return false;
  } else if (!mensagem) {
   alert("Escreva sua mensagem.");
   return false;
  } else {
   $("#submit").prop("disabled", true);
   $.ajax(apis.contato + '?api_token=' + shopping_id, {
    data: {
     "tk": shopping_token,
     "cpf": "",
     "telefone": telefone,
     "celular": "",
     "cep": "",
     "email": email,
     "nome": nome,
     "assunto": assunto,
     "mensagem": mensagem,
     "validaemail": "",
     "sendmail": 1,
     "reply": 1
    },
    type: 'POST',
    dataType: 'json'
   }).then(function (data) {
    switch (data.status) {
     case "done":
      $("#submit").prop("disabled", false);

      alert("Mensagem enviada com sucesso");
      $("#contato_form")[0].reset();

      break;

     default:
      $("#submit").prop("disabled", false);

      alert("Erro ao enviar a mensagem, por favor tente mais tarde.");

      console.log("Erro ao enviar solicitação: " + error);
      break;
    }
    $(".form_submit").prop("disabled", false);
   });
   return false;
  }
  return false;
 });


 //FECHA ALERTA
 $('.alerta').on('click', 'i', function () {
  $(this).parents('.alerta').removeClass('active').removeClass('pulse');
 });
});