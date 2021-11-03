<?php
session_start();

if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)){
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
}
else{    
    $usuario_logado = $_SESSION['nome-user'];
    if(isset($usuario_logado)){
    header('Location: ./Inicio');
    }
}

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/styles/Login.css">
    <link rel="stylesheet" href="../assets/styles/Geral.css">    
    <title>Login | Magic Paintings</title>
</head>
<body>
    <section id="container">
        <form id="form" class="card" action="../assets/PHP/Conexao_Login.php" method="POST">            
            <div class="card-group">
                <input class="Inputs" type="text" name="id-user" style='display: none;'>
                <input class="Inputs" type="text" name="nome-user" id="email" placeholder="Nome" required>
                <div class="menu_input">
                    <i class="far fa-eye Isenha"></i>
                    <input class="Inputs" type="password" name="senha" id="senha" placeholder="Senha" required>
                </div>
                <input id="entrar" type="submit" name="submit" value="Entrar" />
                <p>Não possui um cadastro? <a href="./Cadastro">cadastre-se</a></p>                    
            </div> 
            <?php
            if(isset($_SESSION['msg_update'])){
                echo $_SESSION['msg_update'];
                unset($_SESSION['msg_update']);
            }                          
            ?>
            <div class="card-top">
                <i class="fas fa-user User"></i>
                <h2 class="login">Login | MAGIC PAINTINGS</h2>
                <?php
                if(isset($_SESSION['msg_Login'])){
                    echo $_SESSION['msg_Login'];
                    unset($_SESSION['msg_Login']);
                }
                ?>          
                <?php
                if(isset($_SESSION['msg_cad'])){
                    echo $_SESSION['msg_cad'];
                    unset($_SESSION['msg_cad']);
                }
                ?>     
            </div>           
        </form>
    </section>
    <script src="../assets/JS/Ver_Senha.js"></script>
</body>
</html>