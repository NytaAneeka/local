<?php
//PIRMA uzduotis
$skaicius = 5;
$laipsnis = 3;

echo laipsnis($skaicius,$laipsnis);

function laipsnis($skaicius,$laipsnis){
    if ($laipsnis != 0){
        return $skaicius * laipsnis($skaicius,$laipsnis-1);
    }
    else {
        return 1;
    }
}
echo "<br><br><br>";