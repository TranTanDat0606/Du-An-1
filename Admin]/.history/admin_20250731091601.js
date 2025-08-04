// chọn tất cả các checkbox
document.getElementById("selectAll").addEventListener("change", function () {
    const checkboxes = document.querySelectorAll(".item-checkbox");
    checkboxes.forEach(cb => cb.checked = this.checked);
});
//Tìm kiếm chọn lọc theo danh mục
document.getElementById("searchInput").addEventListener("input", function () {
    const keyword = this.value.toLowerCase();
    document.querySelectorAll(".table-row").forEach(row => {
    const name = row.querySelector(".category-name").textContent.toLowerCase();
    row.style.display = name.includes(keyword) ? "" : "none";
});
})
//Sắp xếp theo tẹ
