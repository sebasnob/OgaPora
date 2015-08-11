(function($) {
    "use strict";

    $(function() {

        /* ----------------------------------------------------------------------
            Flickr
        ---------------------------------------------------------------------- */

        $('.flickr-cbox').jflickrfeed({
            limit: 6,
            qstrings: {
                id: '52617155@N08'
            },
            itemTemplate: '<li>' + '<a rel="colorbox" href="{{image}}" title="{{title}}">' + '<img src="{{image_s}}" alt="{{title}}" />' + '</a>' + '</li>'
        }, function(data) {

            $(".flickr-cbox a").nivoLightbox({
                effect: 'fadeScale'
            });

        });

        /* ----------------------------------------------------------------------
            Revolution Slider
        ---------------------------------------------------------------------- */

        $('.tp-banner').show().revolution({

            delay: 16000,
            startwidth: 1170,
            startheight: 600,
            hideTimerBar: "on",
            onHoverStop: "on",
            fullWidth: "on",
            navigationStyle: "square",
            dottedOverlay: "none"
        });

        /* ----------------------------------------------------------------------
            Bootstrap - doropdownhover
        ---------------------------------------------------------------------- */

        $('.js-activated').dropdownHover().dropdown();

        /* ----------------------------------------------------------------------
            Bootstrap - Tooltip/popover
        ---------------------------------------------------------------------- */

        $("[data-toggle=tooltip]").tooltip();
        $("[data-toggle=popover]").popover();

        /* ----------------------------------------------------------------------
            Sticky Header
        ---------------------------------------------------------------------- */

        $("#header").sticky({
            topSpacing: 0
        });

        $(window).scroll(function() {
            if ($(this).scrollTop() > 30) {
                $('#header').addClass("sticky-header");
            } else {
                $('#header').removeClass("sticky-header");
            }
        });

        /* ----------------------------------------------------------------------
            Back to Top
        ---------------------------------------------------------------------- */

        $(window).scroll(function() {
            if ($(this).scrollTop() > 100) {
                $('.back-to-top').fadeIn();
            } else {
                $('.back-to-top').fadeOut();
            }
        });

        $('.back-to-top').click(function() {
            $("html, body").animate({
                scrollTop: 0
            }, 600);
            return false;
        });

        /* ----------------------------------------------------------------------
            Toggle
        ---------------------------------------------------------------------- */

        $(".toggle-content").hide();
        $(".toggle-container>h4").click(function() {
            $(this).toggleClass("active").next().slideToggle(300);
        });

        /* ----------------------------------------------------------------------
            Easy Tabs
        ---------------------------------------------------------------------- */

        $('#tab-container').easytabs();

        $('#tab-side-container').easytabs({
            animate: false,
            tabActiveClass: "selected-tab",
            panelActiveClass: "displayed"
        });

        /* ----------------------------------------------------------------------
            Owl Carousel
        ---------------------------------------------------------------------- */

        $(".owl-image").owlCarousel({
            items: 5,
            navigation: true,
            navigationText: ['<i class="fa fa-chevron-left"></i>', '<i class="fa fa-chevron-right"></i>'],
            pagination: false
        });

        var owl = $(".owl-single");
        owl.owlCarousel({
            singleItem: true,
            navigation: true,
            pagination: false,
            navigationText: ['<i class="fa fa-chevron-left"></i>', '<i class="fa fa-chevron-right"></i>'],
            transitionStyle: "backSlide"
        });

        $(".owl-testimonial").owlCarousel({
            singleItem: true,
            autoPlay: 5000,
            navigation: false,
            paginationSpeed: 1000,
            autoHeight: true,
            stopOnHover: true,
            goToFirstSpeed: 2000,
            transitionStyle: "fade"
        });

        $(".owl-client").owlCarousel({
            items: 5,
            autoPlay: true,
            navigation: false,
            pagination: false
        });

        /* ----------------------------------------------------------------------
            Nivo Lightbox
        ---------------------------------------------------------------------- */

        $(".nivo-lightbox").nivoLightbox({
            effect: 'fadeScale'
        });
        $(".nivo-lightbox-video").nivoLightbox({
            effect: 'fade'
        });

        /* ----------------------------------------------------------------------
            Hover Effect Da Thumbs
        ---------------------------------------------------------------------- */

        $('.da-thumbs').each(function() {
            $(this).hoverdir();
        });

        /* ----------------------------------------------------------------------
            ContactForm - Validation
        ---------------------------------------------------------------------- */

        $("#commentForm").validate();

        /* ----------------------------------------------------------------------
            ContactForm - Ajax Form
        ---------------------------------------------------------------------- */

        var options = {
            target: '#message',
            url: 'contact.php'
        };

        $('#commentForm').ajaxForm(options);


        /* ----------------------------------------------------------------------
            mb-YTPlayer
        ---------------------------------------------------------------------- */

        $(".mbyt-player").mb_YTPlayer();

        /* ----------------------------------------------------------------------
            Simple Placeholder
        ---------------------------------------------------------------------- */

        $('input[placeholder]').simplePlaceholder();
        $('textarea[placeholder]').simplePlaceholder();


    });

    /* ----------------------------------------------------------------------
            Isotope
        ---------------------------------------------------------------------- */

    $(window).load(function() {
        // init Isotope
        var $container = $('.isotope').isotope({
            itemSelector: '.element-item',
            layoutMode: 'fitRows'
        });

        // bind filter button click
        $('#filters').on('click', 'button', function() {
            var filterValue = $(this).attr('data-filter');
            $container.isotope({
                filter: filterValue
            });
        });

        // change is-checked class on buttons
        $('.button-group').each(function(i, buttonGroup) {
            var $buttonGroup = $(buttonGroup);
            $buttonGroup.on('click', 'button', function() {
                $buttonGroup.find('.is-checked').removeClass('is-checked');
                $(this).addClass('is-checked');
            });
        });
    });

    /* ----------------------------------------------------------------------
        Wow
    ---------------------------------------------------------------------- */

    new WOW().init();

}(jQuery));









