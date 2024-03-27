<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Word and Character Count</title>
</head>
<body>
<form method="post">
    <label for="textInput">Введите текст:</label><br>
    <textarea id="textInput" name="text" rows="5" cols="50"></textarea><br>
    <button type="submit" name="submit">Подсчитать</button><br>
</form>

<?php
function countWordsAndChars($text): array
{
    $words = explode(' ',$text);
    $counter_words = count($words);
    $characters = strlen($text);
    return array('words' => $counter_words, 'characters' => $characters);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {
    $text = $_POST['text'];
    $result = countWordsAndChars($text);
    echo "<div>";
    echo "<p>Слов: " . $result['words'] . "</p>";
    echo "<p>Символов: " . $result['characters'] . "</p>";
    echo "</div>";
}
?>

</body>
</html>
