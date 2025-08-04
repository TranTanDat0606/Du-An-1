// chọn tất cả các checkbox
document.getElementById("selectAll").addEventListener("change", function () {
    const checkboxes = document.querySelectorAll(".item-checkbox");
    checkboxes.forEach(cb => cb.checked = this.checked);
});
// bỏ choọn checkbox
document.querySelectorAll(".item-checkbox").forEach(cb => {
    cb.addEventListener("change", function () {
        const all = document.querySelectorAll(".item-checkbox");
        const checked = document.querySelectorAll(".item-checkbox:checked");
        document.getElementById("selectAll").checked = all.length === checked.length;
    });
});
//Tìm kiếm chọn lọc theo danh mục
document.getElementById("searchInput").addEventListener("input", function () {
    const keyword = this.value.toLowerCase();
    document.querySelectorAll(".table-row").forEach(row => {
    const name = row.querySelector(".category-name").textContent.toLowerCase();
    row.style.display = name.includes(keyword) ? "" : "none";
});
})
//Sắp xếp theo tên STT
function sortTable(colIndex, isNumber = false) {
    const table = document.querySelector("tbody");
    const rows = Array.from(table.rows);
    const sorted = rows.sort((a, b) => {
    const aText = a.cells[colIndex].textContent.trim();
    const bText = b.cells[colIndex].textContent.trim();
    return isNumber ? aText - bText : aText.localeCompare(bText);
    });
    table.innerHTML = "";
sorted.forEach(row => table.appendChild(row));
}

