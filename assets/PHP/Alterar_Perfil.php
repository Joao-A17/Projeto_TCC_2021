<?php
include_once('./Conexao_Banco.php'); 
require './dados_perfil.php';

if(isset($_POST['btn_salvar'])){
    $usuario_logado = $_SESSION['nome-user'];   
    $Nome = filter_input(INPUT_POST, 'nome_usuario', FILTER_SANITIZE_STRING);
    $Sobrenome = filter_input(INPUT_POST, 'sobrenome', FILTER_SANITIZE_STRING);
    $Email = filter_input(INPUT_POST, 'Email', FILTER_SANITIZE_STRING);
    $Senha = filter_input(INPUT_POST, 'Senha', FILTER_SANITIZE_STRING);
    $Desc = filter_input(INPUT_POST, 'desc_usuario', FILTER_SANITIZE_STRING);
    $Insta = filter_input(INPUT_POST, 'inst_usuario', FILTER_SANITIZE_STRING);
    $Face = filter_input(INPUT_POST, 'face_usuario', FILTER_SANITIZE_STRING);
    $Twit = filter_input(INPUT_POST, 'twit_usuario', FILTER_SANITIZE_STRING);
    $Whats = filter_input(INPUT_POST, 'tele_usuario', FILTER_SANITIZE_STRING);
    
    echo "Usuario Logado: ", $usuario_logado, "<br>";
    echo "Nome: ", $Nome, "<br>";
    echo "Sobrenome: ", $Sobrenome, "<br>";
    echo "Email: ", $Email, "<br>";
    echo "Senha: ", $Senha, "<br>";
    echo "Insta: ", $Insta, "<br>";
    echo "Face: ", $Face, "<br>";
    echo "Twit: ", $Twit, "<br>";
    echo "Whats: ", $Whats, "<br>";

    $UP_perfil = "UPDATE perfil SET nomep='$Nome' WHERE id=$Id_perfil";
    if($UP_perfil){
        echo "<h1 style='color: green;'>Certo</h1>";
    }else{
        echo "<h1 style='color: red;'>Errado</h1>";
    }

}else{
    echo "arquivo não encontrado <a href='./loginOFF.php'>Sair</a>";
}


?>