<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $userData = array(
        'name' => $_POST['name'],
        'age' => $_POST['age'],
        'salary' => $_POST['salary'],
        'other' => $_POST['other']
    );

    $_SESSION['user_data'] = $userData;
    header('Location: page2.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Data Form</title>
</head>
<body>
<form method="post">
    <label for="name">Имя:</label>
    <input type="text" id="name" name="name"><br><br>
    <label for="age">Возраст:</label>
    <input type="text" id="age" name="age"><br><br>
    <label for="salary">Зарплата:</label>
    <input type="text" id="salary" name="salary"><br><br>
    <label for="other">Любимый фильм:</label>
    <input type="text" id="other" name="other"><br><br>
    <button type="submit">Сохранить данные</button>
</form>
</body>
</html>
