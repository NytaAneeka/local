<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
</head>
<body>
<div class="container-fluid mt-5">
    <div class="row">
        <div class="col-xs-12 col-md-6 offset-md-3">
            <form method="post">
                <div class="form-group">
                    <label>Valandos</label>
                    <input type="text" name="valandos" class="form-control col-xs-6" placeholder="Pvz: 6,12,13,14,15,16,17,18,20" />
                </div>
                <div class="form-group">
                    <label>Temeperatūra</label>
                    <input type="text" name="temp" class="form-control col-xs-6" placeholder="Pvz: 36.40,36.70,38.90,39,35.55,36.12,36.15,38.40" />
                </div>
                <button type="submit" class="btn btn-primary">Pateikti</button>
            </form>

            <?php
            if (isset($_POST['valandos']) && isset($_POST['temp'])) {
                $vals = explode(",",$_POST['valandos']);
                $temps = explode(",",$_POST['temp']);

                $max = array_keys($temps, max($temps));
                $maxTempIndex = $max[0];
                $maxTemp = $temps[$maxTempIndex];

                $closest = Array();
                $normalTemp = Array();

                foreach($temps as $index => $temp) {
                    if (($temp > ($maxTemp - 0.5))  && ($temp < ($maxTemp + 0.5)) && $index !== $maxTempIndex) {
                        $closest[] = $index;
                    }

                    if ($temp >= 36.40 && $temp <= 37.00) {
                        $normalTemp[] = $index;
                    }
                }

                echo '<div class="alert alert-danger">Aukščiausia temperatūra: <strong>' . $maxTemp .'</strong> buvo <strong>' . $vals[$maxTempIndex] .'</strong> val.</div>';
                echo '<div class="alert alert-danger">Aukščiausia temperatūra dar buvo:<br />';
                foreach ($closest as $temp) {
                    echo $vals[$temp] .' val. ' . $temps[$temp] .'<br />';
                }
                echo '</div>';

                echo '<div class="alert alert-success">Normali temperatūra buvo:<br />';
                foreach ($normalTemp as $temp) {
                    echo $vals[$temp] .' val. ' . $temps[$temp] .'<br />';
                }
                echo '</div>';
            }
            ?>
        </div>
    </div>
</div>
</body>
</html>