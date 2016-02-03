/*jshint new: true */
/*global $, jQuery, document, window, navigator, GMaps, google*/
/* ==========================================================================
Document Ready Function
========================================================================== */
jQuery(document).ready(function () {

    'use strict';

    var onMobile, revapi, formInput, sformInput, map;


    /* ==========================================================================
    Modify Copied Text
    ========================================================================== */
    function addLink() {
        var body_element, selection, pagelink, copytext, newdiv;
        body_element = document.getElementsByTagName('body')[0];
        selection = window.getSelection();
        pagelink = " Read more at: <a href='" + document.location.href + "'>" + document.location.href + "</a>";
        copytext = selection + pagelink;
        newdiv = document.createElement('div');
        newdiv.style.position = 'absolute';
        newdiv.style.left = '-99999px';
        body_element.appendChild(newdiv);
        newdiv.innerHTML = copytext;
        selection.selectAllChildren(newdiv);
        window.setTimeout(function () {
            body_element.removeChild(newdiv);
        }, 0);
    }
    document.oncopy = addLink;




    /* ==========================================================================
    ScrollTo
    ========================================================================== */
    $('a.scrollto').click(function (event) {
        $('html, body').scrollTo(this.hash, this.hash, {gap: {y: -60}, animation:  {easing: 'easeInOutCubic', duration: 1700}});
        event.preventDefault();

        if ($('.navbar-collapse').hasClass('in')) {
			$('.navbar-collapse').removeClass('in').addClass('collapse');
		}

	});


    /* ==========================================================================
    Data Spy
    ========================================================================== */
    $('body').attr('data-spy', 'scroll').attr('data-target', '#nav-wrapper').attr('data-offset', '61');



    /* ==========================================================================
    ToolTip
    ========================================================================== */
    $("a[data-rel=tooltip]").tooltip();


    /* ==========================================================================
    Revolution Slider
    ========================================================================== */
    revapi = jQuery('.tp-banner').revolution({
        delay: 9000,
        startwidth: 1170,
        startheight: 500,
        hideThumbs: 10,
        fullWidth: "on",
        forceFullWidth: "on",
        lazyload: "on",
        navigationStyle: "none"
    });


    /* ==========================================================================
    on mobile?
    ========================================================================== */
	onMobile = false;
    if (/Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent)) { onMobile = true; }

    if (onMobile === true) {
        $("a[data-rel=tooltip]").tooltip('destroy');
        jQuery('#intro-section').css("background-attachment", "scroll");
    }

    if (onMobile === false) {
        /* ==========================================================================
        Parallex
        ========================================================================== */
        jQuery('#intro-section').parallax("50%", -0.4);
    }


    /* ==========================================================================
    Count To
    ========================================================================== */
    $("#counters-section [data-to]").each(function () {
        var $this = $(this);
        $this.waypoint(function () {
            $this.countTo({speed: 3000});
        }, {offset: '100%', triggerOnce: true});
    });


    /* ==========================================================================
    Fancy Box
    ========================================================================== */
    $(".fancybox").fancybox({
        helpers : {
            overlay : {
                speedOut : 0,
                locked: false
            }
        }
    });

    $(".fancybox-media").fancybox({
        helpers : {
            media : {},
            overlay : {
                speedOut : 0,
                locked: false
            }
        }
    });


    /* ==========================================================================
    Clients Slider
    ========================================================================== */
    $('#owl-clients').owlCarousel({
        items : 6,
        itemsDesktop : [1000, 5],
        itemsDesktopSmall : [768, 4],
        itemsTablet: [520, 2],
        itemsMobile: [320, 2],
        lazyLoad : true,
        pagination: false,
        autoPlay: 5000
    });


    /* ==========================================================================
    Skill Chart
    ========================================================================== */
    $('.skill-chart-lg').waypoint(function () {
        $(".skill-chart-lg").knob({
            readOnly: true,
            fgColor: "#ffffff",
            bgColor: "rgba(255, 255, 255, 0.5)",
            thickness: 0.2,
            width: "190",
            height: "190"
        });
        $('.skill-chart-lg').each(function () {
            var $this, myVal;
            $this = $(this);
            myVal = $this.attr("data-rel");
            $({
                value: 0
            }).animate({
                value: myVal
            }, {
                duration: 3000,
                easing: 'swing',
                step: function () {
                    $this.val(Math.ceil(this.value)).trigger('change');
                }
            });
        });
    }, { offset: '100%', triggerOnce: true });

    $('.skill-chart').waypoint(function () {
        $(".skill-chart").knob({
            readOnly: true,
            fgColor: "#ffffff",
            bgColor: "rgba(255, 255, 255, 0.5)",
            thickness: 0.2,
            width: "160",
            height: "160"
        });
        $('.skill-chart').each(function () {
            var $this, myVal;
            $this = $(this);
            myVal = $this.attr("data-rel");
            $({
                value: 0
            }).animate({
                value: myVal
            }, {
                duration: 3000,
                easing: 'swing',
                step: function () {
                    $this.val(Math.ceil(this.value)).trigger('change');
                }
            });
        });
    }, { offset: '100%', triggerOnce: true });


    /* ==========================================================================
    FORM Validation
    ========================================================================== */
    $('form#form').submit(function () {
        $('form#form .error').remove();
        $('form#form .success').remove();
        var hasError = false;
        $('.requiredField').each(function () {
            if (jQuery.trim($(this).val()) === '') {
                $(this).parent().append('<span class="error"><i class="fa fa-exclamation-triangle"></i></span>');
                hasError = true;
            } else if ($(this).hasClass('email')) {
                var emailReg = /^([\w-\.]+@([\w]+\.)+[\w]{2,4})?$/;
                if (!emailReg.test(jQuery.trim($(this).val()))) {
                    $(this).parent().append('<span class="error"><i class="fa fa-exclamation-triangle"></i></span>');
                    hasError = true;
                }
            }
        });
        if (!hasError) {
            formInput = $(this).serialize();
            $.post($(this).attr('action'), formInput, function (data) {
                $('form#form').append('<div class="success"><div class="col-md-12"><div class="alert alert-nesto"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><p>Thanks! Your email was successfully sent. We will contact you asap.</p></div></div></div>');
            });
            $('.requiredField').val('');
        }
        return false;
    });
    $('form#form input').focus(function () {
        $('form#form .error').remove();
        $('form#form .success').remove();
    });
    $('form#form textarea').focus(function () {
        $('form#form .error').remove();
        $('form#form .success').remove();
    });


    /* ==========================================================================
    Map
    ========================================================================== */
    map = new GMaps({
        el: '#map',
        scrollwheel: false,
        lat: 29.983775,
        lng: 31.167161
    });
    map.addMarker({
        lat: 29.983775,
        lng: 31.167161,
        icon: "images/marker.png"
    });


    /* ==========================================================================
    Subscribe
    ========================================================================== */
    $('form#sform').submit(function () {
        $('form#sform .serror').remove();
        $('form#sform .ssuccess').remove();
        var shasError = false;
        $('.srequiredField').each(function () {
            if (jQuery.trim($(this).val()) === '') {
                $(this).parent().append('<span class="serror"><i class="fa fa-exclamation-triangle"></i></span>');
                shasError = true;
            } else if ($(this).hasClass('email')) {
                var emailReg = /^([\w-\.]+@([\w]+\.)+[\w]{2,4})?$/;
                if (!emailReg.test(jQuery.trim($(this).val()))) {
                    $(this).parent().append('<span class="serror"><i class="fa fa-exclamation-triangle"></i></span>');
                    shasError = true;
                }
            }
        });
        if (!shasError) {
            sformInput = $(this).serialize();
            $.post($(this).attr('action'), sformInput, function (data) {
                $('form#sform').append('<span class="ssuccess"><i class="fa fa-check"></i></span>');
            });
            $('.srequiredField').val('');
        }
        return false;
    });
    $('form#sform input').focus(function () {
        $('form#sform .serror').remove();
        $('form#sform .ssuccess').remove();
    });






}); // JavaScript Document




/* ==========================================================================
Window Load
========================================================================== */
jQuery(window).load(function () {

    'use strict';


    var $portfolioitems;


    /* ==========================================================================
    Portfolio Grid
    ========================================================================== */
    $portfolioitems = $('.portfolio-grid');
    $portfolioitems.isotope({
        filter: '*',
        animationOptions: {
            duration: 850,
            easing: 'linear',
            queue: false
        }
    });

    $('.portfolioFilter a').click(function () {
        $('.portfolioFilter a').removeClass('selected');
        $(this).addClass('selected');
        var selector = $(this).attr('data-filter');
        $portfolioitems.isotope({
            filter: selector,
            animationOptions: {
                duration: 850,
                easing: 'linear',
                queue: false
            }
        });
        return false;
    });



});




/* ==========================================================================
Window Scroll
========================================================================== */
jQuery(window).scroll(function () {

    'use strict';

    if (jQuery(document).scrollTop() >= 130) {
        jQuery('#nav-wrapper').addClass('tinyheader');
    } else {
        jQuery('#nav-wrapper').removeClass('tinyheader');
    }
    if (jQuery(document).scrollTop() >= 35) {
        jQuery('#nav-wrapper').addClass('tiny');
        jQuery('#top-header').addClass('hide-top-header');
    } else {
        jQuery('#nav-wrapper').removeClass('tiny');
        jQuery('#top-header').removeClass('hide-top-header');
    }


});