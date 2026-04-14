<!DOCTYPE html>
<html>
<head>
    <title>Student Information System</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Nude Theme -->
    <style>
        body {
            background-color: #f5ebe0;
            font-family: 'Segoe UI', sans-serif;
        }

        .container {
            background: #fff;
            padding: 25px;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            margin-top: 40px;
        }

        h2 {
            color: #6d4c41;
            font-weight: bold;
        }

        .btn-custom {
            background-color: #d7b19d;
            color: white;
            border: none;
        }

        .btn-custom:hover {
            background-color: #c89f8a;
        }

        table {
            background: #fff;
        }

        th {
            background-color: #e3cfc1;
            color: #5d4037;
        }

        td {
            vertical-align: middle;
        }

        a {
            text-decoration: none;
            color: #8d6e63;
            font-weight: 500;
        }

        a:hover {
            color: #5d4037;
        }
    </style>
</head>

<body>

<div class="container">

    <h2>🎓 Student Information System</h2>

    <div class="mb-3">
        <a href="create.php" class="btn btn-custom">+ Add Student</a>
        <a href="about-project.php" class="btn btn-outline-secondary">About Project</a>
        <a href="developers.php" class="btn btn-outline-secondary">Developers</a>
    </div>

    <table class="table table-bordered text-center">
        <tr>
            <th>ID</th>
            <th>Student Name</th>
            <th>Student ID</th>
            <th>Course</th>
            <th>Year Level</th>
            <th>Actions</th>
        </tr>

        <?php while($row = $result->fetch_assoc()): ?>
        <tr>
            <td><?= $row['id'] ?></td>
            <td><?= $row['student_name'] ?></td>
            <td><?= $row['student_id'] ?></td>
            <td><?= $row['course'] ?></td>
            <td><?= $row['year_level'] ?></td>
            <td>
                <a href="update.php?id=<?= $row['id'] ?>">✏️ Edit</a> |
                <a href="delete.php?id=<?= $row['id'] ?>" onclick="return confirm('Sigurado ka ba?')">❌ Delete</a>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>

</div>

</body>
</html>