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
        <div id="dividir">                                    
        <div id="divIMG">
            <?php 
            $pasta = '../assets/IMAGES/Foto_Perfil/'.$usuario_logado.'/';    
            echo "<img src='".$pasta.$FotoP."' class='Foto_Perfil'>"; ?> 
            <input type="file" class="form-control-file" name="arquivo" id="SelectIMG" accept="image/*">  
            <label for="SelectIMG" id="Select_img_public">Tracar Imagem</label>        
        </div>            
        <div id="INPUTS">
            <div id="e">
                <div class="menu-box">
                    <input type='text' name='nome_usuario' id='nome_usuario' class="Inputs" placeholder='Nome do Usuario' required>
                </div>
                <div class="menu-box">
                    <input type='text' name='nome_usuario' id='nome_usuario' class="Inputs" placeholder='Descrição do Usuario' required>
                </div>
                <div class="menu-box">
                    <input type='text' name='nome_usuario' id='nome_usuario' class="Inputs" placeholder='Instagram do Usuario' required>
                </div>
            </div>
            <div id="d">
                <div class="menu-box">
                    <input type='text' name='nome_usuario' id='nome_usuario' class="Inputs" placeholder='Nome do Usuario' required>
                </div>
                <div class="menu-box">
                    <input type='text' name='nome_usuario' id='nome_usuario' class="Inputs" placeholder='Descrição do Usuario' required>
                </div>
                <div class="menu-box">
                    <input type='text' name='nome_usuario' id='nome_usuario' class="Inputs" placeholder='Instagram do Usuario' required>
                </div>
            </div>
        </div> 
        </div>                                                                                        
    </form>
    <script src="../assets/JS/etapaUser.js"></script>
</body>
</html>