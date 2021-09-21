<?php

// Enviar Uma nova publicação
if(isset($_FILES['arquivo'])){

    include_once("./Conexao_Banco.php");  
    $Autor = filter_input(INPUT_POST, 'NomeAltor');
    $Nome_Foto = filter_input(INPUT_POST, 'NomeFoto');
    $Desc_Foto = filter_input(INPUT_POST, 'DescriçãoFoto');
    $Arquivo_Imagem = strtolower(pathinfo($_FILES['arquivo']['name'], PATHINFO_EXTENSION));    
    $Novo_Arquivo_Imagem = $Nome_Foto.'.'.$Arquivo_Imagem;
    $diretorio = "../IMAGES/Fotos/";

    move_uploaded_file($_FILES['arquivo']['tmp_name'],$diretorio.$Novo_Arquivo_Imagem);
    
    $Inserir_Publicação = "INSERT INTO pinturas (Autor, Nome_Foto, Desc_Foto, Arquivo_Imagem, Criado) VALUES ('$Autor', '$Nome_Foto', '$Desc_Foto', '$Novo_Arquivo_Imagem', NOW())";        
    if(mysqli_query($conexao, $Inserir_Publicação)){
        header('Location: ../../pages/Pinturas_AP.php');
    }else{
        header('Location: ../../pages/Pinturas_AP.php');
    }

}

?>