<?php
get_header(); ?>

<section class="section-common section-404">
    <div class="container">
        <div class="badge-404 text-center">Error 404</div>
        <div class="d-flex align-items-end">
            <h1>Không tìm thấy trang <br>
            bạn yêu cầu</h1>
            <a href="<?= get_home_url(); ?>" class="btn btn-common ms-auto">Về Trang Chủ<i class="fa-solid fa-arrow-up rotate-45"></i></a>
        </div>
    </div>
</section>

<?php get_footer(); ?>