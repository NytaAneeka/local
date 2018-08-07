<?php

$db = mysqli_connect('localhost','root','','paskaitos');

$result = mysqli_query($db,"select * from pirma_paskaita order by 'Amzius' ASC, 'Metai' ASC")
or die(mysqli_errno($db));

while ($row = mysqli_fetch_assoc($result)) {
    echo $row['Vardas'].' - '. $row['Pavarde']. ' - '. $row['Metai'].' - '.$row['Amzius'].'<br>';

}