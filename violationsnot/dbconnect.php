<?php
$connect = new mysqli('localhost', 'root', '', 'SiteBase');
if ($connect->connect_error) {
  die(' Connect Error (' . $connect->connect_errno . ') ' . $connect->connect_error);
}
?>