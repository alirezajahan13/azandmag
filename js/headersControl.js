var $ = jQuery;



$(document).ready(function(){
    $(window).on('scroll' , function(){
        if($(document).scrollTop() >= 100){
            $('.mainHeaderStickyBack').addClass('showStickyHeader');
            $('.stickySidebarSinglePostParent').addClass('stickySidebarChange');
        }
        else{
            $('.mainHeaderStickyBack').removeClass('showStickyHeader');                 
        }
        if($(document).scrollTop() >= 30){
            $('.home .mainHeaderBack').addClass('backWhiteHeader');
        }
        else{
            $('.home .mainHeaderBack').removeClass('backWhiteHeader');              
        }
    });

    let svgCode = '<svg height="18" width="18" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 43 50" xml:space="preserve" transform="rotate(90)"><path fill="#6c6c6d" d="M15.563 40.836a.997.997 0 0 0 1.414 0l15-15a.999.999 0 0 0 0-1.414l-15-15a.999.999 0 1 0-1.414 1.414l14.293 14.293-14.293 14.293a.999.999 0 0 0 0 1.414z"/></svg>';
    $('.mobileMenuContainer>.mainMenu>ul>.menu-item-has-children>a , .productCatMenu>ul>.menu-item-has-children>a').append(svgCode);

    $('.headerMobileMenu').click(function(){ 
        $('.mobileMenuContainer').addClass('showMobileMenu');
        $('.mobilMenuOverlay').addClass('showMobilMenuOverlay');
    });
    $('.mobilemenuClose , .mobilMenuOverlay').click(function(){ 
        $('.mobileMenuContainer').removeClass('showMobileMenu');
        $('.mobilMenuOverlay').removeClass('showMobilMenuOverlay');
    });
    $('.mobileMenuContainer>.mainMenu>.menu-item-has-children>a').click(function(){
        $('.mobileMenu>ul>.menu-item-has-children>ul').slideUp(300);
        $('.menu-item-has-children a svg').css('transform' , 'rotate(90deg)');
        if($(this).siblings("ul").css('display') == 'block'){
            $(this).siblings('ul').slideUp(400);
        }
        else{
            $(this).siblings('ul').slideToggle(400);
            $('.menu-item-has-children a svg').css('transform', 'rotate(90deg)');
            $(this).find("svg").css('transform' , 'rotate(270deg)');
        }
    });
});