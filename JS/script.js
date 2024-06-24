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
document.querySelectorAll('input[type="text"]').forEach(input => {
input.setAttribute('spellcheck', 'false');
});


// script botão aumentar do carrinho
document.addEventListener('DOMContentLoaded', function() {
    document.querySelectorAll('.adicionar, .remover').forEach(botao => {
      botao.addEventListener('click', function() {
        const item = this.parentElement;
        const quantidadeElemento = item.querySelector('.quantidade');
        let quantidade = parseInt(quantidadeElemento.textContent);
        
        if (this.classList.contains('adicionar')) {
          quantidadeElemento.textContent = ++quantidade;
        } else if (quantidade > 0) {
          quantidadeElemento.textContent = --quantidade;
        }
      });
    });
  });