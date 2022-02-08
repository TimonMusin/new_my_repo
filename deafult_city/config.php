<?php

$host = 'localhost';  // Хост, у нас все локально
$user = 'user_bd';    // Имя созданного вами пользователя
$pass = '1q2w3e4r5t'; // Установленный вами пароль пользователю
$db_name = 'my_db';   // Имя базы данных
$link = mysqli_connect($host, $user, $pass, $db_name);
if($link->connect_error){
    die("Ошибка: " . $link->connect_error);
}
// $conn = new mysqli("localhost", "root", "mypassword");
// if($conn->connect_error){
//     die("Ошибка: " . $conn->connect_error);
// }
// echo "Подключение успешно установлено";
// $conn->close();
?>