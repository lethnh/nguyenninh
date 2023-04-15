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
        <div>
            <div class="glide hero">
                <div class="glide__track" data-glide-el="track">
                    <ul class="glide__slides">
                        <li class="glide__slide max-h-[39.5rem] h-[39.5rem] mr-28">
                            <img src="<?php echo get_template_directory_uri(); ?>//assets/imgs/BCNN9666.jpg" alt="" class="w-100 h-full max-h-full object-cover">
                        </li>
                        <li class="glide__slide max-h-[39.5rem] h-[39.5rem] mr-28">
                            <img src="<?php echo get_template_directory_uri(); ?>//assets/imgs/BCNN9678.jpg" alt="" class="w-100 h-full max-h-full object-cover">
                        </li>
                        <li class="glide__slide max-h-[39.5rem] h-[39.5rem] mr-28">
                            <img src="<?php echo get_template_directory_uri(); ?>//assets/imgs/DSC07977.jpg" alt="" class="w-100 h-full max-h-full object-cover">
                        </li>
                    </ul>
                </div>
            </div>
            <div class="text-center mt-96">
                <?php get_template_part('partials/btn', 'common', [
                    'is_icon' => true,
                    'text' => 'KHÁM PHÁ SẢN PHẨM',
                    'class' => 'mt-64',
                ]); ?>
            </div>
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
        <div class="d-flex flex-col items-start justify-content-start section-value-block">
            <div class="inline-flex align-items-center justify-center section-value-item">
                <div class="position-relative w-[60%] max-w-[60%] max-h-[31.25rem] ml-10">
                    <img class=" w-100 max-h-[31.25rem] max-w-100 z-2" src="<?php echo get_template_directory_uri(); ?>//assets/imgs/IMG_9893.jpg" style="position:inherit" />
                    <div class="position-absolute bg-primary-05 w-100 h-full max-w-100 max-h-full top-10 right-10 z-1"></div>
                </div>
                <div class="d-flex aligns-self-start align-items-center w-[40%] max-w-[40%] flex-col section-value-item-right">
                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M16.0013 2.66602C14.3291 9.19064 9.19259 14.3272 2.66797 15.9993C9.19259 17.6715 14.3291 22.8081 16.0013 29.3327C17.6735 22.8081 22.81 17.6715 29.3346 15.9993C22.81 14.3272 17.6735 9.19064 16.0013 2.66602Z" fill="#383A36" />
                    </svg>
                    <h2 class="fw-bold text-center gray-80 font-raleway-bold">Gìn giữ hương vị</h2>
                    <p class="text-center text-style-base gray-70">
                        Hương vị thơm ngon của Nguyên Ninh ấy đã đi cùng lịch sử Hà Nội hơn 1 thế kỉ, trải qua bao
                        thăng trầm với những biến đổi trong khẩu vị ăn uống của người Thủ đô vẫn chưa khi nào khác đi.
                        Nguyên Ninh nguyện lưu giữ mãi hương vị truyền thống ấy như lưu giữ một nét đẹp văn hóa Thủ đô.
                    </p>
                </div>
            </div>
            <div class="inline-flex align-items-center justify-center mt-96 section-value-item">
                <div class="d-flex aligns-self-start align-items-center w-[40%] max-w-[40%] flex-col section-value-item-right">
                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M16.0013 2.66602C14.3291 9.19064 9.19259 14.3272 2.66797 15.9993C9.19259 17.6715 14.3291 22.8081 16.0013 29.3327C17.6735 22.8081 22.81 17.6715 29.3346 15.9993C22.81 14.3272 17.6735 9.19064 16.0013 2.66602Z" fill="#383A36" />
                    </svg>
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
                <div class="position-relative w-[60%] max-w-[60%] max-h-[31.25rem] mr-10">
                    <img class=" w-100 max-h-[31.25rem] max-w-100 z-2" src="<?php echo get_template_directory_uri(); ?>//assets/imgs/IMG_3697-1.jpg" style="position:inherit" />
                    <div class="position-absolute bg-primary-05 w-100 h-full max-w-100 max-h-full top-10 left-10 z-1"></div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--  -->

<!--  -->
<section class="section-common bg-secondary-20">
    <div class="container">
        <?php get_template_part('partials/title', 'common', [
            'sub-title' => 'SỰ KHÁC BIỆT CỦA NGUYÊN NINH',
            'title' => 'Hương vị tuyệt hảo,<br>nguyên vẹn và an toàn',
            'class' => 'mb-96'
        ]); ?>
        <div class="w-100 inline-flex flex-col items-start justify-content-start">
            <div class="w-100 inline-flex flex-col items-start justify-content-start">
                <div class="w-100 flex gap-16">
                    <div class="flex-[1]">
                        <div class="inline-flex flex-col space-y-4 items-start justify-content-start w-96">
                            <p class="text-base font-bold tracking-wider leading-7 gray-80">01</p>
                            <div class="opacity-50 w-100 h-0.5 border-gray-700 bg-[rgb(55,65,81)]"></div>
                            <p class="w-100 text-5xl font-bold leading-[4.5rem] gray-80">Không pha bột,<br />không
                                tạp
                                chất,<br />chỉ nguyên liệu tự nhiên</p>
                        </div>
                    </div>
                    <div class="flex-[2] flex-col pt-[1.75rem]">
                        <div class="pr-14 flex gap-8">
                            <p class="w-1/2 text-style-base gray-80">
                                Bánh cốm Nguyên Ninh chỉ dùng duy nhất 4 nguyên liệu: Cốm nếp quýt loại I, phần nhân có
                                đậu
                                xanh, dừa nạo và đường kính trắng.
                            </p>
                            <p class="w-1/2 text-style-base gray-80">
                                Vỏ bánh được làm từ cốm xào nhuyễn, không xay, không pha bột và đặc biệt luôn xào bằng
                                tay
                                chứ không xào máy nên bánh dẻo thơm, dậy mùi cốm và không bị bở, vỡ khi ăn.
                            </p>
                        </div>
                        <div class="flex gap-4 max-h-[16.25rem] h-[16.25rem] mt-8">
                            <div class="flex-[3] max-h-[16.25rem] h-[16.25rem]">
                                <img class="h-100 w-100 object-cover" src="<?php echo get_template_directory_uri(); ?>//assets/imgs/IMG_2552.jpg">
                            </div>
                            <div class="flex-[2] max-h-[16.25rem] h-[16.25rem]">
                                <img class="h-100 w-100 object-cover" src="<?php echo get_template_directory_uri(); ?>//assets/imgs/IMG_2634.jpg">
                            </div>
                            <div class="flex-[3] max-h-[16.25rem] h-[16.25rem]">
                                <img class="h-100 w-100 object-cover" src="<?php echo get_template_directory_uri(); ?>//assets/imgs/IMG_2621.jpg">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-100 flex gap-16 mt-12">
                    <div class="flex-[1]">
                        <div class="inline-flex flex-col space-y-4 items-content-0start justify-content-start w-96">
                            <p class="text-base fw-bold  gray-80">02</p>
                            <div class="opacity-50 w-100 h-0.5 border-gray-700 bg-[rgb(55,65,81)]"></div>
                            <p class="w-100 fw-bold gray-80">Chúng tôi luôn luôn
                                nói không với chất bảo quản
                            </p>
                        </div>
                    </div>
                    <div class="flex-[2] flex-col pt-[1.75rem]">
                        <div class="pr-14 flex gap-8">
                            <p class="w-1/2 text-style-base gray-80">
                                Bánh cốm Nguyên Ninh chính gốc số 11 Hàng Than từ lâu đã nổi tiếng với việc không sử dụng chất bảo quản.
                            </p>
                            <p class="w-1/2 text-style-base gray-80">
                                Dù rằng nếu sử dụng chất bảo quản theo sự cho phép của bộ Y tế thì bánh sẽ để được lâu hơn nhưng Nguyên Ninh
                                vẫn luôn trung thành với tôn chỉ này từ xưa đến nay để gìn giữ tính nguyên bản của sản phẩm.
                            </p>
                        </div>
                        <div class="flex gap-4 max-h-[16.25rem] h-[16.25rem] mt-8">
                            <div class="flex-[3] max-h-[16.25rem] h-[16.25rem]">
                                <img class="h-100 w-100 object-cover" src="<?php echo get_template_directory_uri(); ?>//assets/imgs/DSCF1895.jpg">
                            </div>
                            <div class="flex-[2] max-h-[16.25rem] h-[16.25rem]">
                                <img class="h-100 w-100 object-cover" src="<?php echo get_template_directory_uri(); ?>//assets/imgs/DSCF1776.jpg">
                            </div>
                            <div class="flex-[3] max-h-[16.25rem] h-[16.25rem]">
                                <img class="h-100 w-100 object-cover" src="<?php echo get_template_directory_uri(); ?>//assets/imgs/DSC07932.jpg">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-100 flex gap-16 mt-12">
                    <div class="flex-[1]">
                        <div class="inline-flex flex-col space-y-= items-start justify-content-start w-96">
                            <p class="text-base font-bold tracking-wider leading-7 gray-80">03</p>
                            <div class="opacity-50 w-100 h-0.5 border-gray-700 bg-[rgb(55,65,81)]"></div>
                            <p class="w-100 text-5xl font-bold leading-[4.5rem] gray-80">Chỉ một địa chỉ duy nhất:
                                Số 11 Hàng Than</p>
                        </div>
                    </div>
                    <div class="flex-[2] flex-col pt-[1.75rem]">
                        <div class="pr-14 flex gap-8">
                            <p class="w-1/2 text-style-base gray-80">
                                Bánh cốm Nguyên Ninh chỉ dùng duy nhất 4 nguyên liệu: Cốm nếp quýt loại I, phần nhân có
                                đậu
                                xanh, dừa nạo và đường kính trắng.
                            </p>
                            <p class="w-1/2 text-style-base gray-80">
                                Vỏ bánh được làm từ cốm xào nhuyễn, không xay, không pha bột và đặc biệt luôn xào bằng
                                tay
                                chứ không xào máy nên bánh dẻo thơm, dậy mùi cốm và không bị bở, vỡ khi ăn.
                            </p>

                        </div>
                        <div class="flex gap-4 max-h-[16.25rem] h-[16.25rem] mt-8">
                            <div class="flex-[3] max-h-[16.25rem] h-[16.25rem]">
                                <img class="h-full w-100" src="<?php echo get_template_directory_uri(); ?>//assets/imgs/IMG_3697-1.jpg">
                            </div>
                            <div class="flex-[2] max-h-[16.25rem] h-[16.25rem]">
                                <img class="h-full w-100" src="<?php echo get_template_directory_uri(); ?>//assets/imgs/IMG_9826.jpg">
                            </div>
                            <div class="flex-[3] max-h-[16.25rem] h-[16.25rem]">
                                <img class="h-full w-100" src="<?php echo get_template_directory_uri(); ?>//assets/imgs/IMG_0506.jpg">
                            </div>
                        </div>
                    </div>
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
    'class' => 'mb-96'
]); ?>
<!--  -->

<script>
    setTimeout(() => {
        const api = new Glide('.hero', {
            type: 'carousel',
            animationDuration: 1000,
            focusAt: '1',
            startAt: 1,
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
