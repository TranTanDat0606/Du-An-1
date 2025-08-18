<?php
  session_start();
  // Tạm thời gán số lượng giỏ hàng là 0
  $cartCount = 0;
?>
<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Giỏ hàng - DLK</title>
    <link rel="stylesheet" href="../../asset/css/cart.css" />
</head>

<body>
    <?php
        include $_SERVER['DOCUMENT_ROOT'] . '/Du-An-1/Du-An-1/layouts/header.php';
    ?>

    <div class="container">
        <div class="cart-section">
            <div class="empty-cart">
                <div class="empty-cart-top">
                    <a href="#" class="back-btn">← Quay lại</a>
                    <h2>Giỏ Hàng</h2>
                </div>
                <img src="../../image/empty_product_line.png" alt="Giỏ hàng trống" class="empty-image" />
                <p class="cart-desc">Giỏ hàng trống</p>
            </div>
        </div>
    </div>

    <?php
        include $_SERVER['DOCUMENT_ROOT'] . '/Du-An-1/Du-An-1/layouts/footer.php';
    ?>
</body>

</html>