/* Função de Adicionar a div Pint-Completa */

/* Aparecer a div de Editar
   Pegar o butão e a div com o document
   colocando a div com display none para desaparecer 
   e depois adicionando um eventListener 
   para  para colocar o dislpay block para mostar
   e assim sucessivamente */
var btnEdit = document.getElementById("btn-edit");
var btnEdit2 = document.getElementById("btn-edit2");
var btnEdit3 = document.getElementById("btn-edit3");
var menuEdit = document.getElementById("Editar");
var menuEdit2 = document.getElementById("Editar2");
var menuEdit3 = document.getElementById("Editar3");
menuEdit.style.display = "none";
menuEdit2.style.display = "none";
menuEdit3.style.display = "none";

function AparecerE(){
    if(menuEdit.style.display === "none", menuEdit2.style.display === "none", menuEdit3.style.display === "none") {
        menuEdit.style.display = "block";
        menuEdit2.style.display = "block";
        menuEdit3.style.display = "block";
    } else {
        menuEdit.style.display = "none";
        menuEdit2.style.display = "none";
        menuEdit3.style.display = "none";
    }
}

/* Editar Pintura */

/* 1º criando variavel para o valor dos campos
   2º chamar a função do click do butão
   3º criando estrutira de se e se não para mensagem de erro
   4º por ultimo pegando os document dos inputs e transformando 
   eles em uma nova string(Nome ou Descrição nova)
   5º criando um limite de caracteres no nome da pintura 
*/

var NovoNomeP = "";
var NovaDesc = "";
var NovoNomeP2 = "";
var NovaDesc2 = "";
var NovoNomeP3 = "";
var NovaDesc3 = "";
var NomePintura = document.querySelector("#NNPint");
var descPintura = document.querySelector("#DNPint");
var NomePintura2 = document.querySelector("#NNPint2");
var descPintura2 = document.querySelector("#DNPint2");
var NomePintura3 = document.querySelector("#NNPint3");
var descPintura3 = document.querySelector("#DNPint3");

function NPintura(){
    if(NomePintura.value.length <= 1){
        alert("Por favor, preencha o nome da pintura com mais letras");
    }
    else if(descPintura.value.length <= 1){
        alert("Por favor, preencha a descrição da pintura com mais letras");
    }
    else{
    NovoNomeP = NomePintura.value;
    document.getElementById("Nome-Pint").innerHTML = NovoNomeP;

    NovaDesc = descPintura.value;
    document.getElementById("Desc-Pint").innerHTML = NovaDesc;
    }
}
function NPintura2(){
    if(NomePintura2.value.length <= 1){
        alert("Por favor, preencha o nome da pintura com mais letras");
    }
    else if(descPintura2.value.length <= 1){
        alert("Por favor, preencha a descrição da pintura com mais letras");
    }
    else{
    NovoNomeP2 = NomePintura2.value;
    document.getElementById("Nome-Pint2").innerHTML = NovoNomeP2;

    NovaDesc2 = descPintura2.value;
    document.getElementById("Desc-Pint2").innerHTML = NovaDesc2;
    }
}
function NPintura3(){
    if(NomePintura3.value.length <= 1){
        alert("Por favor, preencha o nome da pintura com mais letras");
    }
    else if(descPintura3.value.length <= 1){
        alert("Por favor, preencha a descrição da pintura com mais letras");
    }
    else{
    NovoNomeP3 = NomePintura3.value;
    document.getElementById("Nome-Pint3").innerHTML = NovoNomeP3;

    NovaDesc3 = descPintura3.value;
    document.getElementById("Desc-Pint3").innerHTML = NovaDesc3;
    }
}

/* Selecionar uma pintura nova */
/* Pegar os document da pintura noca e antifa
   e criar um EventListener change(Alterar) */

NovaPintura = document.getElementById("PNPint");
AntigaPintura = document.querySelector(".Pintura");
   
NovaPintura.addEventListener('change', function(e) {
    showThumbnail(this.files); /* mostrar miniatura desse mesmo arquivo */
});
   
function showThumbnail(files) {
    if (files && files[0]) {
    var procurar = new FileReader();
   
    procurar.onload = function (e) {
        AntigaPintura.src = e.target.result;
    }
   
    procurar.readAsDataURL(files[0]);
    }
}

NovaPintura2 = document.getElementById("PNPint2");
AntigaPintura2 = document.querySelector(".Pintura2");
   
NovaPintura2.addEventListener('change', function(e) {
    showThumbnail(this.files); /* mostrar miniatura desse mesmo arquivo */
});
   
function showThumbnail(files) {
    if (files && files[0]) {
    var procurar2 = new FileReader();
   
    procurar2.onload = function (e) {
        AntigaPintura2.src = e.target.result;
    }
   
    procurar2.readAsDataURL(files[0]);
    }
}

NovaPintura3 = document.getElementById("PNPint3");
AntigaPintura3 = document.querySelector(".Pintura3");
   
NovaPintura3.addEventListener('change', function(e) {
    showThumbnail(this.files); /* mostrar miniatura desse mesmo arquivo */
});
   
function showThumbnail(files) {
    if (files && files[0]) {
    var procurar3 = new FileReader();
   
    procurar3.onload = function (e) {
        AntigaPintura3.src = e.target.result;
    }
   
    procurar3.readAsDataURL(files[0]);
    }
}


/* Botão de excluir */
var deletar = document.getElementById("Pint-Completa1");
function Excluir(){
    if (deletar.parentNode) {
    deletar.parentNode.removeChild(deletar);
    }
}
var deletar2 = document.getElementById("Pint-Completa2");
function Excluir2(){
    if (deletar2.parentNode) {
    deletar2.parentNode.removeChild(deletar2);
    }
}
var deletar3 = document.getElementById("Pint-Completa3");
function Excluir3(){
    if (deletar3.parentNode) {
    deletar3.parentNode.removeChild(deletar3);
    }
}