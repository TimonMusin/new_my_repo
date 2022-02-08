<?php
require_once 'config.php';


$sql = "SELECT * FROM users";
$result = mysqli_query($link, $sql);
$rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
// var_dump($rows);

$fio = $_POST['fio'];
$login = $_POST['login'];
$email = $_POST['email'];
$password = $_POST['password'];
$db_table = "users";




if (isset($_POST['name']) && isset($_POST['text'])){
    // Переменные с формы
    $name = $_POST['name'];
    $text = $_POST['text'];
    
    // Параметры для подключения
    $db_host = "localhost"; 
    $db_user = "user"; // Логин БД
    $db_password = "123"; // Пароль БД
    $db_base = 'mybase'; // Имя БД
    $db_table = "mytable"; // Имя Таблицы БД
    
    try {
        // Подключение к базе данных
        $db = new PDO("mysql:host=$db_host;dbname=$db_base", $db_user, $db_password);
        // Устанавливаем корректную кодировку
        $db->exec("set names utf8");
        // Собираем данные для запроса
        $data = array( 'name' => $name, 'text' => $text ); 
        // Подготавливаем SQL-запрос
        $query = $db->prepare("INSERT INTO $db_table (name, text) values (:name, :text)");
        // Выполняем запрос с данными
        $query->execute($data);
        // Запишим в переменую, что запрос отрабтал
        $result = true;
    } catch (PDOException $e) {
        // Если есть ошибка соединения или выполнения запроса, выводим её
        print "Ошибка!: " . $e->getMessage() . "<br/>";
    }
    
    if ($result) {
    	echo "Успех. Информация занесена в базу данных";
    }
}

echo $name;
$data = array( 'fio' => $fio, 'login' => $login, 'email' => $email, 'password' => $password,  ); 
// Подготавливаем SQL-запрос
$query = $link->prepare("INSERT INTO $db_table (name, login, email, password) values (:fio, :login,:email,:password )");
// Выполняем запрос с данными
$query->execute($data);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>