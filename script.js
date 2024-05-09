function togglePasswordVisibility() {
    var senhaInput = document.getElementById("senha");
    var fechado = document.querySelector(".fechado");
    var aberto = document.querySelector(".aberto");

    if (senhaInput.type === "password") {
        senhaInput.type = "text";
        fechado.style.display = "none";
        aberto.style.display = "inline";
    } else {
        senhaInput.type = "password";
        aberto.style.display = "none";
        fechado.style.display = "inline";
    }
    
}