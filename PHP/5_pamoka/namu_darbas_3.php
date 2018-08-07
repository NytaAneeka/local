<?php

$menesiuVardai = array (1=>'Sausis', 2=>'Vasaris', 3=>'Kovas', 4=>'Balandis', 5=>'Gegužė',
    6=>'Birželis', 7=>'Liepa', 8=>'Rugpjutis', 9=>'Rugsėjis', 10=>'Spalis', 11=>'Lapkritis',
    12=>'Gruodis');

$menesiuDienos = array (1=>31, 2=>28, 3=>31, 4=>30, 5=>31, 6=>30, 7=>31, 8=>31, 9=>30,10=>31, 11=>30, 12=>31);

$totalDays = 0;
$countDays = Array();
foreach ($menesiuVardai as $men => $title) {
    if (!isset($countDays[$menesiuDienos[$men]])) { $countDays[$menesiuDienos[$men]] = Array(); }
    $countDays[$menesiuDienos[$men]][] = $title;
    $totalDays += $menesiuDienos[$men];
}
krsort($countDays);

foreach ($countDays as $day => $months) {
    echo "Metuose yra <strong style='color: red;'>" . count($months) ."</strong> mėnesiais turintys <strong style='color: red;'>$day</strong> dienas. <span style='color: red;'>(" . implode(",",$months) .")</span> <br />";
}
echo "Viso metuose yra <strong style='color: red;'>" . array_sum($menesiuDienos) ."</strong> dienos<br />";
// Arba kitu variantu panaudojant ciklą ir skaičiuojant jame
//echo "Viso metuose yra <strong style='color: red;'>" . $totalDays ."</strong> dienos<br />";


echo "----------------------------------<br />";
foreach ($menesiuVardai as $month => $title) {
    echo "$title yra <strong style='color: red;'>$month</strong> mėnuo, jis turi <strong style='color: red;'>$menesiuDienos[$month]</strong> d. <br />";
}