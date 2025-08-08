/*MASK*/
(function (e) { function t() { var e = document.createElement("input"), t = "onpaste"; return e.setAttribute(t, ""), "function" == typeof e[t] ? "paste" : "input" } var n, a = t() + ".mask", r = navigator.userAgent, i = /iphone/i.test(r), o = /android/i.test(r); e.mask = { definitions: { 9: "[0-9]", a: "[A-Za-z]", "*": "[A-Za-z0-9]" }, dataName: "rawMaskFn", placeholder: "_" }, e.fn.extend({ caret: function (e, t) { var n; if (0 !== this.length && !this.is(":hidden")) return "number" == typeof e ? (t = "number" == typeof t ? t : e, this.each(function () { this.setSelectionRange ? this.setSelectionRange(e, t) : this.createTextRange && (n = this.createTextRange(), n.collapse(!0), n.moveEnd("character", t), n.moveStart("character", e), n.select()) })) : (this[0].setSelectionRange ? (e = this[0].selectionStart, t = this[0].selectionEnd) : document.selection && document.selection.createRange && (n = document.selection.createRange(), e = 0 - n.duplicate().moveStart("character", -1e5), t = e + n.text.length), { begin: e, end: t }) }, unmask: function () { return this.trigger("unmask") }, mask: function (t, r) { var c, l, s, u, f, h; return !t && this.length > 0 ? (c = e(this[0]), c.data(e.mask.dataName)()) : (r = e.extend({ placeholder: e.mask.placeholder, completed: null }, r), l = e.mask.definitions, s = [], u = h = t.length, f = null, e.each(t.split(""), function (e, t) { "?" == t ? (h--, u = e) : l[t] ? (s.push(RegExp(l[t])), null === f && (f = s.length - 1)) : s.push(null) }), this.trigger("unmask").each(function () { function c(e) { for (; h > ++e && !s[e];); return e } function d(e) { for (; --e >= 0 && !s[e];); return e } function m(e, t) { var n, a; if (!(0 > e)) { for (n = e, a = c(t); h > n; n++)if (s[n]) { if (!(h > a && s[n].test(R[a]))) break; R[n] = R[a], R[a] = r.placeholder, a = c(a) } b(), x.caret(Math.max(f, e)) } } function p(e) { var t, n, a, i; for (t = e, n = r.placeholder; h > t; t++)if (s[t]) { if (a = c(t), i = R[t], R[t] = n, !(h > a && s[a].test(i))) break; n = i } } function g(e) { var t, n, a, r = e.which; 8 === r || 46 === r || i && 127 === r ? (t = x.caret(), n = t.begin, a = t.end, 0 === a - n && (n = 46 !== r ? d(n) : a = c(n - 1), a = 46 === r ? c(a) : a), k(n, a), m(n, a - 1), e.preventDefault()) : 27 == r && (x.val(S), x.caret(0, y()), e.preventDefault()) } function v(t) { var n, a, i, l = t.which, u = x.caret(); t.ctrlKey || t.altKey || t.metaKey || 32 > l || l && (0 !== u.end - u.begin && (k(u.begin, u.end), m(u.begin, u.end - 1)), n = c(u.begin - 1), h > n && (a = String.fromCharCode(l), s[n].test(a) && (p(n), R[n] = a, b(), i = c(n), o ? setTimeout(e.proxy(e.fn.caret, x, i), 0) : x.caret(i), r.completed && i >= h && r.completed.call(x))), t.preventDefault()) } function k(e, t) { var n; for (n = e; t > n && h > n; n++)s[n] && (R[n] = r.placeholder) } function b() { x.val(R.join("")) } function y(e) { var t, n, a = x.val(), i = -1; for (t = 0, pos = 0; h > t; t++)if (s[t]) { for (R[t] = r.placeholder; pos++ < a.length;)if (n = a.charAt(pos - 1), s[t].test(n)) { R[t] = n, i = t; break } if (pos > a.length) break } else R[t] === a.charAt(pos) && t !== u && (pos++, i = t); return e ? b() : u > i + 1 ? (x.val(""), k(0, h)) : (b(), x.val(x.val().substring(0, i + 1))), u ? t : f } var x = e(this), R = e.map(t.split(""), function (e) { return "?" != e ? l[e] ? r.placeholder : e : void 0 }), S = x.val(); x.data(e.mask.dataName, function () { return e.map(R, function (e, t) { return s[t] && e != r.placeholder ? e : null }).join("") }), x.attr("readonly") || x.one("unmask", function () { x.unbind(".mask").removeData(e.mask.dataName) }).bind("focus.mask", function () { clearTimeout(n); var e; S = x.val(), e = y(), n = setTimeout(function () { b(), e == t.length ? x.caret(0, e) : x.caret(e) }, 10) }).bind("blur.mask", function () { y(), x.val() != S && x.change() }).bind("keydown.mask", g).bind("keypress.mask", v).bind(a, function () { setTimeout(function () { var e = y(!0); x.caret(e), r.completed && e == x.val().length && r.completed.call(x) }, 0) }), y() })) } }) })(jQuery);

$(function ($) {
  $("input[name=tk]").val(shopping_token)
  $.getJSON(apis.oportunidade + "?tk=" + shopping_token + "&tp=0", null, function (data) {
    $.each(data, function () {
      $("[name=area]").append("<option value='" + this.id + "'>" + this.area + "</option>");
    });
  });
  //$(".vagas").html("");
  $.getJSON(apis.oportunidade + "?tk=" + shopping_token + "&tp=1", null, function (data) {
    if (data.length) {
      $.each(data, function () {
        loja = this.loja == "Shopping" ? "Shopping" : this.loja.substr(0, this.loja.indexOf("(") - 1);
        quantidade = parseInt(this.quantidade) > 1 ? this.quantidade + " Vagas" : "1 Vaga";
        var nomeLoja = this.loja.split(' (')[0];

        let = logoUrl;
        if (this.loja_logo_url) {
          logoUrl = this.loja_logo_url
        } else {
          logoUrl = 'https://sal.madnezz.com.br/api/site/upload/loja/' + this.loja_logo
        }

        $(".vagas ul").append(
          '<li class="swiper-slide">' +
          (this.loja_logo ? '<img src="' + logoUrl + '' + '" alt="' + nomeLoja + '">' : '<h5 class="alt-font font-weight-600 text-extra-dark-gray">' + nomeLoja.toLowerCase() + '</h5>') +
          '<p class="mb-4">' +
          '<b>Cargo:</b> ' + this.cargo + '<br>' +
          '<b>Quantidade:</b> ' + this.quantidade + '<br><br>' +

          '<b>Descrição:</b><br>' +
          this.descricao +
          '</p>' +

          '<button name="submit" id="' + this.id + '" class="btn btn-medium btn-gradient-light-purple-light-orange mb-0 submit mt-4">Candidatar-se</button>' +
          '</li>'
        )
      });
      $('.vagas ul li').on('click', 'button', function () {
        var id = $(this).attr('id');
        var loja = $(this).parents('li').find('h5').text();
        if ($('[name="loja"]').length <= 0) {
          $('<div class="col-xl-6">' +
            '<div class="box-submit">' +
            '<input type="text" class="medium-input bg-white margin-20px-bottom" name="loja" value="Loja ' + loja + '" readonly />' +
            '<i class="fas fa-times close-alert close-loja"></i>' +
            '</div>' +
            '</div>').insertBefore($('[name="nome"]').parents('.col-xl-6'));
        }
        $('[name="vaga"], [name="vaga_id"]').val(id);
        $('[name="tp"]').val(1);
        $('[name="area"]').parents('.col-xl-6').hide();

        $('html, body').animate({
          scrollTop: $('.form_contato').offset().top - 200
        }, 500);
      });

      $('form').on('click', '.close-loja', function () {
        $(this).parents('.col-xl-6').remove();
        $('[name="vaga"], [name="vaga_id"]').val('');
        $('[name="tp"]').val(2);
        $('[name="area"]').parents('.col-xl-6').show();
      });
    } else {
      $('.vagas').remove();
      $('.vagas_qtd').show();
    }
  });
  $(".curriculo").on("click", function () {
    $(".anexo").fadeIn(1000, "easeInOutExpo");
  });
  $(".anexo .fechar").on("click", function () {
    $(".anexo").fadeOut(500, "easeInOutExpo");
  });


  $('.bt_curriculo').on('click', function (e) {
    $('#div_formulario').slideDown('fast');
  });

  function validaEmail(email) {
    var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/; return re.test(email);
  }

  function valida_cpf(cpf) {
    var strCPF = cpf.replace(/[\.-]/g, ''); // Remove pontos e hífen
    var Soma = 0;
    var Resto;

    // Verifica se o CPF tem números repetidos
    if (strCPF == "00000000000" || strCPF == "11111111111" || strCPF == "22222222222" || strCPF == "33333333333" || strCPF == "44444444444" || strCPF == "55555555555" || strCPF == "66666666666" || strCPF == "77777777777" || strCPF == "88888888888" || strCPF == "99999999999") {
      return false;
    }

    // Validação do primeiro dígito
    for (var i = 1; i <= 9; i++) {
      Soma += parseInt(strCPF.substring(i - 1, i)) * (11 - i);
    }
    Resto = (Soma * 10) % 11;
    if ((Resto == 10) || (Resto == 11)) Resto = 0;
    if (Resto != parseInt(strCPF.substring(9, 10))) return false;

    // Validação do segundo dígito
    Soma = 0;
    for (var i = 1; i <= 10; i++) {
      Soma += parseInt(strCPF.substring(i - 1, i)) * (12 - i);
    }
    Resto = (Soma * 10) % 11;
    if ((Resto == 10) || (Resto == 11)) Resto = 0;
    if (Resto != parseInt(strCPF.substring(10, 11))) return false;

    return true;
  }


  $("#oportunidade_form").submit(function (event) {
    event.stopPropagation();
    event.preventDefault();
    var area = $('#area').val();
    var nome = $('[name=nome]').val().trim();
    var email = $('[name=email]').val().trim();
    var cpf = $('[name=cpf]').val().trim();
    var anexo = $('[name=anexo]')[0].files[0];
    if (!anexo) { alert("Escolha o seu Currículo"); return false; }
    var tipoArquivo = anexo.type;
    var tamanhoArquivo = anexo.size;

    var recaptcha_contato;
    var recaptchaResponse = grecaptcha.getResponse();

    if (!recaptchaResponse) {
      alert("Preencha o reCaptcha");
      return false;
    } else if (!nome) {
      alert("Preencha o nome");
      return false;
    } else if (!area) {
      alert("Preencha a Área");
      return false;
    } else if (!email) {
      alert("Preencha o email");
      return false;
    } else if (!validaEmail(email)) {
      alert("Preencha um e-mail válido");
      return false;
    } else if (!cpf) {
      alert("Preencha o CPF");
      return false;
    } else if (!valida_cpf(cpf)) {
      alert("Preencha um CPF válido");
      return false;
    } else if (tipoArquivo !== 'application/msword' && tipoArquivo !== 'application/vnd.openxmlformats-officedocument.wordprocessingml.document' && tipoArquivo !== 'image/jpeg' && tipoArquivo !== 'application/pdf') {
      alert('O anexo deve ser um arquivo do tipo .doc, .docx, .jpg ou .pdf');
      return false;
    } else if (tamanhoArquivo < 5120 || tamanhoArquivo > 2097152) {
      alert('O anexo deve ter um tamanho entre 5KB e 2MB');
      return false;
    } else {
      $("#oportunidade_form").prop("disabled", true);

      const formVar = new FormData();
      formVar.append('tk', shopping_id);
      formVar.append('cliente', '');
      formVar.append('tp', '');
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
      formVar.append('sendmail', 1);
      formVar.append('reply', 1);

      const settings = {
        data: formVar,
        async: true,
        crossDomain: true,
        url: apis.trabalhe_conosco_actions + '?api_token=' + shopping_id,
        method: 'POST',
        headers: {
          Accept: 'application/json'
        },
        processData: false,
        contentType: false,
        mimeType: 'multipart/form-data'
      };

      $.ajax(settings).done(function (response) {
        $("#oportunidade_form")[0].reset();
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




  $('.vagas').on('click', 'li button', function () {
    loja = $(this).parents('li').find('h2').text();
    vaga = $(this).parents('li').find('.cargo').text();
    $('#trabalhe_conosco').find('[name=area]').val(loja + ' - ' + vaga);
  });

  // Coleta o nome do arquivo anexado
  $('input[type="file"]').on('change', function (event, files, label) {
    var file_name = this.value.replace(/\\/g, '/').replace(/.*\//, '')
    $('label.anexo span').html(file_name);
  });

  //MASK
  $.mask.definitions["t"] = "[0-9-]";
  $('[name="telefone"]').mask('(99) tttt-tttt?t', {
    placeholder: "_"
  });
  $('[name="cpf"]').mask('ttt.ttt.ttt-tt', {
    placeholder: "_"
  });
});