<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Đăng nhập - DLK</title>
    <link rel="stylesheet" href="../../asset/css/login.css" />
</head>

<body>
    <?php
        include $_SERVER['DOCUMENT_ROOT'] . '/Du-An-1/Du-An-1/layouts/header.php';
    ?>

    <main class="login-container">
        <a href="/Du-An-1/Du-An-1/index" class="back-link">← Quay lại</a>
        <h2>Chào mừng trở lại</h2>
        <p>Vui lòng đăng nhập để tiếp tục</p>

        <form class="login-form">
            <label for="email">Email <span class="required">*</span></label>
            <input type="email" id="email" placeholder="Email" required />

            <label for="password">Mật khẩu <span class="required">*</span></label>
            <input type="password" id="password" placeholder="Mật khẩu" required />

            <div class="forgot-password">
                Quên mật khẩu? Nhấn vào <a href="#">đây</a>
            </div>

            <button type="submit">Đăng nhập</button>
        </form>

        <p class="register-link">
            Bạn chưa có tài khoản? Đăng ký <a href="../register/register.php">tại đây</a>
        </p>
    </main>

    <?php
        include $_SERVER['DOCUMENT_ROOT'] . '/Du-An-1/Du-An-1/layouts/footer.php';
    ?>
</body>

</html>