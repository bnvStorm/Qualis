<div class="row">
    <div class="col-12">
        <div class="bread">
            <? if (function_exists('yoast_breadcrumb')) yoast_breadcrumb('<p id="breadcrumbs">', '</p>'); ?>
        </div>
        <? if (strlen(get_the_post_thumbnail_url()) > 0) { ?>
            <div class="article-main-img">
                <img src="<?= get_the_post_thumbnail_url() ?>" alt="" class="img-responsive">
                <h1><?= the_title() ?></h1>
            </div>
        <? } else { ?>
            <h1><? the_title() ?></h1>
        <? } ?>
    </div>
</div>
<div class="row">
    <div class="col-md-9">
        <article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
            <div class="main-content bvi-voice">
                <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?>
                        <?php the_content(); ?>
                        <div class="doctor-comment" id="doctor-comment">
                            <?php
                            comments_template('', true);
                            ?>
                        </div>
                    <?php endwhile; ?>
                <?php else : endif; ?>
            </div>
            <? edit_post_link(); ?>
        </article>
    </div>
    <aside class="col-md-3 sidebar">
        <? include(get_template_directory() . '/templates/sidebar/sidebar-post.php'); ?>
    </aside>
</div>


