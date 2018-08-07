<?php

$h = 0;
$min = 0;
$sec = 0;

?>

<form method="post" action="">
    Valanda:
    <br>
    <input type="text" name="h">
    <br>
    Minutes:
    <br>
    <input type="text" name="min">
    <br>
    Sekundes:
    <br>
    <input type="text" name="sec">
    <br>
    <input type="submit" name="count" value="Skaiciuoti">
</form>

<?php

if (isset($_POST['h']) && isset($_POST['min']) && isset($_POST['sec'])){
    $h = $_POST['h'];
    $min = $_POST['min'];
    $sec = $_POST['sec'];

}
?>