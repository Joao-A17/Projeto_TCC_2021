<?php
$pegarpintura = "SELECT * FROM pinturas order by Id desc";
if($resultado_pegarpintura = mysqli_query($conexao,$pegarpintura)){
    $Autor = array();
    $Id_autor = array();
    $i = 0;
    while($registro_pinturas = mysqli_fetch_assoc($resultado_pegarpintura)){
        $Autor[$i] = $registro_pinturas['Autor'];
        $Nome_Foto[$i] = $registro_pinturas['Nome_Foto'];
        $Desc_Foto[$i] = $registro_pinturas['Desc_Foto'];
        $Pintura_Autor[$i] = $registro_pinturas['Arquivo_Imagem'];
        $Criado[$i] = $registro_pinturas['Criado'];
        $Id_autor[$i] = $registro_pinturas['Id'];            
        ?>       
        
        
        <div class="PintArt">           
            <!-- Lugar que ficava Ultima Pintura do artista -->
            <?php 
            
            if($Autor[$i] != $usuario_logado){
                $NU = 'NomeUsuario';
                $InfoPint = 'InfoPint';
                $BConsultar = 'BConsultar';
                $Info_Pintor = 'Info_Pintor';
                $Img_Usuario = 'Img-Usuario';
                $ConteudoInfo = 'ConteudoInfo';
                $class_Nome_Foto = 'Nome_Foto';
                $class_Desc_Foto = 'Desc_Foto';
                $pint_class = 'pint';
            }
            if($Autor[$i] == $usuario_logado){
                $NU = 'NomeUsuario2';
                $InfoPint = 'InfoPint2';
                $BConsultar = 'BConsultar2';
                $Info_Pintor = 'Info_Pintor2';
                $Img_Usuario = 'Img-Usuario2';
                $ConteudoInfo = 'ConteudoInfo2';
                $class_Nome_Foto = 'Nome_Foto2';
                $class_Desc_Foto = 'Desc_Foto2';
                $pint_class = 'pint2';
            }

            ?>    
            <div class=<?php echo $InfoPint?>>        
                <div id="cont_usuario_pintura">
                    <div class=<?php echo $ConteudoInfo?>>
                        <div class="User">
                            <?php 
                            $pasta = '../assets/IMAGES/Foto_Perfil/'.$Autor[$i].'/';
                            if (file_exists("$pasta")) {
                                $diretorio = dir($pasta);

                                while($FP_OutroUsuario = $diretorio->read()){
                                    if($FP_OutroUsuario != '.' && $FP_OutroUsuario != '..'){                
                                    
                                    echo "<img id='".$Img_Usuario."' src='".$pasta.$FP_OutroUsuario."' alt=".$Autor[$i].">";
                                    
                                    }    
                                }
                            }                      
                            ?>            
                            <h3 class=<?php echo $NU?>><?php echo $Autor[$i]?></h3>              
                            <form action="./Perfil.php" method="GET" id='fomr_consulta'>
                                <input style="display: none;" type="text" name="outro_usuario" id="outro_usuario" value=<?php echo $Autor[$i]?>>                  
                                <button id="Consultar" class=<?php echo $BConsultar?> onclick="ConsutarImg()">Entrar no perfil</button>
                            </form>                 
                        </div>
                    </div>
                    <div class='div_pint'>  
                        <div class="textospp">           
                            <p class='data_pint'>Publicado em: <?php echo $Criado[$i]?></p>   
                            <h1 class=<?php echo $class_Nome_Foto ?>><?php echo $Nome_Foto[$i]?></h1>
                            <p class=<?php echo $class_Desc_Foto ?>><?php echo $Desc_Foto[$i]?></p>
                        </div> 
                        <div class="imgpp">
                            <?php             
                            $pasta_pintura = '../assets/IMAGES/Pinturas/'.$Autor[$i].'/';
                            echo "<a href='".$pasta_pintura.$Pintura_Autor[$i]."'><img class='".$pint_class."' src='".$pasta_pintura.$Pintura_Autor[$i]."' alt=".$Autor[$i]."></a>"; 
                            
                            ?>
                        </div>         
                    </div>
                </div>
            </div>
        </div>


        <?php        
    }
}                
?>