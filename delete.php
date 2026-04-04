<?php
include 'config.php';

$id = (int) $_GET['id'];
$sql = "DELETE FROM students WHERE id=$id";
if($conn->query($sql)) {
    header("Location: index.php");
    exit;
} else {
    echo "Error deleting student: " . $conn->error;
}
?>