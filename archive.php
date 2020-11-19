<?php get_header('restyled'); ?>
<div class="inner-page">

    <?

    $name_template = 'archive.php';

    if (is_post_type_archive('doctor')) {
        $name_template = 'archive-doctors.php';
    }

    include(TEMPLATEPATH . '/templates/archives/' . $name_template);

    ?>
</div>
<?php get_footer('restyled'); ?>
