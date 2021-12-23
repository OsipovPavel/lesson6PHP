<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Формы</title>
</head>
<body>
    
    <Form action="handler1.php" method="POST">
        <p>Введите имя: <input type="text" name="username"></p>
        <p>Введите пароль: <input type="password" name="userpassword"></p>
        <input type="submit" name="submit" value="Зарегистрироваться">
    </form>
    
</body>
</html>