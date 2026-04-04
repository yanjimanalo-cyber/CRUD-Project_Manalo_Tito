<?php
// Enable error reporting
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Database connection
if ($_SERVER['SERVER_NAME'] == 'localhost') {
    $host = "localhost";
    $user = "root";
    $password = "";
    $dbname = "db_inventory"; // local name
    $port = 3306;
} else {
    $host = "sql101.infinityfree.com";
    $user = "if0_41577583";
    $password = "GianJerwin123";
    $dbname = "if0_41577583_db_crud"; // live db
    $port = 3306;
}

$conn = new mysqli($host, $user, $password, $dbname, $port);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>