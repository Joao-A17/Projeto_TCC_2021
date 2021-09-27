<?php
session_start();

if(isset($_POST['submit']) && !empty($_POST['nome-user']) && !empty($_POST['senha'])){
    include_once('./Conexao_Banco.php');
    $usuario = $_POST['nome-user'];
    $senha = $_POST['senha'];


    /* print_r('Email: ' . $nome-user);
    print_r('<br>');
    print_r('Senha: ' . $senha); */

    $sql = "SELECT * FROM usuarios WHERE nome = '$usuario' and password = '$senha'";
    $resultado = $conexao->query($sql);

    /* print_r($resultado); */

    if(mysqli_num_rows($resultado) < 1){
        /* print_r('Não existe'); */
        unset($_SESSION['nome-user']);
        unset($_SESSION['senha']);
        header('Location: ../../pages/Login.php');     
    }
    else{
        /* print_r('Existe'); */
        $_SESSION['nome-user'] = $usuario;
        $_SESSION['senha'] = $senha;
        header('Location: ../../pages/etapa.php');
    }

}
else{
    header('Location: ../../pages/Login.php');
}

?>