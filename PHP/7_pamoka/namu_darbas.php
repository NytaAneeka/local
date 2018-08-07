<?php
$skelbimai = array(
    array('id' => '17976','text' => 'Viešbutis Šventojoje ,, Pajūrio sodyba\'\' nuolatiniam darbui ieško administratorių ir virėjos vasaros sezonui. Skambinti 869333133 ','cost' => '542','onPay' => '1493195731'),
    array('id' => '17885','text' => 'Ieskoma Valytoja nedideliam viesbutukui Palangoje, vasaros sezonui. Patirtis dirbant viesbutyje privalumas.','cost' => '214','onPay' => '0'),
    array('id' => '17533','text' => 'TINKAVIMAS KALKINIU SKIEDINIU KOKYBIŠKAI IR NEBRANGIAI.TURIME 20 METŲ PATIRTĮ IR LABAI GERĄ REPUTACIJĄ. 868408837','cost' => '884','onPay' => '1490043275'),
    array('id' => '17532','text' => 'Parduodamas tvarkingas didelis mūrinis garažas su rūsiu,45kvadratai bendro ploto,bangu g. prie Medvalakio 860584184','cost' => '512','onPay' => '1489947320'),
    array('id' => '17485','text' => 'Ieskoma Valytoja nedideliam viesbutukui Palangoje, vasaros sezonui. Patirtis dirbant viesbutyje privalumas.','cost' => '214','onPay' => '0'),
    array('id' => '17303','text' => 'Perkame įvairius automobilius, mikroautobusus. Tvarkingus, su defektais, daužtus. 864691263','cost' => '800','onPay' => '1488368780'),
    array('id' => '17302','text' => 'Pirkčiau katerį-valtį su varikliu. Gali būti su defektu, apleistas. 864691263','cost' => '400','onPay' => '1488368133'),
    array('id' => '17102','text' => 'Parduodu geros būklės jūrinį konteinerį. Galima naudoti kaip sandėlį. Tel. 865988820','cost' => '400','onPay' => '1485962389'),
    array('id' => '16992','text' => 'Parduodu dideli mūrini garažą  Bangų g. prie Medvalakio,garažas sausas, tvarkingas su rūsiu,yra elektra .Garažas 22m²  rūsys taip pat 22m²','cost' => '382','onPay' => '0'),
    array('id' => '16989','text' => 'Ieškau apleisto 6 arų sklypo soduose: sodinimui, mašinos nusiplovimui. Gal kas turi nereikalingą ir neparduoda. Galėčiau prižiūrėti. Tel. 8 609 76193.','cost' => '168','onPay' => '1484996260'),
    array('id' => '16694','text' => 'Sportiškas ir išsilavinęs vyriškis, skaitantis ir informaciją suvokiantis daugeliu Europos kalbų, ieško bet kokio darbo (3 dienas per savaitę) su oriu atlyginimu. Darbo pasiūlymus siųsti el. paštu jamamsitadarba@gmail.com','cost' => '466','onPay' => '1481212052'),
    array('id' => '16626','text' => 'Parduodu avieną (gimę š. m. kovą – balandį ), mėsa puikaus skonio, neturi būdingo specifinio kvapo, galima pirkti ir po pusę avinuko ar užsisakyti artėjančioms šventėms, atvežu. Kaina 5 €/ kg., tel.nr. 8 678 35 932.','cost' => '1864','onPay' => '1480663237'),
    array('id' => '16554','text' => 'Kokybiškai klijuoju plyteles. Turiu ilgametę patirtį.','cost' => '200','onPay' => '0'),
    array('id' => '16515','text' => 'Dazymo,glaistymo darbai su amerikietiska įranga.Didele darbo patirtis.+37062700070','cost' => '400','onPay' => '0'),
    array('id' => '16311','text' => 'Pirkčiau 2 kambarių butą iki 30000 eurų.','cost' => '200','onPay' => '0'),
    array('id' => '16172','text' => 'Parduodamas naujos statybos 122 kv. m. namas Vydmantuose. Kaina - 78000 Eur. Tel. 8 659 88820','cost' => '214','onPay' => '0'),
    array('id' => '16171','text' => 'Parduodamas naujos statybos 122 kv. m. namas Vydmantuose. Kaina - 78000 Eur. Tel. 8 659 88820','cost' => '214','onPay' => '0'),
    array('id' => '16169','text' => '5 mergaitiškas (150-170 cm) žiemines striukes. 846053024','cost' => '100','onPay' => '0'),
    array('id' => '16168','text' => 'Eko BRIKETAI Gamintoju kainomis','cost' => '500','onPay' => '0')
);

$kiekis = 0;
$apmoketa = 0;
$suma = 0;
$apmoketisuma = 0;
?>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <style>
        * {
            text-align: center;

        }
    </style>
</head>
<body>
<div class="container-fluid mt-5">
    <div class="row">
        <div class="col-xs-12 col-md-8 offset-md-2">
            <table class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>Skelbimo ID</th>
                    <th>Tekstas</th>
                    <th>Kaina</th>
                    <th>Apmokejimas(timestamp)</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($skelbimai as $skelbimas): ?>
                    <tr>
                        <td><?php echo $skelbimas['id']; ?></td>
                        <td><?php echo $skelbimas['text']; ?></td>
                        <td><?php echo $skelbimas['cost']; ?></td>
                        <td><?php echo $skelbimas['onPay']; ?></td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

    <div class="statistics">
        <div class="row">
            <div class="col-xs-12 col-md-8 offset-md-2">
                <table class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>Skelbimu kiekis:</th>
                        <th>Apmoketi skelbimai:</th>
                        <th>Apmoketu skelbimu suma:</th>
                        <th>Dar turi buti apmoketa:</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($skelbimai as $skelbimas => $value){
                        if ($kiekis <= $value){
                            $kiekis++;
                        }
                        if ($value['onPay'] != 0){
                            $apmoketa++;
                            $suma += $value['cost'];
                        }
                        if ($value['onPay'] == 0){
                            $apmoketisuma += $value['cost'];
                        }
                    } ?>
                    <tr>
                        <td><?php echo $kiekis; ?></td>
                        <td><?php echo $apmoketa ?></td>
                        <td><?php echo $suma ?></td>
                        <td><?php echo $apmoketisuma ?></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
</body>
</html>