<?php

/*
    Patobulinkite prieš tai buvusį scriptą (su sostinėmis) taip, kad jis iš vestų du sąrašus:
    Vienas surūšiuotas pagal sostines didėjimo tvarka, kitas surūšiuotas pagal valstybes didėjimo
    tvarka.
 */

$ceu = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels",
    "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris",
    "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens",
    "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid",
    "Sweden"=>"Stockholm", "United Kingdom"=>"London", "Cyprus"=>"Nicosia",
    "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallin",
    "Hungary"=>"Budapest", "Latvia"=>"Riga", "Malta"=>"Valetta", "Austria" => "Vienna",
    "Poland"=>"Warsaw") ;

echo '<strong>Surykiuojame pagal sostines:</strong> <br />';
asort($ceu,SORT_DESC);
foreach ($ceu as $country => $capital) {
    echo "The capital of " . $country ." is $capital <br />";
}

echo '<br /><strong>Surykiuojame pagal šalis:</strong> <br />';
ksort($ceu);
foreach ($ceu as $country => $capital) {
    echo "The capital of " . $country ." is $capital <br />";
}