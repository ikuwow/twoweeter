$(function(){
    var sb = $('#sidebar');
    var offset = sb.offset();
    $(window).scroll( function() {
        if($(window).scrollTop() > offset.top) {
            sb.addClass('sidebar-fixed');
        } else {
            sb.removeClass('sidebar-fixed');
        }
    })
});
