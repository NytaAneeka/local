<?php
$colis = 2.54; // 1 colis = 2.54 cm
?>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
</head>
<body>
<!-- PIRMA UZDUOTIS -->
<div class="row">
    <div class="col-sm-3">
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>Coliai</th>
                <th>Centimetrai</th>
            </tr>
            </thead>
            <tbody>
            <?php for ($i = 1; $i <= 10; $i++) { ?>
                <tr>
                    <td><?php echo $i; ?></td>
                    <td><?php echo ($i * $colis); ?></td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
    <div class="col-md-3">
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>Centimetrai</th>
                <th>Coliai</th>
            </tr>
            </thead>
            <tbody>
            <?php for ($i = 1; $i <= 10; $i++) { ?>
                <tr>
                    <td><?php echo $i; ?></td>
                    <td><?php echo round(($i / $colis),2); ?></td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
</div>
<!-- PIRMA UZDUOTIS -->
<br><br><br><br><br><br>


<!-- ANTRA UZDUOTIS -->
<form action="" method="POST" class="col-sm-2">
    <div class="form-group">
        <label>Metai</label>
        <input type="text" value="<?php echo isset($_POST['metai'])?htmlspecialchars($_POST['metai']):''; ?>" name="metai" class="form-control"  placeholder="Prašome įvesti metus" />
        <input type="submit" class="btn btn-primary"  value="Pateikti" />
    </div>
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
            if ($metai % 4 === 0) { $keliamieji = true; }
        }


        if ($keliamieji) {
            $message = '<strong>' . $metai . '</strong> yra keliamieji.';
        }
        else {
            $message = '<strong>' . $metai .'</strong> yra nekeliamieji.';
        }
    }
    else {
        $error = 'Prašome nurodyti metus.';
    }
}

if ($error) {
    echo '<div class="alert alert-danger col-sm-3">' . $error .'</div>';
}
else {
    echo '<div class="alert alert-success col-sm-3">' . $message .'</div>';
}
?>
<!-- ANTRA UZDUOTIS -->

<br><br><br><br>



<!-- TRECIA UZDUOTIS -->
<form action="" method="POST" class="col-sm-4">
    <div class="row">
        <div class="col-sm-4">
            <label>Metai Nuo:</label>
            <input type="text" value="<?php echo isset($_POST['metai_nuo'])?htmlspecialchars($_POST['metai_nuo']):''; ?>" name="metai_nuo" class="form-control"  placeholder="Prašome įvesti metus" />
        </div>
        <div class="col-sm-4">
            <label>Metai Iki:</label>
            <input type="text" value="<?php echo isset($_POST['metai_iki'])?htmlspecialchars($_POST['metai_iki']):''; ?>" name="metai_iki" class="form-control"  placeholder="Prašome įvesti metus" />
        </div>
    </div>
    <input type="submit" class="btn btn-primary"  value="Pateikti" />
</form>

<?php
$from = isset($_POST['metai_nuo'])?(int)$_POST['metai_nuo']:0;
$to = isset($_POST['metai_iki'])?(int)$_POST['metai_iki']:0;
$total = 0;
$output = false;
if (($from !== 0 && $to !== 0) && $from < $to) {
    $output = true;
    for ($metai = $from;$metai <= $to; $metai++) {
        $keliamieji = false;
        if ($metai % 400 === 0) { $keliamieji = true; }
        else if ($metai % 100 != 0) {
            if ($metai % 4 === 0) { $keliamieji = true; }
        }

        if ($keliamieji) { $total++; }
    }
}

if ($output):
    ?>
    Tarp <strong><?php echo $from; ?></strong> ir <strong><?php echo $to; ?></strong> metų yra <strong><?php echo $total; ?></strong> keliamieji metai.
<?php endif; ?>
<!-- TRECIA UZDUOTIS -->
<br><br>


</body>
</html>