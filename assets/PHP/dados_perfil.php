<?php
$usuario_logado = $_SESSION['nome-user'];
// pegar a tabela perfil
$sql_perfil = "SELECT * FROM perfil";
$pegar_tabela = mysqli_query($conexao,$sql_perfil);
if($pegar_tabela){
    while($registro = mysqli_fetch_assoc($pegar_tabela)){
        $Nome_Perfil = $registro['nomep'];
        if($Nome_Perfil == $usuario_logado){
            $Id_perfil = $registro['idperfil'];
            $Desc_Perfil = $registro['descp'];
            $Insta_Perfil = $registro['instagramp'];
            $Twitter_Perfil = $registro['twitterp'];
            $Telefone_Perfil = $registro['telefonep'];
            $FotoP = $registro['fotop'];
        }
        if(isset($Outro_Usuario)){
            if($Nome_Perfil == $Outro_Usuario){
                $Desc_Perfil_u = $registro['descp'];
                $Insta_Perfil_u = $registro['instagramp'];
                $Twitter_Perfil_u = $registro['twitterp'];
                $Telefone_Perfil_u = $registro['telefonep'];
                $FotoP_u = $registro['fotop'];
            }
        }
    }
}
// pegar a tabela usuario
$sql_usuarios = "SELECT * FROM usuarios";
$pegar_usuarios = mysqli_query($conexao, $sql_usuarios);
if($pegar_usuarios){
    while($registro_usuario = mysqli_fetch_assoc($pegar_usuarios)){
        $NPerfil = $registro_usuario['nome'];
        if($NPerfil == $usuario_logado){
            $IdUser = $registro_usuario['id'];
            $nome_completo = $registro_usuario['nome_completo'];
            $Email = $registro_usuario['email'];
            $Senha = $registro_usuario['password'];
            $Whats = $registro_usuario['telefone'];
        }
        if(isset($Outro_Usuario)){
            if($NPerfil == $Outro_Usuario){
                $Email_u = $registro_usuario['email'];
                $Whats_u = $registro_usuario['telefone'];
            }
        }
    }
} 