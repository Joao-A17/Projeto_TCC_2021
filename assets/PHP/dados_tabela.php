<?php 

include './Conexao_Banco.php';


$pegar_usuario = "SELECT * FROM usuarios WHERE nome = '$email_logado'";
$resultado_pegar = $conexao->query($pegar_usuario);
if(mysqli_num_rows($resultado_pegar) < 1){
    print_r('Não existe');
    unset($_SESSION['nome']);
    header('Location: ../../pages/Login.php');     
}
else{
    print_r('Existe');    
    $_SESSION['nome'] = $usuario_logado;
}

 ?>