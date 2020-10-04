<?php
$nombre = $_POST['nombre'];
$asunto = $_POST['asunto'];
$mensaje = $_POST['mensaje'];

echo $nombre;

if (mail('nanotecnologia712@gmail.com', $asunto, $mensaje)){
    echo "mail enviado";
}else{
    echo"correo no enviado";
}
?>
