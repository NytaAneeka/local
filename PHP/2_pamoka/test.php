
<?php

$text = '';
$check = '';

if (isset($_POST['ats'])) {
    $check = $_POST['ats'];
    if ($check === 'Elnias') {
        echo "Jusu atsakymas teisingas,tai Elnias <br>";

    } else {
        echo "Jusu atsakymas neteisingas <br>";
    }
}
?>



Koks tai gyvunas?
<form method="POST">
    <input type="radio" name="ats" value="Katinas" <?php echo $check === 'Katinas'?'checked':''; ?> > Katinas <br>
    <input type="radio" name="ats" value="Suo" <?php echo $check === 'Suo'?'checked':''; ?>> Suo <br>
    <input type="radio" name="ats" value="Elnias" <?php echo $check === 'Elnias'?'checked':''; ?>> Elnias <br>
    <input type="radio" name="ats" value="Begemotas" <?php echo $check === 'Begemotas'?'checked':''; ?>> Begemotas <br>
    <input type="submit" value="Speti">
</form>


