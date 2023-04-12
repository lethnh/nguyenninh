<?php
/*
* Template Name:News Page
*/
?>
<?php
get_header(); ?>


<div class="px-14 mobile:px-4 w-100 mobile:mt-4 max-h-[27.75rem] h-[27.75rem] bg-[#F9F8F1]" style="background:linear-gradient(0deg, rgba(56, 58, 54, 0.72), rgba(56, 58, 54, 0.72)),url(<?php echo get_template_directory_uri(); ?>//assets/imgs/HO-GUOM.jpg);background-size:contain; ">
    <div class="flex pt-24 items-end justify-between">
        <div class="flex flex-col w-1/2 mr-[12.25rem]">
            <p class="text-base font-medium tracking-wider leading-7 ml-4 mobile:ml-0 text-white font-raleway">NHẬT KÝ
                CỦA NGUYÊN NINH
            </p>
            <div class="inline-flex align-items-centerjustify-center w-100 mt-8">
                <p class="text-[5.25rem] laptop:text-7xl laptop:leading-[6rem] mobile:text-[3.5rem] mobile:!leading-[5rem] leading-[7rem] text-white font-prata mobile:text-center">
                    Những mảnh chuyện nho nhỏ</p>
            </div>
        </div>
        <div class="w-[30%] mb-6">
            <p class="font-medium leading-7 font-raleway text-white">Chào mừng bạn tới với nhật ký của Nguyên Ninh, nơi
                chúng mình sẻ chia những mẩu chuyện của mình và của thủ đô thân thương</p>
        </div>
    </div>
</div>
<div class="px-14 py-24 bg-[#F9F8F1]">
    <div class="flex">
        <div class="mr-[3.25rem]">
            <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M24 4C21.4918 13.7869 13.7869 21.4918 4 24C13.7869 26.5082 21.4918 34.2131 24 44C26.5082 34.2131 34.2131 26.5082 44 24C34.2131 21.4918 26.5082 13.7869 24 4Z" fill="#383A36" />
            </svg>
        </div>
        <div>
            <p class="font-prata text-5xl leading-[3.5rem] font-normal">Câu chuyện của tuần</p>
        </div>
    </div>
    <div class="mt-16 max-h-[34.375rem] ">
        <?php
        $args_my_query = array(
            `post_type`    =>    `post`,
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
                <a href="<?php the_permalink() ?>" class="relative mobile:static mobile:flex mobile:flex-col inline-flex col-span-2 align-items-centerjustify-center max-h-[34.375rem] w-100">
                    <img src="<?php the_post_thumbnail_url() ?>" class="w-100 max-h-[34.375rem]" alt="">
                    <div class="absolute bg-[#D53128] px-8 py-4 left-0 top-0 mt-0">
                        <p class="uppercase font-semibold text-sm text-white">Nổi bật tuần này</p>
                    </div>
                    <div class="absolute w-[33%] flex flex-col justify-between mobile:static mobile:!mt-0 mobile:h-[50%] h-1/2 bottom-0 bg-[#F9F8F1] border border-[#E0DAB8]w-1/3 left-auto right-0">
                        <div class="flex flex-col px-8 pt-8">
                            <div class="font-bold text-3xl desktop:text-2xl leading-8 text-[#383A36] mb-4">
                                <p><?php the_title(); ?></p>
                            </div>
                            <div class="text-sm font-medium desktop:text-sm leading-7 text-[#636366]">
                                <p><?php echo wp_trim_words(get_the_content(), 40, '...'); ?></p>
                            </div>
                        </div>
                        <div class="flex justify-between pt-8 px-8 mobile:pb-4 pb-4">
                            <div class="text-sm font-bold tracking-widest leading-none text-center text-black">
                                ĐỌC CÂU CHUYỆN
                                <i class="fa-solid fa-arrow-up rotate-45 text-black"></i>
                            </div>
                            <div class="text-xs font-medium tracking-widest leading-none text-center text-black"><?php echo get_the_date('d.m.Y') ?>
                            </div>
                        </div>
                    </div>
                </a>
        <?php }
        } ?>
    </div>

</div>
<div class="border-[0.5px] border-[#e6e6e6] w-[calc(100%_-_8rem)] mx-auto"></div>
<div class="px-14 py-24 bg-[#F9F8F1]">
    <div class="flex">
        <div class="mr-[3.25rem]">
            <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M24 4C21.4918 13.7869 13.7869 21.4918 4 24C13.7869 26.5082 21.4918 34.2131 24 44C26.5082 34.2131 34.2131 26.5082 44 24C34.2131 21.4918 26.5082 13.7869 24 4Z" fill="#383A36" />
            </svg>
        </div>
        <div>
            <p class="font-prata text-5xl leading-[3.5rem] font-normal">Khám phá nhật ký Nguyên Ninh</p>
        </div>
    </div>
    <div class="grid grid-cols-3 justify-center gap-10 w-100 mobile:block mt-16">
        <?php
        $args_my_query = array(
            `post_type`    =>    `post`,
            'posts_per_page'       => 5
        );
        $my_query = new WP_Query($args_my_query);
        ?>
        <?php
        if ($my_query->have_posts()) {
            while ($my_query->have_posts()) {
                $my_query->the_post();
        ?>
                <?php if ($my_query->current_post == 0) { ?>
                    <a href="<?php the_permalink() ?>" class="relative mobile:static mobile:flex mobile:flex-col inline-flex col-span-2 space-y-10 align-items-centerjustify-center max-h-[34.375rem]">
                        <img src="<?php the_post_thumbnail_url() ?>" class="w-100 max-h-full h-full" onerror="this.onerror=null; this.src='<?php echo get_template_directory_uri(); ?>//assets/imgs/HO-GUOM.jpg'">
                        <div class="absolute mobile:static mobile:!mt-0 mobile:h-[50%] w-[55%] mobile:w-100 left-0 bottom-0 bg-[#F9F8F1] border border-[#E0DAB8]">
                            <div class="flex flex-col px-8 pt-8">
                                <div class="font-bold text-3xl desktop:text-2xl leading-8 text-[#383A36] mb-4">
                                    <p><?php the_title(); ?></p>
                                </div>
                                <div class="text-sm font-medium desktop:text-sm leading-7 text-[#636366]">
                                    <p><?php echo wp_trim_words(get_the_content(), 40, '...'); ?></p>
                                </div>
                            </div>
                            <div class="flex justify-between pt-16 px-8 mobile:pb-4 pb-4">
                                <div class="text-sm font-bold tracking-widest leading-none text-center text-black">
                                    ĐỌC CÂU CHUYỆN
                                    <i class="fa-solid fa-arrow-up rotate-45 text-black"></i>
                                </div>
                                <div class="text-xs font-medium tracking-widest leading-none text-center text-black"><?php echo get_the_date('d.m.Y') ?>
                                </div>
                            </div>
                        </div>
                    </a>
                <?php } ?>
                <?php if ($my_query->current_post > 0 && $my_query->current_post < 6) { ?>
                    <a href="<?php the_permalink() ?>" class="inline-flex flex-col  align-items-centermax-h-[34.375rem] mobile:mt-8">
                        <img src="<?php the_post_thumbnail_url() ?>" class="w-100 h-[50%]" onerror="this.onerror=null; this.src='<?php echo get_template_directory_uri(); ?>//assets/imgs/HO-GUOM.jpg'">
                        <div class="bg-[#F9F8F1] border border-[#E0DAB8] h-[50%] mt-0 flex flex-col justify-between">
                            <div class="flex flex-col px-8 pt-8">
                                <div class="font-bold text-3xl desktop:text-2xl leading-8 text-[#383A36] mb-4">
                                    <p><?php the_title(); ?></p>
                                </div>
                                <div class="text-sm font-medium desktop:text-sm leading-7 text-[#636366]">
                                    <p><?php echo wp_trim_words(get_the_content(), 40, '...'); ?>.</p>
                                </div>
                            </div>
                            <div class="flex justify-between pt-10 px-8 mobile:pb-4 pb-4">
                                <div class="text-sm font-bold tracking-widest leading-none text-center text-black">
                                    ĐỌC CÂU CHUYỆN
                                    <i class="fa-solid fa-arrow-up rotate-45 text-black"></i>
                                </div>
                                <div class="text-xs font-medium tracking-widest leading-none text-center text-black"><?php echo get_the_date('d.m.Y') ?>
                                </div>
                            </div>
                        </div>
                    </a>
                <?php } ?>
                <?php if ($my_query->current_post == 6) { ?>
                    <a href="<?php the_permalink() ?>" class="relative mobile:static mobile:flex mobile:flex-col inline-flex col-span-2 space-y-10 align-items-centerjustify-center max-h-[34.375rem]">
                        <img src="<?php the_post_thumbnail_url() ?>" class="w-100 max-h-full h-full" onerror="this.onerror=null; this.src='<?php echo get_template_directory_uri(); ?>//assets/imgs/HO-GUOM.jpg'">
                        <div class="absolute mobile:static mobile:!mt-0 mobile:h-[50%] w-[55%] mobile:w-100 left-0 bottom-0 bg-[#F9F8F1] border border-[#E0DAB8]">
                            <div class="flex flex-col px-8 pt-8">
                                <div class="font-bold text-3xl desktop:text-2xl leading-8 text-[#383A36] mb-4">
                                    <p><?php the_title(); ?></p>
                                </div>
                                <div class="text-sm font-medium desktop:text-sm leading-7 text-[#636366]">
                                    <p><?php echo wp_trim_words(get_the_content(), 40, '...'); ?></p>
                                </div>
                            </div>
                            <div class="flex justify-between pt-16 px-8 mobile:pb-4 pb-4">
                                <div class="text-sm font-bold tracking-widest leading-none text-center text-black">
                                    ĐỌC CÂU CHUYỆN
                                    <i class="fa-solid fa-arrow-up rotate-45 text-black"></i>
                                </div>
                                <div class="text-xs font-medium tracking-widest leading-none text-center text-black"><?php echo get_the_date('d.m.Y') ?>
                                </div>
                            </div>
                        </div>
                    </a>
                <?php } ?>
        <?php }
        } ?>
    </div>
</div>

<?php get_footer(); ?>