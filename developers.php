<!DOCTYPE html>
<html>
<head>
    <title>Developers</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f5ebe0;
            font-family: 'Segoe UI', sans-serif;
        }

        .container {
            margin-top: 50px;
        }

        .card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }

        .card img {
            border-radius: 15px 15px 0 0;
            height: 250px;
            object-fit: cover;
        }

        h2 {
            color: #6d4c41;
            font-weight: bold;
            margin-bottom: 30px;
        }

        .btn-custom {
            background-color: #d7b19d;
            color: white;
        }

        .btn-custom:hover {
            background-color: #c89f8a;
        }
    </style>
</head>

<body>

<div class="container text-center">

    <h2>👨‍💻 Meet the Developers</h2>

    <div class="row justify-content-center">

        <!-- Developer 1 -->
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src=""gian.jpg"" alt="Developer">
                <div class="card-body">
                    <h5 class="card-title">Gian</h5>
                    <p><strong>Role:</strong> Backend Developer</p>
                    <p>Responsible for database connection, CRUD operations, and system logic.</p>
                </div>
            </div>
        </div>
                        
                <!-- Developer 2 -->
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src=""jerwin.jpg"" alt="Developer">
                <div class="card-body">
                    <h5 class="card-title">Jerwin</h5>
                    <p><strong>Role:</strong> UI Developer</p>
                    <p>Responsible for design and Quality of Website.</p>
                </div>
            </div>
        </div>

        <!-- Add more developers here -->
        <!-- Copy paste lang -->
        
    </div>

    <a href="index.php" class="btn btn-custom mt-3">⬅ Back</a>

</div>

</body>
</html>