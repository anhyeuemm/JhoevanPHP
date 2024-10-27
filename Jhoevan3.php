<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Jhoevan Miles Arnoco</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="Jhoevan3.css">
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
    // Sample data for quizzes, projects, and exams for each grading period

    // Midterm Data
    $midtermQuizzes = [85, 90, 78];      // Three quizzes
    $midtermProjects = [88, 92];         // Two projects
    $midtermExam = 80;                   // Major exam score

    // Tentative Final Data
    $finalQuizzes = [82, 87, 91, 79];    // Four quizzes
    $finalProjects = [90, 85];           // Two projects
    $finalExam = 88;                     // Major exam score

    // Helper function to calculate the average of an array
    function calculateAverage($scores) {
        return array_sum($scores) / count($scores);
    }

    // Calculate midterm grade
    $midtermQuizAvg = calculateAverage($midtermQuizzes);
    $midtermProjectAvg = calculateAverage($midtermProjects);
    $midtermGrade = ($midtermQuizAvg * 0.30) + ($midtermProjectAvg * 0.20) + ($midtermExam * 0.50);

    // Calculate tentative final grade
    $finalQuizAvg = calculateAverage($finalQuizzes);
    $finalProjectAvg = calculateAverage($finalProjects);
    $tentativeFinalGrade = ($finalQuizAvg * 0.30) + ($finalProjectAvg * 0.20) + ($finalExam * 0.50);

    // Calculate final-final grade (average of midterm and tentative final grades)
    $finalFinalGrade = ($midtermGrade + $tentativeFinalGrade) / 2;

    // Display results
    echo "<h2>Midterm Grade Computation</h2>";
    echo "<p>Average Quiz Score (Midterm): $midtermQuizAvg</p>";
    echo "<p>Average Project Score (Midterm): $midtermProjectAvg</p>";
    echo "<p>Midterm Exam Score: $midtermExam</p>";
    echo "<p><strong>Midterm Grade: " . number_format($midtermGrade, 2) . "</strong></p>";

    echo "<h2>Tentative Final Grade Computation</h2>";
    echo "<p>Average Quiz Score (Final): $finalQuizAvg</p>";
    echo "<p>Average Project Score (Final): $finalProjectAvg</p>";
    echo "<p>Final Exam Score: $finalExam</p>";
    echo "<p><strong>Tentative Final Grade: " . number_format($tentativeFinalGrade, 2) . "</strong></p>";

    echo "<h2>Final-Final Grade</h2>";
    echo "<p><strong>Final-Final Grade: " . number_format($finalFinalGrade, 2) . "</strong></p>";
    ?>
      <a href="Jhoemain.php"><p style="text-align: center; margin-left:-10px; font-size:25px">Main Page</p></a>
</div>
        </div>
        </section>
    </body>
</html>