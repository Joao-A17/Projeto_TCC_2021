var btn_menuH = document.querySelector('.btn_menuH');
var menu_usuario = document.getElementById('menu_usuario');
menu_usuario.style.display = 'none';

btn_menuH.addEventListener('click', function(){
    if(menu_usuario.style.display == 'none'){        
        menu_usuario.style.display = 'inline-grid';
    }
    else{
        menu_usuario.style.display = 'none'
    }
});