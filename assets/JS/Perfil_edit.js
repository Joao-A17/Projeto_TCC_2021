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
        inputP_autor.value = NomeAdmin.innerHTML;
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