<?php 
session_start();

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/styles/Geral.css">   
    <link rel="stylesheet" href="../assets/styles/Menu.css">
    <link rel="stylesheet" href="../assets/styles/Cadastro.css">
    <title>Cadastro | Magic Paintings</title>
</head>
<body>
    <form action="../assets/PHP/Cadastrar.php" method="POST" id="Form-Card"> 
        <i class="fas fa-user-plus Icon"></i>
        <h2>Cadastro | Magic Paintings</h2>
        <?php
        if(isset($_SESSION['msg_cad'])){
            echo $_SESSION['msg_cad'];
            unset($_SESSION['msg_cad']);
        }
        ?>
        <div id="Registros">
            <div id="e">
                <div class="menu_input">
                    <label for="nome" class="label">Nome</label>
                    <input class="Input" minlength = "3" maxlength = "20" type="text" id="nome" name="nome" placeholder="Digite Aqui..." pattern="[a-zA-Z0-9]+" required>
                </div>
                <div class="menu_input">
                    <label for="sobrenome" class="label">Sobrenome</label>
                    <input class="Input" minlength = "3" maxlength = "20" type="text" id="sobrenome" name="sobrenome" placeholder="Digite Aqui..." required>
                </div>
                <div class="menu_input">
                    <label for="email" class="label">Email</label>
                    <input class="Input" minlength = "3" maxlength = "100" type="email" id="email" name="email" placeholder="Digite Aqui..." required>
                </div>
            </div>
            <div id="d">            
                <div class="menu_input">
                    <label for="senha" class="label">Senha</label>
                    <i class="far fa-eye Isenha"></i>
                    <input class="Input" minlength = "3" type="password" name="password" id="senha" placeholder="Digite Aqui... " required>
                </div>
                <div class="menu_input">
                    <label for="telefone" class="label">Telefone</label>
                    <input class="Input" minlength = "10" maxlength="20" type="text" id="telefone" name="telefone" pattern="[0-9]+$" placeholder="Digite Aqui..." required>
                </div>
                <div class="menu_input">
                    <p>Já tem uma conta? <a href="./Login.php">Entrar</a></p>
                    <input type="submit" id="botao" name="submit" value="Cadastrar">               
                </div>  
            </div>                  
        </div>
    </form>
    <script src="../assets/JS/Ver_Senha.js"></script>
</body>
</html>