// Document ready
jQuery(document).ready(function ($) {
    
    $('.midtown-mobile-menu').click(function(){
        $(this).toggleClass('open');
        $('#primary-menu').toggleClass('primary-menu-show');
    });

});