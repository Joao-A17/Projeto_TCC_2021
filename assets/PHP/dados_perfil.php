<?php
$usuario_logado = $_SESSION['nome-user'];

$sql_perfil = "SELECT * FROM perfil";
$pegar_tabela = mysqli_query($conexao,$sql_perfil);
if($pegar_tabela){
    while($registro = mysqli_fetch_assoc($pegar_tabela)){
        $Nome_Perfil = $registro['nomep'];
        if($verificar_ul = $Nome_Perfil == $usuario_logado){
        $Desc_Perfil = $registro['descp'];
        $Insta_Perfil = $registro['instagramp'];
        $Face_Perfil = $registro['facebookp'];
        $Twitter_Perfil = $registro['twitterp'];
        $Telefone_Perfil = $registro['telefonep'];
        }
        if(isset($Outro_Usuario)){
            if($verificar_u = $Nome_Perfil == $Outro_Usuario){
                $Desc_Perfil_u = $registro['descp'];
                $Insta_Perfil_u = $registro['instagramp'];
                $Face_Perfil_u = $registro['facebookp'];
                $Twitter_Perfil_u = $registro['twitterp'];
                $Telefone_Perfil_u = $registro['telefonep'];
            }
        }
    }
}
