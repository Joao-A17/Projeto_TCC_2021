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
                
                /* Marca d'água */
                $marca_logo = imagecreatefrompng("../assets/IMAGES/img_settings/marca_logo.png");
            
                //Validar extensão da imagem
                switch(isset($Pint_Foto)):
                    case 'image/jpeg';
                    case 'image/pjpeg';
                        //Criar a imagem temporaria a ser manipulada
                        $imagem_teporaria = imagecreatefromjpeg("../assets/IMAGES/Pinturas/$Outro_Usuario/$Pint_Foto");
                    break;
                    case 'image/png';
                    case 'image/x-png';
                        //Criar a imagem temporaria a ser manipulada
                        $imagem_teporaria = imagecreatefrompng("../assets/IMAGES/Pinturas/$Outro_Usuario/$Pint_Foto");
                    break;
                endswitch;

                //Obter a largura da logo
                $largura_logo = imagesx($marca_logo);
                
                //Obter a altura da logo
                $altura_logo = imagesy($marca_logo);
                
                //Calcular posição x sendo 6px da lateral direita
                $x_logo = imagesx($imagem_teporaria) - $largura_logo - 6;
                
                //Calcular posição y sendo 6px do rodape
                $y_logo = imagesy($imagem_teporaria) - $altura_logo - 6;
                
                imagecopymerge($imagem_teporaria, $marca_logo, $x_logo, $y_logo, 0, 0, $largura_logo, $altura_logo, 100);                   

                imagejpeg($imagem_teporaria, "../assets/IMAGES/Pinturas/$Outro_Usuario/$Pint_Foto", 50);        

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