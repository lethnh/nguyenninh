<?php
/*
* Template Name:Article Detail Page
*/
?>
<?php
get_header(); ?>
<div class="container">
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : ?>
            <?php the_post(); ?>
            <div class="d-flex h-[37.5rem]">
                <div class="d-flex flex-col w-[45%] mr-20 align-self-center h-full title-block-common">
                    <p class="sub-title gray-80">Nhật ký</p>
                    <div class="title-main d-flex align-self-center">
                        <p class="gray-80"><?php the_title(); ?></p>
                    </div>
                    <p class="font-medium text-sm gray-70 mb-8">Đăng vào lúc <?php echo get_the_date('h:i') ?> | <?php echo get_the_date('d.m.Y') ?></p>
                    <div class="single_post_line"></div>
                </div>
                <div class="max-h-[37.5rem] w-50">
                    <img class="h-100 object-cover w-100" src="<?php the_post_thumbnail_url() ?>">
                </div>
            </div>
            <div class="">
                <img class="mx-auto" src="<?php echo get_template_directory_uri(); ?>/assets/imgs/star.svg" alt="">
                <div class="w-[45%] font-raleway mx-auto font-medium text-base leading-7 my-16">
                    <?php the_content(); ?>
                </div>
                <img class="mx-auto" src="<?php echo get_template_directory_uri(); ?>/assets/imgs/star.svg" alt="">
            </div>
        <?php endwhile; ?>
    <?php endif; ?>
    <div class=" bg-secondary-07">
        <p class="font-prata font-normal text-6xl !leading-[74px]">Những bài viết khác</p>
        <div class="row mt-16">
            <?php for ($x = 0; $x < 3; $x += 1) : ?>
                <div class="col-md-4">
                    <?php get_template_part('partials/card', 'post-common'); ?>
                </div>
            <?php endfor; ?>
        </div>
    </div>
</div>
<?php get_footer();
