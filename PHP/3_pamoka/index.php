<?php

$x = 0;

for ($i=1;$i<=12;$i++) {
    if (isset($_POST['x']) & !empty($_POST['x'])) {
        $x = $_POST['x'];
        echo $x . " x " . $i . "=" . ($x * $i) . "<br>";
    }
}
?>

<form method="post" action="";>
    <br>
    Iveskite daugikli:
    <input type="text" name="x">
    <br>
    <input type="submit" name="count" value="Dauginti!">
</form>
<br>
<!--<a href="2_uzd.php">-->
<!--    2 UZDUOTIS-->
<!--</a>-->