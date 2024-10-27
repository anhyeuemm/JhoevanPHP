<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Jhoevan Miles Arnoco</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="Jhoevan2.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Agdasima:wght@400;700&family=Arima:wght@100..700&family=Bebas+Neue&family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
    </head>
    <body>
        <section class="display-variable">
        <div class="container">
            <div class="container-data">
            <h1>The Use of Variable</h1>
            <?php
    // Whole numbers (integers) representing item quantities
    $itemQuantity1 = 10;
    $itemQuantity2 = 25;
    $itemQuantity3 = 30;
    $itemQuantity4 = 15;
    $itemQuantity5 = 50;

    // Floating point numbers representing item prices
    $itemPrice1 = 99.99;
    $itemPrice2 = 199.50;
    $itemPrice3 = 249.75;
    $itemPrice4 = 129.95;
    $itemPrice5 = 75.25;

    // Strings representing item descriptions
    $itemDescription1 = "Red T-shirt";
    $itemDescription2 = "Blue Jeans";
    $itemDescription3 = "Wireless Headphones";
    $itemDescription4 = "Smartwatch";
    $itemDescription5 = "Gaming Mouse";

    // Characters representing item ratings (e.g., A, B, C, etc.)
    $itemRating1 = 'A';
    $itemRating2 = 'B';
    $itemRating3 = 'C';
    $itemRating4 = 'B';
    $itemRating5 = 'A';

    // Displaying all the variables with corresponding messages
    echo "<h2>Item Quantities</h2>";
    echo "<p>Item 1 Quantity: $itemQuantity1</p>";
    echo "<p>Item 2 Quantity: $itemQuantity2</p>";
    echo "<p>Item 3 Quantity: $itemQuantity3</p>";
    echo "<p>Item 4 Quantity: $itemQuantity4</p>";
    echo "<p>Item 5 Quantity: $itemQuantity5</p>";

    echo "<h2>Item Prices</h2>";
    echo "<p>Item 1 Price: $itemPrice1</p>";
    echo "<p>Item 2 Price: $itemPrice2</p>";
    echo "<p>Item 3 Price: $itemPrice3</p>";
    echo "<p>Item 4 Price: $itemPrice4</p>";
    echo "<p>Item 5 Price: $itemPrice5</p>";

    echo "<h2>Item Descriptions</h2>";
    echo "<p>Item 1 Description: $itemDescription1</p>";
    echo "<p>Item 2 Description: $itemDescription2</p>";
    echo "<p>Item 3 Description: $itemDescription3</p>";
    echo "<p>Item 4 Description: $itemDescription4</p>";
    echo "<p>Item 5 Description: $itemDescription5</p>";

    echo "<h2>Item Ratings</h2>";
    echo "<p>Item 1 Rating: $itemRating1</p>";
    echo "<p>Item 2 Rating: $itemRating2</p>";
    echo "<p>Item 3 Rating: $itemRating3</p>";
    echo "<p>Item 4 Rating: $itemRating4</p>";
    echo "<p>Item 5 Rating: $itemRating5</p>";

    ?>
    <a href="Jhoemain.php"><p style="text-align: center; margin-left:-10px; font-size:25px">Main Page</p></a>
    </div>
        </div>
        </section>
    </body>
</html>