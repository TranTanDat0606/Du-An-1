<?php
// Liên kết đến file header.css
echo '<link rel="stylesheet" href="/header.css">';
// Kiểm tra nếu session chưa được khởi tạo
if (session_status() == PHP_SESSION_NONE) {
    session_start(); // Bắt đầu session
}
    $cart_count = 0;
    if (isset($_SESSION['cart'])) {
        // Đếm tổng số lượng sản phẩm trong giỏ
        foreach ($_SESSION['cart'] as $product) {
            $cart_count += $product['quantity'];
        }
    }
?>

<header>
    <div class="container">
        <a class="logo" href="/Du-An-1/Du-An-1/index.php">
            <img src="/Du-An-1/Du-An-1/image/z6834072539794_8729dce81ec0b051e2c1ecfd8dde5f34.jpg" alt="logo">
        </a>

        <div class="row-flex">
            <div class="header-menu">
                <nav class="main-nav">
                    <ul>
                        <li><a href="/Du-An-1/Du-An-1/index.php">Trang Sức</a></li>
                        <li><a href="#">Trang Sức Cưới</a></li>
                        <li><a href="#">Đồng Hồ</a></li>
                        <li><a href="#">Quà Tặng</a></li>
                        <li><a href="#">Thương Hiệu</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="dat-hang.php">Khuyến Mãi</a></li>
                    </ul>
                </nav>
            </div>
            <div class="header-search">
                <input type="text" placeholder="Tìm kiếm nhanh">
                <i class="ri-search-line"></i>
            </div>
            <div class="header-login">
                <i class="ri-user-line"></i>
                <a href="#">Tài khoản của tôi</a>
            </div>

            <a href="cart.php" class="header-cart">
                <i class="ri-shopping-cart-line"></i>
                <span class="cart-count"
                    style="position: absolute; color: #fff; top: 95px; right: 389px;"><?php echo $cart_count; ?></span>
                <!-- Hiển thị số lượng sản phẩm -->
            </a>
        </div>
    </div>
</header>