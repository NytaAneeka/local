<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!--FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab" rel="stylesheet">
    <title>Namu darbas</title>

    <!-- This wp_head() includes custom css file (namuDarbasCSS.css) -->
    <?php wp_head(); ?>
</head>

<?php

//Checks if page is front page,to decide which class to add
if( is_front_page() ) :
    $namudb_classes= array('namudarbai-class','my-class');
else:
    $namudb_classes = array('not-nd-class');
endif;

?>
<!--Adds classes to desired pages(front page in this case),for this matter it added namudarbai-class and my-class classes to the frontpage,for other pages like Blog,Contacts it added not-nd-class -->
<body <?php  body_class( $namudb_classes ); ?>>

<!-- Adds top navbar -->
<?php wp_nav_menu(array(
    'theme_location'=>'primary',
    'container'=>'',
    'menu_class'=>'navbar navbar-expand-lg navbar-light bg-light',
) );
?>