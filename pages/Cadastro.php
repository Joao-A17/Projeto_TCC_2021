<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/styles/Geral.css">   
    <link rel="stylesheet" href="../assets/styles/Menu.css">
    <link rel="stylesheet" href="../assets/styles/Cadastro.css">
    <title>Cadastro | Magics Paintings</title>
</head>
<body>
    <div id="divDesign">
        <h2 class="logo">Cadastro | Magics Paintings</h2>
        <div class="fancy-border"></div>
        <div class="fancy-border"></div>
    </div>
    <div id="DivForm">
        <form name="FormCadastro" id="FormCadastro" action="../assets/PHP/processa_cadastro.php" method="POST"> 
            <div id="Form-Card">
                <i class="fas fa-user-plus Icon"></i>
                <h2>Cadastro</h2>
                <div id="Registros">
                    <div class="Form-I">
                        <input class="Input" type="text" id="nome" name="nome" placeholder="Nome" require>
                    </div>
                    <div class="Form-I">
                        <input class="Input" type="text" id="sobrenome" name="sobrenome" placeholder="Sobrenome" require>
                    </div>
                    <div class="Form-I">
                        <input class="Input" type="email" id="email" name="email" placeholder="E-mail" require>
                    </div>
                    <div class="Form-I">
                        <input class="Input" type="password" name="password" id="password" placeholder="Senha" require>
                    </div>
                    <div class="Form-I">
                        <input class="Input" type="tel" id="telefone" name="telefone" placeholder="Telefone" require>
                    </div>
                    <div class="Form-I">
                        <p>Já tem uma conta? <a href="./Login.php">Entrar</a></p>
                        <input type="submit" id="botao" name="submit" value="Cadastrar">               
                    </div>                    
                </div>
            </div>
        </form>
    </div>   
</body>
</html>