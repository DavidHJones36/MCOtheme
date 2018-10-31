//smooth scroll on anchor clicks
jQuery(document).ready(function ($) {
    $('a[href*="#"]:not([href="#"])').click(function () {
        if (location.pathname.replace(/^\//, '') === this.pathname.replace(/^\//, '') && location.hostname === this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                if ($("#navbar").hasClass("navbar-fixed-top")) {
                    $('html, body').animate({
                        scrollTop: target.offset().top - $('#navbar').outerHeight()
                    }, 800);
                    return false;
                } else {
                    $('html, body').animate({
                        scrollTop: target.offset().top
                    }, 800);
                    return false;
                }
            }
        }
    });
});
//(function ($) {
//    function IsEmail(email) {
//        var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
//        return regex.test(email);
//    }
//    $("#submit_button").click(function () {
//        var email_input = $("#Field3")
//            , email_val = email_input.val();
//        $(".error-message").remove();
//        if (IsEmail(email_val) == false) {
//            error = "Please enter a valid email address."
//            email_input.parent().append("<div class = 'error-message wufooerror' style = 'padding: 10px 10px;'>" + error + "</div>");
//        }
//        if ($(".error-message").length == 0) {
//            $("#saveForm").click();
//        }
//    });
//})(jQuery);


(function ($) {
    $('.slideable-show-button').click(function () {

        var target = $(this).attr('data-target');

        if ($(this).hasClass('active') === false) {
            $('.slideable').slideUp();
            $('.slideable-show-button').removeClass("active");

            $(target).slideDown();
            $(this).addClass("active");
        }

    });

    $('.slideable-close-button').click(function () {
        // target = $(this).attr('data-target');
        $('.slideable').slideUp();
        $('.slideable-show-button').removeClass("active");
    });

})(jQuery);