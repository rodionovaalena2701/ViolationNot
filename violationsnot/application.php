<?php

$connect = new mysqli(
  'localhost',
  'root',
  '',
  'SiteBase'
);
if ($connect->connect_error) {
  die(' Connect Error (' . $connect->connect_errno . ') ' . $connect->connect_error);
} else
  print('Connect BD' . '<br>');

$user = "SELECT Surname FROM user ORDER BY Surname";

if ($result = $connect->query($user)) {
  echo "<select>";
  while ($obj = $result->fetch_object()) {
    echo "<option value = '$obj->Surname' > $obj->Surname </option>";
  }
  $result->free_result();
  echo "</select>";
}
$surname = $obj->Surname;

$status = "SELECT status FROM status ORDER BY status";

if ($result = $connect->query($status)) {
  echo "<select>";
  while ($obj = $result->fetch_object()) {
    echo "<option value = '$obj->status' > $obj->status </option>";
  }
  $result->free_result();
  echo "</select>";
}
$stat = $obj->status;

$employee = "SELECT admin_surname FROM employee ORDER BY admin_surname";

if ($result = $connect->query($employee)) {
  echo "<select>";
  while ($obj = $result->fetch_object()) {
    echo "<option value = '$obj->admin_surname' > $obj->admin_surname </option>";
  }
  $result->free_result();
  echo "</select>";
}
$admin = $obj->admin_surname;

if (isset($_POST["submit"])) {
  $numb = $_POST[""];
}
?>