<?php

include_once('./Conexao_Banco.php'); 
require './dados_perfil.php';

if(isset($_POST['btn_salvar'])){ 
    $usuario_logado = $_SESSION['nome-user'];   
    $Nome = filter_input(INPUT_POST, 'nome_usuario', FILTER_SANITIZE_STRING);
    $Sobrenome = filter_input(INPUT_POST, 'sobrenome', FILTER_SANITIZE_STRING);
    $Email = filter_input(INPUT_POST, 'Email', FILTER_SANITIZE_STRING);
    $Senha = filter_input(INPUT_POST, 'Senha', FILTER_SANITIZE_STRING);
    $Desc = filter_input(INPUT_POST, 'desc_usuario', FILTER_SANITIZE_STRING);
    $Insta = filter_input(INPUT_POST, 'inst_usuario', FILTER_SANITIZE_STRING);
    $Twit = filter_input(INPUT_POST, 'twit_usuario', FILTER_SANITIZE_STRING);
    $Whats = filter_input(INPUT_POST, 'tele_usuario', FILTER_SANITIZE_STRING);
    
    echo "Usuario Logado: ", $usuario_logado, "<br>";
    echo "Nome: ", $Nome, "<br>";
    echo "Sobrenome: ", $Sobrenome, "<br>";
    echo "Email: ", $Email, "<br>";
    echo "Senha: ", $Senha, "<br>"; 
    echo "Descrição: ", $Desc, "<br>";
    echo "Insta: ", $Insta, "<br>";
    echo "Twit: ", $Twit, "<br>";
    echo "Whats: ", $Whats, "<br>";
    echo "Id_Usuario: ", $IdUser, "<br>"; 
    echo "Id_Perfil: ", $Id_perfil, "<br>"; 

    
    
    $UP_usuarios = "UPDATE usuarios SET nome = '$Nome', sobrenome = '$Sobrenome', email = '$Email', password = '$Senha', telefone = '$Whats' WHERE id='$IdUser'";    
    $sql_usuarios = mysqli_query($conexao, $UP_usuarios);

    $UP_perfil = "UPDATE perfil SET nomep = '$Nome', descp = '$Desc', instagramp = '$Insta', twitterp = '$Twit', telefonep = '$Whats' WHERE idperfil='$Id_perfil'";
    $sql_perfil = mysqli_query($conexao, $UP_perfil);

    $UP_Pintura = "UPDATE pinturas SET Autor = '$Nome' WHERE Autor ='$usuario_logado'";
    $sql_pinturas = mysqli_query($conexao, $UP_Pintura);
    
    // renomear os caminhos das pastas de pinturas e perfil
    $pasta_Pintura = '../IMAGES/Pinturas/'.$usuario_logado.'/';
    $novo_nome_pasta_Pintura = '../IMAGES/Pinturas/'.$Nome.'/';
    $Renomear = rename($pasta_Pintura,$novo_nome_pasta_Pintura);
    // renomear o perfil
    $pasta_perfil = '../IMAGES/Foto_Perfil/'.$usuario_logado.'/';
    $novo_nome_pasta_Perfil = '../IMAGES/Foto_Perfil/'.$Nome.'/';
    $Renomear = rename($pasta_perfil,$novo_nome_pasta_Perfil);

    
    if($sql_usuarios){                    
        $_SESSION['msg_update'] = "        
        <div id='msg_true'>
            <h1> Perfil Alterado! <i class='fas fa-smile-beam icon'></i></h1>
            <br>
            <h1> Faça Login Novamente </h1>
        </div>         
        "; 
        header('Location: ../../pages/editar_perfil');
    }else{
        $_SESSION['msg_update'] = "
        
        <div id='msg_false'>
            <h1> Perfil Não Alterado <i class='fas fa-frown icon'></i></h1>
        </div>
        
        "; 
        header('Location: ../../pages/editar_perfil');
    }

}else{
    echo "arquivo não encontrado <a href='./loginOFF.php'>Sair</a>";
}


?>