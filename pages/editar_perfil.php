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
    <div id="nav_menu">
        <h2 id="TituloMenu">MAGIC PAINTINGS</h2>
        <a class="menu-link" href="../index.html"><i class="fas fa-home"></i>   Inicio</a>  
    </div> 
    <div id="divIMG">
        <?php 
        $pasta = '../assets/IMAGES/Foto_Perfil/'.$usuario_logado.'/';    
        echo "<img src='".$pasta.$FotoP."' id='pintura_etapa'>"; ?> 
        <input type="submit" value="Salvar imagem">
        <input type="file" class="form-control-file" name="arquivo" id="inputIMG" accept="image/*">  
        <label for="inputIMG" id="Select_img_public">Tracar Imagem</label>        
    </div> 
    <form id="MenuModal_EditPerfil" action="../assets/PHP/Alterar_Perfil.php" method="POST" enctype="multipart/form-data">
         
        <div id="dividir">              
            <input type="submit" name="btn_salvar" value="Salvar" id="btn_salvar">                                             
            <div id="INPUTS">                     
                <div id="Nome_Desc">
                    <div id="div_1">
                        <div class="menu-box">
                            <label for="nome_usuario" class="label">Nome do usuario</label>
                            <?php echo "<input type='text' name='nome_usuario' id='nome_usuario' class='Inputs' value='".$usuario_logado."' placeholder='Digite Aqui...' required>"; ?>
                        </div>
                        <div class="menu-box">
                            <label for="sobrenome" class="label">Sobrenome</label>
                            <?php echo "<input type='text' name='sobrenome' id='sobrenome' class='Inputs' value='".$Sobrenome."' placeholder='Digite Aqui...' required>"; ?>
                        </div>
                    </div>
                    <div id="div_2">
                        <div class="menu-box">
                            <label for="Email" class="label">Email</label>
                            <?php echo "<input type='email' name='Email' id='Email' class='Inputs' value='".$Email."' placeholder='Digite Aqui...' required>"; ?>
                        </div>
                        <div class="menu-box">
                            <label for="Senha" class="label">Senha</label>
                            <?php echo "<input type='password' name='Senha' id='Senha' class='Inputs' value='".$Senha."' placeholder='Digite Aqui...' required>"; ?>
                        </div>
                    </div>
                    <div class="menu-box" style="margin: 100px;">
                        <label for="desc_usuario" class="label">Nova descrição do perfil</label>
                        <?php echo "<input type='text' name='desc_usuario' id='desc_usuario' value='".$Desc_Perfil."' placeholder='Digite Aqui...' required>"; ?>
                    </div>
                    <div id="links">
                        <div id="e">
                            <div class="menu-box">
                                <label for="inst_usuario" class="label">Link do instagram</label>
                                <?php echo "<input type='text' name='inst_usuario' id='inst_usuario' class='Inputs' value='".$Insta_Perfil."' placeholder='Digite Aqui...' required>"; ?>
                            </div>
                            <div class="menu-box">
                                <label for="face_usuario" class="label">Link do facebook</label>
                                <?php echo "<input type='text' name='face_usuario' id='face_usuario' class='Inputs' value='".$Face_Perfil."' placeholder='Digite Aqui...' required>"; ?>
                            </div>
                        </div>
                        <div id="d">
                            <div class="menu-box">
                                <label for="twit_usuario" class="label">Link do twitter</label>
                                <?php echo "<input type='text' name='twit_usuario' id='twit_usuario' class='Inputs' value='".$Twitter_Perfil."' placeholder='Digite Aqui...' required>"; ?>
                            </div>
                            <div class="menu-box">
                                <label for="tele_usuario" class="label">Numero do telefone</label>
                                <?php echo "<input type='tel' name='tele_usuario' id='tele_usuario' class='Inputs' value='".$Telefone_Perfil."' placeholder='Digite Aqui...' required>"; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
        </div>                                                                                        
    </form>
    <script src="../assets/JS/etapaUser.js"></script>
</body>
</html>