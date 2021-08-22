<?php

    $dbHost = 'localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'tcc_mpx';

    $conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

    if($conexao->connect_errno){
        echo "Erro";
    }
    else{
        echo "Conexão efetuada com sucesso";
    }     

    if(isseT($_POST['submit'])){

        /* 
        print_r($_POST['email']);
        print_r($_POST['password']); */

        include_once('LoginA.php');
        
        $email = $_POST['email'];
        $senha = $_POST['password'];

        $resultadoLoginA = mysqli_query($conexao, "INSERT INTO LoginAdmin(email,senha) 
        VALUES ('$email','$senha')");
    }

?>