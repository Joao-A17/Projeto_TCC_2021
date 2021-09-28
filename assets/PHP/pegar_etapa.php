
<?php

// Enviar Uma nova publicação

if(isset($_POST['submit'])){
    include_once('./Conexao_Banco.php');
    echo 'isso ai meno';
    $Autor = $_SESSION['nome-user'];
    $Nome_Foto = filter_input(INPUT_POST, 'Nome-pintura');
    $Desc_Foto = filter_input(INPUT_POST, 'Desc-pintura');
    $Arquivo_Imagem = strtolower(pathinfo($_FILES['pintura']['name'], PATHINFO_EXTENSION));    
    $Novo_Arquivo_Imagem = $Nome_Foto.'.'.$Arquivo_Imagem;
    
    $pasta_arquivo['pasta'] = '../IMAGES/Pinturas/'.$Autor.'/'; 
    mkdir($pasta_arquivo['pasta'], 0777);
    if(move_uploaded_file($_FILES['pintura']['tmp_name'],$pasta_arquivo['pasta'].$Novo_Arquivo_Imagem)){
        header('Location: ../../pages/Perfil_edit.php');        
    }
}
else{
    echo 'Pulat';
}

?>