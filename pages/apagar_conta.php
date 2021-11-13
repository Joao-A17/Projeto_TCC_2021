<?php
include_once('../assets/PHP/Conexao_Banco.php');
$Input_usuario = filter_input(INPUT_POST, 'Input_usuario', FILTER_SANITIZE_STRING);

$usuario_logado = $_SESSION['nome-user'];

$sql_usuario = "SELECT * FROM usuarios WHERE nome = '$usuario_logado'";
$pegar_usuario = mysqli_query($conexao,$sql_usuario);

$img_usuario_logado = '../assets/IMAGES/Foto_Perfil/'.$usuario_logado.'/'.$usuario_logado;

$Registrar_Usuario = mysqli_fetch_assoc($pegar_usuario);

$Nome_Usuario = $Registrar_Usuario['nome'];
if($Nome_Usuario == $usuario_logado){
    $Nome_Usuario = $Registrar_Usuario['nome'];
}
 
?> 
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/styles/Geral.css">
    <link rel="stylesheet" href="../assets/styles/apagar_conta.css">
    <title>Excluir  |   <?php echo $usuario_logado?></title>
</head>
<body>
    <section id='section'>
        <h2>Quer mesmo excluir essa conta?</h2>
        <div id="perfil">                
            <div class='Fundo_img'>             
                <?php echo "<img src='".$img_usuario_logado."' class='Pintura'>" ?>
            </div>           
            <h1><?php echo $Input_usuario?></h1>
        </div>
        <form action="../assets/PHP/deletar_conta.php" method="POST" id='form_excluir'>            
            <input type="text" id="Input_Usuario" name="Input_Usuario" value=<?php echo $Input_usuario ?> required>
            <input type='submit' id='btn_excluir_conta' name='btn_excluir_conta' value='Excluir'>
            <a href="./editar_perfil.php" id='btn_cancelar'>Cancelar</a>
        </form>          
    </section>    
</body>
</html>