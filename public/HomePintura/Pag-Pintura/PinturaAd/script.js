/* Aparecer a div de Editar
   Pegar o butão e a div com o document
   colocando a div com display none para desaparecer 
   e depois adicionando um eventListener 
   para  para colocar o dislpay block para mostar
   e assim sucessivamente */
var btnEdit = document.getElementById("btn-edit");
var menuEdit = document.getElementById("Editar");
menuEdit.style.display = "none";

function AparecerE(){
    if(menuEdit.style.display === "none") {
        menuEdit.style.display = "block";
    } else {
        menuEdit.style.display = "none";
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
var NomePintura = document.querySelector("#NNPint");
var descPintura = document.querySelector("#DNPint");

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