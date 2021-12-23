<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Сравнение вывода со списком</title>
</head>

<body>
    <style>
        .red {
            color: red;
            font-weight: bold;
        }
    </style>
    
    <?php
        $countries = ["Португалия", "Польша", "Полинезия", "Боливия", "Япония", "Армения"];
        $country_list = "<ul>";
        foreach ($countries as $country) {
            $country_list .= "<li>$country</li>";
        }
        $country_list .= "</ul>";
        if (isset($_POST["inputText"])) {
            $search = $_POST["inputText"];
            $country_list = str_replace($search, "<span class='red'>$search</span>", $country_list);
        }
        echo "<form action='index5.php' method='POST'>
            <input type='text' name='inputText' value='{$_POST["inputText"]}'>
            <input type='submit' name='nSend' value='Искать'><br />
        </form>";
?>
    <?php
        echo $country_list;
    ?>      
</body>

</html>