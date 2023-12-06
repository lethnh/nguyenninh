<?php
// Setup defaults
$array_defaults = array(
    'class' => null
);

$args = wp_parse_args($args, $array_defaults);
?>
<div class="col-md-6 col-xl-4">
    <div class="post_item other <?= $args['class']; ?>">
        <a href="<?php the_permalink() ?>">
            <div class="img-wrapper"><?= get_the_post_thumbnail(get_the_ID(), 'post-thumbnail') ?></div>
        </a>
        <div class="post_body d-flex flex-col justify-content-between">
            <div class="d-flex flex-col">
                <div class="post_title gray-80 mb-3">
                    <a href="<?php the_permalink() ?>">
                        <h2><?= wp_trim_words(the_title(), 18, '...'); ?></h2>
                    </a>
                </div>
                <div class="post_excerpt gray-60">
                    <a href="<?php the_permalink() ?>">
                        <p><?= wp_trim_words(get_the_content(), 40, '...'); ?></p>
                    </a>
                </div>
            </div>
            <div class="d-flex justify-content-between post_body_footer">
                <a href="<?php the_permalink() ?>" class="post_seemore gray-80">ĐỌC CÂU CHUYỆN<i class="fa-solid fa-arrow-up rotate-45"></i></a>
                <div class="text-center gray-70 post_datetime"><?= get_the_date('d.m.Y') ?></div>
            </div>
        </div>
    </div>
</div>