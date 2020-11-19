document.addEventListener("DOMContentLoaded", function () {
    (function ($) {

        function init() {
            numIncrement();
            initCarousels();
            initMap();
            hamburger();
            initPopups();
            scrollTo();
            initAccordeon();
            initAccordeon2();
            initMobileMenu();
        };

        function hamburger() {
            $('.hamburger').click(function () {
                let th = $(this),
                    headerMenu = $('.header_menu');
                th.hasClass('is-active') ? th.removeClass('is-active') : th.addClass('is-active');
                headerMenu.hasClass('js-open') ? headerMenu.removeClass('js-open') : headerMenu.addClass('js-open');
            });
        }

        function numIncrement() {
            if ($('.benefits__inner').length) {
                var show = true;
                var countbox = ".benefits__inner";
                $(window).on("scroll load resize", function () {
                    if (!show) return false; // Отменяем показ анимации, если она уже была выполнена
                    var w_top = $(window).scrollTop(); // Количество пикселей на которое была прокручена страница
                    var e_top = $(countbox).offset().top; // Расстояние от блока со счетчиками до верха всего документа
                    var w_height = $(window).height(); // Высота окна браузера
                    var d_height = $(document).height(); // Высота всего документа
                    var e_height = $(countbox).outerHeight(); // Полная высота блока со счетчиками
                    if (w_top + 100 >= e_top || w_height + w_top == d_height || e_height + e_top < w_height) {
                        $('.benefits__number').css('opacity', '1');
                        $('.benefits__number').spincrement({
                            thousandSeparator: "",
                            duration: 6000
                        });

                        show = false;
                    }
                });
            }
        }


        function initCarousels() {
            if ($('.section_reviews__carousel').length) {
                $('.section_reviews__carousel').owlCarousel({
                    items: 1,
                    loop: true,
                    nav: true,
                    dots: false,
                    navText: ['<svg class="icon"><use xlink:href="/wp-content/themes/twentytwenty/img/src/sprite.svg#arrow-left"/></svg>',
                        '<svg class="icon"><use xlink:href="/wp-content/themes/twentytwenty/img/src/sprite.svg#arrow-right"/></svg>']
                });

                if (window.innerWidth < 992) {
                    $('.mobile_slider_single_item').owlCarousel({
                        items: 1,
                        loop: true,
                        nav: true,
                        dots: false,
                        navText: ['<svg class="icon"><use xlink:href="/wp-content/themes/twentytwenty/img/src/sprite.svg#arrow-left"/></svg>',
                            '<svg class="icon"><use xlink:href="/wp-content/themes/twentytwenty/img/src/sprite.svg#arrow-right"/></svg>']
                    });
                }
            }

            if  ($('.main-through-carousel').length) {
                $('.main-through-carousel').owlCarousel({
                    items: 1,
                    loop: true,
                    nav: true,
                    dots: false,
                    lazy: true,
                    navText: ['<svg class="icon"><use xlink:href="/wp-content/themes/twentytwenty/img/src/sprite.svg#arrow-left"/></svg>',
                        '<svg class="icon"><use xlink:href="/wp-content/themes/twentytwenty/img/src/sprite.svg#arrow-right"/></svg>']
                });
            }
        }

        function initMap() {
            if ($('#section_contacts__map').length) {
                ymaps.ready(function () {
                    var map = new ymaps.Map("section_contacts__map", {
                        center: [55.745012, 37.658167],
                        zoom: 16,
                        controls: []
                    });

                    map.geoObjects.add(new ymaps.Placemark([55.745012, 37.658167], {
                        balloonContent: 'Клиника восстановительной медицины “Качество жизни”'
                    }, {
                        iconCaption: 'Москва, Большой Дровяной переулок, д.14, стр.3',
                        preset: 'islands#redMedicalIcon'
                        // iconLayout: 'default#image',
                        // iconImageHref: 'images/myIcon.gif',
                        // iconImageSize: [30, 42],
                        // iconImageOffset: [-5, -38]
                    }));


                });
            }
        }

        function initPopups() {
            // $('#menu-item-46').click(function (e) {
            //     e.preventDefault();
            //     $.fancybox.open({
            //         src: '#order-popup',
            //         type: 'inline',
            //     });
            // })
        }
        
        function scrollTo() {
            $('a.scroll-to')
                .click(function(event) {
                    if (
                        location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
                        &&
                        location.hostname == this.hostname
                    ) {
                        var target = $(this.hash);
                        target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                        if (target.length) {
                            event.preventDefault();
                            $('html, body').animate({
                                scrollTop: target.offset().top
                            }, 1000, function() {
                                var $target = $(target);
                                $target.focus();
                                if ($target.is(":focus")) {
                                    return false;
                                } else {
                                    $target.attr('tabindex','-1');
                                    $target.focus();
                                };
                            });
                        }
                    }
                });
        }

        function initAccordeon()
        {
            $('.accordeon-title').on('click', function (e) {
                e.preventDefault();
                th = $(this);
                th.toggleClass('open');
                th.next('.accordeon-content').slideToggle();
            })
        }
                function initAccordeon2()
        {
            $('.accordeon-title').on('click', function (e) {
                e.preventDefault();
                th = $(this);
                th.toggleClass('open');
                th.next('.accordeon-content2').slideToggle();
            })
        }

        function initMobileMenu()
        {
            if (window.innerWidth < 991 && $('.header_menu__menu').length){
                $('.header_menu__menu .menu-item-has-children').append('<div class="mobile-menu-toggler"></div>');
                $('.header_menu__menu').on('click', '.mobile-menu-toggler', function () {
                    $(this).toggleClass('open').prev('.sub-menu').slideToggle();
                });
            }
        }

        $(document).ready(function(){
            init();
        });
    })(jQuery);


});

document.addEventListener( 'wpcf7submit', function( event ) {
    if ( '185' == event.detail.contactFormId ) {
        ym(58305913, 'reachGoal', 'ORDER2');
        gtag('event', 'order_sidebar', {'event_category': 'orders', 'event_action': 'formSubmit'});
    } else if ( '348' == event.detail.contactFormId ) {
        ym(58305913, 'reachGoal', 'ORDER1');
        gtag('event', 'order_popup', {'event_category': 'order', 'event_action': 'formSubmit'});
    }
}, false );