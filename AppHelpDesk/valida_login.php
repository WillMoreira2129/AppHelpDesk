<?php

session_start();

$usuario_autenticator=false;



foreach($usuarios_app as $user) {
    if($user['email']==$_GET['email'] && $user['senha']==$_GET['senha']) {
        $usuario_autenticator=true;
        
        $_SESSION['autenticado'];
            
    }

    }

    if($usuario_autenticator) {

        echo "Usuário autenticado";
        $_SESSION['autenticado'] = 'SIM';
        
        } else {
            $_SESSION['autenticado'] = 'NAO';
            header(header: 'Location: index.php?login=erro');
        
        }

?>


