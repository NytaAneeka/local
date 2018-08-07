<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta charset="UTF-8">
    <?php wp_head(); ?>
</head>
<body>
<div class="oz-body-wrap">
    <!-- Start Header Area -->
    <header class="default-header">
        <div class="container-fluid">
            <div class="header-wrap">
                <div class="header-top d-flex justify-content-between align-items-center">
                    <div class="logo">
                        <a href="index.html"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt=""></a>
                    </div>
                    <div class="main-menubar d-flex align-items-center">
                        <?php
                        if ( has_nav_menu( 'primary' ) ) {
                            $args = array(
                                    'theme_location' => 'primary',
                                    'container' => 'nav',
                                    'container_class' => 'hide',
                                    'items_wrap'=>'%3$s',
                                    'walker'=> new Custom_menu_walker()
                            );
                            wp_nav_menu( $args );
                        }
                        ?>
                        <div class="menu-bar"><span class="lnr lnr-menu"></span></div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- End Header Area -->