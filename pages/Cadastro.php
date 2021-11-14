<?php 
session_start();

if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)){
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
}
else{    
    $usuario_logado = $_SESSION['nome-user'];
    if(isset($usuario_logado)){
    header('Location: ./Inicio');
    }
}

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/styles/Geral.css">   
    <link rel="stylesheet" href="../assets/styles/Cadastro.css">
    <title>Cadastro | Magic Paintings</title>
</head>
<body>
    <form action="../assets/PHP/Cadastrar.php" method="POST" id="Form-Card"> 
        <div id="card_a">
            <i class="fas fa-user-plus Icon"></i>
            <h2>Cadastro</h2>
            <h2>Magic Paintings</h2>
            <p>Não está conseguindo cadastrar? <a class="menu-link" href="../ajuda"><i class="fas fa-question-circle"></i> Ajuda</a></p>
            <?php
            if(isset($_SESSION['msg_cad'])){
                echo $_SESSION['msg_cad'];
                unset($_SESSION['msg_cad']);
            }
            ?>  
        </div>
        <div id="card_b">
            <div id="Registros">
                <div id="e">
                    <div class="menu_input">
                        <input class="Input" minlength = "3" maxlength = "20" type="text" id="nome" name="nome" placeholder="Nome de usuário" pattern="[a-z-0-9]+" required>
                    </div>
                    <div class="menu_input">
                        <input class="Input" minlength = "3" maxlength = "220" type="text" id="nome_completo" name="nome_completo" placeholder="Nome completo" required>
                    </div>
                    <div class="menu_input">
                        <input class="Input" minlength = "3" maxlength = "220" type="email" id="email" name="email" placeholder="Email" required>
                    </div>
                </div>
                <div id="d">            
                    <div class="menu_input">
                        <i class="far fa-eye Isenha"></i>
                        <input class="Input" minlength = "3" maxlength = "220" type="password" name="password" id="senha" placeholder="Senha" required>
                    </div>
                    <div class="menu_input">
                        <input class="Input" minlength = "3" maxlength="20" type="number" id="telefone" name="telefone" pattern="[0-9]+$" placeholder="Telefone" required>
                    </div>
                    <div class="menu_input">
                        <p>Já tem uma conta? <a href="./Login">Entrar</a></p>
                        <input type="submit" id="botao" name="submit" value="Cadastrar">              
                    </div>  
                </div>                  
            </div>   
        </div>        
    </form>
    <script>
        var input_nome = document.getElementById('nome');
        input_nome.addEventListener('keyup', (ev) => {
            const input = ev.target;
            input.value = input.value.toLowerCase();
        });
    </script>
    <script src="../assets/JS/Ver_Senha.js"></script>
</body>
</html>