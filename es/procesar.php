<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recuperar los datos del formulario
    $nombre = $_POST["nombre"];
    $apellidos = $_POST["apellidos"];
    $correo = $_POST["correo"];
    $telefono = $_POST["telefono"];
    $institucion = $_POST["institucion"];
    $cargo = $_POST["cargo"];
    $notificaciones = $_POST["notificaciones"];

    // Configurar los detalles del correo electrónico
    $destinatario = "contacto@hl7peru.org"; // Reemplaza con tu dirección de correo electrónico
    $asunto = "Nuevo registro de la Comunidad HL7 Perú";
    $mensaje = "Se ha registrado un nuevo usuario:\n\n";
    $mensaje .= "Nombre: " . $nombre . "\n";
    $mensaje .= "Apellidos: " . $apellidos . "\n";
    $mensaje .= "Correo electrónico: " . $correo . "\n";
    $mensaje .= "Teléfono: " . $telefono . "\n";
    $mensaje .= "Institución laboral: " . $institucion . "\n";
    $mensaje .= "Cargo: " . $cargo . "\n";
    $mensaje .= "Recibir notificaciones: $notificaciones\n";

    // Enviar el correo electrónico
    $headers = "From: " . $correo . "\r\n";
    if (mail($destinatario, $asunto, $mensaje, $headers)) {
        header("Location: confirmacion.html");
    } else {
        echo "Hubo un error al enviar el correo. Por favor, inténtelo de nuevo.";
    }
}
?>