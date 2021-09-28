/* Evento de Adicionar */
btn_publicar.addEventListener('click', function(){

    if(inputP_autor.value == "" && inputP_Nome_Pintura.value == "" && input_Desc_Pintura.value == ""){
        alert("Algum campo está vazio!");
    }
    else{
        MenuPublicar.style.display = 'none';
        var divP_Pint_Completa = document.createElement('div');
        var divP_Fundo_Pint = document.createElement('php');
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
        var divP_Menu_Editar = document.createElement('form');
        var h2P_TextoMenu = document.createElement('h2');
        var InputP_btnSalvar = document.createElement('input');
        var InputP_Nome_Pintura = document.createElement('input');
        var textareaP_Desc_Pintura = document.createElement('textarea');
        var divP_BTN_IN = document.createElement('div'); 
        var div_espaço = document.createElement('div');
        /*  var InputP_Fileimg = document.createElement('input');
        var labelP_btnFile = document.createElement('label'); */
    
        ContMaster.appendChild(divP_Pint_Completa);
        divP_Pint_Completa.className = "Pint_Completa";
        divP_Pint_Completa.appendChild(divP_Fundo_Pint);
        divP_Fundo_Pint.className = "Fundo-Pint";
        divP_Fundo_Pint.appendChild(imgP_Pintura);
        imgP_Pintura.id = "Pintura";
        imgP_Pintura.className = "Pintura";
        imgP_Pintura.src = IMGpublic.src=".$pasta.$arquivo.";    
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
        divP_Menu_Editar.action="./Pinturas_AP.php";
        divP_Menu_Editar.method='POST';
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
        InputP_Nome_Pintura.name="arquivoX";
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
        ContMaster.appendChild(div_espaço);
        div_espaço.className="espaço";
    /*     divP_BTN_IN.id = "BTN-IN";    
        divP_BTN_IN.appendChild(InputP_Fileimg);
        InputP_Fileimg.type="file";
        InputP_Fileimg.className="form-control-file";
        InputP_Fileimg.name="foto";
        InputP_Fileimg.id="TrocarIMG";
        InputP_Fileimg.accept="image/*";
        divP_BTN_IN.appendChild(labelP_btnFile);
        labelP_btnFile.htmlFor ="TrocarIMG";
        labelP_btnFile.className="btn-ST";
        labelP_btnFile.innerHTML = "Trocar Imagem"; */
        
    
        /* Menu para editar */
        
        /* Aparecer o menu de editar
        /* Função dos 3 pontinhos */
        InputP_Nome_Pintura.value = h1P_Nome_Pint.innerHTML;
        textareaP_Desc_Pintura.value = P_Desc_Pint.innerHTML;
        divP_menubtns.style.display = "none";
        iP_Icon_Pontinhos.addEventListener('click', function(){
            if(divP_menubtns.style.display == "none"){
                divP_menubtns.style.display = "block";
            }else{
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
                div_espaço.parentNode.removeChild(div_espaço);
            }    
        });
        /* Selecionar uma nova Pintura */
        /* InputP_Fileimg.addEventListener('change', function() {
    
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
        }); */
    }
});