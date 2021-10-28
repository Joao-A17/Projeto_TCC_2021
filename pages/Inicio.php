<?php
include_once('../assets/PHP/Conexao_Banco.php');

$usuario_logado = $_SESSION['nome-user'];

if ((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)) {
  unset($_SESSION['email']);
  unset($_SESSION['senha']);
  header('Location: ./Login.php');
}

$pasta_pintura_do_usuario = '../assets/IMAGES/Pinturas/' . $usuario_logado . '/';

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
      <li><a class="menu-link" href="../ajuda.php"><i class="fas fa-question-circle"></i> Ajuda</a></li>
      <li><a class="menu-link" href="#desenvolvedores"><i class="fas fa-users"></i> Desenvolvedores</a></li>
      <li><a href="../assets/PHP/loginOFF.php" id="btn-sair"><i style="margin-right: 15px;" class="fas fa-power-off Icon"></i>Sair</a></li>
    </ul>
  </nav>

  <div id="CardUser">
    <div id="Img_UserL">
      <?php
      // pegar a foto do usuario logado 

      $pasta = '../assets/IMAGES/Foto_Perfil/' . $usuario_logado . '/';

      if (file_exists("$pasta")) {
        /* echo 'existe'; */
        $diretorio = dir($pasta);

        while ($FP_Usuario = $diretorio->read()) {
          if ($FP_Usuario != '.' && $FP_Usuario != '..') {
      ?>

            <?php echo "<img src='" . $pasta . $FP_Usuario . "' id='Img-UsuarioL'>"; ?>

      <?php
          }
        }
      }
      ?>
    </div>
    <h3 id="Nome_User"><?php echo $usuario_logado ?></h3>
    <i class="fas fa-bars menu_usuario"></i>
    <div id="menu_usuario">
      <ul class="list_menuU">
        <li><a class="menuU-link" href="./Meu_Perfil.php">Meu perfil</a></li>
        <li><a class="menuU-link" href="./editar_perfil.php">Editar perfil</a></li>
        <li><a class="menuU-link" href="../assets/PHP/loginOFF.php">Sair</a></li>
      </ul>
    </div>
  </div>



  <?php

  if (!file_exists("$pasta_pintura_do_usuario")) {

  ?>
    <section id="topo">
      <div class="espaço"></div>
      <h1>Bem-vindo(a)</h1>
      <h2 class='usuario_logado'><?php echo $usuario_logado ?></h2>
      <h1> ao </h1>
      <h1> Magic Paintings</h1>
      <p>Exposição e vendas de artes</p>
    </section>
  <?php
  }
  ?>

  <section id="info">
    <h2><i class="fas fa-info-circle"></i> Informações</h2>
    <p class="info-P">Site feito para divulgações e compras de pinturas<br>
      Clique em Ver Mais para entrar no perfil do pintor</p>
    <div class="caixa-help">
      <p class="help">Se precisar de ajuda ou o site tenha o mau funcionamento <a href="../ajuda.php">Clique aqui</a></p>
    </div>
  </section>


  <section id="pinturas">
    <h2><i class="fas fa-paint-brush"></i> Pinturas</h2>
    <div class="espaço"></div>
    <div class='fileira'>
      <?php

      require '../assets/PHP/todas_pinturas.php' // AQUI VAI FICAR AS POSTAGENS RECENTES DAS PESSOAS 

      ?>
    </div>

    <div class="espaço"></div>
  </section>

  <div class="espaço"></div>

  <div id="divVermais">
    <i class="fas fa-sort-up Icon_UP"></i>
    <a href="" class='menu-link Recarregar'>Recarregar</a>
  </div>

  <script>
    var Recarregar = document.querySelector('.Recarregar');
    var Icon_UP = document.querySelector('.Icon_UP');

    Icon_UP.addEventListener('click', function() {
      Recarregar.click();
    });

    Recarregar.addEventListener('click', function() {
      location.reload();
    })
  </script>

  <footer id="desenvolvedores">
    <h2><i class="fas fa-users"></i> Desenvolvedores</h2>

    <div id="desig">
      <img class="img-P" src="../assets/IMAGES/img_settings/astronauta.jpg" alt="João">
      <h3>João Victor</h3>
      <p>Bla bla bla</p>
      <div class="social-media">
        <a href="#"><i class="fab fa-instagram Redes I"></i></a>
        <a href="#"><i class="fab fa-twitter Redes T"></i></a>
        <a href="https://github.com/Joao-A17"><i class="fab fa-github Redes G"></i></a>
      </div>
    </div>
    <div id="desig">
      <div class="desen">
        <img class="img-P" src="../assets/IMAGES/img_settings/astronauta.jpg" alt="Isabella">
        <h3>Isabella Oliveira</h3>
      </div>
      <p>Bla bla bla</p>
      <div class="social-media">
        <a href="#"><i class="fab fa-instagram Redes I"></i></a>
        <a href="#"><i class="fab fa-twitter Redes T"></i></a>
        <a href="https://github.com/bellinha524"><i class="fab fa-github Redes G"></i></a>
      </div>
    </div>
    <div id="desig">
      <img class="img-P" src="../assets/IMAGES/img_settings/astronauta.jpg" alt="Kauã">
      <h3>Kauã Vieira</h3>
      <p>Bla bla bla</p>
      <div class="social-media">
        <a href="#"><i class="fab fa-instagram Redes I"></i></a>
        <a href="#"><i class="fab fa-twitter Redes T"></i></a>
        <a href="https://github.com/kah66"><i class="fab fa-github Redes G"></i></a>
      </div>
    </div>
  </footer>
  <!--   Scripts   -->
  <script src="../assets/JS/Menu.js"></script>
  <script src="../assets/JS/Geral.js"></script>
</body>

</html>