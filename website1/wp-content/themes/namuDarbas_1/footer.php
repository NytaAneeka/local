
<!-- Add footer nav -->
<div class="footer container-fluid"></div>
<?php wp_nav_menu(array(
    'theme_location'=>'secondary',
    'container'=>'',
    'menu_class'=>'navbar navbar-expand-lg navbar-light bg-light'
) );
?>
<?php wp_nav_menu(array(
    'theme_location'=>'third',
    'container'=>'',
    'menu_class'=>'navbar navbar-expand-lg navbar-light bg-light'
) );
?>

<?php wp_nav_menu(array(
    'theme_location'=>'social',
    'container'=>'',
    'menu_class'=>'navbar navbar-expand-lg navbar-light bg-light'
) );
?>

<!-- Add footer content -->
<?php wp_footer()?>


</body>
</html>