<?php
session_start(); // Запускаем сессию

// Проверяем, авторизован ли пользователь
if (!isset($_SESSION["email"])) {
  // Пользователь не аутентифицирован, перенаправляем на страницу входа
  header("Location: login.php");
  exit();
}

// Если пользователь аутентифицирован, показываем защищенное содержимое
// Получение адреса электронной почты из сессии
$email = $_SESSION["email"];

// Разделение адреса по символу @
$email_parts = explode('@', $email);

// Получение только локальной части
$local_part = $email_parts[0];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gutax</title>
</head>
<body>
  <h1 class="welcome-message">Добро пожаловать, <?php echo $local_part; ?></h1>
</body>
</html>

<div class="exit">
  <a href="logout.php">Выйти</a>
</div>

<?php
echo '<link rel="stylesheet" type="text/css" href="style.css">';
?>
<?php
$title="GutaX"; // название формы
require __DIR__ . '/header.php'; // подключаем шапку проекта
require "include/db.php"; // подключаем файл для соединения с БД
?>
<center>
<h1>GutaX</h1>
</center>
<div class="obrat">
<a href="svaz.php">Обратная связь</a>
</div>
<?php require __DIR__ . '/footer.php'; ?> <!-- Подключаем подвал проекта -->