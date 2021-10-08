<?php

$usuario_logado = $_SESSION['nome-user'];
$pasta = '../assets/IMAGES/Foto_Perfil/'.$usuario.'/';

if (file_exists("$pasta")) {
    /* echo 'existe'; */
    $diretorio = dir($pasta);

    while($pintura = $diretorio->read()){
        if($pintura != '.' && $pintura != '..'){                
            ?>
            
            <?php echo "<img src='".$pasta.$pintura."' id='Foto-Admin-U' alt=".$usuario.">" ?>                
            
            <?php
        }    
    }
}

?>