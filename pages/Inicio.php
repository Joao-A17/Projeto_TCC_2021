<?php
session_start();
if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)){
  unset($_SESSION['email']);
  unset($_SESSION['senha']);
  header('Location: ./Login.php');   
}

$email_logado = $_SESSION['email'];

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../assets/styles/Inicio.css">
    <link rel="stylesheet" href="../assets/styles/Menu.css">
    <link rel="stylesheet" href="../assets/styles/Geral.css">
    <title>Pinturas | Magics Painting</title>
</head>
<body>
  <nav class="MenuH">
    <a class="logo" href="#topo">Magics Painting</a>
    <div class="mobile-menu">
      <div class="line1"></div>
      <div class="line2"></div>
      <div class="line3"></div>
    </div>
    <ul class="nav-list">      
      <li><a class="menu-link" href="./Perfil_edit.php"><i class="fas fa-user"></i>  Perfil</a></li>
      <li><a class="menu-link" href="#info"><i class="fas fa-info-circle"></i>  Informações</a></li>
      <li><a class="menu-link" href="#pinturas"><i class="fas fa-paint-brush"></i>  Pinturas</a></li>
      <li><a class="menu-link" href="#desenvolvedores"><i class="fas fa-users"></i> Desenvolvedores</a></li>
      <li><a class="menu-link" href="#"><i class="fas fa-question-circle"></i>  Ajuda</a></li>
    </ul>
    <li><a href="../assets/PHP/loginOFF.php" id="btn-sair"><i style="margin-right: 15px;" class="fas fa-power-off Icon"></i>Sair</a></li>   
  </nav>
    
      
      <a href="#topo"><i class="fas fa-chevron-circle-up Seta-Up"></i></a>
      

      <section id="topo">
        <h1>Seja bem-vindo(a) <br><?php echo $email_logado ?><br> ao <br> Magics Painting</h1>
        <p>Compras e vendas de pinturas</p>
      </section>
      <section id="info">
        <h2>Informações</h2>
        <p class="info-P">Site feito para divulgações e compras de pinturas<br>
        Clique em Consultas nas imagens para negociar com o pintor</p>
        <div class="caixa-help"><p class="help">Se precisar de ajuda ou o site tenha o mau funcionamento <a href="./Help">Clique aqui</a></p></div>

        <div>
        </div>
      </section>
      <section id="pinturas">           <!-- AQUI VAI FICAR AS POSTAGENS RECENTES DAS PESSOAS -->
        <h2>Pinturas</h2>
        
        <div class="espaço"></div>

        <div class="PintArt">
          <a href="./Perfil_edit.php" class="linkPint1"><img id="Pintura01" class="ImgPint" src="../assets/IMAGES/Edits/Princesa-Elizabeth.png" alt="imgPint"></a>
          <div class="InfoPint">
            <div class="ConteudoInfo-1">          <!-- Conteudo ON -->
              <div class="User">
                <img id="Img-Usuario" src="../assets/IMAGES/img_settings/astronauta.jpg" alt="NomeUsuario">
                <h3 class="NomeUsuario">Pintor(a)</h3>
              </div>
              <p id="Nome-Pint">Nome da pintura</p>
              <a href="./Perfil_edit.php"><button id="Consultar" onclick="ConsutarImg()">Consultar</button></a>
            </div>
          </div>
        </div>

        <div class="PintArt">
          <a href="./Perfil_edit.php" class="linkPint2"><img id="Pintura02" class="ImgPint" src="../assets/IMAGES/Edits/Meliodafull.png" alt="imgPint"></a>
          <div class="InfoPint">
            <div class="ConteudoInfo-2">
              <div class="User">
                <img id="Img-Usuario" src="../assets/IMAGES/img_settings/astronauta.jpg" alt="NomeUsuario">
                <h3 class="NomeUsuario">Pintor(a)</h3>
              </div>
              <p id="Nome-Pint">Nome da pintura</p>
              <a href="./Perfil_edit.php"><button id="Consultar" onclick="ConsutarImg()">Consultar</button></a>
            </div>
          </div>
        </div>

        <div class="PintArt">
          <a href="./Perfil_edit.php" class="linkPint3"><img id="Pintura03" class="ImgPint" src="../assets/IMAGES/Edits/Tanjiro.png" alt="imgPint"></a>
          <div class="InfoPint">
            <div class="ConteudoInfo-3">
              <div class="User">
                <img id="Img-Usuario" src="../assets/IMAGES/img_settings/astronauta.jpg" alt="NomeUsuario">
                <h3 class="NomeUsuario">Pintor(a)</h3>
              </div>
              <p id="Nome-Pint">Nome da pintura</p>
              <a href="./Perfil_edit.php"><button id="Consultar" onclick="ConsutarImg()">Consultar</button></a>
            </div>
          </div>
        </div>

        <div class="espaço"></div>
      </section>

      <div class="espaço"></div>

      <footer id="desenvolvedores">
        <h2>Desenvolvedores</h2>
        
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