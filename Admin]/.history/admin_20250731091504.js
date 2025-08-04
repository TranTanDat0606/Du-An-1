// chọn tất cả các checkbox
document.getElementById("selectAll").addEventListener("change", function () {
    const checkboxes = document.querySelectorAll(".item-checkbox");
    checkboxes.forEach(cb => cb.checked = this.checked);
});
//Tìm kiếm chọn lọc theo 