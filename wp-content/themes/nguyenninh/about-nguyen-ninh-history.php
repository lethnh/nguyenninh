<?php
/*
* Template Name: Về Nguyên Ninh - Nguyên Ninh theo dòng lịch sử
*/
?>
<?php
get_header(); ?>

<!--  -->
<?php $theo_dong_lich_su = get_field('theo_dong_lich_su'); ?>
<section class="section-common">
    <div class="container container-custom-2">
        <?php get_template_part('partials/title', 'common', [
            'sub-title' => 'NGUYÊN NINH THEO DÒNG LỊCH SỬ',
            'title' => $theo_dong_lich_su['title'],
            'sub-title-below-2' => [
                'first' => $theo_dong_lich_su['description_1'],
                'second' => $theo_dong_lich_su['description_2'],
            ],
            'class' => 'mb-96'
        ]); ?>
        <div class="inline-flex flex-col space-y-16 items-content-start justify-content-start">
            <div class="inline-flex flex-col space-y-16 items-content-start justify-content-start mb-[24]">
                <div class="d-flex space-x-10 items-start justify-center section-about-nguyen-ninh-history">
                    <div class="h-full w-[54%] section-about-nguyen-ninh-history-left">
                        <?= wp_get_attachment_image($theo_dong_lich_su['image_left'], 'full', '', ['class' => 'max-h-[30.625rem] h-[30.625rem] w-100', 'alt' => 'cau-chuyen-1']); ?>
                        <div class="d-flex justify-content-between mt-3">
                            <p class="gray-80 text-uppercase fs-14 fw-bold">NƠI CHIẾC BÁNH CỐM
                                ĐẦU TIÊN RA ĐỜI</p>
                            <p class="gray-80 text-uppercase fs-14 fw-bold">NGÔI NHÀ CỔ KÍNH SỐ
                                11 HÀNG THAN</p>
                        </div>
                    </div>
                    <div class="inline-flex flex-col self-start space-y-8 items-start justify-between max-w-[45%] h-full section-about-nguyen-ninh-history-right">
                        <div class="d-flex flex-col space-y-4 items-content-start justify-content-start h-100">
                            <?= wp_get_attachment_image($theo_dong_lich_su['image_right'], 'full', '', ['class' => 'max-h-[66%] max-w-[100%] w-100', 'alt' => 'cau-chuyen-2']); ?>
                            <p class="text-style-base w-[78%] mt-3"><?= $theo_dong_lich_su['description_3'] ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--  -->

<!--  -->
<section class="section-common bg-primary-05 section-history-slider">
    <div class="container container-custom-2">
        <?php get_template_part('partials/title', 'common', [
            'title' => null,
            'sub-title' => 'NHỮNG CỘT MỐC QUAN TRỌNG',
        ]); ?>
        <div class="glide hero mt-96">
            <div class="glide__track" data-glide-el="track">
                <ul class="glide__slides">
                    <?php $milestone = get_field('milestone'); ?>
                    <?php foreach ($milestone as $key => $value) : ?>
                        <li class="glide__slide">
                            <div class="d-flex align-items-start section-history-slider-wrapper">
                                <div class="w-50 slider-wrapper">
                                    <img class="w-100 h-100 object-cover" src="<?php echo get_template_directory_uri(); ?>/assets/imgs/IMG_2621.webp" />
                                </div>
                                <div class="d-flex flex-col bg-primary-10 w-50 slide-history-right">
                                    <p class="slide-history-right-number"><?= $value['years'] ?></p>
                                    <div class="w-100 mt-auto">
                                        <p class="slide-history-right-title gray-80"><?= $value['title'] ?></p>
                                        <p class="gray-80 text-style-base mt-3"><?= $value['description'] ?></p>
                                    </div>
                                </div>
                            </div>
                        </li>
                    <?php endforeach; ?>
                </ul>
                <div class="glide__arrows" data-glide-el="controls">
                    <button class="glide__arrow glide__arrow--left mr-4" data-glide-dir="<"><i class="fa-light fa-arrow-left"></i></button>
                    <button class="glide__arrow glide__arrow--right" data-glide-dir=">"><i class="fa-light fa-arrow-right"></i></button>
                </div>
            </div>
        </div>
        <div class="glide hero slider-years mt-64">
            <div class="glide__track" data-glide-el="track">
                <ul class="glide__slides">
                    <?php foreach ($milestone as $key => $value) : ?>
                        <li class="glide__slide">
                            <div class="d-flex flex-col position-relative">
                                <p><?= $value['years'] ?></p>
                                <div class="position-absolute dot1"></div>
                                <div class="bg-gray-80 dot"></div>
                            </div>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
</section>
<!--  -->

<!--  -->
<?php $thanh_tuu_va_gia_tri_thuong_hieu = get_field('thanh_tuu_va_gia_tri_thuong_hieu'); ?>
<section class="bg-secondary-10 section-common section-thanh-tuu">
    <div class="container container-custom-2">
        <?php get_template_part('partials/title', 'common', [
            'sub-title' => 'THÀNH TỰU VÀ GIÁ TRỊ THƯƠNG HIỆU',
            'title' => $thanh_tuu_va_gia_tri_thuong_hieu['title']
        ]); ?>
        <div class="w-100 inline-flex flex-col items-start justify-content-start">
            <div class="flex-col mx-auto flex w-1/3 mt-16 section-thanh-tuu-content">
                <div class="w-100">
                    <p class="text-style-base gray-80"><?= $thanh_tuu_va_gia_tri_thuong_hieu['description_1'] ?></p>
                </div>
            </div>
            <div class="flex max-h-[39.375rem] h-[39.375rem] mt-24 w-100 section-thanh-tuu-image-wrapper">
                <div class="h-1/2 max-h-1/2 w-[24%] mr-4 section-thanh-tuu-image">
                    <?= wp_get_attachment_image($thanh_tuu_va_gia_tri_thuong_hieu['image_1'], 'full', '', ['class' => 'h-100 object-cover w-100', 'alt' => 'danh-hieu-1']); ?>
                </div>
                <div class="h-4/5 max-h-4/5 w-1/2 self-center mr-4 section-thanh-tuu-image">
                    <?= wp_get_attachment_image($thanh_tuu_va_gia_tri_thuong_hieu['image_2'], 'full', '', ['class' => 'h-100 object-cover w-100', 'alt' => 'danh-hieu-2']); ?>
                </div>
                <div class="h-1/2 max-h-1/2 w-[24%] self-end section-thanh-tuu-image">
                    <?= wp_get_attachment_image($thanh_tuu_va_gia_tri_thuong_hieu['image_3'], 'full', '', ['class' => 'h-100 object-cover w-100', 'alt' => 'danh-hieu-3']); ?>
                </div>
            </div>
            <div class="flex-col mx-auto flex w-1/3 mt-16 section-thanh-tuu-content">
                <p class="text-style-base gray-80"><?= $thanh_tuu_va_gia_tri_thuong_hieu['description_2'] ?></p>
            </div>
            <div class="flex-col mx-auto flex w-4/5 mt-16 my-24 section-thanh-tuu-image">
                <?= wp_get_attachment_image($thanh_tuu_va_gia_tri_thuong_hieu['image_4'], 'full', '', ['class' => 'w-100 max-h-[36.125rem] max-w-100', 'alt' => 'danh-hieu-4']); ?>
            </div>
            <div class="flex-col mx-auto flex w-1/3 section-thanh-tuu-content">
                <div class="w-100">
                    <p class="text-style-base gray-80"><?= $thanh_tuu_va_gia_tri_thuong_hieu['description_3'] ?></p>
                </div>
            </div>
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
    'link_button' => $hieu_them_ve_nguyen_ninh['link_button']
]); ?>
<!--  -->

<script>
    $(document).ready(function() {
        const slider1 = new Glide('.hero', {
            type: 'slider',
            startAt: 0,
            rewind: false,
            perView: 1.6,
            gap: 48,
            breakpoints: {
                800: {
                    perView: 2
                },
                500: {
                    perView: 1
                }
            }
        })
        slider1.mount();
        const slider = new Glide('.slider-years', {
            type: 'slider',
            startAt: 0,
            rewind: false,
            perView: 3.6,
            touchAngle: 0,
            gap: 0,
        });
        slider.mount();

        slider1.on('run.after', function() {
            slider.update({
                startAt: slider1.index,
            })
        })
    });
</script>
<?php get_footer();
