<?php
    echo "<head>
    <title>
        Lab 04
    </title>
    <link rel=\"stylesheet\" href=\"../../style.css\"/>
</head>
<header>
    <nav>
        <a href=\"../../index.html\">Home</a>
        &#x2712;
        <a href=\"index.html\">Lab 04</a>
    </nav>
</header>";

    function getEntry($a, $b) {
        $prod = $a * $b;
        return ("<td align=\"center\">{$prod}</td>");
    }

    echo "<table>";
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