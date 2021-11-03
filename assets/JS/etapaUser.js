/* Pegar a imagem que o usuario pegou */
var btn_select = document.getElementById("inputIMG");
var Pintura = document.getElementById("pintura_etapa");
console.log('eu existo no JS');
btn_select.addEventListener('change', function() {
    
    if(btn_select.files.length < 0){
        return;
    }
    let readerPinturaSelect = new FileReader();
    
    readerPinturaSelect.onload = () => {
        Pintura.src = readerPinturaSelect.result;
    }

    readerPinturaSelect.readAsDataURL(btn_select.files[0]);
});

/* Verificar os campos */

var InputNomeAdmin = document.getElementById('InputNomeAdmin');
var BtnSP = document.getElementById('BtnSP');

BtnSP.addEventListener('click', function(){
    if(btn_select.value.length < 3){
        alert('Adicione uma imagem para o seu perfil!');
    }
});