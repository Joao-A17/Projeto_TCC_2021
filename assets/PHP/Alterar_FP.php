<?php

if(isset($_FILES['arquivo'])){
    include_once('./Conexao_Banco.php');
    require './dados_perfil.php';
    $Foto_Perfil = filter_input(INPUT_POST, 'nome_fp', FILTER_SANITIZE_STRING);    
    $usuario_logado = $_SESSION['nome-user'];
    $caminho_FP = '../IMAGES/Foto_Perfil/'.$usuario_logado.'/'.$FotoP;
        
    $pasta_arquivo['pasta'] = '../IMAGES/Foto_Perfil/'.$usuario_logado.'/'; 
    mkdir($pasta_arquivo['pasta'], 0777);
    
    if(move_uploaded_file($_FILES['arquivo']['tmp_name'],$pasta_arquivo['pasta'].$Foto_Perfil)){
        header('Location: ../../pages/editar_perfil');    
        $_SESSION['msg_update'] = "        
        <div id='msg_true'>
            <h1> Imagem De Perfil Alterada <i class='fas fa-smile-beam icon'></i></h1>
        </div>         
        "; 
    }else{
        $_SESSION['msg_update'] = "        
        <div id='msg_false'>
            <h1> Imagem De Perfil Não Alterada <i class='fas fa-frown icon'></i> <br>Talvez você não adicionou uma imagem <br> ou <br>Imagem não compatível</h1>
        </div>
        
        "; 
        header('Location: ../../pages/editar_perfil');
    }

}else{
    echo 'não existe bla bla ';
    header('Location: ../../pages/editar_perfil');
}

?>