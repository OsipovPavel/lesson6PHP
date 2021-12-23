<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация</title>
</head>
<body>
    <style>
        .err {
            border-color: red;
        }
    </style>    
    <?php
    $login = 'Vasya';
    $password = 'dfcz';
    if (isset($_GET["username"])) {
        $text_error = ['Пользователь с таким логином уже существует', 
        'Пароль должен содержать не менее восьми (8) символов', 
        'Пароли не совпадают', 
        'Некорректный email', 
        'Некорректный телефон'];
        echo "<form action='register6.php' method='GET'>";
        if ($_GET['username'] == $login) {
            $str_class = "class='err'";
            $str_err = "<span>$text_error[0]</span>"; 
        }
        else {
            $str_class = "";
            $str_err = "";
        }       
        echo "<input type='text' name='username' placeholder='логин' $str_class value = {$_GET['username']}>$str_err<br/>";
        if (strlen($_GET['userpassword']) < 8) {
            $str_class = "class='err'";
            $str_err = "<span>$text_error[1]</span>";     
        }
        else {
            $str_class = "";
            $str_err = "";
        }
        echo "<input type='password' name='userpassword' placeholder='пароль' $str_class value = {$_GET['userpassword']}>$str_err<br/>";
        if ($_GET['confirmpassword'] !==$_GET['userpassword']) {    
            $str_class = "class='err'";
            $str_err = "<span>$text_error[2]</span>";
        }
        else {
            $str_class = "";
            $str_err = "";
        }
        echo "<input type='password' name='confirmpassword' placeholder='повторите пароль' $str_class value = {$_GET['confirmpassword']}>$str_err<br/>";
        if (!stripos($_GET['useremail'], '@')) {    
            $str_class = "class='err'";
            $str_err = "<span>$text_error[3]</span>";
        }
        else {
            $str_class = "";
            $str_err = "";
        }
        echo "<input type='email' name='useremail' placeholder='Email' $str_class value = {$_GET['useremail']}>$str_err<br/>";
        if (strlen($_GET['userephone']) > 11) {    
            $str_class = "class='err'";
            $str_err = "<span>$text_error[4]</span>";
        }
        else {
            $str_class = "";
            $str_err = "";
        }
        echo "<input type='tel' name='userephone' placeholder='телефон' $str_class value = {$_GET['userephone']}>$str_err<br/>";
        echo "<input type='submit' value='Зарегистрироваться'><br/>
        </form>";
    }
    else {
        echo "<form action='register6.php' method='GET'>
            <input type='text' name='username' placeholder='логин'><br/>
            <input type='password' name='userpassword' placeholder='пароль'><br/>
            <input type='password' name='confirmpassword' placeholder='повторите пароль'><br/>
            <input type='email' name='useremail' placeholder='Email'><br/>
            <input type='tel' name='userephone' placeholder='телефон'><br/>
            <input type='submit' value='Зарегистрироваться'><br/>
        </form>";
    }
    ?>
</body>
</html>