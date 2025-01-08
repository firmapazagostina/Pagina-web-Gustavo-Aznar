<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recibir los datos del formulario
    $nombre = htmlspecialchars($_POST['nombre']);
    $email = htmlspecialchars($_POST['email']);
    $numero = htmlspecialchars($_POST['numero']);
    $interes = htmlspecialchars($_POST['interes']);

    // Validación básica
    if (empty($nombre) || empty($email) || empty($numero) || empty($interes)) {
        echo "<script>alert('Por favor, completa todos los campos.');</script>";
        exit;
    }

    // Definir el destinatario (tu correo electrónico)
    $para = "afirmapaz22@gmail.com"; // Reemplaza con tu correo real

    // Asunto del correo
    $asunto = "Nuevo mensaje desde el formulario de contacto";

    // El cuerpo del mensaje
    $cuerpo = "Nombre: $nombre\nEmail: $email\n\nInteres:\n$interes\nNumero: $numero\n";

    // Cabeceras del correo
    $cabeceras = "From: $email\r\n";
    $cabeceras .= "Reply-To: $email\r\n";
    $cabeceras .= "X-Mailer: PHP/" . phpversion();

    // Enviar el correo
    if (mail($para, $asunto, $cuerpo, $cabeceras)) {
        echo "<script>alert('¡Gracias por tu mensaje! Nos pondremos en contacto contigo pronto.');</script>";
    } else {
        echo "<script>alert('Hubo un error al enviar tu mensaje. Intenta de nuevo más tarde.');</script>";
    }
}
?>

