<?php
require 'fungsi.php';
session_start();

if (isset($_SESSION["login"])) {
    header("Location: index.php");
    exit;
}


$error = false;

if (isset($_POST["login"])) {
    $user = login($_POST);
    if ($user) {
        $_SESSION["login"] = true;
        $_SESSION["username"] = $user["username"];
        header("Location: index.php");
        exit;
    }
    $error = true;
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Mahasiswa Informatika 2026</title>
</head>
<link rel="stylesheet" href="asets/css/style.css">
<body>
<table border="1" cellspacing="1" cellpadding="1"> 
        <tr>
            <td><a href="index.php">HOME</a></td>
            <td><a href="Profile.php">Profile</a></td>
            <td><a href="Contact.php">Contact</a></td>
            <td><a href="Mahasiswa.php">Mahasiswa</a></td>
            <td><a href="login.php">Login</a></td>
        </tr>
    </table>

    <hr/>

    <?php if ($error): ?>
        <p style="color: red;">Username atau password salah.</p>
    <?php endif; ?>

    <form action="" method="post">
        <label>username</label><br>
        <input type="text" name="username" required><br><br>

        <label>password</label><br>
        <input type="password" name="password" required><br><br>

        <button type="submit" name="login">Login</button>
    </form>

    <p>Belum punya akun? <a href="register.php">Register</a></p>

</body>
</html>