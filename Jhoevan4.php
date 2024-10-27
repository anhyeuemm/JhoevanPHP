<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Jhoevan Miles Arnoco</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="Jhoevan4.css">
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
// Declare five floating-point numbers
$float1 = 3.14;
$float2 = 7.5;
$float3 = -2.8;
$float4 = 9.67;
$float5 = 0.0045;

// Declare five whole numbers
$int1 = 10;
$int2 = -5;
$int3 = 25;
$int4 = 100;
$int5 = 3;

// Display the original values
echo "Floating Point Numbers: $float1, $float2, $float3, $float4, $float5<br>";
echo "Whole Numbers: $int1, $int2, $int3, $int4, $int5<br><br>";

// Math functions
echo "1. Absolute value of \$float3: " . abs($float3) . "<br>";
echo "2. Round \$float4 to nearest integer: " . round($float4) . "<br>";
echo "3. Ceiling of \$float2: " . ceil($float2) . "<br>";
echo "4. Floor of \$float2: " . floor($float2) . "<br>";
echo "5. Square root of \$int3: " . sqrt($int3) . "<br>";
echo "6. Exponential (e^2) of \$int5: " . exp($int5) . "<br>";
echo "7. Logarithm (natural log) of \$float4: " . log($float4) . "<br>";
echo "8. Maximum of \$float1 and \$float2: " . max($float1, $float2) . "<br>";
echo "9. Minimum of \$int1 and \$int2: " . min($int1, $int2) . "<br>";
echo "10. \$int1 raised to the power of \$int5: " . pow($int1, $int5) . "<br>";
echo "11. Cosine of \$float1 (in radians): " . cos($float1) . "<br>";
echo "12. Sine of \$float2 (in radians): " . sin($float2) . "<br>";
echo "13. Tangent of \$float3 (in radians): " . tan($float3) . "<br>";
echo "14. Convert \$float1 to degrees: " . rad2deg($float1) . "<br>";
echo "15. Convert 90 degrees to radians: " . deg2rad(90) . "<br>";
?>

      <a href="Jhoemain.php"><p style="text-align: center; margin-left:-10px; font-size:25px">Main Page</p></a>
</div>
        </div>
        </section>
    </body>
</html>