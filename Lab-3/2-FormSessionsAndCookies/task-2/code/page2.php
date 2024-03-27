<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Information</title>
</head>
<body>
<h2>Информация о пользователе:</h2>
<p>Фамилия: <?php echo isset($_SESSION['surname']) ? $_SESSION['surname'] : ''; ?></p>
<p>Имя: <?php echo isset($_SESSION['name']) ? $_SESSION['name'] : ''; ?></p>
<p>Возраст: <?php echo isset($_SESSION['age']) ? $_SESSION['age'] : ''; ?></p>
</body>
</html>
