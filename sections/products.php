<?php include __DIR__ . '/../config/db.php'; ?>

<section class="products-section">
    <div class="container">
        <h2 class="section-title">Bạn đang tìm gì hôm nay?</h2>
        <div class="products-grid">
            <?php
          $sql = "SELECT p.id, p.name, pi.image_url 
        FROM product p
        JOIN product_image pi ON p.id = pi.product_id
        WHERE pi.is_main = 1
        ORDER BY p.id ASC
        LIMIT 12";
            $result = $conn->query($sql);
            if ($result->num_rows > 0):
                while($row = $result->fetch_assoc()):
            ?>
            <div class="product-item">
                <div class="product-icon">
                    <a href="pages/detail/detail.php?id=<?php echo $row['id']; ?>">
                        <img src="<?php echo $row['image_url']; ?>" alt="<?php echo htmlspecialchars($row['name']); ?>">
                    </a>
                </div>
                <h3><?php echo htmlspecialchars($row['name']); ?></h3>
            </div>
            <?php
                endwhile;
            else:
                echo "<p>Không có sản phẩm nào.</p>";
            endif;
            ?>
        </div>
    </div>
</section>