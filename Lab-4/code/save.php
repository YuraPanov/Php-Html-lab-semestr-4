<?php
function redirectToHome(): void {
    header('Location: /');
    exit();
}

if (!isset($_POST['email'], $_POST['category'], $_POST['title'], $_POST['description'])) {
    redirectToHome();
}

$email = $_POST['email'];
$category = $_POST['category'];
$title = $_POST['title'];
$desc = $_POST['description'];

$dirPath = "categories/{$category}/{$email}";
if (!is_dir($dirPath)) {
    mkdir($dirPath, 0777, true); // Создание директории и всех вложенных поддиректорий
}

$filePath = "{$dirPath}/{$title}.txt";

// Запись описания в файл
if (false === file_put_contents($filePath, $desc)){
    throw new Exception("Ошибка при сохранении описания.");
}

chmod($filePath, 0777);
redirectToHome();
?>
