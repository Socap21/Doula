<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    $to = "tudouladiana@gmail.com";  // Reemplaza con el correo electrónico donde quieres recibir los mensajes
    $subject = "Nuevo mensaje de Tu doula Diana";
    $headers = "From: " . $email . "\r\n" .
               "Reply-To: " . $email . "\r\n" .
               "Content-Type: text/html; charset=UTF-8\r\n";

    $body = "<p>Nombre: $name</p>" .
            "<p>Correo electrónico: $email</p>" .
            "<p>Mensaje:</p>" .
            "<p>$message</p>";

    if (mail($to, $subject, $body, $headers)) {
        echo "Gracias por tu mensaje. Nos pondremos en contacto contigo pronto.";
    } else {
        echo "Lo sentimos, ocurrió un error al enviar tu mensaje. Por favor intenta nuevamente.";
    }
}
?>