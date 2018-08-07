
//PIRMA UZDUOTIS

<form method="post" action="">
    <label>Iveskite atlyginima : <br>
        <input type="text" name="alga">
        <br>
        <input type="submit" name="count" value="Pateikti"><br>
</form>

<?php

if(isset($_POST['alga'])) {
    $alga = $_POST['alga'];
    if (!empty($alga)) {
        $iki380 = 0;
        $iki820 =0;
        $iki1500 = 0;
        $nuo1500 = 0;
        $explode = explode(",",$alga);

        foreach ($explode as $number) {

            if ($number <= 380) {
                $iki380++;

            }elseif ($number > 380 && $number <=820){
                $iki820++;

            }elseif ($number > 830 && $number <= 1500){
                $iki1500++;

            }elseif ($number > 1500) {
                $nuo1500++;
            }
        }
        $array = array( 'Iki 380 grupei priklauso darbuotuju:' => $iki380,  'Nuo 380 Iki 820 grupei priklauso darbuotuju:' => $iki820,  'Nuo 830 Iki 1500 grupei priklauso darbuotuju:' => $iki1500,  'Nuo 1500 grupei priklauso darbuotuju:' => $nuo1500 );
        foreach ($array as $k => $v) {
            echo $k . ' ' . $v . '<br>';
        }
        arsort($array);
        $output = array_slice($array, 0, 1);
        foreach($output as $k => $v ) {
            echo '<div class="alert alert-success" role="alert">Daugiausiai darbuotojų turi grupė: <strong>' . $k . ' ' . $v  .  '</strong></div>';
        }

    }
//    echo "1.Iki 380 grupei priklauso darbuotuju: ".$iki380."<br>";
//    echo "2.Nuo 380 Iki 820 grupei priklauso darbuotuju: ".$iki820."<br>";
//    echo "3.Nuo 830 Iki 1500 grupei priklauso darbuotuju: ".$iki1500."<br>";
//    echo "4.Nuo 1500 grupei priklauso darbuotuju: ". $nuo1500."<br>";
}

?>
<br> <a href="2_uzduotis.php">ANTRA UZDUOTIS</a><br>
