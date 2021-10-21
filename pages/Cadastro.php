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
    <title>Cadastro | Magics Paintings</title>
</head>
<body>
    <div id="divDesign">
        <h2 class="logo">Cadastro | Magics Paintings</h2>
        <div class="fancy-border"></div>
        <div class="fancy-border"></div>
    </div>
    <div id="DivForm">
        <form name="FormCadastro" id="FormCadastro" action="../assets/PHP/Cadastrar.php" method="POST"> 
            <div id="Form-Card">
                <i class="fas fa-user-plus Icon"></i>
                <h2>Cadastro</h2>
                <?php
                if(isset($_SESSION['msg_cad'])){
                    echo $_SESSION['msg_cad'];
                    unset($_SESSION['msg_cad']);
                }
                ?>
                <div id="Registros">
                    <div class="Form-I">
                        <input class="Input" minlength = "3" maxlength = "20" type="text" id="nome" name="nome" placeholder="Nome" pattern="[a-zA-Z0-9]+" required>
                    </div>
                    <div class="Form-I">
                        <input class="Input" minlength = "3" maxlength = "20" type="text" id="sobrenome" name="sobrenome" placeholder="Sobrenome" required>
                    </div>
                    <div class="Form-I">
                        <input class="Input" minlength = "3" maxlength = "100" type="email" id="email" name="email" placeholder="E-mail" required>
                    </div>
                    <div class="Form-I">
                        <i class="far fa-eye Isenha"></i>
                        <input class="Input" minlength = "3" type="password" name="password" id="senha" placeholder="Senha " required>
                    </div>
                    <div class="Form-I">
                        <input class="Input" maxlength="20" type="number" id="telefone" name="telefone" placeholder="Telefone" required>
                    </div>
                    <div class="Form-I">
                        <p>Já tem uma conta? <a href="./Login.php">Entrar</a></p>
                        <input type="submit" id="botao" name="submit" value="Cadastrar">               
                    </div>                    
                </div>
            </div>
        </form>
    </div>   
    <script src="../assets/JS/Ver_Senha.js"></script>
</body>
</html>