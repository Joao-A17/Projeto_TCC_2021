<?php 
// busca o outro usuario pelo btn da tela de inicio consultar
if(isset($_GET['outro_usuario'])){
    include_once('../assets/PHP/Conexao_Banco.php');
    $usuario = $_GET['outro_usuario'];
    $sql = "SELECT * FROM usuarios WHERE nome = '$usuario'";
}

// se o usuario logado for igual a outro usuarios
$usuario_logado = $_SESSION['nome-user'];
if($usuario == $usuario_logado){
    header('Location: ./Perfil_edit');
}

// Encontrar Logado
if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)){
  unset($_SESSION['email']);
  unset($_SESSION['senha']);
  header('Location: ./Login.php');   
}

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/styles/Geral.css">
    <link rel="stylesheet" href="../assets/styles/TP_Users.css">
    <title id="Nome-Site">Perfil | Magic Paintings</title>              
</head>
<body>
    <nav class="Menu">
        <a href="./Pinturas.php" class="Logo">Magic Paintings</a>    
        <a class="btn-menu" onclick="Voltar()"><i class="fas fa-chevron-left IconG"></i>Voltar</a>
    </nav>

    <div class="container">
        <div class="Fundo">       
            <div class="ContAdmin">
                <div id="AdminForm">
                    <?php require '../assets/PHP/FP_outroUsuario.php' ?>
                    <div class="Info-Admin">
                        <h1 id="Nome-Admin-U"><?php echo $usuario ?></h1>
                        <p id="Desc-Admin-U">Descrição do Artista</p>
                    </div>
                </div>
                <h4 class="TextE">Envie uma mensagem para o pintor através:</h4>
                <a class="Redes" href="mailto:joaovictorca2004@gmail.com"><i class="fas fa-envelope E"></i></a>
                <a class="Redes" href="https://wa.me/+554899227431"><i class="fab fa-whatsapp W"></i></a>
                <a class="Redes" href="#"><i class="fab fa-facebook F"></i></a>
                <a class="Redes" href="#"><i class="fab fa-instagram I"></i></a>
                <a class="Redes" href="#"><i class="fab fa-twitter T"></i></a>
            </div>    
                <div id="Cont-Master">
                    <?php require '../assets/PHP/listar_OutroUsuario.php' ?>
                </div>
        </div>                  
        <!-- Scripts -->
    <script src="../assets/JS/Geral.js"></script>
</body>
</html>

