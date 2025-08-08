$(function () {

 var d = new Date();
 var year = d.getFullYear();

 if ($("#novidade").length) {
  if (pagina == "novidade") {
   dir = 'Novidade';
   tipo = '1';
  }

  novidade_lista = function () {

   if ($("select.ano").val() && $("select.mes").val()) {
    url = apis.novidade_v3 + "?tp=" + tipo + "&ano=" + $("select.ano").val() + "&mes=" + $("select.mes").val() + "&shopping_id=" + shopping_id + "&jsoncallback="
   } else if ($("select.ano").val()) {
    url = apis.novidade_v3 + "?tp=" + tipo + "&ano=" + $("select.ano").val() + "&shopping_id=" + shopping_id + "&jsoncallback="
   } else {
    url = apis.novidade_v3 + "?tp=" + tipo + "&ano=" + year + "&shopping_id=" + shopping_id + "&jsoncallback="
   }
   $.ajax({ url: url, dataType: "json" }).done(function (data) {

    if (data.length) {
     $(".novidade_lista").html('');
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

      let imagemHome;
      if (novidade.novidade_imagem_home_url) {
       imagemHome = novidade.novidade_imagem_home_url;
      } else {
       imagemHome = apis.upload_site_novidade + novidade.novidade_imagem_home;
      }



      $(".novidade_lista").append(
       '<li id="' + novidade.novidade_id + '">' +
       '<a href="?novidade_id=' + novidade.novidade_id + '">' +
       '<div class="img-close"><img src="' + imagemHome + '"  /></div>' +
       '<div class="info-novidade">' +
       '<h3 class="green2 mt0">' + novidade.novidade_nome + '</h3><br>' +
       '<p class="texto_resumido">' + (novidade.novidade_texto.length > 200 ? novidade.novidade_texto.substr(0, novidade.novidade_texto.indexOf(' ', 200)) + '...' : novidade.novidade_texto).replace(/<br><br>/g, '').replace(/<br \/><br \/>/g, '<br>') + '<br /><span class="leia_mais green2">(Leia Mais)</span></p><br>' +
       '</div>' +
       '</a>' +
       '</li>'
      );
     });

     if (novidade_id) {
      $('.novidade_lista').hide();
      $('.content_box_grey').addClass('open');
      novidade_info(novidade_id);
     }
     $('.loading').hide();
     $(".novidade_qtd").html('Foram encontrados ' + data.length + ' resultados em sua pesquisa');
    } else {
     $('.novidade_lista').html("");
     $(".novidade_qtd").show();
     $(".novidade_qtd").html("Nenhuma ocorrência encontrada!");
    }
   });
  }

  novidade_info = function (novidade_id) {
   $('.busca_novidade').hide();
   $('.novidade_qtd').hide();
   $('.bg_cinza').hide();
   $.ajax({ url: apis.novidade_v3 + "?novidade_id=" + novidade_id + "&tp=" + tipo + "&shopping_id=" + shopping_id + "&jsoncallback=", dataType: "json" }).done(function (data) {
    _gaq.push(["_trackPageview", "novidade.php?click=" + data[0].novidade_nome]);

    console.log(data);


    let novidade_img;
    if (data[0].novidade_imagem_1_url) {
     novidade_img = data[0].novidade_imagem_1_url;
    } else {
     if (data[0].novidade_imagem_1) {
      novidade_img = apis.upload_site_novidade + data[0].novidade_imagem_1;
     } else {
      novidade_img = 'img/novidade.jpg';
     };
    }

    $('.titulo_novidade').html(data[0].novidade_nome);
    $('.bg_branco').addClass('active');

    $('.novidade_info').html(
     '<center><img src="' + novidade_img + '"></center>' +
     '<div class="info-novidade">' +
     '<h3 class="green2 mt0">' + data[0].novidade_nome + '</h3><br>' +
     '<p>' + data[0].novidade_texto + '<br><br><span class="voltar"><a href="novidade.php"> Voltar</a></span></p>' +
     '<div class="clear"></div>' +
     '</div>'
    );
   });
  }

  novidade_lista();

  $('.ano,.mes').change(function () {
   $('.novidade_lista').show();
   novidade_lista();
  })
 }

})