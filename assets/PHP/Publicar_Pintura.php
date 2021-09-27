<?php

/* print_r($Arquivo_Imagem = strtolower(pathinfo($_FILES['arquivo']['name'], PATHINFO_EXTENSION))); */

// Enviar Uma nova publicação
if(isset($_FILES['arquivo'])){

    include_once("./Conexao_Banco.php");  
    $Autor = filter_input(INPUT_POST, 'NomeAltor');
    $Nome_Foto = filter_input(INPUT_POST, 'NomeFoto');
    $Desc_Foto = filter_input(INPUT_POST, 'DescriçãoFoto');
    $Arquivo_Imagem = strtolower(pathinfo($_FILES['arquivo']['name'], PATHINFO_EXTENSION));    
    $Novo_Arquivo_Imagem = $Nome_Foto.'.'.$Arquivo_Imagem;
    $diretorio = "../IMAGES/Fotos/";

    /* move_uploaded_file($_FILES['arquivo']['tmp_name'],$diretorio.$Novo_Arquivo_Imagem);     */
    
    
    $Inserir_Publicação = "INSERT INTO pinturas (Autor, Nome_Foto, Desc_Foto, Arquivo_Imagem, Criado) VALUES ('$Autor', '$Nome_Foto', '$Desc_Foto', '$Novo_Arquivo_Imagem', NOW())";   
    $Result = mysqli_query($conexao, $Inserir_Publicação);
    $IdPintura = mysqli_insert_id($conexao);
    $pasta_arquivo['pasta'] = '../IMAGES/Pinturas/'.$Autor.'/'; 
    mkdir($pasta_arquivo['pasta'], 0777);
    /* if(move_uploaded_file($_FILES['arquivo']['tmp_name'],$pasta_arquivo['pasta'].$Novo_Arquivo_Imagem)){
        header('Location: ../../pages/Perfil_edit.php');
    } */
    if(move_uploaded_file($_FILES['arquivo']['tmp_name'],$pasta_arquivo['pasta'].$Novo_Arquivo_Imagem)){
        header('Location: ../../pages/Perfil_edit.php');        
    }

}

?>