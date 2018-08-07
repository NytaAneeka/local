<?php
$db = mysqli_connect('localhost','root','','darbuotojai_db');
$db -> set_charset('utf8');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Baltic Talents</title>

    <!-- Bootstrap -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <style type="text/css">
        td {
            vertical-align: middle !important;
        }
    </style>

</head>
<body>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed"
                    data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"
                    aria-expanded="false">
                <span class="sr-only">Toggle navigation</span> <span
                        class="icon-bar"></span> <span class="icon-bar"></span> <span
                        class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Baltic Talents</a>
        </div>

        <div class="collapse navbar-collapse"
             id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="statistika.php">Įmonės statistika</a></li>
            </ul>


        </div>
    </div>
</nav>

<div class="container" id="content" tabindex="-1">
    <div class="row">
        <div class="col-md-6">
            <div class="panel panel-primary">
                <!-- Default panel contents -->
                <div class="panel-heading">Įmonėje dirbančių darbuotojų statistika pagal išsilavinimą</div>


                <!-- Table -->
                <table class="table">
                    <tr>
                        <th>Išsilavinimas</th>
                        <th>Kiekis</th>
                        <th>Vidutinis užmokestis</th>

                    </tr>
                    <?php $result=$db->query("SELECT education,COUNT(education) AS kiekis, ROUND(avg(salary),2) as vidAlga FROM darbuotojai GROUP BY education");
                    while ($eilute=$result->fetch_assoc()){
                    ?>
                    <tr>
                        <td><?php echo $eilute['education']; ?></td>
                        <td><?php echo $eilute['kiekis'] ?></td>
                        <td><?php echo $eilute['vidAlga'] ?></td>

                    </tr>
                    <?php }?>
                </table>
            </div>
        </div>
        <div class="col-md-6">
            <div class="panel panel-primary">
                <!-- Default panel contents -->
                <div class="panel-heading">Darbuotojų statistika pagal lytį</div>


                <!-- Table -->
                <table class="table">
                    <tr>
                        <th>Lytis</th>
                        <th>Kiekis</th>
                        <th>Procentai</th>

                    </tr>
                    <?php

                    $resultViso=$db->query("SELECT COUNT(*) AS viso FROM darbuotojai");
                    $eiluteViso=$resultViso->fetch_assoc();
                    $result2=$db->query("SELECT gender AS lytis,COUNT(*) AS kiekis FROM darbuotojai GROUP BY gender");
                    while ($eilute2=$result2->fetch_assoc()){ ?>

                    <tr>
                        <td><?php echo $eilute2['lytis']; ?></td>
                        <td><?php echo $eilute2['kiekis']; ?></td>
                        <td><?php echo ($eilute2['kiekis']/$eiluteViso['viso']*100); ?> % </td>
                    </tr>
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>




</div>
<script
        src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>