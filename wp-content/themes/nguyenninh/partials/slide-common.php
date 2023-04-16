<?php
// Setup defaults
$array_defaults = array(
    'style_image' => null,
    'class' => null,
    'position_body' => 'left-0 bottom-0'
);

$args = wp_parse_args($args, $array_defaults);
?>
<div class="glide hero">
    <div class="glide__track" data-glide-el="track">
        <ul class="glide__slides">
            <li class="glide__slide">
                <div class="d-flex flex-row glide__slide_height">
                    <div class="d-flex flex-col w-40 align-items-start glide__slide_left justify-content-between bg-secondary-20">
                        <div class="d-flex flex-col align-items-start justify-content-start w-100">
                            <div class="d-inline-flex align-items-center justify-content-center glide__slide_step">
                                <span class="gray-80">01</span>
                                <div class="d-inline-flex flex-col align-items-center justify-content-center w-9 h-100 py-1">/</div>
                                <span class="text-center gray-80">03</span>
                            </div>
                            <p class="w-100 gray-80 glide__slide_title">Không pha bột, không tạp chất</p>
                        </div>
                        <div class="glide__slide_content">
                            <p class="text-justify font-bold gray-80">Bánh cốm Nguyên Ninh chỉ dùng duy nhất 4 nguyên liệu: Cốm nếp quýt loại I, phần nhân có đậu xanh, dừa nạo và đường kính trắng.</p>
                            <p class="text-justify gray-80 mt-3">Vỏ bánh được làm từ cốm xào nhuyễn, không xay, không pha bột và đặc biệt luôn xào bằng tay chứ không xào máy nên bánh dẻo thơm, dậy mùi cốm và không bị bở, vỡ khi ăn. </p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center justify-content-start glide__slide_right bg-black w-60">
                        <img class="w-100 img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/imgs/su-khac-biet-3.png" />
                    </div>
                </div>
            </li>
            <li class="glide__slide">
                <div class="d-flex flex-row glide__slide_height">
                    <div class="d-flex flex-col w-40 align-items-start glide__slide_left justify-content-between bg-primary-10">
                        <div class="d-flex flex-col align-items-start justify-content-start w-100">
                            <div class="d-inline-flex align-items-center justify-content-center glide__slide_step">
                                <span class="gray-80">02</span>
                                <div class="d-inline-flex flex-col align-items-center justify-content-center w-9 h-100 py-1">/</div>
                                <span class="text-center gray-80">03</span>
                            </div>
                            <p class="w-100 gray-80 glide__slide_title">Luôn nói không với chất bảo quản</p>
                        </div>
                        <div class="glide__slide_content">
                            <p class="text-justify font-bold gray-80">Bánh cốm Nguyên Ninh chính gốc số 11 Hàng Than từ lâu đã nổi tiếng với việc không sử dụng chất bảo quản.</p>
                            <p class="text-justify gray-80 mt-3">Dù rằng nếu sử dụng chất bảo quản theo sự cho phép của bộ Y tế thì bánh sẽ để được lâu hơn nhưng Nguyên Ninh vẫn luôn trung thành với tôn chỉ này từ xưa đến nay để gìn giữ tính nguyên bản của sản phẩm.</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center justify-content-start glide__slide_right bg-black w-60">
                        <img class="w-100 img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/imgs/slide-2.png" />
                    </div>
                </div>
            </li>
            <li class="glide__slide">
                <div class="d-flex flex-row glide__slide_height">
                    <div class="d-flex flex-col w-40 align-items-start glide__slide_left justify-content-between bg-gray-80">
                        <div class="d-flex flex-col align-items-start justify-content-start w-100">
                            <div class="d-inline-flex align-items-center justify-content-center glide__slide_step">
                                <span class="text-white">03</span>
                                <div class="d-inline-flex flex-col align-items-center justify-content-center w-9 h-100 py-1 text-white">/</div>
                                <span class="text-center text-white">03</span>
                            </div>
                            <p class="w-100 text-white glide__slide_title">Không có địa chỉ thứ hai</p>
                        </div>
                        <div class="glide__slide_content">
                            <p class="text-justify text-white mt-3">Bánh cốm Nguyên Ninh chỉ có duy nhất một địa chỉ tại số 11 phố Hàng Than, Hà Nội. Đây là cửa hiệu gia truyền của gia đình, vốn là 1 ngôi nhà cổ vẫn giữ nguyên lối kiến trúc từ thế kỷ XX. Đặc điểm nhận diện của cửa hiệu là sự khiêm tốn, giản dị, không bày bánh ra vỉa hè và trưng biển bảng sáng rực như các cửa hiệu khác.</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center justify-content-start glide__slide_right bg-black w-60">
                        <img class="w-100 img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/imgs/su-khac-biet-7.png" />
                    </div>
                </div>
            </li>
        </ul>
    </div>
    <div class="glide__arrows" data-glide-el="controls">
        <button class="glide__arrow glide__arrow--left mr-4 bg-white" data-glide-dir="<"><i class="fa-light fa-arrow-left"></i></button>
        <button class="glide__arrow glide__arrow--right bg-white" data-glide-dir=">"><i class="fa-light fa-arrow-right"></i></button>
    </div>
</div>