$(function(){
	if ($("#novidade").length){		
		//ORDENAR LISTA DE NOVIDADES
		$(window).load(function() {
			$('.novidade_lista li').each(function(index, el) {
				var str = $(this).find('h3.green2').text();
				str = retira_acentos(str.replace(/ /g, "-"));
				str = str.match('[a-zA-Z0-9]');				
				if ( !$('.novidade_lista .letter'+str).length ){
					$(this).attr('data-position',str);
				}
				
				letra=str;
			});	
		});		
		$(".novidade_lista").each(function(){
			$(this).html($(this).children('li').sort(function(a, b){
				return ($(b).data('position')) < ($(a).data('position')) ? 1 : -1;
			}));
		});
	}
})