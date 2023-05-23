<!DOCTYPE html>
<html>
<head>
    <title>İkinci El İlanlar</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
        <div class="container">
            <h1 class="text-center">İkinci El İlanlar</h1>
            <div class="row justify-content-center">
                <div class="col-6 text-center">
                <?php
                    session_start();
                    if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
                ?>
                    <a href="create_product.php" class="btn btn-info btn-block">İlan Ver</a>
                    <a href="products.php" class="btn btn-warning btn-block">İlanları Listele</a> 
                    <a href="logout.php" class="btn btn-success btn-block">Çıkış yap</a>
                </div>
            </div>
        </div>

                <?php
                    } else {
                ?>
                    <a href="login.php" class="btn btn-primary btn-block">Giriş Yap/Kayıt O</a>
                    <a href="create_product.php" class="btn btn-info btn-block">İlan Ver</a>
                    <a href="products.php" class="btn btn-warning btn-block">İlanları Listele</a>
                </div>
            </div>
        </div>
<?php
    }
?>
</body>
</html>
