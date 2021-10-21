<?php

$nome_foto = $_POST['nome_foto'];
$desc_foto = $_POST['desc_foto'];
$id_pintura = $_POST['id_pintura'];
$Pint_Foto = $_POST['Pint_Foto'];

require_once('./Conexao_Banco.php');
$usuario_logado = $_SESSION['nome-user'];

$sql_pinturas = "SELECT * FROM pinturas WHERE Autor = '$usuario_logado'";
$pegar_pinturas = mysqli_query($conexao,$sql_pinturas);

$pasta = '../IMAGES/Pinturas/'.$usuario_logado.'/';

?>

<form action="../" method="post"></form>

<div class='Pint_Completa'>
    <div class='Fundo-Pint'>             
        <?php echo "<a href='".$pasta.$Pint_Foto."' class='linkPintura'><img src='".$pasta.$Pint_Foto."' class='Pinturas'></a>" ?>
    </div>
    <div class='Fundo-Desc'>
        <h1 class='Nome-Pint'><?php echo $nome_foto ?></h1>
        <p class='Desc-Pint'><?php echo $desc_foto ?></p>
        <i style="display: none;" id='Icon_Pontinhos' class='fas fa-ellipsis-v'></i>
        <div style="display: none;" id="menubtns">
            <buttom id="btn_Editar" class='btn_span'>Editar<i class='fas fa-paint-brush IconE'></i></buttom>
            <buttom id='btn_Excluir' class='btn_span'>Excluir<i class='fas fa-trash-alt IconE'></i></buttom>
        </div> 
        <form action='../assets/PHP/Pinturas_Usuario.php' method='POST' class='Menu_Editar'>
            <div class='Fundo-Pint'>             
                <?php echo "<a href='".$pasta.$Pint_Foto."' class='linkPintura'><img src='".$pasta.$Pint_Foto."' class='Pinturas'></a>" ?>
            </div>
            <h2>Novas Alterações <?php echo $Id_Foto ?></h2>
            <input type='submit' name='SalvarTudo' value='Salvar' id="salvar_edicoes" class='btn-SP'>
            <?php echo "<input type='text' name='nome_foto' id='NNPint' class='InputAlt' placeholder='Digite o nome da pintura' value='".$Nome_Foto."' >";?>
            <?php echo "<input type='text' name='desc_foto' id='InputAltD' placeholder='Digite a descrição da pintura' value='".$Desc_Foto."' >";?>
        </form>
    </div>
</div>