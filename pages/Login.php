<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/styles/Login.css">
    <link rel="stylesheet" href="../assets/styles/Geral.css">    
    <title>Login | Magic Paintings</title>
</head>
<body>
    <div class="container">
        <form class="form" action="../assets/PHP/Conexao_Login.php" method="POST">
            <div class="card">
                <div class="card-top">
                    <i class="fas fa-user User"></i>
                    <h2 class="login">Login</h2>
                </div>
                <div class="card-group">
                    <input class="Inputs" type="text" name="nome-user" id="email" placeholder="Nome do Usuário" required>
                    <input class="Inputs" type="password" name="senha" id="password" placeholder="Senha" required>
                    <input id="entrar" type="submit" name="submit" value="Entrar" />
                    <p>Não possui um cadastro? <a href="./Cadastro.php">cadastre-se</a></p>                    
                </div>
            </div>
        </form>
    </div>
</body>
</html>