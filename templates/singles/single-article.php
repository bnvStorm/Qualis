<div class="container page-content">
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
            <? if (get_field('article-img') && strlen(get_field('article-video')) == 0) { ?>
                <div class="article-main-img">
                    <img src="<? the_field('article-img') ?>" alt="" class="img-responsive">
                </div>
            <? } ?>

            <article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
                <div class="main-content">
                    <?php if (have_posts()) : ?>
                        <?php while (have_posts()) : the_post(); ?>
                            <? if (get_field('article-video')) { ?>
                                <div class="article-video video-responsive">
                                    <iframe src="<?= youtubeLinkTransform(get_field('article-video')); ?>"
                                            frameborder="0"
                                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                            allowfullscreen></iframe>
                                </div>
                            <? } ?>
                            <div class="bvi-voice">
                                <?php the_content(); ?>
                            </div>

                        <?php endwhile; ?>
                    <?php else : endif; ?>
                    <? edit_post_link(); ?>
                </div>
            </article>
            <div class="doctor-comment" id="doctor-comment">
                <?php
                comments_template('', true);
                ?>
            </div>
        </div>

        <aside class="col-md-3 sidebar">
            <? include(get_template_directory() . '/templates/sidebar/sidebar-post.php'); ?>
        </aside>

    </div>

</div>
