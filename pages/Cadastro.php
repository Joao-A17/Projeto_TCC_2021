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
        <form name="FormCadastro" id="FormCadastro" antion="./Cadastro.php" method="POST"> 
            <div id="Form-Card">
                <i class="fas fa-user-plus Icon"></i>
                <h2>Cadastro</h2>
                <div id="Registros">
                    <div class="Form-I">
                        <input class="Input" type="text" id="nome" name="nome" placeholder="Nome">
                    </div>
                    <div class="Form-I">
                        <input class="Input" type="text" id="sobrenome" name="sobrenome" placeholder="Sobrenome">
                    </div>
                    <div class="Form-I">
                        <input class="Input" type="email" id="email" name="email" placeholder="E-mail">
                    </div>
                    <div class="Form-I">
                        <input class="Input" type="password" name="password" id="password" placeholder="Senha">
                    </div>
                    <div class="Form-I">
                        <input class="Input" type="tel" id="telefone" name="telefone" placeholder="Telefone">
                    </div>
                    <div class="Form-I">
                        <p>Já tem uma conta? <a href="./Login.php">Entrar</a></p>
                        <input type="submit" id="botao" name="botao" value="Cadastrar">               
                    </div>                    
                </div>
            </div>
        </form>
    </div>    
</body>
</html>
<?php

    include_once("../assets/PHP/Conexao_Banco.php");
    $Nome = filter_input(INPUT_POST, 'nome');
    $Sobrenome = filter_input(INPUT_POST, 'sobrenome', FILTER_SANITIZE_STRING);
    $Email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $Senha = filter_input(INPUT_POST, 'password' , FILTER_SANITIZE_STRING);
    $Telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_NUMBER_INT);    
 
    $Result_Cadastro = "INSERT INTO usuarios (nome, sobrenome, email, password, telefone, criado) VALUES ('$Nome', '$Sobrenome', '$Email', '$Senha', '$Telefone', NOW())";
    $Resultado_Cadastro = mysqli_query($conexao, $Result_Cadastro); 
    // header('Location: ./Login.php');

?>