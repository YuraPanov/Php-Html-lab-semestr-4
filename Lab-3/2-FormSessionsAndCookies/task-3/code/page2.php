<?php
session_start();
$dataDescriptions = array(
    'name' => 'Имя',
    'age' => 'Возраст',
    'salary' => 'Зарплата',
    'other' => 'Любимый фильм'
);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Data</title>
</head>
<body>
<h2>Информация о пользователе:</h2>
<ul>
    <?php
    if (isset($_SESSION['user_data'])) {
        foreach ($_SESSION['user_data'] as $key => $value) {
            $description = isset($dataDescriptions[$key]) ? $dataDescriptions[$key] : 'Неизвестно';
            echo "<li>$description: $value</li>";
        }
    } else {
        echo "<li>Данные пользователя не найдены.</li>";
    }
    ?>
</ul>
</body>
</html>
