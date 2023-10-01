<?php

class Calculadora {
    private $a;
    private $b;
    
    public function __construct($a, $b) {
        $this->a = $a;
        $this->b = $b;
    }
    
    public function calcularS() {
        $resultado = $this->a + $this->b;
        return $resultado;
    }

    public function calcularR() {
        $resultado = $this->a - $this->b;
        return $resultado;
    }

    public function calcularD() {
        $resultado = $this->a / $this->b;
        return $resultado;
    }

    public function calcularM() {
        $resultado = $this->a * $this->b;
        return $resultado;
    }
}

if (isset($_GET['opcion'])) {
    $opcion = $_GET['opcion'];
    $a = $_GET['a'];
    $b = $_GET['b'];
    
    $calculadora = new Calculadora($a, $b); 

    switch ($opcion) {
        case 'multiplicacion':
            $resultados = $calculadora->calcularM();
            break;
        case 'division': 
            $resultados = $calculadora->calcularD();
            break;
        case 'suma':
            $resultados = $calculadora->calcularS();
            break;
        case 'resta':
            $resultados = $calculadora->calcularR();
            break;
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Resultado</title>
</head>
<body>
    <?php
    if (isset($resultados)) {
        echo "<h2>Resultado: <span>$resultados</span></h2>";
    }
    ?>
</body>
</html>
