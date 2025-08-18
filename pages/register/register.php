<?php
$errors = [];
$success = false;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Lấy dữ liệu
    $lastName = trim($_POST['lastName'] ?? '');
    $firstName = trim($_POST['firstName'] ?? '');
    $phone = trim($_POST['phone'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $password = trim($_POST['password'] ?? '');

    // Kiểm tra dữ liệu
    if ($lastName === '') $errors[] = "Họ không được để trống.";
    if ($firstName === '') $errors[] = "Tên không được để trống.";
    if ($phone === '') $errors[] = "Số điện thoại không được để trống.";
    if ($email === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = "Email không hợp lệ.";
    if ($password === '') $errors[] = "Mật khẩu không được để trống.";

    // Nếu không có lỗi
    if (empty($errors)) {
        $success = true;
        // Ở đây bạn có thể thêm logic lưu vào cơ sở dữ liệu
    }
}
?>

<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../../asset/css/register.css" />
    <title>Đăng ký</title>
</head>

<body>
    <?php
        include $_SERVER['DOCUMENT_ROOT'] . '/Du-An-1/Du-An-1/layouts/header.php';
    ?>
    <div class="container"></div>
    <main class="form-wrapper">

        <div class="title">
            <a href="#" class="back-link">← home</a>
            <h2 class="form-title">THÔNG TIN CÁ NHÂN</h2>
        </div>


        <?php if ($success): ?>
        <p style="color: green;">Đăng ký thành công!</p>
        <?php elseif (!empty($errors)): ?>
        <ul style="color: red;">
            <?php foreach ($errors as $error): ?>
            <li><?= htmlspecialchars($error) ?></li>
            <?php endforeach; ?>
        </ul>
        <?php endif; ?>

        <form id="registerForm" class="form-fields" method="post" action="register.php" novalidate>
            <div>
                <label class="form-label">Họ <span class="required">*</span></label>
                <input name="lastName" type="text" class="input-text" placeholder="Họ"
                    value="<?= htmlspecialchars($_POST['lastName'] ?? '') ?>" />
            </div>
            <div>
                <label class="form-label">Tên <span class="required">*</span></label>
                <input name="firstName" type="text" class="input-text" placeholder="Tên"
                    value="<?= htmlspecialchars($_POST['firstName'] ?? '') ?>" />
            </div>
            <div>
                <label class="form-label">Số điện thoại <span class="required">*</span></label>
                <input name="phone" type="tel" class="input-text" placeholder="Số điện thoại"
                    value="<?= htmlspecialchars($_POST['phone'] ?? '') ?>" />
            </div>
            <div>
                <label class="form-label">Email <span class="required">*</span></label>
                <input name="email" type="email" class="input-text" placeholder="Email"
                    value="<?= htmlspecialchars($_POST['email'] ?? '') ?>" />
            </div>
            <div>
                <label class="form-label">Mật khẩu <span class="required">*</span></label>
                <input name="password" type="password" class="input-text" placeholder="Mật khẩu" />
            </div>
            <button type="submit" class="submit-btn">Đăng ký</button>
            <p class="form-footer">Bạn đã có tài khoản? Đăng nhập <a href="../login/login.php">tại đây</a></p>
        </form>
    </main>

    <?php
        include $_SERVER['DOCUMENT_ROOT'] . '/Du-An-1/Du-An-1/layouts/footer.php';
    ?>
</body>

</html>