//LOADER
$(window).on('load',function(){
    $('.loader').fadeOut('fast');
});

//HORÁRIOS HEADER (IMPORTANTE: INSERIR APENAS 2 HORÁRIOS, O DE INICIO E FIM DAS LOJAS, QUALQUER HORÁRIO ADICIONAL INCLUIR SOMENTE NO RODAPÉ)
var semana = ['10:00 - 20:00','10:00 - 22:00','10:00 - 22:00','10:00 - 22:00','10:00 - 22:00','10:00 - 22:00','10:00 - 22:00'];
var d = new Date();
$(function(){
    $('span.horario').html(semana[d.getDay()]);
});

//MOBILE CHECK
var isMobile    = false,
isiPhoneiPad= false,
isSafari   = /^((?!chrome|android).)*safari/i.test(navigator.userAgent);

if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
isMobile = true;
}

if (/iPhone|iPad|iPod/i.test(navigator.userAgent)) {
isiPhoneiPad = true;
}

var lastScroll      = 0,
    simpleDropdown  = 0,
    linkDropdown    = 0,
    isotopeObjs     = [],
    swiperObjs      = [],
    wow             = '';

function limita_texto(txt,n){
    var n;
        (n?n=n:n=115);
    (txt.length> n?txt = txt.substring(0,n) + '...':'');
    return txt;
}

//LINK SHOPPINGS
$(function(){
    $('.shoppings_saphyr').on('change',function(){
        if($(this).val().length){ window.open( $(this).val(),  '_blank' );  }
    });
});

//LINKS MENU
$.ajax({url:apis.link+"?principal=true&shopping_id="+shopping_id+"&jsoncallback=?",dataType:"json"}).done(function(data){
    $.each(data,function(i,link){
        target=link.link_url.indexOf("http")>=0?"target='_blank'":"";
        if(!link.link_menupai){
            $('.menu').append(
                '<li class="nav-item '+(link.link_submenu=='True'?'dropdown simple-dropdown':'')+'" '+(link.link_submenu=='True'?'data-submenu="'+link.link_nome+'"':'')+' data-menu="'+link.link_nome+'">'+
                    '<a href="'+(link.link_submenu=='True'?'javascript:void(0);':link.link_url)+'" '+target+' class="nav-link">'+link.link_nome+'</a>'+
                    (link.link_submenu=='True'?'<i class="fa fa-angle-down dropdown-toggle" data-toggle="dropdown" aria-hidden="true" aria-expanded="false"></i>':'')+
                '</li>'
            );
        }
    });

    $('.menu').find('[data-submenu]').append('<ul class="dropdown-menu" role="menu"></ul>');    

    //LINK NOVIDADES
    $('.menu').find('[data-menu="Novidades"]').addClass('nav-item').addClass('dropdown').addClass('simple-dropdown').append('<ul class="dropdown-menu novidade_menu" role="menu"></ul>');

    //LINK CINEMA
    $('.menu').find('[data-menu="Cinema"]').addClass('nav-item').addClass('dropdown').addClass('simple-dropdown').append('<ul class="dropdown-menu cinema_menu" role="menu"></ul>');

    $('[data-menu="Cinema"], [data-menu="Novidades"]').append('<i class="fa fa-angle-down dropdown-toggle" data-toggle="dropdown" aria-hidden="true" aria-expanded="false"></i>');


    var tipo = 2;
    var dir = 'evento';

    novidade_lista_menu = function (){		
        $('[data-menu="Novidades"] ul').append('<h6>Últimas Novidades</h6>');
		url=apis.novidade_v3+"?tp="+tipo+"&shopping_id="+shopping_id+"&jsoncallback=?"
		$.ajax({url:url,dataType:"json"}).done(function(data){		
			if(data.length){														
				$.each(data,function(i,novidade){	
					if (novidade.novidade_imagem_1) {
						novidade_img = apis.upload_site_evento+novidade.novidade_imagem_1;
					}

					var meses = ["", "Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"];
					var dia = novidade.novidade_entrada.substring(0,2);
					var mes = parseInt(novidade.novidade_entrada.substring(3,5));
					var ano = novidade.novidade_entrada.substring(6,10);
					var mesEscrito = meses[mes];

                    if(i<2){                                                                                             
                        $('[data-menu="Novidades"] ul').append(
                            '<div class="row">'+
                                '<div class="col-xl-4">'+
                                    '<div class="blog-image">'+
                                        '<a href="#"><img src="'+novidade_img+'" alt=""/></a>'+
                                    '</div>'+
                                '</div>'+
                                '<div class="col-xl-8">'+
                                    '<div class="blog-text d-inline-block w-100">'+
                                        '<div class="content position-relative mx-auto lg-w-100">'+
                                            '<h6 class="alt-font font-weight-500">'+
                                                '<a href="#" class="text-extra-dark-gray text-fast-blue-hover">'+(novidade.novidade_nome.length>25?novidade.novidade_nome.substring(0,25).replace(/<br ?\/?>/g, '')+'...':novidade.novidade_nome.replace(/<br ?\/?>/g, '')).toLowerCase()+'</a>'+
                                            '</h6>'+
                                            '<p>'+(novidade.novidade_texto.length>30?novidade.novidade_texto.substring(0,30).replace(/<br ?\/?>/g, '')+'...':novidade.novidade_texto.replace(/<br ?\/?>/g, ''))+'</p>'+
                                            '<a href="#" class="btn btn-small btn-transparent-dark-gray btn-round-edge btn-slide-up-bg margin-10px-top">'+
                                                'Continue lendo <span class="bg-extra-dark-gray"></span>'+
                                            '</a>'+
                                        '</div>'+
                                    '</div>'+
                                '</div>'+
                            '</div>'
                        );	
                    }
				});
            }
        });
    }

    novidade_lista_menu();

    cinema_lista = function(){
        $('[data-menu="Cinema"] ul').append('<h6>Filmes em Cartaz</h6>');
        $.ajax({url:apis.cinema_cinemark+"?shopping_id="+shopping_id+"&tipo=2&jsoncallback=?",dataType:"json"}).done(function(data){
            qtd_filme = data.length;
            if(data.length){
                $.each(data,function(i,filmes){    
                    if(i<4){                                                           
                        $('[data-menu="Cinema"] ul').append(
                            '<div class="row">'+
                                '<div class="col-xl-4">'+
                                    '<div class="blog-image">'+
                                        '<a href="cinema.php?cinema_id='+filmes.id+'"><img src="'+filmes.cartaz+'" alt=""/></a>'+
                                    '</div>'+
                                '</div>'+
                                '<div class="col-xl-8">'+
                                    '<div class="blog-text d-inline-block w-100">'+
                                        '<div class="content position-relative mx-auto lg-w-100">'+
                                            '<h6 class="alt-font font-weight-500">'+
                                                '<a href="cinema.php?cinema_id='+filmes.id+'" class="text-extra-dark-gray text-fast-blue-hover">'+(filmes.titulo.length>25?filmes.titulo.substring(0,25).replace(/<br ?\/?>/g, '')+'...':filmes.titulo.replace(/<br ?\/?>/g, '')).toLowerCase()+'</a>'+
                                            '</h6>'+
                                            '<p>'+(filmes.sinopse.length>25?filmes.sinopse.substring(0,25).replace(/<br ?\/?>/g, '')+'...':filmes.sinopse.replace(/<br ?\/?>/g, ''))+'</p>'+
                                            '<a href="cinema.php?cinema_id='+filmes.id+'" class="btn btn-small btn-transparent-dark-gray btn-round-edge btn-slide-up-bg margin-10px-top">'+
                                                'Ver horários <span class="bg-extra-dark-gray"></span>'+
                                            '</a>'+
                                        '</div>'+
                                    '</div>'+
                                '</div>'+
                            '</div>'
                        );	
                    }
                });
            } else {
                $('.cinema_menu, [data-menu="Cinema"]>i').remove();
                $('[data-menu="Cinema"]>a').css({'margin-right':'18px'});
            }
        });	
    }

    cinema_lista();

    $.ajax({url:apis.link+"?principal=true&shopping_id="+shopping_id+"&jsoncallback=?",dataType:"json"}).done(function(data){
        $.each(data,function(i,link){
            target=link.link_url.indexOf("http")>=0?"target='_blank'":"";
            if(link.link_menupai){
                $('[data-submenu="'+link.link_menupai+'"] ul').append(
                    '<li><a href="'+link.link_url+'" '+target+'>'+link.link_nome+'</a></li>'
                );
            }
        });
        $( '.dropdown' ).on( 'mouseenter touchstart', function( e ) {
            var _this = $( this );
                _this.addClass( 'open' );
                _this.siblings( '.dropdown' ).removeClass( 'open' );
            if ( getWindowWidth() > menuBreakPoint ) {
                menuPosition( _this );
                if( $( e.target ).siblings( '.dropdown-menu' ).length ) {
                    e.preventDefault();
                }
            }
        }).on( 'mouseleave', function( e ) {
            var _this = $( this );
            _this.removeClass( 'menu-left' );
            _this.removeClass( 'open' );
        });
    });
});

//BANNER SECUNDÁRIAS
$.ajax({url:apis.banner_secundaria+"?shopping_id="+shopping_id+"&jsoncallback=?",dataType:"json"}).done(function(data){
    $.each(data,function(i,banner){
        if(banner.banner_nome == pagina){
            if(banner.banner_titulo){
                $('body[pagina='+pagina+'] .banner_secundario').css({'background-image':'url(//sites.madnezz.com.br/api/site/upload/Secundaria/'+banner.banner_imagem+')'});
                $('body[pagina='+pagina+'] .banner_secundario h2').html(banner.banner_titulo);
            } else {
                $('body[pagina='+pagina+'] .banner_secundario').html('<img src="//sites.madnezz.com.br/api/site/upload/Secundaria/'+banner.banner_imagem+'" class="w-100" />');
            }
        }
    });    
});

//AJUSTE LINKS MOBILE
$(window).on('load',function(){
    setTimeout(function(){
        $('ul.slicknav_nav li').each(function(){
            var link = $(this).find('a>a').attr('href');
            $(this).find('a>a').parents('li').attr('onclick','window.location = "'+link+'"');
        });
    },1000);
});