<?php include 'includes/header.php'; ?>
<?php include 'includes/nav.php'; ?>

<?php
$id = $_GET['product_id'] ?? 1;
$productName = $id == 1 ? "Nhẫn Vàng 18K" : "Dây Chuyền Ngọc";
?>

<main class="container">
  <h2>Đặt hàng: <?= $productName ?></h2>
  <form method="post" action="order.php">
    <label>Họ và tên:</label>
    <input type="text" name="fullname" required>
    <label>Email:</label>
    <input type="email" name="email" required>
    <label>Địa chỉ giao hàng:</label>
    <textarea name="address" required></textarea>
    <input type="hidden" name="product" value="<?= $productName ?>">
    <button type="submit">Xác nhận đặt hàng</button>
  </form>

  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "<p style='color: green;'>Cảm ơn bạn đã đặt hàng! Chúng tôi sẽ liên hệ sớm nhất.</p>";
  }
  ?>
</main>

<?php include 'includes/footer.php'; ?>
