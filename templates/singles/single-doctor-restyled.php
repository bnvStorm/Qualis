<?php $templatePath = get_template_directory_uri();

global $wp_query;
$postType = 'doctors';
$iPostId = $wp_query->post->ID;

// Custom Fields
$doctor_inst = get_field('doctor-inst');
$doctor_fb = get_field('doctor-fb');
?>
<div class="header-specialist position-relative bg-white bg-firm-element-2 object-fit-cover pt-md-5 pt-3">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="bread">
                    <? if (function_exists('yoast_breadcrumb')) yoast_breadcrumb('<p id="breadcrumbs">', '</p>'); ?>
                </div>
            </div>
        </div>
    </div>
    <div class="container qualis-container py-md-5 py-3">
        <div class="row">
            <div class="specialist-content__photo col-md-4 text-center   p-0">
                <img src="<?= get_field('doctor-img') ?: '/wp-content/uploads/2020/01/inkognito-vrach-360x419-a37-2.jpg' ?>" height="400px" class="w-100 object-fit-cover mb-5 d-md-block d-none" alt="SVG">
                <img src="<?= get_field('doctor-img') ?: '/wp-content/uploads/2020/01/inkognito-vrach-360x419-a37-2.jpg' ?>" class="w-100 object-fit-cover mb-md-5 d-md-none d-block" alt="SVG">

                <div class="d-md-block d-none mt-5">
                    <a href="<?= the_field('doctor-order-link'); ?>" target="_blank"
                       class="specialist-content__button text font-weight-bold color-white bg-aqua  text-uppercase">Записаться
                        на прием</a>
                </div>
            </div>
            <div class="specialist-content__progress col-md-8 py-4 pl-md-4 pr-0">
                <h3 class="specialist-data ff-Philosopher fs-30 color-aqua text-md-left text-center"><? the_title(); ?></h3>

                <p class="specialist-profession text color-pink text-md-left text-center"><?= get_field('doctor-desc'); ?></p>

                <div class="d-md-none d-block text-center mt-5">
                    <a href="/"
                       class="specialist-content__button text font-weight-bold color-white bg-aqua text-uppercase">Записаться
                        на прием</a>
                </div>


                <h5 class="specialist-education title my-sm-5 my-4">Образование</h5>
                <div class="d-flex justify-content-between align-items-center mt-sm-5">
                    <?= get_field('doctor-edu'); ?>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="courses position-relative">
    <div class="bg-2 ">
        <div class="container bg-firm-element-1 qualis-container">
            <div class="row">
                <div class="courses__list-courses  col-12 bg-white position-relative px-md-5 px-0 py-md-5 mb-md-5 mb-0">
                    <div class="list-courses__title title mb-4 text-md-center text-left pl-md-0 pl-3">Курсы повышения квалификации</div>
                    <div class="list-course__item col-12 d-sm-flex align-items-center mb-4">
                        <?= get_field('doctor-cours') ?>
                    </div>
                </div>
                <div class="courses__about-specialist col-12 p-md-0 pt-3">
                    <div class="title d-md-none d-block">О  себе</div>
                    <div class="about-specialist__text col-md-9 pl-md-5 pl-0 border-left-aqua mt-3">
                        <p class="text">
                            <?= get_the_content(); ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="user-contacts bg-aqua position-relative color-white py-md-5 py-3">
    <div class="container  qualis-container">
        <div class="row">
            <div class="col-12 text-center">
                <h2 class="title">Оставьте ваши контакты и менеджер свяжется с вами</h2>
            </div>
            <form action="/" method="GET" class="form w-100 mt-md-4 mt-2">
                <div class="col-12 d-md-flex">
                    <div class="col-md-4 text-center mb-md-0 mb-4">
                        <input type="text" name="name" class="required form-control bg-user-blue text" placeholder="Имя*">
                    </div>
                    <div class="col-md-4 text-center mb-md-0 mb-4">
                        <input type="text" name="email" class="required form-control bg-email-blue text" placeholder="E-mail*">
                    </div>
                    <div class="col-md-4 text-center">
                        <input type="number" name="number" class="required form-control bg-telephone-blue  text" placeholder="Телефон">
                    </div>
                </div>
                <div class="col-md-12 text-center mt-md-5 mt-4">
                    <input type="submit" value="отправить" class="form__btn form__btn-pink ff-Avenir-Next-Cyr fs-18 font-weight-bold text-uppercase mb-4">
                    <p class="ff-Avenir-Next-Cyr fs-12">*Нажимая на кнопку, вы даете <a href="/" class="text-underline color-white">Согласие на обработку персональных данных</a></p>
                </div>
            </form>
        </div>
    </div>
</section>

<?php
  comments_template('/restyled-comments.php', true);
?>
<?/*
<section class="video-review position-relative py-md-5 py-3">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h2 class="title mb-md-5 mb-3">Видеоотзывы</h2>
            </div>
            <div class="video-review__content col-md-6 d-md-block d-none">
                <iframe height="300px" width="100%" src="https://www.youtube.com/embed/uHXFQEpec7o" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
                <div class="col-12 p-0 d-flex justify-content-between text mt-2">
                    <div class="content__name-user">Кулиш Елена и Маша</div>
                    <div class="content__date color-gray">21.07.2017</div>
                </div>
            </div>
            <div class="video-review__content col-md-6 d-md-block d-none">
                <iframe height="300px" width="100%" src="https://www.youtube.com/embed/uHXFQEpec7o" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
                <div class="col-12 p-0 d-flex justify-content-between text mt-2">
                    <div class="content__name-user ">Кулиш Елена и Маша</div>
                    <div class="content__date color-gray">21.07.2017</div>
                </div>
            </div>


            <div id="video-review__carousel" class="carousel col-12 slide d-md-none d-block" data-ride="carousel" data-interval="0">
                <div class="carousel-inner">
                    <div class="carousel-item text-center active">
                        <iframe height="300px" width="100%" src="https://www.youtube.com/embed/uHXFQEpec7o" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
                        <div class="col-12 p-0 d-flex justify-content-between text mt-2">
                            <div class="content__name-user">Кулиш Елена и Маша</div>
                            <div class="content__date color-gray">21.07.2017</div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <iframe height="300px" width="100%" src="https://www.youtube.com/embed/uHXFQEpec7o" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
                        <div class="col-12 p-0 d-flex justify-content-between text mt-2">
                            <div class="content__name-user">Кулиш Елена и Маша</div>
                            <div class="content__date color-gray">21.07.2017</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 text-center d-md-none d-block my-3">
                <div class="comment__arrows d-flex justify-content-center">
                    <div class="h-50px w-50px bg-aqua rounded-circle left__button mr-3 slick-arrow" href="#video-review__carousel" role="button" data-slide="prev" style="">
                        <img src="<?=$templatePath?>/restyle/img/SVG/arrow-left-white.svg" alt="SVG">
                    </div>
                    <div class="h-50px w-50px bg-aqua rounded-circle right__button ml-3 slick-arrow" href="#video-review__carousel" role="button" data-slide="next" style="">
                        <img src="<?=$templatePath?>/restyle/img/SVG/arrow-right-white.svg" alt="SVG">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
*/?>
</div>