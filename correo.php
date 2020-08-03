<?php

$nombre = $_POST['nombre'];
$correo = $_POST['email'];
$asunto = $_POST['asunto'];
$mensaje = $_POST['mensaje'];

//destino para el correo

$destinatario = "cristian.py.isc@gmail.com";
$asunto = "contacto desde nuestro web";

$carta = "De: $nombre \n";
$carta .= "Correo: $correo \n";
$carta .= "Asunto: $asunto \n";
$carta -= "Mensaje: $mensaje \n";

mail($destinatario, $asunto, $carta);

?>
