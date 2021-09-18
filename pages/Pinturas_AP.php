<?php


if(isset($_FILES['arquivo'])){

    include_once("../assets/PHP/Conexao_Banco.php");    
    $Autor = filter_input(INPUT_POST, 'NomeAltor');
    $NomeFoto = filter_input(INPUT_POST, 'NomeFoto');
    $DescriçãoFoto = filter_input(INPUT_POST, 'DescriçãoFoto');
    $arquivoFoto = strtolower(pathinfo($_FILES['arquivo']['name'], PATHINFO_EXTENSION));
    $novo_nome = $NomeFoto.'.'.$arquivoFoto;
    $diretorio = "../assets/IMAGES/Fotos/";

    move_uploaded_file($_FILES['arquivo']['tmp_name'], $diretorio.$novo_nome);
    
    $Enviar_sql = "INSERT INTO pinturas (Autor, Nome da Foto, Descrição da foto, Imagem, Criado) VALUES ('$Autor', '$NomeFoto', '$DescriçãoFoto', '$arquivoFoto', NOW())";        
    if($conexao->query($Enviar_sql)){
        echo 'Sim';
    }else{
        echo 'Não';
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
    <link rel="stylesheet" href="../assets/styles/TP_Admin.css"> 
    <link rel="stylesheet" href="../assets/styles/Menu_Modal_edit.css">
    <title id="Nome-Site">Perfil | Magics Paintings</title>              
</head>
<body>
    <nav class="Menu">
        <a href="./Pinturas.php" class="Logo">Magics Paintings</a>            
        <a class="btn-menu" onclick="Voltar()"><i class="fas fa-chevron-left IconG"></i>Voltar</a>
    </nav>

    <div class="container">
        <div class="Fundo">       
            <div class="ContAdmin">         <!-- Foto tem que ser menor que 338 x 338 -->
                <div id="AdminForm">
                    <div id="divIMGAdmin">
                        <img class="Foto-Admin" src="https://img.freepik.com/vetores-gratis/astronauta-bonito-voando-no-espaco-dos-desenhos-animados-icone-ilustracao_138676-2702.jpg?size=338&amp;ext=jpg&amp;ga=GA1.2.2045703221.1627862400">   
                    </div>              
                    <div class="Info-Admin">
                        <div id="AreaPerfil">
                            <h1 id="Nome-Admin">Robson</h1>
                            <p id="Desc-Admin">Eu sou o Robson seu grande amigo e companheiro.</p>                                                        
                        </div>
                        <button type="button" class="btn-menu edp">Editar Perfil</button>                         
                    </div>
                </div>
                <div id="MenuModal_EditPerfil">
                    <div id="nav_menu">
                        <h2 id="TituloMenu">Menu Alterações</h2>
                        <button type="submit" name="salvar" id="BtnSP">Salvar</button>
                        <button class="btn-menu" id="btn_cancelar">Cancelar</button>
                    </div>
                    <input type="file" class="form-control-file" name="imgPerfil" id="imgPerfil" accept="image/*">
                    <label for="imgPerfil" class="AlteraImg-Perfil">Alterar imagem<i style="margin-left: 10px;" class="fas fa-paint-brush"></i></label>   
                    <div id="divND">
                        <input type="text" id="InputNomeAdmin" class="InputP" maxlength="60" placeholder="Alterar o Nome">
                        <input type="text" name="InputDescAdmin" id="InputDescAdmin" maxlength="60" placeholder="Alterar a Descrição">
                    </div> 
                    <div id="divRedesSociais">
                        <div id="LeftRedes">
                            <input type="text" name="telefone" class="InputP" placeholder="Digite o link do seu telefone">
                            <input type="text" name="facebook" class="InputP" placeholder="Digite o link do seu facebook">                            
                        </div>
                        <div id="RightRedes">                            
                            <input type="text" name="instagram" class="InputP" placeholder="Digite o link do seu instagram">
                            <input type="text" name="twitter" class="InputP" placeholder="Digite o link do seu twitter"> 
                        </div>                                            
                    </div>
                    <p> Exemplo do numero do telefone: wa.me/+5548999227431</p>                                                               
                </div>
                <h4 class="TextE">Envie uma mensagem para o pintor atrévez:</h4>
                <a class="Redes" href="mailto:joaovictorca2004@gmail.com"><i class="fas fa-envelope E"></i></a>
                <a class="Redes" href="https://wa.me/+554899227431"><i class="fab fa-whatsapp W"></i></a>
                <a class="Redes" href="#"><i class="fab fa-facebook F"></i></a>
                <a class="Redes" href="#"><i class="fab fa-instagram I"></i></a>
                <a class="Redes" href="#"><i class="fab fa-twitter T"></i></a>  
                <a href="#MenuPublicar"><buttom id="btn-Adicionar" class="btn-menu botaoA"><i class="fas fa-plus IconG"></i>Adicionar</buttom></a>
            </div>    
                <div id="Cont-Master">
                    <form action="./Pinturas_AP.php" method="POST" enctype="multipart/form-data" id="MenuPublicar">
                        <h2>Publicar</h2>
                        <div id="MenuSepara">
                            <div id="MS-1">
                                <input type="text" id="inputP_autor" class="InputPublic" name="NomeAltor" placeholder="Digite o nome do autor">
                                <input type="text" id="inputP_Nome_Pintura" class="InputPublic" name="NomeFoto" placeholder="Digite o nome da pintura">
                                <textarea id="InputPublicD" name="DescriçãoFoto" placeholder="Digite a descrição da pintura" cols="30" rows="40"></textarea>                                      
                            </div>
                            <div id="MS-2">                               
                                <a href="#Pint_Completa"><button type="submit" id="btn-publicar" name="Publicar" class="btn-SP">Publicar</button></a>                   
                                <div id="divIMG">
                                    <img src="" id="IMGpublic">          
                                </div>          
                                <input type="file" class="form-control-file" name="arquivo" id="SelectIMG" accept="image/*">  
                                <label for="SelectIMG" id="Select_img_public">Selecionar Imagem</label>                
                            </div>                                          
                        </div> 
                        <br>
                    </form>                            
            </div>                  
        </div>         
    </div>          
                    <!-- Scripts -->
    <script src="../assets/JS/Geral.js"></script>
    <script src="../assets/JS/TP_Admin.js"></script>
 </body>
</html> 