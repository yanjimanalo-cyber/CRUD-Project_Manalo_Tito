<?php
include 'config.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Information System</title>
</head>
<body>

<h2>Student Information System</h2>

<!-- Navigation Buttons -->
<a href="create.php">Add Student</a> | 
<a href="about-project.php">About Project</a> | 
<a href="developers.php">Developers</a>

<br><br>

<table border="1" cellpadding="10">
    <tr>
        <th>ID</th>
        <th>Student Name</th>
        <th>Student ID</th>
        <th>Course</th>
        <th>Year Level</th>
        <th>Actions</th>
    </tr>

    <?php
    $result = $conn->query("SELECT * FROM students ORDER BY id DESC");
    if($result->num_rows > 0):
        while($row = $result->fetch_assoc()):
    ?>
    <tr>
        <td><?= htmlspecialchars($row['id']) ?></td>
        <td><?= htmlspecialchars($row['student_name']) ?></td>
        <td><?= htmlspecialchars($row['student_id']) ?></td>
        <td><?= htmlspecialchars($row['course']) ?></td>
        <td><?= htmlspecialchars($row['year_level']) ?></td>
        <td>
            <a href="update.php?id=<?= $row['id'] ?>">Edit</a> | 
            <a href="delete.php?id=<?= $row['id'] ?>" onclick="return confirm('Are you sure?')">Delete</a>
        </td>
    </tr>
    <?php
        endwhile;
    else:
    ?>
    <tr>
        <td colspan="6">No students found.</td>
    </tr>
    <?php endif; ?>
</table>

</body>
</html>