<?php
require '../assets/PHP/Conexao_Banco.php';
require '../assets/PHP/dados_perfil.php';

$pasta_perfil_do_usuario = '../assets/IMAGES/Foto_Perfil/'.$usuario_logado.'/';
if (file_exists("$pasta_perfil_do_usuario")){
    header('Location: ./Inicio');
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/styles/Geral.css">
    <link rel="stylesheet" href="../assets/styles/etapa.css">
    <title>Etapa | Magic Paintings</title>
</head>
<body>    
    <form id="Menu_Etapa" action="../assets/PHP/pegar_etapa.php" method="POST" enctype="multipart/form-data">        
        <h2 id="TituloMenu">Olá <?php echo $usuario_logado ?></h2>
        <p id='link_ajuda'>não estar salvando seu perfil? <a href="../ajuda.php">Ajuda</a></p>
        <p>Antes de continuar preencha os campo<i style="margin-left: 10px;" class="fas fa-paint-brush"></i></p>
        <?php
        if(isset($_SESSION['msg_etapa'])){
            echo $_SESSION['msg_etapa'];
            unset($_SESSION['msg_etapa']);
        }
        ?>
        <div id="card_grop">
            <div id="E">                
                <img src="" id="pintura_etapa">
            </div>
            <div id="D">
            <div id="imgDIV">
                <input type="file" class="form-control-file" name="Foto_perfil" id="inputIMG" accept="image/*" required>
                <label for="inputIMG" class="AlteraImg-Pintura">Adicionar foto do perfil<i style="margin-left: 10px;" class="fas fa-paint-brush"></i></label>
            </div>
            <div id="divND">
                <input style="display:none;" type="text" name="Nome_perfil" id="InputNomeAdmin" class="InputP" minlength = "3" placeholder="Nome" value=<?php echo $usuario_logado ?> required> 
                <textarea name="Desc_perfil" id="InputDesc" style="resize: none;" cols="100" rows="10" minlength = "3" maxlength = "150"  maxlength="220" placeholder="Descrição do seu perfil"></textarea>
                <div id="grade">                  
                    <input type="text" name="instagram_perfil" id="I_inst" class="InputP" minlength = "3" placeholder="Nome do seu Instagram">        
                    <input type="text" name="twitter_perfil" id="I_twi" class="InputP" minlength = "3" placeholder="Nome do seu Twitter">                  
                    <?php echo "<input style='display: none' type='text' name='telefone_perfil' id='I_tel' class='InputP' maxlength='60' value='".$Whats."' required>"; ?> 
                </div>                 
            </div> 
            <input type="submit" name="submit" id="BtnSP" value="Salvar">
            </div>
        </div>                                                            
    </form>
    <script src="../assets/JS/etapaUser.js"></script>
</body>
</html>