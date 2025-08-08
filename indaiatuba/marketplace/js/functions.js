//LOADER
$(window).on('load',function(){
    $('.loader').fadeOut('fast');
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

//LINK SCROLL
$(function(){
    //SCROLL LINKS INTERNOS
    $('nav a[href^="#"]').on('click', function(e) {
        e.preventDefault();
        var id = $(this).attr('href'),
                targetOffset = $(id).offset().top;
                
        $('html, body').animate({ 
            scrollTop: targetOffset
        }, 1000);

        $( '[data-mobile-nav-style="classic"] .navbar-collapse' ).collapse( 'hide' );
    });

    //TROCA POSIÇÃO DE DIVS
    if($(window).width()<=990){
        $(document).find('.reverse').each(function(){
            $(this).find('.flex-1').eq(0).insertAfter($(this).find('.flex-1').eq(1));
        });
    }
});