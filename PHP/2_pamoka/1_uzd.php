<style>
    .color {
        background-color: grey;
    }
</style>
<?php

$jonas = '0';
$petras = '0';
?>

<form method="POST" action="">
    Jonas: <br>
    <input type="text" name="jonas"> <br>

    Petras : <br>
    <input type="text" name="petras"> <br>
    <input type="submit" name="count" value="Palyginti"><br>

    <?php

    if (isset($_POST['jonas']) && isset($_POST['petras'])){
        $jonas = $_POST['jonas'];
        $petras = $_POST['petras'];

        if ($jonas > $petras) {
            echo "<p><span class='color'>Jonas</span> surinko daugiau tasku</p>";
        }
        else if ($petras > $jonas) {
            echo "<p><span class='color'>Petras</span> surinko daugiau tasku</p>";
        }
        else {
            echo "<p><span class='color'>Abudu</span> surinko vienodai tasku</p>";
        }
    }

    ?>
    <p style="text-align: center;"><a href="../Cheat_sheet/index.php">Grizti</a></p>
</form>
