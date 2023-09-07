<?php
// Setup defaults
$array_defaults = array(
    'style_image' => null,
    'class' => null,
    'position_body' => 'left-0 bottom-0',
    'post_id' => 0,
    'is_flag_story_of_week' => false,
    'style' => 'normal'
);

$args = wp_parse_args($args, $array_defaults);
?>

<?php if ($args['style'] == 'custom') : ?>
    <div class="position-relative col-span-2 post_item post_item_main <?= $args['class']; ?>">
        <a href="<?php the_permalink($args['post_id']) ?>">
            <?= get_the_post_thumbnail($args['post_id'], 'post-thumbnail', ['style' => 'position: absolute; object-fit: cover; height: 100%;']) ?>
        </a>
        <div class="position-absolute <?= $args['position_body']; ?> post_body d-flex flex-col justify-content-between">
            <div class="d-flex flex-col">
                <div class="post_title gray-80 mb-3">
                    <a href="<?php the_permalink($args['post_id']) ?>">
                        <h2><?= wp_trim_words(get_the_title($args['post_id']), 18, '...'); ?></h2>
                    </a>
                </div>
                <div class="post_excerpt gray-60">
                    <a href="<?php the_permalink($args['post_id']) ?>">
                        <p><?= wp_trim_words(get_the_content(null, false, $args['post_id']), 40, '...'); ?></p>
                    </a>
                </div>
            </div>
            <div class="flex justify-content-between post_body_footer">
                <a href="<?php the_permalink($args['post_id']) ?>" class="post_seemore gray-80">ĐỌC CÂU CHUYỆN
                    <i class="fa-solid fa-arrow-up rotate-45"></i></a>
                <div class="text-center gray-70 post_datetime"><?= get_the_date('d.m.Y', $args['post_id']) ?></div>
            </div>
        </div>
    </div>
<?php else : ?>
    <div class="position-relative col-span-2 post_item post_item_main <?= $args['class']; ?>">
        <div class="img-wrapper" style="<?= $args['style_image']; ?>">
            <a href="<?php the_permalink($args['post_id']) ?>">
                <?= get_the_post_thumbnail($args['post_id'], 'post-thumbnail') ?>
            </a>
        </div>
        <?php if ($args['is_flag_story_of_week']) : ?>
            <div class="position-absolute post_story_of_week bg-red-60 px-8 py-4 left-0 top-0 mt-0 text-white"><a href="<?php the_permalink($args['post_id']) ?>">Nổi bật tuần này</a></div>
        <?php endif; ?>
        <div class="position-absolute <?= $args['position_body']; ?> post_body d-flex flex-col justify-content-between">
            <div class="d-flex flex-col">
                <div class="post_title gray-80 mb-3">
                    <a href="<?php the_permalink($args['post_id']) ?>">
                        <h2><?= wp_trim_words(get_the_title($args['post_id']), 18, '...'); ?></h2>
                    </a>
                </div>
                <div class="post_excerpt gray-60">
                    <a href="<?php the_permalink($args['post_id']) ?>">
                        <p><?= wp_trim_words(get_the_content(null, false, $args['post_id']), 40, '...'); ?></p>
                    </a>
                </div>
            </div>
            <div class="flex justify-content-between post_body_footer">
                <a href="<?php the_permalink($args['post_id']) ?>" class="post_seemore gray-80">ĐỌC CÂU CHUYỆN
                    <i class="fa-solid fa-arrow-up rotate-45"></i></a>
                <div class="text-center gray-70 post_datetime"><?= get_the_date('d.m.Y', $args['post_id']) ?></div>
            </div>
        </div>
    </div>
<?php endif; ?>