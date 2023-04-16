<?php
// Setup defaults
$array_defaults = array(
    'sub-title' => null,
    'title' => get_the_title(),
    'sub-title-below' => null,
    'sub-title-below-2' => null,
    'background_image' => get_template_directory_uri() . '/assets/imgs/cau-chuyen-1.png',
    'is_black_and_white' => false,
    'class' => null
);

$args = wp_parse_args($args, $array_defaults);
?>
<section class="position-relative section-story title-block-common d-flex flex-row align-items-center" style="background-image: url(<?= $args['background_image'] ?>); <?= $args['is_black_and_white'] ? '-webkit-filter: grayscale(100%); filter: grayscale(100%);' : '' ?>">
    <div class="overlay"></div>
    <div class="container z-3 position-relative">
        <div class="d-flex flex-col align-items-center pt-96 pb-96">
            <p class="sub-title text-white"><?= $args['sub-title'] ?></p>
            <div class="title-main d-flex align-items-center text-center w-75">
                <p class="text-white"><?= $args['title'] ?></p>
            </div>
            <?php get_template_part('partials/btn', 'common', [
                'is_icon' => true,
                'text' => 'KHÁM PHÁ',
                'class' => 'mt-64',
                'link' => '/san-pham',
                'is_outline' => true
            ]); ?>
        </div>
    </div>
</section>