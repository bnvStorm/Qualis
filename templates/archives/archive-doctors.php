<?
$templatePath = get_template_directory_uri();
?>
<div class="container category-page archive-doctors">
    <div class="row">
        <div class="col-12">
            <div class="bread">
                <? if (function_exists('yoast_breadcrumb')) yoast_breadcrumb('<p id="breadcrumbs">', '</p>'); ?>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-9">
            <h1>Специалисты</h1>
            <? $arPostDoctors = get_posts(array(
                'post_type' => 'doctor',
                'numberposts' => -1,
                'meta_key' => 'doctor-sort',
                'orderby' => 'meta_value',
                'order' => 'DESC'
            ));

            if (count($arPostDoctors)) { ?>
                <div class="row custom_row cards mobile_slider_single_item owl-carousel">
                    <? foreach ($arPostDoctors as $post) {
                        setup_postdata($post);
                        $doctor_name = get_field('doctor-name');
                        $doctor_img = get_field('doctor-img');
                        $doctor_spec = get_field('doctor-spec');
                        ?>

                        <div class="col-md-4">
                            <a href="<? the_permalink() ?>" class="section_staff__card custom_card ">
                                <div class="section_staff__img custom_card__img">
                                    <img src="<?= $doctor_img ?: '/wp-content/uploads/2020/01/inkognito-vrach-360x419-a37-2.jpg' ?>" class="img-responsive" alt="<? the_title() ?>">
                                </div>
                                <div class="section_staff__title custom_card__name bvi-voice">
                                    <span><? the_title() ?></span>
                                    <div class="section_staff__hint">
                                        <svg class="icon">
                                            <use xlink:href="<?= $templatePath ?>/img/src/sprite.svg#hint"/>
                                        </svg>
                                        <span><?= $doctor_spec ?: 'Врач' ?></span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <? }
                        wp_reset_postdata();
                    ?>
                </div>
            <? } ?>
        </div>
        <aside class="col-md-3 sidebar">
           <? include(get_template_directory() . '/templates/sidebar/sidebar-menu.php'); ?>
        </aside>
    </div>
</div>