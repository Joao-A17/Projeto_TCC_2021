<?php


if(isset($_POST['salvarP'])){
    include_once('./Conexao_Banco.php');
    $Nome_Perfil = filter_input(INPUT_POST, 'Nome-Perfil');
    $Desc_Perfil = filter_input(INPUT_POST, 'Desc-Perfil');    
    $Foto_Perfil = strtolower(pathinfo($_FILES['fotop']['name'], PATHINFO_EXTENSION));    
    $Nova_Foto_Perfil = $Nome_Perfil.'.'.$Foto_Perfil;
    $instagram_Perfil = filter_input(INPUT_POST, 'instagram');
    $facebook_Perfil = filter_input(INPUT_POST, 'facebook');
    $twitter_Perfil = filter_input(INPUT_POST, 'twitter');
    $telefone_Perfil = filter_input(INPUT_POST, 'telefone');

    /* $tebela_usarios = "UPDATE usuarios SET (nome, telefone) VALUES ('$Nome_Perfil', '$telefone__Perfil')"; */

    $sql_alter = "INSERT INTO perfil (nomep, descp, fotop, instagramp, facebookp, twitterp, telefonep) VALUES ('$Nome_Perfil', '$Desc_Perfil', '$Nova_Foto_Perfil', '$instagram_Perfil', '$facebook_Perfil', '$twitter_Perfil', '$telefone_Perfil')";
    $IdPerfil_User = mysqli_insert_id($conexao);

    $pasta_perfil['pasta'] = '../IMAGES/Foto_Perfil/'.$IdPerfil_User.'/'; 
    mkdir($pasta_perfil['pasta'], 0777);
    if(move_uploaded_file($_FILES['fotop']['tmp_name'],$pasta_perfil['pasta'].$Nova_Foto_Perfil)){
        header('Location: ../../pages/Perfil_edit.php');
    }
    elseif(mysqli_query($conexao, $sql_alter)){
        header('Location: ../../pages/Perfil_edit.php');
    }else{
        echo "<h1 styles='color: red; font-size: 40px;'>Não foi alterado</h1>";
    }

}

else{
    echo "<h1 styles='color: red; font-size: 40px;'>Putz não foi alterado</h1>";
}

?>