<?php
$kl1= 1;
$kl2 = 2;
$kl3 = 3;
$error1 = "none";
$success1 = "none";
$error2 = "none";
$success2 = "none";
$error3 = "none";
$success3 = "none";
$ats1 = '';
$ats2 = '';
$ats3 = '';
$trueAts = 0;

if (isset($_POST['klausimas1']) && isset($_POST['klausimas2']) && isset($_POST['klausimas3'])) {
    $ats1 = $_POST['klausimas1'];
    $ats2 = $_POST['klausimas2'];
    $ats3 = $_POST['klausimas3'];

    if($kl1 == $_POST['klausimas1']) {
        $success1 = "block";
        $trueAts++;
    } else {
        $error1 = "block";
    }
    if($kl2 == $_POST['klausimas2']) {
        $success2 = "block";
        $trueAts++;
    } else {
        $error2 = "block";
    }
    if($kl3 == $_POST['klausimas3']) {
        $success3 = "block";
        $trueAts++;
    } else {
        $error3 = "block";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">
        .container {
            margin-top: 20px;
        }

        h4{
            margin-top: 0px;
            padding-top: 0px;
        }


    </style>
</head>
<body>

<div class="container">

    <!-- Static navbar -->
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed"
                        data-toggle="collapse" data-target="#navbar" aria-expanded="false"
                        aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span> <span
                            class="icon-bar"></span> <span class="icon-bar"></span> <span
                            class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Baltic talents</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Contact</a></li>

                </ul>

            </div>
            <!--/.nav-collapse -->
        </div>
        <!--/.container-fluid -->
    </nav>

    <!-- Main component for a primary marketing message or call to action -->
    <div class="jumbotron">
        <h1>Apklausa </h1>
        <p> Jūs atsakėte teisingai į <?php echo $trueAts; ?> klausimus iš 3 ir surinkote <?php echo round(100/3*$trueAts,2); ?> %</p>


    </div>
    <div class="row">


        <div class="col-md-8 col-md-offset-2">

            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Testas</h3>
                </div>
                <div class="panel-body">
                    <form class="form2" method="post">
                        <div class="row">
                            <div class="col-md-6 col-xs-6">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/5/55/Rocky_Mountain_Bull_Elk.jpg" class="img-responsive">
                            </div>
                            <div class="col-md-6 col-xs-6" >

                                <h4>Koks tai gyvūnas? </h4>
                                <input type="radio" name="klausimas1" value="1" <?php echo $ats1 == '1'?'checked':''; ?> >
                                Elnias <br>
                                <input type="radio" name="klausimas1" value="2" <?php echo $ats1 == '2'?'checked':''; ?>>
                                Šuo <br>
                                <input type="radio" name="klausimas1" value="3" <?php echo $ats1 == '3'?'checked':''; ?>>
                                Katinas <br>
                                <input type="radio" name="klausimas1" value="4" <?php echo $ats1 == '4'?'checked':''; ?>>
                                Begemotas <br><br>
                                <div class="alert alert-success" style="display: <?php echo $success1; ?>">Teisingai</div>
                                <div class="alert alert-danger" style="display: <?php echo $error1; ?>">Neteisingai</div>


                            </div>
                        </div>

                        <div class="row" style="margin-top: 10px;">
                            <div class="col-md-6 col-xs-6">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/4/47/American_Eskimo_Dog.jpg" class="img-responsive">
                            </div>
                            <div class="col-md-6 col-xs-6">

                                <h4>Koks tai gyvūnas? </h4>
                                <input type="radio" name="klausimas2" value="1" <?php echo $ats2 == '1'?'checked':''; ?>>
                                Elnias <br>
                                <input type="radio" name="klausimas2" value="2" <?php echo $ats2 == '2'?'checked':''; ?>>
                                Šuo <br>
                                <input type="radio" name="klausimas2" value="3" <?php echo $ats2 == '3'?'checked':''; ?>>
                                Katinas <br>
                                <input type="radio" name="klausimas2" value="4" <?php echo $ats2 == '4'?'checked':''; ?>>
                                Begemotas <br><br>
                                <div class="alert alert-success" style="display: <?php echo $success2; ?>">Teisingai</div>
                                <div class="alert alert-danger" style="display: <?php echo $error2; ?>">Neteisingai</div>


                            </div>
                        </div>
                        <div class="row" style="margin-top: 10px;">
                            <div class="col-md-6 col-xs-6">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/f/f6/Shaded_Tan_Maine_Coon_cat.jpg" class="img-responsive">
                            </div>
                            <div class="col-md-6 col-xs-6">

                                <h4>Koks tai gyvūnas? </h4>
                                <input type="radio" name="klausimas3" value="1" <?php echo $ats3 == '1'?'checked':''; ?>>
                                Elnias <br>
                                <input type="radio" name="klausimas3" value="2" <?php echo $ats3 == '2'?'checked':''; ?>>
                                Šuo <br>
                                <input type="radio" name="klausimas3" value="3" <?php echo $ats3 == '3'?'checked':''; ?>>
                                Katinas <br>
                                <input type="radio" name="klausimas3" value="4" <?php echo $ats3 == '4'?'checked':''; ?>>
                                Begemotas <br><br>
                                <div class="alert alert-success" style="display: <?php echo $success3; ?>">Teisingai</div>
                                <div class="alert alert-danger" style="display: <?php echo $error3; ?>">Neteisingai</div>


                            </div>
                        </div>
                        <div class="row" style="margin-top: 10px;">

                            <div class="col-md-6 col-xs-6 col-md-offset-6 col-xs-offset-6">

                                <input type="submit" class="btn btn-lg btn-primary btn-block" value="Spėti">

                            </div>
                        </div>
                    </form>

                </div>
            </div>


        </div>


    </div>
</div>
<!-- /container -->

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script
        src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>