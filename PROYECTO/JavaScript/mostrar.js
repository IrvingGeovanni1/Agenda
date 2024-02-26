function togglePassword() {
    var passwordInput = document.getElementById("password");
    var checkBox = document.getElementById("showPassword");

    if (checkBox.checked) {
        passwordInput.type = "text";
    }
    else {
        passwordInput.type = "password";
    }
}