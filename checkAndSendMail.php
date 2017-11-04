<?php
    /*echo "<pre>";
    print_r($_POST['nombre']);
    die();*/

    if(isset($_POST['nombre'])){
        $nombre = $_POST['nombre'];
    }
    if(isset($_POST['asunto'])){
        $asunto = $_POST['asunto'];
    }
    if(isset($_POST['email'])){
        $email = $_POST['email'];
    }
    if(isset($_POST['mensaje'])){
        $mensaje = $_POST['mensaje'];
    }

    $to      = 'sdezerio@gmail.com';
    $subject = $asunto;
    $message = $mensaje;
    $headers = $headers = 'From: '.$nombre. "\r\n" .
                          'Reply-To: '.$email. "\r\n" .
                          'X-Mailer: PHP/' . phpversion();
        
    
    mail($to, $subject, $message, $headers);
?>