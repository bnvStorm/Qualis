<?
$templatePath = get_template_directory_uri();
?>
    <div class="row">
        <div class="col-12">
            <div class="bread">
                <? if (function_exists('yoast_breadcrumb')) yoast_breadcrumb('<p id="breadcrumbs">', '</p>'); ?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-9 main-content">
            <h1><?=single_cat_title()?></h1>
            <div class="row custom_row cards">
                <div class="col-md-4">
                    <a href="/osteopatiya/" class="direction custom_card bvi-voice">
                        <div class="direction_img custom_card__img">
                            <img src="/wp-content/uploads/2020/03/e6914715-3f98-40fc-ae23-873df646dda4.jpg" class="img-responsive" alt="">
                            <div class="custom_card__hover_description">Остеопатия</div>
                        </div>
                        <div class="direction_title custom_card__name"><span>Остеопатия</span></div>
                    </a>
                </div>
                <div class="col-md-4">
                    <div class="direction custom_card bvi-voice">
                        <div class="direction_img custom_card__img">
                            <img src="<?=$templatePath?>/img/src/2 Napravlenie.jpg" class="img-responsive" alt="">
                            <div class="custom_card__hover_description">Мягкие мануальные техники для вашего здоровья</div>
                        </div>
                        <div class="direction_title custom_card__name"><span>Мануальная терапия</span></div>
                    </div>
                </div>
                <div class="col-md-4">
                    <a href="/lfk-fiz-reabilitatsiya/" class="direction custom_card bvi-voice">
                        <div class="direction_img custom_card__img">
                            <img src="<?=$templatePath?>/img/src/3 Napravlenie.jpg" class="img-responsive" alt="">
                            <div class="custom_card__hover_description">Лечебная физкультура индивидуально для Вас</div>
                        </div>
                        <div class="direction_title custom_card__name"><span>ЛФК (физическая реабилитация)</span>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="/detskij-massazh/" class="direction custom_card bvi-voice">
                        <div class="direction_img custom_card__img">
                            <img src="<?=$templatePath?>/img/src/4 Napravlenie.jpg" class="img-responsive" alt="">
                            <div class="custom_card__hover_description">Выезд на дом</div>
                        </div>
                        <div class="direction_title custom_card__name"><span>Детский массаж</span></div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="/gomeopatiya/" class="direction custom_card bvi-voice">
                        <div class="direction_img custom_card__img">
                            <img src="<?=$templatePath?>/img/src/5 Napravlenie.jpg" class="img-responsive" alt="">
                            <div class="custom_card__hover_description">Официальна признана ВОЗ</div>
                        </div>
                        <div class="direction_title custom_card__name"><span>Гомеопатия</span></div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="/psihologiya/" class="direction custom_card bvi-voice">
                        <div class="direction_img custom_card__img">
                            <img src="<?=$templatePath?>/img/src/6 Napravlenie.jpg" class="img-responsive" alt="">
                            <div class="custom_card__hover_description">Все мы родом из детства...</div>
                        </div>
                        <div class="direction_title custom_card__name"><span>Психология</span></div>
                    </a>
                </div>
            </div>
        </div>
        <aside class="col-md-3 sidebar">
            <? include(get_template_directory() . '/templates/sidebar/sidebar-menu.php'); ?>
        </aside>

    </div>


