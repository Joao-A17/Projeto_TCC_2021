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
    <link rel="stylesheet" href="../assets/styles/Meu_Perfil.css"> 
    <title id="Nome-Site">Perfil | <?php echo $usuario_logado ?></title>              
</head>
<body>
    <nav class="Menu">
        <a href="./Inicio.php" class="Logo">Magic Paintings</a>       
        <a class="btn-menu" href="./Inicio.php"><i class="fas fa-home IconG"></i>Inicio</a>    
        <a href="../assets/PHP/loginOFF.php" id="btn-sair"><i style="margin-right: 15px;" class="fas fa-power-off"></i>Sair</a>
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
                        <a href="./editar_perfil.php"><button type="button" id="btn_editP">Editar Perfil</button></a>                      
                    </div>
                </div>
                <h4 class="TextE">Clique em ADICIONAR para publicar uma nova pintura</h4>
                <div id="div_link">                
                    <?php echo "<a class='Redes' href='".'mail:'.$Email."'><i class='fas fa-envelope E'></i></a>"; ?>
                    <?php echo "<a class='Redes' href='".'https://wa.me/+'.$Whats."'><i class='fab fa-whatsapp W'></i></a>"; ?>
                    <?php echo "<a class='Redes' href='".'https:/www.instagram.com/'.$Insta_Perfil."'><i class='fab fa-instagram I'></i></a>"; ?>
                    <?php echo "<a class='Redes' href='".'https://wa.me/'.$Twitter_Perfil."'><i class='fab fa-twitter T'></i></a>"; ?>  
                    <a href="#MenuPublicar" id="btn-Adicionar" class="btn-menu botaoA"><i class="fas fa-plus IconG"></i>Adicionar</a>
                </div>
                <?php
                if(isset($_SESSION['msg_pintura'])){
                    echo $_SESSION['msg_pintura'];
                    unset($_SESSION['msg_pintura']);
                }
                ?>
                <?php                
                if(isset($_SESSION['msg_deletar'])){
                    echo $_SESSION['msg_deletar'];
                    unset($_SESSION['msg_deletar']);
                }                
                ?>
            </div>    
                <div id="Cont-Master">                    
                    <form action="../assets/PHP/Publicar_Pintura.php" method="POST" enctype="multipart/form-data" id="MenuPublicar">
                        <h2>Publicar</h2>
                        <div id="MenuSepara">
                            <div id="MS-1">
                                <input type="text" minlength = "3" maxlength = "150" id="inputP_autor" class="InputPublic" name="NomeAltor" placeholder="Digite o nome do autor" required>
                                <input type="text" minlength = "3" maxlength = "50" id="inputP_Nome_Pintura" class="InputPublic" name="NomeFoto" placeholder="Digite o nome da pintura" required>
                                <input type="text" minlength = "3" maxlength = "150" id="InputPublicD" name="DescriçãoFoto" maxlength="220" placeholder="Digite a descrição da pintura" required>
                            </div>
                            <div id="MS-2">   
                                <input type="file" class="form-control-file" name="arquivo" id="SelectIMG" accept="image/*" required>  
                                <label for="SelectIMG" id="Select_img_public"><i class="fas fa-images"></i> Imagem</label>                                                 
                                <div id="divIMG">
                                    <img src="" id="IMGpublic">          
                                </div>    
                                <a href="#Pint_Completa"><button type="submit" id="btn_publicar" name="Publicar" class="btn-SP">Publicar</button></a>                    
                            </div>                                          
                        </div> 
                        <br>
                    </form>

                    <?php require '../assets/PHP/Pinturas_Usuario.php' ?>                                                                                      
                </div>                 
        </div>         
    </div>          
                    <!-- Scripts -->
    <script src="../assets/JS/Geral.js"></script>
    <script src="../assets/JS/Meu_Perfil.js"></script>
 </body>
</html> 