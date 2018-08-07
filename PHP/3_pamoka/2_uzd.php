<?php
echo "<table border =\"1\" style='border-collapse: collapse'>";

for ($x=0; $x <= 12; $x++) {
    if ($x==0){
        echo "<th>x</th>";
    }
    echo "<th>$x</th>";
}

for ($y=0; $y <= 12; $y++) {
    echo "<tr>";
    echo "<th>$y</th>";
    for ($row=0; $row <= 12; $row++) {
        $p = $y * $row;
        echo "<td>$p</td>";
    }
    echo "</tr>";
}

echo "</table><br>";

