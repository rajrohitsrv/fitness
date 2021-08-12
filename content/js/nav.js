$(document).ready(function() {
	
	var sOffset = $(".nav2").offset().top;
var shareheight = $(".nav2").height();
$(window).scroll(function() {
    var scrollYpos = $(document).scrollTop();
    if (scrollYpos > sOffset - shareheight) {
        $(".nav2").css({
            'top': '70px',
            'position': 'fixed'
        });
    } else {
        $(".nav2").css({
            'top': 'auto',
            'position': 'relative'
        });
    }
});
});