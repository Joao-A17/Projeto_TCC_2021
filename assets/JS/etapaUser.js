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
var I_ins = document.getElementById('I_ins');
var I_fac = document.getElementById('I_fac');
var I_twi = document.getElementById('I_twi');
var I_tel = document.getElementById('I_tel');
var InputNomeAdmin = document.getElementById('InputNomeAdmin');
var BtnSP = document.getElementById('BtnSP');
 
BtnSP.addEventListener('click', function(){
    if(I_ins.value.length < 3, I_fac.value.length < 3, I_twi.value.length < 3, I_tel.value.length < 3, InputNomeAdmin.value.length < 3){
        alert('Algum campo se encontra vazio!');
    }
});