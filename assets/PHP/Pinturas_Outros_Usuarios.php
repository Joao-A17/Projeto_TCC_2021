<?php

   
$sql_pinturas = "SELECT * FROM pinturas WHERE Autor = '$Outro_Usuario'";
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

?>