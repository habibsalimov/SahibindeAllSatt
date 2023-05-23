<?php
require_once "config.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = "DELETE FROM urunler WHERE id=?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $id);
    $stmt->execute();

    header("Location: products.php");
} else {
    echo "No ID provided.";
}
?>
