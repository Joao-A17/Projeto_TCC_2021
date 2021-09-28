<?php

$Nome_Foto = filter_input(INPUT_POST, 'NomeFoto');
$Desc_Foto = filter_input(INPUT_POST, 'DescriçãoFoto');
$sqlPint = "SELECT Nome_Foto,Desc_Foto FROM pinturas WHERE Nome_Foto = '$Nome_Foto' AND Desc_Foto = '$Desc_Foto'";

$usuario_logado = $_SESSION['nome-user'];
$pasta = '../assets/IMAGES/Pinturas/'.$usuario_logado.'/';
if (file_exists("$pasta")) {
    /* echo 'existe'; */
    $diretorio = dir($pasta);

    while($pintura = $diretorio->read()){
        if($pintura != '.' && $pintura != '..'){
            
            echo "<div class='Pint_Completa'>
            <div class='Fundo-Pint'>             
            <a href='".$pasta.$pintura."' class='linkPintura'><img src='".$pasta.$pintura."' class='Pinturas'></a>
            </div>
            <div class='Fundo-Desc'>
                <h1 class='Nome-Pint'>'$Nome_Foto'</h1>
                <p class='Desc-Pint'>'$Desc_Foto'</p>
                <i id='Icon_Pontinhos' class='fas fa-ellipsis-v'></i>
                <div id='menubtns'>
                    <buttom id='btn_Editar' class='btn_span'>Editar<i class='fas fa-paint-brush IconE'></i></buttom>
                    <buttom id='btn_Excluir' class='btn_span'>Excluir<i class='fas fa-trash-alt IconE'></i></buttom>
                </div>
                <form action='./Perfil_edit.php' method='POST' class='Menu_Editar'>
                    <h2>Novas Alterações</h2>
                    <input id='salvar_edicoes' type='submit' name='SalvarTudo' value='Salvar' class='btn-SP'>
                    <input type='text' name='arquivoX' class='InputAlt' id='NNPint' placeholder='Digite o nome da pintura'>
                    <textarea id='InputAltD' name='descrição-foto' placeholder='Digite a descrição da pintura' cols='30' rows='40'></textarea>
                </form>
            </div>
        </div>";
        }    
    }
}

?>