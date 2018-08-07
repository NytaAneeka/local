<?php



$navigacija=array(
    array(
        'id'=>1,
        'caption'=>'Apie mus'
    ),
    array(
        'id'=>4,
        'caption'=>'Teikiamos paslaugos'
    ),
    array(
        'id'=>5,
        'caption'=>'Mūsų darbai'
    ),
    array(
        'id'=>8,
        'caption'=>'Kontaktai'
    )

);

function generateMenu($navigacija){
    foreach ($navigacija as $key => $value){
        echo "<li><a href='namu_darbas.php?id=".$value['id']."'>" . $value['caption']. "</a></li>" ;
    }
}

function getContent ($contentID){
    include "$contentID.php";
}

?>

<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <style>
        .pics {
            text-align: right;
        }

        .navbaras a{
            font-family: sans-serif;
            text-transform: uppercase;
            color: #07070f94;
            text-decoration: none;

        }
        .navbaras a:hover {
            color: white;
        }

        .navbaras ul,li {
            list-style: none;
            text-align: right;
            line-height: 3;
        }
        .navbaras ul {
            margin-top: 100px;

        }
        .navbaras li {
            border-bottom: 1px solid white;
            font-weight: bold;
        }
        .menu {
            background-color: #bbcad9;
        }


    </style>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="menu col-xs-12 col-md-4"
        <nav class="nav nav-pills nav-stacked">
            <div class="navbaras container">
                <ul>
                    <?php  generateMenu($navigacija); ?>
                    <!-- Meniu sugeneruoti panaudokite savo funkcija, kap pvz: generateMenu(); su auksciau esanciu sukurtu masyvu. -->
                    <!-- Paspaudus ant meniu punkto turi isikelti atitinkamas puslapis -->
                </ul>
            </div>
        </nav>
    </div>



    <div class="pics col-xs-12 col-md-8">
        <?php
        // Panaudoti funkcija puslapio informacijos isvedimui
        // Funkcija gali vadintis:
        // getContent([puslapio_id]);
        // Pvz: getContent(5) kuris isveda musu galerijos (musu Darbai) puslapio informacija

        //Puslapio ikelimui/prijungimui prie esamo failo naudokite include
        // Pvaz zemiau:
         getContent($_GET['id']);
        ?>

    </div>
</div>
</body>
</html>
