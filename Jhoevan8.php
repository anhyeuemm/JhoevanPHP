<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Jhoevan Miles Arnoco</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="Jhoevan8.css">
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
// Student names and grades
$students = [
    "Alice" => 85,
    "Bob" => 67,
    "Charlie" => 92,
    "Daisy" => 76,
    "Eve" => 54
];

// Function 1: Calculate average grade
function calculateAverage($grades) {
    $total = array_sum($grades);
    return $total / count($grades);
}

// Function 2: Find highest grade
function findHighestGrade($grades) {
    return max($grades);
}

// Function 3: Find lowest grade
function findLowestGrade($grades) {
    return min($grades);
}

// Function 4: Count passing students
function countPassing($grades, $passingMark = 60) {
    $count = 0;
    foreach ($grades as $grade) {
        if ($grade >= $passingMark) $count++;
    }
    return $count;
}

// Function 5: Count failing students
function countFailing($grades, $passingMark = 60) {
    return count($grades) - countPassing($grades, $passingMark);
}

// Function 6: Sort grades
function sortGrades(&$grades) {
    asort($grades); // Sort while preserving student names
}

// Function 7: Find student grade
function findStudentGrade($grades, $student) {
    return $grades[$student] ?? "Student not found";
}

// Function 8: Assign letter grade
function assignLetterGrade($grade) {
    if ($grade >= 90) return 'A';
    if ($grade >= 80) return 'B';
    if ($grade >= 70) return 'C';
    if ($grade >= 60) return 'D';
    return 'F';
}

// Function 9: Get median grade
function findMedian($grades) {
    $sortedGrades = array_values($grades);
    sort($sortedGrades);
    $count = count($sortedGrades);
    $middle = floor($count / 2);
    
    return $count % 2 == 0 ? ($sortedGrades[$middle - 1] + $sortedGrades[$middle]) / 2 : $sortedGrades[$middle];
}

// Function 10: Grade distribution
function gradeDistribution($grades) {
    $distribution = ['A' => 0, 'B' => 0, 'C' => 0, 'D' => 0, 'F' => 0];
    foreach ($grades as $grade) {
        $letter = assignLetterGrade($grade);
        $distribution[$letter]++;
    }
    return $distribution;
}

// Displaying results
echo "<h2>Student Grades and Statistics</h2>";
echo "Average Grade: " . calculateAverage($students) . "<br>";
echo "Highest Grade: " . findHighestGrade($students) . "<br>";
echo "Lowest Grade: " . findLowestGrade($students) . "<br>";
echo "Passing Students: " . countPassing($students) . "<br>";
echo "Failing Students: " . countFailing($students) . "<br>";
echo "Median Grade: " . findMedian($students) . "<br>";

sortGrades($students);
echo "<h3>Sorted Grades:</h3>";
foreach ($students as $student => $grade) {
    echo "$student: $grade (" . assignLetterGrade($grade) . ")<br>";
}

echo "<h3>Grade Distribution:</h3>";
$distribution = gradeDistribution($students);
foreach ($distribution as $letter => $count) {
    echo "$letter: $count<br>";
}

echo "<h3>Individual Student Search:</h3>";
echo "Charlie's grade: " . findStudentGrade($students, "Charlie") . "<br>";
echo "Eve's grade: " . findStudentGrade($students, "Eve") . "<br>";
echo "Zara's grade: " . findStudentGrade($students, "Zara") . "<br>";
?>



      <a href="Jhoemain.php"><p style="text-align: center; margin-left:-10px; font-size:25px">Main Page</p></a>
</div>
        </div>
        </section>
    </body>
</html>