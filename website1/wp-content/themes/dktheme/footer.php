<?php
//count how many columns should use one sidebar
    $usedSidebars = 0;
    $sidebars = wp_get_sidebars_widgets();
    foreach ($sidebars as $k=>$v){
        if($k == 'wp_inactive_widgets')
            continue;

        if(!empty($v))
            $usedSidebars++;
    }

    $colsLargeClass = "col-lg-" . 12/$usedSidebars;


//check if it has something to show
    function sidebar_has_widget($index){
        $sidebars = wp_get_sidebars_widgets();
        if ($sidebars[$index])
            return true;

        return false;
    }

?>
<!-- Strat Footer Area -->
<footer class="section-gap">
    <div class="container">
        <?php
            if (   ! is_active_sidebar( 'footer-sidebar-1'  )
                    && ! is_active_sidebar( 'footer-sidebar-2' )
                    && ! is_active_sidebar( 'footer-sidebar-3'  )
                    && ! is_active_sidebar( 'footer-sidebar-4' )
            )
            return;
        ?>
        <div class="row pt-60">
            <?php if ( sidebar_has_widget('footer-sidebar-1') ) { ?>
                <div class="<?php echo $colsLargeClass; ?> col-sm-6">
                    <div class="single-footer-widget">
                        <?php dynamic_sidebar( 'footer-sidebar-1' ); ?>
                    </div>
                </div>
            <?php } ?>
            <?php if ( sidebar_has_widget('footer-sidebar-2') ) { ?>
                <div class="<?php echo $colsLargeClass; ?> col-sm-6">
                    <div class="single-footer-widget">
                        <?php dynamic_sidebar( 'footer-sidebar-2' ); ?>
                    </div>
                </div>
            <?php } ?>
            <?php if ( sidebar_has_widget('footer-sidebar-3') ) { ?>
                <div class="<?php echo $colsLargeClass; ?> col-sm-6">
                    <div class="single-footer-widget">
                        <?php dynamic_sidebar( 'footer-sidebar-3' ); ?>
                    </div>
                </div>
            <?php } ?>
            <?php if ( sidebar_has_widget('footer-sidebar-4') ) { ?>
                <div class="<?php echo $colsLargeClass; ?> col-sm-6">
                    <div class="single-footer-widget">
                        <?php dynamic_sidebar( 'footer-sidebar-4' ); ?>
                    </div>
                </div>
            <?php } ?>
        </div>
        <div class="footer-bottom d-flex justify-content-between align-items-center flex-wrap">
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            <p class="footer-text m-0">Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a></p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        </div>
    </div>
</footer>
<!-- End Footer Area -->
</div>
<?php wp_footer(); ?>
</body>
</html>