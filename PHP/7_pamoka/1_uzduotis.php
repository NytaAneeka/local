<?php

$rockBands = array(
    array('Beatles','Love Me Do', 'Hey Jude','Helter Skelter'),
    array('Rolling Stones','Waiting on a Friend','Angie','Yesterday\'s Papers'),
    array('Eagles','Life in the Fast Lane','Hotel California','Best of My Love')
);

foreach ($rockBands as $songs) {
    $band = $songs[0];
    unset($songs[0]);
    echo 'Grupės <strong>' . $band .'</strong> dainos: <strong>' . implode(", ",$songs) .'</strong><br />';
}