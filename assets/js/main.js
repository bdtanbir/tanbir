(function ($) {
    "use strict";
    var $window = $(window);

    $window.on('load', function () {
        var showResponsiveMenu = $(".menu-bars");
        var hideResponsiveMenu = $(".close-responsive-sidebar");
        var hideResponsiveMenu2 = $(".responsive-sidebar .sidebar-menu li a");

        // Typing
        if ($(".typed").length) {
            $(".typed").typed({
                strings: ["WordPress Developer", "Front-End Developer"],
                // Optionally use an HTML element to grab strings from (must wrap each string in a <p>)
                stringsElement: null,
                // typing speed
                typeSpeed: 100,
                // time before typing starts
                startDelay: 100,
                // backspacing speed
                backSpeed: 50,
                // time before backspacing
                backDelay: 800,
                // loop
                loop: true,
                // false = infinite
                // show cursor
                showCursor: false,
                // character for cursor
                cursorChar: "|",
                // attribute to type (null == text)
                attr: null,
                // either html or text
                contentType: 'html',
                // call when done callback function
                callback: function () { },
                // starting callback function before each string
                preStringTyped: function () { },
                //callback for every typed string
                onStringTyped: function () { },
                // callback for reset
                resetCallback: function () { }
            });
        }


        // Isotope Filter
        if ($(".grid").length) {
            $('.grid').isotope({
                itemSelector: '.grid-item',
            });
        }

        // filter items on button click
        if ($(".filter-button-group").length) {
            $('.filter-button-group').on('click', 'li', function () {
                var filterValue = $(this).attr('data-filter');
                $('.grid').isotope({ filter: filterValue });
                $('.filter-button-group li').removeClass('active');
                $(this).addClass('active');
            });
        }

        $(window).scroll(function () {
            var scroll = $(window).scrollTop();

            if (scroll >= 100) {
                $(".header-wrapper").addClass("active");
                $(".back-to-top").show(200);
            } else {
                $(".header-wrapper").removeClass("active");
                $(".back-to-top").hide(200);
            }
        });


        showResponsiveMenu.on('click', function () {
            $("body").addClass('active-responsive-menu');
        });
        hideResponsiveMenu.on('click', function () {
            $("body").removeClass('active-responsive-menu');
        });
        hideResponsiveMenu2.on('click', function () {
            $("body").removeClass('active-responsive-menu');
        });


    });

})(jQuery);