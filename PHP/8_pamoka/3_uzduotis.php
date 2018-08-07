<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
</head>
<body>
<div class="container-fluid mt-5">
    <div class="row">
        <div class="col-xs-12 col-md-8 offset-md-2">
            <form method="post" class="text-center">
                <label>Įveskite metus</label>
                <input type="text" value="" name="metai" class="form-control" />
                <button class="btn btn-primary" type="submit">Tikrinti</button>
            </form>

            <?php
            // Pamėginkime sukurti f-ją kuri keltų įvestą skaičių į tekstinį lauką kvadratu ir duomenis
            // atvaizduotų html‘e.
            // 4 Pamokoje mokinomės apie keliamuosius metus. For ciklas
            if (isset($_POST['metai'])) {
                $type = skaiciuoti($_POST['metai']);

                if ($type) {
                    echo 'Metai keliamieji'; }
                else {
                    echo 'Metai nėra keliamieji'; }
            }
            ?>
        </div>
    </div>
</div>
</body>
</html>

<?php

function skaiciuoti($metai) {
    $keliamieji = false;

    if ($metai % 400 === 0) { $keliamieji = true; }
    else if ($metai % 100 != 0) {
        if ($metai % 4 === 0) { $keliamieji = true; }
    }

    return $keliamieji;
}
