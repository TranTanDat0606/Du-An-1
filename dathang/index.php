<?php include("includes/header.php"); ?>
<div class="container">
  <!-- HÌNH ẢNH + MÔ TẢ SẢN PHẨM -->
  <div class="product-info">
    <div class="product-images">
      <img src="ảnh/ảnh 1.jpg" alt="Ảnh 1" />
      <img src="ảnh/ảnh 2.jpg" alt="Ảnh 2" />
      <img src="ảnh/ảnh 3.jpg" alt="Ảnh 3" />
      <img src="ảnh/ảnh 4.png" alt="Ảnh 4" />
    </div>
    <div class="product-description">
      <p><strong>Mã sản phẩm:</strong> 700045A</p>
      <p><strong>Xuất xứ:</strong> Việt Nam</p>
      <p><strong>Giá:</strong> 14,270,000đ (bao gồm VAT)</p>
      <p><strong>Phí vận chuyển:</strong> Miễn phí</p>
      <p><strong>Ưu đãi:</strong> Tặng hộp quà, phiếu bảo hành</p>
    </div>
  </div>

  <!-- FORM THÔNG TIN NGƯỜI MUA -->
  <div class="customer-info">
    <div class="form-header">
      <h2>THÔNG TIN KHÁCH HÀNG</h2>
    </div>

    <!-- Form chính -->
    <form action="payment.php" method="get" onsubmit="return validateForm();">
      <label>Họ và tên:</label>
      <input type="text" name="fullname" id="fullname" required />

      <label>SĐT:</label>
      <input type="tel" name="phone" id="phone" required />

      <label>Email:</label>
      <input type="email" name="email" id="email" required />

      <label>Ngày sinh:</label>
      <input type="date" name="birthday" id="birthday" required />

      <div class="gender-row">
        <label><input type="radio" name="gender" value="nam" /> Nam</label>
        <label><input type="radio" name="gender" value="nu" /> Nữ</label>
      </div>

      <div class="delivery-method">
        <p>Phương thức nhận hàng:</p>
        <label><input type="radio" name="delivery" value="home" required /> Giao hàng tận nơi</label>
        <label><input type="radio" name="delivery" value="store" /> Đến cửa hàng nhận</label>
      </div>

      <label>Tỉnh/Thành:</label>
      <select id="province" name="province" required>
        <option value="">-- Chọn Tỉnh/Thành --</option>
      </select>

      <label>Quận/Huyện:</label>
      <select id="district" name="district" required>
        <option value="">-- Chọn Quận/Huyện --</option>
      </select>

      <label>Địa chỉ:</label>
      <textarea name="address" placeholder="Nhập địa chỉ..." required></textarea>

      <div class="checkboxes">
        <label><input type="checkbox" name="invoice" /> Xuất hóa đơn công ty</label>
        <label><input type="checkbox" name="promo" /> Nhận thông tin khuyến mãi</label>
        <label><input type="checkbox" name="data_agree" required /> Đồng ý xử lý dữ liệu cá nhân</label>
        <label><input type="checkbox" name="giftcard" /> Nhận thiệp chúc mừng</label>
      </div>

      <button type="submit" class="order-button">ĐẶT HÀNG</button>
    </form>
  </div>
</div>

<script>
function validateForm() {
  const requiredFields = ['fullname', 'phone', 'email', 'birthday'];
  for (const id of requiredFields) {
    const el = document.getElementById(id);
    if (!el.value.trim()) {
      alert("Vui lòng điền đầy đủ thông tin.");
      el.focus();
      return false;
    }
  }

  const delivery = document.querySelector('input[name="delivery"]:checked');
  if (!delivery) {
    alert("Vui lòng chọn phương thức nhận hàng.");
    return false;
  }

  const province = document.getElementById("province").value;
  const district = document.getElementById("district").value;
  if (!province || !district) {
    alert("Vui lòng chọn tỉnh/thành và quận/huyện.");
    return false;
  }

  const agree = document.querySelector('input[name="data_agree"]');
  if (!agree.checked) {
    alert("Bạn cần đồng ý xử lý dữ liệu cá nhân.");
    return false;
  }

  return true;
}

// Load tỉnh thành + quận huyện từ JSON
fetch("vietnam_provinces.json")
  .then(res => res.json())
  .then(data => {
    const provinceSelect = document.getElementById("province");
    const districtSelect = document.getElementById("district");

    for (const province in data) {
      const option = document.createElement("option");
      option.value = province;
      option.textContent = province;
      provinceSelect.appendChild(option);
    }

    provinceSelect.addEventListener("change", function () {
      const selected = this.value;
      districtSelect.innerHTML = "<option value=''>-- Chọn Quận/Huyện --</option>";
      if (data[selected]) {
        data[selected].forEach(d => {
          const option = document.createElement("option");
          option.value = d;
          option.textContent = d;
          districtSelect.appendChild(option);
        });
      }
    });
  });
</script>


<?php include("includes/footer.php"); ?>