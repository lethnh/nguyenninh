<?php
get_header(); ?>

<section class="section-common section-404">
    <div class="container">
        <div class="badge-404 text-center">Error 404</div>
        <div class="d-flex align-items-end">
            <h1>Không tìm thấy trang <br>
                bạn yêu cầu</h1>
            <?php get_template_part('partials/btn', 'common', [
                'is_icon' => true,
                'link' => get_home_url(),
                'text' => 'Về Trang Chủ',
                'class' => 'ms-auto'
            ]); ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>