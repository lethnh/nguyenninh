<?php
// Setup defaults
$array_defaults = array(
    'style_image' => null,
    'class' => null,
    'position_body' => 'left-0 bottom-0'
);

$args = wp_parse_args($args, $array_defaults);
?>
<div class="position-relative col-span-2 post_item post_item_main <?= $args['class']; ?>">
    <div class="img-wrapper" style="<?= $args['style_image']; ?>">
        <img src="<?php the_post_thumbnail_url() ?>">
    </div>
    <div class="position-absolute <?= $args['position_body']; ?> post_body">
        <div class="flex flex-col">
            <div class="post_title gray-80 mb-3">
                <p><?= the_title(); ?></p>
            </div>
            <div class="post_excerpt gray-60">
                <p><?= wp_trim_words(get_the_content(), 40, '...'); ?></p>
            </div>
        </div>
        <div class="flex justify-content-between post_body_footer">
            <a href="<?php the_permalink() ?>" class="post_seemore gray-80">ĐỌC CÂU CHUYỆN
                <i class="fa-solid fa-arrow-up rotate-45"></i></a>
            <div class="text-center gray-70 post_datetime"><?= get_the_date('d.m.Y') ?></div>
        </div>
    </div>
</div>