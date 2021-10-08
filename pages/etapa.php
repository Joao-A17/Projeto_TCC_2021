<?php
include_once('../assets/PHP/Conexao_Banco.php');
$usuario_logado = $_SESSION['nome-user'];

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
        <p>Antes de continuar preencha os campo<i style="margin-left: 10px;" class="fas fa-paint-brush"></i></p>
        <div id="card_grop">
            <div id="E">                
                <img src="" id="pintura_etapa">
            </div>
            <div id="D">
            <div id="imgDIV">
                <input type="file" class="form-control-file" name="Foto_perfil" id="inputIMG" accept="image/*">
                <label for="inputIMG" class="AlteraImg-Pintura">Adicionar foto do perfil<i style="margin-left: 10px;" class="fas fa-paint-brush"></i></label>
            </div>
            <div id="divND">
                <input style="display:none;" type="text" name="Nome_perfil" id="InputNomeAdmin" class="InputP" maxlength="60" placeholder="Nome" value=<?php echo $usuario_logado ?>> 
                <input type="text" name="Desc_perfil" id="InputDesc" maxlength="60" placeholder="Descrição do seu perfil">
                <div id="grade">                  
                    <input type="text" name="instagram_perfil" class="InputP" maxlength="60" placeholder="Link do seu Instagram (opcional)">                  
                    <input type="text" name="facebook_perfil" class="InputP" maxlength="60" placeholder="Link do seu Facebook (opcional)">                  
                    <input type="text" name="twitter_perfil" class="InputP" maxlength="60" placeholder="Link do seu Twitter (opcional)">                  
                    <input type="text" name="telefone_perfil" class="InputP" maxlength="60" placeholder="Link do seu Whatsapp (opcional)"> 
                </div>                 
            </div> 
            <input type="submit" name="submit" id="BtnSP" value="Salvar">
            </div>
        </div>                                                            
    </form>
    <script src="../assets/JS/tela_etapa.js"></script>
</body>
</html>