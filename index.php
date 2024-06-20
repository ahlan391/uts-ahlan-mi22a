<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Utama</title>
</head>
<body>
    <h1>Menu Utama</h1>
    <ul>
        <li><a href="index.php?page=beranda">Beranda</a></li>
        <li><a href="index.php?page=login">Login</a></li>
        <li><a href="index.php?page=loop">Loop</a></li>
        <li><a href="index.php?page=profil">Profil</a></li>
    </ul>

    <?php
    // Handle menu navigation
    if (isset($_GET['page'])) {
        $page = $_GET['page'];
        
        switch ($page) {
            case 'login':
                header('Location: NIM_login.php');
                exit;
            case 'loop':
                header('Location: NIM_loop.php');
                exit;
            case 'profil':
                header('Location: NIM_profil.php');
                exit;
            case 'beranda':
            default:
                echo "<p>Selamat datang di halaman Beranda.</p>";
                break;
        }
    }
    ?>
</body>
</html>
