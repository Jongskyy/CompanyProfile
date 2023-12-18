<?php
include 'config.php';
session_start();
 
if (isset($_SESSION['username'])) {
    header("Location: halaman_panel.php");
    exit();
}
 
if (isset($_POST['submit'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']); // Hash the input password using SHA-256
 
    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $sql);
 
    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $row['username'];
        header("Location: halaman_panel.php");
        exit();
    } else {
        echo "<script>alert('Email atau password Anda salah. Silakan coba lagi!')</script>";
    }
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="halaman_login.css" type="text/css">
</head>
<body>
    <div class="wrapper">
        <div class="form-wrapper sign-in">
            <form action="" method="POST">
                <h2>Login</h2>
                <div class="input-group">
                    <input type="text" name="username" required>
                    <label for="">Username</label>
                </div>
                <div class="input-group">
                    <input type="password" name="password" required>
                    <label for="">Password</label>
                </div>
                <button name="submit" class="btn">Login</button>
                <div class="signUp-link">
                    <p>Anda Bukan Admin? <a href="index.php" class="signUpBtn-link">Kembali</a></p>
                </div>
            </form>
        </div>

    <script src="script.js"></script>
</body>
</html>