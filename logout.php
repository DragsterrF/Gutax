<?php
session_start(); // Начинаем сессию

// Уничтожаем сессию
session_unset();
session_destroy();

// Перенаправляем пользователя на страницу входа или другую страницу по выбору
header("Location: index.php");
exit;
?>