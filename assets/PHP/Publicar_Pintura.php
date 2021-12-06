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
        $Novo_Arquivo_Imagem = 'Pintura_do(a)_'.$Autor.'_id_'.$addID.'.'.$Arquivo_Imagem;
    }
    if(!isset($Id)){
        $Novo_Arquivo_Imagem = 'Primeira_pintura_do(a)_'.$Autor.'.'.$Arquivo_Imagem;
    }

    $img_temp = $_FILES['arquivo']['name'];

    $pasta_arquivo['pasta'] = '../IMAGES/Pinturas/'.$usuario_logado.'/';
    
    if(isset($pasta_arquivo['pasta'])){            
        mkdir($pasta_arquivo['pasta'], 0777);    
        $mover_pintura = move_uploaded_file($_FILES['arquivo']['tmp_name'],$pasta_arquivo['pasta'].$Novo_Arquivo_Imagem);
    }

    if($mover_pintura){
        /* Marca d'água */
        //Validar extensão da imagem
        switch(isset($_FILES['arquivo'])):
            case 'image/jpeg';
            case 'image/pjpeg';
                //Criar a imagem temporaria a ser manipulada
                $imagem_teporaria = imagecreatefromjpeg("../IMAGES/Pinturas/$usuario_logado/$Novo_Arquivo_Imagem");
            break;
            case 'image/png';
            case 'image/x-png';
                //Criar a imagem temporaria a ser manipulada
                $imagem_teporaria = imagecreatefrompng("../IMAGES/Pinturas/$usuario_logado/$Novo_Arquivo_Imagem");
            break;
        endswitch;

        $marca_logo = imagecreatefrompng("../IMAGES/img_settings/marca_logo.png");
        //Obter a largura da logo
        $largura_logo = imagesx($marca_logo);
        //Obter a altura da logo
        $altura_logo = imagesy($marca_logo);
        //Calcular posição x sendo 6px da lateral direita
        $x_logo = imagesx($imagem_teporaria) - $largura_logo - 6;
        //Calcular posição y sendo 6px do rodape
        $y_logo = imagesy($imagem_teporaria) - $altura_logo - 6;
        imagecopymerge($imagem_teporaria, $marca_logo, $x_logo, $y_logo, 0, 0, $largura_logo, $altura_logo, 100);                   
        imagejpeg($imagem_teporaria, "../IMAGES/Pinturas/$usuario_logado/$Novo_Arquivo_Imagem", 280);    


    }
    
    $Inserir_Publicação = "INSERT INTO pinturas (Autor, Nome_Foto, Desc_Foto, Arquivo_Imagem, Criado) VALUES ('$Autor', '$Nome_Foto', '$Desc_Foto', '$Novo_Arquivo_Imagem', NOW())";       

    if($Result = mysqli_query($conexao, $Inserir_Publicação)){
        move_uploaded_file($_FILES['arquivo']['tmp_name'],$pasta_arquivo['pasta'].$Novo_Arquivo_Imagem);
        header('Location: ../../pages/Meu_Perfil.php');
        $_SESSION['msg_publicar'] = "<p style='color: var(--primary); font-size:20px;'>Publicado com sucesso :)</p>"; 
    }else{
        $_SESSION['msg_publicar'] = "<p style='color:red; font-size:20px;'>Erro: Campos vazio ou Imagem Invalida :(</p>"; 
        header('Location: ../../pages/Meu_Perfil.php');
    }

}
?>