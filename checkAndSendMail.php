<?php
    /*echo "<pre>";
    print_r($_GET);
    die();*/

    if(isset($_GET['nombre'])){
        $nombre = $_GET['nombre'];
    }
    if(isset($_GET['asunto'])){
        $asunto = $_GET['asunto'];
    }
    if(isset($_GET['email'])){
        $email = $_GET['email'];
    }
    if(isset($_GET['mensaje'])){
        $mensaje = $_GET['mensaje'];
    }

    $to      = 'sdezerio@gmail.com, pabloratibel@gmail.com';
    $subject = $asunto;
    $message = $mensaje;
    $headers = 'From: '.$nombre. "\r\n" .
               'Reply-To: '.$email. "\r\n" .
               'X-Mailer: PHP/' . phpversion();
        
    
    mail($to, $subject, $message, $headers);
?>