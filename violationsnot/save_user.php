<?php
if (isset($_POST['fname'])) {
  $name = $_POST['fname'];
  if ($name == '') {
    unset($name);
  }
}
if (isset($_POST['phone'])) {
  $phone = $_POST['phone'];
  if ($phone == '') {
    unset($phone);
  }
}
if (isset($_POST['surname'])) {
  $surname = $_POST['surname'];
  if ($surname == '') {
    unset($surname);
  }
}
if (isset($_POST['midname'])) {
  $midname = $_POST['midname'];
  if ($midname == '') {
    unset($midname);
  }
}
if (isset($_POST['email'])) {
  $email = $_POST['email'];
  if ($email == '') {
    unset($email);
  }
}
if (isset($_POST['pswrd'])) {
  $password = $_POST['pswrd'];
  if ($password == '') {
    unset($password);
  }
}
if (isset($_POST['pswrd2'])) {
  $password2 = $_POST['pswrd2'];
  if ($password2 == '') {
    unset($password2);
  }
}
if (empty($email) or empty($password)) {
  exit("Вы ввели не всю информацию, вернитесь назад и заполните все поля!");
}
include('dbconnect.php');
$result = $connect->query("SELECT id FROM user WHERE login = '$email' ");
$myrow = $result->fetch_assoc();
if (!empty($myrow['id'])) {
  exit("Введеный вами логин уже зарегистрирован. Введите другой логин.");
}
if ($password == $password2) {
  $users = $connect->query("INSERT INTO user (surname, first_name, middle_name, phone_number, email, login, password) VALUES ('$surname','$name', '$midname', '$phone', '$email', '$email', '$password')");
  $result2 = $connect->query("SELECT id FROM user WHERE login = '$email' ");
  $myrow2 = $result2->fetch_assoc();
  $id = $myrow2['id'];
  header("Location: report-panel.php?id=$id");
} else
  print("Пароли не совпадают. Попробуйте еще раз");

?>