<?php
// Kết nối cơ sở dữ liệu
include $_SERVER['DOCUMENT_ROOT'] . '/Du-An-1/Du-An-1/config/db.php';

// Lấy id từ URL
$product_id = $_GET['id'];

// Truy vấn cơ sở dữ liệu để lấy thông tin sản phẩm
$sql = "SELECT p.id, p.name, p.price, p.status, p.description, pi.image_url 
        FROM product p
        JOIN product_image pi ON p.id = pi.product_id
        WHERE p.id = $product_id AND pi.is_main = 1";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $product = $result->fetch_assoc(); // Lấy dữ liệu sản phẩm
} else {
    echo "Sản phẩm không tồn tại.";
    exit;
}
?>

<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Chi tiết sản phẩm</title>
    <link rel="stylesheet" href="../../asset/css/detail.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
</head>

<body>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/Du-An-1/Du-An-1/layouts/header.php'; ?>

    <main class="container product-page">
        <div class="product-gallery">
            <div class="thumbnails-vertical">
                <?php 
                    // Hiển thị tất cả hình ảnh của sản phẩm
                    $image_sql = "SELECT image_url FROM product_image WHERE product_id = $product_id";
                    $image_result = $conn->query($image_sql);

                    if ($image_result->num_rows > 0) {
                        while($image_row = $image_result->fetch_assoc()) {
                            echo '<img src="../../' . $image_row['image_url'] . '" onmouseover="changeImage(this)" />';
                        }
                    }
                ?>
            </div>

            <img id="main-image" src="../../<?php echo $product['image_url']; ?>" alt="Main Image" />

            <div class="tabs">
                <div class="tab">
                    <button onclick="openTab('specs')">Mô tả sản phẩm</button>
                    <button onclick="openTab('detail')">Chi tiết sản phẩm</button>
                    <button onclick="openTab('policy')">Chính sách</button>
                </div>

                <div class="tab-content" id="specs">
                    <p class="description"><?php echo $product['description']; ?></p>
                </div>

                <div class="tab-content" id="detail">
                    <ul>
                        <li><strong>Giá:</strong> <?php echo number_format($product['price'], 0, ',', '.') . 'đ'; ?>
                        </li>
                        <li><strong>Tình trạng:</strong> <?php echo $product['status']; ?></li>
                    </ul>
                </div>

                <div class="tab-content" id="policy" style="display: none;">
                    ⏲️ <strong>Bảo hành:</strong> 12 tháng / theo chính sách của cửa hàng
                </div>
            </div>
        </div>

        <div class="product-info">
            <h1><?php echo $product['name']; ?></h1>

            <div class="offers">
                <div class="offers-deal-box">
                    <p class="offers-deal"> 🔥 Khuyến mãi trị giá 100.000₫</p>
                    <p class="offers-deal-time">Giá và khuyến mãi dự kiến áp dụng đến 23:00 | 31/08</p>
                    <div class="offers-boder"></div>
                </div>
                <ul>
                    <li>Giảm ngay 10% cho đơn hàng đầu tiên <a href="#">Xem chi tiết</a></li>
                    <li>Cơ hội tận hưởng đặc quyền triệu dặm thưởng từ Vietnam Airlines <a href="#">Xem chi tiết</a>
                    </li>
                    <li>Cơ hội sở hữu 01 chỉ vàng mỗi ngày <a href="#">Xem chi tiết</a></li>
                    <li>Ưu đãi ngay 300.000Đ cho mỗi đơn 10 triệu <a href="#">Xem chi tiết</a></li>
                    <li>Tặng trang sức trị giá đến 1 triệu <em>(Chỉ áp dụng tại 100 cửa hàng chọn lọc)</em> <a
                            href="#">Xem chi tiết</a></li>
                    <li>Ưu đãi thêm lên đến 300K khi thanh toán quét VNPAY-QR</li>
                    <li>Ưu đãi thêm 1.000.000Đ khi thanh toán bằng thẻ TECHCOMBANK <a href="#">Xem chi tiết</a></li>
                    <li>Ưu đãi thêm lên đến 500.000Đ khi thanh toán bằng thẻ NCB <a href="#">Xem chi tiết</a></li>
                </ul>
            </div>

            <p class="price"><?php echo number_format($product['price'], 0, ',', '.') . 'đ'; ?></p>
            <!-- <p class="status"><?php echo $product['status']; ?></p> -->
            <a href="../dat-hang/dat-hang.php"><button class="buy-now">MUA NGAY</button></a>
            <a href="../cart/cart.php"><button class="add-cart">THÊM VÀO GIỎ</button></a>
        </div>
    </main>

    <script>
    function changeImage(imgElement) {
        document.getElementById('main-image').src = imgElement.src;
    }

    function openTab(tabId) {
        var contents = document.getElementsByClassName('tab-content');
        for (var i = 0; i < contents.length; i++) {
            contents[i].style.display = 'none';
        }

        document.getElementById(tabId).style.display = 'block';
    }

    window.onload = function() {
        openTab('specs');
    };
    </script>

    <?php include $_SERVER['DOCUMENT_ROOT'] . '/Du-An-1/Du-An-1/layouts/footer.php'; ?>
</body>

</html>