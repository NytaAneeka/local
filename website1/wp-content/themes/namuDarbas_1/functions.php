<?php

//This function includes namudarbasCSS.css and namudarbasJS.js
function namuDarbas_script_enqueue() {
    //bootstrap css
    wp_enqueue_style( 'bootstrap_css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css' );

    //my css
    wp_enqueue_style('twentyfifteen',get_template_directory_uri() . '/css/editor-style.css',array(),'1.0.0','all');
    wp_enqueue_style('twentyfifteen1',get_template_directory_uri() . '/rtl.css',array(),'1.0.0','all');
    wp_enqueue_style('twentyfifteen2',get_template_directory_uri() . '/style.css',array(),'1.0.0','all');


    wp_enqueue_style('customstyle',get_template_directory_uri() . '/css/namudarbasCSS.css',array(),'1.0.0','all');


    //bootstrap scripts
    wp_enqueue_script( 'bootstrap_jquery', 'https://code.jquery.com/jquery-3.3.1.slim.min.js');
    wp_enqueue_script( 'bootstrap_js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js');
    wp_enqueue_script( 'bootstrap_popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js');

    //my script
    wp_enqueue_script('customjs',get_template_directory_uri() . '/js/namudarbasJS.js',array(),'1.0.0', true);
}

add_action( 'wp_enqueue_scripts', 'namuDarbas_script_enqueue');


//Adds navbar
function register_menu() {

    register_nav_menus(
        array(
            'primary' => __( 'Header Menu' ),

            'secondary' => __( 'Footer Menu' ),

            'third' => __('Second Footer Menu'),

            'social' => __('Social Menu')

        )
    );
}

add_action( 'init', 'register_menu' );

function twentysixteen_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Sidebar', 'twentysixteen' ),
        'id'            => 'sidebar-1',
        'description'   => __( 'Add widgets here to appear in your sidebar.', 'twentysixteen' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Content Bottom 1', 'twentysixteen' ),
        'id'            => 'sidebar-2',
        'description'   => __( 'Appears at the bottom of the content on posts and pages.', 'twentysixteen' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Content Bottom 2', 'twentysixteen' ),
        'id'            => 'sidebar-3',
        'description'   => __( 'Appears at the bottom of the content on posts and pages.', 'twentysixteen' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'twentysixteen_widgets_init' );



// Register and load the widget
function oras_widget() {
    register_widget( 'oras' );
}
add_action( 'widgets_init', 'oras_widget' );

/*
 Plugin Name: oras
 Description: Orai Klaipedoje
  */

class oras extends WP_Widget {
    function __construct(){
        parent::__construct(
            'oras',
            __('Oro widget','oras_domain'),
            array('describtion'=> __('Orai Klaipedoje','oras_domain'),)
        );
    }

    public function widget( $args, $instance ) {

        $title = apply_filters( 'widget_title', $instance['title'] );

        echo $args['before_widget'];

        if (!empty($title))
            echo $args['before_title'].$title.$args['after_title'];
        echo __('<h2 id="orai-title">Orai Klaipedoje</h2>','oras_domain');

        ?>
        <div id="openweathermap-widget-12"></div>
        <script>window.myWidgetParam ? window.myWidgetParam : window.myWidgetParam = [];
            window.myWidgetParam.push({id: 12,cityid: '598098',appid: '92807ecc88e271d2593d10c6c57db558',units: 'metric',containerid: 'openweathermap-widget-12',  });
            (function() {var script = document.createElement('script');
                script.async = true;
                script.charset = "utf-8";
                script.src = "//openweathermap.org/themes/openweathermap/assets/vendor/owm/js/weather-widget-generator.js";
                var s = document.getElementsByTagName('script')[0];s.parentNode.insertBefore(script, s);
            })();
        </script>

        <?php

        echo $args['after_widget'];

    }

    public function form( $instance ) {

        if ( isset( $instance[ 'title' ] ) ) {

            $title = $instance[ 'title' ];

        }else {

            $title = __( 'Default title', 'oras_domain' );

        }

// Administravimo forma

        ?>

        <div id="openweathermap-widget-12" class="col-md-3"></div>
        <script>window.myWidgetParam ? window.myWidgetParam : window.myWidgetParam = [];
            window.myWidgetParam.push({id: 12,cityid: '598098',appid: '92807ecc88e271d2593d10c6c57db558',units: 'metric',containerid: 'openweathermap-widget-12',  });
            (function() {var script = document.createElement('script');
                script.async = true;script.charset = "utf-8";
                script.src = "//openweathermap.org/themes/openweathermap/assets/vendor/owm/js/weather-widget-generator.js";
                var s = document.getElementsByTagName('script')[0];
                s.parentNode.insertBefore(script, s);
            })();
        </script>

        <?php

    }
    public function update( $new_instance, $old_instance ) {
        $instance = array();
        $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
        return $instance;
    }

}


//metabox
add_action('admin_init','custom_metabox');

function custom_metabox () {
    add_meta_box('custom_metabox_01','Custom Metabox','custom_metabox_field','post','normal','low');
}

function custom_metabox_field () {

    global $post;
    $data = get_post_custom($post->ID);
    $val = isset($data['imones_pav']) ? esc_attr($data['imones_pav'][0]):'no value';
    $metai = isset($data['imones_metai']) ? esc_attr($data['imones_metai'][0]):'no value';
    $darbuotojai = isset($data['darbuotoju_sk']) ? esc_attr($data['darbuotoju_sk'][0]):'no value';
    $likviduota = isset($data['isactive']) ? esc_attr($data['isactive'][0]):'0';
    $logo = isset($data['logo']) ? esc_attr($data['logo'][0]):'';
    $sritis= isset($data['sritis']) ? esc_attr($data['sritis'][0]):'';

    echo '<label for="imones_pav">Imones pavadinimas:<br></label><input type="text" name="imones_pav" id="imones_pav" value="'. $val .'"> <br>';
    echo '<label for="imones_metai">Įmonės registracijos metai:<br></label><input type="text" name="imones_metai" id="imones_metai" value="'. $metai .'"> <br>';
    echo '<label for="darbuotoju_sk">Darbuotojų Skaičius:<br></label><input type="text" name="darbuotoju_sk" id="darbuotoju_sk" value="'. $darbuotojai .'"><br>';
    echo '<label for="isactive">Ar įmonė likviduota:<br></label>';
    if($likviduota  == 1) {
        echo '<input type="radio" name="isactive" value="0" > Ne <br>';
        echo '<input type="radio" name="isactive" value="1" checked> Taip <br>';
    }else {
        echo '<input type="radio" name="isactive" value="0" checked> Ne <br>';
        echo '<input type="radio" name="isactive" value="1"> Taip <br>';
    }
    echo '<label for="logo">Imones logotipas:<br></label><input type="file" name="logo" id="logo" value="'. $logo .'"><br>';?>
    <label for="sritis">Imones kategorija:<br></label>
    <select name="sritis" id="sritis">
        <option value="buh" <?php echo ($sritis == 'buh') ? 'selected' : ''; ?>>Buhalterija</option>
        <option value="stat" <?php echo ($sritis == 'stat') ? 'selected' : ''; ?>>Statyba</option>
        <option value="flor" <?php echo ($sritis == 'flor') ? 'selected' : ''; ?>>Floristika</option>
        <option value="it" <?php echo ($sritis == 'it') ? 'selected' : ''; ?>>IT</option>
    </select>
<?php

}

add_action("save_post","save_detail");

function save_detail(){
    global $post;
    if (define('DOING_AUTOSAVE',false) && DOING_AUTOSAVE) {
        return $post->ID;
    }

    update_post_meta($post->ID,"imones_pav",$_POST["imones_pav"]);
    update_post_meta($post->ID,"imones_metai",$_POST["imones_metai"]);
    update_post_meta($post->ID,"darbuotoju_sk",$_POST["darbuotoju_sk"]);
    update_post_meta($post->ID,"isactive",$_POST["isactive"]);
    update_post_meta($post->ID,"logo",$_POST["logo"]);
    update_post_meta($post->ID,"sritis",$_POST["sritis"]);

}

//Shortcode

function atsitiktinisSk( $atts , $content = null ) {

    return (rand(1,100));

}
add_shortcode( 'atsitiktinis', 'atsitiktinisSk' );

//rodyt ora

function showWeather($rodytora, $content = null) {
    ?>

<div id="openweathermap-widget-12"></div>
<script>
    window.myWidgetParam ? window.myWidgetParam : window.myWidgetParam = [];
    window.myWidgetParam.push({id: 12,cityid: '598098',appid: '92807ecc88e271d2593d10c6c57db558',units: 'metric',containerid: 'openweathermap-widget-12'  });
    (function() {var script = document.createElement('script');
        script.async = true;
        script.charset = "utf-8";
        script.src = "//openweathermap.org/themes/openweathermap/assets/vendor/owm/js/weather-widget-generator.js";
        var s = document.getElementsByTagName('script')[0];s.parentNode.insertBefore(script, s);
    })();
</script>

<?php
}

add_shortcode( 'oras', 'showWeather' );

//function oruShortcode ($atts, $content = null) {
//    $orai = json_decode(file_get_contents('{"coord":{"lon":21.12,"lat":55.72},"weather":[{"id":800,"main":"Clear","description":"clear sky","icon":"01d"}],"base":"stations","main":{"temp":25,"pressure":1019,"humidity":83,"temp_min":25,"temp_max":25},"visibility":10000,"wind":{"speed":2.1,"deg":330},"clouds":{"all":0},"dt":1532964000,"sys":{"type":1,"id":5435,"message":0.0658,"country":"LT","sunrise":1532918282,"sunset":1532976275},"id":598098,"name":"Klaipeda","cod":200}'));
//    return $orai->main->temp;
//}
//add_shortcode('orai','oruShortcode');

