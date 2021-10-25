<?php
include_once('./assets/PHP/Conexao_Banco.php');
if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)){
  unset($_SESSION['email']);
  unset($_SESSION['senha']);
}else{
  $usuario_logado = $_SESSION['nome-user'];
}


?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/styles/ajuda.css">
    <link rel="stylesheet" href="./assets/styles/Geral.css">
    <link rel="stylesheet" href="./assets/styles/UsuarioLogado.css">
    <title>Ajuda | Magic Paintings</title>
</head>
<body>            
      <?php  
      if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)){
        ?>
        <div id="nav_menu">
          <h2 id="TituloMenu">Magic Paintings</h2>
          <a class="menu-link" href="./pages/Inicio.php"><i class="fas fa-home"></i>   Inicio</a>  
        </div>         
        <?php
      }
      else{
        ?>
        <div id="nav_menu">
          <h2 id="TituloMenu">Magic Paintings</h2>
          <a class="menu-link" href="./pages/Inicio.php"><i class="fas fa-home"></i>   Inicio</a>  
        </div> 
        <div id="CardUser">
        <div id="Img_UserL">
          <?php
          // pegar a foto do usuario logado 

          $pasta = './assets/IMAGES/Foto_Perfil/'.$usuario_logado.'/';

          if (file_exists("$pasta")) {
              /* echo 'existe'; */
              $diretorio = dir($pasta);

              while($FP_Usuario = $diretorio->read()){
                  if($FP_Usuario != '.' && $FP_Usuario != '..'){                
                      ?>
                      
                      <?php echo "<a id='linkUser' href='./Meu_Perfil.php'><img src='".$pasta.$FP_Usuario."' id='Img-UsuarioL'></a>"; ?>           
                      
                      <?php
                  }    
              }
          }
          ?>                                         
          </div>
          <h3 id="Nome_User"><?php echo $usuario_logado ?></h3>
        </div>
        <?php
      }
    ?>
    <section id="Master">        
        <div id="container">
          <?php
          
          if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)){
          ?>
            <div class="card">
                <h2 id="T1">Dica para você</h2>
                <p id="T2">Relate ao lado oque você gostaria que nós 
                            mudássemos ou tire uma print e mostre o problema que encontruo 
                            com isso você vai nos ajudar bastante para um melhor funcionamento 
                            em nosso site.
                </p>
                <p id="T2">Vamos ajuda você no que precisar</p>
            </div>         
            <?php
          }else{
            ?>
            <div class="card">
                <h2 id="T1">Dica para você <?php echo $usuario_logado; ?></h2>
                <p id="T2">Relate ao lado oque você gostaria que nós 
                            mudássemos ou tire um print e mostre o problema que encontruo 
                            com isso você vai nos ajudar bastante para um melhor funcionamento 
                            em nosso site.
                </p>
                <p id="T2">Vamos ajuda você no que precisar</p>
            </div>  
            <?php
          }
            ?>
            <form action="./ajuda.html" method="post" enctype="media">
              <div class="card">
                <div id="e">
                  <h2 id="T1">Conte-nos</h2>
                  <p id="T2">Mande uma mensagem por aqui e caso deseja adicione uma imagem clique em adicionar imagem abaixo</p> 
                  <input type="text" name="mensagem" id="Input_mensagem" placeholder='Digite aqui...'>
                </div>
                <input type="submit" value="Enviar" name="btn_enviar" id="btn_enviar"> 
                <div id="divIMG">
                      <img src="" id="IMGpublic">          
                </div>          
                  <input type="file" class="form-control-file" name="arquivo" id="SelectIMG" accept="image/*">  
                  <label for="SelectIMG" id="Select_img_public">Adicionar imagem</label>  
              </div>             
            </form>
        </div>       
    </section>

    <footer id="desenvolvedores">
        <h2>Desenvolvedores</h2>
        
        <div id="desig">
          <div class="desen">
            <img class="img-P" src="./assets/IMAGES/img_settings/astronauta.jpg" alt="Isabella">
            <h3>João Victor</h3>
          </div>
          <p>Bla bla bla</p>
          <div class="social-media">
            <a href="#"><i class="fab fa-instagram Redes"></i></a>
            <a href="#"><i class="fab fa-facebook Redes"></i></a>
            <a href="https://github.com/Joao-A17"><i class="fab fa-github Redes"></i></a>
          </div>
        </div>
        <div id="desig">
          <div class="desen">
            <img class="img-P" src="./assets/IMAGES/img_settings/astronauta.jpg" alt="Isabella">
            <h3>Isabella Oliveira</h3>
          </div>
          <p>Bla bla bla</p>
          <div class="social-media">
            <a href="#"><i class="fab fa-instagram Redes"></i></a>
            <a href="#"><i class="fab fa-facebook Redes"></i></a>
            <a href="https://github.com/bellinha524"><i class="fab fa-github Redes"></i></a>
          </div>
        </div>
        <div id="desig">
          <div class="desen">
            <img class="img-P" src="./assets/IMAGES/img_settings/astronauta.jpg" alt="Isabella">
            <h3>Kauã Vieira</h3>
          </div>
          <p>Bla bla bla</p>
          <div class="social-media">
            <a href="#"><i class="fab fa-instagram Redes"></i></a>
            <a href="#"><i class="fab fa-facebook Redes"></i></a>
            <a href="https://github.com/kah66"><i class="fab fa-github Redes"></i></a>
          </div>
        </div>
      </footer>
      <script src="./assets/JS/ajuda.js"></script>
</body>
</html>