<html>
<head>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <title>Uzduotys</title>

    <style>
.pirma-uzduotis {
    border:2px solid #adadad;
    background-color: #999999;
}
        td {
            padding: 5px;
        }
    </style>
</head>

<body>
<div class="container-fluid">
    <div class="row">
        <div class="pirma-uzduotis col-md-6">
            <h4>FOR ciklo 1 uzduotis:</h4>
            <form method="post" action="">
                Ivseskite daugikli:
                <br>
                <input type="text" name="kintamasis">
                <br>
                <input type="submit" name="count" value="Skaiciuoti">
            </form>

            <?php
            //FOR ciklo 1 uzduotis
            if(isset($_POST['kintamasis'])) {
                $a = $_POST['kintamasis'];
                echo "<table";
                for ($b = 1; $b <= 12;$b++) {
                    echo "<tr>";
                    echo "<td>";
                    echo "$a ". " x ". "$b ". " = ". $a*$b. "<br>";
                    echo "</td>";
                    echo "</tr>";
                }
                echo "</table";
            }

            ?>


        </div>
    </div>
</div>


<div class="container-fluid">
    <div class="row">
        <div class="antra-uzduotis col-md-6">
            <h4>FOR ciklo 2 uzduotis:</h4>
            <table>
                <thead>
                <th>x</th>
                <?php for($a=0;$a < 13;$a++) {
                    echo "<th>$a</th>";
                }
                    ?>
                </thead>
                <tbody>
                <?php
                for ($a=0;$a < 13;$a++) {
                    echo "<tr>" . $a;
                    for ($b = 0; $b < 13; $b++) {
                        echo "<td>" . $b . "</td>";
                    }
                    echo '</tr>';
                }
                ?>
                </tbody>
            </table>

        </div>
    </div>
</div>

</body>

</html>



