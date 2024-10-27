<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Jhoevan Miles Arnoco</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="Jhoevan5.css">
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
// Define constants
define("PI", 3.14159);
define("GRAVITY", 9.81);
define("LIGHT_SPEED", 299792458); // meters per second
define("AVOGADRO", 6.022e23); // Avogadro's number
define("BOLTZMANN", 1.380649e-23); // Boltzmann constant in J/K
define("PLANCK", 6.626e-34); // Planck constant in J·s
define("EARTH_RADIUS", 6371); // in kilometers
define("ABSOLUTE_ZERO_C", -273.15); // Celsius
define("GOLDEN_RATIO", 1.6180339887);
define("EULER", 2.71828); // Euler's number

// Display constant values with examples
echo "<h2>Constants and Examples of Their Use:</h2>";

// Example calculations and displays
echo "1. PI: " . PI . "<br>";
echo "   Circumference of a circle with radius 5: " . (2 * PI * 5) . "<br><br>";

echo "2. GRAVITY: " . GRAVITY . " m/s²<br>";
echo "   Weight of a 10kg object: " . (10 * GRAVITY) . " N<br><br>";

echo "3. LIGHT_SPEED: " . LIGHT_SPEED . " m/s<br>";
echo "   Time for light to travel 1km: " . (1000 / LIGHT_SPEED) . " seconds<br><br>";

echo "4. AVOGADRO: " . AVOGADRO . "<br>";
echo "   Molecules in 2 moles of substance: " . (2 * AVOGADRO) . "<br><br>";

echo "5. BOLTZMANN: " . BOLTZMANN . " J/K<br>";
echo "   Energy at temperature 300K: " . (300 * BOLTZMANN) . " J<br><br>";

echo "6. PLANCK: " . PLANCK . " J·s<br>";
echo "   Energy of light with frequency 5e14 Hz: " . (5e14 * PLANCK) . " J<br><br>";

echo "7. EARTH_RADIUS: " . EARTH_RADIUS . " km<br>";
echo "   Circumference of Earth: " . (2 * PI * EARTH_RADIUS) . " km<br><br>";

echo "8. ABSOLUTE_ZERO_C: " . ABSOLUTE_ZERO_C . " °C<br>";
echo "   Absolute zero in Fahrenheit: " . ((ABSOLUTE_ZERO_C * 9/5) + 32) . " °F<br><br>";

echo "9. GOLDEN_RATIO: " . GOLDEN_RATIO . "<br>";
echo "   Golden rectangle width for height 10: " . (10 * GOLDEN_RATIO) . "<br><br>";

echo "10. EULER: " . EULER . "<br>";
echo "    Natural log of Euler's number: " . log(EULER) . "<br>";
?>


      <a href="Jhoemain.php"><p style="text-align: center; margin-left:-10px; font-size:25px">Main Page</p></a>
</div>
        </div>
        </section>
    </body>
</html>