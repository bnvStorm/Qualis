<?php
$templatePath = get_template_directory_uri();
?>

<div class="header-article position-relative bg-firm-element-2 object-fit-cover pt-md-5 pt-3">
    <div class="container">
        <div class="row">
            <div class="col-12 text-left">
                <div class="bread">
                    <? if (function_exists('yoast_breadcrumb')) yoast_breadcrumb('<p id="breadcrumbs">', '</p>'); ?>
                </div>
            </div>
            <div class="col-md-12 text-center">
                <!--<h1 class="header-article__title ff-Philosopher font-weight-bold fs-36 text-md-center text-left my-md-5 my-2"><?/* the_title() */?></h1>-->
                <div class="main-image" style="background-image:url(<?php the_post_thumbnail_url( 'full' ); ?>);">
                    <h1 class="header-article__title ff-Philosopher font-weight-bold fs-36 text-md-center text-left my-md-5 my-2"><?php the_title(); ?></h1>
                </div>
                <div class="social  d-inline-block  my-4">
                    <div class="border-bottom  border-gray d-flex justify-content-center pb-3">
                        <script src="https://yastatic.net/share2/share.js"></script>
                        <div class="ya-share2" data-curtain
                        data-services="vkontakte,facebook,odnoklassniki,telegram,twitter,whatsapp"></div>
                    </div>
                </div>
            </div>
            <? if (get_field('article-img') && strlen(get_field('article-video')) == 0) { ?>
                <div class="col-12 header-article__photo mt-2">
                    <img src="<? the_field('article-img') ?>" height="600px" class="w-100" alt="jpg">
                </div>
            <? } ?>

            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                    <? if (get_field('article-video')) { ?>
                        <div class="col-12 header-article__photo mt-2">
                            <div class="article-video video-responsive">
                                <iframe src="<?= youtubeLinkTransform(get_field('article-video')); ?>"
                                    frameborder="0"
                                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
                                </div>
                            </div>

                        <? } ?>
                    <?php endwhile; ?>
                    <?php else : endif; ?>
                </div>
            </div>

        </div>
        <br><br>
        <section class="article position-relative">
            <div class="container qualis-container">
                <div class="row">
                    <div class="col-md-9">
                        <div class="bvi-voice">
                            <?php the_content(); ?>
                        </div>
                        <div class="col-md-12 p-0 my-md-5 my-3 text-center">
                            <div class="social  d-inline-block  mb-3">
                                <div class="border-top  border-gray d-flex justify-content-center pt-3">
                                    <script src="https://yastatic.net/share2/share.js"></script>
                                    <div class="ya-share2" data-curtain
                                    data-services="vkontakte,facebook,odnoklassniki,telegram,twitter,whatsapp"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <aside class="col-md-3 sidebar">
                     <? include(get_template_directory() . '/templates/sidebar/sidebar-menu.php'); ?>
                 </aside>
             </div>
         </div>
     </section>
     <br><br>
     <?php
     comments_template('/restyled-comments.php', true);
     ?>