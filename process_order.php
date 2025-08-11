<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST['name'] ?? '';
    $phone = $_POST['phone'] ?? '';
    $address = $_POST['address'] ?? '';

    // Lưu vào file đơn hàng (tuỳ chọn)
    $order = "Họ tên: $name\nSĐT: $phone\nĐịa chỉ: $address\n\n";
    file_put_contents("donhang.txt", $order, FILE_APPEND);

    // Chuyển qua trang thành công
    header("Location: success.html");
    exit;
} else {
    echo "Truy cập không hợp lệ!";
}
?>
