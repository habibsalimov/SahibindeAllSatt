<?php
session_start();
require_once "config.php";

if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT username FROM kullanicilar WHERE username = ? LIMIT 1");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->bind_result($username);
    $stmt->store_result();

    if ($stmt->num_rows==0) {
        $stmt->close();

        $stmt = $conn->prepare("INSERT INTO kullanicilar (username, password) values(?, ?)");
        $stmt->bind_param("ss", $username, $password);
        $stmt->execute();
        echo "<script>alert('Kayıt Başarılı');</script>";
    } else {
        echo "<script>alert('Bu kullanıcı adı daha önce alınmış');</script>";
    }
    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Kayıt Sayfası</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
    <div class="login-container">
        <a href="index.php" class="btn btn-primary">Geri Dön</a>
        <h2>Kayıt Ol</h2>
        <form action="register.php" method="post">
            <label for="username">Kullanıcı Adı:</label>
            <input type="text" id="username" name="username" required>
            <label for="password">Şifre:</label>
            <input type="password" id="password" name="password" required>
            <label for="confirm-password">Şifreyi Onayla:</label>
            <input type="password" id="confirm-password" name="confirm-password" required>
            <button type="submit">Kayıt Ol</button>
        </form>
        <p>Zaten Hesabınız Varsa <a href="login.php">Buradan Giriş Yapın</a>.</p>
    </div>
</body>
</html>
