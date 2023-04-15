<?php
/*
* Template Name: Câu chuyện
*/
?>
<?php
get_header(); ?>

<section class="px-14 mobile:px-4 w-100 mobile:mt-4 max-h-[27.75rem] h-[27.75rem] position-relative" style="background:linear-gradient(0deg, rgba(56, 58, 54, 0.72), rgba(56, 58, 54, 0.72)),url(<?= get_field('banner'); ?>);background-size:cover;background-repeat: no-repeat; ">>
    <div class=" container absolute-center">
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
            <div class="mt-64 max-h-[34.375rem]">
                <?php
                global $wpdb;
                $week = date("W", time());
                $year = date("Y", time());
                $date = new DateTime($year . 'W' . $week);

                // get monday
                $monday = $date->format('d');

                // get month of monday
                $monday_month = $date->format('m');

                // prepare range
                for ($i = 1; $i <= 6; $i++) {
                    $range[(string) ($date->format('Y') . $date->format('m') . $date->format('d'))] = 0;

                    $date->modify('+1days');
                }

                $range[(string) ($date->format('Y') . $date->format('m') . $date->format('d'))] = 0;

                // get month of sunday
                $sunday_month = $date->format('m');
                $sql = "SELECT
                            pvc.id,
                            SUM(COALESCE(pvc.count, 0)) AS post_views
                        FROM
                            Cwo0ro_posts wpp
                            LEFT JOIN Cwo0ro_post_views pvc ON pvc.id = wpp.ID
                                AND pvc.type = 0
                                AND pvc.period >= " . $year . $monday_month . $monday .
                    " AND pvc.period <= " . $date->format('Y') . $sunday_month . $date->format('d') .
                    " WHERE
                            wpp.post_type IN('post')
                        GROUP BY
                            pvc.id
                        HAVING
                            post_views > 0
                        ORDER BY post_views desc";
                $results = $wpdb->get_results($sql);
                $story_of_week_id = $results[0]->id; ?>
                <?php get_template_part('partials/card', 'post-main', [
                    'style_image' => 'padding-bottom: 41%;',
                    'position_body' => 'right-0 bottom-0',
                    'post_id' => $story_of_week_id,
                    'is_flag_story_of_week' => true,
                ]); ?>
            </div>
        </div>

        <div class="section-diary-line mx-auto mt-96 mb-96"></div>

        <div class="block-of-discovery">
            <div class="d-flex align-items-center">
                <img class="me-5" src="<?php echo get_template_directory_uri(); ?>/assets/imgs/star.svg" alt="">
                <h1 class="heading-topic">Khám phá nhật ký Nguyên Ninh</h1>
            </div>
            <div class="grid grid-cols-3 justify-center gap-10 w-100 mt-64">
                <?php
                $args_my_query = array(
                    'post_type' => 'post',
                    'order' => 'asc',
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