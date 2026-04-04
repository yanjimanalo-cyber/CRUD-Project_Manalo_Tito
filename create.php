<?php
include 'config.php';

if(isset($_POST['submit'])) {
    $name = $conn->real_escape_string($_POST['student_name']);
    $sid = $conn->real_escape_string($_POST['student_id']);
    $course = $conn->real_escape_string($_POST['course']);
    $year = (int) $_POST['year_level'];

    $sql = "INSERT INTO students (student_name, student_id, course, year_level) 
            VALUES ('$name', '$sid', '$course', $year)";
    if($conn->query($sql)) {
        header("Location: index.php");
        exit;
    } else {
        echo "Error: " . $conn->error;
    }
}
?>

<h2>Add Student</h2>
<form method="POST">
    Student Name: <input type="text" name="student_name" required><br><br>
    Student ID: <input type="text" name="student_id" required><br><br>
    Course: <input type="text" name="course"><br><br>
    Year Level: <input type="number" name="year_level"><br><br>
    <button type="submit" name="submit">Add Student</button>
</form>
<br>
<a href="index.php">Back to Home</a>