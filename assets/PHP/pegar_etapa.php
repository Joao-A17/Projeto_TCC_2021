
<?php
// pegar o caminho eo nome para o Alterar_FP.php
if(isset($_FILES['arquivo'])){
    $Nome = filter_input(INPUT_POST, 'Nome_perfil', FILTER_SANITIZE_STRING);
    $Arquivo_Imagem = strtolower(pathinfo($_FILES['Foto_perfil']['name'], PATHINFO_EXTENSION));    
    $Novo_Arquivo_Imagem = $Nome.'.'.$Arquivo_Imagem;
}
// Enviar Uma nova publicação

if(isset($_FILES['Foto_perfil'])){
    include_once('./Conexao_Banco.php');
    $Nome = filter_input(INPUT_POST, 'Nome_perfil', FILTER_SANITIZE_STRING);
    $Desc = filter_input(INPUT_POST, 'Desc_perfil', FILTER_SANITIZE_STRING);
    $Foto = $_FILES['Foto_perfil'];
    $instagram = filter_input(INPUT_POST, 'instagram_perfil', FILTER_SANITIZE_STRING);
    $twitter = filter_input(INPUT_POST, 'twitter_perfil', FILTER_SANITIZE_STRING);
    $telefone = filter_input(INPUT_POST, 'telefone_perfil', FILTER_SANITIZE_STRING);
    $Arquivo_Imagem = strtolower(pathinfo($_FILES['Foto_perfil']['name'], PATHINFO_EXTENSION));    
    $Novo_Arquivo_Imagem = $Nome.'.'.$Arquivo_Imagem;

    $Result_Perfil = "INSERT INTO perfil (nomep, descp, fotop, instagramp, twitterp, telefonep) VALUES ('$Nome', '$Desc', '$Novo_Arquivo_Imagem', '$instagram', '$twitter', '$telefone')";
    $sql_perfil = mysqli_query($conexao,$Result_Perfil);    
    
    $usuario_logado = $_SESSION['nome-user'];
    
    if($sql_perfil){
        $pasta_arquivo['pasta'] = '../IMAGES/Foto_Perfil/'.$usuario_logado.'/'; 
        mkdir($pasta_arquivo['pasta'], 0777);
        move_uploaded_file($_FILES['Foto_perfil']['tmp_name'],$pasta_arquivo['pasta'].$Novo_Arquivo_Imagem);
        header('Location: ../../pages/Inicio.php');        
    }else{
        $_SESSION['msg_etapa'] = "<p style='color:red; font-size:20px;'>Erro: Algum campo vazio ou imagem Invalida :(</p>";  
        header('Location: ../../pages/etapa.php');  
    }
}
else{
    echo 'Erro Entre na tela de<a href="../../">Inicio</a>';
}

?>