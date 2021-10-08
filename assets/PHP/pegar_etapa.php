
<?php

// Enviar Uma nova publicação

if(isset($_FILES['Foto_perfil'])){
    echo 'arquivo existe', '<br>', "<br>";
    include_once('./Conexao_Banco.php');
    $Nome = $_POST['Nome_perfil'];
    $Desc = $_POST['Desc_perfil'];
    $Foto = $_FILES['Foto_perfil'];
    $instagram = $_POST['instagram_perfil'];
    $facebook = $_POST['facebook_perfil'];
    $twitter = $_POST['twitter_perfil'];
    $telefone = $_POST['telefone_perfil'];
    $Arquivo_Imagem = strtolower(pathinfo($_FILES['Foto_perfil']['name'], PATHINFO_EXTENSION));    
    $Novo_Arquivo_Imagem = $Nome.'.'.$Arquivo_Imagem;
    echo $Nome, "<br>", $Desc, "<br>", $Novo_Arquivo_Imagem, "<br>", $instagram, "<br>", $facebook, "<br>", $twitter, "<br>", $telefone, "<br>";

    $Result_Perfil = "INSERT INTO perfil (nomep, descp, fotop, instagramp, facebookp, twitterp, telefonep) VALUES ('$Nome', '$Desc', '$Novo_Arquivo_Imagem', '$instagram', '$facebook', '$twitter', '$telefone')";
    $sql_perfil = mysqli_query($conexao,$Result_Perfil);    
    
    $usuario_logado = $_SESSION['nome-user'];
    $pasta_arquivo['pasta'] = '../IMAGES/Foto_Perfil/'.$usuario_logado.'/'; 
    mkdir($pasta_arquivo['pasta'], 0777);
    if(move_uploaded_file($_FILES['Foto_perfil']['tmp_name'],$pasta_arquivo['pasta'].$Novo_Arquivo_Imagem)){
        header('Location: ../../pages/Perfil_edit.php');        
    }
}
else{
    echo 'Não existe <a href="../../">Inicio</a>';
}

?>