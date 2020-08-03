<?php

if (isset($_POST['enviar'])){
    if(!empty($_POST['nombre'])&& !empty($_POST['email'])&& !empty($_POST['asunto'])&& !empty($_POST['mensaje'])){
        $nombre = $_POST['nombre'];
        $correo = $_POST['email'];
        $asunto = $_POST['asunto'];
        $mensaje = $_POST['mensaje'];
        $header = "From: cristian.py.isc@gmailc.com" . "\r\n";
        $header .= "Reply-To: cristian.py.isc.com" ."\r\n";
        $header .= "X-Mailer: PHP/" . phpversion();
        $submit = mail($nombre,$asunto,$asunto,$mensaje);
    }
}

?>
