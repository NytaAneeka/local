<?php
$db = mysqli_connect('localhost', 'root', '', 'darbuotojai_db');
$db->set_charset('utf8');

if (isset($_POST['name']) && isset($_POST['base_salary']) && isset($_GET['id'])){
    $name = $_POST['name'];
    $baseSalary= $_POST['base_salary'];
    $id = $_GET['id'];

    $update = $db->query("UPDATE pareigos SET name = '$name', base_salary='$baseSalary' WHERE id='$id'");
}
if (isset($_GET['id'])) {
    $redaguoti = $db->query("SELECT * FROM pareigos WHERE id='{$_GET['id']}' ");
    $redaguoti = $redaguoti->fetch_assoc();
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
<div class="col-md-6">
    <div class="panel panel-primary">
        <!-- Default panel contents -->
        <div class="panel-heading">Pareigų redagavimas:</div>

        <div class="panel-body">

            <form action="pareigos_redaguoti.php?id=<?php echo $redaguoti['id']; ?>" method="post">
                <div class="form-group">
                    <label for="vardas">Pavadinimas</label>
                    <input name="name" type="text" class="form-control" id="vardas" placeholder="Vardas" value="<?php echo $redaguoti['name']; ?>">
                </div>
                <div class="form-group">
                    <label for="pavarde">Bazinė alga</label>
                    <input name="base_salary" type="text" class="form-control" id="pavarde" placeholder="Pavarde" value="<?php echo $redaguoti['base_salary']; ?>">
                </div>


                <input type="submit" class="btn btn-primary" value="Išsaugoti">
            </form>
        </div>
    </div>
</div>
</body>