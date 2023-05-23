<?php
session_start();
require_once "config.php";

if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT id, username, password FROM kullanicilar WHERE username = ? AND password = ? LIMIT 1");
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();
    $stmt->bind_result($id, $username, $password);
    $stmt->store_result();

    if ($stmt->num_rows==1) {
        $stmt->fetch();
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;
        $_SESSION['id'] = $id;
        header("location: index.php");
    } else {
        echo "<script>alert('Kullanıcı adı veya şifre yanlış.');</script>";
    }
    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Giriş Sayfası</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
    <div class="login-container">
        <a href="index.php" class="btn btn-primary">Geri Dön</a>
        <h2>Giriş Yap</h2>
        <form action="login.php" method="post">
            <label for="username">Kullanıcı Adı:</label>
            <input type="text" id="username" name="username" required>
            <label for="password">Şifre:</label>
            <input type="password" id="password" name="password" required>
            <button type="submit">Giriş Yap</button>
        </form>
        <p>Hesabınız yok mu? <a href="register.php">Buradan kayıt olun</a>.</p>
    </div>
</body>
</html>
