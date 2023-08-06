<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Регистрация</title>
</head>
<body>

<?php 
echo '<link rel="stylesheet" type="text/css" href="style.css">';
require __DIR__ . '/header.php'; // подключаем шапку проекта
?>

<div class="container mt-4">
		<div class="row">
		<div class="col">
		<form method="get"  id="reg" class="ui-form">
<h3>Зарегистрироваться</h3>
<div class="form-row">
<input type="text" name="fio" required autocomplete="off"><label for="fio">ФИО</label><br>
<input type="text" name="email" required autocomplete="off"><label for="email">Email</label><br>
<input type="password" name="pass" required autocomplete="off"><label for="password">Придумайте пароль</label><br>	
</div>
<p><input type="submit" name="formSubmit" value="Зарегистрироваться"></p>
</form><br>
		<p>Если вы eуже зарегистрированы, тогда нажмите <a href="login.php">здесь</a>.</p>
		<p>Вернуться на <a href="index.php">главную</a>.</p>
		</div>
	</div>
</div>
<?php
    if (isset($_GET['formSubmit'])) {
    	$fioForm=$_GET['fio'];
    	$emailForm=$_GET['email'];
    	$passForm=$_GET['pass'];
    	$admin=0;
    	require "include/db.php";
    	if ($mysqli->connect_errno) {
    		echo "Извините, произошла ошибка сайта";
    		exit;
    	}
    	$fio = '"' .$mysqli->real_escape_string($fioForm).'"';
    	$email = '"' .$mysqli->real_escape_string($emailForm).'"';
    	$pass = '"' .$mysqli->real_escape_string($passForm).'"';
    	$query = "INSERT INTO user (id_kl, fio, email, pass, admin) VALUES (NULL, $fio, $email, $pass, $admin)";
    	$result=$mysqli->query($query);
    	if($result){
    		echo '<p class="regist">Вы успешно зарегистрированы!</p>';
    	}
    	$mysqli->close();
     } 
?>