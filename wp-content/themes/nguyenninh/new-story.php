<?php
/*
* Template Name: Câu chuyện
*/
?>
<?php
get_header(); ?>

<section class="px-14 mobile:px-4 w-100 mobile:mt-4 max-h-[27.75rem] h-[27.75rem]" style="background:linear-gradient(0deg, rgba(56, 58, 54, 0.72), rgba(56, 58, 54, 0.72)),url(<?php echo get_template_directory_uri(); ?>//assets/imgs/HO-GUOM.jpg);background-size:cover;background-repeat: no-repeat; ">>
    <div class=" container">
        <div class="d-flex flex-col w-100 title-block-common pt-96 pb-96">
            <p class="sub-title text-white">NHẬT KÝ CỦA NGUYÊN NINH</p>
            <div class="d-flex align-items-end">
                <div class="title-main d-flex align-self-center w-75">
                    <p class="text-white">Những mảnh <br> chuyện nho nhỏ</p>
                </div>
                <div class="sub-title-below d-flex align-self-center ms-auto w-30 mt-auto">
                    <p class="text-white">Chào mừng bạn tới với nhật ký của Nguyên Ninh, nơi chúng mình sẻ chia những mẩu chuyện của mình và của thủ đô thân thương</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-common section-diary">
    <div class="container">
        <div class="block-of-week">
            <div class="d-flex align-items-center">
                <img class="me-5" src="<?php echo get_template_directory_uri(); ?>/assets/imgs/star.svg" alt="">
                <h1 class="heading-topic">Câu chuyện của tuần</h1>
            </div>
            <div class="mt-16 max-h-[34.375rem]">
                <?php
                $args_my_query = array(
                    'post_type'    =>    'post',
                    'posts_per_page'       => 1,
                    'meta_key'      => 'highlight',
                    'meta_value'    => 1,
                    'orderby' => 'publish_date',
                    'order' => 'DESC',
                );
                $highlight_query = new WP_Query($args_my_query);
                ?>
                <?php
                if ($highlight_query->have_posts()) {
                    while ($highlight_query->have_posts()) {
                        $highlight_query->the_post();
                ?>
                        <?php get_template_part('partials/card', 'post-main', [
                            'style_image' => 'padding-bottom: 41%;',
                            'position_body' => 'right-0 bottom-0'
                        ]); ?>
                <?php }
                } ?>
            </div>
        </div>

        <div class="section-diary-line mx-auto mt-96 mb-96"></div>

        <div class="block-of-discovery">
            <div class="d-flex align-items-center">
                <img class="me-5" src="<?php echo get_template_directory_uri(); ?>/assets/imgs/star.svg" alt="">
                <h1 class="heading-topic">Khám phá nhật ký Nguyên Ninh</h1>
            </div>
            <div class="grid grid-cols-3 justify-center gap-10 w-100 mt-16">
                <?php
                $args_my_query = array(
                    'post_type' => 'post',
                    'posts_per_page' => 7
                );
                $my_query = new WP_Query($args_my_query);
                ?>
                <?php
                if ($my_query->have_posts()) {
                    while ($my_query->have_posts()) {
                        $my_query->the_post();
                ?>
                        <?php if ($my_query->current_post == 0  || $my_query->current_post == 6) { ?>
                            <?php get_template_part('partials/card', 'post-main'); ?>
                        <?php } ?>
                        <?php if ($my_query->current_post > 0 && $my_query->current_post < 6) { ?>
                            <?php get_template_part('partials/card', 'post-common'); ?>
                        <?php } ?>
                <?php }
                } ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>