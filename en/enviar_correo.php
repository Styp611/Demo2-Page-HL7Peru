<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $apellidos = $_POST["apellidos"];
    $correo = $_POST["correo"];
    $telefono = $_POST["telefono"];
    $consulta = $_POST["consulta"];
    $mensaje = $_POST["mensaje"];
    
    // Configurar los datos del correo corporativo
    $destinatario = "presidencia@hl7peru.org";
    $asunto = "Nuevo mensaje de contacto";
    
    // Construir el contenido del correo
    $contenido = "Nombre: $nombre $apellidos\n";
    $contenido .= "Correo electrónico: $correo\n";
    $contenido .= "Teléfono: $telefono\n";
    $contenido .= "Tipo de consulta: $consulta\n";
    $contenido .= "Mensaje:\n$mensaje";
    
    // Enviar el correo
    mail($destinatario, $asunto, $contenido);
    
    // Redireccionar a una página de confirmación
    header("Location: confirmacion.html");
    exit();
}
?>