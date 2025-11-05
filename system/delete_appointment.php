<?php
include '../db/db_connect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $id = $_POST['id'];

  $stmt = $conn->prepare("DELETE FROM appointments WHERE id=?");
  $stmt->bind_param("i", $id);

  echo $stmt->execute() ? 'success' : 'error';
  $stmt->close();
  $conn->close();
}
?>
