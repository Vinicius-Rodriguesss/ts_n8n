$(function(){
	if ($("#novidade").length){
		function monta_novidade(data){
			$('.novidade_qtd').show();
			$('.novidade_lista li').show().removeClass('active');
			$('.img-noticia').css({'display':'none !important'});
			if(data.length){ 
				$.each(data,function(i,novidade){
					if (i<=2){
						titulo = novidade.novidade_nome;
						txt = (novidade.novidade_texto?novidade.novidade_texto:'-');
						txt = txt.replace(/<br>/g,'').replace(/<br >/g,'').replace(/<br \/>/g,'').replace(/“/g,'').replace(/”/g,'');
						txt = (txt.length>200?txt.substr(0,txt.indexOf(' ',100))+'...':txt);
						conteudo = 't1='+titulo+'&t2='+txt+'&i='+apis.upload_site_novidade+novidade.novidade_imagem_1; 
						var imagem=novidade.imagem?apis.upload_site_novidade+novidade.imagem:'img/loja_padrao.jpg';
						dataEntrada=novidade.novidade_entrada.split("/")
						$('.novidade_lista').append('<li id="'+dataEntrada[2]+dataEntrada[1]+dataEntrada[0]+'" class="pr" data-id="'+novidade.novidade_id+'" ">'+
							'<div class="img-close"><a href="/araraquara/novidade.php?novidade_id='+this.novidade_id+'" target="_new">'+
								'<img src="'+apis.upload_site_novidade+novidade.novidade_imagem_home+'"  />'+
							'</a></div>'+
							'<div class="info-novidade">'+
								'<h3 class="green2 mt0">'+(novidade.novidade_nome.length>50?novidade.novidade_nome.substr(0,novidade.novidade_nome.indexOf(' ',25))+'...':novidade.novidade_nome).replace(/<br><br>/g,'').replace(/<br \/><br \/>/g,'<br>')+'</h3><br>'+
								'<h3 class="grey mt0">Jaraguá Araraquara</h3><br>'+
								'<p class="texto_resumido">'+(novidade.novidade_texto.length>150?novidade.novidade_texto.substr(0,novidade.novidade_texto.indexOf(' ',150))+'...':novidade.novidade_texto).replace(/<br><br>/g,'').replace(/<br \/><br \/>/g,'<br>')+'<br />'+
								'<a href="/araraquara/novidade.php?novidade_id='+this.novidade_id+'" target="_new"><span class="leia_mais grey">(Leia Mais)</span></a></p><br>'+
							'</div>'+
						'</li>');
					}
				});
			}
		}
		$('body').on('click', '.open_fp', function(event) {
			event.preventDefault();
			window.open($(this).find('a').attr('href'),'newwindow', 'width=500', 'height=600');
		});
		$.ajax({url:apis.novidade+"?shopping_id=204&jsoncallback=?",dataType:"json"}).done(function(data){
			monta_novidade(data);
		});
	}
})