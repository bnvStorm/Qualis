<?php
$templatePath = get_template_directory_uri();
?>

<footer class="footer front_page_footer">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="footer_level_1">

                    <a href="/" class="footer_logo">
                        <img src="/wp-content/themes/twentytwenty/img/src/icons/PNG/Logo%20Quality-Vita%20white.png" class="img-responsive"/>
                    </a>
                    <a data-fancybox data-src="#order-popup" href="javascript:;" class="top_header__phone phone footer_phone">
                            <span class="button button_round button_accent box_shadow">
                                <svg class="icon">
                                    <use xlink:href="<?=get_template_directory_uri()?>/img/src/sprite.svg#phone"/>
                                </svg>
                            </span>
                        <div class="top_header__phone_description bvi-voice">
                            <a class="top_header__phone_number">+7 (495) 032-80-45</a>
                            <span class="top_header__phone_text">Заказать обратный звонок</span>
                        </div>
                    </a>
                </div>
                <div class="footer_level_2">
                    <div class="footer_menu_box">
                        <div class="footer_menu_title bvi-voice">О нас</div>
                            <?php wp_nav_menu(array(
                                'menu' => 3,
                                'container' => false,
                                'menu_class' => 'footer_menu footer_menu_1',
                                'items_wrap' => '<ul class="%2$s">%3$s</ul>',
                                'depth' => 0
                            )); ?>
                    </div>
                    <div class="footer_menu_box bvi-voice">
                        <div class="footer_menu_title">Направления</div>
                        <?php wp_nav_menu(array(
                            'menu' => 4,
                            'container' => false,
                            'menu_class' => 'footer_menu footer_menu_2',
                            'items_wrap' => '<ul class="%2$s">%3$s</ul>',
                            'depth' => 0
                        )); ?>
                    </div>
                    <div class="footer_menu_box bvi-voice">
                        <div class="footer_menu_title">Документы</div>
                        <ul class="footer_menu footer_menu_3">
                            <?php wp_nav_menu(array(
                                'menu' => 5,
                                'container' => false,
                                'menu_class' => 'footer_menu footer_menu_3',
                                'items_wrap' => '<ul class="%2$s">%3$s</ul>',
                                'depth' => 0
                            )); ?>
                        </ul>
                    </div>
                </div>
                <div class="footer_level_3">
                    <div class="footer_level_3__requisites bvi-voice">
                        <div class="footer_menu_title">Наши реквизиты</div>
                        <ul class="footer_menu">
                            ИНН: 7709494546<br>
                            ОГРН: 1167746549453
                        </ul>
                    </div>
                    <div class="footer_copyright bvi-voice">
                        © 2014-<?= (new DateTime())->format('Y')?>. Все права защищены
                    </div>
                </div>
                <div class="footer_big_logo">
                    <img src="/wp-content/themes/twentytwenty/img/src/icons/SVG/znak%20logo%20quality-vita-grey.svg" class="img-responsive"/>
                </div>
            </div>
        </div>
    </div>
</footer>
<div class="popup popup-accent" id="order-popup" style="display: none;">
        <?= do_shortcode('[contact-form-7 id="348" title="Заявка - попап"]');?>
<!--        <div class="popup-form-inner">-->
<!--            <label><svg class="icon">-->
<!--                    <use xlink:href="--><?//=$templatePath?><!--/img/src/sprite.svg#user"/>-->
<!--                </svg><input type="text" placeholder="Имя"></label>-->
<!--            <label><svg class="icon">-->
<!--                    <use xlink:href="--><?//=$templatePath?><!--/img/src/sprite.svg#phone"/>-->
<!--                </svg><input type="tel" placeholder="Телефон"></label>-->
<!--            <label><svg class="icon">-->
<!--                    <use xlink:href="--><?//=$templatePath?><!--/img/src/sprite.svg#email"/>-->
<!--                </svg><input type="email" placeholder="E-mail"></label>-->
<!--            <button class="form-submit button button_bordered">-->
<!--                Отправить-->
<!--            </button>-->
<!--            <div class="personal-data">-->
<!--                *Нажимая на кнопку, вы даете согласие на обработку персональных данных-->
<!--            </div>-->
<!--        </div>-->
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
<!-- calltouch -->
<?php wp_footer(); ?>
</body>
</html>