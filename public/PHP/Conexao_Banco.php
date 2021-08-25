<?php
    $Servidor = 'localhost';
    $Usuario = 'root';
    $Senha = '';
    $Nome = 'tcc_mpx';

    $conexao = mysqli_connect($Servidor,$Usuario,$Senha,$Nome);

    /* if($conexao->connect_errno){
        echo "Erro";
    }
    else{
        echo "Conectado HAHAHAHA";
    }      */
?>