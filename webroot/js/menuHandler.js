function sticktothetop() {
    var window_top = $(window).scrollTop();
    var top = $('#stick-here').offset().top;
    if (window_top > top) {
        $('#stickThis').addClass('stick');
        $('#service').addClass("marginTop5em");
    } else {
        $('#stickThis').removeClass('stick');
        $('#service').removeClass("marginTop5em");
    }
}
$(function() {
    $(window).scroll(sticktothetop);
    sticktothetop();
});