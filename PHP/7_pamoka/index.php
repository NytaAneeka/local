<?php

//$masyvas = array(
//    "index" => Array (1,2,3,4,5,6,7),
//    "index2" => Array (1,2,3,4,5,6)
//);
//echo
//
//print_r($masyvas["index"]);

$rockBands = array(

    array('Beatles','Love Me Do', 'Hey Jude','Helter Skelter'),
    array('Rolling Stones','Waiting on a Friend','Angie', 'Yesterday\'s Papers'),
    array('Eagles','Life in the Fast Lane','Hotel California', 'Best of My Love')
);


foreach ($rockBands as $songs) {
$band = $songs[0];
unset($songs[0]);
echo "Grupe: " . $band . ", Daina: ". implode(",",$songs). "<br>";


//
//echo "Grupe: " .$rockBands[0][0] . ", Daina: ".$rockBands[0][1]. ", Daina: ".$rockBands[0][2]. ", Daina: ".$rockBands[0][3]."<br>";
//echo "Grupe: " .$rockBands[1][0] . ", Daina: ".$rockBands[1][1]. ", Daina: ".$rockBands[1][2]. ", Daina: ".$rockBands[1][3]."<br>";
//echo "Grupe: " .$rockBands[2][0] . ", Daina: ".$rockBands[2][1]. ", Daina: ".$rockBands[2][2]. ", Daina: ".$rockBands[2][3]."<br>";

}

?>
<a href="2_uzduotis.php">2 UZDUOTS <br></a>