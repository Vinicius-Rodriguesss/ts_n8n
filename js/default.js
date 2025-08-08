$(function(){
	
	var letra='',str='';
	aux1=false
	aux2=false
	aux3=false
	aux4=false
	
	//RETIRA ACENTOS
	function retira_acentos(palavra) { 
		com_acento = 'áàãâäéèêëíìîïóòõôöúùûüçÁÀÃÂÄÉÈÊËÍÌÎÏÓÒÕÖÔÚÙÛÜÇ'; 
		sem_acento = 'aaaaaeeeeiiiiooooouuuucAAAAAEEEEIIIIOOOOOUUUUC'; 
		nova=''; 
		for(i=0;i<palavra.length;i++) { 
			if (com_acento.search(palavra.substr(i,1))>=0) { 
				nova+=sem_acento.substr(com_acento.search(palavra.substr(i,1)),1); 
			} 
			else { 
				nova+=palavra.substr(i,1); 
			} 
		} 
		return nova; 
	}
	
	
	//ORDENAR LISTA DE NOVIDADES
	function ordenar() {
		
			if (aux1==true&&aux2==true&&aux3==true&&aux4==true){
				$('.novidade_lista li').each(function(index, el) {
					var str = $(this).find('h3.green2').text();
					str = retira_acentos(str.replace(/ /g, "-"));
					str = str.match('[a-zA-Z0-9]');				
					if ( !$('.novidade_lista .letter'+str).length ){
						$(this).attr('data-position',str);
					}
					
					letra=str;
				});		
			}
		
			$(".novidade_lista").each(function(){
				$(this).html($(this).children('li').sort(function(a, b){
					return ($(b).data('position')) < ($(a).data('position')) ? 1 : -1;
				}));
			});
	}
	
	
	
	
	/*ARROWS*/
	jQuery.fn.scrolly = function(elem, speed) { 
		$(this).animate({
		    scrollTop:  $(this).scrollTop() - $(this).offset().top + $(elem).offset().top
		}, speed == undefined ? 700 : speed); 
		return this; 
	};
	arrow_v = function(parent,eq){ parent.scrolly(eq);}
	arrow_x = function(parent,eq){ parent.scrollToX(eq);}
	if (!$("#index").length) {
		$('span.page_name').text($('.titulo h1').text());
	}
	$('.faixa input').focusin(function(event) {
		$(this).parent().find('label').fadeOut('fast');
	}).focusout(function(event) {
		$(this).parent().find('label').fadeIn('fast');
	});;
	if ($("#index").length) {
		//NOVIDADE ARARAQUARA
		$.ajax({url:apis.novidade+"?shopping_id=204&jsoncallback=?",dataType:"json"}).done(function(data){	
				var imagem=data[0].imagem?apis.upload_site_novidade+data[0].imagem:'img/loja_padrao.jpg';
				var titulo=data[0].novidade_nome.replace(/'/g,'');
				$('.novidade_lista').append('<li class="pr novidade_'+data[0].novidade_id+' ">'+
					'<div><a href="/araraquara/novidade.php?novidade_id='+data[0].novidade_id+'" target="_new"><img src="'+apis.upload_site_novidade+data[0].novidade_imagem_home+'" width="100%"></a></div>'+
					'<div class="info-novidade">'+
						'<h3 class="green2 mt0">'+titulo.replace(/<br><br>/g,'').replace(/<br \/><br \/>/g,'<br>')+'</h3>'+
							'<h3 class="grey mt0">Jaraguá Araraquara</h3><br>'+
							'<p class="texto_resumido taj">'+(data[0].novidade_texto.length>150?data[0].novidade_texto.substr(0,data[0].novidade_texto.indexOf(' ',150))+'...':data[0].novidade_texto).replace(/<br><br>/g,'').replace(/<br \/><br \/>/g,'<br>')+'<br />'+
							'<a href="/araraquara/novidade.php?novidade_id="'+(this).novidade_id+'" target="_new"><span class="leia_mais grey">(Leia Mais)</span></a></p><br>'+
					'</div>'+
				'</li>');	
				aux1=true;		
		});		
		
		//NOVIDADE CENESP
		$.ajax({url:apis.novidade+"?shopping_id=221&jsoncallback=?",dataType:"json"}).done(function(data){	
				var imagem=data[0].imagem?apis.upload_site_novidade+data[0].imagem:'img/loja_padrao.jpg';
				var titulo=data[0].novidade_nome.replace(/'/g,'');
				$('.novidade_lista').append('<li class="pr novidade_'+data[0].novidade_id+' ">'+
					'<div><a href="/cenesp/novidade.php?novidade_id='+data[0].novidade_id+'" target="_new"><img src="'+apis.upload_site_novidade+data[0].novidade_imagem_home+'" width="100%"></a></div>'+
					'<div class="info-novidade">'+
						'<h3 class="green2 mt0">'+titulo.replace(/<br><br>/g,'').replace(/<br \/><br \/>/g,'<br>')+'</h3>'+
							'<h3 class="grey mt0">Jaraguá Cenesp</h3><br>'+
							'<p class="texto_resumido taj">'+(data[0].novidade_texto.length>150?data[0].novidade_texto.substr(0,data[0].novidade_texto.indexOf(' ',150))+'...':data[0].novidade_texto).replace(/<br><br>/g,'').replace(/<br \/><br \/>/g,'<br>')+'<br />'+
							'<a href="/cenesp/novidade.php?novidade_id="'+(this).novidade_id+'" target="_new"><span class="leia_mais grey">(Leia Mais)</span></a></p><br>'+
					'</div>'+
				'</li>');	
				aux2=true;	
		});		
		
		//NOVIDADE CONCEICAO
		// $.ajax({url:apis.novidade+"?shopping_id=202&jsoncallback=?",dataType:"json"}).done(function(data){	
		// 		var imagem=data[0].imagem?apis.upload_site_novidade+data[0].imagem:'img/loja_padrao.jpg';
		// 		var titulo=data[0].novidade_nome.replace(/'/g,'');
		// 		$('.novidade_lista').append('<li class="pr novidade_'+data[0].novidade_id+' ">'+
		// 			'<div><a href="/conceicao/novidade.php?novidade_id='+data[0].novidade_id+'" target="_new"><img src="'+apis.upload_site_novidade+data[0].novidade_imagem_home+'" width="100%"></a></div>'+
		// 			'<div class="info-novidade">'+
		// 				'<h3 class="green2 mt0">'+titulo.replace(/<br><br>/g,'').replace(/<br \/><br \/>/g,'<br>')+'</h3>'+
		// 					'<h3 class="grey mt0">Jaraguá Conceição</h3><br>'+
		// 					'<p class="texto_resumido taj">'+(data[0].novidade_texto.length>150?data[0].novidade_texto.substr(0,data[0].novidade_texto.indexOf(' ',150))+'...':data[0].novidade_texto).replace(/<br><br>/g,'').replace(/<br \/><br \/>/g,'<br>')+'<br />'+
		// 					'<a href="/conceicao/novidade.php?novidade_id="'+(this).novidade_id+'" target="_new"><span class="leia_mais grey">(Leia Mais)</span></a></p><br>'+
		// 			'</div>'+
		// 		'</li>');	
		// 		aux3=true;		
		// });		
		
		//NOVIDADE INDAIATUBA
		$.ajax({url:apis.novidade+"?shopping_id=203&jsoncallback=?",dataType:"json"}).done(function(data){	
				var imagem=data[0].imagem?apis.upload_site_novidade+data[0].imagem:'img/loja_padrao.jpg';
				var titulo=data[0].novidade_nome.replace(/'/g,'');
				$('.novidade_lista').append('<li class="pr novidade_'+data[0].novidade_id+' ">'+
					'<div><a href="/indaiatuba/novidade.php?novidade_id='+data[0].novidade_id+'" target="_new"><img src="'+apis.upload_site_novidade+data[0].novidade_imagem_home+'" width="100%"></a></div>'+
					'<div class="info-novidade">'+
						'<h3 class="green2 mt0">'+titulo.replace(/<br><br>/g,'').replace(/<br \/><br \/>/g,'<br>')+'</h3>'+
							'<h3 class="grey mt0">Jaraguá Indaiatuba</h3><br>'+
							'<p class="texto_resumido taj">'+(data[0].novidade_texto.length>150?data[0].novidade_texto.substr(0,data[0].novidade_texto.indexOf(' ',150))+'...':data[0].novidade_texto).replace(/<br><br>/g,'').replace(/<br \/><br \/>/g,'<br>')+'<br />'+
							'<a href="/indaiatuba/novidade.php?novidade_id="'+(this).novidade_id+'" target="_new"><span class="leia_mais grey">(Leia Mais)</span></a></p><br>'+
					'</div>'+
				'</li>');		
				aux4=true;	
		});
		
	$(window).on('load', function(){
		ordenar();	
	});
	
		
	
	} else if ($("#contato-empresas").length) {

		$(function(){
			$.mask.definitions["t"]="[0-9-]";
			 $("#contato_telefone").mask("(99) tttttttt?ttt",{
				placeholder:"_"
			}); 
			$("#contato_cpf").mask("999.999.999-99",{
				placeholder:"_"
			}); 
			$("#contato_form").submit(function (){
				if(!$("#txtCaptcha").val()||!$("#contato_shopping").val()||!$("#contato_nome").val()||!$("#contato_email").val()||!$("#contato_assunto").val()||!$("#contato_mensagem").val()||!$("#contato_telefone").val()){
					alert("Preencha todos os campos");
					return false;
				}else if (!validaEmail($("#contato_email").val())){
					alert("Preencha um e-mail válido");
					return false;
				}else{
					$(".enviar_form").prop("disabled",true);
					//$.ajax(apis.contato_api+'?do=contato&tk=' + cliKey + '&captcha=' + $("#txtCaptcha").val() + '&hash=' + hash,{
					$.ajax(apis.contato_api+'?do=contato&tk=' + change_token($("[name=contato_shopping]").val()) + '&captcha=' + $("#txtCaptcha").val() + '&hash=' + hash, {
						data:{
							"nome":$("#contato_nome").val(),
							"telefone":$("#contato_telefone").val(),
							"email":$("#contato_email").val(),
							"assunto":$("#contato_assunto").val(),
							"mensagem":$("#contato_mensagem").val(),
							"sendmail":1
						},
						type:'POST',
						dataType:'json'
					}).then(function (data){
						switch (data.status){
							case "done":
								alert("Mensagem enviada com sucesso");
								$("#contato_form input[type=text], #contato_form select, textarea").val("");
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
						$(".enviar_form").prop("disabled",false);
					});
					return false;
				}
				return false;
			});
			getCaptcha();
		});		
		
	} else if ($("#contato-grupo").length) {

		$(function(){
			$.mask.definitions["t"]="[0-9-]";
			 $("#contato_telefone").mask("(99) tttttttt?ttt",{
				placeholder:"_"
			}); 
			$("#contato_form").submit(function (){
				if(!$("#txtCaptcha").val()|| !$("#contato_nome").val()||!$("#contato_email").val()||!$("#contato_assunto").val()||!$("#contato_mensagem").val()||!$("#contato_telefone").val()){
					alert("Preencha todos os campos");
					return false;
				}else if (!validaEmail($("#contato_email").val())){
					alert("Preencha um e-mail válido");
					return false;
				}else{
					$(".enviar_form").prop("disabled",true);
					$.ajax(apis.contato_api+'?do=contato&tk=' + shopping_token + '&captcha=' + $("#txtCaptcha").val() + '&hash=' + hash,{
						data:{
							"nome":$("#contato_nome").val(),
							"telefone":$("#contato_telefone").val(),
							"email":$("#contato_email").val(),
							"assunto":$("#contato_assunto").val(),
							"mensagem":$("#contato_mensagem").val(),
							"sendmail":1
						},
						type:'POST',
						dataType:'json'
					}).then(function (data){
						switch (data.status){
							case "done":
								alert("Mensagem enviada com sucesso");
								$("#contato_form input[type=text], #contato_form select, textarea").val("");
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
						$(".enviar_form").prop("disabled",false);
					});
					return false;
				}
				return false;
			});
			getCaptcha();
		});		
		
	} 
	
	
	setTimeout(function () {
		$('.geral').fadeIn(800);	
	},500);	 
	
})