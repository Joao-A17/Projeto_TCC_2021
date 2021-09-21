<?php

session_start();

$Servidor = 'localhost';
$Usuario = 'root';
$Senha = '';
$Nome = 'tcc_mpx';

$conexao = mysqli_connect($Servidor,$Usuario,$Senha,$Nome);

/* if(!$conexao){
    echo "<p class='TextE' style='color: red;'>Não conectado</p>" . mysqli_connect_error();
}
else{
    echo "<p class='TextE' style='color: green;'>Conectado ao banco de dados: </p><p class='TextE' style='color: green;'>$Nome</p>";
} */

?>