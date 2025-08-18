document.getElementById("registerForm").addEventListener("submit", function (e) {e.preventDefault();
const fields = ["lastName", "firstName", "phone", "email", "password"];
let valid = true;
fields.forEach(id => {
    const input = document.getElementById(id);
    if (input.value.trim() === "") {
        input.classList.add("error"); valid = false;
    } else {
    input.classList.remove("error");
    }
    });

if (valid) {
    alert("Đăng ký thành công!");
    this.reset();
}
});
