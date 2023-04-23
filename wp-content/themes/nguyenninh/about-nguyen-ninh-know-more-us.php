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
                    <li class="glide__slide">
                        <img src="<?php echo get_template_directory_uri(); ?>//assets/imgs/about-slide-1.png" alt="" class="w-100 h-full max-h-full object-cover">
                    </li>
                    <li class="glide__slide">
                        <img src="<?php echo get_template_directory_uri(); ?>//assets/imgs/about-slide-2.png" alt="" class="w-100 h-full max-h-full object-cover">
                    </li>
                    <li class="glide__slide">
                        <img src="<?php echo get_template_directory_uri(); ?>//assets/imgs/about-slide-3.png" alt="" class="w-100 h-full max-h-full object-cover">
                    </li>
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
            <div class="d-inline-flex align-items-center justify-content-center section-value-item">
                <div class="position-relative w-[60%]  ml-10 section-value-item-image left">
                    <img class="w-100 object-cover z-2" src="<?php echo get_template_directory_uri(); ?>/assets/imgs/about-gia-tri-su-menh-1.png" style="position:inherit" />
                    <div class="position-absolute bg-primary-05 w-100 h-full max-w-100 max-h-full section-value-item-image-overlay z-1"></div>
                </div>
                <div class="d-flex aligns-self-start align-items-center w-[40%]  flex-col section-value-item-content">
                    <img class="svg-star" src="<?php echo get_template_directory_uri(); ?>/assets/imgs/star.svg" alt="">
                    <h2 class="fw-bold text-center gray-80 font-raleway-bold">Gìn giữ hương vị</h2>
                    <p class="text-center text-style-base gray-70">
                        Hương vị thơm ngon của Nguyên Ninh ấy đã đi cùng lịch sử Hà Nội hơn 1 thế kỉ, trải qua bao
                        thăng trầm với những biến đổi trong khẩu vị ăn uống của người Thủ đô vẫn chưa khi nào khác đi.
                        Nguyên Ninh nguyện lưu giữ mãi hương vị truyền thống ấy như lưu giữ một nét đẹp văn hóa Thủ đô.
                    </p>
                </div>
            </div>
            <div class="d-inline-flex align-items-center justify-content-center mt-96 section-value-item">
                <div class="d-flex aligns-self-start align-items-center w-[40%]  flex-col section-value-item-content">
                    <img class="svg-star" src="<?php echo get_template_directory_uri(); ?>/assets/imgs/star.svg" alt="">
                    <h2 class="fw-bold text-center gray-80 font-raleway-bold">Bảo tồn giá trị</h2>
                    <p class="text-center text-style-base gray-70">
                        Vốn xuất thân là một thứ quà sang trọng ở tầng lớp thượng lưu nhưng theo thời gian, bánh cốm dần trở
                        nên quen thuộc hơn với tất cả mọi người. Tuy nhiên, bánh cốm vẫn là một món ăn vô cùng quan trọng
                        không chỉ là thường nhật mà còn trong những ngày Tết, ngày cưới.
                        <br>
                    <p class="text-center text-style-base gray-70">
                        Và Nguyên Ninh, tự hào với điều đó, muốn lưu giữ và bảo tồn những điều tuyệt vời ấy.
                    </p>
                    </p>
                </div>
                <div class="position-relative w-[60%]  mr-10 section-value-item-image right">
                    <img class="w-100 object-cover z-2" src="<?php echo get_template_directory_uri(); ?>/assets/imgs/about-gia-tri-su-menh-2.png" style="position:inherit" />
                    <div class="position-absolute bg-primary-05 w-100 h-100 max-w-100 max-h-full section-value-item-image-overlay z-1"></div>
                </div>
            </div>
            <div class="d-inline-flex align-items-center justify-content-center mt-96 section-value-item">
                <div class="position-relative w-[60%]  ml-10 section-value-item-image left">
                    <img class="w-100 object-cover z-2" src="<?php echo get_template_directory_uri(); ?>/assets/imgs/about-gia-tri-su-menh-3.png" style="position:inherit" />
                    <div class="position-absolute bg-primary-05 w-100 h-full max-w-100 max-h-full section-value-item-image-overlay z-1"></div>
                </div>
                <div class="d-flex aligns-self-start align-items-center w-[40%]  flex-col section-value-item-content">
                    <img class="svg-star" src="<?php echo get_template_directory_uri(); ?>/assets/imgs/star.svg" alt="">
                    <h2 class="fw-bold text-center gray-80 font-raleway-bold">Không theo đuổi mục tiêu lợi nhuận</h2>
                    <p class="text-center text-style-base gray-70">Bánh cốm của Nguyên Ninh đặc biệt là thế bởi toàn bộ mọi công đoạn đều là thủ công, từng chiếc được nhào nặn ra bởi niềm đam mê của người làm bánh. Dù cho Nguyên Ninh có thể sản xuất công nghiệp nhưng liệu khách hàng còn muốn thưởng thức những chiếc bánh “vô hồn”?</p>
                    <p class="text-center text-style-base gray-70">Dù cho Nguyên Ninh có thể sản xuất công nghiệp nhưng liệu khách hàng còn muốn thưởng thức những chiếc bánh “vô hồn”?</p>
                </div>
            </div>
            <div class="d-inline-flex align-items-center justify-content-center mt-96 section-value-item">
                <div class="d-flex aligns-self-start align-items-center w-[40%]  flex-col section-value-item-content">
                    <img class="svg-star" src="<?php echo get_template_directory_uri(); ?>/assets/imgs/star.svg" alt="">
                    <h2 class="fw-bold text-center gray-80 font-raleway-bold">Đóng góp giá trị văn hoá cho thủ đô</h2>
                    <p class="text-center text-style-base gray-70">Nguyên Ninh mong muốn thông qua chiếc bánh cốm nhỏ nhỏ có thể truyền tới mọi người chút hương sắc của thủ đô, chút thanh tao từ cốm để ai ai khi tới Hà Nội cũng sẽ nhớ thưởng thức chiếc bánh cốm.</p>
                    <p class="text-center text-style-base gray-70">Và cũng mong rằng công sức ít ỏi của Nguyên Ninh có thể đóng góp cho nền du lịch của nước Việt Nam ta.</p>
                </div>
                <div class="position-relative w-[60%]  mr-10 section-value-item-image right">
                    <img class="w-100 object-cover z-2" src="<?php echo get_template_directory_uri(); ?>/assets/imgs/about-gia-tri-su-menh-4.png" style="position:inherit" />
                    <div class="position-absolute bg-primary-05 w-100 h-100 max-w-100 max-h-full section-value-item-image-overlay z-1"></div>
                </div>
            </div>
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
            <div class="row section-su-khac-biet-item">
                <div class="col-md-4 section-su-khac-biet-item-left">
                    <p class="number gray-80">01</p>
                    <div class="line"></div>
                    <h3 class="gray-80">Không pha bột,<br />không tạp chất,<br />chỉ nguyên liệu tự nhiên</h3>
                </div>
                <div class="col-md-8 section-su-khac-biet-item-right">
                    <div class="d-flex section-su-khac-biet-item-right-content">
                        <p class="flex-40 gray-70 text-style-base me-4">
                            Bánh cốm Nguyên Ninh chỉ dùng duy nhất 4 nguyên liệu: Cốm nếp quýt loại I, phần nhân có đậu xanh, dừa nạo và đường kính trắng.
                        </p>
                        <p class="flex-40 text-style-base gray-70">
                            Vỏ bánh được làm từ cốm xào nhuyễn, không xay, không pha bột và đặc biệt luôn xào bằng tay chứ không xào máy nên bánh dẻo thơm, dậy mùi cốm và không bị bở, vỡ khi ăn.
                        </p>
                    </div>
                    <div class="d-flex mt-8 section-su-khac-biet-item-right-image">
                        <div class="flex-35">
                            <img class="h-100 w-100 object-cover" src="<?php echo get_template_directory_uri(); ?>/assets/imgs/su-khac-biet-1.png">
                        </div>
                        <div class="flex-25 px-3">
                            <img class="h-100 w-100 object-cover" src="<?php echo get_template_directory_uri(); ?>/assets/imgs/su-khac-biet-2.png">
                        </div>
                        <div class="flex-35">
                            <img class="h-100 w-100 object-cover" src="<?php echo get_template_directory_uri(); ?>/assets/imgs/su-khac-biet-3.png">
                        </div>
                    </div>
                </div>
                <div class="flex-[2] flex-col pt-[1.75rem] section-su-khac-biet-item-right">

                </div>
            </div>
            <div class="row section-su-khac-biet-item mt-96">
                <div class="col-md-4 section-su-khac-biet-item-left">
                    <p class="number gray-80">02</p>
                    <div class="line"></div>
                    <h3 class="gray-80">Chúng tôi luôn luôn nói không với chất bảo quản</h3>
                </div>
                <div class="col-md-8 section-su-khac-biet-item-right">
                    <div class="d-flex section-su-khac-biet-item-right-content">
                        <p class="flex-40 gray-70 text-style-base me-4">Bánh cốm Nguyên Ninh chính gốc số 11 Hàng Than từ lâu đã nổi tiếng với việc không sử dụng chất bảo quản.</p>
                        <p class="flex-40 text-style-base gray-70">Dù rằng nếu sử dụng chất bảo quản theo sự cho phép của bộ Y tế thì bánh sẽ để được lâu hơn nhưng Nguyên Ninh vẫn luôn trung thành với tôn chỉ này từ xưa đến nay để gìn giữ tính nguyên bản của sản phẩm.</p>
                    </div>
                    <div class="d-flex mt-8 section-su-khac-biet-item-right-image">
                        <div class="flex-35">
                            <img class="h-100 w-100 object-cover" src="<?php echo get_template_directory_uri(); ?>/assets/imgs/su-khac-biet-4.png">
                        </div>
                        <div class="flex-25 px-3">
                            <img class="h-100 w-100 object-cover" src="<?php echo get_template_directory_uri(); ?>/assets/imgs/su-khac-biet-5.png">
                        </div>
                        <div class="flex-35">
                            <img class="h-100 w-100 object-cover" src="<?php echo get_template_directory_uri(); ?>/assets/imgs/su-khac-biet-6.png">
                        </div>
                    </div>
                </div>
                <div class="flex-[2] flex-col pt-[1.75rem] section-su-khac-biet-item-right">

                </div>
            </div>
            <div class="row section-su-khac-biet-item mt-96">
                <div class="col-md-4 section-su-khac-biet-item-left">
                    <p class="number gray-80">03</p>
                    <div class="line"></div>
                    <h3 class="gray-80">Chỉ một địa chỉ <br> duy nhất: <br> Số 11 Hàng Than</h3>
                </div>
                <div class="col-md-8 section-su-khac-biet-item-right">
                    <div class="d-flex section-su-khac-biet-item-right-content">
                        <p class="flex-40 gray-70 text-style-base me-4">Bánh cốm Nguyên Ninh chỉ có duy nhất một địa chỉ tại số 11 phố Hàng Than, Hà Nội. Đây là cửa hiệu gia truyền của gia đình, vốn là 1 ngôi nhà cổ vẫn giữ nguyên lối kiến trúc từ thế kỷ XX.</p>
                        <p class="flex-40 text-style-base gray-70">Đặc điểm nhận diện của cửa hiệu là sự khiêm tốn, giản dị, không bày bánh ra vỉa hè và trưng biển bảng sáng rực như các cửa hiệu khác.</p>
                    </div>
                    <div class="d-flex mt-8 section-su-khac-biet-item-right-image">
                        <div class="flex-35">
                            <img class="h-100 w-100 object-cover" src="<?php echo get_template_directory_uri(); ?>/assets/imgs/su-khac-biet-7.png">
                        </div>
                        <div class="flex-25 px-3">
                            <img class="h-100 w-100 object-cover" src="<?php echo get_template_directory_uri(); ?>/assets/imgs/su-khac-biet-8.png">
                        </div>
                        <div class="flex-35">
                            <img class="h-100 w-100 object-cover" src="<?php echo get_template_directory_uri(); ?>/assets/imgs/su-khac-biet-9.png">
                        </div>
                    </div>
                </div>
                <div class="flex-[2] flex-col pt-[1.75rem] section-su-khac-biet-item-right">

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
