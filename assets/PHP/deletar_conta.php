<?php

if(isset($_POST['Input_Usuario'])){
    include_once('./Conexao_Banco.php');
    $usuario_logado = $_SESSION['nome-user'];

    $Input_Usuario = filter_input(INPUT_POST, 'Input_Usuario', FILTER_SANITIZE_STRING);
    $pasta_perfil = '../IMAGES/Foto_Perfil/'.$usuario_logado;
    $pasta_pinturas = '../IMAGES/Pinturas/'.$usuario_logado;

    if(file_exists("$pasta_perfil")){
        $di = new RecursiveDirectoryIterator($pasta_perfil, FilesystemIterator::SKIP_DOTS);
        $ri = new RecursiveIteratorIterator($di, RecursiveIteratorIterator::CHILD_FIRST);
        foreach ( $ri as $file ) {
            $file->isDir() ?  rmdir($file) : unlink($file);
        }
        $apagar_pasta_perfil = rmdir($pasta_perfil);
    }

    if(file_exists("$pasta_pinturas")){
        $da = new RecursiveDirectoryIterator($pasta_pinturas, FilesystemIterator::SKIP_DOTS);
        $ra = new RecursiveIteratorIterator($da, RecursiveIteratorIterator::CHILD_FIRST);
        foreach ( $ra as $file ) {
            $file->isDir() ?  rmdir($file) : unlink($file);
        }
        $apagar_pasta_pinturas = rmdir($pasta_pinturas);
    }


    if($apagar_pasta_pinturas or $apagar_pasta_perfil){        

        $sql_usuario = "DELETE FROM usuarios WHERE nome = '$Input_Usuario'" ;
        $deleta_sql_usuario = mysqli_query($conexao, $sql_usuario);

        $sql_pinturas = "DELETE FROM pinturas WHERE Autor = '$Input_Usuario'" ;
        $deleta_sql_pinturas = mysqli_query($conexao, $sql_pinturas);

        $sql_perfil = "DELETE FROM perfil WHERE nomep = '$Input_Usuario'" ;
        $deleta_sql_perfil = mysqli_query($conexao, $sql_perfil);                   
        $_SESSION['msg_apagar'] = "        
        <div id='msg_true'>
            <h1> Usuário Apagado! <i class='fas fa-frown icon'></i></h1>            
        </div>         
        "; 
        session_start();
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: ../../pages/Login');

    }  

}
else{
    header('Location: ../../pages/Inicio');
}
?>