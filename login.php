<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Вход</title>
</head>
<body>

<?php
echo '<link rel="stylesheet" type="text/css" href="style.css">';
require __DIR__ . '/header.php'; // подключаем шапку проекта
$errorMessage = ''; // Инициализируем переменную для сообщения об ошибке
$dbHost = 'localhost';  // Хост БД
$dbUsername = 'root';  // Имя пользователя БД
$dbPassword = '';  // Пароль БД
$dbName = 'gutax';  // Имя БД

$conn = mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName);

if (!$conn) {
    die("Ошибка подключения к базе данных: " . mysqli_connect_error());
}

?>

<div class="container mt-4">
    <div class="row">
        <div class="col">
            <form method="POST" class="ui-form">
                <h3>Войти на сайт</h3>
                <?php if (!empty($errorMessage)): ?>
                    <p><?php echo $errorMessage; ?></p>
                <?php endif; ?>
                <div class="form-row">
                    <input type="text" id="email" name="email" required autocomplete="off"><label
                            for="email">Email</label><br>
                    <input type="password" name="pass" id="password" required autocomplete="off"><label
                            for="password">Пароль</label>
                </div>
                <p><input type="submit" value="Войти"></p>
            </form>
            <br>
            <p>Если вы еще не зарегистрированы, тогда нажмите <a href="formreg.php">здесь</a>.</p>
            <p>Вернуться на <a href="index.php">главную</a>.</p>
        </div>
    </div>
</div>

<?php require __DIR__ . '/footer.php'; ?> <!-- Подключаем подвал проекта -->

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $pass = $_POST['pass'];

    // Выполнение запроса для проверки учетных данных пользователя
    $query = "SELECT * FROM `user` WHERE email='$email' AND pass='$pass'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        // Успешная аутентификация
        session_start(); // Запускаем новую сессию
        $_SESSION["email"] = $email; // Сохраняем имя пользователя в сессии

        // Перенаправляем пользователя на защищенную страницу
        header("Location: content.php");
        exit();
    } else {
        // Неправильные учетные данные
        echo '<p class="errVh">Неверный email или пароль</p>';
    }
}
?>

</body>
</html>