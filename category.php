<?php get_header('restyled'); ?>
    <div class="inner-page category">
        <div class="container">
            <?
            $name_template = 'category.php';
        
            if ( is_category('direction')){
                $name_template = 'category-direction.php';
            } else if (is_category('visitors')) {
                $name_template = 'category-visitors.php';
            } else if (is_category('articles')) {
                $name_template = 'category-articles.php';
            }


            include(TEMPLATEPATH . '/templates/category/' . $name_template);
        ?>
        </div>
    </div>
<?php get_footer('restyled'); ?>
