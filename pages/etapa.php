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
    <title>Etapa | Magics Painting</title>
</head>
<body>
    
    <form id="Menu_Etapa" action="../assets/PHP/pegar_etapa.php" method="POST" enctype="multipart/form-data">        
        <h2 id="TituloMenu">Olá <?php echo $usuario_logado ?></h2>
        <p>Antes de continuar adicione uma pintura <i style="margin-left: 10px;" class="fas fa-paint-brush"></i></p>
        <div id="card_grop">
            <div id="E">                
                <img src="" id="pintura_etapa">
            </div>
            <div id="D">
            <div id="imgDIV">
                <input type="file" class="form-control-file" name="pintura" id="inputIMG" accept="image/*">
                <label for="inputIMG" class="AlteraImg-Pintura">Adicionar<i style="margin-left: 10px;" class="fas fa-paint-brush"></i></label>
            </div>
            <div id="divND">
                <input type="text" name="Nome-pintura" id="InputNomeAdmin" class="InputP" maxlength="60" placeholder="Nome da pintura"> 
                <input type="text" name="Desc-pintura" id="InputDesc" maxlength="60" placeholder="Descrição da pintura">                  
            </div> 
            <input type="submit" name="submit" id="BtnSP" value="Salvar">
            </div>
        </div>                                                            
    </form>
    <script src="../assets/JS/tela_etapa.js"></script>
</body>
</html>