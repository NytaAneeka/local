<?php

$db = mysqli_connect('localhost','root','','darbuotojai_db');
$db->set_charset('utf8');


if (isset($_POST['name']) && isset($_POST['surname']) ){
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $gender = $_POST['gender'];
    $phone = $_POST['phone'];
    $pareiga = $_POST['pareigos_id'];
    $education = $_POST['education'];
    $salary = $_POST['salary'];
    $add = $db->query("INSERT INTO darbuotojai (name,surname,gender,phone,pareigos_id,education,salary) VALUES ('$name','$surname','$gender','$phone','$pareiga','$education','$salary')");
}

$lytis = $db->query("SELECT * FROM darbuotojai GROUP BY gender");
$pareigos = $db->query("SELECT * FROM pareigos");

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
            <div class="panel panel-primary">
                <!-- Default panel contents -->
                <div class="panel-heading">Naujas darbuotojas:</div>

                <div class="panel-body">



                    <form action="darbuotojas_prideti.php" method="post">

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="vardas">Vardas</label>
                                    <input name="name" type="text" class="form-control" id="vardas" placeholder="Vardas">
                                </div>
                                <div class="form-group">
                                    <label for="pavarde">Pavardė</label>
                                    <input name="surname" type="text" class="form-control" id="pavarde" placeholder="Pavarde">
                                </div>
                                <div class="form-group">
                                    <label for="lytis">Lytis</label>
                                    <?php
                                    echo "<select name='gender' id='lytis' class=\"form-control\">";
                                    $result = mysqli_query($db, "SELECT COLUMN_TYPE FROM INFORMATION_SCHEMA.COLUMNS
    WHERE TABLE_NAME = 'darbuotojai' AND COLUMN_NAME = 'gender'");

                                    $row = mysqli_fetch_array($result);
                                    $enumList = explode(",", str_replace("'", "", substr($row['COLUMN_TYPE'], 5, (strlen($row['COLUMN_TYPE']) - 6))));

                                    foreach ($enumList as $value)
                                        echo "<option value=\"$value\">$value</option>";

                                    echo "</select>";
                                    ?>
                                </div>
                                <div class="form-group">
                                    <label for="tel">Telefonas</label>
                                    <input name="phone" type="text" class="form-control" id="tel" placeholder="Telefonas">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="pareigos">Pareigos</label>
                                    <select name="pareigos_id" id="pareigos" class="form-control">
                                        <?php while ($eilute=$pareigos->fetch_assoc()){ ?>
                                            <option value="<?php echo $eilute['id']; ?>"> <?php echo $eilute['name']; ?> </option>
                                        <?php }  ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="issilavinimas">Išsilavinimas</label>
                                    <input name="education" type="text" class="form-control" id="issilavinimas" placeholder="Išsilavinimas">
                                </div>

                                <div class="form-group">
                                    <label for="salary">Atlyginimas</label>
                                    <input name="salary" type="text" class="form-control" id="salary" placeholder="Atlyginimas">
                                </div>

                            </div>
                            <div class="clearfix"></div>
                            <div class="col-md-12">
                                <input type="submit" class="btn btn-primary" name="submit" value="Pridėti">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>


</div>


</body>
</html>