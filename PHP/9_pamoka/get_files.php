<?php
define('KELIAS','D:\Programos\XAMPP\htdocs\PHP');
$failas = $_GET['failas'];
?>

<textarea style="width:100%; height: 90%;">
    <?php
    readfile('KELIAS'.$failas);
    ?>
</textarea>
