<?php
/*
 * Template Name: Trang chủ
 */
?>
<?php
get_header(null, ['is_body_main' => true]); ?>

<section class="banner-home">
    <div class="container">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/DSCF2003.jpg" class="object-cover h-100 w-100">
    </div>
</section>
<!-- Chương 1 -->
<section class="chapter-begin section-common">
    <div class="container">
        <?php get_template_part('partials/title', 'common', [
            'sub-title' => 'CHƯƠNG 1 - MỞ ĐẦU',
            'title' => '“Vẹn nguyên từ thuở ban đầu”',
            'class' => 'mb-64'
        ]); ?>
        <div class="chapter-content d-flex align-items-end">
            <div class="h-100 w-50">
                <img class="h-100 object-cover" src="<?php echo get_template_directory_uri(); ?>//assets/imgs/IMG_3697-1.jpg" />
            </div>
            <div class="chapter-content-right w-50">
                <p class="chapter-content-title gray-70">Bánh cốm được sáng tạo vào năm
                    1865 bởi cụ trưởng ái gia tộc Nguyên Ninh – cụ Trần Thị Luân. </p>
                <p class="chapter-content-sub-content gray-70 mt-3">Trải qua hơn 150 năm, công
                    thức sản xuất bánh không hề có thay đổi lớn, chỉ điều chỉnh tỷ lệ sao cho hương vị ngày càng hài
                    hòa, hợp khẩu vị thực khách thời hiện đại. Bánh cốm Nguyên Ninh cam kết không sử dụng chất bảo
                    quản, không thêm phụ gia, tạp chất, giữ nguyên cách làm và nguyên liệu như những ngày đầu.</p>
                <img class="img-fluid object-cover" src="<?php echo get_template_directory_uri(); ?>//assets/imgs/IMG_9812.jpg" />
            </div>
        </div>
    </div>
</section>
<!-- Chương 1 -->

<!-- Chương 2 -->
<section class="chapter-second section-common">
    <div class="container">
        <?php get_template_part('partials/title', 'common', [
            'sub-title' => 'CHƯƠNG 2 - BÁNH CỐM CÓ GÌ ĐẶC BIỆT?',
            'title' => '“Một món quà ghi dấu đất kinh kì”',
            'sub-title-below' => 'Ở Hà Nội có nhiều đồ ăn quá, ẩm thực đa dạng quá nhiều khi nghĩ lại chẳng biết ăn món gì. Ngày cuối tuần muốn mua một món quà vặt cho cả nhà thưởng thức, món gì vừa vui miệng lại vừa lành mạnh đây ?',
            'class' => 'mb-64'
        ]); ?>
        <div class="chapter-content d-flex align-align-items-centermt-64">
            <img class="w-50" src="<?php echo get_template_directory_uri(); ?>//assets/imgs/IMG_0214.jpg" />
            <div class="w-50 chapter-content-right">
                <p class="chapter-content-right-title-main gray-80">Hãy thử một
                    lần ghé qua 11 Hàng Than mua chiếc bánh cốm Nguyên Ninh.</p>
                <p class="chapter-content-right-title-sub gray-70 mt-3">Một chiếc
                    bánh giản dị, dân dã với các nguyên liệu sạch hoàn toàn. Cốm xay xào có độ dẻo mịn, mát thơm nhẹ
                    nhưng lại thiếu đậm đà thì đã được bổ sung bởi nhân đỗ xanh ngọt ngào. Nhưng chỉ ngọt, thơm thôi
                    chưa đủ, vẫn cần thêm một chút bùi bùi, ngậy ngậy. Và dừa nạo được thêm vào để bổ sung hương vị ấy.
                </p>
            </div>
        </div>
        <div class="mt-64 img-chapter-second">
            <img class="w-100" src="<?php echo get_template_directory_uri(); ?>//assets/imgs/LK306742.jpg">
        </div>
        <div class="d-flex flex-col align-self-center w-75 mx-auto mt-32">
            <p class="text-style-base">Dù trong các lễ cưới hỏi truyền
                thống hay hiện đại, bánh cốm Nguyên Ninh vẫn luôn may mắn được làm "người bạn đồng hành" của nhiều
                cặp đôi, gửi tặng nhà trai những chiếc bánh để kết
                tráp, gửi tặng nhà gái món quà cho quan khách thân thương</p>
            <p class="text-style-base">Đây là điều may mắn và vinh dự
                của Nguyên Ninh.</p>
        </div>
        <div class="text-center mt-64">
            <?php get_template_part('partials/btn', 'common', [
                'is_icon' => true,
                'text' => 'SẢN PHẨM CỦA NGUYÊN NINH'
            ]); ?>
        </div>
    </div>
</section>
<!-- Chương 2 -->
<!-- <div class="px-14 mobile:px-4 w-100 mobile:mt-4">

</div> -->

<!-- Chương 3 -->
<section class="chapter-third section-common">
    <div class="container">
        <?php get_template_part('partials/title', 'common', [
            'sub-title' => 'CHƯƠNG 3 - NGUYÊN NINH CÓ GÌ ĐẶC BIỆT?',
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

        <div class="d-flex flex-col space-y-16 align-items-start justify-content-start">
            <!-- php loop here -->
            <div class="grid grid-cols-3 justify-content-center gap-10 w-100">
                <?php
                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 5,
                    // 'order' => 'ASC'
                );
                $the_query = new WP_Query($args);
                ?>
                <?php
                if ($the_query->have_posts()) {
                    while ($the_query->have_posts()) {
                        $the_query->the_post();
                ?>
                        <?php if ($the_query->current_post == 0) { ?>
                            <div class="position-relative col-span-2 post_item">
                                <div class="img-wrapper">
                                    <img src="<?php the_post_thumbnail_url() ?>">
                                </div>
                                <div class="absolute w-50 left-0 bottom-0 post_body">
                                    <div class="flex flex-col">
                                        <div class="post_title gray-80 mb-3">
                                            <p><?= the_title(); ?></p>
                                        </div>
                                        <div class="post_excerpt gray-60">
                                            <p><?= wp_trim_words(get_the_content(), 40, '...'); ?></p>
                                        </div>
                                    </div>
                                    <div class="flex justify-content-between post_body_footer">
                                        <a href="<?php the_permalink() ?>" class="post_seemore gray-80">ĐỌC CÂU CHUYỆN
                                            <i class="fa-solid fa-arrow-up rotate-45"></i></a>
                                        <div class="text-center gray-70 post_datetime"><?= get_the_date('d.m.Y') ?></div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>

                        <?php if ($the_query->current_post > 0) { ?>
                            <?php get_template_part('partials/card', 'post-common'); ?>
                        <?php } ?>
                <?php
                    }
                }
                ?>
            </div>
            <div class="mx-auto mt-64">
                <?php get_template_part('partials/btn', 'common', [
                    'is_icon' => false,
                    'text' => 'XEM TẤT CẢ'
                ]); ?>
            </div>
        </div>
    </div>
</section>
<!-- Chương 4 -->

<script>
    $(document).ready(function() {
        var glideMulti = new Glide('.hero', {
            type: 'slider',
            startAt: 0,
            rewind: false,
            perView: 1
        })

        glideMulti.mount();
    });
</script>

<?php get_footer(null, ['show_product' => false]) ?>