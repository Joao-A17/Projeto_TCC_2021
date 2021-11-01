<?php 
// busca o outro usuario pelo btn da tela de inicio consultar
if(isset($_GET['outro_usuario'])){
    include_once('../assets/PHP/Conexao_Banco.php');
    $Outro_Usuario = $_GET['outro_usuario'];
    $sql = "SELECT * FROM usuarios WHERE nome = '$Outro_Usuario'";
}

// se o usuario logado for igual a outro usuarios
$usuario_logado = $_SESSION['nome-user'];
if($Outro_Usuario == $usuario_logado){
    header('Location: ./Meu_Perfil.php');
}

// Encontrar Logado
if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)){
  unset($_SESSION['email']);
  unset($_SESSION['senha']);
  header('Location: ./Login.php');   
}

require '../assets/PHP/dados_perfil.php';

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/styles/Geral.css">
    <link rel="stylesheet" href="../assets/styles/Perfil_OU.css">
    <link rel="stylesheet" href="../assets/styles/UsuarioLogado.css">
    <title>Perfil | <?php echo $Outro_Usuario ?></title>              
</head>
<body>
    <nav class="Menu">
        <a href="./Inicio.php" class="Logo">Magic Paintings</a>    
        <a class="btn-menu" onclick="Voltar()"><i class="fas fa-chevron-left IconG"></i>Voltar</a>
    </nav>

    <div id="CardUser">
        <div id="Img_UserL">
        <?php
        // pegar a foto do usuario logado 

        $pasta = '../assets/IMAGES/Foto_Perfil/' . $usuario_logado . '/';

        if (file_exists("$pasta")) {
            $diretorio = dir($pasta);
            while ($FP_Usuario = $diretorio->read()) {
            if ($FP_Usuario != '.' && $FP_Usuario != '..') {                  
            echo "<img src='" . $pasta . $FP_Usuario . "' id='Img-UsuarioL'>";
            }
            }
        }
        ?>
        <h3 id="Nome_User"><?php echo $usuario_logado ?></h3>
        <i class="fas fa-bars btn_menuH"></i>
        </div>
        <div id="menu_usuario">
        <a class="menuU-link" href="./Meu_Perfil.php"><i class="fas fa-user "></i>    Meu perfil</a>
        <a class="menuU-link" href="./editar_perfil.php"><i class="fas fa-user-edit "></i>    Editar perfil</a>
        <a class="menuU-link" href="../assets/PHP/loginOFF.php"><i class="fas fa-power-off "></i>    Sair</a>
        </div>
    </div>

    <div id="container">  
            <div id="AdminForm">                     
                <?php require '../assets/PHP/FP_outroUsuario.php' ?>
                <div id="Info_Admin">
                    <h1 id="Nome_Usuario"><?php echo $Outro_Usuario ?></h1>
                    <p id="Desc_Usuario"><?php echo $Desc_Perfil_u ?></p>
                    <h4 class="TextE">Envie uma mensagem para o pintor através:</h4>
                    <div id="Redes">
                        <?php if($Email_u != 'nenhum'){ echo "<a class='Redes' href='".'mail:'.$Email_u."'><i class='fas fa-envelope E'></i></a>"; } ?>
                        <?php if($Whats_u != 'nenhum'){ echo "<a class='Redes' href='".'https://wa.me/+'.$Whats_u."'><i class='fab fa-whatsapp W'></i></a>"; } ?>
                        <?php if($Insta_Perfil_u != 'nenhum'){ echo "<a class='Redes' href='".'https:/instagram.com/'.$Insta_Perfil_u."'><i class='fab fa-instagram I'></i></a>"; } ?>
                        <?php if($Twitter_Perfil_u != 'nenhum'){ echo "<a class='Redes' href='".'https://twitter.com/'.$Twitter_Perfil_u."'><i class='fab fa-twitter T'></i></a>"; } ?> 
                    </div>
                </div>                
            </div>        
        <div id="Cont-Master">
            <?php require '../assets/PHP/Pinturas_Outros_Usuarios.php' ?>
        </div>   
    </div>                   
    <!--                Scripts                     -->
    <script src="../assets/JS/Geral.js"></script>
    <script src="../assets/JS/menuH_usuario.js"></script>
</body>
</html>

