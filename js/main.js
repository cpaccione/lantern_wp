// Document ready
jQuery(document).ready(function ($) {
    
    $('.midtown-mobile-menu').click(function(){
        $(this).toggleClass('open');
        $('#mobile').toggleClass('midtown-mobile-menu-show');
    });

});