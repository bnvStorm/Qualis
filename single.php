<?php
/*
Template Name: My Single Template
Template Post Type: post
*/
?>
<?php
get_header();
?>
<?php
$post = $wp_query->post;

$name_template = '/single-default.php';

if (is_singular('doctor')) {
    $name_template = '/templates/singles/single-doctor.php';
};

if (in_category('articles')) {
    $name_template = '/templates/singles/single-article.php';
};

if (in_category('direction')) {
    $name_template = '/templates/singles/single-direction.php';
};

//if (in_category('5')) { //ID категории
//    $name_template = '/single-group.php';
//};



include(get_template_directory() . $name_template);
get_footer(); ?>