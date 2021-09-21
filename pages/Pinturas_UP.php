<?php 
session_start();

// Encontrar Logado
if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)){
  unset($_SESSION['email']);
  unset($_SESSION['senha']);
  header('Location: ./Login.php');   
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/styles/Geral.css">
    <link rel="stylesheet" href="../assets/styles/TP_Users.css">
    <title id="Nome-Site">Perfil | Magics Painting</title>              
</head>
<body>
    <nav class="Menu">
        <a href="./Pinturas.php" class="Logo">Magics Paintings</a>    
        <a class="btn-menu" onclick="Voltar()"><i class="fas fa-chevron-left IconG"></i>Voltar</a>
    </nav>

    <div class="container">
        <div class="Fundo">       
            <div class="ContAdmin">
                <div id="AdminForm">
                    <img id="Foto-Admin-U" src="https://img.freepik.com/vetores-gratis/astronauta-bonito-voando-no-espaco-dos-desenhos-animados-icone-ilustracao_138676-2702.jpg?size=338&ext=jpg&ga=GA1.2.2045703221.1627862400" alt="Astro">
                    <div class="Info-Admin">
                        <h1 id="Nome-Admin-U">Artista</h1>
                        <p id="Desc-Admin-U">Descrição do Artista</p>
                    </div>
                </div>
                <h4 class="TextE">Envie uma mensagem para o pintor através:</h4>
                <a class="Redes" href="mailto:joaovictorca2004@gmail.com"><i class="fas fa-envelope E"></i></a>
                <a class="Redes" href="https://wa.me/+554899227431"><i class="fab fa-whatsapp W"></i></a>
                <a class="Redes" href="#"><i class="fab fa-facebook F"></i></a>
                <a class="Redes" href="#"><i class="fab fa-instagram I"></i></a>
                <a class="Redes" href="#"><i class="fab fa-twitter T"></i></a>
            </div>    
                <div id="Cont-Master">
                    <div id="Pint-Completa1-U" class="Cont">
                        <div class="Fundo-Pint">
                            <img class="Pintura" src="../assets/IMAGES/Edits/Ban.png">
                        </div>                                          
                        <div class="Fundo-Desc">   
                            <h1 id="Nome-Pintura-U1" class="Nome-Pint">Ban</h1>
                            <p id="Desc-Pintura-U1" class="Desc-Pint">Ban「バン」 é um membro dos Sete Pecados Capitais, 
                                conhecido como o Pecado da Ganância da Raposa. 
                                Após o grupo se separar, Ban foi preso pelo grupo Presas Tortuosas na Prisão de Baste, 
                                mas escapou quando soube que Meliodas estava vivo à sua procura. Além de ser imortal, 
                                ele é conhecido por sua habilidade, Snatch.</p>
                        </div>
                    </div>
                </div>
        </div>                  
        <!-- Scripts -->
    <script src="../assets/JS/Geral.js"></script>
</body>
</html>

