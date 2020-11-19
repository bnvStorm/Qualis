<div class="row">
    <div class="col-12">
        <div class="bread">
            <? if (function_exists('yoast_breadcrumb')) yoast_breadcrumb('<p id="breadcrumbs">', '</p>'); ?>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-9">
        <h1><? the_title() ?></h1>
        <? if (have_rows('price-dir')): ?>
            <? while (have_rows('price-dir')): the_row();
                // vars
                $price_name = get_sub_field('price-name');
                ?>
                <div class="price-block accordeon">
                    <div class="price-name accordeon-title bvi-voice">
                        <?= $price_name ?> <i class="fas fa-chevron-down"></i>
                    </div>
                    <? if (have_rows('price-services')): ?>
                        <div class="accordeon-content">
                            <div class="table-headers row">
                                <div class="col-md-1 col-index">№</div>
                                <div class="col-md-9 col-name">Наименование услуги</div>
                                <div class="col-md-1 col-dur">Время (мин.)</div>
                                <div class="col-md-1 col-val">Цена (руб.)</div>
                            </div>
                            <? $i = 1;
                            while (have_rows('price-services')): the_row();
                                // vars
                                $price_service_name = get_sub_field('price-service-name');
                                $price_service_dur = get_sub_field('price-service-dur');
                                $price_service_val = get_sub_field('price-service-val');
                                ?>
                                <div class="price-table row bvi-voice">
                                    <div class="col-md-1 col-index"><?= $i ?></div>
                                    <div class="col-md-9 col-name"><?= $price_service_name ?></div>
                                    <div class="col-md-1 col-dur"><?= $price_service_dur ?></div>
                                    <div class="col-md-1 col-val"><?= $price_service_val ?></div>
                                </div>
                                <? $i++; endwhile; ?>
                        </div>
                    <? endif; ?>
                </div>
            <? endwhile;
        endif; ?>
    </div>
    <aside class="col-md-3 sidebar">
        <? include(get_template_directory() . '/templates/sidebar/sidebar-post.php'); ?>
    </aside>
</div>


