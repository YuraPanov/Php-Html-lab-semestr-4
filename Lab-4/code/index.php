<!DOCTYPE html>
<html lang="en">
<head>
    <title>Working with online table</title>
</head>
<body>
<div id="submission">
    <h1>Enter submission</h1>
    <form method="post" action="save.php">
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

        <input type="submit" name="submit_broadcast" value="SUBMIT">
    </form>
</div>
<div id="table">
    <h3>Uploaded submissions:</h3>
    <table>
        <thead>
        <th>Category</th>
        <th>Email</th>
        <th>Title</th>
        <th>Content</th>
        </thead>
        <tbody>
        <?php
        require_once "vendor/autoload.php";

        $client = new Google_Client();
        $client->setAuthConfig("credentials.json");
        $client->addScope('https://www.googleapis.com/auth/spreadsheets');
        $service = new Google_Service_Sheets($client);

        $id = "1mG9OsC3pnvIn4DWTV1Hg700gP9j6RCZXu9OP_og_XuE";
        $sheet = "лист1";
        $table = $service->spreadsheets_values->get($id, $sheet)->getValues();

        if ($table !== null) {
            foreach($table as $row) {
                echo "<tr>";
                foreach($row as $cell) {
                    echo "<td>{$cell}</td>";
                }
                echo "</tr>";
            }
        }
        ?>
        </tbody>
    </table>
</div>
</body>
</html>