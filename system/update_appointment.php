<?php
include '../db/db_connect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $id = $_POST['id'];
  $client_name = $_POST['client_name'];
  $date = $_POST['date'];
  $service = $_POST['service'];
  $time = $_POST['time'];
  $status = $_POST['status'];

  $stmt = $conn->prepare("UPDATE appointments SET client_name=?, date=?, service=?, time=?, status=? WHERE id=?");
  $stmt->bind_param("sssssi", $client_name, $date, $service, $time, $status, $id);

  echo $stmt->execute() ? 'success' : 'error';
  $stmt->close();
  $conn->close();
}
?>
