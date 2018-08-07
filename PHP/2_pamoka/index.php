
<body>

<h3>Kuno mases indeksas (KMI) skaiciuokle</h3>
<br>
<p>KMI - tai ugio ir svorio santykio rodiklis, leidziantis nurodyti ar zmogaus svoris normalus ar yra antsvoris ar nutukimas.</p>
<p>Noredami apskaiciuoti savo KMI iveskite savo duomenis:</p>
<br>

<form method="POST" action="">
    Svoris (kg):
    <input type="text" name="svoris">
    <br>
    Ugis (cm):
    <input type="text" name="ugis">
    <br>
    <input type="submit" value="Skaiciuoti">
</form>


<?php



if (isset($_POST['svoris']) && isset($_POST['ugis'])) {
    $svoris = $_POST['svoris'];
    $ugis = $_POST['ugis'];
    $kmi = round ($svoris/(($ugis/100)*2),1);
    echo $kmi;
}else {
    echo "Prasom ivesti duomenis";
}
?>
<br>
<br>
<a href="1_uzd.php">Pirma uzduotis</a>
<br>
<a href="3_uzd.php">Trecia uzduotis</a>
<br>
<a href="4_uzd.php">Ketvirta uzduotis</a>
<br>
<a href="5_uzd.php">Penkta uzduotis</a>

</body>
