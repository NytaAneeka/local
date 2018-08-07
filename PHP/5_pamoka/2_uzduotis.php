<?php
// Sukurkite scriptą kuris atvaizduotų šone parodytą lentelę.
$spalvos=array('BlanchedAlmond', 'CadetBlue', 'BurlyWood','DarkOliveGreen', 'HotPink', 'PapayaWhip');
?>
<table>
    <?php foreach ($spalvos as $spalva): ?>
        <tr>
            <td style="background-color: <?php echo $spalva; ?> ;"><?php echo $spalva; ?></td>
        </tr>
    <?php endforeach; ?>
</table>