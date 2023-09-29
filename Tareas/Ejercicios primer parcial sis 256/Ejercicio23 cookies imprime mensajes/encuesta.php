<?php
// Iniciar o continuar la sesión
session_start();

// Manejar la lógica de la encuesta aquí, por ejemplo:
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Procesar los datos de la encuesta aquí (guardar las respuestas, etc.)
    
    // Reiniciar el contador de visitas (eliminar la cookie)
    setcookie('visitas', null, -1);

    // Redirigir de nuevo a la página principal
    header('Location: index.php');
    exit();
}

// Mostrar el formulario de la encuesta
echo "Indique si le gusta este sitio:";
echo "<form action='' method='post'>";
echo "<label>a) Buena presentación</label> <input type='radio' name='opcion' value='buena_presentacion' required>";
echo "<label>b) No me gustó</label> <input type='radio' name='opcion' value='no_me_gusto' required>";
// Agregar otras opciones aquí
echo "<input type='submit' value='Enviar'>";
echo "</form>";
?>
