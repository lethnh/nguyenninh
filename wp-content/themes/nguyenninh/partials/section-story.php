<?php
// Setup defaults
$array_defaults = array(
    'sub-title' => null,
    'title' => get_the_title(),
    'sub-title-below' => null,
    'sub-title-below-2' => null,
    'class' => null
);

$args = wp_parse_args($args, $array_defaults);
?>
<section class="w-100 d-flex flex-col align-items-center gap-16 section-story" style="background: linear-gradient(0deg, rgba(56, 58, 54, 0.8), rgba(56, 58, 54, 0.8)), url(<?php echo get_template_directory_uri(); ?>//assets/imgs/IMG_9840.jpg);">
    <div class="container">
        <div class="d-flex flex-col align-items-center pt-96 pb-96 mx-[3rem]">
            <div>
                <p class="text-center text-white"><?= $args['sub-title'] ?></p>
            </div>
            <div class="mt-8">
                <p class="text-center text-white"><?= $args['title'] ?></p>
            </div>
            <button class="text-white border-[1.2px] border-[#FFFFFF] w-48 bg-transparent flex justify-center py-4 px-8 mt-16 gap-2 rounded-[1.625rem] hover:bg-white hover:text-black">
                <p class="text-inherit tracking-[0.1em] font-medium leading-4 text-sm text-center text-uppercase">Khám phá
                    <i class="ml-[6px] fa-light fa-arrow-up rotate-45 text-inherit"></i>
                </p>
            </button>
        </div>
    </div>
</section>