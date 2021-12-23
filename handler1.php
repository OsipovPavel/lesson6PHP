<?php
    if (isset($_POST["submit"])) {
        echo 'Добро пожаловать, '.$_POST["username"];
        echo '! Ваш пароль '.$_POST["userpassword"].'<br/>';
    }
    else {
        echo 'Нет данных';
    }


?>