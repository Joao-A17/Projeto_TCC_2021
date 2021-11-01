<?php
require '../assets/PHP/Conexao_Banco.php';
require '../assets/PHP/dados_perfil.php';
$usuario_logado = $_SESSION['nome-user'];

if(!isset($FotoP)){
    header('Location: ../assets/PHP/loginOFF.php');
    $_SESSION['msg_update'] = "        
        <div id='msg_true'>
            <h1> Perfil Alterado! <i class='fas fa-smile-beam icon'></i></h1>
            <br>
            <h1> Faça Login Novamente </h1>
        </div>         
    "; 
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/styles/Geral.css">
    <link rel="stylesheet" href="../assets/styles/editar_usuario.css">
    <title>Editar Perfil | <?php echo $usuario_logado ?></title>
</head>
<body>
    <div id="nav_menu">
        <h2 id="TituloMenu">MAGIC PAINTINGS</h2>
        <a class="menu-link" href="./Inicio.php"><i class="fas fa-home"></i>   Inicio</a>  
        <a class="menu-link" href="./Meu_Perfil.php"><i class="fas fa-user"></i>   Perfil</a>  
    </div> 
    <section id='forms_1_2'>
        <div id='form1'>
            <form action="../assets/PHP/Alterar_FP.php" method="POST" enctype="multipart/form-data" id="divIMG">
                <input type="submit" style='display: none' id='btn_SI' value="Salvar imagem">
                <input style='display: none' type="text" name="nome_fp" value=<?php echo $FotoP?> >     
                <?php 
                $pasta = '../assets/IMAGES/Foto_Perfil/'.$usuario_logado.'/';    
                echo "<img src='".$pasta.$FotoP."' id='pintura_etapa'>"; ?> 
                <?php echo "<input type='text' style='display: none' class='Inputs' value='".$usuario_logado."' placeholder='Digite Aqui...' required>"; ?>
                <input type="file" class="form-control-file" name="arquivo" id="inputIMG" accept="image/*">
                <h2 id="TituloMenu"><?php echo $usuario_logado; ?></h2>         
                <label for="inputIMG" id="Select_img_public">Tracar Imagem</label> 
            </form> 

            <form id="MenuModal_EditPerfil" action="../assets/PHP/Alterar_Perfil.php" method="POST">   
                <input type="submit" name="btn_salvar" value="Salvar" id="btn_salvar">                               
                <?php
                if(isset($_SESSION['msg_update'])){
                    echo $_SESSION['msg_update'];
                    unset($_SESSION['msg_update']);
                }                          
                ?> 
                <div id="dividir">                                                          
                    <div id="INPUTS">                     
                        <div id="Nome_Desc">
                            <div id="div_1">
                                <div class="menu-box">
                                    <label for="nome_usuario" class="label">Nome do usuario</label>
                                    <?php echo "<input type='text' name='nome_usuario' id='nome_usuario' class='Inputs' value='".$usuario_logado."' placeholder='Digite Aqui...' required>"; ?>
                                </div>
                                <div class="menu-box">
                                    <label for="sobrenome" class="label">Sobrenome</label>
                                    <?php echo "<input type='text' name='sobrenome' id='sobrenome' class='Inputs' value='".$Sobrenome."' placeholder='Digite Aqui...' required>"; ?>
                                </div>
                            </div>
                            <div id="div_2">
                                <div class="menu-box">
                                    <label for="Email" class="label">Email</label>
                                    <?php echo "<input type='email' name='Email' id='Email' class='Inputs' value='".$Email."' placeholder='Digite Aqui...' required>"; ?>
                                </div>
                                <div class="menu-box">
                                    <label for="Senha" class="label">Senha</label>
                                    <i class="far fa-eye Isenha"></i>                            
                                    <?php echo "<input type='password' name='Senha' id='senha' class='Inputs' value='".$Senha."' placeholder='Digite Aqui...' required>"; ?>
                                </div>
                            </div>
                            <div class="menu-box">
                                <label for="desc_usuario" class="label">Nova descrição do perfil</label>
                                <?php echo "<textarea name='desc_usuario' id='desc_usuario' style='resize: none;' cols='100' rows='10' minlength = '3' maxlength = '150'  maxlength='220' placeholder='Digite Aqui...'>".$Desc_Perfil."</textarea>"; ?>
                            </div>
                            <div id="links">
                                <div class="menu-box">
                                    <label for="inst_usuario" style='color: var(--corL);' class="label">Link do instagram</label>
                                    <?php echo "<input type='text' name='inst_usuario' id='inst_usuario' class='Inputs' value='".$Insta_Perfil."' placeholder='Digite Aqui...' required>"; ?>
                                </div>
                                <div class="menu-box">
                                    <label for="twit_usuario" style='color: var(--corL);' class="label">Link do twitter</label>
                                    <?php echo "<input type='text' name='twit_usuario' id='twit_usuario' class='Inputs' value='".$Twitter_Perfil."' placeholder='Digite Aqui...' required>"; ?>
                                </div>
                                <div class="menu-box">
                                    <label for="tele_usuario" style='color: var(--corL);' class="label">Numero do telefone</label>
                                    <?php echo "<input type='tel' name='tele_usuario' id='tele_usuario' class='Inputs' value='".$Telefone_Perfil."' placeholder='Digite Aqui...' required>"; ?>
                                </div>
                            </div>
                        </div>               
                    </div> 
                </div>                                                                                        
            </form> 
        </div>
        <div id='form2'>
            <form action="./apagar_conta.php" method="post" id="form_excluir_conta">   
                <input style='display: none;' type="text" name="Input_usuario" value=<?php echo $usuario_logado ?> required>
                <input style='display: none;' type="number" name="Input_id_usuario" value=<?php echo $IdUser ?> required>
                <input type='submit' id='btn_excluir_conta'name='btn_excluir_conta' value='Apagar Conta'>
            </form>            
        </div>  
    </section>    
      
    <script>
        /* trocar a imagem que o usuario pegou */
        var btn_imagem = document.getElementById('Select_img_public');        
        var btn_select = document.getElementById("inputIMG");
        var Pintura = document.getElementById("pintura_etapa");
        var btn_SI = document.getElementById("btn_SI");
        var btn_salvar = document.getElementById('btn_salvar');

        console.log('eu existo no JS');
        btn_select.addEventListener('change', function() {
            
            if(btn_select.files.length < 0){
                return;
            }
            let readerPinturaSelect = new FileReader();
            
            readerPinturaSelect.onload = () => {
                Pintura.src = readerPinturaSelect.result;                
            }

            readerPinturaSelect.readAsDataURL(btn_select.files[0]); 
            btn_SI.click();                                                               
        });   

    </script>
    <script src="../assets/JS/Ver_Senha.js"></script>
</body>
</html>