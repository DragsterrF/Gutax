<?php
echo '<link rel="stylesheet" type="text/css" href="style.css">';
?>
<div class="container mt-4">

        <div class="row">
        <div class="col">
            <form method="" action="" class="ui-form">
            <h3>Заполните форму</h3>
            <div class="form-row">
                                <input type="text" id="mail" required autocomplete="off" name="email" placeholder="email"></div>
                                    <select class="question" name="question">
                                      <option value="work">Проблема в рабте сайта</option>
                                      <option value="zapis">Вопрос по записи</option>
                                    </select><br>
                                    <h4>Выберите ответ:</h4>
                                <input type="checkbox" name="otvet" value="mail"> На почту<br>
                                <input type="checkbox" name="otvet" value="kabinet"> В личный кабинет<br>
                                <h4>Выберите пол:</h4>
                                <input type="radio" name="gender" required autocomplete="off" value="men"> Мужской<br>
                                <input type="radio" name="gender" value="women"> Женский<br><br>
                                <textarea name="otzyv" rows="4" cols="28" required autocomplete="off" placeholder="Напишите свои пожелания для повышения качества работы сайта"></textarea><br><br>
                                <p><input type="submit" name="formSvaz" value="Отправить"></p><br>
                                <a href="svaz.php" >Сбросить форму</a>
                                </form>
                                <p>Вернуться на <a href="content.php">главную</a>.</p>
        </div>
        </div>
</div>
<?php
    if (isset($_GET['formSvaz'])) {
        $emailForm=$_GET['email'];
        $questionForm=$_GET['question'];
        $otvetForm=$_GET['otvet'];
        $genderForm=$_GET['gender'];
        $otzyvForm=$_GET['otzyv'];
        require "include/db.php";

        $email = '"' .$mysqli->real_escape_string($emailForm).'"';
        $question = '"' .$mysqli->real_escape_string($questionForm).'"';
        $otvet = '"' .$mysqli->real_escape_string($otvetForm).'"';
        $gender = '"' .$mysqli->real_escape_string($genderForm).'"';
        $otzyv = '"' .$mysqli->real_escape_string($otzyvForm).'"';
        $query = "INSERT INTO obrsvaz (id_svaz, email, question, otvet, gender, otzyv) VALUES (NULL, $email, $question, $otvet, $gender, $otzyv)";
        $result=$mysqli->query($query);
        if($result){
            echo '<p class="otz">Ваш отзыв успешно отправлен!</p>';
        }
        $mysqli->close();
     }
?>
<?php require __DIR__ . '/footer.php'; ?> <!-- Подключаем подвал проекта -->