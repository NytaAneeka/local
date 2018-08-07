<?php
session_start();

$user = "Ana";
$pw = "admin";

if (isset($_POST['name']) && isset($_POST['pw'])){
    if($_POST['name'] === $user && $_POST['pw'] === $pw){
        $_SESSION['user'] = $_POST['name'];
        header('Location: \PHP\9_pamoka\namu_darbas.php');
    }
}
?>

    <!--sitas php kodas ($verification == 0) paslepia visa login forma -->
    <html>
    <head>

    </head>
    <body>


    <div class="container">
        <form method="post" action="">
            <label for="name">Prisijungimo vardas:</label>
            <input type="text" name="name" id="name">

            <label for="pw">Slaptazodis:</label>
            <input type="password" name="pw" id="pw">

            <input type="submit" name="log" value="Prisijungti">
        </form>
    </div>


    </body>
    </html>
