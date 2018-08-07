<?php


function register_menu() {
    register_nav_menus(
        array(
            'top-menu' => __( 'Header Menu' ),
            'left-menu' => __( 'Extra Menu' )
        )
    );
}
function add_classes_on_li($classes, $item, $args) {
    $classes[] = 'nav-item';
    return $classes;
}
function add_menuclass($ulclass) {
    return preg_replace('/<a /', '<a class="nav-link"', $ulclass);
}
function menuFiltras($menu) {

    $menu = str_replace("class=\"sub-menu\"", "class=\"dropdown-menu\"", $menu);

    return $menu;
}
function wpb_adding_styles() {
    wp_register_style('my_stylesheet', plugins_url('stilius.css', __FILE__));
    wp_enqueue_style('my_stylesheet');
}
add_action( 'wp_enqueue_scripts', 'wpb_adding_styles' );



add_filter('wp_nav_menu','menuFiltras');
add_filter('wp_nav_menu','add_menuclass');
add_filter('nav_menu_css_class','add_classes_on_li',1,3);
add_action('init', 'register_menu');
