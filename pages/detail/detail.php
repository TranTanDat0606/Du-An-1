<?php
// Nếu muốn load dữ liệu sản phẩm từ CSDL thì viết PHP query ở đây.
// Ví dụ giả lập dữ liệu:
$product = [
    "name" => "Mặt dây chuyền Kim cương Vàng trắng 14K",
    "price" => "11.420.000đ",
    "status" => "Còn hàng – Gọi <strong>1800 545457</strong> để đặt trước",
    "images" => ["img/anh1.jpg", "img/anh2.jpg", "img/anh3.jpg", "img/anh4.jpg"]
];
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
<!-- src="<?php echo $product['images'][0]; ?>" -->
<!-- <img src="<?php echo $img; ?>" onmouseover="changeImage(this)" /> -->

<body>
    <?php
        include $_SERVER['DOCUMENT_ROOT'] . '/Du-An-1/Du-An-1/layouts/header.php';
    ?>
    <main class="container product-page">
        <div class="product-gallery">
            <div class="thumbnails-vertical">
                <?php foreach($product['images'] as $img): ?>
                <img src="../../image/anh2.jpg" onmouseover="changeImage(this)" />
                <?php endforeach; ?>
            </div>

            <img id="main-image" src="../../image/anh1.jpg" alt="Main Image" />
            <div class="tabs">
                <div class="tab">
                    <button onclick="openTab('specs')">Mô tả sản phẩm</button>
                    <button onclick="openTab('detail')">Chi tiết sản phẩm</button>
                    <button onclick="openTab('policy')">Chính sách</button>
                </div>

                <div class="tab-content" id="specs">
                    <p class="description">💎 <strong>Mặt dây chuyền được chế tác từ vàng trắng 14K cao cấp</strong>,
                        kết hợp
                        cùng viên kim cương
                        thiên nhiên tinh khiết, tạo nên vẻ đẹp vừa thanh lịch vừa sang trọng. </p>
                    <p class="description">✨ <strong>Thiết kế tối giản nhưng vẫn đầy cuốn hút</strong>, phù hợp với cả
                        trang
                        phục thường ngày lẫn
                        các dịp trang trọng.</p>
                </div>
                <div class="tab-content" id="detail">
                    <ul>
                        <li><strong>Chất liệu: </strong>Vàng trắng 14K</li>
                        <li><strong>Loại đá:</strong> Kim cương thiên nhiên</li>
                        <li><strong>Trọng lượng</strong> vàng: 500g</li>
                        <li><strong>Trọng lượng kim cương:</strong> 5 carat</li>
                        <li><strong>Màu sắc kim cương:</strong> D </li>
                        <li><strong>Độ tinh khiết:</strong> VS1</li>
                        <li><strong>Kích thước mặt dây:</strong> 7mm </li>
                        <li><strong>Phong cách:</strong> Hiện đại, tinh tế</li>
                        <li><strong>Tình trạng:</strong> Hàng mới 100%</li>
                    </ul>
                </div>
                <div class="tab-content" id="policy" style="display: none;">⏲️ <strong>Bảo hành:</strong> 12 tháng /
                    theo chính sách của
                    cửa
                    hàng</div>
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


            <p class="price"><?php echo $product['price']; ?></p>
            <p class="status"><?php echo $product['status']; ?></p>
            <a href="../dat-hang/dat-hang.php"><button class="buy-now">MUA NGAY</button></a>
            <a href="../cart/cart.php"><button class="add-cart">THÊM VÀO GIỎ</button></a>

        </div>
    </main>


    <script>
    function changeImage(imgElement) {
        document.getElementById('main-image').src = imgElement.src;
    }
    </script>.

    <script>
    function openTab(tabId) {
        // Ẩn tất cả tab content
        var contents = document.getElementsByClassName('tab-content');
        for (var i = 0; i < contents.length; i++) {
            contents[i].style.display = 'none';
        }

        // Hiển thị tab được chọn
        document.getElementById(tabId).style.display = 'block';
    }

    // Gọi mở tab specs khi trang vừa load
    window.onload = function() {
        openTab('specs');
    };
    </script>
    <?php
        include $_SERVER['DOCUMENT_ROOT'] . '/Du-An-1/Du-An-1/layouts/footer.php';
    ?>
</body>

</html>