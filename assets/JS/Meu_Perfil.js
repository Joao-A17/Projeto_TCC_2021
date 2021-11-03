/* Aparecer a div de Editar
   Pegar o butão e a div com o document
   colocando a div com display none para desaparecer 
   e depois adicionando um eventListener 
   para  para colocar o dislpay block para mostar
   e assim sucessivamente */
var ContMaster = document.getElementById("Cont-Master");
var Pint_Completa = document.querySelector(".Pint_Completa");
var btn_publicar = document.getElementById("btn_publicar");
var menuEdit = document.querySelector(".Editar");
var MenuPublicar = document.getElementById("MenuPublicar");
var btn_Adicionar = document.getElementById("btn-Adicionar");
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
var NomeH1 = document.querySelector('.Nome-Pint');
var DescP = document.querySelector('.Desc-Pint');
var InputFile_TrocarIMG = document.getElementById("SelectIMG");
var Pintura_Public = document.getElementById("IMGpublic");

MenuPublicar.style.display = 'none';

/* Trocar Pintura selecionada */

InputFile_TrocarIMG.addEventListener('change', function() {
    
    if(InputFile_TrocarIMG.files.length < 0){
        return;
    }
    let readerPintura = new FileReader();
    
    readerPintura.onload = () => {
        Pintura_Public.src = readerPintura.result;
    }

    readerPintura.readAsDataURL(InputFile_TrocarIMG.files[0]);
});  

/* Evento de Aparecer o Publicar */
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

/* Verificar se os campos de publicar imagem estão vazios */

btn_publicar.addEventListener('click', function() {
    if(InputFile_SelectIMG.value.length < 3){
        alert('Insira uma imagem para publicar!');        
    }
});