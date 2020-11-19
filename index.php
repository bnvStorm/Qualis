<?php
$templatePath = get_template_directory_uri();
?>

<? get_header('restyled'); ?>

<main class="front-page">
    <?/*
    <section class="header_intro">
        <div class="container">
            <div class="row">
                <div class="col-12">
<!--                    <div class="header_intro__container bvi-voice">-->
<!--                        <div class="header_intro__greeting"><span class="text_accent">Новая</span></div>-->
<!--                        <div class="header_intro__advert">реабилитиционная система!</div>-->
<!---->
<!--                        <div class="header_intro__advert_button button button_accent button_rect">red cord</div>-->
<!--                        <div class="header_intro__description">МЫ РАБОТАЕМ и поддерживаем вас!<br>-->
<!--                            (Указ Мэра Москвы № 39-УМ от 04.04.2020г. разрешает работу медицинских организаций)-->
<!--                            Для вас скидка 20% (скидки не суммируются) в период карантина до 14 июня!<br>-->
<!--                            Для цифровых пропусков: ИНН 7709494546, ООО «Качество Жизни»<br>-->
<!--                            <a href="/my-rabotaem-i-podderzhivaem-vas/" style="color: #CD5C5C;">Не терпите БОЛЬ!</a> Наши остеопаты и реабилитологи готовы вам помочь! <a href="/my-rabotaem-i-podderzhivaem-vas/" style="color: #0000FF;">Подробнее...</a>-->
<!--                        </div>-->
<!--                        <a href="https://app.medesk.ru/patient/?e=5ad0c743f76f4d001788518c&a=anonymous" class="header_intro__advert_button_more button button_bordered button_rounded">ЗАПИСАТЬСЯ НА ПРИЕМ</a>-->
<!--                    </div>-->
                    <div class="header_intro__container bvi-voice">
                        <div class="header_intro__greeting"><span class="text_accent">20% скидка</span></div>
                        <div class="header_intro__advert">на прием врачей-остеопатов и инструкторов лфк для детей во время внеплановых каникул<br> с 5 по 18 октября</div>

                        <!-- <div class="header_intro__advert_button button button_accent button_rect">Подробнее</div>-->

                        <a href="/20-skidka/" class="header_intro__advert_button_more button button_bordered button_rounded">Подробнее</a>
                    </div>
                </div>
            </div>
        </div>
        <!--        <div class="header_intro__social_links social_links">-->
        <!--            <div class="social_links__slogan">Мы всегда рядом</div>-->
        <!--            <div class="white_line"></div>-->
        <!--            <div class="social_links_links">-->
        <!--                <a href="https://vk.com/qualis_vita" class="vk_link">-->
        <!--                    <svg class="icon">-->
        <!--                        <use xlink:href="--><? //=$templatePath?><!--/img/src/sprite.svg#vk"/>-->
        <!--                    </svg>-->
        <!--                </a>-->
        <!--                <a href="https://www.facebook.com/qualisvita/" class="fb_link">-->
        <!--                    <svg class="icon">-->
        <!--                        <use xlink:href="--><? //=$templatePath?><!--/img/src/sprite.svg#facebook"/>-->
        <!--                    </svg>-->
        <!--                </a>-->
        <!--                <a href="https://www.instagram.com/qualis_vita_ru/" class="inst_link">-->
        <!--                    <svg class="icon">-->
        <!--                        <use xlink:href="--><? //=$templatePath?><!--/img/src/sprite.svg#inst"/>-->
        <!--                    </svg>-->
        <!--                </a>-->
        <!--                <a href="https://twitter.com/LifeQualityMos" class="twitter_link">-->
        <!--                    <svg class="icon">-->
        <!--                        <use xlink:href="--><? //=$templatePath?><!--/img/src/sprite.svg#twitter"/>-->
        <!--                    </svg>-->
        <!--                </a>-->
        <!--            </div>-->
        <!--        </div>-->
        <img class="header_intro__advert_image" src="<?= $templatePath ?>/img/src/redcord.png" alt="">
    </section> */?>
    <section class="directions standart-padding">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>Направления</h2>
                    <div class="row custom_row cards">
                        <div class="col-md-4">
                            <a href="/osteopatiya/" class="direction custom_card bvi-voice">
                                <div class="direction_img custom_card__img">
                                    <img src="/wp-content/uploads/2020/03/e6914715-3f98-40fc-ae23-873df646dda4.jpg"
                                         class="img-responsive" alt="">
                                    <div class="custom_card__hover_description">Остеопатия</div>
                                </div>
                                <div class="direction_title custom_card__name"><span>Остеопатия</span>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a href="/ortopedicheskie-stelki/" class="direction custom_card bvi-voice">
                            <div class="direction custom_card bvi-voice">
                                <div class="direction_img custom_card__img">
                                    <img src="<?= $templatePath ?>/img/src/Napravlenie134.jpeg" class="img-responsive"
                                         alt="">
                                    <div class="custom_card__hover_description">Индивидуальные стельки для здоровья ваших ног
                                    </div>
                                </div>
                                <div class="direction_title custom_card__name"><span>Изготовление ортопедических стелек</span>
                                </div>
                                
                            </div>
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a href="/lfk-fiz-reabilitatsiya/" class="direction custom_card bvi-voice">
                                <div class="direction_img custom_card__img">
                                    <img src="<?= $templatePath ?>/img/src/3 Napravlenie.jpg" class="img-responsive"
                                         alt="">
                                    <div class="custom_card__hover_description">Лечебная физкультура индивидуально для
                                        Вас
                                    </div>
                                </div>
                                <div class="direction_title custom_card__name">
                                    <span>ЛФК (физическая реабилитация)</span>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a href="/detskij-massazh/" class="direction custom_card bvi-voice">
                                <div class="direction_img custom_card__img">
                                    <img src="<?= $templatePath ?>/img/src/4 Napravlenie.jpg" class="img-responsive"
                                         alt="">
                                    <div class="custom_card__hover_description">Выезд на дом</div>
                                </div>
                                <div class="direction_title custom_card__name"><span>Детский массаж</span></div>
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a href="/gomeopatiya/" class="direction custom_card bvi-voice">
                                <div class="direction_img custom_card__img">
                                    <img src="<?= $templatePath ?>/img/src/5 Napravlenie.jpg" class="img-responsive"
                                         alt="">
                                    <div class="custom_card__hover_description">Официальна признана ВОЗ</div>
                                </div>
                                <div class="direction_title custom_card__name"><span>Гомеопатия</span></div>
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a href="/psihologiya/" class="direction custom_card bvi-voice">
                                <div class="direction_img custom_card__img">
                                    <img src="<?= $templatePath ?>/img/src/6 Napravlenie.jpg" class="img-responsive"
                                         alt="">
                                    <div class="custom_card__hover_description">Все мы родом из детства...</div>
                                </div>
                                <div class="direction_title custom_card__name"><span>Психология</span></div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-12 font-bold">
                    <h1>Клиника восстановительной медицины «Качество жизни». Центр остеопатии</h1>
                    <p>Центр «Качество жизни» специализируется на сохранении и восстановлении вашего здоровья. </p>

                    <p>Здоровье — это возможность возможностей. Оно дает нам свободу, время, красоту, счастье, в конце
                        концов. Только здоровый человек может получать удовольствие от жизни.</p>

                    <p>Но многие понимают это, когда оно утрачено.</p>

                    <p>Когда приходится отказываться от многих вещей.</p>

                    <p>Когда тело перестает слушаться.</p>

                    <p>Когда появляется боль.</p>

                    <p>Когда полноценная жизнь превращается в существование с ограниченными возможностями.</p>
					<p>Когда приходится обращаться за помощью к медицине.</p>
					

                    <p>Наш центр не случайно называется «Качество жизни». Наша цель — помочь вам избавиться от болезней
                        и их последствий, вернуть жизнь без боли и дискомфорта, восстановить активность и
                        работоспособность.</p>

                    <p>Все это — «Качество жизни». Качество вашей жизни!</p>
                </div>
            </div>
        </div>
    </section>

    <section class="section_discount bg_accent same_paddings">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section_discount__content bvi-voice">
                        <h2>Скидка 10% при посещении без предварительной
                            записи</h2>
                        <a target="_blank" href="https://app.medesk.ru/patient/?e=5ad0c743f76f4d001788518c&a=anonymous"
                           class="form__btn-pink_10p button button_fill_white section_discount__button ">Запишитесь прямо
                            сейчас</a>
                        <!--                        <div class="section_discount__description">*Нажимая на кнопку, вы даете согласие на обработку-->
                        <!--                            персональных данных-->
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <section class="section_staff standart-padding">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="bvi-voice">Ведущие специалисты</h2>
                    <div class="row custom_row cards mobile_slider_single_item owl-carousel">
                        <div class="col-md-4">
                            <a href="/doctor/tishhenko-evgeniya-petrovna/" class="section_staff__card custom_card ">
                                <div class="section_staff__img custom_card__img">
                                    <img src="<?= $templatePath ?>/img/src/Tishenko.jpg" class="img-responsive" alt="">
                                </div>
                                <div class="section_staff__title custom_card__name bvi-voice"><span>Тищенко
Евгения Петровна</span>
                                    <div class="section_staff__hint">
                                        <svg class="icon">
                                            <use xlink:href="<?= $templatePath ?>/img/src/sprite.svg#hint"/>
                                        </svg>
                                        <span>Врач-остеопат к.м.н.</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a href="/doctor/yudina-irina-nikolaevna/" class="section_staff__card custom_card">
                                <div class="direction_img custom_card__img">
                                    <img src="<?= $templatePath ?>/img/src/yudina-irina.jpg" class="img-responsive"
                                         alt="">
                                </div>
                                <div class="section_staff__title custom_card__name bvi-voice"><span>Юдина
Ирина Николаевна</span>
                                    <div class="section_staff__hint">
                                        <svg class="icon">
                                            <use xlink:href="<?= $templatePath ?>/img/src/sprite.svg#hint"/>
                                        </svg>
                                        <span>Врач по лечебной физкультуре и спортивной медицине</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a href="/doctor/maksim-kolinskij/" class="section_staff__card custom_card">
                                <div class="section_staff__img custom_card__img">
                                    <img src="<?= $templatePath ?>/img/src/Kolinskiy.jpg" class="img-responsive" alt="">
                                </div>
                                <div class="section_staff__title custom_card__name bvi-voice"><span>Колинский
Максим Сергеевич</span>
                                    <div class="section_staff__hint">
                                        <svg class="icon">
                                            <use xlink:href="<?= $templatePath ?>/img/src/sprite.svg#hint"/>
                                        </svg>
                                        <span>Врач-остеопат</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="text_center">
                        <a href="/doctor/" class="section_staff__more_button button button_bordered button_rounded">Смотреть
                            всех специалистов</a>
                    </div>
                </div>
                <div class="col-12 mb-4 font-bold">
                    <h2>В клинике «Качество жизни» мы трудимся для вас</h2>
                    <p>Центр основан в 2017 году и уже более тысячи жителей Москвы получили квалифицированную помощь наших специалистов. </p>
                    <p>В клинике работают сертифицированные врачи с многолетним опытом практической деятельности. Многие из них — врачи высшей категории и кандидаты медицинских наук. </p>
                    <div>Клиника «Качество жизни» относится к учреждениям, где все пациенты окружены заботой и вниманием. А опыт врачей в практической медицине и комплексный подход помогают им восстановиться легко и эффективно.</div>
                </div>
            </div>
        </div>
    </section>

    <section class="section_advantages same_paddings">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="bvi-voice">Преимущества</h2>
                    <div class="row section_advantages__row">
                        <div class="col-sm-6">
                            <div class="section_advantages__advantage">
                                <div class="section_advantages__icon">
                                    <svg class="icon">
                                        <use xlink:href="<?= $templatePath ?>/img/src/sprite.svg#reputation"/>
                                    </svg>
                                </div>
                                <div class="section_advantages__description bvi-voice">
                                    <div class="section_advantages__name">Дорожим репутацией</div>
                                    <div class="section_advantages__text">У нас работают только врачи с большим
                                        медицинским стажем, опытом и безупречной репутацией
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="section_advantages__advantage">
                                <div class="section_advantages__icon">
                                    <svg class="icon">
                                        <use xlink:href="/wp-content/themes/twentytwenty/img/src/sprite.svg#devotion"/>
                                    </svg>
                                </div>
                                <div class="section_advantages__description bvi-voice">
                                    <div class="section_advantages__name">Врачи, преданные своему делу</div>
                                    <div class="section_advantages__text">У нас нет случайных сотрудников, мы доверяем
                                        профессионально друг другу, постоянно учимся и растем
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="section_advantages__advantage">
                                <div class="section_advantages__icon">
                                    <svg class="icon">
                                        <use xlink:href="/wp-content/themes/twentytwenty/img/src/sprite.svg#cure"/>
                                    </svg>
                                </div>
                                <div class="section_advantages__description bvi-voice">
                                    <div class="section_advantages__name">Лечим, а не продаем</div>
                                    <div class="section_advantages__text">Мы не продаем Вам услугу согласно плану
                                        продаж, а оказываем нужную именно Вам медицинскую помощь
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="section_advantages__advantage">
                                <div class="section_advantages__icon">
                                    <svg class="icon">
                                        <use xlink:href="/wp-content/themes/twentytwenty/img/src/sprite.svg#care"/>
                                    </svg>
                                </div>
                                <div class="section_advantages__description bvi-voice">
                                    <div class="section_advantages__name">Заботимся о Вас с удовольствием</div>
                                    <div class="section_advantages__text">Нам важно, чтобы качество Вашей жизни
                                        улучшалось, мы заботимся о Вас и радуемся результатам вместе с Вами
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="section_advantages__advantage">
                                <div class="section_advantages__icon">
                                    <svg class="icon">
                                        <use xlink:href="/wp-content/themes/twentytwenty/img/src/sprite.svg#motivation"/>
                                    </svg>
                                </div>
                                <div class="section_advantages__description bvi-voice">
                                    <div class="section_advantages__name">Ищем мотивацию движения к здоровью</div>
                                    <div class="section_advantages__text">Мы помогаем Вам прийти к самостоятельной
                                        здороаой физической активности, бодрости и здоровью
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="section_advantages__advantage">
                                <div class="section_advantages__icon">
                                    <svg class="icon">
                                        <use xlink:href="/wp-content/themes/twentytwenty/img/src/sprite.svg#location"/>
                                    </svg>
                                </div>
                                <div class="section_advantages__description bvi-voice">
                                    <div class="section_advantages__name">Удобное расположение</div>
                                    <div class="section_advantages__text">Клиника расположена в центре города, около
                                        станции метро Таганская, что делает нас доступными жителям любого района столицы
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    </section>
    <section class="standart-padding">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>Наши методы</h2>
                    <p>Человеческая природа способна справиться практически с любой болезнью. Задача врача — указать
                        организму правильный путь к выздоровлению и помочь ему мобилизовать свои силы на борьбу с
                        недугом. В нашей клинике мы используем только естественные и безопасные методы медицины:
<h3>Остеопатия</h3>
<p>Врачи нашей клиники в совершенстве владеют висцеральным, структуральным и краниальным подходами остеопатического лечения. </p>

<div>Правило остеопатии: заболевание легче вылечить до его перехода в хроническую форму. С ранней диагностикой и определением истинной причины болезни отлично справляются приемы остеопатии. Наши врачи используют их для лечения детей и взрослых.</div>

<p>Отсутствие лекарств и минимум противопоказаний делает курс остеопатии в клинике эффективным для лечения женщин на любом сроке беременности и после родов, детей с самого раннего возраста, спортсменов и людей преклонного возраста.</p>

                    <h3>Физическая реабилитация</h3>
<p>Лечебная гимнастика, массаж, кинезотерапия, кинезиотейпирование — эти и другие методы ЛФК помогают восстановиться после перенесенных травм и заболеваний. Часто мы комбинируем ЛФК с остеопатией для усиления лечебного эффекта.</p> 

					<p>Клиника «Качество жизни», наряду с остеопаией, использует передовые методики ЛФК: подвесную терапию Redcord, SEAS гимнастику, PNF–терапию, Войта–терапию, бобат–терапию и др.</p>
<h3>Мануальная терапия</h3>
<p>Классические приемы и мягкие техники ручного воздействия эффективны в лечении заболеваний позвоночника, суставов, мышц и внутренних органов.</p> 
<h3>Подиатрия</h3>
<p>Диагностика и лечение болезней и деформаций стоп как врожденных, так и приобретенных. Сочетание подиатрии, остеопатии и ЛФК корректирует даже самые сложные деформации стоп у детей и взрослых.</p>

Ношение ортопедических стелек, изготовленных для вас нашим специалистом, поможет закрепить полученный результат.
<h3>Гомеопатия</h3>
<p>Концепция лечения подобного подобным доказала свою результативность в ряде случаев, когда традиционная лекарственная терапия была неэффективна.</p>
<h3>Психология</h3>
<p>Психологический комфорт — обязательная составляющая успешного лечения. Поэтому двери психолога центра «Качество жизни» всегда открыты для всех, кто потерял веру в свои силы на пути к выздоровлению.</p>

                    </p>
                </div>
            </div>
        </div>
        </div>
    </section>
    <section class="section_discount section_discount_2 bg_accent same_paddings">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section_discount__content bvi-voice">
                        <h2>Новое оборудование Red Cord</h2>
                        <div class="section_discount__top_description">Оборудование для проведения кинезотерапии</div>
                        <a href="/sistema-red-cord/"
                           class="form__btn-pink_10p button button_fill_white section_discount__button">Подробнее</a>
                        <div class="section_discount__description">*Нажимая на кнопку, вы даете согласие на обработку
                            персональных данных
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="standart-padding">
        <div class="container">
            <div class="row">
                <div class="col-12 mb-5 font-bold">
                    <h2>Заболевания и состояния, с которыми к нам обращаются</h2>
                    <p>Вот лишь небольшой перечень показаний, по которым вы и члены всей вашей семьи получите квалифицированную помощь в нашей клинике:</p>
                    <ul style="list-style: none;">
                        <li>— заболевания опорно–двигательного аппарата;</li>
                        <li>— болевой синдром различного происхождения;</li>
                        <li>— восстановление после травм, в т.ч. родовой, ЧМТ;</li>
                        <li>— нарушения осанки, плоскостопие, деформации стоп;</li>
                        <li>— восстановление после хирургических операций;</li>
                        <li>— спортивные травмы и повышение спортивной выносливости;</li>
                        <li>— планирование беременности и подготовка к родам;</li>
                        <li>— упадок сил, хроническая усталость, бессонница.</li>
                    </ul>
                    <p>Наблюдение в центре «Качество жизни» помогло многим жителям Москвы предотвратить развитие серьезных заболеваний на ранних стадиях.</p>
                    <div>Восстановительная медицина в центре остеопатии «Качество жизни» — это высокий профессионализм врачей, индивидуальный подход к пациентам, комплексное лечение заболеваний и высокий сервис.
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section_reviews same_paddings">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="bvi-voice">Отзывы</h2>
                    <div class="owl-carousel section_reviews__carousel review_carousel">
                        <div class="review_carousel__item">
                            <div class="review_carousel__head bvi-voice">
                                <div class="review_carousel__name">Жанна Викторовна, <span
                                            class="review_carousel__age">45 лет</span></div>
                                <div class="review_carousel__info">
                                    <div class="review_carousel__place">
                                        <svg class="icon">
                                            <use xlink:href="<?= $templatePath ?>/img/src/sprite.svg#pin"/>
                                        </svg>
                                        Москва
                                    </div>
                                    <div class="review_carousel__time">
                                        <svg class="icon">
                                            <use xlink:href="/wp-content/themes/twentytwenty/img/src/sprite.svg#clock"/>
                                        </svg>
                                        14.01.2020 18:34
                                    </div>
                                </div>
                            </div>
                            <div class="review_carousel__body bvi-voice">
                                К доктору Колинскому М.С. я обратилась из-за неврологических осложнений после сложного
                                гриппа. Во время первого остеопатического сеанса боль исчезла, но понадобилось еще
                                несколько сеансов для стабилизации состояния. Важно отметить вдумчивость и
                                внимательность Максима Сергеевича к состоянию пациента и динамике его выздоравления. Для
                                меня очень важно, что теперь я имею возможность обращаться к нему как к врачу-остеопату
                                для профилактики своего здоровья! По его рекомендации я начала лечебную гимнастку с
                                Юдиной И.Н., несколько месяцев занятий позволило мне улучшить общее физическое
                                состояние. Ирина Николаевна ясно и образно рассказывает о работе мышц тела, дает четкие
                                рекомендации и упражнения для самостоятельных занятий, объясняя правильную технику их
                                выполнения. Ее жизнерадостность и деликатность позволяет с удовольствием  осваивать
                                порой трудные упражнения. Я рада, что за время сотрудничества с Ириной Николаевной
                                гимнастика стала частью моей повседневной жизни.  
                                После выздоровления и восстановления, я периодически обращаюсь в клинику «Качество
                                Жизни» для профилактики и поддержания своего здоровья и красоты! Очень благодарна Всем
                                специалистам за внимательное  и радушное отношение.
                                С уважением и глубокой благодарностью за сотрудничество, Жанна Викторовна.
                            </div>
                        </div>
                        <div class="review_carousel__item">
                            <div class="review_carousel__head bvi-voice">
                                <div class="review_carousel__name">Шамиль Абдулмуталиев, <span
                                            class="review_carousel__age">36 лет</span></div>
                                <div class="review_carousel__info">
                                    <div class="review_carousel__place">
                                        <svg class="icon">
                                            <use xlink:href="<?= $templatePath ?>/img/src/sprite.svg#pin"/>
                                        </svg>
                                        Москва
                                    </div>
                                    <div class="review_carousel__time">
                                        <svg class="icon">
                                            <use xlink:href="<?= $templatePath ?>/img/src/sprite.svg#clock"/>
                                        </svg>
                                        21.11.2019 13:37
                                    </div>
                                </div>
                            </div>
                            <div class="review_carousel__body bvi-voice">
                                Хочу выразить благодарность персоналу клиники "Качество Жизни" и в частности Колинскому
                                Максиму Сергеевичу. Максим Сергеевич очень внимательно выслушал мою проблему, чего не
                                смогли сделать специалисты в других клиниках. Я получил спортивную травму плеча и шеи в
                                2015 году. После операции на плечо, примерно год ощущал постоянный дискомфорт и ноющую
                                боль плеча и шеи. Шею иногда и вовсе заклинивало и я обратился в "Качество
                                Жизни". Благодаря высокому профессионализму врача, я получил квалифицированную
                                консультацию, а самое главное качественное лечение. Проблемы были связанны с отложениями
                                солей и защемлением нерва. В кратчайшие сроки, я восстановил полноценность своей руки и
                                вернулся к тренировкам. Проблем с шеей больше нет! Еще раз БОЛЬШОЕ СПАСИБО!! Планирую и
                                дальше наблюдаться здесь.
                            </div>
                        </div>
                    </div>
                    <h2 class="photo_gallery_section__h2 bvi-voice">Фотогалерея</h2>
                </div>
            </div>
        </div>
    </section>
    <section class="photo_gallery_section">
        <div class="photo_gallery_section__list">
            <div class="photo_gallery_section__photo_box"><img class="img-responsive"
                                                               src="<?= $templatePath ?>/img/src/Fotogalereya 1.jpg"
                                                               alt="">
                <div class="photo_gallery_section__description bvi-voice"></div>
            </div>
            <div class="photo_gallery_section__photo_box"><img class="img-responsive"
                                                               src="<?= $templatePath ?>/img/src/Fotogalereya 2.jpg"
                                                               alt="">
                <div class="photo_gallery_section__description bvi-voice"></div>
            </div>
            <div class="photo_gallery_section__photo_box"><img class="img-responsive"
                                                               src="<?= $templatePath ?>/img/src/Fotogalereya 3.jpg"
                                                               alt="">
                <div class="photo_gallery_section__description bvi-voice"></div>
            </div>
            <div class="photo_gallery_section__photo_box"><img class="img-responsive"
                                                               src="<?= $templatePath ?>/img/src/Fotogalereya 4.jpg"
                                                               alt="">
                <div class="photo_gallery_section__description bvi-voice"></div>
            </div>
            <div class="photo_gallery_section__photo_box"><img class="img-responsive"
                                                               src="<?= $templatePath ?>/img/src/Fotogalereya 5.jpg"
                                                               alt="">
                <div class="photo_gallery_section__description bvi-voice"></div>
            </div>
            <div class="photo_gallery_section__photo_box"><img class="img-responsive"
                                                               src="<?= $templatePath ?>/img/src/Fotogalereya 6.jpg"
                                                               alt="">
                <div class="photo_gallery_section__description bvi-voice"></div>
            </div>
            <div class="photo_gallery_section__photo_box"><img class="img-responsive"
                                                               src="<?= $templatePath ?>/img/src/Fotogalereya 7.jpg"
                                                               alt="">
                <div class="photo_gallery_section__description bvi-voice"></div>
            </div>
            <div class="photo_gallery_section__photo_box"><img class="img-responsive"
                                                               src="<?= $templatePath ?>/img/src/Fotogalereya 8.jpg"
                                                               alt="">
                <div class="photo_gallery_section__description bvi-voice"></div>
            </div>
        </div>
        <!--        <div class="text_center">-->
        <!--            <a href="https://www.instagram.com/qualis_vita_ru/" class="bvi-voice section_staff__more_button button button_bordered button_rounded link_instagram">Мы в-->
        <!--                инстаграм</a>-->
        <!--        </div>-->
    </section>
    <!--    <section class="section_news" style="margin-top: 50px;">-->
    <!--        <div class="container">-->
    <!--            <div class="row">-->
    <!--                <div class="col-12">-->
    <!--                    <h2 class="bvi-voice">Новости</h2>-->
    <!--                    <div class="row cards mobile_slider_single_item owl-carousel">-->
    <!--                        <div class="col-md-3">-->
    <!--                            <a href="" class="section_news__card custom_card">-->
    <!--                                <div class="section_news__img custom_card__img">-->
    <!--                                    <img src="-->
    <? //=$templatePath?><!--/img/src/Novosti 1.jpg" class="img-responsive" alt="">-->
    <!--                                </div>-->
    <!--                                <div class="section_news__title custom_card__name bvi-voice"><span>1-ый ежегодный форум дилеров медицинской реабилитации</span>-->
    <!--                                    <div class="section_news__text">-->
    <!--                                        06—07 сентября 2019 г. под Москвой, в г. Подольске, состоялся Первый-->
    <!--                                        ежегодный...-->
    <!--                                    </div>-->
    <!--                                </div>-->
    <!--                            </a>-->
    <!--                        </div>-->
    <!--                        <div class="col-md-3">-->
    <!--                            <a href="" class="section_news__card custom_card">-->
    <!--                                <div class="section_news__img custom_card__img">-->
    <!--                                    <img src="-->
    <? //=$templatePath?><!--/img/src/Novosti 2.jpg" class="img-responsive" alt="">-->
    <!--                                </div>-->
    <!--                                <div class="section_news__title custom_card__name bvi-voice"><span>Конгресс “Нейрореабилитация - 2019</span>-->
    <!--                                    <div class="section_news__text">-->
    <!--                                        14–15 апреля 2019 г. клиника “Качество жизни” приняла участие в XI-->
    <!--                                        международном...-->
    <!--                                    </div>-->
    <!--                                </div>-->
    <!--                            </a>-->
    <!--                        </div>-->
    <!--                        <div class="col-md-3">-->
    <!--                            <a href="" class="section_news__card custom_card">-->
    <!--                                <div class="section_news__img custom_card__img">-->
    <!--                                    <img src="-->
    <? //=$templatePath?><!--/img/src/Novosti 3.jpg" class="img-responsive" alt="">-->
    <!--                                </div>-->
    <!--                                <div class="section_news__title custom_card__name bvi-voice"><span>II м/н конференция “Инновационные технологии реабилитации”</span>-->
    <!--                                    <div class="section_news__text">-->
    <!--                                        18—19 марта 2019 клиника “Качество жизни” приняла участие во II-->
    <!--                                        международной...-->
    <!--                                    </div>-->
    <!--                                </div>-->
    <!--                            </a>-->
    <!--                        </div>-->
    <!--                        <div class="col-md-3">-->
    <!--                            <a href="" class="section_news__card custom_card">-->
    <!--                                <div class="section_news__img custom_card__img">-->
    <!--                                    <img src="-->
    <? //=$templatePath?><!--/img/src/Novosti 4.jpg" class="img-responsive" alt="">-->
    <!--                                </div>-->
    <!--                                <div class="section_news__title custom_card__name bvi-voice"><span>IX Всероссийский конгресс “Медицина для спорта 2019”</span>-->
    <!--                                    <div class="section_news__text">-->
    <!--                                        25—26 февраля 2019 г. прошел IX Всероссийский конгресс с международным-->
    <!--                                        участием...-->
    <!--                                    </div>-->
    <!--                                </div>-->
    <!--                            </a>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                    <div class="text_center">-->
    <!--                        <a href="/news/"-->
    <!--                           class="section_staff__more_button link_all_news button button_bordered button_rounded link_all_news bvi-voice">Читать-->
    <!--                            все новости</a>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </section>-->
    <section class="section_counter_advantage section_discount_2 bg_accent same_paddings">
        <div class="container">
            <div class="row benefits__inner counter_advantage__row">
                <div class="col-md-6">
                    <div class="counter_advantage__box counter_advantage__box_top bvi-voice">
                        <div class="counter_advantage__box_title">
                            Нам доверяют
                        </div>
                        <div class="counter_advantage__box_more">
                            более
                        </div>
                        <div class="benefits__box">
                            <span class="benefits__number">2000</span>
                        </div>
                        <div class="counter_advantage__box_desc">
                            довольных пациентов
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="counter_advantage__box bvi-voice">
                        <div class="counter_advantage__box_title">
                            Нас передают из рук в руки
                        </div>
                        <div class="counter_advantage__box_more">
                            более
                        </div>
                        <div class="benefits__box">
                            <span class="benefits__number">90</span>%
                        </div>
                        <div class="counter_advantage__box_desc">приходят семьями
                            и рекомендуют друзьям
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section_contacts same_paddings">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="bvi-voice">Контакты</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="section_contacts__info">
                        <div class="section_contacts__name bvi-voice">
                            Клиника восстановительной
                            медицины “Качество жизни”
                        </div>
                        <div class="section_contacts__list">
                            <ul>
                                <li>
                                    <div class="section_contacts__icon">
                                        <svg class="icon">
                                            <use xlink:href="<?= $templatePath ?>/img/src/sprite.svg#pin"/>
                                        </svg>
                                    </div>
                                    <div class="section_contacts__desc bvi-voice">Москва, Большой Дровяной
                                        переулок, д.14, стр.3
                                    </div>
                                </li>
                                <li>
                                    <div class="section_contacts__icon">
                                        <svg class="icon">
                                            <use xlink:href="<?= $templatePath ?>/img/src/sprite.svg#clock"/>
                                        </svg>
                                    </div>
                                    <div class="section_contacts__desc bvi-voice">Пн - Вс, без выходных<br>
                                        с 9:00 до 21:00
                                    </div>
                                </li>
                                <li>
                                    <div class="section_contacts__icon">
                                        <svg class="icon">
                                            <use xlink:href="<?= $templatePath ?>/img/src/sprite.svg#phone"/>
                                        </svg>
                                    </div>
                                    <div class="section_contacts__desc bvi-voice">
                                        <!--                                        <a href="tel:+7 495 143-0-144">+7 495-->
                                        <!--                                        143-0-144</a><br>-->
                                        <a href="tel:+7 (495) 032-80-45">+7 (495) 032-80-45</a></div>
                                </li>
                                <li>
                                    <div class="section_contacts__icon">
                                        <svg class="icon">
                                            <use xlink:href="<?= $templatePath ?>/img/src/sprite.svg#email"/>
                                        </svg>
                                    </div>
                                    <div class="section_contacts__desc bvi-voice"><a href="mailto:info@qualis-vita.ru">info@qualis-vita.ru</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="section_contacts__map_box">
                        <div id="section_contacts__map">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<? get_footer('restyled'); ?>
