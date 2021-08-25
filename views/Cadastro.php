<?php

   include_once("../public/PHP/Conexao_Banco.php");

   $Nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
   $Sobrenome = filter_input(INPUT_POST, 'sobrenome', FILTER_SANITIZE_STRING);
   $Email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
   $Telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_NUMBER_INT);

   $Result_Cadastro = "INSERT INTO usuarios (nome, sobrenome, email, telefone, criado) VALUES ('$Nome', '$Sobrenome', '$Email', '$Telefone', NOW())";
   $Resultado_Cadastro = mysqli_query($conexao, $Result_Cadastro);

   
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/styles/Cadastro.css">
    <link rel="stylesheet" href="../public/styles/Geral.css">   
    <link rel="stylesheet" href="../public/styles/Menu.css">
    <title>Cadastro | Magics Paintings</title>
</head>
<body>
    <nav class="MenuH">
        <h1 class="logo">Magics Paintings</h1>
    </nav>
    <div id="DivForm">
        <form name="FormCadastro" id="FormCadastro" antion="Cadastro.php" method="POST"> 
            <div id="Form-Card">
                <div class="Formulario">
                    <input class="Input" type="text" id="nome" name="nome" placeholder="Nome">
                </div>
                <div class="Formulario">
                    <input class="Input" type="text" id="sobrenome" name="sobrenome" placeholder="Sobrenome">
                </div>
                <div class="Formulario">
                    <input class="Input" type="email" id="email" name="email" placeholder="E-mail">
                </div>
                <div class="Formulario">
                    <input class="Input" type="tel" id="telefone" name="telefone" placeholder="Telefone">
                </div>
                <div class="Formulario">
                    <p>Já possui um <a href="./Login.html">cadastro?</a></p>
                    <input type="submit" id="botao" name="botao" value="Cadastrar">
                </div>
            </div>
        </form>
    </div>
</body>
</html>
