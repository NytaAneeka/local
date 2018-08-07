<?php

$favColors = array( "BlanchedAlmond"=>"#ffebcd","CadetBlue" => "#5f9ea0","BurlyWood" => "#deb887", "DarkOliveGreen" => "#556b2f", "HotPink" => "#ff69b4", "Papayawhip" => "#ffefd5");
?>
<style>
    table,tr,td,th {
        border: 1px solid #adadad;
    }
</style>


<table>
    <thead>
    <tr>
        <th>Color Name</th>
        <th>Hex Code</th>
    </tr>
    </thead>
    <?php foreach ($favColors as $color => $hex): ?>

        <tbody >
        <tr>
            <td style="background-color: <?php echo $color ?>;">
                <?php echo "$color"?>
            </td>
            <td style="background-color: <?php echo $color ?>">
                <?php echo "$hex"?>
            </td>
        </tr>
        </tbody>
    <?php endforeach; ?>
</table>