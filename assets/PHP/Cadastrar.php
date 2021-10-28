<?php
session_start();
if(isset($_POST['submit'])){
    include_once("./Conexao_Banco.php");
    $Nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
    $Sobrenome = filter_input(INPUT_POST, 'sobrenome', FILTER_SANITIZE_STRING);
    $Email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $Telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_NUMBER_INT); 
    $Senha = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING); 

    echo $Nome, '<br>';
    echo $Sobrenome, '<br>';
    echo $Email, '<br>';
    echo $Telefone, '<br>';
    echo $Senha, '<br>';
 
    $Result_Cadastro = "INSERT INTO usuarios (nome, sobrenome, email, password, telefone, criado) VALUES ('$Nome', '$Sobrenome', '$Email', '$Senha', '$Telefone', NOW())";
    $sqlL = mysqli_query($conexao, $Result_Cadastro);
    if($sqlL){         
        $_SESSION['msg_cad'] = "        
        <div id='msg_true'>
            <h1> Usuário cadastrado faça login para entrar <i class='fas fa-smile-beam icon'></i></h1>
        </div>         
        ";         
        header("Location: ../../pages/Login.php");
    }else{
        $_SESSION['msg_cad'] = "<p style='color:red; font-size:20px;'>Usuário não foi Cadastrado</p>";        
        header("Location: ../../pages/Cadastro.php");
    }
        

}
?>