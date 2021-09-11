<?php
    header("content-type: text/html;charset=utf-8");
    $Servidor = 'localhost';
    $Usuario = 'root';
    $Senha = '';
    $Nome = 'tcc_mpx';

    $conexao = mysqli_connect($Servidor,$Usuario,$Senha,$Nome);

    /* if($conexao->connect_error){
        echo "<p class='TextE' style='color: red;'>Não conectado</p>";
    }
    else{
        echo "<p class='TextE' style='color: green;'>Conectado ao banco de dados: </p><p class='TextE' style='color: green;'>$Nome</p>";
    }       */

?>