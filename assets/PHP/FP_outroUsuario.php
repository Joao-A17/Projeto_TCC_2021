<?php

$usuario_logado = $_SESSION['nome-user'];
$pasta = '../assets/IMAGES/Foto_Perfil/'.$Outro_Usuario.'/';

if (file_exists("$pasta")) {
    /* echo 'existe'; */
    $diretorio = dir($pasta);

    while($pintura = $diretorio->read()){
        if($pintura != '.' && $pintura != '..'){                
            
            echo "<div id='DivFP'><img src='".$pasta.$pintura."' id='Foto-Admin' alt=".$Outro_Usuario."></div>"; 
        }    
    }
}

?>