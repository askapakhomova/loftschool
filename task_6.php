<?php

echo "<table border='1'>";
for ($row=1; $row <= 10; $row++) {
    for ($col=1; $col <= 10; $col++) {
        $a = "$row * $col";
        echo "<td>$a</td> ";
    }
    echo "</tr>";
}
echo "</table>";

