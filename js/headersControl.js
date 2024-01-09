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
    })
});