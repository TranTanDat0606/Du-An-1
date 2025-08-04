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
    <h2>Phương thức thanh toán</h2>
<div class="payment-methods">
  <label><input type="radio" name="payment" value="bank" onclick="showPayment('bank')" /> Chuyển khoản ngân hàng</label><br>
  <label><input type="radio" name="payment" value="momo" onclick="showPayment('momo')" /> Ví MoMo</label><br>
  <label><input type="radio" name="payment" value="zalopay" onclick="showPayment('zalopay')" /> Ví ZaloPay</label><br>
</div>

<div id="qr-display" style="margin-top: 20px; display: none;">
  <h3>Quét mã để thanh toán:</h3>
  <img id="qr-image" src="" alt="QR Code" style="max-width: 200px;">
</div>
<form action="success.html" method="get" onsubmit="return validatePayment();">
  <!-- Các input hoặc lựa chọn thanh toán -->

  <button type="submit" class="order-button">THANH TOÁN NGAY</button>
</form>

      <script>
function showPayment(method) {
  const qrDisplay = document.getElementById("qr-display");
  const qrImage = document.getElementById("qr-image");

  const qrCodes = {
    bank: "ảnh/Ảnh chụp màn hình 2025-08-04 034730.png",     // đặt hình QR trong thư mục img/
    momo: "ảnh/Ảnh chụp màn hình 2025-08-04 034730.png",
    zalopay: "ảnh/Ảnh chụp màn hình 2025-08-04 034730.png"};

  if (qrCodes[method]) {
    qrDisplay.style.display = "block";
    qrImage.src = qrCodes[method];
  } else {
    qrDisplay.style.display = "none";
  }
}
</script>

    </div>
  </div>
</div>
<?php include("includes/footer.php"); ?>
