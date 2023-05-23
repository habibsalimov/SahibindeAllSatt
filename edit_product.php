<?php
require_once "config.php";

if (isset($_POST['id'], $_POST['product_name'], $_POST['description'], $_POST['price'])) {
    $id = $_POST['id'];
    $product_name = $_POST['product_name'];
    $description = $_POST['description'];
    $price = $_POST['price'];

    $query = "UPDATE urunler SET name=?, description=?, price=? WHERE id=?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("ssdi", $product_name, $description, $price, $id);
    $stmt->execute();

    header("Location: products.php");
    exit;
} 

$id = $_GET['id'];
$query = "SELECT * FROM urunler WHERE id=?";
$stmt = $conn->prepare($query);
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Ürün Düzenle</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2>Ürün Düzenle</h2>
        <form action="edit_product.php" method="post">
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
            <div class="form-group">
                <label for="product_name">Ürün Adı:</label>
                <input type="text" class="form-control" id="product_name" name="product_name" value="<?php echo $row['name']; ?>" required>
            </div>
            <div class="form-group">
                <label for="description">Açıklama:</label>
                <textarea class="form-control" id="description" name="description" required><?php echo $row['description']; ?></textarea>
            </div>
            <div class="form-group">
                <label for="price">Fiyat:</label>
                <input type="number" class="form-control" id="price" name="price" value="<?php echo $row['price']; ?>" required>
            </div>
            <button type="submit" class="btn btn-primary">Kaydet</button>
        </form>
    </div>
</body>
</html>
