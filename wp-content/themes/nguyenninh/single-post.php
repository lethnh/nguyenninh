<?php
/*
* Template Name:Article Detail Page
*/
?>
<?php
get_header(); ?>
<div class="container post-body">
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : ?>
            <?php the_post(); ?>
            <div class="d-flex h-[37.5rem]">
                <div class="d-flex flex-col w-[45%] mr-20 align-self-center h-full title-block-common">
                    <p class="sub-title gray-80">Nhật ký</p>
                    <h1 class="post-title gray-80 mt-4"><?php the_title(); ?></h1>
                    <p class="post-date gray-70">Đăng vào lúc <?php echo get_the_date('h:i') ?> | <?php echo get_the_date('d.m.Y') ?></p>
                    <div class="single_post_line"></div>
                </div>
                <div class="post-thumbnail w-50">
                    <img class="h-100 object-cover w-100" src="<?php the_post_thumbnail_url() ?>">
                </div>
            </div>
            <div class="section-post-content">
                <img class="mx-auto mb-68" src="<?php echo get_template_directory_uri(); ?>/assets/imgs/star.svg" alt="">
                <div class="w-50 text-style-base mx-auto">
                    <?php the_content(); ?>
                </div>
                <img class="mx-auto mt-68" src="<?php echo get_template_directory_uri(); ?>/assets/imgs/star.svg" alt="">
            </div>
        <?php endwhile; ?>
    <?php endif; ?>
</div>
<section class="section-common section-post-relate bg-secondary-07">
    <div class="container">
        <h2 class="mb-64 gray-80">Những bài viết khác</h2>
        <div class="row">
            <?php for ($x = 0; $x < 3; $x += 1) : ?>
                <div class="col-md-4">
                    <?php get_template_part('partials/card', 'post-common'); ?>
                </div>
            <?php endfor; ?>
        </div>
    </div>
</section>
<?php get_footer();
