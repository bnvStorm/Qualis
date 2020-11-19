<?php
get_header();
global $wp_query;
?>
<div class="container search-page">
    <div class="row">
        <div class="col-12">
            <div class="bread">
                <? if (function_exists('yoast_breadcrumb')) yoast_breadcrumb('<p id="breadcrumbs">', '</p>'); ?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-9">
            <h1 class="search-title">
                Результаты поиска по запросу: "<?php the_search_query(); ?>" (<?php echo $wp_query->found_posts; ?>)</h1>

            <?php if ( have_posts() ) { ?>

                <ul>

                    <?php while ( have_posts() ) { the_post(); ?>

                        <li>
                            <h3><a href="<?php echo get_permalink(); ?>">
                                    <?php the_title();  ?>
                                </a></h3>
                            <?php  the_post_thumbnail('medium') ?>
                        </li>

                    <?php } ?>

                </ul>

                <?php echo paginate_links(); ?>

            <?php } ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>