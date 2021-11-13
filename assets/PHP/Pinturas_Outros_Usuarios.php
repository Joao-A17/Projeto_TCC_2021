<?php

   
$sql_pinturas = "SELECT * FROM pinturas WHERE Autor = '$Outro_Usuario' order by id desc";
$pegar_TabelaPint = mysqli_query($conexao,$sql_pinturas); 
$pasta = '../assets/IMAGES/Pinturas/'.$Outro_Usuario.'/';

if (file_exists("$pasta")) {
    $diretorio = dir($pasta);
    while($pintura = $diretorio->read()){
        $registro = mysqli_fetch_assoc($pegar_TabelaPint);

        $Autor = $registro['Autor']; 
        $Id = $registro['Id']; 
        if($Autor == $Outro_Usuario){
                $Nome_Foto = $registro['Nome_Foto'];
                $Desc_Foto = $registro['Desc_Foto'];
                $Pint_Foto = $registro['Arquivo_Imagem'];     
                $Criado = $registro['Criado'];      
                ?> 
                <div id="Pint-Completa1-U" class="Cont">
                    <div class="Fundo-Pint">
                        <div class="fundo_Fpintura">
                            <?php echo "<a href='".$pasta.$Pint_Foto."' class='linkPintura'><img src='".$pasta.$Pint_Foto."' class='Pintura'></a>" ?>                                        
                        </div>
                    </div>                                          
                    <div class="Fundo-Desc">   
                        <div style='display: flex; margin: 20px;'>
                            <h1 class='data_public'>Publicado em:</h1>
                            <?php echo "<h1 style='color: var(--secundary); margin-left: 20px' class='data_public'>$Criado</h1>"?>
                        </div>
                        <h1 id="Nome-Pintura-U1" class="Nome-Pint"><?php echo $Nome_Foto ?></h1>
                        <p id="Desc-Pintura-U1" class="Desc-Pint"><?php echo $Desc_Foto ?></p>
                    </div>
                </div> 
                <?php 
            
        }
    } 
}

?>