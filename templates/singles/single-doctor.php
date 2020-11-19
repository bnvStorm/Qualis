<? get_header('page');
global $wp_query;
$postType = 'doctors';
$iPostId = $wp_query->post->ID;

// Custom Fields
$doctor_inst = get_field('doctor-inst');
$doctor_fb = get_field('doctor-fb');
?>
    <div class="container page-content single-doctor">
        <div class="row">
            <div class="col-12">
                <div class="bread">
                    <? if (function_exists('yoast_breadcrumb')) yoast_breadcrumb('<p id="breadcrumbs">', '</p>'); ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-9 main-content">
                <div class="">
                    <div class="row">
                        <div class="col-md-5 doctor-img">
                            <img class="img-responsive"
                                 src="<?= get_field('doctor-img') ?: '/wp-content/uploads/2020/01/inkognito-vrach-360x419-a37-2.jpg' ?>"
                                 alt="">
                            <div class="doctor-btn-block bvi-voice">
                                <? if (get_field('doctor-video')) { ?>
                                    <a data-fancybox href="<?= get_field('doctor-video'); ?>"
                                       class="btn btn-accent">Видеопрезентация</a>
                                <? } ?>
                                <a href="<?= the_field('doctor-order-link'); ?>"
                                   class="btn btn-accent" target="_blank">Записаться на приём</a>
                                <a href="#doctor-comment"
                                   class="btn btn-accent scroll-to">Оставить отзыв</a>
                            </div>
                            <div class="doctor-social-links">
                                <!--                                --><? // if ($doctor_inst) { ?>
                                <!--                                    <a href="-->
                                <? //= $doctor_inst ?><!--" class="doctor-inst"><i-->
                                <!--                                                class="fab fa-instagram"></i></a>-->
                                <!--                                --><? // } ?>
                                <!---->
                                <!--                                --><? // if ($doctor_fb) { ?>
                                <!--                                    <a href="-->
                                <? //= $doctor_fb ?><!--" class="doctor-fb"><i class="fab fa-facebook-f"></i></a>-->
                                <!--                                --><? // } ?>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <h1><? the_title(); ?></h1>
                            <? if (get_field('doctor-desc')) { ?>
                                <div class="doctor-desc bvi-voice">
                                    <p><?= get_field('doctor-desc'); ?></p>
                                </div>
                            <? } ?>
                            <? if (get_field('doctor-edu')) { ?>
                                <div class="doctor-edu bvi-voice">
                                    <h2>Образование:</h2>
                                    <p><?= get_field('doctor-edu'); ?></p>
                                </div>
                            <? } ?>
                        </div>
                        <div class="col-md-12">
                            <? if (get_field('doctor-cours')) { ?>
                                <div class="doctor-cours bvi-voice">
                                    <h2>Курсы повышения квалификации:</h2>
                                    <p><?= get_field('doctor-cours') ?></p>
                                </div>
                            <? } ?>
                            <div class="doctor-content bvi-voice">
                                <h2>О себе:</h2>
                                <p><?= get_the_content(); ?></p>
                            </div>
                            <div class="doctor-comment" id="doctor-comment">
                                <?php
                                comments_template('', true);
                                ?>
                            </div>
                            <a href="<?= the_field('doctor-order-link'); ?>"
                               class="btn btn-accent doctor-order-link-bottom">Записаться на приём</a>
                        </div>
                    </div>
                </div>
            </div>

            <aside class="col-md-3 doctor-sidebar sidebar">
                <? include(get_template_directory() . '/templates/sidebar/sidebar-doctors.php'); ?>
            </aside>
        </div>
    </div>

<? get_footer(); ?>