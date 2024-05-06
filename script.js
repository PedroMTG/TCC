function togglePasswordVisibility() {
    var senhaInput = document.getElementById("senha");
    var toggleButton = document.querySelector(".toggle-password");

    if (senhaInput.type === "password") {
        senhaInput.type = "text";
        toggleButton.textContent = "Esconder";
    } else {
        senhaInput.type = "password";
        toggleButton.textContent = "Mostrar";
    }
}
