<?php

function ImageUploader (){
    define('SAVEURL','D:\Programos\XAMPP\htdocs\PHP');
    define('MAXUP', )
    $types = array('jpg', 'jpeg', 'gif', 'png');
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>

<body>

<form method="post" action="index.php" enctype="multipart/form-data">
    Upload na file: <br>
    <input type="file" name="file" >
    <br>
    <input type="submit" name="up" value="Upload">

</form>

</body>
</html>
