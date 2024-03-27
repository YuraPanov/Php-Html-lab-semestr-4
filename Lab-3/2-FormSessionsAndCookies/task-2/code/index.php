<?php

session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $_SESSION['surname'] = $_POST['surname'];
    $_SESSION['name'] = $_POST['name'];
    $_SESSION['age'] = $_POST['age'];
    header('Location: page2.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enter Information</title>
</head>
<body>
<form method="post">
    <label for="surname">Фамилия:</label>
    <input type="text" id="surname" name="surname"><br><br>
    <label for="name">Имя:</label>
    <input type="text" id="name" name="name"><br><br>
    <label for="age">Возраст:</label>
    <input type="text" id="age" name="age"><br><br>
    <button type="submit">Сохранить данные</button>
</form>
</body>
</html>
