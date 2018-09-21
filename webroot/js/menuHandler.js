function sticktothetop() {
    var window_top = $(window).scrollTop();
    var top = $('#stick-here').offset().top;
    if(window_top == 0){
        $('.navbar').addClass('stickBottom');
    }else 
    	
    	if (window_top > top) {
        $('#stickThis').addClass('stickTop');
        $('#service').addClass("marginTop5em");
        $('.navbar').removeClass("fixedBottom");
    } else {
        $('#stickThis').removeClass('stickTop');
        $('#service').removeClass("marginTop5em");
        $('.navbar').removeClass("stickBottom");
    }
}
$(function() {
    $(window).scroll(sticktothetop);
    sticktothetop();
    
   $(".coverLink").click(function(){
        $('#stickThis').addClass('stickTop');
        $('.navbar').removeClass("stickBottom");

    });
    
    $(".brand").click(function(){
        $('#stickThis').removeClass('stickTop');
        $('.navbar').addClass("stickBottom");
    });
    
    
});