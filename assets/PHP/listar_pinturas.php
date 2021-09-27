<?php
$usuario_logado = $_SESSION['nome-user'];

$pasta = '../assets/IMAGES/Pinturas/'.$usuario_logado.'/';
$diretorio = dir($pasta);

while($arquivo = $diretorio->read()){
    if($arquivo != '.' && $arquivo != '..'){
        echo "<a href='#' class='linkPintura'><img src='".$pasta.$arquivo."' class='Pinturas'></a>";
    }    
}

?>