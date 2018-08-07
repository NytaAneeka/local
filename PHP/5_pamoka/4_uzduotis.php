<?php

$colors = array('white', 'green', 'red', 'blue', 'black');

echo 'Nesurykiuotas masyvas: <br />';
foreach ($colors as $color) {
    echo $color .'<br />';
}

echo '<br />Surykiuotas masyvas: <br />';
sort($colors);
foreach ($colors as $color) {
    echo $color .'<br />';
}