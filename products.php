<?php
session_start(); 
require_once "config.php";

if(!isset($_SESSION['id'])) {
    header("Location: login.php");
    exit;
}

$query = "SELECT * FROM urunler";
$result = $conn->query($query);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>İlanlar</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <a href="index.php" class="btn btn-primary">Geri Dön</a>
        <?php
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<div class='card'><div class='card-body'>
                    <h5 class='card-title'>{$row["name"]}</h5>
                    <h6>{$row["price"]} ₺</h6>
                    <p class='card-text'>{$row["description"]}</p>
                    <a href='edit_product.php?id={$row['id']}' class='btn btn-primary'>Düzenle</a>
                    <a href='delete_product.php?id={$row['id']}' class='btn btn-danger' onclick='return confirm(\"Bu ilanı silmek istediğinizden emin misiniz?\");'>Sil</a>
                </div></div>";
            }
        } else {
            echo "<p>Hiç ilan bulunamadı.</p>";
        }
        $conn->close();
        ?>
    </div>
</body>
</html>
