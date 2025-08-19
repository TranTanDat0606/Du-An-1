<?php include __DIR__ . '/../config/db.php'; ?>

<section class="bestseller-section">
    <div class="container">
        <h2 class="section-title">Sản phẩm bán chạy</h2>
        <div class="bestseller-grid">
            <?php
           $sql = "SELECT id, name, price, image
        FROM product
        WHERE status = 1 AND id BETWEEN 13 AND 20
        ORDER BY id ASC
        LIMIT 8";
    $result = $conn->query($sql);
    if ($result->num_rows > 0):
    while ($row = $result->fetch_assoc()):
        $price_formatted = number_format($row['price'], 0, ',', '.') . 'đ';
        ?>
            <div class="bestseller-item">
                <a href="pages/detail/detail.php?id=<?php echo $row['id']; ?>">

                    <div class="bestseller-img">
                        <img src="<?php echo htmlspecialchars($row['image']); ?>"
                            alt="<?php echo htmlspecialchars($row['name']); ?>">
                    </div>
                    <h3 class="bestseller-name"><?php echo htmlspecialchars($row['name']); ?></h3>
                    <div class="bestseller-price"><?php echo $price_formatted; ?></div>
                </a>
            </div>
            <?php
    endwhile;
else:
    echo "<p>Không có sản phẩm bán chạy nào.</p>";
endif;
            ?>
        </div>
    </div>
</section>