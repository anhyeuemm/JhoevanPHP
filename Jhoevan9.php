<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Jhoevan Miles Arnoco</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="Jhoevan9.css">
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
// Parallel array of ten people's information
$people = [
    ["name" => "Alice", "age" => 28, "sex" => "F", "nationality" => "American"],
    ["name" => "Bob", "age" => 35, "sex" => "M", "nationality" => "British"],
    ["name" => "Charlie", "age" => 22, "sex" => "M", "nationality" => "Canadian"],
    ["name" => "Daisy", "age" => 30, "sex" => "F", "nationality" => "Australian"],
    ["name" => "Eve", "age" => 27, "sex" => "F", "nationality" => "French"],
    ["name" => "Frank", "age" => 40, "sex" => "M", "nationality" => "German"],
    ["name" => "Grace", "age" => 23, "sex" => "F", "nationality" => "Japanese"],
    ["name" => "Henry", "age" => 29, "sex" => "M", "nationality" => "Italian"],
    ["name" => "Ivy", "age" => 25, "sex" => "F", "nationality" => "Mexican"],
    ["name" => "Jack", "age" => 32, "sex" => "M", "nationality" => "Russian"]
];

// Function to display the list
function displayList($people) {
    echo "<table border='1' cellpadding='5'>";
    echo "<tr><th>Name</th><th>Age</th><th>Sex</th><th>Nationality</th></tr>";
    foreach ($people as $person) {
        echo "<tr>";
        echo "<td>{$person['name']}</td>";
        echo "<td>{$person['age']}</td>";
        echo "<td>{$person['sex']}</td>";
        echo "<td>{$person['nationality']}</td>";
        echo "</tr>";
    }
    echo "</table><br>";
}

// Function to sort by name in ascending order
function sortByName(&$people) {
    $n = count($people);
    for ($i = 0; $i < $n - 1; $i++) {
        for ($j = $i + 1; $j < $n; $j++) {
            if ($people[$i]['name'] > $people[$j]['name']) {
                $temp = $people[$i];
                $people[$i] = $people[$j];
                $people[$j] = $temp;
            }
        }
    }
}

// Display unsorted list
echo "<h3>Unsorted List:</h3>";
displayList($people);

// Sort the list by name and display the sorted list
sortByName($people);
echo "<h3>Sorted List (by Name):</h3>";
displayList($people);
?>



      <a href="Jhoemain.php"><p style="text-align: center; margin-left:-10px; font-size:25px">Main Page</p></a>
</div>
        </div>
        </section>
    </body>
</html>