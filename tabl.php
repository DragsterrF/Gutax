<?php
// Подключение к базе данных
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gutax";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Проверка соединения
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Массив с SQL-запросами для создания таблиц
$sqlQueries = [
    "CREATE TABLE user (
        id_kl INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        fio VARCHAR(60) NOT NULL,
        email VARCHAR(50) NOT NULL,
        pass VARCHAR(35) NOT NULL,
        admin TINYINT(0) NOT NULL
    )",
    "CREATE TABLE obrsvaz (
        id_svaz INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        email VARCHAR(30) NOT NULL,
        question VARCHAR(35) NOT NULL,
        otvet VARCHAR(15) NOT NULL,
        gender VARCHAR(10) NOT NULL,
        otzyv VARCHAR(500) NOT NULL
    )"
];

// Создание таблиц
$success = true;
foreach ($sqlQueries as $query) {
    if (!mysqli_query($conn, $query)) {
        $success = false;
        echo "Ошибка при создании таблиц: " . mysqli_error($conn);
        break;
    }
}

// Вывод сообщения об успешном создании таблиц
if ($success) {
    echo "Таблицы созданы успешно";
}

// Закрытие соединения
mysqli_close($conn);
?>