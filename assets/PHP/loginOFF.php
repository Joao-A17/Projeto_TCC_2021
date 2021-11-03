<?php
    session_start();
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header('Location: ../../pages/Login');
    $_SESSION['msg_apagar'] = "        
        <div id='msg_true'>
            <h1> Usuário Apagado! <i class='fas fa-smile-beam icon'></i></h1>            
        </div>         
        "; 
?>