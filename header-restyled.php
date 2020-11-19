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
    <meta property="og:image" content="<?= $templatePath ?>/<?= $templatePath ?>/restyle/img/@1x/preview.jpg">
    <link rel="stylesheet" href="<?= $templatePath ?>/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= $templatePath ?>/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?= $templatePath ?>/css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="<?= $templatePath ?>/lib/lowvision/css/bvi.min.css">
    <link rel="stylesheet" href="<?= $templatePath ?>/lib/lowvision/css/bvi-font.min.css">
    <?if (!is_front_page()){ ?>
        <link rel="stylesheet" href="<?= $templatePath ?>/css/inner-pages.css">
        <script src="https://kit.fontawesome.com/e69aa947c6.js" crossorigin="anonymous"></script>
    <? } ?>

    <link rel="stylesheet" href="<?= $templatePath ?>/restyle/bootstrap.css">
    <link rel="stylesheet" href="<?= $templatePath ?>/restyle/fonts/AvenirNextCyr/stylesheet.css">
    <link rel="stylesheet" href="<?= $templatePath ?>/restyle/fonts/Philosopher/stylesheet.css">
    <link rel="stylesheet" href="<?= $templatePath ?>/restyle/wont_awesome/css/all.min.css">
    <link rel="stylesheet" href="<?= $templatePath ?>/restyle/slick-1.8.1/slick/slick.css">
    <link rel="stylesheet" href="<?= $templatePath ?>/restyle/restyle-2.css">
    <link rel="stylesheet" href="<?= $templatePath ?>/css/main-2.css">


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
        <script async src="<?= $templatePath ?>/js/jquery.spincrement.min.js"></script>
        <script src="<?= $templatePath ?>/js/custom.js"></script>
<!--         <script async src="<?= $templatePath ?>/js/custom2.js"></script> -->
        <link rel="stylesheet" href="<?= $templatePath ?>/restyle/site.addons.css">
</head>
<body>

<!-- Всплывающие окна -->
<div class="popup__window d-none">
    <div class="popup__window__form position-relative text-center bg-firm-element-3">
        <div class="hidden__window"></div>
        <h2 class="form__title ff-Philosopher text-uppercase fs-22">оставить заявку</h2>
        <form action="/" method="GET"  class="form w-100 mt-md-4 mt-2">
            <div class="col-10 offset-1 mb-3 text-center">
                <input   type="text" name="name" class="required windiow_form-control w-100 bg-user-blue text" placeholder="Имя" >
            </div>
            <div class="col-10 offset-1 mb-3 text-center">
                <input  name="number" type="text"  class="required windiow_form-control w-100 bg-telephone-blue text" placeholder="Телефон">
            </div>
            <div class="col-10 offset-1 mb-3 text-center">
                <input  name="email" type="text"  class="required windiow_form-control w-100 bg-email-blue text" placeholder="E-mail">
            </div>
            <div class="col-md-12 text-center my-md-5 my-4">
                <input type="submit" value="отправить"  class="form__btn form__btn-transparent ff-Avenir-Next-Cyr fs-18 font-weight-bold text-uppercase mb-4"/>
                <div class="ff-Avenir-Next-Cyr fs-12">*Нажимая на кнопку, вы даете
                    <a href="/" class="text-underline color-gray d-block">Согласие на обработку персональных данных</a>
                </div>
            </div>
        </form>
    </div>
</div>

<div class="popup__window girl d-none">
    <div class="popup__window__form position-relative d-flex justify-content-center bg-gray bg-firm-element-3">
        <div class="hidden__window"></div>
        <img class="d-sm-block d-none" src="<?= $templatePath ?>/restyle/img/Girl.jpg"  width="250px" alt="">
        <div class="popup__window__form-section text-center w-100">
            <h2 class="form__title ff-Philosopher text-uppercase fs-22 pl-sm- pl-0 mb-ms-0 mb-4">оставить заявку</h2>
            <form action="/" method="GET"  class="form w-100 mt-md-4 mt-2">
                <div class="col-sm-10 d-flex offset-sm-1 mb-3 text-center">
                    <div class="bg-icon bg-user-blue"></div>
                    <input type="text" name="name" class="required window_form-control text pl-2 w-100" placeholder="Имя" >
                </div>
                <div class="col-sm-10 d-flex offset-sm-1 mb-3 text-center">
                    <div class="bg-icon bg-telephone-blue"></div>
                    <input  name="number" type="text" class="required window_form-control pl-2 w-100 text" placeholder="Телефон">
                </div>
                <div class="col-sm-10 d-flex offset-sm-1 mb-3 text-center">
                    <div class="bg-icon bg-email-blue"></div>
                    <input  name="email" type="text" class="required window_form-control pl-2 w-100 text" placeholder="E-mail">
                </div>
                <div class="col-md-12 text-center my-md-5 my-4">
                    <input type="submit" value="отправить"  class="form__btn form__btn-transparent ff-Avenir-Next-Cyr fs-18 font-weight-bold text-uppercase mb-4"/>
                    <div class="ff-Avenir-Next-Cyr fs-12">*Нажимая на кнопку, <br> вы даете
                        <a href="/" class="text-underline">Согласие на обработку <br> персональных данных</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>







<header class="position-relative">
    <div class="top-header__desctop position-relative d-lg-block d-none pt-2">
        <div class="top-header__container container">
            <div class="row  justify-content-between">
                <div class="logo d-flex align-items-center pl-0">
                    <a href="/">
                        <img src="<?= $templatePath ?>/restyle/img/Logo Qualis-Vita.svg" class="logo-img" alt="Лого">
                    </a>
                </div>
                <div class="top-header__button-panel d-flex justify-content-center align-items-center">
                    <a href="/"  class="bvi-open button position-relative rounded-circle d-flex justify-content-center align-items-center">
                        <img src="<?= $templatePath ?>/restyle/img/SVG/eye-white.svg" height="25px" alt="svg" class="position-absolute white">
                        <img src="<?= $templatePath ?>/restyle/img/SVG/eye-blue.svg" height="25px" alt="svg" class="position-absolute blue">
                    </a>
                </div>
                <div class="top-header__graph d-flex justify-content-start align-items-center">
                    <img src="<?= $templatePath ?>/restyle/img/SVG/clock-grey.svg" height="35px">
                    <div class="text fs-14 color-gray text-left lh-20px pl-2  m-0">
                        График работы: <br>
                        Ежедневно <br>
                        с 9:00до 21:00
                    </div>
                </div>
                <div class="top-header__address d-flex justify-content-center  align-items-center p-0">
                    <img src="<?= $templatePath ?>/restyle/img/SVG/pin-grey.svg" height="35px">
                    <div class="text fs-14 color-gray text-left lh-20px pl-2  m-0">
                        г. Москва <br>
                        Большой Дровяной пер. <br>
                        д.14 стр.3
                    </div>
                </div>
                <div class="wrapper-button rounded-pill telephone-button d-flex justify-content-center  p-0">
                    <a data-fancybox="" data-src="#order-popup" class="d-flex align-items-center px-3 border-aqua">
                        <div  class="button position-relative  rounded-circle d-flex justify-content-center align-items-center">
                            <img src="<?= $templatePath ?>/restyle/img/SVG/telephone-white.svg" height="25px" alt="svg" class="position-absolute white">
                            <img src="<?= $templatePath ?>/restyle/img/SVG/telephone-blue.svg" height="25px" alt="svg" class="position-absolute blue">
                        </div>
                        <div class="pl-3 align-items-center fix-button">
                            <div class="m-0 ff-Philosopher fs-22 font-weight-bold lh-20px"><a href="tel:+7 (495) 032-80-45">+7 (495) 032-80-45</a></div>
                            <div class="m-0 ff-Avenir-Next-Cyr color-gray fs-14 ">Заказать обратный звонок</div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="top-header__menu">
            <div class="container">
                <div class="row">
                    <!-- menu desktop --><div class="col-lg-12 p-0"><?

                        $user_id = get_current_user_id();
                        //if ($user_id == 14) {

	                        wp_nav_menu(array(
		                        'menu' => 2,
		                        'walker' => new WalkerNavMenuCustom(),
		                        'menu_class' => 'menu-list',
		                        //'menu_class' => 'sub-menu menu-even sub-sub-menu level-2',
		                        'items_wrap' => '<ul class="%2$s">%3$s</ul>',
		                        //'items_wrap' => '<div class="' . $class_container . '" style="display: none;"><ul class="%2$s">%3$s</ul></div>',
		                        'container' => false
	                        ));

	                        /*echo "************* #line:##" . __LINE__ . '#ВЕРСТКА  ' . "\n";
	                        echo "<textarea style=\"width:100%; height:100%;\">";
	                        wp_nav_menu(array(
		                        'menu' => 2,
		                        'walker' => new WalkerNavMenuCustom(),
		                        'menu_class' => 'menu-list',
		                        //'menu_class' => 'sub-menu menu-even sub-sub-menu level-2',
		                        'items_wrap' => '<ul class="%2$s">%3$s</ul>',
		                        //'items_wrap' => '<div class="' . $class_container . '" style="display: none;"><ul class="%2$s">%3$s</ul></div>',
		                        'container' => false
	                        ));
	                        echo "</textarea>\n\r";*/

                        //}


		                    //get_template_part( 'template-parts/menu','restyled-html' );
                        ?>


                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="top-header__mobile d-lg-none d-block">
        <div class="container-fluid bg-dark">
            <div class="row">
                <div class="mobile-search col-4  h-50px p-0 pl-2">
                    <form class="d-flex align-items-center" action="" method="GET">
                        <img src="<?= $templatePath ?>/restyle/img/SVG/search-grey.svg" height="40px" class="search-icon " alt="SVG">
                        <input type="search"   class="input-search w-100 ff-Avenir-Next-Cyr color-gray fs-18" required placeholder="Найти...">
                    </form>
                </div>
                <div class="mobile-button-panel d-flex align-items-center col-4 h-50px">
                    <a href="/" class="button-panel d-flex  align-items-center w-100">
                        <img src="<?= $templatePath ?>/restyle/img/SVG/eye-grey.svg" height="40px" class="eye-grey" alt="SVG">
                        <span class="button-panel__text ff-Avenir-Next-Cyr color-gray fs-18 ml-3">Для слабовидящих</span>
                    </a>
                </div>
                <div class="mobile-button-burger col-4 d-flex justify-content-end align-items-center ">
                    <div class="menu">
                        <div class="menu__burger"></div>
                    </div>

                </div>
                <div class="col-12 position-relative bg-aqua d-flex justify-content-center align-items-center py-5">
                    <img src="<?= $templatePath ?>/restyle/img/Logo Qualis-Vita white.svg" width="320px" alt="Лого">
                </div>
                <!-- menu mobile -->
                <div class="menu-mobile"><?

		            /*$user_id = get_current_user_id();
		            if ($_GET['new_verstka'] == 'new_verstka') {
		            //if ($user_id == 14 or $_GET['new_verstka'] == 'new_verstka') {*/

                        wp_nav_menu(array(
                            'menu' => 2,
                            'walker' => new WalkerNavMenuCustomMobile(),
                            'menu_class' => 'menu-mobile__list',
                            //'menu_class' => 'sub-menu menu-even sub-sub-menu level-2',
                            'items_wrap' => '<ul class="%2$s">%3$s</ul>',
                            //'items_wrap' => '<div class="' . $class_container . '" style="display: none;"><ul class="%2$s">%3$s</ul></div>',
                            'container' => false
                        ));

			            //get_template_part( 'template-parts/menu','restyled-mobile-html_new' );

		            //}


		            //get_template_part( 'template-parts/menu','restyled-mobile-html' );
		            //get_template_part( 'template-parts/menu','restyled-mobile-html_old' );
	                ?>
                    <div class="menu-mobile__phone-btn text-center">
                        <a class="d-inline-block" href="tel:+7 (495) 032-80-45">
                            <div class="phone-btn py-sm-3 py-2 px-sm-5 px-4 rounded-pill bg-aqua  d-flex align-items-center">
                                <img src="<?= $templatePath ?>/restyle/img/SVG/telephone-white.svg" height="30px" alt="svg">
                                <p class="mb-0 ml-2  ff-Philosopher color-white fs-18 font-weight-bold">+7 (495) 032-80-45</p>
                            </div>
                            <a data-fancybox="" data-src="#order-popup" class="d-block color-gray mt-3">Заказать обратный звонок</a>
                        </a>
                    </div>
                    <div class="menu-mobile__social col-12  text-center">
                        <ul class="list-inline">
                            <li class="list-inline-item after-line">
                                <a href="https://vk.com/qualis_vita">
                                    <img src="<?= $templatePath ?>/restyle/img/SVG/vk-grey.svg" height="20px" alt="SVG">
                                </a>
                            </li>
                            <li class="list-inline-item after-line">
                                <a href="https://www.facebook.com/qualisvita/">
                                    <img src="<?= $templatePath ?>/restyle/img/SVG/fb-grey.svg" height="30px" alt="SVG">
                                </a>
                            </li>
                            <li class="list-inline-item after-line">
                                <a href="https://www.instagram.com/qualis_vita_ru/">
                                    <img src="<?= $templatePath ?>/restyle/img/SVG/inst-grey.svg" height="25px" alt="SVG">
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="https://twitter.com/LifeQualityMos">
                                    <img src="<?= $templatePath ?>/restyle/img/SVG/twitter-grey.svg" height="25px" alt="SVG">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <? if (is_front_page()) { ?>
    <div class="header__slider-desc d-md-block d-none position-relative">
        <div class="header__slider__item position-relative color-white">
            <div class="header__slider__caption position-absolute">
                <h2 class="header__slide__title ff-Philosopher text-uppercase font-weight-bold">остеопатия</h2>
                <p class="header__slider__text ff-Avenir-Next-Cyr text-left">Сила рук,<br> исцеляющая <br> без лекарств</p>
                <a class="header__slider__btn ff-Avenir-Next-Cyr font-weight-bold text-uppercase fs-18 color-white form__btn-pink d-inline-block" href="https://qualis-vita.ru/osteopatiya/">подробнее</a>
            </div>
            <div class="slider__social-list position-absolute text-center">
                <a class="slider__social-list__item d-block color-white fs-30"  href="https://vk.com/qualis_vita">
                    <i class="fab fa-vk"></i>
                </a>
                <a  class="slider__social-list__item d-block color-white fs-30" href="https://www.facebook.com/qualisvita/">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a class="slider__social-list__item d-block color-white fs-30"  href="https://www.instagram.com/qualis_vita_ru/">
                    <i class="fab fa-instagram"></i>
                </a>
                <a class="slider__social-list__item d-block color-white fs-30"  href="https://twitter.com/LifeQualityMos">
                    <i class="fab fa-twitter"></i>
                </a>
            </div>
            <img class="header__slider__img" src="<?= $templatePath ?>/restyle/img/slider_bg/desktop/osteopatiya.jpg" alt="jpg">

        </div>
        <div class="header__slider__item position-relative color-white">
            <div class="header__slider__caption position-absolute">
                <h2 class="header__slide__title ff-Philosopher text-uppercase font-weight-bold">red-cord</h2>
                <p class="header__slider__text ff-Avenir-Next-Cyr text-left">Жизнь без боли <br> и дискомфорта</p>
                <a class="header__slider__btn ff-Avenir-Next-Cyr font-weight-bold text-uppercase fs-18 color-white form__btn-pink d-inline-block" href="https://qualis-vita.ru/sistema-red-cord/">подробнее</a>
            </div>
            <div class="slider__social-list position-absolute text-center">
                <a class="slider__social-list__item d-block color-white fs-30"  href="https://vk.com/qualis_vita">
                    <i class="fab fa-vk"></i>
                </a>
                <a  class="slider__social-list__item d-block color-white fs-30" href="https://www.facebook.com/qualisvita/">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a class="slider__social-list__item d-block color-white fs-30"  href="https://www.instagram.com/qualis_vita_ru/">
                    <i class="fab fa-instagram"></i>
                </a>
                <a class="slider__social-list__item d-block color-white fs-30"  href="https://twitter.com/LifeQualityMos">
                    <i class="fab fa-twitter"></i>
                </a>
            </div>

            <img class="header__slider__img" src="<?= $templatePath ?>/restyle/img/slider_bg/desktop/redkord.jpg" alt="jpg">

        </div>
        <div class="header__slider__item position-relative color-white">

            <div class="header__slider__caption position-absolute">
                <h2 class="header__slide__title ff-Philosopher text-uppercase font-weight-bold">Гомеопатия</h2>
                <p class="header__slider__text ff-Avenir-Next-Cyr text-left">Лечись <br> как английская <br> королева</p>
                <a class="header__slider__btn ff-Avenir-Next-Cyr font-weight-bold text-uppercase fs-18 color-white form__btn-pink d-inline-block" href="https://qualis-vita.ru/gomeopatiya/">подробнее</a>
            </div>
            <div class="slider__social-list position-absolute text-center">
                <a class="slider__social-list__item d-block color-white fs-30"  href="https://vk.com/qualis_vita">
                    <i class="fab fa-vk"></i>
                </a>
                <a  class="slider__social-list__item d-block color-white fs-30" href="https://www.facebook.com/qualisvita/">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a class="slider__social-list__item d-block color-white fs-30"  href="https://www.instagram.com/qualis_vita_ru/">
                    <i class="fab fa-instagram"></i>
                </a>
                <a class="slider__social-list__item d-block color-white fs-30"  href="https://twitter.com/LifeQualityMos">
                    <i class="fab fa-twitter"></i>
                </a>
            </div>
            <img class="header__slider__img" src="<?= $templatePath ?>/restyle/img/slider_bg/desktop/gomeopatiya.jpg" alt="jpg">

        </div>
        <div class="header__slider__item position-relative color-white">
            <div class="header__slider__caption position-absolute">
                <h2 class="header__slide__title ff-Philosopher text-uppercase font-weight-bold">ЛФК</h2>
                <p class="header__slider__text ff-Avenir-Next-Cyr text-left">Польза движения <br> для здоровья <br> и долголетия</p>
                <a class="header__slider__btn ff-Avenir-Next-Cyr font-weight-bold text-uppercase fs-18 color-white form__btn-pink d-inline-block" href="https://qualis-vita.ru/fizicheskaya-reabilitacziya/">подробнее</a>
            </div>
            <div class="slider__social-list position-absolute text-center">
                <a class="slider__social-list__item d-block color-white fs-30"  href="https://vk.com/qualis_vita">
                    <i class="fab fa-vk"></i>
                </a>
                <a  class="slider__social-list__item d-block color-white fs-30" href="https://www.facebook.com/qualisvita/">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a class="slider__social-list__item d-block color-white fs-30"  href="https://www.instagram.com/qualis_vita_ru/">
                    <i class="fab fa-instagram"></i>
                </a>
                <a class="slider__social-list__item d-block color-white fs-30"  href="https://twitter.com/LifeQualityMos">
                    <i class="fab fa-twitter"></i>
                </a>
            </div>
            <img class="header__slider__img" src="<?= $templatePath ?>/restyle/img/slider_bg/desktop/lfk.jpg" alt="jpg">
        </div>
        <div class="header__slider__item position-relative color-white">
            <div class="header__slider__caption position-absolute">
                <h2 class="header__slide__title ff-Philosopher text-uppercase font-weight-bold">Психология</h2>
                <p class="header__slider__text ff-Avenir-Next-Cyr text-left">Квалифицированная <br> поддержка <br> в трудную минуту</p>
                <a class="header__slider__btn ff-Avenir-Next-Cyr font-weight-bold text-uppercase fs-18 color-white form__btn-pink d-inline-block" href="https://qualis-vita.ru/psihologiya/">подробнее</a>
            </div>
            <div class="slider__social-list position-absolute text-center">
                <a class="slider__social-list__item d-block color-white fs-30"  href="https://vk.com/qualis_vita">
                    <i class="fab fa-vk"></i>
                </a>
                <a  class="slider__social-list__item d-block color-white fs-30" href="https://www.facebook.com/qualisvita/">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a class="slider__social-list__item d-block color-white fs-30"  href="https://www.instagram.com/qualis_vita_ru/">
                    <i class="fab fa-instagram"></i>
                </a>
                <a class="slider__social-list__item d-block color-white fs-30"  href="https://twitter.com/LifeQualityMos">
                    <i class="fab fa-twitter"></i>
                </a>
            </div>
            <img class="header__slider__img" src="<?= $templatePath ?>/restyle/img/slider_bg/desktop/psihologiya.jpg" alt="jpg">
        </div>
    </div>
    <div class="header__slider-mobile d-md-none d-block">
        <div class="header__slider__item position-relative color-white">
            <div class="header__slider__caption position-absolute w-100 d-flex justify-content-center">
                <div class="d-inline-block text-center">
                    <h2 class="header__slide__title ff-Philosopher text-uppercase font-weight-bold">остеопатия</h2>
                    <p class="header__slider__text ff-Avenir-Next-Cyr">Сила рук, исцеляющая   без лекарств</p>
                    <a class="header__slider__btn ff-Avenir-Next-Cyr font-weight-bold text-uppercase fs-18 color-white form__btn-pink d-inline-block" href="#">подробнее</a>
                </div>
            </div>
            <img class="header__slider__img" src="<?= $templatePath ?>/restyle/img/slider_bg/mobile/osteopatiya mob.jpg" alt="jpg">
        </div>
        <div class="header__slider__item position-relative color-white">
            <div class="header__slider__caption position-absolute w-100 d-flex justify-content-center">
                <div class="d-inline-block text-center">
                    <h2 class="header__slide__title ff-Philosopher text-uppercase font-weight-bold">red-cord</h2>
                    <p class="header__slider__text ff-Avenir-Next-Cyr">Жизнь без боли  и дискомфорта</p>
                    <a class="header__slider__btn ff-Avenir-Next-Cyr font-weight-bold text-uppercase fs-18 color-white form__btn-pink d-inline-block" href="#">подробнее</a>
                </div>
            </div>
            <img class="header__slider__img" src="<?= $templatePath ?>/restyle/img/slider_bg/mobile/redkord mob.jpg" alt="jpg">
        </div>
        <div class="header__slider__item position-relative color-white">
            <div class="header__slider__caption position-absolute w-100 d-flex justify-content-center">
                <div class="d-inline-block text-center">
                    <h2 class="header__slide__title ff-Philosopher text-uppercase font-weight-bold">Гомеопатия</h2>
                    <p class="header__slider__text ff-Avenir-Next-Cyr">Лечись  как английская  королева</p>
                    <a class="header__slider__btn ff-Avenir-Next-Cyr font-weight-bold text-uppercase fs-18 color-white form__btn-pink d-inline-block" href="#">подробнее</a>
                </div>
            </div>
            <img class="header__slider__img" src="<?= $templatePath ?>/restyle/img/slider_bg/mobile/gomeopatiya mob.jpg" alt="jpg">
        </div>
        <div class="header__slider__item position-relative color-white">
            <div class="header__slider__caption position-absolute w-100 d-flex justify-content-center">
                <div class="d-inline-block text-center">
                    <h2 class="header__slide__title ff-Philosopher text-uppercase font-weight-bold">ЛФК</h2>
                    <p class="header__slider__text ff-Avenir-Next-Cyr">Польза движения  для здоровья  и долголетия</p>
                    <a class="header__slider__btn ff-Avenir-Next-Cyr font-weight-bold text-uppercase fs-18 color-white form__btn-pink d-inline-block" href="#">подробнее</a>
                </div>
            </div>
            <img class="header__slider__img" src="<?= $templatePath ?>/restyle/img/slider_bg/mobile/lfk mob.jpg" alt="jpg">
        </div>
        <div class="header__slider__item position-relative color-white">
            <div class="header__slider__caption position-absolute w-100 d-flex justify-content-center">
                <div class="d-inline-block text-center">
                    <h2 class="header__slide__title ff-Philosopher text-uppercase font-weight-bold">Психология</h2>
                    <p class="header__slider__text ff-Avenir-Next-Cyr">Квалифицированная  поддержка в трудную минуту</p>
                    <a class="header__slider__btn ff-Avenir-Next-Cyr font-weight-bold text-uppercase fs-18 color-white form__btn-pink d-inline-block" href="#">подробнее</a>
                </div>
            </div>
            <img class="header__slider__img" src="<?= $templatePath ?>/restyle/img/slider_bg/mobile/psihologiya mob.jpg" alt="jpg">
        </div>
    </div>
    <? } ?>
</header>