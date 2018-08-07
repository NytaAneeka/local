<?php

$degtukai = 0.28;
$suma = 0;
?>


    <form method="post" action="">
        Degtuku kiekis:
        <br>
        <input type="text" name="qty">
        <br>
        <input type="submit" name="count" value="Skaiciuoti">
    </form>

<?php
if (isset($_POST['qty'])) {
    $qty = $degtukai * $_POST['qty'];
    if ($qty > 1000 && $qty < 2000) {
        $suma = $qty - ($qty * (3 / 100));
        echo "Degtuku suma : $suma";
    }

    else if ($qty >= 2000) {
        $suma = $qty - ($qty * (4 / 100));
        echo "Degtuku suma : $suma";
    }

    else {
        echo "Degtuku suma : $qty";
    }

}
?>