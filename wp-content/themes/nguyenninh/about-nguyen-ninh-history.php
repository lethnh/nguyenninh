<?php
/*
* Template Name: Về Nguyên Ninh - Nguyên Ninh theo dòng lịch sử
*/
?>
<?php
get_header(); ?>

<!--  -->
<section class="section-common">
    <div class="container">
        <?php get_template_part('partials/title', 'common', [
            'sub-title' => 'NGUYÊN NINH THEO DÒNG LỊCH SỬ',
            'title' => 'Câu chuyện của Nguyên Ninh bắt đầu vào năm 1865',
            'sub-title-below-2' => [
                'first' => 'Vẫn trong cùng ngôi nhà cổ kính số 11 Hàng Than ấy, vào năm 1865, chiếc bánh cốm đầu tiên ra đời với tinh thần mong muốn ai ai cũng được thưởng thức hương vị cốm thơm ngon quanh năm.',
                'second' => 'Và chính vì vậy, ngoài công thức bí truyền được truyền lại cho con cháu gia tộc Nguyên Ninh, cụ còn để lại một giá trị đáng tự hào nữa là cấm không được theo đuổi danh vọng, lợi lộc từ chiếc bánh cốm.',
            ],
            'class' => 'mb-96'
        ]); ?>
        <div class="inline-flex flex-col space-y-16 items-content-start justify-content-start">
            <div class="inline-flex flex-col space-y-16 items-content-start justify-content-start mb-[24]">
                <div class="d-flex space-x-10 items-start justify-center section-about-nguyen-ninh-history">
                    <div class="h-full w-[54%] section-about-nguyen-ninh-history-left">
                        <img class="max-h-[30.625rem] h-[30.625rem] w-100" src="<?php echo get_template_directory_uri(); ?>/assets/imgs/cau-chuyen-1.png" />
                        <div class="d-flex justify-content-between mt-3">
                            <p class="gray-80 text-uppercase fs-14 fw-bold">NƠI CHIẾC BÁNH CỐM
                                ĐẦU TIÊN RA ĐỜI</p>
                            <p class="gray-80 text-uppercase fs-14 fw-bold">NGÔI NHÀ CỔ KÍNH SỐ
                                11 HÀNG THAN</p>
                        </div>
                    </div>
                    <div class="inline-flex flex-col self-start space-y-8 items-start justify-between max-w-[45%] h-full section-about-nguyen-ninh-history-right">
                        <div class="d-flex flex-col space-y-4 items-content-start justify-content-start h-100">
                            <img class="max-h-[66%] max-w-[100%] w-100" src="<?php echo get_template_directory_uri(); ?>/assets/imgs/cau-chuyen-2.png" />
                            <p class="text-style-base w-[78%] mt-3">Ngôi nhà gia tộc
                                Nguyên Ninh số 11 Hàng Than vẫn vậy, vẫn giữ nguyên kiến túc, cách bài trí và nội thất
                                từ xưa, mang đậm giá trị văn hoá và truyền thống. </p>
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
    <div class="container">
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
                            <div class="d-flex align-items-start">
                                <div class="w-50 slider-wrapper">
                                    <img class="w-100 h-100 object-cover" src="<?php echo get_template_directory_uri(); ?>/assets/imgs/IMG_2621.jpg" />
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
<section class="bg-secondary-10 section-common section-thanh-tuu">
    <div class="container">
        <?php get_template_part('partials/title', 'common', [
            'sub-title' => 'THÀNH TỰU VÀ GIÁ TRỊ THƯƠNG HIỆU',
            'title' => 'Những điều Nguyên Ninh luôn tự hào'
        ]); ?>
        <div class="w-100 inline-flex flex-col items-start justify-content-start">
            <div class="flex-col mx-auto flex w-1/3 mt-16 section-thanh-tuu-content">
                <div class="w-100">
                    <p class="text-style-base gray-80">Nguyên Ninh sở hữu bản quyền thương hiệu quốc gia số 14-308 cho chiếc bánh cốm đặc trưng của mình cũng đã hơn 100 năm rồi.</p>
                </div>
                <div class="w-100 mt-4">
                    <p class="text-style-base gray-80">Xuyên suốt quá trình phục vụ khách hàng, Nguyên Ninh đã đạt được nhiều giải thưởng và thành tựu đáng tự hào.</p>
                </div>
            </div>
            <div class="flex max-h-[39.375rem] h-[39.375rem] mt-24 w-100 section-thanh-tuu-image-wrapper">
                <div class="h-1/2 max-h-1/2 w-[24%] mr-4 section-thanh-tuu-image">
                    <img class="h-100 object-cover w-100" src="<?php echo get_template_directory_uri(); ?>/assets/imgs/danh-hieu-1.png" alt="">
                </div>
                <div class="h-4/5 max-h-4/5 w-1/2 self-center mr-4 section-thanh-tuu-image">
                    <img class="h-100 object-cover w-100" src="<?php echo get_template_directory_uri(); ?>/assets/imgs/danh-hieu-2.png" alt="">
                </div>
                <div class="h-1/2 max-h-1/2 w-[24%] self-end section-thanh-tuu-image">
                    <img class="h-100 object-cover w-100" src="<?php echo get_template_directory_uri(); ?>/assets/imgs/danh-hieu-3.png" alt="">
                </div>
            </div>
            <div class="flex-col mx-auto flex w-1/3 mt-16 section-thanh-tuu-content">
                <p class="text-style-base gray-80">Có lẽ câu chuyện đặc biệt nhất về thành tựu của Nguyên Ninh là giải thưởng thương hiệu Việt hội nhập WTO. Đây không chỉ là một thành tựu đáng nhớ và có ý nghĩa to lớn với Nguyên Ninh mà còn với cả nền văn hoá và du lịch của Việt Nam ta.</p>
            </div>
            <div class="flex-col mx-auto flex w-4/5 mt-16 my-24 section-thanh-tuu-image">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/danh-hieu-4.png" class="w-100 max-h-[36.125rem] max-w-100" alt="">
            </div>
            <div class="flex-col mx-auto flex w-1/3 section-thanh-tuu-content">
                <div class="w-100">
                    <p class="text-style-base gray-80">Nhưng điều tuyệt vời nhất mà Nguyên Ninh luôn tự hào đó là sự yêu mến của các quý khách hàng với những chiếc bánh cốm thơm ngon và với Nguyên Ninh.</p>
                </div>
                <div class="w-100 mt-4">
                    <p class="text-style-base gray-80">Đó là điều Nguyên Ninh luôn luôn mong muốn. Và chúng tôi sẽ luôn cố gắng mang hương vị chiếc bánh cốm Nguyên Ninh tới trái tim tất cả mọi người.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--  -->

<!--  -->
<?php get_template_part('partials/section', 'story', [
    'sub-title' => 'HIỂU THÊM VỀ NGUYÊN NINH',
    'title' => 'Những giá trị về ẩm thực và văn hoá của Nguyên Ninh',
    'class' => 'mb-96',
    'background_image' => get_template_directory_uri() . '/assets/imgs/section-story-1.png',
]); ?>
<!--  -->

<script>
    $(document).ready(function() {
        const slider1 = new Glide('.hero', {
            type: 'slider',
            startAt: 0,
            rewind: false,
            perView: 1.6,
            gap: 48
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
