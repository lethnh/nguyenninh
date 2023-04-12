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
        <div class="w-100 h-[585px] max-h-[585px] flex">
            <div class="w-[30%]"></div>
            <div class="w-[70%] h-full">
                <img src="<?php echo get_template_directory_uri(); ?>//assets/imgs/HO-GUOM.jpg" class="w-100 max-h-full" alt="">
                <?php echo do_shortcode('[contact-form-7 id="123" title="Contact form 1"]') ?>
            </div>
        </div>
    </div>
</section>

<script>
    var submit = document.getElementById("submit");
    submit.classList.add("px-6", "mt-24", "py-4", "w-1/5", "mobile:self-center", "rounded-[26px]", "bg-[#D6E1CC]", "text-[#306701]", "focus:border-[#98B380]", "focus:border-[4.8px]", "mobile:focus:border-[1px]", "disabled:bg-[#D1D2D0]", "disabled:text-white", "uppercase")
</script>
<?php get_footer(); ?>