<?php
global $theme_options;
// Setup defaults
$array_defaults = array(
    'style_image' => null,
    'class' => null,
    'position_body' => 'left-0 bottom-0'
);

$args = wp_parse_args($args, $array_defaults);
?>
<div class="glide hero slide-common">
    <div class="glide__track" data-glide-el="track">
        <ul class="glide__slides">
            <?php foreach ($theme_options['slider_sweet'] as $key => $slide) : ?>
                <li class="glide__slide">
                    <div class="d-flex flex-row glide__slide_height">
                        <div class="d-flex flex-col w-40 align-items-start glide__slide_left justify-content-between" style="background-color: <?= $slide['bg_color_slide']; ?>;color: <?= $slide['text_color_slide']; ?>">
                            <div class="d-flex flex-col align-items-start justify-content-start w-100">
                                <div class="d-inline-flex align-items-center justify-content-center glide__slide_step">
                                    <span><?= $key < 10 ? '0' . $key + 1 : $key + 1; ?></span>
                                    <div class="d-inline-flex flex-col align-items-center justify-content-center w-9 h-100 py-1">/</div>
                                    <span class="text-center"><?= count($theme_options['slider_sweet']) < 10 ? '0' . count($theme_options['slider_sweet']) : count($theme_options['slider_sweet']); ?></span>
                                </div>
                                <p class="w-100 glide__slide_title"><?= $slide['title_slide']; ?></p>
                            </div>
                            <div class="glide__slide_content">
                                <p class="text-justify font-bold"><?= $slide['description_bold']; ?></p>
                                <p class="text-justify mt-3"><?= $slide['description_normal']; ?></p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center justify-content-start glide__slide_right w-60">
                            <?= wp_get_attachment_image($slide['image_slider'], 'full', '', ['class' => 'h-100 w-100 img-fluid', "alt" => "slide common"]); ?>
                        </div>
                    </div>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
    <div class="glide__arrows" data-glide-el="controls">
        <button class="glide__arrow glide__arrow--left mr-4 bg-white" data-glide-dir="<"><i class="fa-light fa-arrow-left"></i></button>
        <button class="glide__arrow glide__arrow--right bg-white" data-glide-dir=">"><i class="fa-light fa-arrow-right"></i></button>
    </div>
</div>
<script>
    $(document).ready(function() {
        new Glide('.hero.slide-common', {
            type: 'carousel',
            startAt: 0,
            autoplay: 2000,
            perView: 1,
            gap: 0
        }).mount()
    });
</script>