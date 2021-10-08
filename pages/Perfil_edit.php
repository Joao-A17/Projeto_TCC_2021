<?php 
include '../assets/PHP/Conexao_Banco.php';
// Encontrar Logado
if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)){
  unset($_SESSION['email']);
  unset($_SESSION['senha']);
  header('Location: ./Login.php');   
}

$usuario_logado = $_SESSION['nome-user'];

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/styles/Geral.css">
    <link rel="stylesheet" href="../assets/styles/Perfil_edit.css"> 
    <link rel="stylesheet" href="../assets/styles/Menu_Modal_edit.css">
    <title id="Nome-Site">Perfil | Magic Paintings</title>              
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
                    </div>              
                    <div class="Info-Admin">
                        <div id="AreaPerfil">
                            <h1 id="Nome-Admin"><?php echo $usuario_logado ?></h1>
                            <p id="Desc-Admin">Mude a descrição e altere sua imagem</p>                                                        
                        </div>
                        <button type="button" class="btn-menu edp">Editar Perfil</button>                         
                    </div>
                </div>
                <form id="MenuModal_EditPerfil" action="../assets/PHP/alterPerfil.php" method="POST">
                    <div id="nav_menu">
                        <h2 id="TituloMenu">Menu Alterações</h2>
                    </div>
                    <input type="file" class="form-control-file" name="fotop" id="imgPerfil" accept="image/*">
                    <label for="imgPerfil" class="AlteraImg-Perfil">Alterar imagem<i style="margin-left: 10px;" class="fas fa-paint-brush"></i></label>
                    <div id="divND">
                        <input type="text" name="Nome-Perfil" id="InputNomeAdmin" class="InputP" maxlength="60" placeholder="Alterar o Nome"> 
                    <input type="submit" name="salvarP" id="BtnSP" value="Salvar">  
                        <input type="text" name="Desc-Perfil" id="InputDescAdmin" maxlength="60" placeholder="Alterar a Descrição">
                    </div> 
                    <div id="divRedesSociais">
                        <div id="LeftRedes">
                            <input type="text" name="telefone" class="InputP" placeholder="Digite o link do seu telefone">
                            <input type="text" name="facebook" class="InputP" placeholder="Digite o link do seu facebook">                            
                        </div>
                        <div id="RightRedes">                            
                            <input type="text" name="instagram" class="InputP" placeholder="Digite o link do seu instagram">
                            <input type="text" name="twitter" class="InputP" placeholder="Digite o link do seu twitter"> 
                        </div>                                            
                    </div>
                    <p> Exemplo do numero do telefone: wa.me/+5548999227431</p>                                                               
                </form>
                <h4 class="TextE">Envie uma mensagem para o pintor através:</h4>
                <a class="Redes" href="mailto:joaovictorca2004@gmail.com"><i class="fas fa-envelope E"></i></a>
                <a class="Redes" href="https://wa.me/+554899227431"><i class="fab fa-whatsapp W"></i></a>
                <a class="Redes" href="#"><i class="fab fa-facebook F"></i></a>
                <a class="Redes" href="#"><i class="fab fa-instagram I"></i></a>
                <a class="Redes" href="#"><i class="fab fa-twitter T"></i></a>  
                <a href="#MenuPublicar"><buttom id="btn-Adicionar" class="btn-menu botaoA"><i class="fas fa-plus IconG"></i>Adicionar</buttom></a>
            </div>    
                <div id="Cont-Master">

                    <?php require '../assets/PHP/listar_pinturas.php' ?>

                    <form action="../assets/PHP/Publicar_Pintura.php" method="POST" enctype="multipart/form-data" id="MenuPublicar">
                        <h2>Publicar</h2>
                        <div id="MenuSepara">
                            <div id="MS-1">
                                <input type="text" id="inputP_autor" class="InputPublic" name="NomeAltor" placeholder="Digite o nome do autor">
                                <input type="text" id="inputP_Nome_Pintura" class="InputPublic" name="NomeFoto" placeholder="Digite o nome da pintura">
                                <textarea id="InputPublicD" name="DescriçãoFoto" maxlength="220" placeholder="Digite a descrição da pintura" cols="30" rows="40"></textarea>                                      
                            </div>
                            <div id="MS-2">                               
                                <a href="#Pint_Completa"><button type="submit" id="btn-publicar" name="Publicar" class="btn-SP">Publicar</button></a>                   
                                <div id="divIMG">
                                    <img src="" id="IMGpublic">          
                                </div>          
                                <input type="file" class="form-control-file" name="arquivo" id="SelectIMG" accept="image/*">  
                                <label for="SelectIMG" id="Select_img_public">Selecionar Imagem</label>                
                            </div>                                          
                        </div> 
                        <br>
                    </form>
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
    <script src="../assets/JS/Perfil_edit.js"></script>
 </body>
</html> 