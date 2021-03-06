jQuery(document).on('read', function ($) {
    "use strict";
    /*
        $(".embed-responsive iframe").addClass("embed-responsive-item");*/
    $(".carousel-inner .item:first-child").addClass("active");
    $('.mainmenu-area ul li.dropdown').hover(function () {
        $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
    }, function () {
        $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);

    });


    $.scrollUp({
        scrollText: '<i class="fa fa-angle-up"></i>',
        easingType: 'linear',
        scrollSpeed: 900,
        animation: 'fade'
    });

    /* Mixitup
    ============*/
    $('.ppo-product').mixItUp();

    /* Star-Rating
    ===================*/
    $('.star-rating').rating();

    /*---------------------------
        MICHIMP INTEGRATION
    -----------------------------*/
    $('#mc-form').ajaxChimp({
        url: 'http://www.devitfamily.us14.list-manage.com/subscribe/post?u=b2a3f199e321346f8785d48fb&amp;id=d0323b0697', //Set Your Mailchamp URL
        callback: function (resp) {
            if (resp.result === 'success') {
                $('.subscribe-form input, .subscribe-form button').hide();
            }
        }
    });

    /* Pagination
    ===================*/
    $('#pagination-demo').twbsPagination({
        totalPages: 35,
        visiblePages: 7,
        onPageClick: function (event, page) {
            $('#page-content').text('Page ' + page);
        }
    });

    /* wow js active
    ==================*/
    new WOW().init();

    /* Cetagory-toggle-jquery 
    =========================*/
    var cetagoryli = $('.single-sidebar.cetagory > ul > li');
    cetagoryli.on('click', function () {
        cetagoryli.removeClass('open');
        cetagoryli.children('ul').slideUp();
        $(this).children('ul').slideDown();
        $(this).toggleClass('open');
    });


}(jQuery));

jQuery(window).on('load', function () {
    $(".page-loading").fadeOut();
});