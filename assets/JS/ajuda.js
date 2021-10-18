/* Pegar a imagem que o usuario pegou */
var btn_select = document.getElementById("SelectIMG");
var Pintura = document.getElementById("IMGpublic");
var divIMG = document.getElementById("divIMG");
console.log('eu existo no JS');
btn_select.addEventListener('change', function() {
    
    if(btn_select.files.length < 0){
        return;
    }
    let readerPinturaSelect = new FileReader();
    
    readerPinturaSelect.onload = () => {
        Pintura.src = readerPinturaSelect.result;
        var frase = document.createElement('p');
        divIMG.appendChild(frase);
        frase.style.color = 'green';
        frase.id = "T2";
        frase.innerHTML = 'Print Adcionada!';
    }

    readerPinturaSelect.readAsDataURL(btn_select.files[0]);
});