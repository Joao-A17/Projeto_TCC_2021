/* Aparecer a div de Editar
   Pegar o butão e a div com o document
   colocando a div com display none para desaparecer 
   e depois adicionando um eventListener 
   para  para colocar o dislpay block para mostar
   e assim sucessivamente */
var ContMaster = document.getElementById("Cont-Master");
var PintDiv = document.querySelector(".Pint-Completa");
var BtnAdd = document.getElementById("btn-add");
var btnExcluir = document.querySelector(".btn-delete");
var menuEdit = document.querySelector(".Editar");
var btnSalvar = document.querySelector(".btn-SP");
var BtnEditarPerfil = document.querySelector(".edp");
var MenuEditPerfil = document.getElementById("Menu-EditPerfil");
var BtnAparecer = document.getElementById("Aparecer");
var BtnSPerfil = document.getElementById("BtnSP");
var NomeAdmin = document.getElementById("Nome-Admin");
var DescAdmin = document.getElementById("Desc-Admin");
var InputNomeAdmin = document.getElementById("InputNomeAdmin");
var InputDescAdmin = document.getElementById("InputDescAdmin");
menuEdit.style.display = "none";
btnSalvar.style.display = "none";
btnExcluir.style.display = "none";
MenuEditPerfil.style.display = "none";
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
var NomePintura = document.querySelector(".NNPint");
var descPintura = document.querySelector(".DNPint");

function NPintura(){
    if(NomePintura.value.length <= 1){
        menuEdit.style.display = "none";
    }
    else if(descPintura.value.length <= 1){
        menuEdit.style.display = "none";
    }
    else{
    NovoNomeP = NomePintura.value;
    document.querySelector(".Nome-Pint").innerHTML = NovoNomeP;
    NovaDesc = descPintura.value;
    document.querySelector(".Desc-Pint").innerHTML = NovaDesc;
    menuEdit.style.display = "none";
    }
}
/* Evento de Adicionar */
BtnAdd.addEventListener('click', function(){
    var aPintCompleta = document.createElement('div');
    var aFundoPintDiv = document.createElement('div');
    var aPintura = document.createElement('img');
    var aFundoDecs = document.createElement('div');
    var aNomePint = document.createElement('h1');
    var aDescPint = document.createElement('p');
    var aBtnExcluir = document.createElement('buttom');
    var aBtnIcon = document.createElement('i');
    var aMenuEdit = document.createElement('div');
    var atxtAlter = document.createElement('h2');
    var aInputNN = document.createElement('input');
    var aInputDN = document.createElement('input');
    var aInputFoto = document.createElement('input');
    var aLabelSelect = document.createElement('label');
    var Espaço1 = document.createElement('div');
    ContMaster.appendChild(aPintCompleta);
    aPintCompleta.appendChild(aFundoPintDiv);
    aFundoPintDiv.appendChild(aPintura);
    aPintCompleta.appendChild(aFundoDecs);
    aFundoDecs.appendChild(aNomePint);    
    aFundoDecs.appendChild(aDescPint);    
    aFundoDecs.appendChild(aBtnExcluir);
    aNomePint.innerHTML = "Nome da Pintura";
    aDescPint.innerHTML = "Descrição da Pintura";
    aBtnExcluir.innerHTML = "Excluir";
    aBtnExcluir.appendChild(aBtnIcon);
    aFundoDecs.appendChild(aMenuEdit);
    aMenuEdit.appendChild(atxtAlter);
    atxtAlter.innerHTML = "Novas Alterações";    
    aMenuEdit.appendChild(aInputNN);
    aMenuEdit.appendChild(aInputDN);
    aMenuEdit.appendChild(aInputFoto);
    aMenuEdit.appendChild(aLabelSelect);
    ContMaster.appendChild(Espaço1);
    aPintCompleta.className = "Pint-Completa";
    aFundoPintDiv.className = "Fundo-Pint";
    aPintura.src = "../assets/IMAGES/Edits/Ban.png";
    aPintura.className = "Pintura";
    aFundoDecs.className = "Fundo-desc";
    aNomePint.className = "Nome-Pint";
    aDescPint.className = "Desc-Pint";
    aBtnExcluir.className = "btn-delete";
    aBtnExcluir.style.display = "none";
    aBtnIcon.className = "fas fa-trash-alt IconG";
    aMenuEdit.className = "Editar";
    aMenuEdit.style.display = "none";
    aInputNN.type = "text";
    aInputNN.className = "NNPint";
    aInputNN.maxLength = "50";
    aInputNN.placeholder = "Digite o nome da pintura";
    aInputDN.type = "text";
    aInputDN.className = "DNPint";
    aInputDN.placeholder = "Digite o nome da pintura";
    aInputFoto.type = "file";
    aInputFoto.className = "form-control-file";
    aInputFoto.name = "foto";
    aInputFoto.id = "SelectIMG0";
    aInputFoto.accept = "image/*";
    aLabelSelect.innerHTML ="Selecionar Imagem";
    aLabelSelect.htmlFor = "SelectIMG0";
    aLabelSelect.className = "SelectP";
    Espaço1.className = "espaço";
    /* Botão de excluir */    
    aBtnExcluir.addEventListener('click', function() {                
        if(aPintCompleta.parentNode){                        
            aPintCompleta.parentNode.removeChild(aPintCompleta);
            Espaço1.parentNode.removeChild(Espaço1);
        }    
    });
    /* Alterar Nomes Pint */
    var NovoTitulo = "";
    var NovaDescrição = "";
    var aNomePintura = aNomePint;
    var aDescPintura = aDescPint;
    btnSalvar.addEventListener('click', function() {
        NovoTitulo = aInputNN.value;
        aNomePintura.innerHTML = NovoTitulo;
        NovaDescrição = aInputDN.value;
        aDescPintura.innerHTML = NovaDescrição;
    });
    /* Aparecer o menu de editar */
    BtnAparecer.addEventListener('click', function() {
        if(aMenuEdit.style.display == "none"){
            aMenuEdit.style.display = "block";
            aBtnExcluir.style.display = "inline-flex";
        }
        else{
            aMenuEdit.style.display = "none";
            aBtnExcluir.style.display = "none";
        }
    });

    /* Trocar as images */
    aInputFoto.addEventListener('change', function(e) {
        showThumbnail(this.files); /* mostrar miniatura desse mesmo arquivo */
    });
       
    function showThumbnail(files) {
        if (files && files) {            
            var Procurar = new FileReader();       
            Procurar.onload = function(e) {
            aPintura.src = e.target.result;
        }        
        Procurar.readAsDataURL(files);
        }
    }     

});
/* -----------------FORA---------------------- */

/* Novo Nome do admin
    1º criando variavel para o valor dos campos
    2º chamar a função do click do butão
    3º criando estrutira de se e se não para mensagem de erro
    4º por ultimo pegando os document dos inputs e transformando 
    eles em uma nova string(Nome ou Descrição nova)
    5º criando um limite de caracteres no nome da pintura 
*/
var NomeNovo = "";
var DecsNova = "";
BtnSPerfil.addEventListener('click', function(){
    NomeNovo = InputNomeAdmin.value;
    NomeAdmin.innerHTML = NomeNovo;
    DecsNova = InputDescAdmin.value;
    DescAdmin.innerHTML = DecsNova;
    InputNomeAdmin.onreset();
})
/* Função de aparecer os menus de editar */
BtnEditarPerfil.addEventListener('click', function(){
   if(MenuEditPerfil.style.display == "none"){
    MenuEditPerfil.style.display = "block";
   } 
   else{
    MenuEditPerfil.style.display = "none";
   }
})
function AparecerE() { 
    if(menuEdit.style.display == "none"){
        menuEdit.style.display = "block";
        btnSalvar.style.display = "block";
        btnExcluir.style.display = "block";
    } else {
        menuEdit.style.display = "none";
        btnSalvar.style.display = "none";
        btnExcluir.style.display = "none";
    }
}
/* Selecionar uma pintura nova */
/* Pegar os document da pintura nova e antiga,
   criar um EventListener change(Alterar)      */

NovaPintura0 = document.getElementById("SelectIMG0");
aPintura = document.querySelector(".Pintura");
   
NovaPintura0.addEventListener('change', function(e) {
    showThumbnail(this.files); /* mostrar miniatura desse mesmo arquivo */
});
   
function showThumbnail(files) {
    if (files && files[0]) {
    var procurar0 = new FileReader();
   
    procurar0.onload = function(e) {
        aPintura.src = e.target.result;
    }
   
    procurar0.readAsDataURL(files[0]);
    }
} 
/* Botão de excluir */
btnExcluir.addEventListener('click', function() {        
    if (PintDiv.parentNode) {
        PintDiv.parentNode.removeChild(PintDiv);        
    }    
});