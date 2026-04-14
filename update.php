<?php
include 'config.php';

$id = (int) $_GET['id'];
$result = $conn->query("SELECT * FROM students WHERE id=$id");

if(!$result || $result->num_rows == 0) {
    die("Student not found.");
}

$row = $result->fetch_assoc();

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

<!DOCTYPE html>
<html>
<head>
    <title>Edit Student</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f5ebe0;
            font-family: 'Segoe UI', sans-serif;
        }

        .container {
            background: #fff;
            padding: 30px;
            border-radius: 15px;
            margin-top: 50px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            max-width: 600px;
        }

        h2 {
            color: #6d4c41;
            font-weight: bold;
            margin-bottom: 20px;
        }

        label {
            font-weight: 500;
            color: #5d4037;
        }

        .form-control {
            border-radius: 10px;
            border: 1px solid #e3cfc1;
        }

        .form-control:focus {
            border-color: #d7b19d;
            box-shadow: 0 0 5px rgba(215,177,157,0.5);
        }

        .btn-custom {
            background-color: #d7b19d;
            color: white;
            border: none;
            border-radius: 10px;
            padding: 8px 16px;
        }

        .btn-custom:hover {
            background-color: #c89f8a;
        }

        .btn-back {
            background: transparent;
            color: #8d6e63;
            border: 1px solid #d7b19d;
            border-radius: 10px;
            padding: 8px 16px;
            text-decoration: none;
        }

        .btn-back:hover {
            background: #e3cfc1;
            color: #5d4037;
        }
    </style>
</head>

<body>

<div class="container">

    <h2>✏️ Edit Student</h2>

    <form method="POST">

        <div class="mb-3">
            <label>Student Name</label>
            <input type="text" name="student_name" class="form-control" 
                   value="<?= htmlspecialchars($row['student_name']) ?>" required>
        </div>

        <div class="mb-3">
            <label>Student ID</label>
            <input type="text" name="student_id" class="form-control" 
                   value="<?= htmlspecialchars($row['student_id']) ?>" required>
        </div>

        <div class="mb-3">
            <label>Course</label>
            <input type="text" name="course" class="form-control" 
                   value="<?= htmlspecialchars($row['course']) ?>">
        </div>

        <div class="mb-3">
            <label>Year Level</label>
            <input type="number" name="year_level" class="form-control" 
                   value="<?= htmlspecialchars($row['year_level']) ?>">
        </div>

        <button type="submit" name="update" class="btn btn-custom">💾 Update Student</button>
        <a href="index.php" class="btn-back">⬅ Back</a>

    </form>

</div>

</body>
</html>