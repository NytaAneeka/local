<form method="POST">
    <input type="text" value="" name="numbers" />
    <input type="submit" name="submit" value="Pateikti" />
</form>
<?php

/*
    Sukurkime programą kurioje į vieną įvedimo lauką įvedus tekstą (sąrašą skaičių atskirtų
    kableliais) suskaičiuotų šių skaičių vidurkį.
    Pavyzdžiui jei įvedame: 8,10,9
    Turėtų išvesti: 9
 */

if (isset($_POST['submit'])) {
    $numbers = $_POST['numbers'];
    if (!empty($numbers)) {
        $vidurkis = 0;
        $suma = 0;
        $kiekis = 0;
        $explode = explode(",",$numbers);
        foreach ($explode as $number) {
            $suma += $number;
            $kiekis++;
        }

        echo "Skaičių vidurkis: " . round($suma / $kiekis,2) .'<br />';

        // Arba
        $sum = array_sum($explode);
        $total = count($explode);
        echo "Skaičių vidurkis yra: " . round($sum/$total,2);

    }
}