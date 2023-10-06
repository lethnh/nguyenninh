<?php
/*
* Template Name: Câu chuyện
*/
?>
<?php
get_header(); ?>

<section class="px-14 mobile:px-4 w-100 mobile:mt-4 max-h-[27.75rem] h-[27.75rem] position-relative" style="background:linear-gradient(0deg, rgba(56, 58, 54, 0.72), rgba(56, 58, 54, 0.72)),url(<?= get_field('section_banner')['image']; ?>);background-size:cover;background-repeat: no-repeat; ">>
    <div class=" container absolute-center">
        <div class="d-flex flex-col w-100 title-block-common pt-96 pb-96">
            <p class="sub-title text-white"><?= get_field('section_banner')["small_title"]; ?></p>
            <div class="d-flex align-items-end flex-col flex-md-row">
                <div class="title-main d-flex align-self-center">
                    <p class="text-white"><?= get_field('section_banner')["big_title"]; ?></p>
                </div>
                <div class="sub-title-below d-flex align-self-center ms-auto w-30 mt-auto">
                    <p class="text-white"><?= get_field('section_banner')["sub_title"]; ?></p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-common section-diary">
    <div class="container container-custom-2">
        <div class="block-of-week">
            <div class="d-flex align-items-center">
                <img class="me-4 img-star" src="<?php echo get_template_directory_uri(); ?>/assets/imgs/star.svg" alt="">
                <h1 class="heading-topic">Câu chuyện của tuần</h1>
            </div>
            <div class="mt-64">
                <?php
                // global $wpdb;
                // $week = date("W", time());
                // $year = date("Y", time());
                // $date = new DateTime($year . 'W' . $week);

                // // get monday
                // $monday = $date->format('d');

                // // get month of monday
                // $monday_month = $date->format('m');

                // // prepare range
                // for ($i = 1; $i <= 6; $i++) {
                //     $range[(string) ($date->format('Y') . $date->format('m') . $date->format('d'))] = 0;

                //     $date->modify('+1days');
                // }

                // $range[(string) ($date->format('Y') . $date->format('m') . $date->format('d'))] = 0;

                // // get month of sunday
                // $sunday_month = $date->format('m');
                // $sql = "SELECT
                //             pvc.id,
                //             SUM(COALESCE(pvc.count, 0)) AS post_views
                //         FROM
                //             Cwo0ro_posts wpp
                //             LEFT JOIN Cwo0ro_post_views pvc ON pvc.id = wpp.ID
                //                 AND pvc.type = 0
                //                 AND pvc.period >= " . $year . $monday_month . $monday .
                //     " AND pvc.period <= " . $date->format('Y') . $sunday_month . $date->format('d') .
                //     " WHERE
                //             wpp.post_type IN('post')
                //         GROUP BY
                //             pvc.id
                //         HAVING
                //             post_views > 0
                //         ORDER BY post_views desc";
                // $results = $wpdb->get_results($sql);
                $story_of_week_id = get_field('story_of_week', 'option'); ?>
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
                <img class="me-5 img-star" src="<?php echo get_template_directory_uri(); ?>/assets/imgs/star.svg" alt="">
                <h1 class="heading-topic">Khám phá nhật ký <span class="d-inline-block">Nguyên Ninh</span></h1>
            </div>
            <div class="row list-posts mt-64">
                <?php
                $args_my_query = array(
                    'post_type' => 'post',
                    'order' => 'desc',
                    'posts_per_page' => 7
                );
                $my_query = new WP_Query($args_my_query);
                ?>
                <?php
                if ($my_query->have_posts()) {
                    while ($my_query->have_posts()) {
                        $my_query->the_post();
                ?>
                        <?php if ($my_query->current_post == 0  || $my_query->current_post == 6) : ?>
                            <div class="col-xl-8">
                                <?php get_template_part('partials/card', 'post-main', ['style' => 'custom']); ?>
                            </div>
                        <?php endif; ?>
                        <?php if ($my_query->current_post > 0 && $my_query->current_post < 6) : ?>
                            <div class="col-md-6 col-xl-4">
                                <?php get_template_part('partials/card', 'post-common'); ?>
                            </div>
                        <?php endif; ?>
                <?php }
                } ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>

<script>
    $(document).ready(function() {
        $(".block-of-discovery .post_item").matchHeight({
            byRow: false,
            property: "min-height",
            target: null,
            remove: false,
        });

        $(".block-of-discovery .post_body").matchHeight({
            byRow: false,
            property: "min-height",
            target: null,
            remove: false,
        });
    });
</script>