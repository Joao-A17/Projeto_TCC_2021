<?php
// Enviar Uma nova publicação
if(isset($_FILES['arquivo'])){

    include_once("./Conexao_Banco.php");  
    $Autor = filter_input(INPUT_POST, 'NomeAltor', FILTER_SANITIZE_STRING);
    $Nome_Foto = filter_input(INPUT_POST, 'NomeFoto', FILTER_SANITIZE_STRING);
    $Desc_Foto = filter_input(INPUT_POST, 'DescriçãoFoto', FILTER_SANITIZE_STRING);
    $Arquivo_Imagem = strtolower(pathinfo($_FILES['arquivo']['name'], PATHINFO_EXTENSION));    
    $Novo_Arquivo_Imagem = $Nome_Foto.'.'.$Arquivo_Imagem;
    
    $Inserir_Publicação = "INSERT INTO pinturas (Autor, Nome_Foto, Desc_Foto, Arquivo_Imagem, Criado) VALUES ('$Autor', '$Nome_Foto', '$Desc_Foto', '$Novo_Arquivo_Imagem', NOW())";       
    $IdPintura = mysqli_insert_id($conexao);
    $pasta_arquivo['pasta'] = '../IMAGES/Pinturas/'.$Autor.'/'; 
    mkdir($pasta_arquivo['pasta'], 0777);
    
    if($Result = mysqli_query($conexao, $Inserir_Publicação)){
        move_uploaded_file($_FILES['arquivo']['tmp_name'],$pasta_arquivo['pasta'].$Novo_Arquivo_Imagem);
        header('Location: ../../pages/Meu_Perfil.php');       
        $_SESSION['msg_publicar'] = "<p style='color: green; font-size:20px;'>Publicado com sucesso :)</p>"; 
    }else{
        $_SESSION['msg_publicar'] = "<p style='color:red; font-size:20px;'>Erro: Campos vazio ou Imagem Invalida :(</p>"; 
        header('Location: ../../pages/Meu_Perfil.php');
    }

}

?>