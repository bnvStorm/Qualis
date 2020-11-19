<div class="category-page center">
    <div class="container">
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>

                <div class="single-article">
                    <?php the_post_thumbnail('thumbnail'); ?>
                    <div class="article-content">
                        <div class="article-title"><?php the_title(); ?></div>
                        <div class="article-date"><?php the_time('d.m.Y'); ?></div>
                        <?php echo content(40); ?>
                        <a class="readmore" href="<?php echo get_permalink(); ?>">Читать далее</a>
                    </div>
                </div>

            <?php endwhile; ?>
        <?php else : endif; ?>
    </div>
</div>