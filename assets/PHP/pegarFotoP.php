<?php

$pastaP = '../assets/IMAGES/Fotos/';
$diretorio = dir($pastaP);

while($arquivo = $diretorio->read()){
    if($arquivo != '.' && $arquivo != '..'){
        echo "<img src='".$pastaP.$arquivo."' class='Foto-Admin'>";
    }    
}

?>