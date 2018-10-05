<?php
    echo "<html>
    <head>
        <script src=\"optionHandler.js\"> </script>
        <script src=\"resetHandler.js\"> </script>
        <link rel=\"stylesheet\" href=\"style.css\"/>
        <title>
            Storefront
        </title>
    </head>
    <header>
        <nav>
            <a href=\"../../index.html\">Home</a>
            &#x2712;
            <a href=\"index.html\">Lab 04</a>
            &#x2712;
            <a href=\"customerFrontend.html\">Storefront</a>
        </nav>
    </header>
    <main>
    <div class=\"content titlebox\"><h1>Order Confirmation</h1></div>
        <div class=\"content\">";
    echo "<div><h2>Thank you for ordering from The World's Finest Goods!</h2></div>";
    $username = $_POST["user"];
    $password = $_POST["pass"];
    echo "<div><h3>Your Login Information:</h3></div>";
    echo "<div><b>Username:</b> $username </div>";
    echo "<div><b>Password:</b> $password </div><br>";

    $numShoes = 0;
    if (isset($_POST["shoeSelected"])) {
        $numShoes = $_POST["numShoes"];
    }
    $numPens = 0;
    if (isset($_POST["penSelected"])) {
        $numPens = $_POST["numPens"];
    }
    $numRocks = 0;
    if (isset($_POST["rockSelected"])) {
        $numRocks = $_POST["numRocks"];
    }
    
    $shippingCost = $_POST["shipping"];
    $shippingType = "";
    switch ($shippingCost):
        case 0:
            $shippingType = "7 Day";
            break;
        case 5:
            $shippingType = "3 Day";
            break;
        case 50:
            $shippingType = "Overnight";
        default:
            break;
    endswitch;

    $itemLabels = array("Shoes", "Pens", "Paperweights");
    $items = array($numShoes, $numPens, $numRocks);
    $itemCost = array(50.00,15.00,25.00);
    $subTotals = array_map(function($x,$y) {return $x*$y;}, $items, $itemCost);
    $total = array_sum($subTotals) + $shippingCost;
    echo "<div><h3>Your Reciept:</h3></div>";
    echo "<div>";
    echo "<table>";
    echo "<tr><td>&nbsp;</td>";
    echo "<th scope=\"col\"> Quantity </th>";
    echo "<th scope=\"col\"> Unit Cost </th>";
    echo "<th scope=\"col\"> Subtotal </th>";
    for ($i = 0; $i < 3; $i++) {
        echo "<tr><th scope=\"row\"> $itemLabels[$i] </th>";
        echo "<td> $items[$i] </td>";
        echo "<td> \$$itemCost[$i].00 </td>";
        echo "<td> \$$subTotals[$i].00 </td></tr>";
    }
    echo "<tr><th scope=\"row\"> Shipping </th><td colspan=\"2\"> $shippingType </td><td> \$$shippingCost.00 </td></tr>";
    echo "<tr><th scope=\"row\" colspan=\"3\"> Total </th><td> \$$total.00 </td></tr>";
    echo "</table>";
    echo "</div>";
    echo "</div></main></html>";
?>