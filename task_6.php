<?php

echo "<table border='1'>";
for ($row=1; $row <= 10; $row++) {
    for ($col=1; $col <= 10; $col++) {
        if (($col%2) == 0 && ($row%2) == 0) {
            $a = "$row * $col";
            echo "<td> ($a) </td> ";
        } elseif (($col%2) != 0 && ($row%2) != 0){
            $a = "$row * $col";
            echo "<td> [$a] </td> ";
        } else {
            $a = $row * $col;
            echo "<td> $a </td> ";
        }
    }
    echo "</tr>";
}
echo "</table>";




