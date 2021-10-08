<?php

if(isset($_POST['submit'])){
    include_once("./Conexao_Banco.php");
    $Nome = filter_input(INPUT_POST, 'nome');
    $Sobrenome = filter_input(INPUT_POST, 'sobrenome', FILTER_SANITIZE_STRING);
    $Email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $Telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_NUMBER_INT); 
    $Senha = $_POST['password'];
 
    $Result_Cadastro = "INSERT INTO usuarios (nome, sobrenome, email, password, telefone, criado) VALUES ('$Nome', '$Sobrenome', '$Email', '$Senha', '$Telefone', NOW())";
    $sqlL = mysqli_query($conexao, $Result_Cadastro);
    if($sqlL){
        header('Location: ../../pages/Login.php');
    }else{
        header('Location: ../../pages/Cadastro.php');          
    }
    $IdUser = mysqli_insert_id($conexao);     

}
?>