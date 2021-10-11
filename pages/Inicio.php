<?php
include_once('../assets/PHP/Conexao_Banco.php');



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
    <link rel="stylesheet" href="../assets/styles/Tela_Inicio.css">
    <link rel="stylesheet" href="../assets/styles/UsuarioLogado.css">
    <link rel="stylesheet" href="../assets/styles/Menu.css">
    <link rel="stylesheet" href="../assets/styles/Geral.css">
    <title>Inicio | Magic Paintings</title>
</head>
<body>
  <nav class="MenuH">
    <a class="logo" href="#topo">Magic Paintings</a>
    <div class="mobile-menu">
      <div class="line1"></div>
      <div class="line2"></div>
      <div class="line3"></div>
    </div>
    <ul class="nav-list">      
      <li><a class="menu-link" href="./Meu_Perfil.php"><i class="fas fa-user"></i> Meu Perfil</a></li>
      <li><a class="menu-link" href="#"><i class="fas fa-question-circle"></i>  Ajuda</a></li>
      <li><a href="../assets/PHP/loginOFF.php" id="btn-sair"><i style="margin-right: 15px;" class="fas fa-power-off Icon"></i>Sair</a></li>
    </ul>       
  </nav>
      
        <div id="CardUser">
          <div id="Img_UserL">
            <?php
            // pegar a foto do usuario logado 

            $pasta = '../assets/IMAGES/Foto_Perfil/'.$usuario_logado.'/';

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
      
      

      <section id="topo">
        <h1>Seja bem-vindo(a) <br><h1 class="usuario_logado"><?php echo $usuario_logado ?></h1><br><h1> ao </h1><br><h1> Magic Paintings</h1>
        <p>Exposição e vendas de artes</p>
      </section>
      <section id="info">
        <h2><i class="fas fa-info-circle"></i>  Informações</h2>
        <p class="info-P">Site feito para divulgações e compras de pinturas<br>
        Clique em Consultas nas imagens para negociar com o pintor</p>
        <div class="caixa-help"><p class="help">Se precisar de ajuda ou o site tenha o mau funcionamento <a href="./Help">Clique aqui</a></p></div>

        <div>
        </div>
      </section>
      <section id="pinturas">           <!-- AQUI VAI FICAR AS POSTAGENS RECENTES DAS PESSOAS -->
        <h2><i class="fas fa-paint-brush"></i>  Pintores</h2>
        
        <div class="espaço"></div>
        <div class='fileira'>
          <?php
          $pegarUsuarios = "SELECT * FROM usuarios";
          if($resultado_pegarUsuarios = mysqli_query($conexao,$pegarUsuarios)){
            $nomeUser = array();
            $IdUser = array();
            $i = 0;
            while($registro = mysqli_fetch_assoc($resultado_pegarUsuarios)){
              $nomeUser[$i] = $registro['nome'];
              $IdUser[$i] = $registro['id'];
              ?>       
              
              <div class="PintArt">           
                <!-- Lugar que ficava Ultima Pintura do artista -->
                <div class="InfoPint">
                  <div class="ConteudoInfo-1">
                    <div class="User">
                      <?php 
                      $pasta = '../assets/IMAGES/Foto_Perfil/'.$nomeUser[$i].'/';
                      if (file_exists("$pasta")) {
                          $diretorio = dir($pasta);

                          while($FP_OutroUsuario = $diretorio->read()){
                              if($FP_OutroUsuario != '.' && $FP_OutroUsuario != '..'){                
                                
                                echo "<img id='Img-Usuario' src='".$pasta.$FP_OutroUsuario."' alt=".$nomeUser[$i].">";
                              
                              }    
                          }
                      }                      
                      ?>             
                      <h3 class="NomeUsuario"><?php echo $nomeUser[$i]?></h3>
                    </div>
                  <p id="Info_Pintor">Veja mais sobre esse perfil</p>
                  <form action="./Perfil.php" method="GET">
                    <input style="display: none;" type="text" name="outro_usuario" id="outro_usuario" value=<?php echo $nomeUser[$i]?>>                  
                    <button id="Consultar" onclick="ConsutarImg()">Consultar</button>
                  </form>
                  </div>
                </div>
              </div>

              <?php

            }
          }                
          ?>

        </div>

        <div class="espaço"></div>
      </section>

      <div class="espaço"></div>

      <footer id="desenvolvedores">
        <h2><i class="fas fa-users"></i>  Desenvolvedores</h2>
        
        <div id="desig">
          <img class="img-P" src="../assets/IMAGES/img_settings/astronauta.jpg" alt="João">
          <h3>João Victor</h3>
          <p>Bla bla bla</p>
          <div class="social-media">
            <a href="#"><i class="fab fa-instagram Redes"></i></a>
            <a href="#"><i class="fab fa-facebook Redes"></i></a>
            <a href="https://github.com/Joao-A17"><i class="fab fa-github Redes"></i></a>
          </div>
        </div>
        <div id="desig">
          <div class="desen">
            <img class="img-P" src="../assets/IMAGES/img_settings/astronauta.jpg" alt="Isabella">
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
          <img class="img-P" src="../assets/IMAGES/img_settings/astronauta.jpg" alt="Kauã">
          <h3>Kauã Vieria</h3>
          <p>Bla bla bla</p>
          <div class="social-media">
            <a href="#"><i class="fab fa-instagram Redes"></i></a>
            <a href="#"><i class="fab fa-facebook Redes"></i></a>
            <a href="https://github.com/kah66"><i class="fab fa-github Redes"></i></a>
          </div>
        </div>
      </footer>
                    <!--   Scripts   -->
    <script src="../assets/JS/Menu.js"></script>
    <script src="../assets/JS/Geral.js"></script>
</body>
</html>