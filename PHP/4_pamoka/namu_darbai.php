<html>
<head>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <style>
        body {
            color:#666;
        }

        .container {
            text-align: center;
            border: 1px solid #8c8c8c4d;
            background-color: #e8e8e8;
        }

        table {
            margin:20px auto;
            text-align: center;

        }

        th {
            background: #666;
            color: #FFF;
            padding: 12px;
            border-collapse: separate;
            border: 1px solid #000;
            font-weight: normal;

        }

        td {
            border: 1px solid #DDD;

        }

        #bttn {
            background-color: #FFFFFF;
            border-color: #8c8c8c21;
            padding: 5px;
            margin-top: 10px;
            width: 175px;
        }
        input {
            text-align: center;
        }
    </style>

</head>
<body>

<?php

$wage = isset($_POST['atlyginimas'])?(int)$_POST['atlyginimas']:0;
$proc = isset($_POST['procentai'])?(int)$_POST['procentai']:0;
$wantedWage = isset($_POST['norimas_atlyginimas'])?(int)$_POST['norimas_atlyginimas']:0;

?>

<div class="container">
    <form method="post" action="">

        Atlyginimas:<br>
        <input type="number" name="atlyginimas" value="<?php echo $wage; ?>"><br>
        Procentai:<br>
        <input type="number" name="procentai" value="<?php echo $proc; ?>"><br>
        Pageidaujamas atlyginimas:<br>
        <input type="number" name="norimas_atlyginimas" value="<?php echo $wantedWage; ?>"><br>
        <input id="bttn" type="submit" name="count" value="PERSKAICIUOTI">
    </form>

    <?php

    $wage = isset($_POST['atlyginimas'])?(int)$_POST['atlyginimas']:0;
    $proc = isset($_POST['procentai'])?(int)$_POST['procentai']:0;
    $wantedWage = isset($_POST['norimas_atlyginimas'])?(int)$_POST['norimas_atlyginimas']:0;
    $month = 1;
    echo "<table>";
    echo "<tr style='font-size: 12px'><th>MENUO</th><th>ATLYGINIMAS</th></tr>";

    while($wage < $wantedWage){

        echo "<tr><td style='background-color: #9d9d9d;color: #FFFFFF'>$month</td><td style='background-color: #FFFFFF'>" . round($wage, 2) . "</td></tr>";
        $wage = $wage + ($wage * ($proc/100));
        $month++;
    }
    echo "</table>";

    ?>
    <p style="text-align: center"><a href="../Cheat_sheet/index.php">Grizti</a> </p>
</div>


</body>

</html>