<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Jhoevan Miles Arnoco</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="Jhoevan6.css">
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
// Initialize five string variables and five integer variables
$strings = ["Banana", "Apple", "Orange", "Mango", "Peach"];
$numbers = [20, 5, 15, 10, 25];

// Function to manually sort strings in ascending order
function sortStringsAsc(&$array) {
    $n = count($array);
    for ($i = 0; $i < $n - 1; $i++) {
        for ($j = $i + 1; $j < $n; $j++) {
            if ($array[$i] > $array[$j]) {
                $temp = $array[$i];
                $array[$i] = $array[$j];
                $array[$j] = $temp;
            }
        }
    }
}

// Function to manually sort strings in descending order
function sortStringsDesc(&$array) {
    $n = count($array);
    for ($i = 0; $i < $n - 1; $i++) {
        for ($j = $i + 1; $j < $n; $j++) {
            if ($array[$i] < $array[$j]) {
                $temp = $array[$i];
                $array[$i] = $array[$j];
                $array[$j] = $temp;
            }
        }
    }
}

// Display strings in ascending order
sortStringsAsc($strings);
echo "Strings in ascending order: " . implode(", ", $strings) . "<br>";

// Display strings in descending order
sortStringsDesc($strings);
echo "Strings in descending order: " . implode(", ", $strings) . "<br>";

// Check if the first number is divisible by the fifth number
if ($numbers[0] % $numbers[4] == 0) {
    $sum = array_sum($numbers);
    $product = 1;
    foreach ($numbers as $num) {
        $product *= $num;
    }
    $average = $sum / count($numbers);

    echo "Sum of numbers: $sum<br>";
    echo "Product of numbers: $product<br>";
    echo "Average of numbers: $average<br>";
} else {
    // Manual ascending order sort for numbers if not divisible
    for ($i = 0; $i < count($numbers) - 1; $i++) {
        for ($j = $i + 1; $j < count($numbers); $j++) {
            if ($numbers[$i] > $numbers[$j]) {
                $temp = $numbers[$i];
                $numbers[$i] = $numbers[$j];
                $numbers[$j] = $temp;
            }
        }
    }

    echo "Numbers in ascending order: " . implode(", ", $numbers) . "<br>";
}
?>


      <a href="Jhoemain.php"><p style="text-align: center; margin-left:-10px; font-size:25px">Main Page</p></a>
</div>
        </div>
        </section>
    </body>
</html>