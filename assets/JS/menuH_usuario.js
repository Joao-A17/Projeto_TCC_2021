$('#CardUser').on('mouseover', function() {  
    menu_usuario.style.display = 'inline-grid';
});  

$('#CardUser').on('mouseout', function() {
    menu_usuario.style.display = 'none';
});

document.getElementById('Img-UsuarioL').addEventListener('click', function(){
    document.querySelector('.bp').click();
});