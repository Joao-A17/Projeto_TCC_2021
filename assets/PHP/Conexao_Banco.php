<?php

session_start();

$Servidor = 'localhost';
$Usuario = 'root';
$Senha = '';
$Nome_Banco = 'tcc_mpx';

$conexao = mysqli_connect($Servidor,$Usuario,$Senha,$Nome_Banco);


/* Conexão orientada a objeto com pdo 

$pdo = new PDO("mysql:dbname=".$Nome."; host=".$Servidor, $Usuario, $Senha);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); Padrão de conexão di banco de dados PDO 

/*  $sql = $pdo->query("SELECT * FROM usuarios");
$sql->execute();
echo $sql->rowCount(); rowCount serve para contar quantos registros tem */



/* if(!$conexao){
    echo "<p class='TextE' style='color: red;'>Não conectado</p>" . mysqli_connect_error();
}
else{
    echo "<p class='TextE' style='color: green;'>Conectado ao banco de dados: </p><p class='TextE' style='color: green;'>$Nome</p>";
} */

?>