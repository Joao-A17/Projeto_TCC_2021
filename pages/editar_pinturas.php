<?php
include_once('../assets/PHP/Conexao_Banco.php');
require '../assets/PHP/dados_perfil.php';

$usuario_logado = $_SESSION['nome-user'];

$nome_foto = filter_input(INPUT_POST, 'nome_foto', FILTER_SANITIZE_STRING);
$desc_foto = filter_input(INPUT_POST, 'desc_foto', FILTER_SANITIZE_STRING);
$id_pintura = $_POST['id_pintura'];
$Pint_Post = $_POST['Pint_Foto'];
$pasta = '../assets/IMAGES/Pinturas/'.$usuario_logado.'/';

$sql_pinturas = "SELECT * FROM pinturas WHERE Autor = '$usuario_logado'";
$pegar_pinturas = mysqli_query($conexao,$sql_pinturas);
$Registrar_Pinturas = mysqli_fetch_assoc($pegar_pinturas);
$Autor = $Registrar_Pinturas['Autor'];
if($Autor == $usuario_logado){
    $Nome_Foto = $Registrar_Pinturas['Nome_Foto'];
    $Desc_Foto = $Registrar_Pinturas['Desc_Foto'];
    $Pint_Foto = $Registrar_Pinturas['Arquivo_Imagem'];
    $Id = $Registrar_Pinturas['Id'];                
}

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/styles/Geral.css">
    <link rel="stylesheet" href="../assets/styles/editar_pintura.css">    
    <title>Editar | <?php echo $nome_foto?></title>
</head>
<body>
    <?php

    if($id_pintura == $Id or $id_pintura != $Id){    
        ?>
        <section id="container">
            <div id='Fundo_img'>             
                <?php echo "<img src='".$pasta.$Pint_Post."' id='IMG'>" ?>
            </div>
            <div id='Pint_Completa'>                
                <div id='Menu_Editar'>
                    <div id="grupo">
                        <div id="textos">
                            <h1 class='Nome_Pint'><?php echo $nome_foto ?></h1>
                            <p class='Desc_Pint'><?php echo $desc_foto ?></p>                        
                        </div>
                        <form action='./tela_de_excluir.php' method="POST" id="form_Excluir">
                            <input style='display: none;' type="text" name="Pint_Foto" value=<?php echo $Pint_Foto ?> required>
                            <input style='display: none;' type="number" name="id_pintura_ex" value=<?php echo $id_pintura ?> required>
                            <input type='submit' id='btn_Excluir'name='btn_Excluir' value='Excluir'>    
                        </form>
                    </div>
                    <form action="../assets/PHP/up_pintura.php" method="POST" id="formulario">
                        <input style='display: none' type="text" name="id_img" id="id_img" value=<?php echo $id_pintura; ?>>
                        <?php echo "<input type='text' name='novo_nome' minlength = '3' maxlength = '50' id='NNPint' placeholder='Digite o nome da pintura' value='".$nome_foto."' >";?>
                        <?php echo "<input type='text' name='nova_desc' minlength = '3' maxlength = '50' id='InputAltD' placeholder='Digite a descrição da pintura' value='".$desc_foto."' >";?>
                        <input type='submit' name='alt_img' value='Salvar' id="salvar_edicoes" class='btn-SP'> 
                    </form>                   
                </div>
            </div>
        </section>
        <?php
    }
    ?>
</body>
</html>