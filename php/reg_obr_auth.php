<?php
header('Content-Type: text/html; charset=utf-8');

$mysqli = mysqli_connect("localhost", "zykcyspz_0207", "12345", "zykcyspz_0207");
if ($mysqli == false) {
    print("error");
} else {
    //print("Соединение установлено успешно");

    
    $email = $_POST['email'];
    $pass = $_POST['pass'];

    $result = $mysqli->query("SELECT * FROM `users2` WHERE `email` = '$email' AND `pass` = '$pass'");
    // var_dump($result->num_rows);
    
    if($result->num_rows == 0) {
      print("exist");

    }else {
        // $mysqli->query("INSERT INTO `users2`(`email`, `pass`) VALUES ('$email','$pass')");
        print("ok");
    }
}



//echo "Имя: $name<br>
// Фамилия: $lastname<br>
// Email: $email<br>
// Пароль: $pass
// ";
?>