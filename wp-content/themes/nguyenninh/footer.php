<?php
global $theme_options;
// Setup defaults
$array_defaults = array(
    'show_product' => true
);

$args = wp_parse_args($args, $array_defaults);
?>
<?php if ($args['show_product']) : ?>
    <div class="w-100 d-flex max-h-[40.75rem] section-product-footer">
        <div class="d-flex flex-col bg-primary-10 flex-[6] justify-content-center title-block-common px-24 pt-96 pb-96">
            <p class="sub-title primary-80">Sản phẩm</p>
            <div class="title-main d-flex align-self-center">
                <p class="primary-80">Những gì <br> Nguyên Ninh mang tới cho mọi người</p>
            </div>
            <div class="mt-96 mx-auto">
                <?php get_template_part('partials/btn', 'common', [
                    'is_icon' => true,
                    'link' => '/san-pham',
                    'text' => 'KHÁM PHÁ SẢN PHẨM'
                ]); ?>
            </div>
        </div>
        <div class="flex-[9]">
            <img class="h-100 w-100 object-cover" src="<?php echo get_template_directory_uri(); ?>/assets/imgs/IMG_1607.jpg">
        </div>
    </div>
<?php endif; ?>

<section class="section-common bg-secondary-04">
    <div class="container">
        <div class="flex-col flex">
            <?php get_template_part('partials/title', 'common', [
                'sub-title' => 'Newsletter',
                'title' => 'Theo dõi <span class="text-[#53802B]">Nguyên Ninh<span>',
                'class' => 'mb-64'
            ]); ?>
            <div class="row w-75 align-self-center">
                <div class="text-style-base gray-70 col-md-6">Điền email vào đây để không bỏ lỡ những câu chuyện ấm ám, những tin tức, hay khuyến mãi của Nguyên Ninh gửi tới hộp thư của bạn.</div>
                <div class="col-md-6">
                    <?= do_shortcode('[newsletter_form form="1"]'); ?>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="bg-main-80">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="title-logo text-white">Bánh cốm<br> Nguyên Ninh</div>
                <div class="footer-info">
                    <div class="d-flex justify-content-between footer-info-item">
                        <div class="footer-info-title text-white">Địa chỉ</div>
                        <div class="footer-info-desc text-white"><?= $theme_options['address'] ?></div>
                    </div>
                    <div class="d-flex justify-content-between footer-info-item">
                        <div class="footer-info-title text-white">Hotline</div>
                        <div class="footer-info-desc text-white"><?= $theme_options['hotline'] ?></div>
                    </div>
                    <div class="d-flex justify-content-between footer-info-item">
                        <div class="footer-info-title text-white">Email</div>
                        <div class="footer-info-desc text-white"><?= $theme_options['email'] ?></div>
                    </div>
                </div>
                <div class="d-flex justify-content-end footer-social equal-height">
                    <a href="#" class="text-white  block">FACEBOOK
                        <i class="fa-regular fa-arrow-up rotate-45 text-white"></i>
                    </a>
                    <div class="line"></div>
                    <a href="#" class="text-white  block">INSTAGRAM
                        <i class="fa-regular fa-arrow-up rotate-45 text-white"></i>
                    </a>
                </div>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-7 d-flex flex-col">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'footer',
                    'menu_class' => 'd-flex justify-content-between menu-footer flex-wrap',
                    'menu_id' => 'main-menu',
                    'walker'         => new Walker_Nav_Menu_Dropdown(),
                    'add_a_class'     => 'nav-link',
                    'container'       => false,
                ));
                ?>
                <div class="d-flex justify-content-end footer-language align-items-center mt-auto mb-3">
                    <p class="text-uppercase text-white footer-language-title">NGÔN NGỮ:</p>
                    <a href="#" class="text-white">VI</a>
                    <div class="footer-language-line">|</div>
                    <a href="#" class="gray-30">ENG</a>
                </div>
                <div class="d-flex gap-16 w-100 footer-cookie equal-height">
                    <div class="d-flex">
                        <a href="/chinh-sach-cookie" class="text-white me-5">COOKIE</a>
                        <a href="#" class="text-white">QUYỀN RIÊNG TƯ</a>
                    </div>
                    <p class="text-uppercase footer-copyright ms-auto text-white"><i class="fa-regular fa-copyright text-white me-1"></i>NGUYÊN NINH <?= date("Y"); ?></p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- End Footer -->

<div class="modal fade" id="modal-send-info-order" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <div class="journey-header-indicator"></div>
                <h2 class="modal-title" id="exampleModalLabel">Bắt đầu hành trình du học</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" style="z-index: 9999;">
                <h3 class="personal-info">Thông tin cá nhân</h3>
                <?= do_shortcode('[gravityform id="1" title="false" ajax="true"]'); ?>
            </div>
        </div>
    </div>
</div>

<?php wp_footer(); ?>
</body>
</html>