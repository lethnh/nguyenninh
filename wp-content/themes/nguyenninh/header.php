<?php
global $theme_options;
// Setup defaults
$array_defaults = array(
    'is_body_main' => false
);

$args = wp_parse_args($args, $array_defaults);
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, target-densityDpi=device-dpi" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>//assets/font-awesome/css/style.css">

    <?php wp_head(); ?>
</head>

<body <?php body_class($args['is_body_main'] ? 'bg-gray-02' : 'bg-secondary-04'); ?>>
    <!-- Header -->
    <header id="header-main" class="fixed-top <?= $args['is_body_main'] ? 'bg-gray-02' : 'bg-secondary-04'; ?>">
        <nav class="navbar navbar-expand-lg navbar-custom">
            <div class="container">

                <a class="navbar-brand" href="<?= get_home_url(); ?>">Nguyên Ninh</a>
                <button class="navbar-toggler hamburger hamburger--collapse" type="button" id="btn-hamburger">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'primary',
                        'menu_class' => 'navbar-nav ms-auto mb-2 mb-lg-0 menu-header',
                        'menu_id' => 'main-menu',
                        // 'walker'         => new Walker_Nav_Menu_Dropdown(),
                        'add_a_class'     => 'nav-link hover-underline-animation',
                        'container'       => false,
                    ));
                    ?>
                    <?php get_template_part('partials/btn', 'common', [
                        'text' => $theme_options['phone_number'],
                        'link' => 'tel:' . $theme_options['phone_number'],
                        'class' => 'btn-call'
                    ]); ?>
                </div>
            </div>
        </nav>
    </header>
    <!-- End Header -->