<?php
// Iniciar o continuar la sesión
session_start();

// Inicializar la variable $visitas en 0 si la cookie no existe
$visitas = isset($_COOKIE['visitas']) ? $_COOKIE['visitas'] : 0;

// Verificar si la cookie de visitas ya existe
if (isset($_COOKIE['visitas'])) {
    $visitas++;
    // Establecer la nueva cookie con el número actualizado de visitas
    setcookie('visitas', $visitas, time() + 3600 * 24 * 30); // Validez de 30 días
} else {
    // Si la cookie no existe, establecerla con el valor 1
    setcookie('visitas', 1, time() + 3600 * 24 * 30); // Validez de 30 días
}

// Verificar el número de visitas para mostrar el mensaje adecuado
if ($visitas > 5) {
    // Redirigir a la página de encuesta
    header('Location: encuesta.php');
    exit();
}

// Mostrar un mensaje de bienvenida
echo "Bienvenido a nuestro sitio.";
echo "<br>";
echo "Gracias por visitarnos " . $visitas . " veces.";
?>
