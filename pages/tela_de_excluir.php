<?php
include_once('../assets/PHP/Conexao_Banco.php');
$Nome_IMG = filter_input(INPUT_POST, 'Pint_Foto', FILTER_SANITIZE_STRING);
$id = filter_input(INPUT_POST, 'id_pintura', FILTER_SANITIZE_NUMBER_INT);
$usuario_logado = $_SESSION['nome-user'];

$sql_pinturas = "SELECT * FROM pinturas WHERE Autor = '$usuario_logado'";
$pegar_pinturas = mysqli_query($conexao,$sql_pinturas);

$pasta = '../assets/IMAGES/Pinturas/'.$usuario_logado.'/';
$Registrar_Pinturas = mysqli_fetch_assoc($pegar_pinturas);
$Autor = $Registrar_Pinturas['Autor'];
if($Autor == $usuario_logado){
    $Nome_Foto = $Registrar_Pinturas['Nome_Foto'];
    $Desc_Foto = $Registrar_Pinturas['Desc_Foto'];
    $Pint_Foto = $Registrar_Pinturas['Arquivo_Imagem'];
    $Id_Foto = $Registrar_Pinturas['Id'];
}                
                
?> 
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/styles/Geral.css">
    <link rel="stylesheet" href="../assets/styles/tela_excluir.css">
    <title>Excluir | Pintura</title>
</head>
<body>
    <section class='Pint_Completa'>
    <h2>Quer mesmo excluir essa pintura?</h2>          
        <form action="../assets/PHP/deletar_Pintura.php" method="POST" id='form_excluir'>             
            <input style='display: none;' type="number" name="id_pintura_ex" value=<?php echo $id ?> required>
            <input style='display: none;' type="text" name="Nome_arquico_ex" value=<?php echo $Nome_IMG ?> required>
            <input type='submit' id='btn_Excluir' name='btn_Excluir' value='Excluir'>
            <a href="./Meu_Perfil.php" id='btn_cancelar'>Cancelar</a>
        </form> 
        <div class='Fundo_Pint'>             
            <?php echo "<img src='".$pasta.$Nome_IMG."' class='Pintura'>" ?>
        </div>          
    </section>
</body>
</html>