<?php 
include '../assets/PHP/Conexao_Banco.php';
// Encontrar Logado
if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)){
  unset($_SESSION['email']);
  unset($_SESSION['senha']);
  header('Location: ./Login.php');   
}
$usuario_logado = $_SESSION['nome-user'];
$IdUser = mysqli_insert_id($conexao);

require '../assets/PHP/dados_perfil.php';

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/styles/Geral.css">
    <link rel="stylesheet" href="../assets/styles/PerfilUser.css"> 
    <title id="Nome-Site">Perfil | <?php echo $usuario_logado ?></title>              
</head>
<body>
    <nav class="Menu">
        <a href="./Inicio.php" class="Logo">Magic Paintings</a>       
        <a class="btn-menu" href="./Inicio.php"><i class="fas fa-home IconG"></i>Inicio</a>     
    </nav>

    <div class="container">
        <div class="Fundo">       
            <div class="ContAdmin">         <!-- Foto tem que ser menor que 338 x 338 -->
                <div id="AdminForm">
                    <div id="divIMGAdmin">
                    <?php require '../assets/PHP/FP_UsuarioLogado.php' ?>                      
                    <?php
                    if(isset($_SESSION['msg_publicar'])){
                        echo $_SESSION['msg_publicar'];
                        unset($_SESSION['msg_publicar']);
                    }    
                    
                    if(isset($_SESSION['msg'])){
                        echo $_SESSION['msg'];
                        unset($_SESSION['msg']);
                    }                        
                    ?>  
                    </div>              
                    <div class="Info-Admin">
                        <div id="AreaPerfil">
                            <h1 id="Nome-Admin"><?php echo $usuario_logado ?></h1>
                            <p id="Desc-Admin"><?php echo $Desc_Perfil ?></p>                                                        
                        </div>
                        <a href="./editar_perfil.php"><button type="button" class="btn-menu edp">Editar Perfil</button></a>                      
                    </div>
                </div>                
                <h4 class="TextE">Envie uma mensagem para o pintor através:</h4>
                <?php echo "<a class='Redes' href='".'mail:'.$Email."'><i class='fas fa-envelope E'></i></a>"; ?>
                <?php echo "<a class='Redes' href='".'https://wa.me/+'.$Whats."'><i class='fab fa-whatsapp W'></i></a>"; ?>
                <?php echo "<a class='Redes' href='".$Face_Perfil."'><i class='fab fa-facebook F'></i></a>"; ?>
                <?php echo "<a class='Redes' href='".$Insta_Perfil."'><i class='fab fa-instagram I'></i></a>"; ?>
                <?php echo "<a class='Redes' href='".$Twitter_Perfil."'><i class='fab fa-twitter T'></i></a>"; ?>  
                <a href="#MenuPublicar"><buttom id="btn-Adicionar" class="btn-menu botaoA"><i class="fas fa-plus IconG"></i>Publicar</buttom></a>
            </div>    
                <div id="Cont-Master">
                    <form action="../assets/PHP/Publicar_Pintura.php" method="POST" enctype="multipart/form-data" id="MenuPublicar">
                        <h2>Publicar</h2>
                        <div id="MenuSepara">
                            <div id="MS-1">
                                <input type="text" id="inputP_autor" class="InputPublic" name="NomeAltor" placeholder="Digite o nome do autor">
                                <input type="text" id="inputP_Nome_Pintura" class="InputPublic" name="NomeFoto" placeholder="Digite o nome da pintura">
                                <input type="text" id="InputPublicD" name="DescriçãoFoto" maxlength="220" placeholder="Digite a descrição da pintura">
                            </div>
                            <div id="MS-2">                               
                                <a href="#Pint_Completa"><button type="submit" id="btn_publicar" name="Publicar" class="btn-SP">Publicar</button></a>                   
                                <div id="divIMG">
                                    <img src="" id="IMGpublic">          
                                </div>          
                                <input type="file" class="form-control-file" name="arquivo" id="SelectIMG" accept="image/*">  
                                <label for="SelectIMG" id="Select_img_public">Selecionar Imagem</label>                
                            </div>                                          
                        </div> 
                        <br>
                    </form>

                    

                    <?php                     
                    
                    require '../assets/PHP/Pinturas_Usuario.php' ?>                                

                    
                    <!-- <div class="Fundo_Card">
                        <div class="Card_Pinturas"> 
                            <?php // require '../assets/PHP/listar_pinturas.php' ?>
                        </div>
                    </div> -->                                                                                        
                </div>                 
        </div>         
    </div>          
                    <!-- Scripts -->
    <script src="../assets/JS/Geral.js"></script>
    <script src="../assets/JS/Meu_Perfil.js"></script>
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
 </body>
</html> 