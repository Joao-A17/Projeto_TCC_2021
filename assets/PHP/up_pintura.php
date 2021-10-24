<?php

include_once('./Conexao_Banco.php'); 
require './dados_perfil.php';

$sql_pinturas = "SELECT * FROM pinturas WHERE Autor = '$usuario_logado'";
$enviar_sql_pinturas = mysqli_query($conexao,$sql_pinturas);

$Id_inputFoto = $_POST['id_img'];
$novo_nome = filter_input(INPUT_POST, 'novo_nome', FILTER_SANITIZE_STRING);
$nova_desc = filter_input(INPUT_POST, 'nova_desc', FILTER_SANITIZE_STRING);

if(isset($_POST['alt_img'])){
    $Up_pintura = "UPDATE pinturas SET Nome_Foto = '$novo_nome', Desc_Foto = '$nova_desc' WHERE Id = '$Id_inputFoto'";    
    $sql_pintura = mysqli_query($conexao, $Up_pintura);

    if($sql_pintura){
        header('Location: ../../pages/Meu_Perfil.php');       
        $_SESSION['msg_pintura'] = "        
        <div id='msg_true'>
            <h1> Pintura Alterada <i class='fas fa-smile-beam icon'></i></h1>
        </div>         
        "; 
    }else{
        header('Location: ../../pages/Meu_Perfil.php');
        $_SESSION['msg_pintura'] = "
        
        <div id='msg_false'>
            <h1> Pintura não alterada <i class='fas fa-frown icon'></i></h1>
        </div>
        
        "; 
    }
}

?>