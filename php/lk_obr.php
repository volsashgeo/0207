<?php
session_start();
header('Content-Type: text/html; charset=utf-8');

$mysqli = mysqli_connect("localhost", "zykcyspz_0207", "12345", "zykcyspz_0207");

if ($mysqli == false) {
  print("error");
} else {
  $inputValue = $_POST['value'];
  $item = $_POST['item'];
  $id = $_SESSION['id'];
  $mysqli->query("UPDATE `users` SET `$item` = '$inputValue' WHERE `id` = '$id'");

  $_SESSION[$item] = $inputValue;


}
?>