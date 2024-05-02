<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Avito</title>
</head>
<body>
    <div id="form">
        <form action="save.php" method="post">
        <p>
            <label for="email">Email</label>
            <label>
                <input type="email" name="email" required>
            </label>
        </p>
        <p>
        <label for="category">Category</label>
            <label>
                <select name="category" required>
                    <?php
                    $dirs = scandir("./categories");
                    foreach ($dirs as $dir) {
                        if ($dir != '.' && $dir != '..') {
                            echo "<option value=\"$dir\">$dir</option>";
                        }
                    }
                    ?>
                </select>
            </label>
        </p>
        <p>
            <label for="title">Title</label>
            <input type="title" name="title" required>
        </p>
        <label for="description">Description</label>
        <p>
            <label>
                <textarea rows="3" name="description"></textarea>
            </label>
            <input type="submit" value="Save">
        </p>

        </form>
    </div>
    <div id="table">
        <?php
        function output($filePath, &$outputArray) {
            $directories = array_slice(scandir($filePath), 2);

            foreach ($directories as $dir) {
                $nextFilePath = $filePath . "/{$dir}";

                if (is_dir($nextFilePath)) {
                    $subDirs = array_slice(scandir($nextFilePath), 2);
                    if (!empty($subDirs)) { // Проверка на пустую категорию
                        output($nextFilePath, $outputArray);
                    }
                } elseif (mime_content_type($nextFilePath) == "text/plain") {
                    $email = basename(dirname($nextFilePath, 2));
                    $category = basename(dirname($nextFilePath));
                    $title = substr($dir, 0, -4);
                    $text = nl2br(file_get_contents($nextFilePath));
                    $outputArray[] = "<tr><td>{$email}</td><td>{$category}</td><td>{$title}</td><td>{$text}</td></tr>";
                }
            }
        }
        $outputArray = [];
        if (is_dir("categories")) {
            output("categories", $outputArray);
        }
        ?>
        <table border="2">
            <tr>
                <th>Category</th>
                <th>Email</th>
                <th>Title</th>
                <th>Description</th>
            </tr>
            <?php echo implode("", $outputArray); ?>
        </table>
    </div>

</body>
</html>