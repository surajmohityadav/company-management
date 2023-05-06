<?php
include 'db_connect.php';

$id = $_POST['id'];
$salary = $_POST['salary'];

$stmt = $conn->prepare("UPDATE staff SET salary = ? WHERE id = ?");
$stmt->bind_param("di", $salary, $id);
$stmt->execute();
$stmt->close();
$conn->close();
?>
