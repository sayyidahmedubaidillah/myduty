<?php
include 'config.php';
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
if (isset($_POST['submit'])){

$email = mysqli_real_escape_string($conn, $_POST['email']);
$password = hash('sha256', $_POST['password']);

$sql = "SELECT * FROM user WHERE email='$email' AND password='$password'"; 
$result = mysqli_query($conn, $sql);
exit();
} else {
    echo "<script>"alert('email atau password yang anda masukan salah, silakan coba lagi') </script>";
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>niagahoster tutorial</title>
</head>
<body>
    <div class="container">
        <form action="" method="post" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Login</p>
            <div class="input-group">
                <input type="email" placeholder="Email" name="email" value="<?php echo isset($_POST['email']) ? $_POST['email'] : ''; ?>" required>
            </div>
            <div class="input-group">
                <input type="password" placeholder="Password" name="password" value="<?php echo isset($_POST['password']) ? $_POST['password'] : ''; ?>" required>
            </div>
            <div class="input-group">
                <button name="submit" class="btn">Login</button>
            </div>
            <p class="login-register-text">Anda belum punya akun? <a href="register.php">Register</a></p>
        </form>
    </div>
    <p class="login-register-text"> anda belum punya akun ?<a href="register.php">Register</a></p>
</body>
</html>