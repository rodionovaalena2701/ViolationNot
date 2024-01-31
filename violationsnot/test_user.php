<?php
session_start();
if (isset($_POST['login'])) {
  $login = $_POST['login'];
  if ($login == '') {
    unset($login);
  }
}
if (isset($_POST['password'])) {
  $pass = $_POST['password'];
  if ($pass == '') {
    unset($pass);
  }
}
if (empty($login) or empty($pass)) {
  exit("Вы ввели не всю информацию, вернитесь назад и заполните все поля!");
}
include('dbconnect.php');

$result = $connect->query("SELECT * FROM user WHERE login = '$login' ");
$myrow = $result->fetch_assoc();
if (empty($myrow['login'])) {
  $result2 = $connect->query("SELECT * FROM employee WHERE login = '$login' ");
  $myrow2 = $result2->fetch_assoc();
  if (empty($myrow2['login'])) {
    exit("Введеный вами логин или пароль неверный.");
  } else {
    if ($myrow2['password'] == $pass) {
      $_SESSION['login'] = $myrow2['login'];
      $_SESSION['id'] = $myrow2['id'];
      $id = $myrow2['id'];
      header("Location: admin-panel.php?id=$id");
    } else {
      exit("Введенный вами логин или пароль неверный.");
    }
  }
} else {
  if ($myrow['password'] == $pass) {
    $_SESSION['login'] = $myrow['login'];
    $_SESSION['id'] = $myrow['id'];
    $id = $myrow['id'];
    header("Location: report-panel.php?id=$id");
  } else {
    exit("Введенный вами логин или пароль неверный.");
  }
}
?>