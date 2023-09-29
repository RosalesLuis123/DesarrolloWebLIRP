<?php
if (isset($_GET['cadena']) && isset($_GET['n'])) {
    $cadena = $_GET['cadena'];
    $n = intval($_GET['n']);

    include 'utiles.php'; // Incluimos el archivo utiles.php
    $utiles = new Utiles($cadena); // Creamos un objeto Utiles
    $cadenaConGuiones = $utiles->aumentarGuiones($n); // Llamamos al método aumentarGuiones

    echo "Cadena con guiones: $cadenaConGuiones";
} else {
    echo "Ingrese una cadena y un número de guiones válidos.";
}
?>
