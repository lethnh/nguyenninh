<div class="w-100 flex max-h-[40.75rem]">
    <div class="flex flex-col bg-[#BACCAA] flex-[6]">
        <div class="pt-24 px-24 flex-col flex">
            <div class="font-medium text-base text-[#183401] uppercase">Sản phẩm</div>
            <div class="font-normal text-[3.25rem] text-[#183401] font-prata pt-8">Những gì Nguyên Ninh mang tới cho mọi
                người</div>
        </div>
        <button class="rounded-full w-64 my-24 px-24">
            <div class="relative bg-[#306701] rounded-full w-64 h-12">
                <a href="" class="btn btn-common">KHÁM PHÁ SẢN PHẨM<i class="fa-light fa-arrow-up rotate-45 text-white"></i></a>
            </div>
        </button>
    </div>
    <div class="flex-[9]">
        <img class="h-full w-100" src="<?php echo get_template_directory_uri(); ?>//assets/imgs/IMG_1607.jpg">
    </div>
</div>
<div class="w-100 flex flex-col bg-[#F9F8F1]">
    <div class="flex flex-col">
        <div class="pt-24 px-24 mobile:px-4 flex-col flex">
            <div class="font-medium  text-[#183401] uppercase">Newsletter</div>
            <div class="mt-8 ml-56 mobile:!ml-0 mobile:!text-5xl mobile:!leading-3 font-prata desktop:text-7xl text-[5.25rem] desktop:!leading-[6rem] text-[#183401]">
                Theo dõi <span class="text-[#53802B]">Nguyên Ninh<span></div>
            <div class="ml-56 mobile:ml-0 flex mobile:block mobile:gap-2 gap-16 mt-16 mb-24">
                <div class="font-medium w-1/2 mobile:w-100  leading-[26px] text-[#52544F]">Điền email vào đây
                    để không bỏ
                    lỡ những câu chuyện ấm ám, những tin tức, hay khuyến mãi của Nguyên Ninh gửi tới hộp thư của bạn.
                </div>
                <div class="flex flex-col w-1/2 mobile:w-100 gap-12 mobile:mt-8">
                    <div class="flex justify-between border-b-[0.5px] border-[#9EA09C]">
                        <input type="text" name="" id="" placeholder="Họ & tên" class="py-3 bg-[#F9F8F1] focus:outline-none flex-grow" />
                        <i class="fa-light fa-user self-center"></i>
                    </div>
                    <div class="flex justify-between border-b-[0.5px] border-[#9EA09C]">
                        <input type="text" name="" id="" placeholder="Địa chỉ email" class="py-3 bg-[#F9F8F1] focus:outline-none flex-grow" />
                        <i class="fa-light fa-envelope self-center"></i>
                    </div>
                    <button class="px-6 py-4 w-1/3 mobile:self-center rounded-[26px] bg-[#D6E1CC] text-[#306701]
                     focus:border-[#98B380] focus:border-[4.8px] mobile:focus:border-[1px] disabled:bg-[#D1D2D0] disabled:text-white uppercase">Đăng
                        ký</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer -->
<footer class="bg-main-80">
    <div class="container">

        <div class="row">
            <div class="col-md-4">
                <div class="title-logo text-white">Bánh cốm<br> Nguyên Ninh</div>
                <div class="footer-info">
                    <div class="d-flex justify-content-between footer-info-item">
                        <div class="footer-info-title text-white">Địa chỉ</div>
                        <div class="footer-info-desc text-white">Số 11 Hàng Than, Ba Đình, Hà Nội</div>
                    </div>
                    <div class="d-flex justify-content-between footer-info-item">
                        <div class="footer-info-title text-white">Hotline</div>
                        <div class="footer-info-desc text-white">(0243) 828 3573 - 090 220 8459</div>
                    </div>
                    <div class="d-flex justify-content-between footer-info-item">
                        <div class="footer-info-title text-white">Email</div>
                        <div class="footer-info-desc text-white">banhcomnguyenninh@gmail.com</div>
                    </div>
                </div>
                <div class="d-flex justify-content-end">
                    <a href="#" class="text-white  block">FACEBOOK
                        <i class="fa-light fa-arrow-up rotate-45 text-white"></i>
                    </a>
                    <div class="transform -rotate-90 w-4 h-0.5 border-white border mx-6 border-solid mt-[8px]"></div>
                    <a href="#" class="text-white  block">INSTAGRAM
                        <i class="fa-light fa-arrow-up rotate-45 text-white"></i>
                    </a>
                </div>
            </div>
            <div class="col-md-8">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'footer',
                    'menu_class' => 'd-flex justify-content-between menu-footer',
                    'menu_id' => 'main-menu',
                    'walker'         => new Walker_Nav_Menu_Dropdown(),
                    'add_a_class'     => 'nav-link',
                    'container'       => false,
                ));
                ?>
                <div class="d-flex justify-content-end footer-language align-items-center">
                    <p class="text-uppercase text-white footer-language-title">NGÔN NGỮ:</p>
                    <a href="#" class="text-white">VI</a>
                    <div class="footer-language-line">|</div>
                    <a href="#" class="gray-30">ENG</a>
                </div>
                <div class="d-flex gap-16 w-100 footer-cookie">
                    <div class="d-flex">
                        <a href="#" class="text-white me-5">COOKIE</a>
                        <a href="#" class="text-white">QUYỀN RIÊNG TƯ</a>
                    </div>
                    <p class="text-uppercase footer-copyright ms-auto text-white"><i class="fa-regular fa-copyright text-white"></i>NGUYÊN NINH <?= date("Y"); ?></p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- End Footer -->
<div class="w-100 flex bg-[#183401] mobile:hidden">
    <div class="flex-col gap-16 pt-24 ml-24 w-2/3 pr-20">
        <div class="flex">
            <div class="flex-col gap-8 ml-12">
                <div class="text-white font-medium  leading-4 uppercase">sản phẩm</div>
                <div class="flex-col">
                    <div class="mt-8">
                        <a href="#" class="text-white text-xs block">Bánh cốm Nguyên Ninh
                            <i class="fa-light fa-arrow-up rotate-45 text-white"></i>
                        </a>
                    </div>
                    <div class="mt-8">
                        <a href="#" class="text-white text-xs block">Chè Thái Nguyên
                            <i class="fa-light fa-arrow-up rotate-45 text-white"></i>
                        </a>
                    </div>
                    <div class="mt-8">
                        <a href="#" class="text-white text-xs block">Bánh xu xê
                            <i class="fa-light fa-arrow-up rotate-45 text-white"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="flex-col gap-8 ml-12">
                <div class="text-white font-medium  leading-4 uppercase">về nguyên ninh</div>
                <div class="flex-col">
                    <div class="mt-8">
                        <a href="#" class="text-white text-xs block">Giá trị cốt lõi
                            <i class="fa-light fa-arrow-up rotate-45 text-white"></i>
                        </a>
                    </div>
                    <div class="mt-8">
                        <a href="#" class="text-white text-xs block">Niềm tự hào
                            <i class="fa-light fa-arrow-up rotate-45 text-white"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="flex-col gap-8 ml-12">
                <div class="text-white font-medium  leading-4 uppercase">câu chuyện</div>
                <div class="flex-col">
                </div>
            </div>
            <div class="flex-col gap-8 ml-12">
                <div class="text-white font-medium  leading-4 uppercase">liên hệ</div>
                <div class="flex-col">
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</main>
<?php wp_footer(); ?>
</body>
<script>
    var html = document.querySelector('html');
    window.onload = function() {
        html.style.fontSize = (window.innerWidth / 1440 * 16) + 'px'
    };
    window.onresize = function() {
        html.style.fontSize = (window.innerWidth / 1440 * 16) + 'px'
    };
</script>

</html>