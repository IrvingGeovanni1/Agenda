<?php
// Verifica si se han enviado datos por el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recibe los datos del formulario
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];
    $confirmar_contrasena = $_POST['confirmar_contrasena'];

    // Verifica si las contraseñas coinciden
    if ($contrasena != $confirmar_contrasena) {
        echo "Las contraseñas no coinciden. Por favor, inténtalo de nuevo.";
        exit; // Detiene la ejecución del script
    }

    // Aquí puedes realizar otras validaciones, como verificar si el correo ya está registrado en la base de datos, etc.

    // Si llegamos hasta aquí, significa que los datos son válidos y podemos proceder a guardarlos en la base de datos
    // Aquí puedes agregar el código para guardar los datos en la base de datos
    // Por ejemplo, usando MySQLi o PDO

    // Por ahora, solo mostraremos un mensaje de éxito y redireccionaremos al usuario a la página de inicio
    // Cambia "index.html" por la ruta de tu página de inicio
    header("Location: Inicio.html");
    exit; // Asegura que el script se detenga después de la redirección
} else {
    // Si se intenta acceder directamente a este archivo sin enviar datos por el formulario, muestra un mensaje de error
    echo "Acceso no autorizado.";
}
?>
