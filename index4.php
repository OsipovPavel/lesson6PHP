<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Форма с выводом текста</title>
</head>
<body>
    <form action="index4.php" method="POST">
        <input type="text" name="inputText">
        <input type="submit" name="nSend" value="Отправить"><br/>
    <?php   
        if (isset($_POST['nSend'])) {
            echo "<p>{$_POST['inputText']}</p>";
            echo "</form>"; 
        }   
    ?>
</body>
</html>