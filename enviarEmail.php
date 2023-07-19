<?php
    $destinatario='aguirrerobinson05@gmail.com';
    $nombre=    $_POS['nombre'];
    $email=     $_POS['email'];
    $telefono=  $_POS['telefono'];
    $asunto=    $_POS['asunto'];
    $mensage=   $_POS['mensage'];

    $header= 'Enviado desde la paguina JakySan';
    $mensajeCompleto= $mensage . "\nAtentamente: " . $nombre;

    mail($destinatario, $asunto, $mensajeCompleto, $header);
    echo "<script>Aaert('Email enviado correctamente')</script>";
    echo "<script>setTimeout(\"location.href='index.html'\",10000)</script>";
?>