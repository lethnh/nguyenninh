<?php
/*
* Template Name:Article Detail Page
*/
?>
<?php
get_header(); ?>
<?php if (have_posts()) {
    while (have_posts()) {
        the_post(); ?>
        <div class="px-14 bg-[#F9F8F1]">
            <div class="flex h-[37.5rem]">
                <div class="flex flex-col w-[45%] mr-20 self-center h-full">
                    <div class="mt-28">
                        <p class="uppercase font-medium text-base leading-7 text-[#383A36]">Nhật ký</p>
                    </div>
                    <div class="mt-8 flex-[1] mb-16">
                        <p class="font-prata text-7xl !leading-[5.25rem] text-[#383A36]"><?php the_title(); ?></p>
                        <!-- <p class="font-prata text-7xl !leading-[5.25rem] text-[#383A36]">Một thức quà quý từ thủ đô Hà Nội</p> -->
                    </div>
                    <div class="">
                        <!-- <p class="font-medium text-sm text-[#52544F]">Đăng vào lúc 14:10 | 14.10.2022</p> -->
                        <p class="font-medium text-sm text-[#52544F] mb-8">Đăng vào lúc <?php echo get_the_date('h:i') ?> | <?php echo get_the_date('d.m.Y') ?></p>
                        <div class="w-3/4 border-[0.5px] border-[#e6e6e6]"></div>
                    </div>

                </div>
                <div class="max-h-[37.5rem] w-1/2">
                    <img class="h-full w-100" src="<?php the_post_thumbnail_url() ?>">
                </div>
            </div>
        </div>
        <div class="px-14 py-24 bg-[#F9F8F1]">
            <svg class="mx-auto" width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M24 4C21.4918 13.7869 13.7869 21.4918 4 24C13.7869 26.5082 21.4918 34.2131 24 44C26.5082 34.2131 34.2131 26.5082 44 24C34.2131 21.4918 26.5082 13.7869 24 4Z" fill="#383A36" />
            </svg>
            <div class="w-[45%] font-raleway mx-auto font-medium text-base leading-7 my-16">
                <?php the_content(); ?>
            </div>
            <svg class="mx-auto" width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M24 4C21.4918 13.7869 13.7869 21.4918 4 24C13.7869 26.5082 21.4918 34.2131 24 44C26.5082 34.2131 34.2131 26.5082 44 24C34.2131 21.4918 26.5082 13.7869 24 4Z" fill="#383A36" />
            </svg>
        </div>

<?php }
} ?>
<div class="px-14 py-24 bg-[#F4F2E6]">
    <div class="">
        <p class="font-prata font-normal text-6xl !leading-[74px]">Những bài viết khác</p>
    </div>
    <div class="mt-16 grid grid-cols-3 justify-center gap-10 w-100 mobile:block =">
        <?php
        for ($x = 0; $x < 3; $x += 1) {
        ?>
            <div class="inline-flex flex-col  align-items-centermax-h-[600px] mobile:mt-8">
                <img src="<?php echo get_template_directory_uri(); ?>//assets/imgs/HO-GUOM.jpg" alt="" class="h-[50%] w-100">
                <div class="bg-[#F9F8F1] border border-[#E0DAB8] h-[50%] mt-0 flex flex-col justify-between">
                    <div class="flex flex-col px-8 pt-8">
                        <div class="font-bold text-3xl desktop:text-2xl leading-8 text-[#383A36] mb-4">
                            <p>Món quà từ những người phụ nữ trong gia đình</p>
                        </div>
                        <div class="text-sm font-medium desktop:text-sm leading-7 text-[#636366]">
                            <p>Có một điều mà thực khách có thể ít biết tới, đó là bánh cốm Nguyên Ninh chủ yếu được làm
                                ra bởi những người phụ nữ trong gia đình. Thương hiệu...</p>
                        </div>
                    </div>
                    <div class="flex justify-between pt-10 px-8 mobile:pb-4 pb-4">
                        <div class="text-sm font-bold tracking-widest leading-none text-center text-black">
                            ĐỌC CÂU CHUYỆN
                            <i class="fa-solid fa-arrow-up rotate-45 text-black"></i>
                        </div>
                        <div class="text-xs font-medium tracking-widest leading-none text-center text-black">11.02.2022
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>
<?php get_footer();
