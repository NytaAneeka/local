<?php

$db = mysqli_connect('localhost','root','','darbuotojai_db');
$db -> set_charset('utf8');
$rezultatas=$db->query("SELECT * FROM darbuotojai WHERE id={$_GET['id']}");
$darbuotojas = $rezultatas->fetch_assoc();
$resultPareigos = $db->query("SELECT * FROM pareigos WHERE id={$darbuotojas['pareigos_id']}");
$pareigos = $resultPareigos->fetch_assoc();


$NPD = 149.00;
$pajamos = ($darbuotojas['salary']-$NPD)* 0.15;
$sveikata = $darbuotojas['salary'] * 0.06;
$soc = $darbuotojas['salary'] * 0.03;
$iRankas = (($darbuotojas['salary']) - ($pajamos+$sveikata+$soc));
$sodra = $darbuotojas['salary'] * 0.3098;
$fondas = $darbuotojas['salary'] * 0.002;
$darboVietosKaina = $darbuotojas['salary']+$sodra+$fondas;
//$par = $db->query("")
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
.curr {
	text-align: right;
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
					<h1><?php echo  "{$darbuotojas['name']} {$darbuotojas['surname']}"; ?></h1>
				</div>




			</div>

			<div class="col-md-6">

				<p>
					<b>Pareigos: </b> <br /> <?php echo $pareigos['name']; ?>
				</p>
				<p>
					<b>Mėnesinė alga: </b> <br /> <?php echo $darbuotojas['salary']; ?>
				</p>

			</div>
			<div class="col-md-6">

				<p>
					<b>Telefonas: </b> <br /> <?php echo $darbuotojas['phone']; ?>
				</p>
				


			</div>
			<div class="clearfix"></div>
			<div class="col-md-6">

				<div class="panel panel-primary">
					<!-- Default panel contents -->
					<div class="panel-heading">Mokesčiai</div>


					<table class="table  table-hover">

						<tr>
							<td>Priskaičiuotas atlyginimas „ant popieriaus“:</td>
							<td class="curr"><?php echo $darbuotojas['salary']; ?> EUR</td>


						</tr>
						<tr>
							<td>Pritaikytas NPD</td>
							<td class="curr"><?php echo $NPD; ?> EUR</td>


						</tr>
						<tr>
							<td>Pajamų mokestis 15 %</td>
							<td class="curr"><?php echo $pajamos; ?> EUR</td>


						</tr>
						<tr>
							<td>Sodra. Sveikatos draudimas 6 %</td>
							<td class="curr"><?php echo $sveikata; ?> EUR</td>


						</tr>
						<tr>
							<td>Sodra. Pensijų ir soc. draudimas 3 %</td>
							<td class="curr"><?php echo $soc; ?> EUR</td>


						</tr>

						<tr class="info">
							<td>Išmokamas atlyginimas „į rankas“:</td>
							<td class="curr"><b><?php echo $iRankas; ?> EUR</b></td>
						</tr>

						<tr>
							<td colspan="2"><b>Darbo vietos kaina</b></td>
						</tr>

						<tr>
							<td>Sodra 30.98 %:</td>
							<td class="curr"><?php echo $sodra; ?> EUR</td>
						</tr>

						<tr>
							<td>Įmokos į garantinį fondą 0.2 % :</td>
							<td class="curr"><?php echo $fondas; ?> EUR</td>

						</tr>
						<tr class="info">
							<td>Visa darbo vietos kaina :</td>
							<td class="curr"><b><?php echo $darboVietosKaina; ?> EUR</b></td>

						</tr>
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