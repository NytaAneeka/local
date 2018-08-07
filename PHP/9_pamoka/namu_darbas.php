<?php
//$path = 'D:\Programos\XAMPP\htdocs\PHP';
//$dir=opendir($path);
//
//
//while ($filename = readdir($dir)){
//    if (is_dir($path.'/'.$filename)) {
//        echo "<a href='namu_darbas.php?id=" . $filename . "'>" . $filename . "</a>" . '<br>';
//    }
//}
//closedir($dir);
session_start();

define('KELIAS', 'D:\Programos\XAMPP\htdocs\PHP'); //konstanta

function failuSarasas($katalogas){
    $kat = opendir(KELIAS . $katalogas);
    echo "<ul>";
    while ($failas = readdir($kat)) {
        echo "<li>";
        if (is_dir(KELIAS . $katalogas . $failas)) {
            echo "<img src='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQxz2_kE5dIYwAnjyCSgAHMFTzpkQmRi8wXZP6MkGUCf1Qmqz85' style='max-width:30px;'>";
        } elseif (is_file(KELIAS . $katalogas . $failas)) {
            $ext = pathinfo(KELIAS . $katalogas . $failas, PATHINFO_EXTENSION);
            if ($ext == 'php') {
                echo "<img src='https://isolutionsynergyideas.com/img/person_2.png' style='max-width:30px;'>";
            }
        }
        echo "<a href='get_files.php?failas=$katalogas$failas' target='_blank'>$failas</a>";
        if (is_dir(KELIAS . $katalogas . $failas)) {
            if ($failas != '.' && $failas != '..') {
                failuSarasas($katalogas . $failas . '/');
            }
        }
        echo "</li>";
    }
    echo "</ul>";
    closedir($kat);
}
// if($verification ==1) jeigu verification = 1 arba kitaip sakant lygus true,tuomet isveda funkcija (kuri atidaro failu sarasa)
if(isset($_SESSION['user'])) {
    failuSarasas('/');
}



