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
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>

                    <div class="single-article">
                        <?php the_post_thumbnail('thumbnail'); ?>
                        <div class="article-content">
                            <div class="article-title bvi-voice"><?php the_title(); ?></div>
                            <div class="article-date"><?php the_time('d.m.Y'); ?></div>
                            <?php echo content(40); ?>
                            <a class="readmore" href="<?php echo get_permalink(); ?>">Читать далее</a>
                        </div>
                    </div>

                <?php endwhile; ?>
            <?php else : endif; ?>
        </div>
        <aside class="col-md-3 sidebar">
            <? include(get_template_directory() . '/templates/sidebar/sidebar-menu.php'); ?>
        </aside>
    </div>
