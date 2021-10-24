<?php 

include_once('./Conexao_Banco.php');
$usuario_logado = $_SESSION['nome-user'];

$id = filter_input(INPUT_POST, 'id_pintura_ex', FILTER_SANITIZE_NUMBER_INT);
$Nome_arquivo = filter_input(INPUT_POST, 'Nome_arquico_ex', FILTER_SANITIZE_STRING);

$caminho_Nome_arquivo = '../IMAGES/Pinturas/'.$usuario_logado.'/'.$Nome_arquivo; 
if(file_exists( $caminho_Nome_arquivo )){
    unlink($caminho_Nome_arquivo);    
}
$delete = $conexao->query("delete FROM pinturas WHERE Id='$id'");
if(mysqli_affected_rows($conexao) > 0){
    header('Location: ../../pages/Meu_Perfil.php');       
    $_SESSION['msg_deletar'] = "        
    <div id='msg_true'>
        <h1> Pintura apagada <i class='fas fa-smile-beam icon'></i></h1>
    </div>         
    "; 
}else{
    header('Location: ../../pages/Meu_Perfil.php');
    $_SESSION['msg_deletar'] = "
    
    <div id='msg_false'>
        <h1> Pintura não apagada <i class='fas fa-frown icon'></i></h1>
    </div>
    
    "; 
}

?>