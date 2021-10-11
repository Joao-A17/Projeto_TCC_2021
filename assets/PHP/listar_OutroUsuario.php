<?php

# $verificar_PU é a pintura do usuario logado e a outra é do outro usuario

$sql_pinturas = "SELECT * FROM pinturas";
$pegar_pinturas = mysqli_query($conexao,$sql_pinturas);

$pasta = '../assets/IMAGES/Pinturas/'.$usuario.'/';
if (file_exists("$pasta")) {
    /* echo 'existe'; */
    $diretorio = dir($pasta);

    while($pintura = $diretorio->read()){
        if($pintura != '.' && $pintura != '..'){ 
            $Rtabela_pintura = mysqli_fetch_assoc($pegar_pinturas);
            $Autor = $Rtabela_pintura['Autor'];
            if($Autor == $usuario){
                $Nome_Foto = $Rtabela_pintura['Nome_Foto'];
                $Desc_Foto = $Rtabela_pintura['Desc_Foto'];
                $Pint_Foto = $Rtabela_pintura['Arquivo_Imagem'];
            }            
            
            if(isset($Pint_Foto)){            
                ?> 
                <div id="Pint-Completa1-U" class="Cont">
                    <div class="Fundo-Pint">
                        <?php echo "<a href='".$pasta.$Pint_Foto."' class='linkPintura'><img src='".$pasta.$Pint_Foto."' class='Pintura'></a>" ?>                                        
                    </div>                                          
                    <div class="Fundo-Desc">   
                        <h1 id="Nome-Pintura-U1" class="Nome-Pint"><?php echo $Nome_Foto ?></h1>
                        <p id="Desc-Pintura-U1" class="Desc-Pint"><?php echo $Desc_Foto ?></p>
                    </div>
                </div> 
                <?php                
            }
            

        }            
    }
}

?>