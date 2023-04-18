<?php

add_post_type_support('post', 'excerpt');

function nguyen_ninh_theme_support()
{
    // Add default posts and comments RSS feed links to head.
    add_theme_support('automatic-feed-links');

    add_theme_support('title-tag');

    // Custom background color.
    // add_theme_support(
    //     'custom-background',
    //     array(
    //         'default-color' => 'f5efe0',
    //     )
    // );

    /*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
    add_theme_support('post-thumbnails');
    add_theme_support('menus');

    // Custom logo.
    $logo_width  = 120;
    $logo_height = 90;

    // If the retina setting is active, double the recommended width and height.
    if (get_theme_mod('retina_logo', false)) {
        $logo_width  = floor($logo_width * 2);
        $logo_height = floor($logo_height * 2);
    }

    add_theme_support(
        'custom-logo',
        array(
            'height'      => $logo_height,
            'width'       => $logo_width,
            'flex-height' => true,
            'flex-width'  => true,
        )
    );
}

add_action('after_setup_theme', 'nguyen_ninh_theme_support');

/**
 * Register navigation menus uses wp_nav_menu in four places.
 */
function nguyen_ninh_menus()
{
    $locations = array(
        'primary'  => __('Desktop Menu', 'iee'),
        'mobile'   => __('Mobile Menu', 'iee'),
        'footer'   => __('Footer Menu', 'iee'),
        'social'   => __('Social Menu', 'iee'),
    );

    register_nav_menus($locations);
}

add_action('init', 'nguyen_ninh_menus');

/**
 * Regiter stylesheet
 * Vendor and custom file
 */
add_action('wp_enqueue_scripts', 'nguyen_ninh_theme_styles');
function nguyen_ninh_theme_styles()
{

    // Library
    // wp_enqueue_style('iee-slick', get_template_directory_uri() . '/assets/css/library/slick.min.css');
    wp_enqueue_style('nguyen-ninh-slick-theme', get_template_directory_uri() . '/assets/css/glide.min.css');
    wp_enqueue_style('nguyen-ninh-bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), nguyen_ninh_theme_version());
    wp_enqueue_style('nguyen-ninh-hamburger', get_template_directory_uri() . '/assets/css/hamburgers.css', array(), nguyen_ninh_theme_version());
    // wp_enqueue_style('iee-fullcalendar', get_template_directory_uri() . '/assets/css/library/fullcalendar.min.css', array(), nguyen_ninh_theme_version());
    // wp_enqueue_style('iee-fullcalendar', get_template_directory_uri() . '/assets/css/library/fancybox.css', array(), nguyen_ninh_theme_version());

    // // Common
    wp_enqueue_style('nguyen-ninh-base', get_template_directory_uri() . '/assets/css/common.css');
    // wp_enqueue_style('iee-header', get_template_directory_uri() . '/assets/css/common/header.css');
    // wp_enqueue_style('iee-footer', get_template_directory_uri() . '/assets/css/common/footer.css');

    // // Page
    // wp_enqueue_style('iee-event', get_template_directory_uri() . '/assets/css/page/event.css', array(), nguyen_ninh_theme_version());
    // wp_enqueue_style('iee-about', get_template_directory_uri() . '/assets/css/page/about-us.css', array(), nguyen_ninh_theme_version());

    // wp_enqueue_style('iee-fullcalendar-custom', get_template_directory_uri() . '/assets/css/fullcalendar-custom.css', array(), nguyen_ninh_theme_version());
    // wp_enqueue_style('iee-common', get_template_directory_uri() . '/assets/css/common.css', array(), nguyen_ninh_theme_version());
    // wp_enqueue_style('iee-recruit', get_template_directory_uri() . '/assets/css/content-recruit.css', array(), nguyen_ninh_theme_version());
    wp_enqueue_style('nguyen-ninh-style', get_template_directory_uri() . '/style.css', array(), nguyen_ninh_theme_version());
    wp_enqueue_style('main-css', get_theme_file_uri('/build/index.css'));
}


/**
 * Regiter JavaScript
 * Vendor and custom file
 */
add_action('wp_enqueue_scripts', 'nguyen_ninh_theme_name_scripts');
function nguyen_ninh_theme_name_scripts()
{
    wp_deregister_script('jquery');
    wp_enqueue_script('jquery', get_template_directory_uri() . '/assets/js/jquery-3.6.4.min.js', array(), true, false);
    wp_enqueue_script('nguyen-ninh-bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array('jquery'), true, true);
    wp_enqueue_script('nguyen-ninh-slick-js', get_template_directory_uri() . '/assets/js/glide.js', array('jquery'), true, true);
    wp_enqueue_script('nguyen-ninh-match-height-js', get_template_directory_uri() . '/assets/js/jquery.matchHeight.js', array('jquery'), true, true);
    // wp_enqueue_script('iee-matchHeight-js', get_template_directory_uri() . '/assets/js/library/jquery.matchHeight.js', array('jquery'), true, true);
    // wp_enqueue_script('iee-fullcalendar', get_template_directory_uri() . '/assets/js/library/fullcalendar.min.js', array('jquery'), true, true);
    // wp_enqueue_script('iee-fullcalendar-vi', get_template_directory_uri() . '/assets/js/library/fullcalendar_vi.js', array('jquery'), true, true);
    // wp_enqueue_script('iee-smooth-scrollbar', get_template_directory_uri() . '/assets/js/library/smooth-scrollbar.js', array('jquery'), true, true);
    wp_enqueue_script('nguyen-ninh-common-js', get_template_directory_uri() . '/assets/js/common.js', array('jquery'), true, true);
}

function nguyen_ninh_theme_version()
{
    return wp_get_theme(get_stylesheet())->get('Version');
}

//Class custom layout menu
class Walker_Nav_Menu_Dropdown extends Walker_Nav_Menu
{
    public function start_lvl(&$output, $depth = 0, $args = null)
    {
        $output .= "\n<ul class=\"sub-menu menu-footer-child\">\n";
    }

    public function start_el(&$output, $item, $depth = 0, $args = null, $id = 0)
    {
        add_filter('nav_menu_css_class', [$this, 'add_class_to_wp_nav_menu'], 10, 2);
        add_filter('nav_menu_link_attributes', [$this, 'add_class_to_a_tag_sub_nav'], 10, 4);
        parent::start_el($output, $item, $depth, $args, $id);
    }

    function add_class_to_a_tag_sub_nav($atts, $item, $args, $depth)
    {
        // if ($item->type != 'post_type') {     // 0 means there is no parent
        // 	$atts['class'] = 'd-block color-gray-400';
        // }
        return $atts;
    }

    function add_class_to_wp_nav_menu($classes, $item)
    {
        if (0 === wp_get_post_parent_id($item->object_id)) {     // 0 means there is no parent
            array_push($classes, 'menu-item-no-parent');
        }
        // hasChildren is a Custom Function
        if ($this->has_children($item->object_id)) {
            array_push($classes, 'has-child');
        }

        return $classes;
    }

    public function has_children($pid)
    {
        $children = get_pages("child_of={$pid}");
        return ($children);
    }
} //End class


function add_additional_class_on_a($classes, $item, $args)
{
    if (isset($args->add_a_class)) {
        $classes['class'] = $args->add_a_class;
    }
    return $classes;
}

add_filter('nav_menu_link_attributes', 'add_additional_class_on_a', 1, 3);

function _namespace_menu_item_class($classes, $item)
{
    $classes[] = "nav-item"; // you can add multiple classes here
    return $classes;
}

add_filter('nav_menu_css_class', '_namespace_menu_item_class', 10, 2);


add_filter('wp_nav_menu_objects', 'add_menu_parent_class');
function add_menu_parent_class($items)
{
    $parents = array();

    foreach ($items as $item) {
        if (in_array($item->ID, $parents)) {
            $item->classes[] = 'current-menu-parent';
        }
    }

    return $items;
}

/**
 * Create theme options by Advanced Custom Fields PRO
 */
if (function_exists('acf_add_options_page')) {
    acf_add_options_page(array(
        'page_title'     => 'Theme option',
        'menu_title'    => 'Theme option',
        'menu_slug'     => 'theme-option',
        'capability'    => 'edit_posts',
        'redirect'    => false
    ));
}

/* * GLOBAL CUSTOM FIELD * */
function set_theme_option_global()
{
    // DEFINE GALLERY
    global $theme_options;
    $theme_options = array(
        'facebook' => get_field('facebook', 'option'),
        'instagram' => get_field('instagram', 'option'),
        'logo' => get_field('logo', 'option'),
        'phone_number' => get_field('phone_number', 'option'),
        'email' => get_field('email', 'option'),
        'hotline' => get_field('hotline', 'option'),
        'address' => get_field('address', 'option'),
    );
}
add_action('init', 'set_theme_option_global');
