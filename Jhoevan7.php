<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Jhoevan Miles Arnoco</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="Jhoevan7.css">
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
// Initialize whole number variables n and m
$n = 5;
$m = 7;

// 1. Display n x m multiplication table using a for loop
echo "<h3>Multiplication Table ($n x $m)</h3>";
echo "<table border='1' cellpadding='5'>";
for ($i = 1; $i <= $n; $i++) {
    echo "<tr>";
    for ($j = 1; $j <= $m; $j++) {
        echo "<td>" . ($i * $j) . "</td>";
    }
    echo "</tr>";
}
echo "</table><br>";

// 2. Display n Fibonacci series and m Fibonacci series using a while loop
function fibonacciSeries($count) {
    $a = 0;
    $b = 1;
    $series = [$a];
    
    $i = 1;
    while ($i < $count) {
        $next = $a + $b;
        $a = $b;
        $b = $next;
        $series[] = $a;
        $i++;
    }
    return $series;
}

echo "<h3>Fibonacci Series of n ($n terms):</h3>";
echo implode(", ", fibonacciSeries($n)) . "<br>";

echo "<h3>Fibonacci Series of m ($m terms):</h3>";
echo implode(", ", fibonacciSeries($m)) . "<br>";

// 3. Compute the factorial of n and the summation of m using a do...while loop

// Factorial of n
$factorial = 1;
$i = $n;
do {
    $factorial *= $i;
    $i--;
} while ($i > 0);
echo "<h3>Factorial of n ($n!): $factorial</h3>";

// Summation of m
$summation = 0;
$j = 1;
do {
    $summation += $j;
    $j++;
} while ($j <= $m);
echo "<h3>Summation of m (1 to $m): $summation</h3>";
?>


      <a href="Jhoemain.php"><p style="text-align: center; margin-left:-10px; font-size:25px">Main Page</p></a>
</div>
        </div>
        </section>
    </body>
</html>