<?php
echo '<link rel="stylesheet" type="text/css" href="style.css">';
?>
<?php
$title="GutaX"; // название формы
require __DIR__ . '/header.php'; // подключаем шапку проекта
require "include/db.php"; // подключаем файл для соединения с БД
?>

<div class="container mt-4">
<div class="row">
<div class="col">
<center>
<h1>GutaX</h1>
</center>
</div>
</div>
</div>

<!-- Если авторизован выведет приветствие -->
<?php if(isset($_SESSION['logged_user'])) : ?>
  Привет, <?php echo $_SESSION['logged_user']->name; ?></br>

<!-- Пользователь может нажать выйти для выхода из системы -->
<a href="logout.php">Выйти</a> <!-- файл logout.php создадим ниже -->
<?php else : ?>
<!-- Если пользователь не авторизован выведет ссылки на авторизацию и регистрацию -->
<div class="auten">
<a href="login.php">Войти</a><br>
<a href="formreg.php">Зарегистрироваться</a><br>
</div>
<?php endif; ?>

<?php require __DIR__ . '/footer.php'; ?> <!-- Подключаем подвал проекта -->