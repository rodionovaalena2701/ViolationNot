<?php
session_start();
if (isset($_POST['number'])) {
  $number = $_POST['number'];
  if ($number == '') {
    unset($number);
  }
}
if (isset($_POST['text'])) {
  $text = $_POST['text'];
  if ($text == '') {
    unset($text);
  }
}
if (empty($number) or empty($text)) {
  exit("Вы ввели не всю информацию, вернитесь назад и заполните все поля!");
} else {
  include("dbconnect.php");
  if (!empty($_SESSION['id'])) {
    $kod = $_SESSION['id'];
    $admin = rand(1, 7);
    $result = $connect->query("INSERT INTO application (id_user, id_status, id_employee, regional_auto_number, description_of_offence) VALUES('$kod', '1', '$admin', '$number', '$text')");
    if ($result == 'TRUE') {
      header("Location: report-panel.php");
    } else {
      echo "Ошибка! Сообщение не сохранено";
    }
  }
}
?>