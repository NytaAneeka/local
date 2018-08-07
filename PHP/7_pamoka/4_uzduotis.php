<?php

$projects = array(
    array('id' => '1','short_name' => 'BIO-C3','year' => '2014','program' => 'BONUS','price' => '3700000'),
    array('id' => '2','short_name' => 'TRIPOLIS','year' => '2014','program' => 'LMT','price' => '79385'),
    array('id' => '4','short_name' => 'BALTCOAST','year' => '2015','program' => 'BONUS','price' => '2868208'),
    array('id' => '5','short_name' => 'BSCP','year' => '2015','program' => 'EASME','price' => '784000'),
    array('id' => '6','short_name' => 'BALMAN','year' => '2015','program' => 'LMT,  Lithuania - Latvia - China (Taiwan) research project fund','price' => '667623'),
    array('id' => '8','short_name' => 'MAURAKUMA','year' => '2014','program' => 'LMT','price' => '78921'),
    array('id' => '9','short_name' => 'BALSAM','year' => '2013','program' => 'European Commission, Marine Strategy Framework Directive pilot projects','price' => '461803'),
    array('id' => '10','short_name' => 'DEVOTES','year' => '2012','program' => 'European Commission, 7 BP','price' => '136651'),
    array('id' => '11','short_name' => 'MARES','year' => '2012','program' => 'ERASMUS MUNDUS, Horizon 2020','price' => '100800'),
    array('id' => '12','short_name' => 'VECTORS','year' => '2012','program' => 'European Commission, 7 BP','price' => '15237662'),
    array('id' => '13','short_name' => 'DENOFLIT','year' => '2010','program' => 'LIFE+ Nature & Biodiversity','price' => '1569699'),
    array('id' => '14','short_name' => 'TRUFFLE','year' => '2012','program' => 'Latvia-Lithuania Cross Border Cooperation Programme ','price' => '319440'),
    array('id' => '15','short_name' => 'LAKES FOR FUTURE','year' => '2012','program' => 'Latvia-Lithuania Cross Border Cooperation Programme ','price' => '1012554'),
    array('id' => '16','short_name' => 'IANUS','year' => '2012','program' => 'LMT','price' => '221530'),
    array('id' => '17','short_name' => 'PROTEUS','year' => '2012','program' => 'LMT','price' => '99542'),
    array('id' => '18','short_name' => 'SAMBAH','year' => '2010','program' => 'LIFE+ Nature & Biodiversity','price' => '80282'),
    array('id' => '19','short_name' => 'PREHAB','year' => '2010','program' => 'BONUS','price' => '263630'),
    array('id' => '20','short_name' => 'KRABAS','year' => '2011','program' => 'LMT','price' => '43153'),
    array('id' => '21','short_name' => 'MEECE','year' => '2008','program' => 'European Commission, 7 BP','price' => '6499745'),
    array('id' => '22','short_name' => 'EEE','year' => '2008','program' => 'The Norwegian Financial Mechanism and the Republic of Lithuania','price' => '989072'),
    array('id' => '23','short_name' => 'MOPODECO','year' => '2010','program' => 'Nordic countries Council of Ministers','price' => '100544'),
    array('id' => '24','short_name' => 'Cross-border DISCOS','year' => '2012','program' => 'Latvia-Lithuania Cross Border Cooperation Programme ','price' => '778108'),
    array('id' => '25','short_name' => 'Cross-border DISCOS','year' => '2012','program' => 'Latvijos ir Lietuvos bendradarbiavimo per sienÄ… programa - LATLIT','price' => '778'),
    array('id' => '26','short_name' => 'JRTC','year' => '2010','program' => 'LATLIT, Interreg, Latvia-Lithuania Cross Border Cooperation Programme ','price' => '528793')
);
?>

<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
</head>
<body>
<form method="post">
    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-xs-12 col-md-8">
                <table class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Strumpinimas</th>
                        <th>Metai</th>
                        <th>Programa</th>
                        <th>Suma</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($projects as $index => $project): ?>
                        <tr>
                            <td><input type="checkbox" name="check[]" value="<?php echo $index; ?>" <?php echo (isset($_POST['check']) && (isset($_POST['check'][$index]))?'checked="checked"':''); ?> /></td>
                            <td><?php echo $project['short_name']; ?></td>
                            <td><?php echo $project['year']; ?></td>
                            <td><?php echo $project['program']; ?></td>
                            <td><?php echo $project['price']; ?></td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <div class="col-md-4">
                <button type="submit" class="btn btn-primary">Skaičiuoti pasirinktus</button>
                <br />
                <?php if (isset($_POST['check']) && !empty($_POST['check'])): ?>
                    <?php
                    $total = 0;
                    foreach ($_POST['check'] as $index) {
                        if (isset($projects[$index])) {
                            $total += $projects[$index]['price'];
                        }
                    }
                    ?>
                    Bendra suma yra: <?php echo $total; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</form>
</body>
</html>