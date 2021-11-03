<?php
// Enviar Uma nova publicação
include_once("./Conexao_Banco.php"); 
$usuario_logado = $_SESSION['nome-user'];

$select_pinturas = "SELECT * FROM pinturas";
$pegar_pinturas = mysqli_query($conexao,$select_pinturas);
if($pegar_pinturas){
    while($registro = mysqli_fetch_assoc($pegar_pinturas)){
        $Autor = $registro['Autor'];
        if($Autor == $usuario_logado){
            $Id = $registro['Id'];
        }
    }
}
if(isset($_FILES['arquivo'])){     

    $usuario_logado = $_SESSION['nome-user'];
    $Autor = filter_input(INPUT_POST, 'NomeAltor', FILTER_SANITIZE_STRING);
    $Nome_Foto = filter_input(INPUT_POST, 'NomeFoto', FILTER_SANITIZE_STRING);
    $Desc_Foto = filter_input(INPUT_POST, 'DescriçãoFoto', FILTER_SANITIZE_STRING);
    $Arquivo_Imagem = strtolower(pathinfo($_FILES['arquivo']['name'], PATHINFO_EXTENSION));    

    

    if(isset($Id)){
        $addID = $Id + 1;
        echo $Novo_Arquivo_Imagem = 'Pintura_do(a)_'.$Autor.'_id_'.$addID.'.'.$Arquivo_Imagem;
    }
    if(!isset($Id)){
        $Novo_Arquivo_Imagem = 'Primeira_pintura_do(a)_'.$Autor.'.'.$Arquivo_Imagem;
    }
    
    $Inserir_Publicação = "INSERT INTO pinturas (Autor, Nome_Foto, Desc_Foto, Arquivo_Imagem, Criado) VALUES ('$Autor', '$Nome_Foto', '$Desc_Foto', '$Novo_Arquivo_Imagem', NOW())";       
    
    $pasta_arquivo['pasta'] = '../IMAGES/Pinturas/'.$Autor.'/'; 
    mkdir($pasta_arquivo['pasta'], 0777); 
    
    if($Result = mysqli_query($conexao, $Inserir_Publicação)){
        move_uploaded_file($_FILES['arquivo']['tmp_name'],$pasta_arquivo['pasta'].$Novo_Arquivo_Imagem);
        header('Location: ../../pages/Meu_Perfil.php');       
        $_SESSION['msg_publicar'] = "<p style='color: var(--corD2); font-size:20px;'>Publicado com sucesso :)</p>"; 
    }else{
        $_SESSION['msg_publicar'] = "<p style='color:red; font-size:20px;'>Erro: Campos vazio ou Imagem Invalida :(</p>"; 
        header('Location: ../../pages/Meu_Perfil.php');
    }

}

?>