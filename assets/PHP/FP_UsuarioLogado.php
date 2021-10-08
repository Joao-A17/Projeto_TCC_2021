<?php

$pasta = '../assets/IMAGES/Foto_Perfil/'.$usuario_logado.'/';

if (file_exists("$pasta")) {
    /* echo 'existe'; */
    $diretorio = dir($pasta);

    while($pintura = $diretorio->read()){
        if($pintura != '.' && $pintura != '..'){                
            ?>
            
            <?php echo "<img src='".$pasta.$pintura."' class='Foto-Admin'>"; ?>           
            
            <?php
        }    
    }
}

?>