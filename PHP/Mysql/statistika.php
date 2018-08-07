<?php

$db = mysqli_connect('localhost','root','','darbuotojai_db');
$db->set_charset('utf8');

if (isset($_GET['id']) && isset($_GET['darbuotojas'])) {
    $trinti=$db->query("DELETE FROM darbuotojai WHERE id={$_GET ['id']}");
}
if (isset($_GET['id']) && isset($_GET['pareigos'])) {
    $trinti=$db->query("DELETE FROM pareigos WHERE id={$_GET ['id']}");
}
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
                <li><a href="pareigos_prideti.php">Prideti pareigas</a></li>
            </ul>


        </div>
    </div>
</nav>

<div class="container" id="content" tabindex="-1">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-primary">
                <!-- Default panel contents -->
                <div class="panel-heading">Visi įmonės darbuotojai</div>


                <!-- Table -->
                <table class="table">
                    <tr>
                        <th></th>
                        <th>Vardas</th>
                        <th>Pavardė</th>
                        <th>Tel. nr.</th>
                        <th>Išsilavinimas</th>
                        <th>Alga</th>
                        <th></th>
                    </tr>

                    <?php $rezultatas=$db->query("SELECT * FROM darbuotojai");
                    while ($eilute=$rezultatas->fetch_assoc()){?>

                        <tr>
                            <td><strong><?php echo $eilute['id']; ?></strong></td>
                            <td><?php echo $eilute['name']; ?></td>
                            <td><?php echo $eilute['surname']; ?></td>
                            <td><?php echo $eilute['phone']; ?></td>
                            <td><?php echo $eilute['education']; ?></td>
                            <td><?php echo $eilute['salary']; ?></td>
                            <td><a href="darbuotojas.php?id=<?php echo $eilute['id'];?>" class="btn btn-primary">Plačiau</a></td>
                            <td><a href="darbuotojas_redaguoti.php?id=<?php echo $eilute['id'];?>" class="btn btn-success">Redaguoti</a></td>
                            <td><a href="statistika.php?id=<?php echo $eilute['id'];?>&darbuotojas=1" class="btn btn-danger">Trinti</a></td>



                        </tr>
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-8">

            <div class="panel panel-primary">
                <!-- Default panel contents -->


                <div class="panel-heading">Baziniai darbo užmokesčiai:</div>

                <!-- Table -->

                <table class="table">
                    <tr>
                        <th>Pareigos</th>
                        <th>Bazinis darbo užmokesti</th>
                        <th>Darbuotoju skaicius</th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                    <?php $result=$db->query("SELECT * FROM pareigos");
                    while ($eilutePareigos=$result->fetch_assoc()){ ?>
                    <tr>
                        <td><?php echo $eilutePareigos['name']; ?></td>
                        <td><?php echo $eilutePareigos['base_salary']; ?></td>
                        <?php $darbuotojuSkaicius=$db->query("SELECT COUNT(*) AS pareigunuKiekis FROM pareigos LEFT JOIN darbuotojai ON darbuotojai.pareigos_id=pareigos.id WHERE pareigos.id = {$eilutePareigos['id']}");
                        echo $db->error;
                        $eiluteSkaicius=$darbuotojuSkaicius->fetch_assoc();
                        ?>
                        <td>
                            <?php echo $eiluteSkaicius['pareigunuKiekis']; ?>
                        </td>
                        <td><a href="darbuotojai_pareigos.php?pareigos=<?php echo $eilutePareigos['id']; ?>" class="btn btn-primary">Rodyti darbuotojus</a></td>
                        <td><a href="pareigos_redaguoti.php?id=<?php echo $eilutePareigos['id'];?>" class="btn btn-success">Redaguoti</a></td>
                        <td><a href="statistika.php?id=<?php echo $eilutePareigos['id'];?>&pareigos=1" class="btn btn-danger">Trinti</a></td>

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