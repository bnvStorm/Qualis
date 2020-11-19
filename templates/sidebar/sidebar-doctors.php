<?php get_search_form(); ?>
<?
$iPostId = $wp_query->post->ID;

$arPostDoctors = get_posts(array(
    'post_type' => 'doctor',
    'numberposts' => -1,
    'meta_key' => 'doctor-sort',
    'orderby' => 'meta_value',
    'order' => 'DESC'
));

if (count($arPostDoctors)) { ?>
    <h2>Наши специалисты:</h2>
    <ul class="sidebar-thin">
        <? foreach ($arPostDoctors as $post) {
            setup_postdata($post);
            ?>
            <li class="<?= $post->ID == $iPostId ? 'active' : '' ?>">
                <a href="<? the_permalink(); ?>"><? the_title() ?></a>
            </li>
            <?
        }
        wp_reset_postdata(); // сброс
        ?>
    </ul>
    <?
}
?>

<div class="sidebar-form">
    <?= do_shortcode('[contact-form-7 id="185" title="Бесплатная консультация"]'); ?>
</div>
<div class="mt-3">
    <a href="/skidka-10/">
        <img src="<?=get_template_directory_uri()?>/img/vita_1.png" class="img-responsive" alt="">
    </a>
</div>
