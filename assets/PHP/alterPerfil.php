<?php


if(isset($_POST['salvarP'])){

    include_once('./Conexao_Banco.php');

    $usuario_logado = $_SESSION['nome-user'];
    $Nome_Perfil = filter_input(INPUT_POST, 'Nome-Perfil');
    $Desc_Perfil = filter_input(INPUT_POST, 'Desc-Perfil');    
    $Foto_Perfil = strtolower(pathinfo($_FILES['Foto_perfil']['name'], PATHINFO_EXTENSION)); 
    $Nova_Foto_Perfil = $Nome_Perfil.'.'.$Foto_Perfil;
    $instagram_Perfil = filter_input(INPUT_POST, 'instagram');
    $facebook_Perfil = filter_input(INPUT_POST, 'facebook');
    $twitter_Perfil = filter_input(INPUT_POST, 'twitter');
    $telefone_Perfil = filter_input(INPUT_POST, 'telefone');

    /* $tebela_usarios = "UPDATE usuarios SET (nome, telefone) VALUES ('$Nome_Perfil', '$telefone__Perfil')"; */

    $novo_perfil = "UPDATE perfil SET nomep='$Nome_Perfil', descp='$Desc_Perfil', fotop='$Nova_Foto_Perfil', instagramp='$instagram_Perfil' facebookp='$facebook_Perfil', twitterp='$twitter_Perfil', telefonep='$telefone_Perfil', WHERE nome='$usuario_logado'";
    if(mysqli_affected_rows($conexao)){
        $_SESSION['msg'] = "<p style='color:green;'>Usuário editado com sucesso</p>";
        header("Location: ../../pages/Meu_Perfil.php");
    }else{
        $_SESSION['msg'] = "<p style='color:red;'>Usuário não foi editado com sucesso</p>";
        header("Location: ../../pages/Meu_Perfil.php");
    }

    }

else{
    echo "<h1 styles='color: red; font-size: 40px;'>Putz não foi alterado</h1>";
}

?>