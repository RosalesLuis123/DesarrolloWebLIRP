<?php
if (isset($_POST['cadena'])) {
    $cadena = $_POST['cadena'];
    $cadenaInvertida = strrev($cadena);
    echo "Cadena original: $cadena<br>";
    echo "Cadena invertida: $cadenaInvertida";
} else {
    echo "No se proporcionó una cadena.";
}
?>
