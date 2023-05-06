<?php
include 'db_connect.php';

$id = $_POST['id'];
$cost = $_POST['cost'];
$discount = $_POST['discount'];
$orders = $_POST['orders'];

$stmt = $conn->prepare("UPDATE customers SET cost = ?, discount = ?,orders = orders + '$orders' WHERE id = ?");
$stmt->bind_param("ddi", $cost, $discount, $id);
$stmt->execute();
$stmt->close();
$conn->close();
?>