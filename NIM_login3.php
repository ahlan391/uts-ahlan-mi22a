<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            text-align: center;
            margin-top: 50px;
        }
        .login-box {
            max-width: 300px;
            margin: 0 auto;
            background: #fff;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        input[type="text"], input[type="password"] {
            width: calc(100% - 20px);
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="login-box">
        <h2>Login</h2>
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
            <input type="text" name="username" placeholder="Username" required><br>
            <input type="password" name="password" placeholder="Password" required><br>
            <input type="submit" name="submit" value="Login">
        </form>
        <p><?php echo isset($message) ? $message : ''; ?></p>
    </div>
</body>
</html>

<?php
// Proses form ketika submit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Username dan Password yang diharapkan
    $expected_username = "admin";
    $expected_password = "1234";

    // Cek username dan password
    if ($username == $expected_username && $password == $expected_password) {
        $message = "Login Berhasil";
    } elseif ($username != $expected_username) {
        $message = "Username/Password tidak sesuai";
    } elseif ($password != $expected_password) {
        $message = "Username/Password tidak sesuai";
    }
}
?>
