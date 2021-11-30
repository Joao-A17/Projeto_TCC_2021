<?php
include_once('../assets/PHP/Conexao_Banco.php');
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
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.2.3/jquery.min.js"></script>
    <link rel="stylesheet" href="../assets/styles/UsuarioLogado.css">
    <link rel="stylesheet" href="../assets/styles/Geral.css">
    <link rel="stylesheet" href="../assets/styles/Menu.css">
    <link rel="stylesheet" href="../assets/styles/sobre.css">
    <title>Sobre | Magic Paintings</title>
</head>
<body>
  <?php  
    if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)){
      ?>
      <nav class="MenuH">
        <h1 class="logo">Magic Paintings</h1>
        <ul class="nav-list">
            <li><a class="menu-link" href="../index"><i class="fas fa-home"></i>   Inicio</a></li>
            <li><a class="menu-link" href="../ajuda"><i class="fas fa-question-circle Icon"></i>  Ajuda</a></li>
            <li><a class="menu-link" href="./Login"><i class="fas fa-power-off Icon"></i>   Entrar</a></li>
            <li><a class="menu-link" href="./Cadastro"><i class="fas fa-user Icon"></i>   Cadastre-se</a></li>
        </ul>
      </nav>      
      <?php
    }else{
      ?>
      <nav class="MenuH">
        <h1 class="logo">Magic Paintings</h1>
        <ul class="nav-list">
            <li><a class="menu-link" href="./Inicio.php"><i class="fas fa-home"></i>   Inicio</a></li>
            <li><a class="menu-link" href="../ajuda.php"><i class="fas fa-question-circle Icon"></i>  Ajuda</a></li>
        </ul>
      </nav>
      <div id="CardUser">
        <div id="Img_UserL">
          <?php
          // pegar a foto do usuario logado 

          $pasta = '../assets/IMAGES/Foto_Perfil/' . $usuario_logado . '/';

          if (file_exists("$pasta")) {
            $diretorio = dir($pasta);
            while ($FP_Usuario = $diretorio->read()) {
              if ($FP_Usuario != '.' && $FP_Usuario != '..') {                  
              echo "<img src='" . $pasta . $FP_Usuario . "' id='Img-UsuarioL'>";
              }
            }
          }
          ?>
        <h3 id="Nome_User"><?php echo $usuario_logado ?></h3>
        </div>
        <div id="menu_usuario">
          <a class="menuU-link" href="./Meu_Perfil.php"><i class="fas fa-user "></i>    Meu perfil</a>
          <a class="menuU-link" href="./editar_perfil.php"><i class="fas fa-user-edit "></i>    Editar perfil</a>
          <a class="menuU-link" href="../assets/PHP/loginOFF.php"><i class="fas fa-power-off "></i>    Sair</a>
        </div>
      </div>
      <?php

    }
    ?>  
  <section id="Master">
    <div id="container">
      <div class="card">
          <h2 id="T1">Quem Somos?</h2>
          <p id="T2">Somos os alunos do Anne Gualberto do curso técnico de informática</p>
      </div>
      <div class="card">
          <h2 id="T1">Sobre o site</h2>
          <p id="T2">O site é um desenvolvimento de protótipo de website, cuja finalidade é exibir e vender arte</p>
      </div> 
    </div>       
  </section>
  
  <footer id="desenvolvedores">
    <h2><i class="fas fa-users"></i> Desenvolvedores</h2>
    <div id="desig">
      <img class="img-P" src="../assets/IMAGES/img_settings/K.jpg" alt="Kauã">
      <h3>Kauã Vieira</h3>
      <div class="social-media">
        <a href="#"><i class="fab fa-instagram Redes I"></i></a>
        <a href="#"><i class="fab fa-twitter Redes T"></i></a>
        <a href="https://github.com/kah66"><i class="fab fa-github Redes G"></i></a>
      </div>
    </div>
    <div id="desig">
      <div class="desen">
        <img class="img-P" src="../assets/IMAGES/img_settings/astronauta.jpg" alt="Isabella">
        <h3>Isabella Oliveira</h3>
      </div>
      <div class="social-media">
        <a href="#"><i class="fab fa-instagram Redes I"></i></a>
        <a href="#"><i class="fab fa-twitter Redes T"></i></a>
        <a href="https://github.com/bellinha524"><i class="fab fa-github Redes G"></i></a>
      </div>
    </div>
    <div id="desig">
      <img class="img-P" src="../assets/IMAGES/img_settings/J.jpg" alt="João">
      <h3>João Victor</h3>
      <div class="social-media">
        <a href="#"><i class="fab fa-instagram Redes I"></i></a>
        <a href="#"><i class="fab fa-twitter Redes T"></i></a>
        <a href="https://github.com/Joao-A17"><i class="fab fa-github Redes G"></i></a>
      </div>
    </div>
  </footer>
  <!--     Script     -->
  <script src="../assets/JS/menuH_usuario.js"></script>
</body>
</html>