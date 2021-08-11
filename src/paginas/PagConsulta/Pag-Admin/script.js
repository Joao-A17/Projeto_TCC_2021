/* Lista do 3 pontinhos */

var Pontinhos = document.querySelector(".Pontinhos");
var Lista = document.querySelector(".PontLista");

Lista.style.visibility="hidden";

Pontinhos.addEventListener("click", function() {

    Lista.style.visibility="visible";
    Lista.classList.toggle("hide");

});

/* Funções de Editar e Adicionar */