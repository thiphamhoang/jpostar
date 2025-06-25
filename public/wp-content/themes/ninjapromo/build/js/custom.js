new WOW().init();

jQuery(document).ready(function(){

    jQuery('.js-menu-btn').click(function() {
        if(jQuery(this).hasClass('is-active')) {
            jQuery(this).toggleClass('is-active');
            jQuery(this).closest('body').find('.menu-mobile').toggle('is-active');
            jQuery(this).closest('.header').toggleClass(' is-active');
            jQuery(this).closest('body').toggleClass(' is-fixed');
        } else {
            jQuery(this).toggleClass('is-active');
            jQuery(this).closest('body').find('.menu-mobile').toggle('is-active');
            jQuery(this).closest('.header').toggleClass(' is-active');
            jQuery(this).closest('body').toggleClass(' is-fixed');
        }
    });

    jQuery('.blog-hero #stc-all-categories').attr( 'checked', 'checked' );
    jQuery('.footer #stc-all-categories').attr( 'checked', 'checked' );

    jQuery('.stc-categories-label input').each(function(){
        jQuery(this).attr( 'checked', 'checked' );
    });

});

jQuery(window).on('load', function (){
    jQuery('.blog-hero #stc-all-categories').attr( 'checked', 'checked' );
    jQuery('.footer #stc-all-categories').attr( 'checked', 'checked' );

    jQuery('.stc-categories-label input').each(function(){
        jQuery(this).attr( 'checked', 'checked' );
    });
});

jQuery('.blog-hero #stc-all-categories').attr( 'checked', 'checked' );
jQuery('.footer #stc-all-categories').attr( 'checked', 'checked' );
jQuery('.stc-categories-label input').each(function(){
   jQuery(this).attr( 'checked', 'checked' );
});

jQuery(window).scroll(function() {
    var headerHeight = jQuery('.header').height();
    var windowHeight = jQuery(window).height();

    if(jQuery(this).scrollTop() != 0) {
        jQuery('#toppage').fadeIn();
        jQuery('.header').addClass(' is-scrolled');
        jQuery('.sticky-btn').addClass(' is-scrolled');
    } else {
        jQuery('#toppage').fadeOut();
        jQuery('.header').removeClass(' is-scrolled');
        jQuery('.sticky-btn').removeClass(' is-scrolled');
    }
});

jQuery('#toppage').click(function() {
    jQuery('body,html').animate({scrollTop:0},800);
});

jQuery(document).ready(function(){
    var owl = jQuery('.js-reviews-slider .owl-carousel');
    owl.owlCarousel({
        loop:true,
        margin:66,
        responsiveClass:true,
        dots:false,
        nav: true,
        center: false,
        items:3,
        responsive:{
            0:{
                items:1,
                center: false,
                margin:30
            },
            600:{
                items:2,
                center: true,
                margin:30
            },
            1000:{
                items:3
            }
        }
    });
    jQuery('.reviews-section__slider-arrows .slider-btn.next').click(function() {
        owl.trigger('next.owl.carousel');
    });
    jQuery('.reviews-section__slider-arrows .slider-btn.prev').click(function() {
        owl.trigger('prev.owl.carousel');
    });

    var owlteam = jQuery('.js-team-slider .owl-carousel');
    owlteam.owlCarousel({
        loop:true,
        margin:30,
        responsiveClass:true,
        dots:false,
        nav: true,
        center: true,
        items:4,
        responsive:{
            0:{
                items:2
            },
            767:{
                items:3
            },
            1000:{
                items:5
            }
        }
    });

    var owlcrypto = jQuery('.msolutions-biggrids.owl-carousel');
    owlcrypto.owlCarousel({
        loop:true,
        margin:30,
        responsiveClass:true,
        dots:false,
        nav: true,
        center: false,
        items:3,
        responsive:{
            0:{
                items:1,
                center: false,
                margin:0
            },
            600:{
                items:2,
                center: true,
                margin:30
            },
            1000:{
                items:3
            }
        }
    });

    var owlvideo = jQuery('.js-video-slider .owl-carousel');
    owlvideo.owlCarousel({
        loop:false,
        margin:30,
        responsiveClass:true,
        dots:false,
        nav: true,
        center: false,
        items:5,
        responsive:{
            0:{
                items:1,
                center:false
            },
            767:{
                items:3
            },
            1000:{
                items:5
            }
        }
    });

    var owlwebind = jQuery('.js-webindustries-slider .owl-carousel');
    owlwebind.owlCarousel({
        loop:false,
        margin:30,
        responsiveClass:true,
        dots:false,
        nav: true,
        center: false,
        items:3,
        responsive:{
            0:{
                items:1,
                center:false
            },
            767:{
                items:2
            },
            1000:{
                items:3
            }
        }
    });

    var owlspec = jQuery('.webindustries-section__list.owl-carousel');
    owlspec.owlCarousel({
        loop:false,
        margin:30,
        responsiveClass:true,
        dots:false,
        nav: true,
        center: false,
        items:4,
        responsive:{
            0:{
                items:1,
                center:false
            },
            767:{
                items:2
            },
            1000:{
                items:4
            }
        }
    });

    var owlpartners = jQuery('.partners-section .owl-carousel');
    owlpartners.owlCarousel({
        loop: true,
        margin: 30,
        responsiveClass: true,
        autoplay: true,
        autoplayTimeout: 1000,
        autoplayHoverPause: true,
        dots: false,
        nav: true,
        center: false,
        items: 4,
        responsive:{
            0:{
                items:2,
                center:false
            },
            767:{
                items:3
            },
            1000:{
                items:4
            }
        }
    });

    var owldesignsec = jQuery('.design-section-list .owl-carousel');
    owldesignsec.owlCarousel({
        loop: true,
        margin: 30,
        responsiveClass: true,
        autoplay: false,
        dots: false,
        nav: false,
        center: false,
        items: 1,
        responsive:{
            0:{
                items:1,
                center:false
            },
            500:{
                items:2
            }
        }
    });

    var caseowl = jQuery('.cases-section__list .owl-carousel');
    caseowl.owlCarousel({
        loop: true,
        margin: 30,
        autoplay:true,
        autoplayTimeout:4000,
        autoplayHoverPause:true,
        responsiveClass:true,
        dots: false,
        nav: true,
        center: false,
        items: 2,
        responsive:{
            0:{
                items:1,
                center: false,
                margin: 0
            },
            600:{
                items:2,
                center: false,
                margin:30
            }
        }
    });
    jQuery('.cases-section__slider-arrows .slider-btn.next').click(function() {
        caseowl.trigger('next.owl.carousel');
    });
    jQuery('.cases-section__slider-arrows .slider-btn.prev').click(function() {
        caseowl.trigger('prev.owl.carousel');
    });

    var awardsowl = jQuery('.hero-awards-list.owl-carousel');
    awardsowl.owlCarousel({
        loop: false,
        margin: 30,
        responsiveClass:true,
        dots: true,
        nav: false,
        center: false,
        items: 2,
        responsive:{
            0:{
                items:1,
                center: false,
                margin: 0
            },
            767:{
                items:1,
                center: false,
                margin:0
            },
            1100:{
                items:2,
                center: false,
                margin:30
            }
        }
    });

    var caseportfhorowl = jQuery('.case-portf-slider .owl-carousel');
    caseportfhorowl.owlCarousel({
        loop: false,
        margin: 30,
        responsiveClass:true,
        dots: true,
        nav: true,
        center: true,
        items: 2,
        responsive:{
            0:{
                items:1
            },
            767:{
                items:2
            }
        }
    });

    var ndslideportfowl = jQuery('.ndprslide-section .owl-carousel');
    ndslideportfowl.owlCarousel({
        loop: true,
        margin: 35,
        autoplay:true,
        autoplayTimeout:4000,
        autoplayHoverPause:true,
        responsiveClass:true,
        dots: true,
        nav: false,
        center: false,
        items: 2,
        responsive:{
            0:{
                items:1,
                margin: 0
            },
            767:{
                items:2
            }
        }
    });

    var vpindowl = jQuery('.vpindustries-list .owl-carousel');
    vpindowl.owlCarousel({
        loop: true,
        margin: 30,
        responsiveClass:true,
        dots: false,
        nav: false,
        center: true,
        items: 5,
        responsive:{
            0:{
                items:1,
                margin: 0
            },
            767:{
                items:3,
                margin: 30
            },
            1000:{
                items:5,
                margin: 30
            }
        }
    });
    jQuery('.vpindustries-section .slider-circle_arrows .slider-btn.next').click(function() {
        vpindowl.trigger('next.owl.carousel');
    });
    jQuery('.vpindustries-section .slider-circle_arrows .slider-btn.prev').click(function() {
        vpindowl.trigger('prev.owl.carousel');
    });

    var ndcideosowl = jQuery('.vpexamples-video .owl-carousel');
    ndcideosowl.owlCarousel({
        loop: true,
        margin: 59,
        responsiveClass:true,
        dots: false,
        nav: true,
        center: true,
        items: 3,
        responsive:{
            0:{
                items:1
            },
            767:{
                items:2,
                margin: 30
            },
            1000:{
                items:3,
                margin: 30
            },
            1200:{
                items:3,
                margin: 59
            }
        }
    });

    var vpprocowl = jQuery('.measure_result-section_slide .owl-carousel');
    vpprocowl.owlCarousel({
        loop: false,
        margin: 56,
        responsiveClass:true,
        dots: false,
        nav: true,
        center: false,
        items: 4,
        responsive:{
            0:{
                items:1
            },
            767:{
                items:2,
                margin: 30
            },
            1000:{
                items:3,
                margin: 30
            },
            1200:{
                items:4,
                margin: 56
            }
        }
    });

    var vertslideone = jQuery('.owl-carousel.slider1');
    vertslideone.owlCarousel({
        loop: true,
        margin: 0,
        autoplay:true,
        autoplayTimeout:4000,
        autoplayHoverPause:true,
        responsiveClass:false,
        dots: false,
        nav: false,
        center: false,
        items: 3
    });

    var dmsawardslide = jQuery('.dmsaward-section__list-mob.owl-carousel');
    dmsawardslide.owlCarousel({
        loop: true,
        margin: 20,
        autoplay:true,
        autoplayTimeout:4000,
        autoplayHoverPause:true,
        responsiveClass:false,
        dots: false,
        nav: true,
        center: false,
        items: 1
    });

    var dmstestimslide = jQuery('.dmsreview-section__list.owl-carousel');
    dmstestimslide.owlCarousel({
        loop: true,
        autoplay:true,
        autoplayTimeout:4000,
        autoplayHoverPause:true,
        margin: 30,
        responsiveClass:true,
        dots: true,
        nav: true,
        center: false,
        items: 4,
        responsive:{
            0:{
                items:1
            },
            767:{
                items:2,
                margin: 30
            },
            1000:{
                items:3,
                margin: 30
            },
            1200:{
                items:4,
                margin: 30
            }
        }
    });

    var dmsworks = jQuery('.dmsworks-section__list.owl-carousel');
    dmsworks.owlCarousel({
        loop: true,
        autoplay: false,
        margin: 80,
        responsiveClass: true,
        dots: false,
        nav: true,
        center: false,
        items: 5,
        responsive:{
            0:{
                items:1,
                center:false,
                margin: 40
            },
            767:{
                items:3,
                margin: 40
            },
            1200:{
                items:4,
                margin: 80
            },
            1900:{
                items:5,
                margin: 80
            }
        }
    });


    var newartsl = jQuery('.newarticle-slider.owl-carousel');
    newartsl.owlCarousel({
        loop: true,
        autoplay:true,
        autoplayTimeout:4000,
        autoplayHoverPause:true,
        margin: 30,
        responsiveClass: true,
        dots: true,
        nav: true,
        center: false,
        items: 4,
        responsive:{
            0:{
                items:1,
                center:false,
                margin: 10
            },
            767:{
                items:2,
                margin: 15
            },
            900:{
                items:3,
                margin: 15
            },
            1200:{
                items:4,
                margin: 30
            }
        }
    });

    var dmsprefmob = jQuery('.dmprference-section__list-ul.owl-carousel');
    dmsprefmob.owlCarousel({
        loop: true,
        autoplay: false,
        margin: 0,
        responsiveClass: false,
        dots: false,
        nav: true,
        center: false,
        items: 1
    });

    var newhometestim = jQuery('.newtestimonials-section .web3testimon-section__list.owl-carousel');
    newhometestim.owlCarousel({
        loop: true,
        autoplay:true,
        autoplayTimeout:4000,
        autoplayHoverPause:true,
        margin: 0,
        responsiveClass: false,
        dots: true,
        nav: true,
        center: false,
        items: 1
    });
    jQuery('.newtestimonials-section .plus-section_slider-btn.next').click(function() {
        newhometestim.trigger('next.owl.carousel');
    });
    jQuery('.newtestimonials-section .plus-section_slider-btn.prev').click(function() {
        newhometestim.trigger('prev.owl.carousel');
    });


    jQuery('.js-process .js-process-btn').each(function(){
        var answerheight =  jQuery(this).closest('.js-process-item').find('.process-section__answer-inner').height();
        jQuery(this).click(function(e) {
            e.preventDefault();
            if(jQuery(this).parent().hasClass('active')) {
                jQuery(this).parent().removeClass('active');
                jQuery(this).closest('.js-process-item').find('.process-section__answer').css({
                    maxHeight: 0 + 'px'
                });
                jQuery(this).parent().prevAll().removeClass('active');
                jQuery(this).parent().nextAll().removeClass('active');
                jQuery(this).parent().prevAll().find('.process-section__answer').css({
                    maxHeight: 0 + 'px'
                });
                 jQuery(this).parent().nextAll().find('.faq-section__answer').css({
                    maxHeight: 0 + 'px'
                });
            } else {
                jQuery(this).parent().addClass(' active');
                jQuery(this).closest('.js-process-item').find('.process-section__answer').css({
                    maxHeight: (answerheight+78) + 'px'
                });
                jQuery(this).parent().prevAll().removeClass('active');
                jQuery(this).parent().nextAll().removeClass('active');
                jQuery(this).parent().prevAll().find('.process-section__answer').css({
                    maxHeight: 0 + 'px'
                });
                 jQuery(this).parent().nextAll().find('.process-section__answer').css({
                    maxHeight: 0 + 'px'
                });
            }
        });
    });

    jQuery('.ndservices-section__tab').each(function(){
        jQuery(this).click(function() {
            var subId = jQuery(this).attr('data-id');

            if(jQuery(this).hasClass('active')) {
                jQuery(this).closest('.ndservices-section__info').find('#'+subId+'.ndservices-section__item').addClass('active');
                jQuery(this).prevAll().removeClass('active');
                jQuery(this).nextAll().removeClass('active');
                jQuery(this).closest('.ndservices-section__info').find('#'+subId+'.ndservices-section__item').prevAll('.ndservices-section__item').removeClass('active');
                jQuery(this).closest('.ndservices-section__info').find('#'+subId+'.ndservices-section__item').nextAll('.ndservices-section__item').removeClass('active');
            } else {
                jQuery(this).addClass('active');
                jQuery(this).closest('.ndservices-section__info').find('#'+subId+'.ndservices-section__item').addClass('active');
                jQuery(this).prevAll().removeClass('active');
                jQuery(this).nextAll().removeClass('active');
                jQuery(this).closest('.ndservices-section__info').find('#'+subId+'.ndservices-section__item').prevAll('.ndservices-section__item').removeClass('active');
                jQuery(this).closest('.ndservices-section__info').find('#'+subId+'.ndservices-section__item').nextAll('.ndservices-section__item').removeClass('active');
            }
        });
    });

    jQuery('.faq-section .faq-btn').each(function(){
        var answerheight =  jQuery(this).closest('.faq-section__item').find('.faq-section__answer-inner').height();
        jQuery(this).click(function(e) {
            e.preventDefault();
            if(jQuery(this).parent().hasClass('active')) {
                jQuery(this).parent().removeClass('active');
                jQuery(this).closest('.faq-section__item').find('.faq-section__answer').css({
                    maxHeight: 0 + 'px'
                });
                jQuery(this).parent().prevAll().removeClass('active');
                jQuery(this).parent().nextAll().removeClass('active');
                jQuery(this).parent().prevAll().find('.faq-section__answer').css({
                    maxHeight: 0 + 'px'
                });
                 jQuery(this).parent().nextAll().find('.faq-section__answer').css({
                    maxHeight: 0 + 'px'
                });
            } else {
                jQuery(this).parent().addClass(' active');
                jQuery(this).closest('.faq-section__item').find('.faq-section__answer').css({
                    maxHeight: (answerheight+78) + 'px'
                });
                jQuery(this).parent().prevAll().removeClass('active');
                jQuery(this).parent().nextAll().removeClass('active');
                jQuery(this).parent().prevAll().find('.faq-section__answer').css({
                    maxHeight: 0 + 'px'
                });
                 jQuery(this).parent().nextAll().find('.faq-section__answer').css({
                    maxHeight: 0 + 'px'
                });
            }
        });
    });

    jQuery('.btn.js-modal-close').each(function(){

        jQuery(this).click(function(){
            jQuery(this).closest('.js-modal').find('.modal__video iframe').each(function(){
              this.contentWindow.postMessage('{"event":"command","func":"stopVideo","args":""}', '*')
              // jQuery(this).attr( 'src', function ( i, val ) { return val; });
            });

            jQuery(this).closest('.js-modal').find('.modal__video video').each(function(){
                  this.pause();
                  this.currentTime = 0;
            });

        });
    });

    jQuery('.fixed-header__menu .fixed-header__link').each(function(){
        var subId = jQuery(this).attr('href');
        jQuery(this).attr('data-id', subId);

        jQuery(this).click(function() {
            jQuery(this).attr('href', 'javascript:void(0)');

            jQuery(this).closest('.menu-mobile_new').removeClass('is-opened').css({'display': 'none'});
            jQuery(this).closest('.header').find('.js-menu-btn').removeClass('is-active');
            jQuery(this).closest('.header').removeClass('is-active');

            jQuery('body,html').animate({
                scrollTop: jQuery(subId).offset().top
            }, 1000);

        });
    });

    jQuery('.dmsservices-section__name').each(function(){
        var servanswerheight =  jQuery(this).closest('.dmsservices-section__item').find('.dmsservices-section__ul-inner').height();
        jQuery(this).click(function(e) {
                e.preventDefault();
                if(jQuery(this).parent().hasClass('active')) {
                    jQuery(this).parent().removeClass('active');
                    jQuery(this).closest('.dmsservices-section__item').find('.dmsservices-section__ul').css({
                        maxHeight: 0 + 'px'
                    });
                    jQuery(this).parent().prevAll().removeClass('active');
                    jQuery(this).parent().nextAll().removeClass('active');
                    jQuery(this).parent().prevAll().find('.dmsservices-section__ul').css({
                        maxHeight: 0 + 'px'
                    });
                     jQuery(this).parent().nextAll().find('.dmsservices-section__ul').css({
                        maxHeight: 0 + 'px'
                    });
                } else {
                    jQuery(this).parent().addClass(' active');
                    jQuery(this).closest('.dmsservices-section__item').find('.dmsservices-section__ul').css({
                        maxHeight: (servanswerheight+30) + 'px'
                    });
                    jQuery(this).parent().prevAll().removeClass('active');
                    jQuery(this).parent().nextAll().removeClass('active');
                    jQuery(this).parent().prevAll().find('.dmsservices-section__ul').css({
                        maxHeight: 0 + 'px'
                    });
                     jQuery(this).parent().nextAll().find('.dmsservices-section__ul').css({
                        maxHeight: 0 + 'px'
                    });
                }
        });
    });

    jQuery('.web3imagine-section__servicename.js-faq-btn').each(function(){
        var wbansheight =  jQuery(this).closest('.web3imagine-section__serviceitem').find('.web3imagine-section__service-list').height();
        jQuery(this).click(function(e) {
            e.preventDefault();
            if(jQuery(this).parent().hasClass('active')) {
                jQuery(this).parent().removeClass('active');
                jQuery(this).closest('.web3imagine-section__serviceitem').find('.web3imagine-section__service-answer').css({
                    maxHeight: 0 + 'px'
                });
                jQuery(this).parent().prevAll().removeClass('active');
                jQuery(this).parent().nextAll().removeClass('active');
                jQuery(this).parent().prevAll().find('.web3imagine-section__service-answer').css({
                    maxHeight: 0 + 'px'
                });
                 jQuery(this).parent().nextAll().find('.web3imagine-section__service-answer').css({
                    maxHeight: 0 + 'px'
                });
            } else {
                jQuery(this).parent().addClass(' active');
                jQuery(this).closest('.web3imagine-section__serviceitem').find('.web3imagine-section__service-answer').css({
                    maxHeight: (wbansheight+40) + 'px'
                });
                jQuery(this).parent().prevAll().removeClass('active');
                jQuery(this).parent().nextAll().removeClass('active');
                jQuery(this).parent().prevAll().find('.web3imagine-section__service-answer').css({
                    maxHeight: 0 + 'px'
                });
                 jQuery(this).parent().nextAll().find('.web3imagine-section__service-answer').css({
                    maxHeight: 0 + 'px'
                });
            }

        });
    });

    jQuery('.web3imagine-section__srowitem .web3imagine-section__servicename').each(function(){
        var namberclick = jQuery(this).attr('data-item');

        jQuery(this).click(function() {
            if(jQuery(this).hasClass('active')) {
                jQuery(this).prevAll().removeClass('active');
                jQuery(this).nextAll().removeClass('active');

                jQuery(this).closest('.web3imagine-section__servicerow').find('.web3imagine-section__srowarrow '+'#arr'+namberclick).addClass('active');
                jQuery(this).closest('.web3imagine-section__servicerow').find('.web3imagine-section__srowarrow '+'#arr'+namberclick).prevAll().removeClass('active');
                jQuery(this).closest('.web3imagine-section__servicerow').find('.web3imagine-section__srowarrow '+'#arr'+namberclick).nextAll().removeClass('active');

                jQuery(this).closest('.web3imagine-section__servicerow').find('#txt'+namberclick+'.web3imagine-section__service-list').addClass('active');
                jQuery(this).closest('.web3imagine-section__servicerow').find('#txt'+namberclick+'.web3imagine-section__service-list').prevAll('.web3imagine-section__service-list').removeClass('active');
                jQuery(this).closest('.web3imagine-section__servicerow').find('#txt'+namberclick+'.web3imagine-section__service-list').nextAll('.web3imagine-section__service-list').removeClass('active');
            } else {
                jQuery(this).addClass('active');
                jQuery(this).prevAll().removeClass('active');
                jQuery(this).nextAll().removeClass('active');

                jQuery(this).closest('.web3imagine-section__servicerow').find('.web3imagine-section__srowarrow '+'#arr'+namberclick).addClass('active');
                jQuery(this).closest('.web3imagine-section__servicerow').find('.web3imagine-section__srowarrow '+'#arr'+namberclick).prevAll().removeClass('active');
                jQuery(this).closest('.web3imagine-section__servicerow').find('.web3imagine-section__srowarrow '+'#arr'+namberclick).nextAll().removeClass('active');

                jQuery(this).closest('.web3imagine-section__servicerow').find('#txt'+namberclick+'.web3imagine-section__service-list').addClass('active');
                jQuery(this).closest('.web3imagine-section__servicerow').find('#txt'+namberclick+'.web3imagine-section__service-list').prevAll('.web3imagine-section__service-list').removeClass('active');
                jQuery(this).closest('.web3imagine-section__servicerow').find('#txt'+namberclick+'.web3imagine-section__service-list').nextAll('.web3imagine-section__service-list').removeClass('active');
            }
        });
    });

});

function mobslider() {
    var win_width = jQuery(window).width();

    if (win_width <= 899) {
        var owlinsta = jQuery('.case-insta__list.owl-carousel');
        owlinsta.owlCarousel({
            loop:false,
            margin:10,
            responsiveClass:true,
            dots:false,
            nav: true,
            center: false,
            items:1,
            responsive:{
                0:{
                    items:1,
                    center:false
                },
                767:{
                    items:2
                }
            }
        });
    }

    if (win_width <= 899) {
        var owlresl = jQuery('.case-result__list.owl-carousel');
        owlresl.owlCarousel({
            loop:false,
            margin:10,
            responsiveClass:true,
            dots:false,
            nav: true,
            center: false,
            items:1,
            responsive:{
                0:{
                    items:1,
                    center:false
                },
                767:{
                    items:1
                }
            }
        });

        jQuery('.b2bprograms-section__name').each(function(){
            var b2bservanswerheight =  jQuery(this).closest('.b2bprograms-section__item').find('.b2bprograms-section__ul-box').height();
            jQuery(this).click(function(e) {
                    e.preventDefault();
                    if(jQuery(this).parent().hasClass('active')) {
                        jQuery(this).parent().removeClass('active');
                        jQuery(this).closest('.b2bprograms-section__item').find('.b2bprograms-section__ul').css({
                            maxHeight: 0 + 'px'
                        });
                        jQuery(this).parent().prevAll().removeClass('active');
                        jQuery(this).parent().nextAll().removeClass('active');
                        jQuery(this).parent().prevAll().find('.b2bprograms-section__ul').css({
                            maxHeight: 0 + 'px'
                        });
                         jQuery(this).parent().nextAll().find('.b2bprograms-section__ul').css({
                            maxHeight: 0 + 'px'
                        });
                    } else {
                        jQuery(this).parent().addClass(' active');
                        jQuery(this).closest('.b2bprograms-section__item').find('.b2bprograms-section__ul').css({
                            maxHeight: (b2bservanswerheight+30) + 'px'
                        });
                        jQuery(this).parent().prevAll().removeClass('active');
                        jQuery(this).parent().nextAll().removeClass('active');
                        jQuery(this).parent().prevAll().find('.b2bprograms-section__ul').css({
                            maxHeight: 0 + 'px'
                        });
                         jQuery(this).parent().nextAll().find('.b2bprograms-section__ul').css({
                            maxHeight: 0 + 'px'
                        });
                    }
            });
        });
    }


    if (win_width <= 1099) {
        var owlwebsubscr = jQuery('.worldwide-section__list.owl-carousel');
        owlwebsubscr.owlCarousel({
            loop: true,
            margin: 16,
            responsiveClass:true,
            dots: false,
            nav: false,
            center: true,
            items: 3,
            responsive:{
                0:{
                    items: 2
                },
                767:{
                    items: 4
                }
            }
        });
    }
}
mobslider();
jQuery(window).resize(mobslider);
jQuery(document).ready(function(){mobslider()});
jQuery(window).load(function() {
  mobslider();
});
