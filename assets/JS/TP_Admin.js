/* Função de Adicionar a div PintCompletaa */
var ContMaster = document.getElementById("Cont-Master");
var PintDiv = document.querySelector(".Pint-Completa");

function Adicionar(){   /* 
    var Clone = PintDiv.cloneNode(true);
    FundoPint.appendChild(Clone); */
    var NovaPintCompleta = document.createElement('div');
    var NovaFundoPintDiv = document.createElement('div');
    var NovaPintura = document.createElement('img');
    var NovoFundoDecs = document.createElement('div');
    var NovoNomePint = document.createElement('h1');
    var NovaDescPint = document.createElement('p');
    var NovoBtnExcluir = document.createElement('buttom');
    var NovoBtnIcon = document.createElement('i');
    var NovoMenuEdit = document.createElement('div');
    var NovotxtAlter = document.createElement('h2');
    var NovoInputNN = document.createElement('input');
    var NovoInputDN = document.createElement('input');
    var NovoInputFoto = document.createElement('input');
    var NovoLabelSelect = document.createElement('label');
    ContMaster.appendChild(NovaPintCompleta);
    NovaPintCompleta.appendChild(NovaFundoPintDiv);
    NovaFundoPintDiv.appendChild(NovaPintura);
    NovaPintCompleta.appendChild(NovoFundoDecs);
    NovoFundoDecs.appendChild(NovoNomePint);    
    NovoFundoDecs.appendChild(NovaDescPint);    
    NovoFundoDecs.appendChild(NovoBtnExcluir);
    NovoBtnExcluir.appendChild(NovoBtnIcon);
    NovaPintCompleta.className += "Pint-Completa";
    NovaFundoPintDiv.className += "Fundo-Pint";
    NovaPintura.src = "../assets/IMAGES/Edits/Ban.png";
    NovaPintura.className += "Pintura0";
    NovoFundoDecs.className += "Fundo-desc";
    NovoNomePint.id = "Nome-Pint";
    NovaDescPint.id = "Desc-Pint";
    NovoBtnExcluir.className += "btn-delete";
    NovoBtnIcon.className += "fas fa-trash-alt IconG";
}
/* Aparecer a div de Editar
   Pegar o butão e a div com o document
   colocando a div com display none para desaparecer 
   e depois adicionando um eventListener 
   para  para colocar o dislpay block para mostar
   e assim sucessivamente */
var btnEdit = document.getElementById("btn-edit");
var menuEdit = document.querySelector(".Editar");
var btnSalvar = document.querySelector(".btn-SP");
var btnExcluir = document.querySelector(".btn-delete");
menuEdit.style.display = "none";
btnSalvar.style.display = "none";
btnExcluir.style.display = "none";
function AparecerE(){
    if(menuEdit.style.display === "none", btnSalvar.style.display === "none",btnExcluir.style.display === "none"){
        menuEdit.style.display = "block";
        btnSalvar.style.display = "block";
        btnExcluir.style.display = "block";
    } else {
        menuEdit.style.display = "none";
        btnSalvar.style.display = "none";
        btnExcluir.style.display = "none";
    }
}
/* Editar Pintura
 1º criando variavel para o valor dos campos
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
        menuEdit.style.display = "none";
    }
    else if(descPintura.value.length <= 1){
        alert("Por favor, preencha a descrição da pintura com mais letras");
        menuEdit.style.display = "none";
    }
    else{
    NovoNomeP = NomePintura.value;
    document.getElementById("Nome-Pint").innerHTML = NovoNomeP;
    NovaDesc = descPintura.value;
    document.getElementById("Desc-Pint").innerHTML = NovaDesc;
    menuEdit.style.display = "none";
    }
}
/* Selecionar uma pintura nova */
/* Pegar os document da pintura nova e antiga,
   criar um EventListener change(Alterar)      */

NovaPintura0 = document.getElementById("SelectIMG0");
AntigaPintura0 = document.querySelector(".Pintura0");
   
NovaPintura0.addEventListener('change', function(trocar0) {
    showThumbnail(this.files); /* mostrar miniatura desse mesmo arquivo */
});
   
function showThumbnail(files) {
    if (files && files[0]) {
    var procurar0 = new FileReader();
   
    procurar0.onload = function(trocar0) {
        AntigaPintura0.src = trocar0.target.result;
    }
   
    procurar0.readAsDataURL(files[0]);
    }
} 
/* Botão de excluir */
function Excluir(){
    if (PintDiv.parentNode) {
    PintDiv.parentNode.removeChild(PintDiv);
    }
}
