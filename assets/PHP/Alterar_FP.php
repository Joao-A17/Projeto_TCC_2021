<?php

if(isset($_FILES['arquivo'])){
    include_once('./Conexao_Banco.php');
    require './dados_perfil.php';
    $usuario_logado = $_SESSION['nome-user']; 
    $Imagem_Perfil = strtolower(pathinfo($_FILES['arquivo']['name'], PATHINFO_EXTENSION));    
    $Novo_Imagem_Perfil = $usuario_logado.'.'.$Imagem_Perfil;

    $UP_perfil = "UPDATE perfil SET fotop = '$Novo_Imagem_Perfil' WHERE idperfil='$Id_perfil'";
    $sql_perfil = mysqli_query($conexao, $UP_perfil);

    // renomear a foto de perfil
    $foto_perfil = '../IMAGES/Foto_Perfil/'.$usuario_logado.'/'.$FotoP;
    $novo_nome_foto_perfil = '../IMAGES/Foto_Perfil/'.$usuario_logado.'/'.$Novo_Imagem_Perfil;
    $Renomear = rename($foto_perfil,$novo_nome_foto_perfil);
    
    
    if($sql_perfil){
        header('Location: ../../pages/editar_perfil');    
        $_SESSION['msg_update'] = "        
        <div id='msg_true'>
            <h1> Imagem De Perfil Alterada <i class='fas fa-smile-beam icon'></i></h1>
        </div>         
        "; 
    }else{
        $_SESSION['msg_update'] = "        
        <div id='msg_false'>
            <h1> Imagem De Perfil Não Alterada <i class='fas fa-frown icon'></i></h1>
        </div>
        
        "; 
        header('Location: ../../pages/editar_perfil');
    }

}else{
    echo 'não existe bla bla ';
}

?>