<?php
function redirectToHome(): void {
    header('Location: /');
    exit();
}

if (!isset($_POST['email'], $_POST['category'], $_POST['title'], $_POST['content'])) {
    redirectToHome();
}

$email = $_POST['email'];
$category = $_POST['category'];
$title = $_POST['title'];
$desc = $_POST['content'];

// Сохранение данных в текстовый файл
$dirPath = "categories/{$category}/{$email}";
if (!is_dir($dirPath)) {
    mkdir($dirPath, 0777, true);
}

$filePath = "{$dirPath}/{$title}.txt";
if (false === file_put_contents($filePath, $desc)){
    throw new Exception("Ошибка при сохранении описания.");
}

require_once "vendor/autoload.php";

function goBack() {
    header("Location: /");
    exit();
}

$client = new Google_Client();
$client->setAuthConfig("credentials.json");
$client->addScope('https://www.googleapis.com/auth/spreadsheets');
$service = new Google_Service_Sheets($client);

$id = "1mG9OsC3pnvIn4DWTV1Hg700gP9j6RCZXu9OP_og_XuE";
$sheet = "лист1";
$table = [[$category, $email, $title, $desc]];

$body = new Google_Service_Sheets_ValueRange(['values' => $table]);
$params = array('valueInputOption' => 'USER_ENTERED');

$service->spreadsheets_values->append($id, $sheet, $body, $params);

goBack();
?>