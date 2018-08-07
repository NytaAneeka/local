<?php
define("VER", '1.0');

//Adding theme support
load_theme_textdomain( 'dkv' );
add_theme_support( 'title-tag' );
add_theme_support( 'html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption') );

//define all CSS & JS
function wpdocs_theme_name_scripts() {
    //css
    wp_enqueue_style( "google_font", "https://fonts.googleapis.com/css?family=Poppins:100,300,500" );

    $cssArray = array('linearicons', 'owl.carousel','font-awesome.min', 'nice-select','magnific-popup','bootstrap','main');
    foreach ($cssArray as $cssFile){
        wp_enqueue_style( "$cssFile", get_template_directory_uri() . "/css/$cssFile.css",false );
    }

    wp_enqueue_style( "style", get_template_directory_uri() . "/style.css",false,VER );

    //js
    wp_deregister_script('jquery');
    wp_enqueue_script( "jquery", get_template_directory_uri() . "/js/jquery-2.2.4.min.js", array(), '', true );
    $jsArray = array('popper.min','bootstrap.min','jquery.ajaxchimp.min','owl.carousel.min','jquery.nice-select.min','jquery.magnific-popup.min','jquery.counterup.min','waypoints.min','main');
    foreach ($jsArray as $jsFile){
        wp_enqueue_script( "$jsFile", get_template_directory_uri() . "/js/$jsFile.js", array('jquery'), '', true );
    }
}
add_action( 'wp_enqueue_scripts', 'wpdocs_theme_name_scripts' );

//Init actions
register_nav_menu( 'primary', __( 'Primary Menu', 'dkv' ) );

//Load sidebars & widgets
/**
 * Register our sidebars and widgetized areas.
 *
 */
function dkv_widgets_init() {

    register_sidebar( array(
        'name'          => 'Footer sidebar 1',
        'id'            => 'footer-sidebar-1',
        'before_widget' => '<div>',
        'after_widget'  => '</div>',
        'before_title'  => '<h6 class="widget-title text-uppercase mb-20">',
        'after_title'   => '</h6>',
    ) );

    register_sidebar( array(
        'name'          => 'Footer sidebar 2',
        'id'            => 'footer-sidebar-2',
        'before_widget' => '<div>',
        'after_widget'  => '</div>',
        'before_title'  => '<h6 class="widget-title text-uppercase mb-20">',
        'after_title'   => '</h6>',
    ) );

    register_sidebar( array(
        'name'          => 'Footer sidebar 3',
        'id'            => 'footer-sidebar-3',
        'before_widget' => '<div>',
        'after_widget'  => '</div>',
        'before_title'  => '<h6 class="widget-title text-uppercase mb-20">',
        'after_title'   => '</h6>',
    ) );

    register_sidebar( array(
        'name'          => 'Footer sidebar 4',
        'id'            => 'footer-sidebar-4',
        'before_widget' => '<div>',
        'after_widget'  => '</div>',
        'before_title'  => '<h6 class="widget-title text-uppercase mb-20">',
        'after_title'   => '</h6>',
    ) );

}
add_action( 'widgets_init', 'dkv_widgets_init' );

//check if sidebar has widgets
function is_sidebar_has_widgets($index) {

    $widgetcolums = wp_get_sidebars_widgets();

    if ($widgetcolums[$index])
        return $widgetcolums;

    return false;
}


//New menu Walker
class Custom_menu_walker extends Walker_Nav_Menu {
    function start_lvl( &$output, $depth = 0, $args = array() ) {
        $indent = str_repeat("\t", $depth);
        $output .= "\n$indent\n";
    }
    function end_lvl( &$output, $depth = 0, $args = array() ) {
        $indent = str_repeat("\t", $depth);
        $output .= "$indent\n";
    }
    function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
        $indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';
        $class_names = $value = '';
        $classes = empty( $item->classes ) ? array() : (array) $item->classes;
        $classes[] = 'menu-item-' . $item->ID;
        $class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args ) );
        $class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';
        $id = apply_filters( 'nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args );
        $id = $id ? ' id="' . esc_attr( $id ) . '"' : '';
        $output .= $indent . '';
        $attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
        $attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
        $attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
        $attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';
        $item_output = $args->before;
        $item_output .= '<a ' . $id . $class_names . $attributes .'>';
        $item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
        $item_output .= '</a>';
        $item_output .= $args->after;
        $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
    }
    function end_el( &$output, $item, $depth = 0, $args = array() ) {
        $output .= "\n";
    }
}

//Register Gutenberg Blocks
function gutenberg_boilerplate_block() {
    wp_register_script(
        'dkv-banner',
        get_template_directory_uri() . '/blocks/banner.js',
        array( 'wp-blocks', 'wp-element' )
    );

    register_block_type( 'dkv-banner', array(
        'editor_script' => 'dkv-banner',
    ) );
}
//add_action( 'init', 'gutenberg_boilerplate_block' );

