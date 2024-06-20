<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Form</title>
</head>
<body>
    <h2>Form Profil</h2>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        <label for="nim">NIM:</label><br>
        <input type="text" id="nim" name="nim" required><br>
        <label for="nama">Nama:</label><br>
        <input type="text" id="nama" name="nama" required><br>
        <label for="kelas">Kelas:</label><br>
        <input type="text" id="kelas" name="kelas" required><br>
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br>
        <label for="hp">Nomor HP:</label><br>
        <input type="text" id="hp" name="hp" required><br><br>
        <input type="submit" value="Submit">
    </form>

    <?php
    // Handle form submission
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nim = $_POST['nim'];
        $nama = $_POST['nama'];
        $kelas = $_POST['kelas'];
        $email = $_POST['email'];
        $hp = $_POST['hp'];

        // Display submitted information
        echo "<h3>Informasi Profil:</h3>";
        echo "<p><strong>NIM:</strong> $nim</p>";
        echo "<p><strong>Nama:</strong> $nama</p>";
        echo "<p><strong>Kelas:</strong> $kelas</p>";
        echo "<p><strong>Email:</strong> $email</p>";
        echo "<p><strong>Nomor HP:</strong> $hp</p>";
    }
    ?>
</body>
</html>
