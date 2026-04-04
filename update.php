<?php
include 'config.php';

$id = (int) $_GET['id'];
$result = $conn->query("SELECT * FROM students WHERE id=$id");
$row = $result->fetch_assoc();

if(!$row) die("Student not found.");

if(isset($_POST['update'])) {
    $name = $conn->real_escape_string($_POST['student_name']);
    $sid = $conn->real_escape_string($_POST['student_id']);
    $course = $conn->real_escape_string($_POST['course']);
    $year = (int) $_POST['year_level'];

    $sql = "UPDATE students 
            SET student_name='$name', student_id='$sid', course='$course', year_level=$year 
            WHERE id=$id";
    if($conn->query($sql)) {
        header("Location: index.php");
        exit;
    } else {
        echo "Error: " . $conn->error;
    }
}
?>

<h2>Edit Student</h2>
<form method="POST">
    Student Name: <input type="text" name="student_name" value="<?= htmlspecialchars($row['student_name']) ?>"><br><br>
    Student ID: <input type="text" name="student_id" value="<?= htmlspecialchars($row['student_id']) ?>"><br><br>
    Course: <input type="text" name="course" value="<?= htmlspecialchars($row['course']) ?>"><br><br>
    Year Level: <input type="number" name="year_level" value="<?= htmlspecialchars($row['year_level']) ?>"><br><br>
    <button type="submit" name="update">Update Student</button>
</form>
<br>
<a href="index.php">Back to Home</a>