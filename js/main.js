// Document ready
jQuery(document).ready(function ($) {


    $('.midtown-mobile-menu').click(function(){
        $(this).toggleClass('open');
        
        if($('.midtown-mobile-menu').hasClass('open'))
            $('#site-navigation').animate({left: '0'}, 400);
        else {
            $('#site-navigation').animate({left: '-100%'}, 400);
        }
    });

    $('img').addClass('img-fluid');

});