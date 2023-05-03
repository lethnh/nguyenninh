<?php
/*
 * Template Name: Trang chủ
 */
?>
<?php
get_header(null, ['is_body_main' => true]); ?>

<section class="banner-home">
    <div class="container">
        <div class="position-relative">
            <img src="<?= get_field('image_main') ?>" class="object-cover h-100 w-100">
            <button class="position-absolute btn-scroll"><i class="fa-light fa-arrow-down text-white"></i></button>
        </div>
    </div>
</section>
<!-- Chương 1 -->
<?php $chapter_one = get_field('chapter_1'); ?>
<section class="chapter-begin section-common">
    <div class="container">
        <?php get_template_part('partials/title', 'common', [
            'sub-title' => 'CHƯƠNG 1 - MỞ ĐẦU',
            'title' => '“Vẹn nguyên từ thuở ban đầu”',
            'class' => 'mb-64'
        ]); ?>
        <div class="chapter-content d-flex align-items-end">
            <div class="h-100 w-50 chapter-content-left">
                <?= wp_get_attachment_image($chapter_one['image_left'], 'full', '', ['class' => 'h-100 object-cover', "alt" => "chương 1"]); ?>
            </div>
            <div class="chapter-content-right w-50">
                <p class="chapter-content-title gray-70"><?= $chapter_one['text_bold']; ?></p>
                <p class="chapter-content-sub-content gray-70 mt-3"><?= $chapter_one['text_normal']; ?></p>
                <?= wp_get_attachment_image($chapter_one['image_right'], 'full', '', ['class' => 'img-fluid object-cover', "alt" => "chương 1"]); ?>
            </div>
        </div>
    </div>
</section>
<!-- Chương 1 -->

<!-- Chương 2 -->
<?php $chapter_two = get_field('chapter_2'); ?>
<section class="chapter-second section-common">
    <div class="container">
        <?php get_template_part('partials/title', 'common', [
            'sub-title' => 'CHƯƠNG 2 - BÁNH CỐM CÓ GÌ ĐẶC BIỆT?',
            'title' => '“Một món quà ghi dấu đất Kinh Kỳ”',
            'sub-title-below' => $chapter_two['text_one'],
            'class' => 'mb-64'
        ]); ?>
        <div class="chapter-content d-flex align-items-center mt-64">
            <div class="h-100 w-50 chapter-content-left">
                <?= wp_get_attachment_image($chapter_two['image_left'], 'full', '', ['class' => 'w-100 h-100 object-cover', "alt" => "chương 2"]); ?>
            </div>
            <div class="w-50 chapter-content-right">
                <p class="chapter-content-right-title-main gray-80"><?= $chapter_two['text_bold']; ?></p>
                <p class="chapter-content-right-title-sub gray-70 mt-3"><?= $chapter_two['text_normal']; ?></p>
            </div>
        </div>
        <div class="mt-64 img-chapter-second">
            <?= wp_get_attachment_image($chapter_two['image_big'], 'full', '', ['class' => 'w-100', "alt" => "chương 2"]); ?>
        </div>
        <div class="d-flex flex-col align-self-center w-75 mx-auto mt-32">
            <p class="text-style-base"><?= $chapter_two['text_below_image_big']; ?></p>
        </div>
        <div class="text-center mt-64">
            <?php get_template_part('partials/btn', 'common', [
                'is_icon' => true,
                'link' => '/san-pham',
                'text' => 'SẢN PHẨM CỦA NGUYÊN NINH'
            ]); ?>
        </div>
    </div>
</section>
<!-- Chương 2 -->
<!-- <div class="px-14 mobile:px-4 w-100 mobile:mt-4">

</div> -->

<!-- Chương 3 -->
<?php $chapter_three = get_field('chapter_3'); ?>
<section class="chapter-third section-common">
    <div class="container">
        <?php get_template_part('partials/title', 'common', [
            'sub-title' => 'CHƯƠNG 3 - NGUYÊN NINH CÓ GÌ ĐẶC BIỆT?',
            'title' => '“Món quà ngọt ngào mang tên Nguyên Ninh”',
            'sub-title-below' => $chapter_three['text_one'],
            'class' => 'mb-64'
        ]); ?>
        <?php get_template_part('partials/slide', 'common'); ?>
    </div>
</section>
<!-- Chương 3 -->

<section>
    <div class="container">
        <div class="border-top"></div>
    </div>
</section>

<!-- Chương 4 -->
<section class="section-common">
    <div class="container">
        <?php get_template_part('partials/title', 'common', [
            'sub-title' => 'NGOẠI TRUYỆN: NHẬT KÝ CỦA NGUYÊN NINH',
            'title' => '“Những mảnh truyện đời nho nhỏ”',
            'class' => 'mb-64'
        ]); ?>

        <div class="d-flex flex-col align-items-start justify-content-start">
            <!-- php loop here -->
            <div class="row list-posts">
                <?php
                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 5,
                    'order' => 'ASC'
                );
                $the_query = new WP_Query($args);
                ?>
                <?php
                if ($the_query->have_posts()) {
                    while ($the_query->have_posts()) {
                        $the_query->the_post();
                ?>
                        <?php if ($the_query->current_post == 0) : ?>
                            <div class="col-xl-8">
                                <?php get_template_part('partials/card', 'post-main'); ?>
                            </div>
                        <?php endif; ?>
                        <?php if ($the_query->current_post > 0) : ?>
                            <div class="col-md-6 col-xl-4">
                                <?php get_template_part('partials/card', 'post-common'); ?>
                            </div>
                        <?php endif; ?>
                <?php
                    }
                }
                ?>
            </div>
            <div class="mx-auto mt-64">
                <?php get_template_part('partials/btn', 'common', [
                    'is_icon' => false,
                    'link' => '/cau-chuyen',
                    'text' => 'XEM TẤT CẢ',
                    'class' => 'btn-story-all'
                ]); ?>
            </div>
        </div>
    </div>
</section>
<!-- Chương 4 -->

<script>
    // $(document).ready(function() {
    //     var glideMulti = new Glide('.hero', {
    //         type: 'slider',
    //         startAt: 0,
    //         rewind: false,
    //         perView: 1,
    //         gap: 0
    //     })

    //     glideMulti.mount();
    // });
</script>

<?php get_footer(null, ['show_product' => false]) ?>