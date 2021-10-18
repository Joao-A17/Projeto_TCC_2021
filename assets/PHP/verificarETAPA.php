<?php
include_once('./Conexao_Banco.php');
$usuario_logado = $_SESSION['nome-user'];

$caminho_da_pasta = '../../assets/IMAGES/Foto_Perfil/'.$usuario_logado;


if (file_exists("$caminho_da_pasta")) {
    /* Existe */
    header('Location: ../../pages/Inicio.php');
} else {
    /* Não Existe */
    header('Location: ../../pages/etapa.php');
}

?>