<?php include 'includes/header.php'; ?>
<?php include 'includes/nav.php'; ?>

<?php
$id = $_GET['id'] ?? 1; // đơn giản, thực tế cần kiểm tra kỹ hơn
$products = [
  1 => ["name" => "Nhẫn Vàng 18K", "desc" => "Nhẫn sang trọng", "price" => "3.500.000đ", "image" => "ring.jpg"],
  2 => ["name" => "Dây Chuyền Ngọc", "desc" => "Dây chuyền ngọc trai", "price" => "5.200.000đ", "image" => "necklace.jpg"]
];
$product = $products[$id];
?>

<main class="container">
  <div class="product-detail">
    <img src="assets/images/<?= $product['image'] ?>" alt="<?= $product['name'] ?>">
    <div>
      <h1><?= $product['name'] ?></h1>
      <p><?= $product['desc'] ?></p>
      <p><strong><?= $product['price'] ?></strong></p>
      <a href="order.php?product_id=<?= $id ?>" class="order-button">Đặt hàng</a>
    </div>
  </div>
</main>

<?php include 'includes/footer.php'; ?>
