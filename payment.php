<?php include("includes/header.php"); ?>
<div class="payment-container">
  <h2 class="payment-title">XÁC NHẬN & THANH TOÁN</h2>

  <div class="payment-summary">
    <div class="summary-left">
      <h3>Thông tin sản phẩm</h3>
      <ul>
        <li><strong>Sản phẩm:</strong> Lắc tay vàng 18K PNJ</li>
        <li><strong>Mã sản phẩm:</strong> 700045A</li>
        <li><strong>Số lượng:</strong> 1</li>
        <li><strong>Giá:</strong> 14.270.000đ</li>
        <li><strong>Phí vận chuyển:</strong> Miễn phí</li>
        <li><strong>Tổng cộng:</strong> <span class="highlight">14.270.000đ</span></li>
      </ul>
    </div>

    <!-- Chọn phương thức thanh toán -->
    <div class="payment-methods">
      <select id="paymentMethod" name="payment" required>
        <option value="">-- Phương Thức Thanh Toán --</option>
        <option value="cod">Thanh Toán Khi Nhận Hàng</option>
        <option value="momo">Thanh Toán Bằng MOMO</option>
        <option value="bank">Thanh Toán Bằng Ngân Hàng</option>
      </select>
    </div>

    <!-- Khu vực hiển thị QR -->
    <div id="qr-display" style="margin-top: 20px; display: none;">
      <h3>Quét mã để thanh toán:</h3>
      <img id="qr-image" src="" alt="QR Code" style="max-width: 200px;">
    </div>

    <!-- Form thanh toán -->
    <form action="success.php" method="get">
      <button type="submit" id="payBtn" class="order-button" disabled>THANH TOÁN NGAY</button>
    </form>
  </div>
</div>

<script>
  const paymentMethod = document.getElementById("paymentMethod");
  const qrDisplay = document.getElementById("qr-display");
  const qrImage = document.getElementById("qr-image");
  const payBtn = document.getElementById("payBtn");

  const qrCodes = {
    bank: "ảnh/MB.jpg",
    momo: "ảnh/MOMO.jpg"
  };

  paymentMethod.addEventListener("change", function() {
    const method = this.value;

    // Bật nút thanh toán khi chọn phương thức
    payBtn.disabled = method === "";

    // Hiện mã QR nếu là momo hoặc ngân hàng
    if (qrCodes[method]) {
      qrDisplay.style.display = "block";
      qrImage.src = qrCodes[method];
    } else {
      qrDisplay.style.display = "none";
      qrImage.src = "";
    }
  });
</script>

<?php include("includes/footer.php"); ?>
