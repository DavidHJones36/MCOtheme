////adds opaque navbar on scrollthis 
//(function ($) {
//    $(window).scroll(_.throttle(function () {
//        var scroll = $(window).scrollTop();
//        if (scroll > 0) /*height in pixels when the navbar becomes non opaque*/ {
//            $('.navbar-fixed-top').addClass('opaque');
//        }
//        else {
//            $('.navbar-fixed-top').removeClass('opaque');
//        }
//    }, 50))
//})(jQuery);