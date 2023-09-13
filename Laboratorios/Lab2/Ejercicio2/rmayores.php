<?php
function eliminarMayores($arreglo, $mayor) {
    $resultado = array();

    foreach ($arreglo as $numero) {
        if ($numero <= $mayor) {
            $resultado[] = $numero;
        }
    }

    return $resultado;
}
?>
