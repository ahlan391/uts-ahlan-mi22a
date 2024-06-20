<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loop Text</title>
</head>
<body>
    <h2>Loop Text</h2>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        <label for="text">Text:</label><br>
        <textarea id="text" name="text" rows="4" cols="50" required></textarea><br>
        <label for="count">Jumlah Perulangan:</label><br>
        <input type="number" id="count" name="count" min="1" required><br><br>
        <input type="submit" value="Submit">
    </form>

    <?php
    // Handle form submission
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $text = $_POST['text'];
        $count = $_POST['count'];

        // Validate input
        if (!empty($text) && $count > 0) {
            echo "<h3>Hasil Perulangan:</h3>";
            for ($i = 0; $i < $count; $i++) {
                echo "<p>$text</p>";
            }
        } else {
            echo "<p>Silakan isi semua kolom dengan benar.</p>";
        }
    }
    ?>
</body>
</html>
