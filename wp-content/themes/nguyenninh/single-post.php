<?php
/*
* Template Name:Article Detail Page
*/
?>
<?php
get_header(); ?>
<?php if (have_posts()) : ?>
    <?php while (have_posts()) : ?>
        <?php the_post(); ?>
        <div class="px-14">
            <div class="flex h-[37.5rem]">
                <div class="flex flex-col w-[45%] mr-20 self-center h-full">
                    <div class="mt-28">
                        <p class="uppercase font-medium text-base leading-7 gray-80">Nhật ký</p>
                    </div>
                    <div class="mt-8 flex-[1] mb-16">
                        <p class="font-prata text-7xl !leading-[5.25rem] gray-80"><?php the_title(); ?></p>
                    </div>
                    <div class="">
                        <p class="font-medium text-sm text-[#52544F] mb-8">Đăng vào lúc <?php echo get_the_date('h:i') ?> | <?php echo get_the_date('d.m.Y') ?></p>
                        <div class="w-3/4 border-[0.5px] border-[#e6e6e6]"></div>
                    </div>

                </div>
                <div class="max-h-[37.5rem] w-1/2">
                    <img class="h-full w-100" src="<?php the_post_thumbnail_url() ?>">
                </div>
            </div>
        </div>
        <div class="px-14 py-24">
            <img class="mx-auto" src="<?php echo get_template_directory_uri(); ?>/assets/imgs/star.svg" alt="">
            <div class="w-[45%] font-raleway mx-auto font-medium text-base leading-7 my-16">
                <?php the_content(); ?>
            </div>
            <img class="mx-auto" src="<?php echo get_template_directory_uri(); ?>/assets/imgs/star.svg" alt="">
        </div>
    <?php endwhile; ?>
<?php endif; ?>
<div class="px-14 py-24 bg-[#F4F2E6]">
    <div class="">
        <p class="font-prata font-normal text-6xl !leading-[74px]">Những bài viết khác</p>
    </div>
    <div class="row mt-16">
        <?php for ($x = 0; $x < 3; $x += 1) : ?>
            <div class="col-md-4">
                <?php get_template_part('partials/card', 'post-common'); ?>
            </div>
        <?php endfor; ?>
    </div>
</div>
<?php get_footer();
