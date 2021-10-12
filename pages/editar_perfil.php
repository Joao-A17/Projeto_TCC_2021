<?php
require '../assets/PHP/Conexao_Banco.php';
require '../assets/PHP/dados_perfil.php';
$usuario_logado = $_SESSION['nome-user'];


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/styles/Geral.css">
    <link rel="stylesheet" href="../assets/styles/editar_usuario.css">
    <title><?php echo $usuario_logado ?></title>
</head>
<body>
    <form id="MenuModal_EditPerfil" action="../assets/PHP/alterPerfil.php" method="POST" enctype="multipart/form-data">
        <div id="nav_menu">
            <h2 id="TituloMenu">Menu Alterações</h2>
        </div>                           
        <div id="divIMG">
            <img src="" id="IMGpublic">          
        </div>          
        <input type="file" class="form-control-file" name="arquivo" id="SelectIMG" accept="image/*">  
        <label for="SelectIMG" id="Select_img_public">Selecionar Imagem</label>     
        <div id="INPUTS">
            <div class="meu-box">
                <input type='text' name='nome_usuario' id='nome_usuario' class="Input" placeholder='Nome do Usuario' required>
                <label for="nome_usuario" class="label">Nome do Usuario</label>
            </div>
            <div class="meu-box">
                <input type='text' name='nome_usuario' id='nome_usuario' class="Input" placeholder='Descrição do Usuario' required>
                <label for="nome_usuario" class="label">Descrição do Usuario</label>
            </div>
            <div class="meu-box">
                <input type='text' name='nome_usuario' id='nome_usuario' class="Input" placeholder='Instagram do Usuario' required>
                <label for="nome_usuario" class="label">Instagram do Usuario</label>
            </div>
            <div class="meu-box">
                <input type='text' name='nome_usuario' id='nome_usuario' class="Input" placeholder='Nome do Usuario' required>
                <label for="nome_usuario" class="label">FaceBook do Usuario</label>
            </div>
            <div class="meu-box">
                <input type='text' name='nome_usuario' id='nome_usuario' class="Input" placeholder='Nome do Usuario' required>
                <label for="nome_usuario" class="label">Descrição do Usuario</label>
            </div>
            <div class="meu-box">
                <input type='text' name='nome_usuario' id='nome_usuario' class="Input" placeholder='Nome do Usuario' required>
                <label for="nome_usuario" class="label">Instagram do Usuario</label>
            </div>
            <div class="meu-box">
                <input type='text' name='nome_usuario' id='nome_usuario' class="Input" placeholder='Nome do Usuario' required>
                <label for="nome_usuario" class="label">Instagram do Usuario</label>
            </div>
        </div>
                                                                                        
    </form>
    <script src="../assets/JS/etapaUser.js"></script>
</body>
</html>