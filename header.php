<?php
$templatePath = get_template_directory_uri(); ?>
<!DOCTYPE html>
<html lang="ru">

<head>
	<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(58305913, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/58305913" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">

    <link rel="icon" href="<?= $templatePath ?>/img/favicon.png">
    <meta property="og:image" content="<?= $templatePath ?>/img/@1x/preview.jpg">
    <link rel="stylesheet" href="<?= $templatePath ?>/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= $templatePath ?>/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?= $templatePath ?>/css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="<?= $templatePath ?>/lib/lowvision/css/bvi.min.css">
    <link rel="stylesheet" href="<?= $templatePath ?>/lib/lowvision/css/bvi-font.min.css">
    <?if (!is_front_page()){ ?>
        <link rel="stylesheet" href="<?= $templatePath ?>/css/inner-pages.css">
        <script src="https://kit.fontawesome.com/e69aa947c6.js" crossorigin="anonymous"></script>
    <? } ?>
    <link rel="stylesheet" href="<?= $templatePath ?>/css/main.css">
    <?php wp_head(); ?>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-159302701-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-159302701-1');
    </script>
    <script src="//code-ya.jivosite.com/widget/Ec3KazksO6" async></script>

</head>

<body>
<!-- <img class="lazy img-responsive example-img"
			src="data:image/gif;base64,R0lGODlhBwACAIAAAP///wAAACH5BAEAAAEALAAAAAAHAAIAAAIDjI9YADs="
			data-src="img/@1x/preview.jpg"
			data-srcset="img/@1x/preview.jpg 1x, img/@2x/preview.jpg 2x"
			alt="Start HTML5 Template"> -->
<header>
    <section class="top_header top_header__desktop">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="top-header__row">
                        <a href="/" class="top_header__logo logo">
                            <img src="<?= $templatePath ?>/assets/images/logo_full.png" alt="Лого"
                                 class="img-responsive">
                        </a>
                        <div class="top-header__button_panel">
                            <a href="" class="button button_round button_accent button_search box_shadow">
                                <svg class="icon">
                                    <use xlink:href="<?= $templatePath ?>/img/src/sprite.svg#search"/>
                                </svg>
                            </a>
                            <a href="" class="bvi-open button button_round button_accent button_low_vision box_shadow">
                                <svg class="icon">
                                    <use xlink:href="<?= $templatePath ?>/img/src/sprite.svg#eye"/>
                                </svg>
                            </a>
                        </div>
                        <div class="top_header__contacts_bar contacts_bar bvi-voice">
                            <div class="contacts_bar__address">
                                <svg class="icon">
                                    <use xlink:href="<?= $templatePath ?>/img/src/sprite.svg#pin"/>
                                </svg>
                                <span>г. Москва, Большой Дровяной пер. д.14 стр.3</span>
                            </div>
                            <div class="contacts_bar__schedule">
                                <svg class="icon">
                                    <use xlink:href="<?= $templatePath ?>/img/src/sprite.svg#clock"/>
                                </svg>
                                <span>Ежедневно с 9:00 до 21:00</span>
                            </div>
                        </div>
                        <a data-fancybox data-src="#order-popup" href="javascript:;" class="top_header__phone phone">
                            <span class="button button_round button_accent box_shadow">
                                <svg class="icon">
                                    <use xlink:href="<?= $templatePath ?>/img/src/sprite.svg#phone"/>
                                </svg>
                            </span>
                            <div class="top_header__phone_description bvi-voice">
                                <span class="top_header__phone_number">+7 (495) 032-80-45</span>
                                <span class="top_header__phone_text">Заказать обратный звонок</span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="top_header top_header__mobile">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="top_header_mobile_container">
                        <div class="low_vision_mobile bvi-open">
                            <svg class="icon">
                                <use xlink:href="<?= $templatePath ?>/img/src/sprite.svg#eye"/>
                            </svg>
                            <span>Для слабовидящих</span>
                        </div>
                        <div class="burger">
                            <button class="hamburger hamburger--spin" type="button">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="header_mobile_logo">
        <a href="/" class="mobile_logo">
            <img src="<?= $templatePath ?>/assets/images/logo_mobile.png" alt="Лого"
                 class="img-responsive">
        </a>
    </div>
    <section class="header_menu bg_accent">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="header_menu__container bvi-voice">
                            <?php wp_nav_menu(array(
                                'menu' => 2,
                                'container' => false,
                                'menu_class' => 'header_menu__menu menu',
                                'items_wrap' => '<ul class="%2$s">%3$s</ul>',
                                'depth' => 0
                            )); ?>
                        <div class="mobile_menu__info">
                            <div class="mobile_menu__phone">
                                <a href="tel:+7 495 032-80-45">
                                    <svg class="icon">
                                        <use xlink:href="<?= $templatePath ?>/img/src/sprite.svg#phone"/>
                                    </svg>
                                    <span>+7 (495) 032-80-45</span>
                                </a>
                            </div>
                            <div class="mobile_menu__social_links">
                                <!--<a href="https://vk.com/qualis_vita" class="vk_link">
                                    <svg class="icon">
                                        <use xlink:href="<?/*= $templatePath */?>/img/src/sprite.svg#vk"/>
                                    </svg>
                                </a>
                                <a href="https://www.facebook.com/qualisvita/" class="fb_link">
                                    <svg class="icon">
                                        <use xlink:href="<?/*= $templatePath */?>/img/src/sprite.svg#facebook"/>
                                    </svg>
                                </a>
                                <a href="https://www.instagram.com/qualis_vita_ru/" class="inst_link">
                                    <svg class="icon">
                                        <use xlink:href="<?/*= $templatePath */?>/img/src/sprite.svg#inst"/>
                                    </svg>
                                </a>
                                <a href="https://twitter.com/LifeQualityMos" class="twitter_link">
                                    <svg class="icon">
                                        <use xlink:href="<?/*= $templatePath */?>/img/src/sprite.svg#twitter"/>
                                    </svg>
                                </a>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</header>

<?php 
    if (is_page(921)){ ?>
       <div class="main-through-carousel owl-carousel">
           <div>
               <a href="/fizicheskaya-reabilitacziya/">
                   <picture>
                       <source srcset="<?= $templatePath ?>/img/lfk.jpg" media="(min-width: 574px)" />
                       <img src="<?= $templatePath ?>/img/lfk-mob.jpg" />
                   </picture>
               </a>
           </div>
           <div>
               <a href="/osteopatiya/">
                   <picture>
                       <source srcset="<?= $templatePath ?>/img/osteopatiya.jpg" media="(min-width: 574px)" />
                       <img src="<?= $templatePath ?>/img/osteopatiya-mob.jpg" />
                   </picture>
               </a>
           </div>
           <div><a href="/psihologiya/">
                   <picture>
                       <source srcset="<?= $templatePath ?>/img/psihologiya.jpg" media="(min-width: 574px)" />
                       <img src="<?= $templatePath ?>/img/psihologiya-mob.jpg" />
                   </picture>
               </a>
           </div>
           <div><a href="/sistema-red-cord/">
                   <picture>
                       <source srcset="<?= $templatePath ?>/img/redkord.jpg" media="(min-width: 574px)" />
                       <img src="<?= $templatePath ?>/img/redkord-mob.jpg" />
                   </picture>
               </a></div>
           <div><a href="/gomeopatiya/">
                   <picture>
                       <source srcset="<?= $templatePath ?>/img/gomeopatiya.jpg" media="(min-width: 574px)" />
                       <img src="<?= $templatePath ?>/img/gomeopatiya-mob.jpg" />
                   </picture>
               </a>
           </div>
       </div>
    <? }
?>