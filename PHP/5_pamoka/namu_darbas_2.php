
<form method="post" action="">
    <label>Iveskite temperatura : <br>
        <input type="text" name="temperatura">
        <br>
        <input type="submit" name="count" value="Isvesti">
</form>

<?php

if(isset($_POST['temperatura'])) {
    $temp = $_POST['temperatura'];
    if (!empty($temp)) {
        $suma = 0;
        $kiekis = 0;
        $duMaziausi =0;
        $duDidziausi = 0;
        $explode = explode(",",$temp);
        foreach ($explode as $number) {
            $suma += $number;
            $kiekis++;
        }

        echo "<br> Vidutinė temperatūra: " . round($suma/$kiekis,1);
        echo "<br> Viso nuoskaitų: " . $kiekis;

        rsort($explode);
        echo "<br> Dvi didžiausios temperatūros: " . implode(", ", array_slice($explode, 0, 2));
        asort($explode);
        echo "<br> Dvi mažiausios temperatūros: " . implode(", ", array_slice($explode, 0, 2));

    }
}

?>

