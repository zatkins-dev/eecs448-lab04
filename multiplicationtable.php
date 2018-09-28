<?php
    function getEntry($a, $b) {
        $prod = $a * $b;
        return ("<td>{$prod}</td>");
    }

    echo "<table align=\"center\">";
    echo "<tr><td>&nbsp;</td>";
    for ($x = 1; $x <= 100; $x++) {
        echo "<th scope=\"col\"> $x </th>";
    }
    echo "</tr>";
    for ($x = 1; $x <= 100; $x++) {
        echo "<tr><th scope=\"row\"> $x </th>";
        for ($y = 1; $y <= 100; $y++) {
            $entry = getEntry($x,$y);
            echo "$entry";
        }
        echo "</tr>";
    }
    echo "</table>";
?>