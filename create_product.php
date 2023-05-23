<?php
session_start();
require_once "config.php";

if(!isset($_SESSION['id'])) {
    header("Location: login.php");
    exit;
}

if (isset($_POST['product_name'], $_POST['description'], $_POST['price'])) {
    $product_name = $_POST['product_name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $seller_id = $_SESSION['id'];

    $stmt = $conn->prepare("INSERT INTO urunler (name, description, price, seller_id) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssdi", $product_name, $description, $price, $seller_id);
    $stmt->execute();

    header("location: products.php");

    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>İlan Oluştur</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
    <div class="crtb-container">
        <a href="index.php" class="btn btn-primary">Geri Dön</a>
        <h2>Yeni İlan Oluştur</h2>
        <form action="create_product.php" method="post" enctype="multipart/form-data">
            <label for="product_name">Ürün Adı:</label>
            <input type="text" id="product_name" name="product_name" required>
            <label for="description">Açıklama:</label>
            <textarea id="description" name="description" required></textarea>
            <label for="price">Fiyat:</label>
            <input type="number" id="price" name="price" required>
            <button type="submit">İlanı Oluştur</button>
        </form>
    </div>
</body>
</html>
