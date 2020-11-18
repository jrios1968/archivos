<?php

//llamando a los campos

$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$mensaje = $_POST['mensaje'];


// Datos para el correo

$destinatario= "josealirios1968@hotmail.com";
$asunto = "Información suministrada desde la pagina web";


// Cuerpo del correo

$carta = "De: $nombre \n";
$carta = "Correo: $correo \n";
$carta = "Telefono: $telefono \n";
$carta = "Mensaje: $mensaje ";


// Enviando Mensaje
mail ($destinatario, $asunto, $carta);
header('Location:mensaje_envio_html.html')



<?



