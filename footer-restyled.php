<?php
$templatePath = get_template_directory_uri();
?>

<footer class="footer position-relative bg-dark py-5 color-gray">
    <div class="container">
        <div class="row">
            <div class="col-12 p-0 d-md-block d-none mb-5">
                <div class="col-12 p-0 d-flex justify-content-between align-items-center ">
                    <div class="col-6 p-0">
                        <div class="logo d-flex align-items-center pl-0">
                            <a href="/">
                                <img src="<?=$templatePath?>/restyle/img/Logo-white.svg"  class="logo-img" alt="Лого">
                            </a>
                        </div>
                    </div>
                    <div class="col-6 d-flex justify-content-end p-0">
                        <div class="telephone-button d-flex justify-content-center">
                            <a class="wrapper-button d-flex align-items-center rounded-pill border-aqua px-3 py-2
                                " data-fancybox="" data-src="#order-popup" >
                                <div  class="button position-relative  rounded-circle d-flex justify-content-center align-items-center">
                                    <img src="<?=$templatePath?>/restyle/img/SVG/telephone-white.svg" height="25px" alt="svg" class="position-absolute white">
                                    <img src="<?=$templatePath?>/restyle/img/SVG/telephone-blue.svg" height="25px" alt="svg" class="position-absolute blue">
                                </div>
                                <div class="pl-3 align-items-center">
                                    <div class="m-0 ff-Philosopher fs-22 font-weight-bold lh-20px">+7 (495) 032-80-45</div>
                                    <div class="m-0 ff-Avenir-Next-Cyr color-gray fs-14 ">Заказать обратный звонок</div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 footer__social d-md-none d-block text-center">
                <ul class="list-inline">
                    <li class="list-inline-item after-line">
                        <a href="/">
                            <img src="<?=$templatePath?>/restyle/img/SVG/vk-grey.svg" height="20px" alt="SVG">
                        </a>
                    </li>
                    <li class="list-inline-item after-line">
                        <a href="/">
                            <img src="<?=$templatePath?>/restyle/img/SVG/fb-grey.svg" height="30px" alt="SVG">
                        </a>
                    </li>
                    <li class="list-inline-item after-line">
                        <a href="/">
                            <img src="<?=$templatePath?>/restyle/img/SVG/inst-grey.svg" height="25px" alt="SVG">
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="/">
                            <img src="<?=$templatePath?>/restyle/img/SVG/twitter-grey.svg" height="25px" alt="SVG">
                        </a>
                    </li>
                </ul>
            </div>

            <div class="col-md-3 footer__about-us pl-md-0 pl-4">
                <h3 class="footer__section-title text font-weight-bold mb-3 text-md-left text-center">О нас</h3>

                <ul class="about-us__list list-inline ff-Avenir-Next-Cyr fs-14 ">
                    <li class="about-us__item">
                        <a href="/news/" class="footer__link">Новости</a>
                    </li>
                    <li class="about-us__item">
                        <a href="/articles/" class="footer__link">Статьи и видео</a>
                    </li>
                    <li class="about-us__item">
                        <a href="/visitors/" class="footer__link">Для посетителей</a>
                    </li>
                    <li class="about-us__item">
                        <a href="/reviews/" class="footer__link">Отзывы</a>
                    </li>
                    <li class="about-us__item">
                        <a href="/vakansii/" class="footer__link">Вакансии</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-3 footer__directions pl-md-0 pl-4">
                <h3 class="footer__section-title text font-weight-bold mb-3 text-md-left text-center">Направления</h3>

                <ul class="directions__list list-inline ff-Avenir-Next-Cyr fs-14 ">
<!--                     <li class="directions__item">
                        <a href="/" class="footer__link">Неврология</a>
                    </li> -->
                    <li class="directions__item">
                        <a href="/ortopedicheskie-stelki/" class="footer__link">Изготовление ортопедических стелек</a>
                    </li>
                    <li class="directions__item">
                        <a href="/fizicheskaya-reabilitacziya/" class="footer__link">ЛФК (физ. реабилитация)</a>
                    </li>
                    <li class="directions__item">
                        <a href="/psihologiya/" class="footer__link">Психология</a>
                    </li>
                    <li class="directions__item">
                        <a href="/gomeopatiya/" class="footer__link">Гомеопатия</a>
                    </li>
                    <li class="directions__item">
                        <a href="/detskij-massazh/" class="footer__link">Детский массаж</a>
                    </li>
                </ul>

            </div>
            <div class="col-md-6 footer__documents pl-md-0 pl-4">
                <h3 class="footer__section-title text font-weight-bold mb-3 text-md-left text-center">Документы</h3>

                <ul class="documents__list list-inline ff-Avenir-Next-Cyr fs-14 ">
                    <li class="documents__item">
                        <a href="/license/" class="footer__link">Лицензия</a>
                    </li>
                    <li class="documents__item">
                        <a href="/informirovannoe-dobrovolnoe-soglasie/" class="footer__link">Информированное добровольное согласие</a>
                    </li>
                    <li class="documents__item">
                        <a href="/privacy-policy/" class="footer__link">Политика в отношении персональных данных</a>
                    </li>
                    <li class="documents__item">
                        <a href="/soglasie-na-obrabotku-personalnyh-dannyh/" class="footer__link">Согласие на обработку персональных данных</a>
                    </li>
                    <li class="documents__item">
                        <a href="/pravila-predostavleniya-meditsinskih-uslug/" class="footer__link">Правила предоставления медицинских услуг</a>
                    </li>
                    <li class="documents__item">
                        <a href="/pravo-na-meditsinskuyu-pomoshh/" class="footer__link">Право на медицинскую помощь</a>
                    </li>
                    <li class="documents__item">
                        <a href="/dejstvuyushhie-skidki/" class="footer__link">Действующие скидки</a>
                    </li>
                </ul>

            </div>
            <div class="col-12 footer__rights">
                <div class="ff-Avenir-Next-Cyr fs-14">© 2014-2020. Все права защищены</div>
            </div>

        </div>
    </div>
</footer>
<div class="popup popup-accent" id="order-popup" style="display: none;">
    <?= do_shortcode('[contact-form-7 id="348" title="Заявка - попап"]');?>
</div>
<script src="https://api-maps.yandex.ru/2.1/?apikey=f2c18387-e6a9-4edb-904d-01d403ee6d06&lang=ru_RU"
        type="text/javascript"></script>
<script src="<?=$templatePath?>/js/jquery.min.js"></script>
<script src="<?=$templatePath?>/js/owl.carousel.min.js"></script>
<script src="<?=$templatePath?>/js/jquery.spincrement.min.js"></script>
<script src="<?=$templatePath?>/js/jquery.fancybox.min.js"></script>
<script src="<?=$templatePath?>/lib/lowvision/js/responsivevoice.min.js"></script>
<script src="<?=$templatePath?>/lib/lowvision/js/js.cookie.js"></script>
<script src="<?=$templatePath?>/lib/lowvision/js/bvi-init.js"></script>
<script src="<?=$templatePath?>/lib/lowvision/js/bvi.min.js"></script>
<script src="<?=$templatePath?>/js/custom.js"></script>
<!-- calltouch -->
<script type="text/javascript">
    (function(w,d,n,c){w.CalltouchDataObject=n;w[n]=function(){w[n]["callbacks"].push(arguments)};if(!w[n]["callbacks"]){w[n]["callbacks"]=[]}w[n]["loaded"]=false;if(typeof c!=="object"){c=[c]}w[n]["counters"]=c;for(var i=0;i<c.length;i+=1){p(c[i])}function p(cId){var a=d.getElementsByTagName("script")[0],s=d.createElement("script"),i=function(){a.parentNode.insertBefore(s,a)};s.type="text/javascript";s.async=true;s.src="https://mod.calltouch.ru/init.js?id="+cId;if(w.opera=="[object Opera]"){d.addEventListener("DOMContentLoaded",i,false)}else{i()}}})(window,document,"ct","fg7yyjpj");
</script>
<script>
    jQuery(document).on('wpcf7mailsent', function(e) {
        var m = jQuery(e.target);
        var fio = m.find('input[name*="name"]').val();
        var phone = m.find('input[name*="phone"],input[name*="tel"],input[type="tel"]').val();
        var mail = m.find('input[name*="email"],input[type="email"]').val();
        var ct_site_id = '38484';
        var sub = 'Заявка с ' + location.hostname;
        var ct_data = {
            fio: fio,
            phoneNumber: phone,
            email: mail,
            subject: sub,
            requestUrl: location.href,
            sessionId: window.call_value
        };
        console.log(ct_data);
        if (!!phone || !!mail){
            jQuery.ajax({
                url: 'https://api-node15.calltouch.ru/calls-service/RestAPI/requests/'+ct_site_id+'/register/',
                dataType: 'json', type: 'POST', data: ct_data, async: false
            });
        }
    });
</script>

<script src="<?= $templatePath ?>/restyle/bootstrap.min.js"></script>
<script src="<?= $templatePath ?>/restyle/jquery.validate.js"></script>
<script src="<?= $templatePath ?>/restyle/fancybox-master/dist/jquery.fancybox.min.js"></script>
<script src="<?= $templatePath ?>/restyle/slick-1.8.1/slick/slick.js"></script>
<script src="<?= $templatePath ?>/restyle/script.js"></script>
<!-- calltouch -->
<?php wp_footer(); ?>
</body>
</html>