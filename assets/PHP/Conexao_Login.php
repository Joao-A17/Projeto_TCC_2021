<?php
session_start();

if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha'])){
    include_once('./Conexao_Banco.php');
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    /* print_r('Email: ' . $email);
    print_r('<br>');
    print_r('Senha: ' . $senha); */

    $sql = "SELECT * FROM usuarios WHERE email = '$email' and password = '$senha'";
    $resultado = $conexao->query($sql);

    /* print_r($resultado); */

    if(mysqli_num_rows($resultado) < 1){
        /* print_r('Não existe'); */
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: ../../pages/Login.php');     
    }
    else{
        /* print_r('Existe'); */
        $_SESSION['email'] = $email;
        $_SESSION['senha'] = $senha;
        header('Location: ../../pages/Pinturas.php');
    }

}
else{
    header('Location: ../../pages/Login.php');
}

?>