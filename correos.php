<?php
    $destinatario = 'tucorreo@gmail.com';
    // Correo del destinatario

    // Utilizar los "name"
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $edad = $_POST['edad'];
    $asunto = $_POST['asunto'];

    $header = "Enviado desde Satoru Web";
    $mensajeCompleto = $asunto . "\nAtentamente: ". $nombre;

    mail($destinatario, $asunto, $mensajeCompleto, $header);
    echo "<script>alert('Correo Enviado Exitosamente')</script>";
    echo "<script>setTimeout(\"location.href='contacto.html'\",1000)</script>";
?>