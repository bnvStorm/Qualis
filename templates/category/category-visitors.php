<?
$templatePath = get_template_directory_uri();
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
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
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>

                    <div class="single-article row">
                        <div class="article-thumb col-md-2">
                            <a class="readmore" href="<?php echo get_permalink(); ?>"><?php the_post_thumbnail('full'); ?></a>
                        </div>
                        <div class="article-content col-md-10">
                            <div class="article-title bvi-voice"><a href="<? the_permalink() ?>"><?php the_title(); ?></a></div>
                            <div class="article-date"><?php the_time('d.m.Y'); ?></div>
                            <?= the_excerpt(); ?>
                        </div>
                        <div class="col-12"><a class="readmore button button_accent button_rounded" href="<?php echo get_permalink(); ?>">Подробнее</a></div>
                    </div>

                <?php endwhile; ?>
            <?php else : endif; ?>

            <div class="row">
                <div class="col-12">
                    <div class="classic-pagination">
                        <?=paginate_links(array(
                            'prev_text' => __('« Назад'),
                            'next_text' => __('Вперед »'),
                            'mid_size' => 5
                        )); ?>
                    </div>
                </div>
            </div>
        </div>
        <aside class="col-md-3 sidebar">
            <? include(get_template_directory() . '/templates/sidebar/sidebar-menu.php'); ?>
        </aside>
    </div>


