<?php
/*
* Template Name: Liên hệ
*/
?>
<?php
get_header(); ?>

<div class="border-[0.5px] border-[#e6e6e6] w-[calc(100%_-_8rem)] mx-auto mt-24"></div>
<section class="section-common">
    <div class="container">
        <?php get_template_part('partials/title', 'common', [
            'sub-title' => 'LIÊN HỆ VỚI NGUYÊN NINH',
            'title' => '“Bạn có điều gì muốn nói với Nguyên Ninh?”',
            'class' => 'mb-64'
        ]); ?>
        <div class="w-100 flex">
            <div class="w-[30%]"></div>
            <div class="w-[70%] h-full">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/su-khac-biet-7.png" class="w-100 object-cover max-h-full" alt="">
                <?php echo do_shortcode('[gravityform id="1" title="false" ajax="true"]') ?>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>