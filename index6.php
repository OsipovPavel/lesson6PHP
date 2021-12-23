<?php
    $form = "<form action='index6.php' method='POST'>
    <input type='text' name='login' placeholder='Введите логин'>
    <input type='password' name='password' placeholder='Введите пароль'>
    <input type='submit' value='Войти'> 
    </form>";
        if (!isset($_POST["login"])) {
            echo $form;
        }
        else {
            $login = 'Vasya';
            $password = 'dfcz';
            if ($_POST["login"] == $login & $_POST["password"] == $password) {
                header('Location: hello6.html');
            }
            else {
                echo $form;
                echo "<p>Вы ввели неправильный логин или пароль. Попробуйте еще раз или <a href='register6.php'>Зарегистрируйтесь</a></p>";
            }
        }
?>