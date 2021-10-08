<?php

$pasta = '../assets/IMAGES/Pinturas/'.$usuario.'/';
if (file_exists("$pasta")) {
    /* echo 'existe'; */
    $diretorio = dir($pasta);

    while($pintura = $diretorio->read()){
        if($pintura != '.' && $pintura != '..'){                
            ?> 
            <div id="Pint-Completa1-U" class="Cont">
                <div class="Fundo-Pint">
                    <?php echo "<a href='".$pasta.$pintura."' class='linkPintura'><img src='".$pasta.$pintura."' class='Pintura'></a>" ?>                                        
                </div>                                          
                <div class="Fundo-Desc">   
                    <h1 id="Nome-Pintura-U1" class="Nome-Pint"><?php echo $Nome_pintura ?></h1>
                    <p id="Desc-Pintura-U1" class="Desc-Pint"><?php echo $Desc_pintura ?></p>
                </div>
            </div>            
            
            <?php
        }    
    }
}

?>