<?php
/*
* Template Name: Sản phẩm
*/
?>
<?php
global $theme_options;
get_header(); ?>
<div class="page-product-list">
    <!--  -->
    <section class="section-common">
        <div class="container">
            <div class="d-flex flex-col align-items-center w-4/5 mx-auto">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/star.svg" alt="">
                <h1 class="mb-64">Các sản phẩm<br> của nhà Nguyên Ninh</h1>
            </div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/IMG_1607.jpg" class="max-h-[43.75rem] h-[43.75rem] w-100 max-w-100 object-cover" alt="">
        </div>
    </section>
    <!--  -->

    <!--  -->
    <section class="section-common bg-secondary-07 section-products">
        <div class="container">
            <div class="d-flex flex-col align-items-center mx-auto">
                <div class="mb-8 text-center">
                    <img class="" src="<?php echo get_template_directory_uri(); ?>/assets/imgs/star.svg" alt="">
                </div>
                <h2 class="gray-70 text-center">Dưới đây là những sản phẩm mà hiện tại Nguyên Ninh đang bày bán.</h2>
            </div>
            <div class="line-common mx-auto mt-64 mb-64"></div>

            <div class="row mb-96">
                <?php
                $args_products = array(
                    'post_type' => 'san_pham',
                    'order' => 'asc',
                );
                $products = new WP_Query($args_products);
                ?>
                <?php
                if ($products->have_posts()) {
                    while ($products->have_posts()) {
                        $products->the_post();
                ?>
                        <?php $productInfo = get_field('product_info', get_the_ID()); ?>
                        <?php if ($products->current_post == 1) : ?>
                            <div class="col-md-6">
                                <div class="first:border-0 border-t border-[#B8B9B6] odd:h-[33rem] even:h-[48.625rem]">
                                    <img src="<?= the_post_thumbnail_url(); ?>" class="h-full max-h-full object-cover w-100" alt="">
                                    <div class="flex justify-between mt-6">
                                        <p class="product-title gray-80"><?= the_title(); ?></p>
                                        <p class="text-style-base gray-80"><?= $productInfo['price']; ?> VND</p>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>

                        <?php if ($products->current_post == 0) : ?>
                            <div class="col-md-6">
                                <div class="first:border-0 border-t border-[#B8B9B6] even:h-[33rem] odd:h-[48.625rem]">
                                    <img src="<?= the_post_thumbnail_url(); ?>" class="h-full max-h-full object-cover w-100" alt="">
                                    <div class="flex justify-between mt-6">
                                        <p class="product-title gray-80"><?= the_title(); ?></p>
                                        <p class="text-style-base gray-80"><?= $productInfo['price']; ?> VND</p>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>
                <?php }
                } ?>
            </div>

            <div class="bg-primary-05 flex-col d-flex section-product-contact">
                <h2 class="text-center gray-80">Hướng dẫn mua hàng tại Nguyên Ninh</h2>
                <div class="text-style-base gray-80 text-center px-14 pb-4">
                    Hiện tại, nếu quý khách muốn đặt hàng tại Nguyên Ninh, xin vui lòng vào fanpage Facebook của Nguyên Ninh
                    <br>
                    hoặc liên hệ qua Hotline <b><?= $theme_options['phone_number']; ?>.</b>
                </div>
                <div class="text-style-base gray-80 text-center px-14">Trong tương lai gần thôi, tính năng đặt hàng online chắc chắn sẽ xuất hiện. Rất xin lỗi quý khách về sự bất tiện.</div>
                <div class="d-flex mt-12 justify-center">
                    <a href="tel:0902208459" class="btn btn-common btn-hotline me-4 d-flex align-items-center">
                        <svg class="position-relative me-2" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M15.0634 12.4831C15.0634 12.7381 15.0067 13.0002 14.8863 13.2552C14.7659 13.5102 14.6101 13.751 14.4046 13.9777C14.0576 14.3602 13.6751 14.6364 13.243 14.8135C12.818 14.9906 12.3576 15.0827 11.8617 15.0827C11.1392 15.0827 10.3671 14.9127 9.55255 14.5656C8.73797 14.2185 7.92339 13.751 7.11589 13.1631C6.3013 12.5681 5.52922 11.9093 4.79255 11.1798C4.06297 10.4431 3.40422 9.67102 2.8163 8.86352C2.23547 8.05602 1.76797 7.24852 1.42797 6.4481C1.08797 5.6406 0.917969 4.86852 0.917969 4.13185C0.917969 3.65018 1.00297 3.18977 1.17297 2.76477C1.34297 2.33268 1.61214 1.93602 1.98755 1.58185C2.44089 1.1356 2.93672 0.916016 3.46089 0.916016C3.65922 0.916016 3.85755 0.958516 4.03464 1.04352C4.2188 1.12852 4.38172 1.25602 4.50922 1.44018L6.15255 3.75643C6.28005 3.93352 6.37214 4.09643 6.43589 4.25227C6.49964 4.40102 6.53505 4.54977 6.53505 4.68435C6.53505 4.85435 6.48547 5.02435 6.3863 5.18727C6.29422 5.35018 6.15964 5.52018 5.98964 5.69018L5.4513 6.24977C5.37339 6.32768 5.33797 6.41977 5.33797 6.5331C5.33797 6.58977 5.34505 6.63935 5.35922 6.69602C5.38047 6.75268 5.40172 6.79518 5.41589 6.83768C5.54339 7.07143 5.76297 7.37602 6.07464 7.74435C6.39339 8.11268 6.73338 8.4881 7.10172 8.86352C7.48422 9.23893 7.85255 9.58602 8.22797 9.90477C8.5963 10.2164 8.90088 10.4289 9.14172 10.5564C9.17713 10.5706 9.21964 10.5918 9.26922 10.6131C9.32589 10.6343 9.38255 10.6414 9.4463 10.6414C9.56672 10.6414 9.6588 10.5989 9.73672 10.521L10.2751 9.98977C10.4521 9.81268 10.6221 9.6781 10.7851 9.5931C10.948 9.49393 11.1109 9.44435 11.288 9.44435C11.4226 9.44435 11.5642 9.47268 11.7201 9.53643C11.8759 9.60018 12.0388 9.69227 12.2159 9.81268L14.5605 11.4773C14.7446 11.6048 14.8721 11.7535 14.9501 11.9306C15.0209 12.1077 15.0634 12.2848 15.0634 12.4831Z" stroke="white" stroke-width="1.2" stroke-miterlimit="10" />
                        </svg>
                        <span>GỌI HOTLINE</span>
                    </a>
                    <?php get_template_part('partials/btn', 'common', [
                        'is_icon' => true,
                        'link' => $theme_options['facebook'],
                        'text' => 'ĐI TỚI FACEBOOK',
                        'class' => 'btn-facebook'
                    ]); ?>
                </div>
            </div>
        </div>
    </section>
    <!--  -->

    <!--  -->
    <section class="section-common">
        <div class="container">
            <div class="glide hero">
                <div class="glide__track" data-glide-el="track">
                    <ul class="glide__slides h-[43.75rem] max-h-[43.75rem]">
                        <li class="glide__slide h-full max-h-full">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/IMG_1607.jpg" alt="" class="w-100 h-full max-h-full object-cover">
                        </li>
                        <li class="glide__slide h-full max-h-full">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/IMG_1607.jpg" alt="" class="w-100 h-full max-h-full object-cover">
                        </li>
                        <li class="glide__slide h-full max-h-full">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/IMG_1607.jpg" alt="" class="w-100 h-full max-h-full object-cover">
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--  -->

    <div class="container">
        <div class="line-common mx-auto"></div>
    </div>

    <!-- Slide -->
    <section class="section-common">
        <div class="container">
            <?php get_template_part('partials/title', 'common', [
                'sub-title' => 'SẢN PHẨM CỦA NGUYÊN NINH CÓ GÌ ĐẶC BIỆT?',
                'title' => '“Món quà ngọt ngào mang tên Nguyên Ninh”',
                'sub-title-below' => 'Bánh cốm của Nguyên Ninh
                        không phải là một món ăn, mà là một trải nghiệm. Cuộc hành trình của hương vị bắt đầu khi cắn
                        lớp vỏ cốm
                        xay nhuyễn bên ngoài mát thơm dịu dàng. Rồi sau đó là một sự bùng nổ của vị ngọt và hương vị
                        quen thuộc của
                        đậu xanh và đường, được tô điểm thêm nét thanh tao của dừa nạo. Sự hoà quyện hoàn hảo của vị
                        giác chỉ có được ở bánh cốm Nguyên Ninh.',
                'class' => 'mb-64'
            ]); ?>
            <?php get_template_part('partials/slide', 'common'); ?>
        </div>
    </section>
    <!-- End Slide -->

    <div class="container">
        <div class="line-common mx-auto"></div>
    </div>
</div>


<script>
    setTimeout(() => {
        const glideHero = new Glide('.hero', {
            type: 'carousel',
            animationDuration: 2000,
            autoplay: 3000,
            focusAt: '1',
            startAt: 1,
            perView: 1,
        }).mount();
        const glideHero2 = new Glide('.hero2', {
            type: 'carousel',
            animationDuration: 1000,
            focusAt: '1',
            startAt: 1,
            perView: 1,
        }).mount();
    }, 1000)
</script>
<?php get_footer(null, ['show_product' => false]) ?>