jQuery(document).ready(function($){
   
   if( $('body').hasClass('page-id-231') && $('body').hasClass('boxed-layout') ){
        $('body').removeClass('boxed-layout');
        $('body').addClass('fullwidth-layout');
        $('body').css('background-color', '#ffffff');
   }
   
   if( $('body').hasClass('page-id-242') ){
        $('body').addClass('archive-page-style1-template');
    }
   
});