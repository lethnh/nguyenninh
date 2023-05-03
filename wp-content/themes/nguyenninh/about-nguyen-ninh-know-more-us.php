<?php
/*
* Template Name: Về Nguyên Ninh - Hiểu thêm về chúng tôi
*/
?>
<?php
get_header(); ?>

<!--  -->
<section class="section-common">
    <div class="container">
        <?php get_template_part('partials/title', 'common', [
            'sub-title' => 'HIỂU THÊM VỀ CHÚNG TÔI',
            'title' => 'Nguyên Ninh mong muốn mang đến cho mọi người thứ quà tuyệt vời nhất',
            'sub-title-below-2' => [
                'first' => 'Từ thuở ban đầu, cụ Trần Thị Luân đã sáng tạo ra chiếc bánh cốm đầu tiên với phương châm mang những điều tuyệt vời của hương vị cốm nhất đến với thực khách bốn phương,',
                'second' => 'Và chính vì vậy, ngoài công thức bí truyền được truyền lại cho con cháu gia tộc Nguyên Ninh, cụ còn để lại một giá trị đáng tự hào nữa là cấm không được theo đuổi danh vọng, lợi lộc từ chiếc bánh cốm.'
            ],
            'class' => 'mb-96'
        ]); ?>
        <div class="glide hero glide_know_me">
            <div class="glide__track" data-glide-el="track">
                <ul class="glide__slides">
                    <?php $slide_images = get_field('slide_images'); ?>
                    <?php foreach ($slide_images as $key => $image) : ?>
                        <li class="glide__slide">
                            <?= wp_get_attachment_image($image['image'], 'full'); ?>
                        </li>
                    <?php endforeach ?>
                </ul>
            </div>
        </div>
        <div class="text-center mt-96">
            <?php get_template_part('partials/btn', 'common', [
                'is_icon' => true,
                'link' => '/san-pham',
                'text' => 'KHÁM PHÁ SẢN PHẨM',
            ]); ?>
        </div>
    </div>
</section>
<!--  -->

<!--  -->
<section class="section-gia-tri-su-menh section-common bg-secondary-07">
    <div class="container">
        <?php get_template_part('partials/title', 'common', [
            'sub-title' => 'GIÁ TRỊ VÀ SỨ MỆNH',
            'title' => 'Nguyên Ninh và những giá trị truyền thống',
            'class' => 'mb-96'
        ]); ?>
        <div class="d-flex flex-col items-content-start justify-content-start section-value-block">
            <?php $gia_tri_truyen_thong = get_field('gia_tri_truyen_thong'); ?>
            <?php foreach ($gia_tri_truyen_thong as $key => $item) : ?>
                <?php if ($key % 2 == 0) : ?>
                    <div class="d-inline-flex align-items-center justify-content-center section-value-item <?= $key != 0 ? 'mt-96' : ''; ?>">
                        <div class="position-relative w-[60%]  ml-10 section-value-item-image left">
                            <?= wp_get_attachment_image($item['image'], 'full', '', ['class' => 'w-100 object-cover z-2', 'alt' => $item['title'], 'style' => 'position:inherit']); ?>
                            <div class="position-absolute bg-primary-05 w-100 h-full max-w-100 max-h-full section-value-item-image-overlay z-1"></div>
                        </div>
                        <div class="d-flex aligns-self-start align-items-center w-[40%]  flex-col section-value-item-content">
                            <img class="svg-star" src="<?php echo get_template_directory_uri(); ?>/assets/imgs/star.svg" alt="">
                            <h2 class="fw-bold text-center gray-80 font-raleway-bold"><?= $item['title']; ?></h2>
                            <p class="text-center text-style-base gray-70"><?= $item['description']; ?></p>
                        </div>
                    </div>
                <?php else : ?>
                    <div class="d-inline-flex align-items-center justify-content-center mt-96 section-value-item">
                        <div class="d-flex aligns-self-start align-items-center w-[40%]  flex-col section-value-item-content">
                            <img class="svg-star" src="<?php echo get_template_directory_uri(); ?>/assets/imgs/star.svg" alt="">
                            <h2 class="fw-bold text-center gray-80 font-raleway-bold"><?= $item['title']; ?></h2>
                            <p class="text-center text-style-base gray-70"><?= $item['description']; ?></p>
                        </div>
                        <div class="position-relative w-[60%]  mr-10 section-value-item-image right">
                            <?= wp_get_attachment_image($item['image'], 'full', '', ['class' => 'w-100 object-cover z-2', 'alt' => $item['title'], 'style' => 'position:inherit']); ?>
                            <div class="position-absolute bg-primary-05 w-100 h-100 max-w-100 max-h-full section-value-item-image-overlay z-1"></div>
                        </div>
                    </div>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<!--  -->

<!--  -->
<section class="section-common bg-secondary-20 section-su-khac-biet">
    <div class="container">
        <?php get_template_part('partials/title', 'common', [
            'sub-title' => 'SỰ KHÁC BIỆT CỦA NGUYÊN NINH',
            'title' => 'Hương vị tuyệt hảo,<br>nguyên vẹn và an toàn',
            'class' => 'mb-96'
        ]); ?>
        <div class="d-flex flex-col align-items-start justify-content-start section-su-khac-biet-list">
            <?php $su_khac_biet = get_field('su_khac_biet'); ?>
            <?php foreach ($su_khac_biet as $key => $item) : ?>
                <div class="row section-su-khac-biet-item <?= $key != 0 ? 'mt-96' : ''; ?>">
                    <div class="col-md-4 section-su-khac-biet-item-left">
                        <p class="number gray-80"><?= $key < 10 ? '0' . $key + 1 : $key + 1; ?></p>
                        <div class="line"></div>
                        <h3 class="gray-80"><?= $item['title'] ?></h3>
                    </div>
                    <div class="col-md-8 section-su-khac-biet-item-right">
                        <div class="d-flex section-su-khac-biet-item-right-content">
                            <p class="flex-40 gray-70 text-style-base me-4"><?= $item['description_1'] ?></p>
                            <p class="flex-40 text-style-base gray-70"><?= $item['description_2'] ?></p>
                        </div>
                        <div class="d-flex mt-8 section-su-khac-biet-item-right-image">
                            <div class="flex-35">
                                <?= wp_get_attachment_image($item['image_1'], 'full', '', ['class' => 'h-100 w-100 object-cover', 'alt' => $item['title']]); ?>
                            </div>
                            <div class="flex-25 px-3">
                                <?= wp_get_attachment_image($item['image_2'], 'full', '', ['class' => 'h-100 w-100 object-cover', 'alt' => $item['title']]); ?>
                            </div>
                            <div class="flex-35">
                                <?= wp_get_attachment_image($item['image_3'], 'full', '', ['class' => 'h-100 w-100 object-cover', 'alt' => $item['title']]); ?>
                            </div>
                        </div>
                    </div>
                    <div class="flex-[2] flex-col pt-[1.75rem] section-su-khac-biet-item-right">

                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<!--  -->

<!--  -->
<?php get_template_part('partials/section', 'story', [
    'sub-title' => 'HIỂU THÊM VỀ NGUYÊN NINH',
    'title' => 'Những giá trị về ẩm thực và văn hoá của Nguyên Ninh',
    'class' => 'mb-96',
    'is_black_and_white' => true
]); ?>
<!--  -->

<script>
    setTimeout(() => {
        const api = new Glide('.hero', {
            type: 'slider',
            animationDuration: 1000,
            focusAt: 'center',
            startAt: 0,
            perView: 1,
            // 130px
            peek: {
                before: 0,
                after: 130
            },
            breakpoints: {
                767: {
                    peek: {
                        before: 0,
                        after: 0
                    }
                }
            }
        }).mount();
    }, 1000)
</script>
<?php get_footer();
