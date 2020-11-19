<?php
/*
Template Name: Test new verstka
Template Post Type: page
*/
?>
<?php
get_header('restyled');
?>
    <div class="inner-page category">
        <div class="container">
            <?php
            $post = $wp_query->post;

            $name_template = '/templates/pages/page-default.php';

            if (is_page(290)) {
                $name_template = '/templates/pages/page-price.php';
            };

            if (is_page(764)) {
                $name_template = '/templates/pages/page-osteopath.php';
            };


            include(get_template_directory() . $name_template); ?>
        </div>
    </div>
<? get_footer('restyled'); ?>