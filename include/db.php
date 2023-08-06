<?php
$db_host = "localhost";
$db_user = "root"; // Логин БД
$db_password = ""; // Пароль БД
$db_base = "gutax"; // Имя БД

// Подключение к базе данных
$mysqli = new mysqli($db_host,$db_user,$db_password,$db_base);
$mysqli->set_charset("utf8");
// Если есть ошибка соединения, выводим её и убиваем подключение

if (mysqli_connect_errno()) { 
    printf("Cоединение произошло с ошибкой: %s\n", mysqli_connect_error()); 
    exit(); 
}
?>