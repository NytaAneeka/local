<?php

$i = 1;
$db = mysqli_connect('localhost','root','','darbuotojai_db');
$db->set_charset('utf8');
$rezultatas = $db->query("SELECT * FROM pareigos WHERE id={$_GET['pareigos']}");
$pareigos = $rezultatas->fetch_assoc();

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
        <div class="col-md-12">
            <div class="page-header">
                <h1>Darbuotojai pagal pareigas: <strong> <?php echo $pareigos['name']; ?></strong> </h1>
            </div>




        </div>
        <div class="col-md-12">
            <div class="panel panel-primary">
                <!-- Default panel contents -->
                <div class="panel-heading">Darbuotojų sąrašas</div>


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
                    <?php $resultBendras=$db->query("SELECT * FROM pareigos,darbuotojai WHERE pareigos.id={$_GET['pareigos']} AND pareigos.id=darbuotojai.pareigos_id") ;
                    while ($pareigunai=$resultBendras->fetch_assoc()){
                    ?>
                    <tr>
                        <td><strong><?php echo $i++; ?></strong></td>
                        <td><?php echo $pareigunai['name']; ?></td>
                        <td><?php echo $pareigunai['surname']; ?></td>
                        <td><?php echo $pareigunai['phone']; ?></td>
                        <td><?php echo $pareigunai['education']; ?></td>
                        <td><?php echo $pareigunai['salary']; ?></td>
                        <td><a href="darbuotojas.php?id=<?php echo $pareigunai['id'];?>" class="btn btn-primary">Plačiau</a></td>
                        <?php } ?>
                    </tr>
                </table>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
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
                    </tr>
                    <?php $result=$db->query("SELECT * FROM pareigos");
                    while ($eilutePareigos=$result->fetch_assoc()) {
                        ?>
                        <tr>
                            <td><?php echo $eilutePareigos['name']; ?></td>
                            <td><?php echo $eilutePareigos['base_salary']; ?></td>
                            <?php $result4=$db->query("SELECT COUNT(*) AS pareigunuKiekis,pareigos_id FROM darbuotojai GROUP BY pareigos_id");
                            while ($eiluteSkaicius=$result4->fetch_assoc()){
                            ;
                            if ($eilutePareigos['id'] == $eiluteSkaicius['pareigos_id']) {
                            ?>
                            <td><?php echo $eiluteSkaicius['pareigunuKiekis'];
                                }
                                }
                                ?></td>
                            <td><a href="#" class="btn btn-primary">Rodyti darbuotojus</a></td>
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