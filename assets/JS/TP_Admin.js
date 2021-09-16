/* Aparecer a div de Editar
   Pegar o butão e a div com o document
   colocando a div com display none para desaparecer 
   e depois adicionando um eventListener 
   para  para colocar o dislpay block para mostar
   e assim sucessivamente */
var ContMaster = document.getElementById("Cont-Master");
var btn_publicar = document.getElementById("btn-publicar");
var btnExcluir = document.querySelector(".btn-delete");
var menuEdit = document.querySelector(".Editar");
var MenuPublicar = document.getElementById("MenuPublicar");
var btn_Adicionar = document.getElementById("btn-Adicionar");
var AlteraImgPerfil = document.querySelector(".AlteraImg-Perfil");
var BtnEditarPerfil = document.querySelector(".edp");
var MenuEditPerfil = document.getElementById("MenuModal_EditPerfil");
var BtnSPerfil = document.getElementById("BtnSP");
var NomeAdmin = document.getElementById("Nome-Admin");
var DescAdmin = document.getElementById("Desc-Admin");
var InputP = document.querySelectorAll(".InputP");
var InputNomeAdmin = document.getElementById("InputNomeAdmin");
var InputDescAdmin = document.getElementById("InputDescAdmin");
var btn_cancelar = document.getElementById("btn_cancelar");
var inputP_Nome_Pintura = document.getElementById("inputP_Nome_Pintura");
var input_Desc_Pintura = document.getElementById("InputPublicD");
var inputP_autor = document.getElementById("inputP_autor");
var InputFile_SelectIMG = document.getElementById("SelectIMG");
var IMGpublic = document.getElementById("IMGpublic");


/* Função de aparecer os menus de editar   */
AlteraImgPerfil.style.display = "none";
BtnSPerfil.style.display = "none"; 



BtnEditarPerfil.addEventListener('click', function(){
    InputNomeAdmin.value = NomeAdmin.innerHTML;
    InputDescAdmin.value = DescAdmin.innerHTML;

    if(MenuEditPerfil.style.display == "none"){       
       AlteraImgPerfil.style.display = "block";
       MenuEditPerfil.style.display = "block";
       BtnSPerfil.style.display = "block";
    } 
    else{
        MenuEditPerfil.style.display = "none";    
        AlteraImgPerfil.style.display = "none";
        BtnSPerfil.style.display = "none";
    }
});

/* Botão cancelar */
btn_cancelar.addEventListener('click', function(){
    MenuEditPerfil.style.display = 'none';
});

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

    if(InputNomeAdmin.value == ""){  
        alert("Preencha os campos!!");      
        AlteraImgPerfil.style.display = "none";
        BtnSPerfil.style.display = "none"; 
        MenuEditPerfil.style.display = "none";  
        InputDescAdmin.value = ""; 
        InputNomeAdmin.value = "";            
    }
    else if(InputDescAdmin.value == ""){
        alert("Preencha os campos!!");      
        AlteraImgPerfil.style.display = "none";
        BtnSPerfil.style.display = "none"; 
        MenuEditPerfil.style.display = "none";  
        InputDescAdmin.value = ""; 
        InputNomeAdmin.value = "";      
    }
    else{
        NomeNovo = InputNomeAdmin.value;
        NomeAdmin.innerHTML = NomeNovo;
        DecsNova = InputDescAdmin.value;
        DescAdmin.innerHTML = DecsNova;      
        AlteraImgPerfil.style.display = "none";
        BtnSPerfil.style.display = "none"; 
        MenuEditPerfil.style.display = "none"; 
        InputDescAdmin.value = ""; 
        InputNomeAdmin.value = "";      
    }
})

/*  Mudar a imagem de perfil pegando o documento da imagem e do input tipo file,    criar um EventListener change(Alterar)      */
var BtnAlterarIMGPerfil = document.getElementById("imgPerfil");
var ImgPerfil = document.querySelector(".Foto-Admin");
   
BtnAlterarIMGPerfil.addEventListener('change', function(ea) {
    showThumbnail(this.files); /* mostrar miniatura desse mesmo arquivo */
});
   
function showThumbnail(files) {
    if (files && files[0]) {
    var procurar = new FileReader();
   
    procurar.onload = function(ea) {
        ImgPerfil.src = ea.target.result;
    }
   
    procurar.readAsDataURL(files[0]);
    }
} 


MenuEditPerfil.style.display = "none";
MenuPublicar.style.display = 'none';



/* Trcar Pintura selecionada 
var InputFile_TrocarIMG = document.getElementById("TrocarIMG");
var Pintura = document.getElementById("Pintura");

InputFile_TrocarIMG.addEventListener('change', function() {
    
    if(InputFile_TrocarIMG.files.length < 0){
        return;
    }
    let readerPintura = new FileReader();
    
    readerPintura.onload = () => {
        Pintura.src = readerPintura.result;
    }

    readerPintura.readAsDataURL(InputFile_TrocarIMG.files[0]);
}); */



/* Selecionar uma nova Pintura */

InputFile_SelectIMG.addEventListener('change', function() {
    
    if(InputFile_SelectIMG.files.length < 0){
        return;
    }
    let readerPinturaSelect = new FileReader();
    
    readerPinturaSelect.onload = () => {
        IMGpublic.src = readerPinturaSelect.result;
    }

    readerPinturaSelect.readAsDataURL(InputFile_SelectIMG.files[0]);
});


/* Evento de Aparecer o Publicar e Publicar */
btn_Adicionar.addEventListener('click', function(){
    if(MenuPublicar.style.display == 'none'){
        MenuPublicar.style.display = 'block'; 
        inputP_autor.value = "";
        inputP_Nome_Pintura.value = ""; 
        input_Desc_Pintura.value = "";   
        IMGpublic.src = "";   
    }else{
        MenuPublicar.style.display = 'none'; 
        inputP_autor.value = "";
        inputP_Nome_Pintura.value = ""; 
        input_Desc_Pintura.value = "";   
        IMGpublic.src = "";   
    }
});


/* Evento de Adicionar */
btn_publicar.addEventListener('click', function(){
    MenuPublicar.style.display = 'none';
    var divP_Pint_Completa = document.createElement('div');
    var divP_Fundo_Pint = document.createElement('div');
    var imgP_Pintura = document.createElement('img');
    var divP_Fundo_Decs = document.createElement('div');
    var h1P_Nome_Pint = document.createElement('h1');
    var P_Desc_Pint = document.createElement('p');   
    var iP_Icon_Pontinhos = document.createElement('i');
    var divP_menubtns = document.createElement('div');
    var btnP_Editar = document.createElement('buttom');
    var iP_Icon_Editar = document.createElement('i');
    var btnP_Excluir = document.createElement('buttom');
    var iP_Icon_Excluir = document.createElement('i');
    var divP_Menu_Editar = document.createElement('div');
    var h2P_TextoMenu = document.createElement('h2');
    var InputP_btnSalvar = document.createElement('input');
    var InputP_Nome_Pintura = document.createElement('input');
    var textareaP_Desc_Pintura = document.createElement('textarea');
    var divP_BTN_IN = document.createElement('div');
    var InputP_Fileimg = document.createElement('input');
    var labelP_btnFile = document.createElement('label');

    ContMaster.appendChild(divP_Pint_Completa);
    divP_Pint_Completa.className = "Pint_Completa";
    divP_Pint_Completa.appendChild(divP_Fundo_Pint);
    divP_Fundo_Pint.className = "Fundo-Pint";
    divP_Fundo_Pint.appendChild(imgP_Pintura);
    imgP_Pintura.id = "Pintura";
    imgP_Pintura.className = "Pintura";
    imgP_Pintura.src = IMGpublic.src;    
    divP_Pint_Completa.appendChild(divP_Fundo_Decs);
    divP_Fundo_Decs.className = "Fundo-Desc";
    divP_Fundo_Decs.appendChild(h1P_Nome_Pint);
    h1P_Nome_Pint.className = "Nome-Pint";
    h1P_Nome_Pint.innerHTML = inputP_Nome_Pintura.value;
    divP_Fundo_Decs.appendChild(P_Desc_Pint);
    P_Desc_Pint.className = "Desc-Pint";
    P_Desc_Pint.innerHTML = input_Desc_Pintura.value;
    divP_Fundo_Decs.appendChild(iP_Icon_Pontinhos);
    iP_Icon_Pontinhos.id = "Icon_Pontinhos";
    iP_Icon_Pontinhos.className = "fas fa-ellipsis-v";
    divP_Fundo_Decs.appendChild(divP_menubtns);
    divP_menubtns.id = "menubtns";
    divP_menubtns.appendChild(btnP_Editar);
    btnP_Editar.id = "btn_Editar";
    btnP_Editar.className = "btn_span";
    btnP_Editar.innerHTML = "Editar";
    btnP_Editar.appendChild(iP_Icon_Editar);
    iP_Icon_Editar.className = "fas fa-paint-brush IconE";
    divP_menubtns.appendChild(btnP_Excluir);
    btnP_Excluir.id = "btn_Excluir";
    btnP_Excluir.className = "btn_span";
    btnP_Excluir.innerHTML = "Excluir"
    btnP_Excluir.appendChild(iP_Icon_Excluir);
    iP_Icon_Excluir.className = "fas fa-trash-alt IconE";
    divP_Fundo_Decs.appendChild(divP_Menu_Editar);
    divP_Menu_Editar.className = "Menu_Editar";
    divP_Menu_Editar.appendChild(h2P_TextoMenu);
    h2P_TextoMenu.innerHTML = "Novas Alterações"
    divP_Menu_Editar.appendChild(InputP_btnSalvar);
    InputP_btnSalvar.id = "salvar_edicoes";
    InputP_btnSalvar.type = "submit";
    InputP_btnSalvar.name = "SalvarTudo";
    InputP_btnSalvar.value = "Salvar";
    InputP_btnSalvar.className = "btn-SP";
    divP_Menu_Editar.appendChild(InputP_Nome_Pintura);
    InputP_Nome_Pintura.type="text";
    InputP_Nome_Pintura.className="InputAlt";
    InputP_Nome_Pintura.id="NNPint"
    InputP_Nome_Pintura.maxlength="50";
    InputP_Nome_Pintura.placeholder="Digite o nome da pintura";
    divP_Menu_Editar.appendChild(textareaP_Desc_Pintura);
    textareaP_Desc_Pintura.id="InputAltD";
    textareaP_Desc_Pintura.name="descrição-foto";
    textareaP_Desc_Pintura.placeholder="Digite a descrição da pintura";
    textareaP_Desc_Pintura.cols="30";
    textareaP_Desc_Pintura.rows="40";
    divP_Menu_Editar.appendChild(divP_BTN_IN);
    divP_BTN_IN.id = "BTN-IN";    
    divP_BTN_IN.appendChild(InputP_Fileimg);
    InputP_Fileimg.type="file";
    InputP_Fileimg.className="form-control-file";
    InputP_Fileimg.name="foto";
    InputP_Fileimg.id="TrocarIMG";
    InputP_Fileimg.accept="image/*";
    divP_BTN_IN.appendChild(labelP_btnFile);
    labelP_btnFile.htmlFor ="TrocarIMG";
    labelP_btnFile.className="btn-ST";
    labelP_btnFile.innerHTML = "Trocar Imagem";
    

    /* Menu para editar */
    
    /* Aparecer o menu de editar
    /* Função dos 3 pontinhos */
    iP_Icon_Pontinhos.addEventListener('click', function(){

        InputP_Nome_Pintura.value = h1P_Nome_Pint.innerHTML;
        textareaP_Desc_Pintura.value = P_Desc_Pint.innerHTML;

        if(divP_menubtns.style.display == "none"){
            divP_menubtns.style.display = "block";
        }
        else{
            divP_menubtns.style.display = "none";
            divP_Menu_Editar.style.display = "none";
        }
    });

    divP_Menu_Editar.style.display = "none";
    btnP_Editar.addEventListener('click', function(){
        if(divP_Menu_Editar.style.display == "none"){
            divP_Menu_Editar.style.display = "block";
        }else{
            divP_Menu_Editar.style.display = "none";
        }
    });

    /* Trocar os nomes da pintura e descrição */

    InputP_btnSalvar.addEventListener('click', function(){  

        if(InputP_Nome_Pintura.value == ""){
            alert("Preencha os campos!");
            divP_Menu_Editar.style.display = "none";            
        }
        if(textareaP_Desc_Pintura.value == ""){
            alert("Preencha os campos!");
            divP_Menu_Editar.style.display = "none";   
        }
        else{
            h1P_Nome_Pint.innerHTML = InputP_Nome_Pintura.value;
            P_Desc_Pint.innerHTML = textareaP_Desc_Pintura.value;
        }
        

    });
    
    /* Botão de excluir  */
    btnP_Excluir.addEventListener('click', function() {                
        if(divP_Pint_Completa.parentNode){                        
            divP_Pint_Completa.parentNode.removeChild(divP_Pint_Completa);
        }    
    });
    /* Selecionar uma nova Pintura */

    InputP_Fileimg.addEventListener('change', function() {

        if(divP_Pint_Completa.parentNode){                      
            if(InputP_Fileimg.files.length < 0){
                return;
            }
            let LerPinturaSelect = new FileReader();
            
            LerPinturaSelect.onload = () => {
                imgP_Pintura.src = LerPinturaSelect.result;
            }
        
            LerPinturaSelect.readAsDataURL(InputP_Fileimg.files[0]); 
        }      
    });
});
/* -----------------FORA---------------------- */


/* Função dos 3 pontinhos 
var Menu_Editar = document.querySelector(".Menu_Editar");
var Icon_Pontinhos = document.getElementById("Icon_Pontinhos");
var menubtns = document.getElementById("menubtns");
var btn_Editar = document.getElementById("btn_Editar");


Icon_Pontinhos.addEventListener('click', function(){
    if(menubtns.style.display == "none"){
        menubtns.style.display = "inline-flex";
    }
    else{
        menubtns.style.display = "none";
        Menu_Editar.style.display = "none";
    }
});

Menu_Editar.style.display = "none";
btn_Editar.addEventListener('click', function(){
    if(Menu_Editar.style.display == "none"){
        Menu_Editar.style.display = "block";
    }else{
        Menu_Editar.style.display = "none";
    }
});
/* Botão de excluir 
var Pint_Completa = document.querySelector(".Pint_Completa");
var btn_Excluir = document.getElementById("btn_Excluir");
btn_Excluir.addEventListener('click', function() {                
    if(Pint_Completa.parentNode){                        
        Pint_Completa.parentNode.removeChild(Pint_Completa);
    }    
});
*/