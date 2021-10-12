<?php

# $verificar_PU é a pintura do usuario logado e a outra é do outro usuario 

$sql_pinturas = "SELECT * FROM pinturas WHERE Autor = '$usuario_logado'";
$pegar_pinturas = mysqli_query($conexao,$sql_pinturas);

$pasta = '../assets/IMAGES/Pinturas/'.$usuario_logado.'/';
if (file_exists("$pasta")) {
    /* echo 'existe'; */
    $diretorio = dir($pasta);

    while($pintura = $diretorio->read()){
        if($pintura != '.' && $pintura != '..'){ 
            $Registrar_Pinturas = mysqli_fetch_assoc($pegar_pinturas);
            $Autor = $Registrar_Pinturas['Autor'];
            if($Autor == $usuario_logado){
                $Nome_Foto = $Registrar_Pinturas['Nome_Foto'];
                $Desc_Foto = $Registrar_Pinturas['Desc_Foto'];
                $Pint_Foto = $Registrar_Pinturas['Arquivo_Imagem'];
            }
                
                            
                ?> 
                <div class='Pint_Completa'>
                    <div class='Fundo-Pint'>             
                        <?php echo "<a href='".$pasta.$Pint_Foto."' class='linkPintura'><img src='".$pasta.$Pint_Foto."' class='Pinturas'></a>" ?>
                    </div>
                    <div class='Fundo-Desc'>
                        <h1 class='Nome-Pint'><?php echo $Nome_Foto ?></h1>
                        <p class='Desc-Pint'><?php echo $Desc_Foto ?></p>
                        <i id="Icon_Pontinhos" class='fas fa-ellipsis-v'></i>
                        <div class="menubtns">
                            <buttom id="btn_Editar" class='btn_span'>Editar<i class='fas fa-paint-brush IconE'></i></buttom>
                            <buttom id='btn_Excluir' class='btn_span'>Excluir<i class='fas fa-trash-alt IconE'></i></buttom>
                        </div>
                    <form action='./Meu_Perfil.php' method='POST' class='Menu_Editar'>
                        <h2>Novas Alterações</h2>
                        <input type='submit' name='SalvarTudo' value='Salvar' id="salvar_edicoes" class='btn-SP'>
                        <?php echo "<input type='text' name='arquivoX' id='NNPint' class='InputAlt' placeholder='Digite o nome da pintura' value='".$Nome_Foto."' >";?>
                        <?php echo "<input type='text' name='descrição-foto' id='InputAltD' placeholder='Digite a descrição da pintura' value='".$Desc_Foto."' >";?>
                    </form>
                    </div>
                </div>
                
                <?php
            }    
        }
    }
?>