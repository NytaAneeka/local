<?php
/*
    Sukurkite internetinį puslapį kuris parodytų tokį tekstą:
    "The memory of that scene for me is like a frame of film forever frozen at that moment: the red
    carpet, the green lawn, the white house, the leaden sky. "
 */
$color = array('white', 'green', 'red', 'blue', 'black');

echo "The memory of that scene for me is like a frame of film forever frozen at that moment: the <strong>" . $color[2] ."</strong>
        carpet, the <strong>$color[1]</strong> lawn, the <strong>$color[0]</strong> house, the leaden sky. ";
?>