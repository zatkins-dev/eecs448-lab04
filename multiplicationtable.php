<?php
    function getEntry($x, $y) {
        return "<td>" . $x * $y . "</td>";
    }

    echo "<table>";
    for ($x = 1; $x <= 100; $x++) {
        $row = "<tr>";
        for ($y = 1; $y <= 100; $y++) {
            $row += getEntry($x,$y);
        }
        $row += "</tr>";
        echo $row;
    }
    echo "</table>";
>