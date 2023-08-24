<?php
$numeros = range(1, 20);
$numerosPares = array();
$numerosImpares = array();
foreach ($numeros as $numero) {
    if ($numero % 2 == 0) {
        $numerosPares[] = $numero;
    } else {
        $numerosImpares[] = $numero;
    }
}
echo "Números pares: ";
print_r($numerosPares);

echo "Números impares: ";
print_r($numerosImpares);
?>
