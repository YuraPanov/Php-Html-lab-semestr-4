<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>lab5</title>
    <link rel="stylesheet" type="text/css" href="style_table.css">
</head>
<body>
<div id="form">
    <h1>Enter submission</h1>
    <form method="post">
        <label for="email">Email</label>
        <input type="email" name="email" required><br>

        <label for="category">Category</label>
        <select name="category" required>
            <option value="cars">Business</option>
            <option value="education">Education</option>
            <option value="books">Finances</option>
            <option value="family">Family</option>
            <option value="other">Other</option>
        </select><br>

        <label for="title">Title</label>
        <input type="title" name="title" required><br>

        <label for="content">Content</label>
        <textarea id="content" name="content" rows="20" cols="120" required></textarea><br>
        <input type="submit" value="Save">
        <?php
        if (isset($_POST["email"], $_POST["categories"], $_POST["title"], $_POST["text"])) {
            $title = $_POST["title"];
            $description = $_POST["text"];
            $email = $_POST["email"];
            $category = $_POST["categories"];

            // Подключение к серверу
            $mysqli = new mysqli('db', 'root', 'helloworld', 'web');

            // Проверка соединения
            if ($mysqli->connect_error) {
                die("Connection failed: " . $mysqli->connect_error);
            }

            // Сохранение данных в базу данных
            $stmt = $mysqli->prepare("INSERT INTO ad (email, title, description, category) VALUES (?, ?, ?, ?)");
            $stmt->bind_param("ssss", $email, $title, $description, $category);

            if ($stmt->execute()) {
                echo "New record created successfully";
            } else {
                echo "Error: " . $stmt->error;
            }

            $stmt->close();
            $mysqli->close();
        }
        ?>
    </form>
</div>
<div id="table">
    <table>
        <thead>
        <th>Category</th>
        <th>Title</th>
        <th>Description</th>
        <th>Email</th>
        </thead>
        <tbody>
        <?php
        // Подключение к серверу
        $mysqli = new mysqli('db', 'root', 'helloworld', 'web');

        // Проверка соединения
        if ($mysqli->connect_error) {
            die("Connection failed: " . $mysqli->connect_error);
        }

        // Заполнение таблицы на сайте
        $result = $mysqli->query('SELECT * FROM ad');

        if ($result) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>{$row['category']}</td>";
                echo "<td>{$row['title']}</td>";
                echo "<td>{$row['description']}</td>";
                echo "<td>{$row['email']}</td>";
                echo "</tr>";
            }
            $result->free();
        }

        $mysqli->close();
        ?>
        </tbody>
    </table>
</div>
</body>
</html>
