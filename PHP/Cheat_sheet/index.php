<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="css.css">
    <title>Cheat sheet</title>
</head>
<body>
<div class="container">
    <div class="row">

        <div class="col-md-12">
            <h3>1.If trumpinys</h3>
            <p>Sutrumpintas IF salygos tikrinimas rasosi taip:</p>
            <p style="font-weight: bold">(salyga) ? (jei salyga tiesa) : (jei salyga neteisinga);</p>
            <p>Pvz.:</p>
            <p>  $x= 5;<br>
                $y = 7;<br>
                $max=($x>$y)?$x : $y;</p>
            <?php
            $x= 5;
            $y = 7;
            $max=($x>$y)?$x : $y;
            echo "<p style='color: red'>". $max . "</p>";
            ?>
            <p style="text-align: center;"><a href="../1_pamoka/index.php">1.Pavyzdys</a></p>
        </div>

        <div class="col-md-12">
            <h3>2.Isset() funkcija</h3>
            <p>Si funkcija naudojama patikrinimui ar yra atsiusti duomenys,pavyzdziui:</p>
            <p style="font-weight: bold">if ( isset($_POST['vardas'])) { <br> echo "Atsiustas vardas ir jis yra:.$_POST['vardas'];<br> }</p>
            <p style="text-align: center;"><a href="../2_pamoka/1_uzd.php">1.Salyginiu sakiniu pavyzdys</a></p>
            <p style="text-align: center;"><a href="Salyginiu_sakiniu_uzduotys.php">2.Salyginiu sakiniu pavyzdys</a></p>

        </div>
    </div>
    <div class="row">
        <div class="col-md-12">

            <h3>3.FOR ciklai</h3>
            <div class="col-md-4">
                <p>1. <span class="bold">Break</span> komanda visiskai nutraukia vykdoma cikla.<br>
                    for ($i = 1; ; $i++) {<br>
                    if ($i > 10) {<br>
                    break;<br>
                    }<br>
                    echo $i;<br>
                    }
                </p>
            </div>

            <div class="col-md-4">
                <p>2. <span class="bold">Continue</span> nutraukia esama ciklo zingsni,bet ne pati cikla.<br>
                    for ($i = 1; $i< 10; $i++) {<br>
                    if (($i % 2)== 0){<br>
                    continue;<br>
                    }<br>
                    echo $i;<br>
                    }
                </p>
            </div>

            <div class="col-md-4">
                <p>3. <span class="bold">Ciklas cikle</span>: <br>
                    for ($i = 1; $i<3 ; $i++) {<br>
                    for ($y = 1; $y<3 ; $i++) {<br>
                    echo $i.’-’.$y." br ";
                </p>
            </div>
            <div class="clearfix"></div>
            <p  style="text-align: center;"><a href="../3_pamoka/index.php">1.Daugybos lentele su ivedamu daugikliu</a></p>
            <p  style="text-align: center;"><a href="../3_pamoka/2_uzd.php">2.Paprasta daugybos lentele</a></p>
            <p  style="text-align: center;"><a href="../4_pamoka/examples.php">3.Coliu lentele ir keliamieji metai</a></p>


        </div>


        <div class="col-md-12">
            <h3>4.While ciklai</h3>
            <p>Ciklas While uzrasomas taip:</p>
            <p>while (salyga){<br>
                //vykdyti<br>
                }
            </p>
            <p>Ciklai bus vykdomai tol,kol bus teisinga salyga</p>
            <p  style="text-align: center;"><a href="../4_pamoka/namu_darbai.php">1.While ciklo pavyzdys</a></p>

        </div>

    </div>

    <div class="row">
        <div class="col-md-12">
            <h3>5.Masyvai</h3>
            <p>Masyvus galite prilyginti kintamiesiems, tik skirtumas tas, kad masyvai savyje laiko kitus
                kintamuosius, o šie gali laikyti dar kitus ir t.t. Kintamieji, laikomi masyve, vadinami masyvo
                elementais.</p>
            <p>Yra kelios rusys masyvu:</p>
            <p>1.<span class="bold"> Indeksuoti masyvai (indexed arrays)</span>- indeksas visuomet prasides nuo 0.</p>
            <p  style="text-align: center;"><a href="../5_pamoka/1_uzduotis.php">Indeksuotas masyvas</a></p>

            <p>2.<span class="bold">Asociatyvus masyvas (associative array)</span> - indeksus galime patys nusirodyti: $i = array(1=>5,3=>6);</p>
            <p  style="text-align: center;"><a href="../5_pamoka/asociatyvus_masyvas.php">Asociatyvus masyvas</a></p>

            <p>3.<span class="bold">Multidimensiniai masyvai (multidimensional arrays)</span> - masyvai,savyje laikantys keleta arba daugiau masyvu.</p>
            <p  style="text-align: center;"><a href="../5_pamoka/multidimensional_arrays.php">Multidimensiniai masyvas</a></p>

        </div>

        <div class="col-md-12">

            <div class="col-md-6">
                <h3>5.1. Foreach ciklas</h3>
                <p>Foreach ciklas veikia tik su masyvais.Ciklas kartoja tiek kartu kiek yra elementu masyve.</p>
                <p>foreach ($masyvas as $indeksai=>$elementati)</p>
                <p>Pavyzdziui: <br>
                    $a=array(5=>2,6=>3,7=>5); <br>
                    foreach ($a as $k=>$v){ <br>
                    echo <br>
                    $k.'='.$v.'br'; <br>
                    }
                </p>
                <p  style="text-align: center;"><a href="../5_pamoka/3_uzduotis.php">Foreach paprastas pavyzdys</a></p>
            </div>

            <div class="col-md-6">
                <h3>5.2. Masyvu rikiavimas</h3>
                <ul class="sort-left">
                    <li>sort() - sort arrays in ascending order</li>
                    <li>rsort() - sort arrays in descending order</li>
                    <li>asort() - sort associative arrays in ascending order, according to the value</li>
                    <li>ksort() - sort associative arrays in ascending order, according to the key</li>
                    <li>arsort() - sort associative arrays in descending order, according to the value</li>
                    <li>krsort() - sort associative arrays in descending order, according to the key</li>
                </ul>
                <p  style="text-align: center;"><a href="../5_pamoka/4_uzduotis.php">1.Pavyzdys</a></p>
                <p  style="text-align: center;"><a href="../5_pamoka/5_uzduotis.php">2.Pavyzdys</a></p>
            </div>
        </div>

    </div>

    <div class="row">
        <div class="col-md-12"></div>
        <div class="col-md-12"></div>

    </div>
</div>
</body>
</html>

