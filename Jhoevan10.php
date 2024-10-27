<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Jhoevan Miles Arnoco</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="Jhoevan10.css">
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
// Define N and create a 3x3 array as an example
$N = 3;
$array = [
    [4, 2, 7],
    [9, 5, 1],
    [3, 6, 8]
];

// Display the NxN array
echo "<h3>NxN Array (N=$N):</h3>";
echo "<table border='1' cellpadding='5'>";
for ($i = 0; $i < $N; $i++) {
    echo "<tr>";
    for ($j = 0; $j < $N; $j++) {
        echo "<td>{$array[$i][$j]}</td>";
    }
    echo "</tr>";
}
echo "</table><br>";

// Variables for overall calculations
$overallSum = 0;
$overallCount = $N * $N;
$overallMin = PHP_INT_MAX;
$overallMax = PHP_INT_MIN;

// Initialize arrays to store row and column sums, averages, min, and max
$rowSums = array_fill(0, $N, 0);
$colSums = array_fill(0, $N, 0);
$rowMin = array_fill(0, $N, PHP_INT_MAX);
$rowMax = array_fill(0, $N, PHP_INT_MIN);
$colMin = array_fill(0, $N, PHP_INT_MAX);
$colMax = array_fill(0, $N, PHP_INT_MIN);
$diag1Sum = $diag2Sum = 0;

// Calculate row and column sums, min, max, and overall values
for ($i = 0; $i < $N; $i++) {
    for ($j = 0; $j < $N; $j++) {
        $value = $array[$i][$j];

        // Row and column calculations
        $rowSums[$i] += $value;
        $colSums[$j] += $value;
        $rowMin[$i] = min($rowMin[$i], $value);
        $rowMax[$i] = max($rowMax[$i], $value);
        $colMin[$j] = min($colMin[$j], $value);
        $colMax[$j] = max($colMax[$j], $value);

        // Overall calculations
        $overallSum += $value;
        $overallMin = min($overallMin, $value);
        $overallMax = max($overallMax, $value);

        // Diagonal calculations
        if ($i == $j) {
            $diag1Sum += $value; // Primary diagonal
        }
        if ($i + $j == $N - 1) {
            $diag2Sum += $value; // Secondary diagonal
        }
    }
}

// Display row and column results
echo "<h3>Row and Column Results:</h3>";
for ($i = 0; $i < $N; $i++) {
    echo "Row $i - Sum: {$rowSums[$i]}, Average: " . ($rowSums[$i] / $N) . ", Min: {$rowMin[$i]}, Max: {$rowMax[$i]}<br>";
    echo "Column $i - Sum: {$colSums[$i]}, Average: " . ($colSums[$i] / $N) . ", Min: {$colMin[$i]}, Max: {$colMax[$i]}<br>";
}

// Diagonal sums and averages
echo "<h3>Diagonal Results:</h3>";
echo "Primary Diagonal - Sum: $diag1Sum, Average: " . ($diag1Sum / $N) . "<br>";
echo "Secondary Diagonal - Sum: $diag2Sum, Average: " . ($diag2Sum / $N) . "<br>";

// Overall sum, average, min, and max
$overallAverage = $overallSum / $overallCount;
echo "<h3>Overall Results:</h3>";
echo "Overall Sum: $overallSum<br>";
echo "Overall Average: $overallAverage<br>";
echo "Overall Minimum: $overallMin<br>";
echo "Overall Maximum: $overallMax<br>";
?>



      <a href="Jhoemain.php"><p style="text-align: center; margin-left:-10px; font-size:25px">Main Page</p></a>
</div>
        </div>
        </section>
    </body>
</html>