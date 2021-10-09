<?php

# $verificar_PU é a pintura do usuario logado e a outra é do outro usuario

$sql_pinturas = "SELECT * FROM pinturas";
$pegar_pinturas = mysqli_query($conexao,$sql_pinturas);

$pasta = '../assets/IMAGES/Pinturas/'.$usuario_logado.'/';
if (file_exists("$pasta")) {
    /* echo 'existe'; */
    $diretorio = dir($pasta);

    while($pintura = $diretorio->read()){
        if($pintura != '.' && $pintura != '..'){ 
            $Rtabela_pintura = mysqli_fetch_assoc($pegar_pinturas);
            $Autor = $Rtabela_pintura['Autor'];
            if($verificar_PU = $Autor == $usuario_logado){
                $Nome_Foto = $Rtabela_pintura['Nome_Foto'];
                $Desc_Foto = $Rtabela_pintura['Desc_Foto'];
            }
                           
            ?> 
            <div class='Pint_Completa'>
                <div class='Fundo-Pint'>             
                    <?php echo "<a href='".$pasta.$pintura."' class='linkPintura'><img src='".$pasta.$pintura."' class='Pinturas'></a>" ?>
                </div>
                <div class='Fundo-Desc'>
                    <h1 class='Nome-Pint'><?php echo $Nome_Foto ?></h1>
                    <p class='Desc-Pint'><?php echo $Desc_Foto ?></p>
                    <i class='fas fa-ellipsis-v Icon_Pontinhos'></i>
                    <div class="menubtns">
                        <buttom class='btn_span btn_Editar'>Editar<i class='fas fa-paint-brush IconE'></i></buttom>
                        <buttom class='btn_span btn_Excluir'>Excluir<i class='fas fa-trash-alt IconE'></i></buttom>
                    </div>
                <form action='./Perfil_edit.php' method='POST' class='Menu_Editar'>
                    <h2>Novas Alterações</h2>
                    <input id='salvar_edicoes' type='submit' name='SalvarTudo' value='Salvar' class='btn-SP'>
                    <input type='text' name='arquivoX' class='InputAlt' id='NNPint' placeholder='Digite o nome da pintura'>
                    <textarea id='InputAltD' name='descrição-foto' placeholder='Digite a descrição da pintura' cols='30' rows='40'></textarea>
                </form>
                </div>
            </div>
            
            <?php
        }    
    }
}

?>