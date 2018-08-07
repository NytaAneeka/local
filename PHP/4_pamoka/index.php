

<body>

<form method="post" action="">

    Nuo siu metu:<br>
    <input type="text" name="metai"> <br>
    <input type="submit" name="count" value="Skaiciuoti"><br>

</form>

<?php

$error = false;
$message = '';

if (isset($_POST['metai'])) {
    $metai = $_POST['metai'];
    if (is_numeric($metai)) {
        $keliamieji = false;
        if ($metai % 400 === 0) { $keliamieji = true; }
        else if ($metai % 100 != 0) {
            if ($metai % 4 === 0) { $keliamieji = true;}
        }
        if ($keliamieji) {
            $message = '<strong>'. $metai . '</strong> yra keliamieji.';
        }
        else {
            $message = '<strong>'. $metai. '</strong> yra nekeliamieji';
        }
    }
    else {
        $error = 'Prasom nurodyti metus.';
    }
}
if ($error) {
    echo $error;
}
else {
    echo $message;
}

?>
<br>
<a href="namu_darbai.php">NAMU DARBAI</a>
<br>
<a href="examples.php">UZDUOCIU PAVYZDZIAI</a>

</body>

