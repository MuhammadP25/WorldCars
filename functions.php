<?php

/**
 ** Functions To Add My Custom Styles  
 ** By @AlQadri
 ** wp_enqueue_style()
 */
require_once('wp-bootstrap-navwalker.php');

function academy_styles()
{

    wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/css/bootstrap.min.css');
    wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/css/bootstrap.min.css.map');
    wp_enqueue_style('fontawesome-css', get_template_directory_uri() . '/css/fontawesome.min.css');
    wp_enqueue_style('main', get_template_directory_uri() . '/css/main.css');
}

/**
 ** Functions To Add My Custom Scripts
 ** wp_enqueue_script()
 */

function academy_scripts()
{
    // Remove Registration for old Jquery
    wp_deregister_script('jquery');
    // Register A New Jquery In Footer
    wp_register_script('jquery', includes_url('/js/jquery/jquery.js'), false, '', true);
    // Enqueue The New Jquery
    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrab-js', get_template_directory_uri() . '/js/bootstrap.min.js', array(), false, true);
    wp_enqueue_script('bootstrab-js', get_template_directory_uri() . '/js/bootstrap.min.js.map', array(), false, true);
    wp_enqueue_script('fontawesome-js', get_template_directory_uri() . '/js/fontawesome.min.js', array(), false, true);
    wp_enqueue_script('main-js', get_template_directory_uri() . '/js/main.js', array(), false, true);
}

/**
 * Add Fetuered Image Support
 */
add_theme_support('post-thumbnails');

/**
 * Add Custom Menu Support
 */

function academy_register_custom_menu()
{
    // Register Custom Menus
    register_nav_menus(array(
        'bootstrap-menu' => 'Navigation Bar',
        'footer-menu'    => 'Footer Nav Bar'
    ));
}

function cars_bootstrap_menu()
{
    // 
    wp_nav_menu(array(
        'container'      => false,
        'menu_class'     => 'nav navbar-nav',
        'theme_location' => 'bootstrap-menu',
        'depth'          => 2,
        'walker'         => new WP_Bootstrap_Navwalker(),
    ));
}
function cars_footer_menu()
{
    // 
    wp_nav_menu(array(
        'container'      => false,
        'menu_class'     => 'nav navbar-nav',
        'theme_location' => 'footer-menu',
        'depth'          => 2,
        'walker'         => new WP_Bootstrap_Navwalker(),
    ));
}

/**
 * Add Sidebar Support
 */

function academy_main_sidebar() {

    register_sidebar(array(
        'name'              => 'Main Sidebar',
        'id'                => 'main-sidebar',
        'description'       => 'The Main Sidebar Will Show in All Pages',
        'class'             => 'main-sidebar',
        'before_widget'     => '<div class="widget-content">',
        'after_widget'      => '</div>',
        'before_title'      => '<h3 class="widget-title">',
        'after_title'       => '<h3>'
    ));
}

function academy_ٍslider_widget() {

    register_sidebar(array(
        'name'              => 'Slider Widget',
        'id'                => 'slider-widget',
        'description'       => 'The Slider Section will appear on Home Page',
        'class'             => 'slider-widget',
        'before_widget'     => '<div class="widget-content">',
        'after_widget'      => '</div>',
        'before_title'      => '<h3 class="widget-title">',
        'after_title'       => '<h3>'
    ));
}

function video_widget() {

    register_sidebar(array(
        'name'              => 'Video Widget',
        'id'                => 'video-widget',
        'description'       => 'The Search Section will appear on Home Page',
        'class'             => 'video-widget'
    ));
}
function footer_widget() {

    register_sidebar(array(
        'name'              => 'Footer Widget',
        'id'                => 'footer-widget',
        'description'       => 'The Search Section will appear on Home Page',
        'class'             => 'footer-widget'
    ));
}

/**
 * Customize The Excerpt Word Length & Read More
 */
function alfurqan_excerpt_length(){
    if(is_category()){
        return 40;
    } elseif(is_single()) {
        return 20;
    } elseif(is_search()) {
        return 40;
    } elseif(is_author()) {
        return 15;        
    } else {
        return 32;
    }
}
function alfurqan_excerpt_more(){
    return ' ...';
}


/**
 * Add Actions
 * add_action()
 */
// Add Css Style
add_action('wp_enqueue_scripts', 'academy_styles');
// Add Js Script
add_action('wp_enqueue_scripts', 'academy_scripts');
// Register Custom Menus
add_action('init', 'academy_register_custom_menu');
// Register Main Sidebar
add_action('widgets_init', 'academy_main_sidebar');
// Register Slider Widget
add_action('widgets_init', 'academy_ٍslider_widget');
// Register Slider Widget
add_action('widgets_init', 'video_widget');
// Register Slider Widget
add_action('widgets_init', 'footer_widget');


/**
 * Add Filters
 * add_filter()
 */

add_filter('excerpt_length','alfurqan_excerpt_length');
add_filter('excerpt_more','alfurqan_excerpt_more');
