<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Gọi CSS merged cho body -->
    <link rel="stylesheet" href="asset/css/home.css">

    <!-- Icon fonts -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet" />

    <title>DLK Shop</title>
</head>

<body>
    <?php include 'layouts/header.php'; ?>

    <div class="banner-slider">
        <div class="banner-slide active">
            <img src="image/ngaydoi-7-7-25-1972x640-cta.jpg" alt="Banner 1">
        </div>
        <div class="banner-slide">
            <img src="image/egift-t3-25-1972x640CTA (1).jpg" alt="Banner 2">
        </div>
        <div class="banner-slide">
            <img src="image/giao-3h-t7-25-1972x640apdung (1).jpg" alt="Banner 3">
        </div>
        <div class="banner-dots">
            <span class="banner-dot active"></span>
            <span class="banner-dot"></span>
            <span class="banner-dot"></span>
        </div>
    </div>

    <?php include 'sections/products.php'; ?>
    <?php include 'sections/brands.php'; ?>
    <?php include 'sections/bestseller.php'; ?>




    <section class="bottom-banner">
        <img class="bottom-banner-image" src="image/24-chuong-trinh-youth-1972x640-CTA.png" alt="Banner Khuyến Mãi">
    </section>


    <?php include 'layouts/footer.php'; ?>

    <script src="asset/js/script.js"></script>
</body>

</html>