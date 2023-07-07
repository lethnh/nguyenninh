<?php
/*
* Template Name: Về Nguyên Ninh - Hiểu thêm về chúng tôi
*/
?>
<?php
get_header(); ?>

<!--  -->
<section class="section-common">
    <div class="container-fluid container-custom-2">
        <?php $section_first = get_field('section_first'); ?>
        <?php get_template_part('partials/title', 'common', [
            'sub-title' => $section_first['small_title'],
            'title' => $section_first['big_title'],
            'sub-title-below-2' => [
                'first' => $section_first['desc_1'],
                'second' => $section_first['desc_2']
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
                <div class="glide__bullets text-center" data-glide-el="controls[nav]">
                    <?php foreach ($slide_images as $key => $image) : ?>
                        <button class="glide__bullet" data-glide-dir="=<?= $key ?>"></button>
                    <?php endforeach ?>
                </div>
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
    <div class="container container-custom-2">
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
                        <div class="position-relative ml-10 section-value-item-image left">
                            <?= wp_get_attachment_image($item['image'], 'full', '', ['class' => 'w-100 object-cover z-2', 'alt' => $item['title'], 'style' => 'position:inherit']); ?>
                            <div class="position-absolute bg-primary-05 w-100 h-full max-w-100 max-h-full section-value-item-image-overlay z-1"></div>
                        </div>
                        <div class="d-flex aligns-self-start align-items-center flex-col section-value-item-content">
                            <img class="svg-star" src="<?php echo get_template_directory_uri(); ?>/assets/imgs/star.svg" alt="">
                            <h2 class="fw-bold text-center gray-80 font-raleway-bold"><?= $item['title']; ?></h2>
                            <p class="text-center text-style-base gray-70"><?= $item['description']; ?></p>
                        </div>
                    </div>
                <?php else : ?>
                    <div class="d-inline-flex align-items-center justify-content-center mt-96 section-value-item">
                        <div class="d-flex aligns-self-start align-items-center flex-col section-value-item-content">
                            <img class="svg-star" src="<?php echo get_template_directory_uri(); ?>/assets/imgs/star.svg" alt="">
                            <h2 class="fw-bold text-center gray-80 font-raleway-bold"><?= $item['title']; ?></h2>
                            <p class="text-center text-style-base gray-70"><?= $item['description']; ?></p>
                        </div>
                        <div class="position-relative mr-10 section-value-item-image right">
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
    <div class="container container-custom-2">
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
<?php $hieu_them_ve_nguyen_ninh = get_field('hieu_them_ve_nguyen_ninh'); ?>
<?php get_template_part('partials/section', 'story', [
    'sub-title' => $hieu_them_ve_nguyen_ninh['title_small'],
    'title' => $hieu_them_ve_nguyen_ninh['title'],
    'class' => 'mb-96',
    'background_image' => $hieu_them_ve_nguyen_ninh['bg_image'],
    'is_black_and_white' => true,
    'link_button' => $hieu_them_ve_nguyen_ninh['link_button']
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
            gap: 112,
            peek: {
                before: 0,
                after: 440
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
